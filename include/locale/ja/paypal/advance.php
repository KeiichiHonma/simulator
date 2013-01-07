<?php
require_once('locale/ja/common.php');//共通翻訳ファイル
require_once('locale/ja/paypal/common.php');//paypal共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'advance,paypal,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Advance plan of popApps',
    'title' => 'Advance plan - popApps paypal',
    //html
    'h1' => 'h1'
);
$locale = array_merge($common_locale,$paypal_locale,$page_locale);
?>
