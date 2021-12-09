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

                        <a class="collapse-item active" href="Registro.php">Registra productos</a>
                        <a class="collapse-item" href="Pedidos.php">Pedidos de menu</a>
                        <a class="collapse-item " href="pedidospersoalizados.php">Pedidos personalizados</a>
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

                      

                 

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?></span>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ingrese datos del producto</h4>

                            <form method="POST" enctype="multipart/form-data" class="forms-sample">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="row">
                                        <div class="col">
                                            <input id="txt_ID" type="hidden" name="txtID" value="<?php echo $txtID;?>">
                                            <label for="inputState">Selecciona categoria</label>

                                            <select id="select" name="idCategory" id="idCategory" class="form-control"
                                                required>
                                                <option value="">-- Seleccione --</option>
                                                <?php 
                                                        $sentenciaCategories = $pdo->prepare("SELECT * from category;");
                                                        $sentenciaCategories->execute();
                                                        
                                                        if(!empty($idCategory))
                                                        {
                                                            $ListCategories=$sentenciaCategories->fetchAll();
                                                            foreach ($ListCategories as $category) { 
                                                                $selected = ($idCategory == $category['id_Category']) ? ' selected' : null;

                                                           echo '<option value="'.$category['id_Category'].'"'.$selected.'>'.$category['nameCategory'].'</option>';
                                                                
                                                            }
                                                        }else{
                                                            $ListCategories=$sentenciaCategories->fetchAll();
                                                        foreach ($ListCategories as $category) { 
                                                        echo '<option value="'.$category['id_Category'].'">'.$category['nameCategory'].'</option>';
                                                        }
                                                    }?>

                                            </select>
                                        </div>

                                        <div class="col">
                                            <label for="inputState">Nombre del producto</label>
                                            <input id="txtnombre" value="<?php echo $Nombre; ?>" name="Nombre"
                                                type="text" class="form-control" placeholder="Producto">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion</label>
                                        <input id="txtDescripcion" value="<?php echo $Descripcion
                                        ; ?>" name="Descripcion" class="form-control" id="exampleFormControlTextarea1"
                                            rows="3">
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <label for="inputState">Precio del producto</label>
                                            <input id="price" value="<?php echo $Precio; ?>" name="Precio" type="text"
                                                class="form-control" placeholder="$">
                                        </div>
                                        <div class="col">
                                            <label>Selecciona imagen</label>
                                            <?php echo $Imagen;?>
                                            <input type="hidden" name="txtOldImg" id="" value="<?php echo $Imagen;?>"
                                                class="form-control" placeholder="Image">
                                            <input name="Imagen" id="Imagen" type="file" class="form-control-file"
                                                id="txt_img">
                                        </div>
                                    </div>

                                </div>
                                <div class="btn-group" role="group">
                                    <button id="txt_submit" style='margin:1rem;' name='accion' value="add"
                                        <?php echo ($accion=='Seleccionar')?"disabled":""?> type="submit"
                                        class="btn btn-primary">registrar</button>


                                    <button id="txt_cancel" style='margin:1rem;' name='accion' value="Cancel"
                                        <?php echo ($accion!=='Seleccionar')?"disabled":""?> type="submit"
                                        class="btn btn-danger">cancelar</button>


                                    <button id="txt_modify" style='margin:1rem;' name='accion' value="Modify"
                                        <?php echo ($accion!=='Seleccionar')?"disabled":""?> type="submit"
                                        class="btn btn-success">Guardar</button>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <div class="widget dashboard-container my-adslist">
                <h3 class="widget-header">Mis postres</h3>
                <table id='myTable' class="table table-responsive product-dashboard-table">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Productos</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						        $sql  = "SELECT * FROM vw_producs";

						             $statement = $pdo->prepare($sql);
						            $statement->execute();
						             $arrayList = $statement->fetchAll();
                               foreach($arrayList as $key){
                              echo '  
                               <tr>

                              <td class="product-thumb">
                                  <img width="80px" height="auto" src="'.$key['Imagen'].'"
                                      alt="image description">
                              </td>
                              <td class="product-details">
                                  <h3 class="title">'.$key['Nombre'].'</h3>
                                  <span class="add-id"><strong>Descripcion:</strong>'.$key['Descripcion'].'</span>
                                  <span class="status active"><strong>Id</strong>'.$key['idProduct'].'</span>
                                  <span class="location"><strong>Precio</strong>'.$key['Precio'].'</span>
                              </td>
                              <td class="product-category"><span class="categories"  >'.$key['nameCategory'].'</span></td>
                              <td class="action" data-title="Action">
                                  <div class="">
                                  <form method="POST">
                                      <ul class="list-inline justify-content-center">
                                          <li class="list-inline-item">
                                              <button name="accion" data-toggle="tooltip" type="submit" value="Seleccionar" data-placement="top" title="Edit"
                                                  id="edit" >
                                                  <i class="fa fa-clipboard"></i>
                                              </button>
                                          </li>
                                          <li class="list-inline-item">
                                                <button name="accion" type="submit" value="delete" data-toggle="tooltip" data-placement="top" title="Delete"
                                                    class="delete" href="">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                
                                          </li>
                                      </ul>
                                      <input type="hidden" value="'.$key['idProduct'].'" name="txtID">
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
        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

    </div>
    <script src='app.js'> </script>
    <?php
     include_once "scrips.php";
    ?>
<script src="https://kit.fontawesome.com/0bb786d7e2.js" crossorigin="anonymous"></script>
</body>

</html>