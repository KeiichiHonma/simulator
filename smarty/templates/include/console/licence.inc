<div class="boxTemp box-detail">
    <h3>Plan & Limits</h3>
    {if $is_free}{$smarty.const.NAME_LICENCE_FREE}{/if}
    <div class='info'>
        <div class='item clearfix'>
            <div class='label'>Use App</div>
            <div class='value'>{$use_licence}</div>
        </div>
        <div class='item clearfix'>
            <div class='label'>Max App</div>
            <div class='value'>{$max_licence}</div>
        </div>

        <div class='upgrade_prompt'>
            <div class='title'>Upgrade to:</div>
            <ul>
                <li>
                    <a href="/paypal/{if $debug}sandbox/{/if}basic">{$smarty.const.NAME_LICENCE_BASIC} (${$smarty.const.COST_LICENCE_BASIC} / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_BASIC}App)</a>
                    <div class='details'>
                    {if $is_free}
                    5アプリまで登録可能。画像の追加削除が可能。
                    {else}
                    登録アプリ数を5追加します。
                    {/if}
                    </div>
                </li>
                <li>
                    <a href="/paypal/{if $debug}sandbox/{/if}advance">{$smarty.const.NAME_LICENCE_ADVANCE} (${$smarty.const.COST_LICENCE_ADVANCE} / {if !$is_free}+{/if}{$smarty.const.MAX_LICENCE_ADVANCE}App)</a>
                    <div class='details'>
                    {if $is_free}
                    10アプリまで登録可能。画像の追加削除が可能。
                    {else}
                    登録アプリ数を10追加します。
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

    </div>
</div>
