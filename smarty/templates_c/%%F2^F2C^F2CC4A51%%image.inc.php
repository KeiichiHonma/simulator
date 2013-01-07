<?php /* Smarty version 2.6.18, created on 2012-12-12 09:29:00
         compiled from include/console/image.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'include/console/image.inc', 1, false),)), $this); ?>
<div class="boxTemp box-images images<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['direction'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
">
    <h3><?php echo $this->_tpl_vars['locale']['view_images_title']; ?>
</h3>
    <?php if (! $this->_tpl_vars['is_free']): ?>
        <p class="center"><?php if ($this->_tpl_vars['count_screenshots'] == 0): ?><?php echo $this->_tpl_vars['locale']['view_images_text_1']; ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']['view_images_text_2']; ?>
<?php endif; ?></p>
    <?php else: ?>
        <p class="center"><?php echo $this->_tpl_vars['locale']['upgrade_upload_text']; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/console/upgrade_simple.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
    <?php endif; ?>
    
    <div class="image-section section<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['direction'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 clearfix">
        <ul id="files" class="<?php echo $this->_tpl_vars['simulator']['0']['simulator_id']; ?>
">
        <?php if ($this->_tpl_vars['iphone']['console']['screenshots']): ?>
            <?php $_from = $this->_tpl_vars['iphone']['console']['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['screenshots'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['screenshots']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['screenshot']):
        $this->_foreach['screenshots']['iteration']++;
?>
            <li id="files_<?php echo $this->_tpl_vars['screenshot']['public_id']; ?>
"><?php if (! $this->_tpl_vars['is_free']): ?><a href="#" id="<?php echo $this->_tpl_vars['screenshot']['public_id']; ?>
" class="delete"><?php echo $this->_tpl_vars['locale']['delete_link']; ?>
</a><?php else: ?>Delete<?php endif; ?><br /><img src="<?php echo $this->_tpl_vars['screenshot']['transformations_url']; ?>
" /></li>
            <?php if (strcasecmp ( $this->_tpl_vars['iphone']['direction'] , @DIRECTION_HORIZON ) == 0 && $this->_foreach['screenshots']['iteration'] == 4): ?><br class="cl"/><?php endif; ?>
            <?php if (strcasecmp ( $this->_tpl_vars['iphone']['direction'] , @DIRECTION_VERTICAL ) == 0 && $this->_foreach['screenshots']['iteration'] == 7): ?><br class="cl"/><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </ul>
                <div id="parent_upload" class="clearfix">
            <div id="upload" class="<?php echo $this->_tpl_vars['simulator']['0']['simulator_id']; ?>
"><span id="upload_btn"><?php if (! $this->_tpl_vars['is_free']): ?><?php echo $this->_tpl_vars['locale']['upload_link']; ?>
<?php else: ?><?php endif; ?><span></div>
        </div>
                    </div>
</div>