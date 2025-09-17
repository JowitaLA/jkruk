{if $msgs->isError()}
<div class="messages err">
	<ol>
	{foreach $msgs->getMessages() as $err}
	{strip}
		{$err->text}
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}
{if $msgs->isInfo()}
{/if}
