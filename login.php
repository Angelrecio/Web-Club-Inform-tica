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
<body style=" flex-direction: column; background-color: rgb(222, 56, 49);">
    <form method="post" action="login.php">
        <div id = "log_pro">
        <div id = footer_log>
        <label for="username" class = "login">Nombre de usuario</label>
        <br>
        <input style="width: 50%;" type="text" name="username" class = "login" id="username" required>
        <br>
        <br>
        <br>
        <label for="password" class = "login">Contraseña</label>
        <br>
        <input style="width: 50%; " type="password" class = "login" name="password" id="password" required>
        <br>
        <br>
        <br>
        <input type="submit" class = "login" name="submit" value="Iniciar sesión">
        </div>
        </div>
        <span><?php echo $error; ?></span>
    </form>
</body>
</html>