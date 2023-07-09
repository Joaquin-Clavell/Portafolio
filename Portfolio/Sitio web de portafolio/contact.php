<?php
// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configurar el correo electrónico
$to = 'joaquinclavell1703@gmail.com'; // Cambia esto por tu dirección de correo electrónico
$subject = 'Nuevo mensaje de contacto';
$headers = "From: $name <$email>" . "\r\n" .
           "Reply-To: $email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();
           
// Construir el cuerpo del correo
$body = "Nombre: $name\n\n";
$body .= "Email: $email\n\n";
$body .= "Mensaje:\n$message";

// Enviar el correo electrónico
$mailSent = mail($to, $subject, $body, $headers);

// Verificar si el envío fue exitoso
if ($mailSent) {
    echo 'Mensaje enviado con éxito. Gracias por contactarte.';
} else {
    echo 'Hubo un error al enviar el mensaje. Por favor, inténtalo nuevamente.';
}
?>
