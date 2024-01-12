{{ $texto }}  

@if ($checagem == true)

    Checagem = true
@else
    Checagem = false
@endif

@foreach($usuarios as $usuario)
    {{ $usuario }} <br>
@endforeach
