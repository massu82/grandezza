<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmación de Cata</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
<p>Hola <strong>{{ $registro->nombre }}</strong>, ya estás registrado para la Cata <strong>{{ $cata->titulo }}</strong>
</p>
<p>Detalles:</p>
<p>Horario: <strong>{{ $cata->fecha_hora->format('H:i') }}</strong> horas</p>
<p>Salon: <strong>{{ $cata->salon }}</strong></p>
<p>Exponente: <strong>{{ $cata->expositor }}</strong></p>
<p>Nos vemos en Grandezza Fest.</p>
</body>
</html>
