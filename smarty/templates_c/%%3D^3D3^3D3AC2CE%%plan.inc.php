<?php /* Smarty version 2.6.18, created on 2012-12-21 18:05:50
         compiled from include/common/plan.inc */ ?>
<div class="chooseArea mb60 cf">
    
    <!-- free str -->
    <div class="boxTemp box01">
        <div class="title bgFree"><?php echo @NAME_LICENCE_FREE; ?>
</div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/plan/free.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="btn">
            <span><a href="<?php if ($this->_tpl_vars['is_auth']): ?>/console/<?php else: ?>/auth/facebook<?php endif; ?>"><img src="<?php echo $this->_tpl_vars['path']; ?>
btn_choose_off.png" alt="Choose Plan" /></a></span>

        </div>
    </div>
    <!-- free end -->
    <!-- basic str -->
    <div class="boxTemp box02">
        <div class="title bgBlue"><?php echo @NAME_LICENCE_BASIC; ?>
</div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/plan/basic.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="btn">
            <span><a href="/paypal/<?php if ($this->_tpl_vars['debug']): ?>sandbox/<?php endif; ?>basic"><img src="<?php echo $this->_tpl_vars['path']; ?>
btn_choose_off.png" alt="Choose Plan"></a></span>
        </div>
    </div>
    <!-- basic end -->
    <!-- advance str -->
    <div class="boxTemp box03">
        <div class="title bgBlue"><?php echo @NAME_LICENCE_ADVANCE; ?>
</div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/plan/advance.inc", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="btn">
            <span><a href="/paypal/<?php if ($this->_tpl_vars['debug']): ?>sandbox/<?php endif; ?>advance"><img src="<?php echo $this->_tpl_vars['path']; ?>
btn_choose_off.png" alt="Choose Plan" /></a></span>
        </div>
    </div>

    <!-- advance end -->
    <div class="iconPlus"><img src="<?php echo $this->_tpl_vars['path']; ?>
icon_choose_01.png" alt="" /></div>
    <!-- plus str -->
    <div class="boxTemp width100 cf">
        <div class="title bgLightBlue"><?php echo @NAME_LICENCE_PLUS; ?>
</div>
        <div class="left">
            <div class="titlePlus"><?php echo $this->_tpl_vars['locale']['plus_title']; ?>
<span><?php echo $this->_tpl_vars['locale']['plus_cost']; ?>
</span><em>/ <?php echo $this->_tpl_vars['locale']['plus_per']; ?>
</em></div>
            <ul class="check">
                <li><?php echo $this->_tpl_vars['locale']['plus_bestfor_1']; ?>
</li>
                <li><?php echo $this->_tpl_vars['locale']['plus_bestfor_2']; ?>
</li>
            </ul>
            <div class="btn">
                <span><img src="<?php echo $this->_tpl_vars['path']; ?>
btn_choose_gray.png" alt="Choose Plan" /></span>
            </div>
        </div>
        <div class="right"><img src="<?php echo $this->_tpl_vars['path']; ?>
comingsoon.png" alt="" /></div>
    </div>
    <!-- plus end -->
</div>