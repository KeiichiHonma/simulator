<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$is_auth = $authManager->validateLogin();
$con->t->assign('is_auth',$is_auth);

//post
//$con->isPost = TRUE;
//$_POST['itunes_url'] = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
if($con->isPost){
    //urlとしての文字列をチェック
    require_once('simulator/check.php');
    checkSimulatorEntry::checkError();
    $is_check = checkSimulatorEntry::safeExit();
    if($is_check){
        //解析OKかのチェック
        include('fw/analyze.php');
        $analyze = new analyze();
        if( $analyze->analyzeHtmlSource($_POST['itunes_url']) ){
            /*
            imageの差分チェックをする
            追加する際、有無を言わさず必ずitunesの画像は更新をかける。
            画像数に違いがあった場合は、simulatorテーブルの
            */
            //cloudinary///////////////////////////////////////////////////////////////////////////
            $images = array();
            require "fw/cloudinaryUploader.php";
            //$url = 'http://a2.mzstatic.com/us/r1000/087/Purple/v4/48/35/27/48352767-7bfd-ac11-c51b-aa92df863ed7/mzl.ecvhpptk.175x175-75.jpg';
            //$public_id = 'q9umj3c4zyze65tqjmme';
            foreach ($analyze->screenshots as $url){
                $image[] = cloudinaryUploader::upload($url,$public_id);
            }

$image = array
(
    'images'=>array
    (
        '',
        '',
        '',
        '',
    ),
    'itunes'=>array
    (
        array('index'=>0,'public_id'=>'123123','url'=>''),
        array('index'=>1,'public_id'=>'123123','url'=>''),
        array('index'=>2,'public_id'=>'123123','url'=>''),
    ),
    'user'=>array
    (
        array('index'=>3,'public_id'=>'123123','url'=>''),
        array('index'=>4,'public_id'=>'123123','url'=>''),
        array('index'=>5,'public_id'=>'123123','url'=>''),
    )
);
            
            
            //application table add////////////////////////////////////////////////////////////////
            //itunes id 取り出し
            $parse = parse_url($_POST['itunes_url']);
            $ex1 = explode('?',$parse['path']);
            $ex1_param = $ex1 === FALSE ? $parse['path'] : $ex1[0];
            $ex2 = explode('/',$ex1_param);
            $is_match = preg_match("/[0-9]+/",end($ex2),$match);
            
            if($is_match == 1){
                $itunes_id = $match[0];
            }else{
                //緊急
                $itunes_id = end($ex2);
            }
            require_once('application/handle.php');
            $application_handle = new applicationHandle();
            $aid = $application_handle->addRow($itunes_id,$_POST['itunes_url'],$analyze->h1_text);
            
            //simulator table add////////////////////////////////////////////////////////////////
            require_once('simulator/handle.php');
            $simulator_handle = new simulatorHandle();
            $sid = $simulator_handle->addRow($authManager->uid,$aid);
            
            
            $con->t->assign('h1_text',$analyze->h1_text);
            $con->t->assign('screenshots',$analyze->screenshots);
            $con->t->assign('icon',$analyze->icon);
            $con->t->assign('itune_link',$_POST['itunes_url']);
            $con->t->assign('count_screenshots',count($analyze->screenshots));
            $con->t->assign('count_screenshots_on',count($analyze->screenshots) + 1);
            
            $con->t->assign('is_analyze',TRUE);
        }else{
            //解析できなかった
            checkSimulatorEntry::$error['error_analyze'] = '解析できませんでした。';
        }
    }
    $is_check = checkSimulatorEntry::safeExit();
}
//$url = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587#';
//$hash = parse_url($url);

/*array(3) {
  ["scheme"]=>
  string(5) "https"
  ["host"]=>
  string(16) "itunes.apple.com"
  ["path"]=>
  string(46) "/jp/app/bokete-bokete-mian-bai-xie/id563446587"
}*/

$con->append();
?>
