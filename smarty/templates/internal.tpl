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
        <h1 class="push pt60">{$locale.internal_h1}</h1>
        <div class="featureArea width100 cf">
            <div class="boxTemp mb60">
                <img src="{$path}pic_error.png" alt="error" class="icon" />
                <h2 class="subtitle">{$locale.internal_h2|nl2br}</h2>
                <ul class="list">
                    <li>{$locale.link_1}</li>
                    <li>{$locale.link_2}</li>
                    {if $is_auth}<li>{$locale.link_3}</li>{/if}
                </ul>
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