<?php /* Smarty version 2.6.18, created on 2012-12-20 17:36:30
         compiled from include/console/licence.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'include/console/licence.inc', 11, false),)), $this); ?>
<div class="boxTemp box-detail detail0">
    <h3><?php echo $this->_tpl_vars['locale']['licence_title']; ?>
</h3>
    <div class='info'>
    <?php if ($this->_tpl_vars['is_free']): ?>
        <div class='item clearfix'>
            <div class='plan'><?php echo @NAME_LICENCE_FREE; ?>
</div>
        </div>
    <?php endif; ?>

        <div class='item clearfix'>
            <div class='label'><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['licence_use_app'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
            <div class='value'><?php echo $this->_tpl_vars['use_licence']; ?>
&nbsp;<?php echo $this->_tpl_vars['locale']['licence_app_unit']; ?>
</div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['licence_max_app'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
            <div class='value'><?php echo $this->_tpl_vars['max_licence']; ?>
&nbsp;<?php echo $this->_tpl_vars['locale']['licence_app_unit']; ?>
</div>
        </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/console/upgrade.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>