<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
</head>
    <body>
    <h1>Sign In</h1>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1" name="apellido1" required>
        <br>

        <label for="apellido2">Segundo Apellido:</label>
        <input type="text" id="apellido2" name="apellido2" required>
        <br>

        <label for="n-exp">Número de expediente:</label>
        <input type="number" id="n-exp" name="n-exp" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="role">Rol:</label>
        <input type="radio" id="student" name="role" value="1">
        <label for="Estudiante">Estudiante</label>
        <input type="radio" id="admin" name="role" value="0">
        <label for="Administrador">Administrador</label><br>
        
        <input type="submit" value="registrar">
        </form>
    </body>
</html>

<?php
if (isset($_POST['submit'])) {
    require "assets/request/conexion.php";
    echo "conectado";

    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $n_exp = $_POST['n-exp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Crear un hash de contraseña
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, n-exp, email, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        // Bind the parameters to the placeholders in the SQL statement
        mysqli_stmt_bind_param($stmt, "sssissi", $nombre, $apellido1, $apellido2, $n_exp, $email, $password_hash, $role);

        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Usuario creado con éxito";
        } else {
            echo "Error: failed to execute the SQL statement";
        }
    }
}
?>
