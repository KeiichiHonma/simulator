<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link rel="stylesheet" type="text/css" media="all" href="/css/master.css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/sortable0.css" rel="stylesheet" type="text/css" media="all" />
{include file="include/common/iphone_header.inc"}
</head>
<body>
{include file="include/common/header.inc"}
<div id="contents">
    <div id='main' class="clearfix">
        <div class='fl'>
            <div class="boxArea">
                <div class="boxTemp box-phone-vertical">
                    <h3>Preview</h3>
                    <div class="phone">
                    {include file="include/common/iphone5_home.inc"}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="chooseApp">
            <div class="boxTemp box01">
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
        <div class='fl'>
            <div class="boxArea">
            {include file="include/console/licence.inc"}
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