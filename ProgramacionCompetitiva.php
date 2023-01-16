<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Competitiva</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    <nav id = Menu_cabecera>
        <a href="index.php" class="Boton_cabecera" style="width: 5%; padding: 0%; align-self: start; background-color: rgb(255, 255, 255);"> <img id=logo_club src="\assets\img\ue_logoclub_cmyk_11_c_int.png" style="width: 100%; padding: 0%; align-self: start;"></a>
        <a class = Boton_cabecera href="Hacknet.php">Hacknet</a>
        <a class = Boton_cabecera href="ProgramacionCompetitiva.php">Programacion<br>competitiva</a>
        <a class = Boton_cabecera href="geniusX.php">GeniusX</a>        
    </nav> <br>
<div class = presentacion>
    <h1 style="margin: 1.2%;">Presentación:</h1>
    <br><br>
    <p>Desde el club de informática nuestro objetivo es facilitar y fomentar la participación en diversas actividades relacionadas con el campo de la informática, entre ellas están los talleres de programación competitiva.</p> 
    <p>En esta sección encontrarás desde talleres de programación clásica hasta hackathones organizadas por empresas punteras en la industria hasta algunas compreticiones un tanto más peculiares.</p>
</div>
<br>
<div class = actividades_en_curso>
<?php
        // Realiza la consulta a la base de datos
        $query = "SELECT * FROM ranked";
        $result = mysqli_query($conn, $query);

        // Verifica si la consulta obtuvo resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorre cada fila de los resultados
            while ($row = mysqli_fetch_assoc($result)) {
              // Muestra los datos de cada fila
            echo "<div class = elemento>";
            echo "<h2 class=titulo>". $row["titulo"] . "</h2>";
            echo "<p class = texto_descripcion>".$row["descripcion"]."</p>";
            echo "<a href=".$row["enlace"]." class = boton_join>Únete</a> ";             
            }
        } else {
            echo "<p>No se encontraron resultados</p>";
        }

        // Cierra la conexion con la base de datos
        mysqli_close($conn);
    ?>
    </div>
</div>
<br>
</body>
</html>