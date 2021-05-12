<!DOCTYPE HTML>
<html lang="en">


<head>

     <title>Social Sport</title>

	 

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
	 <link rel="icon" href="images/icono.ico" type="apple-touch-icon-precomposed" sizes="16Ã—16 ">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<!-- MENU BAR -->
<nav style="background: -webkit-linear-gradient(110deg, #dd3444 25%, #000000 25%); 
  background: -o-linear-gradient(110deg, #dd3444 25%, #000000 25%); 
  background: -moz-linear-gradient(110deg, #dd3444 25%, #000000 25%); 
  background: linear-gradient(110deg, #dd3444 25%, #000000 25%);" class="navbar navbar-expand-lg fixed-top">
	<div class="container">

		<a class="navbar-brand" id="t" onMouseOver=mouseOver() onMouseOut=mouseOut() href="index.php">Social Sport</a>
		

		<script>function mouseOver() {
			document.getElementById("t").style.color = "black";
		}

		function mouseOut() {
			document.getElementById("t").style.color = "white";
		}</script>



		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div style="margin-left:5%;" class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ">
				<li class="nav-item">
					<a href="index.php" class="nav-link smoothScroll">Inicio</a>
				</li>

				<li class="nav-item">
					<a href="horarios.php" class="nav-link smoothScroll">Horarios</a>
				</li>

				<li class="nav-item">
					<a href="index_foro.php" class="nav-link smoothScroll">Foro</a>
				</li>

				<li class="nav-item">
					<a href="tienda.php" class="nav-link smoothScroll">Tienda</a>
				</li>

				<li class="nav-item">
					<a href="contacto.php" class="nav-link smoothScroll">Contacto</a>
				</li>

				<li class="nav-item dropdown">
				
				
				
				
				<?php 
				
				session_start();
				if(isset($_SESSION['user'])){
				echo" <a href='#'  class='nav-link smoothScroll' data-toggle='dropdown' role='button'>" .$_SESSION['user'];echo"</a>";}else{
		
				?> 
			<a href="iniciosesion.php" class="nav-link smoothScroll">Inicio Sesión</a><?php }?>
      <ul  class="dropdown-menu">

        <!-- this dropdown menu item looks right -->
        <li style="display: flex;
  justify-content: center;"><a href="logout.php">Cerrar sesión</a></li>
			</ul>

				</li>



			<ul class="social-icon">
			<li><a style="margin: 0px 0 0 70px; width:30px; " href="carrito.php" class="fa fa-cart-plus fa-2x"  aria-hidden="true"></a></li>
			</ul>

		</div>

	</div>
</nav>