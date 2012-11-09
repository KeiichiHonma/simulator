    <div id="iphone">
        <div id="app">
            <div class="top-box">
                <div style="float: left;"><img src="{$iphone.logo.transformations_url}" width="75" height="75" alt="" /></div>
                <div width="125">{$iphone.title}<br /><a href="{$iphone.link}" target="_blank"><img src="/img/common/install_btn.png"  width="125" height="23" alt="" /></a></div>
            </div>

            <div id="flickable4">
                <ul>
                {if $iphone.screenshots}
                {foreach from=$iphone.screenshots key="key" item="screenshot" name="screenshots"}
                <li><div class="block"><img src="{$screenshot.transformations_url}" /></div></li>
                {/foreach}
                {/if}
                </ul>
                
            </div>
            <div style="clear:both;"></div>
            <table id="select_box"> 
            <tbody>
                {if $iphone.count_screenshots}
                    {section name=cnt start=1  loop=$iphone.count_screenshots_on}
                        {if $smarty.section.cnt.index == 1 || $smarty.section.cnt.index == 4 || $smarty.section.cnt.index == 7}
                        <tr>
                        {/if}
                        <td><a href="#" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a></td>
                        {if $count_screenshots == $smarty.section.cnt.index || $smarty.section.cnt.index == 3 || $smarty.section.cnt.index == 6 || $smarty.section.cnt.index == 9}
                        </tr>
                        {/if}
                    {/section}
                {/if}
            </tbody>
            </table>
        </div>
    </div>