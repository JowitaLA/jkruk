<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Strona główna
Route::get('/', function () {
    return view('main');
});

// Welcome z wykrywaniem języka
Route::get('/welcome', function () {
    session_start();

    $supported_languages = ['pl', 'en'];

    function detectLanguage($supported_languages)
    {
        $acceptLang = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
        $lang = 'en';

        foreach ($supported_languages as $supported_lang) {
            if (stripos($acceptLang, $supported_lang) !== false) {
                $lang = $supported_lang;
                break;
            }
        }

        return $lang;
    }

    if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_languages)) {
        $lang = $_GET['lang'];
        $_SESSION['lang'] = $lang;
    } elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], $supported_languages)) {
        $lang = $_SESSION['lang'];
    } else {
        $lang = detectLanguage($supported_languages);
    }

    $lang_file = "public/lang/{$lang}.php";
    if (file_exists($lang_file)) {
        $translations = require $lang_file;
    } else {
        $translations = require 'language/en.php';
    }

    return view('welcome');
});

// Wysyłka formularza przez kontroler
Route::post('/send-mail', [ContactController::class, 'sendMail']);