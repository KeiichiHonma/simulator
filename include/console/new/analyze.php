<?php
//urlとしての文字列をチェック
require_once('application/check.php');
checkItunesURL::checkError();
$is_check = checkItunesURL::safeExit();
if($is_check){
    //解析OKかのチェック
    include('fw/analyze.php');
    $analyze = new analyze();
    if( $analyze->analyzeHtmlSource($_POST['itunes_url']) ){
        //データをiphoneに合わせる
        $iphone['title'] = $analyze->h1_text;
        foreach ($analyze->screenshots as $key => $value){
            $iphone['mobile']['screenshots'][$key]['public_id'] = $key;
            $iphone['mobile']['screenshots'][$key]['transformations_url'] = $value;
        }

        $count = count($analyze->screenshots);
        $iphone['mobile']['count_screenshots'] = $count;
        $iphone['mobile']['count_screenshots_on'] = $count + 1;
        //logo
        $iphone['logo']['transformations_url'] = $analyze->logo;
        //link
        $iphone['link'] = $_POST['itunes_url'];
        //direction
        $iphone['direction'] = $analyze->direction;
        $con->t->assign('iphone',$iphone);
    }else{
        //解析できなかった
        checkItunesURL::$error['analyze'] = 'can\'t analyze';
        $is_check = checkItunesURL::safeExit();
    }
    //default
    $_POST['title'] = $iphone['title'];
    $_POST['link'] = $iphone['link'];
    $_POST['scroll'] = SCROLL_BOTTOM;
    $_POST['position'] = POSITION_RIGHT;
    $con->t->assign('page_analyze',TRUE);
}
?>
