<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);
if($con->isPost && isset($_POST['image_sort']) && $new_keys = explode(',',$_POST['image_sort']) ){
    require_once('simulator/logic.php');
    $simulator_logic = new simulatorLogic();
    $simulator = $simulator_logic->getAppSimulator($sid);

    $new_mobile_images = array();
    $new_console_images = array();
    if(is_null($simulator[0]['simulator_mobile_images'])){
        $mobile_images = unserialize($simulator[0]['application_mobile_images']);
        $console_images = unserialize($simulator[0]['application_console_images']);
    }else{
        $mobile_images = unserialize($simulator[0]['simulator_mobile_images']);
        $console_images = unserialize($simulator[0]['simulator_console_images']);
    }

    foreach ($new_keys as $key => $index){
        $new_mobile_images['screenshots'][$key] = $mobile_images['screenshots'][$index];
        $new_console_images['screenshots'][$key] = $console_images['screenshots'][$index];
    }
    //logo
    $new_mobile_images['logo'] = $mobile_images['logo'];
    //sortする機能は有料ユーザーのみ
    require_once('simulator/handle.php');
    $simulator_handle = new simulatorHandle();

    //add
    $sid = $simulator_handle->updateImagesRow($sid,$new_mobile_images,$new_console_images);
    if(!$sid){
        require_once('fw/errorManager.php');
        errorManager::throwError(E_CMMN_HANDLE_SIM_STOP);
    }

    $con->safeExitRedirect('/console/view/sid/'.$simulator[0]['simulator_id']);
}
$con->safeExitRedirect('/console/view/sid/'.$sid);
?>
