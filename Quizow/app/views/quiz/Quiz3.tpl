{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result3">
    <h3>Co to jest twierdzenie Fermata?</h3>
    <input type="radio" name="question1" value="a" checked> Twierdzenie mówiące o pierwiastkach równań kwadratowych <br>
    <input type="radio" name="question1" value="b"> Twierdzenie mówiące o niewymierności sumy sześcianów <br>
	<input type="radio" name="question1" value="c"> Twierdzenie mówiące o nieskończoności liczb pierwszych <br>
	
	<h3>Co to jest funkcja Ackermanna?</h3>
    <input type="radio" name="question2" value="a" checked> Funkcja opisująca złożoność obliczeniową <br>
    <input type="radio" name="question2" value="b"> Funkcja opisująca zależność między dwoma liczbami całkowitymi <br>
	<input type="radio" name="question2" value="c"> Funkcja opisująca wzrost populacji <br>
	
	<h3>Co to jest liczba zespolona?</h3>
    <input type="radio" name="question3" value="a" checked> Liczba podzielna przez zero <br>
    <input type="radio" name="question3" value="b"> Liczba rzeczywista większa od zera <br>
	<input type="radio" name="question3" value="c"> Liczba z dwiema częściami: rzeczywistą i urojoną <br>
	
	<h3>Co to jest hipoteza Riemanna?</h3>
    <input type="radio" name="question4" value="a" checked> Hipoteza dotycząca równań nieliniowych <br>
    <input type="radio" name="question4" value="b"> Hipoteza dotycząca rozmieszczenia liczb pierwszych <br>
	<input type="radio" name="question4" value="c"> Hipoteza dotycząca funkcji kwadratowej <br>
	
	<h3>Co to jest równanie różniczkowe cząstkowe?</h3>
    <input type="radio" name="question5" value="a" checked> Równanie opisujące funkcję wielu zmiennych <br>
    <input type="radio" name="question5" value="b"> Równanie opisujące zmiany w czasie <br>
	<input type="radio" name="question5" value="c"> Równanie z dwiema niewiadomymi <br>
	
	<h3>Co to jest szereg Fouriera?</h3>
    <input type="radio" name="question6" value="a" checked> Szereg opisujący sumę liczb pierwszych <br>
    <input type="radio" name="question6" value="b"> Szereg matematyczny opisujący funkcje okresowe <br>
	<input type="radio" name="question6" value="c"> Szereg związany z geometrią algebraiczną <br>
	
	<h3>Co to jest teoria mnogości?</h3>
    <input type="radio" name="question7" value="a" checked> Teoria opisująca ilość elementów w zbiorach <br>
    <input type="radio" name="question7" value="b"> Teoria dotycząca liczby pierwszej <br>
	<input type="radio" name="question7" value="c"> Teoria opisująca równania algebraiczne <br>
	
	<h3>Co to jest paradoks Banacha-Tarskiego?</h3>
    <input type="radio" name="question8" value="a" checked> Paradoks związany z teorią mnogości <br>
    <input type="radio" name="question8" value="b"> Paradoks dotyczący równań nieliniowych <br>
	<input type="radio" name="question8" value="c"> Paradoks opisujący ruch ciał niebieskich <br>
	
	<h3>Co to jest nierówność Cauchy\'ego-Schwarza?</h3>
    <input type="radio" name="question9" value="a" checked> Nierówność opisująca pierwiastki równań kwadratowych <br>
    <input type="radio" name="question9" value="b"> Nierówność dotycząca funkcji kwadratowej <br>
	<input type="radio" name="question9" value="c"> Nierówność związana z analizą matematyczną <br>
	
	<h3>Co to jest krzywa eliptyczna?</h3>
    <input type="radio" name="question10" value="a" checked> Krzywa opisująca ruch planet <br>
    <input type="radio" name="question10" value="b"> Krzywa związana z równaniami nieliniowymi <br>
	<input type="radio" name="question10" value="c"> Krzywa opisująca zmiany temperatury <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result3'; ?>
    </div>
{/block}

