<?php

// Recopilar los datos del formulario
$name = $_POST['name'];
$message = $_POST['message'];
$message2 = $_POST['message2'];

// Validar los datos de entrada
if (empty($name) || empty($surname1) || empty($n_exp) || empty($email) || empty($password)) {
    // Mostrar mensaje de error
    exit("Por favor, ingrese todos los datos requeridos.");
    header("Location: registro.php");
}

?>