<?php
session_start();

// Lista obsługiwanych języków z kodami
$supported_languages = ['pl', 'en'];

// Funkcja do wykrywania języka na podstawie nagłówków przeglądarki
function detectLanguage($supported_languages) {
    $acceptLang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    $lang = 'en'; // Domyślny język (angielski)

    // Debugowanie: Zapisz nagłówki do pliku dziennika
    error_log("HTTP_ACCEPT_LANGUAGE: " . $acceptLang);

    // Sprawdzenie preferowanego języka przeglądarki
    foreach ($supported_languages as $supported_lang) {
        if (stripos($acceptLang, $supported_lang) !== false) {
            $lang = $supported_lang;
            break;
        }
    }

    return $lang;
}

// Sprawdzenie, czy użytkownik wybrał język
if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_languages)) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $supported_languages)) {
    $lang = $_SESSION['lang'];
} else {
    $lang = detectLanguage($supported_languages);
}

// Załaduj odpowiedni plik językowy
$lang_file = "language/{$lang}.php";
if (file_exists($lang_file)) {
    $translations = require $lang_file;
} else {
    // Fallback do angielskiego w przypadku braku pliku
    $translations = require 'language/en.php';
}

require "libs/Smarty.class.php";
$smarty = new Smarty();

$smarty->setTemplateDir("templates");
$smarty->setCompileDir("templates_c");
$smarty->setCacheDir("cache");
$smarty->setConfigDir("configs");

foreach ($translations as $key => $value) {
    $smarty->assign($key, $value);
}

$smarty->display("mainView.tpl");
