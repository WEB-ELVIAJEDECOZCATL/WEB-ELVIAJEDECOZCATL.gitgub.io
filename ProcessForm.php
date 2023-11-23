<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

         // Puedes realizar acciones adicionales aquí, como enviar correos electrónicos
    $para = "AngelMoreno@Gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";
    $cuerpo = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje";

    mail($para, $asunto, $cuerpo);

    // Imprimir un mensaje de éxito o redirigir al usuario a una página de éxito
    echo "¡Gracias! Tu mensaje ha sido enviado con éxito.";

    // Imprimir los datos para demostración
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo electrónico: " . $correo . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";

} else {
    // Si alguien intenta acceder directamente a este script sin enviar datos por POST, puedes redirigirlo o manejarlo de otra manera.
    echo "Acceso no autorizado.";
}
?>
