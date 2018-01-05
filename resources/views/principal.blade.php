<!DOCTYPE html>
<html lang="en">

<head>
    <title>Control-@yield('title')</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    {!! Html::style('proyecto/css/font-awesome.min.css') !!}
    

    <!-- Carga de Galeria de imágenes -->
     {!! Html::style('proyecto/css/owl.carousel.min.css') !!}

    <!-- Carga de archivos css -->
    {!! Html::style('proyecto/css/bootstrap.css') !!}
    {!! Html::style('proyecto/css/animate.min.css') !!}
    {!! Html::style('proyecto/css/estilos.css') !!}
</head>
<body>
    <section class="bienvenidos">

        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="{{ asset('proyecto/images/logo.svg')}}" alt="Logo del sitio">
                </a>

                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li class="active"><a href="index.html">Inicio</a></li>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="contacto.html">Contacto</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Diseño de APPS para empresas</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Creamos aplicaciones según las necesidades y requerimientos de nuestros clientes.</p>
                <a href="contacto.html" class="btn btn-primary btn-lg">Ponte en contacto</a>
            </div>

        </div>
        <div class="flecha-bajar text-xs-center">
            <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>

    </section>
       
       
       
       @yield('content')
       
       
       
       
        <footer class="piedepagina p-y-1" role="contentinfo">
        <div class="container">
            <p>2016 © NETWORK Todos los derechos reservados</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->
    {!! Html::script('proyecto/js/jquery.min.js') !!}
    {!! Html::script('proyecto/js/bootstrap.min.js') !!}
    {!! Html::script('proyecto/js/owl.carousel.min.js') !!}
    {!! Html::script('proyecto/js/bootstrap.min.js') !!}
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoWidth: false,
            navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2,
                    margin: 20
                },
                800: {
                    items: 3,
                    margin: 20
                },
                1000: {
                    items: 4,
                    margin: 20
                }
            }
        })

    </script>
    {!! Html::script('proyecto/js/wow.min.js') !!}
    {!! Html::script('proyecto/js/smooth-scroll.min.js') !!}
    {!! Html::script('proyecto/js/sitio.js') !!}



</body>

</html>
