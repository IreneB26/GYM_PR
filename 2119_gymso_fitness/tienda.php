<?php 
include('cabecera.php');
?>


<!-- carrousel -->


<div data-aos="fade-up" data-aos-delay="400" style= "width:100%; margin-top:70px;"id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div style="height:450px;" class="carousel-inner">
    <div class="carousel-item active">
      <img  style="height:450px;" class="d-block w-100" src="images/class/natacion.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img style="height:450px;" class="d-block w-100" src="images/class/imgp.jpg " alt="Second slide">
    </div>
    <div class="carousel-item">
      <img style="height:450px;" class="d-block w-100" src="images/class/pistas.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<!-- Tienda -->
<!-- style="margin-top:-40px" class="class section" id="class -->

<section>
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">

<!-- Estilos -->


<!-- SLIDER -->
<!-- 
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://stylelovely.com/wp-content/uploads/botella-productos-deporte-aire-libre-1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://stylelovely.com/wp-content/uploads/sujetador-deportivo-mujer-productos-deporte-aire-libre.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://stylelovely.com/wp-content/uploads/pulsera-productos-deporte-aire-libre.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->

<br>
<br>
<br>

<?php
include('Conecta.php');
$link= Conectarse();

// recorro bd y saco categorias e id
$result=mysqli_query ($link, "SELECT * FROM categoria");

// titulo
echo"<h3>Categorías</h3><br>";
echo"<span>&#8226</span><a href='tienda.php'> Todos los productos &nbsp</a>";

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $id_cat = $row['id_cat'];
		  $categoria = $row['categoria'];

		echo"&#8226 &nbsp";
		echo"<a href=tienda.php?id_cat=$id_cat>$categoria</a>";
		echo"&nbsp ";

		
	?>
				
				
<?php

// echo "<TABLE border=0>";
// echo "<TR>";
// echo "<TD>" ."<li><a href=tienda.php?id_cat=$id_cat>$categoria</a></li>" . "</TD>";
// echo "</TR>";

// echo "</TABLE>";



//print_r(array_unique($categoria));
//lista categorias
//  echo "<li><a href=tienda.php?id_cat=$id_cat>$categoria</a></li>";


 } ?>

<hr>



<?php 




//$connect = mysqli_connect("localhost", "root", "", "proyecto_gs");

$_SESSION["shopping_cart"]



// if(isset($_POST["add_to_cart"]))
// {
// 	if(isset($_SESSION["shopping_cart"]))
// 	{
// 		$item_array_id = array_column(, "item_id");
// 		if(!in_array($_GET["id"], $item_array_id))
// 		{
// 			$count = count($_SESSION["shopping_cart"]);
// 			$item_array = array(
// 				'item_id'			=>	$_GET["id"],
// 				'item_name'			=>	$_POST["hidden_name"],
// 				'item_price'		=>	$_POST["hidden_price"],
// 				'item_quantity'		=>	$_POST["quantity"]
// 			);
// 			$_SESSION["shopping_cart"][$count] = $item_array;
// 		}
// 		else
// 		{
// 			echo '<script>alert("Este articulo ya esta en el carrito")</script>';
// 		}
// 	}
// 	else
// 	{
// 		$item_array = array(
// 			'item_id'			=>	$_GET["id"],
// 			'item_name'			=>	$_POST["hidden_name"],
// 			'item_price'		=>	$_POST["hidden_price"],
// 			'item_quantity'		=>	$_POST["quantity"]
// 		);
// 		$_SESSION["shopping_cart"][0] = $item_array;
// 	}
// }


?>


		<!-- <br /> -->
		<div class="container" style="display: grid;
  grid-template-columns: repeat(3, 1fr); 
  grid-gap: 10px;">  <!--  estilo cuadricula GRID -->


			
			
			<?php
				// $query = "SELECT * FROM tbl_product ORDER BY id ASC";

				// si hay categoria muesra producto segun esta
				if(isset($_GET["id_cat"])){
					$id_cat = $_GET['id_cat'];
				$query = "SELECT * FROM tbl_product WHERE id_cat='$id_cat' ORDER BY name ASC ";}
				else{$query = "SELECT * FROM tbl_product ORDER BY price ASC";}
				
				
				
				$result = mysqli_query($link, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>

				
				<div class="row">
				
			<div class=" col" ></br>  

			<?php session_start();
				if(isset($_SESSION['user'])){ echo'<form  method="post" action="carrito.php?action=add&id=';?><?php echo $row["id"]; }else{echo '<form  method="post" action="iniciosesion.php">';}?>

				<form  method="post" action="carrito.php?action=add&id=<?php //echo $row["id"]; ?>"> 

               <br> <div class="contenedor" data-aos="fade-up" data-aos-delay="50"style="border:0.1px solid #333; background-color:#f1f1f1; border-radius:15px; padding:16px;" align="center">
				<img class=imagen style="width:50%;" src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

				
<style>
/* .contenedor:hover .imagen {-webkit-transform:scale(1.3);transform:scale(0.8);}
.contenedor {overflow:hidden;} */


.contenedor img{
    ;
    
    margin: 15px;
    -webkit-transition: margin 0.3s ease-out;
    -moz-transition: margin 0.3s ease-out;
    -o-transition: margin 0.3s ease-out;
}
 
.contenedor img:hover {
    margin-top: 2px;
}
</style>


						<h4 class="text-dark"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>

						<input style=" border-radius:35px;" type="number" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input style=" border-radius:35px;" type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="añadir al carrito"/>
						 
					</div>
				</form>
				</div>
			</div>
		
			<?php
					}
				}

			?>
			<!-- <div style="clear:both"></div>
			<br />
			<h3 data-aos="fade-up" data-aos-delay="400">Detalles del pedido</h3>
			<div class="table-responsive">
                <table border="1" data-aos="fade-up" data-aos-delay="300">
					<tr>
						<th width="40%">Producto</th>
						<th width="10%">Cantidad</th>
						<th width="20%">Precio</th>
						<th width="15%">Total</th>
						<th width="5%">Borrar</th>
					</tr>
					<?php
					// if(!empty($_SESSION["shopping_cart"]))
					// {
					// 	$total = 0;
					// 	foreach($_SESSION["shopping_cart"] as $keys => $values)
					// 	{
					?>
					<tr>
						<td><?//php echo $values["item_name"]; ?></td>
						<td><?//php echo $values["item_quantity"]; ?></td>
						<td>€ <?//php echo $values["item_price"]; ?></td>
						<td>€ <?//php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="tienda.php?action=delete&id=<?php //echo $values["item_id"]; ?>"><span class="text-danger">Quitar</span></a></td>
					</tr>
					<?php
						// 	$total = $total + ($values["item_quantity"] * $values["item_price"]);
						// }
					?>
					<tr>
                    <td colspan="3" align="right">Total</td>
						<td align="right">€ <?//php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					//}
					?>
					
						
				</table>
			</div>
		</div>
	</div> -->
	<br />
	


                            <!-- Estilos -->
							
                            </div>
               </div>
     </section>
      
      
      
      <!-- FOOTER -->
      <?php 
include('footer.php');
?>