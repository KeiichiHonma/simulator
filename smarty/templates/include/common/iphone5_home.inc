<div id="iphone">
    <div id="app">
        <div class="top-box">
            <div class="arrow_box">
logo
            </div>
        </div>
        <div id="flickable">
            <ul id="flickable_ul">
            <li id="flick_home_1">
                <div class="block">
                {foreach from=$simulators key="key" item="simulator" name="simulators"}
                <div class="logo">{if !is_null($simulator.simulator_mobile_images)}<img src="{$simulator.simulator_mobile_images|getCloudinaryLogo}" />{else}<img src="{$simulator.application_mobile_images|getCloudinaryLogo}" />{/if}
                {*<a href="/console/view/sid/{$simulator.simulator_id}">{$simulator.col_name}</a>*}
                </div>
                {/foreach}
                </div>
            </li>
            </ul>
        </div>
        <div id="powered">powered by<br /><a href="http://simulator.813.co.jp/" target="_blank">pop Apps</a></div>
    </div>
</div>