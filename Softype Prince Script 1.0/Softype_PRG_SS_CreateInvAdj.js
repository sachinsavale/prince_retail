/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       27 Sep 2017     Sachin Savale
 *
 */

/**
 * @param {String} type Context Types: scheduled, ondemand, userinterface, aborted, skipped
 * @returns {Void}
 */
function scheduled(type) {
	
	var context = nlapiGetContext();
	var processFolder = 270;
	var ProcessedFolder = 271;
	var searchFilters = new Array();
	searchFilters.push(new nlobjSearchFilter('folder',null,'is',processFolder));
	var totalFiles = nlapiSearchRecord('file',null,searchFilters, null); //10units
	if(totalFiles)
	{
        nlapiLogExecution('Audit', 'Files Length', totalFiles.length);
		for(var t = 0; t < totalFiles.length; t++)
		{
			
			
			 var usage = context.getRemainingUsage();
			 nlapiLogExecution('emergency','usage',usage);
			if(usage <= 500){
		        
				
				
				var status = nlapiScheduleScript('customscript_prg_ss_createinv_adj','customdeploy_prg_ss_createinv_adj');
				
				nlapiLogExecution('debug','Status in FILE',status);
				if(status == 'QUEUED'){
					
					return;
				}
			
			}
			
			
			
			var fileID = totalFiles[t].getId();
			var fileObj = nlapiLoadFile(fileID);
			var fileName = fileObj.getName();
		 var flag = processTransaction(fileObj,fileName);
		 nlapiLogExecution('emergency','FLAG',flag);
			if(flag == 'f'){
				
				return;
			}
			moveFile(fileObj,ProcessedFolder);
			
			nlapiLogExecution('audit','File Moved');
			
			
		}
	
	}

}


