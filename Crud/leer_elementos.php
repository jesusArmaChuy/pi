<?php 

is_readable( $f = __DIR__ . '/../login.php' ) ? require_once( $f ) : die( 'No se pudo cargar la sesion.' );    

if( !session_id() or empty( $_SESSION['name'] ) ){
    die( '¡Incorrecto!<br>No hay una sesión abierta.' );
}

//  Si no existe un carrito, creamos uno vacío.
if( empty( $_SESSION['carrito'] ) ){
    $_SESSION['carrito'] = [];
}

die( json_encode( $_SESSION['carrito'] ) );