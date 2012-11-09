<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$is_auth = $authManager->validateLogin(TRUE);


require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($sid);
/*var_dump(unserialize($simulator[0]['application_images']));
die();*/
$con->t->assign('simulator',$simulator);

//iphone
require_once('simulator/util.php');
$iphone = simulatorUtil::getIphone($simulator);
$con->t->assign('iphone',$iphone);
$con->t->assign('count_screenshots',$iphone['count_screenshots']);
$con->append();
?>
