<?php
/*$result = array('success'=>true,'public_id'=>$_POST['public_id']);
echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
die();
*/
require_once('fw/container.php');
$con = new container();
require_once('fw/authManager.php');
$authManager = new authManager();
$bl = $authManager->validateLogin();
if($bl){
    require('fw/handleUploder.php');
    $destroy = new handleDestroy();
    $result = $destroy->handleCloudinaryDestroy($_POST['public_id'],$_POST['sid']);
    echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
}else{
    echo json_encode(array('error' => true, 'mes' => constant(E_CMMN_REQUIRED_LOGIN)));
}
die();
?>