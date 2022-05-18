@extends('layouts.app')

@section('content')

    @php
        $nombrefiltros = ['front-end','back-end','html','css','javascript','java',"C",'php','mysql','react','laravel','bootstrap','unity','figma','android','videogame'];
        $filtrarpor = ['FRONT-END','BACK-END','HTML','CSS','JAVASCRIPT','JAVA',"C#",'PHP','MYSQL','REACT','LARAVEL','BOOTSTRAP','UNITY','FIGMA','ANDROID','VIDEOGAME'];
    @endphp

        <!--FILTROS-->
        <div class="container filtros mb-4" >
            <div class="row justify-content-center">
                <a href="#listado" class="my-3 mx-2 col-sm-1 filtro filtro1 ct_item-active text-uppercase" category="all" title="Show All Projects" style="text-decoration: none">show all</a>
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
                    <div class="card col-lg-4 proyecto mx-4 my-4" category="{{$row->alltecnicas}}">
                        <div class="imgBx">
                            {{ Html::image('img/portfolio/proyectos/'.$row->imagen1, 'Imagen de proyecto') }}
                        </div>
                        <div class="justify-content-center contentBx proyecto{{$row->id}}">
                            <div class="content">
                                <div class="container text-uppercase">
                                        @php $tecnicas = explode(",",$row->alltecnicas); @endphp
                                        @for ($i = 0; $i < count($tecnicas); $i++)
                                            <span class="tecnicas">{{$tecnicas[$i]}}</span>
                                        @endfor
                                </div>
                            </div>
                            <div class="content2">
                                <div class="container">
                                    <div class="row">
                                        <span class="tecnicas">more...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    <script src="{{ asset('js/portfolio.js') }}"></script>


@endsection
