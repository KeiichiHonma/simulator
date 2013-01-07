<?php
require_once('fw/logicManager.php');
require_once('faq/table.php');
class faqLogic extends logicManager
{
    public $isSystem = FALSE;
    public $isLocale = FALSE;
    
    function __construct($isSystem = FALSE){
        $this->isSystem = $isSystem;
        if(!$this->isSystem) $this->isLocale = TRUE;//TRUEの場合LOCALEの変数が必須
    }

    function getResult($type = COMMON,$alias = null){
        $this->addSelectColumn($this->isLocale ? faqTable::getLocale($type) : faqTable::get($type),$alias);
        return parent::getResult(T_FAQ,$alias);
    }

    function getRow($id,$type = COMMON){
        $this->addSelectColumn($this->isLocale ? faqTable::getLocale($type) : faqTable::get($type));
        return parent::getRow(T_FAQ,$id);
    }

    function getFaq($from = 0,$to = FIRSTSP,$order = null,$type = COMMON){
        $this->addSelectColumn($this->isLocale ? faqTable::getLocale($type) : faqTable::get($type),$alias);
        if(!is_null($order)){
            $this->addOrderColumn($order['column'],$order['desc_asc']);
        }else{
            $this->addOrderColumn('_id',DATABASE_ASC);//数字の小さい方が一番↑
        }
        $this->validateCondition();
        $this->setFound();
        if(!is_null($from) && !is_null($to)) $this->limit($from,$to);
        return parent::getResult(T_FAQ);
    }
}
?>