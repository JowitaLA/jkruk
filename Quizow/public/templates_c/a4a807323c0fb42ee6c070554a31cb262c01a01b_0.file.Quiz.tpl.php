<?php
/* Smarty version 4.1.0, created on 2023-11-13 21:17:21
  from 'C:\xampp\htdocs\Projekt\app\views\Quiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_65528451e4aae0_00157782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4a807323c0fb42ee6c070554a31cb262c01a01b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\Quiz.tpl',
      1 => 1699906641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_65528451e4aae0_00157782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187756191265528451e462b6_86964457', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139769480065528451e46dd8_24678715', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116047564065528451e4a396_24204735', 'main');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'top'} */
class Block_187756191265528451e462b6_86964457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_187756191265528451e462b6_86964457',
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
class Block_139769480065528451e46dd8_24678715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_139769480065528451e46dd8_24678715',
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
class Block_116047564065528451e4a396_24204735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_116047564065528451e4a396_24204735',
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
