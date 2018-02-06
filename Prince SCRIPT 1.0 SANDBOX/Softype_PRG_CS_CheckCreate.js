function createCheck()
	{
		alert('client script triggered');
	
	
	var RecType = nlapiGetRecordType();
	alert(RecType);
	//Load the current record
	//if(type =='edit' || type =='view') 
	//{		
		var RecId = nlapiGetRecordId();
	alert(RecId);
		var LoadRec = nlapiLoadRecord('customrecord_cashadvancereq',RecId);
			alert(LoadRec);
		var Status = LoadRec.getFieldValue('custrecord_travel_status');
		alert(Status);
		//nlapiLogExecution('Debug', 'Status = ',Status);
		var subsidiary = LoadRec.getFieldValue('custrecord_travel_subsidiary');
		//nlapiLogExecution('Debug', 'subsidiary = ',subsidiary);
		var entity = LoadRec.getFieldValue('custrecord_travel_employee');
		var location1 = LoadRec.getFieldValue('custrecord_travel_location');
		//nlapiLogExecution('Debug', 'entity = ',entity);
		//nlapiLogExecution('Debug', 'subsidiary = ',subsidiary);	
		
			//nlapiLogExecution('debug','inside function',subsidiary);
			
			var fields = nlapiLookupField('subsidiary',subsidiary,['custrecord_defaultbankacc','custrecord_expensecatergory']);
			var account = fields.custrecord_defaultbankacc;
			//nlapiLogExecution('Debug','account=>',account);
			var category = fields.custrecord_expensecatergory;
			//nlapiLogExecution('Debug','category=>',category);
			
			var check = nlapiCreateRecord('check',{'recordmode':'dynamic'});			
			
			check.setFieldValue('customform',customform);
			check.setFieldValue('entity',entity);			
			check.setFieldValue('subsidiary',subsidiary);
			check.setFieldValue('account',account);
			
			check.setFieldValue('location',location1);
			check.setFieldValue('custbody_advancetype',2);
			check.selectNewLineItem('expense');
			check.setCurrentLineItemValue('expense','category',category);
			check.setCurrentLineItemValue('expense','amount',1000);
			check.setCurrentLineItemValue('expense','taxcode',5);
			check.commitLineItem('expense');
			
			var Id = nlapiSubmitRecord(check);
			//nlapiLogExecution('Debug','Id=>',Id);
			
			
			
	//}
	
	}	
	