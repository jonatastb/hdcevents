<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--TITULO--}}
        <title>@yield('title')</title>

        {{--ICONE--}}
        <link rel="icon" type="image/png" href="/img/icon.png" />    
        
        {{--GOOGLE FONTS--}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

        {{--GOOGLE ICONES--}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        {{--CSS da aplicação--}}
        <link rel="stylesheet" type="text/css" href="/css/mainStyle.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        {{--CSS PERSONALIZADO--}}
        @yield('style')
       
    </head>
    <body>
        @if(session('msg'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('msg')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div id="mySidebar" class="sidebar">
            <div class="div-interna">
                <a href="/" class="link-especial">
                    <img src="/img/icon.png">
                    <span class="icon-text">
                        <span>Astro</span>Events
                    </span>
                </a>
                <a href="/">
                    <i class="material-icons">home</i>
                    <span class="icon-text">INICIO</span>
                </a>
                <a aria-current="page" href="/events/events">
                    <i class="material-icons">list_alt</i>
                    <span class="icon-text">EVENTOS</span>
                </a>
                <a aria-current="page" href="/events/new">
                    <i class="material-icons">add_box</i>
                    <span class="icon-text">NOVO EVENTO</span>
                </a>
                <a href="#">
                    <i class="material-icons">account_circle</i>
                    <span class="icon-text">MINHA CONTA</span>
                </a>
            </div>
        </div>
        <div id="main">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    </body>
</html>
