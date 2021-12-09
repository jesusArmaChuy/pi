<?php 

is_readable( $f = __DIR__ . '/../phpcode/Logincode.php' ) ? require_once( $f ) : die( 'No se pudo cargar la sesion.' );    
is_readable( $f = __DIR__ . '/../global/connectionBD.php' ) ? require_once( $f ) : die( 'No se pudo cargar la sesion.' ); 

if( !session_id() or empty( $_SESSION['name'] ) ){
    die( '¡Incorrecto!<br>No hay una sesión abierta.' );
}

$volcar = [];

if( $idPedido = intval( $_POST['idPedido']??0 ) ){
    try {
        $sql  = "SELECT * FROM vw_productodetalles WHERE idpedidos = $idPedido";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        if( empty( $arrayList = $statement->fetchAll( PDO::FETCH_ASSOC ) ) ){
            die('No tengo resultados');
        }

        $volcar['vw_productodetalles'] = $arrayList;
    } catch ( \Throwable $e ) {
        die( $e->getMessage() );
    }

    if( empty( $arrayList ) ){
        die('error');
    }

    try {
        $sql  = "SELECT * FROM vw_pedidosdeusuario WHERE Id_pedidos = $idPedido";

        $statement = $pdo->prepare($sql);
        $statement->execute();
        if( empty( $arrayList = $statement->fetchAll( PDO::FETCH_ASSOC ) ) ){
            die('No tengo resultados');
        }

        $volcar['vw_pedidosdeusuario'] = $arrayList;
    } catch ( \Throwable $e ) {
        die( $e->getMessage() );
    }

    if( empty( $arrayList ) ){
        die('error');
    }
}


die( $idPedido ? json_encode( $volcar ) : 0 );