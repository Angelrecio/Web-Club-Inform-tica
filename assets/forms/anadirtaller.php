<?php
require "../request/conexion.php";
include "../functions/functs.php";


if (isset($_POST['submit'])) {
    $titulo = capitalizeFirstLetter($_POST["titulo"]);
    $descripcion = capitalizeFirstLetter($_POST["descripcion"]);
    $fecha_realizacion = $_POST["fecha-realizacion"];
    $seccion = $_POST["seccion"];
    $capacidad = $_POST["capacidad"];
    $aula = capitalizeFirstLetter($_POST["Aula"]);

    $sql = "INSERT INTO talleres (titulo, descripcion, fecharealizacion, seccion, capacidad, Aula)
    VALUES ('$titulo', '$descripcion', '$fecha_realizacion', '$seccion', '$capacidad', '$aula')";

    if (mysqli_query($conn, $sql)) {
        echo "Taller creado correctamente";
        header("Location: ../../admin/");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        sleep(5);
        header("Location: ../../admin/");
    }
}
?>