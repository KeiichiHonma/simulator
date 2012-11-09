<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$is_auth = $authManager->validateLogin(TRUE);


require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($sid);
$con->t->assign('simulator',$simulator);

//iphone
require_once('simulator/util.php');
$con->t->assign('iphone',simulatorUtil::getIphone($simulator));

//thumbnail
/*if(is_null($simulator[0]['simulator_images'])){
    $images = unserialize($simulator[0]['application_images']);
}else{
    $images = unserialize($simulator[0]['simulator_images']);
}
$con->t->assign('thumbnails',$images['screenshots']);*/


$con->append();
?>
