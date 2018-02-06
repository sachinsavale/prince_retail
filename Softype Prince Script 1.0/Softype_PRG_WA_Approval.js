/**
 * Module Description
 * 
 * Version    Date            Author           Remarks

		/**
		 * Module Description
		 * 
		 * Version    Date            Author           Remarks
		 * 1.00       21 Nov 2017     Sachin Savale
		 *
		 */

		/**
		 * @returns {Void} Any or no return value
		 */
		function workflowAction() {
			var entityType;
			var approverField;
			var accessRole;
			var CASH_ADVANCE_REQUEST = Number(103);
			var recTypeId = nlapiGetFieldValue('rectype');
			nlapiLogExecution('audit','Record Type',recTypeId);
			var recordId = 104;
			var defaultRole = 1036;
			var recType = Number(nlapiGetFieldValue('rectype')); //nlapiGetRecordType();
			var id = nlapiGetFieldValue('id');
			nlapiLogExecution('debug','Record Type',recType);
			var emp_dept = nlapiGetFieldValue('custrecord_travel_department');
			var emp_location = nlapiGetFieldValue('custrecord_travel_location');
			var emp_class = nlapiGetFieldValue('custrecord_prg_cash_advance_class');
			var amount = nlapiGetFieldValue('custrecord_travel_budget');
			var status = nlapiGetFieldValue('custrecord_travel_status');
			var travelType = nlapiGetFieldValue('custrecord_travel_category');
			nlapiSetFieldValue('custrecord_travel_approver', '');
			nlapiSetFieldValue('custrecord_apc_approver', '');
			nlapiSetFieldValue('custrecord_travel_approver', '');
			nlapiSetFieldValue('custrecord_travel_altapprover', '');
			
			// if(status == 4 && !id){
				
				
			// 	var approvalFilter1 = [];
			// 	var approvalColumn1 = [];
			// 	approvalFilter1.push(new nlobjSearchFilter('isinactive',null,'is','F'));
			// 	approvalFilter1.push(new nlobjSearchFilter('custrecord_prg_approval_record',null,'is',recType));
			// 	approvalFilter1.push(new nlobjSearchFilter('custrecord_prg_preapproval_status',null,'is',status));
			// 	if(travelType)
			// 		approvalFilter1.push(new nlobjSearchFilter('custrecord_request_type_cash_advance',null,'is',travelType));
			// 	if(CASH_ADVANCE_REQUEST == recType){
			// 		approvalFilter1.push(new nlobjSearchFilter('custrecord_prg_approval_amount_limit',null,'greaterthanorequalto',amount));
					
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approver_role',null,'group'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_department',null,'group'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_location',null,'group'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover',null,'group'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_postapproval_status',null,'group'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit',null,'min'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_class',null,'group'));
					
					
					
			// 	}else{
					
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approver_role'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_department'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_location'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_postapproval_status'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_amount_limit'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_class'));
			// 		approvalColumn1.push(new nlobjSearchColumn('custrecord_prg_approval_alteapprover'));
					
					
			// 	}
				
			// 	var searchMatrix1 = nlapiSearchRecord('customrecord_prg_approval_matrix',null,approvalFilter1,approvalColumn1);
			// 	nlapiLogExecution('debug','Search Matrix Record111111111111',JSON.stringify(searchMatrix1));
				
			// 	if(searchMatrix1){
					
			// 		if(CASH_ADVANCE_REQUEST == recType){
						
			// 			var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department',null,'group');
			// 			var location = searchMatrix1[0].getValue('custrecord_prg_approval_location',null,'group');
			// 			var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class',null,'group');
			// 			var role = searchMatrix1[0].getValue('custrecord_prg_approver_role',null,'group');
			// 			var roleText = searchMatrix1[0].getText('custrecord_prg_approver_role',null,'group');
			// 			var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status',null,'group');
			// 			var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover',null,'group');
						
						
			// 		}else{
						
						
			// 			var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department');
			// 			var location = searchMatrix1[0].getValue('custrecord_prg_approval_location');
			// 			var role = searchMatrix1[0].getValue('custrecord_prg_approver_role');
			// 			var roleText = searchMatrix1[0].getText('custrecord_prg_approver_role');
			// 			var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status');
			// 			var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class');
			// 			var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover');
						
						
			// 		}
					
					
					
					
					
			// 		var employee_filter = [];
			// 		var employee_column = [];

			// 		nlapiLogExecution('audit','ROLE TYPE',roleText)
			// 		var roleType = roleText.split(' ');
			// 		var index = Number(roleType.length) - 1;
			// 		if(roleType){

			// 				roleType = roleType[index].trim();
	
			// 		}
					
					

			// 		if(roleType == 'APC'){

			// 			entityType = 'partner';
			// 			approverField = 'custrecord_apc_approver';
			// 			accessRole = 'custentity_role'



			// 		}else{

			// 			entityType = 'employee';
			// 			approverField = 'custrecord_travel_approver'
			// 			accessRole = 'role'

			// 		}

			// 		if(emp_dept && dept == 'T'){
						
			// 			employee_filter.push(new nlobjSearchFilter('custentity_prg_department',null,'is',emp_dept));
			// 			employee_column.push(new nlobjSearchColumn('custentity_prg_department'));
			// 		}
					
			// 		if(emp_location && location == 'T'){
						
			// 			employee_filter.push(new nlobjSearchFilter('custentityprg_location',null,'is',emp_location));
			// 			employee_column.push(new nlobjSearchColumn('custentityprg_location'));
						
			// 		}
					
			// 		if(emp_class && class1 == 'T'){
						
			// 			employee_filter.push(new nlobjSearchFilter('custentity_class',null,'is',emp_class));
			// 			employee_column.push(new nlobjSearchColumn('custentity_class'));
						
						
			// 		}
			// 		employee_filter.push(new nlobjSearchFilter(accessRole,null,'is',role));
					
					
					
			// 		var employee_search = nlapiSearchRecord(entityType,null,employee_filter,employee_column);
					
			// 		nlapiLogExecution('debug','Employee Search Record',JSON.stringify(employee_search));
						
			// 		if(employee_search){
						
			// 			 nlapiLogExecution('debug','Employee search id',employee_search[0].getId());
			// 			nlapiSetFieldValue(approverField,employee_search[0].getId());
			// 			nlapiSetFieldValue('custrecord_travel_altapprover',alternateApprover);
						
			// 			return;
						
			// 		}else{
						
						
			// 			nlapiSetFieldValue('custrecord_travel_altapprover',alternateApprover);
			// 			return;
			// 		}
					
			// 	}
				
				
				
				
			// 	return;
				
				
			
			// }
			
			if(recType == CASH_ADVANCE_REQUEST){
				
				nlapiLogExecution('debug','CASH ADVANCE REQUEST');
				
				var employee = nlapiGetFieldValue('custrecord_travel_employee');
				var status = nlapiGetFieldValue('custrecord_travel_status');
				
				
				
				nlapiLogExecution('debug','Employyee',employee);
				nlapiLogExecution('debug','status',status);
				var approvalFilter = [];
				var approvalColumn = [];
				
				approvalFilter.push(new nlobjSearchFilter('custrecord_prg_approval_record',null,'is',recType));
				approvalFilter.push(new nlobjSearchFilter('custrecord_prg_preapproval_status',null,'is',status));
				approvalFilter.push(new nlobjSearchFilter('isinactive',null,'is','F'));
				if(travelType)
					approvalFilter.push(new nlobjSearchFilter('custrecord_request_type_cash_advance',null,'is',travelType));
				if(CASH_ADVANCE_REQUEST == recType){

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
					
					if(CASH_ADVANCE_REQUEST == recType){
						
						
						
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
					
				
					
					nlapiSetFieldValue('custrecord_travel_status',postStatus);
					
					
					var approvalFilter2 = [];
					var approvalColumn2 = [];
					approvalFilter2.push(new nlobjSearchFilter('isinactive',null,'is','F'));
					approvalFilter2.push(new nlobjSearchFilter('custrecord_prg_approval_record',null,'is',recType));
					approvalFilter2.push(new nlobjSearchFilter('custrecord_prg_preapproval_status',null,'is',postStatus));
					if(travelType)
					approvalFilter2.push(new nlobjSearchFilter('custrecord_request_type_cash_advance',null,'is',travelType));
					if(CASH_ADVANCE_REQUEST == recType){
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
						
						nlapiLogExecution('debug','Search Matrix Record2222222222',searchMatrix1.length);
						
						if(CASH_ADVANCE_REQUEST == recType){
							
							var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department',null,'group');
							var location = searchMatrix1[0].getValue('custrecord_prg_approval_location',null,'group');
							var role = searchMatrix1[0].getValue('custrecord_prg_approver_role',null,'group');
							var roleText = searchMatrix1[0].getText('custrecord_prg_approver_role',null,'group');
							var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status',null,'group');
							var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class',null,'group');
							var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover',null,'group');
							
							
						}else{
							
							
							var dept = searchMatrix1[0].getValue('custrecord_prg_approval_department');
							var location = searchMatrix1[0].getValue('custrecord_prg_approval_location');
							var role = searchMatrix1[0].getValue('custrecord_prg_approver_role');
							var roleText = searchMatrix1[0].getText('custrecord_prg_approver_role');
							var postStatus = searchMatrix1[0].getValue('custrecord_prg_postapproval_status');
							var class1 = searchMatrix1[0].getValue('custrecord_prg_approval_class');
							var alternateApprover = searchMatrix1[0].getValue('custrecord_prg_approval_alteapprover',null,'group');
							
							
						}
						
						
						var employee_filter = [];
						var employee_column = [];

						var roleType = roleText.split(' ');
						var index = Number(roleType.length) - 1;
						if(roleType){

								roleType = roleType[index].trim();
		
						}

						if(roleType == 'APC'){

							entityType = 'partner';
							approverField = 'custrecord_apc_approver';
							var accessRole = 'custentity_role'



						}else{

							entityType = 'employee';
							approverField = 'custrecord_travel_approver';
							var accessRole = 'role'

						}

						if(dept == 'T'){

							if(!emp_dept){
						
								throw nlapiCreateError('Notice','Please enter department for approval');
						
							}
							
							employee_filter.push(new nlobjSearchFilter('custentity_prg_department',null,'is',emp_dept));
							employee_column.push(new nlobjSearchColumn('custentity_prg_department'));
						}
						
						if(location == 'T'){

							if(!emp_location){
						
								throw nlapiCreateError('Notice','Please enter location for approval');
						
							}
							
							employee_filter.push(new nlobjSearchFilter('custentityprg_location',null,'is',emp_location));
							employee_column.push(new nlobjSearchColumn('custentityprg_location'));
						}
						
						if(class1 == 'T'){


							if(!emp_class){
						
								throw nlapiCreateError('Notice','Please enter location for approval');
						
							}
							
							employee_filter.push(new nlobjSearchFilter('custentity_class',null,'is',emp_class));
							employee_column.push(new nlobjSearchColumn('custentity_class'));
						}
						nlapiLogExecution('audit','ROLE DATA',role);
						//nlapiLogExecution('audit','ROLE DATA',role);
						employee_filter.push(new nlobjSearchFilter(accessRole,null,'is',role));
						
						
						
						var employee_search = nlapiSearchRecord(entityType,null,employee_filter,employee_column);
						
						nlapiLogExecution('debug','Employee Search Record',JSON.stringify(employee_search));
							
						if(employee_search){
							
							 nlapiLogExecution('debug','Employee search idapproverField',employee_search[0].getId());
							nlapiSetFieldValue(approverField,employee_search[0].getId());
							//nlapiSetFieldValue('custrecord_travel_altapprover',alternateApprover);
							
							
						}else{
							
							nlapiSetFieldValue('custrecord_travel_altapprover',alternateApprover);
							//nlapiSetFieldValue('custrecord_travel_approver','8235');
						}
						
					}	
					
				}
				
				
				
				
				
				
				
				
				
			}
			
			

		}

