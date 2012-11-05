<?php
require_once('fw/logicManager.php');
require_once('user/table.php');
class userLogic extends logicManager
{
    function getRow($id,$type = COMMON){
        $this->addSelectColumn(userTable::get($type));
        $this->validateCondition();
        return parent::getRow(T_USER,$id);
    }

    function getOneUser($uid,$type = COMMON){
        $this->addSelectColumn(userTable::get($type));
        $this->setCond('col_fbid',$uid);
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
}
?>