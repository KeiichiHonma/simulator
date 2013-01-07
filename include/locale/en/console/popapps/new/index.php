<?php
require_once('locale/en/common.php');//共通翻訳ファイル
require_once('locale/en/console/common.php');//コンソール共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'new,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'New popApps',
    'title' => 'New - popApps Management Console',
    //html
    'h1' => 'h1',
    
    'new_add_title' => 'New popApps Add',
    'new_images_title' => 'Images',
);
$locale = array_merge($common_locale,$console_locale,$page_locale);
?>
