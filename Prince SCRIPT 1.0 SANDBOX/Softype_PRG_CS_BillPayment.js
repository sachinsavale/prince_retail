/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       01 Nov 2017     Raksha Singh
 *
 */
var URL = nlapiResolveURL('SUITELET','customscript_prg_st_billpayment','customdeploy_prg_st_billpayment');



function validateField(type,name) {
	// body...
	if(name == 'custpage_subsidiary'){

		var entityid = nlapiGetFieldValue('custpage_entity_type');
		if(!entityid){

			nlapiSetFieldValue('custpage_subsidiary','')
			return;
		}


	}
	

}



function fieldChange(type,name)
{
	var submitURL = URL;

	if(name == 'custpage_entity_type'){

		var emp = nlapiGetFieldText('custpage_entity_type');
		if(emp == 'Employee'){

			nlapiSetFieldText('custpage_record_type','Write Check');
			nlapiDisableField('custpage_record_type',true)
			nlapiSetFieldValue('custpage_subsidiary','');

		}else{
			nlapiSetFieldText('custpage_record_type','');
			nlapiDisableField('custpage_record_type',false);
			nlapiSetFieldValue('custpage_subsidiary','');
		}
		

	}
	var subsidiary = nlapiGetFieldValue('custpage_subsidiary');
	if (name == 'custpage_subsidiary')
	{


		var isAccount = 'F';

		if(name == 'custpage_account')
			isAccount = 'T';
		
		var subsidiary = nlapiGetFieldValue('custpage_subsidiary');
		//var date = nlapiGetFiledValue('custpage_account');
		var account = nlapiGetFieldValue('custpage_account');
		var recordType = nlapiGetFieldValue('custpage_record_type');
		var entityType = nlapiGetFieldText('custpage_entity_type');
		var entityid = nlapiGetFieldValue('custpage_entity_type');
		if(!entityid){
				if(!subsidiary){

					alert('Please select entity');
					return;


				}
				

		}
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
		submitURL+='&entitytype='+entityType;
		submitURL+='&entityid='+entityid;
		window.ischanged = false;
		if(subsidiary){
			window.open(submitURL,'_self');	
		}
		
		}




	
}
function onClickDownload(){

	var url = URL;

	var subsidiarydata = nlapiGetFieldValue('custpage_subsidiary');
	var accountdata =nlapiGetFieldValue('custpage_account');
	var transDate=nlapiGetFieldValue('custpage_date');
	var recordType = nlapiGetFieldValue('custpage_record_type');
	var entityType = nlapiGetFieldText('custpage_entity_type');
	var todaysDate = new Date();
	var date = todaysDate.getDate();
	var month = todaysDate.getMonth()+1;
	var year = todaysDate.getFullYear();
	
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
	url += '&action=downloadbill';
	url += '&type='+recordType;
	url += '&entitytype='+entityType;
	url+='&date='+date;
	url+='&month='+month;
	url+='&year='+year;
	window.ischanged = false;
	window.open(url,'_self');

}