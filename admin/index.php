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
</div>
<br>
<div class = Hacknet id="HacknetSub">
    <h2>Hacknet</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerCompeticionesHacknet" href="#ver_competicionesHacknet">Ver competiciones</a>
        <a class = Subboton id="AnadirCompeticionesHacknet" href="#anadir_competicionesHacknet">Añadir competiciones</a>
    </nav>

</div>
<div class = Programacion_Competitiva id="Programacion_CompetitivaSub">
    <h2>Programacion competitiva</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerCompeticionesCompetitiva" href="#ver_competicionesCompetitiva">Ver competiciones</a>
        <a class = Subboton id="AnadirCompeticionesCompetitiva" href="#anadir_competicionesCompetitiva">Añadir competiciones</a>
    </nav>

</div>
<br>
<div class = GeniusX id="GeniusXSub">
    <h2>Talleres</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerProyectos" href="#ver_proyectos">Ver proyectos</a>
        <a class = Subboton id="VerSugerencias" href="#ver_sugerencias">Ver sugerencias</a>
        <a class = Subboton id="AnadirProyecto" href="#anadir_proyecto">Añadir proyecto</a>
    </nav>
</div>
<div class = Usuarios id="UsuariosSub">
    <h2>Usuarios</h2>
    <nav id = Submenu>
        <a class = Subboton id="VerPeticiones" href="#ver_peticiones">Ver peticiones</a>
        <a class = Subboton id="AnadirUsuario" href="#anadir_usuario">Añadir usuario</a>
    </nav>
</div>
</body>
<script src="../assets/js/admin.js"></script>
</html>