<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
</head>

<body class="b-console"><div id="container"><div id="wrap">
{include file="include/common/header.inc"}
<div id="commonTopArea">
    <div class="inner01 cf">
        <h1>Upgrade popApps Account</h1>
    </div>

</div>

<div id="contents" class="c-common">
    <div id="inner02" class="mt40 mb60">
        {*<h2>Choose a Plan</h2>*}
        <div class="chooseArea cf">
            <!-- plus str -->
            <div class="boxTemp width100 cf">
                <div class="title bgBlue">Promo Code</div>

                
                <div class="paypal-center clearfix">
                    <div class="boxTemp box02">
                        <div class="price">
                            <p>{$locale.promo_title}</p>
                            <span>{$promo.0.col_code}</span>
                        </div>
                        <div class="app">
                            <p>{$locale.promo_feature_1}<span>+{$promo.0.col_plus_licence}</span></p>
                            <p>{$locale.basic_feature_2}</p>
                            <p>{$locale.basic_feature_3}</p>
                        </div>
                        <div class="bestfor">
                            <ul class="check">
                                <li>{$promo.0.col_from|date_format} - {$promo.0.col_to|date_format}</li>
                                <li>{$promo.0.col_title}</li>
                                {if strlen($promo.0.col_detail) > 0}<li>{$promo.0.col_detail|nl2br}</li>{/if}
                            </ul>
                        </div>
                    </div>
                </div>
                    <form accept-charset="UTF-8" action="/promo/confirm" id="new_promo_code" method="post">
                    <div class="btn">
                        <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                        <input id="promo_code" name="promo_code" type="hidden" value="{$promo.0.col_code}" />
                        <input type="hidden" name="method" value="use_promo" />
                        <input type="image" id="previous_submit" alt="Previous" src="{$path}previous_off.png" onClick="history.back();return false;"/>&nbsp;<input type="image" id="choose_submit" alt="Choose plan" src="{$path}btn_choose_off.png" />
                        <div id="loader"></div>
                        <div id="loader-text"></div>
                    </div>
                    </form>
            </div>
            <!-- plus end -->
        </div>
    </div>
</div>
{include file="include/common/footer.inc"}
</div></div></body>
</html>