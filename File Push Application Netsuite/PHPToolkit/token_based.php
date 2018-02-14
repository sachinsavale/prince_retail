<?php

require_once '../PHPToolkit/NetSuiteService.php';

class MyTokenPassportGenerator implements iTokenPassportGenerator
{

	/**
	 * Shows how to generate TokenPassport for SuiteTalk, called by PHP Toolkit before each request
	 */
	public function generateTokenPassport() {
		$consumer_key = "5edf46d87ac030b5fe4b83299d14b3c7408ec388117eb58a0fdbeb1453b5a4ee"; // Consumer Key shown once on Integration detail page
		$consumer_secret = "d940de88b8fe977cbfeecd31311e9504918511ee8a2493c8c5930b3b30429e18"; // Consumer Secret shown once on Integration detail page
		// following token has to be for role having those permissions: Log in using Access Tokens, Web Services
		$token = "3e30f65175aa5a697c3ba28afc826a3404f92cded0976d9ed48e7be24528cf7e"; // Token Id shown once on Access Token detail page
		$token_secret = "9200a6b3098efca962babc6087535fb2a87ae3962b8b491c86f60660213ab418"; // Token Secret shown once on Access Token detail page
		
		$nonce = $this->generateRandomString();// CAUTION: this sample code does not generate cryptographically secure values
		$timestamp = time();

		$baseString = urlencode(NS_ACCOUNT) ."&". urlencode($consumer_key) ."&". urlencode($token) ."&". urlencode($nonce) ."&". urlencode($timestamp);
		$secret = urlencode($consumer_secret) .'&'. urlencode($token_secret);
		$method = 'sha1'; //can be sha256	
		$signature = base64_encode(hash_hmac($method, $baseString, $secret, true));
		
		$tokenPassport = new TokenPassport();
		$tokenPassport->account = NS_ACCOUNT;
		$tokenPassport->consumerKey = $consumer_key;
		$tokenPassport->token = $token;
		$tokenPassport->nonce = $nonce;                                    
		$tokenPassport->timestamp = $timestamp; 
		$tokenPassport->signature = new TokenPassportSignature();
		$tokenPassport->signature->_ = $signature;
		$tokenPassport->signature->algorithm = "HMAC-SHA1";  //can be HMAC-SHA256
		
		return $tokenPassport;
	}

	/**
	 * Not related to Token-Based Authentication, just displaying responses in this sample.
	 * It is assumed (and not checked) that $timeResponse is a response of getServerTime operation.
	 */
	public static function echoResponse($timeResponse) {
		if (!$timeResponse->getServerTimeResult->status->isSuccess) {
			echo "GET ERROR\n";
		} else {
			echo "GET SUCCESS, time:". $timeResponse->getServerTimeResult->serverTime. "\n";
		}
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

$generator = new MyTokenPassportGenerator();

$service = new NetSuiteService();
$request = new GetServerTimeRequest();

// Request Level Credentials are used by default
$timeResponse = $service->getServerTime($request);
$generator->echoResponse($timeResponse);

// setting Token Generator switches to TBA
$service->setTokenGenerator($generator);

// calling in loop to show there is new token for each request
for ($i=1; $i<=3; ++$i) {
    $timeResponse = $service->getServerTime($request);
    $generator->echoResponse($timeResponse);
}

// switch to Request Level Credentials, tokenPassport is not generated
$service->useRequestLevelCredentials(true);
$timeResponse = $service->getServerTime($request);
$generator->echoResponse($timeResponse);

// when switched from Request Level Credentials, tokenPassport is generated again
$service->useRequestLevelCredentials(false);
$timeResponse = $service->getServerTime($request);
$generator->echoResponse($timeResponse);

// if tokenGenerator is removed, switch to Request Level Credentials manually
$service->setTokenGenerator(null);
$service->useRequestLevelCredentials(true);
$timeResponse = $service->getServerTime($request);
$generator->echoResponse($timeResponse);

?> 