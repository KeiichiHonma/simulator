<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link rel="stylesheet" type="text/css" media="all" href="/css/master.css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
{include file="include/common/javascript.inc"}
{include file="include/console/double_click_stop.inc"}
</head>
<body>
{include file="include/common/header.inc"}
<div id="contents">
    <div id='main' class="clearfix">
        <div class='fl'>
            <div class="boxArea">
                <div class="boxTemp box-manage-setting">
                    <h3>pop Apps Settings</h3>
                    <div class='info'>
                        <form accept-charset="UTF-8" action="/console/popapps/settings/sid/{$simulator.0.simulator_id}" class="group" id="new_application" method="post">
                        <fieldset>
                        <div class='settings_section'>
                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_direction">Direction:</label>
                                </div>
                                <div class='input'>
                                    <table>
                                        <tr>
                                            <td>
                                                <input id="popapps_direction_{$smarty.const.DIRECTION_VERTICAL}" name="direction" type="radio" value="{$smarty.const.DIRECTION_VERTICAL}"{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_VERTICAL) == 0} checked{/if}{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_VERTICAL) != 0} onChange="alert('{$direction_change_message}')"{/if} />
                                                
                                                <label for="popapps_direction_{$smarty.const.DIRECTION_VERTICAL}">Vertical</label>
                                            </td>
                                            <td><img src="/img/phone/phone_vertical.png" alt="" /></td>
                                            <td>
                                                <input id="popapps_direction_{$smarty.const.DIRECTION_HORIZON}" name="direction" type="radio" value="{$smarty.const.DIRECTION_HORIZON}"{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_HORIZON) == 0} checked{/if}{if strcasecmp($smarty.post.direction,$smarty.const.DIRECTION_HORIZON) != 0} onChange="alert('{$direction_change_message}')"{/if} />
                                                <label for="popapps_direction_{$smarty.const.DIRECTION_HORIZON}">Horizon</label>
                                            </td>
                                            <td><img src="/img/phone/phone_horizon.png" alt="" /></td>
                                        </tr>
                                    </table>
                                    <div class='form_error'>{$error.direction|error_message}</div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_url">URL:</label>
                                </div>
                                <div class='input'>
                                    <input name="url" size="30" type="text" value="{$smarty.post.url}" />
                                    <div class='form_error'>{$error.url|error_message}</div>
                                </div>
                            </div>

{*                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_title">Title:</label>
                                </div>
                                <div class='input'>
                                    <input name="title" size="30" type="text" value="{$smarty.post.title}" />
                                    <div class='form_error'>{$error.title|error_message}</div>
                                </div>
                            </div>*}

                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_link">Link:</label>
                                </div>
                                <div class='input'>
                                    <input name="link" size="30" type="text" value="{$smarty.post.link}" />
                                    <div class='form_error'>{$error.link|error_message}</div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_scroll">Scroll:</label>
                                </div>
                                <div class='input'>
                                    <ul class='enum_set'>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_FIRST}" name="scroll" type="radio" value="{$smarty.const.SCROLL_FIRST}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_FIRST) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_FIRST}">{$smarty.const.SCROLL_FIRST_NAME}</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_TOP}" name="scroll" type="radio" value="{$smarty.const.SCROLL_TOP}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_TOP) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_TOP}">{$smarty.const.SCROLL_TOP_NAME}</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_HALF}" name="scroll" type="radio" value="{$smarty.const.SCROLL_HALF}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_HALF) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_HALF}">{$smarty.const.SCROLL_HALF_NAME}</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_BOTTOM}" name="scroll" type="radio" value="{$smarty.const.SCROLL_BOTTOM}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_BOTTOM) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_BOTTOM}">{$smarty.const.SCROLL_BOTTOM_NAME}</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_END}" name="scroll" type="radio" value="{$smarty.const.SCROLL_END}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_END) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_END}">{$smarty.const.SCROLL_END_NAME}</label>
                                        </li>
                                    </ul>
                                    <div class='form_error'>{$error.scroll|error_message}</div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_position">Position:</label>
                                </div>
                                <div class='input'>
                                    <ul class='enum_set'>
                                        <li>
                                        <input id="popapps_position_{$smarty.const.POSITION_LEFT}" name="position" type="radio" value="{$smarty.const.POSITION_LEFT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_LEFT) == 0} checked{/if} />
                                        <label for="popapps_position_{$smarty.const.POSITION_LEFT}">Left</label>
                                        </li>
{*                                        <li>
                                        <input id="popapps_position_{$smarty.const.POSITION_CENTER}" name="position" type="radio" value="{$smarty.const.POSITION_CENTER}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_CENTER) == 0} checked{/if} />
                                        <label for="popapps_position_{$smarty.const.POSITION_CENTER}">Center</label>
                                        </li>*}
                                        <li>
                                        <input id="popapps_position_{$smarty.const.POSITION_RIGHT}" name="position" type="radio" value="{$smarty.const.POSITION_RIGHT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_RIGHT) == 0} checked{/if} />
                                        <label for="popapps_position_{$smarty.const.POSITION_RIGHT}">Right</label>
                                        </li>
                                    </ul>
                                    <div class='form_error'>{$error.position|error_message}</div>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_validate">Display:</label>
                                </div>
                                <div class='input'>
                                    <ul class='enum_set'>
                                        <li>
                                        <input id="popapps_validate_{$smarty.const.VALIDATE_ALLOW}" name="validate" type="radio" value="{$smarty.const.VALIDATE_ALLOW}"{if strcasecmp($smarty.post.validate,$smarty.const.VALIDATE_ALLOW) == 0} checked{/if} />
                                        <label for="popapps_validate_{$smarty.const.VALIDATE_ALLOW}">On</label>
                                        </li>
                                        <li>
                                        <input id="popapps_validate_{$smarty.const.VALIDATE_DENY}" name="validate" type="radio" value="{$smarty.const.VALIDATE_DENY}"{if strcasecmp($smarty.post.validate,$smarty.const.VALIDATE_DENY) == 0} checked{/if} />
                                        <label for="popapps_validate_{$smarty.const.VALIDATE_DENY}">Off</label>
                                        </li>
                                    </ul>
                                    <div class='form_error'>{$error.validate|error_message}</div>
                                </div>
                            </div>
                        </div>
                        </fieldset>
                        <div class="btn">
                            <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                            <input type="image" alt="Previous" src="/img/common/previous_off.png" onClick="history.back();return false;"/>
                            <input type="image" id="setting_submit" alt="Save" src="/img/common/save_off.png" />
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
</body>
</html>