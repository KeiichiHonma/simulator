<?php /* Smarty version 2.6.18, created on 2012-12-20 17:42:58
         compiled from console/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'console/index.tpl', 112, false),array('modifier', 'escape', 'console/index.tpl', 161, false),)), $this); ?>
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
<link href="/css/sortable_home.css" rel="stylesheet" type="text/css" media="all" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/iphone_header.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script>
$(function() {
    var element = $(\'#flickable\').flickable({
      section: \'li\'
    });

    $(\'#select_box-home li a\').click(function() {
        var index = $(this).text() - 1;
        element.flickable(\'select\', index);
        $(\'#select_box-home li a\').css("background-color", "#FFFFFF");
        $(\'#select_box-home li a\').hover(function(){
            $(this).css(\'background-color\',\'#1b508c\');
        }, function(){
            $(this).css(\'background-color\',\'#FFFFFF\');
        });
        $(this).css(\'background-color\',\'#1b508c\');
        $(this).unbind("mouseenter").unbind("mouseleave");
        
        return false;
    });
});
$(function() {
    $(\'#embed_code\').focus(function(){
    $(this).select();
    });
});
</script>
'; ?>

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
                    <div class="chooseApp">
                        <div class="boxTemp">
                            <div class="title bgFree"><?php echo $this->_tpl_vars['locale']['home_applist_title']; ?>
</div>

                            <?php if ($this->_tpl_vars['is_app_add']): ?>
                            <div class="btn">
                                <span><a href="/console/popapps/new/"><img src="<?php echo $this->_tpl_vars['path']; ?>
create_off.png" alt="Create"></a></span>
                            </div>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['simulators']): ?>
                            <table>
                            <?php $_from = $this->_tpl_vars['simulators']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['simulators'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['simulators']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['simulator']):
        $this->_foreach['simulators']['iteration']++;
?>
                            <?php $this->assign('simulator_id', $this->_tpl_vars['simulator']['simulator_id']); ?>
                            <tr>
                                                        <td><img src="<?php echo $this->_tpl_vars['logos'][$this->_tpl_vars['simulator_id']]['transformations_url_little']; ?>
" /></td>
                            <td><a href="/console/popapps/view/sid/<?php echo $this->_tpl_vars['simulator']['simulator_id']; ?>
"><?php echo $this->_tpl_vars['simulator']['col_name']; ?>
</a></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                            </table>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="boxArea">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/console/licence.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>

                <div class='fl'>
                    <div class="boxArea">
                        <div class="boxTemp box-phone-vertical clearfix">
                            <h3><?php echo $this->_tpl_vars['locale']['home_screen_title']; ?>
</h3>
                            
                            <table align="center" class="home-display">
                                <tr>
                                    <td>
                                        <div class="phone-home">
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/iphone5_home.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        </div>
                                        <div class="console-action"><a href="/console/home_preview" target="_blank">Preview...</a></div>
                                    </td>
                                    <?php if ($this->_tpl_vars['user_display_count'] > 2): ?>
                                    <td>
                                        <ul id="select_box-home">
                                            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['start'] = (int)1;
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['user_display_count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
if ($this->_sections['cnt']['start'] < 0)
    $this->_sections['cnt']['start'] = max($this->_sections['cnt']['step'] > 0 ? 0 : -1, $this->_sections['cnt']['loop'] + $this->_sections['cnt']['start']);
else
    $this->_sections['cnt']['start'] = min($this->_sections['cnt']['start'], $this->_sections['cnt']['step'] > 0 ? $this->_sections['cnt']['loop'] : $this->_sections['cnt']['loop']-1);
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = min(ceil(($this->_sections['cnt']['step'] > 0 ? $this->_sections['cnt']['loop'] - $this->_sections['cnt']['start'] : $this->_sections['cnt']['start']+1)/abs($this->_sections['cnt']['step'])), $this->_sections['cnt']['max']);
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
                                                <li id="select_box_<?php echo $this->_sections['cnt']['index']; ?>
"><a href="#" id="select<?php echo $this->_sections['cnt']['index']; ?>
"><?php echo $this->_sections['cnt']['index']; ?>
</a></li>
                                            <?php endfor; endif; ?>
                                        </ul>
                                    </td>
                                    <?php endif; ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class='fl'>
                    <div class="boxArea">
        <?php if ($this->_tpl_vars['use_licence'] > 1): ?>
                        <div class="boxTemp box-sort-home">
                            <h3><?php echo $this->_tpl_vars['locale']['sort_title']; ?>
</h3>
                            <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['sort_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                            <table align="center">
                                <tr>
                                    <?php if ($this->_tpl_vars['user_display_count'] > 2): ?>
                                    <td valign="top">
                                        <ul id="display_number">
                                            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['start'] = (int)1;
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['user_display_count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
if ($this->_sections['cnt']['start'] < 0)
    $this->_sections['cnt']['start'] = max($this->_sections['cnt']['step'] > 0 ? 0 : -1, $this->_sections['cnt']['loop'] + $this->_sections['cnt']['start']);
else
    $this->_sections['cnt']['start'] = min($this->_sections['cnt']['start'], $this->_sections['cnt']['step'] > 0 ? $this->_sections['cnt']['loop'] : $this->_sections['cnt']['loop']-1);
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = min(ceil(($this->_sections['cnt']['step'] > 0 ? $this->_sections['cnt']['loop'] - $this->_sections['cnt']['start'] : $this->_sections['cnt']['start']+1)/abs($this->_sections['cnt']['step'])), $this->_sections['cnt']['max']);
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
                                                <li<?php if ($this->_sections['cnt']['index'] == 1): ?> class="n1"<?php endif; ?>><?php echo $this->_sections['cnt']['index']; ?>
</li>
                                            <?php endfor; endif; ?>
                                        </ul>
                                    </td>
                                    <?php endif; ?>
                                    <td>
                                        <form action="/console/sort" id="image_sort_form" method="post">
                                            <ul id="sort" class="sortable grid">
                                        <?php if ($this->_tpl_vars['simulators']): ?>
                                        <?php $_from = $this->_tpl_vars['simulators']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['simulators'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['simulators']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['simulator']):
        $this->_foreach['simulators']['iteration']++;
?>
                                        <?php $this->assign('simulator_id', $this->_tpl_vars['simulator']['simulator_id']); ?>
                                        <li id="sort_<?php echo $this->_tpl_vars['logos'][$this->_tpl_vars['simulator_id']]['public_id']; ?>
" class="<?php echo $this->_tpl_vars['simulator_id']; ?>
"><img src="<?php echo $this->_tpl_vars['logos'][$this->_tpl_vars['simulator_id']]['transformations_url_little']; ?>
" /></li>
                                        <?php endforeach; endif; unset($_from); ?>
                                        <?php endif; ?>
                                            </ul>
                                            <div class='sort_btn'>
                                            <input type="hidden" id="image_sort" name="image_sort" />
                                            <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
                                            <input type="image" id="image_sort_submit" alt="Save" src="<?php echo $this->_tpl_vars['path']; ?>
save_off.png" />
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
        <?php endif; ?>
                        <div class="boxTemp box-setting-home">
                            <h3><?php echo $this->_tpl_vars['locale']['home_setting_title']; ?>
</h3>
                            <div class='info'>
                                <div class='item clearfix'>
                                    <div class='label'><?php echo $this->_tpl_vars['locale']['setting_scroll_title']; ?>
</div>
                                    <div class='value'><?php if (strcasecmp ( $this->_tpl_vars['user']['0']['col_scroll'] , @SCROLL_END ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_bottom']; ?>
<?php elseif (strcasecmp ( $this->_tpl_vars['user']['0']['col_scroll'] , @SCROLL_BOTTOM ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_two_third']; ?>
<?php elseif (strcasecmp ( $this->_tpl_vars['user']['0']['col_scroll'] , @SCROLL_HALF ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_middle']; ?>
<?php elseif (strcasecmp ( $this->_tpl_vars['user']['0']['col_scroll'] , @SCROLL_TOP ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_one_third']; ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']['scroll_top']; ?>
<?php endif; ?></div>
                                </div>
                                <div class='item clearfix'>
                                    <div class='label'><?php echo $this->_tpl_vars['locale']['setting_position_title']; ?>
</div>
                                    <div class='value'>
<?php if (strcasecmp ( $this->_tpl_vars['user']['0']['col_position'] , @POSITION_RIGHT ) == 0): ?><?php echo $this->_tpl_vars['locale']['position_right']; ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']['position_left']; ?>
<?php endif; ?>
                                    </div>
                                </div>
                                <div class='item clearfix'>
                                    <div class='label'><?php echo $this->_tpl_vars['locale']['setting_code_title']; ?>
</div>
                                    <div class='value'>
                                    <textarea id="embed_code" class="embed_code" rows="5"><script type='text/javascript' src='<?php echo ((is_array($_tmp=$this->_tpl_vars['home_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'></script></textarea>
                                    <br /><?php echo $this->_tpl_vars['locale']['setting_code_text']; ?>

                                    </div>
                                </div>
                                <div class="console-action"><a href="/console/settings">Manage Settings...</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php echo '
                <script src="/js/jquery.sortable.js"></script>
                <script>
                    $(function() {
                        $(\'.sortable\').sortable();
                        $("#image_sort_submit").click(function() {
                            $(\'.sortable\').sortable(\'save\');
                        });
                    });
                </script>
            '; ?>

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