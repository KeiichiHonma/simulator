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
define('E_CMMN_APP_EXISTS',                'SIM_CMMN_00006');
define('E_CMMN_INITIALIZE_RAND',           'SIM_CMMN_00007');
define('E_CMMN_VALIDATE_TIME',             'SIM_CMMN_00008');
define('E_CMMN_HANDLE_USER_STOP',          'SIM_CMMN_00009');
define('E_CMMN_LICENCE_OVER',              'SIM_CMMN_00010');
define('E_CMMN_HANDLE_ITUNES_STOP',           'SIM_CMMN_00011');

//phone error
define('E_PHONE_POPAPPS_EXISTS',              'SIM_PHONE_00001');
define('E_PHONE_DOMAIN_EXISTS',               'SIM_PHONE_00002');
define('E_PHONE_SCREENSHOTS_EXISTS',          'SIM_PHONE_00003');

//エラーメッセージ
define('SIM_CMMN_00001',               'URLが不正です。');
define('SIM_CMMN_00002',               '不正なリクエストです。クッキーが有効になっていない可能性があります。ブラウザの設定をご確認ください。');
define('SIM_CMMN_00003',               '現在、サーバーが混んでおります。しばらく経ってから、もう一度お試しください。');
define('SIM_CMMN_00004',               'applicationで処理が停止しました。再度実行してください。');
define('SIM_CMMN_00005',               'simulatorで処理が停止しました。再度実行してください。');
define('SIM_CMMN_00006',               'popAppが削除されたか存在しません。');
define('SIM_CMMN_00007',               '初期化中に不明なエラーが発生しました。弊社サポートセンターまでご連絡くださいませ。');
define('SIM_CMMN_00008',               'クーポン発行可能な期間が過ぎています。<br />発行可能な期間は初回ログイン時より3か月となっております。<br />再度ご購入いただきますようお願いいたします。');
define('SIM_CMMN_00009',               'userで処理が停止しました。再度実行してください。');
define('SIM_CMMN_00010',               'ライセンスを超過しています。追加ライセンスを購入してください。');
define('SIM_CMMN_00011',               'itunesに掲載されているアプリを取得することができませんでした。');

//電話エラーメッセージ 3行まで
define('SIM_PHONE_00001',               'popAppが削除されたか存在しません。');
define('SIM_PHONE_00002',               '使用可能なドメインではありません。');
define('SIM_PHONE_00003',               'スクリーンショットが削除されたか存在しません。');

// --------------------------
// USERエラー 認証
// --------------------------
//エラー宣言
define('E_AUTH_NG',                        'SIM_AUTH_00001');

//エラーメッセージ
define('SIM_AUTH_00001',               'ログインアカウント、あるいは、ログインパスワードが間違っています。');


// --------------------------
// ファイルシステムエラー
// --------------------------
define('E_SYSTEM_DIR_NO_EXIST',            'SIM_SYSTEM_00001');
define('E_SYSTEM_DIR_NO_WRITE',            'SIM_SYSTEM_00002');
define('E_SYSTEM_FILE_NO_WRITE',           'SIM_SYSTEM_00003');
define('E_SYSTEM_FILE_EXIST',              'SIM_SYSTEM_00004');

define('E_SYSTEM_FILE_1',                  'SIM_SYSTEM_00005');//E_SYSTEM_FILE_BASE_SIZE
define('E_SYSTEM_FILE_2',                  'SIM_SYSTEM_00006');//E_SYSTEM_FILE_FORM_SIZE
define('E_SYSTEM_FILE_3',                  'SIM_SYSTEM_00007');//E_SYSTEM_FILE_PART_UPLOAD
define('E_SYSTEM_FILE_4',                  'SIM_SYSTEM_00008');//E_SYSTEM_FILE_ALL_UPLOAD

define('E_SYSTEM_FILE_NOT_COPY',           'SIM_SYSTEM_00009');
define('E_CODE_EMPTY',                     'SIM_SYSTEM_00010');
define('E_CODE_DUPLICATION',               'SIM_SYSTEM_00011');
define('E_MAIL_NOT_SEND',                  'SIM_SYSTEM_00012');
define('E_SYSTEM_CSV_WRONG',               'SIM_SYSTEM_00014');
define('E_SYSTEM_PARAM_WRONG',             'SIM_SYSTEM_00015');



define('SIM_SYSTEM_00001',              'ディレクトリが存在しません');
define('SIM_SYSTEM_00002',              'ディレクトリへの書き込み権限がありません');
define('SIM_SYSTEM_00003',              'ファイルへの書き込み権限がありません');
define('SIM_SYSTEM_00004',              '既にファイルが存在しています');
define('SIM_SYSTEM_00005',              '！基本ファイルサイズの制限値を超えています');
define('SIM_SYSTEM_00006',              '！フォームファイルサイズの制限値を超えています');
define('SIM_SYSTEM_00007',              '！一部分のみしかアップロードされていませんでした');
define('SIM_SYSTEM_00008',              '！ファイルは必須です。ファイルがアップロードされませんでした');
define('SIM_SYSTEM_00009',              'ファイルコピーに失敗しました');
define('SIM_SYSTEM_00010',              'コードが入力されていません');
define('SIM_SYSTEM_00011',              'コードが重複しています');
define('SIM_SYSTEM_00012',              'メールの送信に失敗しました．');
define('SIM_SYSTEM_00014',              'CSVファイルが不正です');
define('SIM_SYSTEM_00015',              'パラメータが不正です');

?>
