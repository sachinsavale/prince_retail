/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       19 Sep 2017     kollidam
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType
 * 
 * @param {String} type Operation types: create, edit, delete, xedit
 *                      approve, reject, cancel (SO, ER, Time Bill, PO & RMA only)
 *                      pack, ship (IF)
 *                      markcomplete (Call, Task)
 *                      reassign (Case)
 *                      editforecast (Opp, Estimate)
 * @returns {Void}
 */
function userEventBeforeSubmit(type){
	
	
 
}

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
function userEventAfterSubmit(type){
	
nlapiLogExecution('debug',JSON.stringify(type));
	
	if(type == 'create' || type == 'edit'){
		
		try{
			var recId = nlapiGetRecordId();
		    var currentRecordObj = nlapiGetNewRecord();
		    var accountNumber = currentRecordObj.getFieldValue('custrecord_check_bank_account')
			nlapiLogExecution('debug','Record ID',recId);
			
			nlapiLogExecution('debug','Account Number',accountNumber);
			// acctnumber
			var account_filters = new Array();
			var account_columns = new Array();
			account_filters.push(new nlobjSearchFilter('number',null,'is',accountNumber));
			account_columns.push(new nlobjSearchColumn('subsidiary'));
		//	account_columns.push(new nlobjSearchColumn('currency'));
			
			var search_bank= nlapiSearchRecord('account',null,account_filters,account_columns);
			var subsidiary = search_bank[0].getValue('subsidiary');
			nlapiSubmitField('customrecord_check_upload',recId,'custrecord_check_subsidiary',subsidiary);
			nlapiLogExecution('debug',' Bank Account Subsidiary',subsidiary);
			nlapiLogExecution('debug','Search Bank ',JSON.stringify(search_bank));
			
			
			var accountId = search_bank[0].id;
			nlapiLogExecution('debug','Account ID',accountId);
			var record = nlapiLoadRecord('customrecord_check_upload',recId);
			var accountNumber = record.getFieldValue('custrecord_check_bank_account');
			var getSubsidiary = record.getFieldValue('custrecord_check_subsidiary');
			var tranid = record.getFieldValue('custrecord_check_transaction_number');
			var merchantId = record.getFieldValue('custrecord_check_payee');
			var amount =  record.getFieldValue('custrecord_check_line_amount');
			var standardDeposit = nlapiCreateRecord('check',{recordmode: 'dynamic',entity:merchantId});
			
			//---------Set values for deposit standard record-----------------------------------//
		
			
		
			//-----------Get The Subsidiary and Currency---------------------------------------------//
		
			var tranDate = record.getFieldValue('custrecord_date');
			//var referenceId =  record.getFieldValue('custrecord_check_transaction_number');
			
		
			//-----------Start Setting the Standard Deposit Fields----------------------------------------------//
			
			standardDeposit.setFieldValue('subsidiary',getSubsidiary);
			standardDeposit.setFieldValue('account',accountId);
			
			
			
			standardDeposit.setFieldValue('custbody_check_transaction_id',tranid);
			standardDeposit.setFieldValue('tranid',tranid);
            nlapiLogExecution('debug','Subsidiary',standardDeposit.getFieldValue('subsidiary'));
            nlapiLogExecution('debug','Subsidiary ACCOUNT 123',standardDeposit.getFieldValue('account'));
			var lineAccountNumber = record.getFieldValue('custrecordcheck_line_account');
			
			var account_filters1 = new Array();
			var account_columns1 = new Array();
			account_filters1.push(new nlobjSearchFilter('number',null,'is',lineAccountNumber));
			
			
			var search_account1 = nlapiSearchRecord('account',null,account_filters1,account_columns1);
			
			var lineAccount = search_account1[0].id;
			nlapiLogExecution('debug','Line Account ID',lineAccount);
			
		
			standardDeposit.selectNewLineItem('expense');
			standardDeposit.setCurrentLineItemValue('expense','account',lineAccount);
			standardDeposit.setCurrentLineItemValue('expense','amount',amount);
			standardDeposit.commitLineItem('expense');
			
			
			var depositId = nlapiSubmitRecord(standardDeposit);
			
			nlapiLogExecution('debug','Depositid',depositId);
			
		}catch(e){
			
			var ErrorRec = nlapiCreateRecord('customrecord_prg_error_catcher');
			ErrorRec.setFieldValue('name','CHECK');
			ErrorRec.setFieldValue('custrecord_message',e.message);
			ErrorRec.setFieldValue('custrecord_error_transaction_id',tranid);
			var ErrorRec = nlapiSubmitRecord(ErrorRec,true);

			
		}
		
		
	}
	

	
	
  
}
