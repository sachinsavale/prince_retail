/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       04 Sep 2017     Raksha Singh
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
function workflowAction_createVendorCredit(type){
	nlapiLogExecution('Debug','type',type);
	if(type == 'delete')
		return true;

	var RecId = nlapiGetRecordId();
	nlapiLogExecution('Debug','RecId',RecId);

	var RecType=nlapiGetRecordType();
	nlapiLogExecution('Debug','RecType',RecType);

	var writeCheckRecord = nlapiLoadRecord(RecType,RecId);
	
	
	var checkAccount=writeCheckRecord.getFieldValue('account');
	nlapiLogExecution('Debug', 'checkAccount', checkAccount);

	var payee=writeCheckRecord.getFieldValue('entity');
	var currency = writeCheckRecord.getFieldValue('currency');
	var tranDate =writeCheckRecord.getFieldValue('trandate');
	var buTeam = writeCheckRecord.getFieldValue('department');
	var projectClass = writeCheckRecord.getFieldValue('class');
	nlapiLogExecution('DEBUG','Record Details = payee=',payee+'currency='+currency+'tranDate='+tranDate+'department='+buTeam+'class='+projectClass);

	var count = writeCheckRecord.getLineItemCount('expense');
	nlapiLogExecution('DEBUG','count',count);

	var subsidiary=writeCheckRecord.getFieldValue('subsidiary');
	nlapiLogExecution('DEBUG','subsidiary',subsidiary);

	var ponumber=writeCheckRecord.getFieldValue('custbody_ponumber');
	nlapiLogExecution('DEBUG','ponumber',ponumber);

	var poamount=writeCheckRecord.getFieldValue('custbody_poamount');
	nlapiLogExecution('DEBUG','poamount',poamount);

	var advpercent=writeCheckRecord.getFieldValue('custbody_advancepercentage');
	nlapiLogExecution('DEBUG','advpercent',advpercent);

	//Create Vendor Credit
	var VendorCreditRecord=nlapiCreateRecord('vendorcredit');
	nlapiLogExecution('DEBUG','VendorCreditRecord =',VendorCreditRecord);
	VendorCreditRecord.setFieldValue('entity',payee);
	VendorCreditRecord.setFieldValue('currency',currency);
	VendorCreditRecord.setFieldValue('tranDate',tranDate);
	VendorCreditRecord.setFieldValue('department',buTeam);
	VendorCreditRecord.setFieldValue('class',projectClass);
	VendorCreditRecord.setFieldValue('subsidiary',subsidiary);
	VendorCreditRecord.setFieldValue('custbody_ponumber',ponumber);
	VendorCreditRecord.setFieldValue('custbody_poamount',poamount);
	VendorCreditRecord.setFieldValue('custbody_advancepercentage',advpercent);
	VendorCreditRecord.setFieldValue('custbody_relatedvendorcr_ck',RecId);

	if(count > 0){
		
		for(var i = 1; i <= count; i++){
			
			var account=writeCheckRecord.getLineItemValue('expense','account',i);
			nlapiLogExecution('DEBUG','account =',account);	
			var amount=writeCheckRecord.getLineItemValue('expense','amount',i);
			nlapiLogExecution('DEBUG','amount =',amount);
			var taxCode =writeCheckRecord.getLineItemValue('expense','taxcode',i);
			nlapiLogExecution('DEBUG','taxCode =',taxCode);
			var lineDept  = writeCheckRecord.getLineItemValue('expense','department',i);
			var lineClass  = writeCheckRecord.getLineItemValue('expense','class',i);		

			VendorCreditRecord.selectNewLineItem('expense');
			VendorCreditRecord.setCurrentLineItemValue('expense','account',account);
			VendorCreditRecord.setCurrentLineItemValue('expense','amount',amount);
			VendorCreditRecord.setCurrentLineItemValue('expense','taxcode',taxCode);
			if(lineDept!= null || lineDept !='')
			{
				VendorCreditRecord.setCurrentLineItemValue('expense', 'department',lineDept);
			}

			if(lineClass!= null || lineClass !='')
			{
				VendorCreditRecord.setCurrentLineItemValue('expense', 'class',lineClass);
			}
			VendorCreditRecord.commitLineItem('expense');
		}

		nlapiLogExecution('Debug', 'Submit Record', 'check');
		var submitRecord = nlapiSubmitRecord(VendorCreditRecord,true);
		nlapiLogExecution('Debug', 'Submit Record', submitRecord);
		
		if(submitRecord)
			nlapiSubmitField(RecType,RecId,'custbody_relatedvendorcr_ck',submitRecord);


	}

}
