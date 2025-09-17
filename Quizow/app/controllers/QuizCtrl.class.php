<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;

class QuizCtrl {
	
    public function action_quiz1() {
			
			App::getSmarty()->assign('record','Poziom Easy');	
			App::getSmarty()->assign('quiz_name','Matematyczna Rozgrzewka');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz1.tpl');
    }
	
	public function action_quiz2() {
			
			App::getSmarty()->assign('record','Poziom Medium');	
			App::getSmarty()->assign('quiz_name','Przypomnienie do matury');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz2.tpl');
    }
	
	public function action_quiz3() {
			
			App::getSmarty()->assign('record','Poziom Hard');	
			App::getSmarty()->assign('quiz_name','Matematyka w Kosmosie');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz3.tpl');
    }
	
	public function action_quiz4() {
			
			App::getSmarty()->assign('record','Poziom Easy');	
			App::getSmarty()->assign('quiz_name','Test dla początkującego programisty');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz4.tpl');
    }
	
	public function action_quiz5() {
			
			App::getSmarty()->assign('record','Poziom Medium');	
			App::getSmarty()->assign('quiz_name','Wiedza Programisty');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz5.tpl');
    }
	
	public function action_quiz6() {
			
			App::getSmarty()->assign('record','Poziom Hard');	
			App::getSmarty()->assign('quiz_name','Doświadczony Programista');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz6.tpl');
    }
	
	public function action_quiz7() {
			
			App::getSmarty()->assign('record','Poziom Easy');	
			App::getSmarty()->assign('quiz_name','Młody Geografik');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz7.tpl');
    }
	
	public function action_quiz8() {
			
			App::getSmarty()->assign('record','Poziom Medium');	
			App::getSmarty()->assign('quiz_name','Wyzwanie Geograficzne');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz8.tpl');
    }
	
	public function action_quiz9() {
			
			App::getSmarty()->assign('record','Poziom Hard');	
			App::getSmarty()->assign('quiz_name','Globus zamiast głowy');	
            $this->generateView();
			App::getSmarty()->display('quiz/Quiz9.tpl');
    }
	
	public function action_result1() {
// Sprawdź odpowiedzi

$correctAnswers = array("b", "a", "c", "a", "a", "c", "c", "c", "c", "c"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result2() {
// Sprawdź odpowiedzi

$correctAnswers = array("a", "a", "c", "c", "c", "a", "a", "c", "a", "a"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result3() {
// Sprawdź odpowiedzi

$correctAnswers = array("b", "a", "c", "b", "a", "b", "a", "a", "c", "c"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result4() {
// Sprawdź odpowiedzi

$correctAnswers = array("b", "a", "b", "c", "a", "a", "b", "b", "c", "b"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result5() {
// Sprawdź odpowiedzi

$correctAnswers = array("c", "a", "b", "b", "b", "c", "b", "c", "a", "a"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result6() {
// Sprawdź odpowiedzi

$correctAnswers = array("b", "c", "b", "a", "a", "c", "a", "a", "b", "c"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result7() {
// Sprawdź odpowiedzi

$correctAnswers = array("b", "b", "b", "b", "b", "b", "b", "b", "b", "b"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result8() {
// Sprawdź odpowiedzi

$correctAnswers = array("a", "a", "a", "a", "a", "a", "a", "a", "a", "a"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }
	
	public function action_result9() {
// Sprawdź odpowiedzi

$correctAnswers = array("c", "c", "c", "c", "c", "c", "c", "c", "c", "c"); // Poprawne odpowiedzi

$userAnswers = array(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
	$_POST['question4'],
	$_POST['question5'],
	$_POST['question6'],
	$_POST['question7'],
	$_POST['question8'],
	$_POST['question9'],
	$_POST['question10']
);

$score = 0;

// Sprawdź wyniki
for ($i = 0; $i < count($correctAnswers); $i++) {
    if ($userAnswers[$i] == $correctAnswers[$i]) {
        $score++;
    }

}

// Wyświetl wyniki
//echo "<p>Twój wynik to: $score / " . count($correctAnswers) . "</p>";
$resultString = " " . $score . '/' . count($correctAnswers);
App::getSmarty()->assign('quiz_name','Twój wynik to');	
App::getSmarty()->assign('record',$resultString);	
App::getSmarty()->display('quiz/Result.tpl');
$this->generateView();
    }


    public function generateView() {
		App::getSmarty()->assign('page_header','Quizow');
		App::getSmarty()->assign('page_footer','autorzy strony: Marta Skowronek i Jowita Kruk PAW3');
		App::getSmarty()->assign('page_title','Quizow');
		App::getSmarty()->assign('msgs',App::getMessages()); 
    }

}
