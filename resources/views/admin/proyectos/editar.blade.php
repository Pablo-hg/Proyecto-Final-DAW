@extends('layouts.admin')

@section('content')


        @php
            $accion = ($row->id) ? "actualizar/".$row->id : "guardar";
            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $ruta_imagenes="";
            for($i=0;$i<count($_SESSION['enlaces']);$i++){
                $array = explode ( '/' , $link );
                if ($_SESSION['enlaces'][$i]==end($array)) {
                    $ruta_imagenes = $_SESSION['carpetas'][$i];
                }
            }
        @endphp
        <form class="col-sm-12" method="POST" enctype="multipart/form-data" action="{{ url("admin/proyectos/".$accion) }}">
            @csrf
            <!-- TITULO -->
            <div class="row justify-content-center mb-3">
                <div class="col-sm-3">
                    <label for="titulo">Título</label>
                    <input id="titulo" type="text" name="titulo" class="form-control" value="{{ $row->titulo }}">
                </div>
            </div>
            <!-- TECNICAS -->
            <div class="row justify-content-center mb-3">
                <div class="col-sm-6">
                    <label for="alltecnicas">Tecnicas</label>
                    <input id="tecnicas" type="text" name="alltecnicas" class="form-control" value="{{ $row->alltecnicas }}" >
                </div>
            </div>
            <!-- ENTRADILLA -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-10">
                        <label for="entradilla">Entradilla</label>
                        <input id="entradilla" type="text" name="entradilla" class="form-control" value="{{ $row->entradilla }}" >
                    </div>
                </div>
                <!-- TEXTO1 -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-12">
                        <label for="texto1">Texto1</label>
                        <textarea id="texto1" class="form-control" name="texto1">{{ $row->texto1 }}</textarea>
                    </div>
                </div>
                <!-- TEXTO2 -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-12">
                        <label for="texto2">Texto2</label>
                        <textarea id="texto2" class="form-control" name="texto2">{{ $row->texto2 }}</textarea>
                    </div>
                </div>
                <!-- TEXTO3 -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-12">
                        <label for="texto3">Texto3</label>
                        <textarea id="texto3" class="form-control" name="texto3">{{ $row->texto3 }}</textarea>
                    </div>
                </div>
                <!-- ENLACE1 -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-6">
                        <label for="enlace1">Enlace1</label>
                        <input id="enlace1" type="text" name="enlace1" class="form-control" value="{{ $row->enlace1 }}" >
                    </div>
                </div>
                <!-- ENLACE2 -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-6">
                        <label for="enlace2">Enlace2</label>
                        <input id="enlace2" type="text" name="enlace2" class="form-control" value="{{ $row->enlace2 }}" >
                    </div>
                </div>
                <!-- ENLACE3 -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-6">
                        <label for="enlace3">Enlace3</label>
                        <input id="enlace3" type="text" name="enlace3" class="form-control" value="{{ $row->enlace3 }}" >
                    </div>
                </div>
                <!-- CARROUSEL -->
                @if($row->imagenes!="")
                    <div class="row justify-content-center mb-3">
                    <div class="col-sm-12">
                        <label for="carosuelimagenes">Imagenes</label>
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            @php $imagenes = explode(",",substr($row->imagenes,0,-1)); @endphp

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('img/portfolio/proyectos/')}}/{{$ruta_imagenes}}/{{$imagenes[0].'.png'}}" class=" w-50">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{$imagenes[0].'.png'}}</h5>
                                    </div>
                                </div>
                                @for($i=1;$i<count($imagenes);$i++)
                                    <div class="carousel-item">
                                        <img src="{{asset('img/portfolio/proyectos/')}}/{{$ruta_imagenes}}/{{$imagenes[$i].'.png'}}" class=" w-50">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{$imagenes[$i].'.png'}}</h5>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <button class="carousel-control-prev pasar" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <svg width="27" height="40" viewBox="0 0 27 40" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.6575 20.0129L25.4547 7.5273C26.105 6.89356 26.4293 6.11845 26.4293 5.20207C26.4293 4.28577 26.1049 3.51103 25.4547 2.87737L23.4801 0.950305C22.8309 0.316828 22.0363 0 21.0974 0C20.1585 0 19.3643 0.316828 18.714 0.950305L1.54532 17.6748C0.895642 18.3086 0.570801 19.0836 0.570801 20C0.570801 20.9165 0.89555 21.6909 1.54532 22.3249L18.714 39.0494C19.3642 39.6832 20.1583 40 21.0973 40C22.0363 40 22.8308 39.6832 23.48 39.0494L25.4546 37.1227C26.1049 36.4893 26.4293 35.7186 26.4293 34.8104C26.4293 33.903 26.1048 33.1236 25.4546 32.4729L12.6575 20.0129Z" fill="#7eacd3" fill-opacity="1"/>
                                </svg>
                            </button>
                            <button class="carousel-control-next pasar" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <svg width="27" height="40" viewBox="0 0 27 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.3425 20.0129L1.54527 7.5273C0.895035 6.89356 0.570658 6.11845 0.570658 5.20207C0.570658 4.28577 0.895128 3.51103 1.54527 2.87737L3.51987 0.950305C4.16909 0.316828 4.96367 0 5.90259 0C6.84151 0 7.63572 0.316828 8.28596 0.950305L25.4547 17.6748C26.1044 18.3086 26.4292 19.0836 26.4292 20C26.4292 20.9165 26.1045 21.6909 25.4547 22.3249L8.28605 39.0494C7.63581 39.6832 6.8417 40 5.90268 40C4.96367 40 4.16918 39.6832 3.51996 39.0494L1.54536 37.1227C0.895128 36.4893 0.570747 35.7186 0.570747 34.8104C0.570747 33.903 0.89522 33.1236 1.54536 32.4729L14.3425 20.0129Z" fill="#7eacd3" fill-opacity="1"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- SUBIR IMAGENES -->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-7">
                        <div class="btn">
                            <label for="subirimagen">Subir Imagenes (max5)</label>
                            <input type="file" name="imagenes[]"  multiple >
                        </div>
                    </div>
                </div>
            <!-- IMAGEN HOVER -->
            <div class="col m12 l3 center-align">
                <div class="file-field input-field">
                    <div class="btn">
                        <label for="hover">Imagen hover</label>
                        <input type="file" name="hover">
                    </div>
                </div>
            </div>
                <!-- IMAGEN LOGO -->
                <div class="col m12 l3 center-align">
                    <div class="file-field input-field">
                        <div class="btn">
                            <label for="logo">Imagen Logo</label>
                            <input type="file" name="logo">
                        </div>
                    </div>
                </div>

            <!-- BT VOLVER Y GUARDAR  -->
            <div class="row my-5">
                <div class="input-field col s12">
                    <a href="{{ url("admin/proyectos/") }}" title="Volver" class="text-decoration-none bg-danger text-white me-5 mt-4 py-3">Volver
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </a>
                    <button class="btn bg-primary text-white" type="submit" name="guardar">Guardar
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
@endsection
