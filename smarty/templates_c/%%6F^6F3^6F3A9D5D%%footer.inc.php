<?php /* Smarty version 2.6.18, created on 2012-12-16 19:44:07
         compiled from include/common/footer.inc */ ?>
<div id="footer"<?php if (! $this->_tpl_vars['index'] && ! $this->_tpl_vars['demo']): ?> class="f-common"<?php endif; ?>>
    <div class="inner01 cf">
        <ul>
            <li><a href="/"><?php echo $this->_tpl_vars['locale']['g_home']; ?>
</a></li>
            <li><a href="/about"><?php echo $this->_tpl_vars['locale']['f_about']; ?>
</a></li>
            <li><a href="/privacy"><?php echo $this->_tpl_vars['locale']['f_privacy']; ?>
</a></li>
        </ul>
        <p>&copy; <?php echo $this->_tpl_vars['locale']['copy']; ?>
</p>
        <div class="fb"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.popapp-simulator.com%2F&amp;locale=en_US&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=dark&amp;action=like&amp;height=35&amp;appId=450158261698811" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe></div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/common/analytics.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>