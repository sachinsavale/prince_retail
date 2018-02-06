/* **************************************************************************************  
 ** Copyright (c) 1998-2012 Softype, Inc.                                 
 ** Morvi House, 30 Goa Street, Ballard Estate, Mumbai 400 001, India
 ** All Rights Reserved.                                                    
 **                                                                         
 ** This software is the confidential and proprietary information of          
 ** Softype, Inc. ("Confidential Information"). You shall not               
 ** disclose such Confidential Information and shall use it only in          
 ** accordance with the terms of the license agreement you entered into    
 ** with Softype.                       
 ** @author:  Sree R
 ** @version: Revised version
 ** Description:  
 ************************************************************************************** */
var subsidiary = '';
var customform = 115;
function userEventAfterSubmit(type,form)
{
		var Status = nlapiGetFieldValue('custrecord_travel_status');
		if(Status == 2 )
		{
			//form.setScript('customscript_prg_cs_check_creation');	
			form.addSubmitButton('CreateCheck');
			
		}
		else
				
			nlapiLogExecution('Debug', '401 No SO Search Results = ', 'No SO Search Results');
	
	
}

function createChecks()
	{
		
	var RecId = nlapiGetRecordId();
	var RecType = nlapiGetRecordType();
	//Load the current record
	if(type =='edit' || type =='view') 
	{		
		
		var LoadRec = nlapiLoadRecord(RecType,RecId);
		var Status = LoadRec.getFieldValue('custrecord_travel_status');
		nlapiLogExecution('Debug', 'Status = ',Status);
		var subsidiary = LoadRec.getFieldValue('custrecord_travel_subsidiary');
		nlapiLogExecution('Debug', 'subsidiary = ',subsidiary);
		var entity = LoadRec.getFieldValue('custrecord_travel_employee');
		var location1 = LoadRec.getFieldValue('custrecord_travel_location');
		nlapiLogExecution('Debug', 'entity = ',entity);
		nlapiLogExecution('Debug', 'subsidiary = ',subsidiary);	
		
			nlapiLogExecution('debug','inside function',subsidiary);
			
			var fields = nlapiLookupField('subsidiary',subsidiary,['custrecord_defaultbankacc','custrecord_expensecatergory']);
			var account = fields.custrecord_defaultbankacc;
			nlapiLogExecution('Debug','account=>',account);
			var category = fields.custrecord_expensecatergory;
			nlapiLogExecution('Debug','category=>',category);
			
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
			nlapiLogExecution('Debug','Id=>',Id);
			
			
			
	}
	
	}	
	
	


