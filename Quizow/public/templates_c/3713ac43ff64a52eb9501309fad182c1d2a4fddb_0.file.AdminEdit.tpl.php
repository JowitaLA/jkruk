<?php
/* Smarty version 4.1.0, created on 2022-06-13 11:50:26
  from 'C:\xampp\htdocs\Projekt\app\views\AdminEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a70862c21689_74576683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3713ac43ff64a52eb9501309fad182c1d2a4fddb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\AdminEdit.tpl',
      1 => 1655113783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a70862c21689_74576683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174783900562a70862c1dbb7_02068575', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_174783900562a70862c1dbb7_02068575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_174783900562a70862c1dbb7_02068575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
losowanieSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div>
            <input id="id" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
        </div>
		<div class="pure-control-group">
            <label for="login">login</label>
            <input id="login" type="text" placeholder="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
        </div>
		<div class="pure-control-group">
            <label for="haslo">nazwisko</label>
            <input id="haslo" type="text" placeholder="haslo" name="haslo" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->haslo;?>
">
        </div>
		<div class="pure-control-group">
            <label for="plec">data ur.</label>
            <input id="plec" type="text" placeholder="plec" name="plec" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->plec;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
		</div>
	</fieldset>
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
