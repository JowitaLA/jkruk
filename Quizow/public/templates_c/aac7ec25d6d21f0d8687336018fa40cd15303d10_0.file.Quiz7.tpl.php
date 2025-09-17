<?php
/* Smarty version 4.1.0, created on 2023-11-14 03:35:19
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Quiz7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552dce79aba50_77557358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aac7ec25d6d21f0d8687336018fa40cd15303d10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Quiz7.tpl',
      1 => 1699929232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552dce79aba50_77557358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10615771706552dce79a3949_67188624', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_706137126552dce79a7222_85838440', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'bottom'} */
class Block_10615771706552dce79a3949_67188624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10615771706552dce79a3949_67188624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_706137126552dce79a7222_85838440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_706137126552dce79a7222_85838440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result7">
    <h3>Co to jest Wielki Kanion?</h3>
    <input type="radio" name="question1" value="a" checked> Najdłuższa rzeka na świecie<br>
    <input type="radio" name="question1" value="b"> Ogromny kanion w Stanach Zjednoczonych<br>
	<input type="radio" name="question1" value="c"> Najwyższa góra w Himalajach<br>
	
	<h3>Gdzie znajduje się Pustynia Sahara?</h3>
    <input type="radio" name="question2" value="a" checked> Ameryka Południowa<br>
    <input type="radio" name="question2" value="b"> Afryka Północna<br>
	<input type="radio" name="question2" value="c"> Azja Południowo-Wschodnia<br>
	
	<h3>Co to jest Wielki Barierny Rafa Koralowa?</h3>
    <input type="radio" name="question3" value="a" checked> Ogromny las deszczowy w Brazylii<br>
    <input type="radio" name="question3" value="b"> System raf koralowych u wybrzeży Australii<br>
	<input type="radio" name="question3" value="c"> Największe jezioro w Afryce<br>
	
	<h3>Które państwo leży na Półwyspie Apenińskim?</h3>
    <input type="radio" name="question4" value="a" checked> Grecja<br>
    <input type="radio" name="question4" value="b"> Włochy<br>
	<input type="radio" name="question4" value="c"> Hiszpania<br>
	
	<h3>Co to jest Amazonka?</h3>
    <input type="radio" name="question5" value="a" checked> Największa pustynia na świecie<br>
    <input type="radio" name="question5" value="b"> Najdłuższa rzeka na świecie<br>
	<input type="radio" name="question5" value="c"> Najwyższy szczyt w Afryce<br>
	
	<h3>W jakim kraju znajduje się Machu Picchu?</h3>
    <input type="radio" name="question6" value="a" checked> Meksyk<br>
    <input type="radio" name="question6" value="b"> Peru<br>
	<input type="radio" name="question6" value="c"> Kolumbia<br>
	
	<h3>Które miasto jest stolicą Japonii?</h3>
    <input type="radio" name="question7" value="a" checked> Pekin<br>
    <input type="radio" name="question7" value="b"> Tokio<br>
	<input type="radio" name="question7" value="c"> Seul<br>
	
	<h3>Gdzie znajduje się Wielki Mur Chiński?</h3>
    <input type="radio" name="question8" value="a" checked> Indie<br>
    <input type="radio" name="question8" value="b"> Chiny<br>
	<input type="radio" name="question8" value="c"> Mongolia<br>
	
	<h3>Jakie państwo leży na Półwyspie Skandynawskim?</h3>
    <input type="radio" name="question9" value="a" checked> Finlandia<br>
    <input type="radio" name="question9" value="b"> Szwecja<br>
	<input type="radio" name="question9" value="c"> Norwegia<br>
	
	<h3>Gdzie znajduje się Wielka Rafa Koralowa?</h3>
    <input type="radio" name="question10" value="a" checked> Morze Czerwone<br>
    <input type="radio" name="question10" value="b"> Ocean Indyjski<br>
	<input type="radio" name="question10" value="c"> Ocean Spokojny<br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php echo '<?php'; ?>
 include '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
result7'; <?php echo '?>'; ?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
