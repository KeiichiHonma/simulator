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
}
//debug//
if($con->isDebug){
    $_POST['url'] = 'http://simulator.813.co.jp/';
/*    $_POST['link']    = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
    $_POST['scroll'] = SCROLL_BOTTOM;
    $_POST['position'] = POSITION_RIGHT;*/
}

$con->append();
?>
