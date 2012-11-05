<?php
require_once('fw/handleManager.php');
require_once('image/parameter.php');
class imageHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new imageParameter();
    }
    
    public function addRow($aid,$uid,$cloudinary){
        $this->parameter->setAdd($aid,$uid,$cloudinary);
        //return parent::addDebug(T_USER,$this->parameter);
        return parent::addRow(T_IMAGE,$this->parameter);
    }

    public function updateRow($uid){
        $this->parameter->setUpdate($uid);
        return parent::updateRow(T_IMAGE,$this->parameter);
    }

    public function deleteRow(){
        return parent::deleteRow(T_IMAGE,$this->parameter);
    }

}
?>
