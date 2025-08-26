<?php

namespace app\controllers;
use PDOException;

class ContactCtrl {
	
	public function action_contact(){
		$this->generateView(); 
	}
	public function generateView(){
		getSmarty()->display('ContactView.tpl');
	}
	
}
