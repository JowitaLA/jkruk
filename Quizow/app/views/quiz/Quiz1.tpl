{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result1">
    <h3>Jaki jest wynik mnożenia 245 i 17?</h3>
    <input type="radio" name="question1" value="a" checked> 5025 <br>
    <input type="radio" name="question1" value="b"> 4165 <br>
	<input type="radio" name="question1" value="c"> 8180 <br>

    <h3>Jaki jest pierwiastek kwadratowy z liczby 144?</h3>
    <input type="radio" name="question2" value="a" checked> 12 <br> 
    <input type="radio" name="question2" value="b"> 14 <br>
	<input type="radio" name="question2" value="c"> 16 <br>

    <h3>Jaki jest wynik równania: 2x + 5 = 15?</h3>
    <input type="radio" name="question3" value="a" checked> 4 <br>
    <input type="radio" name="question3" value="b"> 3 <br>
	<input type="radio" name="question3" value="c"> 5 <br>
	
	<h3>Ile wynosi suma kątów wewnętrznych trójkąta?</h3>
    <input type="radio" name="question4" value="a" checked> 180 stopni <br>
    <input type="radio" name="question4" value="b"> 360 stopni <br>
	<input type="radio" name="question4" value="c"> 90 stopni <br>
	
	<h3>Jaka jest wartość sinusa kąta 30 stopni?</h3>
    <input type="radio" name="question5" value="a" checked> 0.5 <br> 
    <input type="radio" name="question5" value="b"> -0.25 <br>
	<input type="radio" name="question5" value="c"> 0.15 <br>
	
	<h3>Oblicz pole prostokąta o bokach długości 8 i 12.</h3>
    <input type="radio" name="question6" value="a" checked> 40 <br>
    <input type="radio" name="question6" value="b"> 20 <br>
	<input type="radio" name="question6" value="c"> 96 <br>
	
	<h3>Jaką ma wartość liczba π (pi) zaokrąglona do dwóch miejsc po przecinku?</h3>
    <input type="radio" name="question7" value="a" checked> 3,12 <br>
    <input type="radio" name="question7" value="b"> 3,15 <br>
	<input type="radio" name="question7" value="c"> 3,14 <br>
	
	<h3>Jaki jest wynik nierówności: 3x - 7 > 10?</h3>
    <input type="radio" name="question8" value="a" checked> x > 17 <br>
    <input type="radio" name="question8" value="b"> x > 3/17 <br>
	<input type="radio" name="question8" value="c"> x > 17/3 <br>
	
	<h3>Ile wynosi 3 do potęgi 4?</h3>
    <input type="radio" name="question9" value="a" checked> 12 <br>
    <input type="radio" name="question9" value="b"> 133 <br>
	<input type="radio" name="question9" value="c"> 81 <br>
	
	<h3>Jeśli cena towaru wynosi 120 złotych, a podatek VAT wynosi 23%, to ile wyniesie cena towaru po doliczeniu podatku?</h3>
    <input type="radio" name="question10" value="a" checked> 27,6 <br>
    <input type="radio" name="question10" value="b"> 92,4 <br>
	<input type="radio" name="question10" value="c"> 147.6 <br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result1'; ?>
    </div>
{/block}

