<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Metas-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Panel de administración">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Panel de administración') }}</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>

<body>
<nav>
    @if( Auth::check() )
        <!--Menú de navegación-->
            <ul class="nav justify-content-center mt-5">
                <li class="nav-item me-5">
                    <form method="POST" action="{{ route('salir') }}">
                        @csrf
                        <button class="btn btn-primary" type="submit" onclick="$(this).closest('form').submit()" title="Salir">Salir</button>
                    </form>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary" title="Portoflio">
                        <a href="{{ url('admin/proyectos') }}" class="text-light text-decoration-none">Proyectos</a>
                    </button>

                </li>
            </ul>
        @endif
</nav>
<!-- Mensajes  -->
@include('admin.partials.mensajes')
<main class="container text-center mt-5 w-100">
    <section class="container-fluid">
        <!--Content-->
        @yield('content')
    </section>
</main>

</body>

<!--Scripts-->
<script src="{{ asset('js/admin.js') }}" defer></script>

</html>
