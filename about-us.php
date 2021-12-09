<?php
include_once "phpcode/usuarios.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="imgs/favicon.png" type="image/png">
    <title>PishyBakes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styless.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- style feane -->

    <link rel="stylesheet" type="text/css" href="feane/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="feane/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="feane/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="feane/css/responsive.css" rel="stylesheet" />

    <!-- finish styles feane -->





    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->

    <link rel="stylesheet" type="text/css" href="cssfeane/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="cssfeane/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php $Rut=realpath(__DIR__); echo $Rut ;?>/cssfeane/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="cssfeane/responsive.css" rel="stylesheet" />



    <!-- Custom fonts for this template-->
    <link href="Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Dashboard/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <div class="menu-trigger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <header class="fixed-menu">
        <span class="menu-close"><i class="fa fa-times"></i></span>
        <div class="menu-header">
            <div class="logo d-flex justify-content-center">
                <img src="imgs/favicon.png" alt="">
            </div>
        </div>
        <div class="nav-wraper">
            <div class="navbar">
                <ul class="navbar-nav">
                       <label style="color: #f06595;" for="menuss"><?php if(isset($_SESSION['id_user'])){ echo 'Bienvenido';}?> <span><?php echo $_SESSION['name']; ?></span></label>
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home  fa-lg"
                                style="color: #f06595;">Inicio</i> </a></li>
                    <li class="nav-item"><a class="nav-link active" href="about-us.php"><i class="fas fa-child fa-lg"
                                style="color: #f06595;">Nosotros</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php">
                            <i class="fas fa-bread-slice fa-lg" style="color: #f06595;">Menu </i></a></li>
                    <?php
                                    include_once "phpcode/opcioncarrito.php"
                                 ?>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-headset fa-lg"
                                style="color: #f06595;">Contacto</i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <div class="site-main">
        <div class="container-fluid no-padding">
            <!-- Page Preloder -->
            <div id="preloder">
                <div class="loader"></div>
            </div>

            <!-- Header Section Begin -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form> -->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $Nombre;?></span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <?php
                       
                       include_once 'phpcode/menuuser.php';
                       
                       ?>
                         

                        </div>
                    </li>

                </ul>

            </nav>

            <!-- Header Section End -->
            <!-- Breadcrumb Section Begin -->
            <section class="breadcrumb-section set-bg" data-setbg="imgs/BANNERS/NOSOTROS.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="breadcrumb__text">
                                <h2>Checkout</h2>
                                <div class="breadcrumb__option">
                                    <a href="./index.php">Home</a>
                                    <span>Checkout</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Section End -->
        </div>

        <!--================ End Breakfast Area =================-->


        <!--================ End Food Gallery Area =================-->

        <!-- Start Align Area -->
        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border">
                    <div class="section-top-border">
                        <h2 class="mb-30 title_color font_col">SOBRE NOSOTROS</h2>
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <div class="right-img">

                                    <img class="img1 img-fluid" src="imgs/PASTELERO.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <blockquote class="generic-blockquote">
                                    <b>“Pishy Bake’s”</b> se creó con la finalidad de diseñar, producir y comercializar
                                    productos de
                                    repostería
                                    de alta gama para cualquier tipo de público en general, con la idea de competir con
                                    las cadenas
                                    comerciales en el estado o país, también con el objetivo de hacer creaciones mas
                                    especificas basadas
                                    en los gustos de nuestros clientes de manera que se cumplan las expectativas de
                                    estos mismos. Fue
                                    fundada el 14 de Mayo del año 2017.
                                    Comenzó a iniciar operaciones el <u>03 de Agosto del 2017</u>
                                    En nuestro propio domicilio y de forma artesanal prácticamente todo esta hecho a
                                    mano, utilizamos
                                    productos naturales y ecológicos para ayudar al medio ambiente.
                                    <p>  </p>  
                                    <!-- <u>“Pishy Bake’s,S, A”</u>, es una empresa constituida por una sociedad anónima.
									Teniendo como
									domicilio
									legal: <u>Fraccionamiento Reynosa, Almaguer. Lampacitos, Nuevo león #1008.</u>
									Esta es una empresa chica constituida por 5 empleados que se encargan de las
									diferentes áreas en la
									empresa para su correcto funcionamiento. -->

                                </blockquote>

                            </div>
                        </div>
                    </div>
                    <h3 class="mb-30 title_color font_colval">Misión y Visión</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="imgs/mision y vision.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8	 mt-sm-20 left-align-p">
                            <p>Darle al cliente la satisfacción de tener el producto que el desee en sus manos, nosotros
                                tomamos en cuenta la opinión de cada uno de nuestros clientes para hacer la diferencia
                                en la marca ya en su mayoría de nuestros productos son personalizados a detalle para que
                                sea único.
                                Ser una empresa de reconocimiento internacional, ampliar nuestra empresa sin perder la
                                escencia de la misma es uno de los puntos más importantes para nosotros, queremos llegar
                                a más familias y hacer de nosotros una.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="section-top-border">
                    <h2 class="mb-30 title_color font_colval" ;">Valores</h2>
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="imgs/Honestidad.png" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">Honestidad</h2>
                                <p class="card-text">es clave en la empresa ya que no haremos nunca algún trabajo que no
                                    sea posible o
                                    este dentro de nuestro alcance
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago </small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="imgs/Diversidad.png" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">Diversidad</h2>
                                <p class="card-text">somos una empresa que no discrimina, no nos basamos en algun valor
                                    social, étnico o
                                    cultural</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="imgs/Responsabilidad.png" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">Responsabilidad</h2>
                                <p class="card-text">Queremos que nuestros clientes se sientan en la confianza de darnos
                                    su opinión más
                                    personal para que su producto sea el deseado</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <footer class="footer_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-col">
                        <div class="footer_contact">
                            <h4>
                                Contactanos
                            </h4>
                            <div class="contact_link_box">
                                <a
                                    href="https://www.google.com.mx/maps/dir//26.035014,-98.2325073/@26.034812,-98.2331597,19.5z">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>
                                        Localizacion
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        LLama +52 8132425337
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>
                                        ajb0ussines@gmail.com
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-col">
                        <div class="footer_detail">
                            <a href="index.php" class="footer-logo">
                                Pishy bakes
                            </a>
                            <p>
                                Dando siempre la mejor atencion a nuestros clientes y la excelente calidad que se
                                merecen
                            </p>
                            <!-- <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div> -->
                        </div>
                    </div>
                    <div class="col-md-4 footer-col">
                        <h4>
                            Paguina 24Hrs
                        </h4>
                        <p>
                            Todos los dias nos pueden contactar
                        </p>
                        <p>
                            10.00 Am -8.00 Pm
                        </p>
                    </div>
                </div>
                <div class="footer-info">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="https://html.design/">Free Html Templates</a><br><br>
                        &copy; <span id="displayYear"></span> Distributed By
                        <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </footer>
        <!--================ Start Footer Area =================-->
    </div>

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ya desea salirse?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir"Si tu ya quieres cerrar la sesion.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!--================ Start Footer Area =================-->

    <!--================ Start Footer Area =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>

    <!--new-->


    <script src="jscopy/jquery-3.3.1.min.js"></script>
    <script src="jscopy/bootstrap.min.js"></script>
    <script src="jscopy/jquery.nice-select.min.js"></script>
    <script src="jscopy/jquery-ui.min.js"></script>
    <script src="jscopy/jquery.slicknav.js"></script>
    <script src="jscopy/mixitup.min.js"></script>
    <script src="jscopy/owl.carousel.min.js"></script>
    <script src="jscopy/main.js"></script>


    <!-- jQery -->
    <script src="jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js">
    </script>
    <!-- custom js -->
    <script src="custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->


    <!-- Bootstrap core JavaScript-->
    <script src="Dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="Dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="Dashboard/js/demo/chart-area-demo.js"></script>
    <script src="Dashboard/js/demo/chart-pie-demo.js"></script>
    <script src="https://kit.fontawesome.com/0bb786d7e2.js" crossorigin="anonymous"></script>
</body>

</html>