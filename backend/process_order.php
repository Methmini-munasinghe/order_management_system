<?php

require 'classes/Product.php';
require 'classes/Order.php';
require 'classes/CashPayment.php';
require 'classes/CardPayment.php';

// read json data from frontend
$data = json_decode(file_get_contents("php://input"), true);

$order = new Order();

//database details put in manually as an array
$productNames = [
    1 => "Laptop",
    2 => "Mouse",
    3 => "Keyboard"
];

for ($i=0; $i < count($data['products']); $i++) {
    $id = (int)$data['products'][$i]['id'];
    $price =(float) $data['products'][$i]['price'];
    //check the selected product is in the  productName array
    if(isset($productNames[$id])) {
        $name = $productNames[$id];
    }else {
        $name = "Unknown product";
    }
    // product object create
    $product = new Product($id,$name,$price);
    // adds the products to the order object
    $order->addProduct($product);
}

$totalAmount = $order->getTotalPrice();

if ($data['payment'] === 'cash') {
    $paymentMethod = new CashPayment();
} else {
    $paymentMethod = new CardPayment();
}
// show the order summery
echo $order->getOrderSummary();
echo "<br>";
//payment confirmation text
echo $paymentMethod->pay($totalAmount);
