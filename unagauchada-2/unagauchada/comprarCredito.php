<?php  
  session_start();
  
  if(isset($_SESSION['loggedin'])){
   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Compra de créditos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset = "utf-8">
    <script src="js/jquery-3.2.1.min.js"></script> <!-- Importante llamar antes a jQuery para que funcione bootstrap.min.js-->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.js"></script>
	 
   <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <link href="css/box_Login.css" rel="stylesheet" media="screen">
	 <link href="main.css" rel="stylesheet" media="screen">
	 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


</head>
<body>

<?php

  Include("header_connected_user.php");

?>

<div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12 center-block form_wrapper">
        <br>
  			<p> Compra un crédito <br> Así podrás pedir favores </p>
  		</div>
	</div>
</div>
<br>
<br>


<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="thumbnail text-center">
     	<span class="glyphicon glyphicon-shopping-cart" style="font-size:350%; " aria-hidden="true"></span>
      	<div class="caption">
        <h3 style="" > COMPRA UN CRÉDITO!</h3>
        <h4 style="">AL PRECIO DE</h4>
        <H1 style="" > $50 </H1>
        <br>
        <br>
        <div  class="row">
        <div class="col-md-8 col-md-offset-2">

        <form id="login-form" action="admiteCompra.php"  method="post" role="form">
       
         <div class="form-group">
          <label for="Propietario">Nombre Propietario</label>
          <input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre"  required>
        </div>
        <div class="form-group">
          <label for="numero">Numero Tarjeta Credito</label>
          <input type="number" name="numeroTarjeta" id="numeroTarjeta" tabindex="1" class="form-control" placeholder="Numero tarjeta" value="" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Codigo de Seguridad</label>
          <input type="password" name="codigoTarjeta" id="codigoTarjeta" tabindex="2" class="form-control" placeholder="Codigo Tarjeta" required>
        </div>
         <div class="form-group" id="fechaV">
          <label for="exampleInputEmail1">Fecha Expiracion</label>
          <br>
          <select>
                    <option value="01">Enero</option>
                    <option value="02">Febrero </option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                <select>
                                    
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                </select>
        </div>
        <div class="form-group" id="credit_cards">
                <img src="img/visa.png" id="visa" height="10%" width="10%">
                <img src="img/mastercard.png" id="mastercard" height="10%" width="10%">
                
            </div>
         <div class="form-group">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                      
              <input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="Comprar">
            </div>
          </div>
       </div>
      </form>
        </div>
    </div>
   
     
      
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php } 
else{
  header("Location: index.php");
}?>