<?php
require_once('fw/handleManager.php');
require_once('simulator/parameter.php');
class simulatorHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new simulatorParameter();
    }
    
    public function addRow($uid,$aid){
        $this->parameter->setAdd($uid,$aid);
        //return parent::addDebug(T_USER,$this->parameter);
        return parent::addRow(T_SIMULATOR,$this->parameter);
    }

    public function updateRow($sid){
        $this->parameter->setUpdate($sid);
        return parent::updateRow(T_SIMULATOR,$this->parameter);
    }

    public function updateImagesRow($sid,$images){
        $this->parameter->setImagesUpdate($sid,$images);
        return parent::updateRow(T_SIMULATOR,$this->parameter);
    }

    public function deleteRow(){
        return parent::deleteRow(T_SIMULATOR,$this->parameter);
    }

}
?>
