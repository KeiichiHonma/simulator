<?php /* Smarty version 2.6.18, created on 2012-12-17 13:14:29
         compiled from promo/confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'promo/confirm.tpl', 41, false),array('modifier', 'nl2br', 'promo/confirm.tpl', 43, false),)), $this); ?>
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
        <h1>Upgrade popApps Account</h1>
    </div>

</div>

<div id="contents" class="c-common">
    <div id="inner02" class="mt40 mb60">
                <div class="chooseArea cf">
            <!-- plus str -->
            <div class="boxTemp width100 cf">
                <div class="title bgBlue">Promo Code</div>

                
                <div class="paypal-center clearfix">
                    <div class="boxTemp box02">
                        <div class="price">
                            <p><?php echo $this->_tpl_vars['locale']['promo_title']; ?>
</p>
                            <span><?php echo $this->_tpl_vars['promo']['0']['col_code']; ?>
</span>
                        </div>
                        <div class="app">
                            <p><?php echo $this->_tpl_vars['locale']['promo_feature_1']; ?>
<span>+<?php echo $this->_tpl_vars['promo']['0']['col_plus_licence']; ?>
</span></p>
                            <p><?php echo $this->_tpl_vars['locale']['basic_feature_2']; ?>
</p>
                            <p><?php echo $this->_tpl_vars['locale']['basic_feature_3']; ?>
</p>
                        </div>
                        <div class="bestfor">
                            <ul>
                                <li><?php echo ((is_array($_tmp=$this->_tpl_vars['promo']['0']['col_from'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['promo']['0']['col_to'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</li>
                                <li><?php echo $this->_tpl_vars['promo']['0']['col_title']; ?>
</li>
                                <?php if (strlen ( $this->_tpl_vars['promo']['0']['col_detail'] ) > 0): ?><li><?php echo ((is_array($_tmp=$this->_tpl_vars['promo']['0']['col_detail'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</li><?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                    <form accept-charset="UTF-8" action="/promo/confirm" id="new_promo_code" method="post">
                    <div class="btn">
                        <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
                        <input id="promo_code" name="promo_code" type="hidden" value="<?php echo $this->_tpl_vars['promo']['0']['col_code']; ?>
" />
                        <input type="hidden" name="method" value="use_promo" />
                        <input type="image" id="previous_submit" alt="Previous" src="<?php echo $this->_tpl_vars['path']; ?>
previous_off.png" onClick="history.back();return false;"/>&nbsp;<input type="image" id="choose_submit" alt="Choose plan" src="<?php echo $this->_tpl_vars['path']; ?>
btn_choose_off.png" />
                        <div id="loader"></div>
                        <div id="loader-text"></div>
                    </div>
                    </form>
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