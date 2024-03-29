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
    
    public function updateMaxLicence($uid,$item_number,$promo = FALSE){
        $this->user = $this->logic->getOneUser($uid);
        if($this->user){
            if(!$promo){
                switch ($item_number){
                    case LICENCE_BASIC:
                        $plus = MAX_LICENCE_BASIC;
                    break;
                    case LICENCE_ADVANCE:
                        $plus = MAX_LICENCE_ADVANCE;
                    break;
                    default:
                        $plus = 0;
                    break;
                }
            }elseif(isset($promo[0]['col_plus_licence']) && is_numeric($promo[0]['col_plus_licence'])){
                $plus = $promo[0]['col_plus_licence'];
            }else{
                $plus = 0;
            }

            $new_max_licence = $this->user[0]['col_max_licence'] == MAX_LICENCE_FREE ? MAX_LICENCE_FREE + $plus : $this->user[0]['col_max_licence'] + $plus;
            $r = $this->handle->updateMaxLicenceRow($uid,$new_max_licence);
            if(!$r){
                return false;
            }else{
                return $new_max_licence;
            }
        }
    }
    
    public function setUserLicence($uid){
        $this->user = $this->logic->getOneUser($uid);
        if($this->user){
            global $con;
            $this->use_licence = $this->user[0]['col_use_licence'];
            $this->max_licence = $this->user[0]['col_max_licence'];
        
            //app add check
            if($this->user[0]['col_use_licence'] < $this->user[0]['col_max_licence']){
                $this->is_add = true;
                $con->t->assign('is_app_add',true);
            }
            //plan check
            if($this->user[0]['col_max_licence'] == 1){
                $con->t->assign('is_free',true);
                $con->t->assign('max_licence',1);
            }else{
                $con->t->assign('max_licence',$this->user[0]['col_max_licence']);
            }
            $con->t->assign('use_licence',$this->user[0]['col_use_licence']);
        }

    }
}
?>
