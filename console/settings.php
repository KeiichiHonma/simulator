<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/licence.php');
$user_licence = new userLicence();
$user_licence->setUserLicence($authManager->uid);
if(!$user_licence->user){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_USER_EXISTS);
}
$con->t->assign('user',$user_licence->user);

//post
if($con->isPost){
    require_once('user/check.php');
    checkUserUpdate::checkError();
    $is_check = checkUserUpdate::safeExit();
    if($is_check){
        require_once('user/handle.php');
        $user_handle = new userHandle();
        $uid = $user_handle->updateRow($user_licence->user[0]['_id']);
        if(!$uid){
            require_once('fw/errorManager.php');
            errorManager::throwError(E_CMMN_HANDLE_USER_STOP);
        }
        $con->safeExitRedirect('/console/');
    }
}else{
    $_POST['scroll'] = $user_licence->user[0]['col_scroll'];
    $_POST['position'] = $user_licence->user[0]['col_position'];
}

require_once('user/licence.php');
$user_licence = new userLicence();
$user_licence->setUserLicence($authManager->uid);

$con->append();
?>
