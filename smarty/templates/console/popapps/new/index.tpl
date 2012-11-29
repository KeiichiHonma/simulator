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
{if !$page_analyze}
            <div class="boxArea">
                <div class="boxTemp box-manage-setting">
                    <h3>New App Add</h3>
                    <div class='info'>
                        {$error.analyze|error_message}
                        <form accept-charset="UTF-8" action="/console/popapps/new/" class="group" id="new_application" method="post">
                        <fieldset>
                        <div class='settings_section'>
                            <div class='row'>
                                <div class='label'>
                                <label for="popapps_url">itunes url:</label>
                                </div>
                                <div class='input'>
                                    <input name="itunes_url" size="30" type="text" value="{$smarty.post.itunes_url}" />
                                    <div class='form_error'>{$error.itunes_url|error_message}</div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="btn">
                            <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
                            <input type="hidden" name="method" value="analyze" />
                            <div id="loader"><input type="image" id="next_submit" alt="Next" src="/img/common/next_off.png"/></div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
{/if}
{if $page_analyze}
            <div class="boxArea">
                <div class="boxTemp box-manage-setting">
                    <h3>pop Apps Settings</h3>
                    <div class='info'>
                        <form accept-charset="UTF-8" action="/console/popapps/new/" class="group" id="new_application" method="post">
                        <fieldset>
                        <div class='settings_section'>
                            <div class='row'>
                                    <div class='title'>
                                    <label for="popapps_images">Images</label>
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
                                <label for="popapps_url">URL</label>
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
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_FIRST}">Beginning</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_TOP}" name="scroll" type="radio" value="{$smarty.const.SCROLL_TOP}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_TOP) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_TOP}">Top</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_HALF}" name="scroll" type="radio" value="{$smarty.const.SCROLL_HALF}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_HALF) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_HALF}">Half</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_BOTTOM}" name="scroll" type="radio" value="{$smarty.const.SCROLL_BOTTOM}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_BOTTOM) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_BOTTOM}">Bottom</label>
                                        </li>
                                        <li>
                                        <input id="popapps_scroll_{$smarty.const.SCROLL_END}" name="scroll" type="radio" value="{$smarty.const.SCROLL_END}"{if strcasecmp($smarty.post.scroll,$smarty.const.SCROLL_END) == 0} checked{/if} />
                                        <label for="popapps_scroll_{$smarty.const.SCROLL_END}">Page End</label>
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
                                        <li>
                                        <input id="popapps_position_{$smarty.const.POSITION_CENTER}" name="position" type="radio" value="{$smarty.const.POSITION_CENTER}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_CENTER) == 0} checked{/if} />
                                        <label for="popapps_position_{$smarty.const.POSITION_CENTER}">Center</label>
                                        </li>
                                        <li>
                                        <input id="popapps_position_{$smarty.const.POSITION_RIGHT}" name="position" type="radio" value="{$smarty.const.POSITION_RIGHT}"{if strcasecmp($smarty.post.position,$smarty.const.POSITION_RIGHT) == 0} checked{/if} />
                                        <label for="popapps_position_{$smarty.const.POSITION_RIGHT}">Right</label>
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
                            <div id="loader"><input type="image" id="previous_submit" alt="Previous" src="/img/common/previous_off.png" onClick="history.back();return false;"/>&nbsp;<input type="image" id="create_submit" alt="Create" src="/img/common/create_off.png" /></div>
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
</body>
</html>