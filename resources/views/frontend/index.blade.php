
@extends("principal")
@section('title', 'Principal')
@section("content")
	
    <section class="agencia p-y-1" id="agencia">

        <div class="container">


            <div class="row">

                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-xs-center text-md-left font-weight-bold">Agencia de programación de aplicaciones</h2>
                    <p>NETWORK te asesora en el desarrollo y el diseño para que tu Aplicación Movil salga a la luz. Ponemos a tu disposición las mejores plataformas del mundo de las telecomunicaciones.</p>
                    <p>Ponemos a tu alcance un servicio adaptado a tus necesidades, desde una consultoría integral con supervisión de todos y cada uno de los pasos que has de seguir para crear un negocio actual (comunicación, diseño corporativo, tecnologías...) a productos adaptados a metodologías ágiles de creación de apps diseñadas por nosotros y avaladas por nuestros años de experiencia.</p>

                </div>
                <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                    <img src="{{ asset('proyecto/images/agencia.svg')}}" alt="La agencia">
                </div>
            </div>
        </div>

    </section>
    <section class="tu-mejor-eleccion p-y-1">
        <div class="container">

            <h2 class="h3 text-xs-center font-weight-bold">¿Porque somos <span>tu mejor elección?</span></h2>
            <p class="text-xs-center">
                Desarrollo web y Apps para empresas y profesionales
            </p>

            <div class="row">
                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Aplicaciones para la nube</h4>
                            <p class="hidden-md-down">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Fábrica de software</h4>
                            <p class="hidden-md-down">Servicios de mejora correctiva y evolutiva para sus aplicaciones.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.1s">

                        <i class="fa  fa-comment-o" aria-hidden="true"></i>

                        <div class="contenedor-eleccion">
                            <h4>Gestión en la Nube</h4>
                            <p class="hidden-md-down">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                </ul>

                <div class="hidden-md-down col-lg-4">
                    <img src="{{ asset('proyecto/images/mundo.svg')}}" alt="Mundo movil">
                </div>

                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                        <i class="fa  fa-calendar" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Videojuegos</h4>
                            <p class="hidden-md-down">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                        <i class="fa  fa-check-square-o" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Diseño personalizado</h4>
                            <p class="hidden-md-down">Customiza hasta el último píxel de tu App. Infinitas Posibilidades.</p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.3s">
                        <i class="fa  fa-cogs" aria-hidden="true"></i>
                        <div class="contenedor-eleccion">
                            <h4>Funciones a medida</h4>
                            <p class="hidden-md-down">Tienes más de 50 funciones predesarrolladas para escoger.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <main class="servicios p-y-1">
        <div class="container">
            <h2 class="text-xs-center font-weight-bold">Nuestros Servicios</h2>


            <div class="row">
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="{{ asset('proyecto/images/servicio-1.svg')}}" alt="Servicio Desarrollo de Aplicaciones Mobiles">
                    <h3><a href="#"> Desarrollo de Aplicaciones Mobiles </a></h3>
                    <p class="hidden-sm-down">Desarrollamos aplicaciones móviles y plataformas web. Nuestra principal cualidad está en el desarrollo de software a medida de tus necesidades.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>

                </article>

                <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                    <img src="{{ asset('proyecto/images/servicio-2.svg')}}" alt="Servicio Consultoría Tecnológica">
                    <h3><a href="#">Consultoría Tecnológica</a></h3>
                    <p class="hidden-sm-down">Ofrecemos consultoría tecnológica especializada en movilidad, necesaria previo al desarrollo de cualquier proyecto.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

                <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                    <img src="{{ asset('proyecto/images/servicio-3.svg')}}" alt="Servicio Marketing y publicidad Movil">
                    <h3><a href="#">Marketing y publicidad Movil</a></h3>
                    <p class="hidden-sm-down">Desarrollamos campañas publicitarias para tus APP. Hacemos conocer tu marca en el momento exacto para conseguir un mayor inpacto.</p>
                    <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                </article>

            </div>
        </div>
    </main>


    <section class="ultimos-proyectos p-y-1">
        <div class="container">
            <h2 class="text-xs-center font-weight-bold">Últimos proyectos</h2>

            <div class="owl-carousel">
                <a href="#">
                    <h4>App Lima Travels</h4>
                    <img src="images/proyecto1.jpg" alt="App Lima Travels">
                </a>

                <a href="#">
                    <h4>Apps Uber</h4>
                    <img src="images/proyecto2.jpg" alt="Apps Uber">
                </a>

                <a href="#">
                    <h4>App Pizza Perú</h4>
                    <img src="images/proyecto3.jpg" alt="App Pizza Perú">
                </a>

                <a href="#">
                    <h4>App Muebles Hoy</h4>
                    <img src="images/proyecto4.jpg" alt="App Muebles Hoy">
                </a>

                <a href="#">
                    <h4>App Clima Perú</h4>
                    <img src="images/proyecto5.jpg" alt="App Clima Perú">
                </a>

                <a href="#">
                    <h4>App  Playa</h4>
                    <img src="images/proyecto6.jpg" alt="App  Playa">
                </a>


            </div>
        </div>
    </section>

@endsection

