/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       11 Dec 2017     Sree R
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType
 * 
 * @param {String} type Operation types: create, edit, delete, xedit,
 *                      approve, cancel, reject (SO, ER, Time Bill, PO & RMA only)
 *                      pack, ship (IF only)
 *                      dropship, specialorder, orderitems (PO only) 
 *                      paybills (vendor payments)
 * @returns {Void}
 */
 
var customform = 103;
var employee_advance = 2;
function createCheck(type)
	{
		
		nlapiLogExecution('Debug','inside function',type);
		var RecId = nlapiGetRecordId();
		nlapiLogExecution('Debug','RecId=>',RecId);
		var RecType = nlapiGetRecordType();
		nlapiLogExecution('Debug','RecType=>',RecType);
		
		var Status = nlapiGetFieldValue('custrecord_travel_status');
		nlapiLogExecution('Debug', 'Status = ',Status);
		var subsidiary = nlapiGetFieldValue('custrecord_travel_subsidiary');
		nlapiLogExecution('Debug', 'subsidiary = ',subsidiary);
		var entity = nlapiGetFieldValue('custrecord_travel_employee');
		nlapiLogExecution('Debug', 'entity = ',entity);
		var location1 = nlapiGetFieldValue('custrecord_travel_location');
		nlapiLogExecution('Debug', 'location1 = ',location1);
		var amount = nlapiGetFieldValue('custrecord_travel_budget');
		nlapiLogExecution('Debug', 'amount = ',amount);
		var printOnCheck = nlapiGetFieldValue('custrecord_travel_employeename');
		
		var fields = nlapiLookupField('subsidiary',subsidiary,['custrecord_defaultbankacc','custrecord_expensecatergory']);
		var account = fields.custrecord_defaultbankacc;
		nlapiLogExecution('Debug','account=>',account);
		var category = fields.custrecord_expensecatergory;
		nlapiLogExecution('Debug','category=>',category);
			
		var check = nlapiCreateRecord('check',{'recordmode':'dynamic','entity':entity});			
		check.setFieldValue('customform',customform);
		//check.setFieldValue('entity',entity);	
		check.setFieldValue('account',account);		
		//check.setFieldValue('subsidiary',subsidiary);			
		//check.setFieldValue('custbody_advancetype',employee_advance);//hard coded advance type field in Check Record
			
		check.setFieldValue('location',location1);
		
		check.setFieldValue('custbody_printcheck',printOnCheck);
		
		check.selectNewLineItem('expense');
		check.setCurrentLineItemValue('expense','category',category);
		check.setCurrentLineItemValue('expense','amount',amount);//hard coded amount for testing
		check.setCurrentLineItemValue('expense','taxcode',5);//hard coded taxcode for testing
		check.commitLineItem('expense');
		check.setFieldValue('custbody_prg_check_cash_adv',RecId);
		var Id = nlapiSubmitRecord(check,true);
		nlapiLogExecution('Debug','Id=>',Id);
		if(Id)
		{
		
		var checklink = nlapiSubmitField(RecType,RecId,'custrecord_prg_check_link',Id);	
		
		}			
			
	}	