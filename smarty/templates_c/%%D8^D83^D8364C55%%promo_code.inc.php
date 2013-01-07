<?php /* Smarty version 2.6.18, created on 2012-12-22 15:49:53
         compiled from include/plan/promo_code.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'error_message', 'include/plan/promo_code.inc', 7, false),)), $this); ?>
<div class='promo_code'>
    <form accept-charset="UTF-8" action="/promo/confirm" id="new_promo_code" method="post">
    <div style="margin:0;padding:0;display:inline">
    <label><?php echo $this->_tpl_vars['locale']['promo_code_comment']; ?>
:</label>
    <input id="promo_code" name="promo_code" type="text" />
    <input id="promo_code_submit" name="commit" type="submit" value="<?php echo $this->_tpl_vars['locale']['promo_code_apply']; ?>
" />
    <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['promo_code'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
    <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
    
    </div>
    </form>
</div>