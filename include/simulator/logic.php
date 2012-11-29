<?php
require_once('fw/logicManager.php');
require_once('application/table.php');
require_once('simulator/table.php');
class simulatorLogic extends logicManager
{
    public $is_console = FALSE;
    
    function __construct($is_console = FALSE){
        $this->is_console = $is_console;
    }
    function getRow($id,$type = COMMON){
        $this->addSelectColumn(simulatorTable::get($type));
        if(!$this->is_console) $this->validateCondition();
        return parent::getRow(T_SIMULATOR,$id);
    }

    function getOneSimulator($sid,$type = COMMON){
        $this->addSelectColumn(simulatorTable::get($type));
        $this->setCond('_id',$sid);
        if(!$this->is_console) $this->validateCondition();
        return parent::getResult(T_SIMULATOR);
    }

    function getUserSimulator($uid,$type = COMMON){
        $this->addSelectColumn(simulatorTable::getAlias());
        $this->addJoin( T_APPLICATION, A_APPLICATION.'._id = '.A_SIMULATOR.'.col_aid',A_APPLICATION,DATABASE_INNER_JOIN);
        $this->addSelectColumn(applicationTable::getAlias());
        
        $this->setCondAlias('col_uid',$uid,A_SIMULATOR);
        if(!$this->is_console){
            $this->validateCondition(A_APPLICATION);
            $this->validateCondition(A_SIMULATOR);
        }
        
        return parent::getResult(T_SIMULATOR,A_SIMULATOR);
    }

    function getUserAppSimulator($uid,$aid,$type = COMMON){
        $this->addSelectColumn(simulatorTable::get($type));
        $this->setCond('col_aid',$aid);
        $this->setCond('col_uid',$uid);
        if(!$this->is_console) $this->validateCondition();
        return parent::getResult(T_SIMULATOR);
    }

    function getAppSimulator($sid,$type = COMMON){
        $this->addSelectColumn(simulatorTable::getAlias());
        $this->addJoin( T_APPLICATION, A_APPLICATION.'._id = '.A_SIMULATOR.'.col_aid',A_APPLICATION,DATABASE_INNER_JOIN);
        $this->addSelectColumn(applicationTable::getAlias());
        $this->setCondAlias('_id',$sid,A_SIMULATOR);
        if(!$this->is_console){
            $this->validateCondition(A_APPLICATION);
            $this->validateCondition(A_SIMULATOR);
        }
        return parent::getResult(T_SIMULATOR,A_SIMULATOR);
    }

    function getUserItunesSimulator($uid,$itunes_id,$type = COMMON){
        $this->addSelectColumn(simulatorTable::getAlias());
        $this->addJoin( T_APPLICATION, A_APPLICATION.'._id = '.A_SIMULATOR.'.col_aid',A_APPLICATION,DATABASE_INNER_JOIN);
        $this->addSelectColumn(applicationTable::getAlias());
        $this->setCondAlias('col_uid',$uid,A_SIMULATOR);
        $this->setCondAlias('col_itunes_id',$itunes_id,A_APPLICATION);
        if(!$this->is_console){
            $this->validateCondition(A_APPLICATION);
            $this->validateCondition(A_SIMULATOR);
        }
        return parent::getResult(T_SIMULATOR,A_SIMULATOR);
    }
}
?>