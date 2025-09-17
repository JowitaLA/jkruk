<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PersonSearchForm;

class HistoryListCtrl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych
	

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new PersonSearchForm();
    }

    public function action_historyList() {
		
        // 4. wygeneruj widok
		App::getSmarty()->assign('page_title','Quizow');
		App::getSmarty()->assign('page_description','Quizuj do woli');
		App::getSmarty()->assign('page_header','Quizow');
		App::getSmarty()->assign('page_footer','autorzy strony: Marta Skowronek i Jowita Kruk PAW3');
		
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('losowanie', $this->records);  // lista rekordów z bazy danych
		App::getSmarty()->assign('msgs',App::getMessages()); 
        App::getSmarty()->display('HistoryList.tpl');
    }

}
