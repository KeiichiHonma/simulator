<div class='upgrade_prompt'>
    <div class='title'>Upgrade to:</div>
    <ul>
        {if $debug && !$paypal_sandbox}
        <li>
            <a href="/paypal/sample">Sample Plan (0.1$ / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_BASIC}{$locale.licence_app_unit})</a>
            <div class='details'>
            {if $is_free}
            {$locale.licence_basic_new_text}
            {else}
            {$locale.licence_basic_add_text}
            {/if}
            </div>
        </li>
        {/if}
        <li>
            <a href="/paypal/{if $paypal_sandbox}sandbox/{/if}basic">{$smarty.const.NAME_LICENCE_BASIC} ({$locale.licence_basic_cost} / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_BASIC}{$locale.licence_app_unit})</a>
            {*<a href="/paypal/basic">{$smarty.const.NAME_LICENCE_BASIC} (${$smarty.const.COST_LICENCE_BASIC} / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_BASIC}App)</a>*}
            <div class='details'>
            {if $is_free}
            {$locale.licence_basic_new_text|nl2br}
            {else}
            {$locale.licence_basic_add_text}
            {/if}
            </div>
        </li>
        <li>
            <a href="/paypal/{if $paypal_sandbox}sandbox/{/if}advance">{$smarty.const.NAME_LICENCE_ADVANCE} ({$locale.licence_advance_cost} / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_ADVANCE}{$locale.licence_app_unit})</a>
            <div class='details'>
            {if $is_free}
            {$locale.licence_advance_new_text|nl2br}
            {else}
            {$locale.licence_advance_add_text}
            {/if}
            </div>
        </li>
{*                <li>
            <a href="/users/upgrade/plus">Plus Plan ($9 / Month)</a>
            <div class='details'>
            {if $is_free}
            5アプリまで登録可能。画像の追加削除が可能。
            {else}
            登録アプリ数を5つ追加します。
            {/if}
            </div>
        </li>*}
    </ul>
</div>