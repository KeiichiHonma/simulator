<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

$con->isPost = true;
$_POST['itunes_url'] = 'https://itunes.apple.com/jp/app/3dirasuto-ar/id468637238?mt=8';
if($con->isPost){
    //urlとしての文字列をチェック
    require_once('application/check.php');
    checkItunesURL::checkError('itunes_url');
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

            //set
            //$con->t->assign('h1_text',$analyze->h1_text);
            //$con->t->assign('screenshots',$analyze->screenshots);
            //$con->t->assign('logo',$analyze->logo);
            //$con->t->assign('itune_link',$_POST['itunes_url']);
            //$con->t->assign('direction',$analyze->direction);
            
            //$_POST['title'] = $analyze->h1_text;
            //$_POST['link_url']    = $_POST['itunes_url'];
            $con->t->assign('iphone',$iphone);

            $con->t->assign('is_analyze',TRUE);
        }else{
            //解析できなかった
            checkItunesURL::$error['error_analyze'] = 'No Analyze';
            $is_check = checkItunesURL::safeExit();
        }
    }
}
//debug//
if($con->isDebug){
    $_POST['install_url'] = 'http://simulator.813.co.jp/';
    //$_POST['link_url']    = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
    $_POST['scroll'] = SCROLL_BOTTOM;
    $_POST['position'] = POSITION_RIGHT;
}

$con->append();
?>
