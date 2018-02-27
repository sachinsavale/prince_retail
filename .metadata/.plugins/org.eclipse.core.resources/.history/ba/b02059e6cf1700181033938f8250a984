/**
 * @NApiVersion 2.x
 * @NScriptType UserEventScript
 * @NModuleScope SameAccount
 * @Author Sachin Savale
 * Description : Script to Update and Create Store Collection to   
 */
define(['N/record','N/search'],

function(record,search) {
   
   

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
    	
    	if(scriptContext.type == scriptContext.UserEventType.DELETE)
    		return;
    	
    	
    	
    	var currentRecordObj = scriptContext.newRecord;
    	var paymentId = currentRecordObj.id;
    	var invoiceId = '';
    	var linecount = currentRecordObj.getLineCount({sublistId:'apply'});
    	log.debug('Line Count',linecount);
    	var paymentMethod = currentRecordObj.getValue({fieldId:'paymentmethod'});
    	log.debug('Payment Method',paymentMethod);
         
    	var payment = currentRecordObj.getValue({fieldId:'payment'});
    	log.debug('PAYMENT AMOUNT',payment)
    	
    	for(var i = 0; i < linecount; i++){
    		
    		var isApplied =  currentRecordObj.getSublistValue({sublistId:'apply',fieldId:'apply',line:i});
    		if(isApplied){
    			
    			invoiceId = currentRecordObj.getSublistValue({sublistId:'apply',fieldId:'internalid',line:i});
    			
    		}
    		
    	}
    	
    
    	if(invoiceId){
    		
    		var filterCollections = new Array();
        	var collectionColumns = new Array();
        	
        	filterCollections.push(search.createFilter({
                name : 'custrecord_paymentmethod',
                operator : search.Operator.IS,
                values :  paymentMethod
            }));
        	

        	filterCollections.push(search.createFilter({
                name : 'custrecord_invoicenumber',
                operator : search.Operator.IS,
                values :  invoiceId
            }));
    		
    		
        	collectionColumns.push(search.createColumn({
    			name: 'custrecord_actual_amount'
    		}));
        	
        	collectionColumns.push(search.createColumn({
    			name: 'custrecord_payment_number'
    		}));
        	
        	

//        	collectionColumns.push(search.createColumn({
//    			name: 'custrecord_gst_tax_code'
//    		}));

    		 var collectionResults = search.create({
    		            "type": "customrecord_store_collection",
    		            "filters":filterCollections,
    		             "columns":collectionColumns
    	            }).run().getRange({start : 0, end : 1});
    		 
    		 if(collectionResults[0]){
    			 
    			 var recordid = collectionResults[0].id;
    			 
    			 var actualAmount = collectionResults[0].getValue('custrecord_actual_amount');
    			 var paymentNumbers = collectionResults[0].getValue('custrecord_payment_number');
    			 log.debug('Payment Numbers',paymentNumbers);
                 if(paymentNumbers){
                	 
                	 paymentNumbers = paymentNumbers.split(',');
                	 paymentNumbers.push(paymentId);
                	 log.debug('Payment Numbers',paymentNumbers);
        			 var finalAmount = Number(actualAmount) + Number(payment);
        			 log.debug('Actual Amount',actualAmount);
        			 log.debug('Final Amount',finalAmount);
        			
        			 log.debug('custom record id of store collection',recordid);
        			 
        			  record.submitFields({
        		    	    type: 'customrecord_store_collection',
        		    	    id: recordid,
        		    	    values: {
        		    	        'custrecord_paymentmethod': paymentMethod,
        		    	        'custrecord_actual_amount':finalAmount,
        		    	        'custrecord_payment_number':paymentNumbers,  
        		    	    },
        		    	    options: {
        		    	        enableSourcing: false,
        		    	        ignoreMandatoryFields : true
        		    	    }
        		    	});
                	 
                	 
                	 
                 }else{
                	 
                	 record.submitFields({
     		    	    type: 'customrecord_store_collection',
     		    	    id: recordid,
     		    	    values: {
     		    	        'custrecord_paymentmethod': paymentMethod,
     		    	        'custrecord_actual_amount':payment,
     		    	        'custrecord_payment_number':paymentId,  
     		    	    },
     		    	    options: {
     		    	        enableSourcing: false,
     		    	        ignoreMandatoryFields : true
     		    	    }
     		    	});
                	 
                	 
                 }
    			
    			 
    		 }else{
    			 
    			 //------If Search Not Found--------------------------//
    			 log.audit('Payment Method Not Found');
    			 var createStoreObj = record.create({type:'customrecord_store_collection'});
    			 
    			 createStoreObj.setValue({
    				 fieldId:'custrecord_paymentmethod',
    				 value:paymentMethod
    			 });
    			 
    			 createStoreObj.setValue({
    				 fieldId:'custrecord_actual_amount',
    				 value:payment
    			 });
    			 
    			 createStoreObj.setValue({
    				 fieldId:'custrecord_invoicenumber',
    				 value:invoiceId
    			 });
    			 
    			 createStoreObj.setValue({
    				 fieldId:'custrecord_payment_number',
    				 value:paymentId
    			 });
    			 
    			 createStoreObj.setValue({
    				 fieldId:'custrecord_new_record',
    				 value:true
    			 });
    			 
    			 
    			var storeId = createStoreObj.save();
    			log.debug('Store ID',storeId);
    			 
    			 
    			
    			 
    		}
    			 
    		
    		
    	}
    	
    	
    	
			 
			 
			 
		 
    	
    	
    	
    	
    	

 }

    return {
        afterSubmit: afterSubmit
    };
    
});
