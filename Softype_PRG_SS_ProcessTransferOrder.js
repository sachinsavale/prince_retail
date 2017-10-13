/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       13 Sep 2017     Sachin Savale
 *
 */

/**
 * @param {String} type Context Types: scheduled, ondemand, userinterface, aborted, skipped
 * @returns {Void}
 */
function scheduled(type) {
	
	nlapiLogExecution('debug','Type',type);
	var searchResults = nlapiSearchRecord(null,'customsearch_transfer_order_customsearch',null,null);
	var search_length = searchResults.length;
	nlapiLogExecution('debug','Search Count',search_length);
	for(var i = 0 ; i < search_length; i++){
		
		var getAllColumns = searchResults[i].getAllColumns();
		var tranid = searchResults[i].getValue(getAllColumns[0]);
	 	var to_filter = new Array();
        var to_columns = new Array();
	   
        
        to_filter.push(new nlobjSearchFilter('tranid',null,'is',tranid));  
	    var to_search = nlapiSearchRecord('transferorder',null,to_filter,to_columns);
	   
	    
		nlapiLogExecution('debug','Transaction ID',tranid);	
		
		var to_filters = [];
		var to_columns = [];
		to_filters.push(new nlobjSearchFilter('custrecord_transferorder_number',null,'is',tranid));
		to_filters.push(new nlobjSearchFilter('custrecord_transferorder_itemnotfound',null,'is','F'));
		//to_filters.push(new nlobjSearchFilter('custrecord_transferorder_unitnotfound',null,'is','F'));
		to_filters.push(new nlobjSearchFilter('isinactive',null,'is','F'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_subsidiary'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_class'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_fromlocation'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_tolocation'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_department'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_date'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_memo'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_item_item'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_item_transferpr'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_item_units'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_item_quantity'));
		to_columns.push(new nlobjSearchColumn('custrecord_transferorder_number'));
		
		var to_search_results = nlapiSearchRecord('customrecord_transfer_order',null,to_filters,to_columns);
		nlapiLogExecution('debug','to search results',JSON.stringify(to_search_results));
		var count = to_search_results.length;

		var lineItems = new Array();
		var recordsIds = new Array();
		for(var j = 0; j < count; j++){
			
			var recordId = to_search_results[j].id;
			
			recordsIds.push({
				
				internalid:recordId
			});
			
			if(j == 0){
				
				var subsidiary = to_search_results[j].getValue('custrecord_transferorder_subsidiary');
				var class1 = to_search_results[j].getValue('custrecord_transferorder_class');
				var fromlocation = to_search_results[j].getValue('custrecord_transferorder_fromlocation');
				var tolocation = to_search_results[j].getValue('custrecord_transferorder_tolocation');
				var department = to_search_results[j].getValue('custrecord_transferorder_department');
				var date = to_search_results[j].getValue('custrecord_transferorder_date');
				var memo = to_search_results[j].getValue('custrecord_transferorder_memo');
				var quantity =to_search_results[j].getValue('custrecord_transferorder_item_quantity'); 
				var transactionid = to_search_results[j].getValue('custrecord_transferorder_number');
			}
			
			//============== line fields=====================//
			var item = to_search_results[j].getValue('custrecord_transferorder_item_item');
			var transfer_price = to_search_results[j].getValue('custrecord_transferorder_item_transferpr');
			var units = to_search_results[j].getValue('custrecord_transferorder_item_units');
			lineItems.push({
				item:item,
				transfer_price:transfer_price,
				units:units,
				quantity:quantity
			});
			
		}
		
		var transferOrderObj = new Object();
		transferOrderObj.transactionid = transactionid;
		transferOrderObj.subsidiary = subsidiary;
		transferOrderObj.class1 = class1;
		transferOrderObj.fromlocation = fromlocation
		transferOrderObj.tolocation = tolocation;
		transferOrderObj.department = department;
		transferOrderObj.date =date;
		transferOrderObj.memo = memo;
		transferOrderObj.lineitems = lineItems;
		nlapiLogExecution('debug','Transfer Order Objects',JSON.stringify(transferOrderObj));
		
		 if(!to_search){
		    	
		    	
		    	var create_to = nlapiCreateRecord('transferorder');
				
				create_to.setFieldValue('subsidiary',transferOrderObj.subsidiary);
				create_to.setFieldValue('location',transferOrderObj.fromlocation);
				create_to.setFieldValue('transferlocation',transferOrderObj.tolocation);
				create_to.setFieldValue('date',transferOrderObj.date);
				create_to.setFieldValue('memo',transferOrderObj.memo);
				create_to.setFieldValue('useitemcostastransfercost','T');
				
				var items = transferOrderObj.lineitems;
				var itemcount = items.length;
				for(var k = 0; k < itemcount; k++){
					
					var item = items[k].item;
					var unit = items[k].units;
					var quantity = items[k].quantity;
					create_to.selectNewLineItem('item');
					create_to.setCurrentLineItemValue('item','item',item);
					create_to.setCurrentLineItemValue('item','quantity',quantity);
					create_to.setCurrentLineItemValue('item','units',unit);
					create_to.setCurrentLineItemValue('item','amount',0);
					create_to.commitLineItem('item');
					
					
					
					
				}
				
				create_to.setFieldValue('tranid',transferOrderObj.transactionid);
				var to_id = nlapiSubmitRecord(create_to,true);
				
				if(to_id)
					nlapiSubmitField('transferorder',to_id,'custbody_custom_transferorder_ids',JSON.stringify(recordsIds));
				
				
				nlapiLogExecution('debug','Transfer Order Id',to_id);
				
				nlapiLogExecution('debug','recordsIds JSON',recordsIds);
				
				
				
				
		    	
		    	
		}else{
			
			nlapiLogExecution('debug','Transfer Order Created');
		}
		
		
		
		
	}
	

}
