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
            <img class =  "logo" src = "/assets/img/leters_transparent.png">
        <!---<img class= "logo"src="">--->
    </div>
    </header>
    <nav id = Menu_cabecera>
        <a class = Boton_cabecera id="present" href="#presentacion" >Inicio</i></a>
        <a class = Boton_cabecera id="proyecto_ant" href="#proyectos_anteriores">Proyectos anteriores</a>
        <a class = Boton_cabecera id="proyec_curso" href="#proyectos_en_curso">Proyectos en curso</a>
        <a class = Boton_cabecera id="propues" href="#proponer_proyecto">Proponer proyecto</a>
        <a class = Boton_cabecera href="/">Volver a C-Int</a>        
    </nav> <br>
<div class = presentacion id="presentac">
    <h1>Presentación:</h1>
    <br><br>
    <p>GeniusX es una lanzadera de startups promovida por el club de informática de la Universidad Europea de Madrid</p> 
    <p>Con GeniusX pretendemos que todos los alumnos que tengan un proyecto en mente puedan llevarlo a cabo junto otros compañeros y así aprender, innovar y tener una primera toma de contacto con el mundo laboral. Todos los alumnos tienen voz y voto incluyendo algunos que deseen asomarse en el mundo de la informática aun sin ser expresamente de una carrera relacionada con el ámbito, con esto, y enseñando desde 0 a través de talleres a los alumnos podemos dar accesibilidad al desarrollo de proyectos además de la visibilidad que nos da la Universidad Europea</p>
</div>
<br>
<div class = proyectos_anteriores id="proant">
    <h1>Proyectos</h1>
    <div class = elemento>
        <h2 class=titulo>La gasolina de agua</h2>
        <div class = descripcion>
            <img class = "" href = "assets/img/leters.png">
            <p>Las demandas entorno a la reducción de las emisiones están reformulando el concepto de la movilidad. La búsqueda de la máxima eficiencia y de alternativas que reduzcan tanto los consumos como los niveles de emisiones están llevando a los fabricantes a desarrollar sistemas innovadores para los ya complejos motores de combustión.
            </p>
        </div>
    </div>
</div>
<div class = proyectos_en_curso id="proyect">
    <h1>Proyectos</h1>
    <div class = elemento>
        <h2 class=titulo>La luz del camino</h2>
        <div class = descripcion>
            <img class = "" href = "assets/img/leters.png">
            <p>Una  mochila llena de luz y esperanza recorre el Camino Francés desde Roncesvalles con un doble objetivo: darle vida al Camino de Santiago y homenajear a las víctimas de la Covid-19. Sus porteadores: decenas de peregrinos y hospitaleros que se han sumado a esta iniciativa que concluirá el próximo 24 de julio en Santiago de Compostela.

                Jesús Ciordia y Mariló Pérez, dos peregrinos veteranos con muchos kilómetros en sus piernas y decenas de mochilas a su espalda, son los promotores de este proyecto al que han bautizado como La Luz del Camino. </p>
        </div>
    </div>
</div>
<br>
<div class = proponer_proyecto id="propuesta">
    <h1>Propuesta de proyecto</h1>

    <form method="post" action="procesa1.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre del proyecto">
        <br>
        <label>descripcion:</label>
        <input type="message" name="descripcion" id="descripcion_form" placeholder="Descripcion del proyecto">
        <br>
        <label>Material necesario:</label>
        <input type="text" name="material" id="material" placeholder="Material ej:Arduino, sensores, servidores, etc">
        <input type="submit" name="enviar" id="enviar">
    </form>
</div>
</body>


<script src="assets/js/genio.js"></script>
</html>