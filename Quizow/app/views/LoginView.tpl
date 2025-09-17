{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend style="color:white">Logowanie</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login" style="color:white">Login: </label>
			<input id="id_login" type="text" name="login" placeholder="Wpisz login" style="width: 500px;" value="{$form->login}"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass" style="color:white">Hasło: </label>
			<input id="id_pass" type="password" name="pass" placeholder="Wpisz hasło" style="width: 500px;" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary" style="background-color: #171644; width: 150px;"/>
		</div>
	</fieldset>
</form>	
{include file='messages.tpl'}
{/block}

