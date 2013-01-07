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
define('SIM_CMMN_00001',               'URLが不正です。');
define('SIM_CMMN_00002',               '不正なリクエストです。クッキーが有効になっていない可能性があります。ブラウザの設定をご確認ください。');
define('SIM_CMMN_00003',               '現在、サーバーが混んでおります。しばらく経ってから、もう一度お試しください。');
define('SIM_CMMN_00004',               'アプリの登録ができませんでした。再度実行してください。');
define('SIM_CMMN_00005',               'popAppsの登録ができませんでした。再度実行してください。');
define('SIM_CMMN_00006',               'アプリが削除されたか存在しません。');
define('SIM_CMMN_00007',               '初期化中に不明なエラーが発生しました。popAppsサポートまでご連絡くださいませ。');
define('SIM_CMMN_00008',               '必要なパラメータが指定されていません。');
define('SIM_CMMN_00009',               'ユーザー情報の更新ができませんでした。再度実行してください。');
define('SIM_CMMN_00010',               'ライセンスを超過しています。追加ライセンスを購入してください。');
define('SIM_CMMN_00011',               'itunesに掲載されているアプリ情報を取得することができませんでした。');
define('SIM_CMMN_00012',               'アップロード可能なスクリーンショットの枚数を超えています。');


define('SIM_CMMN_00013',               'ユーザーが削除されたか存在しません。');
define('SIM_CMMN_00014',               'スクリーンショットをソートできませんでした。再度実行してください。');
define('SIM_CMMN_00015',               'ソートできませんでした。再度実行してください。');
define('SIM_CMMN_00016',               '既に登録済みのアプリです。');
define('SIM_CMMN_00017',               '横型のスクリーンショットを指定してください。');
define('SIM_CMMN_00018',               '縦型のスクリーンショットを指定してください。');
define('SIM_CMMN_00019',               'ログインが必要です。');
define('SIM_CMMN_00020',               'プロモーションコードが削除されたか存在しません。');
define('SIM_CMMN_00021',               'ご指定のプロモーションコードは既に使用されています。');

//電話エラーメッセージ 3行まで
define('SIM_PHONE_00001',               'popAppsが削除されたか存在しません。');
define('SIM_PHONE_00002',               'popAppsを利用できるWebサイトではありません。登録したWebサイトURLをご確認ください。');
define('SIM_PHONE_00003',               'スクリーンショットが削除されたか存在しません。');
?>
