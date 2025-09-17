{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result6">
	<h3>Co to jest wzorzec projektowy Singleton?</h3>
    <input type="radio" name="question1" value="a" checked> Metoda projektowania interfejsu użytkownika<br>
    <input type="radio" name="question1" value="b"> Wzorzec projektowy dla jednego obiektu danej klasy<br>
	<input type="radio" name="question1" value="c"> 'Algorytm sortowania danych<br>
	
	<h3>W jaki sposób działa protokół HTTP?</h3>
    <input type="radio" name="question2" value="a" checked> Protokół komunikacyjny oparty na strumieniach<br>
    <input type="radio" name="question2" value="b"> Protokół przesyłania plików<br>
	<input type="radio" name="question2" value="c"> Protokół do przesyłania danych między serwerem a klientem<br>
	
	<h3>Co to jest RESTful API?</h3>
    <input type="radio" name="question3" value="a" checked> Interfejs programowania aplikacji do obsługi plików multimedialnych<br>
    <input type="radio" name="question3" value="b"> API oparte na pryncypjach REST<br>
	<input type="radio" name="question3" value="c"> API do zarządzania zasobami systemowymi<br>
	
	<h3>W jaki sposób działa garbage collection w językach programowania?</h3>
    <input type="radio" name="question4" value="a" checked> Proces oznaczania nieużywanych obiektów<br>
    <input type="radio" name="question4" value="b"> Proces zapisywania danych na dysku<br>
	<input type="radio" name="question4" value="c"> Proces analizy błędów w kodzie<br>
	
	<h3>Co to jest SQL Injection?</h3>
    <input type="radio" name="question5" value="a" checked> Sposób na nielegalne wstrzykiwanie kodu do bazy danych<br>
    <input type="radio" name="question5" value="b"> Błąd w systemie operacyjnym<br>
	<input type="radio" name="question5" value="c"> Metoda szyfrowania danych<br>
	
	<h3>Jakie są różnice między HTTP a HTTPS?</h3>
    <input type="radio" name="question6" value="a" checked> Różne protokoły komunikacyjne<br>
    <input type="radio" name="question6" value="b"> Różne metody sortowania danych<br>
	<input type="radio" name="question6" value="c"> Różne metody zabezpieczania transmisji danych<br>
	
	<h3>Co to jest SOLID?</h3>
    <input type="radio" name="question7" value="a" checked> Skrót od nazw pięciu podstawowych koncepcji programowania obiektowego <br>
    <input type="radio" name="question7" value="b"> Nazwa firmy zajmującej się programowaniem <br>
	<input type="radio" name="question7" value="c"> Nazwa algorytmu sortującego <br>
	
	<h3>Co oznacza skrót CRUD w kontekście baz danych?</h3>
    <input type="radio" name="question8" value="a" checked> Create, Read, Update, Delete - podstawowe operacje na danych <br>
    <input type="radio" name="question8" value="b"> Skrót od nazw zmiennych w języku programowania <br>
	<input type="radio" name="question8" value="c"> Skrót od nazwy popularnej biblioteki programistycznej <br>
	
	<h3>Co to jest Docker?</h3>
    <input type="radio" name="question9" value="a" checked> System operacyjny <br>
    <input type="radio" name="question9" value="b"> Platforma do konteneryzacji aplikacji <br>
	<input type="radio" name="question9" value="c"> Nazwa języka programowania <br>
	
	<h3>W jaki sposób działa algorytm szyfrowania RSA?</h3>
    <input type="radio" name="question10" value="a" checked> Algorytm sortujący dane <br>
    <input type="radio" name="question10" value="b"> Algorytm kompresji danych <br>
	<input type="radio" name="question10" value="c"> Algorytm kryptograficzny do szyfrowania danych <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result6'; ?>
    </div>
{/block}

