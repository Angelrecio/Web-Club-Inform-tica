<?php
if (isset($_COOKIE["Block"])){
	header("Location: /");
}
?>

<?php
    $cookie_name = "genius";
    if($_COOKIE[$cookie_name]) {
        header("Location: geniusXlight.php");
      } else {
        setcookie($cookie_name, true, time() + (3600*24), "/"); // 1 day
      }

    // importar el archivo de conexion con la base de datos
    require "assets/request/conexion.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeniusX</title>
    <link rel="stylesheet" href="assets/css/genio.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    


    <header>
        <div class="Content_logo">
            <video autoplay muted class="intro" id="intro_video" src="assets/video/intro.mp4"></video>
        <!---<img class= "logo"src="">--->
        <img class=logo id=logo_uem src="/assets/img/UE_Madrid_Logo_Positive_RGB.png">
    </div>
    </header>
    <nav id = Menu_cabecera>
        <a class = Boton_cabecera id="present" href="#presentacion" >Inicio</a>
        <a class = Boton_cabecera id="proyecto_ant" href="#proyectos_anteriores">Proyectos anteriores</a>
        <a class = Boton_cabecera id="proyec_curso" href="#proyectos_en_curso">Proyectos en curso</a>
        <a class = Boton_cabecera id="propues" href="#proponer_proyecto">Proponer proyecto</a>
        <a class = Boton_cabecera href="/">Volver a C-Int</a>        
    </nav> 
    <br>
<div class = presentacion id="presentac">
    <h1>Presentación:</h1>
    <br><br>
    <p>GeniusX es una lanzadera de startups promovida por el club de informática de la Universidad Europea de Madrid</p> 
    <p>Con GeniusX pretendemos que todos los alumnos que tengan un proyecto en mente puedan llevarlo a cabo junto otros compañeros y así aprender, innovar y tener una primera toma de contacto con el mundo laboral. Todos los alumnos tienen voz y voto incluyendo algunos que deseen asomarse en el mundo de la informática aun sin ser expresamente de una carrera relacionada con el ámbito, con esto, y enseñando desde 0 a través de talleres a los alumnos podemos dar accesibilidad al desarrollo de proyectos además de la visibilidad que nos da la Universidad Europea</p>
</div>
<br>
<div class = proyectos_anteriores id="proant">
<?php
        // Realiza la consulta a la base de datos
    $query = "SELECT * FROM proyecto WHERE fecha_fin= NULL";
        $result = mysqli_query($conn, $query);

        // Verifica si la consulta obtuvo resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorre cada fila de los resultados
            while ($row = mysqli_fetch_assoc($result)) {
              // Muestra los datos de cada fila
            echo "<h2 class=titulo >". $row["titulo"] . "</h1>";
            echo "<p class=descripcion>".$row["descripcion"]."</p>";
            echo "<p>Lenguajes requeridos:".$row["lenguajes"]."</p>";
            echo "<a class = boton_join>Únete</a> ";               
            }
        } else {
            echo  "<p>No se encontraron resultados</p>";
        }
    ?> 
</div>
<div class = proyectos_en_curso id="proyect">
<?php 
        // Realiza la consulta a la base de datos
        $query = "SELECT * FROM proyecto WHERE fecha_fin != NULL";
        $result = mysqli_query($conn, $query);

        // Verifica si la consulta obtuvo resultados
        if (mysqli_num_rows($result) > 0) {
            // Recorre cada fila de los resultados
            while ($row = mysqli_fetch_assoc($result)) {
              // Muestra los datos de cada fila
            echo "<h2 class=titulo >". $row["titulo"] . "</h1>";
            echo "<p class= descripcion>".$row["descripcion"]."</p>";
            echo "<p>Lenguajes requeridos:".$row["lenguajes"]."</p>";
            echo "<a class = boton_join>Únete</a><hr> ";               
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
<div class = proponer_proyecto id="propuesta">
    <h1>Propuesta de proyecto</h1>

    <?php
        if (isset($_SESSION['id'])){
    ?>

    <form method="post" action="assets/forms/propuestas_genius.php">
        <div class="row">
            <div class="col-12 col-12-mobilep">
                <input type="text" name="name" placeholder="Nombre del proyecto" />
            </div>
            <div class="col-12">
                <textarea name="message" placeholder="Cuéntanos tu gran idea de proyecto" rows="6"></textarea>
            </div>
            <div class="col-12">
                <textarea name="message2" placeholder="Material necesario" rows="6"></textarea>
            </div>
            <div class="col-12">
                <ul class="actions special">
                    <li><input type="submit" value="Enviar" name="submit"/></li>
                </ul>
            </div>
        </div>
    </form>

    <?php

        }else{
            echo "<p>Inicia sesion para proponer proyecto</p>";
        }

    ?>
</div>
</body>



<script src="assets/js/genio.js"></script>
</html>