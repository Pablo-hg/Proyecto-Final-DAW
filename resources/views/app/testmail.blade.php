
@php $_SESSION['formulario']="enviado"; @endphp
    Has recibido un correo de <strong>{{$name}}</strong>  <code><</code>{{$email}}<code>></code> <br>
    <strong>Asunto:</strong> {{$asunto}}
    <p>{{print_r(nl2br($msg))}}</p>


