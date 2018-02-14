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

	echo $_GET['id'];
die();
	$url = "https://rest.sandbox.netsuite.com/app/site/hosting/restlet.nl?script=227&deploy=1";
	$ckey = "cdc63df774ca5986eebcbf5ee10bd03ea4dfa30bfd45bfab1265f54c3a3c6b9a"; //Consumer Key
	$csecret = "29a55ab44dc003b335b6a987610b219369391658737dacf7a77dd6e1168ef55b"; //Consumer Secret
	$tkey = "10e69cede093195b4a75b668e8232be6f0915a22fea5e91ed317f1f6926017bc"; //Token ID
	$tsecret = "a6c289d1a1575869b5d2a68382df12c009983542d06ac3fa09656b1343806224"; //Token Secret
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
	$req->set_parameter('realm', "4872008_SB1");

	$header = array(
	  'http'=>array(
		'method'=>"GET",
		'header' => $req->to_header() . ',realm="4872008_SB1"'. " \r\n" . "Host:rest.sandbox.netsuite.com \r\n" . "Content-Type: application/json"
	  )
	);

	
    
	$context = stream_context_create($header);
	
	//$fp = fopen('https://rest.netsuite.com/app/site/hosting/restlet.nl?script=227&deploy=1', 'r', false, $context);
	//var_dump($fp);
	
	//fpassthru($fp);

	//fclose($fp);
	$response = file_get_contents('https://rest.sandbox.netsuite.com/app/site/hosting/restlet.nl?script=227&deploy=1',false, $context);
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
	
