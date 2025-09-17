{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result5">
    <h3>Co to jest "scope" (zasięg) zmiennej w programowaniu?</h3>
    <input type="radio" name="question1" value="a" checked> Wartość zmiennej<br>
    <input type="radio" name="question1" value="b"> Typ danych zmiennej<br>
	<input type="radio" name="question1" value="c"> Obszar, w którym zmienna jest dostępna<br>
	
	<h3>Co oznacza skrót OOP w kontekście programowania?</h3>
    <input type="radio" name="question2" value="a" checked> Object-Oriented Programming<br>
    <input type="radio" name="question2" value="b"> Object-Oriented Processing<br>
	<input type="radio" name="question2" value="c"> Object-Oriented Protocol<br>
	
	<h3>W jaki sposób definiujemy funkcję w języku programowania Python?</h3>
    <input type="radio" name="question3" value="a" checked> function nazwa() { }<br>
    <input type="radio" name="question3" value="b"> def nazwa():<br>
	<input type="radio" name="question3" value="c"> function nazwa():<br>
	
	<h3>Co to jest "refaktoring"?</h3>
    <input type="radio" name="question4" value="a" checked> Proces poprawiania błędów w kodzie<br>
    <input type="radio" name="question4" value="b"> Proces przekształcania istniejącego kodu bez zmiany jego funkcjonalności<br>
	<input type="radio" name="question4" value="c"> Proces kompilacji kodu<br>
	
	<h3>W jaki sposób działa instrukcja warunkowa "switch" w języku programowania?</h3>
    <input type="radio" name="question5" value="a" checked> Porównuje dwie wartości pod kątem równości<br>
    <input type="radio" name="question5" value="b"> Wykonuje różne bloki kodu w zależności od wartości wyrażenia<br>
	<input type="radio" name="question5" value="c"> Wykonuje pętlę określoną ilość razy<br>
	
	<h3>Co to jest struktura danych "kolejka"?</h3>
    <input type="radio" name="question6" value="a" checked> Struktura danych przechowująca klucze i wartości<br>
    <input type="radio" name="question6" value="b"> Struktura danych przechowująca elementy w kolejności LIFO<br>
	<input type="radio" name="question6" value="c"> Struktura danych przechowująca elementy w kolejności FIFO<br>
	
	<h3>W jaki sposób obsługuje się błędy w języku programowania PHP?</h3>
    <input type="radio" name="question7" value="a" checked> Instrukcją warunkową "if" <br>
    <input type="radio" name="question7" value="b"> Instrukcją warunkową "try-catch" <br>
	<input type="radio" name="question7" value="c"> Instrukcją warunkową "switch" <br>
	
	<h3>Co to jest "API key"?</h3>
    <input type="radio" name="question8" value="a" checked> Unikalny identyfikator dla interfejsu użytkownika <br>
    <input type="radio" name="question8" value="b"> Klucz dostępu do programu antywirusowego <br>
	<input type="radio" name="question8" value="c"> Klucz autoryzacyjny do korzystania z usługi API <br>
	
	<h3>W jaki sposób deklarujemy stałą (const) w języku programowania JavaScript?</h3>
    <input type="radio" name="question9" value="a" checked> const NAME; <br>
    <input type="radio" name="question9" value="b"> constant NAME; <br>
	<input type="radio" name="question9" value="c"> var NAME; <br>
	
	<h3>Co to jest "dependency injection"?</h3>
    <input type="radio" name="question10" value="a" checked> Proces wstrzykiwania zależności do kodu <br>
    <input type="radio" name="question10" value="b"> Proces usuwania zbędnych zależności <br>
	<input type="radio" name="question10" value="c"> Proces przekształcania kodu na zależny <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result5'; ?>
    </div>
{/block}

