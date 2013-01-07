<?php
require_once('locale/ja/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'ページがみつかりませんでした。',
    'title' => 'ページがみつかりませんでした。 | popApps',
    //html
    'not_found_h1' => 'ページがみつかりませんでした。',
    'not_found_h2' => 'あなたがお探しのページは見つかりませんでした。',
    
);
$locale = array_merge($common_locale,$page_locale);
?>
