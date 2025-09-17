{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result4">
    <h3>Co to jest zmienna w programowaniu?</h3>
    <input type="radio" name="question1" value="a" checked> Instrukcja warunkowa<br>
    <input type="radio" name="question1" value="b"> Miejsce przechowywania danych<br>
	<input type="radio" name="question1" value="c"> Funkcja matematyczna<br>
	
	<h3>Co oznacza skrót HTML?</h3>
    <input type="radio" name="question2" value="a" checked> HyperText Markup Language<br>
    <input type="radio" name="question2" value="b"> High-Level Text Mode Language<br>
	<input type="radio" name="question2" value="c"> Home Tool Markup Language<br>
	
	<h3>W którym języku programowania używa się nawiasów klamrowych {} do oznaczania bloków kodu?</h3>
    <input type="radio" name="question3" value="a" checked> Python<br>
    <input type="radio" name="question3" value="b"> Java<br>
	<input type="radio" name="question3" value="c"> C++<br>
	
	<h3>Co to jest pętla w programowaniu?</h3>
    <input type="radio" name="question4" value="a" checked> Element interfejsu użytkownika<br>
    <input type="radio" name="question4" value="b"> Instrukcja warunkowa<br>
	<input type="radio" name="question4" value="c"> Fragment kodu powtarzający się wielokrotnie<br>
	
	<h3>Jakie są podstawowe typy danych w języku programowania Python?</h3>
    <input type="radio" name="question5" value="a" checked> Integer, Float, String, Boolean<br>
    <input type="radio" name="question5" value="b"> Array, Object, String, Null<br>
	<input type="radio" name="question5" value="c"> Int, Char, String, Boolean<br>
	
	<h3>Co oznacza skrót API?</h3>
    <input type="radio" name="question6" value="a" checked> Application Programming Interface<br>
    <input type="radio" name="question6" value="b"> Automated Programming Instruction<br>
	<input type="radio" name="question6" value="c"> Advanced Programming Interface<br>
	
	<h3>W jaki sposób można skomentować kod w języku programowania JavaScript?</h3>
    <input type="radio" name="question7" value="a" checked> /* To jest komentarz */ <br>
    <input type="radio" name="question7" value="b"> // To jest komentarz <br>
	<input type="radio" name="question7" value="c"> # To jest komentarz <br>
	
	<h3>Co to jest Git?</h3>
    <input type="radio" name="question8" value="a" checked> Rodzaj bazy danych <br>
    <input type="radio" name="question8" value="b"> System kontroli wersji <br>
	<input type="radio" name="question8" value="c"> Edytor tekstu <br>
	
	<h3>W jaki sposób deklarujemy zmienną w języku programowania Java?</h3>
    <input type="radio" name="question9" value="a" checked> $var name; <br>
    <input type="radio" name="question9" value="b"> declare name; <br>
	<input type="radio" name="question9" value="c"> int name; <br>
	
	<h3>Co to jest algorytm?</h3>
    <input type="radio" name="question10" value="a" checked> Rodzaj bazy danych <br>
    <input type="radio" name="question10" value="b"> Sekwencja instrukcji rozwiązująca problem <br>
	<input type="radio" name="question10" value="c"> Język programowania <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result4'; ?>
    </div>
{/block}

