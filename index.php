<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ONG Libre Expresión</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="frontend/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="frontend/css/styleI.css">
    <link rel="icon" href="frontend/res/SOL.ico">
</head>

<body>

    <!-- Primera Pantalla -->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container ">
                <a class="navbar-brand" href="#">
                    <img src="frontend/res/Logo.svg" id="image" class="img-responsive" width="210" heigth="210"
                        style="margin:-60px; margin-left:-12px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="md-form my-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-100">
                            <li class="nav-item active">
                                <a class="nav-link" href="frontend/login.php">Iniciar Sesión
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#home">Home</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </nav>

        <!-- Full Page Intro -->
        <div class="view"
            style=" background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container" id="home">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 animated rollIn"
                            data-wow-delay="0.3s">
                            <h1 class="h1-responsive font-weight-bold mt-sm-5">Plataforma Educativa</h1>
                            <hr class="hr-light">
                            <h6 class="mb-4"> Libre Expresión ha sido un Centro de Formación Profesional desde el 2009,
                                ha formado a la
                                fecha mas de 2,500 jóvenes en Tegucigalpa y San Pedro Sula.<br>
                                Nuestros programas se vinculan con necesidades actuales en el mercado laboral para que
                                la
                                formación sirva como un puente al empleo.</h6>
                            <a class="btn btn-white btn-rounded" href="frontend/registro.php">Registrate</a>
                            <a class="btn btn-outline-white btn-rounded" data-scroll href="#acerca">Saber más de
                                Nosotros</a>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5 mt-xl-5 wow tada" data-wow-delay="0.3s">
                            <img src="frontend/res/2.svg" alt="" class="animated fadeInRight">
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
    <!-- Finalizacion Primera Pantalla -->





    <br><br>

    <!-- Segunda Pantalla -->
    <section class="container" id="acerca">

        <h3 class="text-center font-weight-bold mb-4 pb-2">Acerca de Libre Expresión</h3>
        <p class="text-center text-muted w-responsive mx-auto mb-5">Libre Expresión elabora proyectos y programas
            basados en las necesidades y prioridades de las comunidades apostando por el fortalecimiento de capacidades
            de las mismas.</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-5">

                <img src="frontend/res/Imagen11.jpg" class="img-fluid rounded z-depth-1 wow bounce"
                    alt="Sample project image">

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">
                <br><br><br>
                <ul class="list-unstyled fa-ul mb-0">
                    <li class="d-flex justify-content-center pl-4">
                        <span class="fa-li"><i class="fas fa-book fa-2x cyan-text"></i></span>
                        <div>
                            <h5 class="font-weight-bold mb-3">Nuestra Misión:</h5>
                            <p class="text-muted">Promovemos la expresión y liderazgo de jóvenes brindando oportunidades
                                de formación, utilizando la fotografía en conjunto con otros medios artísticos para
                                educar, comunicar y estimular el compromiso social.</p>
                        </div>
                    </li>
                    <li class="d-flex justify-content-center pl-4">
                        <span class="fa-li"><i class="fas fa-hand-holding-heart fa-2x pink-text"></i></span>
                        <div>
                            <h5 class="font-weight-bold mb-3">Nuestra Visión:</h5>
                            <p class="text-muted">Jóvenes que se expresan libremente y contribuyen al desarrollo de sus
                                comunidades.</p>
                        </div>
                    </li>
                    <li class="d-flex  pl-4">
                        <span class="fa-li"><i class="fas fa-bible fa-2x  teal-text"></i></span>
                        <div>
                            <h5 class="font-weight-bold mb-0">Nuestros Valores:</h5>
                            <p class="text-muted mb-0">-Compartir -Confrontar -Conectar </p>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-5">

    </section>
    <!-- Finalizacion Segunda Pantalla -->



    <br><br>


    <!-- Tercera Pantalla -->
    <section class="container">

        <h4 class="font-weight-bold text-center dark-grey-text pb-2">Programas de Formación Profesional</h4>
        <hr class="w-header my-4">
        <p class="lead text-center text-muted pt-2 mb-5">Desde el 2009 ofrecemos cursos libres y cursos profesionales a
            jóvenes de 18 a 30 años con el objetivo de prepararlos para adquirir habilidades que aumenten la
            empleabilidad, fomenten el pensamiento creativo y crítico, y enriquezcan su desempeño académico.</p>

        <div class="row">

            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card  rgba-indigo-strong text-white">
                    <div class="card-body">
                        <p class="mt-4 text-center pt-2"><i class="fas fa-camera fa-4x"></i></p>
                        <h5 class="font-weight-normal text-center my-4 py-2"><a class="text-white" href="#">ÁREA DE
                                ARTÍSTICA</a>
                        </h5>
                        <p class=" mb-4">* Fotografía <br>
                            * Teatro <br>
                            * Diseño gráfico <br>
                            * Community Manager <br>
                            * Video <br>
                            * Muralismo <br></p>
                    </div>
                </div>
            </div>




            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card  cyan lighten-1 text-white">
                    <div class="card-body">
                        <p class="mt-4 text-center pt-2"><i class="far fa-handshake  fa-4x"></i></p>
                        <h5 class="font-weight-normal text-center my-4 py-2"><a class="text-white" href="#">ÁREA DE
                                SERVICIO</a>
                        </h5>
                        <p class=" mb-4">
                            * Atención al Cliente <br>
                            * Barismo <br>
                            * Asesor de Ventas <br>
                            * Impulsación <br>
                            * Operario Textil <br>
                            * Operario de Supermercados <br></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card  amber accent-3 text-white">
                    <div class="card-body">
                        <p class="mt-4 text-center pt-2"><i class="fas fa-chart-line fa-4x"></i></p>
                        <h5 class="font-weight-normal text-center my-4 py-2"><a class="text-white" href="#">FORMACIÓN 
                        COMPLEMENTARIA</a></h5>
                        <p class=" mb-4">* Habilidades para la Vida. <br>
                            * Guia de Empleabilidad y Adaptacion Laboral. <br>
                            * Taller de Manipulación de Alimentos. <br>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card  teal lighten-1 text-white">
                    <div class="card-body">
                        <p class="mt-4 text-center pt-2"><i class="fas fa-hammer fa-4x"></i></p>
                        <h5 class="font-weight-normal text-center my-4 py-2"><a class="text-white" href="#">ÀREA DE
                                CONSTRUCCIÓN
                                CIVIL</a></h5>
                        <p class="mb-4">* Armado de Hierro. <br>
                            * Electricidad <br>
                            * Refrigeración Comercial. <br>
                            * Pintura Arquitectónica. <br>
                            * Encofrado</p>
                    </div>
                </div>
            </div>


        </div>

    </section>
    <!-- Finalizacion Tercera Pantalla -->

    <br><br><br><br><br><br>

    <!--Footer-->
    <footer class="page-footer  font-small info-color-dark  footer">

        <div class="rgba-gradient">

            <!--Call to action-->

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-xs-12 sociales">
                        <h4 class="mt-lg-0 mt-sm-3"> Redes Sociales</h4>
                        <li><a>Facebook: Asociación Libre Expresión</a></li>
                        <li><a>Canal Youtube: libreexpresionorg</a></li>
                       
                    </div>

                    <div class="col-lg-6 col-xs-12 location">
                        <h4 class="mt-lg-0 mt-sm-3"> Ubicación</h4>
                        <p><i class=" fa fa-map-marker-alt"></i> Colonia La Primavera, cuarta avenida Casa
                            2407.Tegucigalpa, Honduras</p>
                        <p><i class=" fa fa-phone"></i> (504) 2283-0967 | (504) 8824-2342</p>
                        <p><i class=" fa fa-user-circle"></i> Contacto: Perla Casco,
                            Directora Ejecutiva</p>
                    </div>
                </div>

            </div>

            <!--/.Call to action-->

            <hr class="my-4">

            <!-- Social icons -->
            <div class="pb-4 text-center">
                <a href="https://www.facebook.com/asociacionlibreexpresion/" target="_blank">
                    <i class="fab fa-facebook-f mr-3"></i>
                </a>

                <a href="https://www.youtube.com/user/libreexpresionorg" target="_blank">
                    <i class="fab fa-youtube mr-3"></i>
                </a>
            </div>
           
            <div class="footer-copyright py-3 text-center">
                All Rights Reserved &copy; Libre Expresión 2020.
            </div>
           

        </div>

    </footer>
    <!--Footer-->





    <!-- jQuery -->
    <script type="text/javascript" src="frontend/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="frontend/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="frontend/js/mdb.min.js"></script>

    <!-- Get patch fixes within a minor version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js">
    </script>


    <script>
    new WOW().init();
    </script>

</body>

</html>