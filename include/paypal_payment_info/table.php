<?php
require_once('fw/tableManager.php');
class paypalPaymentInfoTable extends tableManager
{
    static private $table_info = array
        (
            array('column'=>'_id',               'as'=>'paypal_id',    'type'=>MINIMUM,'input'=>FALSE, 'group'=>null),
            array('column'=>'ctime',             'as'=>null,              'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'mtime',             'as'=>null,              'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'uid',               'as'=>null,              'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'mc_gross',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'protection_eligibility',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payer_id',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'tax',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payment_date',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payment_status',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'charset',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'first_name',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'mc_fee',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'custom',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payer_status',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'business',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'quantity',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payer_email',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'txn_id',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payment_type',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'btn_id',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'last_name',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'receiver_email',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payment_fee',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'shipping_discount',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'insurance_amount',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'receiver_id',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'txn_type',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'item_name',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'discount',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'mc_currency',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'item_number',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'residence_country',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'receipt_id',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'handling_amount',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'shipping_method',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'transaction_subject',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'payment_gross',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'shipping',            'as'=>null,              'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
        );
    
    static public function get($type = COMMON){
        return parent::get(self::$table_info,$type);
    }

    //aliasあり
    //aliasありの場合、第2引数は配列となる
    static public function getAlias($type = COMMON){
        return parent::getAlias(self::$table_info,array('type'=>$type,'alias'=>A_PAYPAL_PAYMENT));
    }

    static public function getInput(){
        return parent::getInput(self::$table_info);
    }
}
?>