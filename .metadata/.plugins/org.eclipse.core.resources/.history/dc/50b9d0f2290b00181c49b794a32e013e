/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       06 Sep 2017     Juliana Luz
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType 
 * 
 * @param {String} type Access mode: create, copy, edit
 * @returns {Void}
 */
var URL = nlapiResolveURL('SUITELET','customscript_prg_st_create_invoice','customdeploy_prg_st_create_invoice');

function fieldChange(type,name){
	
	var submitURL = URL;
	//alert("name"+name);

	if(name == 'custpage_subs' || name == 'custpage_location'){

		var isLocation = 'F';

		if(name == 'custpage_location')
			isLocation = 'T';

		var subsidiary = nlapiGetFieldValue('custpage_subs');
		var locationId =nlapiGetFieldValue('custpage_location');
		var date = nlapiGetFieldValue('custpage_date');
		//alert('locationId :'+locationId);
		//console.log(isLocation);
		
		submitURL+='&subsid='+subsidiary;
		submitURL+='&isLocation='+isLocation;
		submitURL+='&locationId='+locationId;
		submitURL += '&action=getInvoice';
		submitURL += '&date='+date;
		window.ischanged = false;
		window.open(submitURL,'_self');

	}
	
	
	
	if(name == 'custpage_date'){

		var isLocation = 'F';

		if(name == 'custpage_location')
			isLocation = 'T';

		var subsidiary = nlapiGetFieldValue('custpage_subs');
		var locationId =nlapiGetFieldValue('custpage_location');
		var date = nlapiGetFieldValue('custpage_date');
		//alert('locationId :'+locationId);
		//console.log(isLocation);
		if(subsidiary){
			
			submitURL+='&subsid='+subsidiary;
			submitURL+='&isLocation='+isLocation;
			submitURL+='&locationId='+locationId;
			submitURL += '&action=getInvoice';
			submitURL += '&date='+date;
			window.ischanged = false;
			window.open(submitURL,'_self');
			
		}
		

	}

	
	

}

function onClickInvoice(){

	nlapiDisableField('custpage_submit',true)
	var url = URL;
    var redirectUrl = URL;
	var subsidiaryyy = nlapiGetFieldValue('custpage_subs');
	var locationss =nlapiGetFieldValue('custpage_location');
	var invoiceee=nlapiGetFieldText('custpage_invoice');
	//alert('subsidiaryyy :'+subsidiaryyy+' locationss :'+locationss+' invoiceee :'+invoiceee);

	if(subsidiaryyy == '' || subsidiaryyy == null || subsidiaryyy == undefined)
	{
		alert("Please select the Subsidiary");
		return false;
	}
	if(locationss == '' || locationss == null || locationss == undefined)
	{
		alert("Please select the Location");
		return false;
	}
	if(invoiceee == '' || invoiceee == null || invoiceee == undefined)
	{
		alert("Please select the Invoice");
		return false;
	}

	url+='&Subs='+subsidiaryyy;
	url+='&Location='+locationss;
	url+='&Invoice='+invoiceee;
	url += '&action=createInvoice';
	
	var response = nlapiRequestURL(url,null,null,'POST');
	console.log("Response-->"+response);
	//alert(response.body);
	if(response.body){
		var invoiceid = response.body;
		redirectUrl+='&action=invoicecreated';
		redirectUrl+='&invoiceid='+invoiceid;
		window.ischanged = false;
		window.open(redirectUrl,'_self');

		
	}
	//window.ischanged = false;
	//window.open(url,'_self');

}




