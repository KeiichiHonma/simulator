<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- title -->
<title>title</title>
<!-- css -->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="/css/master.css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
{include file="include/common/javascript.inc"}
</head>

<body>
{include file="include/common/header.inc"}
<div id="errorArea">

</div>
<br class="cl"/>
<!-- 
//////////////////////////////////////////////////////////////////////////////
contents
//////////////////////////////////////////////////////////////////////////////
-->
<div id="contents" class="">
    <div id="inner02" class="mmt cf">
        <h2 class="pt60">Warning</h2>
        <div class="featureArea width100 cf">
            <div class="boxTemp mb60">
                <img src="/img/common/pic_error.png" alt="error" />
                <h3>{foreach from=$errorlist key="key" item="value" name="errorlist"}{$value|nl2br}<br />{/foreach}</h3>
                <p class="center">
                    
                </p>
            </div>
        </div>
    </div>
    <br class="cl"/>
</div>
{include file="include/common/footer.inc"}

</body>
</html>