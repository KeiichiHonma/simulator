<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE,'/paypal/basic');
$con->t->assign('uid',$authManager->uid);
$con->append();
?>
