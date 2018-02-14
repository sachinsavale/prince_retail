	<?php

	require_once 'OAuth.php';

	function generateRandomString() {
		$length = 20;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}


	$url = "https://rest.na2.netsuite.com/app/site/hosting/restlet.nl?script=227&deploy=1";
	$ckey = "549f0a1e3dce436725bebc309753668bac1729d67c4e7b4f82b21badf0c206f8"; //Consumer Key
	$csecret = "b85097ca003625a097c57bdcd7cb4b0a8941bfca3a4f4a633acd43eeb1caa7e5"; //Consumer Secret
	$tkey = "d707069d419902a34778c7821fdc374836d0e0f7dbdb6aaf9da6a646ff509bcf"; //Token ID
	$tsecret = "53e8256e2a5dfd7c35691a69a0a120ad3a5de3094e2142ea0120395172ec1117"; //Token Secret
	$consumer = new OAuthConsumer($ckey, $csecret);
	$token = new OAuthToken($tkey, $tsecret);
	$sig = new OAuthSignatureMethod_HMAC_SHA1(); //Signature
	$params = array(
		'oauth_nonce' => generateRandomString(),
		'oauth_timestamp' => idate('U'),
		'oauth_version' => '1.0',
		'oauth_token' => $tkey,
		'oauth_consumer_key' => $ckey,
		'oauth_signature_method' => $sig->get_name()
	);


	$req = new OAuthRequest('GET', $url, $params);
	$req->set_parameter('oauth_signature', $req->build_signature($sig, $consumer, $token));
	$req->set_parameter('realm', "4872008");

	$header = array(
	  'http'=>array(
		'method'=>"GET",
		'header' => $req->to_header() . ',realm="4872008"'. " \r\n" . "Host:rest.netsuite.com \r\n" . "Content-Type: application/json"
	  )
	);

	
    
	$context = stream_context_create($header);
	
	//$fp = fopen('https://rest.netsuite.com/app/site/hosting/restlet.nl?script=227&deploy=1', 'r', false, $context);
	//var_dump($fp);
	
	//fpassthru($fp);

	//fclose($fp);
	$response = file_get_contents('https://rest.netsuite.com/app/site/hosting/restlet.nl?script=227&deploy=1',false, $context);
	$json = json_decode($response);
	$noOfFiles = 0;
	if($json){
		
		foreach($json as $key => $value){
		
		 $myfile = fopen("D:\CCWS\\".$value->name, "w") or die("Unable to open file!");
		fwrite($myfile,$value->value);
		fclose($myfile);
		$noOfFiles++;
		
	}
		
		
	}else{
		
		echo "No Files to download";
	}
	
	if($noOfFiles > 0){
		
		echo $noOfFiles.' files downloaded';
		
	}
	
     //var_dump($json[0]->value)

	?>
	
