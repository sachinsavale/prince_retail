/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       12 Sep 2017     Raksha Singh
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
function userEventAfterSubmit(type,form){

	// button should be displayed on view mode
	if(type == 'view')
	{
		var recType = nlapiGetRecordType();
		var recId = nlapiGetRecordId();
		nlapiLogExecution('Debug', 'Record Details', 'recType '+recType+' recId '+recId);

		var action = '';
		
		if(recType == 'vendorcredit')
			action = '&action=VendorCreditPrint';
		if(recType == 'vendorbill')
			action = '&action=VendorBillPrint';
		
		if(recId != '' && recId != null) 
		{

			var loadRecord = nlapiLoadRecord(recType, recId);
			
			//url of the pdf suitelet
			var url = nlapiResolveURL('SUITELET', 'customscript_prg_st_vendor_credit', 'customdeploy_prg_st_vendor_credit');
			nlapiLogExecution('Debug', ' URL', url);

			url += action;
			url += '&recId='+recId;
			url += '&recType='+recType;

			nlapiLogExecution('Debug', 'URL 2', url);
			var stringScript="window.open('"+url+"','_blank','toolbar=yes, location=yes, status=yes, menubar=yes, scrollbars=yes')";
			nlapiLogExecution('Debug', 'stringScript',stringScript);
			//print button is added in the form
			var customButton = form.addButton('custpage_Vendorbill', 'Print', stringScript);
			nlapiLogExecution('Debug', 'next');


		}
		
	}

}



