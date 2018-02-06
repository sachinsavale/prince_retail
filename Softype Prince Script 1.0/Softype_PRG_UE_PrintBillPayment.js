/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       21 Sep 2017     sahab_000
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType
 *   
 * @param {String} type Operation types: create, edit, view, copy, print, email
 * @param {nlobjForm} form Current form
 * @param {nlobjRequest} request Request object
 * @returns {Void}
 */
function beforeLoad_printBillPay(type, form, request){
	if(type == "view")
	{
		var recType = nlapiGetRecordType();
		var recId = nlapiGetRecordId();
		nlapiLogExecution('Debug', 'Record Details', 'recType '+recType+' recId '+recId);

		var action = '';
		
		//if(recType == 'vendorpayment')
			action = '&action=printBillPayment';
		
		if(recId != '' && recId != null) 
		{

			var loadRecord = nlapiLoadRecord(recType, recId);
			
			//url of the pdf suitelet
			var url = nlapiResolveURL('SUITELET', 'customscript_softype_prg_st_printbillpay', 'customdeploy_softype_prg_st_printbillpay');
			nlapiLogExecution('Debug', ' URL', url);
			//sending record type and id through action
			url += action;
			url += '&recId='+recId;
			url += '&recType='+recType;

			nlapiLogExecution('Debug', 'Urll', url);
			var stringScript="window.open('"+url+"','_blank','toolbar=yes, location=yes, status=yes, menubar=yes, scrollbars=yes')";
			nlapiLogExecution('Debug', 'stringScript',stringScript);
			//print button is added in the form
			var customButton = form.addButton('custpage_Vendorbill', 'Print', stringScript);
			nlapiLogExecution('Debug', 'next');


		}
		
	}

}


