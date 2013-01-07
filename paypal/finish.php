<?php
require_once('fw/prepend.php');
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin();
if(isset($_GET['item_number'])){
    switch ($_GET['item_number']){
        case LICENCE_BASIC:
            $item_name = NAME_LICENCE_BASIC;
            $add_app = MAX_LICENCE_BASIC;
        break;
        case LICENCE_ADVANCE:
            $item_name = NAME_LICENCE_ADVANCE;
            $add_app = MAX_LICENCE_ADVANCE;
        break;
        default:
            $item_name = '';
        break;
    }
    
    $con->t->assign('add_app',$add_app);
}
$con->append();
?>
