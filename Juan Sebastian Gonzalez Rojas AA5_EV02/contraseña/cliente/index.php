<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio de Registro e Inicio de Sesión</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <form action="../servicios/auth.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
