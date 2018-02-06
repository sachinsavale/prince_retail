/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       04 Nov 2017     kollidam
 *
 */

/**
 * @param {String} type Context Types: scheduled, ondemand, userinterface, aborted, skipped
 * @returns {Void}
 */
function scheduled(type) {
	
	var unprocessFolder = 278;
	var processedFolder = 293;
	var searchFilters = new Array();
	searchFilters.push(new nlobjSearchFilter('folder',null,'is',unprocessFolder));
	var totalFiles = nlapiSearchRecord('file',null,searchFilters, null); //10units
	var count = 0;
	if(totalFiles)
	{
        nlapiLogExecution('Audit', 'Files Length', totalFiles.length);
		for(var t = 0; t < totalFiles.length; t++)
		{
			
			var import3 = nlapiCreateCSVImport();
			import3.setMapping('CUSTIMPORT_TRANSFER_ORDER');
			import3.setPrimaryFile(nlapiLoadFile(totalFiles[t].id)); 
			import3.setQueue(4); 
			var id = nlapiSubmitCSVImport(import3);
			
			
			nlapiLogExecution('debug','OBJ',JSON.stringify(id));
			nlapiLogExecution('debug','Submit csv id',id);
			if(id){
				
				var fileobj = nlapiLoadFile(totalFiles[t].id);
				moveFile(fileobj,processedFolder);
				count++
				
			}
			nlapiLogExecution('audit','Process File Total',count);
			
		}
	}

}

function moveFile(file,ProcessedFolder)
{
	file.setFolder(ProcessedFolder);
	nlapiSubmitFile(file);
}
