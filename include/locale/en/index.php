<?php
require_once('locale/en/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Display your app online as if it were on a real iPhone. This will lead to a broadening of the user\'s imagination and futher encourage them to download and install your app.',
    'title' => 'popApps | iPhone App Promotion and Marketing Specialized Service',
    //html
    'h1' => 'h1',
    //img
    'topContentArea_h1' => 'Display your app on virtual iPhone.',
    'topContentArea_text' => "Display your app online as if it were on a real iPhone.\nThis will lead to a broadening of the user's imagination and further encourage them to download and install your app.",
    'point01_title' => 'A virtual iPhone will pop up from the bottom of the browser!',
    'point01_text' => 'The virtual iPhone that displays your app will have a big impact on the user.',
    'point02_title' => 'You have life-like control of the virtual iPhone.',
    'point02_text' => "You can tap the screen just as you would a real iPhone.\nYou can control the virtual iPhone using your mouse.",
    
    'reason_1_h2' => 'popApps Features',
    'featureArea_1_h3' => 'No time limit.',
    'featureArea_1_text' => 'Once you buy it you can use it forever with no monthly fees or renewal fees.',
    'featureArea_2_h3' => 'You can buy as much as you want.',
    'featureArea_2_text' => 'You must per chase one license per app.',
    'featureArea_3_h3' => "It's easy to use.\nOnly 10 seconds to set up.",
    'featureArea_3_text' => 'You can use it just by registering your app with iTunes.  Enrich your app introduction page.',
    'reason_2_h2' => 'Here are the options',
    'featureArea_4_h3' => 'Get feedback from the users',
    'featureArea_4_text' => 'Users can directly send you feedback and requests, which are useful for the continued development of your app.',
    
    'choose_h2' => 'Choose a Plan',
    //各プランの情報はcommonに。paypalで使用するため
);
$locale = array_merge($common_locale,$page_locale);
?>
