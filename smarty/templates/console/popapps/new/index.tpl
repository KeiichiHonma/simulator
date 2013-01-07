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
        {if !$page_analyze}
                    <div class="boxArea">
                        <div class="boxTemp box-manage-setting">
                            <h3>{$locale.new_add_title}</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/popapps/new/" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    {if $error.system}
                                    <div class='row'>
                                        <table>
                                            <tr>
                                                <td><img src="{$path}pic_error.png" alt="error" /></td><td><h4>{$error.system|error_message}</h4></td>
                                            </tr>
                                        </table>
                                    </div>
                                    {/if}
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_url">{$locale.detail_itunes_url}:</label>
                                        </div>
                                        <div class='input'>
                                            <input name="itunes_url" id="itunes_url" size="30" type="text" value="{$smarty.post.itunes_url}" />
                                            <div class='form_error'>{$error.itunes_url|error_message}</div>
                                        </div>
                                    </div>
                                    <div class="btn">
                                        <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                                        <input type="hidden" name="method" value="analyze" />
                                        <input type="image" id="next_submit" alt="Next" src="{$path}next_off.png"/>
                                        <div id="loader"></div>
                                        <div id="loader-text"></div>
                                    </div>
                                </fieldset>
                                </form>
                                <div class="faqArea cf">
                                    <p class="question">{$faq.0.col_title}</p>
                                    <span class="arrow"><img src="http://res.cloudinary.com/hachione/image/upload/icon_faq_01.png" alt="" /></span>
                                    <div class="boxTemp mb20">
                                        <p>{$faq.0.col_text|nl2br}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        {/if}
        {if $page_analyze}
                    <div class="boxArea">
                        <div class="boxTemp box-manage-setting">
                            <h3>{$locale.new_add_title}</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/popapps/new/" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <div class='row'>
                                            <div class='title'>
                                            <label for="popapps_images">{$locale.new_images_title}</label>
                                            </div>
                                            <ul class="screenshots clearfix">
                                            <li><img src="/im/logo?url={$iphone.logo.transformations_url|escape|urlencode}" /></li>
                                            {foreach from=$iphone.mobile.screenshots key="key" item="screenshot" name="screenshots"}
                                            <li><img src="/im/screenshot?url={$screenshot.transformations_url|escape|urlencode}" /></li>
                                            {if strcasecmp($iphone.direction,$smarty.const.DIRECTION_HORIZON) == 0 && $smarty.foreach.screenshots.iteration == 4}<br class="cl"/>{/if}
                                            {if strcasecmp($iphone.direction,$smarty.const.DIRECTION_VERTICAL) == 0 && $smarty.foreach.screenshots.iteration == 7}<br class="cl"/>{/if}
                                            {/foreach}
                                            </ul>
                                    </div>

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_url">{$locale.setting_url_title}</label>
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
                                </div>
                                </fieldset>
                                <div class="btn">
                                    <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                                    <input type="hidden" name="itunes_url" value="{$smarty.post.itunes_url}" />
                                    <input type="hidden" name="method" value="create" />
                                    <input type="image" id="previous_submit" alt="Previous" src="{$path}previous_off.png" onClick="history.back();return false;"/>&nbsp;<input type="image" id="create_submit" alt="Create" src="{$path}create_off.png" />
                                    <div id="loader"></div>
                                    <div id="loader-text"></div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
        {/if}
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