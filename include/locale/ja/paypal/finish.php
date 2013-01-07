<?php
require_once('locale/ja/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'success,paypal,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Thank you very much for your purchase.',
    'title' => 'Success - popApps paypal',
    //html
    'h1' => 'h1',

    'success_title' => 'ご購入ありがとうございます。',
    'success_text1' => '追加できるアプリが ',
    'success_text2' => ' 増えました。',
    'success_text3' => '有料ユーザーはファイルの追加、削除をすることが可能です。',
);
$locale = array_merge($common_locale,$page_locale);
?>
