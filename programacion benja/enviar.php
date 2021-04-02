<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>

    <script src="https://kit.fontawesome.com/6cf1997e79.js" crossorigin="anonymous"></script>

    <link rel="icon" href="img/google_contacts_logo.ico">

    <link rel="stylesheet" href="css/estilos2.css">

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/script.js"></script>
    
</head>
<body>

<section class="form_wrap">

    <section class="contact_info">
        <section class="info_title">
            <span><i class="fas fa-user-circle"></i></span>
            <h2>INFORMACIÓN<br>DE CONTACTO</h2> 
        </section>
        <section class="info_items">
            <p><span><i class="fas fa-envelope"></i></span> contacto@somoshopefilms.com</p> 
            <p><span><i class="fas fa-mobile-alt"></i></span> +51(977139793)</p>  
        </section>
    </section>

    <?php 
$myemail = 'benjaminramirezhorna@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
header ('mensaje-de-envio.html')
?>


    <form method="post" action="enviar.php" class="form_contact">
        <h2>Envia un mensaje</h2>
        <div class="user_info">
            <label for="names">Nombres *</label>
            <input type="text" id="names"  placeholder="NOMBRE" name="nombre" required>

            <label for="phone">Telefono / Celular</label>
            <input type="number" id="phone" name="telefono" placeholder="CELULAR">

            <label for="email">Correo electronico *</label>
            <input type="email" id="email" placeholder="CORREO" name="Correo" required>

            <label for="mensaje">Mensaje *</label>
            <textarea type="text" id="mensaje" placeholder="MENSAJE"  name="mensaje" required></textarea>

                        <input type="submit" value="Enviar Mensaje" id="btnSend">
        </div>
    </form>


</section>

</body>
</html>