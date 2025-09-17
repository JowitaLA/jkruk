<?php
/* Smarty version 4.1.0, created on 2023-11-14 03:17:48
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Quiz1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552d8cc1979f7_80886921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ad7e9d7f9fc9974a11d5944e51b37080bc7b14b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Quiz1.tpl',
      1 => 1699928266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552d8cc1979f7_80886921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10191177076552d8cc18e8f2_11282680', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12365508236552d8cc192606_11894230', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'bottom'} */
class Block_10191177076552d8cc18e8f2_11282680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10191177076552d8cc18e8f2_11282680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_12365508236552d8cc192606_11894230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_12365508236552d8cc192606_11894230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result1">
    <h3>Jaki jest wynik mnożenia 245 i 17?</h3>
    <input type="radio" name="question1" value="a" checked> 5025 <br>
    <input type="radio" name="question1" value="b"> 4165 <br>
	<input type="radio" name="question1" value="c"> 8180 <br>

    <h3>Jaki jest pierwiastek kwadratowy z liczby 144?</h3>
    <input type="radio" name="question2" value="a" checked> 12 <br> 
    <input type="radio" name="question2" value="b"> 14 <br>
	<input type="radio" name="question2" value="c"> 16 <br>

    <h3>Jaki jest wynik równania: 2x + 5 = 15?</h3>
    <input type="radio" name="question3" value="a" checked> 4 <br>
    <input type="radio" name="question3" value="b"> 3 <br>
	<input type="radio" name="question3" value="c"> 5 <br>
	
	<h3>Ile wynosi suma kątów wewnętrznych trójkąta?</h3>
    <input type="radio" name="question4" value="a" checked> 180 stopni <br>
    <input type="radio" name="question4" value="b"> 360 stopni <br>
	<input type="radio" name="question4" value="c"> 90 stopni <br>
	
	<h3>Jaka jest wartość sinusa kąta 30 stopni?</h3>
    <input type="radio" name="question5" value="a" checked> 0.5 <br> 
    <input type="radio" name="question5" value="b"> -0.25 <br>
	<input type="radio" name="question5" value="c"> 0.15 <br>
	
	<h3>Oblicz pole prostokąta o bokach długości 8 i 12.</h3>
    <input type="radio" name="question6" value="a" checked> 40 <br>
    <input type="radio" name="question6" value="b"> 20 <br>
	<input type="radio" name="question6" value="c"> 96 <br>
	
	<h3>Jaką ma wartość liczba π (pi) zaokrąglona do dwóch miejsc po przecinku?</h3>
    <input type="radio" name="question7" value="a" checked> 3,12 <br>
    <input type="radio" name="question7" value="b"> 3,15 <br>
	<input type="radio" name="question7" value="c"> 3,14 <br>
	
	<h3>Jaki jest wynik nierówności: 3x - 7 > 10?</h3>
    <input type="radio" name="question8" value="a" checked> x > 17 <br>
    <input type="radio" name="question8" value="b"> x > 3/17 <br>
	<input type="radio" name="question8" value="c"> x > 17/3 <br>
	
	<h3>Ile wynosi 3 do potęgi 4?</h3>
    <input type="radio" name="question9" value="a" checked> 12 <br>
    <input type="radio" name="question9" value="b"> 133 <br>
	<input type="radio" name="question9" value="c"> 81 <br>
	
	<h3>Jeśli cena towaru wynosi 120 złotych, a podatek VAT wynosi 23%, to ile wyniesie cena towaru po doliczeniu podatku?</h3>
    <input type="radio" name="question10" value="a" checked> 27,6 <br>
    <input type="radio" name="question10" value="b"> 92,4 <br>
	<input type="radio" name="question10" value="c"> 147.6 <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php echo '<?php'; ?>
 include '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result1'; <?php echo '?>'; ?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
