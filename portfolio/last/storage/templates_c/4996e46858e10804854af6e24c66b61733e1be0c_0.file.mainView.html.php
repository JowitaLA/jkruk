<?php
/* Smarty version 4.2.1, created on 2024-08-02 12:05:48
  from '/home/dm71275/jkruk.eu/templates/mainView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66accb9cbc30d2_46139674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4996e46858e10804854af6e24c66b61733e1be0c' => 
    array (
      0 => '/home/dm71275/jkruk.eu/templates/mainView.html',
      1 => 1722600345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66accb9cbc30d2_46139674 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="portfolio.ico" type="image/x-icon">

    <style>
        /* Stylowanie zaznaczonego tekstu */
        ::selection {
            background: #BB8100;
            /* Kolor tła zaznaczenia */
            color: black;
            /* Kolor tekstu zaznaczonego (opcjonalnie) */
        }

        /* Dla przeglądarek z Webkit, takich jak Chrome i Safari */
        ::-webkit-selection {
            background: #BB8100;
            /* Kolor tła zaznaczenia */
            color: black;
            /* Kolor tekstu zaznaczonego (opcjonalnie) */
        }

        .no-select {
            user-select: none;
            /* Wyłącza zaznaczanie tekstu */
            -webkit-user-select: none;
            /* Dla przeglądarek WebKit (Chrome, Safari) */
            -moz-user-select: none;
            /* Dla Firefox */
            -ms-user-select: none;
            /* Dla Internet Explorer/Edge */
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/pure-min.css">
    <link rel="stylesheet" href="/css/grids-responsive-min.css">
    <link rel="stylesheet" href="/css/mainView.css">
</head>

<body>
    <div class="banner">
        <h1 class="banner-head no-select">
            Jestem Jowita,<br>
            Web Developer i Projektant Graficzny.
        </h1>
    </div>

    <div class="sidebar">
        <a href="#strony-internetowe" class="sidebar-button">Strony Internetowe</a>
        <a href="#prace-graficzne" class="sidebar-button">Prace Graficzne</a>
    </div>

    <div class="content">
    <section id="strony-internetowe">
    <div class="">
        <h1 class="">
            a
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </h1>
    </div>
    </section>

    <section id="prace-graficzne">
    <div class="">
        <h1 class="">
            a
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </h1>
    </div>
    </section>
    </div>

    <div class="footer l-box">
        <p>
            Kontakt:<br>
            <a href='https://www.facebook.com/Ylorus/?locale=pl_PL'>Facebook</a>.
        </p>
    </div>


    <?php echo '<script'; ?>
 src="/js/mainView.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
