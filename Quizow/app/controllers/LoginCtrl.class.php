<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
	private $record;
	private $haslo;
	private $role;
	private $ID_user;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
		//try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $this->haslo = App::getDB()->get("user", "haslo", [
                    "login" => $this->form->login
                ]);
				if ($this->form->pass == $this->haslo){
					\core\RoleUtils::addRole('user');
					Utils::addErrorMessage('Zalogowano się');
					
					$this->ID_user = App::getDB()->select("user", "ID_user", [
                    "login" => $this->form->login
					]);
					
					$this->role = App::getDB()->get("user-rola", "rola_ID", [
                    "user_ID" => $this->ID_user
					]);
					
					if ($this->role == '1'){ 
						\core\RoleUtils::addRole('admin');
						Utils::addErrorMessage('Admin');
					}
					if ($this->role == '2'){
						\core\RoleUtils::addRole('mod');
						Utils::addErrorMessage('Mod');
					}
				}
				else {
						Utils::addErrorMessage('Niepoprawny login lub hasło');
				}
				
        /*} catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }*/
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Niepoprawnie zalogowano do systemu');
            $this->generateView();
        } else {
            //niezalogowany => pozostań na stronie logowania
			Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("historyList");
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('hisoryList');
    }

    public function generateView() {
		App::getSmarty()->assign('page_title','Quizow');
		App::getSmarty()->assign('page_description','Quizuj do woli');
		App::getSmarty()->assign('page_header','Quizow');
		App::getSmarty()->assign('page_footer','autorzy strony: Marta Skowronek i Jowita Kruk PAW3');
		
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
		App::getSmarty()->assign('record', $this->record);
		App::getSmarty()->assign('msgs',App::getMessages()); 
        App::getSmarty()->display('LoginView.tpl');
    }

}
