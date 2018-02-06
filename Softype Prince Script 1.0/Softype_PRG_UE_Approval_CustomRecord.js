/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       14 Dec 2017     kollidam
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
	if(type == 'delete'){
		
		return;
	}
	var entityType;
	var approverField;
	var accessRole;
	var CASH_ADVANCE_REQUEST = Number(103);
	var recObj = nlapiLoadRecord(nlapiGetRecordType(),nlapiGetRecordId());
	var recTypeId = recObj.getFieldValue('rectype');
	nlapiLogExecution('audit','Record Type',recTypeId);
	var recordId = 104;
	var defaultRole = 1036;
	var recType = Number(recObj.getFieldValue('rectype')); //nlapiGetRecordType();
	var id = recObj.getFieldValue('id');
	nlapiLogExecution('debug','Record Type',recType);
	var emp_dept = recObj.getFieldValue('custrecord_travel_department');
	var emp_location = recObj.getFieldValue('custrecord_travel_location');
	var emp_class = recObj.getFieldValue('custrecord_prg_cash_advance_class');
	var amount = recObj.getFieldValue('custrecord_travel_budget');
	var status = recObj.getFieldValue('custrecord_travel_status');
	var travelType = recObj.getFieldValue('custrecord_travel_category');
	recObj.setFieldValue('custrecord_travel_approver', '');
	recObj.setFieldValue('custrecord_apc_approver', '');
	recObj.setFieldValue('custrecord_travel_approver', '');
	recObj.setFieldValue('custrecord_travel_altapprover', '');
	
	if(type == 'create' || type == 'edit'){
		
		
		
		if(status == PENDING_APPROVAL){
			
			var approvalFilter1 = [];
			var approvalColumn1 = [];
			approvalFilter1.push(new nlobjSearchFilter('isinactive',null,'is','F'));
			approvalFilter1.push(new nlobjSearchFilter('custrecord_prg_approval_record',null,'is',recType));
			approvalFilter1.push(new nlobjSearchFilter('custrecord_prg_preapproval_status',null,'is',status));
			if(travelType)
				approvalFilter1.push(new nlobjSearchFilter('custrecord_request_type_cash_advance',null,'is',travelType));
			if(CASH_ADVANCE_REQUEST == recType){
				approvalFilter1.push(new nlobjSearchFilter('custrecord_prg_approval_amount_limit',null,'greaterthanorequalto',amount));
				
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approver_role',null,'group'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_department',null,'group'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_location',null,'group'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover',null,'group'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_postapproval_status',null,'group'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit',null,'min'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_class',null,'group'));
				
				
				
			}else{
				
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approver_role'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_department'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_location'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_postapproval_status'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_class'));
				approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover'));
				
				
			}
			
			var searchMatrix1 = nlapiSearchRecord('customrecord_prg_approval_matrix',null,approvalFilter1,approvalColumn1);
			nlapiLogExecution('debug','Search Matrix Record111111111111',JSON.stringify(searchMatrix1));
			
			if(searchMatrix1){
				
				if(CASH_ADVANCE_REQUEST == recType){
					
					var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department',null,'group');
					var location = searchMatrix1[0].getValue('custrecord_prg_approval_location',null,'group');
					var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class',null,'group');
					var role = searchMatrix1[0].getValue('custrecord_prg_approver_role',null,'group');
					var roleText = searchMatrix1[0].getText('custrecord_prg_approver_role',null,'group');
					var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status',null,'group');
					var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover',null,'group');
					
					
				}else{
					
					
					var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department');
					var location = searchMatrix1[0].getValue('custrecord_prg_approval_location');
					var role = searchMatrix1[0].getValue('custrecord_prg_approver_role');
					var roleText = searchMatrix1[0].getText('custrecord_prg_approver_role');
					var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status');
					var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class');
					var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover');
					
					
				}
				
				
				
				
				
				var employee_filter = [];
				var employee_column = [];

				nlapiLogExecution('audit','ROLE TYPE',roleText)
				var roleType = roleText.split(' ');
				var index = Number(roleType.length) - 1;
				if(roleType){

						roleType = roleType[index].trim();

				}
				
				

				if(roleType == 'APC'){

					entityType = 'partner';
					approverField = 'custrecord_apc_approver';
					accessRole = 'custentity_role'



				}else{

					entityType = 'employee';
					approverField = 'custrecord_travel_approver'
					accessRole = 'role'

				}

				if(emp_dept && dept == 'T'){
					
					employee_filter.push(new nlobjSearchFilter('custentity_prg_department',null,'is',emp_dept));
					employee_column.push(new nlobjSearchColumn('custentity_prg_department'));
				}
				
				if(emp_location && location == 'T'){
					
					employee_filter.push(new nlobjSearchFilter('custentityprg_location',null,'is',emp_location));
					employee_column.push(new nlobjSearchColumn('custentityprg_location'));
					
				}
				
				if(emp_class && class1 == 'T'){
					
					employee_filter.push(new nlobjSearchFilter('custentity_class',null,'is',emp_class));
					employee_column.push(new nlobjSearchColumn('custentity_class'));
					
					
				}
				employee_filter.push(new nlobjSearchFilter(accessRole,null,'is',role));
				
				
				
				var employee_search = nlapiSearchRecord(entityType,null,employee_filter,employee_column);
				
				nlapiLogExecution('debug','Employee Search Record',JSON.stringify(employee_search));
					
				if(employee_search){
					
					 nlapiLogExecution('debug','Employee search id',employee_search[0].getId());
					 recObj.setFieldValue(approverField,employee_search[0].getId());
					 recObj.setFieldValue('custrecord_travel_altapprover',alternateApprover);
					 nlapiSubmitRecord(recObj);
					
					return;
					
				}else{
					
					
					recObj.setFieldValue('custrecord_travel_altapprover',alternateApprover);
					nlapiSubmitRecord(recObj);
					return;
				}
				
			}
			
			
			
			
			return;
			
			
		
		}
			
	
			
			
			
			//recObj.setFieldValue('custrecord_travel_approver',supervisor);
		
				
	}
 
 
}