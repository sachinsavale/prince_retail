/**
 * @NApiVersion 2.x
 * @NScriptType ScheduledScript
 * @NModuleScope SameAccount
 */
define(['N/task','N/file'],

function(task,file) {
   
    /**
     * Definition of the Scheduled script trigger point.
     *
     * @param {Object} scriptContext
     * @param {string} scriptContext.type - The context in which the script is executed. It is one of the values from the scriptContext.InvocationType enum.
     * @Since 2015.2
     */
    function execute(scriptContext) {
    	
    	var scriptTask = task.create({taskType: task.TaskType.CSV_IMPORT});
    	scriptTask.mappingId = 26; 
    	var f = file.load({id:'2148'});
    	scriptTask.importFile = f;
//    	scriptTask.linkedFiles = {'addressbook': 'street,city\nval1,val2', 'purchases': file.load('SuiteScripts/other.csv')};
    	var csvImportTaskId = scriptTask.submit();
    	var taskStatus = task.checkStatus(csvImportTaskId);
    	if(taskStatus.status == "COMPLETE"){
    		
    		log.debug('Status Completed');
    		log.debug('CSV IMPORT ID',taskStatus);
    		
    	}
    	
    	var scriptTaskId = taskStatus.taskId;
    	
    	
    	var summary = task.checkStatus({
    	    taskId: scriptTaskId
    	    });
    	log.audit({
    	    title: 'Status', 
    	    details: summary.status
    	    });
    	 		
    	for(var i = 0; i <= 2000; i++){
    		
    		log.debug('debug',i);
    		
    	 	var summary = task.checkStatus({
        	    taskId: scriptTaskId
        	    });
        	log.audit({
        	    title: 'Status', 
        	    details: summary.status
        	    });
        	
        	if(summary.status == "COMPLETE"){
        		
        		log.debug('COMPLETED');
        		log.debug('SUMMARY',JSON.stringify(summary));
        		log.debug('TASK ID',csvImportTaskId)
        		
        		return;
        	}
        	
        	if(summary.status == "FAILED"){
        		
        		log.debug('FAILED');
        		log.debug('SUMMARY',JSON.stringify(summary));
        		return;
        	}
    		
    	}
    	

    }

    return {
        execute: execute
    };
    
});
