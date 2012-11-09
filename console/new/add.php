<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/logic.php');
$user_logic = new userLogic();
if($user_logic->checkLicence($authManager->uid) != LICENCE_NEW){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_LICENCE_OVER);
}

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
            $application = $application_logic->getItunesApp($itunes_id);
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
            if($application === FALSE){
                //add
                //screenshots
                foreach ($analyze->screenshots as $url){
                    $cloudinary = cloudinaryUploader::upload($url);
                    $images['screenshots'][] = array
                    (
                        'public_id'=>$cloudinary['public_id'],
                        'version'=>$cloudinary['version'],
                        'secure_url'=>$cloudinary['secure_url'],
                        'thumbnail_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array('t_admin_thumbnail')),
                        'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(utilManager::getCloudinaryFit($cloudinary['width'],$cloudinary['height'])))
                    );
                }
                
                //logo
                $cloudinary = cloudinaryUploader::upload($analyze->logo);
                $images['logo'] = array
                (
                    'public_id'=>$cloudinary['public_id'],
                    'version'=>$cloudinary['version'],
                    'secure_url'=>$cloudinary['secure_url'],
                    'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(CLOUDINARY_LOGO_SETTING))
                );
                $aid = $application_handle->addRow($itunes_id,$_POST['itunes_url'],$analyze->h1_text,$images);
            }else{
                //update
                //screenshots
                $i = 0;
                $old_images = unserialize($application[0]['col_images']);
                foreach ($analyze->screenshots as $url){
                    $cloudinary = cloudinaryUploader::upload($url,isset($old_images['screenshots'][$i]) ? $old_images['screenshots'][$i]['public_id'] : null);
                    $images['screenshots'][$i] = array
                    (
                        'public_id'=>$cloudinary['public_id'],
                        'version'=>$cloudinary['version'],
                        'secure_url'=>$cloudinary['secure_url'],
                        'thumbnail_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array('t_admin_thumbnail')),
                        'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(utilManager::getCloudinaryFit($cloudinary['width'],$cloudinary['height'])))
                    );
                    $i++;
                }
                $cloudinary = cloudinaryUploader::upload($analyze->logo,isset($old_images['logo']['public_id']) ? $old_images['logo']['public_id'] : null);
                $images['logo'] = array
                (
                    'public_id'=>$cloudinary['public_id'],
                    'version'=>$cloudinary['version'],
                    'secure_url'=>$cloudinary['secure_url'],
                    'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(CLOUDINARY_LOGO_SETTING))
                );
                $aid = $application_handle->updateRow($application[0]['_id'],$_POST['title'],$images);
            }
            if(!$aid){
                //rollback
                cloudinaryUploader::rollback($images);
                require_once('fw/errorManager.php');
                errorManager::throwError(E_CMMN_HANDLE_APP_STOP);
            }
            
            //simulator table add////////////////////////////////////////////////////////////////
            require_once('simulator/logic.php');
            $simulator_logic = new simulatorLogic();
            $simulator = $simulator_logic->getUserAppSimulator($authManager->uid,$aid);
            
            if(!$simulator){
                require_once('simulator/handle.php');
                $simulator_handle = new simulatorHandle();
                $sid = $simulator_handle->addRow($authManager->uid,$aid);
                if(!$sid){
                    //rollback
                    cloudinaryUploader::rollback($images);
                    require_once('fw/errorManager.php');
                    errorManager::throwError(E_CMMN_HANDLE_SIM_STOP);
                }
                //user情報更新
                require_once('user/handle.php');
                $user_handle = new userHandle();
                $user_handle->updateUseLicenceRow($authManager->uid,$user_logic->use_licence + 1);
                $authManager->setUseLicence($user_logic->use_licence + 1);
            }else{
                $sid = $simulator[0]['_id'];
            }
            $con->safeExitRedirect('/console/view/sid/'.$sid);
        }else{
            //解析できなかった
            checkSimulatorEntry::$error['error_analyze'] = '解析できませんでした。';
        }
    }
}
?>
