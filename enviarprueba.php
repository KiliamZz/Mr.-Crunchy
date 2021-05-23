<? php 
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];

$body= "Nombre:" . $nombre . "<br>correo" . $correo . "<br>telefono" . $telefono . "<br>mensaje" . $mensaje;


use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

requiere  ' PHPMailer / Exception.php' ;
requiere  ' PHPMailer / PHPMailer.php' ;
requiere  ' PHPMailer / SMTP.php' ;
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'kiliamzamir2204@gmail.com';                  // SMTP username
    $mail->Password   = 'contraseña';                           // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('kiliamzamir2204@gmail.com');
    $mail->addAddress('kiliamzamir2204@gmail.com');
    




    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'pedido';
    $mail->Body    = 'este es el pedido';
  

    $mail->send();
    echo '<script>
    alert("el mensaje se envío correctamente");
    Window.history.go(-1)
    </script>';
} catch (Exception $e) {
    echo 'Hubo un error al enviar el mensaje: ', $mail->ErrorInfo;
}