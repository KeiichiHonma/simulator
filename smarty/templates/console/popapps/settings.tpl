<!DOCTYPE html>
<html lang="{$locale.lang}">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{include file="include/common/head.inc"}
{include file="include/common/javascript.inc"}
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/form.js"></script>
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
                            <h3>{$locale.view_setting_title}</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/popapps/settings/sid/{$simulator.0.simulator_id}" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_direction">{$locale.setting_direction_title}:</label>
                                        </div>
                                        <div class='input'>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input id="popapps_direction_{$smarty.const.DIRECTION_VERTICAL}" name="direction" type="radio" value="{$smarty.const.DIRECTION_VERTICAL}"{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_VERTICAL) == 0} checked{/if}{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_VERTICAL) != 0} onChange="alert('{$direction_change_message}')"{/if} />
                                                        
                                                        <label for="popapps_direction_{$smarty.const.DIRECTION_VERTICAL}">{$locale.direction_vertical}</label>
                                                    </td>
                                                    <td><img src="{$ssl_path}phone_vertical.png" alt="" /></td>
                                                    <td>
                                                        <input id="popapps_direction_{$smarty.const.DIRECTION_HORIZON}" name="direction" type="radio" value="{$smarty.const.DIRECTION_HORIZON}"{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_HORIZON) == 0} checked{/if}{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_HORIZON) != 0} onChange="alert('{$direction_change_message}')"{/if} />
                                                        <label for="popapps_direction_{$smarty.const.DIRECTION_HORIZON}">{$locale.direction_horizon}</label>
                                                    </td>
                                                    <td><img src="{$ssl_path}phone_horizon.png" alt="" /></td>
                                                </tr>
                                            </table>
                                            <div class='form_error'>{$error.direction|error_message}</div>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_url">{$locale.setting_url_title}:</label>
                                        </div>
                                        <div class='input'>
                                            <input name="url" size="30" type="text" value="{$smarty.post.url}" />
                                            <div class='form_error'>{$error.url|error_message}</div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_link">{$locale.setting_link_title}:</label>
                                        </div>
                                        <div class='input'>
                                            <input name="link" size="30" type="text" value="{$smarty.post.link}" />
                                            <div class='form_error'>{$error.link|error_message}</div>
                                        </div>
                                    </div>

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

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_validate">{$locale.setting_display_title}:</label>
                                        </div>
                                        <div class='input'>
                                            <ul class='enum_set'>
                                                <li>
                                                <input id="popapps_validate_{$smarty.const.VALIDATE_ALLOW}" name="validate" type="radio" value="{$smarty.const.VALIDATE_ALLOW}"{if strcasecmp($smarty.post.validate,$smarty.const.VALIDATE_ALLOW) == 0} checked{/if} />
                                                <label for="popapps_validate_{$smarty.const.VALIDATE_ALLOW}">{$locale.display_on}</label>
                                                </li>
                                                <li>
                                                <input id="popapps_validate_{$smarty.const.VALIDATE_DENY}" name="validate" type="radio" value="{$smarty.const.VALIDATE_DENY}"{if strcasecmp($smarty.post.validate,$smarty.const.VALIDATE_DENY) == 0} checked{/if} />
                                                <label for="popapps_validate_{$smarty.const.VALIDATE_DENY}">{$locale.display_off}</label>
                                                </li>
                                            </ul>
                                            <div class='form_error'>{$error.validate|error_message}</div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <div class="btn">
                                    <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                                    <input type="image" alt="Previous" src="{$path}previous_off.png" onClick="history.back();return false;"/>
                                    <input type="image" id="setting_submit" alt="Save" src="{$path}save_off.png" />
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class='fl'>
                    <div class="boxArea">
                    {include file="include/console/detail.inc"}
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