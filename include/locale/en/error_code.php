<?php
// --------------------------
// english
// --------------------------

//エラー宣言
define('E_CMMN_URL_WRONG',                 'SIM_CMMN_00001');
define('E_CMMN_TOKEN_WRONG',               'SIM_CMMN_00002');
define('E_CMMN_REQUEST_ERROR',             'SIM_CMMN_00003');
define('E_CMMN_HANDLE_APP_STOP',           'SIM_CMMN_00004');
define('E_CMMN_HANDLE_SIM_STOP',           'SIM_CMMN_00005');
define('E_CMMN_POPAPPS_EXISTS',            'SIM_CMMN_00006');
define('E_CMMN_INITIALIZE',                'SIM_CMMN_00007');
define('E_CMMN_REQUIRED_PARAMETER',        'SIM_CMMN_00008');

define('E_CMMN_HANDLE_USER_STOP',          'SIM_CMMN_00009');
define('E_CMMN_LICENCE_OVER',              'SIM_CMMN_00010');
define('E_CMMN_HANDLE_ITUNES_STOP',        'SIM_CMMN_00011');
define('E_PHONE_SCREENSHOTS_OVER',         'SIM_CMMN_00012');
define('E_CMMN_USER_EXISTS',               'SIM_CMMN_00013');
define('E_CMMN_SORT_IMAGES_STOP',          'SIM_CMMN_00014');
define('E_CMMN_SORT_USERS_STOP',           'SIM_CMMN_00015');
define('E_CMMN_DUPLICATION_SIM',           'SIM_CMMN_00016');
define('E_CMMN_SCREENSHOTS_HORIZON',       'SIM_CMMN_00017');
define('E_CMMN_SCREENSHOTS_VERTICAL',      'SIM_CMMN_00018');
define('E_CMMN_REQUIRED_LOGIN',            'SIM_CMMN_00019');
define('E_CMMN_PROMO_EXISTS',              'SIM_CMMN_00020');
define('E_CMMN_PROMO_USED',                'SIM_CMMN_00021');

//phone error
define('E_PHONE_POPAPPS_EXISTS',              'SIM_PHONE_00001');
define('E_PHONE_DOMAIN_EXISTS',               'SIM_PHONE_00002');
define('E_PHONE_SCREENSHOTS_EXISTS',          'SIM_PHONE_00003');

//エラーメッセージ
define('SIM_CMMN_00001',               'This URL is invalid.');
define('SIM_CMMN_00002',               'This is unauthorized access. Cookies may not be activated. Please check your browser.');
define('SIM_CMMN_00003',               'Now server busy. Please try later.');
define('SIM_CMMN_00004',               'We counld not register your app. Please try again.');
define('SIM_CMMN_00005',               'We counld not register popApps. Please try again.');
define('SIM_CMMN_00006',               'The App is deleted or does not exist.');
define('SIM_CMMN_00007',               'Unknown error occurred when initializing. Please ask our support center.');
define('SIM_CMMN_00008',               'The parameters are not specified.');
define('SIM_CMMN_00009',               'We could not update your user information. Please try again.');
define('SIM_CMMN_00010',               'You have already Maximum number of apps. Please purchase an additional license.');
define('SIM_CMMN_00011',               'We could not acquire your app ionformation that is published on iTunes.');
define('SIM_CMMN_00012',               'The specified screenshots exceed the maximum allowable number of screenshots.');


define('SIM_CMMN_00013',               'The User is deleted or does not exist.');
define('SIM_CMMN_00014',               'We could not sort the screenshots.  Please try again.');
define('SIM_CMMN_00015',               'We could not sort. Please try again.');
define('SIM_CMMN_00016',               'This is already registerd app.');
define('SIM_CMMN_00017',               'Specify the horizontal type of screenshot.');
define('SIM_CMMN_00018',               'Specify the vertical type of screenshot.');
define('SIM_CMMN_00019',               'Please sign in.');
define('SIM_CMMN_00020',               'The promo code is deleted or does not exist.');
define('SIM_CMMN_00021',               'The promo code is used.');

//電話エラーメッセージ 3行まで
define('SIM_PHONE_00001',               'The popApps is deleted or does not exist.');
define('SIM_PHONE_00002',               'This Website is not available for popApps. Please make sure the registerd URL. ');
define('SIM_PHONE_00003',               'The Screenshots is deleted or does not exist.');
?>
