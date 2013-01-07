<?php
require_once('fw/prepend.php');
if( !isset($_SERVER["REMOTE_ADDR"]) || ( !$con->isDebug && strcasecmp($_SERVER["REMOTE_ADDR"],'210.173.251.227') == 0) ){
    $con->safeExitRedirect('/');
}
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE,'/paypal/sandbox/advance');
$con->t->assign('uid',$authManager->uid);
$con->append();
?>
