<?php
require_once('fw/handleManager.php');
require_once('file/parameter.php');
class filesHandle extends handleManager
{
    public $parameter;
    public $dir_file;
    public $_toCopy = array(); // may move if it is uploaded file
    public $_toRemove = array();
    
    
    //face用
    public $face_stream = '';
    public $face_ext = '';
    public $face_width = '';
    public $face_height = '';
    public $face_alt = '';
    
    function __construct(){
    }

    public function saveURLFile($uid,$url){
        
        //$url = 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/572882_100002403327372_1942035291_n.jpg';
        
        //拡張子
        $this->face_ext = substr($url,-3);

        //名前
        $file_name = $uid.'.'.$this->face_ext;
        
        //ファイルの横縦
        $ary_image_size = getimagesize($url);
        $this->face_width = $ary_image_size['0'];
        $this->face_height = $ary_image_size['1'];
        //mime
        $file_mime = $ary_image_size['mime'];
        
        $this->face_stream = file_get_contents($url);
        
        //ファイルサイズ
        $file_size = ceil(strlen($this->face_stream)/1024);//KB
        
        $time = time();
        $parameter->parameter['ctime'] = $time;
        $parameter->parameter['mtime'] = $time;
        
        $parameter->parameter['name'] = $file_name;
        $parameter->parameter['size'] = $file_size;
        $parameter->parameter['mime'] = $file_mime;
        $parameter->parameter['extension'] = $this->face_ext;
        $parameter->parameter['width'] = $this->face_width;
        $parameter->parameter['height'] = $this->face_height;
        $parameter->parameter['alt'] = $file_name;
        
        //parent::addDebug(T_FILES,$parameter);
        
        $fid = parent::addRow(T_FILES,$parameter);
        if($fid !== FALSE){
            $this->readyPut($fid,$this->face_ext);
            return $fid;
        }else{
            //エラースロー
            return FALSE;
        }
        return FALSE;
    }


    public function addRow($file_object,$loop_number = FALSE){
        $this->parameter = new filesParameter($file_object,$loop_number);//追加のたびにnew
        $this->parameter->setAdd();
        //parent::addDebug(T_FILES,$this->parameter);
        $fid = parent::addRow(T_FILES,$this->parameter);
        if($fid !== FALSE){
            $this->readyUpload($fid);
            return $fid;
        }else{
            //エラースロー
        }
        
    }
    
    //以下adminだけの権限
    public function updateRow($fid,$file_object = null,$loop_number = FALSE){
        $this->parameter = new filesParameter($file_object,$loop_number);//追加のたびにnew
        $this->parameter->setUpdate($fid);
        //parent::updateDebug(T_FILES,$this->parameter);
        parent::updateRow(T_FILES,$this->parameter);
        if(!is_null($file_object)){
            $this->readyUploadToRemove($fid);
            return $fid;
        }
    }

    public function deleteRow($fid){
        //削除には拡張子が必要
        require_once('file/logic.php');
        $logic = new filesLogic();
        $file_info = $logic->getRow($fid);
        $this->parameter = new filesParameter(null,null,null);
        $this->parameter->setDelete($fid);
        parent::deleteRow(T_FILES,$this->parameter);
        $this->readyRemove($fid,$file_info[0]['col_extension']);
        return $fid;
    }

    public function getFilePath($fid,$ext){
        $this->dir_file = '';//初期化．しないと前のパスを記憶してまう
        //ディレクトリとファイル名
        $dir1 = '0';
        $dir2 = '0';
        $file = '';
        
        $len = strlen( $fid );
        if ( $len > 6 ) {
            $limit = $len - 6;
            $dir1 = substr( $fid, 0, $limit );
            $dir2 = substr( $fid, $limit, 3 );
            $file = substr( $fid, $limit + 3, 3 );
        } else if ( $len > 3 ) {
            $limit = $len - 3;
            $dir2 = substr( $fid, 0, $limit );
            $file = substr( $fid, $limit, 3 );
        } else {
            $file = $fid;
        }
        $t = FILES_PATH;
        if ( ! is_dir( $t ) )
        {
            require_once('fw/errorManager.php');
            errorManager::throwError(E_SYSTEM_DIR_NO_EXIST);
        }
        $t .= "/${dir1}";
        if ( ! is_dir( $t ) )
        {
            require_once('fw/errorManager.php');
            errorManager::throwError(E_SYSTEM_DIR_NO_EXIST);
        }
        $t .= "/${dir2}";
        if ( ! is_dir( $t ) )
        {
            require_once('fw/errorManager.php');
            errorManager::throwError(E_SYSTEM_DIR_NO_EXIST);
        }
        //is_readable -- ファイルが読み込み可能かどうかを知る
        if ( is_file( $t . "/${file}".'.'.$ext ) && is_readable( $t . "/${file}".'.'.$ext ) )
        {
            $this->dir_file = "/${dir1}/${dir2}/${file}".'.'.$ext;
        }
        return FILES_DIR.$this->dir_file;
    }

