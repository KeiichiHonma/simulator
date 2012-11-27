<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/licence.php');
$user_licence = new userLicence();
$user_licence->setUserLicence($authManager->uid);

//home画面
$iphone = utilManager::getIphoneHome($user_licence->user);
$con->t->assign('iphone',$iphone);

$home_url = SIMURLSSL.'/popapps_home?uid='.$authManager->uid;
$con->t->assign('home_url',$home_url);


require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulators = $simulator_logic->getUserSimulator($authManager->uid);

$con->t->assign('simulators',$simulators);
$con->append();
?>
