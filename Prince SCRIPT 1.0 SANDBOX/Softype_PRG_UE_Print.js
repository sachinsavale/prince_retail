/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       01 Feb 2018     kollidam
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
function userEventBeforeLoad(type, form, request){
	
  if(type == 'view'){
	  
	  var transferOrderId = nlapiGetRecordId();
	  var recordType = nlapiGetRecordType();
	  var url = "/app/site/hosting/scriptlet.nl?script=432&deploy=1&action="+recordType;
	  url+='&id='+transferOrderId;
				
	  var stringScript="window.open('"+url+"','_blank','toolbar=yes, location=yes, status=yes, menubar=yes, scrollbars=yes')";
	  form.addButton('custpage_print', 'Print', stringScript);
	  
	  
  }
	
 
}
