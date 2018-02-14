<?php

//require_once '../PHPToolkit/NetSuiteService.php';
require_once '../PHPToolkit/token_based_authentication.php';

$folderIds = array(
                0 => array('POS'=>242, 'name'=>"POS"), 
                1 => array('Purchase Order'=>287, 'name'=>"Purchase Order"),
				2 => array('Store Collection'=>291, 'name'=>"Store Collection"),
				3 => array('Transfer Order'=>279, 'name'=>"Transfer Order"),
				4 => array('Items'=>302, 'name'=>"Items"),
				5 => array('POS 2'=>267, 'name'=>"POS 2"),
				6 => array('POS 3'=>270, 'name'=>"POS 3"),
				7 => array('Vendor Return'=>294 ,'name'=>"Vendor Return"),
				8 => array('Customer Return'=>285 ,'name'=>"Customer Return"),
				9 => array('Other Inventory Adjustment'=>297 ,'name'=>"Other Inventory Adjustment"),
				10 => array('Item Receipts'=>289 ,'name'=>"Item Receipts"),
				11 => array('Institutional Invoice'=>300 ,'name'=>"Institutional Invoice"),
				12 => array('Payvenue'=>322 ,'name'=>"Payvenue")
 
        );

$imgPath = 'C:\Netsuite\Files To Push In NetSuite'; //specify the folder paths
$invalidFilePath = 'C:\Netsuite\Invalid Files';
$movefilePath = 'C:\Netsuite\Processed Files';

$service = new NetSuiteService();

//var_dump($vendor);

$generator= new MyTokenPassportGenerator();
$service -> useRequestLevelCredentials(false);
$service -> setTokenGenerator($generator);
//var_dump($service);
//die();

$dir = new DirectoryIterator($imgPath);

$finalFiles = [];
$filesProcessed = [];
    $counter = 0;
    foreach ($dir as $fileinfo) {
        if ($fileinfo->isDir() && !$fileinfo->isDot()) {
           // echo '<li>'.$fileinfo->getFilename().'</li>';
		   
			$chidDir = new DirectoryIterator($fileinfo->getPathname());
			foreach($chidDir as $childfiles){
				
				if ($childfiles->isDir() && !$childfiles->isDot()) {
					
					$files =  array_slice(scandir($childfiles->getPathname()), 2); //array_diff(scandir($fileinfo->getPathname()), array('..', '.'));
				
					//====================================================================================================//
							
					$total_files = count($files);
					//echo $files[2];
					//$pushFiles = [];
					
					$filesArray = [];
					$invalidFiles = [];
					//$service = new NetSuiteService();
					for($i = 0; $i < $total_files; $i++){
						
						
						$fileArray = explode(".",$files[$i]);
						
						
						if(in_array('csv',$fileArray)){
						
							$file_contents = file_get_contents($childfiles->getPathname().'\\'.$files[$i]);
							$array = explode('\\',$childfiles->getPathname());
							$count = count($array);
							$recordType = $array[$count-2];
							
							$folderId =array_value_recursive($recordType,$folderIds);
							
							$filesArray[$i] = new File();
							$filesArray[$i]->folder = new RecordRef();
							$filesArray[$i]->folder->internalId = $folderId;
							$filesArray[$i]->name = $files[$i];
							$filesArray[$i]->attachFrom = '_computer';
							$filesArray[$i]->content = $file_contents;
						
						}else{
							
							array_push($invalidFiles,$files[$i]);
							
							
						}
						
						
						array_push($finalFiles,$files[$i]);
						
						
					}
					
					
				//	var_dump($invalidFiles);
					
					if(count($invalidFiles) > 0){
					
						for($k=0; $k<count($invalidFiles); $k++){
						
							copy($childfiles->getPathname().'\\'.$invalidFiles[$k],$invalidFilePath.'\\'.$invalidFiles[$k]);
							unlink($childfiles->getPathname().'\\'.$invalidFiles[$k]);
							
						}
						
					}
					
					//echo "done";
					
					if(count($filesArray) > 0) {
						
						$addListRequest = new AddListRequest();
						$addListRequest->record = $filesArray;
						$addListResponse = $service->addList($addListRequest);	
							
					//var_dump($addListResponse);

						
						for($ii=0; $ii<count($addListResponse->writeResponseList->writeResponse); $ii++)
						{
							
							if (!$addListResponse->writeResponseList->writeResponse[$ii]->status->isSuccess) {
							
								echo "ADD LIST ERROR";
								$date = date("F j, Y, g:i a");
								//$filenamelogs = 'ERROR_Log_'.$date.'abc.txt';
								// $myfile = fopen("C:\Netsuite\\Error logs\\".$filenamelogs, "w") or die("Unable to open file!");
							//	$error = json_decode($addListResponse->writeResponseList->writeResponse[$ii]->status->message);
						//		fwrite($myfile,$error);
								
					//			fclose($myfile);
	
							} else {
								
								$counter++;
							//	var_dump('In Response success');
								copy($childfiles->getPathname().'\\'.$files[$ii],$movefilePath.'\\'.$files[$ii]);
								unlink($childfiles->getPathname().'\\'.$files[$ii]);
						//		echo "\nfile deleted-->".$childfiles->getPathname().'\\'.$files[$ii];
								array_push($filesProcessed,$files[$ii]);
							
						//		echo "\n" . $addListResponse->writeResponseList->writeResponse[$ii]->baseRef->internalId."\n";
								
							}
						}
					//var_dump($filesProcessed);
					
						
					}
						
					
					//print_r($filesProcessed);
					
					
					
						
						
						
					
					
					//echo '<li>'.file_get_contents($files1[2]).'</li>';
					
					
					// do your while loop here
							
					//=====================================================================================================//
				}
				
				
			}
		   
			//$files =  array_slice(scandir($fileinfo->getPathname()), 2); //array_diff(scandir($fileinfo->getPathname()), array('..', '.'));
		
			
        }
    }
	echo $counter.' Files Pushed';
	$abc = $counter.' Files Pushed';
	$date = date("F j, Y, g:i a");
	$filenamelogs = 'Files_Processed_'.$date;
	 $myfile = fopen("C:\Netsuite\\logs\\".$filenamelogs, "w") or die("Unable to open file!");
	
	fwrite($myfile,$abc);
	
	fclose($myfile);
	//var_dump('DONE');
	die();
   

function moveFile($from,$to){
	
	copy($from,$to);
	unlink($from);
	
	
}


function array_value_recursive($key, array $arr){
    $val = array();
    array_walk_recursive($arr, function($v, $k) use($key, &$val){
        if($k == $key) array_push($val, $v);
    });
    return count($val) > 1 ? $val : array_pop($val);
}




?>

