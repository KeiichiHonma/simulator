<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link href="/css/iphone.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/css/background_phone.php" rel="stylesheet" type="text/css" media="screen" />

{* demo1 *}
<script src="/js/flick.php?demo=1" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=1" type="text/javascript"></script>
<link href="/css/iphone5.php?d=0&p=0&c=0&demo=1" rel="stylesheet" type="text/css" media="screen" />
{* demo1はmobile-boxなし *}
{*<link rel='stylesheet' href='/css/popapps.php?p=2&demo=1' type='text/css' media='screen' />*}
<script type='text/javascript' src='/js/popapps.php?d=0&s=0&demo=1&speed=600'></script>

{* demo2 *}
<script src="/js/flick.php?demo=2" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=2" type="text/javascript"></script>
<link href="/css/iphone5.php?d=1&p=0&demo=2" rel="stylesheet" type="text/css" media="screen" />
<link rel='stylesheet' href='/css/popapps.php?p=0&d=1&demo=2' type='text/css' media='screen' />
<script type='text/javascript' src='/js/popapps.php?d=1&s=1&demo=2'></script>
</head>

<body class="b-index">
{include file="include/common/header.inc"}
<div id="topContentArea">
    <div class="inner01 cf">
        <div class="left">
            <h1>{$locale.topContentArea_h1}</h1>
            <p>{$locale.topContentArea_text}</p>
        </div>
        <div class="demo1_section">
            {include file="include/demo/demo1.inc"}
        </div>

    </div>
</div>
{include file="include/demo/demo2.inc"}
<!-- 
//////////////////////////////////////////////////////////////////////////////
contents
//////////////////////////////////////////////////////////////////////////////
-->
<div id="contents" class="c-index">
    
    <div id="performanceArea" class="cf">
        <div class="inner01 cf">
            
            <span class="point01 mt10">
                <p><em>{$locale.point01_title}</em>{$locale.point01_text}</p>
            </span>
            <span class="point02 mt10">
                <p><em>{$locale.point02_title}</em>{$locale.point02_text}</p>
            </span>
            
        </div>
    </div>
    
        
    <div id="inner02" class="mmt cf">
        
        <!-- anchor--><div id="a_features"> </div><!-- anchor-->

        <h2>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}feature_ttl_1_ja.png" alt="{$locale.reason_1_h2}" />{else}{$locale.reason_1_h2}{/if}</h2>
        <div class="featureArea cf">
            <div class="boxTemp box01 little">
                <img src="{$path}pic_feature_01.png" alt="No time limit" class="icon" />
                <h3>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}feature_subttl_1_ja.gif" alt="{$locale.featureArea_1_h3}" />{else}{$locale.featureArea_1_h3}{/if}</h3>
                <p>{$locale.featureArea_1_text}</p>
            </div>
            <div class="boxTemp box02 little">
                <img src="{$path}pic_feature_02.png" alt="Pay-as-used" class="icon" />
                <h3>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}feature_subttl_2_ja.gif" alt="{$locale.featureArea_2_h3}" />{else}{$locale.featureArea_2_h3}{/if}</h3>
                <p>{$locale.featureArea_2_text}</p>
            </div>
            <div class="boxTemp box03 little">
                <img src="{$path}pic_feature_03.png" alt="Setup in 10 seconds" class="icon" />
                <h3>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}feature_subttl_3_ja.gif" alt="{$locale.featureArea_3_h3}" />{else}{$locale.featureArea_3_h3}{/if}</h3>
                <p>{$locale.featureArea_3_text}</p>
            </div>
        </div>
        
        <h2>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}feature_ttl_2_ja.png" alt="{$locale.reason_2_h2}" />{else}{$locale.reason_2_h2}{/if}</h2>
        <div class="featureArea width100 mb60 cf">
            <div class="boxTemp">
                <img src="{$path}pic_feature_04.png" alt="Get feedback and requests from users" class="icon" />
                <h3>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}feature_subttl_4_ja.gif" alt="{$locale.featureArea_4_h3}" />{else}{$locale.featureArea_4_h3}{/if}</h3>
                <p class="center">{$locale.featureArea_4_text}</p>
            </div>
        </div>

        
        <!-- anchor--><div id="a_plans"> </div><!-- anchor-->

        <h2>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}choose_ttl_1_ja.png" alt="{$locale.choose_h2}" />{else}{$locale.choose_h2}{/if}</h2>
        {include file="include/common/plan.inc"}

        {if $faq}
        <!-- anchor--><div id="a_faq"> </div><!-- anchor-->
        <h2>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}faq_ttl_1_ja.png" alt="FAQ" />{else}FAQ{/if}</h2>
        
        <div class="faqArea pb80 cf">
        {foreach from=$faq key="key" item="faq" name="faq"}
            <p class="question">Q. {$faq.col_title}</p>
            <span class="arrow"><img src="{$path}icon_faq_01.png" alt="" /></span>
            <div class="boxTemp mb20">
                <p>{$faq.col_text|nl2br}</p>
            </div>
        {/foreach}
        </div>
        {/if}
    </div>
</div>
{if $debug}
<script type='text/javascript' src='https://www.simulator.813.co.jp/popapps?uid=1&s=4'></script>
{else}
<script type='text/javascript' src='https://www.popapp-simulator.com/popapps?uid=1&s=4'></script>
{/if}

{include file="include/common/footer.inc"}
</body>
</html>