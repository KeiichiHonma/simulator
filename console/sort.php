<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);
if($con->isPost && isset($_POST['image_sort']) && $new_keys = explode(',',$_POST['image_sort']) ){

    require_once('user/logic.php');
    $user_logic = new userLogic();
    $user = $user_logic->getOneUser($authManager->uid);

    require_once('simulator/logic.php');
    $simulator_logic = new simulatorLogic();
    $simulator = $simulator_logic->getAppSimulator($sid);

    $new_user_images = array();
    $new_console_images = array();
    
    if(is_null($user[0]['col_user_images'])){
        //$mobile_images = unserialize($simulator[0]['application_mobile_images']);
        //$console_images = unserialize($simulator[0]['application_console_images']);
    }else{
        $user_images = unserialize($user[0]['col_user_images']);
    }
    foreach ($new_keys as $key => $index){
        $new_user_images[$index] = $user_images[$index];
    }

    //sortする機能は有料ユーザーのみ
    require_once('user/handle.php');
    $user_handle = new userHandle();

    //add
    $uid = $user_handle->updateImagesRow($authManager->uid,$new_user_images);
    if(!$uid){
        require_once('fw/errorManager.php');
        errorManager::throwError(E_CMMN_SORT_USERS_STOP);
    }
}
$con->safeExitRedirect('/console/');
?>
