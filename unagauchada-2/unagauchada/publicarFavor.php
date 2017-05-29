<?php
  session_start();
  if(isset($_SESSION['loggedin'])){ ?>

<!DOCTYPE html>
<html>
<head>
	<title>unaGauchada</title>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset = "utf-8">
  <script src="js/jquery-3.2.1.min.js"></script> <!-- Importante llamar antes a jQuery para que funcione bootstrap.min.js-->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script type="text/javascript" src="js/funciones.js"></script>
   
  
  
   <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <link href="css/box_Login.css" rel="stylesheet" media="screen">
	 <link href="main.css" rel="stylesheet" media="screen">
	 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


</head>
<body>

<?php
  
  
  Include "funciones/funciones.php";
  $mail = $_SESSION['email'];
  $consulta = "SELECT cantCredito FROM usuario WHERE mail = '$mail'";
  $conexion = conectar_db("localhost", "root", "pepa", "unagauchada");
  $res = consultar_db_columnas($conexion, $consulta);
  if($res['cantCredito'] == 0){
    header('Location: forbidden_publicarFavor.php');
  }
  Include("header_connected_user.php");
?>



<div class="container-fluid">
<div class="row">
	<div class="col-md-12 center-block form_wrapper">
    <br>
		<p> Publicar un favor </p>
	</div>
  
</div>

      <br>
      <br>

        <div  class="row">
        <div class="col-md-8 col-md-offset-2">
        <form enctype="multipart/form-data" class="upload_form" action="accepted_publicarFavor.php" method="post" name="upload_form" >
        <div class=" col-md-10 col-md-offset-1">
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Título</label>
                    <input type="" class="form-control" name="titulo" maxlength="32" placeholder="Titulo.." required>
                  </div>
              

                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
  
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion.." required rows="3" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="fechaVencimiento"> Fecha de caducación:</label><br>
                     <input type="date" class="form-control" id="vencimiento" min=<?php echo date('Y-m-d'); ?> name="vencimiento" step="1"  required> 
                  </div>

                  <div class="form-group">
                    <label>Subir imagen que acompañara la publicación (opcional)</label><br />
                    <input name="archivo" class="file" type="file" id="imagen" /><br /><br />
                    <button id="botonSubeImagen" value="Subir imagen"/>Subir Imagen</button><br />
                    <script type="text/javascript" src="js/funciones.js"></script>
                    <!--<label for="exampleInputFile">Imagen</label>
                    <input type="file" id="exampleInputFile">-->
                  </div>


        <br>
        <br>          
        </div>


        <div class="form-group">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              
              <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Publicar">
            </div>
          </div>
        </div>
        
     

        </div>
    </div>
    
  </div>
	<br>
	<br>

  </form>

  <div class="messages"></div>
  </div>
  </div>
  </div>
  
</body>
</html>
<?php } else {
  header('Location: index.php');
}
?>