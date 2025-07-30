<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmación de Cata</title>
</head>
<body>
<p>Hola {{ $registro->nombre }},</p>
<p>Gracias por registrarte a la cata: <strong>{{ $cata->titulo }}</strong></p>
<p>Fecha y hora: {{ $cata->fecha_hora }}</p>
<p>Nos vemos en Grandezza Fest.</p>
</body>
</html>
