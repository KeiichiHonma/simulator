<?php
define('SETTING_INI',         'setting.ini');
define('APP_NAME',       'appSimulator');
define('SITE_NAME'    , 'appSimulator');
define('LOCALE_EN',           'en');
define('LOCALE_JA',           'ja');
define('FIRSTSP',       10);

//ファイル系
define('FILES_DIR',       '/files');
//define('FILES_DIR',       '/include/files');
define('FILES_PATH',       $_SERVER['DOCUMENT_ROOT'].FILES_DIR);

//validate
define('VALIDATE_ALLOW',  0);
define('VALIDATE_DENY',  1);

//licence
define('LICENCE_FREE',      0);
define('LICENCE_BASIC',     1);
define('LICENCE_ADVANCE',   2);
define('LICENCE_PLUS',      3);

//licence name
define('NAME_LICENCE_FREE',      'PopApp Free Plan');
define('NAME_LICENCE_BASIC',     'PopApp Basic Plan');
define('NAME_LICENCE_ADVANCE',   'PopApp Advance Plan');
define('NAME_LICENCE_PLUS',      'PopApp Plus Plan');

//max licence
define('MAX_LICENCE_FREE',      1);
define('MAX_LICENCE_BASIC',     5);
define('MAX_LICENCE_ADVANCE',   10);

//licence status
define('LICENCE_NEW',       0);
define('LICENCE_EQUAL',     1);
define('LICENCE_OVER',      2);

//max image count
define('MAX_IMAGE_COUNT',   9);

//scroll
define('SCROLL_FIRST',      0);
define('SCROLL_SECOND',     1);
define('SCROLL_THIRD',      2);
define('SCROLL_FORTH',      3);
define('SCROLL_FIFTH',      4);

//position
define('POSITION_LEFT',      0);
define('POSITION_CENTER',     1);
define('POSITION_RIGHT',      2);

//logo
define('CLOUDINARY_LOGO_SETTING',      'w_75,h_75,c_fill,r_12');
?>