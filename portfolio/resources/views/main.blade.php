@extends('templates.main')
@section('content')

<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase" data-aos="slide-down" data-aos-delay="100">Jowita Kruk</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5" data-aos="slide-up" data-aos-delay="100">Projektant stron
                    internetowych i prostych grafik.</h2>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container px-4 px-lg-5">
        <h2 class="text-white mb-4">O mnie</h2>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-5 mb-4" data-aos="fade-right" data-aos-delay="100">
                <img class="img-fluid custom-img mb-4" src="{{ asset('img/photo.jpg') }}" alt="..." />
            </div>
            <div class="col-lg-7 mb-4" data-aos="fade-left" data-aos-delay="100">
                <p class="text-white-50 mb-4 text-start">
                    Od najmłodszych lat pasjonuję się informatyką i nowymi technologiami.
                    Moja przygoda z komputerami zaczęła się od wspólnego grania z rodzeństwem, jednak prawdziwa
                    fascynacja rozpoczęła się w dniu moich 16 urodzin, kiedy otrzymałam pieniądze na swój pierwszy
                    komputer.
                    Z pomocą kuzyna dobrałam odpowiednie podzespoły, a następnie samodzielnie go złożyłam i
                    skonfigurowałam, co miało duży wpływ na moje zainteresowanie technologią.
                </p>
                <p class="text-white-50 mb-4 text-start">
                    Kilka lat później, chcąc ulepszyć wspólną rozgrywkę w Minecraft, zaczęłam uczyć się JavaScriptu, by
                    tworzyć i edytować pluginy.
                    Z czasem to właśnie programowanie stało się moją pasją, a dalsza edukacja tylko ją pogłębiła.
                    W liceum, na rozszerzonej informatyce, zaczęłam naukę języka C++, co okazało się niezwykle pomocne
                    na studiach informatycznych.
                    Tam miałam okazję pracować z różnymi językami programowania, będąc często na poziomie osób z
                    technikum, mających do czynienia z nimi wcześniej.
                    Największą satysfakcję sprawiało mi jednak tworzenie stron internetowych sprawiając, że poszłam na
                    kierunek z tym związany.
                </p>
                <p class="text-white-50 text-start mb-0">
                    Jestem osobą kreatywną, otwartą na rozwój i nowe wyzwania, co również towarzyszyło mi od
                    najmłodszych lat.
                    Technologia nieustannie się zmienia, dlatego chętnie poszerzam swoje umiejętności, w tym również
                    uczę się coraz to popularniejszych frameworków.
                    Mam doświadczenie w zarządzaniu projektami oraz organizacji pracy, przez co efektywniej realizuję
                    powierzone mi zadania.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects -->
