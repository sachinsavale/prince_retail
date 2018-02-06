/**
 * @NApiVersion 2.x
 * @NScriptType UserEventScript
 * @NModuleScope SameAccount
 */
define(['N/search','N/record'],

function(search,record) {
   
    /**
     * Function definition to be triggered before record is loaded.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.newRecord - New record
     * @param {string} scriptContext.type - Trigger type
     * @param {Form} scriptContext.form - Current form
     * @Since 2015.2
     */
    function beforeLoad(scriptContext) {

    }

    /**
     * Function definition to be triggered before record is loaded.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.newRecord - New record
     * @param {Record} scriptContext.oldRecord - Old record
     * @param {string} scriptContext.type - Trigger type
     * @Since 2015.2
     */
    function beforeSubmit(scriptContext) {

    }

    /**
     * Function definition to be triggered before record is loaded.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.newRecord - New record
     * @param {Record} scriptContext.oldRecord - Old record
     * @param {string} scriptContext.type - Trigger type
     * @Since 2015.2
     */
    function afterSubmit(scriptContext) {
    	
    	var currentRecordObj = scriptContext.newRecord;
    	var currentRecordId = currentRecordObj.id;
    	var item_id = '';
    	var isUnit = 'T';
    	var isItem = 'T';
    	var item_not_found = "Item Not Found";
    	if(scriptContext.type == scriptContext.UserEventType.DELETE || scriptContext.type == scriptContext.UserEventType.EDIT){
    		return;
    	}
    	
    	var item_name = currentRecordObj.getValue({fieldId:'custrecord_transferorder_item_name'});
    	var subsidiary_text = currentRecordObj.getValue({fieldId:'custrecord_transferorder_subsidiary_text'});
    	var item = currentRecordObj.getValue({fieldId:'custrecord_transferorder_item_item'});
		var transfer_price = currentRecordObj.getValue({fieldId:'custrecord_transferorder_item_transferpr'});
		var unit = currentRecordObj.getValue({fieldId:'custrecord_transferorder_item_units'});
		var subsidiary = currentRecordObj.getValue({fieldId:'custrecord_transferorder_subsidiary'});
		var class1 = currentRecordObj.getValue({fieldId:'custrecord_transferorder_class'});
		var fromlocation = currentRecordObj.getValue({fieldId:'custrecord_transferorder_fromlocation'});
		var tolocation = currentRecordObj.getValue({fieldId:'custrecord_transferorder_tolocation'});
		var department = currentRecordObj.getValue({fieldId:'custrecord_transferorder_department'});
		var date = currentRecordObj.getValue({fieldId:'custrecord_transferorder_date'});
		var memo = currentRecordObj.getValue({fieldId:'custrecord_transferorder_memo'});
		var quantity =currentRecordObj.getValue({fieldId:'custrecord_transferorder_item_quantity'}); 
		
    	var tranid = currentRecordObj.getValue({fieldId:'custrecord_transferorder_number'});
    	
    	 
    	
    	//==========FOR LINE ITEMS=============================//
    	
    	var item = currentRecordObj.getValue('custrecord_transferorder_item_item');
		var transfer_price = currentRecordObj.getValue('custrecord_transferorder_item_transferpr');
		var units = currentRecordObj.getValue('custrecord_transferorder_item_units');
		var quantity =currentRecordObj.getValue('custrecord_transferorder_item_quantity');
		
				//===============================================//
		
    	var base_unit = currentRecordObj.getValue({fieldId:'custrecord_transferorder_unit_name'});
    	base_unit = base_unit.toString();
    	log.debug('Base Unit',base_unit);
    	var order_number = currentRecordObj.getValue({fieldId:'custrecord_transferorder_item_name'});
    	
    	//===============Item Search=========================================//
        var itemfilter = new Array();
        var itemcolumn = new Array();
        
        itemfilter.push(search.createFilter({
            name : 'itemid',
            operator : search.Operator.IS,
            values :  item_name
        }));
        
        itemcolumn.push(search.createColumn({
 			name: 'unitstype'
 		}));
        
        
        var search_results = search.create({
				            	"type": "inventoryitem",
					            "filters":itemfilter,
					             "columns":itemcolumn
				            }).run().getRange({start : 0, end : 1});
        log.debug('Search length',search_results.length);
        var search_length = search_results.length;
        if(search_length == 1){
        	
        	 item_id = search_results[0].id;
        	 var unit_name = search_results[0].getText('unitstype');
        	 
        	

        	 
        	  record.submitFields({
  	    	    type: 'customrecord_transfer_order',
  	    	    id: currentRecordId,
  	    	    values: {
  	    	        'custrecord_transferorder_item_item': item_id
  	    	    },
  	    	    options: {
  	    	        enableSourcing: false,
  	    	        ignoreMandatoryFields : true
  	    	    }
  	    	});
        	
        }else{
        	
        	// create error for item not found
        	isItem = 'F';
        	var createErrorObj = record.create({type:'customrecord_prg_error_catcher'});
        	
        	createErrorObj.setValue({fieldId:'name',value:'Transfer Order'});
        	createErrorObj.setValue({fieldId:'custrecord_item_name',value:item_name});
        	createErrorObj.setValue({fieldId:'custrecord_message',value:item_not_found});
        	createErrorObj.setValue({fieldId:'custrecord_transaction_number',value:order_number});
        	
        	createErrorObj.save();
        	
        	record.submitFields({
  	    	    type: 'customrecord_transfer_order',
  	    	    id: currentRecordId,
  	    	    values: {
  	    	        'custrecord_transferorder_itemnotfound': true
  	    	    },
  	    	    options: {
  	    	        enableSourcing: false,
  	    	        ignoreMandatoryFields : true
  	    	    }
  	    	});
        	
        	
        	
    //====================Item Validate End==================================================//    	
        
      
        	
        }
        
        
      //===============Subsidiary Search=========================================//
        var subs_filter = new Array();
        var subs_column = new Array();
        
        subs_filter.push(search.createFilter({
            name : 'legalname',
            operator : search.Operator.IS,
            values :  'Prince Warehouse Club Inc'
        }));
        
       
        
        
        var subsidiary_result = search.create({
				            	"type": "subsidiary",
					            "filters":subs_filter,
					             "columns":subs_column
				            }).run().getRange({start : 0, end : 1});
        log.debug('Search length',subsidiary_result.length);
        
        if(subsidiary_result && subsidiary_result.length == 1){
        	var subsidiary_id = subsidiary_result[0].id;
        	log.debug('Subsidiary ID',subsidiary_id);
        	
        }
        
        
        if(!item_id){
        	
//        	record.submitFields({
//  	    	    type: 'customrecord_transfer_order',
//  	    	    id: currentRecordId,
//  	    	    values: {
//  	    	        'custrecord_transferorder_unitnotfound': true
//  	    	    },
//  	    	    options: {
//  	    	        enableSourcing: false,
//  	    	        ignoreMandatoryFields : true
//  	    	    }
//  	    	});
//        	
        	return;
        }
        //========================== UOM Filters==============================//  
        var uom_filters = new Array();
        var uom_columns = new Array();
   
        uom_filters.push(search.createFilter({
            name : 'name',
            operator : search.Operator.IS,
            values :  unit_name
        }));
        
        
        uom_filters.push(search.createFilter({
            name : 'abbreviation',
            operator : search.Operator.IS,
            values :  base_unit
        }));
        
       
        var uom_search_results = search.create({
					        	"type": "unitstype",
					            "filters":uom_filters,
					             "columns":uom_columns
					        }).run().getRange({start : 0, end : 1});
        log.debug('Unit name',unit_name);
        log.debug('units search count',JSON.stringify(uom_search_results));
        if(uom_search_results && uom_search_results.length == 1){
        	
        	log.debug('UOM FOUND');
        	var uomid = uom_search_results[0].id;
        	var loaduom = record.load({type:'unitstype',id:uomid});
        	var count = loaduom.getLineCount({sublistId:'uom'});
        	for(var m=0; m < count; m++){
        		
        		var abbreviation = loaduom.getSublistValue({sublistId:'uom',fieldId:'abbreviation',line:m});
        		abbreviation = abbreviation.toString();
        		log.debug('BASE UNIT',base_unit);
        		log.debug('Abbreviation',abbreviation);
        		if(base_unit === abbreviation){
        			
        			var unitId = loaduom.getSublistValue({sublistId:'uom',fieldId:'internalid',line:m});
        			log.debug('Unit ID',unitId);
        			//var unitName = abbreviation
        			
        		}
        		
        	}
        	
        	
        	
        	
        }else{
        	
        	isUnit = 'F';
        	log.debug('UOM Not Found');
        	// create error for unit not found
        	var createErrorObj = record.create({type:'customrecord_prg_error_catcher'});
        	
        	createErrorObj.setValue({fieldId:'name',value:'Transfer Order'});
        	createErrorObj.setValue({fieldId:'custrecord_item_name',value:unit_name});
        	createErrorObj.setValue({fieldId:'custrecord_message',value:'Unit not found'});
        	createErrorObj.setValue({fieldId:'custrecord_transaction_number',value:order_number});
        	
        	createErrorObj.save();
        	
        	record.submitFields({
  	    	    type: 'customrecord_transfer_order',
  	    	    id: currentRecordId,
  	    	    values: {
  	    	        'custrecord_transferorder_unitnotfound': true
  	    	    },
  	    	    options: {
  	    	        enableSourcing: false,
  	    	        ignoreMandatoryFields : true
  	    	    }
  	    	});
        	
        	
        }
        
       //======================UOM END=====================================================//
        
        //===========================Save Items JSON========================//
        
        
        var to_filter = new Array();
        var to_columns = new Array();
   
        to_filter.push(search.createFilter({
            name : 'tranid',
            operator : search.Operator.IS,
            values :  tranid
        }));
           
    var customrecord_search = search.create({
				        	"type": "transferorder",
				            "filters":to_filter,
				            "columns":to_columns
				        }).run().getRange({start : 0, end : 1});
    
        log.debug('Transfer Order Search Results',JSON.stringify(customrecord_search));
        if(customrecord_search[0]){
        	
        	var recordid = customrecord_search[0].id;
        	var unit_flag = customrecord_search[0].getValue('custrecord_transferorder_unitnotfound');
        	var item_flag = customrecord_search[0].getValue('custrecord_transferorder_itemnotfound');
        	
        	log.debug('Record ID',recordid);
        	if(isUnit == 'T')
        	{
        		var item = search.lookupFields({
					type:'customrecord_transfer_order',
					id:currentRecordId,
					columns:'custrecord_transferorder_item_item'
				
				}).custrecord_transferorder_item_item[0].value;
        			log.debug('Item ID UPDATE',item);
        		
        		
        			log.debug('Transfer Order','Update Transfer Order');
        			var tranferorderObj = record.load({
						    type: record.Type.TRANSFER_ORDER,
						    id:recordid,
						    isDynamic: true
						   
						});
						
						tranferorderObj.setValue({
				            fieldId: 'subsidiary',
				            value: subsidiary
				        });
				        
				        tranferorderObj.setValue({
				            fieldId: 'location',
				            value: fromlocation
				        });
				        
				        tranferorderObj.setValue({
				            fieldId: 'transferlocation',
				            value:tolocation
				        });
				        
				        tranferorderObj.setValue({
				            fieldId: 'date',
				            value: date
				        });
				        
				         tranferorderObj.setValue({
				            fieldId: 'memo',
				            value: memo
				        });
				        
				          tranferorderObj.setValue({
				            fieldId: 'useitemcostastransfercost',
				            value: true
				        });

				        
				        tranferorderObj.selectNewLine({
				                sublistId: 'item'
				            });
					
        			
        		        tranferorderObj.setCurrentSublistValue({
							    sublistId: 'item',
							    fieldId:'item',
							    value:item
							});
							
						 tranferorderObj.setCurrentSublistValue({
							    sublistId: 'item',
							    fieldId:'quantity',
							    value:quantity
							});
							
						 tranferorderObj.setCurrentSublistValue({
							    sublistId: 'item',
							    fieldId:'units',
							    value:unitId
							});
							
							
						tranferorderObj.commitLine({
					               sublistId: 'item'
					        });
    	
    				var toid = tranferorderObj.save();
    				if(toid){
						
						record.submitFields({
			  	    	    type: 'customrecord_transfer_order',
			  	    	    id: currentRecordId,
			  	    	    values: {
			  	    	        'custrecord_transferorder_created': true
			  	    	    },
			  	    	    options: {
			  	    	        enableSourcing: false,
			  	    	        ignoreMandatoryFields : true
			  	    	    }
			  	    	});
						
						log.debug('Transfet Order Id',toid);
					}
    					
    					
		    	
		    	
        		
        		
        	}
        	
        }else{    		// Create new Record for transfer order
		if(isUnit == 'T' && isItem == 'T')
		{
			
			var item = search.lookupFields({
							type:'customrecord_transfer_order',
							id:currentRecordId,
							columns:'custrecord_transferorder_item_item'
						
						}).custrecord_transferorder_item_item[0].value;
			log.debug('Item ID',item);
    		log.debug('Create Record');
    		var tranferorderObj = record.create({
					    type: record.Type.TRANSFER_ORDER,
					    isDynamic: true
					});
					
						tranferorderObj.setValue({
			            fieldId: 'subsidiary',
			            value:subsidiary
			        });
			        
			        tranferorderObj.setValue({
			            fieldId: 'location',
			            value: fromlocation
			        });
			        
			        tranferorderObj.setValue({
			            fieldId: 'transferlocation',
			            value: tolocation
			        });
			        
			        tranferorderObj.setValue({
			            fieldId: 'date',
			            value: date
			        });
			        
			         tranferorderObj.setValue({
			            fieldId: 'memo',
			            value:memo 
			        });
			        
			          tranferorderObj.setValue({
			            fieldId: 'useitemcostastransfercost',
			            value: true
			        });

			        
			        tranferorderObj.selectNewLine({
			                sublistId: 'item'
			            });
				
    			
    		        tranferorderObj.setCurrentSublistValue({
						    sublistId: 'item',
						    fieldId:'item',
						    value:item
						});
						
					 tranferorderObj.setCurrentSublistValue({
						    sublistId: 'item',
						    fieldId:'quantity',
						    value:quantity
						});
						
					 tranferorderObj.setCurrentSublistValue({
						    sublistId: 'item',
						    fieldId:'units',
						    value:unitId
						});
						
						
					tranferorderObj.commitLine({
				               sublistId: 'item'
				        });	
					
					
					  tranferorderObj.setValue({
				            fieldId: 'tranid',
				            value: tranid
				        });
				var toid = tranferorderObj.save();
				
					if(toid){
						
						record.submitFields({
			  	    	    type: 'customrecord_transfer_order',
			  	    	    id: currentRecordId,
			  	    	    values: {
			  	    	        'custrecord_transferorder_created': true
			  	    	    },
			  	    	    options: {
			  	    	        enableSourcing: false,
			  	    	        ignoreMandatoryFields : true
			  	    	    }
			  	    	});
						
						log.debug('Transfet Order Id',toid);
					}
					
					
				}
	
	
	
	
	} 
        
        //===========================================end==========================================
         	

    }    

    return {
    //    beforeLoad: beforeLoad,
   //     beforeSubmit: beforeSubmit,
        afterSubmit: afterSubmit
    };
    
});
