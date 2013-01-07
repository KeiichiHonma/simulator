<?php
require_once('fw/logicManager.php');
require_once('promo/table.php');
class promoLogic extends logicManager
{
    public $isSystem = FALSE;
    public $isLocale = FALSE;
    
    function __construct($isSystem = FALSE){
        $this->isSystem = $isSystem;
        if(!$this->isSystem) $this->isLocale = TRUE;//TRUEの場合LOCALEの変数が必須
    }

    function getResult($type = COMMON,$alias = null){
        $this->addSelectColumn($this->isLocale ? promoTable::getLocale($type) : promoTable::get($type),$alias);
        return parent::getResult(T_PROMO,$alias);
    }

    function getRow($id){
        $this->addSelectColumn($this->isLocale ? promoTable::getLocale() : promoTable::get());
        return parent::getRow(T_PROMO,$id);
    }

    function getOnePromo($pid){
        $this->addSelectColumn($this->isLocale ? promoTable::getLocale() : promoTable::get(),$alias);
        $this->setCond('_id',$pid);
        $this->validateCondition();
        return parent::getResult(T_PROMO);
    }
    
    function getOnePromoCode($promo_code){
        $this->addSelectColumn($this->isLocale ? promoTable::getLocale() : promoTable::get(),$alias);
        $this->setCond('col_code',$promo_code);
        $this->validateCondition();
        return parent::getResult(T_PROMO);
    }
    
    function getPromo($from = 0,$to = FIRSTSP,$order = null,$type = COMMON){
        $this->addSelectColumn($this->isLocale ? promoTable::getLocale($type) : promoTable::get($type),$alias);
        if(!is_null($order)){
            $this->addOrderColumn($order['column'],$order['desc_asc']);
        }else{
            $this->addOrderColumn('_id',DATABASE_ASC);//数字の小さい方が一番↑
        }
        $this->validateCondition();
        $this->setFound();
        if(!is_null($from) && !is_null($to)) $this->limit($from,$to);
        return parent::getResult(T_PROMO);
    }
}

class usePromoLogic extends logicManager
{
    public $isSystem = FALSE;
    public $isLocale = FALSE;
    
    function __construct($isSystem = FALSE){
        $this->isSystem = $isSystem;
        if(!$this->isSystem) $this->isLocale = TRUE;//TRUEの場合LOCALEの変数が必須
    }

    function getResult($type = COMMON,$alias = null){
        $this->addSelectColumn($this->isLocale ? usePromoTable::getLocale($type) : usePromoTable::get($type),$alias);
        return parent::getResult(T_USE_PROMO,$alias);
    }

    function getRow($id){
        $this->addSelectColumn($this->isLocale ? usePromoTable::getLocale() : usePromoTable::get());
        return parent::getRow(T_USE_PROMO,$id);
    }

    function getOneUsePromo($uid,$pid){
        $this->addSelectColumn($this->isLocale ? usePromoTable::getLocale() : usePromoTable::get(),$alias);
        $this->setCond('col_uid',$uid);
        $this->setCond('col_pid',$pid);
        return parent::getResult(T_USE_PROMO);
    }

    function getUsePromoCount($pid){

        $this->addCountColumn('_id','col_promo_count');
        $this->setCond('col_pid',$pid);
        return parent::getCount(T_USE_PROMO,'col_promo_count');


/*        $this->addSelectColumn($this->isLocale ? usePromoTable::getLocale() : usePromoTable::get(),$alias);
        $this->setCond('col_uid',$uid);
        $this->setCond('col_pid',$pid);
        return parent::getResult(T_USE_PROMO);*/
    }

    function getUsePromo($from = 0,$to = FIRSTSP,$order = null,$type = COMMON){
        $this->addSelectColumn($this->isLocale ? usePromoTable::getLocale($type) : usePromoTable::get($type),$alias);
        if(!is_null($order)){
            $this->addOrderColumn($order['column'],$order['desc_asc']);
        }else{
            $this->addOrderColumn('_id',DATABASE_ASC);//数字の小さい方が一番↑
        }
        $this->setFound();
        if(!is_null($from) && !is_null($to)) $this->limit($from,$to);
        return parent::getResult(T_USE_PROMO);
    }
}
?>