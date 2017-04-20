<?php
/* Smarty version 3.1.31, created on 2017-04-20 08:15:12
  from "/home/vagrant/Code/codeIgniter/application/views/templates/master_layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58f86e10a34be3_50668254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e950b0ddb5b544e1bcdf4b83504edc2b8222492b' => 
    array (
      0 => '/home/vagrant/Code/codeIgniter/application/views/templates/master_layout.tpl',
      1 => 1492676109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f86e10a34be3_50668254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<?php
';?>defined('BASEPATH') OR exit('No direct script access allowed');
<?php echo '?>';?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102481544758f86e109fed43_07289966', 'title');
?>
</title>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206257076558f86e10a01625_49694068', 'head');
?>

</head>
<body>

<!-- HEADER -->
<h1>TODO APP</h1>
<h3><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45988425858f86e10a04d38_77868849', 'subtitle');
?>
</h3>

<!-- CONTENT -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169337394758f86e10a12807_82226668', 'content');
?>





<!-- FOOTER  -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153006058658f86e10a33035_88111765', 'footer');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_102481544758f86e109fed43_07289966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_102481544758f86e109fed43_07289966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
TODO LIST - CI3<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_206257076558f86e10a01625_49694068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_206257076558f86e10a01625_49694068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- CSS -->
    <!-- JS -->
  <?php
}
}
/* {/block 'head'} */
/* {block 'subtitle'} */
class Block_45988425858f86e10a04d38_77868849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_45988425858f86e10a04d38_77868849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
List of Tasks (<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
)<?php
}
}
/* {/block 'subtitle'} */
/* {block 'content'} */
class Block_169337394758f86e10a12807_82226668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_169337394758f86e10a12807_82226668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>

          <a href="<?php echo site_url('task/edit/');
echo $_smarty_tpl->tpl_vars['task']->value->id;?>
">Edit</a>
          <a href="<?php echo site_url('task/delete/');
echo $_smarty_tpl->tpl_vars['task']->value->id;?>
">Delete</a>
      </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </ul>

  <?php echo anchor('task/create','New Task','title="Create New Task"');?>


<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_153006058658f86e10a33035_88111765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_153006058658f86e10a33035_88111765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>This is the footer</p><?php
}
}
/* {/block 'footer'} */
}
