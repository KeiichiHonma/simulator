<div class="fr">
{if $is_auth}
    <a href="/console/">{$smarty.session.SIM_USER_NAME}</a> / use-licence - {$smarty.session.SIM_USER_USE_LICENCE} / max-licence-{$smarty.session.SIM_USER_MAX_LICENCE}
    
    {if $is_app_add}
        <div class='new-group'><a href="/console/new/">新しいアプリを登録する</a></div>
    {else}
        <div class='new-group'><a href="/licence/add">ライセンス数を追加する</a></div>
    {/if}
{else}
    <a href="/auth/facebook"><img src="/img/common/sign_in_with_faceboo.png" /></a>
{/if}
</div>