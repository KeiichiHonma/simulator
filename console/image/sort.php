<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);
if($con->isPost && isset($_POST['image_sort']) && $new_keys = explode(',',$_POST['image_sort']) ){
    var_dump($_POST);
die();
var_dump($new_keys);
die();
    require_once('simulator/logic.php');
    $simulator_logic = new simulatorLogic();
    $simulator = $simulator_logic->getAppSimulator($sid);

    $new_images = array();
    if(is_null($simulator[0]['simulator_images'])){
        $images = unserialize($simulator[0]['application_images']);
    }else{
        $images = unserialize($simulator[0]['simulator_images']);
    }

    foreach ($new_keys as $key => $index){
        //追加ファイルがある場合
        if(isset($_POST['$index'])){
        
        }
        $new_images['screenshots'][$key] = $images['screenshots'][$index];
    }
    //logo
    $new_images['logo'] = $images['logo'];
    //sortする機能は有料ユーザーのみ
    require_once('simulator/handle.php');
    $simulator_handle = new simulatorHandle();

    //add
    $sid = $simulator_handle->updateImagesRow($sid,$new_images);
    if(!$sid){
        require_once('fw/errorManager.php');
        errorManager::throwError(E_CMMN_HANDLE_SIM_STOP);
    }

    $con->safeExitRedirect('/console/view/sid/'.$simulator[0]['simulator_id']);
}
$con->safeExitRedirect('/console/view/sid/'.$sid);
?>
