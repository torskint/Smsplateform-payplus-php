<?php

require_once 'Setup.php';

// ?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9pbnZvaWNlIjoiNzIiLCJzdGFydF9kYXRlIjoiMjAyMC0xMC0xMyAwOTozNDoxOCIsImV4cGlyeV9kYXRlIjoxNjAyNjY4MDU4fQ.65OJYId6x3WE9rKYpGJABSQHQe7iPcEAnVq7R6waxOI

if (!empty($_GET['token'])) {

	if ( $co->confirm() ) {
		echo "transaction réussie";
	} else {
		echo "transaction échouée";
	}

} else {
	header('HTTP/1.0 400 Bad Request', true, 400);
	exit(1);
}