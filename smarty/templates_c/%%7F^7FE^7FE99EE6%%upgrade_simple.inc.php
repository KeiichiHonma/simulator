<?php /* Smarty version 2.6.18, created on 2012-12-12 15:05:38
         compiled from include/console/upgrade_simple.inc */ ?>
<div class='upgrade_prompt'>
    <div class='title'>Upgrade to:</div>
    <ul>
        <li>
            <a href="/paypal/<?php if ($this->_tpl_vars['paypal_sandbox']): ?>sandbox/<?php endif; ?>basic"><?php echo @NAME_LICENCE_BASIC; ?>
 (<?php echo $this->_tpl_vars['locale']['licence_basic_cost']; ?>
 / <?php if (! $this->_tpl_vars['is_free']): ?>+<?php endif; ?><?php echo @MAX_LICENCE_BASIC; ?>
<?php echo $this->_tpl_vars['locale']['licence_app_unit']; ?>
)</a>
        </li>
        <li>
            <a href="/paypal/<?php if ($this->_tpl_vars['paypal_sandbox']): ?>sandbox/<?php endif; ?>advance"><?php echo @NAME_LICENCE_ADVANCE; ?>
 (<?php echo $this->_tpl_vars['locale']['licence_advance_cost']; ?>
 / <?php if (! $this->_tpl_vars['is_free']): ?>+<?php endif; ?><?php echo @MAX_LICENCE_ADVANCE; ?>
<?php echo $this->_tpl_vars['locale']['licence_app_unit']; ?>
)</a>
        </li>
    </ul>
</div>