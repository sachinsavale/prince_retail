/**
 * @NApiVersion 2.x
 * @NScriptType UserEventScript
 * @NModuleScope SameAccount
 */
define(['N/record','N/format','N/runtime','N/error'],

function(record,format,runtime,error) {
	
	var RENT = '384014';	
	
	
   
    /**
     * Function definition to be triggered before record is loaded.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.newRecord - New record
     * @param {string} scriptContext.type - Trigger type
     * @param {Form} scriptContext.form - Current form
     * @Since 2015.2
     * 
     * var companyInfo = nlapiLoadConfiguration('companyinformation'); //Load company information
		var companyTimeZone = companyInfo.getFieldValue('timezone'); //Get the company time zone
		var myDate = new Date("August 8, 1977 12:01:00")
		var myDate = nlapiDateToString(myDate, 'datetimetz');
		
		record.setDateTimeValue('custentity_datetime', myDate, companyTimeZone); //Set the date/time field using the company time zone setting
		
		nlapiSubmitRecord(record);
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
    	
    	var currentRecordObj =  scriptContext.newRecord;
    	if(scriptContext.type == scriptContext.UserEventType.DELETE || scriptContext.type == scriptContext.UserEventType.EDIT || scriptContext.type == scriptContext.UserEventType.XEDIT ){
    		
    		return;
    	}
    	var billStartDate  = new Date(currentRecordObj.getValue('custrecord_billstartdate')); 
    	var billEndDate = currentRecordObj.getValue('custrecord_billingenddate'); 
    	billEndDate = new Date(billEndDate);
      
    	var lastdateOfTheMonth = new Date(billStartDate.getFullYear(), billStartDate.getMonth() + 1, 0);
    	currentRecordObj.setValue('custrecord_billingenddate',lastdateOfTheMonth);
//    	if(billEndDate != lastdateOfTheMonth){
//    		
//    		  var errorObj =  error.create({
//    	            name: 'Notice',
//    	            message: 'Invalid End Date.',
//    	            notifyOff: true
//    	        });
//    		  
//    		  throw errorObj.message;
//    		
//    	}
    	
    	
    	
    	
    	
    	

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
    	
    	log.audit('Record Type',scriptContext.newRecord.type);
    	var recordType = scriptContext.newRecord.type;
    	if(scriptContext.type == scriptContext.UserEventType.DELETE || scriptContext.type == scriptContext.UserEventType.EDIT || scriptContext.type == scriptContext.UserEventType.XEDIT ){
    		
    		return;
    	}
    	
    	log.audit('Execution Type',scriptContext.type);
    	
    	
//    	var configRecObj = config.load({
//    	    type: config.Type.COMPANY_INFORMATION
//    	});
//    	
//    	var timzone = configRecObj.getValue('timezone');
//    	log.debug('Timezone',timzone);
//    	
    	
    	
    	
    	var currentRecordObj =  scriptContext.newRecord;
    	log.debug('Percent',currentRecordObj.getValue('custrecord_escalation_percent'));
    	var INCREMENT = currentRecordObj.getValue('custrecord_escalation_percent');
    	
    	var billingRef = currentRecordObj.getValue('custrecord_billingreference');
    	var billingOccurence = currentRecordObj.getValue('custrecord_billingoccurrence');
    	var parentBillingRef = currentRecordObj.getValue('custrecord_contractref');
    	var billStartDate  = currentRecordObj.getValue('custrecord_billstartdate'); 
    	
    	var lastMonthDate = new Date(billStartDate);
    	var billingLastDate = lastMonthDate.getDate();
    	
    	var lastdateOfTheMonth = new Date(billStartDate.getFullYear(), billStartDate.getMonth() + 1, 0);
    	currentRecordObj.setValue('custrecord_billingenddate',lastdateOfTheMonth);
    	
    	var billEndDate = currentRecordObj.getValue('custrecord_billingenddate');
    	var currentEndDate = new Date(billEndDate);
    	billStartDate =  currentEndDate.setDate(currentEndDate.getDate()+1);
    	
    	
    	var billingItem = currentRecordObj.getValue('custrecord_billingitem');
    	var billingAmount = currentRecordObj.getValue('custrecord_billamount');
    	var proRated =  currentRecordObj.getValue('custrecord_prorated');
    	var firstMonthAmt = currentRecordObj.getValue('custrecord_firstmonthamt');
    	var lastMonthAmt = currentRecordObj.getValue('custrecord_lastmonthamt');
    	
    	var proRated = currentRecordObj.getValue('custrecord_prorated');
    	
    	var dateObj = new Date(billEndDate);
    	log.debug('Current Date Obj',dateObj);
    	
    	
    	var nextDate = new Date(dateObj.setDate(dateObj.getDate()+1));
    	log.debug('Billing Next Date',nextDate);
    
    	var billingRefCount = Number(billingRef) + 1;
    	var now = new Date();
		var year = now.getFullYear();
		var monthCount = 1; 
		var LAST_MONTH = 11;
    	if(billingOccurence > 1){
    		
    		var lastRecord = Number(billingOccurence) - 1;
    		for(var i = 1; i < billingOccurence; i++){
    			
    			
    			
    			
    			var counter = i;
        	//	var year = now.getFullYear() + counter;
        		if(INCREMENT && monthCount > LAST_MONTH ){
    				
    				var amountPercent = Number((INCREMENT/100)*Number(billingAmount));
    				log.debug('Amount Percent',amountPercent);
    				billingAmount = billingAmount + amountPercent;
    				
    				
    				
    				 
    				
    			}
        		
        		if(INCREMENT && monthCount > LAST_MONTH){
    				
    				monthCount = 1;
    				
    			}
        		

        		if(INCREMENT && i > 12){
    				
    				LAST_MONTH = 12;
    				
    			}
        		
        		var createRecord = record.create({type:'customrecord_contractbillingschedule',isDynamic: true});
        		createRecord.setValue('custrecord_billingreference',billingRefCount);
        		createRecord.setValue('custrecord_contractref',parentBillingRef);
        		createRecord.setValue('custrecord_billingoccurrence',billingOccurence);
        		var lastDayTemp = new Date(nextDate);
        		var lastDateString = parseAndFormatDateString(lastDayTemp);
        		
        		
        		log.debug('Last Date String',lastDateString);
        		
        		var finalLastDate = new Date(lastDateString);
        		var date = finalLastDate.getDate();
        		if(date == 1){
        			
        			var monthDate = new Date(finalLastDate.getFullYear(), finalLastDate.getMonth() + 1, 0);
        			
        		}else{
        			
        			var monthDate = add_months(finalLastDate,1);
        			
        		}
        		
        		log.debug('Last Date 	',monthDate);
        		createRecord.setValue('custrecord_billstartdate',nextDate);
        		
        		createRecord.setValue('custrecord_billingenddate',monthDate);
        		createRecord.setValue('custrecord_billingitem',billingItem);
        		createRecord.setValue('custrecord_billamount',billingAmount);
        		//createRecord.setValue('custrecord_contractref',parentBillingRef);
        		//createRecord.setValue('custrecord_contractref',parentBillingRef);
        		
        		var recordId = createRecord.save();
        		
        		log.debug('Record ID',recordId);
        		var currentEndDate = new Date(monthDate);
        		nextDate = new Date(currentEndDate.setDate(currentEndDate.getDate()+1));
        		
        		billingRefCount++;
        		monthCount++;
        		
        		if(lastRecord == i && billingLastDate > 1){
        			
        			log.debug('LAST Date',monthDate.getFullYear()+'@@'+monthDate.getMonth()+'@@'+lastMonthDate);
        			log.audit('LAST RECORD');	
        			var lastDate = new Date(monthDate.getFullYear(),monthDate.getMonth(),billingLastDate);
        		
        			record.submitFields({type:recordType,id:recordId,
        				values:{'custrecord_lastmonthamt':lastMonthAmt,'custrecord_prorated':true,'custrecord_billingenddate':lastDate}})
        		}
        			
        			
        		
        		
        		
    			
    			
    		}
    		
    		
    	}
    	
    	

    }
    
function parseAndFormatDateString(myDate) {
    	
        var initialFormattedDateString = myDate;
        var parsedDateStringAsRawDateObject = format.parse({
            value: initialFormattedDateString,
            type: format.Type.DATE,
            
        });
       
        var formattedDateString = format.format({
            value: parsedDateStringAsRawDateObject,
            type: format.Type.DATE,
            
        });
        return formattedDateString;
    }

    return {
        beforeLoad: beforeLoad,
        beforeSubmit: beforeSubmit,
        afterSubmit: afterSubmit
    };
    
});






function getDate1(date){
	
	date = date.toString();
	if(date.length == 1){
		
		date = '0'+date;
		return date
	}else{
		
		return Number(date);
	}
	
	
	
	
}

function add_months(dt, n) 
{

  return new Date(dt.setMonth(dt.getMonth() + n));      
}
