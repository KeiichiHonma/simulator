<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link rel="stylesheet" type="text/css" media="all" href="/css/master.css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/sortable_home.css" rel="stylesheet" type="text/css" media="all" />

{include file="include/common/iphone_header.inc"}



{literal}
<script>
$(function() {
    var element = $('#flickable').flickable({
      section: 'li'
    });

    $('#select_box-home li a').click(function() {
        var index = $(this).text() - 1;
        element.flickable('select', index);
        $('#select_box-home li a').css("background-color", "#FFFFFF");
        $('#select_box-home li a').hover(function(){
            $(this).css('background-color','#1b508c');
        }, function(){
            $(this).css('background-color','#FFFFFF');
        });
        $(this).css('background-color','#1b508c');
        $(this).unbind("mouseenter").unbind("mouseleave");
        
        return false;
    });
});
</script>
{/literal}
</head>
<body>
{include file="include/common/header.inc"}
<div id="contents">
    <div id='main' class="clearfix">
        <div class='fl'>
            <div class="chooseApp">
                <div class="boxTemp">
                    <div class="title bgFree">App List</div>

                    {if $is_app_add}
                    <div class="btn">
                        <span><a href="/console/new/"><img src="/img/common/create_off.png" alt="Create"></a></span>
                    </div>
                    {/if}
                    {if $simulators}
                    <table>
                    {foreach from=$simulators key="key" item="simulator" name="simulators"}
                    <tr>
                    <td>{if !is_null($simulator.simulator_mobile_images)}<img src="{$simulator.simulator_mobile_images|getCloudinaryLogo}" width="35" height="35" />{else}<img src="{$simulator.application_mobile_images|getCloudinaryLogo}" width="35" height="35" />{/if}</td>
                    <td>
                    <a href="/console/view/sid/{$simulator.simulator_id}">{$simulator.col_name}</a>
                    </td>
                    </tr>
                    {/foreach}
                    </table>
                    {/if}
                </div>
            </div>

            <div class="boxArea">
            {include file="include/console/licence.inc"}
            </div>
        </div>

        <div class='fl'>
            <div class="boxArea">
                <div class="boxTemp box-phone-vertical clearfix">
                    <h3>Your Home Display</h3>
                    
                    <table align="center" class="home-display">
                        <tr>
                            <td>
                                <div class="phone-home">
                                    {include file="include/common/iphone5_home.inc"}
                                </div>
                            </td>
                            {if $user_display_count > 2}
                            <td>
                                <ul id="select_box-home">
                                    {section name=cnt start=1  loop=$user_display_count}
                                        <li id="select_box_{$smarty.section.cnt.index}"><a href="#" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a></li>
                                    {/section}
                                </ul>
                            </td>
                            {/if}
                        </tr>
                    </table>
                    <div class='embed_code'>
                    <textarea rows="5"><script type='text/javascript' src='{$home_url|escape:"html"}'></script></textarea>
                    <br />上記のコードをウェブサイトに設置します。
                    </div>
                    <div class="console-action"><a href="/console/home_preview" target="_blank">Preview...</a></div>
                </div>
            </div>
        </div>

        <div class='fl'>
            <div class="boxArea">
                <div class="boxTemp box-sort-home">
                    <h3>app Sort</h3>
                    <p>You will forever be available to purchase at a time. There will be no monthly fee or renewal fee.</p>

<table align="center">
    <tr>
        {if $user_display_count > 2}
        <td valign="top">
            <ul id="display_number">
                {section name=cnt start=1  loop=$user_display_count}
                    <li{if $smarty.section.cnt.index==1 } class="ndd1"{/if}>{$smarty.section.cnt.index}</li>
                {/section}
            </ul>
        </td>
        {/if}
        <td>
            <form action="/console/sort" id="image_sort_form" method="post">
                <ul id="sort" class="sortable grid">
                {if $iphone.user_images_chunk}
                    {foreach from=$iphone.user_images_chunk key="key" item="user_images" name="user_images_chunk"}
                    
                        {foreach from=$user_images key="sid" item="user_images" name="user_images"}
                        <li id="sort_{$user_images.public_id}" class="{$sid}"><img src="{$user_images.thumbnail_url}" /></li>
                        {/foreach}
                        {*{if $user_display_count > 2 && !$smarty.foreach.user_images_chunk.last}<li class="line"></li>{/if}*}
                        
                    {/foreach}
                {/if}
                </ul>
                <div class='sort_btn'>
                <input type="hidden" id="image_sort" name="image_sort" />
                <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                <input type="image" id="image_sort_submit" alt="Save" src="/img/common/save_off.png" />
                </div>
            </form>
        </td>
    </tr>
</table>



                </div>
            </div>
        </div>

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
</div>
{include file="include/common/footer.inc"}
</body>
</html>