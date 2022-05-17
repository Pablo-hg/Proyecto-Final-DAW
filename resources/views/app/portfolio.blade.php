@extends('layouts.app')

@section('content')

    @php
        $nombrefiltros = ['front-end','back-end','html','css','javascript','react','unity','figma'];
        $filtrarpor = ['FRONT-END','BACK-END','HTML','CSS','JAVASCRIPT','REACT','UNITY','FIGMA'];
    @endphp

        <!--FILTROS-->
        <div class="container filtros mb-5" >
            <div class="row justify-content-center">
                <a href="#listado" class="py-2 text-uppercase my-3 mx-2 col-lg-1 filtro" category="all" title="Show All Projects" style="border-radius: 25px;background: #1D67A6;border: 1px solid #6cbbfe;color: white;width: 8%;text-decoration: none">show all</a>
                @for($i=0;$i<sizeof($nombrefiltros);$i++)
                    <a href="#listado" onmouseenter="hoverfiltro(this)" onmouseleave="salirhoversalir(this)" class="py-2 text-uppercase filtro my-3 mx-2 col-lg-1" title="{{$filtrarpor[$i]}}" category="{{$nombrefiltros[$i]}}">
                        <div class="nombre-filtro @php echo "filtro".($i+2) @endphp position-absolute ">{{$nombrefiltros[$i]}}</div>
                        <img src="http://35.181.8.108/proyecto-final-daw/public/img/portfolio/filtros/{{$nombrefiltros[$i]}}.svg">
                    </a>
                @endfor
            </div>
        </div>
        <!--PROYECTOS FILTRADOS-->
        <div class="container proyectos my-2" >
            <div class="col-lg-5">Showing all projects. Use the filter to list them by skill or technology.</div>
            <div class="row justify-content-center">
                @foreach ($rowset as $row)
                    <div class="card col-lg-4 proyecto mx-4 my-4" category="{{$row->técnica1}}">
                        <div class="imgBx">
                            {{ Html::image('img/portfolio/proyectos/'.$row->imagen1, 'Imagen de proyecto') }}
                        </div>
                        <div class="contentBx proyecto{{$row->id}}">
                            <div class="content text-uppercase">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        @php $tecnicas = explode(",",$row->alltecnicas); @endphp
                                        @for ($i = 0; $i < count($tecnicas); $i++)
                                            <span class="tecnicas">{{$tecnicas[$i]}}</span>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="content2">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <span class="tecnicas">more..</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



@endsection
