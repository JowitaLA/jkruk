<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="portfolio.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/mainView.css">

    <div class="custom-menu-wrapper">
          <div class="pure-menu custom-menu custom-menu-top">
              <a href="#" class="pure-menu-heading custom-menu-brand">Brand</a>
              <a href="#" class="custom-menu-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
          </div>
          <div class="pure-menu pure-menu-horizontal pure-menu-scrollable custom-menu custom-menu-bottom custom-menu-tucked" id="tuckedMenu">
              <div class="custom-menu-screen"></div>
              <ul class="pure-menu-list">
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Blog</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">GitHub</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Twitter</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Apple</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Google</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Wang</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Yahoo</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">W3C</a></li>
              </ul>
          </div>
      </div>
      <script>
      (function (window, document) {
      document.getElementById('toggle').addEventListener('click', function (e) {
          document.getElementById('tuckedMenu').classList.toggle('custom-menu-tucked');
          document.getElementById('toggle').classList.toggle('x');
      });
      })(this, this.document);
      </script>
</head>
<body>
    <div class="banner" id="top">
        <h1 class="banner-head no-select">
            {$banner}
        </h1>
    </div>
    <div>

    <div class="language-switcher" style="text-align: center; margin-top: 20px;">
        <a href="?lang=pl" class="pure-button pure-button-primary">Zmień język na Polski</a>
        <a href="?lang=en" class="pure-button pure-button-primary">Change language to English</a>
    </div>
        <h1>Jak wyglądają moje prace? Poniżej przedstawiam kilka z nich:</h1>
    </div>
    <div class="content">
        <section id="strony-internetowe">
            <div class="golden-rectangle">
                {$websites_title}
            </div>
            <div>
            <p style="text-align: center;">Najedź na wybrany kafelek by zobaczyć tytuł i opis strony, bądź kliknij w niego by przejść do strony</p>
            </div>
            <div class="projects-container">
                <div class="project" id="playhunt">
                    <div class="project-title">{$web_title_playhunt}</div>
                    <div class="project-description"> {$web_description_playhunt}
                    </div>
                </div>
            
                <div class="project">
                    <div class="project-title">{$web_title_quizow}</div>
                    <div class="project-description">{$web_description_quizow}</div>
                </div>

                <div class="project">
                    <div class="project-title">{$web_title_monwiz}</div>
                    <div class="project-description">{$web_description_monwiz}</div>
                </div>
            </div>
        </section>

        <section id="aplikacje-mobilne">
            <div class="golden-rectangle">
                {$apps_title}
            </div>

            <div class="projects-container">

            <div class="project">
                    <div class="project-title">Tytuł</div>
                    <div class="project-description">Opis aplikacji mobilnej</div>
            </div>

            </div>
        </section>

        <section id="prace-graficzne">
            <div class="golden-rectangle">
                {$graphics_title}
            </div>

            <div class="projects-container">

            <div class="project">
                    <div class="project-title">Tytuł</div>
                    <div class="project-description">Opis grafiki</div>
            </div>
            

            </div>
        </section>
    </div>

    <div id="buttons-container" class="buttons-hidden">
        <a href="#top" class="button">^</a>
        <a href="#strony-internetowe" class="button">{$websites}</a>
        <a href="#aplikacje-mobilne" class="button">{$apps}</a>
        <a href="#prace-graficzne" class="button">{$graphics}</a>
    </div>

    <div class="footer l-box">
        <p>
            {$contact}:<br>
            <a href='https://www.facebook.com/Ylorus/?locale=pl_PL'>Facebook</a>
        </p>
    </div>
    
    <script src="/js/mainView.js"></script>
</body>
</html>
