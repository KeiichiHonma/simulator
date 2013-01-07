<div class='promo_code'>
    <form accept-charset="UTF-8" action="/promo/confirm" id="new_promo_code" method="post">
    <div style="margin:0;padding:0;display:inline">
    <label>{$locale.promo_code_comment}:</label>
    <input id="promo_code" name="promo_code" type="text" />
    <input id="promo_code_submit" name="commit" type="submit" value="{$locale.promo_code_apply}" />
    <div class='form_error'>{$error.promo_code|error_message}</div>
    <input type="hidden" name="csrf_ticket" value="{$csrf_ticket}" />
    
    </div>
    </form>
</div>