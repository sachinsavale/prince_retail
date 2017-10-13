/**
 * Module Description
 * 
 * Version    Date            			Author           Remarks
 * 1.00       20 September 2017     	Sachin Savale
 *
 */

/**
 * @param {nlobjRequest} request Request object
 * @param {nlobjResponse} response Response object
 * @returns {Void} Any output is written via response object
 */
function suitelet(request, response){
	
	var key_to_check = "504ee7703e1871f";
	var customer_categories = [2,4,3]
	nlapiLogExecution('debug','Method',request.getMethod());
	if (request.getMethod() == 'GET')
	{
		var key = request.getParameter('key');
		if((key_to_check != key) || key == ""){
			
			response.write("Invalid access");
			return;
			
		}
		nlapiLogExecution('debug','Start');
		
		var customer_filters = new Array();
		var customer_columns = new Array();

		customer_filters.push(new nlobjSearchFilter('category',null,'anyof',customer_categories));
		customer_columns.push(new nlobjSearchColumn('subsidiary'));
		customer_columns.push(new nlobjSearchColumn('custentity_barterreference'));
		customer_columns.push(new nlobjSearchColumn('entityid'));
		customer_columns.push(new nlobjSearchColumn('category'));
		customer_columns.push(new nlobjSearchColumn('companyname'));
		var search_customers = nlapiSearchRecord('customer',null,customer_filters,customer_columns);
		var customers_json = [];
		if(search_customers){
			
			for(var s = 0; s < search_customers.length; s++){
				
				var netsuiteid = search_customers[s].id;
				var code = search_customers[s].getValue('entityid');
				var customer_name = search_customers[s].getValue('companyname');
				var subsidiaryid = search_customers[s].getValue('subsidiary');
				var subsidiary_name= search_customers[s].getText('subsidiary');
				var barter_ref = search_customers[s].getValue('custentity_barterreference');
				var category = search_customers[s].getText('category');
				customers_json.push({
					customer : {netsuiteid:netsuiteid,code:code,name:customer_name},
					subsidiary:{netsuiteid:subsidiaryid,name:subsidiary_name},
					barterreference:{id:barter_ref},
					type:category
				});
				
			}
			
		}
		
		//Write the Suitelet Response
		response.write(JSON.stringify(customers_json));
		
	}	
	
	
	
	
	
}
	