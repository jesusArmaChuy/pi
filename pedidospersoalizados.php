<?php
session_start();

if(isset($_SESSION['id_user'])){
    if ($_SESSION['rol'] === '4') {
    }else{
        die('<script>window.location.href="http://pishybakes.tk/"</script>'); 
        
    }
}else{
    die('<script>window.location.href="http://pishybakes.tk/"</script>'); 
}
        
        
// validar si hay una sesion existente
include_once "global/connectionBD.php";
include_once "phpcode/enviardatos.php";
include_once "deletepedidos/Delete.php";
?>
<!DOCTYPE html>

<html lang="en">
<?php
    include_once "head.php";
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pashy Bakes</div>
            </a>
 <label style="color: #f06595;" for="menuss"><?php if(isset($_SESSION['id_user'])){ echo 'Bienvenido';}?> <span><?php echo $_SESSION['name']; ?></span></label>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>

                        <a class="collapse-item" href="Registro.php">Registra productos</a>
                        <a class="collapse-item" href="Pedidos.php">Pedidos de menu</a>
                        <a class="collapse-item active" href="pedidospersoalizados.php">Pedidos personalizados</a>
                          <a class="collapse-item " href="Userspanel.php">usuarios</a>

                    </div>
                </div>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                           
                            <div class="input-group-append">
                               
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <div class="widget dashboard-container my-adslist">
                    <h2 class="widget-header">Pedidos personalizados</h3>
                        <table id='myTable' class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Descripcion</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $arrayList = NULL;
                                
                                try {
                                    $sql  = "SELECT * FROM vw_personalizadas";

                                    $statement = $pdo->prepare($sql);
                                    $statement->execute();
                                    if( empty( $arrayList = $statement->fetchAll() ) ){
                                        die('No tengo resultados');
                                    }
                                } catch ( \Throwable $e ) {
                                    die( $e->getMessage() );
                                }

                               foreach($arrayList as $key){
                              echo '  
                               <tr>

                              <td class="product-thumb">
                                  <img width="80px" height="auto" src="'.$key['Imagen'].'"
                                      alt="image description">
                              </td>
                              <td class="product-details">
                                  <h3 class="title">'.$key['Direcciones'].'</h3>
                                  <span class="add-id"><strong>Cantidad:</strong>'.$key['Descripcion'].'</span>
                                  <span class="status active"><strong>email</strong>'.$key['email'].'</span>
                                  <span class="location"><strong>tel</strong>'.$key['number'].'</span>
                              </td>
                              <td class="product-category"><span class="categories"  >'.$key['name'].'</span></td>
                              <td class="action" data-title="Action">
                                  <div class="">
                                  <form method="POST">
                                      <ul class="list-inline justify-content-center">
                                          <li class="list-inline-item">
                                              
                                          </li>
                                          <li class="list-inline-item">
                                                <button name="accion" type="submit" value="Delete_Personal" data-toggle="tooltip" data-placement="top" title="Delete"
                                                    class="delete" href="">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                
                                          </li>
                                      </ul>
                                      <input type="hidden" value="'.$key['Id_Personalizado'].'" name="txtID">
                                      </form>
                                  </div>
                              </td>
                                 </tr>';
                                  }
                                 ?>

                            </tbody>
                        </table>

                </div>
            </div>




        </div>

        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

    </div>
    
    <?php
     include_once "scrips.php";
    ?>
    <script src="https://kit.fontawesome.com/0bb786d7e2.js" crossorigin="anonymous"></script>
</body>

</html>