<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
    <script src="http://lagoscript.org/javascripts/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="/js/jquery.flickable-1.0b3.min.js" type="text/javascript"></script>
    <script src="/js/iphone.js" type="text/javascript"></script>
    <link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/iphone.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
{include file="include/common/header.inc"}
{if !$error && $is_analyze}
    <form accept-charset="UTF-8" action="/simulators/new/add" class="group" id="new_application" method="post">
    <div class='input'>
        <label for="simulator_site_attributes_url">■アプリの説明を入力してください。</label><br /><input id="simulator_title" maxlength="255" name="title" size="80" type="text" value="{$smarty.post.title}" />
    </div>
    
    <div class='input'>
        <label for="simulator_site_attributes_url">■設置したいウェブサイトのURLを入力してください。</label><br /><input id="simulator_site_attributes_url" maxlength="255" name="domain" placeholder="http://www.example.com/" required="required" size="80" type="url" value="{$smarty.post.install_url}" />
    </div>

    <div class='input'>
        <label for="simulator_site_attributes_url">■リンクするURLを入力してください。</label><br /><input id="simulator_site_attributes_url" maxlength="255" name="link" placeholder="http://www.example.com/" required="required" size="80" type="url" value="{$smarty.post.link_url}" />
    </div>

    <div class='input'>
        ■表示するスクロールの位置を選択してください。<br />
        <input type="radio" id="scroll1" name="scroll" value="{$smarty.const.SCROLL_FIRST}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_FIRST) == 0} checked{/if} /><label for="scroll1">1</label>
        <input type="radio" id="scroll2" name="scroll" value="{$smarty.const.SCROLL_SECOND}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_SECOND) == 0} checked{/if} /><label for="scroll2">2</label>
        <input type="radio" id="scroll3" name="scroll" value="{$smarty.const.SCROLL_THIRD}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_THIRD) == 0} checked{/if} /><label for="scroll3">3</label>
        <input type="radio" id="scroll4" name="scroll" value="{$smarty.const.SCROLL_FORTH}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_FORTH) == 0} checked{/if} /><label for="scroll4">4</label>
        <input type="radio" id="scroll5" name="scroll" value="{$smarty.const.SCROLL_FIFTH}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_FIFTH) == 0} checked{/if} /><label for="scroll5">5</label>
    </div>

    <div class='input'>
        ■表示する場所を選択してください。<br />
        <input type="radio" id="position1" name="position" value="{$smarty.const.POSITION_LEFT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_LEFT) == 0} checked{/if} /><label for="position1">left</label>
        <input type="radio" id="position2" name="position" value="{$smarty.const.POSITION_CENTER}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_CENTER) == 0} checked{/if} /><label for="position2">center</label>
        <input type="radio" id="position3" name="position" value="{$smarty.const.POSITION_RIGHT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_RIGHT) == 0} checked{/if} /><label for="position3">right</label>
    </div>


    <div id="iphone">
        <div id="app">
        <div class="icon">
            <div style="float: left;"><img src="{$logo}" width="75" height="75" alt="" /></div>
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
    <input type="hidden" name="itunes_url" value="{$smarty.post.itunes_url}" />
{else}
<form accept-charset="UTF-8" action="/applications/new/" class="group" id="new_application" method="post">
<div class='input'>
    <div class="clearfix string required">
    {$error.itunes_url|error_message}
    <label for="itunes_url">任意のアプリケーションのURL(itunes.apple.com)を入力してください。</label>
    <input id="itunes_url" maxlength="255" name="itunes_url" placeholder="https://itunes.apple.com/" required="required" maxlength="255" size="50" type="text" />
    </div>
</div>
{/if}

<div class='actions'>
    <div align='center' class='align_center'>
    <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
    <input class="" name="commit" type="submit" value="登録する" />
    </div>
</div>
</form>

</body>
</html>