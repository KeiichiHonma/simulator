<?php
require_once('locale/ja/common.php');//共通翻訳ファイル
require_once('locale/ja/console/common.php');//コンソール共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'new,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'New popApps',
    'title' => 'New - popApps Management Console',
    //html
    'h1' => 'h1',
    
    'new_add_title' => 'popAppsの追加',
    'new_images_title' => '使用する画像',
);
$locale = array_merge($common_locale,$console_locale,$page_locale);
?>
