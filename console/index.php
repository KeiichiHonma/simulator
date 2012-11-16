<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('user/logic.php');
$user_logic = new userLogic();
$user = $user_logic->getOneUser($authManager->uid);
//app add check
if($user[0]['col_use_licence'] < $user[0]['col_max_licence']){
    $con->t->assign('is_app_add',true);
}
//plan check
if($user[0]['col_max_licence'] == 1){
    $con->t->assign('is_free',true);
    $con->t->assign('max_licence',1);
}else{
    $con->t->assign('max_licence',$user[0]['col_max_licence']);
}
$con->t->assign('use_licence',$user[0]['col_use_licence']);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulators = $simulator_logic->getUserSimulator($authManager->uid);
$con->t->assign('simulators',$simulators);
$con->append();
?>
