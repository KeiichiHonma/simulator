<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/sortable.css" rel="stylesheet" type="text/css" media="all" />
{include file="include/common/iphone_header.inc"}
<script type="text/javascript" src="/js/jquery.spinner.js"></script>
<script type="text/javascript" src="/js/ajaxupload.3.5.js" ></script>
<script type="text/javascript" src="/js/console.js" ></script>
</head>
<body>
{include file="include/common/header.inc"}

<div id='main'>
<table class='layout'>
<tr>
<td width="20%">
{include file="include/common/iphone5.inc"}
</td>
<td width="60%">

    <div class='section'>
        <h3>pop Apps Images</h3>
        <div class='image clearfix'>
        スクリーンショットをアップしてください。
            <ul id="files">
            {if $iphone.console.screenshots}
                {foreach from=$iphone.console.screenshots key="key" item="screenshot" name="screenshots"}
                <li id="files_{$screenshot.public_id}"><a href="#" id="{$screenshot.public_id}" class="delete">Delete</a><br /><img src="{$screenshot.transformations_url}" /></li>
                {/foreach}
            {/if}
            </ul>
            <div id="upload"><span id="upload_btn">Upload image...<span></div>
            {*<br /><span id="status" ></span>*}
        </div>
    </div>

    <div class='section'>
        <h3>images Sort</h3>
        <div class="sort_section">
            <form action="/console/image/sort/sid/{$simulator.0.simulator_id}" id="image_sort_form" method="post">
                <ul id="sort" class="sortable grid">
                {if $iphone.console.screenshots}
                    {foreach from=$iphone.console.screenshots key="key" item="screenshot" name="screenshots"}
                    <li id="sort_{$screenshot.public_id}" class="{$key}"><img src="{$screenshot.thumbnail_url}" /></li>
                    {/foreach}
                {/if}
                </ul>
                <div class='sort_btn'>
                <input type="hidden" id="image_sort" name="image_sort" />
                <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                <input type="button" value="submit" id="image_sort_submit" />
                </div>
            </form>
        </div>
    </div>



</td>
<td class='sidebar' width="20%">
    <div class='section'>
        <h3>pop Apps Details</h3>
        <div class='info'>
            <div class='item clearfix'>
                <div class='label'>App name:</div>
                <div class='value'>{$simulator.0.col_name}</div>
            </div>
            <div class='item clearfix'>
                <div class='label'>ID</div>
                <div class='value'>{$simulator.0.col_itunes_id}</div>
            </div>
            <div class='item clearfix'>
                <div class='label'>itunes URL</div>
                <div class='value'>{$simulator.0.col_itunes_url}</div>
            </div>
            <div class='item clearfix'>
                <div class='label'>code</div>
                <div class='value'>
                <textarea class="embed_code" rows="5"><script type='text/javascript' src='{$popapps_url|escape:"html"}'></script></textarea>
                <br />上記のコードをウェブサイトに設置します。
                </div>
            </div>
        </div>
    </div>

    <div class='section'>
        <h3>Setting</h3>
        <div class='info'>
            <div class='item clearfix'>
                <div class='label'>Domain</div>
                <div class='value'>{$simulator.0.col_domain}</div>
            </div>
            <div class='item clearfix'>
                <div class='label'>Title:</div>
                <div class='value'>{$simulator.0.col_title}</div>
            </div>
            <div class='item clearfix'>
                <div class='label'>Link</div>
                <div class='value'>{$simulator.0.col_link}</div>
            </div>
            <div class='item clearfix'>
                <div class='label'>Scroll</div>
                <div class='value'>{$simulator.0.col_scroll}</div>
            </div>
            <div class='item clearfix'>
                <div class='label'>Position</div>
                <div class='value'>{$simulator.0.col_position}</div>
            </div>
        </div>
    </div>
</td>
</tr>
</table>
</div>
{literal}
    <script src="/js/jquery.sortable.js"></script>
    <script>
        $(function() {
            $('.sortable').sortable();
            $("#image_sort_submit").click(function() {
                $('.sortable').sortable('save');
            });
        });
    </script>
{/literal}
</body>
</html>