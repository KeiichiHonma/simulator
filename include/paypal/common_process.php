<?php
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
            $new_max = $user_licence->updateMaxLicence($_GET['uid'],$_POST['item_name']);

            //free→basic advance限定。ユーザーが既にアプリを登録していた場合はアプリの画像をユーザー用に再度アップしなおす。
            if($user_licence->user[0]['col_max_licence'] == MAX_LICENCE_FREE && $user_licence->user[0]['col_use_licence'] == 1){
                require_once('simulator/logic.php');
                $simulator_logic = new simulatorLogic();
                $simulator = $simulator_logic->getUserSimulator($user_licence->user[0]['_id']);//applicationも入ってます。
                if($simulator){
                    require "fw/cloudinaryUploader.php";
                    $images = unserialize($simulator[0]['application_images']);
                    $new_images = array();
                    foreach ($images as $key => $image){
                        if($key == 'logo'){
                            $cloudinary = cloudinaryUploader::upload($image['secure_url']);
                            $new_images['logo'] = array
                            (
                                'public_id'=>$cloudinary['public_id'],
                                'version'=>$cloudinary['version'],
                                'secure_url'=>$cloudinary['secure_url'],
                                'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(CLOUDINARY_LOGO_SETTING))
                            );
                        }elseif($key == 'screenshots'){
                            foreach ($image as $key2 => $screenshot){
                                $cloudinary = cloudinaryUploader::upload($screenshot['secure_url']);
                                $new_images['screenshots'][] = array
                                (
                                    'public_id'=>$cloudinary['public_id'],
                                    'version'=>$cloudinary['version'],
                                    'secure_url'=>$cloudinary['secure_url'],
                                    'thumbnail_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array('t_admin_thumbnail')),
                                    'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(utilManager::getCloudinaryFit($cloudinary['width'],$cloudinary['height'])))
                                );
                            }
                        }
                    }
                    //simulatorテーブルに画像をコピー
                    require_once('simulator/handle.php');
                    $simulator_handle = new simulatorHandle();
                    $sid = $simulator_handle->updateImagesRow($simulator[0]['simulator_id'],$new_images);
                    if(!$sid){
                        //rollback
                        cloudinaryUploader::rollback($images);
                    }
                }
            }
            //ライセンス数再セット
            if(!$is_notify){
                $user_licence->updateLoginMaxLicence($new_max);
            }else{
                //notifyを使ってのDB登録
                mail($notify_email, "VERIFIED IPN db-add", $_POST['txn_id'].':'.serialize($_POST));
            }

            $con->safeExit();//commit
        }
    }else{
        //既にnotify側で登録があるので
        //ライセンス数再セット
        if(!$is_notify) $user_licence->updateLoginMaxLicence(false,$_GET['uid']);
    }
}
?>