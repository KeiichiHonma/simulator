<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>error</title>
{include file="include/common/iphone_header.inc"}
</head>
<body style="padding:0;margin:0;">
    <div id="iphone">
        <div id="app">
            <div id="error-box">
                    <div class="phone-warning">
                    {foreach from=$errorlist key="key" item="value" name="errorlist"}
                    {$value}<br />
                    {/foreach}
                    </div>
            </div>
            <div id="flickable">
                <ul id="flickable_ul">
                    <li><div class="block"><img src="{$ssl_path}under_construction{$iphone.direction|default:0}.jpg" /></div></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>