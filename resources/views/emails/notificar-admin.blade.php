<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Cata</title>
</head>
<body>
<p>Nuevo registro para la cata <strong>{{ $cata->titulo }}</strong>:</p>
<ul>
    <li>Nombre: {{ $registro->nombre }}</li>
    <li>Correo: {{ $registro->correo }}</li>
    <li>Teléfono: {{ $registro->telefono }}</li>
</ul>

</body>
</html>
