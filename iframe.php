<?php

/*
$_GETで取得可能
$_SERVER['HTTP_REFERER']でセキュリティチェック
*/

require_once('fw/prepend.php');
include('fw/analyze.php');
$analyze = new analyze();
$url = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
//$analyze->analyzeHtmlSource('https://itunes.apple.com/jp/app/wu-liaode-quan-juan!burakkujakkuniyoroshiku/id556416566?l=en&mt=8');
$analyze->analyzeHtmlSource($url);

$con->t->assign('h1_text',$analyze->h1_text);
$con->t->assign('screenshots',$analyze->screenshots);
$con->t->assign('icon',$analyze->icon);
$con->t->assign('itune_link',$url);
/*var_dump(count($analyze->screenshots));
die();*/
$con->t->assign('count_screenshots',count($analyze->screenshots));
$con->t->assign('count_screenshots_on',count($analyze->screenshots) + 1);

$con->append();
?>
