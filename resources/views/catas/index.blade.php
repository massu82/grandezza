@extends('layouts.cata')
@section('title','Elije una Cata')
@section('content')
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
    @foreach($catas as $cata)
        <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow mb-4">
            <div class="px-4 py-5 sm:px-6 bg-stone-800">
                @if($cata->logo)
                    <img src="/img/patrocinadores/{{ $cata->logo }}.webp" alt="{{ $cata->titulo }}"
                         class="img-fluid h-24 -my-4">
                @else
                    <h1 class="text-3xl font-bold text-white">{{$cata->titulo}}</h1>
                @endif
            </div>
            <div class="px-4 py-5 sm:p-6 align-content-center">
                <ul class="list-none list-inside mb-4 text-xs">

                    <li>Salon: <span
                            class="font-bold text-slate-700">{{ $cata->salon }}</span></li>
                    <li>Temas: <span
                            class="font-bold text-slate-700">{!!  $cata->descripcion !!}</span></li>
                    <li>Horario: <span
                            class="font-bold text-slate-700">{{ $cata->fecha_hora->format('H:i') }}</span> horas
                    </li>
                    <li>Expositor: <span
                            class="font-bold text-slate-700">{{ $cata->expositor }}</span></li>
                    <li>Registrados: <span
                            class="font-bold text-slate-700">{{ $cata->registros_count }}/{{ $cata->capacidad }}</span>
                    </li>
                </ul>
                @if($cata->registros_count < $cata->capacidad)
                    <a href="{{ route('catas.registro', $cata->id) }}"
                       class="rounded-md bg-amber-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500">Registrarse</a>
                @else
                    <span class="text-red-500">Cupo lleno</span>
                @endif
            </div>
        </div>
    @endforeach

@endsection
