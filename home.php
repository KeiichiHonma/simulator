<?php
/*
$_GETで取得可能
$_SERVER['HTTP_REFERER']でセキュリティチェック
*/

if( !isset($_SERVER['HTTP_REFERER']) && !isset($_GET['uid']) || !is_numeric($_GET['uid']) ){
    die();
}

require_once('fw/prepend.php');

require_once('user/logic.php');
$user_logic = new userLogic();
$user = $user_logic->getOneUser($_GET['uid']);

if(!$user){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_USER_EXISTS);
}

//url
require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulators = $simulator_logic->getUserSimulator($_GET['uid']);

if(!$simulators){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_POPAPPS_EXISTS,true);
}
$isOK = FALSE;
foreach ($simulators as $key => $simulator){
    if( !utilManager::checkDomain($simulator[0]['col_url'],$_SERVER['HTTP_REFERER']) ){
        $isOK = TRUE;
        break;
    }
    //if( stristr( $_SERVER['HTTP_REFERER'],$_SERVER['SERVER_NAME']) !== FALSE || stristr( $_SERVER['HTTP_REFERER'],$simulator['col_url'] ) !== FALSE ) $isOK = TRUE;
}
$isOK = TRUE;
if( !$isOK ){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_DOMAIN_EXISTS,true);
}
//home画面
$iphone = utilManager::getIphoneHome($user);
$con->t->assign('iphone',$iphone);
$con->t->assign('is_home',0);
$con->append();
?>
