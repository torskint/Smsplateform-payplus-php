<?php

require_once 'vendor/autoload.php';

define('APP_KEY', '6WUN7N2O6VEUSXC4N');
define('APP_TOKEN', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9hcHAiOiIyNiIsImlkX2Fib25uZSI6IjM5IiwiZGF0ZWNyZWF0aW9uX2FwcCI6IjIwMjAtMTAtMTMgMDg6MDI6MjAifQ.g6CmEensAu9tLrxEI5u88-8aItsnmbbjmNv6ZtZm_bA');


use Smsplateform\Payplus\Client\Smsplateform_PayplusSetupInit;
$SpPlusIntance = new Smsplateform_PayplusSetupInit( APP_KEY, APP_TOKEN, 'test' );

//Configuration des informations de votre boutique/service
$SpPlusIntance->setName("sms plateform");
// $SpPlusIntance->setWebsiteUrl("http://localhost/payplus-php");
// $SpPlusIntance->setCancelUrl("http://localhost/payplus-php/cancel.php"); // url de d'annulation de vente
// $SpPlusIntance->setCallbackUrl("http://localhost/payplus-php/callback.php"); // url de retour apres validation du paiement
$SpPlusIntance->setReturnUrl("http://localhost/payplus-php/return.php"); // url de retour apres validation du paiement


// Soit $co la variable contenant la commande
$co = $SpPlusIntance->getInvoice();