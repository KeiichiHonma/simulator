<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
</head>

<body class="b-common">
<div id="container">
    <div id="wrap">
        {include file="include/common/header.inc"}
        
        <div id="topCommonArea">
            <div class="inner01-common cf">
                <div class="left">
                <h1>{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}about_ttl_ja.png" alt="{$locale.topContentArea_h1}" />{else}{$locale.topContentArea_h1}{/if}</h1>
                </div>
            </div>
        </div>

        <div id="contents" class="c-common">
            <div id='main'>
                <div id="inner02">

                    <h2 class="mt20">{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}about_ttl_1_ja.png" alt="{$locale.topContentArea_h2_1}" />{else}{$locale.topContentArea_h2_1}{/if}</h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title">{$locale.what_title}</p>
                                    <p>{$locale.what_text|nl2br}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt20">{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}about_ttl_2_ja.png" alt="{$locale.topContentArea_h2_2}" />{else}{$locale.topContentArea_h2_2}{/if}</h2>
                    {include file="include/common/plan.inc"}
                    
                    <h2 class="mt20">{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}about_ttl_3_ja.png" alt="{$locale.topContentArea_h2_3}" />{else}{$locale.topContentArea_h2_3}{/if}</h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p>{$locale.why_text|nl2br}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="mt20">{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}about_ttl_4_ja.png" alt="{$locale.topContentArea_h2_4}" />{else}{$locale.topContentArea_h2_4}{/if}</h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p>{$locale.who_text|nl2br}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt20">{if $smarty.const.LOCALE == LOCALE_JA}<img src="{$path}about_ttl_6_ja.png" alt="{$locale.topContentArea_h2_6}" />{else}{$locale.topContentArea_h2_6}{/if}</h2>
                    
                    <div class="pattern">
                        <div class="width50 mb60 cf">
                            <div class="boxTemp left">
                                <p class="title">{$locale.person_title_1}</p>
                                <p><span><img src="http://res.cloudinary.com/popapps/image/upload/c_fill,e_saturation:-80,h_80,r_10,w_80/yoshio_yahagi.jpg" alt="Yoshio Yahagi" /></span>{$locale.person_text_1|nl2br}</p>
                                
                            </div>
                
                            <div class="boxTemp right">
                                <p class="title">{$locale.person_title_2}</p>
                                <p><span><img src="http://res.cloudinary.com/popapps/image/upload/c_fill,e_saturation:-80,h_80,r_10,w_80/keiichi_honma.jpg" alt="Keiichi Honma" /></span>{$locale.person_text_2|nl2br}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {include file="include/common/footer.inc"}
    </div>
</div>
</body>

</html>