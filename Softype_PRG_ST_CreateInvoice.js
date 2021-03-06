/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       05 Sep 2017     Raksha Singh
 *
 */

/**
 * @param {nlobjRequest} request Request object
 * @param {nlobjResponse} response Response object
 * @returns {Void} Any output is written via response object
 */


var SuiteletPageName = "Create Invoice From Inventory Adjustment"

function CreateInvoiceFromInvAdjustment(request, response){

	if (request.getMethod() == 'GET' )
	{

		var action = request.getParameter('action');
		nlapiLogExecution('DEBUG', 'action', action);

		var sub = request.getParameter('subsid');
		 var context = nlapiGetContext();
        var currentUserId = context.getUser();
        var subsidiaryFilter = nlapiLookupField('employee',currentUserId,'subsidiary');
		var isLocation = request.getParameter('isLocation');
		nlapiLogExecution('Debug','isLocation',isLocation);

		var locationId = request.getParameter('locationId');
		nlapiLogExecution('Debug','locationId',locationId);

		var jqueryLib;

		var form = nlapiCreateForm(SuiteletPageName,false);
		form.setScript('customscript_prg_cs_createinvoice');
		form.addButton('custpage_submit','Create Invoice','onClickInvoice()');
		var fldHtmlHeader = form.addField('custpage_header','inlinehtml','');
		var primaryInfo = form.addFieldGroup('custpage_primaryinfo', 'Primary Information');
		
		var subsidiary = form.addField('custpage_subs', 'select', 'Subsidiary', 'subss', 'custpage_primaryinfo');
		subsidiary.addSelectOption('','');
		subsidiary.setDefaultValue(sub);

		var Filter = new Array();
		Filter.push(new nlobjSearchFilter('isinactive',null,'is','F'));
		//Filter.push(new nlobjSearchFilter('subsidiary',null,'is',subsidiaryFilter));

		var col=new Array();
		col.push(new nlobjSearchColumn('internalid'));
		col.push(new nlobjSearchColumn('name'));

		var SearchRecord = nlapiSearchRecord('subsidiary',null,Filter,col);

		if(SearchRecord){

			nlapiLogExecution('Debug','SearchRecord',SearchRecord.length);

			for(var i=0;i<SearchRecord.length;i++)
			{
				subsidiary.addSelectOption(SearchRecord[i].getId(),SearchRecord[i].getValue('name'));
			}

		}

		if(action == 'getInvoice')
		{

			nlapiLogExecution('DEBUG', 'sub of client', sub);

			var filter = new Array();
			filter.push(new nlobjSearchFilter('subsidiary', null, 'is', sub));
			if(isLocation == 'T' && locationId)
				filter.push(new nlobjSearchFilter('location',null,'is', locationId));

			var column = new Array();
			column.push(new nlobjSearchColumn('location').setSort());
			column.push(new nlobjSearchColumn('custbody_invoicenumber'));

			var saveSearch = nlapiSearchRecord(null,'customsearch_prginventoryadjustment',filter,null);
			nlapiLogExecution('Debug','is search Result',JSON.stringify(saveSearch));

			
			var arrLocation = [];
			var arrInvoice = [];
			if(saveSearch){
				
				var invAdjInternalids = new Array();
				for(inv = 0; inv < saveSearch.length; inv++ ){
					
					var getAllColumns= saveSearch[inv].getAllColumns();
					var invAdjId = saveSearch[inv].getValue(getAllColumns[7]);
					invAdjInternalids.push(invAdjId);
					
				}
				
				var invoiceFilter = new Array();
				var invoiceColumn = new Array();
				invoiceFilter.push(new nlobjSearchFilter('custbody_relatedvendorcr_ck',null,'anyof',invAdjInternalids));
			//	invoiceFilter.push(new nlobjSearchFilter('location',null,'anyof',invAdjInternalids));
				invoiceFilter.push(new nlobjSearchFilter('mainline',null,'is','T'));
				invoiceColumn.push(new nlobjSearchColumn('custbody_relatedvendorcr_ck'));
				invoiceColumn.push(new nlobjSearchColumn('location'));
				var searchInvoice  = nlapiSearchRecord('invoice',null,invoiceFilter,invoiceColumn);
				nlapiLogExecution('debug','Invoice Results',JSON.stringify(searchInvoice));
				

				var location = form.addField('custpage_location','select','Location', 'loc', 'custpage_primaryinfo');
				location.addSelectOption('','');


				var invoice = form.addField('custpage_invoice','select','Invoice', 'inv', 'custpage_primaryinfo');
				invoice.addSelectOption('','');
					if(searchInvoice){
					
					var invoiceLocation = searchInvoice[0].getValue('location');
					
					}
					
					
					nlapiLogExecution('audit','Invoice Location',invoiceLocation);
					for(var i = 0; i < saveSearch.length; i++)
					{
						
						var getAllColumns= saveSearch[i].getAllColumns();
						var invoiceNumber = saveSearch[i].getValue(getAllColumns[1]);
						var subsidiary = saveSearch[i].getValue(getAllColumns[0]);
						var location1 = saveSearch[i].getValue(getAllColumns[2]);
						nlapiLogExecution('audit','Invoice Location and location1',invoiceLocation+'$$'+location1);
						if(invoiceLocation != location1){
							var currentLocation = saveSearch[i].getValue(getAllColumns[2]);

							if(i == 0)
							{
								location.addSelectOption(currentLocation, saveSearch[i].getText(getAllColumns[2]));
								arrLocation.push(currentLocation);
							}
							else{
								if(arrLocation.indexOf(currentLocation) == -1)
								{
									location.addSelectOption(currentLocation,  saveSearch[i].getText(getAllColumns[2]));
									arrLocation.push(currentLocation);
								}
							}


							if(isLocation == 'T') {

								var currentInvoice = saveSearch[i].getValue(getAllColumns[1]);
								if(i == 0)
								{
									invoice.addSelectOption('', saveSearch[i].getValue(getAllColumns[1]));
									arrInvoice.push(currentInvoice);
								}
								else{
									if(arrInvoice.indexOf(currentInvoice) == -1)
									{
										invoice.addSelectOption('', saveSearch[i].getValue(getAllColumns[1]));
										arrInvoice.push(currentInvoice);
									}
								}

							}
						}
					
					}
					
					
				
		
				if(isLocation == 'T')
					location.setDefaultValue(locationId);

			}

			else {

				var location = form.addField('custpage_location','select','Location', 'loc', 'custpage_primaryinfo');
				location.addSelectOption('','');

				var invoice = form.addField('custpage_invoice','select','Invoice', 'inv', 'custpage_primaryinfo');
				invoice.addSelectOption('','');

			}

		}

		else if(action == 'createInvoice')
		{

			var subsid = request.getParameter('Subs');

			var Locat = request.getParameter('Location');
			nlapiLogExecution('Debug','Location...',Locat);

			var Invo = request.getParameter('Invoice');
			nlapiLogExecution('Debug','Invoice...',Invo);
			var lineitems = new Array();
			var inventoryAdjIds = new Array();
			var filter = new Array();
			filter.push(new nlobjSearchFilter('subsidiary', null, 'is',subsid));
			filter.push(new nlobjSearchFilter('location',null,'is', Locat));
			filter.push(new nlobjSearchFilter('custbody_invoicenumber',null,'is',Invo));

			var column = new Array();
			column.push(new nlobjSearchColumn('subsidiary'));
			column.push(new nlobjSearchColumn('custbody_invoicenumber'));
			var submitRecord;
			var search = nlapiSearchRecord(null,'customsearch_prginventoryadjustment',filter,null);
			nlapiLogExecution('debug','Saved Search JSON',JSON.stringify(search));
			if(search != '' && search != null)
			{
				for(var i = 0; i < search.length; i++){
					 
					var getAllColumns= search[i].getAllColumns();
					var invoiceNumber = search[i].getValue(getAllColumns[1]);
					var subsidiary = search[i].getValue(getAllColumns[0]);
					var location1 = search[i].getValue(getAllColumns[2]);
					var linkedcustomer = search[i].getValue(getAllColumns[3]);
					var department = search[i].getValue(getAllColumns[4]);
					var departmentitem = search[i].getValue(getAllColumns[5]);
					var totalsalesamount = search[i].getValue(getAllColumns[6]);
					var internalid = search[i].getValue(getAllColumns[7]);

					      lineitems.push({
								subsidiary:subsidiary,
								invoicenumber:invoiceNumber,
								location1:location1,
								linkedcustomer:linkedcustomer,
								department:department,
								departmentitem:departmentitem,
								totalsalesamount:totalsalesamount,
						        internalid:internalid
						  });
					      
					      inventoryAdjIds.push(internalid);
					 
					}
				
				var invoicefilters = new Array();
				var invoicecolumns = new Array();
				invoicefilters.push(new nlobjSearchFilter('tranid',null,'is',invoiceNumber));
				invoicecolumns.push(new nlobjSearchColumn('tranid'));
				invoicecolumns.push(new nlobjSearchColumn('custbody_file_name'));

				var invoiceSearch = nlapiSearchRecord('invoice',null,invoicefilters,invoicecolumns);
				nlapiLogExecution('debug','Search Invoice Result',JSON.stringify(invoiceSearch));
				nlapiLogExecution('debug','Line Items JSON',JSON.stringify(lineitems));
				if(invoiceSearch){

					var invoiceId = invoiceSearch[0].id;
					nlapiLogExecution('debug','Invoice Id Alredy Saved',invoiceId);
					var loadInvoiceObj = nlapiLoadRecord('invoice',invoiceId);
					loadInvoiceObj.setFieldValues('custbody_relatedvendorcr_ck',inventoryAdjIds)
					for(var line = 0; line < lineitems.length; line++){
					  
					  nlapiLogExecution('debug','Load line item count',line);
					   nlapiLogExecution('debug','Subsidiary',lineitems[line].subsidiary);
					  if(lineitems[line].departmentitem != "" && lineitems[line].departmentitem != undefined){
						
						loadInvoiceObj.selectNewLineItem('item');
						loadInvoiceObj.setCurrentLineItemValue('item', 'item',lineitems[line].departmentitem);
						//loadInvoiceObj.setCurrentLineItemValue('item', 'location', locationId);
						loadInvoiceObj.setCurrentLineItemValue('item', 'grossamt', lineitems[line].totalsalesamount);
						loadInvoiceObj.commitLineItem('item');
						 
					 }
					  
				  }
					 nlapiLogExecution('debug','About to update invoice record');
					 var invoiceId = nlapiSubmitRecord(loadInvoiceObj);
					 /*
					 if(invoiceId){
						 
						 for(var i = 0; i < inventoryAdjIds.length; i++){
							 
							 var invAdjustmentId = inventoryAdjIds[i];
							 nlapiSubmitField('inventoryadjustment',invAdjustmentId,'custbody_relatedvendorcr_ck',invoiceId);
							 
						 }
						 
					 }  */

				}else{

				var createInvoiceObj = nlapiCreateRecord('invoice',{recordmode:'dynamic'});

				var customer =  lineitems[0].linkedcustomer;
				var subsidiary =  lineitems[0].subsidiary;
				var department =    lineitems[1].department;
				var departmentitem =  lineitems[0].departmentitem;
				var totalAmount = lineitems[0].totalsalesamount;
				var location1 = lineitems[0].location1;	
				createInvoiceObj.setFieldValue('entity',Number(customer));
				createInvoiceObj.setFieldValue('subsidiary',Number(subsidiary));
				createInvoiceObj.setFieldValue('department',Number(department));
				createInvoiceObj.setFieldValue('location',location1);
				createInvoiceObj.setFieldValue('tranid',invoiceNumber);
				createInvoiceObj.setFieldValues('custbody_relatedvendorcr_ck',inventoryAdjIds)

				  for(var line = 0; line < lineitems.length; line++){
					  
					if(lineitems[line].departmentitem)
					   {
						 
						 createInvoiceObj.selectNewLineItem('item');
						 
						 createInvoiceObj.setCurrentLineItemValue('item', 'item', lineitems[line].departmentitem);
						 createInvoiceObj.setCurrentLineItemValue('item', 'grossamt', lineitems[line].totalsalesamount);
						 createInvoiceObj.commitLineItem('item');
						 
						 
						 
					 }
					  
				  }

				 var invoiceid = nlapiSubmitRecord(createInvoiceObj);
				 if(invoiceid){
					 
					 for(var i = 0; i < inventoryAdjIds.length; i++){
						 
						 var invAdjustmentId = inventoryAdjIds[i];
						 //nlapiSubmitField('inventoryadjustment',invAdjustmentId,'custbody_relatedvendorcr_ck',invoiceId);
						 
					 }
					 
				 }

			}
				
				
				
				
			
			}

			var location = form.addField('custpage_location','select','Location', 'loc', 'custpage_primaryinfo');
			location.addSelectOption('','');

			var invoice = form.addField('custpage_invoice','select','Invoice', 'inv', 'custpage_primaryinfo');
			invoice.addSelectOption('','');
			
			var invoiceLink = nlapiResolveURL('RECORD', 'invoice', invoiceid);
			nlapiLogExecution('Debug', 'Invoice URL', invoiceLink);
			
			var htmlvar = '';
			htmlvar+='<div  id="msg_status_draft" class="uir-alert-box confirmation session_confirmation_alert" width="100%" role="status" style = "padding-top:0px;">';
			htmlvar+='<div class="icon confirmation"><img src="/images/icons/messagebox/icon_msgbox_confirmation.png" alt=""></div>';
			htmlvar+='<div class="content"><div class="title">Confirmation</div>';
			htmlvar+='<div class="descr">The Invoice is been created. <a href="'+invoiceLink+'"><u>Click Here</u></a> to view the invoice.</div>';
			htmlvar+='</div></div>';
			//response.write(htmlvar);
			fldHtmlHeader.setDefaultValue(htmlvar);
			//return;
			
			
		}	

		else {

			var location = form.addField('custpage_location','select','Location', 'loc', 'custpage_primaryinfo');
			location.addSelectOption('','');

			var invoice = form.addField('custpage_invoice','select','Invoice', 'inv', 'custpage_primaryinfo');
			invoice.addSelectOption('','');

		}
		
		response.writePage(form);

	}
}