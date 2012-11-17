<div class="boxTemp box-sort">
    <h3>images Sort</h3>
    <p>You will forever be available to purchase at a time. There will be no monthly fee or renewal fee.</p>
    <form action="/console/image/sort/sid/{$simulator.0.simulator_id}" id="image_sort_form" method="post">
        <ul id="sort" class="sortable grid">
        {if $iphone.console.screenshots}
            {foreach from=$iphone.console.screenshots key="key" item="screenshot" name="screenshots"}
            <li id="sort_{$screenshot.public_id}" class="{$key}"><img src="{$screenshot.thumbnail_url}" /></li>
            {/foreach}
        {/if}
        </ul>
        <div class='sort_btn'>
        <input type="hidden" id="image_sort" name="image_sort" />
        <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
        <input type="button" value="submit" id="image_sort_submit" />
        </div>
    </form>
</div>