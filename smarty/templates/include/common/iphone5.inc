<div id="iphone">
    <div id="app">
        <div id="top-box">
            <div class="arrow_box">
                <table>
                <tr><td class="logo"><img src="{$iphone.logo.transformations_url}" width="75" height="75" /></td>
                <td class="appstore" align="center"><a href="{$iphone.link}" target="_blank"><img src="{$ssl_path}appstore.gif" /></a>
                {if strcasecmp($iphone.licence,$smarty.const.LICENCE_FREE) == 0}<br /><div class="powered"><a href="{if $debug}http://www.simulator.813.co.jp/{else}http://www.popapp-simulator.com/{/if}" target="_blank">powered by popApps</a></div>{/if}
                </td>
                </tr>
                </table>
            </div>
        </div>
        <div id="flickable">
            <ul id="flickable_ul">
            {if $iphone.mobile.screenshots}
            {foreach from=$iphone.mobile.screenshots key="key" item="screenshot" name="screenshots"}
            <li id="flick_{$screenshot.public_id}"><div class="block"><img src="{$screenshot.transformations_url}" /></div></li>
            {/foreach}
            {/if}
            </ul>
        </div>
        
        <div style="clear:both;"></div>
        <ul id="select_box"> 
            {if $iphone.mobile.count_screenshots}
                {section name=cnt start=1  loop=$iphone.mobile.count_screenshots_on}
                    <li id="select_box_{$smarty.section.cnt.index}"><a href="javascript:void(0);" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a></li>
                {/section}
            {/if}
        </ul>
    </div>
</div>