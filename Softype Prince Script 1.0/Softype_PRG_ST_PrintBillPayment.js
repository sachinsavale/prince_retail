/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       21 Sep 2017     sahab_000
 *
 */

/**
 * @param {nlobjRequest} request Request object
 * @param {nlobjResponse} response Response object
 * @returns {Void} Any output is written via response object
 */
function suitelet_printBillPay(request, response)
{
	
	var action = request.getParameter('action');//get the action from user event script
	nlapiLogExecution('Debug','action',action);
	if(action == 'printBillPayment')
	{
		//get the record details
		var RecType = request.getParameter('recType');
		nlapiLogExecution('Debug','rectype',RecType);

		var RecId = request.getParameter('recId');
		var loadRec = nlapiLoadRecord(RecType,RecId);
		//load the record and get the required fields
		var trnaId = loadRec.getFieldValue('tranid');
		  if(trnaId==null){
			  trnaId='';    	  
	      }
		var date = loadRec.getFieldValue('trandate');
		var subsidiary = loadRec.getFieldValue('subsidiary');
		var subsidiaryText = loadRec.getFieldText('subsidiary');
		var Getsubsidiary = nlapiLoadRecord('subsidiary',subsidiary);
		var subs = Getsubsidiary.getFieldValue('mainaddress_text');
		var amount = loadRec.getFieldValue('total');
		var currenc = loadRec.getFieldValue('currency');
		var image='https://system.na2.netsuite.com/core/media/media.nl?id=11&c=4872008&h=1b287e278577c61e10df';
	
	var html='<?xml version="1.0"?><!DOCTYPE pdf PUBLIC "-//big.faceless.org//report" "report-1.1.dtd">';
	html +='<pdf>';
	html +='<head>';

	   html +='<link name="verdana" type="font" subtype="opentype" src="${nsfont.verdana}" src-bold="${nsfont.verdana_bold}" bytes="2" />';
	    html +='<macrolist>';
	    html +='<macro id="nlheader">';
	    html +='<table class="header" style="width: 100%;"><tr>';
		html +='<td rowspan="3"><img src="'+nlapiEscapeXML(image)+'" style="font-size: 12px; height: 42px; width: 130px;" /> <span class="nameandaddress">'+subsidiaryText+'</span></td>';
		html +='<td align="right"><span class="title">Bill Payment</span></td>';
		html +='</tr>';
		html +='<tr>';
		html +='<td align="right"><span class="number">#'+trnaId+'</span></td>';
		html +='</tr>';
		html +='<tr>';
		html +='<td align="right">'+date+'</td>';
		html +='</tr></table>';
	        html +='</macro>';
	        html +='<macro id="nlfooter">';
	           html +=' <table class="footer" style="width: 100%;"><tr>';
		html +='<td align="right"><pagenumber/> of <totalpages/></td>';
		html +='</tr></table>';
	        html +='</macro>';
	    html +='</macrolist>';
	   html +='<style type="text/css">';
	   html +='table {';
	                html +='font-family: stsong, sans-serif;';
	            //html +='<#elseif .locale == "zh_TW">';
	               html +=' font-family: msung, sans-serif;';
	            //html +='<#elseif .locale == "ja_JP">';
	               html +=' font-family: heiseimin, sans-serif;';
	           // html +='<#elseif .locale == "ko_KR">';
	               html +=' font-family: hygothic, sans-serif;';
	           // html +='<#elseif .locale == "ru_RU">';
	               html +=' font-family: verdana;';
	           //html +=' <#else>';
	               html +=' font-family: sans-serif;';
	                html +='font-size: 9pt;';
	                html +='table-layout: fixed;';
	            html +='}';
	            html +='th {';
	               html +=' font-weight: bold;';
	                html +='font-size: 8pt;';
	                html +='vertical-align: middle;';
	                html +='padding: 5px 6px 3px;';
	               html +=' background-color: #e3e3e3;';
	               html +=' color: #333333;';
	            html +='}';
	            html +='td {';
	               html +=' padding: 4px 6px;';
	            html +='}';
	            html +='b {';
	               html +=' font-weight: bold;';
	               html +=' color: #333333;';
	            html +='}';
	            html +='table.header td {';
	              html +='  padding: 0;';
	               html +=' font-size: 10pt;';
	            html +='}';
	            html +='table.footer td {';
	                html +='padding: 0;';
	               html +=' font-size: 8pt;';
	            html +='}';
	            html +='table.itemtable th {';
	                html +='padding-bottom: 10px;';
	                html +='padding-top: 10px;';
	            html +='}';
	            html +='table.body td {';
	               html +=' padding-top: 2px;';
	            html +='}';
	            html +='table.total {';
	                html +='page-break-inside: avoid;';
	            html +='}';
	            html +='tr.totalrow {';
	              html +='  background-color: #e3e3e3;';
	                html +='line-height: 200%;';
	            html +='}';
	            html +='td.totalboxtop {';
	              html +='  font-size: 12pt;';
	               html +=' background-color: #e3e3e3;';
	            html +='}';
	            html +='td.addressheader {';
	                html +='font-size: 8pt;';
	               html +=' padding-top: 6px;';
	               html +=' padding-bottom: 2px;';
	            html +='}';
	            html +='td.address {';
	                html +='padding-top: 0;';
	            html +='}';
	            html +='td.totalboxmid {';
	                html +='font-size: 28pt;';
	                html +='padding-top: 20px;';
	                html +='background-color: #e3e3e3;';
	            html +='}';
	            html +='span.title {';
	                html +='font-size: 28pt;';
	            html +='}';
	            html +='span.number {';
	               html +=' font-size: 16pt;';
	            html +='}';
	            html +='hr {';
	                html +='width: 100%;';
	                html +='color: #d3d3d3;';
	               html +=' background-color: #d3d3d3;';
	                html +='height: 1px;';
	            html +='}';
	html +='</style>';
	html +='</head>';
	html +='<body header="nlheader" header-height="10%" footer="nlfooter" footer-height="10pt" padding="0.5in 0.5in 0.5in 0.5in" size="Letter">';
	 html +='<table style="width: 100%; margin-top: 10px;"><tr>';
	html +='<td class="addressheader" colspan="6"><b>Address</b></td>';
	html +='<td class="totalboxtop" colspan="4"><b>AMOUNT</b></td>';
	html +='</tr>';
	html +='<tr>';
	html +='<td class="address" colspan="6">'+subs+'</td>';
	html +='<td align="right" class="totalboxmid" colspan="4">'+amount+'</td>';
	html +='</tr></table>';

	html +='<table class="itemtable" style="width: 100%; margin-top: 10px;">';
	
	var lineCount = loadRec.getLineItemCount('apply');//get the line item count
    if(lineCount > 0)
    {
    	
    	html +='<thead>';
    	html +='	<tr>';
    	html +='<th align="center"  colspan="3">Date Due</th>';
    	html +='<th  align="right" colspan="5">Type</th>';
    	html +='<th align="right"  colspan="3">Orig. Amt.</th>';
    	html +='<th align="right" colspan="3">Witholding Tax</th>';
    	html +='<th align="right"  colspan="3">Amt. Due</th>';
    	html +='<th align="right"  colspan="3">Disc. Taken</th>';
    	html +='<th align="right"  colspan="4">Payment</th>';
    	html +='</tr>';
    	html +='</thead>';
    	
     for(var i = 1; i <= lineCount; i++)
     {
    	 //get the line item values
      //var description = loadRec.getLineItemValue('apply','list',i);
    	 var apply=loadRec.getLineItemValue('apply','apply',i);
if (apply=='T'){
      var duedate = loadRec.getLineItemValue('apply','duedate',i);
      var type = loadRec.getLineItemValue('apply','type',i);
      var internalid=loadRec.getLineItemValue('apply','internalid',i);
      nlapiLogExecution('debug','internalid',internalid);

      var originalAmt = loadRec.getLineItemValue('apply','amount',i);
      var withHoldingTax = nlapiLoadRecord('vendorbill',internalid);
      nlapiLogExecution('debug','withHoldingTax',withHoldingTax);

    var amountTax=  withHoldingTax.getFieldValue('custpage_4601_witaxamount');
    nlapiLogExecution('debug','amountTax',amountTax);
      var dueAmt = loadRec.getLineItemValue('apply','due',i);
      var discDue = loadRec.getLineItemValue('apply','disc',i);
      if(discDue==null){
    	  discDue='';    	  
      }
    	 
      var Amount = loadRec.getLineItemValue('apply','amount',i);
      // set the values in the required field
      html +='<tr>';
      html +='<td align="center" colspan="3" line-height="100%">'+duedate+'</td>';
  	html +='<td align="right"  colspan="5">'+type+'</td>';
  	html +='<td  align="right" colspan="3">'+originalAmt+'</td>';
  	html +='<td  align="right" colspan="3">'+amountTax+'</td>';
  	html +='<td  align="right" colspan="3">'+dueAmt+'</td>';
  	html +='<td align="right"  colspan="3">'+discDue+'</td>';
  	html +='<td align="right"  colspan="4">'+Amount+'</td>';
  	html +='</tr>';
    	 }
    }
    }
    
	html +='</table>';

	html +='</body>';
	html +='</pdf>';
	var file = nlapiXMLToPDF(html);
	response.setContentType('PDF', 'Print.pdf ', 'inline');
	response.write(file.getValue()); 
	}
}
