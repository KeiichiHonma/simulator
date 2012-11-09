<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/sortable.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/fileuploader.css" rel="stylesheet">
{include file="include/common/iphone_header.inc"}
<script src="/js/fileuploader.min.js"></script>
<script>
function createUploader() {ldelim}
    var i = {$count_screenshots};
    var thumbnailuploader = new qq.FileUploader({ldelim}
        element: $('#thumbnail-fine-uploader')[0],
        action: '/console/image/fine_uploader',
        //listElement:'<ul class="qq-upload-list-test"></ul>',
        debug: true,
        multiple: false,
        //onComplete : function(id, fileName, responseJSON){ldelim}
            //alert(responseJSON.greeting);
            //console.log(c)
        //{rdelim} //outputs: success: true, greeting: ;hello world'
        //allowedExtensions: ['jpeg', 'jpg', 'gif', 'png'],
        //sizeLimit: 51200,
        onComplete: function(id, fileName, responseJSON) {ldelim}
            if(i >= {$smarty.const.MAX_IMAGE_COUNT}){ldelim}
                alert('ng');
                return false;
            {rdelim}
            if (responseJSON.error) {ldelim}
                alert(responseJSON.error);
            {rdelim}
            if (responseJSON.mes) {ldelim}
                alert(responseJSON.mes);
            {rdelim}
            if (responseJSON.success) {ldelim}
                //$("#thumbnail-fine-uploader").remove();
                
                //$("#sort").append('<li class="thumbnail-result' + i + '"></li>');
                $("#thumbnail-fine-uploader").before('<li class="thumbnail-result' + i + '"></li>');
                $('.thumbnail-result'+i).append('<img src="' + responseJSON.file + '" alt="' + responseJSON.file + '" width="27" height="40" />');
                $('.thumbnail-result'+i).append('<input type="hidden" name="' + 'thumbnail-result'+ i + '" value="' + i + '" />');
                
                i = i+1;
                if(i == {$smarty.const.MAX_IMAGE_COUNT}){ldelim}
                    $("#thumbnail-fine-uploader").css("display", "none");
                {rdelim}
                
            {rdelim}
        {rdelim}
    {rdelim});
{rdelim}
window.onload = createUploader;
</script>
</head>
<body>
{include file="include/common/header.inc"}

<div id='main'>
<table class='layout dashboard'>
<tr>
<td>
{include file="include/common/iphone.inc"}
</td>
<td>
    <section>
        <form action="/console/image/sort/sid/{$simulator.0.simulator_id}" id="image_sort_form" method="post">
            <h2>Sortable Grid</h2>
            <ul id="sort" class="sortable grid">
            {if $iphone.screenshots}
                {foreach from=$iphone.screenshots key="key" item="screenshot" name="screenshots"}
                <li id="{$key}"><div class="block"><img src="{$screenshot.thumbnail_url}" /></div></li>
                {/foreach}
            {/if}
            
            {if $count_screenshots < $smarty.const.MAX_IMAGE_COUNT}<li id="thumbnail-fine-uploader"></li>{/if}
            
{*            {section name=cnt start=$count_screenshots loop=$smarty.const.MAX_IMAGE_COUNT}
                <li id="thumbnail-result{$smarty.section.cnt.index}" class="thumbnail-result"></li>
            {/section}*}
            </ul>
            
            {*{if $count_screenshots < $smarty.const.MAX_IMAGE_COUNT}<div id="thumbnail-fine-uploader thumbnail-result{$count_screenshots}"></div>{/if}*}

{*            <a href="/console/image/manage">Manage images...</a>
            <input type="hidden" id="image_sort" name="image_sort" />
            <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
            <input type="button" value="submit" id="image_sort_submit" />*}
        </form>
    </section>
    
</td>
<td class='sidebar'>
    <div class='section'>
        <h3>App Details</h3>
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
                <div class='label'>URL</div>
                <div class='value'>{$simulator.0.col_itunes_url}</div>
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