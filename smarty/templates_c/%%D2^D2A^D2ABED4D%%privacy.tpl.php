<?php /* Smarty version 2.6.18, created on 2012-12-29 11:17:13
         compiled from privacy.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'privacy.tpl', 31, false),array('function', 'mailto', 'privacy.tpl', 58, false),)), $this); ?>
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

<body class="b-common">
<div id="container">
    <div id="wrap">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/header.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
        <div id="topCommonArea">
            <div class="inner01-common cf">
                <div class="left">
                <h1><?php echo $this->_tpl_vars['locale']['topContentArea_h1']; ?>
</h1>
                </div>
            </div>
        </div>
        
        <div id="contents" class="c-common">
            <div id='main'>
                <div id="inner02">
                    <h2 class="mt20">Privacy Policy</h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['privacy_catch'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                </div>
                            </div>
                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title"><?php echo $this->_tpl_vars['locale']['privacy_title_1']; ?>
</p>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['privacy_text_1'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                </div>
                            </div>

                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title"><?php echo $this->_tpl_vars['locale']['privacy_title_2']; ?>
</p>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['privacy_text_2'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                </div>
                            </div>

                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title"><?php echo $this->_tpl_vars['locale']['privacy_title_3']; ?>
</p>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['privacy_text_3'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                </div>
                            </div>

                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title"><?php echo $this->_tpl_vars['locale']['privacy_title_4']; ?>
</p>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['privacy_text_4'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 <?php echo smarty_function_mailto(array('address' => "info@popapp-simulator.com",'encode' => 'hex','text' => "info@popapp-simulator.com"), $this);?>
</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
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