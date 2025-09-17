<?php
/* Smarty version 4.1.0, created on 2023-11-14 01:28:32
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552bf3012c0e8_03130531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '059fcb74da370ce22ba4c5125671fc85387725a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Result.tpl',
      1 => 1699921710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552bf3012c0e8_03130531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20217889806552bf30124b14_54039062', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6670741936552bf30128262_10291329', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'bottom'} */
class Block_20217889806552bf30124b14_54039062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_20217889806552bf30124b14_54039062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_6670741936552bf30128262_10291329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_6670741936552bf30128262_10291329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br><br>
<a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
historyList" style="background-color: #171644;">Wróć do Quizów</a>

<?php
}
}
/* {/block 'main'} */
}
