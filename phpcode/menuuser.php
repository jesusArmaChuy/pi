<?php
                            
                            if(isset($_SESSION['id_user'])){
                                if($_SESSION['rol']==='4'){
                                echo '
                             
                            <a class="dropdown-item" href="Registro.php">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Dashboard
                            </a>
                            <a class="dropdown-item" href="mio.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                  mis pedidos
                                       </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cerrar sesion
                            </a>
                                ';

                                }else{

                                    echo '
                                    <a class="dropdown-item" href="mio.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                  mis pedidos
                                       </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesion
                                </a>
                                    ';
    
                                    
                                }
                            }else{
                                echo '
                                
                            <a class="dropdown-item" href="login.php">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Inciar sesion
                            </a>
                                '; 
                            }
                            
                            ?>