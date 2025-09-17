<?php
/* Smarty version 4.1.0, created on 2023-11-14 18:18:28
  from 'C:\xampp\htdocs\Projekt\app\views\Rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6553abe47d5b36_30230721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c310b7285cee98daaf9145f5eb14cd15c98c5938' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\Rejestracja.tpl',
      1 => 1699982300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6553abe47d5b36_30230721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18383205596553abe47cb342_75236653', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_18383205596553abe47cb342_75236653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_18383205596553abe47cb342_75236653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracjaSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend style="color:white">Rejestracja</legend>
		<div>
            <input id="id" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
        </div>
		<div class="pure-control-group">
            <label for="login" style="color:white">Login: </label>
            <input id="login" type="text" placeholder="Wpisz login" name="login" style="width: 500px;" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
        </div>
		<div class="pure-control-group">
            <label for="haslo" style="color:white">Hasło: </label>
            <input id="haslo" type="password" placeholder="Wpisz hasło" name="haslo" style="width: 500px;" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->haslo;?>
">
        </div>
		<div class="pure-control-group">
            <label for="haslo2" style="color:white">Powtórz hasło: </label>
            <input id="haslo2" type="password" placeholder="Wpisz ponownie hasło" name="haslo2" style="width: 500px;" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->haslo2;?>
">
        </div>
		<div class="pure-control-group">
            <label for="plec" style="color:white">Płeć: </label>
            <input id="plec" type="text" placeholder="Wpisz płeć" name="plec" style="width: 500px;" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->plec;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zarejestruj" style="background-color: #171644; width: 150px;"/>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'top'} */
}
