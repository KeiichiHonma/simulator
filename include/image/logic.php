<?php
require_once('fw/logicManager.php');
require_once('image/table.php');
class imageLogic extends logicManager
{
    function getRow($id,$type = COMMON){
        $this->addSelectColumn(imageTable::get($type));
        $this->validateCondition();
        return parent::getRow(T_IMAGE,$id);
    }

    function getOneImage($iid,$type = COMMON){
        $this->addSelectColumn(imageTable::get($type));
        $this->setCond('_id',$iid);
        $this->validateCondition();
        return parent::getResult(T_IMAGE);
    }
}
?>