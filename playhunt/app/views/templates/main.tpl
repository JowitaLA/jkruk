<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/logo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{$page_description|default:"Opis domyślny"}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Play Hunt</title>

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

<body>

  <div id="menu" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
    <a class="pure-menu-heading" href="{$conf->action_url}showMain">  <img src="img/logo.png" alt="Logo" class="menu-logo"> <b>Play Hunt</b></a>
    <ul>
      {if count($conf->roles)>0}
        <li class="pure-menu-selected"><a class="pure-menu-selected" href="{$conf->action_url}logout">Wyloguj</a></li>
        <li class="pure-menu-selected"><a class="pure-menu-selected" href="{$conf->action_url}account">Moje Konto</a></li>
        {if $conf->roles['admin']}
          <li class="pure-menu-selected"><a class="pure-menu-selected" href="{$conf->action_url}options">Zarządzanie</a></li>
        {/if}
      {else}
        <li class="pure-menu-selected"><a class="pure-menu-selected" href="{$conf->action_url}logout">Logowanie</a></li>
      {/if}
      <li class="pure-menu-selected"><a class="pure-menu-selected" href="{$conf->action_url}contact">Kontakt</a></li>
      <li class="pure-menu-selected"><a class="pure-menu-selected" href="https://www.huntshowdown.com/">Główna strona
          gry</a></li>
    </ul>
  </div>

  <audio id="backgroundMusic" autoplay loop>
    <source src="lib/music.mp3" type="audio/mpeg">
  </audio>



  <div class="splash-container">
  <video class="smoke" autoplay loop muted playsinline>
    <source src="img/smoke.mp4" type="video/mp4">
  </video>
    <div class="cutout"></div>
    <div class="splash">
      <h1 class="splash-head">{$page_title|default:"Tytuł domyślny"}</h1>
      <p class="splash-subhead">
        {$page_description|default:"Opis domyślny"}
      </p>
      {if count($conf->roles)==0}
        <p>
          <a href="{$conf->action_url}login" class="logowanie">Dołącz do nas już teraz!</a>
        </p>
      {/if}
    </div>
  </div>

  <div class="content-wrapper">

    <div id="app_content" class="content">
      <button id="musicButton" style="display: none;">⏸️</button>

      {block name=content} Domyślna treść zawartości {/block}

    </div>

    <div class="footer l-box is-center">
      <p>
        {$page_footer|default:"Domyślna treść stopki"}
      </p>

    </div>

  </div>
  <script>
    const cutout = document.querySelector('.cutout');
    document.addEventListener('mousemove', (e) => {
      const w = window.innerWidth;
      const h = window.innerHeight;
      const xRotation = ((e.clientY / h) - 0.5) * 5;
      const yRotation = ((e.clientX / w) - 0.5) * -5;
      cutout.style.transform = 'rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)';
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const music = document.getElementById("backgroundMusic");
      const button = document.getElementById("musicButton");

      if (!music || !music.canPlayType) return;
      button.style.display = "block";

      // Odtwarzanie od zapamiętanego czasu
      const savedTime = localStorage.getItem("musicTime");
      if (savedTime) {
        music.currentTime = parseFloat(savedTime);
      }

      if (localStorage.getItem("musicPlaying") === "true") {
        music.play();
        button.textContent = "⏸️";
      }

      // Zapisywanie aktualnego czasu odtwarzania co 1 sek.
      setInterval(() => {
        if (!music.paused) {
          localStorage.setItem("musicTime", music.currentTime);
        }
      }, 1000);

      // Obsługa przycisku
      button.addEventListener("click", function() {
        if (music.paused) {
          music.play();
          button.textContent = "⏸️";
          localStorage.setItem("musicPlaying", "true");
        } else {
          music.pause();
          button.textContent = "🎵";
          localStorage.setItem("musicPlaying", "false");
        }
      });

      // Odtwarzanie po pierwszym kliknięciu, jeśli autoplay jest zablokowany
      document.body.addEventListener("click", function() {
        if (music.paused) {
          music.play();
          localStorage.setItem("musicPlaying", "true");
        }
      }, { once: true });
    });
  </script>

</body>

</html>