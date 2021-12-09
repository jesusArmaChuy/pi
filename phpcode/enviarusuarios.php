               <!-- End of Topbar -->
              
              
              
              <?php
         
         $accion = (isset($_POST['accion']))?$_POST['accion']:'';
        
         $txtID  =(isset($_POST['txtID']))?$_POST['txtID']:"";
         
         switch ($accion) {
        
                 case 'delete':
                   $sentenciaSQL2 = $pdo->prepare("SELECT * FROM users");
                   $sentenciaSQL2->execute();
                  $listaProductos=$sentenciaSQL2->fetchAll(PDO::FETCH_ASSOC);
       
                  
                     $accion  =(isset($_POST['accion']))?$_POST['accion']:"";
                
                   $sentenciaSQL = $pdo->prepare("DELETE FROM users WHERE  idUser  =:txtID");
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