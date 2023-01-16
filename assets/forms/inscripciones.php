<?php
require "../request/conexion.php";
include "../functions/functs.php";


if (isset($_POST['submit'])) {
    echo "<br>";

    $nombre = capitalizeFirstLetter($_POST['name']);
    $n_exp = $_POST['n_expediente'];
    $email = capitalizeFirstLetter($_POST['email']);
    $razon = capitalizeFirstLetter($_POST['message']);


    // Prepare the SQL statement
    $sql = "INSERT INTO inscripcion (nombre, nexp, email, razon) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        // Bind the parameters to the placeholders in the SQL statement
        mysqli_stmt_bind_param($stmt, "siss", $nombre, $n_exp, $email, $razon);

        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Usuario creado con éxito";
        } else {
            echo "Error: failed to execute the SQL statement";
            
        }
    }
}

header("Location: /");
?>