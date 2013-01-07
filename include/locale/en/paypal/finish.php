<?php
require_once('locale/en/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'success,paypal,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Thank you very much for your purchase.',
    'title' => 'Success - popApps paypal',
    //html
    'h1' => 'h1',

    'success_title' => 'Thank you very much for your purchase.',
    'success_text1' => 'Now you can add ',
    'success_text2' => ' more apps.',
    'success_text3' => 'Paid user is available to add or delete graphics.',
);
$locale = array_merge($common_locale,$page_locale);
?>
