/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       16 Sep 2017     Raksha Singh
 *
 */
var URL = nlapiResolveURL('SUITELET','customscript_prg_st_billpayment','customdeploy_prg_st_billpayment');
function fieldChange(type,name)
{
var submitURL = URL;
if (name == 'custpage_subsidiary' || name == 'custpage_account')
	{
	var isAccount = 'F';

	if(name == 'custpage_account')
		isAccount = 'T';
	
	var subsidiary = nlapiGetFieldValue('custpage_subsidiary');
	//var date = nlapiGetFiledValue('custpage_account');
	var account = nlapiGetFieldValue('custpage_account');
	var recordType = nlapiGetFieldValue('custpage_record_type');
	
	if(recordType == '' || recordType == null || recordType == undefined)
	{
		alert("Please select Record Type");
		
		return false;
	}
	
	
	//alert('subsidiary :'+subsidiary);
	//alert('acount :'+account);
	submitURL+='&subsid='+subsidiary;
	//submitURL+='&date='+date;
	submitURL+='&isAccount='+isAccount;
	submitURL+='&account='+account;
	submitURL += '&action=getBillPaymentDetail';
	submitURL+='&type='+recordType;
	window.ischanged = false;
	window.open(submitURL,'_self');
	}

	
}
function onClickDownload(){

	var url = URL;

	var subsidiarydata = nlapiGetFieldValue('custpage_subsidiary');
	var accountdata =nlapiGetFieldValue('custpage_account');
	var transDate=nlapiGetFieldValue('custpage_date');
	var recordType = nlapiGetFieldValue('custpage_record_type');
	var todaysDate = new Date();
	var date = todaysDate.getDate();
	var month = todaysDate.getMonth()+1;
	var year = todaysDate.getFullYear();
	alert(date);
	//alert('subsidiarydata :'+subsidiarydata+' accountdata :'+accountdata+' transDate :'+transDate);

	if(subsidiarydata == '' || subsidiarydata == null || subsidiarydata == undefined)
	{
		alert("Please select the Subsidiary");
		return false;
	}
	if(accountdata == '' || accountdata == null || accountdata == undefined)
	{
		alert("Please select the account");
		return false;
	}
	
	if(recordType == '' || recordType == null || recordType == undefined)
	{
		alert("Please select Record Type");
		return false;
	}
	

	url+='&Subs='+subsidiarydata;
	url+='&Account='+accountdata;
	url+='&Date='+transDate;
	url+='&date='+date;
	url+='&month='+month;
	url+='&year='+year;
	url += '&action=downloadbill';
	url += '&type='+recordType;;
	window.ischanged = false;
	window.open(url,'_self');

}
