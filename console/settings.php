<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($sid);
if(!$simulator){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_APP_EXISTS);
}
$con->t->assign('simulator',$simulator);

//direction change message
$con->t->assign('direction_change_message','Change will initialize a screenshots picture.');

//post
if($con->isPost){
    require_once('simulator/check.php');
    checkSimulatorUpdate::checkError();
    $is_check = checkSimulatorUpdate::safeExit();
    if($is_check){
        //初期化
        $mobile_images = false;
        $console_images = false;
        if(strcasecmp($simulator[0]['col_direction'],$_POST['direction']) != 0){
            require_once "fw/cloudinaryUploader.php";
            $mobile_images = unserialize($simulator[0]['simulator_mobile_images']);
            $console_images = unserialize($simulator[0]['simulator_console_images']);
            cloudinaryUploader::rollback($mobile_images['screenshots']);
            $mobile_images['screenshots'] = array();
            $console_images['screenshots'] = array();
        }
        require_once('simulator/handle.php');
        $simulator_handle = new simulatorHandle();
        $sid = $simulator_handle->updateRow($sid,$_POST['direction'],$mobile_images,$console_images);
        if(!$sid){
            require_once('fw/errorManager.php');
            errorManager::throwError(E_CMMN_HANDLE_SIM_STOP);
        }
        $con->safeExitRedirect('/console/view/sid/'.$sid);
    }
}else{
    $_POST['direction'] = $simulator[0]['col_direction'];
    $_POST['domain'] = $simulator[0]['col_domain'];
    $_POST['title'] = $simulator[0]['col_title'];
    $_POST['link'] = $simulator[0]['col_link'];
    $_POST['scroll'] = $simulator[0]['col_scroll'];
    $_POST['position'] = $simulator[0]['col_position'];
}

require_once('user/licence.php');
$user_licence = new userLicence();
$user_licence->setUserLicence($authManager->uid);

$con->append();
?>
