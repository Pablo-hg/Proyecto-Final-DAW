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
        <!--<link href="{asset ('css/app.css')}" rel="stylesheet">-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    {{ Html::image('img/mordecai.jpeg', 'Logo Pablohg',['class'=>'imagenlogo']) }}                Pablo_hg
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('projects') }}" id="navbarDropdown">
                            Projects
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Webs</a></li>
                            <li><a class="dropdown-item" href="#">Games</a></li>
                            <li><a class="dropdown-item" href="#">Apps</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('roadmap') }}">Roadmap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <header>
            <h1>Mi primer CMS</h1>
            <h2>con Laravel</h2>
        </header>
        <section class="container-fluid">
        <!--Content-->
        @yield('content')
        </section>
    </main>

    <footer>
        <div class="container-fluid">
            Copyright © <?php echo date("Y") ?> pablohg.com • Full Stack, FrontEnd and BackEnd developer
        </div>
    </footer>
</body>
    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <!-- Firebase -->
</html>
