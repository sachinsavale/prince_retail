/**
 * @NApiVersion 2.x
 * @NScriptType UserEventScript
 * @NModuleScope SameAccount
 */
define(['N/record','N/search','N/runtime'],

function(record,search,runtime) {
   
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
    	
    	var currentRecordObj = scriptContext.newRecord;
    	var subsidiary = currentRecordObj.getValue({fieldId:'subsidiary'});
    	var total_amount = Number(0);
    	var subsidiaries = runtime.getCurrentScript().getParameter("custscript_subsidiary_applicable_wth");
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
    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'amount',line:i,value:amount});
    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxapplies',line:i,value:true});
    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_itemdefaultwitaxcode',line:i,value:taxid});
//    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxbaseamount',line:i,value:100});
//    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxamount',line:i,value:1.00});
    			
    			
    			
    			
    		}
    		 		
    	}else{
    		
    		var line_count = currentRecordObj.getLineCount({sublistId:'item'});
    		
    		for(var i = 0; i < line_count; i++){
    			
    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_witaxapplies',line:i,value:false});
    			currentRecordObj.setSublistValue({sublistId:'item',fieldId:'custcol_4601_itemdefaultwitaxcode',line:i,value:''});
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

    }

    return {
        beforeLoad: beforeLoad,
        beforeSubmit: beforeSubmit,
        afterSubmit: afterSubmit
    };
    
});
