<?php 
include('cabecera.php');

include('Conecta.php');
$link= Conectarse();

//$connect = mysqli_connect("localhost", "root", "", "proyecto_gs");
?>
<!--  -->


<section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center">

<!-- estilos -->


<?php

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Este articulo ya esta en el carrito")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}








if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Articulo borrado")</script>';
				echo '<script>window.location="carrito.php"</script>';
			}
		}
	}
}

?>



<div style="clear:both"></div>
			<br />


			<?php if(!empty($_SESSION["shopping_cart"]))
					{?>


				<nav data-aos="fade-up" data-aos-delay="400" aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="tienda.php">Tienda</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Carrito</li>
  				</ol>
				</nav>


			
			<h3 data-aos="fade-up" data-aos-delay="400">Detalles del pedido</h3><hr>
			
                <table class="table"  data-aos="fade-up" data-aos-delay="300">
				<thead class="thead-dark">
					<tr>
					<th width="5%">Borrar</th>
						<th width="40%">Producto</th>
						<th width="10%">Cantidad</th>
						<th width="20%">Precio</th>
						<th width="15%">Total</th>
						
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
					<td><a href="carrito.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Quitar</span></a></td>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>€ <?php echo $values["item_price"]; ?></td>
						<td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
                    <td style="border-bottom:none; boder-top:1px;" colspan="4" ></td>
						<td align="center">€ <?php $price= number_format($total, 2); echo $price ?></td>
						
					</tr>
					<?php
					}
					?>
					
						
				</table>
				<button data-aos="fade-up" data-aos-delay="400" style="border-radius: 30px;" class="btn btn-danger form-control" onclick="location.href='compra.php?precio=<?php echo $price; ?>'">Rellene los datos de envio</button>
				<a href="tienda.php" data-aos="fade-up" data-aos-delay="700">Seguir comprando</a>

	
				<?php }else{?>

					<a href="tienda.php"><h3 data-aos="fade-up" data-aos-delay="400">Tu carrito está vacio.</h3></a><hr data-aos="fade-up" data-aos-delay="400">
				<?php } ?>

		</div>
		

<!-- metdo de pago -->


<div style="aling:right;">


</div>

		
   <!-- Estilos -->
							
   </div>
               </div>
     </section>
      
      






        <?php 
include('footer.php');

?>