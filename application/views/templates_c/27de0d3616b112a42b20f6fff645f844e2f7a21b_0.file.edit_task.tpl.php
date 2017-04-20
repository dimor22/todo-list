<?php
/* Smarty version 3.1.31, created on 2017-04-20 08:32:05
  from "/home/vagrant/Code/codeIgniter/application/views/templates/edit_task.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58f87205957449_85274203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27de0d3616b112a42b20f6fff645f844e2f7a21b' => 
    array (
      0 => '/home/vagrant/Code/codeIgniter/application/views/templates/edit_task.tpl',
      1 => 1492677123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f87205957449_85274203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6352798258f872059478e4_80660606', 'subtitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77899948458f8720594a373_42928628', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'master_layout.tpl');
}
/* {block 'subtitle'} */
class Block_6352798258f872059478e4_80660606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_6352798258f872059478e4_80660606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Update Task<?php
}
}
/* {/block 'subtitle'} */
/* {block 'content'} */
class Block_77899948458f8720594a373_42928628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_77899948458f8720594a373_42928628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo form_open('task/update/');?>

	<input type="text" name="task-name" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
">
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
	<input type="submit" value="Save">
</form>
<?php
}
}
/* {/block 'content'} */
}
