<?php

//guardo los datos del formulario en variables
$name = $_POST['nombre'];
$email = $_POST['email'];
$coment =$_POST['comentario'];

$texto = "Nombre: " . $name . " - Email: " . $email . " - Comentario :". $coment;

//guardo los datos
$f = fopen("comentarios.txt","a+");
fputs($f,$texto);

//fecha y hora actual
date_default_timezone_set("America/Argentina/Buenos_Aires"); 

$fecha = getdate();

$texto = "<br>Fecha y hora: " . $fecha["mday"]."/".$fecha["mon"]."/".$fecha["year"]." - ".
		 $fecha["hours"].":".$fecha["minutes"].":".$fecha["seconds"] . "<br>"."<br>" ;

fputs($f,$texto);

fclose($f); 

header("location:unidad3.php");

?>