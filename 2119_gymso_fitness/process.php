<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<?php

include('cabecera.php');
include('footer.php');

require_once('stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_51Gxay9BpJK0ZIw92gNlOGYt5AY6aL4oWCJnIfRvVnpIi4WhyqpecIGPzHOEsDsKznoSPdTw1Dv7dbHI2WadkcS5a00N6uq4dhf'); #aca va tu key

$token = $_POST['stripeToken'];
$total  = $_POST["total"];

try {
	// Crear cargo de Stripe
$charge = \Stripe\Charge::create(
    array(
        'amount' => $total*100,
        'currency' => "EUR", // Cambiar el tipo de moneda
        'source' => $token,
    )
);

if($charge->status=="succeeded"){

	// echo "<script>alert('Pagado existosamente');</script>";

	// mensaje de pago stripe

	echo'<script>  swal({
		title: "¡Pagado existosamente!",
		text: "",
		icon: "success",
		dangerMode: true,
		button: "Vale",
	}).then(function() {
		window.location = "index.php";
	});</script>';

}else{
	echo "<script>alert('Error al pagar!');</script>";
	Core::alert("Error al procesar el pago!");	
}
}catch(Exception $e){
	echo "<script>alert('".$e->getMessage()."');</script>";
}
	// echo "<script>window.location='index.php';</script>";
?>