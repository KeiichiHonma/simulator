<?php
include('fw/analyze.php');
require_once('application/check.php');
require_once('simulator/check.php');
require_once "fw/cloudinaryUploader.php";
class newHandle extends analyze
{
    private $user;
    private $method;
    private $itunes_url;
    private $itunes_id;
    private $max_licence;
    private $use_licence;
    
    private $analyze_result;
    
    private $iphone;

    private $mobile_images = null;
    private $console_images = null;
    private $user_images = null;
    private $user_image_update = false;
    private $user_licence_update = false;
    
    private $aid;
    
    function __construct($user,$method,$itunes_url){
        $this->user = $user;
        $this->method = $method;
        $this->itunes_url = $itunes_url;
        $this->max_licence = $user[0]['col_max_licence'];
        $this->use_licence = $user[0]['col_use_licence'];
        
        if($this->method == 'analyze'){
            $this->doAnalyze();
        }elseif($this->method == 'create'){
            $this->doCreate();
        }else{
            //不正
            global $con;
            $con->safeExitRedirect('/');
        }
    }
    
    private function doAnalyze(){
        checkItunesURL::checkError();
        $is_check = checkItunesURL::safeExit();
        if($is_check){
            $this->analyze_result = $this->analyzeHtmlSource($this->itunes_url);
            if(!$this->analyze_result){
                //解析できなかった
                //error追加
                checkItunesURL::$error['analyze'] = 'can\'t analyze';
                $is_check = checkItunesURL::safeExit();
            }else{
                //iphone画面用にセット
                $this->setIphone();
                
                //次のページ用にdefaultセット
                $_POST['title'] = $this->iphone['title'];
                $_POST['link'] = $this->iphone['link'];
                $_POST['scroll'] = SCROLL_BOTTOM;
                $_POST['position'] = POSITION_RIGHT;
                global $con;
                $con->t->assign('page_analyze',TRUE);
            }
        }
    }
    private function doCreate(){
        checkSimulatorEntry::checkError();
        $is_check = checkSimulatorEntry::safeExit();
        if($is_check){
            $this->analyze_result = $this->analyzeHtmlSource($this->itunes_url);
            if(!$this->analyze_result){
                //解析できなかった
                //error追加
                checkSimulatorEntry::$error['analyze'] = 'can\'t analyze';
                $is_check = checkSimulatorEntry::safeExit();
            }else{
                //iphone画面用にセット
                $this->setIphone();
                //追加処理開始
                $this->createStart();
            }
        }
        //errorなので戻るページ
        global $con;
        $con->t->assign('page_analyze',TRUE);
    }
    
    private function createStart(){
        $this->checkItunesID();//error throwしてます
        $this->applicationSection();
        $this->simulatorSection();
        $this->userSection();
        global $con;
        $con->safeExitRedirect('/console/view/sid/'.$this->sid);
    }
    
    private function applicationSection(){
        require_once('application/handle.php');
        include('application/logic.php');
        $application_logic = new applicationLogic();
        $application = $application_logic->getItunesApp($this->itunes_id);
        $aid = true;
        //無料ユーザー、有料ユーザーどちらも必ず追加処理をする
        if($application === FALSE){
            //無料ユーザー
            if($this->max_licence == 1){
                $this->makeImages();
            }
            //有料プランの人が追加した場合は画像はnullで追加
            $application_handle = new applicationHandle();
            $this->aid = $application_handle->addRow($this->itunes_id,$this->itunes_url,$this->h1_text,$this->mobile_images,$this->console_images);
            if(!$this->aid) $this->throwError(E_CMMN_HANDLE_APP_STOP);
        }else{
            //無料ユーザー
            //public_idからapplication table update
            if($this->max_licence == 1){
                $old_mobile_images = unserialize($application[0]['col_mobile_images']);

                $this->makeImages($old_mobile_images);
                //有料プランの人が追加した場合は画像はnullで追加
                $application_handle = new applicationHandle();
                //有料プランの人が更新する場合ははない。無料ユーザーの画像が消えてしまうので。
                $this->aid = $application_handle->updateRow($application[0]['_id'],$this->iphone['title'],$this->mobile_images,$this->console_images);
                if(!$this->aid) $this->throwError(E_CMMN_HANDLE_APP_STOP);
            }else{
                $this->aid = $application[0]['_id'];
            }
            
        }
        
    }

    private function simulatorSection(){
        require_once('simulator/logic.php');
        $simulator_logic = new simulatorLogic();
        $simulator = $simulator_logic->getUserAppSimulator($this->user[0]['_id'],$this->aid);

        if(!$simulator){
            require_once('simulator/handle.php');
            $simulator_handle = new simulatorHandle();

            //simulator add の場合 basic plan以降の人だけがcloudinaryを使う
            if($this->max_licence > 1){
                $this->makeImages();
                $this->sid = $simulator_handle->addRow($this->user[0]['_id'],$this->aid,$this->mobile_images,$this->console_images,$this->direction);
            }else{
                //無料プランの人は画像nullで追加
                $this->sid = $simulator_handle->addRow($this->user[0]['_id'],$this->aid,null,null);
            }
            
            //ここでhome画面用の画像アップ
            $this->makeUserImages($this->sid);
            
            if(!$this->sid) $this->throwError(E_CMMN_HANDLE_SIM_STOP);
            //ライセンス更新が必要
            $this->user_licence_update = true;
        }else{
            $this->sid = $simulator[0]['_id'];
        }
    }
    
