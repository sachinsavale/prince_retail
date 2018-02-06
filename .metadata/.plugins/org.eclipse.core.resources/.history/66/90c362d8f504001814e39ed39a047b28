/**
 * @NApiVersion 2.x
 * @NScriptType Suitelet
 * @NModuleScope SameAccount
 */
define(['N/record','N/runtime'],

function(record,runtime) {
	
	var salesOrderIds = new Array();
   
    /**
     * Definition of the Suitelet script trigger point.
     *
     * @param {Object} context
     * @param {ServerRequest} context.request - Encapsulation of the incoming request
     * @param {ServerResponse} context.response - Encapsulation of the Suitelet response
     * @Since 2015.2
     */
    function onRequest(context) {
    	
    	if(context.request.method == 'POST'){
    		
    		
    		var scriptObj = runtime.getCurrentScript();
         	log.audit("Remaining Usage of this script-->",scriptObj.getRemainingUsage());
    		log.debug('Context',JSON.stringify(context));
        	log.debug('body',context.request.body);
        	
     	
        	var recordObj = JSON.parse(context.request.body);
        	
        	
        	var contractsId = recordObj.ids;
        	var soid = recordObj.soid;
        	
        	log.debug('Contracts Array',contractsId);
        	log.audit('SOID',soid);
        	
 //---------------------Update Contract Billing Schedule record------------------------------------------------//
        	
        	var scriptObj = runtime.getCurrentScript();
         	log.audit("Remaining Usage of this script-->",scriptObj.getRemainingUsage());
         
       	
			
			for(var r = 0; r < contractsId.length; r++){
				
 				
				record.submitFields({
    	    	    type: 'customrecord_contractbillingschedule',
    	    	    id: contractsId[r],
    	    	    values: {
    	    	        'custrecord_transactiongenerated': true,
    	    	        'custrecord_sonumber':soid
    	    	    },
    	    	    options : {
    	    	        enableSourcing: false,
    	    	        ignoreMandatoryFields : true
    	    	    }
    	    	});
				
				log.debug('SCRIPT USAGE',scriptObj.getRemainingUsage());
				log.debug('SUBMIT FIELD TRIGGER')
				
				
			}
	 				
	 				
	 				
	 				
	 			
	 		//--------------------------------------------------------------------------------------//
	 			
 			
	 			
	 			
	 			
	 			
         	
         	
         	context.response.write(JSON.stringify(salesOrderIds));
         	return;
 			
 			
 			
 		
        	
    		
    		
    		
    		
    }
        	
        	
       
    	
    		
    		
 }

    

    return {
        onRequest: onRequest
    };
    
});