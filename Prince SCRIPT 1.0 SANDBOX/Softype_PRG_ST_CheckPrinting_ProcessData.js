/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       21 Nov 2017     Raksha Singh
 *
 */

/**
 * @param {nlobjRequest} request Request object
 * @param {nlobjResponse} response Response object
 * @returns {Void} Any output is written via response object
 */
var invoiceNoLength = 15;
var invoiceDate = 8;
var dmcmAmount = 15;
var taxLength = 15;
var amountToBePaid = 15;
var Buffer = 250;
var arr=[];
var arr_internalid=[];
var internal_id;
var appendtoUrl = '&xml=t'
var totaldmcm = 0
function suiteletProcessData(request, response){

	var action = request.getParameter('action');
	nlapiLogExecution('Debug', 'action',action);
	if(action == 'ProcessRecord')
	{
		var recId = request.getParameter('recId');
		
		var voucherToPrint = request.getParameter('voucherToPrint');
	
		var loadRecord = nlapiLoadRecord('vendorpayment', recId);

		// var URL = "https://debugger.sandbox.netsuite.com"
		// URL+= nlapiResolveURL('RECORD','vendorpayment',recId);
		// URL+=appendtoUrl;


		// var response = nlapiRequestURL(URL);
		// var parseXml = nlapiStringToXML(response.body);
		// var machin = parseXml.getElementsByTagName('machine');

		// var credit = machin[1];

		// var lineJson = xml2json(credit)
		// nlapiLogExecution('audit','LINE JSON',lineJson);
		
		var lineCount = loadRecord.getLineItemCount('apply');
		
		for(var q = 1; q<= lineCount; q++)
		{
			var isApply = loadRecord.getLineItemValue('apply','apply',q);
			
			if(isApply == 'T')
			{
				internal_id = loadRecord.getLineItemValue('apply','internalid',q);
				
				arr_internalid.push(internal_id);
				
			}
		}

		var filter = new Array();

		filter.push(new nlobjSearchFilter('internalid', null, 'anyof', arr_internalid));
		filter.push(new nlobjSearchFilter('mainline', null, 'is', 'T'));
	
		var column = new Array();
		column.push(new nlobjSearchColumn('trandate'));//invoice date
		column.push(new nlobjSearchColumn('taxtotal'));//invoice tax
		column.push(new nlobjSearchColumn('tranid'));//invoice no
		column.push(new nlobjSearchColumn('amount'));//invoice amount
		column.push(new nlobjSearchColumn('custbody_prg_wth_amount')); //amount
		
		var savesearch = nlapiSearchRecord('vendorbill',null,filter,column);
	
		var invoice_Number;
		if(savesearch)
		{
			for(var i = 0; i < savesearch.length; i++)
			{

				var invoiceno = savesearch[i].getValue('tranid');
				invoiceno = invoiceno.toString();
				var CountInvoiceno = Number(invoiceNoLength) - Number(invoiceno.length);
				var invoiceSpaces = addSpaces(CountInvoiceno);
				invoiceno =invoiceno+invoiceSpaces;
				var invno = invoiceno.length;

				//--------------------Search For Credits Amount Applied-------------------//


				var filter = new Array();

		
				filter.push(new nlobjSearchFilter('mainline', null, 'is', 'T'));
				//filter.push(new nlobjSearchFilter('internalid','appliedtotransaction', 'is',113105));
				filter.push(new nlobjSearchFilter('internalid','appliedtotransaction', 'is',savesearch[i].id));
				// filter.push(new nlobjSearchFilter('type','payingtransaction', 'is','Bill Credit'));
				
			
				var column = new Array();
				
				column.push(new nlobjSearchColumn('appliedtotransaction')); //amount

				column.push(new nlobjSearchColumn('appliedtolinkamount')); //amount
				// column.push(new nlobjSearchColumn('internalid','groupby')); //amount

				var searchCredits = nlapiSearchRecord('vendorcredit',null,filter,column);

				


				//------------------------------------------------------------------------//
				
				if(invno > 15)
					{
					 	invoice_Number = invoiceno.substring(0,15);
					
					}
				else
					{
						invoice_Number=invoiceno;
					
					}
				var getinvoicedate = savesearch[i].getValue('trandate');
				getinvoicedate = getinvoicedate.split('/');
				var date = new Date();
				var month =  getinvoicedate[0];
				var date = getinvoicedate[1];
				var year = getinvoicedate[2];
				
				
				month = month.toString();
				date = date.toString();
				if(month.length == 1){

					month = '0'+month;

				}

				if(date.length == 1){

					date = '0'+date;

				}
				var resultinvoiceDate = month+date+year;
				
				var invoiceAmount = savesearch[i].getValue('amount');
				invoiceAmount = Math.abs(invoiceAmount);
				invoiceAmount = invoiceAmount.toFixed(2);
				invoiceAmount = invoiceAmount.toString();
				invoiceAmount = invoiceAmount.split(".");
				var invoiceAmtzeros='0';
				var finalInvoiceAmount = invoiceAmount[0] + invoiceAmount[1];
				finalInvoiceAmount = finalInvoiceAmount.toString();
				var length =getSpaceLength(finalInvoiceAmount.length);
				for(var ii = 1; ii<length; ii++){  
					invoiceAmtzeros = invoiceAmtzeros + '0';
				}
				var CountAmountpaid = Number(amountToBePaid)-Number(finalInvoiceAmount.length);
				
				
				var amountpaidSpaces = addSpaces(CountAmountpaid);
				var invoiceAmountPrint = finalInvoiceAmount;
				var negative = '-'
				if(searchCredits){

					for(var ss = 0; ss < searchCredits.length; ss++ ){

						var deductions = searchCredits[ss].getValue('appliedtolinkamount');
						totaldmcm = Number(totaldmcm) + Number(deductions);
					}

				}
				
				var dmcm_Amount=totaldmcm;
				dmcm_Amount  = dmcm_Amount - (dmcm_Amount * 2);
				nlapiLogExecution('audit','dmcm_Amount AMOUNT',dmcm_Amount)
				
				dmcm_Amount = dmcm_Amount.toFixed(2);
				dmcm_Amount = dmcm_Amount.toString();
				dmcm_Amount = dmcm_Amount.split(".");
				var dmcmZeros='0';
				var finaldmcm = dmcm_Amount[0] + dmcm_Amount[1];
				finaldmcm = finaldmcm.toString();
				var lengths =getSpaceLength(finaldmcm.length);
				for(var tz = 1; tz<lengths; tz++){  
					dmcmZeros = dmcmZeros + '0';
				}

				dmcm_Amount = dmcm_Amount.toString();
				var CountdmcmAmount = Number(dmcmAmount) - Number(dmcm_Amount.length);
				var dmcm_AmountSpace = addSpaces(CountdmcmAmount);
				dmcm_Amount =dmcm_Amount+dmcm_AmountSpace ;
				var taxamount = savesearch[i].getValue('custbody_prg_wth_amount');
				nlapiLogExecution('audit','WHT AMOUNT',taxamount)
				taxamount = taxamount - (taxamount * 2);
				taxamount = taxamount.toFixed(2);
				taxamount = taxamount.toString();
				taxamount = taxamount.split(".");
				var invoiceTaxZeros='0';
				var finalTax = taxamount[0] + taxamount[1];
				finalTax = finalTax.toString();
				var lengths =getSpaceLength(finalTax.length);
				for(var tz = 1; tz<lengths; tz++){  
					invoiceTaxZeros = invoiceTaxZeros + '0';
				}
				var CountTax = Number(taxLength)-Number(finalTax.length);
				nlapiLogExecution('Debug','CountTax  ',CountTax);
				var taxSpaces = addSpaces(CountTax);
				var finalTaxPrint = finalTax+taxSpaces;
	
				arr.push({voucherToPrint:voucherToPrint,invoice_Number:invoice_Number,resultinvoiceDate:resultinvoiceDate,invoiceAmtzeros:invoiceAmtzeros,invoiceAmountPrint:invoiceAmountPrint,dmcm_Amount:dmcm_Amount,dmcmZeros:dmcmZeros,invoiceTaxZeros:invoiceTaxZeros,finalTaxPrint:finalTaxPrint});
				


			}

		}
	}


	arr = JSON.stringify(arr);
	
	response.write(arr);
}


function addSpaces(length){

	var space = ' ';

	for(var s = 1; s < length; s++){

		space = space+' ';

	}

	return space;	
}
function getSpaceLength(length){
	var CONSTANT = 15;
    var space = CONSTANT - length;
	return space;

}

function invoiceLength(invoiceno) {
   var invoice_no = invoiceno;
   
   
    var newInvoiceno = '';
for (var i = 0; i < invoiceNoLength; i++) {

	newInvoiceno= newInvoiceno  + (invoice_no.charAt(i));
	
}
   
   return newInvoiceno;
}


function xml2json(xml) {
  try {
    var obj = {};
    if (xml.children.length > 0) {
      for (var i = 0; i < xml.children.length; i++) {
        var item = xml.children.item(i);
        var nodeName = item.nodeName;

        if (typeof (obj[nodeName]) == "undefined") {
          obj[nodeName] = xml2json(item);
        } else {
          if (typeof (obj[nodeName].push) == "undefined") {
            var old = obj[nodeName];

            obj[nodeName] = [];
            obj[nodeName].push(old);
          }
          obj[nodeName].push(xml2json(item));
        }
      }
    } else {
      obj = xml.textContent;
    }
    return obj;
  } catch (e) {
      console.log(e.message);
  }
}