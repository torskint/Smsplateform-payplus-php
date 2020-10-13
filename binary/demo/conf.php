<?php
require(dirname(__FILE__).'/../pay-php-gateway.php');

// configuration du setup de l'API
$setup = new Pay_Setup();
$setup->setApi_key("votre clé principale fournie lors de la création de l'application");
$setup->setMode("mode suivant lequel"); // live ou test
$setup->setToken("token fourni lors de la création de l'application");


//Configuration des informations de votre boutique/service
$store = new Pay_Checkout_Store();
$store->setName("nom de votre boutique/application");
$store->setWebsiteUrl("url de votre site");
$store->setCancelUrl("url de d'annulation de vente");
$store->setCallbackUrl("url de retour apres validation du paiement");
$store->setReturnUrl("url de retour apres validation du paiement");
