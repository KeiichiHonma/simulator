<?php
//dbエラーで停止しない
$con->db->isThrowDBError = false;

//存在チェック
if(isset($_POST['txn_id']) && is_numeric($_GET['uid'])){
    require_once('paypal_payment_info/logic.php');
    $paypal_payment_info_logic = new paypalPaymentInfoLogic();
    $paypal = $paypal_payment_info_logic->getOneTxn($_POST['txn_id']);

    require_once('user/licence.php');
    $user_licence = new userLicence();

    if(!$paypal){
        if(!isset($_POST['receipt_id'])) $_POST['receipt_id'] = '';
        require_once('paypal_payment_info/handle.php');
        $paypal_payment_info_handle = new paypalPaymentInfoHandle();
        $pid = $paypal_payment_info_handle->addRow($_GET['uid']);
        $pid = true;
        if($pid){
            //user情報更新
            //$new_max = $user_licence->updateMaxLicence($_GET['uid'],$_POST['item_name']);
            $new_max = $user_licence->updateMaxLicence($_GET['uid'],$_POST['item_number']);

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
                            $cloudinary = cloudinaryUploader::upload($image['secure_url']);
                            $new_mobile_images['logo'] = utilManager::getLogoParam($cloudinary);
                        }elseif($key == 'screenshots'){
                            foreach ($image as $key2 => $screenshot){
                                $cloudinary = cloudinaryUploader::upload($screenshot['secure_url']);
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
                        cloudinaryUploader::rollback($new_mobile_images);
                    }
                }
            }
            //ライセンス数再セット
            if($is_notify){
                //notifyを使ってのDB登録
                mail($notify_email, "VERIFIED IPN db-add", $_POST['txn_id'].':'.serialize($_POST));
            }
            $con->safeExit();//commit
        }
    }
}
?>