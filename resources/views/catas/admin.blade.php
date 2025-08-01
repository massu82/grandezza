@extends('layouts.cata')
@section('title','Administrador de Catas')
@section('content')
    @foreach($registros as $grupo => $items)
        <h3 class="font-semibold text-stone-800 text-sm">{{ $grupo }}</h3>
        <ul class="list-decimal list-inside text-stone-700 text-xs">
            @foreach($items as $registro)
                <li>
                    {{ $registro->nombre }} - {{ $registro->titulo }}
                    <form action="{{ route('catas.destroy', $registro->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2"
                                onclick="return confirm('¿Seguro que deseas eliminar este registro?')">Eliminar
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
        <hr>
        <br>
    @endforeach
@endsection
