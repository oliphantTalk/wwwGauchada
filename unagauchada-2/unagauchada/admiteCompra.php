<?php 
session_start();
if(isset($_SESSION['email'])){
	$_SESSION['puedeComprar'] = true;
}
header('Location: confirmaCompra.php');
?>