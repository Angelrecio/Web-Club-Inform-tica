<?php

// Recopilar los datos del formulario
$name = $_POST['name'];
$surname1 = $_POST['surname1'];
$surname2 = $_POST['surname2'];
$n_exp = $_POST['n_exp'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

// Validar los datos de entrada
if (empty($name) || empty($surname1) || empty($n_exp) || empty($email) || empty($password)) {
    // Mostrar mensaje de error
    exit("Por favor, ingrese todos los datos requeridos.");
    header("Location: registro.php");
}

// Encriptar la contraseña
$password = password_hash($password, PASSWORD_DEFAULT);

// Consulta preparada para evitar inyección SQL
$stmt = $db->prepare("INSERT INTO usuarios (nombre, apellido1, apellido2, n-exp, email, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssissi", $name, $surname1, $surname2, $n_exp, $email, $password, $role);
$stmt->execute();

// Verificar si el usuario se ha registrado correctamente
if ($stmt->affected_rows === 1) {
    // Mostrar mensaje de éxito
    echo "Registro exitoso, redirigiendo...";
    // Redirigir al usuario a la página de inicio
    header("Location: /");
} else {
    // Mostrar mensaje de error
    echo "Error al registrar el usuario.";
}


?>