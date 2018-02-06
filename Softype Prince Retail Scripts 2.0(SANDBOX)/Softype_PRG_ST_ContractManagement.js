/**
 *@NApiVersion 2.x
 *@NScriptType Suitelet
 */
define(['N/ui/serverWidget','N/search','N/record','N/url','N/https','N/runtime'],
    function(serverWidget,search,record,url,https,runtime) {
	
	var customCss,jqueryCSS,jquery,dataTableJquery
        function onRequest(context) {	
        	
			var action  =  context.request.parameters.action;
			log.audit('Context',JSON.stringify(context));
			log.audit('Action',action);
			
        	log.debug('Start');	
            if (context.request.method === 'GET') {
            	
            	var subsidiary = context.request.parameters.subsidiary;
            	var location = context.request.parameters.location;
            	var customer =  context.request.parameters.customer;
            	var date1 = context.request.parameters.startDate;
            	var date2 = context.request.parameters.endDate;
            	
            	
            	var searchResults = search.load({'id':'customsearch_document_search'
         		})

         		var resultSets = searchResults.run();



			        resultSets.each(function(result){
			        	
			        	var folder = result.getText('folder');
			        	var name = result.getValue('name');
			        	log.debug('Folder',folder);
			        	log.debug('Name',name);
			        	if(folder == "CSS" && name == 'Merchant_Statement_Softpe_Custom.css'){
			        		
			        		 customCss = result.getValue('url');
			        		log.debug('Custom Css url',customCss);
			        		
			        	}
			        	
			        	if(folder == "CSS" && name == 'Merchant_Statement_Softype_Jquery_min_css_table.css'){
			        		
			        		 jqueryCSS = result.getValue('url');
			        		log.debug('Jquery Css url',jqueryCSS);
			        		
			        	}
			        	
			        	
			        	if(folder == "Libraries" && name == 'Merchant_Statement_Softype_Jquery.min.1.9.1.js'){
			        		
			        		jquery = result.getValue('url');
			        		log.debug('Jquery url',jquery)
			        		
			        	}
			        	
			        	if(folder == "Libraries" && name == 'Merchant_Statement_Softype_Jquery_min_table.js'){
			        		
			        		dataTableJquery = result.getValue('url');
			        		log.debug('Jquery data table',dataTableJquery);
			        		
			        	}
			                       
			                  //  console.log(result.getValue('url'));
			        	
			        	return true;
			
			        })
			        
			        
			        

            	
                var form = serverWidget.createForm({
                    title: 'Contract Management'
                });
			        
			       
            		        
			     var  htmlContent = '<!DOCTYPE html> <html> <head> <meta charset="UTF-8">';
			    	//htmlContent += '<script src='+jqueryLibURL+' type="text/javascript"></script>';
			    	htmlContent +=  '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>';
			    	htmlContent +=  '<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';
			    	//htmlContent += '<script src=""https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>';
			    	
			    	htmlContent += '<link rel="stylesheet" href="'+customCss+'">';
			    	htmlContent += '<link rel="stylesheet" href="'+jqueryCSS+'">';
			    	htmlContent+='<script src="'+dataTableJquery+'" type="text/javascript"></script>';

			    	var startDate =  form.addField({
	                    id: 'custpage_startdatefield',
	                    type: serverWidget.FieldType.DATE,
	                    label: 'Start Date'
	                });
			    	
			    	startDate.isMandatory = true;
			    	
//	                var context = 	form.addField({
//                    id: 'custpage_context',
//                    type: serverWidget.FieldType.TEXT,
//                    label: ' '
//                });
//			    	
			    	 if(date1){
			    		 
		                	log.audit('Set Date',date1);
		                	startDate.defaultValue = date1;
		                	

//		                
//		                context.defaultValue = 'get';
//		                
//		                context.updateDisplayType({
//		                    displayType: serverWidget.FieldDisplayType.HIDDEN
//		                });
		              }
			    	
			    	 
			    	htmlContent+='<div id="contractsDiv">'
			    	htmlContent+='</div>'	
//			    	htmlContent +=  '<link rel="stylesheet" href="/resources/demos/style.css">';
//
//			    	htmlContent += '</head>';
//			    	htmlContent += '<table style="width: 100%; height: 43px;">';
//			    	htmlContent +='<tbody>';
//			    	htmlContent +='<tr>';
//			    	htmlContent +='<td style="width: 246px;"> <font size="3">Select Customer</font></td>';
//			    	htmlContent +='<td style="width: 246px;"><font size="3">Date Created</font></td>';
//			    	htmlContent += '<td style="width: 246px;"><font size="3">Due Date</font></td>';
//			    	htmlContent +='</tr>';
//			    	
//			    	
//			    	htmlContent += '</tbody>';
//			    	htmlContent += '</table>';
                
			    	
                
                
               
			    		startDate.layoutType = serverWidget.FieldLayoutType.STARTROW;
			    	startDate.updateBreakType({breakType : serverWidget.FieldBreakType.STARTROW});
                
                
              
                
                var endate = form.addField({
                    id: 'custpage_enddatefield',
                    type: serverWidget.FieldType.DATE,
                    label: 'End Date'
                });
                
                
                
                
//                endate.updateDisplayType({
//                    displayType: serverWidget.FieldDisplayType.DISABLED
//                });
                
                log.audit('END DATE Field',JSON.stringify(endate));
                
                
                if(date2){
                	log.audit('Set Date',date2);
                	endate.defaultValue = date2;
                }
                
                
                
                var customerField = form.addField({
                    id: 'custpage_customer',
                    type: serverWidget.FieldType.SELECT,
                    label: 'Customer',
                    source:'customer'
                });
                
               // customerField.isMandatory = true;
                
                var subsidiaryField = form.addField({
                    id: 'custpage_subsidiary',
                    type: serverWidget.FieldType.SELECT,
                    label: 'Subsidiary',
                    source:'subsidiary'
                });
              
                if(customer){
                	
                	customerField.defaultValue = customer;
                	
                }
                
                subsidiaryField.isMandatory = true;
                
                if(subsidiary){
                	log.audit('Set Subsidiary',subsidiary);
                	subsidiaryField.defaultValue = subsidiary;
                	
                	
                	var locationFilter = new Array();
            		var locationColumn = new Array();
            		
        		    	if(subsidiary){
        		    		
        		    		locationFilter.push(search.createFilter({
        		  			  name : 'subsidiary',
        		                operator : search.Operator.IS,
        		                values :  subsidiary
        		  			
        		  		}))
        		    		
        		    }
            		
            		
            		locationColumn.push(search.createColumn('name'));
            		
            		
            		var searchResults = search.create({'type':'location'
            			 ,'filters':locationFilter
            			 ,'columns':locationColumn
            		});
            		
            		 
            		  var locationField = form.addField({
                          id: 'custpage_location',
                          type: serverWidget.FieldType.SELECT,
                          label: 'Location',
//                          source:''
                      });
            		
            		
            		searchResults.run().each(function(locationRecord){
            			

            			
            			locationField.addSelectOption({
                		    value: locationRecord.id,
                		    text: locationRecord.getValue('name'),
                		    
                		}); 
            			
            			return true;
            		});
                	
                	
                }else{
                	
                	
                	  var locationField = form.addField({
                          id: 'custpage_location',
                          type: serverWidget.FieldType.SELECT,
                          label: 'Location',
                          source:''
                      });
                      
                      log.audit('Location Field',JSON.stringify(locationField));
                	
                	
                }
                
                
               
                
              
                
                locationField.isMandatory = true;
                
                if(location){
                	log.audit('Set Location',locationField);
                	locationField.defaultValue = location;
                }
                
                log.audit('Location Field',JSON.stringify(locationField));
                
               // locationField.defaultValue = location
	                
                
                
               
                
               
                
              
               
           
                
             var submitButton = form.addSubmitButton({
                    label: 'Create Sales Orders'
                });
             
             form.addButton({
                 id: 'custpage_reset',
                 label: 'Reset',
                 functionName:"reset();"
             });
            
                
//                form.addResetButton({
//		            label : 'Reset'
//		        });
                
             
                
                form.clientScriptModulePath  = 'SuiteScripts/Softype Prince Retail Scripts 2.0/Softype_PRG_CS_ContractManagement.js';
                
               // var getContractResults = getContracts(search,); 
                
                
               
              
             
                
                
                
                
                
               
                
                if(action == 'getContracts'){
                	
                	
                	
                	 submitButton.isDisabled = false;
                	 var sublistObj = form.addSublist({
                         id: 'custpage_contract',
                         type: serverWidget.SublistType.LIST,
                         label: 'Contracts'
                     });
                     
                     
                	 sublistObj.addField({
                         id: 'custpage_mark',
                         type: serverWidget.FieldType.CHECKBOX,
                         label:'Mark'
                     });
                     
                     sublistObj.addField({
                         id: 'custpage_contract_number',
                         type: serverWidget.FieldType.TEXT,
                         label: 'Contract Number'
                     });
                     
                     sublistObj.addField({
                         id: 'custpage_customer',
                         type: serverWidget.FieldType.TEXT,
                         label: 'Customer ID'
                     });
                     sublistObj.addField({
                         id: 'custpage_customer_name',
                         type: serverWidget.FieldType.TEXT,
                         label: 'Customer Name'
                     });
                     
                   
                     
                   
                     sublistObj.addField({
                         id: 'custpage_bill_reference',
                         type: serverWidget.FieldType.TEXT,
                         label: 'Bill Reference'
                     });
                     
                   
                     
                     
                     sublistObj.addField({
                         id: 'custpage_startdate',
                         type: serverWidget.FieldType.DATE,
                         label: 'Start Date'
                     });
                     
                     sublistObj.addField({
                         id: 'custpage_enddate',
                         type: serverWidget.FieldType.DATE,
                         label: 'End Date'
                     }).updateDisplayType({
                    	    displayType: serverWidget.FieldDisplayType.INLINE
                     });
                     
                   var internalid =   sublistObj.addField({
                         id: 'custpage_internalid',
                         type: serverWidget.FieldType.TEXT,
                         label: ' '
                     }).updateDisplayType({
                    	    displayType: serverWidget.FieldDisplayType.HIDDEN
                     });
                   
                   
                   var internalidC =   sublistObj.addField({
                       id: 'custpage_internalidc',
                       type: serverWidget.FieldType.TEXT,
                       label: ' '
                   }).updateDisplayType({
                  	    displayType: serverWidget.FieldDisplayType.HIDDEN
                   });
                	
                	
                	 var getContractResults = getContracts(search,context);
                 	var i = 0;
                 	getContractResults.forEach(function(result){
                 		
                 		
                 		
                 
//                 		 sublistObj.addField({
//                             id: 'custpage_startdate',
//                             type: serverWidget.FieldType.CHECKBOX,
//                            
//                         });
                 		
                 		sublistObj.setSublistValue({
                         	sublistId:'custpage_contract',
                         	id: 'custpage_contract_number',
                              line: i,
                              value: result.getText({name:'custrecord_contractref',summary:'group'})
                          });
                 		
                 		sublistObj.setSublistValue({
                         	sublistId:'custpage_contract',
                         	id: 'custpage_customer',
                              line: i,
                              value: result.getText({name:'custrecord_lesseename',join:'custrecord_contractref',summary:'group'})
                          });
                 		
                 		sublistObj.setSublistValue({
                         	sublistId:'custpage_contract',
                         	id: 'custpage_customer_name',
                              line: i,
                              value: result.getValue({name:'custrecord_lessee_name',join:'custrecord_contractref',summary:'group'})
                          });
                 		
                 		sublistObj.setSublistValue({
                         	sublistId:'custpage_contract',
                         	id: 'custpage_bill_reference',
                              line: i,
                              value: result.getText({name:'custrecord_billingreference',summary:'group'})
                          });
                 		
                 		
                 		
                 		
                 		
                 		
                 		sublistObj.setSublistValue({
                         	sublistId:'custpage_contract',
                         	id: 'custpage_startdate',
                              line: i,
                              value: result.getValue({name:'custrecord_billstartdate',summary:'group'})
                          });
                 		
                 		sublistObj.setSublistValue({
                         	sublistId:'custpage_contract',
                         	id: 'custpage_enddate',
                              line: i,
                              value: result.getValue({name:'custrecord_billingenddate',summary:'group'})
                          });
                 		
                 		
                 		sublistObj.setSublistValue({
                         	sublistId:'custpage_contract',
                         	id: 'custpage_internalidc',
                              line: i,
                              value: result.getValue({name:'custrecord_contractref',summary:'group'})
                          });
                 		
                 		i++;
                 		return true;
                 		
                 		
                 	
                 	});
                     
                	
                	
                	
                	
                }
               
             
               context.response.writePage(form);
            } else {
            	
            	//--------------------------------Method is POST--------------------------------//
            	
            	log.debug('IN POST');
                var delimiter = /\u0002/;
                var delimiter1 = /\u0001/;
               // var customer  =  context.request.parameters.custpage_customer;
                var subsidiary = context.request.parameters.custpage_subsidiary;
                var location = context.request.parameters.custpage_location;
                var pStartDate = context.request.parameters.custpage_startdatefield;
                var pEndDate = context.request.parameters.custpage_enddatefield;
                log.audit('Subsidiary',pStartDate);
                var parameterObj = context.request.parameters;
                
                
                var sublistData = context.request.parameters.custpage_contractdata.split(delimiter);
                
                log.audit('SUBLIST DATA',sublistData.length);
                log.audit('SUBLIST JSON',JSON.stringify(sublistData))
                 var sublistArray = sublistData[0].split(delimiter1);
                log.audit('Subslist data array',sublistArray[0]);
                
             //   return;
                
                var sublistLength = sublistData.length;
                var contractNumbers = new Array();
                var billRefArray = new Array();
                var dateArray = new Array();
                var enddateArray = new Array();
                for(var i = 0; i < sublistLength; i++){
                	
                	 var sublistArray = sublistData[i].split(delimiter1);
                	var checked = sublistArray[0];
                	if(checked == 'T'){
                		
                		 var cContractNumber = sublistArray[8];
                    	 contractNumbers.push(cContractNumber);
                         var cBillRef = sublistArray[4];
                         billRefArray.push(cBillRef);
                         var cStartDate = sublistArray[5];
                         dateArray.push(cStartDate)
                         var cEndDate = sublistArray[6];
                         enddateArray.push(enddateArray);
                		
                		
                	}
                	
                     
                     
                     
                     
                     
                 
                     
                	
                	
                	
               }
                
                
                var contractFilters = [];
          		var contractColumns = [];

          		log.debug('Contract Numbers',contractNumbers);
          		
          		contractFilters.push(search.createFilter({
                   name : 'custrecord_contractref',
                   operator : search.Operator.ANYOF,
                   values :  contractNumbers
               }));
          		
          		
          		contractFilters.push(search.createFilter({
                     name : 'custrecord_billingreference',
                     operator : search.Operator.IS,
                     values :  billRefArray
                 }));
          		
          		contractFilters.push(search.createFilter({
                     name : 'custrecord_billstartdate',
                     operator : search.Operator.ONORAFTER,
                     values :  pStartDate
                 }));
          		
          		contractFilters.push(search.createFilter({
                     name : 'custrecord_billingenddate',
                     operator : search.Operator.ONORBEFORE,
                     values :  pEndDate
                 }));
          		
          		contractFilters.push(search.createFilter({
                    name : 'custrecord_transactiongenerated',
                    operator : search.Operator.IS,
                    values :  false
                }));
          		
//          		contractFilters.push(search.createFilter({
//                    name : 'custrecord_lesseename',
//                    join:'custrecord_contractref',
//                    operator : search.Operator.IS,
//                    values :  customer
//                }));
//          		
          		contractFilters.push(search.createFilter({
                    name : 'isinactive',
                    join:'custrecord_contractref',
                    operator : search.Operator.IS,
                    values :  'F'
                }));
          		
          		
          		
          		contractColumns.push(search.createColumn({name:'custrecord_contractref',sort:search.Sort.ASC}));
          		
          		contractColumns.push(search.createColumn('custrecord_billamount'));
          		contractColumns.push(search.createColumn('custrecord_prorated'));
          		contractColumns.push(search.createColumn('custrecord_billingitem'));
          		contractColumns.push(search.createColumn('custrecord_billingenddate'));
          		contractColumns.push(search.createColumn('custrecord_billstartdate'));
          		contractColumns.push(search.createColumn('custrecord_firstmonthamt'));
          		contractColumns.push(search.createColumn('custrecord_lastmonthamt'));
          		contractColumns.push(search.createColumn('custrecord_billingreference'));
          		contractColumns.push(search.createColumn('custrecord_previousconsumption'));
          		contractColumns.push(search.createColumn('custrecord_currentconsumption'));
          		contractColumns.push(search.createColumn('custrecord_billmemo'));
          		contractColumns.push(search.createColumn('custrecord_minimumamt'));
          		contractColumns.push(search.createColumn('custrecord_rate'));
          		contractColumns.push(search.createColumn('internalid'));
          		contractColumns.push(search.createColumn({name:'custrecord_subsidiary',join:'custrecord_contractref'}));
          		contractColumns.push(search.createColumn({name:'custrecord_lesseename',join:'custrecord_contractref'}));
          		contractColumns.push(search.createColumn({name:'custrecord_contractlocation',join:'custrecord_contractref'}));
          		contractColumns.push(search.createColumn({name:'custrecord_locationlayout',join:'custrecord_contractref'}));
          		//contractColumns.push(search.createColumn({name:'custrecord_locationlayout',join:'custrecord_contractref'}));
          		
          		
          		
          		var searchResults = search.create({'type':'customrecord_contractbillingschedule'
         			 ,'filters':contractFilters
         			 ,'columns':contractColumns
         		});

         		var contracts = searchResults.run().getRange(0,1000);
         		//log.audit(contracts.getValue({name:'custrecord_subsidiary',join:'custrecord_contractref'}));
         		var jsonObj = [];
         		var salesOrderIds = new Array();
         		var contractsId;
         		 
         		for(var s = 0; s < contracts.length; s++){
         			
         			
         			var contractNumber = contracts[s].getText('custrecord_contractref');
         			
         			
         				
     				jsonObj.push({
     					'contractname':contracts[s].getValue('custrecord_contractref'),
     					'customer':contracts[s].getValue({name:'custrecord_lesseename',join:'custrecord_contractref'}),
     					'subsidiary':contracts[s].getValue({name:'custrecord_subsidiary',join:'custrecord_contractref'}),
     					'location':contracts[s].getValue({name:'custrecord_contractlocation',join:'custrecord_contractref'}),
     					'startdate':contracts[s].getValue('custrecord_billstartdate'),
     					'enddate':contracts[s].getValue('custrecord_billingenddate'),
     					'lineamount':contracts[s].getValue('custrecord_billamount'),
     					'lineitem':contracts[s].getValue('custrecord_billingitem'),
     					'id':contracts[s].getValue('internalid'),
     					'prorated':contracts[s].getValue('custrecord_prorated'),
     					'lastmonthamt':contracts[s].getValue('custrecord_lastmonthamt'),
     					'firstmonthamt':contracts[s].getValue('custrecord_firstmonthamt'),
     					'contractnumber':contracts[s].getValue('custrecord_contractref'),
     					'sublocation':contracts[s].getValue({name:'custrecord_locationlayout',join:'custrecord_contractref'}),
     					'billreference':contracts[s].getValue('custrecord_billingreference'),
     					'previousconsumption':contracts[s].getValue('custrecord_previousconsumption'),
     					'currentconsumption':contracts[s].getValue('custrecord_currentconsumption'),
     					'rate':contracts[s].getValue('custrecord_rate'),
     					'minimumamount':contracts[s].getValue('custrecord_minimumamt'),
     					'memo':contracts[s].getValue('custrecord_billmemo'),
     					
     					
     				})
         				
         				
         			
         			
         			
         			
         		} 
         		
         		
         		
         		var contractsObj = groupBy(jsonObj,'contractname');
         		log.audit('CONTRACTS SEARCH RESULT',contractsObj);
         		
         		var contractsArray = new Array();
         		for(a in contractsObj){
         			
         			contractsArray.push(contractsObj[a]);
         			
         		}
         		log.audit('CONTRACTS SEARCH Array',contractsArray);
         		
         	
	   				
	   				
         		for(var i = 0; i < contractsArray.length; i++){
         			
         			
         			var scriptObj = runtime.getCurrentScript();
                 	log.audit("Remaining Usage of this script-->",scriptObj.getRemainingUsage());
       
         			contractsId = new Array();
         			log.audit('line Item Count',contractsArray[i]);
         			var contracts = contractsArray[i];
         			var contractName = contracts[0].contractname;
         			var customer =  contracts[0].customer;
    	 			var startdate = contracts[0].startdate;
    	 			var enddate = contracts[0].enddate;
    	 			var solocation = contracts[0].location;
    	 			var soSubsidiary = contracts[0].subsidiary;
    	 			var location = contracts[0].location;
    	 			var sublocation = contracts[0].sublocation;
    	 			var billreference = contracts[0].billreference;
    	 			var prorated = contracts[0].prorated;
    	 			var firstmonthamt = contracts[0].firstmonthamt;
    	 			var lastmonthamt = contracts[0].lastmonthamt;
    	 			
         			var salesOrderObj = record.create({type:'salesorder','isDynamic':true})
         			
         			salesOrderObj.setValue('entity',customer);
		 			salesOrderObj.setValue('subsidiary',soSubsidiary);
		 			salesOrderObj.setValue('location',solocation);
		 			salesOrderObj.setValue('custbody_contractnumber',contractName);
		 			salesOrderObj.setValue('custbody_contractlocation',location);
		 			salesOrderObj.setValue('custbody_contractsublocation',sublocation);
		 			salesOrderObj.setValue('custbody_contractrefnumber',billreference);
		 			startdate = new Date(startdate)
		 			enddate = new Date(enddate)
		 			salesOrderObj.setValue('startdate',startdate);
		 			salesOrderObj.setValue('enddate',enddate);
         			for(l = 0; l < contracts.length; l++){
         				
         				if(prorated == true || prorated == 'T'){
         					
         					var finalAmount = firstmonthamt;
         					
         					if(!finalAmount){
         						
         						var finalAmount = lastmonthamt;
         						
         					}
         					
         				}else{
         					
         					var finalAmount = contracts[l].lineamount;
         				}
         				log.debug('Contracts ID in item',contracts[l].id);
         				var previousConsumption = contracts[l].previousconsumption;
        	 			var currentConsumption = contracts[l].currentconsumption;
        	 			var minimumamt = contracts[l].minimumamount;
        	 			var rate = contracts[l].rate;
        	 			var memo = contracts[l].memo;
         				contractsId.push(contracts[l].id);
         				log.debug('line item',contracts[l].lineitem);
         				salesOrderObj.selectNewLine({ sublistId: 'item'});
         				salesOrderObj.setCurrentSublistValue({sublistId:'item',fieldId:'item',value:contracts[l].lineitem});
         				salesOrderObj.setCurrentSublistValue({sublistId:'item',fieldId:'amount',value:finalAmount});
         				if(previousConsumption)
         					salesOrderObj.setCurrentSublistValue({sublistId:'item',fieldId:'custcol_previousconsumption',value:previousConsumption});
         				
         				if(currentConsumption)
         					salesOrderObj.setCurrentSublistValue({sublistId:'item',fieldId:'custcol_currentconsumption',value:currentConsumption});
         				
         				if(minimumamt)
         					salesOrderObj.setCurrentSublistValue({sublistId:'item',fieldId:'custcol_contractminimumamount',value:minimumamt});
         				
         				if(rate)
         					salesOrderObj.setCurrentSublistValue({sublistId:'item',fieldId:'custcol_contractrate',value:rate});
         				
         				if(memo)
         					salesOrderObj.setCurrentSublistValue({sublistId:'item',fieldId:'custcol_contractmemo',value:memo});
         				
         				salesOrderObj.commitLine({
         					
				               sublistId: 'item'
				        });
	
         				
         			}	
         			
         			
         				
         				
	   				
         			
         			
         				
         			var soid = salesOrderObj.save();
         			var recordIds = [];
         			//var soid;
         			if(soid){
         				
         				recordIds.push(soid)
         			//	salesOrderIds.push({column1:soid,id:soid});
         				
         				 var outputUrl = url.resolveScript({
          		    	      scriptId: 'customscript_prg_st_generic_suitelet',
          		    	      deploymentId: 1,
          		    	      returnExternalUrl:true
          		    	       });
          				 
       	   				var response = https.request({
       	   				    method:https.Method.POST,
       	   				    url:outputUrl,
       	   				    body:JSON.stringify({ids:contractsId,soid:soid})
       	   				    
       	   				   });

         				
         			
         				
         				
         				
         			}
         			
         			var searchSalesFilter = new Array();
         			var searchSalesCol = new Array();
         			searchSalesFilter.push(search.createFilter({name:'internalid',operator:'anyof',values:recordIds}))
         			searchSalesFilter.push(search.createFilter({name:'mainline',operator:'is',values:true}))
         			searchSalesCol.push(search.createColumn({name:'entity'}))
         			searchSalesCol.push(search.createColumn({name:'custbody_contractnumber'}))
         			searchSalesCol.push(search.createColumn({name:'companyname',join:'customer'}))
         			var searchResults = search.create({type:'salesorder','filters':searchSalesFilter,'columns':searchSalesCol}).run().getRange(0,14);
         			//var contracts = searchResults.run().getRange(0,50);
         			log.audit('Sales Order Results',JSON.stringify(searchResults));
         			
         			for(var so = 0; so < searchResults.length; so++){
         				
         				var soid = searchResults[so].id;
         				var customerName = searchResults[so].getText({name:'entity'});
         				var companyName = searchResults[so].getValue({name:'companyname',join:'customer'});
         				var contractNumber = searchResults[so].getText({name:'custbody_contractnumber'});
         				log.audit('Sales Order ID '+soid+'$$ '+customerName);
         				salesOrderIds.push({column1:soid,
	         					id:soid,
	         					column2:customerName,
	         					column3:companyName,
	         					column4:contractNumber
         					});
         				}
         				
         			
         			
         			
         			
         			
         			
         			
         	}    
         		
         		
         	   var list = serverWidget.createList({
                   title: 'Sales Order List'
               });
         	   
         	  list.style = serverWidget.ListStyle.GRID;
         	
         	var listColumn =  list.addColumn({
         	    id : 'column1',
         	    type : serverWidget.FieldType.URL,
         	    label : 'Sales Order',
         	    align : serverWidget.LayoutJustification.LEFT
         	});
         	
         	list.addColumn({
         	    id : 'column2',
         	    type : serverWidget.FieldType.URL,
         	    label : 'Customer ID',
         	    align : serverWidget.LayoutJustification.LEFT
         	});
         	
         	list.addColumn({
         	    id : 'column3',
         	    type : serverWidget.FieldType.URL,
         	    label : 'Customer Name',
         	    align : serverWidget.LayoutJustification.LEFT
         	});
         	
         	list.addColumn({
         	    id : 'column4',
         	    type : serverWidget.FieldType.URL,
         	    label : 'Contract Number',
         	    align : serverWidget.LayoutJustification.LEFT
         	});
         	
         	
         	
         	var URL = url.resolveRecord({recordType: 'salesorder'}); 

     		listColumn.setURL({
         	    url : URL
         	});
     		
     		listColumn.addParamToURL({
           	    param : 'id',
           	    value:'id',
           	    dynamic:true
           	})
     		
     		
     		
         	
//         	salesOrderIds.push({column1:'TEST',id:Math.round(433548.0)});
//         	salesOrderIds.push({column1:'TEST',id:Math.round(433549.0)});
         	
//      	   var salesOrderF = new Array();
//      	   var salesOrderC = new Array();
//      	   
//      	  salesOrderF.push(search.createFilter({
//      		  name:'internalid',
//      		  operator:'anyof',
//      		  values:salesOrderIds
//      		  
//      	  }))
//      	  
//      	   salesOrderF.push(search.createFilter({
//      		  name:'mainline',
//      		  operator:'is',
//      		  values:true
//      		  
//      	  }))
//      	  
//      	  salesOrderC.push(search.createColumn('entity'));
//      	  
//      	  var searchResults = search.create({type:'salesorder','filters':salesOrderF,'columns':salesOrderC})
//      	  
//      	  var soResults = searchResults.run().getRange(0,1000);
//      	  log.debug('SEARCH RESULTS',soResults);
      	 
	      
      	  for(var k1 = 0; k1 < salesOrderIds.length; k1++){
      		  
      		  
	      		
	           	
	           	list.addRow(salesOrderIds[k1])
      		  
      	  }
         	
     	  list.addPageLink({
     		    title : 'Go To Contract Management',
     		    type : serverWidget.FormPageLinkType.CROSSLINK,
     		    url : 'https://system.sandbox.netsuite.com/app/site/hosting/scriptlet.nl?script=362&deploy=1'
     		});
         	  
         	
         		
         	   

         	  
         	   
         		
         		
         		context.response.writePage(list);
         		
                 log.debug('Sublist ARRAY',sublistArray);

             }
                 
                
          
                 
                
                
            
            
            
           
       		 
       		
       	 
       }
	
	
	
	
	var groupBy = function(xs, key) {
		  return xs.reduce(function(rv, x) {
		    (rv[x[key]] = rv[x[key]] || []).push(x);
		    return rv;
		  }, {});
		};
		
        
        
        function getContracts(search,context){
     	   
        	log.debug('Get Contracts');
       
     		var contractFilters = [];
     		var contractColumns = [];

     		log.debug('Start Date',context.request.parameters.startDate)
     		log.debug('End Date',context.request.parameters.endDate)
     		
     		contractFilters.push(search.createFilter({
              name : 'custrecord_transactiongenerated',
              operator : search.Operator.IS,
              values :  false
          }));
     		
     		contractFilters.push(search.createFilter({
                name : 'custrecord_billstartdate',
                operator : search.Operator.ONORAFTER,
                values :  context.request.parameters.startDate
            }));
     		
     		contractFilters.push(search.createFilter({
                name : 'custrecord_subsidiary',
                join : 'custrecord_contractref',
                operator : search.Operator.IS,
                values :  context.request.parameters.subsidiary
            }));

     		contractFilters.push(search.createFilter({
                name : 'custrecord_contractlocation',
                join : 'custrecord_contractref',
                operator : search.Operator.IS,
                values :  context.request.parameters.location
            }));
     		
     		if(context.request.parameters.customer){
     			
     			contractFilters.push(search.createFilter({
                    name : 'custrecord_lesseename',
                    join : 'custrecord_contractref',
                    operator : search.Operator.IS,
                    values :  context.request.parameters.customer
                }));
     		}
     		
     		
     		
     		contractFilters.push(search.createFilter({
                name : 'custrecord_billingenddate',
                operator : search.Operator.ONORBEFORE,
                values :  context.request.parameters.endDate
            }));
     		
     		contractFilters.push(search.createFilter({
                name : 'isinactive',
                join:'custrecord_contractref',
                operator : search.Operator.IS,
                values :  'F'
            }));
     		
     		
     	
     		
     		
     		contractColumns.push(search.createColumn({name:'custrecord_billstartdate',summary:'group'}));  
     		contractColumns.push(search.createColumn({name:'custrecord_lesseename',join:'custrecord_contractref',summary:'group'}));   
     		contractColumns.push(search.createColumn({name:'custrecord_lessee_name',join:'custrecord_contractref',summary:'group'}));
     		contractColumns.push(search.createColumn({name:'custrecord_billingenddate',summary:'group'})); 
     		contractColumns.push(search.createColumn({name:'custrecord_billingreference',summary:'group'})); 
     	//	contractColumns.push(search.createColumn('custrecord_contractref'));
     		contractColumns.push(search.createColumn({name:'custrecord_contractref',summary:'group'}));
     		
     		
     		var searchResults = search.create({'type':'customrecord_contractbillingschedule'
     			 ,'filters':contractFilters
     			 ,'columns':contractColumns
     		});

     		var contracts = searchResults.run().getRange(0,50);
     		
     		
     		return contracts;
     		

     	   
     }
        
        
        
        
        

        return {
            onRequest: onRequest
        };
        
        
        
   
 });

