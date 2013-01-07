<?php /* Smarty version 2.6.18, created on 2012-12-15 15:46:14
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'error.tpl', 29, false),)), $this); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->_tpl_vars['locale']['lang']; ?>
">
<head>
<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/head.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/javascript.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>

<body class="b-console">
<div id="container">
    <div id="wrap">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/header.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="errorArea">

</div>
<br class="cl"/>
<!-- 
//////////////////////////////////////////////////////////////////////////////
contents
//////////////////////////////////////////////////////////////////////////////
-->
<div id="contents" class="c-common">
    <div id="inner02" class="mmt cf">
        <h2 class="pt60">Warning</h2>
        <div class="featureArea width100 cf">
            <div class="boxTemp mb60">
                <img src="<?php echo $this->_tpl_vars['path']; ?>
pic_error.png" alt="error" />
                <h3><?php $_from = $this->_tpl_vars['errorlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['errorlist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['errorlist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
        $this->_foreach['errorlist']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br /><?php endforeach; endif; unset($_from); ?></h3>
                <p class="center">
                    
                </p>
            </div>
        </div>
    </div>
    <br class="cl"/>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/footer.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>
</body>
</html>