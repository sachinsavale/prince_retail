	/* **************************************************************************************  
	 ** Copyright (c) 1998-2014 Softype, Inc.                                 
	 ** Morvi House, 30 Goa Street, Ballard Estate, Mumbai 400 001, India
	 ** All Rights Reserved.                                                    
	 **                                                                         
	 ** This software is the confidential and proprietary information of          
	 ** Softype, Inc. ("Confidential Information"). You shall not               
	 ** disclose such Confidential Information and shall use it only in          
	 ** accordance with the terms of the license agreement you entered into    
	 ** with Softype.                       
	 ** @author:  Sachin Savale
	 ** @version: 1.0
	 ** Description:
	 ***************************************************************************************/
	
	function afterSubmit_AddSubsidiary(type)
	{
		var recType = nlapiGetRecordType();
		var currentRecord = nlapiGetNewRecord();
		nlapiLogExecution('debug','Currennt Record',JSON.stringify(currentRecord));
		var vatable = currentRecord.getFieldValue('custentity_vatable');
		nlapiLogExecution('debug','Vatable',vatable);
		var recId = nlapiGetRecordId();
		var tax = 9;
		var notax = 5;
		/*
			if(type == 'edit'){
				
				var All_Sub = new Array();
				var columns = new Array();
				columns.push(new nlobjSearchColumn('name'));
	          //Added by Sarah on 26th May 2017
	          var filter = new Array();
	          filter.push(new nlobjSearchFilter('iselimination',null,'is','F'));
	          filter.push(new nlobjSearchFilter('isinactive',null,'is','F'));
			  var srchSubsidary = nlapiSearchRecord('subsidiary', null, filter, columns);
				for (var i = 0; i < srchSubsidary.length; i++) 
				{
					var ID = srchSubsidary[i].getId();
					All_Sub.push(ID);
				}
		
				var current_Merchant = nlapiLoadRecord(recType,recId);
		
				var vatable = current_Merchant.getFieldValue('custentity_vatable');
				if(vatable == 'T'){
//					for (var j = 0; j < All_Sub.length; j++) 
//		            {
//		              current_Merchant.selectNewLineItem('submachine'); 
//		              current_Merchant.setCurrentLineItemValue('submachine', 'subsidiary', All_Sub[j]); 
//		              current_Merchant.setCurrentLineItemValue('submachine', 'taxitem', tax);
//		              current_Merchant.commitLineItem('submachine');
//		            }
				}else{
					
					for (var j = 0; j < All_Sub.length; j++) 
		            {
		              current_Merchant.selectNewLineItem('submachine'); 
		              current_Merchant.setCurrentLineItemValue('submachine', 'subsidiary', All_Sub[j]); 
		              current_Merchant.setCurrentLineItemValue('submachine', 'taxitem', notax);
		              current_Merchant.commitLineItem('submachine');
		            }
					
				}
				
				nlapiSubmitRecord(current_Merchant,true);
			
		} */
		
		if(type=='create' || type== 'CREATE') 
		{
			nlapiLogExecution('debug','Create');
			var All_Sub = new Array();
			var columns = new Array();
			columns.push(new nlobjSearchColumn('name'));
          //Added by Sarah on 26th May 2017
          var filter = new Array();
          filter.push(new nlobjSearchFilter('iselimination',null,'is','F'));
          filter.push(new nlobjSearchFilter('isinactive',null,'is','F'));
		  var srchSubsidary = nlapiSearchRecord('subsidiary', null, filter, columns);
			for (var i = 0; i < srchSubsidary.length; i++) 
			{
				var ID = srchSubsidary[i].getId();
				All_Sub.push(ID);
			}
	
			var current_Merchant = nlapiLoadRecord(recType,recId);
			var vatable = current_Merchant.getFieldValue('custentity_vatable');
			if(vatable == 'T'){
				for (var j = 0; j < All_Sub.length; j++) 
	            {
	              current_Merchant.selectNewLineItem('submachine'); 
	              current_Merchant.setCurrentLineItemValue('submachine', 'subsidiary', All_Sub[j]); 
	            //  current_Merchant.setCurrentLineItemValue('submachine', 'taxitem', tax);
	              current_Merchant.commitLineItem('submachine');
	            }
			}else{
				
				for (var j = 0; j < All_Sub.length; j++) 
	            {
	              current_Merchant.selectNewLineItem('submachine'); 
	              current_Merchant.setCurrentLineItemValue('submachine', 'subsidiary', All_Sub[j]); 
	              current_Merchant.setCurrentLineItemValue('submachine', 'taxitem', notax);
	              current_Merchant.commitLineItem('submachine');
	            }
				
			}
			

            var submit_vendor= nlapiSubmitRecord(current_Merchant,true);

			
			
			
			nlapiLogExecution("DEBUG","Vendor ID",submit_vendor)
		}
	
	}