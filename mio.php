<?php
session_start();


        
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
                <div class="sidebar-brand-text mx-3">Inicio</div>
            </a>
            <label style="color: #fffff;" for="menuss"><?php if(isset($_SESSION['id_user'])){ echo 'Bienvenido';}?> <span><?php echo $_SESSION['name']; ?></span></label>
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

                    

                        <!-- Nav Item - Messages -->
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><span><?php echo $_SESSION['name']; ?></span>
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
                    <h2 class="widget-header">PEDIDOS POR MENU</h3>
                        <table id='myTable' class="table table-responsive product-dashboard-table">
                            <thead>
                                <tr>
                                    <th>Detalles</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $arrayList = NULL;
                                
                                try {
                                    $sql  = "SELECT  * FROM vw_mispedidos WHERE idUser= $_SESSION[id_user]";

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
                              <td class="product-details">
                                  <h3 class="title">'.$key['Direcciones'].'</h3>
                                  <span class="add-id"><strong>Cantidad:</strong>'.$key['Cantidad_Art'].'</span>
                                  <span class="add-id"><strong>precio:</strong>'.$key['Precio_T'].'</span>
                                  <span class="status active"><strong>email</strong>'.$key['email'].'</span>
                                  <span class="location"><strong>tel</strong>'.$key['number'].'</span>
                                 
                                  <span class="location"><strong>Fecha_Inicio</strong>'.$key['Fecha_Inicio'].'</span>
                                  <span class="location"><strong>Fecha de pedido</strong>'.$key['Fecha_final'].'</span>
                              </td>
                              <td class="product-category"><span class="categories"  >'.$key['name'].'</span></td>
                              <td class="action" data-title="Action">
                                  <div class="">
                                  <form method="POST">
                                      <ul class="list-inline justify-content-center">
                                          <li class="list-inline-item">
                                              <button class="btn btn-outline-primary" type="button" data-idpedido="'.$key['Id_pedidos'].'" data-toggle="modal" data-target="#Menu" data-toggle="tooltip" data-placement="top" title="ver pedido">
                                                  <i class="fa fa-clipboard"></i>
                                              </button>
                                          </li>
                                          <li class="list-inline-item">
                                                <button class="btn btn-outline-danger" name="accion" type="submit" value="Delete_User"  data-toggle="tooltip" data-placement="top" title="Cancelar pedido">
                                                  <i class="fa fa-trash"></i>
                                                </button>
                                                
                                          </li>
                                      </ul>
                                      <input type="hidden" value="'.$key['Id_pedidos'].'" name="txtID">
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
            <!-- /.container-fluid -->


            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
 </div>

        <script>
        window.addEventListener('load', function() {
            $('[data-target="#Menu"]').click(function() {
                let data = {
                    idPedido: this.dataset.idpedido
                };
                $.post('./Detpedidos/leer_elementos.php', data).done(function(r) {
                    let _json = null;
                    try {
                        _json = typeof(r) == 'string' ? JSON.parse(r) : r;
                    } catch (error) {
                        _json = false;
                    }

                    if (_json) {
                        let HTML = '';

                        /*  CODIGO HTML PARA VENTANA MODAL */
                        let _vta = _json.vw_pedidosdeusuario[0];
                        for (let i in _vta) {
                            HTML += '<b>' + i + '</b>: <span>' + _vta[i] + '</span><br>';
                        }
                        /*  CODIGO HTML PARA VENTANA MODAL */

                        /*  CODIGO HTML PARA VENTANA MODAL */
                        if (_prods = _json.vw_productodetalles) {
                            HTML += '<br>';
                            HTML += '<table>';
                            for (let i in _prods) {
                                if (prod = _prods[i]) {
                                    for (k in prod) {
                                        let v = prod[k];

                                        if (k == 'Imagen') {
                                            v = '<img width="200" height="200" src="' + v + '"/>';
                                        }

                                        HTML += '<tr><td>' + k + '</td><td>' + v + '</td></tr>';
                                    }
                                }
                            }
                            HTML += '</table>';
                        }
                        /*  CODIGO HTML PARA VENTANA MODAL */

                        $('#detalle').html(HTML);
                    }
                });
            });
        });
        </script>
        <script src="https://kit.fontawesome.com/0bb786d7e2.js" crossorigin="anonymous"></script>
        <?php
     include_once "scrips.php";
    ?>
</body>

</html>