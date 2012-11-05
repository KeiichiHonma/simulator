<?php
var_dump('test');
die();
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$is_auth = $authManager->validateLogin();
$con->t->assign('is_auth',$is_auth);

$con->append();
?>
