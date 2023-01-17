<?php
require "../request/conexion.php";
include "../functions/functs.php";

$error = "";
$id = $_POST['submit'];

echo 0;

if (isset($id)) {
    echo 1;

    $date = date("Y-m-d");
    $sql = "UPDATE proyecto SET fecha_fin = '$date' WHERE id=$id;";
    echo $sql;
    

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Proyecto finalizado con éxito";
            sleep(3);

            header("Location: ../../admin/");
        } else {
            $error = "Error: El fin del proyecto a fallado";
        }
    }
}

?>