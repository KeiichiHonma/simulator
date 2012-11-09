<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($sid);
$image = unserialize($simulator[0]['simulator_images']);
/*unset($image['screenshots'][4]);
unset($image['screenshots'][5]);
unset($image['screenshots'][6]);
unset($image['screenshots'][7]);
var_dump(serialize($image));
die();*/

$con->t->assign('simulator',$simulator);

//iphone
require_once('simulator/util.php');
$iphone = simulatorUtil::getIphone($simulator);
$con->t->assign('iphone',$iphone);
$con->t->assign('count_screenshots',$iphone['count_screenshots']);
$con->append();
?>
