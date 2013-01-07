<?php
require_once('locale/ja/common.php');//共通翻訳ファイル
require_once('locale/ja/console/common.php');//コンソール共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'setting,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Setting of popApps',
    'title' => 'Setting - popApps Management Console',
    //html
    'h1' => 'h1',
);
$locale = array_merge($common_locale,$console_locale,$page_locale);
?>
