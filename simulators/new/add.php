<?php
var_dump('test');
die();
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
            //itunes id 取り出し
            $parse = parse_url($_POST['itunes_url']);
            $ex1 = explode('?',$parse['path']);
            $ex1_param = $ex1 === FALSE ? $parse['path'] : $ex1[0];
            $ex2 = explode('/',$ex1_param);
            $is_match = preg_match("/[0-9]+/",end($ex2),$match);
            
            if($is_match == 1){
                $itunes_id = $match[0];
            }else{
                //itunes id 取得失敗
                //$itunes_id = end($ex2);
            }
            
            //
            include('application/logic.php');
            $application_logic = new applicationLogic();
            $itunes_app = $application_logic->getItunesApp($itunes_id);
            /*
            imageの差分チェックをする
            追加する際、有無を言わさず必ずitunesの画像は更新をかける。
            画像数に違いがあった場合は、simulatorテーブルの
            */
            //application table add////////////////////////////////////////////////////////////////
            //cloudinary
            require "fw/cloudinaryUploader.php";
            require_once('application/handle.php');
            $application_handle = new applicationHandle();
            if($itunes_app === FALSE){
                //add
                //screenshots
                foreach ($analyze->screenshots as $url){
                    $screenshot = cloudinaryUploader::upload($url);
                    //$images['screenshots'][$screenshot['public_id']] = $screenshot;
                    $images['screenshots'][] = cloudinaryUploader::upload($url);
                }
                //logo
                $logo = cloudinaryUploader::upload($analyze->logo);
                //$images['logo'][$logo['public_id']] = $logo;
                $images['logo'] = cloudinaryUploader::upload($analyze->logo);
                
                $aid = $application_handle->addRow($itunes_id,$_POST['itunes_url'],$analyze->h1_text,$images);
            }else{
                //update
                //screenshots
                $i = 0;
                $old_images = unserialize($itunes_app['images']);
                
                foreach ($analyze->screenshots as $url){
                    $images['screenshots'][$i] = cloudinaryUploader::upload($url,isset($old_images['screenshots'][$i]) ? $old_images['screenshots'][$i]['public_id'] : null);
                    $i++;
                }
                $images['logo'] = cloudinaryUploader::upload($analyze->logo,$old_images['logo']['public_id']);
                
                $aid = $application_handle->updateRow($itunes_app['_id'],$itunes_id,$_POST['itunes_url'],$images);
            }
            if(!$aid){
                require_once('fw/errorManager.php');
                errorManager::throwError(E_CMMN_HANDLE_STOP);
            }
            
            //simulator table add////////////////////////////////////////////////////////////////
            require_once('simulator/handle.php');
            $simulator_handle = new simulatorHandle();
            $sid = $simulator_handle->addRow($authManager->uid,$aid);
            if(!$sid){
                require_once('fw/errorManager.php');
                errorManager::throwError(E_CMMN_HANDLE_STOP);
            }
            $con->safeExitRedirect('/simulators/view/sid/'.$sid);
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
