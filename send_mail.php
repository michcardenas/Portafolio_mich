<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Configura el correo
    $to = "michcardenas001@gmail.com";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Crea el cuerpo del mensaje
    $body = "<h2>Nuevo mensaje de contacto</h2>";
    $body .= "<p><strong>Nombre:</strong> {$name}</p>";
    $body .= "<p><strong>Email:</strong> {$email}</p>";
    $body .= "<p><strong>Asunto:</strong> {$subject}</p>";
    $body .= "<p><strong>Mensaje:</strong><br>{$message}</p>";

    // Envía el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Error al enviar el mensaje";
    }
} else {
    echo "Método de solicitud no soportado";
}
?>
