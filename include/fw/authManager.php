<?php
class authManager
{
    //以下認証後のみセットされる
    //user
    public $uid;
    public $user;
    public $face;
    public $count;
    public $licence;
    
    function __construct(){

    }

    public function makeHash($uid){
        return md5($uid.SECRET_KEY);
    }

    public function validatePassword( $password, $salt, $hash )
    {
        return (strcasecmp(sha1($salt.$password), $hash) === 0);
    }

    //------------------------------------------------------
    // セッションベースログインチェック
    //------------------------------------------------------
    protected function isLogin() {
        global $con;
        if($con->session->get( SESSION_U_UID ) !== FALSE && $con->session->get( SESSION_U_HASH ) !== FALSE){
            return strcasecmp($con->session->get( SESSION_U_HASH ),self::makeHash($con->session->get( SESSION_U_UID ))) == 0 ? TRUE : FALSE;
        }else{
            return FALSE;
        }
    }

    public function validateLogin($isMust = false){
        $is_auth = true;
        if(!$this->isLogin()){
            if($isMust == true){
                global $con;
                $con->base->redirectPage('auth/facebook');
            }else{
                $is_auth = false;
                return false;
            }
        }
        $this->readyUser();
        global $con;
        $con->t->assign('is_auth',$is_auth);
        return true;
    }
    
    //------------------------------------------------------
    // ログイン情報セット
    //------------------------------------------------------

    public function setLogin($uid,$name){
        global $con;
        $con->session->set(SESSION_U_HASH,self::makeHash($uid));
        $con->session->set(SESSION_U_UID,$uid);
        $con->session->set(SESSION_U_NAME,$name);
    }

    public function unsetLogin(){
        if (isset($_COOKIE[WTC_SESSION_NAME])) {
            setcookie(WTC_SESSION_NAME, '', time() - 1800, '/');
        }
        $_SESSION = array();
        session_destroy();
    }

    //------------------------------------------------------
    // ログイン変数セット
    //------------------------------------------------------
    public function readyUser()
    {
        global $con;
        $this->uid = $con->session->get(SESSION_U_UID);
        $this->user = $con->session->get(SESSION_U_NAME);
        $this->face = $con->session->get(SESSION_U_FACE);
    }

}
?>