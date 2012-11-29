<?php
require_once('fw/checkManager.php');
class checkUserUpdate extends checkManager
{
    static private $check_list = array
    (
        'scroll'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('type'=>'int','func'=>'checkInt','arg'=>array('start'=>0,'end'=>4)),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
        'position'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('type'=>'int','func'=>'checkInt','arg'=>array('start'=>0,'end'=>2)),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            )
    );
    
    static public function checkError(){
        parent::checkError(self::$check_list,'user');
    }
}
?>