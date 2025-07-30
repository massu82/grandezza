<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Cata</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

<p>Nuevo registro para la cata <strong>{{ $cata->titulo }}</strong>:</p>
<ul class="list-none text-stone-700">
    <li>Nombre: <strong>{{ $registro->nombre }}</strong></li>
    <li>Horario: <strong>{{ $cata->fecha_hora->format('H:i') }}</strong> horas</li>
    <li>Correo: <strong>{{ $registro->correo }}</strong></li>
    <li>Teléfono: <strong>{{ $registro->telefono }}</strong></li>
    <li>Salon: <strong>{{ $registro->salon }}</strong></li>
    <li>Expositor: <strong>{{ $registro->expositor }}</strong></li>

</ul>

</body>
</html>
