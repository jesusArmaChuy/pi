               <!-- End of Topbar -->
               <?php
         
         $accion = (isset($_POST['accion']))?$_POST['accion']:'';
         $Nombre = (isset($_POST['Nombre']))?$_POST['Nombre']:'';
         $Descripcion = (isset($_POST['Descripcion']))?$_POST['Descripcion']:'';
         $DateI = (isset($_POST['DateI']))?$_POST['DateI']:'';
         $DateF = (isset($_POST['DateF']))?$_POST['DateF']:'';
         $Precio = (isset($_POST['Precio']))?$_POST['Precio']:'';
         $idCategory = (isset($_POST['idCategory']))?$_POST['idCategory']:'';
         $txtID  =(isset($_POST['txtID']))?$_POST['txtID']:"";
         $txtOldImg=(isset($_POST['txtOldImg']))?$_POST['txtOldImg']:"";
         $Imagen = (isset($_FILES['Imagen']['name']))?$_FILES['Imagen']['name']:"";
         
         switch ($accion) {
            case 'jaja':
                 echo 'sadasda';
                break;
             case 'add':
                 // code...
                 if($_FILES["Imagen"]["size"]>2024000){
                   echo 'Solo se permite archivos menores de 2MB';
                 }
                
                 $data=date("d").time();
                 $dir="PedidosPersonal/";   //aqui se coloca la ruta
                 $nombre_archivo=$data . rand(1, 100).".png";
               
                 
                 if (move_uploaded_file( $_FILES['Imagen']['tmp_name'],$dir.$nombre_archivo)) {
                  
                   $Imagen=$dir.$nombre_archivo;
                   
                   $sentenciaSQL = $pdo->prepare("INSERT INTO personalizadas (Id_direcciones,Id_client,Descripcion,Fecha_Inicio,Fecha_final,Imagen)VALUES (?,?,?,now(),?,?)"); 
                     $sentenciaSQL->bindParam(1, $idCategory);
                     $sentenciaSQL->bindParam(2, $txtID);
                     $sentenciaSQL->bindParam(3, $Descripcion);
                     $sentenciaSQL->bindParam(4, $DateF);
                     $sentenciaSQL->bindParam(5, $Imagen);
                     if ($sentenciaSQL->execute()) {
                       echo '
                       <script>
                       window.location.href=http://pishybakes.tk/Personalizado.php";
                       </script>
                       ';
                     }
                 }else{
                   echo"error en subir archivos";
                 }
         
                 break;
                
             default:
                 // code...
                 echo "";
                 break;
         }
           
           ?>