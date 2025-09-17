{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result8">
    <h3>Co to jest Tadżykistan?</h3>
    <input type="radio" name="question1" value="a" checked> Państwo w Azji Środkowej<br>
    <input type="radio" name="question1" value="b"> Wulkan w Ameryce Południowej<br>
	<input type="radio" name="question1" value="c"> Rzeka w Afryce<br>

	<h3>Które państwo leży na Półwyspie Indochińskim?</h3>
    <input type="radio" name="question2" value="a" checked> Wietnam<br>
    <input type="radio" name="question2" value="b"> Indie<br>
	<input type="radio" name="question2" value="c"> Filipiny<br>

	<h3>Gdzie znajduje się archipelag Vanuatu?</h3>
    <input type="radio" name="question3" value="a" checked> Pacyfik Południowy<br>
    <input type="radio" name="question3" value="b"> Morze Śródziemne<br>
	<input type="radio" name="question3" value="c"> Ocean Indyjski<br>

	<h3>Co to jest Góra Elbrus?</h3>
    <input type="radio" name="question4" value="a" checked> Najwyższy szczyt Kaukazu<br>
    <input type="radio" name="question4" value="b"> Najwyższy szczyt Alp<br>
	<input type="radio" name="question4" value="c"> Wulkan na Nowej Zelandii<br>

	<h3>Które miasto jest najbardziej na południe na świecie?</h3>
    <input type="radio" name="question5" value="a" checked> Ushuaia, Argentyna<br>
    <input type="radio" name="question5" value="b"> Sydney, Australia<br>
	<input type="radio" name="question5" value="c"> Kaapstad, RPA<br>

	<h3>Gdzie znajduje się Morze Sargassowe?</h3>
    <input type="radio" name="question6" value="a" checked> Ocean Atlantycki<br>
    <input type="radio" name="question6" value="b"> Morze Śródziemne<br>
	<input type="radio" name="question6" value="c"> Morze Czerwone<br>

	<h3>Które państwo leży na wyspie Borneo?</h3>
    <input type="radio" name="question7" value="a" checked> Indonezja<br>
    <input type="radio" name="question7" value="b"> Filipiny<br>
	<input type="radio" name="question7" value="c"> Malezja<br>

	<h3>Co to jest Kapsztad?</h3>
    <input type="radio" name="question8" value="a" checked> Miasto w RPA<br>
    <input type="radio" name="question8" value="b"> Wyspa w Grecji<br>
	<input type="radio" name="question8" value="c"> Wyspa na Karaibach<br>

	<h3>W którym kraju znajduje się Pustynia Gobi?</h3>
    <input type="radio" name="question9" value="a" checked> Mongolia<br>
    <input type="radio" name="question9" value="b"> Chiny<br>
	<input type="radio" name="question9" value="c"> Kazachstan<br>

	<h3>Co to jest Zatoka Hudsona?</h3>
    <input type="radio" name="question10" value="a" checked> Zatoka na wschodnim wybrzeżu Kanady<br>
    <input type="radio" name="question10" value="b"> Zatoka na zachodnim wybrzeżu USA<br>
	<input type="radio" name="question10" value="c"> Zatoka na północnym wybrzeżu Rosji<br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result8'; ?>
    </div>
{/block}

