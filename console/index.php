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
//home画面
$iphone = utilManager::getIphoneHome($user_licence->user);
$con->t->assign('iphone',$iphone);

$con->t->assign('home_url',utilManager::getPopAppsHomeURL($authManager->uid,$user_licence->user));


require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic(TRUE);
$simulators = $simulator_logic->getUserSimulator($authManager->uid);

$con->t->assign('simulators',$simulators);
$con->append();
?>
