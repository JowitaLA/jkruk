{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result9">
    <h3>Co to jest teoria względności Einsteina?</h3>
    <input type="radio" name="question1" value="a" checked> Nowa gałąź matematyki<br>
    <input type="radio" name="question1" value="b"> Teoria grawitacji<br>
	<input type="radio" name="question1" value="c"> Teoria opisująca związek między czasem a przestrzenią<br>

	<h3>Jaka jest jednostka miary ilości substancji chemicznej w układzie SI?</h3>
    <input type="radio" name="question2" value="a" checked> Mola<br>
    <input type="radio" name="question2" value="b"> Gram<br>
	<input type="radio" name="question2" value="c"> Kilomola<br>

	<h3>Która z poniższych cząsteczek jest uważana za nośnik energii w komórkach?</h3>
    <input type="radio" name="question3" value="a" checked> Elektron<br>
    <input type="radio" name="question3" value="b"> Proton<br>
	<input type="radio" name="question3" value="c"> Adenozynotrifosforan (ATP)<br>

	<h3>Jaka jest prędkość światła w próżni?</h3>
    <input type="radio" name="question4" value="a" checked> 300,000 km/h<br>
    <input type="radio" name="question4" value="b"> 150,000 km/s<br>
	<input type="radio" name="question4" value="c"> Około 299,792 km/s<br>

	<h3>Co oznacza skrót DNA?</h3>
    <input type="radio" name="question5" value="a" checked> Deoksyrybonukleinowy kwas<br>
    <input type="radio" name="question5" value="b"> Dwutlenek azotu<br>
	<input type="radio" name="question5" value="c"> Kwas deoksyrybonukleinowy<br>

	<h3>Jaka jest główna funkcja mitochondriów w komórkach?</h3>
    <input type="radio" name="question6" value="a" checked> Magazynowanie węglowodanów<br>
    <input type="radio" name="question6" value="b"> Produkcja białek<br>
	<input type="radio" name="question6" value="c"> Produkcja energii w postaci ATP<br>

	<h3>Które z poniższych zjawisk jest związane z mechaniką kwantową?</h3>
    <input type="radio" name="question7" value="a" checked> Prawo powszechnego ciążenia<br>
    <input type="radio" name="question7" value="b"> Zasada nieoznaczoności Heisenberga<br>
	<input type="radio" name="question7" value="c"> Prawo Archimedesa<br>

	<h3>Jaka jest jednostka oporu elektrycznego?</h3>
    <input type="radio" name="question8" value="a" checked> Farad<br>
    <input type="radio" name="question8" value="b"> Henry<br>
	<input type="radio" name="question8" value="c"> Ohm<br>

	<h3>Co to jest równanie E=mc^2?</h3>
    <input type="radio" name="question9" value="a" checked> Równanie matematyczne opisujące ruch planet<br>
    <input type="radio" name="question9" value="b"> Równanie na prędkość światła<br>
	<input type="radio" name="question9" value="c"> Równanie teorii względności Einsteina<br>

	<h3>Która z planet słonecznych ma największą masę?</h3>
    <input type="radio" name="question10" value="a" checked> Mars<br>
    <input type="radio" name="question10" value="b"> Jowisz<br>
	<input type="radio" name="question10" value="c"> Saturn<br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result9'; ?>
    </div>
{/block}

