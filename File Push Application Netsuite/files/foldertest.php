<?php

require_once '../PHPToolkit/NetSuiteService.php';
//$service = new NetSuiteService();
$filesarray = [];
$finalfiles = [];
$di = new RecursiveDirectoryIterator('C:\Sachin\TEST FILES');
$folderIds = array(
                0 => array('Inventory Adjustment'=>248, 'name'=>"Inventory Adjustment"), 
                1 => array('Purchase Order'=>462, 'name'=>"Purchase Order")
        );
//var_dump($folderIds);
foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
	
    //echo $filename . ' - ' . $file->getSize() . ' bytes <br/>';
	//var_dump($file->getType()); 
	if($file->getType() == "file"){
		
		$splitFile = explode("\\",$filename);
			//var_dump($splitFile[3]);
			//die();

			if(is_in_array($folderIds,'name',$splitFile[3]) == 'yes'){
					$folderId =array_value_recursive($splitFile[3],$folderIds);
				//	var_dump($folderId);
				//	die();
					array_push($filesarray,array($filename=>$folderId));
					
				
			}	
			
		
	}
	
	
	
	
}

	$invalidFiles = [];
	//$service = new NetSuiteService();
	
			
	for($i = 0; $i < count($filesarray); $i++){
		
		
		//$fileArray = explode(".",$files[$i]);
		
		
		if(10 == 10){
		
			
			foreach($filesarray[$i] as $key => $value){
			//var_dump($key);
			$filename =	basename($key);
			//die();
			$file_contents = file_get_contents($key);
			
			//die();
				$finalfiles[$i] = new File();
				$finalfiles[$i]->folder = new RecordRef();
				$finalfiles[$i]->folder->internalId = $value;
				$finalfiles[$i]->name = $filename;
				$finalfiles[$i]->attachFrom = '_computer';
				$finalfiles[$i]->content = $file_contents;
					
			}
			
		
		}else{
			
			array_push($invalidFiles,$files[$i]);
			
			
		}
		
		
		
		
		
	}

//var_dump($finalfiles);

$sendFiles = array_chunk($finalfiles,190,true);
var_dump($sendFiles);
die();
if(count($sendFiles) > 0) {
		

	foreach($sendFiles as $k => $value){
		var_dump($value[0]);
		die();
		$addListRequest = new AddListRequest();
		$addListRequest->record = $filesArray;
		$addListResponse = $service->addList($addListRequest);
		for($ii=0; $ii<count($addListResponse->writeResponseList->writeResponse); $ii++)
		{
				
		if (!$addListResponse->writeResponseList->writeResponse[$ii]->status->isSuccess) {

			echo "ADD LIST ERROR";
		} else {
			
			$counter++;
			var_dump('In Response success');
			foreach($filesarray[$ii] as $key => $value){
				
				//unlink($childfiles->getPathname().'\\'.$files[$ii]);
				
			}
			
			//echo "\nfile deleted-->".$childfiles->getPathname().'\\'.$files[$ii];
			//array_push($filesProcessed,$files[$ii]);

			//echo "\n" . $addListResponse->writeResponseList->writeResponse[$ii]->baseRef->internalId."\n";
			
		}
	}
		
		
	}
		

	

	
	//var_dump($filesProcessed);
						
						
}
die();



function array_value_recursive($key, array $arr){
    $val = array();
    array_walk_recursive($arr, function($v, $k) use($key, &$val){
        if($k == $key) array_push($val, $v);
    });
    return count($val) > 1 ? $val : array_pop($val);
}



function is_in_array($array, $key, $key_value){
      $within_array = 'no';
      foreach( $array as $k=>$v ){
        if( is_array($v) ){
            $within_array = is_in_array($v, $key, $key_value);
            if( $within_array == 'yes' ){
                break;
            }
        } else {
                if( $v == $key_value && $k == $key ){
                        $within_array = 'yes';
                        break;
                }
        }
      }
      return $within_array;
}

//var_dump($filesarray);

?>