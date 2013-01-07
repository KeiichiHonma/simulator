<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/licence.php');
$user_licence = new userLicence();
$user_licence->setUserLicence($authManager->uid);
if(!$user_licence->user){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_USER_EXISTS);
}
$con->t->assign('user',$user_licence->user);


if($con->isPost){
    require_once('console/new/handle.php');
    $new_handle = new newHandle($user_licence->user,$_POST['method'],$_POST['itunes_url']);
}else{
    require_once('faq/logic.php');
    $faq_logic = new faqLogic();
    $faq = $faq_logic->getRow(4);//itunes url
    $con->t->assign('faq',$faq);
}


//debug//
if($con->isDebug){
    $_POST['url'] = 'http://www.simulator.813.co.jp/';
    //$_POST['itunes_url']    = 'https://itunes.apple.com/us/app/bad-piggies/id533451786?mt=8&ign-mpt=uo%3D4';
    //$_POST['itunes_url']    = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
/*    $_POST['link']    = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
    $_POST['scroll'] = SCROLL_BOTTOM;
    $_POST['position'] = POSITION_RIGHT;*/
}

$con->append();
?>
