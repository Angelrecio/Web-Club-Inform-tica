<?php
require "../request/conexion.php";
include "../functions/functs.php";


if (isset($_POST['submit'])) {
    echo "<br>";

    $titulo = capitalizeFirstLetter($_POST['titulo']);
    $descripcion = capitalizeFirstLetter($_POST['descripcion']);
    $link = $_POST['link'];

    // Prepare the SQL statement
    $sql = "INSERT INTO hacknet (titulo, descripcion, link) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        // Bind the parameters to the placeholders in the SQL statement
        mysqli_stmt_bind_param($stmt, "sss", $titulo, $descripcion, $link);
        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Proyecto subido con exito";
            header("Location: ../../admin/");
        } else {
            echo "Error: failed to execute the SQL statement";
            sleep(5);
            header("Location: ../../admin/");
        }
        
    }
}
?>