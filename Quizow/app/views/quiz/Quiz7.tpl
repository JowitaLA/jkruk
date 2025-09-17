{extends file="quiz_page.tpl"}

{block name=bottom}
	{include file='messages.tpl'}
{/block}

{block name=main}

    <form method="post" action="{$conf->action_root}result7">
    <h3>Co to jest Wielki Kanion?</h3>
    <input type="radio" name="question1" value="a" checked> Najdłuższa rzeka na świecie<br>
    <input type="radio" name="question1" value="b"> Ogromny kanion w Stanach Zjednoczonych<br>
	<input type="radio" name="question1" value="c"> Najwyższa góra w Himalajach<br>
	
	<h3>Gdzie znajduje się Pustynia Sahara?</h3>
    <input type="radio" name="question2" value="a" checked> Ameryka Południowa<br>
    <input type="radio" name="question2" value="b"> Afryka Północna<br>
	<input type="radio" name="question2" value="c"> Azja Południowo-Wschodnia<br>
	
	<h3>Co to jest Wielki Barierny Rafa Koralowa?</h3>
    <input type="radio" name="question3" value="a" checked> Ogromny las deszczowy w Brazylii<br>
    <input type="radio" name="question3" value="b"> System raf koralowych u wybrzeży Australii<br>
	<input type="radio" name="question3" value="c"> Największe jezioro w Afryce<br>
	
	<h3>Które państwo leży na Półwyspie Apenińskim?</h3>
    <input type="radio" name="question4" value="a" checked> Grecja<br>
    <input type="radio" name="question4" value="b"> Włochy<br>
	<input type="radio" name="question4" value="c"> Hiszpania<br>
	
	<h3>Co to jest Amazonka?</h3>
    <input type="radio" name="question5" value="a" checked> Największa pustynia na świecie<br>
    <input type="radio" name="question5" value="b"> Najdłuższa rzeka na świecie<br>
	<input type="radio" name="question5" value="c"> Najwyższy szczyt w Afryce<br>
	
	<h3>W jakim kraju znajduje się Machu Picchu?</h3>
    <input type="radio" name="question6" value="a" checked> Meksyk<br>
    <input type="radio" name="question6" value="b"> Peru<br>
	<input type="radio" name="question6" value="c"> Kolumbia<br>
	
	<h3>Które miasto jest stolicą Japonii?</h3>
    <input type="radio" name="question7" value="a" checked> Pekin<br>
    <input type="radio" name="question7" value="b"> Tokio<br>
	<input type="radio" name="question7" value="c"> Seul<br>
	
	<h3>Gdzie znajduje się Wielki Mur Chiński?</h3>
    <input type="radio" name="question8" value="a" checked> Indie<br>
    <input type="radio" name="question8" value="b"> Chiny<br>
	<input type="radio" name="question8" value="c"> Mongolia<br>
	
	<h3>Jakie państwo leży na Półwyspie Skandynawskim?</h3>
    <input type="radio" name="question9" value="a" checked> Finlandia<br>
    <input type="radio" name="question9" value="b"> Szwecja<br>
	<input type="radio" name="question9" value="c"> Norwegia<br>
	
	<h3>Gdzie znajduje się Wielka Rafa Koralowa?</h3>
    <input type="radio" name="question10" value="a" checked> Morze Czerwone<br>
    <input type="radio" name="question10" value="b"> Ocean Indyjski<br>
	<input type="radio" name="question10" value="c"> Ocean Spokojny<br>

    <br>
    <input type="submit" value="Sprawdź wyniki">
	</form>
	
	<div id="result-container">
      <?php include '{$conf->action_root}result7'; ?>
    </div>
{/block}

