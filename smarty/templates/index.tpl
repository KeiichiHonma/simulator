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
<!-- js -->
{literal}
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
{/literal}
</head>

<body>

<!-- 
//////////////////////////////////////////////////////////////////////////////
header
//////////////////////////////////////////////////////////////////////////////
-->
<div id="header">
    <div id="inner01" class="cf">
        <div class="logo"><a href="index.html">popApps</a></div>
        <div class="nav">
            <ul class="cf">
                <li><a href="index.html">Home</a></li>
                <li><a href="#a_features">Features</a></li>
                <li><a href="#a_plans">Plans</a></li>
                <li><a href="#a_faq">FAQ</a></li>
                <li class="fb"><a href=""><img src="/img/common/icon_header_01.jpg" alt="facebook" />Sign in</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="topContentArea">
    <div id="inner01" class="cf">
        <div class="left">
            <h1>Watch the iphone app before installing.</h1>
            <p>Can appear as if there in front of the user's actual iphone, conjures up images of apps available, we encourage the installation.</p>
        </div>
        <div class="right">
        </div>
    </div>
</div>
<!-- 
//////////////////////////////////////////////////////////////////////////////
contents
//////////////////////////////////////////////////////////////////////////////
-->
<div id="contents">
    
    <div id="performanceArea" class="cf">
        <div id="inner01" class="cf">
            
            <span class="point01 mt45">
                <p><em>fly out of the bottom of the window</em>Can appear as if there in front of the user's actual iphone, conjures up images.</p>
            </span>
            <span class="point02 mt20">
                <p><em>You can scroll the page </em>Can appear as if there in front of the user's actual iphone, conjures up images.</p>
            </span>
            
        </div>
    </div>
    
        
    <div id="inner02" class="mmt cf">
        
        <!-- anchor--><div id="a_features"> </div><!-- anchor-->

        <h2>Reasons 3 popApps is amazing</h2>
        <div class="featureArea cf">
            <div class="boxTemp box01">
                <img src="/img/common/pic_feature_01.png" alt="No time limit" />
                <h3>No time limit</h3>
                <p>You will forever be available to purchase at a time. There will be no monthly fee or renewal fee.</p>
            </div>
            <div class="boxTemp box02">
                <img src="/img/common/pic_feature_02.png" alt="Pay-as-used" />
                <h3>Pay-as-used</h3>
                <p>For sale in the number of apps, the license is OK if you buy the amount you want to use app.</p>
            </div>
            <div class="boxTemp box03">
                <img src="/img/common/pic_feature_03.png" alt="Setup in 10 seconds" />
                <h3>Setup in 10 seconds</h3>
                <p>If I can be used to register the app iTunes. Rich introduction to the application page.</p>
            </div>
        </div>
        
        <h2>When I go into the options</h2>
        <div class="featureArea width100 mb60 cf">
            <div class="boxTemp">
                <img src="/img/common/pic_feature_04.png" alt="Get feedback and requests from users" />
                <h3>Get feedback and requests from users</h3>
                <p class="center">Addressed to send directly to your thoughts and desires for the app user.<br />Be useful for application development in the future I am available.</p>
            </div>
        </div>

        
        <!-- anchor--><div id="a_plans"> </div><!-- anchor-->

        <h2>Choose a pop Apps Plan</h2>
        <div class="chooseArea mb60 cf">
            
            <!-- free str -->
            <div class="boxTemp box01">
                <div class="title bgFree">Free plan</div>
                <div class="price">
                    <p>FREE</p>
                    <span>FOR CASUAL USERS</span>
                </div>
                <div class="app">
                    <p>Apllication<span>1app</span></p>
                    <p>Period<span>perpetuity</span></p>
                </div>
                <div class="bestfor">
                    <p>Best for.</p>
                    <ul>
                        <li>Who I'd like to use on a trial basis</li>
                        <li>Personal-like app developers</li>
                        <li>Small-like app developers</li>
                    </ul>
                </div>
                <div class="btn">
                    <span><a href=""><img src="/img/common/btn_choose_off.png" alt="Choose Plan" /></a></span>
                </div>
            </div>
            <!-- free end -->
            <!-- basic str -->
            <div class="boxTemp box02">
                <div class="title bgBlue">Basic plan</div>
                <div class="price">
                    <p>$ 9</p>
                    <span>FOR PROFESSIONSLS</span>
                </div>
                <div class="app">
                    <p>Apllication<span>5app</span></p>
                    <p>Period<span>perpetuity</span></p>
                </div>
                <div class="bestfor">
                    <p>Best for.</p>
                    <ul>
                        <li>Who I'd like to use on a trial basis</li>
                        <li>Personal-like app developers</li>
                        <li>Small-like app developers</li>
                    </ul>
                </div>
                <div class="btn">
                    <span><a href=""><img src="/img/common/btn_choose_off.png" alt="Choose Plan"></a></span>
                </div>
            </div>
            <!-- basic end -->
            <!-- advance str -->
            <div class="boxTemp box03">
                <div class="title bgBlue">Advance plan</div>
                <div class="price">
                    <p>$ 15</p>
                    <span>FOR ORGANIZATIONS</span>
                </div>
                <div class="app">
                    <p>Apllication<span>10app</span></p>
                    <p>Period<span>perpetuity</span></p>
                </div>
                <div class="bestfor">
                    <p>Best for.</p>
                    <ul>
                        <li>Who I'd like to use on a trial basis</li>
                        <li>Personal-like app developers</li>
                        <li>Small-like app developers</li>
                    </ul>
                </div>
                <div class="btn">
                    <span><a href=""><img src="/img/common/btn_choose_off.png" alt="Choose Plan" /></a></span>
                </div>
            </div>
            <!-- advance end -->
            <div class="iconPlus"><img src="/img/common/icon_choose_01.png" alt="" /></div>
            <!-- plus str -->
            <div class="boxTemp width100 cf">
                <div class="title bgLightBlue">Plus plan</div>
                <div class="left">
                    <div class="titlePlus">Functionalization comment<span>$ 9</span><em>/ Month</em></div>
                    <ul>
                        <li>Can be obtained without being known to others thoughts and desires of developed apps !</li>
                        <li>Appear at the time the reader has finished reading the content !</li>
                    </ul>
                    <div class="btn">
                        <span><a href=""><img src="/img/common/btn_choose_off.png" alt="Choose Plan" /></a></span>
                    </div>
                </div>
                <div class="right"><img src="/img/common/pic_choose_01.png" alt="" /></div>
            </div>
            <!-- plus end -->
        </div>
        

        <!-- anchor--><div id="a_faq"> </div><!-- anchor-->

        <h2>FAQ</h2>
        <div class="faqArea pb80 cf">
            
            <!-- question str -->
            <p class="question">Q. Do location-based reminders work on all iPhone models?</p>
            <span class="arrow"><img src="/img/common/icon_faq_01.png" alt="" /></span>
            <div class="boxTemp mb20">
                <p>To take advantage of Checkmark's location-based reminders feature you'll need to be using an iPhone 4 or 4S.<br />Due to hardware limitations the iPhone 3GS and older are not capable of setting location-based reminders (this 
is the same in Apple's Reminders app.</p>
            </div>
            <!-- question end -->
            <!-- question str -->
            <p class="question">Q. What if some of my guests don’t have smartphones?</p>
            <span class="arrow"><img src="/img/common/icon_faq_01.png" alt="" /></span>
            <div class="boxTemp mb20">
                <p>If your guests are using a digital camera, they’ll be able to upload the photos after the wedding.</p>
            </div>
            <!-- question end -->
            <!-- question str -->
            <p class="question">Q. I’m worried this will be complicated. What do they have to do exactly?</p>
            <span class="arrow"><img src="/img/common/icon_faq_01.png" alt="" /></span>
            <div class="boxTemp">
                <p>It’ll be easy for your guests! They simply download the app and your wedding album will be instantly available.<br />At that point, friends and family can snap photos and they’ll be added directly to your album.</p>
            </div>
            <!-- question end -->
            
        </div>

    </div>
</div>
<!-- 
//////////////////////////////////////////////////////////////////////////////
footer
//////////////////////////////////////////////////////////////////////////////
-->
<div id="footer">
    <div id="inner01" class="cf">
        <p>&copy; 81 Inc. All Rights Reserved.</p>
        <ul>
            <li><a href="#header">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </div>
</div>
<!-- 
//////////////////////////////////////////////////////////////////////////////
script
//////////////////////////////////////////////////////////////////////////////
-->

</body>
</html>