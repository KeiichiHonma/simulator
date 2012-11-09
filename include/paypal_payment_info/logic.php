<?php
require_once('fw/logicManager.php');
require_once('paypal_payment_info/table.php');
class paypalPaymentInfoLogic extends logicManager
{
    function getRow($id,$type = COMMON){
        $this->addSelectColumn(paypalPaymentInfoTable::get($type));
        return parent::getRow(T_PAYPAL_PAYMENT,$id);
    }

    function getOnePaypalPaymentInfo($pid,$type = COMMON){
        $this->addSelectColumn(paypalPaymentInfoTable::get($type));
        $this->setCond('_id',$pid);
        return parent::getResult(T_PAYPAL_PAYMENT);
    }

    function getOneTxn($txn_id,$type = COMMON){
        $this->addSelectColumn(paypalPaymentInfoTable::get($type));
        $this->setCond('col_txn_id',$txn_id);
        return parent::getResult(T_PAYPAL_PAYMENT);
    }
}
?>