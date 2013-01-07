<?php /* Smarty version 2.6.18, created on 2012-12-22 11:19:57
         compiled from console/popapps/new/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'error_message', 'console/popapps/new/index.tpl', 30, false),array('modifier', 'nl2br', 'console/popapps/new/index.tpl', 57, false),array('modifier', 'escape', 'console/popapps/new/index.tpl', 77, false),array('modifier', 'urlencode', 'console/popapps/new/index.tpl', 77, false),)), $this); ?>
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
        <?php if (! $this->_tpl_vars['page_analyze']): ?>
                    <div class="boxArea">
                        <div class="boxTemp box-manage-setting">
                            <h3><?php echo $this->_tpl_vars['locale']['new_add_title']; ?>
</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/popapps/new/" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <?php if ($this->_tpl_vars['error']['system']): ?>
                                    <div class='row'>
                                        <table>
                                            <tr>
                                                <td><img src="<?php echo $this->_tpl_vars['path']; ?>
pic_error.png" alt="error" /></td><td><h4><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['system'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</h4></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php endif; ?>
                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_url"><?php echo $this->_tpl_vars['locale']['detail_itunes_url']; ?>
:</label>
                                        </div>
                                        <div class='input'>
                                            <input name="itunes_url" id="itunes_url" size="30" type="text" value="<?php echo $_POST['itunes_url']; ?>
" />
                                            <div class='form_error'><?php echo ((is_array($_tmp=$this->_tpl_vars['error']['itunes_url'])) ? $this->_run_mod_handler('error_message', true, $_tmp) : smarty_modifier_error_message($_tmp)); ?>
</div>
                                        </div>
                                    </div>
                                    <div class="btn">
                                        <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
                                        <input type="hidden" name="method" value="analyze" />
                                        <input type="image" id="next_submit" alt="Next" src="<?php echo $this->_tpl_vars['path']; ?>
next_off.png"/>
                                        <div id="loader"></div>
                                        <div id="loader-text"></div>
                                    </div>
                                </fieldset>
                                </form>
                                <div class="faqArea cf">
                                    <p class="question"><?php echo $this->_tpl_vars['faq']['0']['col_title']; ?>
</p>
                                    <span class="arrow"><img src="http://res.cloudinary.com/hachione/image/upload/icon_faq_01.png" alt="" /></span>
                                    <div class="boxTemp mb20">
                                        <p><?php echo ((is_array($_tmp=$this->_tpl_vars['faq']['0']['col_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['page_analyze']): ?>
                    <div class="boxArea">
                        <div class="boxTemp box-manage-setting">
                            <h3><?php echo $this->_tpl_vars['locale']['new_add_title']; ?>
</h3>
                            <div class='info'>
                                <form accept-charset="UTF-8" action="/console/popapps/new/" class="group" id="new_application" method="post">
                                <fieldset>
                                <div class='settings_section'>
                                    <div class='row'>
                                            <div class='title'>
                                            <label for="popapps_images"><?php echo $this->_tpl_vars['locale']['new_images_title']; ?>
</label>
                                            </div>
                                            <ul class="screenshots clearfix">
                                            <li><img src="/im/logo?url=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['iphone']['logo']['transformations_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" /></li>
                                            <?php $_from = $this->_tpl_vars['iphone']['mobile']['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['screenshots'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['screenshots']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['screenshot']):
        $this->_foreach['screenshots']['iteration']++;
?>
                                            <li><img src="/im/screenshot?url=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['screenshot']['transformations_url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" /></li>
                                            <?php if (strcasecmp ( $this->_tpl_vars['iphone']['direction'] , @DIRECTION_HORIZON ) == 0 && $this->_foreach['screenshots']['iteration'] == 4): ?><br class="cl"/><?php endif; ?>
                                            <?php if (strcasecmp ( $this->_tpl_vars['iphone']['direction'] , @DIRECTION_VERTICAL ) == 0 && $this->_foreach['screenshots']['iteration'] == 7): ?><br class="cl"/><?php endif; ?>
                                            <?php endforeach; endif; unset($_from); ?>
                                            </ul>
                                    </div>

                                    <div class='row'>
                                        <div class='label'>
                                        <label for="popapps_url"><?php echo $this->_tpl_vars['locale']['setting_url_title']; ?>
</label>
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
                                </div>
                                </fieldset>
                                <div class="btn">
                                    <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
                                    <input type="hidden" name="itunes_url" value="<?php echo $_POST['itunes_url']; ?>
" />
                                    <input type="hidden" name="method" value="create" />
                                    <input type="image" id="previous_submit" alt="Previous" src="<?php echo $this->_tpl_vars['path']; ?>
previous_off.png" onClick="history.back();return false;"/>&nbsp;<input type="image" id="create_submit" alt="Create" src="<?php echo $this->_tpl_vars['path']; ?>
create_off.png" />
                                    <div id="loader"></div>
                                    <div id="loader-text"></div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
        <?php endif; ?>
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