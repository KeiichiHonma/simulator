<div class="fr">
{if $is_auth}
<a href="/simulator/">{$smarty.session.SIM_USER_NAME}</a>
{else}
<a href="/auth/facebook"><img src="/img/common/sign_in_with_faceboo.png" /></a>
{/if}
</div>