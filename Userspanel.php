
<?php
session_start();

        // validar si hay una sesion existente

include_once "global/connectionBD.php";
include_once "phpcode/enviarusuarios.php";
$message="";
if(isset($_POST["register"])){
    if(!empty($_POST['lName']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['fName']) && !empty($_POST['pwd1']) && !empty($_POST['pwd2'])){
        if ($_POST["pwd1"] === $_POST["pwd2"]) {
            $first_name = $_POST['fName'];
            $last_name = $_POST['lName'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $password1 = $_POST['pwd1'];
            $password2 = $_POST['pwd2'];
    
            $pwd_hash = hash_hmac('sha256', $password2, '123');
    
            $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
            $query-> bindParam("email", $email);
            $query->execute();
    
            if($query->rowCount() >0){
                echo '<p>El email ya se encuentra registrado</p>';
            }
            if($query->rowCount() ==0){
                $query = $pdo->prepare("INSERT INTO users (idUser, name, lastName, number, email, password, idRol) VALUES (NULL,?,?,?,?,?,4)");
                $query -> bindParam(1, $first_name);
                $query -> bindParam(2, $last_name);
                $query -> bindParam(3, $number);
                $query -> bindParam(4, $email);
                $query -> bindParam(5, $pwd_hash);
    
                $result = $query->execute();
    
                if($result){
                    $message = "Cuenta correctamente creada ";
                    die('<script>window.location.href="http://pishybakes.tk/Userspanel.php"</script>'); 
                }
                else{
                    $message = "Error al ingresar datos de la informacion!";
                }
            }
            else{
                $message = "El nombre de usuario ya existe! Por favor, intenta con otro!";
            }
        }else{
            $message = "Las contraseñas no coinciden.";
        }
    }
    else{
        $message = "Todos los campos no deben de estar vacios";
    }
}
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

                        <a class="collapse-item " href="Registro.php">Registra productos</a>
                        <a class="collapse-item" href="Pedidos.php">Pedidos de menu</a>
                        <a class="collapse-item " href="pedidospersoalizados.php">Pedidos personalizados</a>
                        <a class="collapse-item active" href="Userspanel.php">usuarios</a>

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

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tabla de administradores</h4>

                            <div class="card o-hidden border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <form method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fName" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lName" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="number" class="form-control form-control-user" id="numberinp"
                                        placeholder="number">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="pwd1" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="pwd2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="register">Registrar</button>
                                <hr>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> -->
                            </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <div class="widget dashboard-container my-adslist">
                <h3 class="widget-header">Admin</h3>
                <table id='myTable' class="table table-responsive product-dashboard-table">
                    <thead>
                        <tr>
                            
                            <th>Admin</th>
                            <th class="text-center">Rol</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						        $sql  = "SELECT * FROM users WHERE idRol=4" ;

						             $statement = $pdo->prepare($sql);
						            $statement->execute();
						             $arrayList = $statement->fetchAll();
                            
                               foreach($arrayList  as $key){ 
                             echo '  
                               <tr>

                              <td class="product-details">
                                  <h3 class="title">'.$key['idUser'].'</h3>
                                  <span class="add-id"><strong>Nombre:</strong>'.$key['name'].'</span>
                                  <span class="location"><strong>Tel</strong>'.$key['number'].'</span>
                                  <span class="location"><strong>Email</strong>'.$key['email'].'</span>
                                  <span class="location"><strong>password</strong>'. $key['password'].'</span>
                              </td>
                              <td class="product-category"><span class="Rol">admin</span></td>
                              <td class="action" data-title="Action">
                                  <div class="">
                                  <form method="POST">
                                      <ul class="list-inline justify-content-center">
                                          <li class="list-inline-item">
                                             
                                          </li>
                                          <li class="list-inline-item">
                                                <button name="accion" type="submit" value="delete" data-toggle="tooltip" data-placement="top" title="Delete"
                                                    class="btn btn-danger" href="">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                
                                          </li>
                                      </ul>
                                      <input type="hidden" value="'.$key['idUser'].'" name="txtID">
                                      </form>
                                  </div>
                              </td>
                                 </tr>';
                                  }
                                 ?>

                    </tbody>
                </table>

            </div>
            <div class="widget dashboard-container my-adslist">
                <h3 class="widget-header">Users</h3>
                <table id='myTable' class="table table-responsive product-dashboard-table">
                    <thead>
                        <tr>
                            
                            <th>Users</th>
                            <th class="text-center">Rol</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						        $sql  = "SELECT * FROM users WHERE idRol=3" ;

						             $statement = $pdo->prepare($sql);
						            $statement->execute();
						             $arrayList = $statement->fetchAll();
                            
                               foreach($arrayList  as $key){ 
                             echo '  
                               <tr>

                              <td class="product-details">
                                  <h3 class="title">'.$key['idUser'].'</h3>
                                  <span class="add-id"><strong>Nombre:</strong>'.$key['name'].'</span>
                                  <span class="location"><strong>Tel</strong>'.$key['number'].'</span>
                                  <span class="location"><strong>Email</strong>'.$key['email'].'</span>
                                  <span class="location"><strong>password</strong>'. $key['password'].'</span>
                              </td>
                              <td class="product-category"><span class="Rol">User</span></td>
                              <td class="action" data-title="Action">
                                  <div class="">
                                  <form method="POST">
                                      <ul class="list-inline justify-content-center">
                                          <li class="list-inline-item">
                                             
                                          </li>
                                          <li class="list-inline-item">
                                                <button name="accion" type="submit" value="delete" data-toggle="tooltip" data-placement="top" title="Delete"
                                                    class="btn btn-danger" href="">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                
                                          </li>
                                      </ul>
                                      <input type="hidden" value="'.$key['idUser'].'" name="txtID">
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