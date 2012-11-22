<?php
require_once('simulator/check.php');
checkSimulatorEntry::checkError();
$is_check = checkSimulatorEntry::safeExit();

//解析OKかのチェック
include('fw/analyze.php');
$analyze = new analyze();
$is_analyze = $analyze->analyzeHtmlSource($_POST['itunes_url']);
if( $is_analyze ){
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
    checkSimulatorEntry::$error['analyze'] = 'can\'t analyze';
    $is_check = checkSimulatorEntry::safeExit();
}

if($is_check){
    if( $is_analyze ){
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
        require_once "fw/cloudinaryUploader.php";
        require_once('application/handle.php');
        $application_handle = new applicationHandle();
        $mobile_images = null;
        $console_images = null;
        $user_images = null;
        $user_image_update = false;
        $user_licence_update = false;
        if($application === FALSE){
            //add
            //app add の場合 free planの人だけがapp tableを使う
            if($max_licence == 1){
                //screenshots
                foreach ($analyze->screenshots as $url){
                    $cloudinary = cloudinaryUploader::upload($url);
                    $mobile_images['screenshots'][] = utilManager::getMobileImageParam($cloudinary,$analyze->direction);
                    $console_images['screenshots'][] = utilManager::getConsoleImageParam($cloudinary,$analyze->direction);
                }
                
                //logo
                $cloudinary = cloudinaryUploader::upload($analyze->logo);
                $mobile_images['logo'] = utilManager::getLogoParam($cloudinary);
                $con->db->cloudinary_image = $mobile_images;//rollback 準備
                
                //home画面用logo = 背景色に黒を設定
                $im_logo_url = SIMURL.'/im/logo?url='.urlencode($analyze->logo);
                $im_logo_cloudinary = cloudinaryUploader::upload($im_logo_url);
                $con->db->cloudinary_image[] = $im_logo_cloudinary;
                $user_images[$aid] = $im_logo_cloudinary;
                $user_image_update = true;
            }
            
            //有料プランの人が追加した場合は画像はnullで追加
            $aid = $application_handle->addRow($itunes_id,$_POST['itunes_url'],$analyze->h1_text,$mobile_images,$console_images);
        }else{
            //public_idからapplication table update
            //app add の場合 free planの人だけがcloudinaryを使う
            if($max_licence == 1){
                $i = 0;
                $old_mobile_images = unserialize($application[0]['col_mobile_images']);
                //screenshots この部分は画像の増減があるはずなのでDBの更新が必要
                foreach ($analyze->screenshots as $url){
                    $cloudinary = cloudinaryUploader::upload($url,isset($old_mobile_images['screenshots'][$i]) ? $old_mobile_images['screenshots'][$i]['public_id'] : null);
                    $mobile_images['screenshots'][$i] = utilManager::getMobileImageParam($cloudinary,$analyze->direction);
                    $console_images['screenshots'][$i] = utilManager::getConsoleImageParam($cloudinary,$analyze->direction);
                    $i++;
                }
                
                //logo この部分は原則画像の草原がないためDBの更新は必要ない。ただし、バージョンの違いはあるので更新する
                $cloudinary = cloudinaryUploader::upload($analyze->logo,isset($old_mobile_images['logo']['public_id']) ? $old_mobile_images['logo']['public_id'] : null);
                $mobile_images['logo'] = utilManager::getLogoParam($cloudinary);
                //$con->db->cloudinary_image = $mobile_images;//rollback 準備

                //home画面用logo = 背景色に黒を設定
                //user情報
                require_once('user/logic.php');
                $user_logic = new userLogic();
                $user = $user_logic->getOneUser($authManager->uid);
                $user_images = unserialize($user[0]['col_images']);
                $public_id = $user_images[$application['_id']]['public_id'];
                $im_logo_url = SIMURL.'/im/logo?url='.urlencode($analyze->logo);
                $im_logo_cloudinary = cloudinaryUploader::upload($im_logo_url,$public_id);
                $user_images[$application['_id']] = $im_logo_cloudinary;
                //$con->db->cloudinary_image[] = $im_logo_cloudinary;
                $user_image_update = true;
                
                //有料プランの人が更新する場合ははない。無料ユーザーの画像が消えてしまうので。
                $aid = $application_handle->updateRow($application[0]['_id'],$_POST['title'],$mobile_images,$console_images);
            }
        }
        if(!$aid){
            //rollback
            if(!is_null($mobile_images)) cloudinaryUploader::rollback($mobile_images);
            if(!is_null($user_images)) cloudinaryUploader::rollback($user_images);
            require_once('fw/errorManager.php');
            errorManager::throwError(E_CMMN_HANDLE_APP_STOP);
        }
        
        
        //simulator table add////////////////////////////////////////////////////////////////
        require_once('simulator/logic.php');
        $simulator_logic = new simulatorLogic();
        $simulator = $simulator_logic->getUserAppSimulator($authManager->uid,$aid);
        $mobile_images = null;
        $console_images = null;
        if(!$simulator){
            require_once('simulator/handle.php');
            $simulator_handle = new simulatorHandle();

            //simulator add の場合 basic plan以降の人だけがcloudinaryを使う
            if($max_licence > 1){
                //screenshots
                foreach ($analyze->screenshots as $url){
                    $cloudinary = cloudinaryUploader::upload($url);
                    $mobile_images['screenshots'][] = utilManager::getMobileImageParam($cloudinary,$analyze->direction);
                    $console_images['screenshots'][] = utilManager::getConsoleImageParam($cloudinary,$analyze->direction);
                }
                
                //logo
                $cloudinary = cloudinaryUploader::upload($analyze->logo);
                $mobile_images['logo'] = utilManager::getLogoParam($cloudinary);
                $con->db->cloudinary_image = $mobile_images;//rollback 準備

                //home画面用logo = 背景色に黒を設定
                $im_logo_url = SIMURL.'/im/logo?url='.urlencode($analyze->logo);
                $im_logo_cloudinary = cloudinaryUploader::upload($im_logo_url);
                $con->db->cloudinary_image[] = $im_logo_cloudinary;
                $user_images[$aid] = $im_logo_cloudinary;
                $user_image_update = true;
            }
            
            //無料プランの人は画像nullで追加
            $sid = $simulator_handle->addRow($authManager->uid,$aid,$mobile_images,$console_images,$analyze->direction);
            if(!$sid){
                //rollback
                if(!is_null($mobile_images)) cloudinaryUploader::rollback($mobile_images);
                if(!is_null($user_images)) cloudinaryUploader::rollback($user_images);
                require_once('fw/errorManager.php');
                errorManager::throwError(E_CMMN_HANDLE_SIM_STOP);
            }
            //ライセンス更新が必要
            $user_licence_update = true;
        }else{
            $sid = $simulator[0]['_id'];
        }
        //user情報更新
        require_once('user/handle.php');
        $user_handle = new userHandle();
        if($user_licence_update && !$user_image_update){
            $uid = $user_handle->updateUseLicenceRow($authManager->uid,$use_licence + 1);
        }elseif (!$user_licence_update && $user_image_update){
            $uid = $user_handle->updateImagesRow($authManager->uid,$use_licence + 1);
        }elseif ($user_licence_update && $user_image_update){
            $uid = $user_handle->updateUseLicenceImagesRow($authManager->uid,$use_licence + 1);
        }
        if(!$uid){
            //rollback
            cloudinaryUploader::rollback($mobile_images);
            cloudinaryUploader::rollback($user_images);
            require_once('fw/errorManager.php');
            errorManager::throwError(E_CMMN_HANDLE_SIM_STOP);
        }
        $con->safeExitRedirect('/console/view/sid/'.$sid);
    }else{
        //解析できなかった
        checkSimulatorEntry::$error['error_analyze'] = 'can\'t analyze';
    }
}
$con->t->assign('page_analyze',TRUE);
?>
