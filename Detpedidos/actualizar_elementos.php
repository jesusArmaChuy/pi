<?php 

is_readable( $f = __DIR__ . '/../login.php' ) ? require_once( $f ) : die( 'No se pudo cargar la sesion.' );    

if( !session_id() or empty( $_SESSION['name'] ) ){
    die( '¡Incorrecto!<br>No hay una sesión abierta.' );
}

//  Si no existe un carrito, creamos uno vacío.
if( empty( $_SESSION['carrito'] ) ){
    die( 'No hay elementos en el carrito actual.' );
}

//  Obtenemos el ID a actualizar.
$idActualizar = $_POST['id'] ?? FALSE;

//  Nuevo valor a establecer.
$valorNuevo = floatval( $_POST['cantidad'] ?? FALSE );


if( !$idActualizar ){
    die( 'No se seleccionó un producto para actualizar.' );
}

if( !isset( $_SESSION['carrito'][$idActualizar] ) ){
    die( 'No existe el producto a actualizar.' );
} else {
    if( !$valorNuevo or $valorNuevo < 0 ){
        unset( $_SESSION['carrito'][$idActualizar] );
    }else{
        $_SESSION['carrito'][$idActualizar] = $valorNuevo;
    }
}

die( json_encode( $_SESSION['carrito'] ) );