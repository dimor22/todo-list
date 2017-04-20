<?php
/* Smarty version 3.1.31, created on 2017-04-20 08:07:20
  from "/home/vagrant/Code/codeIgniter/application/views/templates/create_task.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58f86c3887d2f8_42140482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b1c145a54980b70debb9cd49b76724c7655eb6' => 
    array (
      0 => '/home/vagrant/Code/codeIgniter/application/views/templates/create_task.tpl',
      1 => 1492675597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f86c3887d2f8_42140482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64927464858f86c3886e189_37835681', 'subtitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134745333258f86c388722a6_04184791', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'master_layout.tpl');
}
/* {block 'subtitle'} */
class Block_64927464858f86c3886e189_37835681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_64927464858f86c3886e189_37835681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Create New Task<?php
}
}
/* {/block 'subtitle'} */
/* {block 'content'} */
class Block_134745333258f86c388722a6_04184791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134745333258f86c388722a6_04184791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo form_open('task/put');?>

		<input type="text" name="task-name" value="">
		<input type="submit" value="Create">
	</form>
<?php
}
}
/* {/block 'content'} */
}
