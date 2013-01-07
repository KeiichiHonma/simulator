<?php /* Smarty version 2.6.18, created on 2012-12-10 14:32:54
         compiled from include/common/iphone5_home.inc */ ?>
<div id="iphone">
    <div id="app">
        <div id="flickable">
            <ul id="flickable_ul">
                <?php $_from = $this->_tpl_vars['iphone']['user_images_chunk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['user_images_chunk'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user_images_chunk']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['user_images']):
        $this->_foreach['user_images_chunk']['iteration']++;
?>
                <li>
                    <div class="block">
                    <?php $_from = $this->_tpl_vars['user_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['user_images'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user_images']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sid'] => $this->_tpl_vars['user_images']):
        $this->_foreach['user_images']['iteration']++;
?>
                    <div class="logo"><?php if ($this->_tpl_vars['is_console']): ?><img src="<?php echo $this->_tpl_vars['user_images']['secure_url']; ?>
" width="40" height="40" /><?php else: ?><a href="/phone?sid=<?php echo $this->_tpl_vars['sid']; ?>
&home_p=<?php echo $this->_tpl_vars['iphone']['position']; ?>
"><img src="<?php echo $this->_tpl_vars['user_images']['secure_url']; ?>
" width="40" height="40" /></a><?php endif; ?></div>
                    <?php endforeach; endif; unset($_from); ?>
                    </div>
                </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
        <?php if ($this->_tpl_vars['iphone']['user_display_count'] > 2): ?>
        <div style="clear:both;"></div>
        <ul id="select_box">
            <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['start'] = (int)1;
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['iphone']['user_display_count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
"><a href="javascript:void(0);" id="select<?php echo $this->_sections['cnt']['index']; ?>
"><?php echo $this->_sections['cnt']['index']; ?>
</a></li>
            <?php endfor; endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>