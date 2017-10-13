/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       17 Sep 2017     Raksha Singh
 *
 */

/**
 * @param {nlobjRequest} request Request object
 * @param {nlobjResponse} response Response object
 * @returns {Void} Any output is written via response object
 */
function Suitelet_PrintVendorBill(request, response){
	var action = request.getParameter('action');
	nlapiLogExecution('Debug','action',action);
	if(action == 'VendorBillPrint')
	{
		var RecId = request.getParameter('recId');
		var loadRec = nlapiLoadRecord('vendorbill',RecId);
		var vendor = loadRec.getFieldText('entity');
		var referenceNo = loadRec.getFieldValue('tranid');
		var date = loadRec.getFieldValue('trandate');
		var subsidiary = loadRec.getFieldValue('subsidiary');
		var subsidiaryText = loadRec.getFieldText('subsidiary');
		var Getsubsidiary = nlapiLoadRecord('subsidiary',subsidiary);
		var subs = Getsubsidiary.getFieldValue('mainaddress_text');
		nlapiLogExecution('Debug','subs :',subs);
		var debitmemo = loadRec.getFieldValue('transactionnumber');


				var image='https://system.na2.netsuite.com/core/media/media.nl?id=11&c=4872008&h=1b287e278577c61e10df';
				var html = '';
				html += '<?xml version="1.0"?><!DOCTYPE pdf PUBLIC "-//big.faceless.org//report" "report-1.1.dtd">';
				html += '<pdf>';
				html += '<head>';
				html += '<macrolist>';
				html += '<macro id="nlheader">';
				html += '<table class="header" style="width: 100%;"><tr>';
				html += '<td colspan ="3">';
				html += '<div><img src="'+nlapiEscapeXML(image)+'" style="font-size: 12px; height: 42px; width: 130px;" /></div></td>';

				html += '<td colspan ="5"><span class="title"><br/>'+subsidiaryText+'</span></td>';
				html += '</tr>';
				html += '<tr>';
				html += '<td colspan ="8" align="center"><span class="number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+subs+'</span></td>';
				html += '</tr>';
				html += '<tr>';
				html += '</tr>';
				html += '<tr>';
		
				html += '<td colspan ="8" align="center" style="font-size: 12pt"><b><br/>DEBIT MEMO</b><br/></td>';

				html += '</tr></table>';
				html += '</macro>';
				html += '<macro id="nlfooter">';
				html += ' <table class="footer" style="width: 100%;"><tr>';

				html += '<td style="width:70%;font-size:10pt"><b>Approved by:</b></td>';
				
				html += '<td style="width:30%;font-size:09pt" align="left" ><br/>Any questions,please call</td>';
				html += '</tr>';
				html += '<tr>';
				html += '<td style="width:70%;font-size:10pt"><b><br/>Printed by:</b></td>';
		
				html += '<td style="width:30%;font-size:09pt" align="left" ><br/>Telephone No.:(032)266-2846 loc.206</td>';
				html += '</tr></table>';
				html += '</macro>';
				html += '</macrolist>';
				html += '<style type="text/css">table {';

				html += 'font-size: 9pt;';
				html += 'table-layout: fixed;';
				html += '}';
				html += 'th {';
				html += 'font-weight: bold;';
				html += 'font-size: 8pt;';
				html += 'vertical-align: middle;';
				html += 'padding: 5px 6px 3px;';
				html += 'background-color: #e3e3e3;';
				html += 'color: #333333;';
				html += ' }';
				html += 'td {';
				html += 'padding: 4px 6px;';
				
				html += '}';
				html += 'b {';
				html += 'font-weight: bold;';
				html += 'color: #333333;';
				html += '}';
				html += 'b1 {';
				html += 'font-weight:bold;';
				html += 'color: #333333;';
				html += 'font-size:100%;';
				html += '}';

				html += 'h4{';
				html += 'font-family: sans-serif;';
				html += '}';
				html += 'table.header td {';
				html += 'padding: 0px;';
				html += 'font-size: 10pt;';
				html += '}';
				html += 'table.footer td {';
				html += ' padding: 0px;';
				html += ' font-size: 8pt;';
				html += '}';
				
				html += ' span.title {';
				html += '    font-size: 15pt;';
				html += '}';
				html += 'span.number {';
				html += '    font-size: 10pt;';
				html += ' }';
		
				html += '</style>';
				html += '</head>';
				html += '<body header="nlheader" header-height="10%" footer="nlfooter" footer-height="20pt" padding="0.5in 0.5in 0.5in 0.5in" size="Letter">';

				
				
				html += '<table style="width: 100%; margin-top: 10px;">';

				html += '<tr><td style="width:50%; font-size:10pt" ><br/>Vendor : '+vendor+'</td>';
				html += '<td style="width:10%"></td>';
				html += '<td style="width:35%; font-size:10pt" align="left" ><br/>Date : '+date+'</td>';
				html += '</tr>';

				html += '<tr>';
				html += '<td style="width:50%; font-size:10pt">Reference : '+referenceNo+'</td>';
				html += '<td style="width:10%"></td>';
				html += '<td style="width:35%; font-size:10pt" align="left">Debit Memo No. : '+debitmemo+'</td>';
				html += '</tr>';
				html += '<tr>';	
				html += '</tr>';
				html += '<tr>';		

				html += '</tr></table>';
				html +='<br/>';

				html += '<table style="width: 100%;border: 1px solid black; margin-top: 10px;">';

				html += '<thead>';
				html += '<tr>';	
				html += '<td style="border-right:1px solid black;border-bottom:1px solid black;font-size:11pt" align="center" colspan="2" >DESCRIPTION</td>';
				html += '<td style="border-bottom:1px solid black;font-size:11pt" align="center">AMOUNT</td>';
				html += '</tr>';
				html +='</thead>';
				var lineCount = loadRec.getLineItemCount('item');
				if(lineCount > 0)
				{
					for(var i = 1; i <= lineCount; i++)
					{
						var description = loadRec.getLineItemValue('item','description',i);
						nlapiLogExecution('Debug','')
						var amount = loadRec.getLineItemValue('item','amount',i);
					html += '<tr>';
					html += '<td style="border-right:1px solid black; font-size:10pt" colspan="2">'+description+'</td>';
					html += '<td style="font-size:10pt">'+amount+'</td>';

					html += '</tr>';
				}
				}

				html += '</table>';


				html += '</body>';
				html += '</pdf>';

				nlapiLogExecution('Debug', 'HTML Layout', html);

				var file = nlapiXMLToPDF(html);
				response.setContentType('PDF','Print.pdf ','inline');
				response.write(file.getValue());


			

		}

	



}
