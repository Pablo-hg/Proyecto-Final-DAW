@extends('layouts.app')

@section('content')

    @php
        $nombrefiltros = ['Front-end','Back-end','Html5','Css3','Javascript','Java',"C",'Php','Mysql','React','Laravel','Bootstrap','Unity','Figma','Android','Videogame','Materialize','Tailwind','Firebase','Playfab'];
        $filtrarpor = ['FRONT-END','BACK-END','HTML5','CSS3','JAVASCRIPT','JAVA',"C#",'PHP','MYSQL','REACT','LARAVEL','BOOTSTRAP','UNITY','FIGMA','ANDROID','VIDEOGAME','MATERIALIZE','TAILWIND','FIREBASE','PLAYFAB'];
        $_SESSION['enlaces'] = [];
    @endphp

    <div class="container bg-transparent segunda">
        <div class="row align-items-center justify-content-center titulo">
            <div class="fullstack text-white fw-bold text-center mt-5 col-sm-9">
                <h2 class="fw-bold">FullStack developer portfolio</h2>
                <p class="fs-5">From Web Components and UI/UX animations to React.JS, Redux, Vue.JS, and Node.JS.
                    Check out my latest web software development portfolio projects.
                </p>
            </div>
        </div>
    </div>


        <!--FILTROS-->
        <div class="container filtros mb-4" >
            <div class="row justify-content-center">
                <a href="#listado" class="my-3 mx-2 col-sm-1 filtro filtro1 ct_item-active text-uppercase text-decoration-none justify-content-center" category="all" title="Show All Projects">show all</a>
                @for($i=0;$i<sizeof($nombrefiltros);$i++)
                    <a href="#listado" onmouseenter="hoverfiltro(this)" onmouseleave="salirhoversalir(this)" class="py-2 text-uppercase filtro my-3 mx-2 col-sm-1" title="filter by {{$filtrarpor[$i]}}" category="{{$nombrefiltros[$i]}}">
                        <div class="mt-1 nombre-filtro @php echo "filtro".($i+2) @endphp position-absolute ">{{$filtrarpor[$i]}}</div>
                        <img src="http://35.181.8.108/proyecto-final-daw/public/img/portfolio/filtros/{{$nombrefiltros[$i]}}.svg">
                    </a>
                @endfor
            </div>
        </div>
        <!--PROYECTOS FILTRADOS-->
        <div class="container proyectos my-2" >
            <p class="justify-content-center fs-4" id="showing">Showing all projects. Use the filter to list them by skill or technology.</p>
            <div class="row justify-content-center">
                @foreach ($rowset as $row)
                    @php array_push($_SESSION['enlaces'],url('/portfolio/'.$row->slug)) @endphp
                    <a href="{{ url('/portfolio/'.$row->slug) }}" class="card col-lg-4 proyecto mx-4 my-4 cambio" category="{{$row->alltecnicas}}">
                        <div class="imgBx">
                            @php $imagenes = explode(",",$row->imagenes); $i=0 @endphp
                            {{ Html::image('img/portfolio/proyectos/'.$row->slug."/".$imagenes[0].'.png', 'Imagen de proyecto') }}
                        </div>
                        <div class="justify-content-center contentBx proyecto{{$row->id}}">
                            <div class="content text-uppercase">
                                @php $tecnicas = explode(",",$row->alltecnicas); @endphp
                                <div class="row">
                                    <p>
                                    @for ($i; $i < count($tecnicas); $i++)
                                            <span class="tecnicas" >{{$tecnicas[$i]}}</span>
                                        @if(($i+1)%4==0) </p> @endif
                                    @endfor
                                </div>
                                @php $i=0 @endphp
                            </div>
                            <div class="content2">
                                <div class="container">
                                    <div class="row">
                                        <span class="tecnicas mb-2">more...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    <!-- script para el filtrador -->
    <script src="{{ asset('js/portfolio.js') }}"></script>

@endsection
