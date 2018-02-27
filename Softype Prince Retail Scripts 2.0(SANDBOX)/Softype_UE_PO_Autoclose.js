/**
 * @NApiVersion 2.x
 * @NScriptType UserEventScript
 * @NModuleScope SameAccount
 */
define(["N/record","N/log",'N/error','N/search'], function (r,log,error,search) {
   
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
    	var oldRecordObj = scriptContext.oldRecord;
    	 var getPO_Id = currentRecordObj.getValue('createdfrom');
    	  var statusObj = search.lookupFields({
    		  type:'purchaseorder',
    		  id:getPO_Id,
    		  columns:['status']
    	  });
    	  
    	  log.debug('status',statusObj.status[0].value);
    	 
    	 if(scriptContext.type == 'edit'){
    		 
    		 if(statusObj.orderstatus[0].value == 'PurchOrd:H'){
    			 
    			 var errorObj = error.create({
 					name: 'Notice',
					message: 'Purchase Order is Closed for this Item Receipt.',
					notifyOff: true
				});
    			 
    			 throw errorObj.message;
    				
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

    	
    	
      	var currentRecordObj = scriptContext.newRecord;
    	var objCurRec = JSON.parse(JSON.stringify(currentRecordObj));
    	var currentRecordId = objCurRec.id;
    	var currentRecordType = objCurRec.type;

    	log.debug('IR Id', 'Id: ' + currentRecordId);
    	log.debug('IR Type', 'Type: ' + currentRecordType);
    	
    	
        var IR =  r.load({
		            type: currentRecordType,
		            id: currentRecordId,
		            isDynamic: true, //false or nothing shows as DeferredDynamicRecord  if and true shows DynamicRecord
        });

        
        var getPO_Id = IR.getValue('createdfrom');

        var PO =  r.load({
		            type: r.Type.PURCHASE_ORDER, 
		            id: getPO_Id,
		            isDynamic: true, //false or nothing shows as DeferredDynamicRecord  and if true shows DynamicRecord
        });  
        log.debug('PO LOADED', 'PO: ' + PO);

       var getstatus = PO.getValue('status');
       log.debug('PO getstatus', 'status: ' + getstatus);
        
       var getcategory = PO.getValue('custbody_pocatergory');
       log.debug('PO getcategory', 'category: ' + getcategory);
       
	       if ((getcategory == 5 &&  getstatus == "Pending Billing/Partially Received")) {		 
	        	    
              var itemcount = PO.getLineCount({sublistId: 'item',
                                             fieldId: 'item'
            	   });
                  log.debug({ title: 'item ', details: itemcount });    
                                                         
               for(var i=0;i<itemcount;i++)
                {
                    
//	                    var itemid = PO.getSublistValue({ sublistId: 'item',
//	                                                      fieldId: 'item',
//	                                                       line: i
//	                     });
	                   

	                    PO.selectLine({ sublistId: 'item',
	                                  fieldId: 'item',
	                                  line: i
	                     });
	                   
	                    
	                    PO.setCurrentSublistValue({sublistId: 'item',
									                        fieldId: 'isclosed',
									                        value:true
                        }); 

	                    PO.commitLine({sublistId: 'item'});
           
                  }

                     
					
					//log.debug({title: 'itemid ', details: itemid });
					//log.debug({title: 'closeditem ', details: closeditem });
	                var submited = PO.save({});
				    log.debug({title: 'submited ', details: submited }); 

	         }; 
  }
    return {
        beforeLoad: beforeLoad,
        beforeSubmit: beforeSubmit,
        afterSubmit: afterSubmit
    };
    
});
