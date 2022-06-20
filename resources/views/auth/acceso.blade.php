@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
        <form class="col-sm-6" method="POST" action="{{ route('autenticar') }}">
            @csrf
            <div class="row my-3">
                <!-- INPUT CORREO -->
                <div class="col-sm-12 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="email"  aria-describedby="basic-addon2" id="email" name="email" value="">
                        <span class="input-group-text" id="basic-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <!-- INPUT CONTRASEÑA -->
                <div class="col-sm-12">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="contraseña"  aria-describedby="basic-addon2" id="password" name="password" value="">
                        <span class="input-group-text" id="basic-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                    </svg>
                        </span>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary col-sm-3" type="submit">Acceder</button>
        </form>
    </div>
@endsection

