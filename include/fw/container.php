<?php
require_once('fw/define.php');
require_once('fw/database.php');//db
require_once('fw/template.php');//template
require_once('fw/base.php');//template
require_once('fw/sessionManager.php');
require_once('fw/csrf.php');//csrf処理
class container
{
    public $db = null;
    public $isThrowDBError = true;
    public $t = null;
    public $base = null;
    //public $common_locale;//共通翻訳ファイル
    public $locale;//ファイル別翻訳ファイル
    
    //public $user = null;
    public $isPost = FALSE;
    public $ini;
    public $isDebug = FALSE;
    public $isPaypalSandbox = FALSE;
    public $isStage = FALSE;
    public $isMaintenance = FALSE;
    public $isConsole = FALSE;
    public $lastJudge = TRUE;//ロールバックかコミットの判断
    public $session;
    public $csrf;

    public $pagepath;
    public $pagename;
    public $tail_number;
    
    public $isIluna = FALSE;//メンテナンス中の表示

    public $url;
    public $m_url;
    public $absolute_path;//相対パスだとm.を見てしまうため、絶対パスとして持っている必要があるため

    function __construct($isSimple = FALSE){
        //page set メンテナンスモード除去ページ判定で先に必要
        preg_match('/\/([\D]+)\./i', $_SERVER['SCRIPT_NAME'], $matches);
        $this->pagepath = $matches[1];
        $this->pagename = basename($_SERVER['SCRIPT_NAME'],'.php');

        $cache = $this->pagename == 'input' || $this->pagename == 'login' ? TRUE : FALSE;
        
        $this->t = new template();
        $this->checkIni();
        $this->t->readyTemplate($this->isDebug);
        
        //is console ?
        $this->isConsole = preg_match("/^console/", $matches[1]) == 1 ? TRUE : FALSE;
        //locale
        $this->checkLocale();

        //position include.ロケール変数が必要
        $this->isConsole ? require_once('fw/systemPosition.php') : require_once('fw/commonPosition.php');

        //以下はシンプルモードでは呼ばない
        if(!$isSimple){
            $this->session = new sessionManager($cache);//セッション開始
            $this->db = new database();
            $this->base = new base();
            $this->tail_number = time();
            $this->t->assign('tail_number',$this->tail_number);//末尾の数字
            include('fw/css_path.php');
            $this->t->assign('path',$path);
            $this->t->assign('ssl_path',$ssl_path);
            
        }
    }

    public function throwExceptionError($e,$isThrow = TRUE){
        require_once('fw/mailManager.php');
        $mailManager = new mailManager();
        $mailManager->sendHalt($e);
        if($isThrow){
            require_once('fw/errorManager.php');
            errorManager::throwError(E_CMMN_REQUEST_ERROR);
        }
    }

