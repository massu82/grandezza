@extends('layouts.master')
@section('title', 'Inicio')
@section('content')

    <!-- Slider Section -->
    <div id="slider-section" class="slider-section">
        <div id="carouselexamplegeneric" class="carousel slide slider-indexone" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselexamplegeneric" data-bs-slide-to="0"
                        class="active"></button>
                <button type="button" data-bs-target="#carouselexamplegeneric" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselexamplegeneric" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carouselexamplegeneric" data-bs-slide-to="3"></button>
            </div>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="/images/slider/slide-4.webp" alt="slide-1">
                    <div class="container">
                        <div class="slider-box">
                            <button class="btn">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/slider/slide-1.webp" alt="slide-2">
                    <div class="container">
                        <div class="slider-box">
                            <button class="btn">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/slider/slide-2.webp" alt="slide-3">
                    <div class="container">
                        <div class="slider-box">
                            <button class="btn">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/slider/slide-3.webp" alt="slide-4">
                    <div class="container">
                        <div class="slider-box">
                            <button class="btn">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a title="Previous" class="carousel-control-prev" data-bs-target="#carouselexamplegeneric" role="button"
               data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a title="Next" class="carousel-control-next" data-bs-target="#carouselexamplegeneric" role="button"
               data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>

    </div>
    <!-- Slider Section /- -->
    <!-- Category Section -->
    <div id="category-section" class="category-section bottom-shadow">
        <!-- container -->
        <div class="container">
            <div class="category-box-main categories-slider">
                <!-- Owl Carousel -->
                <div class="our-partner">
                    <div id="categories-list" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="category-box">
                                <span class="sale">+786</span>
                                <a title="Women’s Wear" href="#">
                                    <img src="images/category/09.webp" alt="cat-img"/>


                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <a title="Accessories" href="#">
                                    <img src="images/category/02.webp" alt="cat-img"/>

                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <span class="new">New</span>
                                <a title="Kids Wear" href="#">
                                    <img src="images/category/04.webp" alt="cat-img"/>

                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <a title="Women Accessories" href="#">
                                    <img src="images/category/07.webp" alt="cat-img"/>

                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <span class="new">New</span>
                                <a title="Kids Wear" href="#">
                                    <img src="images/category/05.webp" alt="cat-img"/>

                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <a title="Women Accessories" href="#">
                                    <img src="images/category/06.webp" alt="cat-img"/>
                                    <span>Women Accessories</span>
                                    <div class="cat-hover"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container /- -->
    </div><!-- Category Section /- -->

    <!-- Feature Product -->
    <Section id="featured-products" class="featured-products bottom-shadow">
        <!-- container -->
        <div class="container">
            <x-name-section>
                Promociones
            </x-name-section>

            <div class="category-box-main product-box-main row">
                @foreach($productos as $producto)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="main-product">
                            <div class="category-box product-box">
                                <span class="sale">25%</span>
                                <div class="inner-product">
                                    <img src="/images/producto/{{ $producto->imagen }}" alt="{{ $producto->nombre }}"/>
                                    <div class="product-box-inner">
                                        <ul>
                                            <li><a title="Eye" href="/images/producto/{{ $producto->imagen }}"><i
                                                        class="fa fa-eye"></i></a></li>
                                            <li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
                                        </ul>
                                        <a title="Add to cart" href="#" class="btn">Agregar</a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="product-title">{{ $producto->nombre }}</a>
                            <span class="amount"><del>&dollar;24.99</del> &dollar;{{$producto->precio, 2}}</span>
                        </div>
                    </div>
                @endforeach

            </div>

        </div><!-- container /- -->
    </section>
    <!-- Feature Product /- -->

    <!-- Feature Product -->
    <Section id="blog-section" class="blog-section bottom-shadow">
        <!-- container -->
        <div class="container">
            <!-- Section Header -->
            <x-name-section>
                Eventos
            </x-name-section>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="badge-box">
                        <img src="images/evento/01.webp" alt="offer img"/>
                        <div class="badge-icon">
                            <img src="images/blog/badge-icon.webp" alt="badge icon"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6 blog-content">
                    <article>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4 ow-left-padding">
                                <a class="post-thumbnail"><img src="images/evento/02.webp"
                                                               alt="post-thumbnail"/></a>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">Grandezza Wine Tour</a></h2>
                                </header>
                                <footer class="entry-footer">
									<span class="posted-on">
										<span class="sr-only">Publicado el </span>
										<a rel="bookmark" href="#">
											<span class="entry-date">04/12/14</span>
											<svg viewBox="0 0 276.338 276.338">
												<path
                                                    d="M267.207,99.838v-37.64v-4.123c0-21.569-19.036-39.141-42.689-39.748v0.005v9.549v0.009v9.6v0.019v5.454    c0,13.999-11.388,25.387-25.384,25.387c-13.997,0-25.385-11.388-25.385-25.387v-5.582v-9.558v-9.558h-71.98v9.558v9.558v5.582    c0,13.999-11.388,25.387-25.386,25.387c-13.997,0-25.384-11.388-25.384-25.387v-5.372v-0.033v-9.631v-0.009V18.37V18.36    C27.737,19.345,9.131,36.756,9.131,58.07v4.123v37.64v132.573c0,24.218,19.709,43.932,43.929,43.932h170.216    c24.217,0,43.927-19.714,43.927-43.932V99.838H267.207z M248.09,232.411c0,13.684-11.131,24.811-24.814,24.811H53.065    c-13.682,0-24.812-11.127-24.812-24.811V99.838H248.09V232.411z"/>
												<path
                                                    d="M65.339,11.049v7.215v9.558v9.558v5.582c0,6.104,4.945,11.049,11.049,11.049c6.102,0,11.049-4.945,11.049-11.049v-5.582    v-9.558v-9.558v-7.215C87.438,4.945,82.491,0,76.389,0C70.284,0.005,65.339,4.95,65.339,11.049z"/>
												<path
                                                    d="M199.137,0.005c-6.104,0-11.051,4.945-11.051,11.049v7.215v9.558v9.558v5.582c0,6.104,4.946,11.049,11.051,11.049    s11.052-4.945,11.052-11.049v-5.587v-9.558v-9.558v-7.215C210.18,4.95,205.238,0.005,199.137,0.005z"/>
												<path
                                                    d="M106.19,231.87c12.463,0,21.875-3.481,28.238-10.445c6.352-6.963,9.535-15.037,9.535-24.222    c0-8.737-2.719-15.626-8.163-20.666c-1.477-1.354-2.814-2.437-4.009-3.239c-2.188-1.475-2.352-2.529-0.292-4.125    c1.157-0.901,2.294-1.988,3.407-3.268c3.794-4.392,5.691-9.782,5.691-16.176c0-9.026-3.171-16.23-9.532-21.597    s-14.725-8.048-25.095-8.048c-5.582,0-10.296,0.674-14.137,2.021c-3.839,1.349-7.15,3.292-9.945,5.841    c-3.739,3.594-6.48,7.512-8.23,11.759c-1.15,3.388-1.949,6.921-2.39,10.584c-0.315,2.623,1.769,4.761,4.406,4.761h10.356    c2.64,0,4.674-2.156,5.057-4.77c0.465-3.174,1.505-5.853,3.116-8.032c2.366-3.192,6.065-4.793,11.093-4.793    c4.383,0,7.775,1.297,10.193,3.893c2.408,2.595,3.619,5.964,3.619,10.108c0,6.395-2.366,10.637-7.089,12.732    c-2.053,0.933-5.29,1.544-9.696,1.838c-2.632,0.168-4.774,2.324-4.774,4.957v5.717c0,2.637,2.147,4.756,4.784,4.9    c4.669,0.248,8.254,0.878,10.744,1.899c5.773,2.399,8.66,7.169,8.66,14.3c0,5.396-1.559,9.521-4.669,12.396    c-3.11,2.87-6.763,4.303-10.944,4.303c-6.823,0-11.532-2.618-14.118-7.859c-0.845-1.731-1.433-3.733-1.767-6.011    c-0.383-2.614-2.462-4.771-5.106-4.771H73.726c-2.639,0-4.718,2.138-4.427,4.761c0.714,6.478,2.343,11.878,4.879,16.194    C80.157,226.853,90.831,231.87,106.19,231.87z"/>
												<path
                                                    d="M165.582,154.303h15.976c2.637,0,4.778,2.138,4.778,4.779v65.312c0,2.637,2.143,4.779,4.779,4.779h12.308    c2.637,0,4.778-2.143,4.778-4.779v-99.005c0-2.637-2.142-4.779-4.778-4.779h-8.266c-2.637,0-4.812,0.994-5.064,2.188    c-0.135,0.63-0.312,1.349-0.541,2.151c-0.942,3.244-2.343,5.839-4.182,7.785c-2.688,2.842-6.175,4.739-10.454,5.691    c-1.997,0.448-5.115,0.808-9.344,1.092c-2.632,0.168-4.77,2.399-4.77,5.031v4.966    C160.802,152.161,162.949,154.303,165.582,154.303z"/>
											</svg>
										</a>
									</span>
                                    <span class="comments-link">
										<a href="#">12
											<svg viewBox="0 0 441.6 441.6">
												<path
                                                    d="M406.975,205.046v5.087c0,46.294-37.663,83.958-83.958,83.958H201.071v10.472c0,22.139,17.946,40.084,40.083,40.084    h101.938l46.158,45.411c1.645,1.617,3.828,2.477,6.047,2.477c1.123,0,2.254-0.221,3.33-0.67c3.204-1.344,5.289-4.479,5.289-7.951    v-39.345c21.019-1.242,37.683-18.675,37.683-40.006V244.75C441.6,224.467,426.528,207.711,406.975,205.046z"/>
												<path
                                                    d="M383.787,208.459v-95.437c0-35.323-28.636-63.958-63.958-63.958H63.958C28.635,49.064,0,77.699,0,113.022v95.437    c0,34.037,26.589,61.851,60.126,63.833v62.777c0,5.542,3.327,10.544,8.438,12.686c1.718,0.721,3.522,1.069,5.313,1.069    c3.542,0,7.025-1.368,9.649-3.95l73.65-72.457h162.651C355.152,272.418,383.787,243.783,383.787,208.459z"/>
											</svg>
										</a>
									</span>
                                    <span class="byline">
										<span class="author vcard">
											<span class="sr-only">Autor</span>
											<a href="#" class="url fn n">Artist
												<svg viewBox="0 0 43.028 43.028">
													<path
                                                        d="M39.561,33.971l-0.145,0.174c-4.774,5.728-11.133,8.884-17.902,8.884c-6.77,0-13.128-3.155-17.903-8.884l-0.144-0.174   l0.034-0.223c0.922-6.014,4.064-10.845,8.847-13.606l0.34-0.196l0.271,0.284c2.259,2.37,5.297,3.674,8.554,3.674   s6.295-1.305,8.554-3.674l0.271-0.284l0.34,0.196c4.783,2.761,7.925,7.592,8.848,13.606L39.561,33.971z M21.514,21.489   c5.924,0,10.744-4.82,10.744-10.744C32.258,4.821,27.438,0,21.514,0S10.77,4.821,10.77,10.744S15.59,21.489,21.514,21.489z"/>
												</svg>
											</a>
										</span>
									</span>
                                </footer>
                                <div class="entry-content">
                                    <p>Quisque finibus eleifend elit, et mattis magna dignissim a. Phasellus auctor
                                        facilisis mollis.</p>
                                </div>
                                <a href="#" class="read-more">Leer más</a>
                            </div>
                        </div>
                    </article>

                    <article>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4 ow-left-padding">
                                <a class="post-thumbnail"><img src="images/evento/03.webp" alt="post-thumbnail"/
                                                               alt="post-thumbnail"/></a>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">GOLD at mollis nibh, quis
                                            varius massa.
                                            Pellentesque nibh massa.</a></h2>
                                </header>
                                <footer class="entry-footer">
									<span class="posted-on">
										<span class="sr-only">Publicado el </span>
										<a rel="bookmark" href="javascript:;">
											<span class="entry-date">03/12/14
												<svg viewBox="0 0 276.338 276.338">
													<path
                                                        d="M267.207,99.838v-37.64v-4.123c0-21.569-19.036-39.141-42.689-39.748v0.005v9.549v0.009v9.6v0.019v5.454    c0,13.999-11.388,25.387-25.384,25.387c-13.997,0-25.385-11.388-25.385-25.387v-5.582v-9.558v-9.558h-71.98v9.558v9.558v5.582    c0,13.999-11.388,25.387-25.386,25.387c-13.997,0-25.384-11.388-25.384-25.387v-5.372v-0.033v-9.631v-0.009V18.37V18.36    C27.737,19.345,9.131,36.756,9.131,58.07v4.123v37.64v132.573c0,24.218,19.709,43.932,43.929,43.932h170.216    c24.217,0,43.927-19.714,43.927-43.932V99.838H267.207z M248.09,232.411c0,13.684-11.131,24.811-24.814,24.811H53.065    c-13.682,0-24.812-11.127-24.812-24.811V99.838H248.09V232.411z"/>
													<path
                                                        d="M65.339,11.049v7.215v9.558v9.558v5.582c0,6.104,4.945,11.049,11.049,11.049c6.102,0,11.049-4.945,11.049-11.049v-5.582    v-9.558v-9.558v-7.215C87.438,4.945,82.491,0,76.389,0C70.284,0.005,65.339,4.95,65.339,11.049z"/>
													<path
                                                        d="M199.137,0.005c-6.104,0-11.051,4.945-11.051,11.049v7.215v9.558v9.558v5.582c0,6.104,4.946,11.049,11.051,11.049    s11.052-4.945,11.052-11.049v-5.587v-9.558v-9.558v-7.215C210.18,4.95,205.238,0.005,199.137,0.005z"/>
													<path
                                                        d="M106.19,231.87c12.463,0,21.875-3.481,28.238-10.445c6.352-6.963,9.535-15.037,9.535-24.222    c0-8.737-2.719-15.626-8.163-20.666c-1.477-1.354-2.814-2.437-4.009-3.239c-2.188-1.475-2.352-2.529-0.292-4.125    c1.157-0.901,2.294-1.988,3.407-3.268c3.794-4.392,5.691-9.782,5.691-16.176c0-9.026-3.171-16.23-9.532-21.597    s-14.725-8.048-25.095-8.048c-5.582,0-10.296,0.674-14.137,2.021c-3.839,1.349-7.15,3.292-9.945,5.841    c-3.739,3.594-6.48,7.512-8.23,11.759c-1.15,3.388-1.949,6.921-2.39,10.584c-0.315,2.623,1.769,4.761,4.406,4.761h10.356    c2.64,0,4.674-2.156,5.057-4.77c0.465-3.174,1.505-5.853,3.116-8.032c2.366-3.192,6.065-4.793,11.093-4.793    c4.383,0,7.775,1.297,10.193,3.893c2.408,2.595,3.619,5.964,3.619,10.108c0,6.395-2.366,10.637-7.089,12.732    c-2.053,0.933-5.29,1.544-9.696,1.838c-2.632,0.168-4.774,2.324-4.774,4.957v5.717c0,2.637,2.147,4.756,4.784,4.9    c4.669,0.248,8.254,0.878,10.744,1.899c5.773,2.399,8.66,7.169,8.66,14.3c0,5.396-1.559,9.521-4.669,12.396    c-3.11,2.87-6.763,4.303-10.944,4.303c-6.823,0-11.532-2.618-14.118-7.859c-0.845-1.731-1.433-3.733-1.767-6.011    c-0.383-2.614-2.462-4.771-5.106-4.771H73.726c-2.639,0-4.718,2.138-4.427,4.761c0.714,6.478,2.343,11.878,4.879,16.194    C80.157,226.853,90.831,231.87,106.19,231.87z"/>
													<path
                                                        d="M165.582,154.303h15.976c2.637,0,4.778,2.138,4.778,4.779v65.312c0,2.637,2.143,4.779,4.779,4.779h12.308    c2.637,0,4.778-2.143,4.778-4.779v-99.005c0-2.637-2.142-4.779-4.778-4.779h-8.266c-2.637,0-4.812,0.994-5.064,2.188    c-0.135,0.63-0.312,1.349-0.541,2.151c-0.942,3.244-2.343,5.839-4.182,7.785c-2.688,2.842-6.175,4.739-10.454,5.691    c-1.997,0.448-5.115,0.808-9.344,1.092c-2.632,0.168-4.77,2.399-4.77,5.031v4.966    C160.802,152.161,162.949,154.303,165.582,154.303z"/>
												</svg>
											</span>
										</a>
									</span>
                                    <span class="comments-link">
										<a href="#">55
											<svg viewBox="0 0 441.6 441.6">
												<path
                                                    d="M406.975,205.046v5.087c0,46.294-37.663,83.958-83.958,83.958H201.071v10.472c0,22.139,17.946,40.084,40.083,40.084    h101.938l46.158,45.411c1.645,1.617,3.828,2.477,6.047,2.477c1.123,0,2.254-0.221,3.33-0.67c3.204-1.344,5.289-4.479,5.289-7.951    v-39.345c21.019-1.242,37.683-18.675,37.683-40.006V244.75C441.6,224.467,426.528,207.711,406.975,205.046z"/>
												<path
                                                    d="M383.787,208.459v-95.437c0-35.323-28.636-63.958-63.958-63.958H63.958C28.635,49.064,0,77.699,0,113.022v95.437    c0,34.037,26.589,61.851,60.126,63.833v62.777c0,5.542,3.327,10.544,8.438,12.686c1.718,0.721,3.522,1.069,5.313,1.069    c3.542,0,7.025-1.368,9.649-3.95l73.65-72.457h162.651C355.152,272.418,383.787,243.783,383.787,208.459z"/>
											</svg>
										</a>
									</span>
                                    <span class="byline">
										<span class="author vcard">
											<span class="sr-only">Autor</span>
											<a title="" href="#" class="url fn n">Ajay
												<svg viewBox="0 0 43.028 43.028">
													<path
                                                        d="M39.561,33.971l-0.145,0.174c-4.774,5.728-11.133,8.884-17.902,8.884c-6.77,0-13.128-3.155-17.903-8.884l-0.144-0.174   l0.034-0.223c0.922-6.014,4.064-10.845,8.847-13.606l0.34-0.196l0.271,0.284c2.259,2.37,5.297,3.674,8.554,3.674   s6.295-1.305,8.554-3.674l0.271-0.284l0.34,0.196c4.783,2.761,7.925,7.592,8.848,13.606L39.561,33.971z M21.514,21.489   c5.924,0,10.744-4.82,10.744-10.744C32.258,4.821,27.438,0,21.514,0S10.77,4.821,10.77,10.744S15.59,21.489,21.514,21.489z"/>
												</svg>
											</a>
										</span>
									</span>
                                </footer>
                                <div class="entry-content">
                                    <p>Quisque finibus eleifend elit, et mattis magna dignissim a. Phasellus auctor
                                        facilisis mollis.</p>
                                </div>
                                <a href="#" class="read-more">Leer más</a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class=" col-12 col-md-12 col-lg-3">
                    <div class="badge-box">
                        <img src="images/evento/04.webp" alt="offer img"/>
                        <div class="middle-add">
                            <h3 class="text-white">Grandezza Wine Tour</h3>
                            <a title="Leer más" href="#" class="read-more">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Container /- -->
    </section>

@endsection
