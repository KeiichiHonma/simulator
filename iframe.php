<?php
/*
$_GETで取得可能
$_SERVER['HTTP_REFERER']でセキュリティチェック
*/
if(!isset($_GET['sid']) || !is_numeric($_GET['sid'])) die();
require_once('fw/prepend.php');
//$sid = $con->base->getPath('sid',TRUE);
$sid = $_GET['sid'];

require_once('fw/utilManager.php');
require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($sid);

require_once('simulator/util.php');
$con->t->assign('iphone',simulatorUtil::getIphone($simulator));
/*$images = unserialize($simulator[0]['application_images']);

//title
$con->t->assign('title',$simulator[0]['col_title']);

//screenshots
$con->t->assign('screenshots',$images['screenshots']);
$count = count($images['screenshots']);
$con->t->assign('count_screenshots',$count);
$con->t->assign('count_screenshots_on',$count + 1);
//logo
$con->t->assign('logo',$images['logo']);
$con->t->assign('itune_link',$simulator[0]['col_itunes_url']);*/
$con->append();
?>
