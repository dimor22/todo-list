<?php
/* Smarty version 3.1.31, created on 2017-03-26 08:27:34
  from "/home/vagrant/Code/codeIgniter/application/views/templates/create_task.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d77b7605eb12_24814087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b1c145a54980b70debb9cd49b76724c7655eb6' => 
    array (
      0 => '/home/vagrant/Code/codeIgniter/application/views/templates/create_task.tpl',
      1 => 1490516852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d77b7605eb12_24814087 (Smarty_Internal_Template $_smarty_tpl) {
echo form_open('task/create');?>

	<input type="text" name="name" value="">
	<input type="submit" name="name" value="Create">
</form>
<?php }
}
