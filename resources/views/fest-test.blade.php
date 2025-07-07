@extends('layouts.tailwind')
@section('title','Grandezza Fest 2025 | Festival de vino y música en Zempoala')
@section('description','Únete a la tercera edición de Grandezza Fest en Hacienda San Juan Pueblilla, Zempoala, Hidalgo. Vino, música, gastronomía y más. Entradas $500.')
@section('keywords','Grandezza Fest, festival de vino, vino en Hidalgo, eventos Zempoala, Hacienda San Juan Pueblilla, vino y música, catas de vino, evento gourmet, agosto 2025')
@section('image','https://grandezza.com.mx/img/grandezza-fest-2025.jpg')
@section('url','https://grandezza.com.mx/fest')
@push('heads')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Event",
          "name": "Grandezza Fest 2025",
          "startDate": "2025-08-02T11:00:00-06:00",
          "endDate": "2025-08-02T23:59:00-06:00",
          "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
          "eventStatus": "https://schema.org/EventScheduled",
          "location": {
            "@type": "Place",
            "name": "Hacienda San Juan Pueblilla",
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "Domicilio Conocido Sn",
              "addressLocality": "Zempoala",
              "addressRegion": "Hidalgo",
              "postalCode": "24060",
              "addressCountry": "MX"
            }
          },
          "image": [
            "https://grandezza.com.mx/img/grandezza-fest-2025.jpg"
          ],
          "description": "La tercera edición de Grandezza Fest, con catas, degustaciones, música y los mejores exponentes del vino.",
          "url": "https://grandezza.com.mx/fest",
          "organizer": {
            "@type": "Organization",
            "name": "Grandezza",
            "url": "https://grandezza.com.mx"
          }
        }
    </script>
    <script>
        function enviarEventoCompra() {
            gtag('event', 'compra_iniciada', {
                'event_category': 'boton',
                'event_label': 'compra grandezza',
                'value': 1
            });
        }

        // Helper function to delay opening a URL until a gtag event is sent.
        // Call it in response to an action that should navigate to a URL.
        function gtagSendEvent(url) {
            var callback = function () {
                if (typeof url === 'string') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion_event_begin_checkout', {
                'event_callback': callback,
                'event_timeout': 2000,
                'items': [{
                    'id': 'producto123',
                    'name': 'Entrada General Grandezza Fest',
                    'quantity': 1,
                    'price': 500.00
                }],
                'currency': 'MXN',
                'value': 500.00
            });
            return false;
        }

    </script>
    <script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>

