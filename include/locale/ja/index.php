<?php
require_once('locale/ja/common.php');//共通翻訳ファイル
$page_locale = array(
    //seo
    'keywords' => 'app, apps, iphone, application, promotion, campaign, marketing',
    'description' => 'Display your app online as if it were on a real iPhone. This will lead to a broadening of the user\'s imagination and futher encourage them to download and install your app.',
    'title' => 'popApps | iPhone App Promotion and Marketing Specialized Service',
    //html
    'h1' => 'h1',
    //img
    'topContentArea_h1' => '仮想iPhoneがあなたのWebに',
    'topContentArea_text' => "iPhoneが実際にユーザーの目の前にあるかのように見せることができ、\nアプリの利用イメージを想起させインストールを促進させます！",
    'point01_title' => 'iPhoneが下から飛び上がる！！',
    'point01_text' => "popAppsをあなたのサイトに設置すると、アプリを表示した仮想iphoneがウインドウの下から飛び出します。アプリを強烈に印象付けます！",
    'point02_title' => '限りなくiphoneに近い操作を実現。',
    'point02_text' => "iphoneと同じ操作をマウスで再現。",
    
    'reason_1_h2' => 'popAppsの特徴',
    'featureArea_1_h3' => '期間制限なし',
    'featureArea_1_text' => '一度購入すれば永久に使用可能。月額使用料や更新料はかかりません。',
    'featureArea_2_h3' => '使いたい数だけ購入すればOK',
    'featureArea_2_text' => 'ライセンスはアプリ数での販売のため、使用したいアプリ分だけ購入すればOK。',
    'featureArea_3_h3' => "使用は簡単。10秒でセットアップ完了",
    'featureArea_3_text' => 'Itunesのアプリを登録するだけで使用可能。アプリ紹介ページをリッチにすることができます。',
    'reason_2_h2' => 'コメント機能',
    'featureArea_4_h3' => 'アプリユーザーからの感想や要望を取得',
    'featureArea_4_text' => 'ユーザーがアプリに対する感想や要望をあなた宛てにダイレクトに送れます。今後のアプリ開発に役立てることが可能です。',
    
    'choose_h2' => 'プラン選択',
    //各プランの情報はcommonに。paypalで使用するため
);
$locale = array_merge($common_locale,$page_locale);
?>
