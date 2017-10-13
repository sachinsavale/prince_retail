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
		var internalId = nlapiGetRecordId();
        nlapiLogExecution('DEBUG', 'Error',internalId);

        if (internalId != null) {
            var createPdfUrl = nlapiResolveURL('SUITELET', 'customscript_softype_prg_st_printbillpay', 'customdeploy_softype_prg_st_printbillpay', false);
            
            createPdfUrl += '&id=' + internalId;
            var stringScript="window.open('"+createPdfUrl+"','_blank','toolbar=yes, location=yes, status=yes, menubar=yes, scrollbars=yes')";
            nlapiLogExecution('Debug', 'stringScript',stringScript);
            //print button is added in the form
            var customButton = form.addButton('custpage_Vendorbill', 'Print', stringScript);        }
        else {
            nlapiLogExecution('DEBUG', 'Error', 'the record is null');
        }
 
		}
        

}