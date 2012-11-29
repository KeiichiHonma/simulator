<?php
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic(TRUE);
$simulator = $simulator_logic->getAppSimulator($sid);

if(!$simulator){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_APP_EXISTS);
}
$con->t->assign('simulator',$simulator);

//popapps url make
$con->t->assign('popapps_url',utilManager::getPopAppsURL($sid,$simulator));

//iphone
$iphone = utilManager::getIphone($simulator,true);
$con->t->assign('iphone',$iphone);

$con->t->assign('count_screenshots',$iphone['mobile']['count_screenshots']);

if($simulator[0]['col_direction'] == DIRECTION_HORIZON){
    $page = 'horizon';
}else{
    $page = 'vertical';
}
$con->append('console/popapps/'.$page);
?>
