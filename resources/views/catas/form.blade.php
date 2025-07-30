@extends('layouts.cata')
@section('title')
    {{ $cata->titulo }}
@endsection
@section('content')

    <form action="{{ route('catas.registrar', $cata->id) }}" method="POST"
          class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf
        <legend class="text-base font-semibold text-stone-900 mb-4">Sólo puede registrar una cata por asistente</legend>
        <div class="grid grid-cols-1 gap-x-8 gap-y-6">

            <div class="sm:col-span-2">
                <input name="nombre" placeholder="Nombre" required
                       class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-stone-900 outline outline-1 outline-stone-300 placeholder:text-stone-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-amber-600"/>
            </div>
            <div class="sm:col-span-2">
                <input name="correo" type="email" placeholder="Correo" required
                       class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-stone-900 outline outline-1 outline-stone-300 placeholder:text-stone-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-amber-600"/>
            </div>
            <div class="sm:col-span-2">
                <input name="telefono" placeholder="Teléfono (opcional)"
                       class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-stone-900 outline outline-1 outline-stone-300 placeholder:text-stone-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-amber-600"/>
            </div>
            <div>

                <span class="isolate inline-flex rounded-md shadow-sm">
                    <a href="{{route('catas')}}"
                       class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-stone-900 ring-1 ring-inset ring-stone-300 hover:bg-stone-50 focus:z-10">Regresar</a>
                    <button
                        class="relative -ml-px inline-flex items-center rounded-r-md bg-amber-500 px-3 py-2 text-sm font-semibold text-stone-50 ring-1 ring-inset ring-stone-300 hover:bg-amber-400 focus:z-10">Registrarse</button>
                </span>

            </div>

        </div>
    </form>
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
@endsection
