<?php
require_once('locale/ja/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'demo,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Demo of popApps',
    'title' => 'Demo | popApps',
    //html
    'topContentArea_h1' => 'Demo page. Please scroll slowly.',
    
    'point_right_1_1' => '-画面の右下から表示',
    'point_right_1_2' => '-1/3スクロールしたら表示',
    'point_right_1_3' => '-インストールまで誘導します。',
    'point_right_2_1' => '-縦タイプのiPhoneが表示',
    'point_right_2_2' => '-iPhoneと同じ操作感覚をマウス実現して画面繊維',
    'point_right_2_3' => '-アプリのスクリーンショットを縦タイプのiphone内で閲覧',

    'point_left_1_1' => '-画面の左下から表示',
    'point_left_1_2' => '-2/3スクロールしたら表示',
    'point_left_1_3' => '-インストールまで誘導します。',
    'point_left_2_1' => '-横タイプのiPhoneが表示',
    'point_left_2_2' => '-iPhoneと同じ操作感覚をマウス実現して画面繊維',
    'point_left_2_3' => '-アプリのスクリーンショットを横タイプのiphone内で閲覧',

    'point_home_1_1' => '-iPhoneのホーム画面を表示',
    'point_home_1_2' => '-画面の右下から表示',
    'point_home_1_3' => "-ページの最後までスクロールしたら表示",
    
    'point_home_2_1' => '-縦タイプのiPhoneが表示',
    'point_home_2_2' => "-アプリのロゴをクリックすると個別のアプリが表示",
);
$locale = array_merge($common_locale,$page_locale);
?>
