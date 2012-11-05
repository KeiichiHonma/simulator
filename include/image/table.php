<?php
require_once('fw/tableManager.php');
class imageTable extends tableManager
{
    static private $table_info = array
        (
            array('column'=>'_id',               'as'=>'image_id',      'type'=>MINIMUM,'input'=>FALSE, 'group'=>null),
            array('column'=>'ctime',             'as'=>null,            'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'mtime',             'as'=>null,            'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'aid',               'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'uid',               'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'public_id',         'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'width',             'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'height',            'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'format',            'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'resource_type',     'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'url',               'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
            array('column'=>'secure_url',        'as'=>null,            'type'=>COMMON, 'input'=>FALSE,  'group'=>null),
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