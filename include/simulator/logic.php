<?php
require_once('fw/logicManager.php');
require_once('simulator/table.php');
class simulatorLogic extends logicManager
{
    function getRow($id,$type = COMMON){
        $this->addSelectColumn(simulatorTable::get($type));
        $this->validateCondition();
        return parent::getRow(T_SIMULATOR,$id);
    }

    function getOneSimulator($sid,$type = COMMON){
        $this->addSelectColumn(simulatorTable::get($type));
        $this->setCond('_id',$sid);
        $this->validateCondition();
        return parent::getResult(T_SIMULATOR);
    }
}
?>