<section class="projects-section" id="projects">

    <h3 class="text-white text-center mb-4">Strony internetowe</h3>
    <div id="webs" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <img class="img-fluid-border mb-3 mb-lg-0"
                            src="{{ asset ('img/webs/Monwiz.png') }}" alt="Monwiz" />
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Monwiz</h4>
                            <p class="text-white-50">
                                Monwiz to pixel-artowa gra RPG stworzona w frameworku Phaser jako moja praca
                                inżynierska.
                                Gracz wciela się w poszukiwacza przygód, eksplorując tajemniczy świat fantasy pełen
                                wyzwań.
                                W trakcie podróży spotyka NPC-ów, którzy mogą zlecać zadania zależne od jego poziomu,
                                oraz stawia czoła licznym wyzwaniom i walkom.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <a href="https://monwiz.5v.pl/" class="btn btn-primary" role="button">Sprawdź tymczasową stronę (przenoszenie)</a>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <img class="img-fluid-border mb-3 mb-lg-0" src="{{ asset ('img/webs/Yups.png') }}"
                            alt="Yups" />
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Yups</h4>
                            <p class="text-white-50">
                                YUPS! to autorski sklep internetowy, w którym wykorzystałam swoje umiejętności w
                                Bootstrapie. Stworzyłam go od podstaw, zapewniając pełną funkcjonalność-od logowania i
                                płatności przez tPay, po zarządzanie zamówieniami, listami życzeń oraz danymi klientów.
                                System umożliwia także śledzenie statusów, takich jak liczba zamówień czy rejestracji,
                                oraz przeglądanie historii zakupów.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <a href="https://sklep-yups.pl" class="btn btn-primary" role="button">Sprawdź stronę</a>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <img class="img-fluid-border mb-3 mb-lg-0"
                            src="{{ asset ('img/webs/PlayHunt.png') }}" alt="PlayHunt" />
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">PlayHunt</h4>
                            <p class="text-white-50">
                                Playhunt to fikcyjna strona bukmacherska oparta na grze Hunt: Showdown, umożliwiająca
                                obstawianie wyników wirtualnych „walk”.
                                Powstała jako mój pierwszy projekt webowy na studiach, który później nieco
                                udoskonaliłam.
                                Po rejestracji użytkownik otrzymuje fikcyjną walutę, którą może wykorzystać do stawiania
                                zakładów.
                                Po zakończeniu wydarzenia i ogłoszeniu wyników, gracze, którzy poprawnie wytypowali
                                zwycięzców, otrzymują dodatkowe żetony do dalszej gry.
                                Strona została napisana w PHP z wykorzystaniem bibliotek Smarty i Medoo, a jej wygląd
                                oparto na lekkim i responsywnym Pure.css.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <button class="btn btn-primary" id="submitButton" type="submit">W trakcie przenoszenia</button>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <img class="img-fluid-border mb-3 mb-lg-0"
                            src="{{ asset ('img/webs/Quizow.png') }}" alt="Quizow" />
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Quizow</h4>
                            <p class="text-white-50">
                                Quizow to strona internetowa stworzona z myślą o gromadzeniu testów z różnych dziedzin
                                wiedzy.
                                Jest ona jednym z projektów, który został napisany na studiach.
                                Użytkownicy mogą sprawdzać swoją wiedzę, rozwiązując quizy tematyczne, które obejmują
                                szeroki zakres kategori - od nauk ścisłych po kulturę i rozrywkę.
                                Strona umożliwia także śledzenie wyników, analizę poprawnych i błędnych odpowiedzi oraz
                                rywalizację z innymi użytkownikami, z którymi można sprawdzić wynik i czas wykonanego
                                quizu, gdzie liczy się tylko ,,pierwsze przejście".
                                Strona została napisana w PHP z wykorzystaniem bibliotek Smarty i Medoo, a jej wygląd
                                oparto na lekkim i responsywnym Pure.css.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <button class="btn btn-primary" id="submitButton" type="submit">W trakcie przenoszenia</button>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <img class="img-fluid-border mb-3 mb-lg-0"
                            src="{{ asset ('img/webs/KreatorMenu.png') }}" alt="Quizow" />
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Kreator Menu</h4>
                            <p class="text-white-50">
                                Projekt ten został stworzony przeze mnie w ciągu dwóch dni i ma na celu ułatwienie właścicielom 
                                restauracji w grze GTA RP tworzenie własnego menu bez konieczności ingerencji w kod. Całość oparta 
                                jest na jednym pliku HTML, co sprawia, że osoby niezaznajomione z programowaniem mogą z łatwością uruchomić 
                                kreator, a właściciele serwerów nie muszą martwić się o dodatkowe hostowanie.
                                <br>Kreator umożliwia dodawanie, edytowanie oraz usuwanie kategorii, dań, napojów i ich cen. 
                                Dodatkowo pozwala na generowanie gotowego kodu do wklejenia w plikach gry. 
                                Dla większej wygody i bezpieczeństwa przewidziano również lokalne zapisywanie postępu, 
                                co chroni przed utratą danych w przypadku przypadkowego zamknięcia kreatora.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <a href="{{ asset('downloads/Kreator_Menu.html') }}" class="btn btn-primary" download>Pobierz</a>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>
        </div>

        <!-- Strzałki nawigacyjne -->
        <button class="carousel-control-prev" type="button" data-bs-target="#webs" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Poprzedni</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#webs" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Następny</span>
        </button>
    </div>

    <h3 class="text-white text-center mb-4">Aplikacje mobilne</h3>
    <div id="apps" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <img class="rotate img-fluid-border mb-3 mb-lg-0"
                            src="{{ asset ('img/apps/NoPhoto.png') }}" alt="NoPhoto" />
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Brak widoku</h4>
                            <p class="text-white-50">
                                W tym momencie jestem podczas edycji mojej aplikacji mobilnej. Pojawi
                                się tu wkrótce.
                            </p>
                        </div>
                        {{-- <div class="text-center mt-4 margines" style="margin-left: 4rem;">
                            <button class="btn btn-primary" id="submitButton" type="submit">Sprawdź stronę</button>
                        </div> --}}
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>
        </div>

        <!-- Strzałki nawigacyjne -->
        <button class="carousel-control-prev" type="button" data-bs-target="#apps" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Poprzedni</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#apps" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Następny</span>
        </button>
    </div>

    <h3 class="text-white text-center mb-4">Projekty graficzne</h3>
    <div id="design" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="ratio ratio-16x9 mb-3 mb-lg-0 d-block mx-auto" style="width:90%">
                            <iframe class="img-fluid-border d-block mx-auto"
                                src="https://www.youtube.com/embed/-spCV1uaTNg" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">OneLife</h4>
                            <p class="text-white-50">
                                Projekt, nad którym spędziłam sporo czasu, głównie z powodu ręcznego stworzenia napisu
                                oraz dodania neonowej poświaty. Napis został zaprezentowany w kilku wariantach: jako GIF
                                na czarnym tle, plik WebP bez tła oraz ikona 128x128 w tych samych wersjach. Tworzenie
                                napisów odbyło się w programie Krita, a całe nagranie zostało zrealizowane w DaVinci
                                Resolve, gdzie dodano tło, w tym muzykę, odgłosy miasta oraz efekt dymu.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <p class="text-secondary">(Kliknij w logo by powiększyć)</p>

                            <!-- Miniatury obrazków -->
                            <img src="{{ asset('img/graphics/Onelife/1L.webp') }}" alt="OneLife Logo Main"
                                class="img-fluid" style="width: auto; height: 5rem; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#modal1L">

                            <img src="{{ asset('img/graphics/Onelife/1Lmain.webp') }}" alt="OneLife Logo"
                                class="img-fluid" style="width: auto; height: 5rem; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#modal1Lmain">
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <!-- Klikalne zdjęcie -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-6">
                                <img class="img-graphic-border mb-3 mb-lg-0"
                                    src="{{ asset('img/graphics/NocSwietojanska/NocSwietojanska.png') }}"
                                    alt="NocSwietojanska" data-bs-toggle="modal" data-bs-target="#Plakat1" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-6">
                                <img class="img-graphic-border mb-3 mb-lg-0"
                                    src="{{ asset('img/graphics/NocSwietojanska/NocSwietojanskaV2.png') }}"
                                    alt="NocSwietojanska" data-bs-toggle="modal" data-bs-target="#Plakat2" />
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Plakat "Noc Świętojańska"</h4>
                            <p class="text-white-50">
                                Plakat został stworzony w Canvie, a sama rozmowa z klientką miała kluczowy wpływ na
                                ostateczny wygląd projektu. Dzięki jej cennym sugestiom, plakat przeszedł kilka
                                metamorfoz. Opracowane zostały różne warianty, a finalnie wybrany został ten, który
                                najlepiej odpowiadał jej oczekiwaniom i wizji.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <p class="text-secondary">(Kliknij w plakat by powiększyć)</p>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <!-- Klikalne zdjęcie -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-6">
                                <img class="img-graphic-border mb-3 mb-lg-0"
                                    src="{{ asset('img/graphics/ReklamaLatowicz/UlotkaLatowicz1.png') }}"
                                    alt="UlotkaLatowicz" data-bs-toggle="modal" data-bs-target="#Ulotka1" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-6">
                                <img class="img-graphic-border mb-3 mb-lg-0"
                                    src="{{ asset('img/graphics/ReklamaLatowicz/UlotkaLatowicz2.png') }}"
                                    alt="UlotkaLatowicz" data-bs-toggle="modal" data-bs-target="#Ulotka2" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Ulotka wyborcza</h4>
                            <p class="text-white-50">
                                Ulotka zaprojektowana w Canvie dla kandydatów na radców gminy Latowicz. Po konsultacjach
                                z klientami, ulotka została stworzona w taki sposób, aby pomieścić dużą ilość tekstu,
                                kolorystycznie pasować do wizerunku kandydatów oraz charakteryzować się nowoczesnym i
                                prostym designem. Ze względu na to, że każda ulotka dla kandydatów została
                                zaprezentowana w ten sam sposób, przedstawiona jest jedna z nich.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <p class="text-secondary">(Kliknij w obraz by powiększyć)</p>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center m-4">
                    <div class="col-xl-1 col-lg-1"></div>
                    <div class="col-xl-5 col-lg-5">
                        <!-- Klikalne zdjęcie -->
                        <img class="img-fluid-border mb-3 mb-lg-0"
                            src="{{ asset('img/graphics/ReklamaLatowicz/BanerLatowicz.png') }}"
                            alt="BanerLatowicz" data-bs-toggle="modal" data-bs-target="#BanerLatowicz" />
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex flex-column">
                        <div class="featured-text text-center">
                            <h4 class="text-white">Baner wyborczy</h4>
                            <p class="text-white-50">
                                Baner zaprojektowany w Canvie dla kandydatów na radców gminy Latowicz.
                            </p>
                        </div>
                        <div class="text-center mt-4 margines">
                            <p class="text-secondary">(Kliknij w obraz by powiększyć)</p>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1"></div>
                </div>
            </div>

            <!-- MODALE -->

            <!-- Modal dla 1L.webp -->
            <div class="modal fade" id="modal1L" tabindex="-1" aria-labelledby="modal1LLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-0">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('img/graphics/Onelife/1L.webp') }}" class="img-fluid"
                                alt="OneLife Logo Main">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal dla 1Lmain.webp -->
            <div class="modal fade" id="modal1Lmain" tabindex="-1" aria-labelledby="modal1LmainLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-0">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('img/graphics/Onelife/1Lmain.webp') }}" class="img-fluid"
                                alt="OneLife Logo">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal dla Plakat1 -->
            <div class="modal fade" id="Plakat1" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-0">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('img/graphics/NocSwietojanska/NocSwietojanska.png') }}"
                                class="img-fluid" alt="NocSwietojanska" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal dla Plakat2 -->
            <div class="modal fade" id="Plakat2" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-0">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('img/graphics/NocSwietojanska/NocSwietojanskaV2.png') }}"
                                class="img-fluid" alt="NocSwietojanska" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal dla Ulotka1 -->
            <div class="modal fade" id="Ulotka1" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-0">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('/img/graphics/ReklamaLatowicz/UlotkaLatowicz1.png') }}"
                                class="img-fluid" alt="UlotkaLatowicz" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal dla Ulotka2 -->
            <div class="modal fade" id="Ulotka2" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-0">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('img/graphics/ReklamaLatowicz/UlotkaLatowicz2.png') }}"
                                class="img-fluid" alt="UlotkaLatowicz" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal dla BanerLatowicz -->
            <div class="modal fade" id="BanerLatowicz" tabindex="-1" aria-labelledby="imageModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark border-0">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="{{ asset('img/graphics/ReklamaLatowicz/BanerLatowicz.png') }}"
                                class="img-fluid" alt="BanerLatowicz" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Strzałki nawigacyjne -->
        <button class="carousel-control-prev" type="button" data-bs-target="#design" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Poprzedni</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#design" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Następny</span>
        </button>
    </div>

    {{--
    <!-- Project One Row-->
    <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
        <h2 class="text-white text-center mb-4">Aplikacje mobilne</h2>
        <div class="col-lg-6"><img class="img-fluid" src="{{ asset ('img/ipad.png') }}" alt="..." /></div>
        <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
                <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-left">
                        <h4 class="text-white">Misty</h4>
                        <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything
                            else, along with a description.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Two Row-->
    <div class="row gx-0 justify-content-center">
        <div class="col-lg-6"><img class="img-fluid" src="{{ asset ('img/ipad.png') }}" alt="..." /></div>
        <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
                <div class="d-flex h-100">
                    <div class="project-text w-100 my-auto text-center text-lg-right">
                        <h4 class="text-white">Mountains</h4>
                        <p class="mb-0 text-white-50">Another example of a project with its respective description.
                            These sections work well responsively as well!</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    </div>
</section>

<!-- Signup-->
<section class="signup-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Chcesz zadać mi pytanie?</h2>

                <form class="form-signup" method="POST" id="contactForm">
                    <!-- Pytanie -->
                    <div class="row input-group-newsletter">
                        <div class="col-12 mb-2">
                            <textarea
                                class="form-control custom-textarea"
                                id="question"
                                name="question"
                                placeholder="Zadaj pytanie..."
                                aria-label="Zadaj pytanie..."
                                required
                            ></textarea>
                        </div>

                        <!-- Email -->
                        <div class="col">
                            <input
                                class="form-control"
                                id="emailAddress"
                                name="emailAddress"
                                type="email"
                                placeholder="Wpisz e-mail..."
                                aria-label="Wpisz e-mail..."
                                required
                            />
                        </div>

                        <!-- Przycisk -->
                        <div class="col-auto">
                            <button class="btn btn-primary" id="submitButton" type="submit">
                                Wyślij
                            </button>
                        </div>
                    </div>

                    <!-- Komunikat sukcesu -->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3 text-white">
                            <div class="fw-bolder">
                                <i class="fas fa-heart text-primary"></i> Dziękuję za wiadomość <i class="fas fa-heart text-primary"></i>
                            </div>
                            Spróbuję odpowiedzieć jak najszybciej.
                        </div>
                    </div>

                    <!-- Komunikat błędu -->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3 mt-2">
                            <div class="fw-bolder">
                                <i class="fas fa-heart-crack text-primary"></i> Wystąpił błąd na stronie <i class="fas fa-heart-crack text-primary"></i>
                            </div>
                            Przepraszam za problemy — napisz bezpośrednio na maila.
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Adres</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50"><a class="no-underline"
                                href="https://maps.app.goo.gl/jem5HepJgDEMiASf7">Dąbrowa Górnicza</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50"><a class="no-underline"
                                href="mailto:JowitaLA01@gmail.com">JowitaLA01@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fab fa-github text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Github</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50"><a class="no-underline"
                                href="https://github.com/JowitaLA">JowitaLA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="social d-flex justify-content-center">

            <a class="mx-2" href="https://facebook.com/Ylorus"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/JowitaLA"><i class="fab fa-github"></i></a>
        </div> --}}
    </div>
</section>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Zatrzymaj domyślne wysyłanie formularza
    
    var formData = new FormData(this);

    // Dodaj token CSRF do nagłówków
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    fetch('/send-mail', { // Zmieniamy na nasz testowy endpoint
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken  // Dodaj token CSRF w nagłówkach
        },
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        // Jeśli wiadomość wysłana poprawnie
        if (data.message === 'Email wysłany!') {
            document.getElementById('submitSuccessMessage').classList.remove('d-none');
            document.getElementById('submitErrorMessage').classList.add('d-none');
        } else {
            document.getElementById('submitErrorMessage').classList.remove('d-none');
            document.getElementById('submitSuccessMessage').classList.add('d-none');
        }
    })
    .catch(error => {
        // Obsługuje błąd, jeśli nie udało się wysłać
        document.getElementById('submitErrorMessage').classList.remove('d-none');
        document.getElementById('submitSuccessMessage').classList.add('d-none');
    });
});
</script>

@endsection