<?php /* Smarty version 2.6.18, created on 2012-12-22 11:07:26
         compiled from include/common/signin.inc */ ?>
<?php if ($this->_tpl_vars['is_auth']): ?><li class="head"><a href="/console/"><?php echo $this->_tpl_vars['locale']['g_dashboard']; ?>
</a></li><li><a href="/logout"><?php echo $this->_tpl_vars['locale']['g_signout']; ?>
</a></li><?php else: ?><li class="fb head"><a href="/auth/facebook"><img src="<?php echo $this->_tpl_vars['path']; ?>
icon_header_01.jpg" alt="facebook" /><?php echo $this->_tpl_vars['locale']['g_signin']; ?>
</a></li><?php endif; ?>