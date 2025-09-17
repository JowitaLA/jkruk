<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonEditForm;

class PersonEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new PersonEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_panelAdmin() {
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


    public function generateView() {
		App::getSmarty()->assign('page_title','Quizow');
		App::getSmarty()->assign('page_description','Quizuj do woli');
		App::getSmarty()->assign('page_header','Quizow');
		App::getSmarty()->assign('page_footer','autorzy strony: Marta Skowronek i Jowita Kruk PAW3');
		
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		App::getSmarty()->assign('losowanie', $this->records);
        App::getSmarty()->display('PersonEdit.tpl');
    }

}
