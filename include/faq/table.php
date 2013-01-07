<?php
require_once('fw/tableManager.php');
class faqTable extends tableManager
{
    static private $table_info = array
        (
            array('column'=>'_id',       'as'=>'faq_id',       'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'ctime',     'as'=>null,           'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'mtime',     'as'=>null,           'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'title_en',  'as'=>'col_title',    'locale'=>LOCALE_EN, 'type'=>COMMON, 'input'=>FALSE), 'group'=>null,
            array('column'=>'title_ja',  'as'=>'col_title',    'locale'=>LOCALE_JA, 'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'text_en',   'as'=>'col_text',    'locale'=>LOCALE_EN, 'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'text_ja',   'as'=>'col_text',    'locale'=>LOCALE_JA, 'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'validate',  'as'=>'faq_validate', 'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null)
        );
    
    static public function get($type = COMMON){
        return parent::get(self::$table_info,$type);
    }

    //aliasあり
    //aliasありの場合、第2引数は配列となる
    static public function getAlias($type = COMMON){
        return parent::getAlias(self::$table_info,array('type'=>$type,'alias'=>A_FAQ));
    }

    static public function getLocale($type = COMMON){
        return parent::getLocale(self::$table_info,$type);
    }

    //aliasありの場合、第2引数は配列となる
    static public function getLocaleAlias($type = COMMON){
        return parent::getLocaleAlias(self::$table_info,array('type'=>$type,'alias'=>A_FAQ));
    }

    static public function getInput(){
        return parent::getInput(self::$table_info);
    }
}
?>