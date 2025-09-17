<?php
/* Smarty version 4.1.0, created on 2023-11-14 12:40:58
  from 'C:\xampp\htdocs\Projekt\app\views\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_65535cca9d4375_52631856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca86b625ed5033edd89534f761f1993d15605b59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\templates\\page.tpl',
      1 => 1699906010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65535cca9d4375_52631856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">

    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/stylepage.css">
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
</head>

<body style="margin: 20px;">

<body>

<div id="app_top" class="header">
    <div id="menu" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
		<a class="pure-menu-heading" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
historyList"><b>Strona główna</b></a>
	<ul>
		<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contact" class="pure-menu-heading pure-menu-link">Kontakt</a></li>

		<?php if (\core\RoleUtils::inRole('admin')) {?>
			<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
panelAdmin" class="pure-menu-heading pure-menu-link">Administracja</a></li>
		<?php }?>
		<?php if ((\core\RoleUtils::inRole('admin')) || (\core\RoleUtils::inRole('mod'))) {?>
			<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" class="pure-menu-heading pure-menu-link">Moderacja</a></li>
		<?php }?>	
		<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
			<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
		<?php } else { ?>	
			<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
		<?php }?>
	<ul>
</div>

 <div id="main">
        <div class="header">
            <h1>Kontakt</h1>
            <h2>Zapraszamy do pomocy przy tworzeniu Quizow!</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Discord</h2>
            <p>
                Dołącz na nasz Discord klikając <font color="#D8BFD8"><a href="https://discord.pl" alt="Side Menu CSS">TUTAJ</a></font>!
            </p>

            <h2 class="content-subhead">E-mail</h2>
            <p>
                Nie masz Discorda? W takim razie zapraszamy do kontaktu poprzez maila:<font color="#6A5ACD">Quizow@gmail.com</font>
            </p>

            <h2 class="content-subhead">Telefon</h2>
            <p>
                Nadal brakuje ci możliwości kontaktu? Napisz lub zadzwoń do nas na numer <font color="#B22222"> +48739019231
            </p>
        </div>
    </div>
	
	
</div>

<?php echo '<script'; ?>
 src="/js/ui.js"><?php echo '</script'; ?>
>
	
<div class="content">

		<div id="app_content" class="content">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126565389565535cca9d26d3_96147198', 'top');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8849856965535cca9d36f1_06618321', 'messages');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78436498665535cca9d3c86_29587096', 'bottom');
?>

		
	</div>

	<div class="footer l-box is-center">
		<p>
			Autorzy strony: Marta Skowronek i Jowita Kruk PAW3
		</p>

	</div>

</div>

</body>
</html><?php }
/* {block 'top'} */
class Block_126565389565535cca9d26d3_96147198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_126565389565535cca9d26d3_96147198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_8849856965535cca9d36f1_06618321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_8849856965535cca9d36f1_06618321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_78436498665535cca9d3c86_29587096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_78436498665535cca9d3c86_29587096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
