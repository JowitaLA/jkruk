<?php
/* Smarty version 4.1.0, created on 2025-03-25 16:17:37
  from 'C:\xampp\htdocs\PlayHunt\app\views\templates\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_67e2c911be58c6_54030822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c309a3b08c716b5bf7fcf01ff83144ce003deb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PlayHunt\\app\\views\\templates\\options.tpl',
      1 => 1742912823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e2c911be58c6_54030822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<link rel="icon" href="img/logo.png" type="image/png">

	<meta charset="utf-8" />
	<title>Opcje</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styleoption.css">
</head>

<body style="margin: 20px;">


	<div class="pure-menu pure-menu-horizontal bottom-margin">
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainShow" class="pure-menu-heading pure-menu-link">Strona główna</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
options" class="pure-menu-heading pure-menu-link">Opcje</a>
	</div>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163442937967e2c911ab87e5_54593908', 'top');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43468465367e2c911ab9309_03025942', 'messages');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18207192467e2c911be4e36_58505626', 'bottom');
?>


</body>

</html><?php }
/* {block 'top'} */
class Block_163442937967e2c911ab87e5_54593908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_163442937967e2c911ab87e5_54593908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_43468465367e2c911ab9309_03025942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_43468465367e2c911ab9309_03025942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
			<div class="messages error bottom-margin">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
			<div class="messages info bottom-margin">
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		<?php }?>

	<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_18207192467e2c911be4e36_58505626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_18207192467e2c911be4e36_58505626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
