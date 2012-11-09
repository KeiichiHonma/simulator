<?php
require_once('user/logic.php');
require_once('user/handle.php');
class userLicence
{
    public $logic;
    public $handle;
    public $user;
    
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
    
    public function updateLoginMaxLicence($new_max,$uid = false){
        if($uid){
            $user = $this->logic->getOneUser($uid);
            if($user){
                $this->user = $user;
                $new_max = $user[0]['col_max_licence'];
            }
        }
        //ライセンス数再セット
        require_once('fw/authManager.php');
        $authManager = new authManager();
        if($authManager->validateLogin() && $new_max !== FALSE) $authManager->setMaxLicence($new_max);
    }



}
?>
