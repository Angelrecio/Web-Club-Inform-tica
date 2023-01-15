<?php
include "../request/conexion.php";
session_start();

if (isset($_POST['submit'])) {
    echo "<br>";

    print_r($_POST);

    $name = $_POST['name'];
    echo $name ."<br>";
    $id_usuario = $_SESSION['id'];
    echo $id_usuario ."<br>";
    $message = $_POST['message'];
    echo $message ."<br>";
    $message2 = $_POST['message2'];
    echo $message2 ."<br>";

    // Prepare the SQL statement
    $query = "INSERT INTO proponerproyecto (id_usuario, nombre, ideaproyecto, materiales) VALUES ($id_usuario, '$name', '$message', '$message2')";
    echo $query;
    $stmt = mysqli_stmt_init($conn);
    echo 0;
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "Error: failed to prepare the SQL statement";
    } else {
        echo 1;
        //echo "<br>";
        //echo $query;
        echo "<br>";
        print_r($stmt);
        echo "<br>";

        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo 3;
            echo "Usuario creado con éxito";
            header("Location: ../../geniusX.php");
        } else {
            echo "Error: failed to execute the SQL statement";
        }
        
    }
}
?>
