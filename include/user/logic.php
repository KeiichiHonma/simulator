<?php
require_once('fw/logicManager.php');
require_once('user/table.php');
class userLogic extends logicManager
{
    public $use_licence;
    public $max_licence;
    
    function getRow($id,$type = COMMON){
        $this->addSelectColumn(userTable::get($type));
        $this->validateCondition();
        return parent::getRow(T_USER,$id);
    }

    function getOneUser($uid,$type = COMMON){
        $this->addSelectColumn(userTable::get($type));
        $this->setCond('_id',$uid);
        $this->validateCondition();
        return parent::getResult(T_USER);
    }

    function getUserFacebook($fbid,$type = COMMON){
        $this->addSelectColumn(userTable::get($type));
        $this->setCond('col_fbid',$fbid);
        $this->validateCondition();
        //return parent::getDebug(T_USER);
        return parent::getResult(T_USER);
    }

    function checkLicence($uid,$type = COMMON){
        $this->addSelectColumn(userTable::get($type));
        $this->setCond('_id',$uid);
        $this->validateCondition();
        $user = parent::getResult(T_USER);
        $this->use_licence = $user[0]['col_use_licence'];
        $this->max_licence = $user[0]['col_max_licence'];
        
        if($user[0]['col_use_licence'] < $user[0]['col_max_licence']){
            return LICENCE_NEW;
        }elseif ($user[0]['col_use_licence'] == $user[0]['col_max_licence']){
            return LICENCE_EQUAL;
        }else{
            return LICENCE_OVER;
        }
    }
}
?>