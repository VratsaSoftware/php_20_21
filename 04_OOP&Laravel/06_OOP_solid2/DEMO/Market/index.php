<?php
require('App\Product.php');
require('App\TvSet.php');
require('App\CoffeeMaker.php');
require('App\PayDesk.php');
require('App\PaymentMethod.php');
require('App\PayCash.php');
require('App\PayVisa.php');
require('App\PayMasterCard.php');

$product1 = new TvSet('VelikoTurnovo', 100, 'Electronics', '43 inch, flat', 1);
$product2 = new CoffeeMaker('Seico', 20, 'Kitchen Tools', '250mPa', 1);
$product3 = new CoffeeMaker('LowCost', 10, 'Kitchen Tools', '150mPa', 1);

$product1->showPriceWithVat();

$order = [$product1, $product2, $product3];

$payDesk = new PayDesk($order);

// echo $payDesk->calculateTotalPrice();

// echo $payDesk->makePayment(new PayMasterCard);
