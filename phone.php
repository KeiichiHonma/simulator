<?php
require_once('fw/prepend.php');

/*
$_GETで取得可能
$_SERVER['HTTP_REFERER']でセキュリティチェック
*/
if( !isset($_SERVER['HTTP_REFERER']) && !isset($_GET['sid']) || !is_numeric($_GET['sid']) ){
    die();
}

require_once('fw/utilManager.php');
require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($_GET['sid']);
$iphone = utilManager::getIphone($simulator);
$con->t->assign('iphone',$iphone);

if(!$simulator){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_POPAPPS_EXISTS,true);
}

//実行サーバーと同じドメインだったらOK
if( !utilManager::checkDomain($simulator[0]['col_url'],$_SERVER['HTTP_REFERER']) ){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_DOMAIN_EXISTS,true);
}


if($iphone['mobile']['count_screenshots'] == 0){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_PHONE_SCREENSHOTS_EXISTS,true);
}

//positionの指定。各アプリをhomeと同じに強制的にするため
if( isset($_GET['home_p']) && is_numeric($_GET['home_p']) ){
    switch ($_GET['home_p']){
        case POSITION_LEFT:
            $home_p = POSITION_LEFT;
        break;
        case POSITION_CENTER:
            $home_p = POSITION_CENTER;
        break;
        case POSITION_RIGHT:
            $home_p = POSITION_RIGHT;
        break;
        default:
            $home_p = POSITION_RIGHT;
        break;
    }
    $con->t->assign('home_p',$home_p);
}


$con->append();
?>
