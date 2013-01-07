<?php /* Smarty version 2.6.18, created on 2012-12-20 17:06:05
         compiled from promo/finish.tpl */ ?>
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

<body class="b-console"><div id="container"><div id="wrap">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/header.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="commonTopArea">
    <div class="inner01 cf">
        <h1>Thank&nbsp;You&nbsp;For&nbsp;Upgrade</h1>
    </div>

</div>

<div id="contents" class="c-common">
    <div id="inner02" class="mt40 mb60">
        <div class="chooseArea cf">
            <!-- plus str -->
            <div class="boxTemp width100 cf">
                <div class="title bgBlue"><?php echo $this->_tpl_vars['locale']['success_title']; ?>
</div>
                <div class="paypal-left">
                    <ul>
                        <li><?php echo $this->_tpl_vars['item_name']; ?>
</li>
                        <li><?php echo $this->_tpl_vars['locale']['success_text1']; ?>
<?php echo $this->_tpl_vars['add_app']; ?>
<?php echo $this->_tpl_vars['locale']['success_text2']; ?>
</li>
                        <li><?php echo $this->_tpl_vars['locale']['success_text3']; ?>
</li>
                        <li><?php echo $this->_tpl_vars['locale']['link_2']; ?>
</li>
                        <?php if ($this->_tpl_vars['is_auth']): ?><li><?php echo $this->_tpl_vars['locale']['link_3']; ?>
</li><?php endif; ?>
                    </ul>

                </div>
            </div>
            <!-- plus end -->
        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/footer.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div></div></body>
</html>