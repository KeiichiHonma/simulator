<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
</head>

<body class="b-console"><div id="container"><div id="wrap">
{include file="include/common/header.inc"}
<div id="commonTopArea">
    <div class="inner01 cf">
        <h1>Thank&nbsp;You&nbsp;For&nbsp;Upgrade</h1>
    </div>

</div>

<div id="contents" class="c-common">
    <div id="inner02" class="mt40 mb60">
        <div class="chooseArea cf">
            <!-- plus str -->
            <div class="boxTemp width100 cf">
                <div class="title bgBlue">{$locale.success_title}</div>
                <div class="paypal-left">
                    <ul class="check">
                        <li>{$item_name}</li>
                        <li>{$locale.success_text1}{$add_app}{$locale.success_text2}</li>
                        <li>{$locale.success_text3}</li>
                    </ul>
                </div>
            </div>
            <!-- plus end -->
        </div>
    </div>
</div>
{include file="include/common/footer.inc"}
</div></div></body>
</html>