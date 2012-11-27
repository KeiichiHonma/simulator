<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/licence.php');
$user_licence = new userLicence();
$user_licence->setUserLicence($authManager->uid);

//home画面
$home = utilManager::getIphoneHome($user_licence->user);

$con->t->assign('user_images',$home['user_images']);
$con->t->assign('user_images_chunk',$home['user_images_chunk']);
$con->t->assign('user_display_count',$home['user_display_count']);

$home_url = SIMURLSSL.'/popapps_home?uid='.$authManager->uid;
$con->t->assign('home_url',$home_url);
$con->append();
?>
