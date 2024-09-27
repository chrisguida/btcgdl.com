<?php
if (isset($_POST['firstname'], $_POST['email'], $_POST['message'])) {

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Dirección de correo a donde quieres recibir los emails.
    $to = 'guadalajarabitcoin@gmail.com';

    // Asunto del correo
    $subject = 'Nuevo formulario de contacto en btcgdl.com';

    // Encabezados del correo
    $headers = "From: " . $firstname . " <" . $email . "> \r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo
    $send_email = mail($to, $subject, $message, $headers);

    // Mostrar un mensaje de éxito o error
    if ($send_email) {
        echo 'success';
    } else {
        echo 'error';
    }

} else {
    echo 'Por favor completa todos los campos.';
}
?>
