 <?php

include("conexion.php");

$id=$_GET['id'];

mysqli_query($bd,"DELETE FROM clases WHERE id_clase=$id");


header('Location:ver_clases.php');
?>
