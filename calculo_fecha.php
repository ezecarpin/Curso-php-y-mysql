<!DOCTYPE html>
<html>
<head>
	<title>Calcular fecha</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>
<style type="text/css">
	body{
		background: #fff;
	}
</style>
<body>
	<div class="flex-container">
		<div class="form">
			<h2 class="form__label">Resultado</h2>
			<?php
			//calcula cuanto falta para llegar a $fecha
			$fecha = $_POST['fecha'];
			$fecha_actual = date("y-m-d");
			$resultado = strtotime($fecha)-strtotime($fecha_actual);
			$resultado = intval($resultado/86400);
			?>
		

		<h2 class="form__label">
			<?php
				if ($resultado>-1) {
					echo "Faltan:"." ". $resultado ." dias para llegar a la fecha: $fecha";  	
				 }else{
				 	echo "El dia que ingresaste NO es posterior al dia de hoy";
				 } 
				
			?> 
		</h2>
		
		<div class="form__label">
			<a href="unidad2.php" style="color: #fff">Volver</a>
		</div>
		
		</div>
		<div class="form-img">
			<div class="img-container">
					<img src="https://www.gifsanimados.org/data/media/926/agenda-y-calendario-imagen-animada-0009.png" border="0" alt="agenda-y-calendario-imagen-animada-0009"> 
			</div>
		</div>
		

	</div>
	
</body>
</html>