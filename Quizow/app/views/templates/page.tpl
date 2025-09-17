<!DOCTYPE HTML>
<html lang="pl">

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

    <link rel="stylesheet" href="{$conf->app_url}/css/stylepage.css">
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/softscroll.js"></script>
</head>

<body style="margin: 20px;">

<body>

<div id="app_top" class="header">
    <div id="menu" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
		<a class="pure-menu-heading" href="{$conf->action_root}historyList"><b>Strona główna</b></a>
	<ul>
		<li class="pure-menu-selected"><a href="{$conf->action_root}contact" class="pure-menu-heading pure-menu-link">Kontakt</a></li>

		{if \core\RoleUtils::inRole('admin')}
			<li class="pure-menu-selected"><a href="{$conf->action_root}panelAdmin" class="pure-menu-heading pure-menu-link">Administracja</a></li>
		{/if}
		{if (\core\RoleUtils::inRole('admin')) || (\core\RoleUtils::inRole('mod'))}
			<li class="pure-menu-selected"><a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Moderacja</a></li>
		{/if}	
		{if count($conf->roles)>0}
			<li class="pure-menu-selected"><a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
		{else}	
			<li class="pure-menu-selected"><a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
		{/if}
	<ul>
</div>

 <div id="main">
        <div class="header">
            <h1>Kontakt</h1>
            <h2>Zapraszamy do pomocy przy tworzeniu Quizow!</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Discord</h2>
            <p>
                Dołącz na nasz Discord klikając <font color="#D8BFD8"><a href="https://discord.pl" alt="Side Menu CSS">TUTAJ</a></font>!
            </p>

            <h2 class="content-subhead">E-mail</h2>
            <p>
                Nie masz Discorda? W takim razie zapraszamy do kontaktu poprzez maila:<font color="#6A5ACD">Quizow@gmail.com</font>
            </p>

            <h2 class="content-subhead">Telefon</h2>
            <p>
                Nadal brakuje ci możliwości kontaktu? Napisz lub zadzwoń do nas na numer <font color="#B22222"> +48739019231
            </p>
        </div>
    </div>
	
	
</div>

<script src="/js/ui.js"></script>
	
<div class="content">

		<div id="app_content" class="content">

		{block name=top} {/block}

		{block name=messages} {/block}

		{block name=bottom} {/block}
		
	</div>

	<div class="footer l-box is-center">
		<p>
			Autorzy strony: Marta Skowronek i Jowita Kruk PAW3
		</p>

	</div>

</div>

</body>
</html>