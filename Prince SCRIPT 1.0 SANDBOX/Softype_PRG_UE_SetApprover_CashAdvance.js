/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       23 Nov 2017     kollidam
 *
 */

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType
 * 
 * @param {String} type Operation types: create, edit, delete, xedit
 *                      approve, reject, cancel (SO, ER, Time Bill, PO & RMA only)
 *                      pack, ship (IF)
 *                      markcomplete (Call, Task)
 *                      reassign (Case)
 *                      editforecast (Opp, Estimate)
 * @returns {Void}
 */
function userEventBeforeSubmit(type){
	
	
var PENDING_APPROVAL = 4;
	
	var recObj = nlapiGetNewRecord();
	
	var status = recObj.getFieldValue('custrecord_travel_status');
	nlapiLogExecution('debug','STATUS',status);
	if(type == 'create'){
		
		
		
		if(status == PENDING_APPROVAL){
			var emp = recObj.getFieldValue('custrecord_travel_employee');
			var recType = nlapiGetRecordType();
			var employeeData = nlapiLookupField('employee',emp,['supervisor','department','location']);
			var emp_dept = employeeData.department;
			var emp_location = employeeData.location;
			
			var approvalFilter = [];
			var approvalColumn = [];
			
			approvalFilter.push(new nlobjSearchFilter('custrecord_prg_approval_record_type',null,'is',recType));
			approvalFilter.push(new nlobjSearchFilter('custrecord_prg_preapproval_status',null,'is',status));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approver_role'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_department'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_location'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_postapproval_status'));
			
			var searchMatrix = nlapiSearchRecord('customrecord_prg_approval_matrix',null,approvalFilter,approvalColumn);
			nlapiLogExecution('debug','Search Matrix Record',JSON.stringify(searchMatrix));
			
			
			if(searchMatrix){
				
				var dept = searchMatrix[0].getValue('custrecord_prg_approval_department');
				var location = searchMatrix[0].getValue('custrecord_prg_approval_location');
				var role = searchMatrix[0].getValue('custrecord_prg_approver_role');
				var postStatus = searchMatrix[0].getValue('custrecord_prg_postapproval_status');
				
				var employee_filter = [];
				var employee_column = [];
				
				if(dept == 'T'){
					
					employee_filter.push(new nlobjSearchFilter('department',null,'is',emp_dept));
					
				}
				
				if(location == 'T'){
					
					//employee_filter.push(new nlobjSearchFilter('location',null,'is',emp_location));
					
				}
					
					
					employee_filter.push(new nlobjSearchFilter('role',null,'is',role));
					
					//employee_filter.push(new nlobjSearchFilter('location',null,'is',emp_location));
					
					var employee_search = nlapiSearchRecord('employee',null,employee_filter,employee_column);
					
					nlapiLogExecution('debug','Employee Search Record',JSON.stringify(employee_search));
					
					if(employee_search){
						
						nlapiLogExecution('debug','Employee search id',employee_search[0].getId());
						recObj.setFieldValue('custrecord_travel_approver',employee_search[0].getId());
						//nlapiSetFieldValue('custrecord_travel_status',postStatus);
						
						
					}
					
					
				
				
			
				
			}
			
			
			
			//recObj.setFieldValue('custrecord_travel_approver',supervisor);
			
			
			
			
			
			
			
			
		}
		
		
		
		
		
		
		
		
	}
 
}

/**
 * The recordType (internal id) corresponds to the "Applied To" record in your script deployment. 
 * @appliedtorecord recordType
 * 
 * @param {String} type Operation types: create, edit, delete, xedit,
 *                      approve, cancel, reject (SO, ER, Time Bill, PO & RMA only)
 *                      pack, ship (IF only)
 *                      dropship, specialorder, orderitems (PO only) 
 *                      paybills (vendor payments)
 * @returns {Void}
 */
function userEventAfterSubmit(type){
	
	
	
	
	
	
	
  
}
