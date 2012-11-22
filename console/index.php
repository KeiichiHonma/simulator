<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/licence.php');
$user_licence = new userLicence();
$user_licence->setUserLicence($authManager->uid);

//home画面
$user_images = unserialize($user_licence->user[0]['col_user_images']);
/*var_dump($user_images);
die();*/
$con->t->assign('user_images',$user_images);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulators = $simulator_logic->getUserSimulator($authManager->uid);
$con->t->assign('simulators',$simulators);
$con->append();
?>
