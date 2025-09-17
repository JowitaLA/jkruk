<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonEditForm;

class AdminEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new PersonEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        /*$this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->haslo = ParamUtils::getFromRequest('haslo', true, 'Błędne wywołanie aplikacji');
        $this->form->plec = ParamUtils::getFromRequest('plec', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->haslo))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }
        if (empty(trim($this->form->plec))) {
            Utils::addErrorMessage('Wprowadź datę urodzenia');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        return !App::getMessages()->isError();*/
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    /*public function action_personNew() {
        try {
            $this->records = App::getDB()->select("user", [
							"ID_user",
							"login",
                            "haslo",
                            "plec",
                    ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
		
		$this->generateView();
    }*/

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    /*public function action_personEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("user", "*", [
                    "ID_user" => $this->form->id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id = $record['ID_user'];
                $this->form->login = $record['login'];
                $this->form->haslo = $record['haslo'];
                $this->form->plec = $record['plec'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }*/



    public function action_personDelete() {
		//die("jtgh");
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("user", [
                    "ID_user" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        forwardTo('historyList');
		//$this->generateView();
    }


    public function generateView() {
		App::getSmarty()->assign('page_title','Quizow');
		App::getSmarty()->assign('page_description','Quizuj do woli');
		App::getSmarty()->assign('page_header','Quizow');
		App::getSmarty()->assign('page_footer','autorzy strony: Marta Skowronek i Jowita Kruk PAW3');
		
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		App::getSmarty()->assign('losowanie', $this->records);
		App::getSmarty()->assign('msgs',App::getMessages());
        App::getSmarty()->display('AdminEdit.tpl');
    }

}
