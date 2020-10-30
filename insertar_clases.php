<?php

$unidad=$_POST['unidad'];
$fecha=$_POST['fecha'];

include("conexion.php");

mysqli_query($bd, "INSERT INTO clases VALUES (DEFAULT,'$unidad','$fecha')");
echo $unidad;

header("Location:ver_clases.php");
?>