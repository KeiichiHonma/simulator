<?php /* Smarty version 2.6.18, created on 2012-12-14 17:53:34
         compiled from include/common/iphone_header.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'include/common/iphone_header.inc', 6, false),)), $this); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/js/flick.php" type="text/javascript"></script>
<script src="/js/iphone5.php" type="text/javascript"></script>
<link href="/css/iphone.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/css/background_phone.php" rel="stylesheet" type="text/css" media="screen" />
<link href="/css/iphone5.php?d=<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['direction'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
&p=<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['position'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
<?php if (isset ( $this->_tpl_vars['is_home'] )): ?>&h=<?php echo ((is_array($_tmp=@$this->_tpl_vars['is_home'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
<?php endif; ?><?php if (isset ( $this->_tpl_vars['is_console_phone'] )): ?>&c=<?php echo ((is_array($_tmp=@$this->_tpl_vars['is_console_phone'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
<?php endif; ?><?php if (isset ( $this->_tpl_vars['home_p'] )): ?>&home_p=<?php echo ((is_array($_tmp=@$this->_tpl_vars['home_p'])) ? $this->_run_mod_handler('default', true, $_tmp, 2) : smarty_modifier_default($_tmp, 2)); ?>
<?php endif; ?>" rel="stylesheet" type="text/css" media="screen" />