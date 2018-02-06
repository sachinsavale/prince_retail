/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       04 Nov 2017     kollidam
 *
 */

/**
 * @param {String} type Context Types: scheduled, ondemand, userinterface, aborted, skipped
 * @returns {Void}
 */
function scheduled(type) {
	
	var import3 = nlapiCreateCSVImport();
	import3.setMapping('CUSTIMPORT_TRANSFER_ORDER');
	import3.setPrimaryFile(nlapiLoadFile(2148)); 
	//import3.setQueue(6); 
	var id = nlapiSubmitCSVImport(import3);
	nlapiLogExecution('debug','OBJ',JSON.stringify(id));
	nlapiLogExecution('debug','Submit csv id',id);
	nlapiLogExecution('debug','Done');

}
