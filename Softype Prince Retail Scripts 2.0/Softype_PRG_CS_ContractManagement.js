/**
 * @NApiVersion 2.x
 * @NScriptType ClientScript
 * @NModuleScope SameAccount
 */






define(['N/currentRecord','N/https','N/url','N/format','N/ui/message','N/search'],

function(currentRecord,https,url,format,message,search) {
	
	
	
	
	
    
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
    	
    	var submitButton = currentRecordObj.getField({
    	    fieldId: 'submitter'
    	});
    	
    	
    	
    	var linecount = currentRecordObj.getLineCount({sublistId: 'custpage_contract'});
    	
    	if(linecount > 0){
    		
    		submitButton.isDisabled = false;
        	
        	
    		
    	}else{
    		
    		submitButton.isDisabled = true;
    		
    		
    	}
    		
    	
    	
    	var startDate = getParameterByName('startDate');
    	if(startDate){
    		
    		var date = new Date(startDate);
    		currentRecordObj.setValue('custpage_startdatefield',date);
    		
    	}else{
    		//var currentDate = currentRecordObj.gettValue('custpage_startdatefield');
    		var date = new Date();
    		var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
    		currentRecordObj.setValue('custpage_startdatefield',firstDay);
    	}
    	
    	
    	
    	var lastdate = new Date(date.getFullYear(), date.getMonth() + 1, 0);
    	
    	currentRecordObj.setValue('custpage_enddatefield',lastdate);
    	
    	
    
    	
    	
    	
    	
    	
    	
    	
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
    	
    	window.onbeforeunload = null;
    	var currentRecordObj = currentRecord.get();
    	
    	if(scriptContext.fieldId == 'custpage_startdatefield'){
    		
    		//currentRecordObj.setValue('custpage_location',' ');
    		var currentDate = currentRecordObj.getValue('custpage_startdatefield');
    		if(currentDate){
    			
    			var date = new Date(currentDate);
        		var lastdate = new Date(date.getFullYear(), date.getMonth() + 1, 0);
            	
            	currentRecordObj.setValue('custpage_enddatefield',lastdate);
    			
    			
    		}
    		
    		
    		
    		
    	}
    	
    	
    	if(scriptContext.fieldId == 'custpage_subsidiary'){
        	
    		var field = currentRecordObj.getField({
    		    fieldId: 'custpage_location'
    		});
    		
    		var subsidiary = currentRecordObj.getValue('custpage_subsidiary');
    		
    		//alert('Field --> '+JSON.stringify(field));
    		
    		field.removeSelectOption({
    		    value: null,
    		}); 
    		
    		
    		var locationFilter = new Array();
    		var locationColumn = new Array();
    		
		    	if(subsidiary){
		    		
		    		locationFilter.push(search.createFilter({
		  			  name : 'subsidiary',
		                operator : search.Operator.IS,
		                values :  subsidiary
		  			
		  		}))
		    		
		    }
    		
    		
    		locationColumn.push(search.createColumn('name'));
    		
    		
    		var searchResults = search.create({'type':'location'
    			 ,'filters':locationFilter
    			 ,'columns':locationColumn
    		});
    		
    		field.insertSelectOption({
    		    value: ' ',
    		    text: ' ',
    		    isSelected: true
    		}); 
    		searchResults.run().each(function(locationRecord){
    			
    			field.insertSelectOption({
        		    value: locationRecord.id,
        		    text: locationRecord.getValue('name'),
        		    isSelected: false
        		});  
    			
    			return true;
    		});
    		
    		
    		
    		
    		
    	
    		
    		
        	
    		
    		
    		
    	}
    	
    	
    	if(scriptContext.fieldId == 'custpage_location' || scriptContext.fieldId == 'custpage_customer'){
    		
    		var location = currentRecordObj.getValue('custpage_location');
    		
    		var customer =  currentRecordObj.getValue('custpage_customer');
    		var subsidiary = currentRecordObj.getValue('custpage_subsidiary');
    		var startDate = currentRecordObj.getValue('custpage_startdatefield') //parseAndFormatDateString();
    		var endDate = currentRecordObj.getValue('custpage_enddatefield'); //parseAndFormatDateString();
    		if(!startDate){
    			
    			alert('Please enter start date');
    			//currentRecordObj.setValue('custpage_location',' ');
    			return false;
    			
    		}
    		
//    		if(!customer){
//    			
//    			alert('Please Selct Customer')
//    			return false;
//    		}
    		
    		
    		
    		if(!subsidiary){
    			
    			alert('Please Select Subsidiary');
    			//currentRecordObj.setValue('custpage_location',' ');
    			return false;
    			
    		}
    		
    		
    		
    		
    		
    		
    		
    		 var outputUrl = url.resolveScript({
        	      scriptId: 'customscript_st_contract_management',
        	      deploymentId: 1 ,
        	      returnExternalUrl:false
        	       });

        	 outputUrl+='&subsidiary='+subsidiary;
        	 outputUrl+='&startDate='+parseAndFormatDateString(startDate);
        	 outputUrl+='&endDate='+parseAndFormatDateString(endDate);
        	 outputUrl+='&location='+location;
        	 outputUrl+='&customer='+customer;
        	 outputUrl+='&action=getContracts';
//        	 var response = https.request({
//     		    method:https.Method.GET,
//     		    url:outputUrl
//
//
//     		   });
    		if(location && subsidiary && startDate ){
    			 window.open(outputUrl,'_self');
    			
    		}
        	
        	// window.removeEventListener("beforeunload");
    		
    	
    		
    		
    		
    		
    		
    		
    		
    		
    	}
    	
    	

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
    	
    	console.log('Validate Field Trigger');
    	return true;

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
    	
    	var currentRecordObj = currentRecord.get();
    	var totalSelected = [];
    	var linecount = currentRecordObj.getLineCount({sublistId:'custpage_contract'})
    	
    	if(linecount > 0){
    		
    		for(var i = 0; i < linecount; i++){
    			
    			
    			var checked = currentRecordObj.getSublistValue({sublistId:'custpage_contract',fieldId:'custpage_mark',line:i})
    			
    			if(checked){
    				totalSelected.push(checked);
    			}
    			
    		}
    		//alert(totalSelected)
    		if(totalSelected.length == 0){
    			
    			alert('Please select at lease one line item');
    			return false;
    		}else{
    			
    			var count = totalSelected.length;
    			if(count > 15){
    				
    				alert('You have selected more than 15 line items. Please select only 15 line items');
    				return false;
    				
    			}
    			
    			
    		}
    		
    	}
    	
    	var submitButton = currentRecordObj.getField({
    	    fieldId: 'submitter'
    	});
    	
    	
    	
    	submitButton.isDisabled = true;
    	
    	
    	
    	
    	
    	//alert(currentRecordObj.getValue('custpage_contractdata'));
//    	  var myMsg = message.create({
//              title: "My Title", 
//              message: "My Message", 
//              type: message.Type.CONFIRMATION
//          });
//          
//          myMsg.show(); 
    	
    	
    	
    
    	return true;
    	
    

    }
    
    
    function getContracts(){
    	alert('hello')
    	
    	var location = currentRecordObj.getValue('custpage_location');
		
		
		var subsidiary = currentRecordObj.getValue('custpage_subsidiary');
		var startDate = currentRecordObj.getValue('custpage_startdate');
		var endDate = currentRecordObj.getValue('custpage_enddatefield');
		
		
		
		 var outputUrl = url.resolveScript({
    	      scriptId: 'customscript_st_contract_management',
    	      deploymentId: 1 ,
    	      returnExternalUrl:false
    	       });

    	 outputUrl+='&subsidiary='+subsidiary;
    	 outputUrl+='&startDate='+startDate;
    	 outputUrl+='&endDate='+endDate;
    	 outputUrl+='&location='+location;
    	 outputUrl+='&action=getContracts';
    	    
		
	//	alert(outputUrl);
		
		var response = https.request({
		    method:https.Method.GET,
		    url:outputUrl


		   });
		
		alert('Response-->'+response);
		
    	
    	
    	
    	
    }
    
    /**
     * 
     * @param myDate
     * @returns formatted date in mm/dd/yyyy format
     */
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
  
  
  function getParameterByName(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, "\\$&");
	    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
	        results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}
  
function reset()
{
	 var outputUrl = url.resolveScript({
	      scriptId: 'customscript_st_contract_management',
	      deploymentId: 1 ,
	      returnExternalUrl:false
	       });
	 
	 window.open(outputUrl,'_self');
	  
	  
}
  
  
  

    return {
        pageInit: pageInit,
       fieldChanged: fieldChanged,
//        postSourcing: postSourcing,
//        sublistChanged: sublistChanged,
//        lineInit: lineInit,
//        validateField: validateField,
//        validateLine: validateLine,
//        validateInsert: validateInsert,
//        validateDelete: validateDelete,
        saveRecord: saveRecord,
        reset:reset
    };
    
});

