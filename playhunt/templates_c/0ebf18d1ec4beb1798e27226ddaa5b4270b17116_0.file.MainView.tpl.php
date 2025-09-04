<?php
/* Smarty version 4.1.0, created on 2025-08-26 13:40:03
  from 'C:\xampp\htdocs\jkruk\playhunt\app\views\MainView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_68adb933b3c344_24474217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ebf18d1ec4beb1798e27226ddaa5b4270b17116' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jkruk\\playhunt\\app\\views\\MainView.tpl',
      1 => 1742918688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68adb933b3c344_24474217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134484464668adb933b04072_07498670', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47188228368adb933b08083_58292531', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_134484464668adb933b04072_07498670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_134484464668adb933b04072_07498670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_47188228368adb933b08083_58292531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_47188228368adb933b08083_58292531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<center>
		<h1>AKTUALNE ZAKŁADY</h2>

			<div class="pure-menu pure-menu-horizontal bottom-margin">

			</div>

			<center>
				<tr>
					<center>
				</tr>
				<table id="tab_zaklady" class="pure-table pure-table-horizontal">
								</center>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zaklady']->value, 'z');
$_smarty_tpl->tpl_vars['z']->iteration = 0;
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
$_smarty_tpl->tpl_vars['z']->iteration++;
$__foreach_z_0_saved = $_smarty_tpl->tpl_vars['z'];
?>
					<?php if (!(1 & $_smarty_tpl->tpl_vars['z']->iteration / 1)) {?><td><span style="color: #8B0000"> VS </span></td><td><center><?php echo $_smarty_tpl->tpl_vars['z']->value["name"];?>
</td><?php if ($_smarty_tpl->tpl_vars['z']->value["second_group_votes"] == 0) {?><td>0%</td><?php } else { ?><td><center><?php echo round($_smarty_tpl->tpl_vars['z']->value["second_group_votes"]/($_smarty_tpl->tpl_vars['z']->value["second_group_votes"]+$_smarty_tpl->tpl_vars['z']->value["first_group_votes"])*100,0);?>
%</td><?php }
if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chooseTwo&id=<?php echo $_smarty_tpl->tpl_vars['z']->value['id'];?>
"style="background-color: #2F4F4F">Zagłosuj</a></td><?php }?></tr><?php } else { ?><tr><?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chooseOne&id=<?php echo $_smarty_tpl->tpl_vars['z']->value['id'];?>
" style="background-color: #2F4F4F">Zagłosuj</a></td><?php }
if ($_smarty_tpl->tpl_vars['z']->value["first_group_votes"] == 0) {?><td>0%</td><?php } else { ?><td><center><?php echo round($_smarty_tpl->tpl_vars['z']->value["first_group_votes"]/($_smarty_tpl->tpl_vars['z']->value["first_group_votes"]+$_smarty_tpl->tpl_vars['z']->value["second_group_votes"])*100,0);?>
%</td><?php }?><td><center><?php echo $_smarty_tpl->tpl_vars['z']->value["name"];?>
</td><?php }?>
					<?php
$_smarty_tpl->tpl_vars['z'] = $__foreach_z_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<hr>
			</tbody>
			</table>
			<hr>

<?php
}
}
/* {/block 'content'} */
}
