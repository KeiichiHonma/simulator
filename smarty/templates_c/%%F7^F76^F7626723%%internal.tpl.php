<?php /* Smarty version 2.6.18, created on 2012-12-16 10:44:17
         compiled from internal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'internal.tpl', 29, false),)), $this); ?>
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
        <h1 class="push pt60"><?php echo $this->_tpl_vars['locale']['internal_h1']; ?>
</h1>
        <div class="featureArea width100 cf">
            <div class="boxTemp mb60">
                <img src="<?php echo $this->_tpl_vars['path']; ?>
pic_error.png" alt="error" />
                <h2 class="subtitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['internal_h2'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</h2>
                    <ul class="list">
                        <li><?php echo $this->_tpl_vars['locale']['internal_1']; ?>
</li>
                        <li><?php echo $this->_tpl_vars['locale']['internal_2']; ?>
</li>
                        <li><?php echo $this->_tpl_vars['locale']['internal_3']; ?>
</li>
                        <li><?php echo $this->_tpl_vars['locale']['internal_4']; ?>
</li>
                    </ul>
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