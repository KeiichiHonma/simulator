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
        <h1>Upgrade popApps Account</h1>
    </div>
</div>

<div id="contents" class="c-common">
    <div id="inner02" class="mt40 mb60">
        {*<h2>Choose a Plan</h2>*}
        <div class="chooseArea cf">
            <!-- plus str -->
            <div class="boxTemp width100 cf">
                <div class="title bgBlue">Advance plan</div>
                <div class="paypal-left">
                    <ul class="check">
                        <li>{$locale.upgrade_comment}</li>
                    </ul>
                    <div class="paypal_btn">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="QHD2G5DCXDF7Y">
{*                        <input type="image" src="https://www.paypalobjects.com/en_US/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <input type="hidden" name="landing_page" value="billing">*}
{*                        {if $smarty.const.LOCALE_EN == $locale.lang}
                        <input type="hidden" name="country" value="US">
                        {elseif $smarty.const.LOCALE_JA == $locale.lang}
                        <input type="hidden" name="country" value="JP">
                        {/if}*}
                        <input type="hidden" name="return" value="http://www.popapp-simulator.com/paypal/success?uid={$uid}">
                        <input type="hidden" name="notify_url" value="http://www.popapp-simulator.com/paypal/notify?uid={$uid}">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                    {include file="include/plan/promo_code.inc"}
                </div>
                <div class="paypal-right">
                    <div class="boxTemp box02">
                        {include file="include/plan/advance.inc"}
                    </div>
                </div>
            </div>
            <!-- plus end -->
        </div>
    </div>
</div>
{include file="include/common/footer.inc"}
</div></div></body>
</html>