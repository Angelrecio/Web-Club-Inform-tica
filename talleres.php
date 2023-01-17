<?php
    if (isset($_COOKIE["Block"])){
        header("Location: /");
    }


    // importar el archivo de conexion con la base de datos
    require "assets/request/conexion.php";
    session_start();

    function get_id_count($id, $conn) {
        $stmt = mysqli_prepare($conn, 'SELECT COUNT(*) FROM talleresusuarios WHERE id_taller = ?;');
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
        if (!isset($count)){
            $count = 0;
        }
        return $count;
    }


    function getUsersInWorkshop($workshop_id, $conn) {
        $stmt = $conn->prepare('SELECT id_usuario FROM talleresusuarios WHERE id_taller = ?');
        $stmt->bind_param("i", $workshop_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row['id_usuario'];
        }
        return $users;
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Competitiva</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
<a href="index.php" class="Boton_cabecera" style="width: 5%; padding: 0%; align-self: start; background-color: rgb(255, 255, 255);"> <img id=logo_club src="\assets\img\ue_logoclub_cmyk_11_c_int.png" style="width: 100%; padding: 0%; align-self: start;"></a>
    <nav id = Menu_cabecera>
        <a class = Boton_cabecera href="/">Inicio</a>
        <a class = Boton_cabecera href="Hacknet.php">Hacknet</a>
        <a class = Boton_cabecera href="ProgramacionCompetitiva.php">Programacion<br>competitiva</a>
        <a class = Boton_cabecera href="geniusX.php">GeniusX</a>        
    </nav> <br>
    <h1>Talleres</h1>
    <?php
        // Realiza la consulta a la base de datos
        $query = "SELECT * FROM talleres";
        $result = mysqli_query($conn, $query);

        // Verifica si la consulta obtuvo resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorre cada fila de los resultados
            while ($row = mysqli_fetch_assoc($result)) {
                $cantidad = get_id_count($row['id'], $conn);

                echo "<p class='taller'>";
                
                // Muestra los datos de cada fila
                echo "Título: " . $row["titulo"] . "<br>";
                echo "Descripción: " . $row["descripcion"] . "<br>";

                if (isset($_SESSION['id'])){
                    echo "Fecha de realización: " . $row["fecha-realizacion"] . "<br>";
                    echo "Capacidad: ". $cantidad. "/" . $row["capacidad"] . "<br>";
                    echo "Aula: " . $row["Aula"] . "<br>";

                    if (!in_array($_SESSION['id'], getUsersInWorkshop($row['id'], $conn))){
                        echo '<form action="assets/forms/unir.php" method="post"> Unirse -> <input type="submit" name="submit" value="'.$row['id'].'"></form>';
                    }else{
                        echo "¡Ya estas unido!";
                    }
                }
                echo "</p>";
                
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