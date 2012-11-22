<div class="boxTemp box-images">
    <h3>pop Apps Images</h3>
    <p class="center">スクリーンショットをアップしてください。</p>
    <div class='image clearfix'>
        <ul id="files" class="{$simulator.0.simulator_id}">
        {if $iphone.console.screenshots}
            {foreach from=$iphone.console.screenshots key="key" item="screenshot" name="screenshots"}
            <li id="files_{$screenshot.public_id}"><a href="#" id="{$screenshot.public_id}" class="delete">Delete</a><br /><img src="{$screenshot.transformations_url}" /></li>
            {/foreach}
        {/if}
        </ul>
        <div id="upload" class="{$simulator.0.simulator_id}"><span id="upload_btn">Upload image...<span></div>
        {*<br /><span id="status" ></span>*}
    </div>
</div>