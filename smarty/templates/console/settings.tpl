<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="b-console">
<div id="container">
    <div id="wrap">
        {include file="include/common/header.inc"}
        <div id="contents" class="c-common">
            <div id='main' class="mb40 clearfix">
                <div class='fl'>
                    <div class="boxArea">
                        <div class="boxTemp box-manage-setting">
                            <h3>{$locale.home_setting_title}</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/settings" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_scroll">{$locale.setting_scroll_title}:</label>
                                        </div>
                                        <div class='input'>
                                            <ul class='enum_set'>
                                                <li>
                                                <input id="popapps_scroll_{$smarty.const.SCROLL_FIRST}" name="scroll" type="radio" value="{$smarty.const.SCROLL_FIRST}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_FIRST) == 0} checked{/if} />
                                                <label for="popapps_scroll_{$smarty.const.SCROLL_FIRST}">{$locale.scroll_top}</label>
                                                </li>
                                                <li class="scroll">
                                                <input id="popapps_scroll_{$smarty.const.SCROLL_TOP}" name="scroll" type="radio" value="{$smarty.const.SCROLL_TOP}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_TOP) == 0} checked{/if} />
                                                <label for="popapps_scroll_{$smarty.const.SCROLL_TOP}">{$locale.scroll_one_third}</label>
                                                </li>
                                                <li>
                                                <input id="popapps_scroll_{$smarty.const.SCROLL_HALF}" name="scroll" type="radio" value="{$smarty.const.SCROLL_HALF}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_HALF) == 0} checked{/if} />
                                                <label for="popapps_scroll_{$smarty.const.SCROLL_HALF}">{$locale.scroll_middle}</label>
                                                </li>
                                                <li class="scroll">
                                                <input id="popapps_scroll_{$smarty.const.SCROLL_BOTTOM}" name="scroll" type="radio" value="{$smarty.const.SCROLL_BOTTOM}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_BOTTOM) == 0} checked{/if} />
                                                <label for="popapps_scroll_{$smarty.const.SCROLL_BOTTOM}">{$locale.scroll_two_third}</label>
                                                </li>
                                                <li>
                                                <input id="popapps_scroll_{$smarty.const.SCROLL_END}" name="scroll" type="radio" value="{$smarty.const.SCROLL_END}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_END) == 0} checked{/if} />
                                                <label for="popapps_scroll_{$smarty.const.SCROLL_END}">{$locale.scroll_bottom}</label>
                                                </li>
                                            </ul>
                                            <div class='form_error'>{$error.scroll|error_message}</div>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_position">{$locale.setting_position_title}:</label>
                                        </div>
                                        <div class='input'>
                                            <ul class='enum_set'>
                                                <li>
                                                <input id="popapps_position_{$smarty.const.POSITION_LEFT}" name="position" type="radio" value="{$smarty.const.POSITION_LEFT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_LEFT) == 0} checked{/if} />
                                                <label for="popapps_position_{$smarty.const.POSITION_LEFT}">{$locale.position_left}</label>
                                                </li>
                                                <li>
                                                <input id="popapps_position_{$smarty.const.POSITION_RIGHT}" name="position" type="radio" value="{$smarty.const.POSITION_RIGHT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_RIGHT) == 0} checked{/if} />
                                                <label for="popapps_position_{$smarty.const.POSITION_RIGHT}">{$locale.position_right}</label>
                                                </li>
                                            </ul>
                                            <div class='form_error'>{$error.position|error_message}</div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <div class="btn">
                                    <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                                    <input type="image" alt="Previous" src="{$path}previous_off.png" onClick="history.back();return false;"/>
                                    <input type="image" alt="Save" src="{$path}save_off.png" onClick="void(this.form.submit());return false;"/>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class='fl'>
                    <div class="boxArea">
                    {include file="include/console/licence.inc"}
                    </div>
                </div>
            </div>
        </div>
        {include file="include/common/footer.inc"}
    </div>
</div>
</body>
</html>