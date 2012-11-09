<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulators = $simulator_logic->getUserSimulator($authManager->uid);
$con->t->assign('simulators',$simulators);
$con->append();
?>
