<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>

<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
{include file="include/common/iphone_header.inc"}
</head>
<body>
{include file="include/common/header.inc"}
{if !$error && $is_analyze}
    <form accept-charset="UTF-8" action="/console/new/add" class="group" id="new_application" method="post">
    <div class='input'>
        <label for="simulator_site_attributes_url">■アプリの名前を入力してください。</label><br /><input id="simulator_title" maxlength="255" name="title" size="80" type="text" value="{$smarty.post.title}" />
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
        <input type="radio" id="scroll2" name="scroll" value="{$smarty.const.SCROLL_TOP}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_TOP) == 0} checked{/if} /><label for="scroll2">2</label>
        <input type="radio" id="scroll3" name="scroll" value="{$smarty.const.SCROLL_HALF}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_HALF) == 0} checked{/if} /><label for="scroll3">3</label>
        <input type="radio" id="scroll4" name="scroll" value="{$smarty.const.SCROLL_BOTTOM}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_BOTTOM) == 0} checked{/if} /><label for="scroll4">4</label>
        <input type="radio" id="scroll5" name="scroll" value="{$smarty.const.SCROLL_END}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_END) == 0} checked{/if} /><label for="scroll5">5</label>
    </div>

    <div class='input'>
        ■表示する場所を選択してください。<br />
        <input type="radio" id="position1" name="position" value="{$smarty.const.POSITION_LEFT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_LEFT) == 0} checked{/if} /><label for="position1">left</label>
        <input type="radio" id="position2" name="position" value="{$smarty.const.POSITION_CENTER}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_CENTER) == 0} checked{/if} /><label for="position2">center</label>
        <input type="radio" id="position3" name="position" value="{$smarty.const.POSITION_RIGHT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_RIGHT) == 0} checked{/if} /><label for="position3">right</label>
    </div>
{include file="include/common/iphone5.inc"}
{*    <div id="iphone">
        <div id="app">
        <div class="top-box">
            <div style="float: left;"><img src="{$logo}" width="75" height="75" alt="" /></div>
            <div>{$h1_text}<br /><a href="{$itune_link}" target="_blank"><img src="/img/common/install_btn.png"  width="125" height="23" alt="" /></a></div>
        </div>

        <div id="flickable">
            <ul>
            {if $screenshots}
            {foreach from=$screenshots key="key" item="screenshot" name="screenshots"}
            <li><div class="block"><img src="{$screenshot}"alt=""  width='190' height='338' /></div></li>
            {/foreach}
            {/if}
            </ul>
        </div>
        <div style="clear:both;"></div>
            <ul id="select_box">
            {if $screenshots}
            {foreach from=$screenshots key="key" item="screenshot" name="screenshots"}
            <li><a href="#" id="select{$smarty.foreach.screenshots.iteration}">{$smarty.foreach.screenshots.iteration}</a></li>
            {/foreach}
            {/if}
            </ul>
        </div>
    </div>*}
    <input type="hidden" name="itunes_url" value="{$smarty.post.itunes_url}" />

    <div class='actions'>
        <div align='center' class='align_center'>
        <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
        <input class="" name="commit" type="submit" value="登録する" />
        </div>
    </div>
    </form>
{/if}

</body>
</html>