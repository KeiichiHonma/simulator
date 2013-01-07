<?php /* Smarty version 2.6.18, created on 2012-12-14 17:53:34
         compiled from phone_error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'phone_error.tpl', 21, false),)), $this); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->_tpl_vars['locale']['lang']; ?>
">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>error</title>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/iphone_header.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<body style="padding:0;margin:0;">
    <div id="iphone">
        <div id="app">
            <div id="error-box">
                    <div class="phone-warning">
                    <?php $_from = $this->_tpl_vars['errorlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['errorlist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['errorlist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['errorlist']['iteration']++;
?>
                    <?php echo $this->_tpl_vars['value']; ?>
<br />
                    <?php endforeach; endif; unset($_from); ?>
                    </div>
            </div>
            <div id="flickable">
                <ul id="flickable_ul">
                    <li><div class="block"><img src="<?php echo $this->_tpl_vars['ssl_path']; ?>
under_construction<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['direction'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
.jpg" /></div></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>