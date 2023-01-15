<?php
require "assets/request/conexion.php";
session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Club de informatica | C_INT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">
				<div id = in_cabeza>
					<a class = "Boton_in" id="Boton_in" href = "login.php">Log in</a>
				</div>
				<span id="contenedor_logo_cint"><img id=logo_cint src="assets/img/ue_logoclub_cmyk_11_c_int.png"></span>
				<h1>C-INT</h1>
				<p><h2>El club de informatica y nuevas tecnologias.</h2></p>
				<?php
				if (isset($_SESSION['id'])){
					echo "Hola ";
					echo $_SESSION['nombre'];
				}
				?>
			</div>

		<!-- Main -->
			<div id="main">

				<div class="nosotros">
					<h2>¿Quienes somos?</h2>
					<p>Desarrollamos sistemas mediante tecnologías informáticas. Algunas de nuestras lineas de proyectos son:</p>
					<ul>
						<li>IoT</li>
						<li>Cloud computing</li>
						<li>Ciberseguridad y criptología</li>
						<li>Sistemas de Visión con drones</li>
					</ul>
					<p>También participamos en concursos de programación como Hackatones o Datatones y organizamos nuestras "Code&Coffee", charlas con ponentes expertos en temas de inovación tecnológica.</p>
				</div>

				<div class="box alt container">
					<h2>Nuestras secciones</h2>
					<section class="feature left">
						<a href="Hacknet.php" class="image icon solid fa-signal"><img src="images/header2.png" alt="" /></a>
						<div class="content">
							<h3>Hacknet</h3>
							<p>Un equipo de estudiantes enamorados de la seguridad informatica que se reunen para practicar y aprender nuevas tecnicas de pentesting.</p>
						</div>
					</section>
					<section class="feature right">
						<a href="ProgramacionCompetitiva.php" class="image icon solid fa-code"><img src="images/header2.png" alt="" /></a>
						<div class="content">
							<h3>Programacion competitiva</h3>
							<p>Si te gusta llevar tus conocimientos de algoritmia al siguiente nivel, este es tu sitio.</p>
						</div>
					</section>
					<section class="feature left">
						<a href="geniusX.php" class="image icon solid fa-tachometer-alt"><img src="images/header2.png" alt="" /></a>
						<div class="content">
							<h3>GeniusX</h3>
							<p>Una lazadera de Starups donde los estudiantes del club pueden proponer proyectos y venderlos a empresas.</p>
						</div>
					</section>
				</div>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container medium">

					<header class="major last">
						<h2>¿Quieres apuntarte?</h2>
					</header>

					<p>Rellena el formulario para unirte al Club</p>

					<form method="post" action="assets/forms/inscripciones.php">
						<div class="row">
							<div class="col-12 col-12-mobilep">
								<input type="text" name="name" placeholder="Nombre completo" />
							</div>
							<div class="col-6 col-12-mobilep">
								<input type="text" name="n_expediente" placeholder="n_expediente" />
							</div>
							<div class="col-6 col-12-mobilep">
								<input type="email" name="email" placeholder="Email" />
							</div>
							<div class="col-12">
								<textarea name="message" placeholder="¿Por que te gustaria unirte al club?" rows="6"></textarea>
							</div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Enviar" /></li>
								</ul>
							</div>
						</div>
					</form>

					<ul class="icons">
						<!--<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>-->
						<li><a href="https://github.com/C-intUEM" class="icon brands fa-github"><span class="label">Github</span></a></li>
					</ul>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>