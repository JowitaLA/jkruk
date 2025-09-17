{extends file="main.tpl"}

{block name=top}

<center>
<legend style="color:white"><b>PANEL MODERATORA</b></legend>
{/block}

{block name=bottom}
<br>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>ID</th>
		<th>LOGIN</th>
		<th>HASŁO</th>
		<th>PŁEĆ</th>
	</tr>
</thead>
<tbody>
{foreach $losowanie as $l}
{strip}
	<tr>
		<td>{$l["ID_user"]}</td>
		<td>{$l["login"]}</td>
		<td>{$l["haslo"]}</td>
		<td>{$l["plec"]}</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
</center>
{include file='messages.tpl'}
{/block}