/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       01 Nov 2017     Raksha Singh(Duplicate of billpayment script)
 *
 */

/**
 * @param {nlobjRequest} request Request object
 * @param {nlobjResponse} response Response object
 * @returns {Void} Any output is written via response object
 */
var SuiteletPageName = "Print Check";
var param ;

function CreateBillPayment(request, response){
	if(request.getMethod() == "GET")
	{
		var record;
		var vendorCode
		var action = request.getParameter('action');
		//nlapiLogExecution('DEBUG', 'action', action);
		var subsid = request.getParameter('subsid');
		var vendorids = new Array();
		//nlapiLogExecution('Debug','subsidiary ::',subsidiary);
		var type = request.getParameter('type');
		var entity = request.getParameter('entitytype');
		var entityid = request.getParameter('entityid');
		var folderId = 244;
		var entityIds = new Array();
		var isAccount = request.getParameter('isAccount');
		//nlapiLogExecution('Debug','isAccount::',isAccount);
		var account = request.getParameter('account');
		//nlapiLogExecution('Debug','account::',account);
		
		//Create the Suitelet Form
		var form = nlapiCreateForm(SuiteletPageName,false);
		form.setScript('customscript_prg_cs_billpayment');
		form.addButton('custpage_download','Print','onClickDownload()');
		var fldHtmlHeader = form.addField('custpage_header','inlinehtml','');

		
		
		var primaryInfo = form.addFieldGroup('custpage_primaryinfo', 'Primary Information');
		var entityType = form.addField('custpage_entity_type', 'select', 'Select Entity', 'type', 'custpage_primaryinfo');
		
		entityType.addSelectOption('','');
		
		entityType.addSelectOption('1','Vendor');
		entityType.addSelectOption('2','Employee');
		if(entityid){

			entityType.setDefaultValue(entityid);

		}
		var recordType = form.addField('custpage_record_type', 'select', 'Transaction Type', 'type', 'custpage_primaryinfo');
		
		recordType.addSelectOption('','');
		recordType.setDefaultValue(type);
		recordType.addSelectOption('1','Write Check');
		recordType.addSelectOption('2','Vendor Payment');
		var subsidiary = form.addField('custpage_subsidiary', 'select', 'Subsidiary', 'subss', 'custpage_primaryinfo');
		subsidiary.addSelectOption('','');
		subsidiary.setDefaultValue(subsid);
		
		var accountId = form.addField('custpage_account', 'select', 'Account', 'acc', 'custpage_primaryinfo');
		accountId.addSelectOption('','');
		accountId.setDefaultValue(account);
		
		//var Filter = new Array();
		//Filter.push(new nlobjSearchFilter('isinactive',null,'is','F'));
		var col=new Array();
		col.push(new nlobjSearchColumn('subsidiary',null,'group'));
		if(type == '1'){
			
			 record = 'check';
			
		}else{
			
			record = 'vendorpayment';
		}
		var SearchRecord = nlapiSearchRecord(record,null,null,col);
		var arrSubs = [];
		if(SearchRecord){

			nlapiLogExecution('Debug','SearchRecord',SearchRecord.length);

			for(var i=0;i<SearchRecord.length;i++)
			{
				var currentSubs = SearchRecord[i].getValue('subsidiary',null,'group');
				
					subsidiary.addSelectOption(SearchRecord[i].getValue('subsidiary',null,'group'),SearchRecord[i].getText('subsidiary',null,'group'));
					//arrSubs.push(currentSubs);
				
				
				
			}

		}

		if(action == 'getBillPaymentDetail')
		{

			//nlapiLogExecution('DEBUG', 'sub of client', subsid);
			

			var date=form.addField('custpage_date', 'date', 'Date', null, 'custpage_primaryinfo');
			


			var filter = new Array();
			if(subsid){
				filter.push(new nlobjSearchFilter('subsidiary', null, 'is', subsid));
				filter.push(new nlobjSearchFilter('mainline', null, 'is', 'T'));
				filter.push(new nlobjSearchFilter('tobeprinted', null, 'is', 'F'));
			}
			
			
		
			
//			if(isAccount == 'T' && account)
//				filter.push(new nlobjSearchFilter('account',null,'is', account));

			var column = new Array();
			column.push(new nlobjSearchColumn('account'));
			column.push(new nlobjSearchColumn('trandate'));
			column.push(new nlobjSearchColumn('entity'));
			column.push(new nlobjSearchColumn('internalid').setSort());
			if(type == '1'){
				
				var record = 'check';
				
			}else{
				
				var record = 'vendorpayment';
			}
			
			if(record == "check"){
				
				filter.push(new nlobjSearchFilter('mainline', null, 'is', 'T'));
			}
             nlapiLogExecution('audit','RECORD 1234',record)
			var searchResults = nlapiSearchRecord(record,null,filter,column);
			nlapiLogExecution('Debug','is search Result',JSON.stringify(SearchRecord));
			var arrAccount = [];
			
			var SearchRecord = searchResults;
			
			while(searchResults.length == 1000){
			  //var columns = searchResults[999].getAllColumns();	
			  var lastId = searchResults[999].getValue('internalid'); //note the last record retrieved
			  filter.push(new nlobjSearchFilter('internalidnumber',null,'greaterthan',lastId));
			 searchResults = nlapiSearchRecord(record,null,filter,column);
			 SearchRecord = SearchRecord.concat(searchResults);
				
			}  
			
			if(SearchRecord){
				
				//nlapiLogExecution('Debug','SearchRecord action',SearchRecord.length);
				for(var ss=0;ss<SearchRecord.length;ss++){
					
					nlapiLogExecution('emergency','Record ID',SearchRecord[ss].id);
					
					entityIds.push(SearchRecord[ss].getValue('entity'));
				}
				
				
				//nlapiLogExecution('debug','ENTITY IDS',JSON.stringify(entityIds));
				
				var entityFilters = new Array();
				var entityColumns = new Array();
				entityFilters.push(new nlobjSearchFilter('internalid',null,'anyof',entityIds));
				
				entityColumns.push(new nlobjSearchColumn('type'));
			
				var searchEntities = nlapiSearchRecord('entity',null,entityFilters,entityColumns);
				nlapiLogExecution('debug','Search Entities',JSON.stringify(searchEntities));
				
				if(searchEntities){
					
					// get all vendors and push it
					nlapiLogExecution('audit','ENTITY LENGTH',searchEntities.length)
					for(var fi = 0; fi < searchEntities.length; fi++){
						
						var type = searchEntities[fi].getValue('type');
						nlapiLogExecution('debug','TYPE',type+'@@@'+entity);
						var vendorid = searchEntities[fi].id;
						if(type == entity){
							
							vendorids.push(vendorid);
							
						}
						
					}
					
					
					nlapiLogExecution('debug','Vendor IDS',JSON.stringify(vendorids));
					
					for(var i=0;i<SearchRecord.length;i++)
					{
							
								
								if(record == 'check' && vendorids.indexOf(SearchRecord[i].getValue('entity')) >= 0){
								
									var currentAccount = SearchRecord[i].getValue('account');
									if(i == 0){
										accountId.addSelectOption(SearchRecord[i].getValue('account'),SearchRecord[i].getText('account'));	
										arrAccount.push(currentAccount);
									}
									else{
										if(arrAccount.indexOf(currentAccount) == -1)
										{
											accountId.addSelectOption(SearchRecord[i].getValue('account'),SearchRecord[i].getText('account'));	
											arrAccount.push(currentAccount);
										}
									}
								
								
							}


							if(record == 'vendorpayment'){
								
									var currentAccount = SearchRecord[i].getValue('account');
									if(i == 0){
										accountId.addSelectOption(SearchRecord[i].getValue('account'),SearchRecord[i].getText('account'));	
										arrAccount.push(currentAccount);
									}
									else{
										if(arrAccount.indexOf(currentAccount) == -1)
										{
											accountId.addSelectOption(SearchRecord[i].getValue('account'),SearchRecord[i].getText('account'));	
											arrAccount.push(currentAccount);
										}
									}
								
								
							}
								
								
							
							
						
					}
					
				}

			

				if(isAccount == 'T' && account)
				{
					
					nlapiLogExecution('Debug','acct :::',account);
					//getdate.setDefaultValue(SearchRecord[0].getValue('trandate'));

				}
			}

		}
		else if(action == 'downloadbill')
		{
			//nlapiLogExecution('Debug','Inside downloadbill');
			txtBody ='';
			var subsid = request.getParameter('Subs');
			var type = request.getParameter('type');
			var Acc = request.getParameter('Account');
			var entity = request.getParameter('entitytype');
			//nlapiLogExecution('Debug','Account...',Acc);

			var Date = request.getParameter('Date');
			//nlapiLogExecution('Debug','Date...',Date);
			//All the spaces 
			var VAT = 'VAT';
			var vendorCodeLength = 10;
			var checkNumber = 50;
			var checkAmount = 15;
			var checkDate = 8;
			var taxCode =8;
			var pOfCheck = 50;
			var payee = 250;
			var CashVoucherNo = 15;
			//Raksha Update
			
			
			
			//Raksha Update End

	

			var filter = new Array();
			filter.push(new nlobjSearchFilter('subsidiary', null, 'is', subsid));
			filter.push(new nlobjSearchFilter('account',null,'is', Acc));
			filter.push(new nlobjSearchFilter('trandate',null,'on', Date));
			filter.push(new nlobjSearchFilter('tobeprinted',null,'is','F'));
			
			//nlapiLogExecution('Debug','1');
			var column = new Array();
			column.push(new nlobjSearchColumn('subsidiary'));
			column.push(new nlobjSearchColumn('account'));
			column.push(new nlobjSearchColumn('trandate'));
			column.push(new nlobjSearchColumn('entity'));
			column.push(new nlobjSearchColumn('custbody_printcheck'));
			column.push(new nlobjSearchColumn('memo'));
			if(entity == 'Vendor'){
				
				column.push(new nlobjSearchColumn('entityid','vendor'));

			}else{

				column.push(new nlobjSearchColumn('internalid','employee'));
			}
			
			column.push(new nlobjSearchColumn('total'));
			column.push(new nlobjSearchColumn('tranid'));
			//nlapiLogExecution('Debug','2');

			if(type == '1'){
				
				var record = 'check';
				
			}else{
				
				var record = 'vendorpayment';
			}
			var Search = nlapiSearchRecord(record,null,filter,column);
			//nlapiLogExecution('Debug','Search length of bill payment rs......',Search.length);

			if(!Search){

				var form1 = nlapiCreateForm(SuiteletPageName,false);
				form1.setScript('customscript_prg_cs_billpayment');
				
				var fldHtmlHeader = form1.addField('custpage_header','inlinehtml','');
				var resolveUrl =nlapiResolveURL('SUITELET','customscript_prg_st_billpayment','customdeploy_prg_st_billpayment')
					var htmlvar = '';

					htmlvar+='<div id="div__alert">';
					htmlvar+='	<div class="uir-alert-box warning invalidemaildomid" width="undefined" role="status">';
					htmlvar+='<div class="icon warning"><img src="/images/icons/messagebox/icon_msgbox_warning.png" alt=""></div>';
					htmlvar+='<div class="content">';
					htmlvar+='<div class="title">Information</div>';
					htmlvar+='<div class="descr">There is no Check for the selected date OR check is already been Printed. <a href=" '+resolveUrl+'"><u><b>Click Here </u></b></a>To re-select the details.</div>';
					htmlvar+='</div></div>';

					fldHtmlHeader.setDefaultValue(htmlvar);
					response.writePage(form1);
					return;
			}
			
			
			//nlapiLogExecution('Debug','3');
			//nlapiLogExecution('Debug','Search',JSON.stringify(Search));
			if(Search){
				
				
					//=============================================================================================//
				var entityIds = new Array();
				nlapiLogExecution('Debug','SearchRecord action',Search.length);
				for(var ss=0;ss<Search.length;ss++){
					
					entityIds.push(Search[ss].getValue('entity'));
				}
				
				
				//nlapiLogExecution('debug','ENTITY IDS',JSON.stringify(entityIds));
				
				var entityFilters = new Array();
				var entityColumns = new Array();
				entityFilters.push(new nlobjSearchFilter('internalid',null,'anyof',entityIds));
				
				entityColumns.push(new nlobjSearchColumn('type'));
			
				var searchEntities = nlapiSearchRecord('entity',null,entityFilters,entityColumns);
				nlapiLogExecution('debug','Search Entities',JSON.stringify(searchEntities));
				
				if(searchEntities){
					
					// get all vendors and push it
					
					for(var fi = 0; fi < searchEntities.length; fi++){
						
						var type = searchEntities[fi].getValue('type');
						nlapiLogExecution('debug','TYPE',type+'@@'+entity);
						var vendorid = searchEntities[fi].id;
						if(type == entity){
							
							vendorids.push(vendorid);
							
						}
						
						
					}
					//nlapiLogExecution('debug','vendorids.............',vendorids.length);
				}
					
					
					nlapiLogExecution('debug','Vendor IDS',JSON.stringify(vendorids));
					nlapiLogExecution('debug','Vendor IDS length',vendorids.length);
				
				//===================================================================================================//
				
				
				 	var getTranDate = Search[0].getValue('trandate');
				 	getTranDate = getTranDate.split('/');
				 	var month = getTranDate[0];
				 	var date = getTranDate[1];
				 	var year = getTranDate[2];
				 	month = month.toString();
				 	date = date.toString();
				 	if(month.length == 1){
				 		
				 		month = '0'+month;
				 		
				 	}
				 	
				 	if(date.length == 1){
				 		
				 		date = '0'+date;
				 		
				 	}
					var resultDate = month+date+year;
					
					//nlapiLogExecution('debug','strDate',strDate);
					nlapiLogExecution('debug','resultDate',resultDate);
					var getSubsidiary = Search[0].getValue('subsidiary');
					
			}
		
			//nlapiLogExecution('Debug','getSubsidiary :',getSubsidiary);
			
			var company_id = nlapiLookupField('subsidiary',getSubsidiary,'custrecord_jdaid');
			nlapiLogExecution('Debug','company_id :',company_id);

			txtBody+='MBTC-CCWS'+resultDate+'-   '+company_id;
			
			var context = nlapiGetContext();
			var newAttachment;
			var file;
	
			var searchLength = Search.length;
			nlapiLogExecution('audit','searchLength after MBTC-CCWS line',searchLength);
			var totalLength;
			
			
			if(record == 'check'){
				
				var totalVendors = Search.length;
				nlapiLogExecution('debug','Record is check',totalVendors);
				if(totalVendors > 40){
					
					totalLength = 40;
					
				}else{
					
					totalLength = totalVendors;
				}
				
				
				
			}
			
			if(record == 'vendorpayment')
			{
				
			//	nlapiLogExecution('debug','Record is Vendor Payment');
				if(searchLength > 40){
					
					totalLength = 40;
					
				}else{
					
					totalLength = searchLength;
				}
				
			}
			//nlapiLogExecution('debug','searchLength Length',searchLength);
			nlapiLogExecution('debug','Total Length',totalLength);
			if(Search != '' && Search != null)
			{
				for(var i = 0; i < totalLength; i++)
				{
				//	nlapiLogExecution('debug','wwwwwwww',i);
					
					var usage = context.getRemainingUsage();
					nlapiLogExecution('debug',"Usage.........",usage);

					var recId = Search[i].getId();
					
					nlapiLogExecution('debug','Rec ID',recId);
	
					
					var getAccount = Search[i].getValue('account');
					
					var payeeVendorId = Search[i].getValue('entity');
				//	nlapiLogExecution('debug','Payeee Vendor ID',payeeVendorId);
				//	nlapiLogExecution('debug','ssssssssss',JSON.stringify(vendorids));
					if(vendorids.indexOf(payeeVendorId) != -1){
						
						
//						nlapiLogExecution('debug','eeeeeeeeeeeeee',payeeVendorId+'vendorids'+JSON.stringify(vendorids));
						if(entity == 'Vendor'){
								var vendorCode = Search[i].getValue('entityid','vendor');

						}else{


							var vendorCode = Search[i].getValue('internalid','employee');
							
							// nlapiLookupField('vendor',payeeVendorId,'entityid');
						}
						
						nlapiLogExecution('debug','VENDOR CODE',vendorCode);
						var payeeName = Search[i].getValue('custbody_printcheck');
						
						var purposeOfCheck = Search[i].getValue('memo');
						var checkAmount =  Number(Search[i].getValue('total'));
						checkAmount = Math.abs(checkAmount);
						//nlapiLogExecution('audit','CHECK AMOUNT',checkAmount);
						var checkNo = Search[i].getValue('tranid');
						//nlapiLogExecution('audit','checkNo',checkNo);
						
						
						checkAmount = checkAmount.toFixed(2);
						checkAmount = checkAmount.toString();
						checkAmount = checkAmount.split(".");
						
						var zeros='0';
						var spaces = ' ';
						
						var finalAmount = checkAmount[0] + checkAmount[1];
//						nlapiLogExecution('Debug','finalAmount',finalAmount);
						
						finalAmount = finalAmount.toString();
						var length =getSpaceLength(finalAmount.length);
						var stringLength = purposeOfCheck.length;
						var getStringLength = getStringSpaceLength(stringLength);
						
//						nlapiLogExecution('debug','Length',length);
//						nlapiLogExecution('debug','String Space Length',getStringLength);
						for(var ii = 1; ii<length; ii++){  
							zeros = zeros + '0';
						}
						
						for(var jj = 1; jj <= getStringLength; jj++){  
							spaces = spaces + ' ';
						}
						
						
						
//						nlapiLogExecution('debug','Vendor Code',vendorCode)
						if(vendorCode){
							
							vendorCode = vendorCode.toString();
							
						}
						
						var finalVendorCode = Number(vendorCodeLength) - Number(vendorCode.length);
						var vendorcode_space = addSpaces(finalVendorCode);
						vendorCode = vendorCode + vendorcode_space;
//						nlapiLogExecution('debug','vendorCode finalll',vendorCode);
						
						//==========Check Number========//
						
						checkNo = checkNo.toString();
						var finalCheckNo = Number(checkNumber) - Number(checkNo.length);
						
						var checkNumberSpace = addSpaces(finalCheckNo);
						//nlapiLogExecution('debug','Check finalCheckNo',finalCheckNo);
						checkNo = checkNo+checkNumberSpace;
						
						nlapiLogExecution('debug','Check No.............',checkNo);
						
						var countVat = Number(taxCode) - Number(VAT.length);
						//nlapiLogExecution('audit','Count Vat',countVat);
						var vatSpace = addSpaces(countVat);
						var vat = VAT+vatSpace;
						
						purposeOfCheck = purposeOfCheck.toString();
						var countP = Number(pOfCheck) - Number(purposeOfCheck.length);
						var pSpace = addSpaces(countP);
						purposeOfCheck = purposeOfCheck + pSpace;
						
						payeeName = payeeName.toString();
						var countPayee = Number(payee) - Number(payeeName.length);
						var spacesPayee = addSpaces(countPayee);
						payeeName = payeeName + spacesPayee;
						
						var checkNumberFile = Search[i].getValue('tranid');
						var checkNoFile = Search[i].getValue('tranid');
						nlapiLogExecution('audit','checkNumberFilerrrrrrrrrrr',checkNumberFile);
						nlapiLogExecution('audit','ppppppppppppp',checkNumberFile.length);
						var countcheckNumberFile = Number(CashVoucherNo) - Number(checkNumberFile.length);
						var checkNo_spacess = addSpaces(countcheckNumberFile);
						checkNumberFile = checkNumberFile + checkNo_spacess;
						
						var prefixVoucher = 'V';
						var voucherSpaces = addSpaces(16);
						var voucherToPrint = prefixVoucher+voucherSpaces+checkNumberFile;
						//********************************************************************************************************************
						if(vendorCode && vendorCode.length > 10){

							vendorCode = addSpaces(10);

						}
						txtBody+='\r\nC'+vendorCode+checkNo+zeros+finalAmount+resultDate+vat+purposeOfCheck+payeeName;
						txtBody+='\r\n';
						if(record == 'check'){
							
							txtBody+=voucherToPrint;
						}
						
						//nlapiLogExecution('Debug','URL,,,,,  ',URL);
						/*var searchResultss = nlapiRequestURL(URL,{action: 'ProcessRecord',  recId: recId});
						*/
						nlapiLogExecution('Debug','sssssssssssssssss  ',recId);
						var URL = nlapiResolveURL('SUITELET','customscript_prg_st_checkprintprocesdata','customdeploy_prg_st_checkprintprocesdata',true);

						var recId = Search[i].getId();
						URL += '&action=ProcessRecord';
						URL += '&recId='+recId;
						URL += '&voucherToPrint='+voucherToPrint;
						  
						   
						 //  nlapiLogExecution('Debug', 'URL 2', url);
						   
//						   var stringScript="window.open('"+url+"','_blank','toolbar=yes, location=yes, status=yes, menubar=yes, scrollbars=yes')";
						if(record != 'check'){

							var a = nlapiRequestURL(URL);
						   nlapiLogExecution('Debug', 'a', a);
						   var b = JSON.parse(a.getBody());
						   nlapiLogExecution('Debug', 'b', JSON.stringify(b));
						   
						   
//						   response.sendRedirect("SUITELET", "customscript_prg_st_checkprintprocesdata", "customdeploy_prg_st_checkprintprocesdata", false, action);					 
//						   var url = nlapiResrolveURL('SUITELET', '', '', true);
						
						for(var ss = 0;ss < b.length; ss++)
							{
							var totalresult = voucherToPrint+b[ss].invoiceno;
							var res = totalresult.indexOf(b[ss].invoiceno);
							nlapiLogExecution('Debug','res result ',res);
							var spaceresult = addSpaces(res);
							nlapiLogExecution('Debug','spaceresult ',spaceresult);
							var deductions = b[ss].dmcm_Amount
							deductions=deductions.replace(/\,/g,''); // 1125, but a string, so convert it to number
							deductions=parseInt(deductions,10);
							nlapiLogExecution('audit','DMCM AMOUNT',b[ss].dmcm_Amount);
							txtBody+=b[ss].voucherToPrint+b[ss].invoice_Number+b[ss].resultinvoiceDate+b[ss].invoiceAmtzeros+b[ss].invoiceAmountPrint+b[ss].dmcmZeros+deductions+b[ss].invoiceTaxZeros+b[ss].finalTaxPrint+'\r\n';

							}


						}
							
						
						//dmcm_Amount+b[ss].finalInvoicetax+b[ss].finalInvoicetax+b[ss].invoicezeros+b[ss].finalInvoiceAmount+'\r\n'+spaceresult;

						
				//	var array.push({'recId':recId,'getSubsidiary':getSubsidiary,'getAccount':getAccount,'getTranDate':getTranDate,'company_id':company_id,'vendorCode':vendorCode,'payeeName':payeeName,'purposeOfCheck':purposeOfCheck,'checkAmount':checkAmount,'checkNo':checkNo});
					        
					    	var submit = nlapiSubmitField(record,recId,'tobeprinted','T');
					    	nlapiLogExecution('Debug','submit,,,,,  ',submit);
					}else{




					}
					
					
					
				    	
				    
				    	
				}
				
				if(company_id.length < 3){
					newAttachment = nlapiCreateFile('NS'+'C'+checkNoFile+'.0'+company_id, 'PLAINTEXT',txtBody);
				}
				else
				{
					newAttachment = nlapiCreateFile('NS'+'C'+checkNoFile+'.'+company_id, 'PLAINTEXT',txtBody);
				}
			
//				nlapiLogExecution('debug','newAttachment',newAttachment);
				 
				
				 newAttachment.setFolder(folderId);
				 newAttachment.setEncoding('windows-1252');
				file = nlapiSubmitFile(newAttachment);
				var append ='&_xd=T';
				/*var resolve = nlapiResolveURL('RECORD','folder',file);
				nlapiLogExecution('Debug','resolve',resolve);*/
				var result;
				var Filter=[];
				Filter.push(new nlobjSearchFilter('internalid',null,'is',file));
				var column = new Array();
				column.push(new nlobjSearchColumn('url'));
				var search = nlapiSearchRecord('file',null,Filter,column);
				 //nlapiLogExecution('Debug','searchhhhhhhhhhhhhhhhhhh',search);
				if(search)
				{
					 result = search[0].getValue('url');
					 var res = result+append;
					 //nlapiLogExecution('Debug','result',result);
				}
		

				
				
				var htmlvar = '';

				htmlvar+='<div  id="msg_status_draft" class="uir-alert-box confirmation session_confirmation_alert" width="100%" role="status" style = "padding-top:0px;">';
				htmlvar+='<div class="icon confirmation"><img src="/images/icons/messagebox/icon_msgbox_confirmation.png" alt=""></div>';
				htmlvar+='<div class="content"><div class="title">Confirmation</div>';
				htmlvar+='<div class="descr">Check Printed. <a href="'+res+'"><u><b>Click Here</u></b></a> to Download.</div>';
				htmlvar+='</div></div>';

				fldHtmlHeader.setDefaultValue(htmlvar);
				
			
			
			
				}
			else{
			
				
			}
			
		
			var date=form.addField('custpage_date', 'date', 'Date', null, 'custpage_primaryinfo');
			
			
	

		}

		
		else {
			var date=form.addField('custpage_date', 'date', 'Date', null, 'custpage_primaryinfo');


		}
		
		

	}
	response.writePage(form);

}


function getSpaceLength(length){
	var CONSTANT = 15;
    var space = CONSTANT - length;
	return space;

}

function getStringSpaceLength(memo){
	
	var CONST_LENGTH = 50;
	var space = CONST_LENGTH - memo;
	return space;
	
}


function addSpaces(length){
	
	var space = ' ';
	//nlapiLogExecution('Debug','space length of addspaces',space.length);
	for(var s = 1; s < length; s++){
		
		space = space+' ';

	}

	return space;	
}
	
	





