<?php
    // importar el archivo de conexion con la base de datos
    require "assets/request/conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <h1>Talleres</h1>
    <?php
        // Realiza la consulta a la base de datos
        $query = "SELECT * FROM talleres";
        $result = mysqli_query($conn, $query);

        // Verifica si la consulta obtuvo resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorre cada fila de los resultados
            while ($row = mysqli_fetch_assoc($result)) {
                // Muestra los datos de cada fila
                echo "Título: " . $row["titulo"] . "<br>";
                echo "Descripción: " . $row["descripción"] . "<br>";
                echo "Fecha de publicación: " . $row["Fecha-publicacion"] . "<br>";
                echo "Fecha de realización: " . $row["fecha-realizacion"] . "<br>";
                echo "Sección: " . $row["seccion"] . "<br>";
                echo "Capacidad: " . $row["capacidad"] . "<br>";
                echo "Aula: " . $row["Aula"] . "<br>";
                echo "<hr>";
            }
        } else {
            echo "No se encontraron resultados";
        }

        // Cierra la conexion con la base de datos
        mysqli_close($conn);
    ?>
</body>
</html>