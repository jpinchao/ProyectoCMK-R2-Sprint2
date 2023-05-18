<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="/static/css/style.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{URL::asset('css/welcome.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('imagenes/logo.png') }}">
    <title>Inicio</title>
</head>

<body>

    <header class="container-nav">
        <!---Barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-light navbar-container-admin">
            <div class="container-fluid">


                <a><img src="/static/imagenes/" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-content" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto py-3 mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('busqueda')}}">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>

                    </ul>

                    <!--- AQUI BOTON DE REGISTRO-->

                    <div
                        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center  sm:pt-0">
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ url('/home') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline hm-u">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    style="height: 20px; width:20px">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    style="height: 20px; width:20px">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>
                            </a>
                            @else
                            <a role="button" href="{{ route('login') }}"
                                class="btn btn-info text-sm text-gray-700 dark:text-gray-500 underline">Iniciar
                                Sesión</a>


                            @if (Route::has('register'))
                            <a role="button" href="{{ route('register') }}"
                                class="btn btn-info text-sm text-gray-700 dark:text-gray-500 underline"
                                onclick="registrarse();">Registrarse</a>

                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>

                </div>

            </div>



        </nav>
        <!--fin barra navegacion-->
    </header>
    <div class="container-fluid">
        <div class="row">
            <main class="main col" id="dashboardt">
                <!-- buscador vista principal-->
                <div class="container container-buscador">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <a class="button btn btn-outline-success" role="button"
                            href="/templates/Inicio/Busqueda_producto/Busqueda_producto.html" type="submit">Search</a>
                    </form>
                </div>
                <!-- Carrusel-->
                <div class="container container-carrusel">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($productos as $key => $producto)
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}"
                                @if ($key===0) class="active" aria-current="true" @endif
                                aria-label="Slide {{ $key + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($productos as $key => $producto)
                            <div class="carousel-item @if ($key === 0) active @endif" data-bs-interval="2000">
                                <img src="{{ asset('imagenes/Products/' . $producto->imagen) }}" class="d-block"
                                    alt="Producto {{ $key + 1 }}" style="height: 250px; width: 250px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $producto->nombre }}</h5>
                                    <p>{{ $producto->descripcion }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!--FIN CARRUSEL NORMAL-->
                <!--CARRUSEL PRODUCTOS CATEGORIAS-->
                <div class="container container-categoria-producto">
                    @foreach ($categorias as $categoria)
                    <h5>{{ $categoria->nombre }}</h5>
                    <br>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                        <ul
                            class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-grid">
                            @foreach ($productos as $producto)
                            @if ($categoria->id === $producto->id_categoria)
                            <li>
                                <div class="uk-panel">
                                    <button type="button" class="btn btn-lg">
                                        <img src="{{ asset('imagenes/Products/' . $producto->imagen) }}"
                                            style="height: 150px; width: 150px;">
                                        {{ $producto->nombre }}
                                    </button>
                                    <div class="uk-position-center uk-panel"></div>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover bg-dark" href="#"
                            uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover bg-dark" href="#"
                            uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    @endforeach
                </div>

                <!-- FIN PRODUCTO CATEGORIA-->

                <!-- Tarjetas -->
                <div class="container container-card">
                    <div class="card-container">
                        @if ($productos->count() >= 3)
                        @foreach ($productos->take(3) as $producto)
                        <div class="card" style="text-align: center;">
                            <img src="{{ asset('imagenes/Products/' . $producto->imagen) }}"
                                style="height: 160px; width: 160px; object-fit: contain; display: block; margin: 0 auto;"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text">{{ $producto->descripcion }}</p>
                            </div>
                            <div class="card-body">
                                <a href="{{route('busqueda')}}" class="btn btn-dark">Comprar</a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <!-- Fin Tarjetas -->
                <footer class="container-footer justify-content-center">
                    <div class="row co-footer">
                        <div class="form-control bg-secondary"></div>
                        <div class="col-6 col-md-2">
                            <h5>Sección</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Inicio</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Características</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Precios</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Preguntas frecuentes</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Acerca de</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2 mb-3">
                            <h5>Sección</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Inicio</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Características</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Precios</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Preguntas frecuentes</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Acerca de</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 offset-md-1 mb-3">
                            <form>
                                <h5>Suscríbete a nuestro boletín</h5>
                                <p>Recibe un resumen mensual de las novedades y emocionantes noticias.</p>
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                    <label for="newsletter1" class="visually-hidden">Correo electrónico</label>
                                    <input id="newsletter1" type="text" class="form-control" placeholder="Correo electrónico">
                                    <button class="btn btn-primary" type="button">Suscribirse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </footer>
                




        </main>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.6/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>