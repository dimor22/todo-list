<?php
/* Smarty version 3.1.31, created on 2017-03-28 04:33:41
  from "/home/vagrant/Code/codeIgniter/application/views/templates/task_created_success.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d9e7a58b93b9_67308481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1a77b7dd2a6726bbc5047e3913899bb5571950' => 
    array (
      0 => '/home/vagrant/Code/codeIgniter/application/views/templates/task_created_success.tpl',
      1 => 1490675619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d9e7a58b93b9_67308481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198235967658d9e7a58ab3d6_74095741', 'subtitle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132231197658d9e7a58aefb1_49418062', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'master_layout.tpl');
}
/* {block 'subtitle'} */
class Block_198235967658d9e7a58ab3d6_74095741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_198235967658d9e7a58ab3d6_74095741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Task Created!<?php
}
}
/* {/block 'subtitle'} */
/* {block 'content'} */
class Block_132231197658d9e7a58aefb1_49418062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_132231197658d9e7a58aefb1_49418062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo anchor('task','Back To Tasks');?>

<?php
}
}
/* {/block 'content'} */
}
