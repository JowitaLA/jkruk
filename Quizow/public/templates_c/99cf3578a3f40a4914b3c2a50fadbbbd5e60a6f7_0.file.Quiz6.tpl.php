<?php
/* Smarty version 4.1.0, created on 2023-11-14 03:22:16
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Quiz6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552d9d82a8601_28768096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99cf3578a3f40a4914b3c2a50fadbbbd5e60a6f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Quiz6.tpl',
      1 => 1699928498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552d9d82a8601_28768096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6127446786552d9d82a0006_83111913', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19527440916552d9d82a3cb2_03585413', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'bottom'} */
class Block_6127446786552d9d82a0006_83111913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_6127446786552d9d82a0006_83111913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_19527440916552d9d82a3cb2_03585413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19527440916552d9d82a3cb2_03585413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result6">
	<h3>Co to jest wzorzec projektowy Singleton?</h3>
    <input type="radio" name="question1" value="a" checked> Metoda projektowania interfejsu użytkownika<br>
    <input type="radio" name="question1" value="b"> Wzorzec projektowy dla jednego obiektu danej klasy<br>
	<input type="radio" name="question1" value="c"> 'Algorytm sortowania danych<br>
	
	<h3>W jaki sposób działa protokół HTTP?</h3>
    <input type="radio" name="question2" value="a" checked> Protokół komunikacyjny oparty na strumieniach<br>
    <input type="radio" name="question2" value="b"> Protokół przesyłania plików<br>
	<input type="radio" name="question2" value="c"> Protokół do przesyłania danych między serwerem a klientem<br>
	
	<h3>Co to jest RESTful API?</h3>
    <input type="radio" name="question3" value="a" checked> Interfejs programowania aplikacji do obsługi plików multimedialnych<br>
    <input type="radio" name="question3" value="b"> API oparte na pryncypjach REST<br>
	<input type="radio" name="question3" value="c"> API do zarządzania zasobami systemowymi<br>
	
	<h3>W jaki sposób działa garbage collection w językach programowania?</h3>
    <input type="radio" name="question4" value="a" checked> Proces oznaczania nieużywanych obiektów<br>
    <input type="radio" name="question4" value="b"> Proces zapisywania danych na dysku<br>
	<input type="radio" name="question4" value="c"> Proces analizy błędów w kodzie<br>
	
	<h3>Co to jest SQL Injection?</h3>
    <input type="radio" name="question5" value="a" checked> Sposób na nielegalne wstrzykiwanie kodu do bazy danych<br>
    <input type="radio" name="question5" value="b"> Błąd w systemie operacyjnym<br>
	<input type="radio" name="question5" value="c"> Metoda szyfrowania danych<br>
	
	<h3>Jakie są różnice między HTTP a HTTPS?</h3>
    <input type="radio" name="question6" value="a" checked> Różne protokoły komunikacyjne<br>
    <input type="radio" name="question6" value="b"> Różne metody sortowania danych<br>
	<input type="radio" name="question6" value="c"> Różne metody zabezpieczania transmisji danych<br>
	
	<h3>Co to jest SOLID?</h3>
    <input type="radio" name="question7" value="a" checked> Skrót od nazw pięciu podstawowych koncepcji programowania obiektowego <br>
    <input type="radio" name="question7" value="b"> Nazwa firmy zajmującej się programowaniem <br>
	<input type="radio" name="question7" value="c"> Nazwa algorytmu sortującego <br>
	
	<h3>Co oznacza skrót CRUD w kontekście baz danych?</h3>
    <input type="radio" name="question8" value="a" checked> Create, Read, Update, Delete - podstawowe operacje na danych <br>
    <input type="radio" name="question8" value="b"> Skrót od nazw zmiennych w języku programowania <br>
	<input type="radio" name="question8" value="c"> Skrót od nazwy popularnej biblioteki programistycznej <br>
	
	<h3>Co to jest Docker?</h3>
    <input type="radio" name="question9" value="a" checked> System operacyjny <br>
    <input type="radio" name="question9" value="b"> Platforma do konteneryzacji aplikacji <br>
	<input type="radio" name="question9" value="c"> Nazwa języka programowania <br>
	
	<h3>W jaki sposób działa algorytm szyfrowania RSA?</h3>
    <input type="radio" name="question10" value="a" checked> Algorytm sortujący dane <br>
    <input type="radio" name="question10" value="b"> Algorytm kompresji danych <br>
	<input type="radio" name="question10" value="c"> Algorytm kryptograficzny do szyfrowania danych <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php echo '<?php'; ?>
 include '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result6'; <?php echo '?>'; ?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
