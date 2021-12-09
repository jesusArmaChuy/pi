<?php 

is_readable( $f = __DIR__ . '/../login.php' ) ? require_once( $f ) : die( 'No se pudo cargar la sesion.' );    

if( !session_id() or empty( $_SESSION['name'] ) ){
    die( '¡Incorrecto!<br>No hay una sesión abierta.' );
}

/** La variable eliminar verificara que se resiva el id producto despues convierte en entero.
 *  O arroja un FALSE en caso de no haberlo recibido.
 */
$idEliminar = $_GET['id'] ?? FALSE;

// si no hay un id a eliminar matamos el proceso
if( !$idEliminar ){
    die( '1' );
}

// si id eliminar existe en el carrito lo eliminamos.
if( isset( $_SESSION['carrito'][ $idEliminar ] ) ){
    unset( $_SESSION['carrito'][ $idEliminar ] );
}

die( json_encode( $_SESSION['carrito'] ) );