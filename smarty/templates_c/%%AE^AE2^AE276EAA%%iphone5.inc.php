<?php /* Smarty version 2.6.18, created on 2012-12-22 11:12:32
         compiled from include/common/iphone5.inc */ ?>
<div id="iphone">
    <div id="app">
        <div id="top-box">
            <div class="arrow_box">
                <table>
                <tr><td class="logo"><img src="<?php echo $this->_tpl_vars['iphone']['logo']['transformations_url']; ?>
" width="75" height="75" /></td>
                <td class="appstore" align="center"><a href="<?php echo $this->_tpl_vars['iphone']['link']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['ssl_path']; ?>
appstore.gif" /></a>
                <?php if (strcasecmp ( $this->_tpl_vars['iphone']['licence'] , @LICENCE_FREE ) == 0): ?><br /><div class="powered"><a href="<?php if ($this->_tpl_vars['debug']): ?>http://www.simulator.813.co.jp/<?php else: ?>http://www.popapp-simulator.com/<?php endif; ?>" target="_blank">powered by popApps</a></div><?php endif; ?>
                </td>
                </tr>
                </table>
            </div>
        </div>
        <div id="flickable">
            <ul id="flickable_ul">
            <?php if ($this->_tpl_vars['iphone']['mobile']['screenshots']): ?>
            <?php $_from = $this->_tpl_vars['iphone']['mobile']['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['screenshots'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['screenshots']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['screenshot']):
        $this->_foreach['screenshots']['iteration']++;
?>
            <li id="flick_<?php echo $this->_tpl_vars['screenshot']['public_id']; ?>
"><div class="block"><img src="<?php echo $this->_tpl_vars['screenshot']['transformations_url']; ?>
" /></div></li>
            <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            </ul>
        </div>
        
        <div style="clear:both;"></div>
        <ul id="select_box"> 
            <?php if ($this->_tpl_vars['iphone']['mobile']['count_screenshots']): ?>
                <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['start'] = (int)1;
$this->_sections['cnt']['loop'] = is_array($_loop=$this->_tpl_vars['iphone']['mobile']['count_screenshots_on']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php endif; ?>
        </ul>
    </div>
</div>