    private function userSection(){
        require_once('user/handle.php');
        $user_handle = new userHandle();
        if($this->user_licence_update && !$this->user_image_update){
            $uid = $user_handle->updateUseLicenceRow($this->user[0]['_id'],$this->use_licence + 1);
        }elseif (!$this->user_licence_update && $this->user_image_update){
            $uid = $user_handle->updateImagesRow($this->user[0]['_id'],$this->user_images);
        }elseif ($this->user_licence_update && $this->user_image_update){
            $uid = $user_handle->updateUseLicenceImagesRow($this->user[0]['_id'],$this->use_licence + 1,$this->user_images);
        }
        
        if(!$uid) $this->throwError(E_CMMN_HANDLE_USER_STOP);
    }
    
    private function makeImages($old_mobile_images = null){
        //screenshots
        $i = 0;
        foreach ($this->screenshots as $url){
            $public_id = isset($old_mobile_images['screenshots'][$i]) ? $old_mobile_images['screenshots'][$i]['public_id'] : null;
            $cloudinary = cloudinaryUploader::upload($url,$public_id);
            $this->mobile_images['screenshots'][$i] = utilManager::getMobileImageParam($cloudinary,$this->direction);
            $this->console_images['screenshots'][$i] = utilManager::getConsoleImageParam($cloudinary,$this->direction);
            $i++;
        }
        
        //logo
        $public_id = isset($old_mobile_images['logo']['public_id']) ? $old_mobile_images['logo']['public_id'] : null;
        $cloudinary = cloudinaryUploader::upload($this->logo,$public_id);
        $this->mobile_images['logo'] = utilManager::getLogoParam($cloudinary);
        global $con;
        $con->db->cloudinary_image = $mobile_images;//rollback 準備
    }

    private function makeUserImages($sid){
        $this->user_images = is_null($this->user[0]['col_user_images']) ? array() : unserialize($this->user[0]['col_user_images']);
        //home画面用logo = 背景色に黒を設定
        $public_id = isset($this->user_images[$sid]['public_id']) ? $this->user_images[$sid]['public_id'] : null;
        $im_logo_url = SIMURL.'/im/logo?url='.urlencode($this->logo);
        $im_logo_cloudinary = cloudinaryUploader::upload($im_logo_url,$public_id);
        $con->db->cloudinary_image[] = $im_logo_cloudinary;
        //$this->user_images[$sid] = $im_logo_cloudinary;
        $this->user_images[$sid] = utilManager::getUserImageParam($im_logo_cloudinary,$this->mobile_images['logo']);
        $this->user_image_update = true;
    }

    private function initImages(){
        //init
        $this->mobile_images = null;
        $this->console_images = null;
    }
    
    private function setIphone(){
        //データをiphoneに合わせる
        $this->iphone['title'] = $this->h1_text;
        foreach ($this->screenshots as $key => $value){
            $this->iphone['mobile']['screenshots'][$key]['public_id'] = $key;
            $this->iphone['mobile']['screenshots'][$key]['transformations_url'] = $value;
        }

        $count = count($this->screenshots);
        $this->iphone['mobile']['count_screenshots'] = $count;
        $this->iphone['mobile']['count_screenshots_on'] = $count + 1;
        //logo
        $this->iphone['logo']['transformations_url'] = $this->logo;
        //link
        $this->iphone['link'] = $_POST['itunes_url'];
        //direction
        $this->iphone['direction'] = $this->direction;
        global $con;
        $con->t->assign('iphone',$this->iphone);
    }

    private function throwError($error){
        //rollback
        if(!is_null($this->mobile_images)) cloudinaryUploader::rollback($this->mobile_images);
        if(!is_null($this->user_images)) cloudinaryUploader::rollback($this->user_images);
        require_once('fw/errorManager.php');
        errorManager::throwError(constant($error));
    }

    private function checkItunesID(){
        //itunes id 取り出し
        $parse = parse_url($this->itunes_url);
        $ex1 = explode('?',$parse['path']);
        $ex1_param = $ex1 === FALSE ? $parse['path'] : $ex1[0];
        $ex2 = explode('/',$ex1_param);
        $is_match = preg_match("/[0-9]+/",end($ex2),$match);
        
        if($is_match == 1){
            $this->itunes_id = $match[0];
            return $this->itunes_id;
        }else{
            //itunes id 取得失敗
            require_once('fw/errorManager.php');
            errorManager::throwError(E_CMMN_HANDLE_ITUNES_STOP);
        }
    }
}
?>
