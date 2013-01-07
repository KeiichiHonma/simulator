<?php /* Smarty version 2.6.18, created on 2012-12-20 17:36:15
         compiled from include/console/upgrade.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'include/console/upgrade.inc', 21, false),)), $this); ?>
<div class='upgrade_prompt'>
    <div class='title'>Upgrade to:</div>
    <ul>
        <?php if ($this->_tpl_vars['debug'] && ! $this->_tpl_vars['paypal_sandbox']): ?>
        <li>
            <a href="/paypal/sample">Sample Plan (0.1$ / <?php if (! $this->_tpl_vars['is_free']): ?>+<?php endif; ?><?php echo @MAX_LICENCE_BASIC; ?>
<?php echo $this->_tpl_vars['locale']['licence_app_unit']; ?>
)</a>
            <div class='details'>
            <?php if ($this->_tpl_vars['is_free']): ?>
            <?php echo $this->_tpl_vars['locale']['licence_basic_new_text']; ?>

            <?php else: ?>
            <?php echo $this->_tpl_vars['locale']['licence_basic_add_text']; ?>

            <?php endif; ?>
            </div>
        </li>
        <?php endif; ?>
        <li>
            <a href="/paypal/<?php if ($this->_tpl_vars['paypal_sandbox']): ?>sandbox/<?php endif; ?>basic"><?php echo @NAME_LICENCE_BASIC; ?>
 (<?php echo $this->_tpl_vars['locale']['licence_basic_cost']; ?>
 / <?php if (! $this->_tpl_vars['is_free']): ?>+<?php endif; ?><?php echo @MAX_LICENCE_BASIC; ?>
<?php echo $this->_tpl_vars['locale']['licence_app_unit']; ?>
)</a>
                        <div class='details'>
            <?php if ($this->_tpl_vars['is_free']): ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['licence_basic_new_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            <?php else: ?>
            <?php echo $this->_tpl_vars['locale']['licence_basic_add_text']; ?>

            <?php endif; ?>
            </div>
        </li>
        <li>
            <a href="/paypal/<?php if ($this->_tpl_vars['paypal_sandbox']): ?>sandbox/<?php endif; ?>advance"><?php echo @NAME_LICENCE_ADVANCE; ?>
 (<?php echo $this->_tpl_vars['locale']['licence_advance_cost']; ?>
 / <?php if (! $this->_tpl_vars['is_free']): ?>+<?php endif; ?><?php echo @MAX_LICENCE_ADVANCE; ?>
<?php echo $this->_tpl_vars['locale']['licence_app_unit']; ?>
)</a>
            <div class='details'>
            <?php if ($this->_tpl_vars['is_free']): ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['licence_advance_new_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            <?php else: ?>
            <?php echo $this->_tpl_vars['locale']['licence_advance_add_text']; ?>

            <?php endif; ?>
            </div>
        </li>
    </ul>
</div>