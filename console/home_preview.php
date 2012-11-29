<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/logic.php');
$user_logic = new userLogic();
$user = $user_logic->getOneUser($authManager->uid);

if(!$user){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_USER_EXISTS);
}
//home画面
$iphone = utilManager::getIphoneHome($user);
$con->t->assign('iphone',$iphone);

$con->t->assign('home_url',utilManager::getPopAppsHomeURL($authManager->uid,$user));
$con->append();
?>
