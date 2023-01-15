<?php
include "assets/request/conexion.php";

if (isset($_POST['submit'])) {
    echo "<br>";

    $name = $_POST['name'];
    $message = $_POST['message'];
    $message2 = $_POST['message2'];

    // Prepare the SQL statement
    $sql = "INSERT INTO proponerproyecto (id, id_usuario, nombre, nexp, email, ideaproyecto, materiales) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        // Bind the parameters to the placeholders in the SQL statement
        mysqli_stmt_bind_param($stmt, "iisisss", $id, $id_usuario, $nombre, $n_exp, $email, $password_hash, $role);

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
