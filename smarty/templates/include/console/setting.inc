<div class="boxTemp box-setting">
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
        <div class='item clearfix'>
            <div class='label'>Title:</div>
            <div class='value'>{$simulator.0.col_title}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Link</div>
            <div class='value'>{$simulator.0.col_link}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Scroll</div>
            <div class='value'>{if strcasecmp($simulator.0.col_scroll,4) == 0}Page End{elseif strcasecmp($simulator.0.col_scroll,3) == 0}Bottom{elseif strcasecmp($simulator.0.col_scroll,2) == 0}Half{elseif strcasecmp($simulator.0.col_scroll,1) == 0}Top{else}Beginning{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Position</div>
            <div class='value'>{if strcasecmp($simulator.0.col_position,2) == 0}right{elseif strcasecmp($simulator.0.col_position,1) == 0}center{else}left{/if}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>code</div>
            <div class='value'>
            <textarea class="embed_code" rows="5"><script type='text/javascript' src='{$popapps_url|escape:"html"}'></script></textarea>
            <br />上記のコードをウェブサイトに設置します。
            </div>
        </div>
        <div class="console-action"><a href="/console/settings/sid/{$simulator.0.simulator_id}">Manage Settings...</a></div>
    </div>
</div>