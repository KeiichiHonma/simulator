<?php
require_once('fw/tableManager.php');
class promoTable extends tableManager
{
    static private $table_info = array
        (
            array('column'=>'_id',       'as'=>'promo_id',       'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'ctime',     'as'=>null,           'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'mtime',     'as'=>null,           'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'code',      'as'=>null,            'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'plus_licence','as'=>null,            'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'title_en',   'as'=>'col_title',    'locale'=>LOCALE_EN, 'type'=>COMMON, 'input'=>TRUE), 'group'=>null,
            array('column'=>'title_ja',   'as'=>'col_title',    'locale'=>LOCALE_JA, 'type'=>COMMON, 'input'=>TRUE, 'group'=>null),
            array('column'=>'detail_en',  'as'=>'col_detail',    'locale'=>LOCALE_EN, 'type'=>COMMON, 'input'=>TRUE), 'group'=>null,
            array('column'=>'detail_ja',  'as'=>'col_detail',    'locale'=>LOCALE_JA, 'type'=>COMMON, 'input'=>TRUE, 'group'=>null),
            array('column'=>'from',       'as'=>null,            'locale'=>null,      'type'=>COMMON, 'input'=>TRUE, 'group'=>null),
            array('column'=>'to',         'as'=>null,            'locale'=>null,      'type'=>COMMON, 'input'=>TRUE, 'group'=>null),
            array('column'=>'limit',      'as'=>null,              'locale'=>null,      'type'=>COMMON, 'input'=>TRUE, 'group'=>null),
            array('column'=>'remarks',    'as'=>null,         'locale'=>null, 'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'validate',  'as'=>'promo_validate', 'locale'=>null,      'type'=>COMMON, 'input'=>TRUE, 'group'=>null)
        );
    
    static public function get($type = COMMON){
        return parent::get(self::$table_info,$type);
    }

    //aliasあり
    //aliasありの場合、第2引数は配列となる
    static public function getAlias($type = COMMON){
        return parent::getAlias(self::$table_info,array('type'=>$type,'alias'=>A_PROMO));
    }

    static public function getLocale($type = COMMON){
        return parent::getLocale(self::$table_info,$type);
    }

    //aliasありの場合、第2引数は配列となる
    static public function getLocaleAlias($type = COMMON){
        return parent::getLocaleAlias(self::$table_info,array( 'type'=>$type,'alias'=>A_PROMO));
    }

    static public function getInput(){
        return parent::getInput(self::$table_info);
    }
}

class usePromoTable extends tableManager
{
    static private $table_info = array
        (
            array('column'=>'_id',       'as'=>'use_promo_id',       'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'ctime',     'as'=>null,           'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'mtime',     'as'=>null,           'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'uid',      'as'=>null,            'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
            array('column'=>'pid',      'as'=>null,            'locale'=>null,      'type'=>COMMON, 'input'=>FALSE, 'group'=>null),
        );
    
    static public function get($type = COMMON){
        return parent::get(self::$table_info,$type);
    }

    //aliasあり
    //aliasありの場合、第2引数は配列となる
    static public function getAlias($type = COMMON){
        return parent::getAlias(self::$table_info,array('type'=>$type,'alias'=>A_USE_PROMO));
    }

    static public function getLocale($type = COMMON){
        return parent::getLocale(self::$table_info,$type);
    }

    //aliasありの場合、第2引数は配列となる
    static public function getLocaleAlias($type = COMMON){
        return parent::getLocaleAlias(self::$table_info,array( 'type'=>$type,'alias'=>A_USE_PROMO));
    }

    static public function getInput(){
        return parent::getInput(self::$table_info);
    }
}
?>