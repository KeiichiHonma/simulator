317
a:4:{s:8:"template";a:6:{s:9:"error.tpl";b:1;s:23:"include/common/head.inc";b:1;s:29:"include/common/javascript.inc";b:1;s:25:"include/common/signin.inc";b:1;s:25:"include/common/header.inc";b:1;s:25:"include/common/footer.inc";b:1;}s:9:"timestamp";i:1355114703;s:7:"expires";i:1355118303;s:13:"cache_serials";a:0:{}}<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- title -->
<title>title</title>
<link rel="shortcut icon" href="/img/common/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="/css/master.css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
    $('a[href^=#]').click(function() {
        var speed = 1000;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $($.browser.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});
$(function(){
    $('[src*="_off."]')
        .mouseover(function()
        {$(this).attr("src",$(this).attr("src").replace(/^(.+)_off(\.[a-z]+)$/,"$1_on$2"));})
        .mouseout(function()
        {$(this).attr("src",$(this).attr("src").replace(/^(.+)_on(\.[a-z]+)$/,"$1_off$2"));})
        .each(function(init)
        {$("<img>").attr("src",$(this).attr("src").replace(/^(.+)_off(\.[a-z]+)$/,"$1_on$2"));})
});
</script>
<!--[if IE 6]><script src="/js/DD_belatedPNG.js"></script><script>DD_belatedPNG.fix('img, .png');</script><![endif]-->
</head>

<body class="b-common">
<div id="container">
    <div id="wrap">
<div id="header">
    <div class="inner01 cf">
        <div class="logo"><a href="/">popApps</a></div>
        <div class="nav">
            <ul class="cf">
                <li><a href="/console/">Dashboard</a></li>                <li><a href="/">Home</a></li>
                <li><a href="/#a_features">Features</a></li>
                <li><a href="/#a_plans">Plans</a></li>
                <li><a href="/#a_faq">FAQ</a></li>
            </ul>
        </div>
    </div>
</div><div id="errorArea">

</div>
<br class="cl"/>
<!-- 
//////////////////////////////////////////////////////////////////////////////
contents
//////////////////////////////////////////////////////////////////////////////
-->
<div id="contents" class="c-common">
    <div id="inner02" class="mmt cf">
        <h2 class="pt60">Warning</h2>
        <div class="featureArea width100 cf">
            <div class="boxTemp mb60">
                <img src="/img/common/pic_error.png" alt="error" />
                <h3>既に登録済みのアプリです。<br /></h3>
                <p class="center">
                    
                </p>
            </div>
        </div>
    </div>
    <br class="cl"/>
</div>
<div id="footer" class="f-common">
    <div class="inner01 cf">
        <p>&copy; 81 Inc. All Rights Reserved.</p>
        <ul>
            <li><a href="#header">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/privacy">Privacy Policy</a></li>
        </ul>
    </div>
</div>    </div>
</div>
</body>
</html>