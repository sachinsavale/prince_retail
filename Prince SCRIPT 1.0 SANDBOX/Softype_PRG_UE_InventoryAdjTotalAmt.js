/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       22 Sep 2017     Raksha Singh
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
function InvAdjTotalAmount(type){
	var RecId = nlapiGetRecordId();
	var RecType = nlapiGetRecordType();
	var loadrec = nlapiLoadRecord(RecType,RecId);
	//Get the count of Line Item 

	var count = loadrec.getLineItemCount('inventory');
	if(count > 0){
		var totalAmount = Number(0);
		for(var i = 1; i <= count; i++)
		{
			//get line item for sales amount
			var salesamount = loadrec.getLineItemValue('inventory','custcol_salesamount',i);
			nlapiLogExecution('DEBUG','salesamount =',salesamount);	
			//add all the line item amount
			totalAmount = Number(totalAmount) + Number(salesamount);



		}
		//submit the line item value on the body field of the total sales amount.
		var submitField = nlapiSubmitField(RecType,RecId,'custbodytotalsalesamount',totalAmount);
		nlapiLogExecution('DEBUG','submitField =',submitField);	
	}


}
