<?php
/*var_dump(uniqid());
die();*/
/*phpinfo();
die();*/
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin();

require_once('faq/logic.php');
$faq_logic = new faqLogic();
$faq = $faq_logic->getFaq();
$con->t->assign('faq',$faq);

$con->t->assign('index',true);
$con->append();
?>