    //ドメイン版
    private function checkLocale(){
        switch ($_SERVER['SERVER_NAME']){
            case SERVER_NAME_REDIRECT:
                //環境変数自動判定
                $this->checkLanguage();
                
                define('LOCALE',LOCALE_JA);//日本語
                $this->t->assign('ssl_path',LOCALE.'_JP');//facebook対応
            break;
            
            case SERVER_NAME_JA:
                define('LOCALE',LOCALE_JA);//日本語
                $this->t->assign('ssl_path',LOCALE.'_JP');//facebook対応
            break;

            default:
                define('LOCALE',LOCALE_EN);//英語
                $this->t->assign('og_locale',LOCALE.'_US');//facebook対応
            break;
        }
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/include/locale/'.LOCALE.$_SERVER['SCRIPT_NAME'])){
            require_once('locale/'.LOCALE.$_SERVER['SCRIPT_NAME']);//ファイル別翻訳ファイル
        }
        $this->locale = $locale;//翻訳内容
    }

    private function checkLanguage(){
        if(strlen($_SERVER['HTTP_ACCEPT_LANGUAGE']) > 0 ){
            $languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            foreach ($languages as $language) {
                if (preg_match('/^ja/i', $language)) {
                    header( "HTTP/1.1 301 Moved Permanently" );
                    header("Location: ".'http://'.SERVER_NAME_JA.'/');
                    die();
                }else{
                    header( "HTTP/1.1 301 Moved Permanently" );
                    header("Location: ".'http://'.SERVER_NAME_EN.'/');
                    die();
                }
            }
        }else{
            define('LOCALE',LOCALE_EN);//英語
            $this->t->assign('og_locale',LOCALE.'_US');//facebook対応
        }
    }

    //locale 変数 変更
    public function updateLocaleValue($key,$value){
        $this->locale[$key] = $value;
    }

    //localeファイル直指定。特集ページ等
    public function getLocaleFile($file_path){
        require_once('locale/'.LOCALE.$file_path.'.php');//ファイル別翻訳ファイル
    }

    public function checkPostCsrf(){
        require_once('fw/csrf.php');//csrf処理
        $this->csrf = new csrf();
        if(strcasecmp($_SERVER['REQUEST_METHOD'],'POST') === 0){
            $this->isPost = TRUE;
            //check
            $this->csrf->validateToken(@$_POST['csrf_ticket']);
        }
    }

    public function readyPostCsrf(){
        $this->csrf = new csrf();
        $this->csrf->getToken();
    }

    private function checkIni(){
        $this->ini = parse_ini_file(SETTING_INI, true);

        if($this->ini['common']['isDebug'] == 0){//本番
            $this->isDebug = FALSE;
            define('SERVER_NAME_REDIRECT','popapp-simulator.com');
            define('SERVER_NAME_JA',      'ja.popapp-simulator.com');
            define('SERVER_NAME_EN',      'www.popapp-simulator.com');
        }elseif($this->ini['common']['isDebug'] == 1){//デバッグモード
            $this->isDebug = TRUE;
            define('SERVER_NAME_REDIRECT','simulator.813.co.jp');
            define('SERVER_NAME_JA',      'ja.simulator.813.co.jp');
            define('SERVER_NAME_EN',      'www.simulator.813.co.jp');
        }
        $this->t->assign('debug',$this->isDebug);
        
        //paypal////////////////////////////////////////////////////////////////////////
        if( strcasecmp($this->ini['paypal']['sandbox'],1) == 0){
            $this->isPaypalSandbox = TRUE;
        }else{
            $this->isPaypalSandbox = FALSE;
        }
        $this->t->assign('paypal_sandbox',$this->isPaypalSandbox);
        
        define('SIMURL',            'http://'.$_SERVER['SERVER_NAME']);
        define('SIMURLSSL',         'https://'.$_SERVER['SERVER_NAME']);

        //メンテナンスモード
        if($this->ini['common']['isMaintenance'] == 1){
            //ilunaはOK
            if($this->ini['common']['isStage'] == 1){//ステージングサーバモード
                $ip = '192.168.0.52';
            }
            
            if($this->ini['common']['isDebug'] == 0){//本番
                $ip = '210.189.109.177';
            }
            
            if(!isset($_SERVER['REMOTE_ADDR']) || !isset($ip) || strcasecmp($_SERVER['REMOTE_ADDR'],$ip) != 0){
                header( "HTTP/1.1 302 Moved Temporarily" );
                header("Location: ".SIMURL.'/maintenance');
                die();
            }
        }
        
    }

    public function safeExitRedraw(){
        if($this->lastJudge) $this->db->commit();
        header("Location: ".$_SERVER['REQUEST_URI']);
        die();
    }

    public function safeExitRedirect($page,$isSSL = FALSE){
        if($this->lastJudge) $this->db->commit();
        $isSSL ? header("Location: ".SIMURLSSL.$page) : header("Location: ".SIMURL.$page);
        die();
    }

    public function safeExit(){
        if($this->lastJudge) $this->db->commit();
    }

    //no commit
    public function errorExitRedirect($page,$isSSL = FALSE){
        //header( "HTTP/1.1 301 Moved Permanently" );
        $isSSL ? header("Location: ".SIMURLSSL."/".$page) : header("Location: ".SIMURL."/".$page);
        die();
    }

    public function append($page = null){
        positionManager::setSitePosition();
        $this->t->assign('locale',$this->locale);
        // display it
        is_null($page) ? $this->t->display($this->pagepath.'.tpl') : $this->t->display($page.'.tpl');
    }

    //リダイレクト用
    function redraw($url = SIMURL,$isPCURL = FALSE){
        if($this->lastJudge) $this->db->commit();
        header("Location: ".$url.$_SERVER['REQUEST_URI']);
        die();
    }
}
?>