function processTransaction(fileObj,fileName,fileID){
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
	 
	var items_array = [];
	 
	var filelength = Number(rows.length);
	nlapiLogExecution('audit','file length',filelength);

	
	 
	 //======================Validate Items===========================================================//
	
	
	var validItems = new Array();
	var invalidItems = new Array();
	var invalidUoms = new Array();
	var recId = context.getSetting('SCRIPT', 'custscript_record_id');
	nlapiLogExecution('audit','Rec ID',recId);
	
	if(recId){
		nlapiLogExecution('debug','Record Id Found',recId);
		var recData = nlapiLookupField('customrecord_prg_inventory_adjustment',recId,['custrecord_items_array','custrecord_valid_items','custrecord_invalid_items','custrecord_record_id']);
		recordIdSaved = recData.custrecord_record_id;
		if(recordIdSaved){
			
			recordExists = 'T'
				
			for(var it = 0; it < rows.length; it++){
				
				   var data_item = rows[it].split(',')
				   var item = data_item[3];
				   var uom = data_item[5];
				   if(item){
						   items_array.push({item:item,uom:uom});
				    }
				}
					
			
			nlapiLogExecution('emergency','Record Already Saved for this Inventory');
		}else{
			
			var items = recData.custrecord_valid_items;
			if(recData.custrecord_valid_items){
				
				validItems = JSON.parse(recData.custrecord_valid_items);
			}
			
			if(recData.custrecord_invalid_items){
				
				invalidItems = JSON.parse(recData.custrecord_invalid_items);
			}
			
			nlapiLogExecution('audit','Valid Items JSON LENGTH',validItems.length);
			var sequenceNumber = context.getSetting('SCRIPT', 'custscript_start_from_index');
			nlapiLogExecution('audit','Sequence Number',sequenceNumber);
			for(var s = sequenceNumber; s < rows.length; s++){
				
				   var data_item = rows[s].split(',')
				   var item = data_item[3];
				   var uom = data_item[5];
				   if(item){
						   items_array.push({item:item,uom:uom});
				    }
				}
			nlapiLogExecution('debug','Items Array length',items_array.length);
			
			
			
			
		}
		
	}else{
		
		
		for(var it = 0; it < rows.length; it++){
			
			   var data_item = rows[it].split(',')
			   var item = data_item[3];
			   var uom = data_item[5];
			   if(item){
					   items_array.push({item:item,uom:uom});
			    }
			}
			
		
		
		
	}
	
	nlapiLogExecution('audit','Item Array',items_array);
	var foundItems = new Array();
	//items_array.push('123eee');
	var itemLength = items_array.length;
	for(var r = 0; r < itemLength; r++){

	    var usage1 = context.getRemainingUsage();
		nlapiLogExecution('debug','Usage in item',usage1);
		if(usage1 <= 500){
		          //================Rechedule Script===========================//
			nlapiLogExecution('debug','Found Items Length',foundItems.length);
			if(!recId){
				var createRecordObj = nlapiCreateRecord('customrecord_prg_inventory_adjustment');
				createRecordObj.setFieldValue('custrecord_valid_items',JSON.stringify(validItems));
				//createRecordObj.setFieldValue('custrecord_items_array',JSON.stringify(validItems));
				createRecordObj.setFieldValue('custrecord_invalid_items',JSON.stringify(invalidDatas));
				
				var recordId = nlapiSubmitRecord(createRecordObj);
				nlapiLogExecution('debug','Submitted Record ID',recordId);
			}else{
				
				nlapiSubmitField('customrecord_prg_inventory_adjustment',recId,['custrecord_valid_items','custrecord_invalid_items'],[JSON.stringify(validItems),JSON.stringify(invalidItems)])
			}
			
			
			
			
			nlapiLogExecution('debug','Record ID',recordId);
	        var params = new Array();
            nlapiLogExecution('audit','Usage less than 100');
			params['custscript_start_from_index'] =r;
			params['custscript_record_id'] =recordId;
			var status = nlapiScheduleScript('customscript_prg_ss_createinv_adj','customdeploy_prg_ss_createinv_adj',params);
			
			nlapiLogExecution('debug','Status',status);
			if(status == 'QUEUED'){
				
				return 'f';
			}
					
				   
		}
		
		
		var item_filters = new Array();
		var item_columns = new Array();
		var itemname = items_array[r].item;
		var abbreviation = items_array[r].uom;
		nlapiLogExecution('debug','Abbreviation',abbreviation);
		var item_search_results;
		if(itemname){
			
			item_filters.push(new nlobjSearchFilter('name',null,'is',itemname));
			item_filters.push(new nlobjSearchFilter('isinactive',null,'is','F'));
			item_columns.push(new nlobjSearchColumn('custitem_noninventoryitem'));
			item_columns.push(new nlobjSearchColumn('unitstype'));
			item_columns.push(new nlobjSearchColumn('stockunit'));
			item_columns.push(new nlobjSearchColumn('type'));
			item_columns.push(new nlobjSearchColumn('department'));
			 item_search_results = nlapiSearchRecord('item',null,item_filters,item_columns);
		}
		
		
		
		if(item_search_results){
			foundItems.push(item_search_results[0].id);
			var inventoryItem = item_search_results[0].getValue('custitem_noninventoryitem');
			var unit_name = item_search_results[0].getText('unitstype');
			var stockunit = item_search_results[0].getValue('unitstype');
			var department = item_search_results[0].getValue('department');
			var unittype = item_search_results[0].getValue('type');
			nlapiLogExecution('debug','Unit Name',stockunit);
			var uomFilters = [];
			var uomColumns = [];
//			if(abbreviation && unit_name){
//				uomFilters.push(new nlobjSearchFilter('name',null,'is',unit_name.toString()));
//				uomFilters.push(new nlobjSearchFilter('abbreviation',null,'is',abbreviation.toString()));
//				
//			}
			
			
			validItems.push({
				itemid:item_search_results[0].id,
				itemname:itemname,
				noninventoryitem:inventoryItem,
				unitid:stockunit,
				abbreviation:abbreviation,
				type:unittype,
				department:department
			});
			
			
			
//			var searchUom = nlapiSearchRecord('unitstype',null,uomFilters,null);
//			nlapiLogExecution('debug','Search UOM',JSON.stringify(searchUom));
//			if(searchUom){
//				
//				var uomObj = nlapiLoadRecord('unitstype',searchUom[0].id);
//					
//					var linecount = uomObj.getLineItemCount('uom');
//					for(uo = 1; uo <= linecount; uo++){
//						
//						var uomAbbreviation = uomObj.getLineItemValue('uom','abbreviation',uo);
//						var unitid = uomObj.getLineItemValue('uom','internalid',uo);
//						if(uomAbbreviation == abbreviation){
//							
//							nlapiLogExecution('debug','UOM Found',r);
//							validItems.push({
//									itemid:item_search_results[0].id,
//									itemname:itemname,
//									noninventoryitem:inventoryItem,
//									unitid:unitid,
//									abbreviation:abbreviation	
//								});
//							}else{
//								
//								
//								invalidDatas.push({
//									itemid:item_search_results[0].id,
//									itemname:itemname,
//									noninventoryitem:inventoryItem,
//									unitid:unitid,
//									abbreviation:abbreviation	
//								});
//								
//							}
//						     	
//						}
//					}else{
//						
//						invalidUoms.push({abbreviation:abbreviation});
//					}
			}else{
				
	            invalidItems.push({itemid:null,itemname:itemname,unit:abbreviation});
	            
	       }
		
		

	}

   
	//if(totalLength == filelength)
	{

		//nlapiLogExecution('emergency','Start Creating the JSON RECORD');
		// ==========Save the Items=======================//
		
//		// =======================search in UOM ================================//
//		 var uom_filters = new Array();
//	     var uom_columns = new Array();
//	      
//	      uom_filters.push(new nlobjSearchFilter('name',null,'is',unitname));
//	      uom_columns.push(new nlobjSearchFilter('abbreviation',null,'is',baseunit));
//	      
	
//	      var searchUom = nlapiSearchRecord('unitstype',null,uom_filters,uom_columns);
		
		
		for(var k = 0; k < rows.length; k++){
			 
		    var data = rows[k].split(',');
		    var documentnumber = data[0];
		    if(documentnumber){
		    	
		    	  
				    var date = data[1];
				    var location = data[2];
				    var item = data[3];
				    var adjustqty= data[4];
				    var salesuom = data[5];
				    var salesamount = data[6]
				    var subsidiary = data[7];
				    
				    
				    JsonRecords.push({documentnumber:documentnumber,date:date,location:location,item:item,adjustqty:adjustqty,salesuom:salesuom,salesamount:salesamount,subsidiary:subsidiary,filename:fileName,fileid:fileID});
		    }
		  
		 
		}
		
		
		var groupBy = function(xs, key) {
			  return xs.reduce(function(rv, x) {
			    (rv[x[key]] = rv[x[key]] || []).push(x);
			    return rv;
			  }, {});
			};
			
			
		var inventoryAdjRecords =groupBy(JsonRecords, 'documentnumber');
		
		if(recId && recordExists == 'F'){
			
			inventoryAdjRecords = JSON.stringify(inventoryAdjRecords);
			var recordId = nlapiSubmitField('customrecord_prg_inventory_adjustment',recId,['custrecord_valid_items','custrecordinventory_adjustment','custrecord_invalid_items'],[JSON.stringify(validItems),inventoryAdjRecords,JSON.stringify(invalidItems)])
			nlapiLogExecution('debug','Record ID',recordId);
			return;
		
		}else{
			
			inventoryAdjRecords = JSON.stringify(inventoryAdjRecords);
			var createRecordObj = nlapiCreateRecord('customrecord_prg_inventory_adjustment');
			createRecordObj.setFieldValue('custrecord_valid_items',JSON.stringify(validItems));
			createRecordObj.setFieldValue('custrecord_invalid_items',JSON.stringify(invalidItems));
			createRecordObj.setFieldValue('custrecordinventory_adjustment',inventoryAdjRecords);
			
			var recordId = nlapiSubmitRecord(createRecordObj);
			
			nlapiLogExecution('debug','Record ID',recordId);
			return;
			
		}
		
		
		
		
		


	}

	//=================================================================================//		 
	var a=0;	
}

function triming(a)
{
	if(a)
		var obj = a.trim();

	return obj;
}

function moveFile(file,ProcessedFolder)
{
	file.setFolder(ProcessedFolder);
	nlapiSubmitFile(file);
}
