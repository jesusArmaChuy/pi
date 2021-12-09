<?php
include_once "global/connectionBD.php";

include_once "phpcode/usuarios.php";
include_once "phpcode/pedidosphp/PedidosUser.php";
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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="css/nice-select.css" type="text/css">

    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styless.css">

    <!-- Custom fonts for this template-->

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
                    <li class="nav-item"><a class="nav-link active" href="menu.php">
                            <i class="fas fa-bread-slice fa-lg" style="color: #f06595;">Menu </i></a></li>
                    <?php
                                    include_once "phpcode/opcioncarrito.php"
                                 ?>
                    <li class="nav-item"><a class="nav-link " href="contact.php"><i class="fas fa-headset fa-lg"
                                style="color: #f06595;">Contacto</i></a></li>
                </ul>
            </div>
        </div>
        </div>
    </header>
    <div class="site-main">
        <div class="container-fluid no-padding">
            <!-- Page Preloder -->
            <div id="preloder">
                <div class="loader"></div>
            </div>

            <!-- Header Section Begin -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



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
            <section class="breadcrumb-section set-bg" data-setbg="imgs/BANNERS/Carrito.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="breadcrumb__text">
                                <h2></h2>
                                <div class="breadcrumb__option">
                                    <a href="./index.php">Home</a>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Section End -->
        </div>
        <section class="food_section layout_padding">
            <div class="container">
                <!--Carrito de compras-->
                <section class="checkout spad">
                    <div class="container">

                        <div class="checkout__form">
                            <h4>Detalles de orden</h4>
                            <form  method="POST"  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <input id="txt_ID" type="hidden" name="txtID"
                                                        value="<?=($_SESSION['id_user']??NULL)?>">
                                                    <p>Nombre<span>*</span></p>
                                                    <input type="text" disabled=disabled
                                                        value="<?=($_SESSION['name']??NULL)?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Apellido<span>*</span></p>
                                                    <input type="text" disabled=disabled
                                                        value="<?=($_SESSION['lName']??NULL)?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkout__input">

                                            <label for="inputState">Selecciona Direccion</label>

                                            <select name="Iddireccion" id="Iddireccion" class="form-control" required>
                                                <option value="">-- Seleccione --</option>
                                                <?php 
                                                  $sentenciaDir = $pdo->prepare("SELECT * from direcciones;");
                                                  $sentenciaDir->execute();
                                                   $ListDir=$sentenciaDir->fetchAll();
                                                   foreach ($ListDir as $Direc) { 
                                                   echo '<option value="'.$Direc['idDireccion'].'">'.$Direc['Direcciones'].'</option>';
                                                   }
                                                 ?>

                                            </select>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Numero de telefono<span>*</span></p>
                                                    <input type="text" disabled=disabled
                                                        value="<?=($_SESSION['phone']??NULL)?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Email<span>*</span></p>
                                                    <input type="text" disabled=disabled
                                                        value="<?=($_SESSION['email']??NULL)?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkout__input">
                                                    <p>Fecha de entrega de pedido<span>*</span></p>
                                                    <input type="date" id="start" name="Fecha_final" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="checkout__order">
                                            <h4>Your Order</h4>
                                            <div class="checkout__order__products">Products <span>Total</span></div>
                                            <ul>
                                                <?php

                                                $sumatoria = 0;
                                                
                                                if( empty( $_SESSION['carrito'] ) ){
                                                    ?><li>No hay productos en el carrito.</li><?php
                                                }else{
                                                    foreach( $_SESSION['carrito'] as $id => $cantidad ){
                                                        /*  Cargar producto de la Base de datos
                                                        */
                                                        $idProduct = intval( $id );
                                                        $sql  = "SELECT * FROM products WHERE idProduct = $idProduct;";
                                                        $statement = $pdo->prepare($sql);
                                                        $statement->execute();

                                                        if( $arrayList = $statement->fetchAll() ){
                                                            $producto =& $arrayList[0];
                                                            $subPrecio = $producto['Precio']*$cantidad;
                                                            $sumatoria+= $subPrecio;
                                                        ?>
                                                <li>
                                                    <?=$cantidad." ".$producto['Nombre']?><span>$<?=$subPrecio?></span>
                                                    
                                                </li>
                                                <?php
                                                        }
                                                    } ?>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                            <div class="checkout__order__total">Total <span>$<?=($sumatoria??0)?></span>
                                            </div>
                                            <div class="checkout__input__checkbox">

                                                <button  name="accion" value="add"  type="submit" class="primary-btn">Registrar Orden</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- footer section -->
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
        <!-- footer section -->
    </div><!-- /.container -->




    <!--================ Menu =================-->








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
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script> -->
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






    <!-- Bootstrap core JavaScript-->
    <script src="Dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Dashboard/js/sb-admin-2.min.js"></script>




    <!--scrips star feane-->

    <!-- jQery -->
    <script src="feane/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="feane/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="feane/js/custom.js"></script>
    <!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script> -->
    <!-- End Google Map -->
    <script src="https://kit.fontawesome.com/0bb786d7e2.js" crossorigin="anonymous"></script>

</body>

</html>