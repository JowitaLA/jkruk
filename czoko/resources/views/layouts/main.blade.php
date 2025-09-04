<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Witaj w Auto Serwis Patryk Czogała!" />
    <meta name="generator" content="Auto serwis Patryk Czogała - Twoje zaufane miejsce na naprawę i serwis samochodowy." />
    <meta name="keywords" content="Auto Serwis, Patryk Czogała, Wypożyczalnia, Serwis samochodowy, Mechanik" />
    <meta name="author" content="Auto Serwis Patryk Czogała" />

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png ') }}">

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    <title>
        @hasSection('title')
            @yield('title') - Auto Serwis Patryk Czogała
        @else
            Auto Serwis Patryk Czogała
        @endif
    </title>

    <!-- CSS -->
    @vite(['resources/js/main.js', 'resources/css/main.css'])
    
</head>


<body class="bg-dark" id="page-top">
    <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top shadow-sm" id="mainNav">
                @yield('navigation')
        </nav>
    <main>
        @yield('header')
        
        @yield('content')
    </main>

    <footer class="dark bg-dark text-center text-white py-3">
        <p>&copy; {{ date('Y') }} Auto Serwis Patryk Czogała. Wszystkie prawa zastrzeżone.</p>
    </footer>
</body> 

</html>