@endpush
@section('content')

    <!-- Hero -->
    <section class="relative bg-cover bg-center h-screen flex flex-col justify-center items-center text-center"
             style="background-image: url('/img/hacienda.webp');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 max-w-4xl px-8 py-12 rounded-xl bg-black bg-opacity-60">
            <img src="/img/grandezza-fest.webp" alt="Grandezza Fest" class="img-fluid px-1 py-2 md:px-4 md:py-3 mt-4">
            <!--<h1 class="text-5xl md:text-7xl font-extrabold mb-4 tracking-wide">Grandezza Fest 2025</h1>-->
            <p class="text-3xl md:text-6xl mb-6 font-alt">Así celebramos el Vino</p>
            <img src="/img/hacienda.webp" alt="Hacienda San Juan Pueblilla" class="-mt-12 img-fluid">
            <p class="text-xl md:text-2xl mb-8 tracking-wide">2 de agosto · Hacienda San Juan Pueblilla · Zempoala,
                Hidalgo</p>

            <!-- Countdown -->
            <div id="countdown" class="countdown mb-8"
                 aria-label="Cuenta regresiva para el evento Grandezza Fest"></div>
            <!-- Noscript content for added SEO -->
            <noscript><a href="https://www.eventbrite.com/e/grandezza-fest-2025-tickets-1466057159429"
                         rel="noopener noreferrer" target="_blank">Comprar entradas en Eventbrite</a></noscript>
            <!-- You can customize this button any way you like -->

            <a href="https://buy.stripe.com/cNi8wPaaKdeP3DL9yt4gg00" target="_blank"
                    onclick="fbq('track', 'InitiateCheckout'); gtag('event', 'compra_iniciada', {event_category: 'boleto', event_label: 'grandezza_fest'}); gtag('event','conversion_event_begin_checkout')"
                    class="inline-block bg-stone-600 hover:bg-stone-700 text-white px-10 py-4 rounded-full text-lg md:text-xl shadow-lg transition">
                Compra tus entradas
            </a>

        </div>
        <!-- Flecha para scroll -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2">
            <a href="#video" class="animate-bounce text-white">
                <!-- Icono de flecha (SVG) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
    </section>

    <!-- Descripción -->
    <section class="py-20 px-6 max-w-5xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl mb-6 tracking-wide font-alt">Tercera edición de Grandezza Fest</h2>
        <p class="text-sm md:text-xl leading-relaxed max-w-3xl mx-auto text-stone-300">
            Descubre el mejor evento dedicado al vino y los licores en un entorno espectacular. Vive catas exclusivas,
            música en vivo, gastronomía de primer nivel y un ambiente único en la Hacienda San Juan Pueblilla.
            Grandezza, tu tienda de vinos y licores favorita, te invita a esta gran celebración.
        </p>
    </section>

    <!-- Video Promocional -->
    <section class="bg-stone-800 py-16 px-6 flex justify-center">
        <div class="w-full max-w-4xl aspect-video rounded-xl overflow-hidden shadow-lg">
            <iframe class="w-full h-full"
                    id="video"
                    src="https://www.youtube.com/embed/5HwWj7zwsu4?autoplay=1"
                    title="Grandezza Fest 2025 - Reel"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen>
            </iframe>
        </div>
    </section>


    <!-- Call to Action / Boletos -->
    <section id="boletos" class="py-20 px-6 bg-stone-900 text-center">
        <h2 class="text-4xl md:text-5xl mb-6 tracking-wide font-alt">¡Asegura tu lugar ahora!</h2>
        <p class="text-xl max-w-xl mx-auto mb-8 text-stone-200">
            No te quedes fuera del evento más esperado del año. Compra tus entradas ahora y prepárate para vivir una
            experiencia inolvidable.
        </p>
        <a href="https://buy.stripe.com/cNi8wPaaKdeP3DL9yt4gg00" target="_blank"
                onclick="fbq('track', 'InitiateCheckout'); gtag('event', 'compra_iniciada', {event_category: 'boleto', event_label: 'grandezza_fest'}); gtag('event','conversion_event_begin_checkout')"
                class="inline-block bg-white text-stone-700 px-12 py-5 rounded-full font-semibold text-large md:text-2xl shadow-lg hover:bg-stone-100 transition">
            Comprar Entradas
        </a>
    </section>

    <!-- Patrocinadores -->
    <section class="py-16 px-6 bg-stone-800 dark:bg-black">
        <h2 class="text-4xl md:text-5xl mb-6 tracking-wide font-alt text-center">Patrocinadores</h2>
        <div class="grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-6 items-center max-w-8xl mx-auto">
            <img src="/img/patrocinadores/logo-05.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-01.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-02.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-03.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-04.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-06.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-07.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-08.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-09.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-10.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-11.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-12.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-13.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-14.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-15.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
            <img src="/img/patrocinadores/logo-16.webp" alt="Patrocinador" class="h-22 object-contain mx-auto"/>
        </div>
    </section>
    <section id="faq" class="bg-white dark:bg-stone-800 py-16 px-4 sm:px-8 lg:px-24">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl md:text-5xl mb-6 tracking-wide font-alt text-center">Preguntas Frecuentes</h2>
            <div class="space-y-6">

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Dónde y cuándo se realiza el
                        evento?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Grandezza Fest 2025 se llevará a cabo el sábado 2 de
                        agosto en la Hacienda San Juan Pueblilla, ubicada en Zempoala, Hidalgo.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Costo del Boleto?</h3>
                    <p class="text-stone-600 dark:text-stone-400">La <b>preventa es de $500 pesos</b>, el dia del evento
                        costará <b>$600 pesos</b>.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿A qué hora comienza y termina
                        el festival?</h3>
                    <p class="text-stone-600 dark:text-stone-400">La inauguración es a las 11:00 a.m. y el evento
                        concluirá aproximadamente a las 11:00 p.m.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Puedo comprar boletos en el
                        lugar?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Si habrá taquilla en el evento, te recomendamos
                        adquirir tus boletos en línea a través de <a href="https://grandezza.com.mx/fest"
                                                                     class="text-blue-600 dark:text-blue-400 underline">grandezza.com.mx</a>,
                        ya que el cupo es limitado.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Habrá estacionamiento
                        disponible?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Sí, contamos con estacionamiento para asistentes. Se
                        asignará por orden de llegada hasta agotar espacios.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Pueden asistir menores de
                        edad?</h3>
                    <p class="text-stone-600 dark:text-stone-400">El evento es para mayores de 18 años. Se solicitará
                        identificación oficial en el acceso.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Qué incluye mi boleto?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Tu boleto incluye acceso al evento, áreas de
                        degustación, presentaciones musicales y actividades al aire libre. Algunos productos o
                        experiencias como las Catas pueden tener costo adicional.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Puedo salir y volver a entrar
                        al evento?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Si, se permite el reingreso al evento.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Qué pasa si llueve?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Grandezza Fest se realiza sin importar las condiciones
                        climáticas. Te sugerimos venir preparado para el clima.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Habrá opciones de
                        alimentos?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Sí, contaremos con degustaciones de nuestros diversos
                        patrocinadores. Consulta con cada proveedor dentro del festival.</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-stone-700 dark:text-stone-200">¿Qué debo llevar al
                        evento?</h3>
                    <p class="text-stone-600 dark:text-stone-400">Es recomendable bloqueador solar, identificación
                        oficial y buen ánimo. No está permitido el ingreso con alimentos, bebidas, armas o drogas.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Hospedaje -->
    <section class="py-20 px-6 bg-stone-900">
        <h2 class="text-4xl md:text-5xl mb-6 tracking-wide font-alt text-center">Hospedaje Cercano</h2>
        <p class="text-center max-w-3xl mx-auto mb-12 text-stone-300 text-lg">
            Te recomendamos reservar con anticipación en hoteles y cabañas cercanas a Zempoala para una mejor
            experiencia. Aquí algunas opciones destacadas:
        </p>
        <ul class="max-w-3xl mx-auto space-y-6">
            <li class="bg-stone-800 p-6 rounded-xl shadow-lg flex justify-between items-center">
                <span>Holiday Inn Express Pachuca</span>
                <a href="https://maps.app.goo.gl/VG6sHUns2CvhwUqq6"
                   class="text-stone-500 hover:text-stone-400 font-semibold underline" rel="nofollow" target=" _blank">Ver
                    ubicación</a>
            </li>
            <li class="bg-stone-800 p-6 rounded-xl shadow-lg flex justify-between items-center">
                <span>Acueducto</span>
                <a href="https://maps.app.goo.gl/ygGbuKZrWeubEru97"
                   class="text-stone-500 hover:text-stone-400 font-semibold underline" rel="nofollow" target=" _blank">Ver
                    ubicación</a>
            </li>
            <li class="bg-stone-800 p-6 rounded-xl shadow-lg flex justify-between items-center">
                <span>Casa Azul</span>
                <a href="https://maps.app.goo.gl/TpnKzytbXPqX28K5A"
                   class="text-stone-500 hover:text-stone-400 font-semibold underline" rel="nofollow" target="_blank">Ver
                    ubicación</a>
            </li>
            <li class="bg-stone-800 p-6 rounded-xl shadow-lg flex justify-between items-center">
                <span>Real San Juan</span>
                <a href="https://maps.app.goo.gl/SxFVci5RXSxvzeJ77"
                   class="text-stone-500 hover:text-stone-400 font-semibold underline" rel="nofollow" target="_blank">Ver
                    ubicación</a>
            </li>
            <li class="bg-stone-800 p-6 rounded-xl shadow-lg flex justify-between items-center">
                <span>La Noria</span>
                <a href="https://maps.app.goo.gl/L6kUNHSMDJUPVT5y7"
                   class="text-stone-500 hover:text-stone-400 font-semibold underline" rel="nofollow" target="_blank">Ver
                    ubicación</a>
            </li>
            <li class="bg-stone-800 p-6 rounded-xl shadow-lg flex justify-between items-center">
                <span>Travesia Villas</span>
                <a href="https://maps.app.goo.gl/6ruk9KcT7NuRuh657"
                   class="text-stone-500 hover:text-stone-400 font-semibold underline" rel="nofollow" target="_blank">Ver
                    ubicación</a>
            </li>
        </ul>
    </section>

    <!-- Mapa -->
    <section class="py-20 px-6 bg-stone-800">
        <h2 class="text-4xl md:text-5xl mb-6 tracking-wide font-alt text-center">¿Cómo llegar?</h2>
        <p class="text-xl md:text-2xl text-center tracking-wide">Hacienda San Juan Pueblilla · Zempoala,
            Hidalgo</p>
        <p class="text-white text-center mb-4">Domicilio Conocido Sn, Pueblilla, 24060 Zempoala, Hgo. <a
                class="btn underline" href="https://maps.app.goo.gl/GW5Z4dh2AMk4kAY98"
                target="_blank"><strong class="text-red-500">Mapa</strong></a></p>
        <div class="w-full max-w-5xl mx-auto aspect-video rounded-xl overflow-hidden shadow-lg">
            <iframe
                class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.987015754603!2d-98.65529402300066!3d19.924951981462378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1baa6e0fb8ba1%3A0x27ced92115fc730e!2sHacienda%20San%20Juan%20Pueblilla!5e0!3m2!1ses!2smx!4v1750123853462!5m2!1ses!2smx"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Mapa de Hacienda San Juan Pueblilla"
            ></iframe>
        </div>
    </section>
    <!--Boton flotante-->
    <a href="https://buy.stripe.com/cNi8wPaaKdeP3DL9yt4gg00" target="_blank"
            onclick="fbq('track', 'InitiateCheckout'); gtag('event', 'compra_iniciada', {event_category: 'boleto', event_label: 'grandezza_fest'}); gtag('event','conversion_event_begin_checkout')"
            class="hidden fixed bottom-6 right-6 z-50 bg-red-700 hover:bg-red-800 text-white font-semibold py-3 px-5 rounded-full shadow-lg transition-all duration-300 text-sm sm:text-base flex items-center gap-2">
        <!-- Ícono SVG de boleto -->
        <svg width="30px" height="30px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="32"
                  d="M366.05,146a46.7,46.7,0,0,1-2.42-63.42,3.87,3.87,0,0,0-.22-5.26L319.28,33.14a3.89,3.89,0,0,0-5.5,0l-70.34,70.34a23.62,23.62,0,0,0-5.71,9.24h0a23.66,23.66,0,0,1-14.95,15h0a23.7,23.7,0,0,0-9.25,5.71L33.14,313.78a3.89,3.89,0,0,0,0,5.5l44.13,44.13a3.87,3.87,0,0,0,5.26.22,46.69,46.69,0,0,1,65.84,65.84,3.87,3.87,0,0,0,.22,5.26l44.13,44.13a3.89,3.89,0,0,0,5.5,0l180.4-180.39a23.7,23.7,0,0,0,5.71-9.25h0a23.66,23.66,0,0,1,14.95-15h0a23.62,23.62,0,0,0,9.24-5.71l70.34-70.34a3.89,3.89,0,0,0,0-5.5l-44.13-44.13a3.87,3.87,0,0,0-5.26-.22A46.7,46.7,0,0,1,366.05,146Z"/>
            <line fill="none" stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="32" stroke-linecap="round" x1="250.5"
                  y1="140.44" x2="233.99" y2="123.93"/>
            <line fill="none" stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="32" stroke-linecap="round" x1="294.52"
                  y1="184.46" x2="283.51" y2="173.46"/>
            <line fill="none" stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="32" stroke-linecap="round" x1="338.54"
                  y1="228.49" x2="327.54" y2="217.48"/>
            <line fill="none" stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="32" stroke-linecap="round" x1="388.07"
                  y1="278.01" x2="371.56" y2="261.5"/>
        </svg>
        Comprar Boletos
    </a>

    <!-- Footer -->
    <footer class="bg-black text-stone-400 text-center py-8">
        <p>&copy; 2025 Grandezza Fest · Todos los derechos reservados</p>
    </footer>

