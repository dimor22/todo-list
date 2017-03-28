<?php
/* Smarty version 3.1.31, created on 2017-03-26 08:24:22
  from "/home/vagrant/Code/codeIgniter/application/views/templates/home_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d77ab6676aa6_18238390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee68bf6f27ae6567054b485fa91d1ebcb225856a' => 
    array (
      0 => '/home/vagrant/Code/codeIgniter/application/views/templates/home_page.tpl',
      1 => 1490516064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d77ab6676aa6_18238390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
 <?php echo anchor('task/edit','Edit','title="Edit This Task"');?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul>

<?php echo anchor('task/create','New Task','title="Create New Task"');?>

<?php }
}
