<?php 
include('cabecera.php');
?>

<!-- Pagina despues pago  -->

<section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">

<!-- Estilos -->

<p>
<?php
require_once('./config.php');

$token  = $_POST['stripeToken'];
$email  = $_POST['stripeEmail'];

$customer = \Stripe\Customer::create([
    'email' => $email,
    'source'  => $token,
]);

$charge = \Stripe\Charge::create([
    'customer' => $customer->id,
    'amount'   => 1000,
    'currency' => 'eur',
]);

echo '<h1>Su pago ha sido realizado correctamente, gracias</h1>';
?></p>
							
							</section>
			


			</div>
		</div>
	  
	  </div>
	  
	  </section>
	  
	  
	  <?php 
	include('footer.php');
	?>