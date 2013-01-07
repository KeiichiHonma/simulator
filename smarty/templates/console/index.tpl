<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
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
$(function() {
    $('#embed_code').focus(function(){
    $(this).select();
    });
});
</script>
{/literal}
<script type="text/javascript" src="/js/form.js"></script>
</head>
<body class="b-console">
<div id="container">
    <div id="wrap">
        {include file="include/common/header.inc"}
        <div id="contents" class="c-common">
            <div id='main' class="mb40 clearfix">
                <div class='fl'>
                    <div class="chooseApp">
                        <div class="boxTemp">
                            <div class="title bgFree">{$locale.home_applist_title}</div>

                            {if $is_app_add}
                            <div class="btn">
                                <span><a href="/console/popapps/new/"><img src="{$path}create_off.png" alt="Create"></a></span>
                            </div>
                            {/if}
                            {if $simulators}
                            <table>
                            {foreach from=$simulators key="key" item="simulator" name="simulators"}
                            {assign var=simulator_id value=$simulator.simulator_id}
                            <tr>
                            {*<td>{if !is_null($simulator.simulator_mobile_images)}<img src="{$simulator.simulator_mobile_images|getCloudinaryLogo}" width="35" height="35" />{else}<img src="{$simulator.application_mobile_images|getCloudinaryLogo}" width="35" height="35" />{/if}</td>*}
                            <td><img src="{$logos.$simulator_id.transformations_url_little}" /></td>
                            <td><a href="/console/popapps/view/sid/{$simulator.simulator_id}">{$simulator.col_name}</a></td>
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
                            <h3>{$locale.home_screen_title}</h3>
                            
                            <table align="center" class="home-display">
                                <tr>
                                    <td>
                                        <div class="phone-home">
                                            {include file="include/common/iphone5_home.inc"}
                                        </div>
                                        <div class="console-action"><a href="/console/home_preview" target="_blank">Preview...</a></div>
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
                        </div>
                    </div>
                </div>

                <div class='fl'>
                    <div class="boxArea">
        {if $use_licence > 1}
                        <div class="boxTemp box-sort-home">
                            <h3>{$locale.sort_title}</h3>
                            <p>{$locale.sort_text|nl2br}</p>
                            <table align="center">
                                <tr>
                                    {if $user_display_count > 2}
                                    <td valign="top">
                                        <ul id="display_number">
                                            {section name=cnt start=1  loop=$user_display_count}
                                                <li{if $smarty.section.cnt.index==1 } class="n1"{/if}>{$smarty.section.cnt.index}</li>
                                            {/section}
                                        </ul>
                                    </td>
                                    {/if}
                                    <td>
                                        <form action="/console/sort" id="image_sort_form" method="post">
                                            <ul id="sort" class="sortable grid">
                                        {if $simulators}
                                        {foreach from=$simulators key="key" item="simulator" name="simulators"}
                                        {assign var=simulator_id value=$simulator.simulator_id}
                                        <li id="sort_{$logos.$simulator_id.public_id}" class="{$simulator_id}"><img src="{$logos.$simulator_id.transformations_url_little}" /></li>
                                        {/foreach}
                                        {/if}
                                            </ul>
                                            <div class='sort_btn'>
                                            <input type="hidden" id="image_sort" name="image_sort" />
                                            <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                                            <input type="image" id="image_sort_submit" alt="Save" src="{$path}save_off.png" />
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
        {/if}
                        <div class="boxTemp box-setting-home">
                            <h3>{$locale.home_setting_title}</h3>
                            <div class='info'>
                                <div class='item clearfix'>
                                    <div class='label'>{$locale.setting_scroll_title}</div>
                                    <div class='value'>{if strcasecmp($user.0.col_scroll,$smarty.const.SCROLL_END) == 0}{$locale.scroll_bottom}{elseif strcasecmp($user.0.col_scroll,$smarty.const.SCROLL_BOTTOM) == 0}{$locale.scroll_two_third}{elseif strcasecmp($user.0.col_scroll,$smarty.const.SCROLL_HALF) == 0}{$locale.scroll_middle}{elseif strcasecmp($user.0.col_scroll,$smarty.const.SCROLL_TOP) == 0}{$locale.scroll_one_third}{else}{$locale.scroll_top}{/if}</div>
                                </div>
                                <div class='item clearfix'>
                                    <div class='label'>{$locale.setting_position_title}</div>
                                    <div class='value'>
{if strcasecmp($user.0.col_position,$smarty.const.POSITION_RIGHT) == 0}{$locale.position_right}{else}{$locale.position_left}{/if}
                                    </div>
                                </div>
                                <div class='item clearfix'>
                                    <div class='label'>{$locale.setting_code_title}</div>
                                    <div class='value'>
                                    <textarea id="embed_code" class="embed_code" rows="5"><script type='text/javascript' src='{$home_url|escape:"html"}'></script></textarea>
                                    <br />{$locale.setting_code_text}
                                    </div>
                                </div>
                                <div class="console-action"><a href="/console/settings">Manage Settings...</a></div>
                            </div>
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
    </div>
</div>
</body>
</html>