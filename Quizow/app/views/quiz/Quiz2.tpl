{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result2">
    <h3>Wzór na sumę n pierwszych liczb naturalnych to:</h3>
    <input type="radio" name="question1" value="a" checked> n(n+1)/2 <br>
    <input type="radio" name="question1" value="b"> n^2 <br>
	<input type="radio" name="question1" value="c"> 2^n <br>
	
	<h3>Ile wynosi pole koła?</h3>
    <input type="radio" name="question2" value="a" checked> π*r^2 <br>
    <input type="radio" name="question2" value="b"> π^2 <br>
	<input type="radio" name="question2" value="c"> 2*π*r <br>
	
	<h3>Co to jest szereg geometryczny?</h3>
    <input type="radio" name="question3" value="a" checked> Szereg, w którym każdy wyraz jest dodawany do poprzedniego <br>
    <input type="radio" name="question3" value="b"> Szereg, w którym każdy wyraz jest podniesiony do kwadratu <br>
	<input type="radio" name="question3" value="c"> Szereg, w którym stosunek każdego wyrazu do poprzedniego jest stały <br>
	
	<h3>Co to jest pochodna funkcji?</h3>
    <input type="radio" name="question4" value="a" checked> Stała wartość funkcji <br>
    <input type="radio" name="question4" value="b"> Pole pod krzywą funkcji <br>
	<input type="radio" name="question4" value="c"> Szybkość zmiany funkcji <br>
	
	<h3>Ile jest zer wielomianu kwadratowego (stopnia 2)?</h3>
    <input type="radio" name="question5" value="a" checked> Zero <br>
    <input type="radio" name="question5" value="b"> Jeden <br>
	<input type="radio" name="question5" value="c"> Dwa <br>
	
	<h3>Co to jest równanie różniczkowe?</h3>
    <input type="radio" name="question6" value="a" checked> Równanie opisujące zależność między funkcją a jej pochodną <br>
    <input type="radio" name="question6" value="b"> Równanie z dwiema niewiadomymi <br>
	<input type="radio" name="question6" value="c"> Równanie opisujące równowagę sił <br>
	
	<h3>Ile wynosi pierwiastek kwadratowy z liczby 25?</h3>
    <input type="radio" name="question7" value="a" checked> 5 <br>
    <input type="radio" name="question7" value="b"> 10 <br>
	<input type="radio" name="question7" value="c"> 15 <br>
	
	<h3>Jaka jest różnica między liczbą całkowitą a liczbą rzeczywistą?</h3>
    <input type="radio" name="question8" value="a" checked> Nie ma różnicy <br>
    <input type="radio" name="question8" value="b"> Liczba rzeczywista może być ujemna <br>
	<input type="radio" name="question8" value="c"> Liczba całkowita może być ujemna <br>
	
	<h3>Co to jest liczba pierwsza?</h3>
    <input type="radio" name="question9" value="a" checked> Liczba podzielna przez 1 i samą siebie <br>
    <input type="radio" name="question9" value="b"> Liczba podzielna przez 2 <br>
	<input type="radio" name="question9" value="c"> Liczba podzielna przez 3 <br>
	
	<h3>Ile wynosi suma kątów w pięciokącie?</h3>
    <input type="radio" name="question10" value="a" checked> 540 stopni <br>
    <input type="radio" name="question10" value="b"> 180 stopni <br>
	<input type="radio" name="question10" value="c"> 360 stopni <br>


    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result2'; ?>
    </div>
{/block}

