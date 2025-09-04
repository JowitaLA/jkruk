<?php
/* Smarty version 4.1.0, created on 2025-03-25 16:14:05
  from 'C:\xampp\htdocs\PlayHunt\app\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_67e2c83d2a0166_74573318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303f9eeee31e15a8441960f7b5c50369304cd7a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PlayHunt\\app\\views\\templates\\login.tpl',
      1 => 1742912813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e2c83d2a0166_74573318 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
	<link rel="icon" href="img/logo.png" type="image/png">

    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Play Hunt" ?? null : $tmp);?>
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
/css/layouts/login-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/login.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/stylelog.css">
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/stylelog_hide_intro.css">
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
			<li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
contact">Kontakt</a></li>
			<li class="pure-menu-selected"><a href="https://www.huntshowdown.com/">Główna strona gry</a></li>
			
        </ul>
    </div>

<div class="splash-container">
    <div class="splash">
			<p class="splash-subhead">
			
				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
					<h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; LOGOWANIE </h1>
						<fieldset>
					
							<div class="pure-control-group">
								<label for="id_login">login: </label>
								<input id="id_login" type="text" name="login" style="width: 500px;"/>
							</div>
					
							<div class="pure-control-group">
								<label for="id_pass">hasło: </label>
								<input id="id_pass" type="password" name="pass" style="width: 500px;" /><br />
							</div>
							
							<div class="pure-controls">
								<input type="submit" value="zaloguj" class="pure-button pure-button-primary" style="background-color: #2F4F4F;width: 200px;"/>
							</div>
			
						</fieldset>
				</form>	
			</p>
		
		
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
					<h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; REJESTRACJA </h1>
						<fieldset>
					
							<div class="pure-control-group">
								<label for="id_reg">login: </label>
								<input id="id_reg" type="text" name="reg" style="width: 500px;"/>
							</div>
							
							<div class="pure-control-group">
								<label for="id_mail">e-mail: </label>
								<input id="id_mail" type="text" name="mail" style="width: 500px;"/>
							</div>
					
							<div class="pure-control-group">
								<label for="id_fPass">hasło: </label>
								<input id="id_fPass" type="password" name="fPass" style="width: 500px;" /><br />
							</div>
							
							<div class="pure-control-group">
								<label for="id_sPass">powtórz hasło: </label>
								<input id="id_sPass" type="password" name="sPass" style="width: 500px;" /><br />
							</div>
							
							<div class="pure-controls">
								<input type="submit" value="zarejestruj" class="pure-button pure-button-primary" style="background-color: #2F4F4F;width: 200px;" />
							</div>
			
						</fieldset>
		</form>	
    </div>
	
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
}
