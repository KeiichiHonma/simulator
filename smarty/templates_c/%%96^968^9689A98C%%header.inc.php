<?php /* Smarty version 2.6.18, created on 2012-12-22 11:03:51
         compiled from include/common/header.inc */ ?>
<div id="header">
    <div class="inner01 cf">
        <div class="logo"><a href="/">popApps</a></div>
        <div class="nav">
            <ul class="cf">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/signin.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <li class="head"> | </li>
                <li class="head"><a href="/"><?php echo $this->_tpl_vars['locale']['g_home']; ?>
</a></li>
                <li><a href="/demo"><?php echo $this->_tpl_vars['locale']['g_demo']; ?>
</a></li>
                <li><a href="<?php if (! $this->_tpl_vars['index']): ?>/<?php endif; ?>#a_features"><?php echo $this->_tpl_vars['locale']['g_feature']; ?>
</a></li>
                <li><a href="<?php if (! $this->_tpl_vars['index']): ?>/<?php endif; ?>#a_plans"><?php echo $this->_tpl_vars['locale']['g_plans']; ?>
</a></li>
                <li><a href="<?php if (! $this->_tpl_vars['index']): ?>/<?php endif; ?>#a_faq"><?php echo $this->_tpl_vars['locale']['g_faq']; ?>
</a></li>
                
            </ul>
        </div>
    </div>
</div>