<?php
ccc
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$is_auth = $authManager->validateLogin();
$con->t->assign('is_auth',$is_auth);

//post
$con->isPost = TRUE;
$_POST['itunes_url'] = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
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
            //set
            $con->t->assign('h1_text',$analyze->h1_text);
            $con->t->assign('screenshots',$analyze->screenshots);
            $con->t->assign('icon',$analyze->icon);
            $con->t->assign('itune_link',$_POST['itunes_url']);
            $con->t->assign('count_screenshots',count($analyze->screenshots));
            $con->t->assign('count_screenshots_on',count($analyze->screenshots) + 1);
            
            $_POST['title'] = $analyze->h1_text;
            $_POST['link_url']    = $_POST['itunes_url'];
            $con->t->assign('is_analyze',TRUE);
        }else{
            //解析できなかった
            checkItunesURL::$error['error_analyze'] = '解析できませんでした。';
            $is_check = checkItunesURL::safeExit();
        }
    }
}
//debug//
if($con->isDebug){
    $_POST['install_url'] = 'http://813.hades.corp.813.co.jp/';
    //$_POST['link_url']    = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
    $_POST['scroll'] = SCROLL_FORTH;
    $_POST['position'] = POSITION_RIGHT;
}

$con->append();
?>
