<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Witaj w Auto Serwis Patryk Czogała!" />
    <meta name="generator" content="Auto serwis Patryk Czogała - Twoje zaufane miejsce na naprawę i serwis samochodowy." />
    <meta name="keywords" content="Auto Serwis, Patryk Czogała, Wypożyczalnia, Serwis samochodowy, Mechanik" />

    <meta
            name="author"
            content="Auto Serwis Patryk Czogała"
    />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png ') }}">

    <title>
        @hasSection('title')
            @yield('title') - Auto Serwis Patryk Czogała
        @else
            Auto Serwis Patryk Czogała
        @endif
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    
    @vite (['resources/css/app.css'])
    
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- Brand wyśrodkowany -->
                <a class="navbar-brand mx-auto" href="#">Centered nav</a>

                <!-- Hamburger dla mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu i button -->
                <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                    <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                    </li>
                </ul>

                <!-- Button po prawej -->
                <div class="ms-auto">
                    <button class="btn btn-primary">Button</button>
                </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <div class="container">
            @yield('content')
        </div>
        <hr>
        <h2>Latest News</h2>
        <p>Check out our latest updates and offers!</p>
    </main>

    <footer class="dark bg-dark text-center text-white py-3">
        <p>&copy; {{ date('Y') }} Auto Serwis Patryk Czogała. Wszystkie prawa zastrzeżone.</p>
    </footer>

    @vite (['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body> 

</html>