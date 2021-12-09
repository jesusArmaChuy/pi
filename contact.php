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


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styless.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">






    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->

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
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home  fa-lg"
                                style="color: #f06595;">Inicio</i> </a></li>
                    <li class="nav-item"><a class="nav-link " href="about-us.php"><i class="fas fa-child fa-lg"
                                style="color: #f06595;">Nosotros</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php">
                            <i class="fas fa-bread-slice fa-lg" style="color: #f06595;">Menu </i></a></li>
                    <?php
                                    include_once "phpcode/opcioncarrito.php"
                                 ?>
                    <li class="nav-item"><a class="nav-link active" href="contact.php"><i class="fas fa-headset fa-lg"
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
            <section class="breadcrumb-section set-bg" data-setbg="imgs/BANNERS/CONTACTOS.png">
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

        <!--================ End Home Banner Area =================-->

        <!-- End banner bottom -->
        <!--================ End Home Banner Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                <!-- <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
				 data-mlat="40.701083" data-mlon="-74.1522848"> -->
                <!-- <div style="margin-top:61px;" id="map" class="mapBox" data-lat="40.701083" data-lon="-74.1522848"
                    data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083" data-mlon="-74.1522848">

                </div> -->
                <div class="mapBox">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d896.2404032373751!2d-98.2331597!3d26.034812!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8cee7153bef3086!2zMjbCsDAyJzA2LjEiTiA5OMKwMTMnNTcuMCJX!5e0!3m2!1ses-419!2smx!4v1637526123596!5m2!1ses-419!2smx"
                        width="100%" height="450" style="border:0;margin-top: 2rem" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Tamaulipas,Mexico</h6>
                                <p>Reynosa</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a
                                        href="https://api.whatsapp.com/send/?phone=5218992385873&text=Hola%20necesito%20costos%20de%20un%20producto&app_absent=0">WhatsApp:
                                        8132425337</a></h6>
                                <p>Lunes a jueves de 8:00 am a 7:00pm y domingos 1:00pm a 5:00pm.</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">ajb0ussines@gmail.com</a></h6>
                                <p>envia sus consultas a tiempo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h3 class="font_col-forms">CONTACTANOS</h3>
                        <form class="row contact_form" action="contact_process.php" method="POST" id="contactForm"
                            novalidate="novalidate">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre"
                                        require>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        require>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Asunto" require>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1"
                                        placeholder="Mensaje" require></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary-btn text-uppercase">enviar
                                    mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
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
                                    href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d896.2404032373751!2d-98.2331597!3d26.034812!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8cee7153bef3086!2zMjbCsDAyJzA2LjEiTiA5OMKwMTMnNTcuMCJX!5e0!3m2!1ses-419!2smx!4v1637526123596!5m2!1ses-419!2smx">
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
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ya desea salirse ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir" Si tu ya quieres cerrar sesion.</div>
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
    <script src="js/Maps.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap">
    </script>

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