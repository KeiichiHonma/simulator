<?php /* Smarty version 2.6.18, created on 2012-12-13 19:01:43
         compiled from debug.tpl */ ?>
<html>
<head>
<title>エラー画面</title>
</head>
<body>

<div>エラーが発生しました。</div>
<table border='1'>
<tr>
<td width="150">
デバッグメッセージ
</td>
<td>
<?php $_from = $this->_tpl_vars['errorlist']['debug']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['debug'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['debug']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['debug']):
        $this->_foreach['debug']['iteration']++;
?>
<?php if ($this->_tpl_vars['debug']['function'] != 'throwDBError' && $this->_tpl_vars['debug']['function'] != 'execute' && $this->_tpl_vars['debug']['function'] != 'getResult'): ?>
class::<?php echo $this->_tpl_vars['debug']['class']; ?>
<br />
function::<?php echo $this->_tpl_vars['debug']['function']; ?>
<br />
file::<?php echo $this->_tpl_vars['debug']['file']; ?>
<br />
line::<?php echo $this->_tpl_vars['debug']['line']; ?>
<br />
<br />-------------------------------------------------------------------------------------<br /><br />
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</td>
</tr>

<tr>
<td>
メッセージ
</td>
<td>
<?php $_from = $this->_tpl_vars['errorlist']['msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['msg'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['msg']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['msg']):
        $this->_foreach['msg']['iteration']++;
?>
<?php echo $this->_tpl_vars['msg']; ?>
<br />
<?php endforeach; endif; unset($_from); ?>
</td>
</tr>

<?php if ($this->_tpl_vars['errorlist']['query']): ?>
<tr>
<td>
クエリ
</td>
<td>
<?php echo $this->_tpl_vars['errorlist']['query']; ?>

</td>
</tr>
<?php endif; ?>

</table>
</body>
</html>