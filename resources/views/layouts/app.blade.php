<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--Metas-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Proyecto Final Daw">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Proyecto Final Daw') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    @php $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" @endphp
<body>
    <!--HEADER-->
    <header>
        <!--MENU-->
        <nav class="navbar navbar-expand-lg">
            <div class="container justify-content-center fs-4 pb-3">
                <div class="row align-items-center text-center contenedornav">
                    <!--SVG MENU
                    <div class="position-absolute svgheader">
                        {{ Html::image('img/header/svgnav.svg') }}
                    </div>-->
                    <!--LOGO-->
                    <div class="col-lg-3">
                        <div class="logo">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                {{ Html::image('img/mordecai.jpeg', 'Logo Pablohg',['class'=>'imagenlogo']) }}                Pablo_hg
                            </a>
                        </div>
                    </div>
                    <!--PESTAÑAS-->
                    <div class="col-lg-6">
                        <div class="collapse navbar-collapse nav justify-content-center" id="navbarNavDropdown">
                            <ul class="navbar-nav text-uppercase fw-bold menu">
                                <li class="nav-item">
                                    <a class="nav-link px-2 @if( $link==route('home') ) activo @endif" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item mx-4">
                                    <a class="nav-link px-2 @if( $link==route('portfolio') ) activo @endif" href="{{ route('portfolio') }}">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 @if( $link==route('roadmap') ) activo @endif" href="{{ route('roadmap') }}">Roadmap</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--CONTACTO-->
                    <div class="col-lg-3">
                        <a href="{{ route('contact') }}" class="bt-contact text-uppercase border border-white py-1 px-3">contact</a>
                    </div>
                    <!--BOTON RESPONSIVE-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
            </div>
        </nav>
        <!--PRE-MAIN-->
        <section>
            <!--CAMBIAR DEPENDIENDO DE LA PESTAÑA-->
            <div class="container">
                <!--PRESENTACION-->
                <div class="row align-items-center justify-content-center pt-5 titulo">
                    @switch($link)
                        @case($link==route('home')) <!--HOME-->
                            <div class="fullstack">
                                <h1 class="fw-bold text-white">Hi, I’m Pablo FullStack Developer</h1>
                            </div>
                            <!--LOGO-->
                            <div class="col-lg-3">
                                {{ Html::image('img/mordecai.jpeg', 'Logo Pablohg',['class'=>'logogrande']) }}
                            </div>
                            @break
                        @case($link==route('portfolio')) <!--PORTFOLIO-->
                        <div class="fullstack text-white fw-bold text-center">
                            <h1 class="fw-bold">FullStack developer portfolio</h1>
                            <p class="fs-5">From Web Components and UI/UX animations to React.JS, Redux, Vue.JS, and Node.JS.
                                Check out my latest web software development portfolio projects.
                            </p>
                        </div>
                            @break
                        @case($link==route('roadmap')) <!--ROADMAP-->
                        <div class="fullstack">
                            <h1 class="fw-bold text-white">roadmap</h1>
                        </div>
                            @break
                    @endswitch
                </div>
                <!--SVGS-->
                <div class="svgs">
                    {{ Html::image('img/header/Vector.png', 'svg base',['class'=>'svgbase position-absolute']) }}
                    {{ Html::image('img/header/Vector-1.png', 'svg izquierda ola',['class'=>'svgizq position-absolute']) }}
                    {{ Html::image('img/header/Vector-2.png', 'svg derecha ola',['class'=>'svgdere position-absolute']) }}
                </div>
            </div>
        </section>
    </header>
    <!--MAIN-->
    <main>
        <section class="main text-center" id="listado">
        <!--Content-->
        @yield('content')
        </section>
    </main>
    <!--FOOTER-->
    <footer>
        <div class="container">
            <div class="position-relative d-flex flex-column">
                <!--INFO-->
                <div class="container-fluid">
                    <!--LOGO-->
                    <div class="row justify-content-center py-5">
                        {{ Html::image('img/mordecai.jpeg', 'Logo Pablohg',['style'=>'width:10rem']) }}
                    </div>
                    <!--REDES-->
                    <div class="row justify-content-center">
                        <!--CORREO-->
                        <a href="mailto:phghorcajada@gmail.com" target="_blank" class="bt-redes text-center pt-3 mx-3" id="red">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </a>
                        <!--GITHUB-->
                        <a href="https://github.com/Pablo-hg" target="_blank" class="bt-redes text-center pt-3 mx-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                        </a>
                        <!--LINKEDIN-->
                        <a href="https://www.linkedin.com/in/pablo-horcajada-gonz%C3%A1lez-ba2897169/" target="_blank" class="bt-redes text-center pt-3 mx-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>
                    </div>
                    <!--HERRAMIENTAS-->
                    <div class="row justify-content-center my-5 text-white opacity-75">
                        <br> Made with
                        {{ Html::image('img/footer/logolaravel.png', 'Logo laravel',['class'=>'logolaravel mt-2 ms-2']) }}
                        {{ Html::image('img/footer/logoboostrap.png', 'Logo boostrap',['class'=>'logoboostrap mt-3']) }}
                    </div>
                    <!--COPY-->
                    <div class="row justify-content-center pb-4 text-white opacity-50">
                        Copyright © 2022 Pablohg • Madrid based Front-End & Back-End Developer
                    </div>
                </div>
                <!--PREFOOTER-->
                <div class="row position-absolute prefooter align-items-center justify-content-center">
                    <div class="col-lg-3 text-white fs-2 fw-bold text-center ">
                        Start a project
                    </div>
                    <div class="col-lg-4 text-white fs-5 text-center mx-5">
                        Interested in working together? We should meet to chat. I’ll buy the coffee.
                    </div>
                    <div class="col-lg-3 fs-3 text-center">
                        <a href="#"  class="bt-contact2 border border-info  mt-4 px-4 py-2">
                            Let’s do this
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- script para el filtrador -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</html>
