<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--TITULO--}}
        <title>@yield('title')</title>

        {{--ICONE--}}
        <link rel="icon" type="image/png" href="/img/icon.png" />

        {{--BOOTSTRAP 5.3.2--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        {{--GOOGLE FONTS--}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">        

        {{--CSS da aplicação--}}
        <link rel="stylesheet" type="text/css" href="/css/stylesMain.css" />
       
    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <span class="nomeSite"><span>ASTRO</span>EVENTS</span>
                        <img src="/img/icon.png" alt="Logo site">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <div class="navbar-nav w-100 d-flex justify-content-evenly mb-2 mb-lg-0">
                            <div class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/events">Eventos</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/events/create">Criar Eventos</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Entrar</a>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Cadastrar</a>
                            </div>
                        </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')


        
        {{--JS BOOTSTRAP--}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
