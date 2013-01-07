<?php
require_once('fw/checkManager.php');
class checkItunesURL extends checkManager
{
    static private $check_list = array
    (
        'itunes_url'=>array
            (
            array('type'=>'must','func'=>'checkMust','arg'=>null),
            array('type'=>'url_validate','func'=>'checkUrl','arg'=>null),
            array('type'=>'itunes_validate','func'=>'checkUrl','arg'=>null),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            )
    );
    
    static public function checkError(){
        parent::checkError(self::$check_list,'application');
    }
}
class checkApplicationEntry extends checkManager
{
    static private $check_list = array
    (
        'title'=>array
            (
            array('message'=>'！タイトルは必須です。','func'=>'checkMust','arg'=>null),
            array('message'=>'！タイトルは全角で40字(半角80字)以内で入力してください。','func'=>'checkLength','arg'=>array('start'=>1,'end'=>80)),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
        'detail'=>array
            (
            array('message'=>'！内容は必須です。','func'=>'checkMust','arg'=>null),
            array('message'=>null,'func'=>'replaceInput','arg'=>'title')
            ),
    );
    
    static public function checkError(){
        parent::checkError(self::$check_list);
    }
}
?>