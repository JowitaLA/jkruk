<?php
/* Smarty version 4.1.0, created on 2023-11-14 18:21:48
  from 'C:\xampp\htdocs\Projekt\app\views\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6553acacd48825_89533118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c36966dc9122be14381223e4c09ad9b1ee63d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\PersonEdit.tpl',
      1 => 1699982507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6553acacd48825_89533118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17006113156553acacd38735_39856875', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10870614906553acacd392b7_23627291', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_17006113156553acacd38735_39856875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_17006113156553acacd38735_39856875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<center>
<legend style="color:white"><b>PANEL MODERATORA</b></legend>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_10870614906553acacd392b7_23627291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10870614906553acacd392b7_23627291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>ID</th>
		<th>LOGIN</th>
		<th>HASŁO</th>
		<th>PŁEĆ</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['losowanie']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['l']->value["ID_user"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["haslo"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["plec"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</center>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
}
