<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Datos</title>
</head>
<body>
    <h1>DATOS DE LA PERSONA REGISTRADA</h1>
    <p><strong>NOMBRES:</strong> {{$cliente->nombre}}</p>
    <p><strong>APELLIDOS:</strong>{{$cliente->apellido}}</p>
    <p><strong>DPI:</strong> {{$cliente->dpi}}</p>
    <p><strong>TELEFONO:</strong>{{$cliente->telefono}}</p>
    <p><strong>CORREO ELECTRONICO:</strong> {{$cliente->correo}}</p>
    <p><strong>DIRECCION:</strong>{{$cliente->direccion}}</p>
    <p><strong>EDAD:</strong> {{$cliente->edad}}</p>

    <a href="{{route('ingresos.index')}}">Regresar</a>
    
</body>
</html>