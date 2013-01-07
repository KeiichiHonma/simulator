<?php
require_once('locale/en/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Page Not Found',
    'title' => 'Page Not Found | popApps',
    //html
    'not_found_h1' => 'Page Not Found',
    'not_found_h2' => 'The page you were looking for was not found.',
    
);
$locale = array_merge($common_locale,$page_locale);
?>
