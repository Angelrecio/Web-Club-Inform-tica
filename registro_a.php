<?php
include "assets/request/conexion.php";


if (isset($_POST['submit'])) {
    echo "<br>";

    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $n_exp = $_POST['nexp'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    // Crear un hash de contraseña
    $password_hash = password_hash($n_exp, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, nexp, email, pass, rol) VALUES (?, ?, ?, ?, ?, ?, ?)";
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
        header("Location: /");
    }
}
?>