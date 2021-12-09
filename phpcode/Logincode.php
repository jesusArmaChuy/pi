<?php  
session_start();


// validar si hay una sesion existente
if ( isset($_SESSION['id_user']) and empty( $_POST )) {
    // die('<script>window.location.href="http://pishybakes.tk/"</script>'); 
}
// validar si hay una sesion existente

$email = (isset($_POST['email'])) ? htmlentities(strip_tags($_POST['email'])) : '';
$pwd = (isset($_POST['password'])) ? htmlentities(strip_tags($_POST['password'])) : '';

$pwd_hash = hash_hmac('sha256', $pwd, '123');

$alert='';
if($email != '' && $pwd != ''){
    $Sql = "SELECT * FROM users where email=? && password=?";
    $statementSql = $pdo->prepare($Sql);

    $statementSql->bindParam(1, $email);
    $statementSql->bindParam(2, $pwd_hash);

    if ($statementSql->execute()) {
        $nmbr = $statementSql->rowCount();
        
        if ($nmbr !== 0) {
            $arrL = $statementSql->fetch(PDO::FETCH_ASSOC);
            // sesión valida
            $_SESSION['id_user'] = $arrL['idUser'];
            $_SESSION['email'] = $arrL['email'];
            $_SESSION['name'] = $arrL['name'];
            $_SESSION['lName'] = $arrL['lastName'];
            $_SESSION['rol'] = $arrL['idRol'];
            $_SESSION['phone'] = $arrL['number'];

            if($arrL['idRol']==='4'){
                die('<script>window.location.href="http://pishybakes.tk/Registro.php"</script>'); 
            }else{
                die('<script>window.location.href="http://pishybakes.tk/"</script>'); 
            }

        }else{
            $alert = "
                <p>Correo ó contraseña invalidos, vuelve a intentar...</p>
            ";
        }
    }

}else{
    if (isset($_POST['btnLoguiarse'])== 'Ingresar') {
        $alert = "
            <p>Todos los campos son obligatorios.</p>
        ";
    }
}

?>