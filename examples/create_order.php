<?php

define('MERCHANT_ID' , 1000);
define('MERCHANT_PASSWORD' , 'test');
define('IPSP_GATEWAY' ,  'api.fondy.eu');

// Initialization
$client = new Ipsp\Client( MERCHANT_ID , MERCHANT_PASSWORD, IPSP_GATEWAY );

$ipsp   = new Ipsp\Api( $client );

// Custom order ID.
$order_id = 'testproduct'.rand(1000, 99999);

// Create order
$data = $ipsp->call('checkout',array(
 'order_id'    => $order_id,
 'order_desc'  => 'Short Order Description',
 'currency'    => $ipsp::USD ,
 'amount'      => 2000, // 20 USD
 'response_url'=> sprintf('http://shop.example.com/checkout/%s',$order_id)
))->getResponse();

// Redirect to checkoutpage
header(sprintf('Location: %s',$data->checkout_url));