    //保存ディレクトリ命名ロジック+作成
    private function formatPath( $fid,$mkdir = FALSE,$ext = null ){
        if(is_null($ext)) $ext = $this->parameter->file_extension;
        $blnStatus = true;
        //ディレクトリとファイル名
        $dir1 = '0';
        $dir2 = '0';
        $file = '';

        $len = strlen( $fid );
        if ( $len > 6 ) {
            $limit = $len - 6;
            $dir1 = substr( $fid, 0, $limit );
            $dir2 = substr( $fid, $limit, 3 );
            $file = substr( $fid, $limit + 3, 3 );
        } else if ( $len > 3 ) {
            $limit = $len - 3;
            $dir2 = substr( $fid, 0, $limit );
            $file = substr( $fid, $limit, 3 );
        } else {
            $file = $fid;
        }

        //登録処理、TRUEでくる
        if ( $mkdir ) {
            $t = FILES_PATH;
            if ( ! is_dir( $t ) )
            {
                mkdir( $t );
            }
            $t .= "/${dir1}";
            if ( ! is_dir( $t ) )
            {
                mkdir( $t );
            }
            $t .= "/${dir2}";
            if ( ! is_dir( $t ) )
            {
                mkdir( $t );
            }
            //is_writable -- ファイルが書き込み可能かどうかを調べる
            if( !is_writable( $t ) )
            {
                require_once('fw/errorManager.php');
                errorManager::throwError(E_SYSTEM_DIR_NO_WRITE);
            }
            //既にファイルが存在していること自体ありえない？
            if ( is_file( $t . "/${file}".'.'.$ext ) &&
            !is_writable( $t . "/${file}".'.'.$ext ) )
            {
                require_once('fw/errorManager.php');
                errorManager::throwError(E_SYSTEM_FILE_EXIST);
            }
            //ファイル作成のため
            $this->dir_file = $t . "/${file}".'.'.$ext;
        //削除処理、FALSEでくる
        } else {
            $dir = FILES_PATH."/${dir1}/${dir2}";
            //is_writable -- ファイルが書き込み可能かどうかを調べる
            if( !is_writable( $dir ) )
            {
                require_once('fw/errorManager.php');
                errorManager::throwError(E_SYSTEM_DIR_NO_WRITE);
            }
            if ( is_file( "${dir}/${file}".'.'.$ext ) &&
            !is_writable( "${dir}/${file}".'.'.$ext ) )
            {
                require_once('fw/errorManager.php');
                errorManager::throwError(E_SYSTEM_FILE_NO_WRITE);
            }
            $this->dir_file = "${dir}/${file}".'.'.$ext;
        }
        return $blnStatus;
    }

    //urlファイルのプット
    public function readyPut($fid,$ext){
        $this->formatPath( $fid,FALSE);
        file_put_contents($this->dir_file.$ext,$this->face_stream);
        chmod($this->dir_file.$ext,0666);
    }

    //削除と追加を同時に準備＝更新
    //既存ファイルの拡張子チェックロジックを入れた
    public function readyPutToRemove($fid,$ext,$date){
        //削除パス生成
        $this->formatPath( $fid,FALSE);
        
        //ファイル削除用
        $this->_toRemove[] = $this->dir_file;
        
        //保存パス生成
        $this->formatPath( $fid,TRUE);
        file_put_contents($this->dir_file,$data);
        chmod($this->dir_file.$ext,0666);
    }

    //ファイルをアップロードする用意
    public function readyUpload($fid){
        //保存パス生成
        $this->formatPath( $fid,TRUE );
        //ファイルコピー
        $cp = array( $this->parameter->file_tmp,   // from 
                     $this->dir_file    // to
                     );
        $this->_toCopy[] = $cp;
    }

    //削除と追加を同時に準備＝更新
    public function readyRemove($fid,$ext){
        //保存パス生成
        $this->formatPath($fid,FALSE,$ext);//$ext必要
        //ファイル削除用
        $this->_toRemove[] = $this->dir_file;
    }
    
    //削除と追加を同時に準備＝更新
    //既存ファイルの拡張子チェックロジックを入れた
    public function readyUploadToRemove($fid){
        //削除パス生成
        $this->formatPath( $fid,FALSE);
        
        //ファイル削除用
        $this->_toRemove[] = $this->dir_file;
        //保存パス生成
        $this->formatPath( $fid,TRUE);
        //ファイルコピー用
        $cp = array( $this->parameter->file_tmp,   // from 
                     $this->dir_file    // to
                     );
        $this->_toCopy[] = $cp;
    }

    //ファイルコピーコミット
    public function file_commit(){
        $blnStatus = true;
        
        //先に削除しないと？
        foreach( $this->_toRemove as $rm )
        {
            @unlink( $rm );
        }
        
        foreach( $this->_toCopy as $cp )
        {
            $from = $cp[0];
            $to = $cp[1];
            //move_uploaded_file -- 新しい位置にアップロードされたファイルを移動する
            if(move_uploaded_file( $from, $to )){
                chmod($to,0666);
            }else{
                require_once('fw/errorManager.php');
                errorManager::throwError(E_SYSTEM_FILE_NOT_COPY);
            }
        }

        $this->_toCopy = array();
        $this->_toRemove = array();

        return $blnStatus;
    }
}
?>
