@extends('layouts.tailwind')
@section('title','Grandezza Fest 2025 | Compra completada')
@section('description','Serás parte de la tercera edición de Grandezza Fest en Hacienda San Juan Pueblilla, Zempoala, Hidalgo. Vino, música, gastronomía y más. Entradas $500.')
@section('keywords','Grandezza Fest, festival de vino, vino en Hidalgo, eventos Zempoala, Hacienda San Juan Pueblilla, vino y música, catas de vino, evento gourmet, agosto 2025')
@section('image','https://grandezza.com.mx/img/grandezza-fest-2025.jpg')
@section('url','https://grandezza.com.mx/gracias')
@push('heads')
    <!-- Google tag (gtag.js) event -->
    <script>
        window.onload = function () {
            gtag('event', 'conversion_event_purchase', {
                // Aquí puedes agregar parámetros del evento, si los tienes
            });
        };
    </script>
@endpush
@section('content')
    <div class="min-h-screen flex items-center justify-center px-4 py-10 bg-stone-900 text-stone-100">
        <div class="w-full max-w-2xl">
            <!-- Logo -->
            <div class="mb-8">
                <img src="/img/grandezza-fest.webp" alt="Grandezza Fest" class="h-16 mx-auto">
            </div>

            <!-- Contenedor principal -->
            <div class="max-w-xl w-full bg-stone-800 shadow-2xl rounded-2xl p-8 text-center border border-stone-700">
                <h1 class="text-5xl font-alt mb-4">¡Gracias por tu compra!</h1>
                <p class="text-lg mb-6 text-stone-300">
                    Tu pago ha sido procesado exitosamente. ¡Nos vemos en <span class="font-semibold text-white">Grandezza Fest 2025</span>!
                </p>
                <p class="text-sm mb-6 font-semibold text-slate-400">A la brevedad tus boletos serán enviados a tu correo.</p>

                <!-- Datos del pedido -->
                <div class="bg-stone-700/50 p-4 rounded-lg text-left mb-6 text-sm text-stone-300">
                    <p><span class="font-medium text-white">Evento:</span> Grandezza Fest 2025 | Tercera edición</p>
                    <p><span class="font-medium text-white">Fecha del evento:</span> 2 de agosto de 2025</p>
                    <p><span class="font-medium text-white">Inauguracion:</span> 11 am</p>
                    <p><span class="font-medium text-white">Lugar:</span> Hacienda San Juan Pueblilla, Zempoala, Hidalgo
                    </p>
                </div>

                <!-- Botón CTA -->
                <a href="https://grandezza.com.mx"
                   class="inline-flex items-center px-6 py-3 bg-slate-600 text-white rounded-full hover:bg-slate-700 transition">
                    Ir al sitio
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>

                <!-- Redes sociales -->
                <div class="mt-6">
                    <p class="text-sm text-stone-400 mb-2">Comparte que ya tienes tus boletos:</p>
                    <div class="flex justify-center gap-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://grandezza.com.mx" target="_blank"
                           class="text-bslate-400 hover:underline">Facebook</a>
                        <a href="https://twitter.com/intent/tweet?text=Ya tengo mis boletos para Grandezza Fest 2025! https://grandezza.com.mx"
                           target="_blank" class="text-slate-400 hover:underline">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-xs text-stone-500 mt-10">
        &copy; 2025 Grandezza Fest. Todos los derechos reservados.
    </footer>

@endsection

@push('scripts')


@endpush
@section('styles')
    <style>
        .font-alt {
            color: #bb8a69;
        }
    </style>

@endsection

