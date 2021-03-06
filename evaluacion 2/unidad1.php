<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="evaluacion 1/estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>

	<section id="titulo">
		<h2>Agenda de clases</h2>
	</section>
	<section id="opciones">
		<a href="unidad1.php"><h2>Cargar clase</h2></a>
		<a href="ver_clases.php"><h2>Mostrar clase</h2></a>
		<a href="eliminar_clases.php"><h2>Eliminar clase</h2></a>
	</section>

    <section id="inicio">
    	<form method="POST" action="insertar_clases.php">
			<input type="text" name="unidad" required placeholder="Nombre de la unidad"
			maxlength="30">
			<input type="date" name="fecha" required>
			<input type="submit" name="cargar">
		</form>
    </section>
	

	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>