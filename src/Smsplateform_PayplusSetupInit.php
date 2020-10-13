<?php

namespace Smsplateform\Payplus\Client;

use Pay_Setup;
use Pay_Checkout_Invoice;
use Pay_Checkout_Store;

/**
 * Smsplateform_PayplusSetupIit
 */
class Smsplateform_PayplusSetupInit
{

	private $setup = null;
	private $store = null;
	
	public function __construct( $api_key, $api_token, $env='test' ) {
		$this->api_setup = new Pay_Setup();
		$this->api_setup->setApi_key( $api_key );
		$this->api_setup->setMode( ($env == 'test') ? 'test' : 'live' ); // mode d'utilisation (soit live, soit test)
		$this->api_setup->setToken( $api_token ); // token généné lors de la création de l'application

		$this->api_store = new Pay_Checkout_Store();

		return $this;
	}

	public function setName($name) {
		$this->api_store->setName($name);
	}

	public function setWebsiteUrl($url) {
		$this->api_store->setWebsiteUrl($url);
	}

	public function setCancelUrl($url) {
		$this->api_store->setCancelUrl($url);
	}

	public function setCallbackUrl($url) {
		$this->api_store->setCallbackUrl($url);
	}

	public function setReturnUrl($url) {
		$this->api_store->setReturnUrl($url);
	}

	public function getInvoice() {
		return (new Pay_Checkout_Invoice($this->api_store, $this->api_setup));
	}
}