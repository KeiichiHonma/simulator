<div class="boxTemp box-setting setting{$iphone.direction|default:0}">
    <h3>pop Apps Settings</h3>
    <div class='info'>
        <div class='item clearfix'>
            <div class='label'>Direction</div>
            <div class='value'>{if strcasecmp($simulator.0.col_direction,1) == 0}Horizon{else}Vertical{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Domain</div>
            <div class='value'>{$simulator.0.col_domain}</div>
        </div>
{*        <div class='item clearfix'>
            <div class='label'>Title:</div>
            <div class='value'>{$simulator.0.col_title}</div>
        </div>*}
        <div class='item clearfix'>
            <div class='label'>Link</div>
            <div class='value'>{$simulator.0.col_link}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Scroll</div>
            <div class='value'>{if strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_END) == 0}{$smarty.const.SCROLL_END_NAME}{elseif strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_BOTTOM) == 0}{$smarty.const.SCROLL_BOTTOM_NAME}{elseif strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_HALF) == 0}{$smarty.const.SCROLL_HALF_NAME}{elseif strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_TOP) == 0}{$smarty.const.SCROLL_TOP_NAME}{else}{$smarty.const.SCROLL_FIRST_NAME}{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Position</div>
            <div class='value'>{if strcasecmp($simulator.0.col_position,$smarty.const.POSITION_RIGHT) == 0}Right{elseif strcasecmp($simulator.0.col_position,$smarty.const.POSITION_CENTER) == 0}Center{else}Left{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Display</div>
            <div class='value'>{if strcasecmp($simulator.0.simulator_validate,1) == 0}Off{else}On{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>code</div>
            <div class='value'>
            <textarea class="embed_code" rows="5"><script type='text/javascript' src='{$popapps_url|escape:"html"}'></script></textarea>
            <br />上記のコードをウェブサイトに設置します。
            </div>
        </div>
        <div class="console-action"><a href="/console/popapps/settings/sid/{$simulator.0.simulator_id}">Manage Settings...</a></div>
    </div>
</div>