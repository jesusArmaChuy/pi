<?php
     $sumatoria=0;
        $IDCliente=$_SESSION['id_user'];
        $Fecha_final = (isset($_POST['Fecha_final']))?$_POST['Fecha_final']:'';
        $Iddireccion = (isset($_POST['Iddireccion']))?$_POST['Iddireccion']:'';
                
         $accion = (isset($_POST['accion']))?$_POST['accion']:'';
         
         switch ($accion) {
            case 'hola':
                echo "<script>console.log('funvionas');</script>";
                
                break;
             case 'add':
                
                    $count = 0;
                    $productoCarrito = [];

                    if( empty( $_SESSION['carrito'] ) ){
                        return FALSE;
                    }

                    foreach($_SESSION['carrito'] as $id => $cantidad ){
                        $idProduct = intval( $id );
                        $sql  = "SELECT * FROM products WHERE idProduct = $idProduct;";

                        $statement = $pdo->prepare($sql);
                        $statement->execute();
                        if( $arrayList = $statement->fetchAll( PDO::FETCH_ASSOC ) ){

                            $producto = &$arrayList[0];

                            foreach( $producto as $colName => $valor ){
                                if( !isset( $productoCarrito[ $id ] ) ){
                                    $productoCarrito[ $id ] = [];
                                }

                                $productoCarrito[ $id ][$colName] = $valor;
                            }
                            
                            $sumatoria+= ( floatval( $producto['Precio'] ) * floatval( $cantidad ) );
                            $count+= floatval( $cantidad );
                        }
                    }

                    $colums = [
                        'ID_client'         =>     $IDCliente,
                        'Fecha_Inicio'      =>     date('Y-m-d H:i:s'),
                        'Fecha_final'       =>     $Fecha_final,
                        'Id_Direccion'      =>     $Iddireccion,
                        'Cantidad_Art'      =>     $count,
                        'Precio_T'          =>     $sumatoria,
                    ];

                    $r_cols = array_keys( $colums );

                    $colum = implode( ', ', $r_cols );
                    $phcs = implode( ', :', $r_cols );

                    $sentencia = $pdo->prepare('INSERT INTO pedidos ('.$colum.') VALUES (:'.$phcs.');');

                    foreach( $colums as $cols => &$vals ){
                        $sentencia->bindParam(':'.$cols, $vals);
                    }

                    $sentencia->execute();

                    $idPedido = $pdo->lastInsertId();

                    foreach( $_SESSION['carrito'] as $id => $cantidad ){
                        if( empty( $productoCarrito[ $id ] ) ){
                            continue 1;
                        }

                        $producto =& $productoCarrito[ $id ];

                        $columnas = [
                            'Id_Producto'            =>     $producto['idProduct'],
                            'Cantidad_Producto'      =>     $cantidad,
                            'Precio_Producto'        =>     $producto['Precio'],
                            'idpedidos'             =>     $idPedido,
                        ];

                        $r_cols = array_keys( $columnas );

                        $col = implode( ', ', $r_cols );
                        $phc = implode( ', :', $r_cols );

                        $sentencia = $pdo->prepare('INSERT INTO detalles ('.$col.') VALUES (:'.$phc.');');

                        foreach( $columnas as $col => &$val ){
                            $sentencia->bindParam(':'.$col, $val);
                        }
                
                        $sentencia->execute();
                    }

                $_SESSION['carrito'] = NULL;
                $sumatoria = null;
                 echo '<script>
               alert("Se ha enviado su pedido");
                window.location.href="http://pishybakes.tk/menu.php";
               </script>';
               
                //  unset($_SESSION['carrito']);
                //  session_destroy();
                // echo "<h3>".$total."</h3>";
                
                 break;
             default:
                 // code...
                 echo "";
                 break;
         }
           
           ?>