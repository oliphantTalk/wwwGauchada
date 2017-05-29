<?php 
	include "funciones/funciones.php";
	foreach (datosPublicacion(25) as $key => $value) {
		echo $key . " " . $value;
		echo "<br>";
		# code...
	}
?>