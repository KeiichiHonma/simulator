<?php
require_once('fw/tableManager.php');
class simulatorTable extends tableManager
{
    static private $table_info = array
        (
            array('column'=>'_id',               'as'=>'simulator_id',  'type'=>MINIMUM,'input'=>FALSE, 'group'=>null),
            array('column'=>'ctime',             'as'=>null,            'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'mtime',             'as'=>null,            'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'uid',               'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'aid',               'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'domain',            'as'=>null,            'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'title',             'as'=>null,            'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'images',             'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'link',              'as'=>null,            'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'scroll',            'as'=>null,            'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'position',          'as'=>null,            'type'=>COMMON, 'input'=>TRUE,  'group'=>null),
            array('column'=>'validate',          'as'=>null,            'type'=>COMMON, 'input'=>FALSE, 'group'=>null)
        );
    
    static public function get($type = COMMON){
        return parent::get(self::$table_info,$type);
    }

    //aliasあり
    //aliasありの場合、第2引数は配列となる
    static public function getAlias($type = COMMON){
        return parent::getAlias(self::$table_info,array('type'=>$type,'alias'=>A_SIMULATOR));
    }

    static public function getInput(){
        return parent::getInput(self::$table_info);
    }
}
?>