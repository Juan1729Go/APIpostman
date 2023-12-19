<?php
// Manejar la autenticación aquí

// Verificar si se enviaron datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir usuario y contraseña
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Aquí deberías realizar la lógica de autenticación (puedes usar una base de datos)
    // Por ejemplo, comparar con información almacenada en la base de datos
    $usuario_valido = "usuario_demo";
    $contrasena_valida = "contrasena_demo";

    if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
        echo "Autenticación satisfactoria";
    } else {
        echo "Error en la autenticación";
    }
}
?>
