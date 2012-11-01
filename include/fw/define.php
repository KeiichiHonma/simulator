<?php
define('SETTING_INI',         'setting.ini');
define('APP_NAME',       'Wedding Time Capsule');

define('LOCALE_EN',           'en');
define('LOCALE_JA',           'ja');

define('SITE_NAME'    , 'Wedding Time Capsule');
define('FIRSTSP',       10);

//ファイル系
define('FILES_DIR',       '/files');
//define('FILES_DIR',       '/include/files');
define('FILES_PATH',       $_SERVER['DOCUMENT_ROOT'].FILES_DIR);

//validate
define('VALIDATE_ALLOW',  0);
define('VALIDATE_DENY',  1);

//image
define('USER_FACE',  0);

//STATUS

define('STATUS_CALL',     0);
define('STATUS_JOIN',     1);
define('STATUS_SPECIAL',  9);

//TYPE
define('TYPE_GUEST',      0);
define('TYPE_WIFE',       1);
define('TYPE_HUSBAND',    2);
define('TYPE_MANAGER',    3);
define('TYPE_OWNER',      4);
?>