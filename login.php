<?php

require "assets/request/conexion.php";

session_start();

$username = "";
$password = "";
$error = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];



    // Escapar caracteres especiales en el nombre de usuario y la contraseña
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Consulta para comprobar si el usuario y la contraseña existen en la base de datos
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) {
        // Iniciar sesión
        $_SESSION['username'] = $username;
        header('location: index.php');
    } else {
        $error = "Nombre de usuario o contraseña incorrectos";
    }

    mysqli_close($conn);
}
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <form method="post" action="login.php">
        <div class = formulario_sesion>
        <label for="username">Nombre de usuario</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" name="submit" value="Iniciar sesión">
        </div>
        <span><?php echo $error; ?></span>
    </form>
</body>
</html>