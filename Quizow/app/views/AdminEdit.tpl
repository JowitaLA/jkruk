{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}losowanieSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div>
            <input id="id" type="hidden" name="id" value="{$form->id}">
        </div>
		<div class="pure-control-group">
            <label for="login">login</label>
            <input id="login" type="text" placeholder="login" name="login" value="{$form->login}">
        </div>
		<div class="pure-control-group">
            <label for="haslo">nazwisko</label>
            <input id="haslo" type="text" placeholder="haslo" name="haslo" value="{$form->haslo}">
        </div>
		<div class="pure-control-group">
            <label for="plec">data ur.</label>
            <input id="plec" type="text" placeholder="plec" name="plec" value="{$form->plec}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
		</div>
	</fieldset>
</form>	
</div>

{/block}
