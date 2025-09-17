<?php
/* Smarty version 4.1.0, created on 2023-11-14 03:35:25
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Quiz8.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552dced0600f5_00117182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27e787e47fa275db57c2860cf055b655526fda5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Quiz8.tpl',
      1 => 1699929287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552dced0600f5_00117182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2835845846552dced058053_03011081', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15790049206552dced05ba71_42331845', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'bottom'} */
class Block_2835845846552dced058053_03011081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_2835845846552dced058053_03011081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_15790049206552dced05ba71_42331845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_15790049206552dced05ba71_42331845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result8">
    <h3>Co to jest Tadżykistan?</h3>
    <input type="radio" name="question1" value="a" checked> Państwo w Azji Środkowej<br>
    <input type="radio" name="question1" value="b"> Wulkan w Ameryce Południowej<br>
	<input type="radio" name="question1" value="c"> Rzeka w Afryce<br>

	<h3>Które państwo leży na Półwyspie Indochińskim?</h3>
    <input type="radio" name="question2" value="a" checked> Wietnam<br>
    <input type="radio" name="question2" value="b"> Indie<br>
	<input type="radio" name="question2" value="c"> Filipiny<br>

	<h3>Gdzie znajduje się archipelag Vanuatu?</h3>
    <input type="radio" name="question3" value="a" checked> Pacyfik Południowy<br>
    <input type="radio" name="question3" value="b"> Morze Śródziemne<br>
	<input type="radio" name="question3" value="c"> Ocean Indyjski<br>

	<h3>Co to jest Góra Elbrus?</h3>
    <input type="radio" name="question4" value="a" checked> Najwyższy szczyt Kaukazu<br>
    <input type="radio" name="question4" value="b"> Najwyższy szczyt Alp<br>
	<input type="radio" name="question4" value="c"> Wulkan na Nowej Zelandii<br>

	<h3>Które miasto jest najbardziej na południe na świecie?</h3>
    <input type="radio" name="question5" value="a" checked> Ushuaia, Argentyna<br>
    <input type="radio" name="question5" value="b"> Sydney, Australia<br>
	<input type="radio" name="question5" value="c"> Kaapstad, RPA<br>

	<h3>Gdzie znajduje się Morze Sargassowe?</h3>
    <input type="radio" name="question6" value="a" checked> Ocean Atlantycki<br>
    <input type="radio" name="question6" value="b"> Morze Śródziemne<br>
	<input type="radio" name="question6" value="c"> Morze Czerwone<br>

	<h3>Które państwo leży na wyspie Borneo?</h3>
    <input type="radio" name="question7" value="a" checked> Indonezja<br>
    <input type="radio" name="question7" value="b"> Filipiny<br>
	<input type="radio" name="question7" value="c"> Malezja<br>

	<h3>Co to jest Kapsztad?</h3>
    <input type="radio" name="question8" value="a" checked> Miasto w RPA<br>
    <input type="radio" name="question8" value="b"> Wyspa w Grecji<br>
	<input type="radio" name="question8" value="c"> Wyspa na Karaibach<br>

	<h3>W którym kraju znajduje się Pustynia Gobi?</h3>
    <input type="radio" name="question9" value="a" checked> Mongolia<br>
    <input type="radio" name="question9" value="b"> Chiny<br>
	<input type="radio" name="question9" value="c"> Kazachstan<br>

	<h3>Co to jest Zatoka Hudsona?</h3>
    <input type="radio" name="question10" value="a" checked> Zatoka na wschodnim wybrzeżu Kanady<br>
    <input type="radio" name="question10" value="b"> Zatoka na zachodnim wybrzeżu USA<br>
	<input type="radio" name="question10" value="c"> Zatoka na północnym wybrzeżu Rosji<br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php echo '<?php'; ?>
 include '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result8'; <?php echo '?>'; ?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
