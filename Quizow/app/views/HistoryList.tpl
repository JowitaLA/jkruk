{extends file="main.tpl"}

{block name=top}

<center>
<legend style="color:white">Chcesz uzyskać pełny dostęp? Zaloguj się albo zarejestruj.</legend>
<div>
	<p>
        <a href="{$conf->action_root}userNew" class="idz">Rejestracja</a>
		<a href="{$conf->action_root}loginShow" class="idz">Logowanie</a>
    </p>
</div>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}historyList">
	<legend style="color:white">Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" id="myInput" onkeyup="searchTable()" placeholder="Wyszukaj interesujący Cię Quiz" style="width: 500px;">
	</fieldset>
</form>
</div>	
</center>

{/block}

{block name=bottom}

<br>
<center>
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>NAZWA QUIZU</th>
		<th>POZIOM TRUDNOŚCI</th>
		<th>KATEGORIA</th>
		<th>TAGI</th>
		<th>OPCJE</th>
	</tr>
</thead>
<tbody>
{strip}
	<tr>
		<td>Matematyczna Rozgrzewka</td>
		<td>Easy</td>
		<td>Matematyka</td>
		<td>mat</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz1" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Przypomnienie do matury</td>
		<td>Medium</td>
		<td>Matematyka</td>
		<td>mat</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz2" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Matematyka w Kosmosie</td>
		<td>Hard</td>
		<td>Matematyka</td>
		<td>mat</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz3" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Test dla początkującego programisty</td>
		<td>Easy</td>
		<td>Informatyka</td>
		<td>inf</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz4" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Wiedza Programisty</td>
		<td>Medium</td>
		<td>Informatyka</td>
		<td>inf</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz5" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Doświadczony Programista</td>
		<td>Hard</td>
		<td>Informatyka</td>
		<td>inf</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz6" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Młody Geografik</td>
		<td>Easy</td>
		<td>Geografia</td>
		<td>geo</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz7" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Wyzwanie Geograficzne</td>
		<td>Medium</td>
		<td>Geografia</td>
		<td>geo</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz8" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	<tr>
		<td>Globus zamiast głowy</td>
		<td>Hard</td>
		<td>Geografia</td>
		<td>geo</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}quiz9" style="background-color: #171644;">Przejdź do Quizu</a>
		</td>
	</tr>
	
	
{/strip}
</tbody>
</table><br>

<script>
    function searchTable() {
        // Pobierz wartość wprowadzoną przez użytkownika
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tab_people");
        tr = table.getElementsByTagName("tr");

        // Przejdź przez wszystkie wiersze tabeli
        for (i = 0; i < tr.length; i++) {
            // Przejdź przez wszystkie komórki w bieżącym wierszu
            td = tr[i].getElementsByTagName("td");
            for (var j = 0; j < td.length; j++) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    // Jeśli znaleziono dopasowanie, pokaż wiersz
                    tr[i].style.display = "";
                    break; // przerwij pętlę, gdy znaleziono dopasowanie
                } else {
                    // Jeśli nie znaleziono dopasowania, ukryj wiersz
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</center>
{include file='messages.tpl'}
{/block}
