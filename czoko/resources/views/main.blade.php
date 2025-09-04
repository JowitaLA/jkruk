@extends('layouts.main')

@section('title', 'Strona główna')

@section('navigation')
<div class="container rounded px-5">
    <a class="navbar-brand d-flex align-items-center" href="#page-top">
        <img class="icon" src="{{ asset('favicon.png') }}" alt="Logo">
        Auto Serwis Patryk Czogała
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi-list"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto me-3 my-3 my-lg-0">
            <li class="nav-item glow fw-bold"><a class="nav-link me-lg-3" href="#offers">Usługi</a></li>
            <li class="nav-item glow fw-bold"><a class="nav-link me-lg-3" href="#about">O&nbsp;nas</a></li>
            <li class="nav-item glow fw-bold"><a class="nav-link me-lg-3" href="#contact">Kontakt</a></li>
        </ul>

        <button class="ms-auto me-2 btn btn-primary glow rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
            data-bs-target="#feedbackModal">
            <span class="d-flex align-items-center">
                <i class="fa fa-wrench me-2"></i>
                <span class="small">Serwis</span>
            </span>
        </button>

        <button class="btn btn-secondary glow rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
            data-bs-target="#feedbackModal">
            <span class="d-flex align-items-center">
                <i class="fa fa-car me-2"></i>
                <span class="small">Wypożyczalnia</span>
            </span>
        </button>
    </div>
</div>
@endsection

@section('header')
<header class="head masthead" id="offers">
    <h2 class="trapezoid-title">Wybierz interesującą Cię usługę</h2>
    <!-- Lewa część -->
    <div class="video-box left desktop-only">
        <a href="/service">
            <div class="video-wrapper">
                <video class="main" muted loop preload="metadata" poster="{{ asset('main/service.png') }}">
                    <source src="{{ asset('main/service_chrome.mp4') }}" type="video/mp4">
                </video>

                <video class="smoke" muted loop preload="metadata">
                    <source src="{{ asset('main/smoke.mp4') }}" type="video/mp4">
                </video>

                <div class="overlay">Warsztat mechaniczny</div>
            </div>
        </a>
    </div>
    <div class="line"></div>
    <!-- Prawa część -->
    <div class="video-box right desktop-only">
        <a href="/rent">
            <div class="video-wrapper">
                <video class="main" muted loop preload="metadata" poster="{{ asset('main/rent.png') }}">
                    <source src="{{ asset('main/rent_chrome.mp4') }}" type="video/mp4">
                </video>

                <video class="smoke" muted loop preload="metadata">
                    <source src="{{ asset('main/smoke.mp4') }}" type="video/mp4">
                </video>

                <div class="overlay">Wypożyczalnia aut</div>
            </div>
        </a>
    </div>

    <!-- Mobile (od razu wideo bez posteru) -->
    <div class="video-box left mobile-only">
        <a href="/service">
            <div class="video-wrapper">
                <video class="main" autoplay muted loop preload="metadata">
                    <source src="{{ asset('main/service_chrome.mp4') }}" type="video/mp4">
                </video>
                <div class="overlay">Warsztat mechaniczny</div>
            </div>
        </a>
    </div>

    <div class="video-box left mobile-only">
        <a href="/rent">
            <div class="video-wrapper">
                <video class="main" autoplay muted loop preload="metadata">
                    <source src="{{ asset('main/rent_chrome.mp4') }}" type="video/mp4">
                </video>
                <div class="overlay">Wypożyczalnia aut</div>
            </div>
        </a>
    </div>

</header>
@endsection


@section('content')
<div class="container bg-about" id="about">
    <div class="trapezoid-title text-center">
        <h2>Dlaczego my?</h2>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row w-100">
        <div class="col-md-6">
            <h2 class="bg-title-about mb-3 mt-2">O nas</h2>
            <p class="bg-description-about">
                Nasz serwis jest miejscem, gdzie pasja do motoryzacji spotyka się z profesjonalizmem i zaangażowaniem. 
                Dbamy o każdy detal, aby zapewnić Twojemu pojazdowi najwyższą jakość obsługi. 
                Oferujemy kompleksowe usługi serwisowe, od rutynowych przeglądów po skomplikowane naprawy, 
                zawsze z myślą o bezpieczeństwie i satysfakcji naszych klientów. Wybierając nasz warsztat, wybierasz pewność, 
                że Twój samochód jest w najlepszych rękach.
            </p>
        </div>
        <div class="col-md-6">
            <script defer async src='https://cdn.trustindex.io/loader.js?10dbaf35349c267530763afae8f'></script>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="trapezoid-title text-center" id="contact">
        <h2 class="text-center">Kontakt</h2>
    </div>
    <div class="container text-light">
        Znajdziesz nas tutaj:
        <style>
            /* włącz tylko w trybie ciemnym systemu */
            @media (prefers-color-scheme: dark) {
                .gmap_canvas iframe {
                    filter: invert(0.9) hue-rotate(180deg) brightness(0.95) contrast(0.9) saturate(0.8);
                    transition: filter .2s ease;
                }
            }
        </style>

        <div class="mt-5 gmap_canvas">
            <iframe class="rounded" width="500" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Auto%20Serwis%20Patryk%20Czoga%C5%82a&t=&z=15&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"></iframe>
        </div>

        <p class="mt-3">Auto Serwis Patryk Czogała<br>
            ul. Wodzisławska 41, 44-200 Rybnik<br>
            NIP: 642-248-79-29<br>
            REGON: 387439524<br>
            <br>
            Telefon: <a href="tel:+48792330303" class="text-light">+48 792 330 303</a><br>
            E-mail: <a href="mailto:mail@co.com" class="text-light">mail@co.com</a><br>


    </div>
</div>
@endsection