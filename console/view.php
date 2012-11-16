<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($sid);
/*$image = unserialize($simulator[0]['simulator_mobile_images']);
var_dump($image);
die();*/
/*unset($image['screenshots'][4]);
unset($image['screenshots'][5]);
unset($image['screenshots'][6]);
unset($image['screenshots'][7]);
var_dump(serialize($image));
die();*/

$con->t->assign('simulator',$simulator);
//popapps url make
$popapps_url = SIMURLSSL.'/popapps?sid='.$sid;

//position
if( strcasecmp($simulator[0]['col_position'],POSITION_RIGHT) != 0 ){
    $popapps_url .= '&p='.$simulator[0]['col_position'];
}

//scroll
if( strcasecmp($simulator[0]['col_scroll'],SCROLL_BOTTOM) != 0 ){
    $popapps_url .= '&s='.$simulator[0]['col_scroll'];
}
$con->t->assign('popapps_url',$popapps_url);

//iphone
$iphone = utilManager::getIphone($simulator,true);
$con->t->assign('iphone',$iphone);
$con->t->assign('count_screenshots',$iphone['mobile']['count_screenshots']);
$con->append();
?>
