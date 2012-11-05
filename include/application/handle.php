<?php
require_once('fw/handleManager.php');
require_once('application/parameter.php');
class applicationHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new applicationParameter();
    }
    
    public function addRow($itunes_id,$itunes_url,$name){
        $this->parameter->setAdd($itunes_id,$itunes_url,$name);
        //return parent::addDebug(T_USER,$this->parameter);
        return parent::addRow(T_APPLICATION,$this->parameter);
    }

    public function updateRow($uid){
        $this->parameter->setUpdate($uid);
        return parent::updateRow(T_APPLICATION,$this->parameter);
    }

    public function updateLastLoginRow($uid){
        $this->parameter->setLastLoginUpdate($uid);
        //$this->setDebug();
        return parent::updateRow(T_APPLICATION,$this->parameter);
    }

    public function deleteRow(){
        return parent::deleteRow(T_APPLICATION,$this->parameter);
    }

}
?>
