<?php
require_once('locale/en/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'demo,app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Demo of popApps',
    'title' => 'Demo | popApps',
    //html
    'topContentArea_h1' => 'Demo page. Please scroll slowly.',
    
    'point_right_1_1' => '-Display from the lower right.',
    'point_right_1_2' => '-Display when you scroll down to the one third from the top.',
    'point_right_1_3' => '-Lead the user to install',
    'point_right_2_1' => '-Display vertical type of iPhone.',
    'point_right_2_2' => '-This makes it possible to have ultimate life-like control of the virtual iPhone using your mouse.',
    'point_right_2_3' => '-View the screenshot of app on vertical type of iPhone.',

    'point_left_1_1' => '-Display from the lower left.',
    'point_left_1_2' => '-Display when you scroll down to the two thirds from the top.',
    'point_left_1_3' => '-Lead the user to install',
    'point_left_2_1' => '-Display horizontal type of iPhone.',
    'point_left_2_2' => '-This makes it possible to have ultimate life-like control of the virtual iPhone using your mouse.',
    'point_left_2_3' => '-View the screenshot of app on horizontal type of iPhone.',

    'point_home_1_1' => '-Display the home screen of iPhone.',
    'point_home_1_2' => '-Display from the lower right.',
    'point_home_1_3' => "-Display when you scroll down to the end of the page.",
    
    'point_home_2_1' => '-Display vertical type of iPhone.',
    'point_home_2_2' => "-Display your each apps when you click the logo of apps.",
);
$locale = array_merge($common_locale,$page_locale);
?>
