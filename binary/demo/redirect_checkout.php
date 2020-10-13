<?php
session_start();
require('conf.php');

$co = new Pay_Checkout_Invoice($store, $setup);

$total_amount = 0;
foreach ($_SESSION["cart"] as $product) {
  $co->addItem($product['name'],$product['quantity'],$product['unit_price'],$product['total_price']);
  $total_amount += $product['total_price'];
}

$co->setTotalAmount($total_amount);
$co->setDescription("Achat d'articles");
$co->addCustomData("customer_phone_numer","22997761182");

if($co->create()) {
  header("Location: ".$co->getInvoiceUrl());
}else{
  echo $co->response_text;
}