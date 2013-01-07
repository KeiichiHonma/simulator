<?php
require_once('locale/en/common.php');//共通翻訳ファイル
require_once('locale/en/console/common.php');//コンソール共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'View of popApps',
    'title' => 'View - popApps Management Console',
    //html
    'h1' => 'h1',
    'sort_title' => 'Change the order',
    'sort_text' => "You can change the order of the screenshot displayed on apps.\nPlease Don't Drop, Drag",//ホーム画面に表示されるアプリの順番を変更することができます。
);
$locale = array_merge($common_locale,$console_locale,$page_locale);
?>
