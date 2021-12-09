               <?php
         
         $accion = (isset($_POST['accion']))?$_POST['accion']:'';
         $txtID  =(isset($_POST['txtID']))?$_POST['txtID']:"";
         
         
         switch ($accion) {
                case 'new':
                 echo'funciona';

                    break;

                 case 'Delete_Personal':
                   $sentenciaSQL2 = $pdo->prepare("SELECT * FROM personalizadas");
                   $sentenciaSQL2->execute();
                  $listaProductos=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
               
                  
                    //  $accion  =(isset($_POST['accion']))?$_POST['accion']:"";
                   $sentenciaSQL = $pdo->prepare("SELECT Imagen FROM personalizadas WHERE Id_Personalizado=:txtID");
                   $sentenciaSQL->bindParam(':txtID', $txtID);
                   $sentenciaSQL->execute();
                   $product=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                   if(isset($product["Imagen"])){
                           if(file_exists($product["Imagen"])){
                               unlink($product["Imagen"]);
                                          }
                                                               }
                   $sentenciaSQL = $pdo->prepare("DELETE FROM personalizadas WHERE  Id_Personalizado =:txtID");
                     $sentenciaSQL->bindParam(':txtID', $txtID);
                    
                  if($sentenciaSQL->execute()){
       
                   // echo "<script>window.location.href = 'http://localhost/classimax-premium/Dashboard/dashboard-archived-ads.php';</script>";
                   }
                       $accion=null; 
                      break;
                      case 'Delete_User':
                        $sentenciaSQL2 = $pdo->prepare("SELECT * FROM detalles");
                        $sentenciaSQL2->execute();
                       $listaProductos=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
                            
                        $sentenciaSQL = $pdo->prepare("DELETE FROM detalles WHERE  idpedidos =:txtID");
                          $sentenciaSQL->bindParam(':txtID', $txtID);
                      
                         
                          $sentenciaSQL2 = $pdo->prepare("SELECT * FROM pedidos");
                          $sentenciaSQL2->execute();
                         $listaProductos=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
              
                          $sentenciaSQL = $pdo->prepare("DELETE FROM pedidos WHERE  Id_pedidos =:txtID");
                            $sentenciaSQL->bindParam(':txtID', $txtID);
                       if($sentenciaSQL->execute()){
            
                        // echo "<script>window.location.href = 'http://localhost/classimax-premium/Dashboard/dashboard-archived-ads.php';</script>";
                        }
                            $accion=null; 
                           break;
           
             default:
                 // code...
                 echo "";
                 break;
         }
           
           ?>