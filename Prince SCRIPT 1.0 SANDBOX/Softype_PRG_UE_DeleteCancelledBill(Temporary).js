/* ************************************************************************************  
 ** Copyright (coffee) 1998-2012 Softype, Inc.                                 
 ** Morvi House, 30 Goa Street, Ballard Estate, Mumbai 400 001, India
 ** All Rights Reserved.                                                    
 **                                                                         
 ** This software is the confidential and proprietary information of          
 ** Softype, Inc.("Confidential Information"). You shall not disclose              
 ** such Confidential Information and shall use it only in accordance         
 ** with the terms of the license agreement you entered into with Softype.
 ** @version: Revised version               
 **                       
 ** @author: Rutika More    
 ** @dated: 
 ** @Description:
 ************************************************************************************ */

function beforeLoad_deleteCancelledBills(type)
{
	var recid = nlapiGetRecordId();
	nlapiLogExecution('debug','recid',recid);
	var rectype = nlapiGetRecordType();
	nlapiLogExecution('debug','rectype',rectype);
	var status = nlapiGetFieldValue('status');
	nlapiLogExecution('debug','status',status);

	if(status == 'VendBill:C' || status == 'Cancelled')
	{
		nlapiLogExecution('debug','Inside Status');
		nlapiDeleteRecord(rectype,recid);
		return true;
	}

}