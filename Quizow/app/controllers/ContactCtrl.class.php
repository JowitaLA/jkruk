<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;

class ContactCtrl {

    public function action_contact() {

            $this->generateView();
    }

    public function generateView() {
		App::getSmarty()->assign('page_title','Quizow');

/*		App::getSmarty()->assign('page_description','Quizuj do woli');
		App::getSmarty()->assign('page_header','Quizow');
		App::getSmarty()->assign('page_footer','autorzy strony: Marta Skowronek i Jowita Kruk PAW3');
		 */
        App::getSmarty()->display('ContactView.tpl');
		App::getSmarty()->assign('msgs',App::getMessages());
    }

}
