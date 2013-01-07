<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin();
$is_notify = false;

require_once('paypal/prepend.php');//$curl_url

if(isset($_GET['tx']) && is_numeric($_GET['uid'])){
    // read the post from PayPal system and add 'cmd'
    $req = 'cmd=_notify-synch';

    $tx_token = $_GET['tx'];
    // read the post from PayPal system and add 'cmd'
    $req = 'cmd=_notify-synch';
     
    $tx_token = $_GET['tx'];
    $auth_token = "yLxXq_Us-4dh7_aA7zxx18Xp8NFk9V1wQrYnQy-hyxpNYG02aeFbDt8_VJW";
    $req .= "&tx=$tx_token&at=$auth_token";
     
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $curl_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    //set cacert.pem verisign certificate path in curl using 'CURLOPT_CAINFO' field here,
    //if your server does not bundled with default verisign certificates.
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: $pp_hostname"));
    $res = curl_exec($ch);
    curl_close($ch);
     
    if(!$res){
        //HTTP ERROR
    }else{
         // parse the data
        $lines = explode("\n", $res);
        $keyarray = array();
        if (strcmp ($lines[0], "SUCCESS") == 0) {
            for ($i=1; $i<count($lines);$i++){
                list($key,$val) = explode("=", $lines[$i]);
                //$keyarray[urldecode($key)] = urldecode($val);
                $_POST[urldecode($key)] = urldecode($val);
            }
            require_once('paypal/common_process.php');

            // check the payment_status is Completed
            // check that txn_id has not been previously processed
            // check that receiver_email is your Primary PayPal email
            // check that payment_amount/payment_currency are correct
            // process payment
            //$firstname = $keyarray['first_name'];
            //$lastname = $keyarray['last_name'];
            //$itemname = $keyarray['item_name'];
            //$amount = $keyarray['payment_gross'];
         
            //echo ("<p><h3>Thank you for your purchase!</h3></p>");
         
            //echo ("<b>Payment Details</b><br>\n");
            //echo ("<li>Name: $firstname $lastname</li>\n");
            //echo ("<li>Item: $itemname</li>\n");
            //echo ("<li>Amount: $amount</li>\n");
            //echo ("");
        }
        else if (strcmp ($lines[0], "FAIL") == 0) {
            // log for manual investigation
        }
    }
    $con->safeExitRedirect('/paypal/finish?uid='.$_GET['uid'].'&item_number='.$_GET['item_number']);
}
$con->safeExitRedirect('/');
//$con->append();
?>