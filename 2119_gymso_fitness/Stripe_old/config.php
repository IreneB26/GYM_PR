<?php
require_once('vendor/autoload.php');

$stripe = [
    "secret_key"      => "sk_test_51Gxay9BpJK0ZIw92gNlOGYt5AY6aL4oWCJnIfRvVnpIi4WhyqpecIGPzHOEsDsKznoSPdTw1Dv7dbHI2WadkcS5a00N6uq4dhf",
    "publishable_key" => "pk_test_51Gxay9BpJK0ZIw92VFBeTg6yHLTXFiKXjhMBTSfTnfFo0iiJvSG7bg2cn2FqyfHdSLrigVam1tgTw4f5NBpshu7W00zohzpqtm",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>