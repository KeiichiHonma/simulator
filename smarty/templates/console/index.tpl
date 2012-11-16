<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/sortable.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
{include file="include/common/header.inc"}

<div id='main'>
<table class='layout'>
<tr>
<td width="20%">
123
</td>
<td width="60%">


{if $is_app_add}
{*<a href="/console/new/">新しいアプリを登録する</a>*}
<div class='title'>新しいアプリを登録する</div>
<form accept-charset="UTF-8" action="/console/new/" class="group" id="new_application" method="post">
<div class='input'>
    <div class="clearfix string required">
    {$error.itunes_url|error_message}
    <label for="itunes_url">アプリのURL(itunes.apple.com)を入力してください。</label>
    <input id="itunes_url" maxlength="255" name="itunes_url" placeholder="https://itunes.apple.com/" required="required" maxlength="255" size="50" type="text" />
    </div>
</div>
<div class='actions'>
    <div align='center' class='align_center'>
    <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
    <input class="" name="commit" type="submit" value="登録する" />
    </div>
</div>
</form>
{/if}

<div class='title'>登録しているアプリ一覧</div>
<ul>
{foreach from=$simulators key="key" item="simulator" name="simulators"}
<li>
{if !is_null($simulator.simulator_images)}
<img src="{$simulator.simulator_mobile_images|getCloudinaryLogo}" /><a href="/console/view/sid/{$simulator.simulator_id}">{$simulator.col_name}</a>
{else}
<img src="{$simulator.application_mobile_images|getCloudinaryLogo}" /><a href="/console/view/sid/{$simulator.simulator_id}">{$simulator.col_name}</a>
{/if}

</li>
{/foreach}
</ul>

</td>
<td class='sidebar' width="20%">
    <div class='section'>
        <h3>Plan & Limits</h3>
        <div class='selected_plan'>
            <div class='title'>{if $is_free}{$smarty.const.NAME_LICENCE_FREE}{/if}</div>
            <div class='details'>
                <ul>
                    <li>
                        <div class='value'><strong>{$use_licence}</strong></div>
                        <div class='label'>Use App</div>
                    </li>
                    <li>
                        <div class='value'><strong>{$max_licence}</strong></div>
                        <div class='label'>Max App</div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class='upgrade_prompt'>
            <div class='title'>Upgrade to:</div>
            <ul>
                <li>
                    <a href="/paypal/{if $debug}sandbox/{/if}basic">{$smarty.const.NAME_LICENCE_BASIC} (${$smarty.const.COST_LICENCE_BASIC} / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_BASIC}App)</a>
                    <div class='details'>
                    {if $is_free}
                    5アプリまで登録可能。画像の追加削除が可能。
                    {else}
                    登録アプリ数を5追加します。
                    {/if}
                    </div>
                </li>
                <li>
                    <a href="/paypal/{if $debug}sandbox/{/if}advance">{$smarty.const.NAME_LICENCE_ADVANCE} (${$smarty.const.COST_LICENCE_ADVANCE} / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_ADVANCE}App)</a>
                    <div class='details'>
                    {if $is_free}
                    10アプリまで登録可能。画像の追加削除が可能。
                    {else}
                    登録アプリ数を10追加します。
                    {/if}
                    </div>
                </li>
{*                <li>
                    <a href="/users/upgrade/plus">Plus Plan ($9 / Month)</a>
                    <div class='details'>
                    {if $is_free}
                    5アプリまで登録可能。画像の追加削除が可能。
                    {else}
                    登録アプリ数を5つ追加します。
                    {/if}
                    </div>
                </li>*}
            </ul>
        </div>
    </div>
</td>
</tr>
</table>
</div>
</body>
</html>