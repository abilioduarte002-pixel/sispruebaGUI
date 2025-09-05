<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Registro</title>
</head>
<body>
    <h1>MODIFICAR DATOS DEL REGISTRO</h1>

    <form action="{{route('ingresos.update', $cliente->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombres</label>
        <input type="text" name="nombre" id="apellido" value="{{$cliente->nombre}}" required>

        <label for="apellido">Apellidos</label>
        <input type="text" name="apellido" id="apellido" value="{{$cliente->apellido}}" required>

        <label for="dpi">DPI</label>
        <input type="text" name="dpi" id="dpi" value="{{$cliente->dpi}}" required>

        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" value="{{$cliente->telefono}}" required>

        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo" value="{{$cliente->correo}}" required>

        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" value="{{$cliente->direccion}}" required>

        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad" value="{{$cliente->edad}}" required>

        <button type="submit">Actualizar Datos</button>


    </form>
</body>
</html>