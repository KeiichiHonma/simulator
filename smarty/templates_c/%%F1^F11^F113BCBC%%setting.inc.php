<?php /* Smarty version 2.6.18, created on 2012-12-12 09:29:00
         compiled from include/console/setting.inc */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'include/console/setting.inc', 1, false),array('modifier', 'escape', 'include/console/setting.inc', 31, false),)), $this); ?>
<div class="boxTemp box-setting setting<?php echo ((is_array($_tmp=@$this->_tpl_vars['iphone']['direction'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
">
    <h3><?php echo $this->_tpl_vars['locale']['view_setting_title']; ?>
</h3>
    <div class='info'>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['setting_direction_title']; ?>
</div>
            <div class='value'><?php if (strcasecmp ( $this->_tpl_vars['simulator']['0']['col_direction'] , 1 ) == 0): ?><?php echo $this->_tpl_vars['locale']['direction_horizon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']['direction_vertical']; ?>
<?php endif; ?></div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['setting_url_title']; ?>
</div>
            <div class='value'><?php echo $this->_tpl_vars['simulator']['0']['col_url']; ?>
</div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['setting_link_title']; ?>
</div>
            <div class='value'><?php echo $this->_tpl_vars['simulator']['0']['col_link']; ?>
</div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['setting_scroll_title']; ?>
</div>
            <div class='value'><?php if (strcasecmp ( $this->_tpl_vars['simulator']['0']['col_scroll'] , @SCROLL_END ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_bottom']; ?>
<?php elseif (strcasecmp ( $this->_tpl_vars['simulator']['0']['col_scroll'] , @SCROLL_BOTTOM ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_two_third']; ?>
<?php elseif (strcasecmp ( $this->_tpl_vars['simulator']['0']['col_scroll'] , @SCROLL_HALF ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_middle']; ?>
<?php elseif (strcasecmp ( $this->_tpl_vars['simulator']['0']['col_scroll'] , @SCROLL_TOP ) == 0): ?><?php echo $this->_tpl_vars['locale']['scroll_one_third']; ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']['scroll_top']; ?>
<?php endif; ?></div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['setting_position_title']; ?>
</div>
            <div class='value'><?php if (strcasecmp ( $this->_tpl_vars['simulator']['0']['col_position'] , @POSITION_RIGHT ) == 0): ?><?php echo $this->_tpl_vars['locale']['position_right']; ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']['position_left']; ?>
<?php endif; ?></div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['setting_display_title']; ?>
</div>
            <div class='value'><?php if (strcasecmp ( $this->_tpl_vars['simulator']['0']['simulator_validate'] , 1 ) == 0): ?><?php echo $this->_tpl_vars['locale']['display_off']; ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']['display_on']; ?>
<?php endif; ?></div>
        </div>
        <div class='item clearfix'>
            <div class='label'><?php echo $this->_tpl_vars['locale']['setting_code_title']; ?>
</div>
            <div class='value'>
            <textarea class="embed_code" rows="5"><script type='text/javascript' src='<?php echo ((is_array($_tmp=$this->_tpl_vars['popapps_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
'></script></textarea>
            <br /><?php echo $this->_tpl_vars['locale']['setting_code_text']; ?>

            </div>
        </div>
        <div class="console-action"><a href="/console/popapps/settings/sid/<?php echo $this->_tpl_vars['simulator']['0']['simulator_id']; ?>
"><?php echo $this->_tpl_vars['locale']['manage_link']; ?>
</a></div>
    </div>
</div>