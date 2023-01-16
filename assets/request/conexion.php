<?php
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "c-int";

// Crea la conexión con la base de datos
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verifica la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
}
?>