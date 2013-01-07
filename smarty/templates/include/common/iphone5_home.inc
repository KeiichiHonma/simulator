<div id="iphone">
    <div id="app">
        <div id="flickable">
            <ul id="flickable_ul">
                {foreach from=$iphone.user_images_chunk key="key" item="user_images" name="user_images_chunk"}
                <li>
                    <div class="block">
                    {foreach from=$user_images key="sid" item="user_images" name="user_images"}
                    <div class="logo">{if $is_console}<img src="{$user_images.secure_url}" width="40" height="40" />{else}<a href="/phone?sid={$sid}&home_p={$iphone.position}"><img src="{$user_images.secure_url}" width="40" height="40" /></a>{/if}</div>
                    {/foreach}
                    </div>
                </li>
                {/foreach}
            </ul>
        </div>
        {if $iphone.user_display_count > 2}
        <div style="clear:both;"></div>
        <ul id="select_box">
            {section name=cnt start=1  loop=$iphone.user_display_count}
                <li id="select_box_{$smarty.section.cnt.index}"><a href="javascript:void(0);" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a></li>
            {/section}
        </ul>
        {/if}
    </div>
</div>