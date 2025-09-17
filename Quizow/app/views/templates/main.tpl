<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">

    <title>{$page_title|default:"Tytuł domyślny"}</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="{$conf->app_url}/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="{$conf->app_url}/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="{$conf->app_url}/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="{$conf->app_url}/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="{$conf->app_url}/css/style.css">
{if $hide_intro }
    <link rel="stylesheet" href="{$conf->app_url}/css/style_hide_intro.css">
{/if}
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/softscroll.js"></script>

</head>

<body style="margin: 20px;">

<div id="app_top" class="header">
    <div id="menu" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
		<a class="pure-menu-heading" href="{$conf->action_root}historyList"><b>Strona główna</b></a>
	<ul>
		<li class="pure-menu-selected"><a href="{$conf->action_root}contact" class="pure-menu-heading pure-menu-link">Kontakt</a></li>

		{if \core\RoleUtils::inRole('admin')}
			<li class="pure-menu-selected"><a href="{$conf->action_root}panelAdmin" class="pure-menu-heading pure-menu-link">Administracja</a></li>
		{/if}
		{if (\core\RoleUtils::inRole('admin')) || (\core\RoleUtils::inRole('mod'))}
			<li class="pure-menu-selected"><a href="{$conf->action_root}historyList" class="pure-menu-heading pure-menu-link">Moderacja</a></li>
		{/if}	
		{if count($conf->roles)>0}
			<li class="pure-menu-selected"><a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
		{else}	
			<li class="pure-menu-selected"><a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
		{/if}
	<ul>
</div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">{$page_title|default:"Tytuł domyślny"}</h1>
        <p class="splash-subhead">
             {$page_description|default:"Opis domyślny"}
        </p>
    </div>
</div>

<div class="content-wrapper">
	<div id="app_content" class="content">

		{block name=top} {/block}

		{block name=messages} {/block}

		{block name=bottom} {/block}
		
	</div>

	<div class="footer l-box is-center">
		<p>
			{$page_footer|default:"Domyślna treść stopki"}
		</p>

	</div>

</div>

</body>

</html>