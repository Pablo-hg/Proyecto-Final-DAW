@extends('layouts.app')

@section('content')

    <div class="container bg-transparent segunda">
        <div class="row align-items-center justify-content-center titulo">
            <div class="text-center mt-5 col-sm-9">
                <h2 class="fw-bold text-white">My roadmap</h2>
            </div>
        </div>
    </div>
    <!--<div class="container off" id="dibujo">
        <button onclick="hola()" id="swicht">Hola</button>
        <div class="circulo1"></div>
        <div class="circulo2"></div>
    </div>-->
    <div class="container" id="roadmap">
    </div>

    <!-- script para el filtrador -->
    <script src="{{ asset('js/roadmap.js') }}"></script>

@endsection
