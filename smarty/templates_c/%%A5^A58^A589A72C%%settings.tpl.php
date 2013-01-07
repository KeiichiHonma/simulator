<?php /* Smarty version 2.6.18, created on 2012-12-13 15:13:51
         compiled from console/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'error_message', 'console/settings.tpl', 51, false),)), $this); ?>
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
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
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
        <div id="contents" class="c-common">
            <div id='main' class="mb40 clearfix">
                <div class='fl'>
                    <div class="boxArea">
                        <div class="boxTemp box-manage-setting">
                            <h3><?php echo $this->_tpl_vars['locale']['home_setting_title']; ?>
</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/settings" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_scroll"><?php echo $this->_tpl_vars['locale']['setting_scroll_title']; ?>
:</label>
                                        </div>
                                        <div class='input'>
                                            <ul class='enum_set'>
                                                <li>
                                                <input id="popapps_scroll_<?php echo @SCROLL_FIRST; ?>
" name="scroll" type="radio" value="<?php echo @SCROLL_FIRST; ?>
"<?php if (strcasecmp ( $_POST['scroll'] , @SCROLL_FIRST ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_scroll_<?php echo @SCROLL_FIRST; ?>
"><?php echo $this->_tpl_vars['locale']['scroll_top']; ?>
</label>
                                                </li>
                                                <li class="scroll">
                                                <input id="popapps_scroll_<?php echo @SCROLL_TOP; ?>
" name="scroll" type="radio" value="<?php echo @SCROLL_TOP; ?>
"<?php if (strcasecmp ( $_POST['scroll'] , @SCROLL_TOP ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_scroll_<?php echo @SCROLL_TOP; ?>
"><?php echo $this->_tpl_vars['locale']['scroll_one_third']; ?>
</label>
                                                </li>
                                                <li>
                                                <input id="popapps_scroll_<?php echo @SCROLL_HALF; ?>
" name="scroll" type="radio" value="<?php echo @SCROLL_HALF; ?>
"<?php if (strcasecmp ( $_POST['scroll'] , @SCROLL_HALF ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_scroll_<?php echo @SCROLL_HALF; ?>
"><?php echo $this->_tpl_vars['locale']['scroll_middle']; ?>
</label>
                                                </li>
                                                <li class="scroll">
                                                <input id="popapps_scroll_<?php echo @SCROLL_BOTTOM; ?>
" name="scroll" type="radio" value="<?php echo @SCROLL_BOTTOM; ?>
"<?php if (strcasecmp ( $_POST['scroll'] , @SCROLL_BOTTOM ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_scroll_<?php echo @SCROLL_BOTTOM; ?>
"><?php echo $this->_tpl_vars['locale']['scroll_two_third']; ?>
</label>
                                                </li>
                                                <li>
                                                <input id="popapps_scroll_<?php echo @SCROLL_END; ?>
" name="scroll" type="radio" value="<?php echo @SCROLL_END; ?>
"<?php if (strcasecmp ( $_POST['scroll'] , @SCROLL_END ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_scroll_<?php echo @SCROLL_END; ?>
"><?php echo $this->_tpl_vars['locale']['scroll_bottom']; ?>
</label>
                                                </li>
                                            </ul>
                                            <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['scroll'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_position"><?php echo $this->_tpl_vars['locale']['setting_position_title']; ?>
:</label>
                                        </div>
                                        <div class='input'>
                                            <ul class='enum_set'>
                                                <li>
                                                <input id="popapps_position_<?php echo @POSITION_LEFT; ?>
" name="position" type="radio" value="<?php echo @POSITION_LEFT; ?>
"<?php if (strcasecmp ( $_POST['position'] , @POSITION_LEFT ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_position_<?php echo @POSITION_LEFT; ?>
"><?php echo $this->_tpl_vars['locale']['position_left']; ?>
</label>
                                                </li>
                                                <li>
                                                <input id="popapps_position_<?php echo @POSITION_RIGHT; ?>
" name="position" type="radio" value="<?php echo @POSITION_RIGHT; ?>
"<?php if (strcasecmp ( $_POST['position'] , @POSITION_RIGHT ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_position_<?php echo @POSITION_RIGHT; ?>
"><?php echo $this->_tpl_vars['locale']['position_right']; ?>
</label>
                                                </li>
                                            </ul>
                                            <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['position'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <div class="btn">
                                    <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
                                    <input type="image" alt="Previous" src="/img/common/previous_off.png" onClick="history.back();return false;"/>
                                    <input type="image" alt="Save" src="/img/common/save_off.png" onClick="void(this.form.submit());return false;"/>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class='fl'>
                    <div class="boxArea">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/console/licence.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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