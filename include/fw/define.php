<?php
//define('SETTING_INI',         'setting.ini');
define('SETTING_INI',         '/app/www/include/setting.ini');
define('APP_NAME',       'popApps');
define('SITE_NAME'    , 'popApps');
define('LOCALE_EN',           'en');
define('LOCALE_JA',           'ja');
define('FIRSTSP',       10);

define('SECRET_KEY',                 'ILUNAKEY');
//user
define('SESSION_U_HASH',             'SIM_USER_HASH');
define('SESSION_U_UID',              'SIM_USER_UID');
define('SESSION_U_NAME',             'SIM_USER_NAME');
define('SESSION_U_FACE',             'SIM_USER_FACE');
define('SESSION_U_USE_LICENCE',      'SIM_USER_USE_LICENCE');
define('SESSION_U_MAX_LICENCE',      'SIM_USER_MAX_LICENCE');


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
define('NAME_LICENCE_FREE',      'Free Plan');
define('NAME_LICENCE_BASIC',     'Basic Plan');
define('NAME_LICENCE_ADVANCE',   'Advance Plan');
define('NAME_LICENCE_PLUS',      'Plus Plan');

//licence cost
define('COST_LICENCE_FREE',      0);
define('COST_LICENCE_BASIC',     9);
define('COST_LICENCE_ADVANCE',   15);
define('COST_LICENCE_PLUS',      9);

//licence cost ja
define('COST_LICENCE_FREE_JA',      0);
define('COST_LICENCE_BASIC_JA',     1000);
define('COST_LICENCE_ADVANCE_JA',   1500);
define('COST_LICENCE_PLUS_JA',      1000);

//max licence
define('MAX_LICENCE_FREE',      1);
define('MAX_LICENCE_BASIC',     5);
define('MAX_LICENCE_ADVANCE',   10);

//licence status
define('LICENCE_NEW',       0);
define('LICENCE_EQUAL',     1);
define('LICENCE_OVER',      2);

//iphone5 size
define('IPHONE5_VERTICAL_WIDTH',   240);
define('IPHONE5_VERTICAL_HEIGHT',   593);

define('IPHONE5_HORIZON_WIDTH',   504);
define('IPHONE5_HORIZON_HEIGHT',   329);

define('IPHONE5_HOME_WIDTH',   504);
define('IPHONE5_HOME_HEIGHT',   593);

//max image count
define('MAX_IMAGE_COUNT',   9);

//max logo count
define('MAX_LOGO_COUNT',   24);
//define('MAX_LOGO_COUNT',   8);

//scroll
define('SCROLL_FIRST',     0);
define('SCROLL_TOP',       1);
define('SCROLL_HALF',      2);
define('SCROLL_BOTTOM',    3);
define('SCROLL_END',       4);

//scroll name
/*define('SCROLL_TOP_NAME',       'Top');
define('SCROLL_ONE_THIRD_NAME', 'One third from top');
define('SCROLL_MIDDLE_NAME',    'Middle');
define('SCROLL_TWO_THIRD_NAME', 'Two thirds from top');
define('SCROLL_BOTTOM_NAME',    'Bottom');*/

//ja
/*define('SCROLL_TOP_NAME_JA',       '最初から表示');
define('SCROLL_ONE_THIRD_NAME_JA', 'トップから1/3で表示');
define('SCROLL_MIDDLE_NAME_JA',    '中間で表示');
define('SCROLL_TWO_THIRD_NAME_JA', 'トップから2/3で表示');
define('SCROLL_BOTTOM_NAME_JA',    'ページの終わりで表示');*/

//position name
/*define('POSITION_LEFT_NAME',       'Left');
define('POSITION_RIGHT_NAME',      'Right');*/

//ja
/*define('POSITION_LEFT_NAME_JA',       '左側');
define('POSITION_RIGHT_NAME_JA',      '右側');*/

//position
define('POSITION_LEFT',      0);
define('POSITION_CENTER',     1);
define('POSITION_RIGHT',      2);


//direction
define('DIRECTION_VERTICAL',      0);
define('DIRECTION_HORIZON',     1);

//logo
define('CLOUDINARY_LOGO_SETTING',      'w_75,h_75,c_fill,r_12');
define('CLOUDINARY_LOGO_LITTLE_SETTING',      'w_35,h_35,c_fill,r_7');
?>