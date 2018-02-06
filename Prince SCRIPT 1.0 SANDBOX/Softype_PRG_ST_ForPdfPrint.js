

function printPdf(request, response){
	
	var action = request.getParameter('action');
	var id = request.getParameter('id')
	if(action == 'transferorder'){
		
		var transferOrder = nlapiLoadRecord(action, id);
		var subsidiary = nlapiLoadRecord('subsidiary',transferOrder.getFieldValue('subsidiary'));
		var renderer = nlapiCreateTemplateRenderer();
		var loadFile = nlapiLoadFile(49582);
		renderer.setTemplate(loadFile.getValue());
		
		renderer.addRecord('record',transferOrder);
		renderer.addRecord('subsidiary',subsidiary);
			var xml = renderer.renderToString();
		var file = nlapiXMLToPDF(xml);	
		//nlapiLogExecution('debug','XML String',JSON.stringify(file));
		response.setContentType('PDF','Merchant Statement Print.pdf ','inline');
		response.write(file);
		return;
		
	}
	
	
	
	
}