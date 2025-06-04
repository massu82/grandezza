@extends('layouts.master')
@section('title', 'Wine Fest 2025')
@section('content')

    <!-- Page Breadcrumb -->
    <!-- container -->
    <div class="container tour">
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a title="Hone" href="./">INICIO</a></li>
                <li class="active">Eventos</li>
            </ol>
            <div class="return-home-link pull-right">
                <a title="Return Home Page" href="./">Regresar a Home</a>
            </div>
        </div>
        <div class="page-header bottom-shadow">
            <h3>Wine Tour 2025</h3>
            <h4>02 de Agosto</h4>
        </div><!-- Section Header /- -->
    </div><!-- container /- -->

    <!-- Page Breadcrumb /- -->
    <div class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-12 col-lg-7">
                    <article class="type-post">
                        <div class="row">
                            <div class="post-format col-12 col-ms-12 col-md-2 col-lg-2">
                                <h3 class="entry-date">02<span>AGO</span></h3>

                            </div>
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 ">
                                <div class="entry-cover">
                                    <!-- Carousel
                                    ================================================== -->
                                    <div id="blog-carousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item item active">
                                                <a title="Slider Image" href="#"><img src="images/events/slide-01.jpg"
                                                                                      alt="post thumbnail"/></a>
                                            </div>
                                            <div class="carousel-item item">
                                                <a title="Slider Image" href="#"><img src="images/events/slide-03.jpg"
                                                                                      alt="post thumbnail"/></a>
                                            </div>
                                            <div class="carousel-item item">
                                                <a title="Slider Image" href="#"><img src="images/events/slide-04.jpg"
                                                                                      alt="post thumbnail"/></a>
                                            </div>
                                        </div>
                                        <a title="Previous" class="left carousel-control-prev"
                                           data-bs-target="#blog-carousel" role="button" data-bs-slide="prev">
                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                        </a>
                                        <a title="Next" class="right carousel-control-next right"
                                           data-bs-target="#blog-carousel" role="button" data-bs-slide="next">
                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                        </a>
                                    </div><!-- /.carousel -->
                                </div>


                                <div class="entry-content">
                                    <div class="Typography_box">
                                        <div class="row">
                                            <div class="col-4"><h6><small>Faltan</small></h6></div>
                                            <div class="col-8"><h5 id="countdown" style="text-transform: uppercase"></h5></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4"><h6><small>Fecha del evento</small></h6></div>
                                            <div class="col-8"><h5>02 de Agosto</h5></div>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-4"><h6><small>Lugar del evento</small></h6></div>
                                            <div class="col-8"><h5>Hacienda San Juan Pueblilla</h5></div>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-4"><h6><small>Hora del evento</small></h6></div>
                                            <div class="col-8"><h5>12:00</h5></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="section-header">
                                                    <h3>Boletos Disponibles</h3>

                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>


                                <div class="single-post-comment">
                                    <!-- Section Header -->
                                    <h3 class="section-header">Promociones a grupos</h3>
                                    <!-- Section Header /- -->
                                    <div class="contact-form">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-4" for="firstname">Tu nombre</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="Tu nombre" id="firstname"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4">Email</label>
                                                <div class="col-md-8">
                                                    <input type="email" placeholder="Tu correo" id="txt_email"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4">Empresa</label>
                                                <div class="col-md-8">
                                                    <input type="text" placeholder="Nombre de la empresa" id="web-email"
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4">Comentario </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="drop-line bottom-shadow"></div>
                                            <div class="form-group">
                                                <a href="#">lipsum dolar sit amet</a>
                                                <input type="submit" class="btn btn-default  pull-right"
                                                       value="enviar formulario">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="content-sidebar col-md-offset-1 col-12 col-12 col-lg-5">

                    <aside class="widget widget_recent_entries">
                        <h2 class="widget-title"> Catas Disponibles </h2>
                        <ul>
                            <li class="cat-item bottom-shadow">
                                <div class="row">
                                    <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                        <a href="javascript:;" title="Latest Post">
                                            <img src="images/blog/widget-latest-pos-1.png" alt="post image"/>
                                        </a>
                                    </div>
                                    <div class="latest-post-content  col-12 col-sm-10 col-md-9 col-lg-10">
                                        <h3><a title="Etiam" href="#">Etiam leo neque, fringilla m neci Aliquam vel
                                                justo.</a></h3>
                                        <p>Quisque finibus eleifend elit, imsellus auctor facilisis mollis. Luctus
                                            libero.</p>
                                        <a title="Reservar" href="#" class="read-more">Reservar</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cat-item bottom-shadow">
                                <div class="row">
                                    <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                        <a href="javascript:;" title="Latest Post">
                                            <img src="images/blog/widget-latest-pos-2.png" alt="post image"/>
                                        </a>
                                    </div>
                                    <div class="latest-post-content col-12 col-sm-10 col-md-9 col-lg-10">
                                        <h3><a title="Mauris" href="#">Mauris a lectus facilisis ipsum sollicitudin.</a>
                                        </h3>
                                        <p>Muisque finibus eleifend elit, imsellus auctor facilisis mollis. Luctus
                                            libero.</p>
                                        <a title="Reservar" href="#" class="read-more">Reservar</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cat-item bottom-shadow">
                                <div class="row">
                                    <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                        <a href="javascript:;" title="Latest Post">
                                            <img src="images/blog/widget-latest-pos-3.png" alt="post image"/>
                                        </a>
                                    </div>
                                    <div class="latest-post-content col-12 col-sm-10 col-md-9 col-lg-10">
                                        <h3><a title="Suspendisse" href="#">Suspendisse metus risus, suscipit vel
                                                accumsan sed.</a></h3>
                                        <p>Uuisque finibus eleifend elit, imsellus auctor facilisis mollis. Luctus
                                            libero.</p>
                                        <a title="Reservar" href="#" class="read-more">Reservar</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_recent_post">
                        <h2 class="widget-title"> Hospedaje </h2>
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs bottom-shadow" role="tablist">
                                <li class="nav-item" role="presentation"><a title="Popular" class="nav-link active"
                                                                            id="popular-tab" data-bs-target="#popular"
                                                                            aria-controls="popular" role="tab"
                                                                            data-bs-toggle="tab" aria-selected="true">Popular</a>
                                </li>
                                <li class="nav-item" role="presentation"><a title="Comments" class="nav-link"
                                                                            id="comment-tab" data-bs-target="#comments"
                                                                            aria-controls="comments" role="tab"
                                                                            data-bs-toggle="tab" aria-selected="false">Comments</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel"
                                     aria-labelledby="popular-tab">
                                    <ul>
                                        <li class="cat-item bottom-shadow">
                                            <div class="row">
                                                <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                                    <a href="javascript:;" title="Recent Post">
                                                        <img src="images/blog/widget-recent-post-1.jpg"
                                                             alt="recent post image"/>
                                                    </a>
                                                </div>
                                                <div class="latest-post-content col-12 col-sm-10 col-md-9 col-lg-10">
                                                    <h3><a title="Etiam" href="#">Etiam leo neque, fringilla m neci
                                                            Aliquam vel justo.</a></h3>
                                                    <p>Quisque finibus eleifend elit, imsellus auctor facilisis mollis.
                                                        Luctus libero.</p>
                                                    <a title="Reservar" href="#" class="read-more">Reservar</a>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="cat-item bottom-shadow">
                                            <div class="row">
                                                <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                                    <a href="javascript:;" title="Recent Post">
                                                        <img src="images/blog/widget-recent-post-2.jpg"
                                                             alt="recent post image"/>
                                                    </a>
                                                </div>
                                                <div class="latest-post-content col-12 col-sm-10 col-md-9 col-lg-10">
                                                    <h3><a title="Mauris" href="#">Mauris a lectus facilisis
                                                            ipsum sollicitudin.</a></h3>
                                                    <p>Muisque finibus eleifend elit, imsellus auctor facilisis
                                                        mollis. Luctus libero.</p>
                                                    <a title="Reservar" href="#" class="read-more">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cat-item bottom-shadow">
                                            <div class="row">
                                                <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                                    <a href="javascript:;" title="Recent Post">
                                                        <img src="images/blog/widget-recent-post-3.jpg"
                                                             alt="recent post image"/>
                                                    </a>
                                                </div>
                                                <div
                                                    class="latest-post-content col-12 col-sm-10 col-md-9 col-sm-10 col-lg-10">
                                                    <h3><a title="Suspendisse" href="#">Suspendisse metus risus,
                                                            suscipit vel accumsan sed.</a></h3>
                                                    <p>Uuisque finibus eleifend elit, imsellus auctor facilisis
                                                        mollis. Luctus libero.</p>
                                                    <a title="Reservar" href="#" class="read-more">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comment-tab">
                                    <ul>
                                        <li class="cat-item bottom-shadow">
                                            <div class="row">
                                                <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                                    <a href="javascript:;" title="Recent Post">
                                                        <img src="images/blog/widget-recent-post-1.jpg"
                                                             alt="recent post image"/>
                                                    </a>
                                                </div>
                                                <div class="latest-post-content col-12 col-sm-10 col-md-9 col-lg-10">
                                                    <h3><a title="Etiam" href="#">Etiam leo neque, fringilla m neci
                                                            Aliquam vel justo.</a></h3>
                                                    <p>Quisque finibus eleifend elit, imsellus auctor facilisis mollis.
                                                        Luctus libero.</p>
                                                    <a title="Reservar" href="#" class="read-more">Reservar</a>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="cat-item bottom-shadow">
                                            <div class="row">
                                                <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                                    <a href="javascript:;" title="Recent Post">
                                                        <img src="images/blog/widget-recent-post-2.jpg"
                                                             alt="recent post image"/>
                                                    </a>
                                                </div>
                                                <div class="latest-post-content col-12 col-sm-10 col-md-9 col-lg-10">
                                                    <h3><a title="Mauris" href="#">Mauris a lectus facilisis
                                                            ipsum sollicitudin.</a></h3>
                                                    <p>Muisque finibus eleifend elit, imsellus auctor facilisis
                                                        mollis. Luctus libero.</p>
                                                    <a title="Reservar" href="#" class="read-more">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cat-item bottom-shadow">
                                            <div class="row">
                                                <div class="post-thumbnail col-12 col-sm-2 col-md-3 col-lg-2">
                                                    <a href="javascript:;" title="Recent Post">
                                                        <img src="images/blog/widget-recent-post-3.jpg"
                                                             alt="recent post image"/>
                                                    </a>
                                                </div>
                                                <div
                                                    class="latest-post-content col-12 col-sm-10 col-md-9 col-sm-10 col-lg-10">
                                                    <h3><a title="Suspendisse" href="#">Suspendisse metus risus,
                                                            suscipit vel accumsan sed.</a></h3>
                                                    <p>Uuisque finibus eleifend elit, imsellus auctor facilisis
                                                        mollis. Luctus libero.</p>
                                                    <a title="Reservar" href="#" class="read-more">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget_recent_tweets">
                        <h2 class="widget-title"> Recent Tweets</h2>
                        <ul>
                            <li>
                                <a title="Twitter" href="#">
                                    <svg viewBox="0 0 512 512">
                                        <path
                                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                    </svg>
                                    <span>@webstrot</span>
                                </a>
                                <p>2014's most memorable moments happened on Twitter. Explore the #YearonTwitter<a
                                        href="#"> http://2014.twitter.com </a></p>
                                <a title="Url" href="#">www.webstrot.com</a>
                                <span>10:26 PM - 12 Dec 2014</span>
                            </li>
                            <li>
                                <a title="Twitter" href="#">
                                    <svg viewBox="0 0 512 512">
                                        <path
                                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                    </svg>
                                    <span>@webstrot</span>
                                </a>
                                <p>Men have become the tools of their tools.</p>
                                <a title="Time" href="#">www.webstrot.com</a>
                                <span>10:26 PM - 12 Dec 2014</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- Blog-Content /- -->
    @push('scripts')
        <script>
            // Fecha del evento (ajusta al 20 de abril de 2025 a las 18:00)
            const countdownDate = new Date("August 02, 2025 18:00:00").getTime();

            const countdown = document.getElementById("countdown");
            const interval = setInterval(() => {
                const now = new Date().getTime();
                const distance = countdownDate - now;

                if (distance < 0) {
                    clearInterval(interval);
                    countdown.innerHTML = "¡El evento ha comenzado!";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdown.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }, 1000);
        </script>
    @endpush

@endsection

