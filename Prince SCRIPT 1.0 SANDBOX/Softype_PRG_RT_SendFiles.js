/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       14 Nov 2017     kollidam
 *
 */

/**
 * @param {Object} dataIn Parameter object
 * @returns {Object} Output object
 */
function getRESTlet(dataIn) {
	
	return {};
}

/**
 * @param {Object} dataIn Parameter object
 * @returns {Object} Output object
 */
function postRESTlet(dataIn) {
	
	
	nlapiLogExecution('debug','Start');
	var printFolder  = 407;
	var processed = 407
	//var processedItemFolder = 286;
	var filesData = [];
	var searchFilters = new Array();
	searchFilters.push(new nlobjSearchFilter('folder',null,'is',printFolder));
	searchFilters.push(new nlobjSearchFilter('name','systemnotes','anyof',[19]));
	searchFilters.push(new nlobjSearchFilter('context','systemnotes','anyof',['UIF']));
	
	var totalFiles = nlapiSearchRecord('file',null,searchFilters, null); //10units
	
	if(totalFiles)
	{
		var filecount = Number(totalFiles.length);
		var actualCount = filecount-1;
        nlapiLogExecution('Audit', 'Files Length', totalFiles.length);
		for(var t = 0; t < totalFiles.length; t++)
		{
			
			var loadFile = nlapiLoadFile(totalFiles[t].id); 
			
          
         
		   
		   var name = loadFile.getName();
			var id = totalFiles[t].id
			var value = loadFile.getValue();
			filesData.push({
				fileid:id,
				name:name,
				value:value
			});	
          
           if(t == 50){
				
				for(var t=0; t<filesData.length; t++){
					
					var fileObj = nlapiLoadFile(filesData[t].fileid);
				//	moveFile(fileObj,processed);
					
					
				}
				return totalFiles.length;
				return filesData;
			}
			
			
			if(filecount < 50 && t == actualCount){
				
				nlapiLogExecution('debug','File Count less than 50');
				for(var t1=0; t1<filesData.length; t1++){
					
					var fileObj = nlapiLoadFile(filesData[t1].fileid);
					//moveFile(fileObj,processed);
					
					
				}
				return totalFiles.length;
				return filesData;
				
				
				
				
			}
          
          
          
          
			
          
          
						
		}
			
			
          
         
		
		//return filesData;
	}
	
	
	
	
	
	
	
	
}


function moveFile(file,ProcessedFolder)
{
	file.setFolder(ProcessedFolder);
	nlapiSubmitFile(file);
}




