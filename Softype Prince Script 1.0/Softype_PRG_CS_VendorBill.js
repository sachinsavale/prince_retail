/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       23 Jan 2018     kollidam
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType 
 * 
 * @param {String} type Access mode: create, copy, edit
 * @returns {Void}
 */
function onSave(type,name){
 
  var refNum = nlapiGetFieldValue('tranid');
  var tranNum = nlapiGetFieldValue('transactionnumber');
  if (refNum != null && refNum != '') 
  {
	   var vendor = nlapiGetFieldValue('entity');
	   var filter = new Array();
	   filter[0] = new nlobjSearchFilter('tranid',null,'is',refNum);
	   filter[1] = new nlobjSearchFilter('mainline',null,'is','T');
	   var column = new Array();
	   column[0] = new nlobjSearchColumn('internalid');
	   column[1] = new nlobjSearchColumn('tranid');
	   var searchResults = nlapiSearchRecord('vendorbill',null, filter,column);
	   if (searchResults != null && searchResults.length > 0)
	   {
		    alert('Reference# is already used: ' + searchResults[0].getValue('tranid'));
		    return false;
	   }
  }
 
 return true;  
}
