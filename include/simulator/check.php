<?php
require_once('fw/checkManager.php');
class checkSimulatorEntry extends checkManager
{
    static private $check_list = array
    (
        'title'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('type'=>'length','func'=>'checkLength','arg'=>array('start'=>1,'end'=>80)),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
        'domain'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('type'=>'url_validate','func'=>'checkUrl','arg'=>null),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
        'link'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('type'=>'url_validate','func'=>'checkUrl','arg'=>null),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
        'scroll'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
        'position'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
    );
    
    static public function checkError(){
        parent::checkError(self::$check_list,'simulator');
    }
}
?>