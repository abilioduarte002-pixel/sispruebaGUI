<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Registro</title>
</head>
<body>
    <form action="" method="POST">
    @csrf

    <label for="nombre">Ingrese Nombres</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Ingrese Apellidos</label>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="correo">Correo Electrónico</label>
    <input type="text" id="correo" name="correo" required><br><br>

    <label for="dpi">Ingrese DPI</label>
    <input type="text" id="dpi" name="dpi" required><br><br>

    <label for="edad">Ingrese Edad</label>
    <input type="number" id="edad" name="edad" required><br><br>

    <label for="direccion">Dirección de Residencia</label>
    <input type="text" id="direccion" name="direccion" size="50" required><br><br>
    
    <label for="telefono">Numero de Telefóno</label>
    <input type="text" id="telefono" name="telefono" placeholder="Numero de Celular" required><br><br>

<button type="submit"></button>

</form>
</body>
</html>

