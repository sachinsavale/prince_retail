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
	var html='<?xml version="1.0"?><!DOCTYPE pdf PUBLIC "-//big.faceless.org//report" "report-1.1.dtd">';
	html +='<pdf>';
	html +='<head>';

	   html +='<link name="verdana" type="font" subtype="opentype" src="${nsfont.verdana}" src-bold="${nsfont.verdana_bold}" bytes="2" />';
	    html +='<macrolist>';
	    html +='<macro id="nlheader">';
	    html +='<table class="header" style="width: 100%;"><tr>';
		html +='<td rowspan="3"><img src="${companyInformation.logoUrl}" style="float: left; margin: 7px" />  <span class="nameandaddress">${companyInformation.companyName}</span><br /><span class="nameandaddress">${companyInformation.addressText}</span></td>';
		html +='<td align="right"><span class="title">${record@title}</span></td>';
		html +='</tr>';
		html +='<tr>';
		html +='<td align="right"><span class="number">record</span></td>';
		html +='</tr>';
		html +='<tr>';
		html +='<td align="right">${record.trandate}</td>';
		html +='</tr></table>';
	        html +='</macro>';
	        html +='<macro id="nlfooter">';
	           html +=' <table class="footer" style="width: 100%;"><tr>';
		html +='<td align="right"><pagenumber/> of <totalpages/></td>';
		html +='</tr></table>';
	        html +='</macro>';
	    html +='</macrolist>';
	    html +='<style type="text/css">';
		/*table {';
	                html +='font-family: stsong, sans-serif;';
	            //html +='<#elseif .locale == "zh_TW">';
	               html +=' font-family: msung, sans-serif;';
	            //html +='<#elseif .locale == "ja_JP">';
	               html +=' font-family: heiseimin, sans-serif;';
	           // html +='<#elseif .locale == "ko_KR">';
	               html +=' font-family: hygothic, sans-serif;';
	            //html +='<#elseif .locale == "ru_RU">';
	               html +=' font-family: verdana;';
	          // html +=' <#else>';
	               html +=' font-family: sans-serif;';
	                html +='font-size: 9pt;';
	                html +='table-layout: fixed;';
	            html +='}';*/
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
		html +='<td class="addressheader" colspan="6"><b>${record.address@label}</b></td>';
		html +='<td class="totalboxtop" colspan="5"><b>${record.total@label?upper_case}</b></td>';
		html +='</tr>';
		html +='<tr>';
		html +='<td class="address" colspan="6">${record.address}</td>';
		html +='<td align="right" class="totalboxmid" colspan="5">${record.total}</td>';
		html +='</tr></table>';

	html +='<table class="itemtable" style="width: 100%; margin-top: 10px;"><!-- start apply sublist --><#list record.apply as apply>';
	html +='<thead>';
	html +='	<tr>';
		html +='<th align="center" colspan="3">${apply.applydate@label}</th>';
		html +='<th colspan="5">${apply.type@label}</th>';
		html +='<th align="right" colspan="3">${apply.total@label}</th>';
		html +='<th align="right">Witholding Tax</th>';
		html +='<th align="right" colspan="3">${apply.due@label}</th>';
		html +='<th align="right" colspan="3">${apply.disc@label}</th>';
		html +='<th align="right" colspan="4">${apply.amount@label}</th>';
		html +='</tr>';
	html +='</thead>';
	html +='<tr>';
		html +='<td align="center" colspan="3" line-height="150%">${apply.applydate}</td>';
		html +='<td colspan="5">${apply.type}</td>';
		html +='<td align="right" colspan="3">${apply.total}</td>';
		html +='<td align="right" colspan="3">${apply.type.transactionnumber}</td>';
		html +='<td align="right" colspan="3">${apply.due}</td>';
		html +='<td align="right" colspan="3">${apply.disc}</td>';
		html +='<td align="right" colspan="4">${apply.amount}</td>';
		html +='</tr>';
		html +='</#list></table>';

	html +='<hr />';
	html +='<table class="itemtable" style="width: 100%; margin-top: 10px;"><!-- start credit sublist --><#list record.credit as credit>';
	html +='<thead>';
		html +='<tr>';
		html +='<th align="center" colspan="3">${credit.creditdate@label}</th>';
		html +='<th colspan="5">${credit.type@label}</th>';
		html +='<th align="right" colspan="3">${credit.refnum@label}</th>';
		html +='<th align="right" colspan="6">${credit.appliedto@label}</th>';
		html +='<th align="right" colspan="4">${credit.amount@label}</th>';
		html +='</tr>';
	html +='</thead>';
	html +='<tr>';
		html +='<td align="center" colspan="3" line-height="150%">${credit.creditdate}</td>';
		html +='<td colspan="5">${credit.type}</td>';
		html +='<td align="right" colspan="3">${credit.refnum}</td>';
		html +='<td align="right" colspan="6">${credit.appliedto}</td>';
		html +='<td align="right" colspan="4">${credit.amount}</td>';
		html +='</tr>';
		html +='</#list><!-- end credit--></table>';

	html +='<hr />';
	html +='<table class="total" style="width: 100%; margin-top: 10px;"><tr class="totalrow">';
		html +='<td background-color="#ffffff" colspan="4">&nbsp;</td>';
		html +='<td align="right"><b>${record.total@label}</b></td>';
		html +='<td align="right">${record.total}</td>';
		html +='</tr></table>';
	html +='</body>';
	html +='</pdf>';
	var file = nlapiXMLToPDF(html);
	response.setContentType('PDF', 'Print.pdf ', 'inline');
	response.write(file.getValue()); 

}
