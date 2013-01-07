<?php
require_once('locale/en/common.php');//共通翻訳ファイル
require_once('locale/en/console/common.php');//コンソール共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'dashboard,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Dashboard of popApps',
    'title' => 'Dashboard - popApps Management Console',
    //html
    'h1' => 'h1',
    
    'home_screen_title' => 'Your home screen',
    'home_setting_title' => 'Setting',
    
    'sort_title' => 'Change the order',
    'sort_text' => "You can change the order of\napps on home screen.\nPlease Don't Drop, Drag",//ホーム画面に表示されるアプリの順番を変更することができます。
);
$locale = array_merge($common_locale,$console_locale,$page_locale);
?>
