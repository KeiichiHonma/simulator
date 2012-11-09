<?php
require_once('fw/handleManager.php');
require_once('paypal_payment_info/parameter.php');
class paypalPaymentInfoHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new paypalPaymentInfoParameter();
    }
    
    public function addRow($uid){
        $this->parameter->setAdd($uid);
        //return parent::addDebug(T_PAYPAL_PAYMENT,$this->parameter);
        return parent::addRow(T_PAYPAL_PAYMENT,$this->parameter);
    }

    public function updateRow($sid){
        $this->parameter->setUpdate($sid);
        return parent::updateRow(T_PAYPAL_PAYMENT,$this->parameter);
    }

    public function deleteRow(){
        return parent::deleteRow(T_PAYPAL_PAYMENT,$this->parameter);
    }

}
?>
