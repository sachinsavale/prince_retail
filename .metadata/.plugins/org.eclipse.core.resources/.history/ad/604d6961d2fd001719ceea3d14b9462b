/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       27 Sep 2017     Sachin Savale
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType
 * 
 * @param {String} type Operation types: create, edit, delete, xedit,
 *                      approve, cancel, reject (SO, ER, Time Bill, PO & RMA only)
 *                      pack, ship (IF only)
 *                      dropship, specialorder, orderitems (PO only) 
 *                      paybills (vendor payments)
 * @returns {Void}
 */
function userEventAfterSubmit(type){
	
	var currentRecordId = nlapiGetRecordId();
	var currentRecordObj = nlapiGetNewRecord();
	var validItems = currentRecordObj.getFieldValue('custrecord_valid_items');
	var unitcost = currentRecordObj.getFieldValue('custrecord_unit_cost');
	nlapiLogExecution('debug','unitcost',unitcost);
	var items_names = [];
	nlapiLogExecution('debug','Valid Items JSON',validItems);
	validItems = JSON.parse(validItems);
	var department = '';
	if(validItems && validItems.length > 0){
		
	
			
			department = validItems[0].department;
		
		 
	}
	
	var invoiceJson = new Array();
	
	
	nlapiLogExecution('audit','department',department);
	var fileErrors = new Array();
	
	
	
	var kitItems = filterJson('Kit',validItems);
	
	nlapiLogExecution('debug','Kit Items',JSON.stringify(kitItems));
	

	
	var itemsArray= new Array();
	
	
	var invAdjJson = currentRecordObj.getFieldValue('custrecordinventory_adjustment');
	nlapiLogExecution('debug','Inventory JSON',invAdjJson);
	invAdjJson = JSON.parse(invAdjJson);
	//var jsonObj = JSON.parse(invJson);
	nlapiLogExecution('debug','Inventory JSON obj',invAdjJson);
	
	var records = new Array();
	for(var key in invAdjJson){
		
		if(key){
			
			records.push({
				inventoryadjustment:invAdjJson[key]
			});
			
		}
	}
    
    nlapiLogExecution('debug','Records',JSON.stringify(records));
    nlapiLogExecution('debug','Records',records.length);
     for(var i = 0; i<records.length; i++){
    
    	 var inventoryRecords = records[i].inventoryadjustment;
        
    	 var invoiceNumber = inventoryRecords[0].documentnumber;
    	 var subsidiary = triming(inventoryRecords[0].subsidiary);
    	 var location = inventoryRecords[0].location;
    	// var department = inventoryRecords[0].departmentname;
    	 var trandate = inventoryRecords[0].date;
    	 var account = 321;
    	 
    	 nlapiLogExecution('debug','subsidiary',subsidiary);
    	 
    	 var filterLocation = new Array();
		filterLocation.push(new nlobjSearchFilter('isinactive', null, 'is', 'F'));
		filterLocation.push(new nlobjSearchFilter('name', null, 'is', location));
		
			var columnLocation = new Array();
			columnLocation.push(new nlobjSearchColumn('subsidiary'));
			
			var searchLocation = nlapiSearchRecord('location', null, filterLocation, columnLocation);
			if(searchLocation){
				
				var locationId = searchLocation[0].getId();
				nlapiLogExecution('Debug', 'Location search details', 'locationId '+locationId);
			}
    	 
    	 
    	 var createInvAdj = nlapiCreateRecord('inventoryadjustment',{recordmode:'dynamic'});
    
         createInvAdj.setFieldValue('subsidiary',Number(subsidiary));
         createInvAdj.setFieldValue('department',Number(department));
         createInvAdj.setFieldValue('adjlocation',locationId);
         createInvAdj.setFieldValue('account',account);
        
       
         createInvAdj.setFieldValue('trandate', trandate);
         createInvAdj.setFieldValue('custbody_invoicenumber',invoiceNumber);
         var qty = 0;
         nlapiLogExecution('audit','Inventory Records',JSON.stringify(inventoryRecords));
         for(var line = 0; line < inventoryRecords.length; line++){
        	 
        	 var itemid = inventoryRecords[line].item
        	 var itemsJson = getObject(itemid,validItems); 
        	 if(itemsJson){
        		 
        		if(kitItems.indexOf(itemid) == -1){
        			
        			
        			// ------ Create lne items only for inventory itemm-----------------------------------------//
        			 nlapiLogExecution('debug','LINE NO',line);
            		 nlapiLogExecution('debug','Item ID',itemsJson.itemid);
            		 createInvAdj.selectNewLineItem('inventory');
                	 createInvAdj.setCurrentLineItemValue('inventory', 'item', itemsJson.itemid);
                	 createInvAdj.setCurrentLineItemValue('inventory', 'location', locationId);
                	// createInvAdj.setCurrentLineItemValue('inventory', 'units', itemsJson.unitid);
                	// 
                	 if(unitcost == "T"){
                		 
                		 createInvAdj.setCurrentLineItemValue('inventory', 'adjustqtyby',inventoryRecords[line].adjustqty);
                		 createInvAdj.setCurrentLineItemValue('inventory', 'unitcost', inventoryRecords[line].salesamount);
                	 }else{
                		 
                		 
                		 if(itemsJson.noninventoryitem == "T"){
                     		
                    		 createInvAdj.setCurrentLineItemValue('inventory', 'adjustqtyby',qty);
                		 }else{
                			 
                			 createInvAdj.setCurrentLineItemValue('inventory', 'adjustqtyby','-'+inventoryRecords[line].adjustqty);
                			 
                		 }
                		 
                		 createInvAdj.setCurrentLineItemValue('inventory', 'custcol_salesamount', inventoryRecords[line].salesamount);
                	 }
                	
                	
                	// createInvAdj.setCurrentLineItemValue('inventory', 'adjustqtyby',inventoryRecords[line].adjustqty);
                	
                	 createInvAdj.commitLineItem('inventory');
        			
        		}else{
        			
        		//	push inventory record details into invoice to create invoice
        			nlapiLogExecution('debug','Push Kit Items in a invoice array');
        				invoiceJson.push(inventoryRecords[line]);
        			
        			
        			
        		}
        		
        		 
        	 }else{
        		 
        		 // Item Not Found for the particular ID
        		 items_names.push({
        			 itemname:inventoryRecords[line].item,
        			 filename:inventoryRecords[line].filename,
        			 fileid:inventoryRecords[line].fileid
        			 
        		 });
        			
        		 
        	 }
        	
         }
         nlapiLogExecution('debug','FINAL JSON',JSON.stringify(createInvAdj))
         
         if(items_names && items_names.length > 0){
        	 
        	 var createErrorCatcher = nlapiCreateRecord('customrecord_prg_error_catcher');
       		createErrorCatcher.setFieldValue('name', 'Inventory Adjustment');
       		createErrorCatcher.setFieldValue('custrecord_error_description', 'Item names: '+JSON.stringify(items_names));
       		createErrorCatcher.setFieldValue('custrecord_file_name',inventoryRecords[0].filename);
       		createErrorCatcher.setFieldValue('custrecord_internal_id',inventoryRecords[0].fileid);
       		createErrorCatcher.setFieldValue('custrecord_message','Item Not Found');
       		var submitErrorCatcher = nlapiSubmitRecord(createErrorCatcher);
        	 
         }
        	 
        	 
         
         //createInvAdj.setFieldValue('department',department);
        
         	createInvAdj.setFieldValue('custbody_file_name',inventoryRecords[0].filename);
        	try{
        		
        		var invId = nlapiSubmitRecord(createInvAdj,true);
        		if(invId){
           		 
           		 nlapiSubmitField('customrecord_prg_inventory_adjustment',currentRecordId,'custrecord_record_id',invId);
           		 
           		 nlapiLogExecution('audit','Invoice JSON',JSON.stringify(invoiceJson));
           		 
           		 if(kitItems && kitItems.length > 0){
           			 
           			 nlapiLogExecution('debug','Invoice Found');
           			 var jsonInvoice  =groupBy(invoiceJson, 'documentnumber');
               		 var invoices = new Array();
               		for(var key in jsonInvoice){
               			
               			if(key){
               				
               				invoices.push({
               					invoiceObj:jsonInvoice[key]
               				});
               				
               			}
               		}
           			 
           		 
           		 
           		
           		
           	 
           	  for(var inv = 0; inv < invoices.length; inv++){
           	    
             	 var invoiceRecords = invoices[inv].invoiceObj;
                
             	 var invoiceNumber = invoiceRecords[0].documentnumber;
             	 var subsidiary = triming(invoiceRecords[0].subsidiary);
             	 var location = invoiceRecords[0].location;
             	// var department = invoiceRecords[0].departmentname;
             	 var trandate = invoiceRecords[0].date;
             	 nlapiLogExecution('debug','subsidiary',subsidiary);
             	 
             	 var filterLocation = new Array();
         		filterLocation.push(new nlobjSearchFilter('isinactive', null, 'is', 'F'));
         		filterLocation.push(new nlobjSearchFilter('name', null, 'is', location));
         		
     			var columnLocation = new Array();
     			columnLocation.push(new nlobjSearchColumn('subsidiary'));
     			columnLocation.push(new nlobjSearchColumn('custrecord_linkedcustomer'));
     			//columnLocation.push(new nlobjSearchColumn('custbody_file_names'));	
     			
     			var searchLocation = nlapiSearchRecord('location', null, filterLocation, columnLocation);
     			if(searchLocation){
     				
     				var locationId = searchLocation[0].getId();
     				//var filenames = searchLocation[0].getValue('custbody_file_names');
     				nlapiLogExecution('Debug', 'Location search details', 'locationId '+locationId);
     				var customer = searchLocation[0].getValue('custrecord_linkedcustomer');
     				nlapiLogExecution('Debug', 'Customer ID', 'customer '+customer);
     				 
     				
     				var invoicefilters = new Array();
     				var invoicecolumns = new Array();
     				invoicefilters.push(new nlobjSearchFilter('tranid',null,'is',invoiceNumber));
     				invoicecolumns.push(new nlobjSearchColumn('tranid'));
     				invoicecolumns.push(new nlobjSearchColumn('custbody_file_name'));
     				
     				var invoiceSearch = nlapiSearchRecord('invoice',null,invoicefilters,invoicecolumns);
     				if(invoiceSearch){
     					
     					var invoiceId = invoiceSearch[0].id;
     					var loadInvoiceObj = nlapiLoadRecord('invoice',invoiceId);
     					
     					for(var line = 0; line < invoiceRecords.length; line++){
              			  
              			  var itemid = invoiceRecords[line].item;
                    		var itemsJson = getObject(itemid,validItems);
              			  if(itemsJson){
                   			 
              				loadInvoiceObj.selectNewLineItem('item');
              				loadInvoiceObj.setCurrentLineItemValue('item', 'item', itemsJson.itemid);
              				loadInvoiceObj.setCurrentLineItemValue('item', 'quantity', invoiceRecords[line].adjustqty);
              				//loadInvoiceObj.setCurrentLineItemValue('item', 'location', locationId);
              				loadInvoiceObj.setCurrentLineItemValue('item', 'amount', invoiceRecords[line].salesamount);
              				loadInvoiceObj.commitLineItem('item');
                   			 
                   		 }
              			  
              		  }
     					 nlapiLogExecution('debug','About to update invoice record');
     				 	 var invoiceId = nlapiSubmitRecord(loadInvoiceObj);
     				 	 return;
     					
     					
     					
     			}else{
     				
     				var createInvoiceObj = nlapiCreateRecord('invoice',{recordmode:'dynamic'});
            		
            		createInvoiceObj.setFieldValue('entity',Number(customer));
            		createInvoiceObj.setFieldValue('subsidiary',Number(subsidiary));
            		createInvoiceObj.setFieldValue('department',Number(department));
            		createInvoiceObj.setFieldValue('location',locationId);
            		createInvoiceObj.setFieldValue('tranid',invoiceNumber);
            		
            		
            		  for(var line = 0; line < invoiceRecords.length; line++){
            			  
            			  var itemid = invoiceRecords[line].item;
                  		var itemsJson = getObject(itemid,validItems);
            			  if(itemsJson){
                 			 
                 			 createInvoiceObj.selectNewLineItem('item');
                 			 createInvoiceObj.setCurrentLineItemValue('item', 'item', itemsJson.itemid);
                 			 createInvoiceObj.setCurrentLineItemValue('item', 'quantity', invoiceRecords[line].adjustqty);
                 			 createInvoiceObj.setCurrentLineItemValue('item', 'location', locationId);
                 			 createInvoiceObj.setCurrentLineItemValue('item', 'amount', invoiceRecords[line].salesamount);
                 			 createInvoiceObj.commitLineItem('item');
                 			 
                 		 }
            			  
            		  }
            		
            		
                	
                	
 			}
     	 
       		 	// Create Invoice for Kit Item
       		
     			
           		 
       		 
       		 
       	 }
       	 
     			
       	 var invoiceId = nlapiSubmitRecord(createInvoiceObj);
    	 nlapiLogExecution('debug','Invoice Id',invoiceId);
       	}
     				
     			
     				
     }
     				 
    }
        		
   }catch(e){
        		
        		
        		throw nlapiCreateError(e);
        		
//        		var createErrorCatcher = nlapiCreateRecord('customrecord_prg_error_catcher');
//        		createErrorCatcher.setFieldValue('name', 'Inventory Adjustment');
//        		createErrorCatcher.setFieldValue('custrecord_error_description',e);
//        		createErrorCatcher.setFieldValue('custrecord_file_name',inventoryRecords[0].filename);
//        		createErrorCatcher.setFieldValue('custrecord_internal_id',inventoryRecords[0].fileid);
//        		createErrorCatcher.setFieldValue('custrecord_message',e.message);
//        		var submitErrorCatcher = nlapiSubmitRecord(createErrorCatcher);
//        		
//        		var status = nlapiScheduleScript('customscript_create_inventory_adjustment','customdeploy_create_inventory_adjustment');
//				
//				nlapiLogExecution('debug','Status in FILE',status);
//				if(status == 'QUEUED'){
//					
//					return;
//				}
    		
        		
        		
        	} 
        		 
        		 
        		 
        	 
       
        		 
         
         nlapiLogExecution('debug','Inventory Adjustment ID ',invId);
     }
          
	
  
}

function filterJson(needle,validItems){
	
	var filteredJSON = new Array();
		for (var i = 0; i < validItems.length; i++){
			  // look for the entry with a matching `code` value
			  if (validItems[i].type == needle){
					//console.log(validItems[i].name);
				  filteredJSON.push(validItems[i].itemname);
			    
			  }
		}
		
		return filteredJSON;
}


var groupBy = function(xs, key) {
	  return xs.reduce(function(rv, x) {
	    (rv[x[key]] = rv[x[key]] || []).push(x);
	    return rv;
	  }, {});
	};
	



function getObject(needle,validItems){
	
	for (var i = 0; i < validItems.length; i++){
		  // look for the entry with a matching `code` value
		  if (validItems[i].itemname == needle){
				//console.log(validItems[i].name);
				return validItems[i]
		    
		  }
	}
	
	
}




function triming(a)
{
	if(a)
		var obj = a.trim();

	return obj;
}
