<?php /* Smarty version 2.6.18, created on 2012-12-22 10:30:33
         compiled from about.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'about.tpl', 33, false),)), $this); ?>
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
                <h1><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
about_ttl_ja.png" alt="<?php echo $this->_tpl_vars['locale']['topContentArea_h1']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['topContentArea_h1']; ?>
<?php endif; ?></h1>
                </div>
            </div>
        </div>

        <div id="contents" class="c-common">
            <div id='main'>
                <div id="inner02">

                    <h2 class="mt20"><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
about_ttl_1_ja.png" alt="<?php echo $this->_tpl_vars['locale']['topContentArea_h2_1']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['topContentArea_h2_1']; ?>
<?php endif; ?></h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p class="title"><?php echo $this->_tpl_vars['locale']['what_title']; ?>
</p>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['what_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt20"><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
about_ttl_2_ja.png" alt="<?php echo $this->_tpl_vars['locale']['topContentArea_h2_2']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['topContentArea_h2_2']; ?>
<?php endif; ?></h2>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/plan.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    
                    <h2 class="mt20"><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
about_ttl_3_ja.png" alt="<?php echo $this->_tpl_vars['locale']['topContentArea_h2_3']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['topContentArea_h2_3']; ?>
<?php endif; ?></h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['why_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="mt20"><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
about_ttl_4_ja.png" alt="<?php echo $this->_tpl_vars['locale']['topContentArea_h2_4']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['topContentArea_h2_4']; ?>
<?php endif; ?></h2>
                    <div class="pattern">
                        <div class="width100 mb40 cf">
                            <div class="boxTemp mb10">
                                <div>
                                    <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['who_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt20"><?php if (@LOCALE == LOCALE_JA): ?><img src="<?php echo $this->_tpl_vars['path']; ?>
about_ttl_6_ja.png" alt="<?php echo $this->_tpl_vars['locale']['topContentArea_h2_6']; ?>
" /><?php else: ?><?php echo $this->_tpl_vars['locale']['topContentArea_h2_6']; ?>
<?php endif; ?></h2>
                    
                    <div class="pattern">
                        <div class="width50 mb60 cf">
                            <div class="boxTemp left">
                                <p class="title"><?php echo $this->_tpl_vars['locale']['person_title_1']; ?>
</p>
                                <p><span><img src="http://res.cloudinary.com/popapps/image/upload/c_fill,e_saturation:-80,h_80,r_10,w_80/yoshio_yahagi.jpg" alt="Yoshio Yahagi" /></span><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['person_text_1'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                
                            </div>
                
                            <div class="boxTemp right">
                                <p class="title"><?php echo $this->_tpl_vars['locale']['person_title_2']; ?>
</p>
                                <p><span><img src="http://res.cloudinary.com/popapps/image/upload/c_fill,e_saturation:-80,h_80,r_10,w_80/keiichi_honma.jpg" alt="Keiichi Honma" /></span><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['person_text_2'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
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