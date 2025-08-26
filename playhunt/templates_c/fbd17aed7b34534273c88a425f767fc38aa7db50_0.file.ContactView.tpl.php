<?php
/* Smarty version 4.1.0, created on 2023-11-08 14:41:36
  from 'C:\xampp\htdocs\PlayHunt\app\views\ContactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_654b9010eaa690_95517084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbd17aed7b34534273c88a425f767fc38aa7db50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PlayHunt\\app\\views\\ContactView.tpl',
      1 => 1699450892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654b9010eaa690_95517084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1274695874654b9010e97280_07574332', 'footer');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1396702090654b9010ea9749_97253124', 'content');
?>








 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page.tpl");
}
/* {block 'footer'} */
class Block_1274695874654b9010e97280_07574332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1274695874654b9010e97280_07574332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1396702090654b9010ea9749_97253124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1396702090654b9010ea9749_97253124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<center><h1>TEST</h2>

<div class="pure-menu pure-menu-horizontal bottom-margin">

</div>

<center>
<tr>
		<center>
	</tr>
</center>
<tbody>

Witaj w panelu zarządzania stroną PlayHunt

		<h1>Kontakt</h2>
		<h2>Telefon: 145 465 789</h2>
		<h2>Mail: Quizow@gmail.com</h2>

</tbody>
<?php
}
}
/* {/block 'content'} */
}
