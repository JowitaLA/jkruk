<?php
/* Smarty version 4.1.0, created on 2023-11-13 19:30:01
  from 'C:\xampp\htdocs\Projekt\app\views\quiz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_65526b29e97e43_61615649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b6a64cd2390cfc4c53cd60859d36589234eb6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\quiz.tpl',
      1 => 1699900201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_65526b29e97e43_61615649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32351116965526b29e93387_83122251', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113207789865526b29e94377_75523972', 'bottom');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "quiz_page.tpl");
}
/* {block 'top'} */
class Block_32351116965526b29e93387_83122251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_32351116965526b29e93387_83122251',
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
class Block_113207789865526b29e94377_75523972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_113207789865526b29e94377_75523972',
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
}
