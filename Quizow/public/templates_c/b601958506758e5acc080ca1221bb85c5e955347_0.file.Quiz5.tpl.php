<?php
/* Smarty version 4.1.0, created on 2023-11-14 03:22:15
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Quiz5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552d9d79f2908_77417375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b601958506758e5acc080ca1221bb85c5e955347' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Quiz5.tpl',
      1 => 1699928516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552d9d79f2908_77417375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19471553156552d9d79e9235_69808257', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5521321046552d9d79ed583_52158487', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'bottom'} */
class Block_19471553156552d9d79e9235_69808257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_19471553156552d9d79e9235_69808257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_5521321046552d9d79ed583_52158487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5521321046552d9d79ed583_52158487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result5">
    <h3>Co to jest "scope" (zasięg) zmiennej w programowaniu?</h3>
    <input type="radio" name="question1" value="a" checked> Wartość zmiennej<br>
    <input type="radio" name="question1" value="b"> Typ danych zmiennej<br>
	<input type="radio" name="question1" value="c"> Obszar, w którym zmienna jest dostępna<br>
	
	<h3>Co oznacza skrót OOP w kontekście programowania?</h3>
    <input type="radio" name="question2" value="a" checked> Object-Oriented Programming<br>
    <input type="radio" name="question2" value="b"> Object-Oriented Processing<br>
	<input type="radio" name="question2" value="c"> Object-Oriented Protocol<br>
	
	<h3>W jaki sposób definiujemy funkcję w języku programowania Python?</h3>
    <input type="radio" name="question3" value="a" checked> function nazwa() { }<br>
    <input type="radio" name="question3" value="b"> def nazwa():<br>
	<input type="radio" name="question3" value="c"> function nazwa():<br>
	
	<h3>Co to jest "refaktoring"?</h3>
    <input type="radio" name="question4" value="a" checked> Proces poprawiania błędów w kodzie<br>
    <input type="radio" name="question4" value="b"> Proces przekształcania istniejącego kodu bez zmiany jego funkcjonalności<br>
	<input type="radio" name="question4" value="c"> Proces kompilacji kodu<br>
	
	<h3>W jaki sposób działa instrukcja warunkowa "switch" w języku programowania?</h3>
    <input type="radio" name="question5" value="a" checked> Porównuje dwie wartości pod kątem równości<br>
    <input type="radio" name="question5" value="b"> Wykonuje różne bloki kodu w zależności od wartości wyrażenia<br>
	<input type="radio" name="question5" value="c"> Wykonuje pętlę określoną ilość razy<br>
	
	<h3>Co to jest struktura danych "kolejka"?</h3>
    <input type="radio" name="question6" value="a" checked> Struktura danych przechowująca klucze i wartości<br>
    <input type="radio" name="question6" value="b"> Struktura danych przechowująca elementy w kolejności LIFO<br>
	<input type="radio" name="question6" value="c"> Struktura danych przechowująca elementy w kolejności FIFO<br>
	
	<h3>W jaki sposób obsługuje się błędy w języku programowania PHP?</h3>
    <input type="radio" name="question7" value="a" checked> Instrukcją warunkową "if" <br>
    <input type="radio" name="question7" value="b"> Instrukcją warunkową "try-catch" <br>
	<input type="radio" name="question7" value="c"> Instrukcją warunkową "switch" <br>
	
	<h3>Co to jest "API key"?</h3>
    <input type="radio" name="question8" value="a" checked> Unikalny identyfikator dla interfejsu użytkownika <br>
    <input type="radio" name="question8" value="b"> Klucz dostępu do programu antywirusowego <br>
	<input type="radio" name="question8" value="c"> Klucz autoryzacyjny do korzystania z usługi API <br>
	
	<h3>W jaki sposób deklarujemy stałą (const) w języku programowania JavaScript?</h3>
    <input type="radio" name="question9" value="a" checked> const NAME; <br>
    <input type="radio" name="question9" value="b"> constant NAME; <br>
	<input type="radio" name="question9" value="c"> var NAME; <br>
	
	<h3>Co to jest "dependency injection"?</h3>
    <input type="radio" name="question10" value="a" checked> Proces wstrzykiwania zależności do kodu <br>
    <input type="radio" name="question10" value="b"> Proces usuwania zbędnych zależności <br>
	<input type="radio" name="question10" value="c"> Proces przekształcania kodu na zależny <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php echo '<?php'; ?>
 include '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result5'; <?php echo '?>'; ?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
