465
a:4:{s:8:"template";a:9:{s:29:"console/popapps/new/index.tpl";b:1;s:23:"include/common/head.inc";b:1;s:29:"include/common/javascript.inc";b:1;s:37:"include/console/double_click_stop.inc";b:1;s:25:"include/common/signin.inc";b:1;s:25:"include/common/header.inc";b:1;s:27:"include/console/upgrade.inc";b:1;s:27:"include/console/licence.inc";b:1;s:25:"include/common/footer.inc";b:1;}s:9:"timestamp";i:1355114689;s:7:"expires";i:1355118289;s:13:"cache_serials";a:0:{}}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link rel="shortcut icon" href="/img/common/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="/css/master.css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" /><link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />

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

<script>
var submit_error_message = 'Please perform data transmission every once.';
$(function(){
    $('#image_sort_submit').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $('#setting_submit').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $('#next_submit').click(function() {
        $('#next_submit').hide();
        $('#loader').show();
        //$('#loader').css("background-image","url(/img/common/ajax-loader.gif)");
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $('#create_submit').click(function() {
        $('#create_submit').hide();
        $('#previous_submit').hide();
        //$('<img src="/img/common/ajax-loader.gif" />').appendTo('#loader');
        $('#loader').css("background-image","url(/img/common/ajax-loader.gif)");
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});


</script>
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
</div>        <div id="contents" class="c-common">
            <div id='main' class="mb40 clearfix">
                <div class='fl'>
                            <div class="boxArea">
                        <div class="boxTemp box-manage-setting">
                            <h3>New popApps Add</h3>
                            <div class='info'>
                                
                                <form accept-charset="UTF-8" action="/console/popapps/new/" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_url">Itunes URL:</label>
                                        </div>
                                        <div class='input'>
                                            <input name="itunes_url" size="30" type="text" value="" />
                                            <div class='form_error'></div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="btn">
                                    <input type="hidden" name="csrf_ticket" value="69247467520a536d59bfc9b6141303e0" />
                                    <input type="hidden" name="method" value="analyze" />
                                    <input type="image" id="next_submit" alt="Next" src="/img/common/next_off.png"/>
                                    <div id="loader"><img src="/img/common/ajax-loader.gif" /></div>

<script src="/js/jquery.sortable.js"></script>
<script>
$('#next_submit').show();
$('#loader').hide();
</script>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                                </div>
                
                <div class='fl'>
                    <div class="boxArea">
                    <div class="boxTemp box-detail detail0">
    <h3>Plan & Limits</h3>
    <div class='info'>
    
        <div class='item clearfix'>
            <div class='label'>Use App</div>
            <div class='value'>2</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Max App</div>
            <div class='value'>5</div>
        </div>
        <div class='upgrade_prompt'>
    <div class='title'>Upgrade to:</div>
    <ul>
        <li>
            <a href="/paypal/sandbox/basic">Basic Plan ($9 / +5App)</a>
                        <div class='details'>
                        登録アプリ数を5追加します。
                        </div>
        </li>
        <li>
            <a href="/paypal/sandbox/advance">Advance Plan ($15 / +10App)</a>
            <div class='details'>
                        登録アプリ数を10追加します。
                        </div>
        </li>
    </ul>
</div>    </div>
</div>                    </div>
                </div>
            </div>
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