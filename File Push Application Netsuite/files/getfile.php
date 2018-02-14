<?php

require_once '../PHPToolkit/NetSuiteService.php';

$service = new NetSuiteService();
$fileIds = [];


$tsa1 = new FileSearchAdvanced();
$tsa1->savedSearchId="372";  //substitute your own saved search internal ID
//$service->search($tsa1);




$request = new SearchRequest();

$request->searchRecord = $tsa1;

$getResponse = $service->search($request);
//var_dump($getResponse->searchResult->searchRowList);
foreach($getResponse->searchResult->searchRowList as $searchList){
	
	foreach($searchList as $key => $value){
		
		//var_dump($value->basic->internalId[0]->searchValue->internalId);
		
		array_push($fileIds,$value->basic->internalId[0]->searchValue->internalId);
			
	}
	
	
	
}

$filesArray = [];





foreach($fileIds as $key => $value){

		$request = new GetRequest();
		$request->baseRef = new RecordRef();
		$request->baseRef->internalId = $value;
		$request->baseRef->type = "file";
		$getResponse = $service->get($request);
	//	var_dump($getResponse->readResponse->record);
		$myfile = fopen("D:\CCWS\\".$getResponse->readResponse->record->name, "w") or die("Unable to open file!");
		fwrite($myfile,$getResponse->readResponse->record->content);
		fclose($myfile);
		//die();
		array_push($filesArray,$getResponse);
		if($key == 50){
			
			break;
			
			
			
		}
		
		
		//die();

}

var_dump('=================================================================');
//var_dump($filesArray);

$filecount = 0;
foreach($filesArray as $key => $value){
	
	//var_dump($value->readResponse->record);
	$myfile = fopen("D:\CCWS\\".$value->readResponse->record->name, "w") or die("Unable to open file!");
	fwrite($myfile,$value->readResponse->record->content);
	fclose($myfile);
	$filecount++;
	
	
}
echo $filecount." files downloaded";
die();







if (!$getResponse->readResponse->status->isSuccess) {
    echo "GET ERROR";
} else {
    
	var_dump($file->SearchRowList);
	   // print_r($service->client->__getLastResponse());
	
    //echo "GET SUCCESS, File name is " . $file->name;
}

?>

