/**
 * Module Description
 * 
 * Version    Date            Author           Remarks
 * 1.00       21 Nov 2017     kollidam
 *
 */

/**
 * @returns {Void} Any or no return value
 */

var CASH_ADVANCE_REQUEST = 'customrecord_cashadvancereq';
var Po = 'purchaseorder';
var customForms = [119];
function workflowAction() {
	
	
	
	
	
	var form = Number(nlapiGetFieldValue('customform'));
	
	if(customForms.indexOf(form) < 0){
		
		return;
		
	}
	
	
	nlapiSetFieldValue('nextapprover', '');
	nlapiSetFieldValue('custbody_apc_approver', '');
	nlapiSetFieldValue('custrecord_travel_altapprover', '');
	var status = Number(nlapiGetFieldValue('custbody_transaction_app_status'));
	

	
	
	nlapiLogExecution('debug','WA Transaction');
	var recTypeId = nlapiGetFieldValue('rectype');
	nlapiLogExecution('audit','Record Type',recTypeId);
	var recordId = 104;
	var defaultRole = 1036;
	var recType = nlapiGetRecordType();
	var ntype = nlapiGetFieldValue('ntype');
	var id = nlapiGetFieldValue('id');
	nlapiLogExecution('debug','Record Type',recType);
	var emp_dept = nlapiGetFieldValue('department');
	var emp_location = nlapiGetFieldValue('custbody_finaldestination');
	var subsidiary = nlapiGetFieldValue('subsidiary');
	nlapiLogExecution('debug','Location',emp_location);
	var emp_class = nlapiGetFieldValue('class');
	var amount = nlapiGetFieldValue('total');
	
	
	

	if(recType == Po){
		
		nlapiLogExecution('debug','Purchase Order');
		
		var employee = nlapiGetFieldValue('custrecord_travel_employee');
		var status = nlapiGetFieldValue('custbody_transaction_app_status');
		
		
		
		nlapiLogExecution('debug','Employyee',employee);
		nlapiLogExecution('debug','status',status);
		var approvalFilter = [];
		var approvalColumn = [];
		
		approvalFilter.push(new nlobjSearchFilter('custrecord_prg_approval_transaction_type',null,'is',ntype));
		approvalFilter.push(new nlobjSearchFilter('custrecord_prg_preapproval_status',null,'is',status));
		approvalFilter.push(new nlobjSearchFilter('custrecord_prg_approval_subsidiaries',null,'is',subsidiary));
		approvalFilter.push(new nlobjSearchFilter('isinactive',null,'is','F'));
		if(Po == recType){
			approvalFilter.push(new nlobjSearchFilter('custrecord_prg_approval_amount_limit',null,'greaterthanorequalto',amount));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approver_role',null,'group'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_department',null,'group'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_location',null,'group'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_postapproval_status',null,'group'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit',null,'min'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_class',null,'group'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover',null,'group'));
			
			
			
			
		}else{
			
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approver_role'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_department'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_location'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_postapproval_status'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_class'));
			approvalColumn.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover'));
			
		}
		
		var searchMatrix = nlapiSearchRecord('customrecord_prg_approval_matrix',null,approvalFilter,approvalColumn);
		nlapiLogExecution('debug','Search Matrix Record',JSON.stringify(searchMatrix));
		
		if(searchMatrix){
			
			if(Po == recType){
				
				
				
				var dept = searchMatrix[0].getValue('custrecord_prg_approval_department',null,'group');
				var location = searchMatrix[0].getValue('custrecord_prg_approval_location',null,'group');
				var role = searchMatrix[0].getValue('custrecord_prg_approver_role',null,'group');
				var roleText = searchMatrix[0].getText('custrecord_prg_approver_role',null,'group');
				var postStatus = searchMatrix[0].getValue('custrecord_prg_postapproval_status',null,'group');
				var class1 = searchMatrix[0].getValue('custrecord_prg_approval_class',null,'group');
				var alternateApprover = searchMatrix[0].getValue('custrecord_prg_approval_alteapprover',null,'group');
				
			}else{
				
				
				var dept = searchMatrix[0].getValue('custrecord_prg_approval_department');
				var location = searchMatrix[0].getValue('custrecord_prg_approval_location');
				var role = searchMatrix[0].getValue('custrecord_prg_approver_role');
				var roleText = searchMatrix[0].getText('custrecord_prg_approver_role');
				var postStatus = searchMatrix[0].getValue('custrecord_prg_postapproval_status');
				var class1 = searchMatrix[0].getValue('custrecord_prg_approval_class');
				var alternateApprover = searchMatrix[0].getValue('custrecord_prg_approval_alteapprover');
				
				
			}
			
		
			
			nlapiSetFieldValue('custbody_transaction_app_status',postStatus);
			
			var roleType = roleText.split(' ');
			var index = Number(roleType.length) - 1;
			if(roleType){

					roleType = roleType[index].trim();

			}

			if(roleType == 'APC'){

				entityType = 'partner',
				approverField = 'custbody_apc_approver';
				var accessRole = 'custentity_role';
			}else{

				entityType = 'employee';
				approverField = 'nextapprover';
				var accessRole = 'role'

			}
			
			
			var approvalFilter2 = [];
			var approvalColumn2 = [];
			
			approvalFilter2.push(new nlobjSearchFilter('custrecord_prg_approval_transaction_type',null,'is',ntype));
			approvalFilter2.push(new nlobjSearchFilter('custrecord_prg_preapproval_status',null,'is',postStatus));
			approvalFilter2.push(new nlobjSearchFilter('custrecord_prg_approval_subsidiaries',null,'is',subsidiary));
			approvalFilter2.push(new nlobjSearchFilter('isinactive',null,'is','F'));
			if(Po == recType){
				
				approvalFilter2.push(new nlobjSearchFilter('custrecord_prg_approval_amount_limit',null,'greaterthanorequalto',amount));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approver_role',null,'group'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_department',null,'group'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_location',null,'group'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_postapproval_status',null,'group'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit',null,'max').setSort());
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_class',null,'group'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover',null,'group'));
				
				
				
				
			}else{
				
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approver_role'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_department'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_location'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_postapproval_status'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_class'));
				approvalColumn2.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover'));
				
				
			}
			
			var searchMatrix1 = nlapiSearchRecord('customrecord_prg_approval_matrix',null,approvalFilter2,approvalColumn2);
			nlapiLogExecution('debug','Search Matrix Record2222222222',JSON.stringify(searchMatrix1));
			
			
			nlapiLogExecution('debug','Search Matrix Record2222222222',JSON.stringify(searchMatrix1));
			
			
			if(searchMatrix1){
				
				nlapiLogExecution('debug','Search Matrix Record2222222222',searchMatrix1[0].id);
				
				if(Po == recType){
					
					var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department',null,'group');
					var location = searchMatrix1[0].getValue('custrecord_prg_approval_location',null,'group');
					var role = searchMatrix1[0].getValue('custrecord_prg_approver_role',null,'group');
					var roleText1 = searchMatrix1[0].getText('custrecord_prg_approver_role',null,'group');
					var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status',null,'group');
					var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class',null,'group');
					var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover',null,'group');
					
					
				}else{
					
					
					var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department');
					var location = searchMatrix1[0].getValue('custrecord_prg_approval_location');
					var role = searchMatrix1[0].getValue('custrecord_prg_approver_role');
					var roleText1 = searchMatrix1[0].getText('custrecord_prg_approver_role');
					var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status');
					var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class');
					var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover');
					
					
				}
				
				nlapiLogExecution('debug','Role text',roleText1);
				var roleType = roleText1.split(' ');
				var index = Number(roleType.length) - 1;
				if(roleType){

						roleType = roleType[index].trim();

				}

				if(roleType == 'APC'){

					entityType = 'partner',
					approverField = 'custbody_apc_approver';
					var accessRole = 'custentity_role';
				}else{

					entityType = 'employee';
					approverField = 'nextapprover';
					var accessRole = 'role'

				}
				
				
				
				var employee_filter = [];
				var employee_column = [];
				if(dept == 'T'){
					
					if(!emp_dept){
						
						throw nlapiCreateError('Notice','Please enter department for approval');
					}
					employee_filter.push(new nlobjSearchFilter('custentity_prg_department',null,'is',emp_dept));
					employee_column.push(new nlobjSearchColumn('custentity_prg_department'));
				}
				
				if(location == 'T'){
					
					if(!emp_location){
						
						throw nlapiCreateError('Notice','Please enter delivery location for approval');
					}
					
					employee_filter.push(new nlobjSearchFilter('custentityprg_location',null,'is',emp_location));
					employee_column.push(new nlobjSearchColumn('custentityprg_location'));
				}
				
				if(class1 == 'T'){
					
					if(!emp_class){
						
							throw nlapiCreateError('Notice','Please enter class for approval');
							
						
					}
					
					employee_filter.push(new nlobjSearchFilter('custentity_class',null,'is',emp_class));
					employee_column.push(new nlobjSearchColumn('custentity_class'));
				}
				
				nlapiLogExecution('debug','Access role',accessRole+'@@'+entityType);
				employee_filter.push(new nlobjSearchFilter(accessRole,null,'is',role));
				nlapiLogExecution('debug','ROLE',role);
				
				
				var employee_search = nlapiSearchRecord(entityType,null,employee_filter,employee_column);
				
				nlapiLogExecution('debug','Employee Search Record',JSON.stringify(employee_search));
					
				if(employee_search){
					
					 nlapiLogExecution('debug','Employee search id',employee_search[0].getId());
					nlapiSetFieldValue(approverField,employee_search[0].getId());
					nlapiSetFieldValue('custbody_transaction_alt_approver',alternateApprover);
					
					
				}else{
					
					
					
					
					nlapiSetFieldValue('custbody_transaction_alt_approver',alternateApprover);
					//nlapiSetFieldValue('custrecord_travel_approver','8235');
				}
				
			}
			
			
			
			
				
				
				
			
			
		}
		
		
		
		
		
		
		
		
		
	}
	
	

}