<?php

        $total=0;
        $IDCliente=$_SESSION['id_user'];
        $DateF = (isset($_POST['DateF']))?$_POST['DateF']:'';
        $idCategory = (isset($_POST['idCategory']))?$_POST['idCategory']:'';
                
         $accion = (isset($_POST['accion']))?$_POST['accion']:'';
    
         
         switch ($accion) {
            case 'jaja':
                 echo 'sadasda';
                break;
             case 'add':
                foreach($_SESSION['carrito'] as $indice=>$producto){

                    $total=$total+($producto['Precio']*$cantidad);
                   $count+= $count+1;
                }
                    $sentencia=$pdo->prepare("INSERT INTO `pedidos` (`ID_client `, `Fecha_Inicio`,`Fecha_Inicio`, `Id_Direccion`, `Cantidad_Art`, `Precio_T`) 
                    VALUES (:IDcliente, NOW(), :DateF, :idDireccion, :cantidad_Art, :Total);");
                
                    $sentencia->bindParam(":IDcliente",$IDCliente);
                    $sentencia->bindParam(":Total",$total);
                    $sentencia->bindParam(":DateF",$DateF);
                    $sentencia->bindParam(":idDireccion",$idCategory );
                    $sentencia->execute();
                    $idPedido=$pdo->lastInsertId();
                
                    foreach($_SESSION['carrito'] as $indice=>$producto){ 
                
                        $sentencia=$pdo->prepare("INSERT INTO `detalles` (`Id_Producto`, `Cantidad_Producto`, `Precio_Producto`, `id_pedidos`) 
                        VALUES (:IDPRODUCTO, :CANTIDAD, :IDPEDIDO, :PRECIOUNITARIO);");
                
                        $sentencia->bindParam(":IDPRODUCTO",$producto['idProduct']);
                        $sentencia->bindParam(":CANTIDAD",$cantidad);
                        $sentencia->bindParam(":IDPEDIDO",$idPedido);
                        $sentencia->bindParam(":PRECIOUNITARIO",$producto['Precio']);
                        $sentencia->execute();
                }
                unset($_SESSION['carrito']);
                session_destroy();
                
                echo "se realizo su pedido";
                // echo "<h3>".$total."</h3>";
                }
                 break;
             default:
                 // code...
                 echo "";
                 break;
         }
           
           ?>