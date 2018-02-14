<?php

require_once 'NetSuiteService.php';
require_once 'NSconfig.php';

class MyTokenPassportGenerator implements iTokenPassportGenerator
{

	/**
	 * Shows how to generate TokenPassport for SuiteTalk, called by PHP Toolkit before each request
	 */
	public function generateTokenPassport() {
		$consumer_key = NS_consumer_key; // Consumer Key shown once on Integration detail page
		$consumer_secret = NS_consumer_secret; // Consumer Secret shown once on Integration detail page
		// following token has to be for role having those permissions: Log in using Access Tokens Web Services
		$token = NS_token; // Token Id shown once on Access Token detail page
		$token_secret = NS_token_secret; // Token Secret shown once on Access Token detail page
		
		$nonce = $this->generateRandomString();// CAUTION: this sample code does not generate cryptographically secure values
		$timestamp = time();
		$NS_ACCOUNT = NS_ACCOUNT;
		$baseString = urlencode($NS_ACCOUNT) ."&". urlencode($consumer_key) ."&". urlencode($token) ."&". urlencode($nonce) ."&". urlencode($timestamp);
		$secret = urlencode($consumer_secret) .'&'. urlencode($token_secret);
		$method = 'sha1'; //can be sha256	
		$signature = base64_encode(hash_hmac($method, $baseString, $secret, true));
		
		$tokenPassport = new TokenPassport();
		$tokenPassport->account = $NS_ACCOUNT;
		$tokenPassport->consumerKey = $consumer_key;
		$tokenPassport->token = $token;
		$tokenPassport->nonce = $nonce;                                    
		$tokenPassport->timestamp = $timestamp; 
		$tokenPassport->signature = new TokenPassportSignature();
		$tokenPassport->signature->_ = $signature;
		$tokenPassport->signature->algorithm = "HMAC-SHA1";  //can be HMAC-SHA256
		
		return $tokenPassport;
	}


	// CAUTION: it does not generate cryptographically secure values
	private function generateRandomString() {
		$length = 20;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)]; // CAUTION: The rand function does not generate cryptographically secure values
			// Since PHP 7 the cryptographically secure random_int can be used
		}
		// echo value just in this sample to show when and how many times called
		echo "New nonce for TokenPassport: ". $randomString. "\n";
		return $randomString;
	}

}


?>