@extends('layouts.admin')

@section('content')

    @php $contador_visitas = 0;
    foreach ($rowset as $row){
        $contador_visitas = $contador_visitas + $row->num_visitas;

    }

    @endphp

    <h1>Pablohg.com</h1>
    Este es el modo admin
    <h4>Han visitado la página @php echo $contador_visitas @endphp personas</h4>

@endsection
