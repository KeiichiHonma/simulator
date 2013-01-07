<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin();
$con->t->assign('demo',true);
$con->append();
?>
