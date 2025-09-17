{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}rejestracjaSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend style="color:white">Rejestracja</legend>
		<div>
            <input id="id" type="hidden" name="id" value="{$form->id}">
        </div>
		<div class="pure-control-group">
            <label for="login" style="color:white">Login: </label>
            <input id="login" type="text" placeholder="Wpisz login" name="login" style="width: 500px;" value="{$form->login}">
        </div>
		<div class="pure-control-group">
            <label for="haslo" style="color:white">Hasło: </label>
            <input id="haslo" type="password" placeholder="Wpisz hasło" name="haslo" style="width: 500px;" value="{$form->haslo}">
        </div>
		<div class="pure-control-group">
            <label for="haslo2" style="color:white">Powtórz hasło: </label>
            <input id="haslo2" type="password" placeholder="Wpisz ponownie hasło" name="haslo2" style="width: 500px;" value="{$form->haslo2}">
        </div>
		<div class="pure-control-group">
            <label for="plec" style="color:white">Płeć: </label>
            <input id="plec" type="text" placeholder="Wpisz płeć" name="plec" style="width: 500px;" value="{$form->plec}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zarejestruj" style="background-color: #171644; width: 150px;"/>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>
{include file='messages.tpl'}
{/block}
