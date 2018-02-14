/**
 * @NApiVersion 2.x
 * @NScriptType ClientScript
 * @NModuleScope SameAccount
 */
define([],

function() {
    
    /**
     * Function to be executed after page is initialized.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.mode - The mode in which the record is being accessed (create, copy, or edit)
     *
     * @since 2015.2
     */
    function pageInit(scriptContext) {
    	

    		var currentRecordObj = scriptContext.currentRecord;
    		var startDate = currentRecordObj.getValue('custrecord_billstartdate');
    		if(startDate){
    			
    			var dateObj = new Date(startDate);
        		var lastdate = new Date(dateObj.getFullYear(), dateObj.getMonth() + 1, 0);
        		currentRecordObj.setValue('custrecord_billingenddate',lastdate);
    			
    		}
    			
    	

    }

    /**
     * Function to be executed when field is changed.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     * @param {string} scriptContext.fieldId - Field name
     * @param {number} scriptContext.lineNum - Line number. Will be undefined if not a sublist or matrix field
     * @param {number} scriptContext.columnNum - Line number. Will be undefined if not a matrix field
     *
     * @since 2015.2
     */
    function fieldChanged(scriptContext) {
    	
    	var currentRecordObj = scriptContext.currentRecord;
    	if(scriptContext.fieldId == 'custrecord_billstartdate'){
    		
    		var startDate = currentRecordObj.getValue('custrecord_billstartdate');
    		var dateObj = new Date(startDate);
    		var lastdate = new Date(dateObj.getFullYear(), dateObj.getMonth() + 1, 0);
    		currentRecordObj.setValue('custrecord_billingenddate',lastdate);
    	}
    	
    	
    	
    	if(scriptContext.fieldId == 'custrecord_minimumamt'){
    		
    		
    		
    	}
    	
    	if(scriptContext.fieldId == 'custrecord_rate'){
    		
    		var previousConsumption = currentRecordObj.getValue('custrecord_previousconsumption');
    		var currentConsumption = currentRecordObj.getValue('custrecord_currentconsumption');
    		if(!previousConsumption && previousConsumption !=0 ){
    			
    			alert('Please enter the Previous and Current Consumption');
    			currentRecordObj.setValue('custrecord_rate',' ');
    			return false;
    			
    		}else{
    			
    			var finalConsumption =  Number(currentConsumption)-Number(previousConsumption);
    			currentRecordObj.setValue('	custrecord_actualconsumption',finalConsumption); 
    			var rate = currentRecordObj.getValue('custrecord_rate');
    			var finalAmount = finalConsumption * rate;
    			currentRecordObj.setValue('custrecord_actualconsumption',finalConsumption);
    			
    			currentRecordObj.setValue('custrecord_billamount',finalAmount);
    			if(finalConsumption < 0){
    				
    				alert('Actual Consumption should not be negative');
    				return false;
    				
    			}
    			return true;
    		}
    		
    		
    		
    	}
    	
//    	if(scriptContext.fieldId == 'custrecord_actualconsumption'){
//    		
//    		alert('Actual Consumption should not be negative');
//    		
//    		return false;
//    		
//    	}
    	
    	

    }

    /**
     * Function to be executed when field is slaved.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     * @param {string} scriptContext.fieldId - Field name
     *
     * @since 2015.2
     */
    function postSourcing(scriptContext) {

    }

    /**
     * Function to be executed after sublist is inserted, removed, or edited.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     *
     * @since 2015.2
     */
    function sublistChanged(scriptContext) {

    }

    /**
     * Function to be executed after line is selected.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     *
     * @since 2015.2
     */
    function lineInit(scriptContext) {

    }

    /**
     * Validation function to be executed when field is changed.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     * @param {string} scriptContext.fieldId - Field name
     * @param {number} scriptContext.lineNum - Line number. Will be undefined if not a sublist or matrix field
     * @param {number} scriptContext.columnNum - Line number. Will be undefined if not a matrix field
     *
     * @returns {boolean} Return true if field is valid
     *
     * @since 2015.2
     */
    function validateField(scriptContext) {

    }

    /**
     * Validation function to be executed when sublist line is committed.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     *
     * @returns {boolean} Return true if sublist line is valid
     *
     * @since 2015.2
     */
    function validateLine(scriptContext) {

    }

    /**
     * Validation function to be executed when sublist line is inserted.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     *
     * @returns {boolean} Return true if sublist line is valid
     *
     * @since 2015.2
     */
    function validateInsert(scriptContext) {

    }

    /**
     * Validation function to be executed when record is deleted.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @param {string} scriptContext.sublistId - Sublist name
     *
     * @returns {boolean} Return true if sublist line is valid
     *
     * @since 2015.2
     */
    function validateDelete(scriptContext) {

    }

    /**
     * Validation function to be executed when record is saved.
     *
     * @param {Object} scriptContext
     * @param {Record} scriptContext.currentRecord - Current form record
     * @returns {boolean} Return true if record is valid
     *
     * @since 2015.2
     */
    function saveRecord(scriptContext) {
    	
    	var currentRecordObj = scriptContext.currentRecord;
    	var actualConsumption = currentRecordObj.getValue('custrecord_actualconsumption')
    	if(actualConsumption < 0){
    		
    		alert('Actual Consumption should not be negative');
    		return false;
    		
    	}
    	
    	return true;

    }
    
    function reset(){
    	
    	alert(1);
    	
    }

    return {
    	pageInit:pageInit,
        fieldChanged: fieldChanged,
        saveRecord:saveRecord
    };
    
});
