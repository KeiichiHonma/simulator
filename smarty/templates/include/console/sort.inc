<div class="boxTemp box-sort sort{$iphone.direction|default:0}">
    <h3>{$locale.sort_title}</h3>
    {if !$is_free}
        <p>{$locale.sort_text|nl2br}</p>
    {else}
        <p>{$locale.upgrade_sort_text}
        {include file="include/console/upgrade_simple.inc"}
        </p>
        
    {/if}
    <form action="/console/popapps/image/sort/sid/{$simulator.0.simulator_id}" id="image_sort_form" method="post">
        <ul id="sort" class="sortable grid">
        {if $iphone.console.screenshots}
            {foreach from=$iphone.console.screenshots key="key" item="screenshot" name="screenshots"}
            <li id="sort_{$screenshot.public_id}" class="{$key}"><img src="{$screenshot.thumbnail_url}" /></li>
            {/foreach}
        {/if}
        </ul>
        {if !$is_free}
        <div class='sort_btn'>
        <input type="hidden" id="image_sort" name="image_sort" />
        <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
        <input type="image" id="image_sort_submit" alt="Save" src="{$path}save_off.png" />
        </div>
        {/if}
    </form>
</div>