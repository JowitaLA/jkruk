<?php
/* Smarty version 4.1.0, created on 2023-11-13 02:12:58
  from 'C:\xampp\htdocs\Projekt\app\views\ContactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6551781a4b97b4_30846864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a173fd57285ecfee3da2252b791b2ad8ca598c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\ContactView.tpl',
      1 => 1699837974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551781a4b97b4_30846864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8363438616551781a4b18b3_34353550', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8891868276551781a4b8ff4_84794078', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page.tpl");
}
/* {block 'footer'} */
class Block_8363438616551781a4b18b3_34353550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8363438616551781a4b18b3_34353550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_8891868276551781a4b8ff4_84794078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8891868276551781a4b8ff4_84794078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<center><h1>TEST</h2>

<div class="pure-menu pure-menu-horizontal bottom-margin"><div>

<center>
<tr> <center> </tr>
</center>


<table class="pure-table">
    <thead>
        <tr>
            <th><center> Kontakt</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Email: Quizow@gmail.com</td>
        </tr>
        <tr>
            <td>Telefon: 017-245-321</td>
        </tr>
        <tr>
            <td>Discord: https://discord.gg/Quizow</td>
        </tr>
    </tbody>
</table>

<?php
}
}
/* {/block 'content'} */
}
