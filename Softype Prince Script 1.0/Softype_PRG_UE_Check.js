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
	
	
	if(type == 'xedit'){
		
		return;
		
	}
	
	if(type =='create' || type == 'edit'){
		
		var recordObj = nlapiGetNewRecord();
		var recordType = nlapiGetRecordType();
		var entity = recordObj.getFieldValue('entity');
		var vendorname= recordObj.getFieldValue('custbody_printcheck')
		nlapiLogExecution('debug',' Entity',entity);
		var type = nlapiLookupField('entity',entity,'type');
		nlapiLogExecution('debug',' Entity Type',type);
		if(recordType == 'vendorpayment'){
			
			var vendorname= recordObj.getFieldValue('custbody_printcheck')
			if(vendorname){
				recordObj.setFieldValue('memo',vendorname);
			}
			
			return;
			
		}
		
		
		

		
		if(type == 'Employee'){
			
			var name = nlapiLookupField('employee',entity,['firstname','lastname','custentity_employeename']);
			var firstname = name.firstname;
			var lastname = name.lastname;
			var employeeName = name.custentity_employeename;
			//alert(employeeName);
			nlapiLogExecution('debug','Employee Name',employeeName)
			recordObj.setFieldValue('memo',employeeName);
			
			
			
			
			
		}
		
	if(type == 'OtherName'){
			
			var name = nlapiLookupField('othername',entity,['companyname']);
			
			var othername = name.companyname;
			//alert(employeeName);
			nlapiLogExecution('debug','Other Name',othername)
			recordObj.setFieldValue('memo',othername);
			
			
			
			
			
		}
		
	if(type == 'Vendor'){
			
//			var name = nlapiLookupField('vendor',entity,['firstname','lastname',]);
//			var firstname = name.firstname;
//			var lastname = name.lastname;
//			var employeeName = firstname+' '+lastname;
			//alert(employeeName);
			nlapiLogExecution('debug','Vendor Name',vendorname)
			recordObj.setFieldValue('memo',vendorname);
			
			
			
			
			
	}

		
		
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