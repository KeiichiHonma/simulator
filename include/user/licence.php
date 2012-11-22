<?php
require_once('user/logic.php');
require_once('user/handle.php');
class userLicence
{
    public $logic;
    public $handle;
    public $user;
    public $use_licence;
    public $max_licence;
    public $is_add = false;
    
    function __construct(){
        $this->logic = new userLogic();
        $this->handle = new userHandle();
    }
    
    public function updateMaxLicence($uid,$item_name){
        $user = $this->logic->getOneUser($uid);
        if($user){
            $this->user = $user;
            switch ($item_name){
                case NAME_LICENCE_BASIC:
                    $plus = MAX_LICENCE_BASIC;
                break;
                case NAME_LICENCE_ADVANCE:
                    $plus = MAX_LICENCE_ADVANCE;
                break;
                default:
                    $plus = 0;
                break;
            }
            $new_max_licence = $user[0]['col_max_licence'] == MAX_LICENCE_FREE ? 0 + $plus : $user[0]['col_max_licence'] + $plus;
            $r = $this->handle->updateMaxLicenceRow($uid,$new_max_licence);
            if(!$r){
                return false;
            }else{
                return $new_max_licence;
            }
        }
    }
    
    public function setUserLicence($uid){
        $user = $this->logic->getOneUser($uid);
        if($user){
            global $con;
            $this->use_licence = $user[0]['col_use_licence'];
            $this->max_licence = $user[0]['col_max_licence'];
        
            //app add check
            if($user[0]['col_use_licence'] < $user[0]['col_max_licence']){
                $this->is_add = true;
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
        }

    }
}
?>
