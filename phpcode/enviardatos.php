               <!-- End of Topbar -->
               <?php
         
         $accion = (isset($_POST['accion']))?$_POST['accion']:'';
         $Nombre = (isset($_POST['Nombre']))?$_POST['Nombre']:'';
         $Descripcion = (isset($_POST['Descripcion']))?$_POST['Descripcion']:'';
         $Precio = (isset($_POST['Precio']))?$_POST['Precio']:'';
         $idCategory = (isset($_POST['idCategory']))?$_POST['idCategory']:'';
         $txtID  =(isset($_POST['txtID']))?$_POST['txtID']:"";
         $txtOldImg=(isset($_POST['txtOldImg']))?$_POST['txtOldImg']:"";
         $Imagen = (isset($_FILES['Imagen']['name']))?$_FILES['Imagen']['name']:"";
         
         switch ($accion) {
             case 'add':
                 // code...
                 if($_FILES["Imagen"]["size"]>2024000){
                   echo 'Solo se permite archivos menores de 2MB';
                 }
                
                 $data=date("d").time();
                 $dir="Productos/";   //aqui se coloca la ruta
                 $nombre_archivo=$data . rand(1, 100).".png";
               
                 
                 if (move_uploaded_file( $_FILES['Imagen']['tmp_name'],$dir.$nombre_archivo)) {
                  
                   $Imagen=$dir.$nombre_archivo;
                   
                   $sentenciaSQL = $pdo->prepare("INSERT INTO products (idCategory,Nombre,Descripcion,Precio,Imagen)VALUES (?,?,?,?,?)"); 
                     $sentenciaSQL->bindParam(1, $idCategory);
                     $sentenciaSQL->bindParam(2, $Nombre);
                     $sentenciaSQL->bindParam(3, $Descripcion);
                     $sentenciaSQL->bindParam(4, $Precio);
                     $sentenciaSQL->bindParam(5, $Imagen);
                     if ($sentenciaSQL->execute()) {
                       echo '
                       <script>
                       window.location.href="http://pishybakes.tk/Registro.php";
                       </script>
                       ';
                     }
                 }else{
                   echo"error en subir archivos";
                 }
         
                 break;
                 case 'delete':
                   $sentenciaSQL2 = $pdo->prepare("SELECT * FROM products");
                   $sentenciaSQL2->execute();
                  $listaProductos=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
       
                  
                     $accion  =(isset($_POST['accion']))?$_POST['accion']:"";
                   $sentenciaSQL = $pdo->prepare("SELECT Imagen FROM products WHERE idProduct=:txtID");
                   $sentenciaSQL->bindParam(':txtID', $txtID);
                   $sentenciaSQL->execute();
                   $product=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                   if(isset($product["Imagen"])){
                           if(file_exists($product["Imagen"])){
                               unlink($product["Imagen"]);
                                          }
                                                               }
                   $sentenciaSQL = $pdo->prepare("DELETE FROM products WHERE  idProduct =:txtID");
                     $sentenciaSQL->bindParam(':txtID', $txtID);
                    
                  if($sentenciaSQL->execute()){
       
                   // echo "<script>window.location.href = 'http://localhost/classimax-premium/Dashboard/dashboard-archived-ads.php';</script>";
                   }
                       $accion=null; 
                      break;
             case 'Modify':
              if ($idCategory!= ""){
                  # code...
                  $sentenciaSQL = $pdo->prepare("UPDATE products SET  idCategory = :idCate, Nombre = :Nombre,
                  Precio= :Precio, Descripcion = :Descripcion WHERE idProduct=:id"); 
                 $sentenciaSQL->bindParam(':id', $txtID);
                 $sentenciaSQL->bindParam(':idCate', $idCategory);
                 $sentenciaSQL->bindParam(':Nombre',$Nombre);
                 $sentenciaSQL->bindParam(':Precio', $Precio);
                 $sentenciaSQL->bindParam(':Descripcion', $Descripcion);
                
                 
                 $sentenciaSQL->execute();
             if($Imagen!="")
             {
                 if($_FILES["Imagen"]["size"]>2024000){
                     echo 'Solo se permite archivos menores de 2MB';
                   }
                 
                   $data=date("d").time();
                   $dir="Productos/";   //aqui se coloca la ruta
                   $nombre_archivo=$data . rand(1, 100).".png";
                   move_uploaded_file( $_FILES['Imagen']['tmp_name'],$dir.$nombre_archivo);
                   $Imagen=$dir.$nombre_archivo;
                   $accion  =(isset($_POST['accion']))?$_POST['accion']:"";
                   $sentenciaSQL = $pdo->prepare("SELECT Imagen FROM products WHERE idProduct=:txtID");
                   $sentenciaSQL->bindParam(':txtID', $txtID);
                   $sentenciaSQL->execute();
                   $product=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
                   if(isset($product["Imagen"])){
                           if(file_exists($product["Imagen"])){
                               unlink($product["Imagen"]);
                                          }
                                                               }
            
             $sentenciaSQL = $pdo->prepare("UPDATE products SET Imagen = :Imagen WHERE idProduct=:txtID");  
             $sentenciaSQL->bindParam(':Imagen', $Imagen); 
             $sentenciaSQL->bindParam(':txtID', $txtID);
             $sentenciaSQL->execute();
         
             }else
             {
              $sentenciaSQL = $pdo->prepare("UPDATE products SET Imagen = :Imagen WHERE idProduct=:txtID"); 
             $sentenciaSQL->bindParam(':Imagen', $txtOldImg); 
             $sentenciaSQL->bindParam(':txtID', $txtID);
             $sentenciaSQL->execute();
             }
             echo '<script>
             window.location.href="http://pishybakes.tk/Registro.php";
             </script>';
              }else{
               echo '<script>
               alert("Seleccione una categoria!");
               </script>';
       
              }
              
                 break;
             case 'Seleccionar':
               $sentenciaSQL = $pdo->prepare("SELECT * FROM products WHERE idProduct=:id");
               $sentenciaSQL->bindParam(':id', $txtID);
               $sentenciaSQL->execute();
               $Producto=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
               $txtID=$Producto['idProduct'];
               $Nombre=$Producto['Nombre'];
               $idCategory=$Producto['idCategory'];
               $Descripcion=$Producto['Descripcion'];
               $Precio=$Producto['Precio'];
               $Imagen=$Producto['Imagen'];
                //variable para guardar el nombre de la imagen original
                $txtOldImg=$Producto['Imagen'];
       
               
                 break;
             case 'Cancel':
              
               // header('Location: Registro.php');
               echo '<script>
               window.location.href="http://pishybakes.tk/Registro.php";
               </script>';
                 break;
             default:
                 // code...
                 echo "";
                 break;
         }
           
           ?>