

<?php
	
	function conectar_db($host_db, $user_db, $pass_db, $db_name)
	{
		$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
		if ($conexion->connect_error) {
 			die("La conexion falló: " . $conexion->connect_error);
		}
		return $conexion;
	}

	function consultar_db($conexion, $sql)
	{
		$consulta = $conexion->query($sql);
		return $consulta;
	}

	function consultar_db_columnas($conexion, $sql)
	{	$consulta = $conexion->query($sql);
		return ($consulta->fetch_array(MYSQLI_ASSOC));
	
	}

	function datosPublicacion ($idUsuario)
	{
		$conexion = conectar_db("localhost", "root", "pepa", "unagauchada");
		$res = consultar_db_columnas($conexion, "SELECT * FROM publicacion WHERE idUsuario = '$idUsuario' ORDER BY fechaInicio DESC");
		return $res;

	}

	function datosUsuario ($idUsuario)
	{
		$conexion = conectar_db("localhost", "root", "pepa", "unagauchada");
		$res = consultar_db_columnas($conexion, "SELECT * FROM usuario WHERE idUsuario = '$idUsuario'" );
		return $res;

	}
?>