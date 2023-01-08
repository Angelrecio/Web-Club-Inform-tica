<?php
$host = "localhost:8889";
$user = "root";
$pass = "root";
$bbdd = "c-int";

$conn = new mysqli($host, $user, $pass, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "conectado";

?>