<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
<link href="/css/demo.css" rel="stylesheet" type="text/css" media="all" />
{include file="include/common/javascript.inc"}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link href="/css/iphone.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/css/background_phone.php" rel="stylesheet" type="text/css" media="screen" />

{* demo3 *}
<script src="/js/flick.php?demo=3" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=3" type="text/javascript"></script>
<link href="/css/iphone5.php?d=0&p=0&c=0&demo=3" rel="stylesheet" type="text/css" media="screen" />
{*<link rel='stylesheet' href='/css/popapps.php?p=2&demo=3' type='text/css' media='screen' />*}
<script type='text/javascript' src='/js/popapps.php?d=0&s=1&demo=3'></script>

{* demo4 *}
<script src="/js/flick.php?demo=4" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=4" type="text/javascript"></script>
<link href="/css/iphone5.php?d=1&p=0&demo=4" rel="stylesheet" type="text/css" media="screen" />
{*<link rel='stylesheet' href='/css/popapps.php?p=0&d=1&demo=4' type='text/css' media='screen' />*}
<script type='text/javascript' src='/js/popapps.php?d=1&s=2&demo=4'></script>

{* demo-home *}
<script type='text/javascript' src='/js/demo_home.js'></script>

</head>

<body class="b-index">
<!-- anchor--><div id="a_home"> </div><!-- anchor-->
{include file="include/common/header.inc"}

<div id="topCommonArea">
    <div class="inner01-common cf">
        <div class="left">
            <h1>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}demo_ttl_ja.png" alt="{$locale.topContentArea_h1}" />{else}{$locale.topContentArea_h1}{/if}</h1>
        </div>
    </div>
</div>

<div id="contents" class="c-index">

    <div id="demoArea" class="cf">
    
        {include file="include/demo/demo3.inc"}
        
        {include file="include/demo/demo4.inc"}
        <div id='demoHome' style='z-index: 2147483582;width:402px;position: fixed;bottom:-329px;right: 514px;padding:0px;margin:0px;'>
            <span class="point-right01 mt10">
                <p class="point-right">{$locale.point_home_1_1}<br />{$locale.point_home_1_2}<br />{$locale.point_home_1_3|nl2br}</p>
            </span>
            <span class="point-right02 mt10">
                <p class="point-right">{$locale.point_home_2_1}<br />{$locale.point_home_2_2|nl2br}</p>
            </span>
        </div>
    </div>
<div class="back">
<a href="/demo#a_home"><img src="{$path}back.png" /></a>
</div>
</div>
{if $debug}
<script type='text/javascript' src='https://www.simulator.813.co.jp/popapps?uid=1&s=4'></script>
{else}
<script type='text/javascript' src='https://www.popapp-simulator.com/popapps?uid=1&s=4'></script>
{/if}
{include file="include/common/analytics.inc"}
</body>
</html>