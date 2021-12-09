<?php 

is_readable( $f = __DIR__ . '/../login.php' ) ? require_once( $f ) : die( 'No se pudo cargar la sesion.' );    

if( !session_id() or empty( $_SESSION['name'] ) ){
    die( '¡Incorrecto!<br>No hay una sesión abierta.' );
}

//  Si no existe un carrito, creamos uno vacío.
if( empty( $_SESSION['carrito'] ) ){
    $_SESSION['carrito'] = [];
}

/** Datos recibidos del USUARIO.
 */
if( !count( $_POST ) ){

    $_POST = [
        'id'    =>  [
            //'12',
            //'15',
            //'18',
            '20'
        ],
        'cantidad'    =>  [
            //'1',
            //'1',
            //'3',
            '4'
        ]
    ];
}

if( count( $_POST['id'] ) != count( $_POST['cantidad'] ) ){
    die( 'No enviaste todos los datos necesarios.' );
}

/*  Construiremos esto:
    $_SESSION['carrito'] = [
        '12'    =>      1,
        '15'    =>      1,
        '18'    =>      3,
    ];
 */
foreach( $_POST['id'] as $i => $producto ){

    //  Obtenemos la ruta a la cantidad del producto actual.
    $cantidad =& $_POST['cantidad'][ $i ];

    //  Nos aseguramos que la variable cantidad sea un numero con punto decimal.
    $cantidad = floatval( $cantidad );

    //  si no existe el producto actual en mi carrito entonces
    if( empty( $_SESSION['carrito'][ $producto ] ) ){

        // se inicializa el producto
        $_SESSION['carrito'][$producto] = 0;
    }

    //siempre se sumara la cantidad del producto a mi carrito.
    $_SESSION['carrito'][$producto]+= $cantidad;
}

//  Eliminar productos con cantidades invalidas (0 productos o menos).
foreach( $_SESSION['carrito'] as $id => $cantidad ){
    if( $cantidad <= 0 ){

        //  Eliminamos el producto del carrito.
        unset( $_SESSION['carrito'][ $id ] );
    }
}

die( json_encode( $_SESSION['carrito'] ) );