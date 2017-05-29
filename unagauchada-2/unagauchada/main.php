<!DOCTYPE html>
<html>
<head>
	<title>unaGauchada</title>
	<script src="js/jquery-3.2.1.min.js"></script> <!-- Importante llamar antes a jQuery para que funcione bootstrap.min.js-->
   <script src="js/bootstrap.min.js"></script>
  
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset = "utf-8">
	  <script src="js/jquery-3.2.1.min.js"></script> <!-- Importante llamar antes a jQuery para que funcione bootstrap.min.js-->
	 <script src="js/bootstrap.min.js"></script>
	 <script src="js/bootstrap.js"></script>
	
	 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <link href="css/box_Login.css" rel="stylesheet" media="screen">
	 <link href="main.css" rel="stylesheet" media="screen">
	 <link href="fonts/fuenteUbuntu.woff2" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>
<body>

<?php session_start();
	
	$paginas = ["header_connected_user.php", 
  "header_connected_admin.php", 
  "index.php"];	
  
  if(isset($_SESSION['loggedin'])) {
  	/*echo($_SESSION['admin']);*/
  	if ($_SESSION['admin'] == 0) {
  		Include($paginas[0]);
  	}
  	elseif ($_SESSION['admin'] == 1) {
  		Include($paginas[1]);
  	}
  }
  else{
  	
  	header("Location: " . $paginas[2]);
  }
  ?>


</body>

</html>
