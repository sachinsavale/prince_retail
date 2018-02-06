/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       04 Feb 2018     kollidam
 *
 */

/**
 * @param {String} type Context Types: scheduled, ondemand, userinterface, aborted, skipped
 * @returns {Void}
 */
function scheduled(type) {
	
//	var context = nlapiGetContext();
//	var processFolder = 242;
//	var ProcessedFolder = 243;
//	var searchFilters = new Array();
//	searchFilters.push(new nlobjSearchFilter('folder',null,'is',processFolder));
//	var totalFiles = nlapiSearchRecord('file',null,searchFilters, null); //10units
//	if(totalFiles)
//	{
//        nlapiLogExecution('Audit', 'Files Length', totalFiles.length);
//		for(var t = 0; t < totalFiles.length; t++)
//		{
//			
//			
//			 var usage = context.getRemainingUsage();
//			 nlapiLogExecution('emergency','usage',usage);
//			if(usage <= 500){
//		        
//				
//				
//				var status = nlapiScheduleScript('customscript_post_journal','customdeploy_post_journal');
//				
//				nlapiLogExecution('debug','Status in FILE',status);
//				if(status == 'QUEUED'){
//					
//					return;
//				}
//			
//			}
//			
			
			
			var fileID = 49481;//totalFiles[t].getId();
			var fileObj = nlapiLoadFile(fileID);
			var fileName = fileObj.getName();
			var flag = postJournal(fileObj,fileName,fileID);
		 nlapiLogExecution('emergency','FLAG',flag);
			if(flag == 'f'){
				
				return;
			}
			//moveFile(fileObj,ProcessedFolder);
			
			nlapiLogExecution('audit','File Moved');
			
			
		
	
	


}

function postJournal(fileObj,fileName,fileID){
	
	var JsonRecords = [];
	var recordExists = 'F';
	nlapiLogExecution('audit','In Process Folder');
	var invalidDatas = new Array();
	var context = nlapiGetContext();
	
	var lineItems = new Array();
	var fileContent = fileObj.getValue();
	nlapiLogExecution('Debug','fileContent', fileContent);
	var arrayFileContent = fileContent.split('\n');
	var columns = arrayFileContent[0];
	var rows = new Array();
	var JsonRecords = [];
	for(var d=1; d < arrayFileContent.length; d++){
	   
	   rows.push(arrayFileContent[d]);
	}
	nlapiLogExecution('debug','FILE DATA',rows);
	
	
	for(var k = 0; k < rows.length; k++){
		 
	    var data = rows[k].split(',');
	    var documentnumber = triming(data[0]);
	    if(documentnumber){
	    	
	    	  
			    var date = triming(data[1]);
			    var employeetype = triming(data[2]);
			    var subsidiary = triming(data[3]);
			    var location= triming(data[4]);
			    var department = triming(data[5]);
			    var class1 = triming(data[6]);
			    var accountid = triming(data[7]);
			    var debit = triming(data[8]);
			    var credit = triming(data[9]);
			    
			    JsonRecords.push({
			    	documentnumber:documentnumber,
			    	date:date,employeetype:employeetype,
			    	subsidiary:subsidiary,
			    	location:location,
			    	department:department,
			    	class1:class1,
			    	accountid:accountid,
			    	debit:debit,
			    	credit:credit
			    });
			 }
	    }
	  
	 
	
	
	nlapiLogExecution('debug','JSON DATA',JSON.stringify(JsonRecords));
	
	var groupBy = function(xs, key) {
		  return xs.reduce(function(rv, x) {
		    (rv[x[key]] = rv[x[key]] || []).push(x);
		    return rv;
		  }, {});
		};
		
		
	var JournalRecords =groupBy(JsonRecords, 'documentnumber');
	
	nlapiLogExecution('debug','JSON DATA',JSON.stringify(JournalRecords));
	
	var records = new Array();
	for(var key in JournalRecords){
		
		if(key){
			
			records.push({
				inventoryadjustment:JournalRecords[key]
			});
			
		}
	}
	
	nlapiLogExecution('debug','records DATA',records.length);
	
}

function triming(a)
{
	if(a)
		var obj = a.trim();
	return obj;
}