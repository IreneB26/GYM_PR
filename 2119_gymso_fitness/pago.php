

<?php 
include('cabecera.php');
?>

<!-- INICIO SESIÓN  -->

<section class="about section" id="about">
               <div class="container">
                    <div class="row">

					<div class="mt-lg-5 mb-lg-0 mb-4   mx-auto">


<!-- Estilos -->




<?php 
include ("Conecta.php");
$link=Conectarse();


  $email=$_SESSION['user'];



  $price=$_GET['precio'];

     
  
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="tienda.php">Tienda</a></li>
    <li class="breadcrumb-item"><a href="carrito.php">Carrito</a></li>
    <li class="breadcrumb-item"><a href="compra.php?precio=<?php echo $price; ?>">Datos de envio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Pago</li>
  </ol>
</nav>



<a href="compra.php?precio=<?php echo $price; ?>" data-aos="fade-up" data-aos-delay="400" class="fa fa-chevron-circle-left fa-2x"  aria-hidden="true"></a>



<br>
<br>
<form style="width:1000px;" data-aos="fade-up" data-aos-delay="400"  action="process.php" method="post"  id="payment-form">
 <div class="panel panel-default" >
 <div class="panel-heading">
     
<div class="form-group">
    <label for="exampleInputEmail1">Email de cliente</label>
    <input style="border:0; background-color:snow;" type="email" required name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email;?>" readonly>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total a pagar</label>
    <input style="border:0; background-color:snow;" type="text" name="total" required class="form-control" id="exampleInputPassword1" value="<?php echo $price;?>" readonly>
  </div>

    <label for="card-element">Tarjeta de creito o debito</label>
    <div id="card-element">
      <!-- a Stripe Element will be inserted here. -->
    </div>
    <!-- Used to display form errors -->
    <div id="card-errors"></div>


<input type="hidden" class="form-control" required name="paymethod_id" value="stripe">
<br>
<button style="border-radius: 30px;" class="btn btn-danger btn-block">Proceder a Pagar</button>
</form>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="charge.js"></script>





<!-- Estilos -->
			


</div>
  </div>

</div>

</section>



<!-- FOOTER -->
<?php 
include('footer.php');
?>