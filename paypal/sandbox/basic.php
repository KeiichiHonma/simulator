<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);
$con->t->assign('uid',$authManager->uid);
$con->append();
?>
