<?php
/* Smarty version 4.1.0, created on 2023-11-13 21:25:34
  from 'C:\xampp\htdocs\Projekt\app\views\quiz\Quiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6552863e0cc873_41724412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39889875c4db14a8175b3c4ac6324d3f57dac3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz\\Quiz.tpl',
      1 => 1699906641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6552863e0cc873_41724412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18793590156552863e0c7aa4_63900643', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19689709356552863e0c86a9_55523882', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4148431626552863e0cc034_93423199', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'top'} */
class Block_18793590156552863e0c7aa4_63900643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_18793590156552863e0c7aa4_63900643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<center>
<!-- Pytania i odpowiedzi zostaną dodane dynamicznie za pomocą PHP -
<div id="quiz-container">
    <h1>Quiz - Informatyka</h1>
    <form action="app/views/quiz.php" method="post">
      <div id="question-container">
        
        <?php echo '<?php'; ?>
 include 'app/views/quiz.php'; <?php echo '?>'; ?>

      </div>
      <button type="submit">Zatwierdź</button>
    </form>
    <div id="result-container">
      <?php echo '<?php'; ?>
 include 'result.php'; <?php echo '?>'; ?>

    </div>
  </div>
	
</center>-->

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_19689709356552863e0c86a9_55523882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_19689709356552863e0c86a9_55523882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'bottom'} */
/* {block 'main'} */
class Block_4148431626552863e0cc034_93423199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_4148431626552863e0cc034_93423199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="result.php" method="post">
		<div id="question-container">
			<?php echo '<?php'; ?>
 include 'mathQuestions.php'; <?php echo '?>'; ?>

		</div>
		<button type="submit">Zatwierdź</button>
    </form>
	
	<div id="result-container">
      <?php echo '<?php'; ?>
 include 'result.php'; <?php echo '?>'; ?>

    </div>
<?php
}
}
/* {/block 'main'} */
}
