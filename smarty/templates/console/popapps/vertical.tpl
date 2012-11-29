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
{literal}
<style type="text/css">
.arrow_box {
        -moz-border-radius-topleft: 4px;
        -webkit-border-top-left-radius: 4px;
        border-top-left-radius: 4px;
        -moz-border-radius-topright: 4px;
        -webkit-border-top-right-radius: 4px;
        border-top-right-radius: 4px;
        border: 1px solid #CCCCCC;
}
</style>
{/literal}

<script>
var popapps_screenshots_count = {$count_screenshots}
</script>

<script type="text/javascript" src="/js/jquery.spinner.js"></script>
{if $count_screenshots < 9}<script type="text/javascript" src="/js/upload.js" ></script>{/if}
<script type="text/javascript" src="/js/delete.js" ></script>
{include file="include/console/double_click_stop.inc"}
</head>
<body>
{include file="include/common/header.inc"}
<div id="contents">
    <div id='main' class="clearfix">
        <div class='fl'>
            <div class="boxArea">
            <div class="boxTemp box-phone-vertical">
                <h3>pop Apps</h3>
                <div class="phone">
                {include file="include/common/iphone5.inc"}
                </div>
                {include file="include/console/view_preview.inc"}
            </div>
            {include file="include/console/detail.inc"}
            </div>
        </div>
        
        <div class="boxArea">
            {include file="include/console/sort.inc"}
            {include file="include/console/setting.inc"}
        </div>
        
        <div class='fl'>
            <div class="boxArea width100">
                {include file="include/console/image.inc"}
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