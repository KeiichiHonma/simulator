<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>demo</title>
{include file="include/common/iphone_header.inc"}
</head>
<body style="padding:0;margin:0;">
    <div id="iphone">
        <div id="app">
            <div class="error-box">
                <div class="phone-warning">
                {foreach from=$errorlist key="key" item="value" name="errorlist"}
                {$value}<br />
                {/foreach}
                </div>
            </div>
            <div id="flickable">
                <ul id="flickable_ul">
                    <li><div class="block"><img src="/img/phone/demo/demo1.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo2.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo3.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo4.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo5.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo6.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo7.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo8.jpg" /></div></li>
                    <li><div class="block"><img src="/img/phone/demo/demo9.jpg" /></div></li>
                </ul>
            </div>
            <div style="clear:both;"></div>

            <table id="select_box"> 
            <tbody>
                <tr>
                    <td><a href="#" id="select1">1</a></td>
                    <td><a href="#" id="select2">2</a></td>
                    <td><a href="#" id="select3">3</a></td>
                </tr>
                <tr>
                    <td><a href="#" id="select4">4</a></td>
                    <td><a href="#" id="select5">5</a></td>
                    <td><a href="#" id="select6">6</a></td>
                </tr>
                <tr>
                    <td><a href="#" id="select7">7</a></td>
                    <td><a href="#" id="select8">8</a></td>
                    <td><a href="#" id="select9">9</a></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>