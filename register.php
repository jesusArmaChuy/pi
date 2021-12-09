<?php
session_start();
// validar si hay una sesion existente
if ((isset($_SESSION['id_user']))) {
    die('<script>window.location.href="login.php"</script>');

}
// validar si hay una sesion existente

include_once 'global/connectionBD.php';
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
                $query = $pdo->prepare("INSERT INTO users (idUser, name, lastName, number, email, password, idRol) VALUES (NULL,?,?,?,?,?,3)");
                $query -> bindParam(1, $first_name);
                $query -> bindParam(2, $last_name);
                $query -> bindParam(3, $number);
                $query -> bindParam(4, $email);
                $query -> bindParam(5, $pwd_hash);
    
                $result = $query->execute();
    
                if($result){
                    $message = "Cuenta correctamente creada ";
                     die('<script>window.location.href="login.php"</script>');
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

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <?php echo $message;  ?>
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
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Ya tienes una cuenta? Inicia!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="Dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Dashboard/js/sb-admin-2.min.js"></script>

</body>

</html>