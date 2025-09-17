<?php
/* Smarty version 4.1.0, created on 2022-06-02 16:59:29
  from 'C:\xampp\htdocs\Projekt\app\views\PersonList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6298d051012e93_99137159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5855f04cdc8f6f7ea830c94a358a9b67dea9ecd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\PersonList.tpl',
      1 => 1654181964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6298d051012e93_99137159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16549713146298d051002f41_13168335', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10122502286298d0510062f3_51859356', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_16549713146298d051002f41_13168335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_16549713146298d051002f41_13168335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_10122502286298d0510062f3_51859356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10122502286298d0510062f3_51859356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>ID</th>
		<th>POSTAĆ</th>
		<th>UMIEJĘTNOŚĆ 1</th>
		<th>UMIEJĘTNOŚĆ 2</th>
		<th>UMIEJĘTNOŚĆ 3</th>
		<th>DAR</th>
		<th>PRZEDMIOT</th>
		<th>DODATEK 1</th>
		<th>DODATEK 2</th>
        <th>UŻYTKOWNIK</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['losowanie']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['l']->value["ID_losowanie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["postac_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["umiejetnosc1_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["umiejetnosc2_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["umiejetnosc3_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["dar_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["przedmiot_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["dodatek1_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["dodatek2_ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['l']->value["user_ID"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
}
