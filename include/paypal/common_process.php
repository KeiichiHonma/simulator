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
        if($pid){
            //購入連絡
            require_once('fw/mailManager.php');
            $mailManager = new mailManager();
            $mailManager->sendBuyUser($_POST['payer_email']);
            $mailManager->sendBuyAdmin("popapps-buy\n"."\n".serialize($_POST));
            
            //user情報更新
            $new_max = $user_licence->updateMaxLicence($_GET['uid'],$_POST['item_number']);

            //free→basic advance限定。ユーザーが既にアプリを登録していた場合はアプリの画像をユーザー用に再度アップしなおす。
            require_once('fw/accountManager.php');
            $accountManager = new accountManager();
            $accountManager->moveFreeToPaid($user_licence);
            //ライセンス数再セット
            if($is_notify){
                //notifyを使ってのDB登録
                //mail($notify_email, "VERIFIED IPN db-add", $_POST['txn_id'].':'.serialize($_POST));
                //require_once('fw/mailManager.php');
                //$mailManager = new mailManager();
                //$mailManager->sendHalt("VERIFIED IPN db-add\n".$_POST['txn_id']."\n".serialize($_POST));
            }
            $con->safeExit();//commit
        }
    }
}
?>