<?php
require "assets/request/conexion.php";
session_start();

$error = "";
$id = $_POST['submit'];

if (isset($id)) {

    $sql = "UPDATE usuarios SET pass = '$hash_password' WHERE id=$id;";
            echo $sql;

            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "Error: failed to prepare the SQL statement";
            } else {
                // Execute the SQL statement
                if (mysqli_stmt_execute($stmt)) {
                    echo "Contraseña cambiada con éxito";
                    sleep(3);
                    header("Location: logout.php");
                } else {
                    $error = "Error: El cambio de contraseña a fallado";
                }
    
            }
}

?>