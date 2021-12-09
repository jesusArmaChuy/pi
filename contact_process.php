<?php

$nombreCliente =    htmlentities( strip_tags( $_POST['name'] ) );
$emailCliente  =    filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message    =       htmlentities( strip_tags( $_POST['message'] ) );
$subject    =       htmlentities( strip_tags( $_POST['subject'] ) );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$r = __DIR__ . '/phpcode/PHPMailer-master/src';

is_readable( $a = realpath( $r.'/Exception.php' ) ) ? require_once( $a ) : die("No existe $archivo.");
is_readable( $a = realpath( $r.'/PHPMailer.php' ) ) ? require_once( $a ) : die("No existe $archivo.");
is_readable( $a = realpath( $r.'/SMTP.php' ) ) ? require_once( $a ) : die("No existe $archivo.");

$paraCliente    = $emailCliente;
$tituloCliente  = "Mi Formulario de Contacto..";
$mensajeCliente = "<html>".
    "<head><title>Email de Prueba</title>".
    "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        padding: 40px;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .bold{
        color:#333;
        font-size:25px;
        font-weight:bold;
    }
    img{
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px 0px 20px 0px;
    }
    </style>
</head>".
    "<body>" .
        "<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span>Felicitaciones <strong class='bold'>".$nombreCliente.'['.$emailCliente.']'." . . .!</strong></span>" .
                "<p>&nbsp;</p>" .
 			    "<p>Su formulario de Contacto funciona perfectamente...!</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p><strong>Mensaje: </strong> " . $message . " </p>" .
                "<p>&nbsp;</p>" .
        "<p>alerta de usuario</p>" .
        "<p>&nbsp;</p>" .
        "<p><span class='bold'> Pashybakes! </span></p>" .
        "<p>&nbsp;</p>" .
        "<p>".
            "<a title='Pashybakes' href='https://blogangular-c7858.web.app'>". 
                "<img src='imgs/favicon.png' alt='Logo' width='100px'/>". 
            "</a>". 
        "</p>" .
    "</div>" .
    "</body>" .
"</html>";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$emisor = [
    'email'     =>      'Pishybakes2022@outlook.com',
    'clave'     =>      'Pishybakes2021',
    'nombre'    =>      'Reynosa Tamaulipas'
];

try {
    //Server settings
    $mail->SMTPDebug =  0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = TRUE;                                   //Enable SMTP authentication
    $mail->Username   = $emisor['email'];                       //SMTP username
    $mail->Password   = $emisor['clave'];                       //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable explicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($emisor['email'], $emisor['nombre']);
    //  $mail->addAddress($emailCliente, $nombreCliente);     //Add a recipient
    $mail->addAddress('Pishybakes2022@outlook.com');   
     $mail->addAddress('ajb0ussines@gmail.com');
    //Name is optional
    //  $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $mensajeCliente;
    $mail->AltBody = strip_tags( $mensajeCliente );

    $mail->send();

    echo "<script>
        alert('¡Mensaje enviado correctamente!\\r\\nUn momento por favor.');
        setTimeout(function(){window.location = 'contact.php';}, 1000);
    </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<script src="https://kit.fontawesome.com/0bb786d7e2.js" crossorigin="anonymous"></script>