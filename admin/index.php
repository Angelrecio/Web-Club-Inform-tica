<?php
    // importar el archivo de conexion con la base de datos
    require "../assets/request/conexion.php";

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
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    <h1>
        Administración
    </h1>
    <nav id = Menu_cabecera>
        <a class = Boton_cabecera id="Talleres1" href="#talleres" >Talleres</a>
        <a class = Boton_cabecera id="Hacknet1" href="#Hacknet">Hacknet</a>
        <a class = Boton_cabecera id="Programacion_Competitiva1" href="#Programacion_Competitiva">Programación competitiva</a>
        <a class = Boton_cabecera id="GeniusX1" href="#GeniusX">GeniusX</a>
        <a class = Boton_cabecera id="Usuarios1" href="#Usuarios">Usuarios</a>
        <a class = Boton_cabecera href="/">Volver a C-Int</a>
    </nav> <br>
<div class = talleres id="tallerSub">
    <h2>Talleres</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerTalleres" href="#ver_talleres">Ver talleres</a>
        <a class = Subboton id="AnadirTalleres" href="#anadir_talleres">Añadir talleres</a>
    </nav>
    <div class = ver_talleres id="VerTalleresSub">
    <?php
        // Realiza la consulta a la base de datos
        $query = "SELECT * FROM talleres";
        $result = mysqli_query($conn, $query);

        // Verifica si la consulta obtuvo resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorre cada fila de los resultados
            while ($row = mysqli_fetch_assoc($result)) {
                $cantidad = get_id_count($row['id'], $conn);
                
                // Muestra los datos de cada fila
                echo "Título: " . $row["titulo"] . "<br>";
                echo "Descripción: " . $row["descripción"] . "<br>";
                echo "Fecha de publicación: " . $row["Fecha-publicacion"] . "<br>";
                echo "Fecha de realización: " . $row["fecha-realizacion"] . "<br>";
                echo "Sección: " . $row["seccion"] . "<br>";
                echo "Capacidad: ". $cantidad. "/" . $row["capacidad"] . "<br>";
                echo "Aula: " . $row["Aula"] . "<br>";
                echo "<hr>";
            }
        } else {
            echo "No se encontraron resultados";
        }

        // Cierra la conexion con la base de datos
        mysqli_close($conn);
    ?>
    </div>
    <div class = anadir_talleres id = "AnadirTalleresSub">
        <form method="post" action="../assets/forms/anadirtaller.php">
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo"><br>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea><br>
            <label for="fecha-realizacion">Fecha de realización:</label>
            <input type="datetime-local" id="fecha-realizacion" name="fecha-realizacion"><br>
            <label for="capacidad">Capacidad:</label>
            <input type="number" id="capacidad" name="capacidad"><br>
            <label for="Aula">Aula:</label>
            <input type="text" id="Aula" name="Aula"><br>
            <label for="seccion">Secion:</label>
            <select name="seccion" id="seccion">
                <option value="0">General</option>
                <option value="1">Hacknet</option>
                <option value="2">Programacion competitiva</option>
            </select>
            <br>

            <input type="submit" value="Insertar taller" name="submit">
        </form>
    </div>
</div>
<br>
<div class = Hacknet id="HacknetSub">
    <h2>Hacknet</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerCompeticionesHacknet" href="#ver_competicionesHacknet">Ver competiciones</a>
        <a class = Subboton id="AnadirCompeticionesHacknet" href="#anadir_competicionesHacknet">Añadir competiciones</a>
    </nav>

    <div class = ver_competicionesHacknet id="VerCompeticionesHacknetSub">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis ut id labore sapiente modi! Iste mollitia, quia rerum aliquam quis, deserunt vitae, asperiores veniam in voluptates neque impedit! Ipsa, minus.</p>
    </div>
    <div class = anadir_competicionesHacknet id = "AnadirCompeticionesHacknetSub">
        <form method="post" action="../assets/forms/anadirhacknet.php">
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo"><br>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea><br>
            <label for="link">Link:</label>
            <input type="text" id="link" name="link"><br>
            <input type="submit" value="Insertar Hacknet" name="submit">
        </form>
    </div>
</div>
<div class = Programacion_Competitiva id="Programacion_CompetitivaSub">
    <h2>Programacion competitiva</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerCompeticionesCompetitiva" href="#ver_competicionesCompetitiva">Ver competiciones</a>
        <a class = Subboton id="AnadirCompeticionesCompetitiva" href="#anadir_competicionesCompetitiva">Añadir competiciones</a>
    </nav>
    <div class = ver_competicionesCompetitiva id="VerCompeticionesCompetitivaSub">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis ut id labore sapiente modi! Iste mollitia, quia rerum aliquam quis, deserunt vitae, asperiores veniam in voluptates neque impedit! Ipsa, minus.</p>
    </div>
    <div class = anadir_competicionesCompetitiva id = "AnadirCompeticionesCompetitivaSub">
        <form method="post" action="../assets/forms/anadirranked.php">
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo"><br>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea><br>
            <label for="link">Link:</label>
            <input type="text" id="link" name="link"><br>
            <input type="submit" value="Insertar competición" name="submit">
        </form>
    </div>

</div>
<br>
<div class = GeniusX id="GeniusXSub">
    <h2>GeniusX</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerProyectos" href="#ver_proyectos">Ver proyectos</a>
        <a class = Subboton id="VerSugerencias" href="#ver_sugerencias">Ver sugerencias</a>
        <a class = Subboton id="AnadirProyecto" href="#anadir_proyecto">Añadir proyecto</a>
    </nav>
    <div class = ver_proyectos id="VerProyectosSub">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis ut id labore sapiente modi! Iste mollitia, quia rerum aliquam quis, deserunt vitae, asperiores veniam in voluptates neque impedit! Ipsa, minus.</p>
    </div>
    <div class = ver_sugerencias id = "VerSugerenciasSub">
        <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
    </div> <div class = anadir_proyecto id="AnadirProyectoSub">
    <form action="../assets/forms/anadirproyecto.php" method="post">
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required>
        <br>

        <label for="lenguajes">Lenguajes:</label>
        <input type="text" id="lenguajes" name="lenguajes" required>
        <br>

        <label for="capacidad">Capacidad:</label>
        <input type="number" id="capacidad" name="capacidad" required>
        <br>
        
        <input type="submit" value="registrar" name="submit">
        </form>
    </div>
</div>
<div class = Usuarios id="UsuariosSub">
    <h2>Usuarios</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerPeticiones" href="#ver_peticiones">Ver peticiones</a>
        <a class = Subboton id="AnadirUsuario" href="#anadir_usuario">Añadir usuario</a>
    </nav>
    <div class = ver_peticiones id="VerPeticionesSub">
        
    </div>
    <div class = anadir_usuario id = "AnadirUsuarioSub">
        <form action="../assets/forms/registro_a.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1" name="apellido1" required>
        <br>

        <label for="apellido2">Segundo Apellido:</label>
        <input type="text" id="apellido2" name="apellido2" required>
        <br>

        <label for="n-exp">Número de expediente:</label>
        <input type="number" id="nexp" name="nexp" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="role">Rol:</label>
        <select name="rol" id="rol">
          <option value="0">Estudiante</option>
          <option value="1">Adminitrador</option>
        </select>
        <br>
        
        <input type="submit" value="registrar" name="submit">
        </form>
    </div>
</div>
<div>

</body>
<script src="../assets/js/admin.js"></script>
</html>