<div id="iphone">
    <div id="app">
        <div class="top-box">
            <div class="arrow_box">
                <table>
                <tr><td rowspan=2 class="logo"><img src="{$iphone.logo.transformations_url}" width="75" height="75" /></td><td class="logo2" align="center"><a href="{$iphone.link}" target="_blank"><img src="/img/phone/appstore.gif"  width="105" height="35" alt="" /></a></td></tr>
                <tr><td class="title"><div>{$iphone.title}</div></td></tr>
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
                    <li id="select_box_{$smarty.section.cnt.index}"><a href="#" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a><li/>
                {/section}
            {/if}
        </ul>
        <div id="powered">powered by<br /><a href="http://simulator.813.co.jp/" target="_blank">pop Apps</a></div>
    </div>
</div>