<?php
/* Smarty version 4.1.0, created on 2023-11-14 03:22:15
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Quiz4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552d9d729b2d3_63917497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9613e8fc265d8db340e8c80901c23873087ed56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Quiz4.tpl',
      1 => 1699928381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552d9d729b2d3_63917497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12602017186552d9d72931f5_58067010', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_583253966552d9d7296b85_04127079', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'bottom'} */
class Block_12602017186552d9d72931f5_58067010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_12602017186552d9d72931f5_58067010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_583253966552d9d7296b85_04127079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_583253966552d9d7296b85_04127079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result4">
    <h3>Co to jest zmienna w programowaniu?</h3>
    <input type="radio" name="question1" value="a" checked> Instrukcja warunkowa<br>
    <input type="radio" name="question1" value="b"> Miejsce przechowywania danych<br>
	<input type="radio" name="question1" value="c"> Funkcja matematyczna<br>
	
	<h3>Co oznacza skrót HTML?</h3>
    <input type="radio" name="question2" value="a" checked> HyperText Markup Language<br>
    <input type="radio" name="question2" value="b"> High-Level Text Mode Language<br>
	<input type="radio" name="question2" value="c"> Home Tool Markup Language<br>
	
	<h3>W którym języku programowania używa się nawiasów klamrowych {} do oznaczania bloków kodu?</h3>
    <input type="radio" name="question3" value="a" checked> Python<br>
    <input type="radio" name="question3" value="b"> Java<br>
	<input type="radio" name="question3" value="c"> C++<br>
	
	<h3>Co to jest pętla w programowaniu?</h3>
    <input type="radio" name="question4" value="a" checked> Element interfejsu użytkownika<br>
    <input type="radio" name="question4" value="b"> Instrukcja warunkowa<br>
	<input type="radio" name="question4" value="c"> Fragment kodu powtarzający się wielokrotnie<br>
	
	<h3>Jakie są podstawowe typy danych w języku programowania Python?</h3>
    <input type="radio" name="question5" value="a" checked> Integer, Float, String, Boolean<br>
    <input type="radio" name="question5" value="b"> Array, Object, String, Null<br>
	<input type="radio" name="question5" value="c"> Int, Char, String, Boolean<br>
	
	<h3>Co oznacza skrót API?</h3>
    <input type="radio" name="question6" value="a" checked> Application Programming Interface<br>
    <input type="radio" name="question6" value="b"> Automated Programming Instruction<br>
	<input type="radio" name="question6" value="c"> Advanced Programming Interface<br>
	
	<h3>W jaki sposób można skomentować kod w języku programowania JavaScript?</h3>
    <input type="radio" name="question7" value="a" checked> /* To jest komentarz */ <br>
    <input type="radio" name="question7" value="b"> // To jest komentarz <br>
	<input type="radio" name="question7" value="c"> # To jest komentarz <br>
	
	<h3>Co to jest Git?</h3>
    <input type="radio" name="question8" value="a" checked> Rodzaj bazy danych <br>
    <input type="radio" name="question8" value="b"> System kontroli wersji <br>
	<input type="radio" name="question8" value="c"> Edytor tekstu <br>
	
	<h3>W jaki sposób deklarujemy zmienną w języku programowania Java?</h3>
    <input type="radio" name="question9" value="a" checked> $var name; <br>
    <input type="radio" name="question9" value="b"> declare name; <br>
	<input type="radio" name="question9" value="c"> int name; <br>
	
	<h3>Co to jest algorytm?</h3>
    <input type="radio" name="question10" value="a" checked> Rodzaj bazy danych <br>
    <input type="radio" name="question10" value="b"> Sekwencja instrukcji rozwiązująca problem <br>
	<input type="radio" name="question10" value="c"> Język programowania <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php echo '<?php'; ?>
 include '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result4'; <?php echo '?>'; ?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
