/**
 * @NApiVersion 2.x
 * @NScriptType UserEventScript
 * @NModuleScope SameAccount
 */
define(['N/record','N/runtime','N/search'],

function(record,runtime,search) {
	
	
	function beforeSubmit(scriptContext){
		
	var formids = [119];
    	var currentRecordObj = scriptContext.newRecord;
    	var currentForm = Number(currentRecordObj.getValue('customform'));
      log.debug('customform',currentForm);
    	if(formids.indexOf(currentForm) >= 0){
    		
    		return;
    		
    	}	
      
      
		if(scriptContext.type == scriptContext.UserEventType.DELETE){
    		return;
    	}
      
      	
		
		var currentRecordObj = scriptContext.newRecord;
		if(runtime.executionContext === runtime.ContextType.CSV_IMPORT)
		{
			
			log.audit('Current Record Obj',JSON.stringify(currentRecordObj));
			var totallineitem = currentRecordObj.getLineCount({sublistId: 'item'});
			log.audit('Current Record line Item Count',totallineitem);
			
			var currentRecordObj = scriptContext.newRecord;
	    	var subsidiary = currentRecordObj.getValue({fieldId:'subsidiary'});
	    	var total_amount = Number(0);
	    	var subsidiaries = runtime.getCurrentScript().getParameter("custscript__subsidiary_applicable_po_wth");
	    	//var wth_line_item = runtime.getCurrentScript().getParameter('');
	    	subsidiaries = subsidiaries.split(',');
	    	log.debug('Subsidiaries',subsidiaries);
	    	if(subsidiaries.indexOf(subsidiary) >= 0){
	    		
	    		log.debug("Apply WTH Tax");
	    		var taxid =  search.lookupFields({
				 	type : 'subsidiary',
					id   :  subsidiary,
					columns : 'custrecord_withholdingtax'
				}).custrecord_withholdingtax[0].value;
				
				log.debug('Tax ID',taxid)
	    		var line_count = currentRecordObj.getLineCount({sublistId:'item'});
	    		var last_line_no = Number(line_count) + 1;
	    		log.debug('Line Count', line_count);
	    		for(var i = 0; i < line_count; i++){
	    			
	    			// calculate amount
	    			var amount = Number(currentRecordObj.getSublistValue({sublistId:'item',fieldId:'amount',line:i}));
	    			//currentRecordObj.setSublistValue({sublistId:'item',fieldId:'amount',line:i,value:amount});
	    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxapplies',line:i,value:true});
	    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxcode',line:i,value:taxid});
	    			
	    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxrate',line:i,value:1});
	    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxbaseamount',line:i,value:amount});
	    			var rate_percentage = currentRecordObj.getSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxrate',line:i,});
	    			
	    			log.debug('Rate Percentage',rate_percentage);
	    			
	    			var wth_amount = Number(amount * (rate_percentage/100));
	    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxamount',line:i,value:-wth_amount});
	    		
	    	
	    			
	    			log.debug('wth_amount',wth_amount);
	    			
	    			
	    		}
	    		 		
	    	}else{
	    		
	    		var line_count = currentRecordObj.getLineCount({sublistId:'item'});
	    		
	    		for(var i = 0; i < line_count; i++){
	    			
	    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxapplies',line:i,value:false});
	    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_itemdefaultwitaxcode',line:i,value:''});
	    		}
	    		
	    		
	    	}
			
			
		}
		
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
    	
    	if(scriptContext.type == scriptContext.UserEventType.DELETE){
    		return;
    	}
    	
    	var currentRecordObj = scriptContext.newRecord;
    	var poid = currentRecordObj.id;
    	log.audit('Purchase order id',poid);
    	//===========For Update PO ======================================================//
    	if(scriptContext.type == scriptContext.UserEventType.EDIT){
    		
    		//======================Transform PO to Item receipt===================================//
    		
    		
    		
    	}
    	
    	
    	var totallineitem = currentRecordObj.getLineCount({sublistId: 'item'});
    	var itemsObjs = new Array();
    	for(var i = 0 ; i < totallineitem ; i++){
    		
    		var landingcost = currentRecordObj.getSublistValue({sublistId:'item',fieldId:'custcol_landingcost',line:i});
    		itemsObjs.push({'landingcost':landingcost});
    		
    	}
    	if(runtime.executionContext === runtime.ContextType.CSV_IMPORT)
    	{
    		if(scriptContext.type == scriptContext.UserEventType.CREATE){
    			
    			log.audit('CSV IMPORT');
        		log.debug('Execution type',scriptContext.type);
        		var recObj = record.transform({
        						fromType:record.Type.PURCHASE_ORDER,
        						fromId:poid,
        						toType:record.Type.ITEM_RECEIPT,
        						isDynamic:false
        					});
        		recObj.setValue({fieldId:'landedcostperline',value:true})
        		
        		for(var j = 0; j < itemsObjs.length; j++){
        		
        			var subrec = recObj.getSublistSubrecord({
                        sublistId: 'item',
                        fieldId: 'landedcost',
                        line: j
                    });

                
                    // Add a line to the subrecord's Landed Cost Data sublist.
        			if(itemsObjs[j].landingcost){
        				
        				   subrec.insertLine({
        	                    sublistId: 'landedcostdata',
        	                    line: 0
        	                });

        	            
        	                // Set values on the subrecord's sublist line.

        	                subrec.setSublistValue({
        	                    sublistId: 'landedcostdata',
        	                    fieldId: 'costcategory',
        	                    line: 0,
        	                    value: 1
        	                });

        	                subrec.setSublistValue({
        	                    sublistId: 'landedcostdata',
        	                    fieldId: 'amount',
        	                    line: 0,
        	                    value: itemsObjs[j].landingcost
        	                });

        				
        			}
                 
        			
        		}
        		     		
        		
        		
        		var itemReceiptId = recObj.save();
        		
        		log.debug('Item Receipt ID', itemReceiptId);
        		

    			
    		}
    		
    	}	
    }

    return {
        afterSubmit: afterSubmit,
        beforeSubmit:beforeSubmit
    };
    
});
