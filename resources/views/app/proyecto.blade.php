@extends('layouts.app')

@section('content')

    @foreach ($rowset as $row)
        @php
            $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $izq = "";$der="";$ruta_imagenes="";$texto="";$sitio="";
            for($i=0;$i<count($_SESSION['enlaces']);$i++){
                if($_SESSION['enlaces'][$i]==$link){
                    if(reset($_SESSION['enlaces'])==$_SESSION['enlaces'][$i]){
                        $izq = route('portfolio');
                        $der =$_SESSION['enlaces'][$i+1];
                    }
                    else if(end($_SESSION['enlaces'])==$_SESSION['enlaces'][$i]){
                        $der = route('portfolio');
                        $izq =$_SESSION['enlaces'][$i-1];
                    }
                    else{
                        $izq =$_SESSION['enlaces'][$i-1];
                        $der =$_SESSION['enlaces'][$i+1];
                    }
                    $ruta_imagenes = $_SESSION['carpetas'][$i];
                }
            }
        @endphp
    <!-- 1ºPARTE -->
    <div class="container bg-transparent cuarta">
        <div class="row align-items-center justify-content-center titulo">
            <div class="fullstack text-white text-center mt-5 col-sm-9">
                <h1 class="fw-bold">{{$row->titulo}}</h1>
                <h3 class="fw-bold">{{$row->entradilla}}</h3>
            </div>
        </div>
        <!-- CARROUSEL -->
        <div class="row justify-content-center">
            <div class="col-sm-9">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    @php $imagenes = explode(",",substr($row->imagenes,0,-1)); @endphp
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                        @for ($i=1;$i<count($imagenes);$i++)
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="" aria-label="Slide {{$i+1}}"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('img/portfolio/proyectos/')}}/{{$ruta_imagenes}}/{{$imagenes[0].'.png'}}" class="carrousel-proyecto w-100">
                        </div>
                        @for($i=1;$i<count($imagenes);$i++)
                            <div class="carousel-item">
                                <img src="{{asset('img/portfolio/proyectos/')}}/{{$ruta_imagenes}}/{{$imagenes[$i].'.png'}}" class="carrousel-proyecto w-100">
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
        <!-- BT VISIT WEB -->
        <div class="row justify-content-center my-5">
            <div class="col-sm-4">
                <a href="#" class="text-uppercase text-decoration-none text-white fw-bold bt-web">
                    visit the website
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="mb-2 ms-1">
                        <g clip-path="url(#clip0_283_161)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5723 4.31865C11.5723 4.15942 11.507 4.00671 11.3906 3.89411C11.2743 3.78152 11.1165 3.71826 10.952 3.71826H2.71932C2.22577 3.71826 1.75244 3.90803 1.40345 4.24581C1.05446 4.58359 0.858398 5.04173 0.858398 5.51943L0.858398 17.5272C0.858398 18.0049 1.05446 18.463 1.40345 18.8008C1.75244 19.1386 2.22577 19.3284 2.71932 19.3284H15.1254C15.619 19.3284 16.0923 19.1386 16.4413 18.8008C16.7903 18.463 16.9863 18.0049 16.9863 17.5272V9.55884C16.9863 9.3996 16.921 9.24689 16.8047 9.1343C16.6883 9.0217 16.5306 8.95845 16.366 8.95845C16.2015 8.95845 16.0437 9.0217 15.9274 9.1343C15.8111 9.24689 15.7457 9.3996 15.7457 9.55884V17.5272C15.7457 17.6864 15.6804 17.8391 15.5641 17.9517C15.4477 18.0643 15.2899 18.1276 15.1254 18.1276H2.71932C2.5548 18.1276 2.39702 18.0643 2.28069 17.9517C2.16436 17.8391 2.09901 17.6864 2.09901 17.5272V5.51943C2.09901 5.36019 2.16436 5.20748 2.28069 5.09489C2.39702 4.98229 2.5548 4.91904 2.71932 4.91904H10.952C11.1165 4.91904 11.2743 4.85578 11.3906 4.74319C11.507 4.63059 11.5723 4.47788 11.5723 4.31865Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7082 0.716294C20.7082 0.557061 20.6428 0.40435 20.5265 0.291755C20.4102 0.179161 20.2524 0.115906 20.0879 0.115906L13.8848 0.115906C13.7203 0.115906 13.5625 0.179161 13.4462 0.291755C13.3299 0.40435 13.2645 0.557061 13.2645 0.716294C13.2645 0.875527 13.3299 1.02824 13.4462 1.14083C13.5625 1.25343 13.7203 1.31668 13.8848 1.31668H18.5904L8.48318 11.0982C8.42551 11.154 8.37976 11.2203 8.34855 11.2932C8.31733 11.3662 8.30127 11.4443 8.30127 11.5233C8.30127 11.6022 8.31733 11.6804 8.34855 11.7533C8.37976 11.8263 8.42551 11.8925 8.48318 11.9484C8.54086 12.0042 8.60932 12.0485 8.68468 12.0787C8.76003 12.1089 8.8408 12.1244 8.92236 12.1244C9.00392 12.1244 9.08469 12.1089 9.16004 12.0787C9.23539 12.0485 9.30386 12.0042 9.36154 11.9484L19.4676 2.16563V6.72018C19.4676 6.87941 19.5329 7.03212 19.6492 7.14471C19.7656 7.25731 19.9233 7.32056 20.0879 7.32056C20.2524 7.32056 20.4102 7.25731 20.5265 7.14471C20.6428 7.03212 20.7082 6.87941 20.7082 6.72018V0.716294Z" fill="white"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <!-- ABOUT THIS PROJECT -->
        <div class="row justify-content-center">
            <div class="col-sm-9 text-sm-start fs-5">
                <h3 class="fs-1"><strong>About this project</strong></h3>
                <svg width="450" height="1" viewBox="0 0 450 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="450" y2="0.5" stroke="#B3B3B3"/>
                </svg>
                <p class="mt-3 text-sm-start">
                    {{$row->texto1}}
                </p>
                <p>
                    {{$row->texto2}}
                </p>
                <p>
                    {{$row->texto3}}
                </p>
            </div>
        </div>
    </div>
    <!-- SVG SEPARADOR -->
    <svg width="100%" height="100%" viewBox="0 0 1440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-9 151.85L51.6225 135.004C112.245 117.842 233.49 84.6247 354.735 75.925C475.98 67.2252 597.225 84.6247 718.471 92.7708C839.716 101.233 960.961 101.233 1082.21 84.3874C1203.45 67.2252 1324.7 34.0081 1385.32 16.8459L1445.94 0V227.775H1385.32C1324.7 227.775 1203.45 227.775 1082.21 227.775C960.961 227.775 839.716 227.775 718.471 227.775C597.225 227.775 475.98 227.775 354.735 227.775C233.49 227.775 112.245 227.775 51.6225 227.775H-9V151.85Z" fill="#81D389"/>
        <path d="M-6 16.3279L54.625 31.9662C115.25 47.8981 236.5 78.7341 357.75 98.5573C479 118.38 600.25 125.722 721.5 110.304C842.75 94.8863 964 55.24 1085.25 51.5691C1206.5 47.8981 1327.75 78.7341 1388.38 94.6661L1449 110.304V227.775H1388.38C1327.75 227.775 1206.5 227.775 1085.25 227.775C964 227.775 842.75 227.775 721.5 227.775C600.25 227.775 479 227.775 357.75 227.775C236.5 227.775 115.25 227.775 54.625 227.775H-6V16.3279Z" fill="#519BDA" fill-opacity="0.33"/>
        <path d="M-9 223.693L51.6225 240.539C112.245 257.701 233.49 290.918 354.735 299.618C475.98 308.317 597.225 290.918 718.471 282.772C839.716 274.309 960.961 274.309 1082.21 291.155C1203.45 308.317 1324.7 341.535 1385.32 358.697L1445.94 375.543V147.768H1385.32C1324.7 147.768 1203.45 147.768 1082.21 147.768C960.961 147.768 839.716 147.768 718.471 147.768C597.225 147.768 475.98 147.768 354.735 147.768C233.49 147.768 112.245 147.768 51.6225 147.768H-9V223.693Z" fill="#81D389"/>
        <path d="M-6 359.215L54.625 343.577C115.25 327.645 236.5 296.809 357.75 276.986C479 257.162 600.25 249.82 721.5 265.238C842.75 280.656 964 320.303 1085.25 323.974C1206.5 327.645 1327.75 296.809 1388.38 280.877L1449 265.238V147.768H1388.38C1327.75 147.768 1206.5 147.768 1085.25 147.768C964 147.768 842.75 147.768 721.5 147.768C600.25 147.768 479 147.768 357.75 147.768C236.5 147.768 115.25 147.768 54.625 147.768H-6V359.215Z" fill="#519BDA" fill-opacity="0.33"/>
    </svg>
    <!-- 2ºPARTE -->
    <div class="container">
        <!-- TECHNICAL SHEET -->
        <div class="row justify-content-center fs-5">
            <div class="col-sm-9 text-sm-start">
                <h3 class="fs-1 mt-1"><strong>Hoja Técnica</strong></h3>
                <span class="my-4">Code technologies I got involved with while working on this project.</span><br>
                <svg class="my-4" width="450" height="1" viewBox="0 0 450 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="450" y2="0.5" stroke="#B3B3B3"/>
                </svg>
                <ul class="tecnicas mb-5">
                    @php $tecnicas = explode(",",$row->alltecnicas); @endphp
                    @for ($i = 0; $i < count($tecnicas); $i++)
                        <li type="circle" class="my-2">{{$tecnicas[$i]}}</li>
                    @endfor
                </ul>
            </div>
        </div>
        <!-- RESOURCES -->
        <div class="row justify-content-center fs-5">
            <div class="col-9 text-sm-start">
                <h3 class="fs-1 mt-1"><strong>Recursos</strong></h3>
                <svg width="450" height="1" viewBox="0 0 450 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="0.5" x2="450" y2="0.5" stroke="#B3B3B3"/>
                </svg>
                <ul class="tecnicas mt-3">
                    <li type="circle" class="my-2">
                       @php
                           if(str_contains($row->enlace1, ".be")){$texto="Puedes ver un video del funcionamiento del proyecto en";$sitio="Youtube";}
                           if(str_contains($row->enlace1, "35.")){$texto="Puedes visitar la web del proyecto";$sitio="aqui";}
                           if(str_contains($row->enlace1, ".com")){$texto="Puedes visitar la web oficial del proyecto";$sitio=$row->enlace1;}
                        @endphp
                        {{$texto}}
                        <a target="_blank" title="{{$row->enlace1}}" href="{{$row->enlace1}}" class="text-decoration-none">
                            <strong>{{$sitio}}</strong>.
                        </a>
                    </li>
                    @if (!$row->enlace2=="")
                    <li type="circle" class="my-2">
                        @php
                                if($row->enlace2==""){$texto="La descarga del proyecto estará disponible";$sitio="Próximamente";}
                                if(str_contains($row->enlace2, "github")){$texto="La descarga del proyecto está disponible en";$sitio="Github";}
                                if(str_contains($row->enlace2,"35.")!== false){$texto="Puedes probar el proyecto ";$sitio="aqui";}
                         @endphp
                        {{$texto}}
                        <a target="_blank" title="{{$row->enlace2}}" href="{{$row->enlace2}}" class="text-decoration-none">
                            <strong>{{$sitio}}</strong>.
                        </a>
                    </li>
                    @endif
                    @if (!$row->enlace3=="")
                    <li type="circle" class="my-2">
                        @php $texto="Puedes probar el videojuego ";$sitio=$row->enlace3;@endphp
                        {{$texto}}
                        <a target="_blank" title="{{$row->enlace3}}" href="{{$row->enlace3}}" class="text-decoration-none">
                            <strong>{{$sitio}}</strong>.
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <!--BOTONES DE PASAR PROYECTO-->
        <div class="botones">
            <a href="@php echo $izq @endphp" class="bt-izq cambio">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_822_107)">
                        <path d="M19.1779 20.0129L31.663 7.5273C32.2974 6.89356 32.6138 6.11845 32.6138 5.20207C32.6138 4.28577 32.2973 3.51103 31.663 2.87737L29.7366 0.950305C29.1032 0.316828 28.328 0 27.4119 0C26.4959 0 25.7211 0.316828 25.0867 0.950305L8.33674 17.6748C7.7029 18.3086 7.38599 19.0836 7.38599 20C7.38599 20.9165 7.70281 21.6909 8.33674 22.3249L25.0866 39.0494C25.721 39.6832 26.4957 40 27.4119 40C28.328 40 29.1031 39.6832 29.7365 39.0494L31.6629 37.1227C32.2973 36.4893 32.6137 35.7186 32.6137 34.8104C32.6137 33.903 32.2972 33.1236 31.6629 32.4729L19.1779 20.0129Z" fill="#7EACD3"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_822_107">
                            <rect width="40" height="40" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <a href="@php echo $der @endphp" class="bt-der cambio">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_822_105)">
                        <path d="M20.8221 19.9871L8.33701 32.4727C7.70264 33.1064 7.38617 33.8816 7.38617 34.7979C7.38617 35.7142 7.70273 36.489 8.33701 37.1226L10.2634 39.0497C10.8968 39.6832 11.672 40 12.5881 40C13.5041 40 14.2789 39.6832 14.9133 39.0497L31.6633 22.3252C32.2971 21.6914 32.614 20.9164 32.614 20C32.614 19.0835 32.2972 18.3091 31.6633 17.6751L14.9134 0.950581C14.279 0.316833 13.5043 3.8147e-06 12.5881 3.8147e-06C11.672 3.8147e-06 10.8969 0.316833 10.2635 0.950581L8.3371 2.87729C7.70273 3.51067 7.38626 4.28137 7.38626 5.18956C7.38626 6.09704 7.70282 6.87637 8.3371 7.52713L20.8221 19.9871Z" fill="#7EACD3"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_822_105">
                            <rect width="40" height="40" fill="white" transform="translate(40 40) rotate(-180)"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
    </div>
    @endforeach


@endsection
