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

$con->append();
?>
