@extends('layouts.cata')
@section('title','Registro de Catas')
@section('content')
    <div class="container mx-auto p-4">
        @foreach($registros as $grupo => $items)
            <h3 class="font-semibold text-stone-800 text-sm">{{ $grupo }}</h3>
            <ul class="list-disc list-inside text-stone-700 text-xs">
                @foreach($items as $registro)
                    <li>{{ $registro->nombre }} - {{ $registro->titulo }}</li>
                @endforeach
            </ul>
            <hr>
            <br>
        @endforeach
    </div>
@endsection
