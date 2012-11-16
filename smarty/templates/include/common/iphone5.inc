<div id="iphone">
    <div id="app">
        <div class="top-box">
            <div style="float: left;"><img src="{$iphone.logo.transformations_url}" width="75" height="75" /></div>
            <div width="125">{$iphone.title}<br /><a href="{$iphone.link}" target="_blank"><img src="/img/phone/appstore"  width="125" height="42" alt="" /></a></div>
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
                        <li id="select_box_{$smarty.section.cnt.index}"><a href="#" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a><li/>
                    {/section}
                {/if}
            </ul>
    </div>
</div>