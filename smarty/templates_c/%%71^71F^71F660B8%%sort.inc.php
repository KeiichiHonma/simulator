<?php /* Smarty version 2.6.18, created on 2012-12-14 16:53:50
         compiled from include/console/sort.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'include/console/sort.inc', 1, false),array('modifier', 'nl2br', 'include/console/sort.inc', 4, false),)), $this); ?>
<div class="boxTemp box-sort sort<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['direction'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
">
    <h3><?php echo $this->_tpl_vars['locale']['sort_title']; ?>
</h3>
    <?php if (! $this->_tpl_vars['is_free']): ?>
        <p><?php echo ((is_array($_tmp=$this->_tpl_vars['locale']['sort_text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
    <?php else: ?>
        <p><?php echo $this->_tpl_vars['locale']['upgrade_sort_text']; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/console/upgrade_simple.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
        
    <?php endif; ?>
    <form action="/console/popapps/image/sort/sid/<?php echo $this->_tpl_vars['simulator']['0']['simulator_id']; ?>
" id="image_sort_form" method="post">
        <ul id="sort" class="sortable grid">
        <?php if ($this->_tpl_vars['iphone']['console']['screenshots']): ?>
            <?php $_from = $this->_tpl_vars['iphone']['console']['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['screenshots'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['screenshots']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['screenshot']):
        $this->_foreach['screenshots']['iteration']++;
?>
            <li id="sort_<?php echo $this->_tpl_vars['screenshot']['public_id']; ?>
" class="<?php echo $this->_tpl_vars['key']; ?>
"><img src="<?php echo $this->_tpl_vars['screenshot']['thumbnail_url']; ?>
" /></li>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </ul>
        <?php if (! $this->_tpl_vars['is_free']): ?>
        <div class='sort_btn'>
        <input type="hidden" id="image_sort" name="image_sort" />
        <input type="hidden" name="csrf_ticket" value="<?php echo $this->_tpl_vars['csrf_ticket']; ?>
" />
        <input type="image" id="image_sort_submit" alt="Save" src="<?php echo $this->_tpl_vars['path']; ?>
save_off.png" />
        </div>
        <?php endif; ?>
    </form>
</div>