<?php

namespace app\controllers;

use app\forms\MainForm;
use PDOException;

class MainCtrl
{
	private $records; //rekordy pobrane z bazy danych
	private $choose;
	private $form;
	private $result;
	private $user;

	public function __construct()
	{
		$this->form = new MainForm();
	}

	public function validate()
	{
		//Sprawdzenie czy wszystkie dane są poprawne
		$this->form->id = getFromRequest('id', true, 'Błędne wywołanie aplikacji');
		if (getMessages()->isError()) return false;

		return ! getMessages()->isError();
	}

	public function action_mainShow()
	{

		try {
			$this->records = getDB()->query("
				SELECT 
					b.id,
					b.first_group_votes,
					b.second_group_votes,
					b.group_first_id,
					b.group_second_id,
					g.name 
				FROM 
					bettings b
				JOIN 
					groups g ON g.id = b.group_first_id OR g.id = b.group_second_id
				WHERE 
					b.status = 'Aktywny'
				ORDER BY 
					b.when_end ASC
			");
		} catch (PDOException $e) {
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów z tabeli betting');
			// if (getConf()->debug) getMessages()->addError($e->getMessage());
		}
		$this->generateView();
	}


	public function action_chooseOne()
	{
		if ($this->validate()) {
			try {
				$choose = getDB()->get("bettings", ["first_group_votes"], [
					"id" => $this->form->id
				]);
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}

			$this->result = $choose['first_group_votes'] + '1';

			try {
				getDB()->update(
					"bettings",
					[
						"first_group_votes" => $this->result,
					],
					[
						"id" => $this->form->id
					]
				);
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}


			forwardTo('mainShow');
		}
	}

	public function action_chooseTwo()
	{
		if ($this->validate()) {
			try {
				$choose = getDB()->get("bettings", ["second_group_votes"], [
					"id" => $this->form->id
				]);
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}

			$this->result = $choose['second_group_votes'] + '1';

			try {
				getDB()->update(
					"bettings",
					[
						"second_group_votes" => $this->result,
					],
					[
						"id" => $this->form->id
					]
				);
			} catch (PDOException $e) {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}


			forwardTo('mainShow');
		}
	}
	public function generateView()
	{
		getSmarty()->assign('zaklady', $this->records);  // lista rekordów z bazy danych
		getSmarty()->assign('form', $this->form); // dane formularza do widoku

		getSmarty()->assign('page_title', 'Witamy na Play Hunt - najlepszej stronie bukmacherskiej w Polsce, 
		poświęconej grze Hunt:Showdown');
		getSmarty()->assign('page_description', '
		Głosuj na swój ulubiony zespół, 
		kibicuj mu w emocjonujących starciach i poczuj dreszcz rywalizacji. 
		Kto wie - może to właśnie Twój faworyt sięgnie po zwycięstwo, a Ty zgarniesz nagrodę!');
		getSmarty()->assign('page_header', 'HUNT');
		getSmarty()->assign('page_footer', 'Wszystkie tutaj zakłady są w pełni licencjonowane i legalne.
		Zarejestruj się w dowolnym czasie i ciesz się z fantastycznej i bezpiecznej gry.<br><b>UWAGA:</b> Niniejszy projekt jest studencki i nie jest związany z żadną firmą a wszystkie zakłady, wyniki oraz waluta mają charakter fikcyjny i nie posiadają żadnej wartości materialnej.');

		getSmarty()->display('MainView.tpl');
	}
}
