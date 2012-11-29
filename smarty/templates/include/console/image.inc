<div class="boxTemp box-images images{$iphone.direction|default:0}">
    <h3>pop Apps Images</h3>
    <p class="center">スクリーンショットをアップしてください。</p>
    <div class="image-section section{$iphone.direction|default:0} clearfix">
        <ul id="files" class="{$simulator.0.simulator_id}">
        {if $iphone.console.screenshots}
            {foreach from=$iphone.console.screenshots key="key" item="screenshot" name="screenshots"}
            <li id="files_{$screenshot.public_id}"><a href="#" id="{$screenshot.public_id}" class="delete">Delete</a><br /><img src="{$screenshot.transformations_url}" /></li>
            {if strcasecmp($iphone.direction,$smarty.const.DIRECTION_HORIZON) == 0 && $smarty.foreach.screenshots.iteration == 4}<br class="cl"/>{/if}
            {if strcasecmp($iphone.direction,$smarty.const.DIRECTION_VERTICAL) == 0 && $smarty.foreach.screenshots.iteration == 7}<br class="cl"/>{/if}
            {/foreach}
        {/if}
        </ul>
        {*{if $count_screenshots < 9}<div id="parent_upload"><div id="upload" class="{$simulator.0.simulator_id}"><span id="upload_btn">Upload image...<span></div></div>{/if}*}
        <div id="parent_upload" class="clearfix">
            <div id="upload" class="{$simulator.0.simulator_id}"><span id="upload_btn">Upload image...<span></div>
        </div>
        {*<div id="upload" class="{$simulator.0.simulator_id}"><span id="upload_btn">Upload image...<span></div>*}
        {*<br /><span id="status" ></span>*}
    </div>
</div>