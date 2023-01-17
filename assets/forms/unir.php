<?php
require "../request/conexion.php";
include "../functions/functs.php";
session_start();

$user = $_SESSION['id'];

$error = "";
$id = $_POST['submit'];

echo 0;

if (isset($id)) {
    echo 1;

    $sql = "INSERT INTO talleresusuarios (id_usuario, id_taller) VALUES ('$user', '$id')";
    echo $sql;

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Te has unido con exito con éxito";
            header("Location: /");
        } else {
            $error = "Error: unirte a fallado";
            sleep(3);
        }
    }
}

?>