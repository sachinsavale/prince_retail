/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       24 Jan 2018     kollidam
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType
 *   
 * @returns {Boolean} True to continue save, false to abort save
 * 
 */

function beforeSubmit(type){
	
	var recordObj = nlapiGetNewRecord();
	var entity = recordObj.getFieldValue('entity');
	nlapiLogExecution('debug','Employee Entity',entity)
	nlapiLogExecution('debug','Type',type)
	if(type == 'xedit'){
			
			return;
			
		}
	var type = nlapiLookupField('entity',entity,'type');
	
	
	if(type == 'Employee'){
		
		var name = nlapiLookupField('employee',entity,['firstname','lastname']);
		var firstname = name.firstname;
		var lastname = name.lastname;
		var employeeName = firstname+' '+lastname;
		//alert(employeeName);
		nlapiLogExecution('debug','Employee Name',employeeName)
		recordObj.setFieldValue('memo',employeeName);
		
		
		
		
		
	}
	
if(type == 'Vendor'){
		
		var name = nlapiLookupField('vendor',entity,['firstname','lastname']);
		var firstname = name.firstname;
		var lastname = name.lastname;
		var employeeName = firstname+' '+lastname;
		//alert(employeeName);
		nlapiLogExecution('debug','Employee Name',employeeName)
		recordObj.setFieldValue('memo',employeeName);
		
		
		
		
		
}
	
}


function clientSaveRecord(){
	
	
	var entity = nlapiGetFieldValue('entity');
	var type = nlapiLookupField('entity',entity,'type');
	if(type == 'Employee'){
		
		var name = nlapiLookupField('employee',entity,['firstname','lastname']);
		var firstname = name.firstname;
		var lastname = name.lastname;
		var employeeName = firstname+' '+lastname;
		//alert(employeeName);
		nlapiSetFieldValue('memo',employeeName);
		
		
		
		
		
	}
	
if(type == 'Vendor'){
		
		var name = nlapiLookupField('vendor',entity,['firstname','lastname']);
		var firstname = name.firstname;
		var lastname = name.lastname;
		var employeeName = firstname+' '+lastname;
		//alert(employeeName);
		nlapiSetFieldValue('memo',employeeName);
		
		
		
		
		
}

	
    return true;
}
