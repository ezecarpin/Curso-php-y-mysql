<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<body>
		<section>
			<h2>Eventos</h2>
			<div class="flex-container">
		<form class="form" method="POST" action="calculo_fecha.php">
			<div class="form__section">
				<label class="form__label"><h2>Ingrese una fecha</h2></label>
			</div>
			<div class="form__section">
				<input type="date" class="form__input" required name="fecha">
			</div>
			<div class="form__section">
				<input type="submit" class="form__input" value="CALCULAR" name="calcular">
			</div>
		</form>
		<div class="form-img">
			<div class="img-container">
					<img src="https://www.gifsanimados.org/data/media/926/agenda-y-calendario-imagen-animada-0009.png" border="0" alt="agenda-y-calendario-imagen-animada-0009"> 
			</div>
		</div>
	</div>
		</section>

	</body>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>