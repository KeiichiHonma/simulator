<?php
require_once('fw/prepend.php');

require_once('facebook/authApi.php');
$authApi = new authApi();
$fbid = $authApi->auth('/auth/facebook');

require_once('fw/authManager.php');
$authManager = new authManager();

//page判定
$page = '/console/';
if(isset($_GET['page'])){
    $page = urldecode($_GET['page']);
}
//uidの存在チェック
require_once('user/logic.php');
$user_logic = new userLogic();

//uidのDBチェック
if( !$user = $user_logic->getUserFacebook($fbid) ){
    require_once('facebook/userApi.php');
    $userApi = new userApi();
    $userApi->setUser($fbid);//user未登録
    $userApi->doFQL();//実行

    //fql情報取り出し
    if(!$is_user){
        //ユーザー情報登録
        $fb_user = $userApi->getUser();

        if($fb_user !== false){
            //cloudinaryに画像保存
            //$fb_user[0]['uid'],$fb_user[0]['pic_square']

            //DB保存
            if($fid !== FALSE){
                require_once('user/handle.php');
                $user_handle = new userHandle();
                $uid = $user_handle->addRow($fb_user[0]['uid'],$fb_user[0]['name'],$fb_user[0]['email']);
                if(!$uid){
                    require_once('fw/errorManager.php');
                    errorManager::throwError(E_CMMN_INITIALIZE);
                }
            }
            $con->db->commit();

            //認証情報セット
            $authManager->setLogin($uid,$fb_user[0]['name']);
            $con->safeExitRedirect($page);
        }
    }
    //ありえない
    
}else{
    //ログイン処理
    $authManager->setLogin($user[0]['_id'],$user[0]['col_name']);
    $con->safeExitRedirect($page);
}
$con->safeExitRedirect('/');
?>