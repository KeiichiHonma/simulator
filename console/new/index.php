<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/logic.php');
$user_logic = new userLogic();
$user = $user_logic->getOneUser($authManager->uid);

//require_once('user/licence.php');
//$user_licence = new userLicence();
//$user_licence->setUserLicence($authManager->uid);
if($user[0]['col_use_licence'] >= $user[0]['col_max_licence']){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_LICENCE_OVER);
}


if($con->isPost){
    if($_POST['method'] == 'analyze'){
        require_once('console/new/analyze.php');
    }elseif($_POST['method'] == 'create'){
        $max_licence = $user_licence->max_licence;
        $use_licence = $user_licence->use_licence;
        require_once('console/new/create.php');
    }else{
        $con->safeExitRedirect('/');
    }
}
//debug//
if($con->isDebug){
/*    $_POST['domain'] = 'http://simulator.813.co.jp/';
    $_POST['link']    = 'https://itunes.apple.com/jp/app/bokete-bokete-mian-bai-xie/id563446587';
    $_POST['scroll'] = SCROLL_BOTTOM;
    $_POST['position'] = POSITION_RIGHT;*/
}

$con->append();
?>
