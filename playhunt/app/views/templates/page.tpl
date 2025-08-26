<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/logo.png" type="image/png">

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
{if $hide_intro }
    <link rel="stylesheet" href="{$conf->app_url}/css/stylepage_hide_intro.css">
{/if}
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/softscroll.js"></script>
</head>
<body>
<audio id="backgroundMusic" loop>
  <source src="lib/music.mp3" type="audio/mpeg">
</audio>

<button id="musicButton" style="display: none;">⏸️</button>

    <div id="menu" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
			<a class="pure-menu-heading" href="{$conf->action_url}showMain"><b>Strona główna</a><ul>
			
			{if count($conf->roles)>0}
				<li class="pure-menu-selected"><a href="{$conf->action_url}logout">Wyloguj</a></li>
			{else}	
				<li class="pure-menu-selected"><a href="{$conf->action_url}logout">Logowanie</a></li>
			{/if}
			<li class="pure-menu-selected"><a href="{$conf->action_url}options">Opcje</a></li>
			<li class="pure-menu-selected"><a href="{$conf->action_url}contact">Kontakt</a></li>	
      <li class="pure-menu-selected"><a href="https://www.huntshowdown.com/">Główna strona gry</a></li>	
        </ul>
    </div>



<div class="splash-container">
    <div id="app_content" class="content">
{block name=content} Domyślna treść zawartości {/block}
</div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const music = document.getElementById("backgroundMusic");
  const button = document.getElementById("musicButton");

  if (!music || !music.canPlayType) return; // Jeśli przeglądarka nie obsługuje audio, nic nie pokazujemy

  button.style.display = "block"; // Pokazujemy przycisk, jeśli audio działa

  // Sprawdź, czy muzyka była odtwarzana przed przejściem na inną stronę
  if (localStorage.getItem("musicPlaying") === "true") {
    music.play();
    button.textContent = "⏸️";
  }

  // Obsługa przycisku
  button.addEventListener("click", function () {
    if (music.paused) {
      music.play();
      button.textContent = "⏸️";
      localStorage.setItem("musicPlaying", "true"); // Zapisz stan w localStorage
    } else {
      music.pause();
      button.textContent = "🎵";
      localStorage.setItem("musicPlaying", "false"); // Zapisz stan w localStorage
    }
  });

  // Jeśli przeglądarka blokuje autoplay, odtwarzamy po pierwszym kliknięciu
  document.body.addEventListener("click", function () {
    if (music.paused) {
      music.play();
      localStorage.setItem("musicPlaying", "true");
    }
  }, { once: true });
});
</script>

</body>
</html>