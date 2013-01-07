<?php /* Smarty version 2.6.18, created on 2012-12-14 19:20:13
         compiled from console/popapps/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'error_message', 'console/popapps/settings.tpl', 45, false),)), $this); ?>
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
<link href="/css/console.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/js/form.js"></script>
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
                            <h3><?php echo $this->_tpl_vars['locale']['view_setting_title']; ?>
</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/popapps/settings/sid/<?php echo $this->_tpl_vars['simulator']['0']['simulator_id']; ?>
" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_direction"><?php echo $this->_tpl_vars['locale']['setting_direction_title']; ?>
:</label>
                                        </div>
                                        <div class='input'>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input id="popapps_direction_<?php echo @DIRECTION_VERTICAL; ?>
" name="direction" type="radio" value="<?php echo @DIRECTION_VERTICAL; ?>
"<?php if (strcasecmp ( $_POST['direction'] , @DIRECTION_VERTICAL ) == 0): ?> checked<?php endif; ?><?php if (strcasecmp ( $_POST['direction'] , @DIRECTION_VERTICAL ) != 0): ?> onChange="alert('<?php echo $this->_tpl_vars['direction_change_message']; ?>
')"<?php endif; ?> />
                                                        
                                                        <label for="popapps_direction_<?php echo @DIRECTION_VERTICAL; ?>
"><?php echo $this->_tpl_vars['locale']['direction_vertical']; ?>
</label>
                                                    </td>
                                                    <td><img src="<?php echo $this->_tpl_vars['ssl_path']; ?>
phone_vertical.png" alt="" /></td>
                                                    <td>
                                                        <input id="popapps_direction_<?php echo @DIRECTION_HORIZON; ?>
" name="direction" type="radio" value="<?php echo @DIRECTION_HORIZON; ?>
"<?php if (strcasecmp ( $_POST['direction'] , @DIRECTION_HORIZON ) == 0): ?> checked<?php endif; ?><?php if (strcasecmp ( $_POST['direction'] , @DIRECTION_HORIZON ) != 0): ?> onChange="alert('<?php echo $this->_tpl_vars['direction_change_message']; ?>
')"<?php endif; ?> />
                                                        <label for="popapps_direction_<?php echo @DIRECTION_HORIZON; ?>
"><?php echo $this->_tpl_vars['locale']['direction_horizon']; ?>
</label>
                                                    </td>
                                                    <td><img src="<?php echo $this->_tpl_vars['ssl_path']; ?>
phone_horizon.png" alt="" /></td>
                                                </tr>
                                            </table>
                                            <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['direction'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_url"><?php echo $this->_tpl_vars['locale']['setting_url_title']; ?>
:</label>
                                        </div>
                                        <div class='input'>
                                            <input name="url" size="30" type="text" value="<?php echo $_POST['url']; ?>
" />
                                            <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['url'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_link"><?php echo $this->_tpl_vars['locale']['setting_link_title']; ?>
:</label>
                                        </div>
                                        <div class='input'>
                                            <input name="link" size="30" type="text" value="<?php echo $_POST['link']; ?>
" />
                                            <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['link'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
                                        </div>
                                    </div>

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

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_validate"><?php echo $this->_tpl_vars['locale']['setting_display_title']; ?>
:</label>
                                        </div>
                                        <div class='input'>
                                            <ul class='enum_set'>
                                                <li>
                                                <input id="popapps_validate_<?php echo @VALIDATE_ALLOW; ?>
" name="validate" type="radio" value="<?php echo @VALIDATE_ALLOW; ?>
"<?php if (strcasecmp ( $_POST['validate'] , @VALIDATE_ALLOW ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_validate_<?php echo @VALIDATE_ALLOW; ?>
"><?php echo $this->_tpl_vars['locale']['display_on']; ?>
</label>
                                                </li>
                                                <li>
                                                <input id="popapps_validate_<?php echo @VALIDATE_DENY; ?>
" name="validate" type="radio" value="<?php echo @VALIDATE_DENY; ?>
"<?php if (strcasecmp ( $_POST['validate'] , @VALIDATE_DENY ) == 0): ?> checked<?php endif; ?> />
                                                <label for="popapps_validate_<?php echo @VALIDATE_DENY; ?>
"><?php echo $this->_tpl_vars['locale']['display_off']; ?>
</label>
                                                </li>
                                            </ul>
                                            <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['validate'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <div class="btn">
                                    <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
                                    <input type="image" alt="Previous" src="<?php echo $this->_tpl_vars['path']; ?>
previous_off.png" onClick="history.back();return false;"/>
                                    <input type="image" id="setting_submit" alt="Save" src="<?php echo $this->_tpl_vars['path']; ?>
save_off.png" />
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class='fl'>
                    <div class="boxArea">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/console/detail.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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