<?php
require_once('fw/prepend.php');
//$con->isPost = TRUE;
if($con->isPost){
    require_once('fw/authManager.php');
    $authManager = new authManager();
    $authManager->validateLogin();
    //$_POST['promo_code'] = '50cd360cd3656';
    require_once('promo/logic.php');
    $promo_logic = new promoLogic();
    $promo = $promo_logic->getOnePromoCode($_POST['promo_code']);

    if(!$promo){
        require_once('fw/errorManager.php');
        errorManager::throwError(E_CMMN_PROMO_EXISTS);
    }

    //limit check
    $use_promo_logic = new usePromoLogic();
    $use_promo_count = $use_promo_logic->getUsePromoCount($promo[0]['_id']);
    if($promo[0]['col_limit'] <= $use_promo_count){
        require_once('fw/errorManager.php');
        errorManager::throwError(E_CMMN_PROMO_USED);
    }
    
    $use_promo = $use_promo_logic->getOneUsePromo($authManager->uid,$promo[0]['_id']);

    //存在したらNG
    if($use_promo){
        require_once('fw/errorManager.php');
        errorManager::throwError(E_CMMN_PROMO_USED);
    }
    
    if($_POST['method'] == 'use_promo'){
        //ライセンス更新
        require_once('user/licence.php');
        $user_licence = new userLicence();
        $new_max = $user_licence->updateMaxLicence($authManager->uid,null,$promo);
        
        require_once('fw/accountManager.php');
        $accountManager = new accountManager();
        $accountManager->moveFreeToPaid($user_licence);
        
        //use promo
        require_once('promo/handle.php');
        $use_promo_handle = new usePromoHandle();
        $promo = $use_promo_handle->addRow($authManager->uid,$promo[0]['_id']);
        
        $con->safeExitRedirect('/promo/finish');
    }else{
        $con->t->assign('promo',$promo);
        $con->append();
    }
}else{
    $con->safeExitRedirect('/');
}
?>
