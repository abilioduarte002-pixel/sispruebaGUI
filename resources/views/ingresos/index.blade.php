<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresos</title>
</head>
<header>
<a href="{{route('ingresos.create')}}">Nuevo Registro</a>
</header>
<body>
    <table class="table table-hover table-bordered">
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>DPI</th>
        <th>Telefono</th>
        <th>Correo Electrónico</th>
        <th>Dirección</th>
        <th>Edad</th>
        <th colspan="3">Acciones</th>
    </thead>
    
   
    <tbody>
        @foreach ($clientes as $cliente)
         <tr>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->dpi}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->correo}}</td>
            <td>{{$cliente->direccion}}</td>
            <td align="center">{{$cliente->edad}}</td>
            <td>
                <a href="{{route('ingresos.show', $cliente->id)}}" class="btn btn-info">Ver</a>
            </td>
            <td>
                <a href="#" class="btn btn-success">Editar</a>
            </td>
            <td>
                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Esta Seguro de Eliminar el Registro?')">Eliminar</button>
                </form>
            </td>
         </tr>        
            
        @endforeach

    </tbody>
</table>
</body>
<footer>

</footer>
</html>



