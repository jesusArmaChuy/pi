<?php  
include_once "configServer.php";
$myServer = 'mysql:host='.SERVER.';dbname='.DB;

try{
    $pdo = new PDO($myServer, USER, PASSWORD,[
        PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"
    ]);
    //  echo "<script>console.log('conectado');</script>";
}catch(PDOException $e){
    die($e);
}


?>