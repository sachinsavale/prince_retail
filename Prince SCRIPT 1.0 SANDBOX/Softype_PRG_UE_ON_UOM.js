/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       29 Aug 2017     Raksha Singh
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


function userEventAfterSubmit(type){

	//Get the Record id and type of UOM Custom Record
	var RecId =nlapiGetRecordId();
	var RecType = nlapiGetRecordType();
	//Load the current record
	if(type=='create' || type== 'CREATE') 
	{
		var LoaddRec = nlapiLoadRecord(RecType,RecId);
		//Get all the required values from UOM
		var TypeName = LoaddRec.getFieldText('custrecord_typename');
		var Name = LoaddRec.getFieldValue('custrecord_name');
		var PluralName = LoaddRec.getFieldValue('custrecord_pluralname');
		var Abbr = LoaddRec.getFieldValue('custrecord_abbreviation');
		var PluralAbbr = LoaddRec.getFieldValue('custrecord_pluralabbreviation');
		var ConversionRate = LoaddRec.getFieldValue('custrecord_conversionrate');
		var BaseUnit = LoaddRec.getFieldValue('custrecord_baseunit');

		nlapiLogExecution('debug','TypeName',TypeName);
		nlapiLogExecution('debug','Name',Name);
		nlapiLogExecution('debug','PluralName',PluralName);
		nlapiLogExecution('debug','Abbr',Abbr);
		nlapiLogExecution('debug','PluralAbbr',PluralAbbr);
		nlapiLogExecution('debug','ConversionRate',ConversionRate);
		nlapiLogExecution('debug','BaseUnit',BaseUnit);

		var Filter = new Array();

		Filter.push(new nlobjSearchFilter('isinactive',null,'is','F'));
		Filter.push(new nlobjSearchFilter('name',null,'is',TypeName));

		//Search on Standard UOM Record to get the ID(internal id)
		var SearchRecord = nlapiSearchRecord('unitstype',null,Filter,null);
	
		//if record is found
		if(SearchRecord)
		{
			var UOMid = SearchRecord[0].getId();
			nlapiLogExecution('debug','UOMid',UOMid);
			//Load the record using the UOMid
			var LoadUOMrec = nlapiLoadRecord('unitstype',UOMid);
			//get the typeName of standard UOM
			var type = LoadUOMrec.getFieldValue('name');
			
			//add the line item with the value fetched from the custom record
			LoadUOMrec.selectNewLineItem('uom'); 

			LoadUOMrec.setCurrentLineItemValue('uom','unitname',Name);
			LoadUOMrec.setCurrentLineItemValue('uom','pluralname',PluralName);
			LoadUOMrec.setCurrentLineItemValue('uom','abbreviation',Abbr);
			LoadUOMrec.setCurrentLineItemValue('uom','pluralabbreviation',PluralAbbr);
			LoadUOMrec.setCurrentLineItemValue('uom','conversionrate',ConversionRate);
			LoadUOMrec.setCurrentLineItemValue('uom','baseunit ',BaseUnit);
			LoadUOMrec.commitLineItem('uom');
			var submitrec = nlapiSubmitRecord(LoadUOMrec,true);
			nlapiLogExecution('debug','submitrec',submitrec);
		}
		else
		{
			//if search is not found then directly create the new record
			var CreateRecord = nlapiCreateRecord('unitstype');
			CreateRecord.setFieldValue('name',TypeName);
			CreateRecord.selectNewLineItem('uom'); 
			CreateRecord.setCurrentLineItemValue('uom','unitname',Name);
			CreateRecord.setCurrentLineItemValue('uom','pluralname',PluralName);
			CreateRecord.setCurrentLineItemValue('uom','abbreviation',Abbr);
			CreateRecord.setCurrentLineItemValue('uom','pluralabbreviation',PluralAbbr);
			CreateRecord.setCurrentLineItemValue('uom','conversionrate',ConversionRate);
			CreateRecord.setCurrentLineItemValue('uom','baseunit','T');
			CreateRecord.commitLineItem('uom');
			nlapiSubmitRecord(CreateRecord);
		}
	}
}
