<?php
include "../request/conexion.php";
session_start();

if (isset($_POST['submit'])) {
    echo "<br>";

    $name = $_POST['name'];
    $id_usuario = $_SESSION['id'];
    $message = $_POST['message'];
    $message2 = $_POST['message2'];

    // Prepare the SQL statement
    $sql = "INSERT INTO proponerproyecto (id_usuario, nombre, ideaproyecto, materiales) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    echo 0;
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        echo 1;
        // Bind the parameters to the placeholders in the SQL statement
        mysqli_stmt_bind_param($stmt, "isss", $id_usuario, $nombre, $ideaproyecto, $materiales);
        echo 2;

        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo 3;
            echo "Usuario creado con éxito";
            header("Location: geniusX.php");
        } else {
            echo "Error: failed to execute the SQL statement";
        }
        
    }
}
?>
