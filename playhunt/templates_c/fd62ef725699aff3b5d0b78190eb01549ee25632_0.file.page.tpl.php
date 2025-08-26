<?php
/* Smarty version 4.1.0, created on 2025-03-24 16:51:24
  from 'C:\xampp\htdocs\PlayHunt\app\views\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_67e17f7c160230_63319682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd62ef725699aff3b5d0b78190eb01549ee25632' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PlayHunt\\app\\views\\templates\\page.tpl',
      1 => 1742831114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e17f7c160230_63319682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
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
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/stylepage_hide_intro.css">
<?php }?>
	
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
<body>
<audio id="backgroundMusic" loop>
  <source src="lib/music.mp3" type="audio/mpeg">
</audio>

<button id="musicButton" style="display: none;">⏸️</button>

    <div id="menu" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
			<a class="pure-menu-heading" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showMain"><b>Strona główna</a><ul>
			
			<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
				<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
			<?php } else { ?>	
				<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Logowanie</a></li>
			<?php }?>
			<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
options">Opcje</a></li>
			<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
contact">Kontakt</a></li>	
      <li class="pure-menu-selected"><a href="https://www.huntshowdown.com/">Główna strona gry</a></li>	
        </ul>
    </div>



<div class="splash-container">
    <div id="app_content" class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169274200467e17f7c15f262_29415017', 'content');
?>

</div>
</div>
<?php echo '<script'; ?>
>
document.addEventListener("DOMContentLoaded", function () {
  const music = document.getElementById("backgroundMusic");
  const button = document.getElementById("musicButton");

  if (!music || !music.canPlayType) return; // Jeśli przeglądarka nie obsługuje audio, nic nie pokazujemy

  button.style.display = "block"; // Pokazujemy przycisk, jeśli audio działa

  // Sprawdź, czy muzyka była odtwarzana przed przejściem na inną stronę
  if (localStorage.getItem("musicPlaying") === "true") {
    music.play();
    button.textContent = "⏸️";
  }

  // Obsługa przycisku
  button.addEventListener("click", function () {
    if (music.paused) {
      music.play();
      button.textContent = "⏸️";
      localStorage.setItem("musicPlaying", "true"); // Zapisz stan w localStorage
    } else {
      music.pause();
      button.textContent = "🎵";
      localStorage.setItem("musicPlaying", "false"); // Zapisz stan w localStorage
    }
  });

  // Jeśli przeglądarka blokuje autoplay, odtwarzamy po pierwszym kliknięciu
  document.body.addEventListener("click", function () {
    if (music.paused) {
      music.play();
      localStorage.setItem("musicPlaying", "true");
    }
  }, { once: true });
});
<?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_169274200467e17f7c15f262_29415017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_169274200467e17f7c15f262_29415017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
}
