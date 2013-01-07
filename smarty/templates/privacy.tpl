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
                <h1>{$locale.topContentArea_h1}</h1>
                </div>
            </div>
        </div>
        
        <div id="contents" class="c-common">
            <div id='main'>
                <div id="inner02">
                    <h2 class="mt20">Privacy Policy</h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p>{$locale.privacy_catch|nl2br}</p>
                                </div>
                            </div>
                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title">{$locale.privacy_title_1}</p>
                                    <p>{$locale.privacy_text_1|nl2br}</p>
                                </div>
                            </div>

                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title">{$locale.privacy_title_2}</p>
                                    <p>{$locale.privacy_text_2|nl2br}</p>
                                </div>
                            </div>

                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title">{$locale.privacy_title_3}</p>
                                    <p>{$locale.privacy_text_3|nl2br}</p>
                                </div>
                            </div>

                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title">{$locale.privacy_title_4}</p>
                                    <p>{$locale.privacy_text_4|nl2br} {mailto address="info@popapp-simulator.com" encode="hex" text="info@popapp-simulator.com"}</p>
                                </div>
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