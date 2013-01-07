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
//home画面
$iphone = utilManager::getIphoneHome($user_licence->user);
$con->t->assign('iphone',$iphone);

$con->t->assign('home_url',utilManager::getPopAppsHomeURL($authManager->uid,$user_licence->user));


require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic(TRUE);
$simulators = $simulator_logic->getUserSimulator($authManager->uid);
if($simulators){
    $con->t->assign('simulators',$simulators);

    //logo
    $logos = array();
    foreach ($simulators as $key => $value){
        if(!is_null($value['simulator_mobile_images'])){
            $unserialize = unserialize($value['simulator_mobile_images']);
        }else{
            $unserialize = unserialize($value['application_mobile_images']);
        }
        $logos[$value['simulator_id']] = array('public_id'=>$unserialize['logo']['public_id'],'transformations_url_little'=>$unserialize['logo']['transformations_url_little']);
    }
    $con->t->assign('logos',$logos);
}
$con->t->assign('is_console_phone',0);
$con->t->assign('is_home',0);
$con->append();
?>
