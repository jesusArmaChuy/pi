<?php
include_once "phpcode/usuarios.php";
include_once "global/connectionBD.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="imgs/favicon.png" type="image/png">
    <title>Pishy Bakest</title>
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
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-home  fa-lg"
                                style="color: #f06595;">Inicio</i> </a></li>
                    <li class="nav-item"><a class="nav-link " href="about-us.php"><i class="fas fa-child fa-lg"
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
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <div class="site-main">



        <!-- Header Section Begin -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Page Preloder -->
            <div id="preloder">
                <div class="loader"></div>
            </div>
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


                <!-- Nav Item - Alerts -->




                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
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
        <div class="container-fluid no-padding">
            <div class="carousel slide" id="main-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#main-carousel" data-slide-to="1"></li>
                </ol><!-- /.carousel-indicators -->

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="imgs/fondo.png" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>La mejor calidad</h1>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
						<img class="d-block img-fluid" src="imgs/publicidad.png" alt="">
						<div class="carousel-caption d-none d-md-block">
							<h3>PASHY BAKES</h3>
							<p><b>LA MEJOR OPCION!</b></p>
						</div>
					</div> -->

                </div><!-- /.carousel-inner -->

                <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only" aria-hidden="true">Prev</span>
                </a>
                <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only" aria-hidden="true">Next</span>
                </a>
            </div><!-- /.carousel -->
        </div><!-- /.container -->

        <!--================ End Home Banner Area =================-->

        <!--================ Start Breakfast Area =================-->
        <div class="breakfast-area section_gap_top">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="left-content">
                            <h1>Beso tortuga</h1>
                            <p>El Beso de Tortuga, pan de chocolate y pay de queso es uno de los pasteles de chocolate
                                más vendidos en “nombre de la empresa” cubierto de betún de chocolate, con capa de
                                chispas, nueces, caramelo, nutella y trozos de chocolate kinder y chocolate blanco.
                                <br><b>¡ADQUIERELO YA!</b></br>
                            </p>

                            <a href="http://pishybakes.tk/menu.php" class="primary-btn">Ver menu</a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="right-img">

                            <img class="img1 img-fluid" src="imgs/pasteles/pastel2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ Start Breakfast Area =================-->


        <!--================ Start Lunch Area =================-->
        <div class="breakfast-area lunch-area section_gap">
            <div class="container">
                <!-- <div class="row align-items-center justify-content-center"> -->


                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="imgs/roscas.png" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">Las mejores Donas</h2>
                            <p class="card-text">Prueba la calidad de nuestras donas, un gran sabor para tu paladar</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago </small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="imgs/personalizado.png" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">Los mejores diseños</h2>
                            <p class="card-text">Tenemos una alta calidad en pasteles personalizado</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>

                </div>
                <!-- <div class="col-lg-12 offset-lg-1">
						<div class="left-content">
							<h1>El mejor sabor para el paladar </h1>

							<p>Panqueques y minipasteles con diseños especiales</p>

						</div>
					</div>

					<div class="col-lg-12 ">
						<div class="right-img">
							<img class="img1 img-fluid" src="imgs/pasteles/especial1.png" alt="">

						</div>
					</div>

					<div class="col-lg-5 offset-lg-1">
						<div class="left-content">
							<h1>El mejor sabor para el paladar </h1>

							<p>Panqueques y minipasteles con diseños especiales</p>

						</div>
					</div>

					<div class="col-lg-5 ">
						<div class="right-img">
							<img class="img1 img-fluid" src="imgs/pasteles/especial1.png" alt="">

						</div>
					</div> -->
                <!-- </div> -->
            </div>
        </div>
        <!--================ End Lunch Area =================-->



        <!--COMENTARIOS INICIO-->

        <section class="section_gap_top food-gallery-area">
            <div class="container-fluid no-padding">

                <div class="row owl-carousel active-food-gallery">
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="imgs/galeria/1.png" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="imgs/galeria/2.png" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="imgs/galeria/3.png" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="imgs/galeria/4.png" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="imgs/galeria/5.png" alt="">
                    </div>
                    <!-- single gallery item -->
                    <div class="single-gallery-item">
                        <img class="img-fluid" src="imgs/galeria/6.png" alt="">
                    </div>
                </div>
            </div>
            <div class="breakfast-area lunch-area section_gap">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <!-- <div class="col-lg-6">
						<div class="right-img">
							<img class="img1 img-fluid" src="imgs/pasteles/especial1.png" alt="">
							
						</div>
					</div> -->

                        <div class="col-lg-12 offset-lg-2">
                            <div class="left-content">
                                <div class="comments-area">
                                    <h4>03 Comments</h4>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="imgs/sugerencias/foto1.png" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Eduardo Briones</a></h5>
                                                    <p class="date">Septiembre, 2021 </p>
                                                    <p class="comment">
                                                        Nos encantó el pastel a toda mi familia ❤️ muchas gracias.
                                                        Excelente servicio recomendado al 100%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="imgs/sugerencias/foto2.png" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Mar Fernandez</a></h5>
                                                    <p class="date">JULIO 4, 2021</p>
                                                    <p class="comment">
                                                        Los mejores 🤩
                                                        SUPER RECOMENDADOS 🤤💯👌
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="imgs/sugerencias/foto3.png" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Angel Guzman Juares</a></h5>
                                                    <p class="date">JULIO 12, 2021 </p>
                                                    <p class="comment">
                                                        Muy buenos pasteles se los recomiendo
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--================ End Breakfast Area =================-->




        <!--================Blog Area =================-->

        <!--COMENTARIOS FIN -->
        <!--================ Start Footer Area =================-->
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
                <div class="modal-body">Seleccione "salir " Si ya quiere cerrar la sesion.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

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

    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->

    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js">
    </script>
    <!-- custom js -->

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