<?php
require_once('fw/handleManager.php');
require_once('promo/parameter.php');
class promoHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new promoParameter();
    }
    
    public function addRow(){
        $this->parameter->setAdd();
        //return parent::addDebug(T_USER,$this->parameter);
        return parent::addRow(T_PROMO,$this->parameter);
    }

    public function updateRow(){
        $this->parameter->setUpdate();
        return parent::updateRow(T_PROMO,$this->parameter);
    }

    public function deleteRow(){
        return parent::deleteRow(T_PROMO,$this->parameter);
    }

}

class usePromoHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new usePromoParameter();
    }
    
    public function addRow($uid,$pid){
        $this->parameter->setAdd($uid,$pid);
        //return parent::addDebug(T_USER,$this->parameter);
        return parent::addRow(T_USE_PROMO,$this->parameter);
    }

    public function updateRow(){
        $this->parameter->setUpdate();
        return parent::updateRow(T_USE_PROMO,$this->parameter);
    }

    public function deleteRow(){
        return parent::deleteRow(T_USE_PROMO,$this->parameter);
    }

}
?>
