<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $inputs = $_POST;
  $score = 0;

  if (isset($_SESSION['mathQuestions1']) && is_array($_SESSION['mathQuestions1'])) {
    $mathQuestions = $_SESSION['mathQuestions1'];

    foreach ($inputs as $name => $value) {
      $questionIndex = substr($name, 1);

      if (isset($mathQuestions[$questionIndex])) {
        $question = $mathQuestions[$questionIndex];

        if ($value === $question['correctAnswer']) {
          $score++;
        }
      }
    }

    echo '<p>Twój wynik: ' . $score . ' / ' . count($mathQuestions) . '</p>';
  } else {
    echo 'Brak pytań do wyświetlenia.';
  }
}
?>

