<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/logic.php');
$user_logic = new userLogic();
$user = $user_logic->getOneUser($authManager->uid);
if($user[0]['col_use_licence'] >= $user[0]['col_max_licence']){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_LICENCE_OVER);
}


if($con->isPost){
    require_once('console/new/handle.php');
    $new_handle = new newHandle($user,$_POST['method'],$_POST['itunes_url']);
}
//debug//
if($con->isDebug){
    $_POST['domain'] = 'http://simulator.813.co.jp/';
/*    $_POST['link']    = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
    $_POST['scroll'] = SCROLL_BOTTOM;
    $_POST['position'] = POSITION_RIGHT;*/
}

$con->append();
?>
