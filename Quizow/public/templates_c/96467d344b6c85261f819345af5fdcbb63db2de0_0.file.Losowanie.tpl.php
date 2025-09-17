<?php
/* Smarty version 4.1.0, created on 2023-11-08 13:57:54
  from 'C:\xampp\htdocs\Projekt\app\views\Losowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_654b85d235bfb8_71342657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96467d344b6c85261f819345af5fdcbb63db2de0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\Losowanie.tpl',
      1 => 1699448264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_654b85d235bfb8_71342657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_744706362654b85d2354c48_37489936', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_852223202654b85d2356744_32251349', 'bottom');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_744706362654b85d2354c48_37489936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_744706362654b85d2354c48_37489936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<center>
<div>
	<p>
        TEST
    </p>
</div>
	
</center>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_852223202654b85d2356744_32251349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_852223202654b85d2356744_32251349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'bottom'} */
}
