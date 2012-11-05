<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[DEMO]一番下までスクロールするとコンテンツが右下の要素が開く | webOpixel</title>
    <script src="http://lagoscript.org/javascripts/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="/js/jquery.flickable-1.0b3.min.js" type="text/javascript"></script>
    <script src="/js/iphone.js" type="text/javascript"></script>
    <link href="/css/iphone.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="padding:0;margin:0;">
    <div id="iphone">
        <div id="app">
        <div class="icon">
            <div style="float: left;"><img src="{$icon}" width="75" height="75" alt="" /></div>
            <div>{$h1_text}<br /><a href="{$itune_link}" target="_blank"><img src="/img/common/install_btn.png"  width="125" height="23" alt="" /></a></div>
        </div>

        <div id="flickable4">
            <ul>
            {if $screenshots}
            {foreach from=$screenshots key="key" item="screenshot" name="screenshots"}
            <li><div class="block"><img src="{$screenshot}"alt=""  width='190' height='338' /></div></li>
            {/foreach}
            {/if}
            </ul>
        </div>
        <div style="clear:both;"></div>
        <table id="select_box"> 
        <tbody>
            {if $count_screenshots}
                {section name=cnt start=1  loop=$count_screenshots_on}
                    {if $smarty.section.cnt.index == 1 || $smarty.section.cnt.index == 4 || $smarty.section.cnt.index == 7}
                    <tr>
                    {/if}
                    <td><a href="#" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a></td>
                    {if $count_screenshots == $smarty.section.cnt.index || $smarty.section.cnt.index == 3 || $smarty.section.cnt.index == 6 || $smarty.section.cnt.index == 9}
                    </tr>
                    {/if}
                {/section}
            {/if}
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>