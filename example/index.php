<?php

require_once 'Setup.php';

$price = 2500;

/**
 * 3% TVA
 * @var number
 */
$priceWithTva = $price + ($price * (3/100));

/**
 * @name : nom de l’article
 * @quantity : quantité de l’article
 * @unit_price : prix unitaire de l’article
 * @total_price : prix total de l’article
 * @description : description de l’article acheté ou autres détails sur l’article
 */
$co->addItem("Commande n 256", 1, $price, $priceWithTva, "Jean bleu, de marque Gucci");

if( $co->create() ) {
	// Requête acceptée, alors on redirige le client vers la page de validation de paiement
	header("Location: ".$co->getInvoiceUrl());
	exit;
} else {
	// Requête refusée, alors on affiche le motif du rejet
	header('HTTP/1.0 400 Bad Request', true, 400);
	echo $co->response_text;
}