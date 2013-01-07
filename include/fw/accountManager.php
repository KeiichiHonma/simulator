<?php
class accountManager
{
    public function moveFreeToPaid($user_licence){
        global $con;
        //free→basic advance限定。ユーザーが既にアプリを登録していた場合はアプリの画像をユーザー用に再度アップしなおす。
        if($user_licence->user[0]['col_max_licence'] == MAX_LICENCE_FREE && $user_licence->user[0]['col_use_licence'] == 1){
            require_once('simulator/logic.php');
            $simulator_logic = new simulatorLogic();
            $simulator = $simulator_logic->getUserSimulator($user_licence->user[0]['_id']);//applicationも入ってます。
            if($simulator){
                require "fw/cloudinaryUploader.php";
                $images = unserialize($simulator[0]['application_mobile_images']);
                $new_mobile_images = array();
                $new_console_images = array();
                foreach ($images as $key => $image){
                    if($key == 'logo'){
                        try {
                            $cloudinary = cloudinaryUploader::upload($image['secure_url']);
                        } catch (Exception $e) {
                            $con->throwExceptionError($e);
                        }
                        $new_mobile_images['logo'] = utilManager::getLogoParam($cloudinary);
                    }elseif($key == 'screenshots'){
                        foreach ($image as $key2 => $screenshot){
                            try {
                                $cloudinary = cloudinaryUploader::upload($screenshot['secure_url']);
                            } catch (Exception $e) {
                                $con->throwExceptionError($e);
                            }
                            $new_mobile_images['screenshots'][] = utilManager::getMobileImageParam($cloudinary);
                            $new_console_images['screenshots'][] = utilManager::getConsoleImageParam($cloudinary);
                        }
                    }
                }
                //simulatorテーブルに画像をコピー
                require_once('simulator/handle.php');
                $simulator_handle = new simulatorHandle();
                $con->db->cloudinary_image = $new_mobile_images;//rollback 準備
                //$sid = $simulator_handle->updateImagesRow($simulator[0]['simulator_id'],$new_mobile_images,$new_console_images);
                $sid = $simulator_handle->updatePaymentRow($simulator[0]['simulator_id'],$new_mobile_images,$new_console_images);//licenceも更新してます。
                if(!$sid){
                    //rollback
                    try {
                        cloudinaryUploader::rollback($new_mobile_images);
                    } catch (Exception $e) {
                        $con->throwExceptionError($e);
                    }
                }
            }
        }
    }
}
?>
