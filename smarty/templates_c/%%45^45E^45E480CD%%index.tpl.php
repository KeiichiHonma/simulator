<?php /* Smarty version 2.6.18, created on 2012-12-22 11:07:36
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'index.tpl', 112, false),)), $this); ?>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link href="/css/iphone.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/css/background_phone.php" rel="stylesheet" type="text/css" media="screen" />

<script src="/js/flick.php?demo=1" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=1" type="text/javascript"></script>
<link href="/css/iphone5.php?d=0&p=0&c=0&demo=1" rel="stylesheet" type="text/css" media="screen" />
<script type='text/javascript' src='/js/popapps.php?d=0&s=0&demo=1&speed=600'></script>

<script src="/js/flick.php?demo=2" type="text/javascript"></script>
<script src="/js/iphone5.php?demo=2" type="text/javascript"></script>
<link href="/css/iphone5.php?d=1&p=0&demo=2" rel="stylesheet" type="text/css" media="screen" />
<link rel='stylesheet' href='/css/popapps.php?p=0&d=1&demo=2' type='text/css' media='screen' />
<script type='text/javascript' src='/js/popapps.php?d=1&s=1&demo=2'></script>
</head>

<body class="b-index">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/header.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="topContentArea">
    <div class="inner01 cf">
        <div class="left">
            <h1><?php echo $this->_tpl_vars['locale']['topContentArea_h1']; ?>
</h1>
            <p><?php echo $this->_tpl_vars['locale']['topContentArea_text']; ?>
</p>
        </div>
        <div class="demo1_section">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/demo/demo1.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>

    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/demo/demo2.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- 
//////////////////////////////////////////////////////////////////////////////
contents
//////////////////////////////////////////////////////////////////////////////
-->
<div id="contents" class="c-index">
    
    <div id="performanceArea" class="cf">
        <div class="inner01 cf">
            
            <span class="point01 mt10">
                <p><em><?php echo $this->_tpl_vars['locale']['point01_title']; ?>
</em><?php echo $this->_tpl_vars['locale']['point01_text']; ?>
</p>
            </span>
            <span class="point02 mt10">
                <p><em><?php echo $this->_tpl_vars['locale']['point02_title']; ?>
</em><?php echo $this->_tpl_vars['locale']['point02_text']; ?>
</p>
            </span>
            
        </div>
    </div>
    
        
    <div id="inner02" class="mmt cf">
        
        <!-- anchor--><div id="a_features"> </div><!-- anchor-->

        <h2><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
feature_ttl_1_ja.png" alt="<?php echo $this->_tpl_vars['locale']['reason_1_h2']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['reason_1_h2']; ?>
<?php endif; ?></h2>
        <div class="featureArea cf">
            <div class="boxTemp box01 little">
                <img src="<?php echo $this->_tpl_vars['path']; ?>
pic_feature_01.png" alt="No time limit" class="icon" />
                <h3><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
feature_subttl_1_ja.gif" alt="<?php echo $this->_tpl_vars['locale']['featureArea_1_h3']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['featureArea_1_h3']; ?>
<?php endif; ?></h3>
                <p><?php echo $this->_tpl_vars['locale']['featureArea_1_text']; ?>
</p>
            </div>
            <div class="boxTemp box02 little">
                <img src="<?php echo $this->_tpl_vars['path']; ?>
pic_feature_02.png" alt="Pay-as-used" class="icon" />
                <h3><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
feature_subttl_2_ja.gif" alt="<?php echo $this->_tpl_vars['locale']['featureArea_2_h3']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['featureArea_2_h3']; ?>
<?php endif; ?></h3>
                <p><?php echo $this->_tpl_vars['locale']['featureArea_2_text']; ?>
</p>
            </div>
            <div class="boxTemp box03 little">
                <img src="<?php echo $this->_tpl_vars['path']; ?>
pic_feature_03.png" alt="Setup in 10 seconds" class="icon" />
                <h3><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
feature_subttl_3_ja.gif" alt="<?php echo $this->_tpl_vars['locale']['featureArea_3_h3']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['featureArea_3_h3']; ?>
<?php endif; ?></h3>
                <p><?php echo $this->_tpl_vars['locale']['featureArea_3_text']; ?>
</p>
            </div>
        </div>
        
        <h2><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
feature_ttl_2_ja.png" alt="<?php echo $this->_tpl_vars['locale']['reason_2_h2']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['reason_2_h2']; ?>
<?php endif; ?></h2>
        <div class="featureArea width100 mb60 cf">
            <div class="boxTemp">
                <img src="<?php echo $this->_tpl_vars['path']; ?>
pic_feature_04.png" alt="Get feedback and requests from users" class="icon" />
                <h3><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
feature_subttl_4_ja.gif" alt="<?php echo $this->_tpl_vars['locale']['featureArea_4_h3']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['featureArea_4_h3']; ?>
<?php endif; ?></h3>
                <p class="center"><?php echo $this->_tpl_vars['locale']['featureArea_4_text']; ?>
</p>
            </div>
        </div>

        
        <!-- anchor--><div id="a_plans"> </div><!-- anchor-->

        <h2><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
choose_ttl_1_ja.png" alt="<?php echo $this->_tpl_vars['locale']['choose_h2']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['choose_h2']; ?>
<?php endif; ?></h2>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/plan.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php if ($this->_tpl_vars['faq']): ?>
        <!-- anchor--><div id="a_faq"> </div><!-- anchor-->
        <h2><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
faq_ttl_1_ja.png" alt="FAQ" /><?php else: ?>FAQ<?php endif; ?></h2>
        
        <div class="faqArea pb80 cf">
        <?php $_from = $this->_tpl_vars['faq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['faq'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['faq']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['faq']):
        $this->_foreach['faq']['iteration']++;
?>
            <p class="question">Q. <?php echo $this->_tpl_vars['faq']['col_title']; ?>
</p>
            <span class="arrow"><img src="<?php echo $this->_tpl_vars['path']; ?>
icon_faq_01.png" alt="" /></span>
            <div class="boxTemp mb20">
                <p><?php echo ((is_array($_tmp=$this->_tpl_vars['faq']['col_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
            </div>
        <?php endforeach; endif; unset($_from); ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php if ($this->_tpl_vars['debug']): ?>
<script type='text/javascript' src='https://www.simulator.813.co.jp/popapps?uid=1&s=4'></script>
<?php else: ?>
<script type='text/javascript' src='https://www.popapp-simulator.com/popapps?uid=1&s=4'></script>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/footer.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>