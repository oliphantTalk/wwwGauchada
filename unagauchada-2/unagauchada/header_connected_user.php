<?php  
	
	if(isset($_SESSION['loggedin'])){ ?>

	<header>
	  <nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">
	      	
	      	 <img alt="unaGauchada" src="http://localhost/unagauchada-2/unagauchada/img/icon_gauchada.png">

	      </a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Buscar..." name="publicacion">
	        </div>
	   
	        	 <select class="form-control" name="cat">
                				<option>Todas las categorias</option>
             	 </select>
	         
	        <button type="submit" class="btn btn-default" name="buscar">Buscar</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	  		<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle"
				          data-toggle="dropdown">
				    Mi Muro <span class="caret"></span>
				  </button>
				 
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="publicarFavor.php">Publicar Favor</a></li>
				    <li><a href="#">Acción #2</a></li>
				    <li><a href="#">Acción #3</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Acción #4</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle"
				          data-toggle="dropdown">
				    Mi Perfil <span class="caret"></span>
				  </button>
				 
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Acción #1</a></li>
				    <li><a href="#">Acción #2</a></li>
				    <li><a href="#">Acción #3</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Acción #4</a></li>
				  </ul>
				</div>

				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle"
				          data-toggle="dropdown">
				    Notificaciones <span class="caret"></span>
				  </button>
				 
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Acción #1</a></li>
				    <li><a href="#">Acción #2</a></li>
				    <li><a href="#">Acción #3</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Acción #4</a></li>
				  </ul>
				</div>
				
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle"
				          data-toggle="dropdown">
				    Mis Mensajes <span class="caret"></span>
				  </button>
				 
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="#">Acción #1</a></li>
				    <li><a href="#">Acción #2</a></li>
				    <li><a href="#">Acción #3</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Acción #4</a></li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle"
				          data-toggle="dropdown">
				    Mi Sesion <span class="caret"></span>
				  </button>
				 
				  <ul class="dropdown-menu" role="menu">
				    <li><a href="infoSesion.php">Info Sesion</a></li>
				    <li><a href="comprarCredito.php">Comprar Credito</a></li>
				    <li class="divider"></li>
				    <li><a href="phpLogin/logout.php">Cerrar Sesion</a></li>
				  </ul>
				</div>



	      </ul>
	     
	    </div>
	  </div>
	</nav> <!-- TERMINA NAVBAR -->
</header>
<?php } ?>