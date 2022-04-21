@extends('layouts.admin')

@section('content')
    Este es la seccion para acceder al modo admin
    <form>
        <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recordar datos</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection

