<?php /* Smarty version 2.6.18, created on 2012-12-12 09:29:00
         compiled from include/console/detail.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'include/console/detail.inc', 1, false),)), $this); ?>
<div class="boxTemp box-detail detail<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['direction'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
">
    <h3><?php echo $this->_tpl_vars['locale']['view_detail_title']; ?>
</h3>
    <div class='info'>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['detail_app_name']; ?>
</div>
            <div class='value'><?php echo $this->_tpl_vars['simulator']['0']['col_name']; ?>
</div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['detail_itunes_id']; ?>
</div>
            <div class='value'><?php echo $this->_tpl_vars['simulator']['0']['col_itunes_id']; ?>
</div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['detail_itunes_url']; ?>
</div>
            <div class='value'><?php echo $this->_tpl_vars['simulator']['0']['col_itunes_url']; ?>
</div>
        </div>
    </div>
</div>