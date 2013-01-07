<?php /* Smarty version 2.6.18, created on 2012-12-22 16:17:56
         compiled from demo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'demo.tpl', 53, false),)), $this); ?>
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
<link href="/css/demo.css" rel="stylesheet" type="text/css" media="all" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/javascript.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link href="/css/iphone.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/css/background_phone.php" rel="stylesheet" type="text/css" media="screen" />

<script src="/js/flick.php?demo=3" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=3" type="text/javascript"></script>
<link href="/css/iphone5.php?d=0&p=0&c=0&demo=3" rel="stylesheet" type="text/css" media="screen" />
<script type='text/javascript' src='/js/popapps.php?d=0&s=1&demo=3'></script>

<script src="/js/flick.php?demo=4" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=4" type="text/javascript"></script>
<link href="/css/iphone5.php?d=1&p=0&demo=4" rel="stylesheet" type="text/css" media="screen" />
<script type='text/javascript' src='/js/popapps.php?d=1&s=2&demo=4'></script>

<script type='text/javascript' src='/js/demo_home.js'></script>

</head>

<body class="b-index">
<!-- anchor--><div id="a_home"> </div><!-- anchor-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/header.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="topCommonArea">
    <div class="inner01-common cf">
        <div class="left">
            <h1><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
demo_ttl_ja.png" alt="<?php echo $this->_tpl_vars['locale']['topContentArea_h1']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['topContentArea_h1']; ?>
<?php endif; ?></h1>
        </div>
    </div>
</div>

<div id="contents" class="c-index">

    <div id="demoArea" class="cf">
    
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/demo/demo3.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/demo/demo4.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id='demoHome' style='z-index: 2147483582;width:402px;position: fixed;bottom:-329px;right: 514px;padding:0px;margin:0px;'>
            <span class="point-right01 mt10">
                <p class="point-right"><?php echo $this->_tpl_vars['locale']['point_home_1_1']; ?>
<br /><?php echo $this->_tpl_vars['locale']['point_home_1_2']; ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['point_home_1_3'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
            </span>
            <span class="point-right02 mt10">
                <p class="point-right"><?php echo $this->_tpl_vars['locale']['point_home_2_1']; ?>
<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['point_home_2_2'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
            </span>
        </div>
    </div>
<div class="back">
<a href="/demo#a_home"><img src="<?php echo $this->_tpl_vars['path']; ?>
back.png" /></a>
</div>
</div>
<?php if ($this->_tpl_vars['debug']): ?>
<script type='text/javascript' src='https://www.simulator.813.co.jp/popapps?uid=1&s=4'></script>
<?php else: ?>
<script type='text/javascript' src='https://www.popapp-simulator.com/popapps?uid=1&s=4'></script>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/analytics.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>