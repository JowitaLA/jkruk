<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\RejestracjaForm;

class RejestracjaCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RejestracjaForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->haslo = ParamUtils::getFromRequest('haslo', true, 'Błędne wywołanie aplikacji');
		$this->form->haslo2 = ParamUtils::getFromRequest('haslo2', true, 'Błędne wywołanie aplikacji');
        $this->form->plec = ParamUtils::getFromRequest('plec', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->haslo))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }
        if (empty(trim($this->form->plec))) {
            Utils::addErrorMessage('Wprowadź płeć');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

		if (strlen($this->form->haslo)<'6') {
            Utils::addErrorMessage('Hasło musi posiadać przynajmniej 6 znaków');
        }
		
		if ($this->form->haslo != $this->form->haslo2) {
            Utils::addErrorMessage('Użytkownik o takim loginie istnieje już');
        }
		
		$this->reg = App::getDB()->get("user", "login",[
					"login" => $this->form->login
				]);
		if ($this->form->login == $this->reg) {
            Utils::addErrorMessage('Użytkownik o takim loginie istnieje już');
        }
		
        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_userNew() {
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
    }


    public function action_rejestracjaSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("user");
                    if ($count <= 20) {
                        App::getDB()->insert("user", [
                            "login" => $this->form->login,
                            "haslo" => $this->form->haslo,
                            "plec" => $this->form->plec
                        ]);
						
					$IDuser = App::getDB()->id();
			
					if($IDuser != NULL && $IDuser != ""){
						App::getDB()->insert("user-rola", [
							"user_ID" => $IDuser,
							"rola_ID" => "3"
						]);
					}
						
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('historyList');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
		App::getSmarty()->assign('page_title','Quizow');
		App::getSmarty()->assign('page_description','Quizuj do woli');
		App::getSmarty()->assign('page_header','Quizow');
		App::getSmarty()->assign('page_footer','autorzy strony: Marta Skowronek i Jowita Kruk PAW3');
		
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		App::getSmarty()->assign('losowanie', $this->records);
		App::getSmarty()->assign('msgs',App::getMessages());
        App::getSmarty()->display('Rejestracja.tpl');
    }

}
