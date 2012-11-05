<?php
require_once('fw/handleManager.php');
require_once('user/parameter.php');
class userHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new userParameter();
    }
    
    public function addRow($fbid,$name,$mail){
        $this->parameter->setAdd($fbid,$name,$mail);
        //return parent::addDebug(T_USER,$this->parameter);
        return parent::addRow(T_USER,$this->parameter);
    }

    public function updateRow($uid){
        $this->parameter->setUpdate($uid);
        return parent::updateRow(T_USER,$this->parameter);
    }

    public function updateLastLoginRow($uid){
        $this->parameter->setLastLoginUpdate($uid);
        //$this->setDebug();
        return parent::updateRow(T_USER,$this->parameter);
    }

    public function deleteRow(){
        return parent::deleteRow(T_USER,$this->parameter);
    }

}
?>
