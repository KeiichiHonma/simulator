<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
</head>

<body class="b-console">
<div id="container">
    <div id="wrap">
{include file="include/common/header.inc"}
<div id="errorArea">

</div>
<br class="cl"/>
<!-- 
//////////////////////////////////////////////////////////////////////////////
contents
//////////////////////////////////////////////////////////////////////////////
-->
<div id="contents" class="c-common">
    <div id="inner02" class="mmt cf">
        <h2 class="pt60">Warning</h2>
        <div class="featureArea width100 cf">
            <div class="boxTemp mb60">
                <img src="{$path}pic_error.png" alt="error" class="icon" />
                <h3>{foreach from=$errorlist key="key" item="value" name="errorlist"}{$value|nl2br}<br />{/foreach}</h3>
                <p class="center">
                    
                </p>
            </div>
        </div>
    </div>
    <br class="cl"/>
</div>
{include file="include/common/footer.inc"}
    </div>
</div>
</body>
</html>