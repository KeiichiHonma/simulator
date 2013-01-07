<div class="boxTemp box-detail detail0">
    <h3>{$locale.licence_title}</h3>
    <div class='info'>
    {if $is_free}
        <div class='item clearfix'>
            <div class='plan'>{$smarty.const.NAME_LICENCE_FREE}</div>
        </div>
    {/if}

        <div class='item clearfix'>
            <div class='label'>{$locale.licence_use_app|nl2br}</div>
            <div class='value'>{$use_licence}&nbsp;{$locale.licence_app_unit}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>{$locale.licence_max_app|nl2br}</div>
            <div class='value'>{$max_licence}&nbsp;{$locale.licence_app_unit}</div>
        </div>
        {include file="include/console/upgrade.inc"}
    </div>
</div>
