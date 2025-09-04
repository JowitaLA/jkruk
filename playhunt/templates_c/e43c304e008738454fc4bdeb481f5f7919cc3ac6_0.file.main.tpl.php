<?php
/* Smarty version 4.1.0, created on 2025-03-25 17:19:56
  from 'C:\xampp\htdocs\PlayHunt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_67e2d7acb23bf8_07598504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e43c304e008738454fc4bdeb481f5f7919cc3ac6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PlayHunt\\app\\views\\templates\\main.tpl',
      1 => 1742919594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e2d7acb23bf8_07598504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/logo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Play Hunt</title>

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
/css/style.css">
  <?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_hide_intro.css">
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

  <div id="menu" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
    <a class="pure-menu-heading" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showMain">  <img src="img/logo.png" alt="Logo" class="menu-logo"> <b>Play Hunt</b></a>
    <ul>
      <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
        <li class="pure-menu-selected"><a class="pure-menu-selected" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
        <li class="pure-menu-selected"><a class="pure-menu-selected" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
account">Moje Konto</a></li>
        <?php if ($_smarty_tpl->tpl_vars['conf']->value->roles['admin']) {?>
          <li class="pure-menu-selected"><a class="pure-menu-selected" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
options">Zarządzanie</a></li>
        <?php }?>
      <?php } else { ?>
        <li class="pure-menu-selected"><a class="pure-menu-selected" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Logowanie</a></li>
      <?php }?>
      <li class="pure-menu-selected"><a class="pure-menu-selected" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
contact">Kontakt</a></li>
      <li class="pure-menu-selected"><a class="pure-menu-selected" href="https://www.huntshowdown.com/">Główna strona
          gry</a></li>
    </ul>
  </div>

  <audio id="backgroundMusic" autoplay loop>
    <source src="lib/music.mp3" type="audio/mpeg">
  </audio>



  <div class="splash-container">
  <video class="smoke" autoplay loop muted playsinline>
    <source src="img/smoke.mp4" type="video/mp4">
  </video>
    <div class="cutout"></div>
    <div class="splash">
      <h1 class="splash-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
      <p class="splash-subhead">
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

      </p>
      <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
        <p>
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="logowanie">Dołącz do nas już teraz!</a>
        </p>
      <?php }?>
    </div>
  </div>

  <div class="content-wrapper">

    <div id="app_content" class="content">
      <button id="musicButton" style="display: none;">⏸️</button>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181187097267e2d7acb21da0_20644717', 'content');
?>


    </div>

    <div class="footer l-box is-center">
      <p>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_footer']->value ?? null)===null||$tmp==='' ? "Domyślna treść stopki" ?? null : $tmp);?>

      </p>

    </div>

  </div>
  <?php echo '<script'; ?>
>
    const cutout = document.querySelector('.cutout');
    document.addEventListener('mousemove', (e) => {
      const w = window.innerWidth;
      const h = window.innerHeight;
      const xRotation = ((e.clientY / h) - 0.5) * 5;
      const yRotation = ((e.clientX / w) - 0.5) * -5;
      cutout.style.transform = 'rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)';
    });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    document.addEventListener("DOMContentLoaded", function() {
      const music = document.getElementById("backgroundMusic");
      const button = document.getElementById("musicButton");

      if (!music || !music.canPlayType) return;
      button.style.display = "block";

      // Odtwarzanie od zapamiętanego czasu
      const savedTime = localStorage.getItem("musicTime");
      if (savedTime) {
        music.currentTime = parseFloat(savedTime);
      }

      if (localStorage.getItem("musicPlaying") === "true") {
        music.play();
        button.textContent = "⏸️";
      }

      // Zapisywanie aktualnego czasu odtwarzania co 1 sek.
      setInterval(() => {
        if (!music.paused) {
          localStorage.setItem("musicTime", music.currentTime);
        }
      }, 1000);

      // Obsługa przycisku
      button.addEventListener("click", function() {
        if (music.paused) {
          music.play();
          button.textContent = "⏸️";
          localStorage.setItem("musicPlaying", "true");
        } else {
          music.pause();
          button.textContent = "🎵";
          localStorage.setItem("musicPlaying", "false");
        }
      });

      // Odtwarzanie po pierwszym kliknięciu, jeśli autoplay jest zablokowany
      document.body.addEventListener("click", function() {
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
class Block_181187097267e2d7acb21da0_20644717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_181187097267e2d7acb21da0_20644717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
}
