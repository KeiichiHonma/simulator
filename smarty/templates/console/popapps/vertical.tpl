<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/sortable0.css" rel="stylesheet" type="text/css" media="all" />
{include file="include/common/iphone_header.inc"}
<script>
var popapps_screenshots_count = {$count_screenshots}
</script>

<script type="text/javascript" src="/js/jquery.spinner.js"></script>
{if $count_screenshots < 9}<script type="text/javascript" src="/js/upload.js" ></script>{/if}
<script type="text/javascript" src="/js/delete.js" ></script>
<script type="text/javascript" src="/js/form.js"></script>
</head>
<body class="b-console">
<div id="container">
    <div id="wrap">
        {include file="include/common/header.inc"}
        <div id="contents" class="c-common">
            <div id='main' class="mb40 clearfix">

                <div class="boxArea fl">
                    <div class="boxTemp box-phone-vertical">
                        <h3>pop Apps</h3>
                        <div class="phone">
                        {include file="include/common/iphone5.inc"}
                        </div>
                        {include file="include/console/view_preview.inc"}
                    </div>
                    {include file="include/console/detail.inc"}
                </div>

                <div class="boxArea">
                    {include file="include/console/sort.inc"}
                    {include file="include/console/setting.inc"}
                </div>
                
                <div class="boxArea width100 fl">
                    {include file="include/console/image.inc"}
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