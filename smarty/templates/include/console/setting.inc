<div class="boxTemp box-setting setting{$iphone.direction|default:0}">
    <h3>{$locale.view_setting_title}</h3>
    <div class='info'>
        <div class='item clearfix'>
            <div class='label'>{$locale.setting_direction_title}</div>
            <div class='value'>{if strcasecmp($simulator.0.col_direction,1) == 0}{$locale.direction_horizon}{else}{$locale.direction_vertical}{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>{$locale.setting_url_title}</div>
            <div class='value'>{$simulator.0.col_url}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>{$locale.setting_link_title}</div>
            <div class='value'>{$simulator.0.col_link}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>{$locale.setting_scroll_title}</div>
            <div class='value'>{if strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_END) == 0}{$locale.scroll_bottom}{elseif strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_BOTTOM) == 0}{$locale.scroll_two_third}{elseif strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_HALF) == 0}{$locale.scroll_middle}{elseif strcasecmp($simulator.0.col_scroll,$smarty.const.SCROLL_TOP) == 0}{$locale.scroll_one_third}{else}{$locale.scroll_top}{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>{$locale.setting_position_title}</div>
            <div class='value'>{if strcasecmp($simulator.0.col_position,$smarty.const.POSITION_RIGHT) == 0}{$locale.position_right}{else}{$locale.position_left}{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>{$locale.setting_display_title}</div>
            <div class='value'>{if strcasecmp($simulator.0.simulator_validate,1) == 0}{$locale.display_off}{else}{$locale.display_on}{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>{$locale.setting_code_title}</div>
            <div class='value'>
            <textarea class="embed_code" rows="5"><script type='text/javascript' src='{$popapps_url|escape:"html"}'></script></textarea>
            <br />{$locale.setting_code_text}
            </div>
        </div>
        <div class="console-action"><a href="/console/popapps/settings/sid/{$simulator.0.simulator_id}">{$locale.manage_link}</a></div>
    </div>
</div>