@endsection

@push('scripts')
    <script>
        // Countdown script
        function countdown() {
            const countdownElement = document.getElementById('countdown');
            const eventDate = new Date('August 2, 2025 12:00:00').getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const distance = eventDate - now;

                if (distance < 0) {
                    countdownElement.innerHTML = '<p class="text-2xl font-bold text-stone-600">¡El evento ya comenzó!</p>';
                    clearInterval(interval);
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownElement.innerHTML = `
          <div><span>${days}</span><small>días</small></div>
          <div><span>${hours.toString().padStart(2, '0')}</span><small>horas</small></div>
          <div><span>${minutes.toString().padStart(2, '0')}</span><small>minutos</small></div>
          <div><span>${seconds.toString().padStart(2, '0')}</span><small>segundos</small></div>
        `;
            }

            updateCountdown();
            const interval = setInterval(updateCountdown, 1000);
        }

        countdown();
    </script>
    <script type="text/javascript">
        var exampleCallback = function () {
            console.log('Order complete!');
        };

        window.EBWidgets.createWidget({
            widgetType: 'checkout',
            eventId: '1466057159429',
            modal: true,
            modalTriggerElementId: 'eventbrite-widget-modal-trigger-1466057159429',
            onOrderComplete: exampleCallback
        });
    </script>
    <script>
        const ctaButton = document.querySelector('.ctaButton');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 600) {
                ctaButton.classList.remove('hidden');
                ctaButton.classList.add('block');
            } else {
                ctaButton.classList.remove('block');
                ctaButton.classList.add('hidden');
            }
        });
    </script>

@endpush
@section('styles')
    <style type="text/css">
        /* Countdown styles */
        .countdown {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 2rem;
        }

        .countdown > div {
            background: #b91c1c;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            text-align: center;
            min-width: 70px;
            box-shadow: 0 4px 8px rgb(185 28 28 / 0.5);

        }

        .countdown > div span {
            display: block;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1;
        }

        .countdown > div small {
            display: block;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #f87171;
        }

        .font-alt {
            color: #bb8a69;
        }

        @media (max-width: 768px) {
            .countdown {
                display: none;
            }

        }

    </style>
@endsection

