<?php
require_once('locale/en/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Internal Server Error',
    'title' => 'Internal Server Error | popApps',
    //html
    'internal_h1' => 'Internal Server Error',
    'internal_h2' => "Web server is too busy.\nApplication is shutting down on the Web server.",
    
);
$locale = array_merge($common_locale,$page_locale);
?>
