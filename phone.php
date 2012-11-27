<?php
/*
$_GETで取得可能
$_SERVER['HTTP_REFERER']でセキュリティチェック
*/

if( !isset($_SERVER['HTTP_REFERER']) && !isset($_GET['sid']) || !is_numeric($_GET['sid']) ){
    die();
}

require_once('fw/prepend.php');
require_once('fw/utilManager.php');
require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($_GET['sid']);
if(!$simulator){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_POPAPPS_EXISTS,true);
}

//domain
//実行サーバーと同じドメインだったらOK
if( stristr( $_SERVER['HTTP_REFERER'],$_SERVER['SERVER_NAME']) === FALSE && stristr( $_SERVER['HTTP_REFERER'],$simulator[0]['col_domain'] ) === FALSE ){
//if( stristr( $_SERVER['HTTP_REFERER'],$simulator[0]['col_domain'] ) !== FALSE ){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_DOMAIN_EXISTS,true);
}
$iphone = utilManager::getIphone($simulator);

$con->t->assign('iphone',$iphone);
if($iphone['mobile']['count_screenshots'] == 0){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_SCREENSHOTS_EXISTS,true);
}

//$con->append('phone/'.$page);
$con->append();
?>
