<?php
require_once('fw/logicManager.php');
require_once('application/table.php');
class applicationLogic extends logicManager
{
    function getRow($id,$type = COMMON){
        $this->addSelectColumn(applicationTable::get($type));
        $this->validateCondition();
        return parent::getRow(T_APPLICATION,$id);
    }

    function getOneApp($aid,$type = COMMON){
        $this->addSelectColumn(applicationTable::get($type));
        $this->setCond('_id',$aid);
        $this->validateCondition();
        return parent::getResult(T_APPLICATION);
    }
}
?>