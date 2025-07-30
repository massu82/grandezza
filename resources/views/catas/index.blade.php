<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Catas</title>
</head>
<body>
@foreach($catas as $cata)
    <div class="p-4 bg-white rounded shadow mb-4">
        <h2 class="text-xl font-bold">{{ $cata->titulo }}</h2>
        <p>{{ $cata->descripcion }}</p>
        <p class="text-sm text-gray-500">Fecha: {{ $cata->fecha_hora }}</p>
        <p class="text-sm text-gray-500">Registrados: {{ $cata->registros_count }}/{{ $cata->capacidad }}</p>
        @if($cata->registros_count < $cata->capacidad)
            <a href="{{ route('catas.registro', $cata->id) }}" class="text-blue-600 underline mt-2 inline-block">Registrarse</a>
        @else
            <span class="text-red-500">Cupo lleno</span>
        @endif
    </div>
@endforeach
@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
</body>
</html>
