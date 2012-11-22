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
                {if $user_images}
                {foreach from=$user_images key="key" item="user_images" name="user_images"}
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                <div class="logo"><img src="{$user_images.secure_url}" width="42" height="42" /></div>
                {*<a href="/console/view/sid/{$simulator.simulator_id}">{$simulator.col_name}</a>*}
                </div>
                {/foreach}
                {/if}
                </div>
            </li>
            </ul>
        </div>
    </div>
</div>