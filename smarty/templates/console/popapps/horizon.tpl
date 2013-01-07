<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/sortable1.css" rel="stylesheet" type="text/css" media="all" />
{include file="include/common/iphone_header.inc"}

<style type="text/css">
.arrow_box {ldelim}
        -moz-border-radius-topleft: 4px;
        -webkit-border-top-left-radius: 4px;
        border-top-left-radius: 4px;
        -moz-border-radius-topright: 4px;
        -webkit-border-top-right-radius: 4px;
        border-top-right-radius: 4px;
        border: 1px solid #CCCCCC;
{rdelim}
{if $count_screenshots >= 9}
#parent_upload{ldelim}
    visibility:hidden;
{rdelim}
{/if}
</style>

<script>
var popapps_screenshots_count = {$count_screenshots};
</script>

<script type="text/javascript" src="/js/jquery.spinner.js"></script>
<script type="text/javascript" src="/js/upload.js" ></script>
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
                    <div class="boxTemp box-phone-horizon">
                        <h3>Preview</h3>
                        <div class="phone">
                        {include file="include/common/iphone5.inc"}
                        </div>
                        {include file="include/console/view_preview.inc"}
                    </div>
                </div>
                <div class="boxArea fr">
                {include file="include/console/setting.inc"}
                </div>
                <br class='cl' />
                <div class="boxArea fl">
                    {include file="include/console/sort.inc"}
                    {include file="include/console/detail.inc"}
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