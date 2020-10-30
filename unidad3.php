<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="evaluacion 3/estilos.css">
</head>
 
<body>
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Comentarios</h2>
	</section>
	<div class="flex-container">
			<form class="form" method="POST" action="comentarios.php">
				<div>
					<input type="text" name="nombre" placeholder="Ingrese su nombre y apellido" required>
				</div>
				<div>
					<input type="email" name="email" placeholder="Ingrese su E-Mail" required>
				</div>
				<div>
					<textarea class="form__section" name="comentario" placeholder="Comentarios" required></textarea>
				</div>
				<div>
					<input type="submit" name="">
				</div>
			</form>
			<div class="datos" style="color: #fff;">
			<h2>Comentarios guardados</h2>	
				<?php
					$f = fopen("comentarios.txt","a+");
					echo fpassthru($f);
					fclose($f);
				?>
			</div>
		</div>

	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>