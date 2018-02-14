<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

require_once "NSPHPClient.php";

if (!class_exists("RecordType")) {
/**
 * RecordType
 */
class RecordType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const account = "account";
	/**
	 * @var string
	 */
	const accountingPeriod = "accountingPeriod";
	/**
	 * @var string
	 */
	const assemblyBuild = "assemblyBuild";
	/**
	 * @var string
	 */
	const assemblyUnbuild = "assemblyUnbuild";
	/**
	 * @var string
	 */
	const assemblyItem = "assemblyItem";
	/**
	 * @var string
	 */
	const billingAccount = "billingAccount";
	/**
	 * @var string
	 */
	const billingSchedule = "billingSchedule";
	/**
	 * @var string
	 */
	const bin = "bin";
	/**
	 * @var string
	 */
	const binTransfer = "binTransfer";
	/**
	 * @var string
	 */
	const binWorksheet = "binWorksheet";
	/**
	 * @var string
	 */
	const budget = "budget";
	/**
	 * @var string
	 */
	const budgetCategory = "budgetCategory";
	/**
	 * @var string
	 */
	const calendarEvent = "calendarEvent";
	/**
	 * @var string
	 */
	const campaign = "campaign";
	/**
	 * @var string
	 */
	const campaignAudience = "campaignAudience";
	/**
	 * @var string
	 */
	const campaignCategory = "campaignCategory";
	/**
	 * @var string
	 */
	const campaignChannel = "campaignChannel";
	/**
	 * @var string
	 */
	const campaignFamily = "campaignFamily";
	/**
	 * @var string
	 */
	const campaignOffer = "campaignOffer";
	/**
	 * @var string
	 */
	const campaignResponse = "campaignResponse";
	/**
	 * @var string
	 */
	const campaignSearchEngine = "campaignSearchEngine";
	/**
	 * @var string
	 */
	const campaignSubscription = "campaignSubscription";
	/**
	 * @var string
	 */
	const campaignVertical = "campaignVertical";
	/**
	 * @var string
	 */
	const cashRefund = "cashRefund";
	/**
	 * @var string
	 */
	const cashSale = "cashSale";
	/**
	 * @var string
	 */
	const check = "check";
	/**
	 * @var string
	 */
	const charge = "charge";
	/**
	 * @var string
	 */
	const classification = "classification";
	/**
	 * @var string
	 */
	const contact = "contact";
	/**
	 * @var string
	 */
	const contactCategory = "contactCategory";
	/**
	 * @var string
	 */
	const contactRole = "contactRole";
	/**
	 * @var string
	 */
	const costCategory = "costCategory";
	/**
	 * @var string
	 */
	const couponCode = "couponCode";
	/**
	 * @var string
	 */
	const creditMemo = "creditMemo";
	/**
	 * @var string
	 */
	const crmCustomField = "crmCustomField";
	/**
	 * @var string
	 */
	const currency = "currency";
	/**
	 * @var string
	 */
	const currencyRate = "currencyRate";
	/**
	 * @var string
	 */
	const customList = "customList";
	/**
	 * @var string
	 */
	const customRecord = "customRecord";
	/**
	 * @var string
	 */
	const customRecordCustomField = "customRecordCustomField";
	/**
	 * @var string
	 */
	const customRecordType = "customRecordType";
	/**
	 * @var string
	 */
	const customTransaction = "customTransaction";
	/**
	 * @var string
	 */
	const customTransactionType = "customTransactionType";
	/**
	 * @var string
	 */
	const customer = "customer";
	/**
	 * @var string
	 */
	const customerCategory = "customerCategory";
	/**
	 * @var string
	 */
	const customerDeposit = "customerDeposit";
	/**
	 * @var string
	 */
	const customerMessage = "customerMessage";
	/**
	 * @var string
	 */
	const customerPayment = "customerPayment";
	/**
	 * @var string
	 */
	const customerRefund = "customerRefund";
	/**
	 * @var string
	 */
	const customerStatus = "customerStatus";
	/**
	 * @var string
	 */
	const deposit = "deposit";
	/**
	 * @var string
	 */
	const depositApplication = "depositApplication";
	/**
	 * @var string
	 */
	const department = "department";
	/**
	 * @var string
	 */
	const descriptionItem = "descriptionItem";
	/**
	 * @var string
	 */
	const discountItem = "discountItem";
	/**
	 * @var string
	 */
	const downloadItem = "downloadItem";
	/**
	 * @var string
	 */
	const employee = "employee";
	/**
	 * @var string
	 */
	const entityCustomField = "entityCustomField";
	/**
	 * @var string
	 */
	const entityGroup = "entityGroup";
	/**
	 * @var string
	 */
	const estimate = "estimate";
	/**
	 * @var string
	 */
	const expenseCategory = "expenseCategory";
	/**
	 * @var string
	 */
	const expenseReport = "expenseReport";
	/**
	 * @var string
	 */
	const fairValuePrice = "fairValuePrice";
	/**
	 * @var string
	 */
	const file = "file";
	/**
	 * @var string
	 */
	const folder = "folder";
	/**
	 * @var string
	 */
	const giftCertificate = "giftCertificate";
	/**
	 * @var string
	 */
	const giftCertificateItem = "giftCertificateItem";
	/**
	 * @var string
	 */
	const globalAccountMapping = "globalAccountMapping";
	/**
	 * @var string
	 */
	const interCompanyJournalEntry = "interCompanyJournalEntry";
	/**
	 * @var string
	 */
	const interCompanyTransferOrder = "interCompanyTransferOrder";
	/**
	 * @var string
	 */
	const inventoryAdjustment = "inventoryAdjustment";
	/**
	 * @var string
	 */
	const inventoryCostRevaluation = "inventoryCostRevaluation";
	/**
	 * @var string
	 */
	const inventoryItem = "inventoryItem";
	/**
	 * @var string
	 */
	const inventoryNumber = "inventoryNumber";
	/**
	 * @var string
	 */
	const inventoryTransfer = "inventoryTransfer";
	/**
	 * @var string
	 */
	const invoice = "invoice";
	/**
	 * @var string
	 */
	const itemAccountMapping = "itemAccountMapping";
	/**
	 * @var string
	 */
	const itemCustomField = "itemCustomField";
	/**
	 * @var string
	 */
	const itemDemandPlan = "itemDemandPlan";
	/**
	 * @var string
	 */
	const itemFulfillment = "itemFulfillment";
	/**
	 * @var string
	 */
	const itemGroup = "itemGroup";
	/**
	 * @var string
	 */
	const itemNumberCustomField = "itemNumberCustomField";
	/**
	 * @var string
	 */
	const itemOptionCustomField = "itemOptionCustomField";
	/**
	 * @var string
	 */
	const itemSupplyPlan = "itemSupplyPlan";
	/**
	 * @var string
	 */
	const itemRevision = "itemRevision";
	/**
	 * @var string
	 */
	const issue = "issue";
	/**
	 * @var string
	 */
	const job = "job";
	/**
	 * @var string
	 */
	const jobStatus = "jobStatus";
	/**
	 * @var string
	 */
	const jobType = "jobType";
	/**
	 * @var string
	 */
	const itemReceipt = "itemReceipt";
	/**
	 * @var string
	 */
	const journalEntry = "journalEntry";
	/**
	 * @var string
	 */
	const kitItem = "kitItem";
	/**
	 * @var string
	 */
	const leadSource = "leadSource";
	/**
	 * @var string
	 */
	const location = "location";
	/**
	 * @var string
	 */
	const lotNumberedInventoryItem = "lotNumberedInventoryItem";
	/**
	 * @var string
	 */
	const lotNumberedAssemblyItem = "lotNumberedAssemblyItem";
	/**
	 * @var string
	 */
	const markupItem = "markupItem";
	/**
	 * @var string
	 */
	const message = "message";
	/**
	 * @var string
	 */
	const manufacturingCostTemplate = "manufacturingCostTemplate";
	/**
	 * @var string
	 */
	const manufacturingOperationTask = "manufacturingOperationTask";
	/**
	 * @var string
	 */
	const manufacturingRouting = "manufacturingRouting";
	/**
	 * @var string
	 */
	const nexus = "nexus";
	/**
	 * @var string
	 */
	const nonInventoryPurchaseItem = "nonInventoryPurchaseItem";
	/**
	 * @var string
	 */
	const nonInventoryResaleItem = "nonInventoryResaleItem";
	/**
	 * @var string
	 */
	const nonInventorySaleItem = "nonInventorySaleItem";
	/**
	 * @var string
	 */
	const note = "note";
	/**
	 * @var string
	 */
	const noteType = "noteType";
	/**
	 * @var string
	 */
	const opportunity = "opportunity";
	/**
	 * @var string
	 */
	const otherChargePurchaseItem = "otherChargePurchaseItem";
	/**
	 * @var string
	 */
	const otherChargeResaleItem = "otherChargeResaleItem";
	/**
	 * @var string
	 */
	const otherChargeSaleItem = "otherChargeSaleItem";
	/**
	 * @var string
	 */
	const otherCustomField = "otherCustomField";
	/**
	 * @var string
	 */
	const otherNameCategory = "otherNameCategory";
	/**
	 * @var string
	 */
	const partner = "partner";
	/**
	 * @var string
	 */
	const partnerCategory = "partnerCategory";
	/**
	 * @var string
	 */
	const paycheckJournal = "paycheckJournal";
	/**
	 * @var string
	 */
	const paymentItem = "paymentItem";
	/**
	 * @var string
	 */
	const paymentMethod = "paymentMethod";
	/**
	 * @var string
	 */
	const payrollItem = "payrollItem";
	/**
	 * @var string
	 */
	const phoneCall = "phoneCall";
	/**
	 * @var string
	 */
	const priceLevel = "priceLevel";
	/**
	 * @var string
	 */
	const pricingGroup = "pricingGroup";
	/**
	 * @var string
	 */
	const projectTask = "projectTask";
	/**
	 * @var string
	 */
	const promotionCode = "promotionCode";
	/**
	 * @var string
	 */
	const purchaseOrder = "purchaseOrder";
	/**
	 * @var string
	 */
	const purchaseRequisition = "purchaseRequisition";
	/**
	 * @var string
	 */
	const resourceAllocation = "resourceAllocation";
	/**
	 * @var string
	 */
	const returnAuthorization = "returnAuthorization";
	/**
	 * @var string
	 */
	const revRecSchedule = "revRecSchedule";
	/**
	 * @var string
	 */
	const revRecTemplate = "revRecTemplate";
	/**
	 * @var string
	 */
	const salesOrder = "salesOrder";
	/**
	 * @var string
	 */
	const salesRole = "salesRole";
	/**
	 * @var string
	 */
	const salesTaxItem = "salesTaxItem";
	/**
	 * @var string
	 */
	const serializedInventoryItem = "serializedInventoryItem";
	/**
	 * @var string
	 */
	const serializedAssemblyItem = "serializedAssemblyItem";
	/**
	 * @var string
	 */
	const servicePurchaseItem = "servicePurchaseItem";
	/**
	 * @var string
	 */
	const serviceResaleItem = "serviceResaleItem";
	/**
	 * @var string
	 */
	const serviceSaleItem = "serviceSaleItem";
	/**
	 * @var string
	 */
	const solution = "solution";
	/**
	 * @var string
	 */
	const siteCategory = "siteCategory";
	/**
	 * @var string
	 */
	const state = "state";
	/**
	 * @var string
	 */
	const statisticalJournalEntry = "statisticalJournalEntry";
	/**
	 * @var string
	 */
	const subsidiary = "subsidiary";
	/**
	 * @var string
	 */
	const subtotalItem = "subtotalItem";
	/**
	 * @var string
	 */
	const supportCase = "supportCase";
	/**
	 * @var string
	 */
	const supportCaseIssue = "supportCaseIssue";
	/**
	 * @var string
	 */
	const supportCaseOrigin = "supportCaseOrigin";
	/**
	 * @var string
	 */
	const supportCasePriority = "supportCasePriority";
	/**
	 * @var string
	 */
	const supportCaseStatus = "supportCaseStatus";
	/**
	 * @var string
	 */
	const supportCaseType = "supportCaseType";
	/**
	 * @var string
	 */
	const task = "task";
	/**
	 * @var string
	 */
	const taxAcct = "taxAcct";
	/**
	 * @var string
	 */
	const taxGroup = "taxGroup";
	/**
	 * @var string
	 */
	const taxType = "taxType";
	/**
	 * @var string
	 */
	const term = "term";
	/**
	 * @var string
	 */
	const timeBill = "timeBill";
	/**
	 * @var string
	 */
	const timeSheet = "timeSheet";
	/**
	 * @var string
	 */
	const topic = "topic";
	/**
	 * @var string
	 */
	const transferOrder = "transferOrder";
	/**
	 * @var string
	 */
	const transactionBodyCustomField = "transactionBodyCustomField";
	/**
	 * @var string
	 */
	const transactionColumnCustomField = "transactionColumnCustomField";
	/**
	 * @var string
	 */
	const unitsType = "unitsType";
	/**
	 * @var string
	 */
	const vendor = "vendor";
	/**
	 * @var string
	 */
	const vendorCategory = "vendorCategory";
	/**
	 * @var string
	 */
	const vendorBill = "vendorBill";
	/**
	 * @var string
	 */
	const vendorCredit = "vendorCredit";
	/**
	 * @var string
	 */
	const vendorPayment = "vendorPayment";
	/**
	 * @var string
	 */
	const vendorReturnAuthorization = "vendorReturnAuthorization";
	/**
	 * @var string
	 */
	const winLossReason = "winLossReason";
	/**
	 * @var string
	 */
	const workOrder = "workOrder";
	/**
	 * @var string
	 */
	const workOrderIssue = "workOrderIssue";
	/**
	 * @var string
	 */
	const workOrderCompletion = "workOrderCompletion";
	/**
	 * @var string
	 */
	const workOrderClose = "workOrderClose";
}}

if (!class_exists("SearchRecordType")) {
/**
 * SearchRecordType
 */
class SearchRecordType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const account = "account";
	/**
	 * @var string
	 */
	const accountingPeriod = "accountingPeriod";
	/**
	 * @var string
	 */
	const assemblyItem = "assemblyItem";
	/**
	 * @var string
	 */
	const bin = "bin";
	/**
	 * @var string
	 */
	const budget = "budget";
	/**
	 * @var string
	 */
	const calendarEvent = "calendarEvent";
	/**
	 * @var string
	 */
	const campaign = "campaign";
	/**
	 * @var string
	 */
	const classification = "classification";
	/**
	 * @var string
	 */
	const contact = "contact";
	/**
	 * @var string
	 */
	const customer = "customer";
	/**
	 * @var string
	 */
	const customerMessage = "customerMessage";
	/**
	 * @var string
	 */
	const customRecord = "customRecord";
	/**
	 * @var string
	 */
	const department = "department";
	/**
	 * @var string
	 */
	const employee = "employee";
	/**
	 * @var string
	 */
	const entityGroup = "entityGroup";
	/**
	 * @var string
	 */
	const file = "file";
	/**
	 * @var string
	 */
	const folder = "folder";
	/**
	 * @var string
	 */
	const giftCertificate = "giftCertificate";
	/**
	 * @var string
	 */
	const groupMember = "groupMember";
	/**
	 * @var string
	 */
	const inventoryNumber = "inventoryNumber";
	/**
	 * @var string
	 */
	const item = "item";
	/**
	 * @var string
	 */
	const issue = "issue";
	/**
	 * @var string
	 */
	const job = "job";
	/**
	 * @var string
	 */
	const location = "location";
	/**
	 * @var string
	 */
	const lotNumberedAssemblyItem = "lotNumberedAssemblyItem";
	/**
	 * @var string
	 */
	const manufacturingCostTemplate = "manufacturingCostTemplate";
	/**
	 * @var string
	 */
	const manufacturingOperationTask = "manufacturingOperationTask";
	/**
	 * @var string
	 */
	const manufacturingRouting = "manufacturingRouting";
	/**
	 * @var string
	 */
	const message = "message";
	/**
	 * @var string
	 */
	const nexus = "nexus";
	/**
	 * @var string
	 */
	const note = "note";
	/**
	 * @var string
	 */
	const opportunity = "opportunity";
	/**
	 * @var string
	 */
	const otherNameCategory = "otherNameCategory";
	/**
	 * @var string
	 */
	const partner = "partner";
	/**
	 * @var string
	 */
	const phoneCall = "phoneCall";
	/**
	 * @var string
	 */
	const priceLevel = "priceLevel";
	/**
	 * @var string
	 */
	const pricingGroup = "pricingGroup";
	/**
	 * @var string
	 */
	const projectTask = "projectTask";
	/**
	 * @var string
	 */
	const promotionCode = "promotionCode";
	/**
	 * @var string
	 */
	const resourceAllocation = "resourceAllocation";
	/**
	 * @var string
	 */
	const revRecSchedule = "revRecSchedule";
	/**
	 * @var string
	 */
	const revRecTemplate = "revRecTemplate";
	/**
	 * @var string
	 */
	const salesRole = "salesRole";
	/**
	 * @var string
	 */
	const serializedAssemblyItem = "serializedAssemblyItem";
	/**
	 * @var string
	 */
	const solution = "solution";
	/**
	 * @var string
	 */
	const siteCategory = "siteCategory";
	/**
	 * @var string
	 */
	const subsidiary = "subsidiary";
	/**
	 * @var string
	 */
	const supportCase = "supportCase";
	/**
	 * @var string
	 */
	const task = "task";
	/**
	 * @var string
	 */
	const timeBill = "timeBill";
	/**
	 * @var string
	 */
	const topic = "topic";
	/**
	 * @var string
	 */
	const transaction = "transaction";
	/**
	 * @var string
	 */
	const vendor = "vendor";
}}

if (!class_exists("GetAllRecordType")) {
/**
 * GetAllRecordType
 */
class GetAllRecordType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const budgetCategory = "budgetCategory";
	/**
	 * @var string
	 */
	const campaignAudience = "campaignAudience";
	/**
	 * @var string
	 */
	const campaignCategory = "campaignCategory";
	/**
	 * @var string
	 */
	const campaignChannel = "campaignChannel";
	/**
	 * @var string
	 */
	const campaignFamily = "campaignFamily";
	/**
	 * @var string
	 */
	const campaignOffer = "campaignOffer";
	/**
	 * @var string
	 */
	const campaignSearchEngine = "campaignSearchEngine";
	/**
	 * @var string
	 */
	const campaignSubscription = "campaignSubscription";
	/**
	 * @var string
	 */
	const campaignVertical = "campaignVertical";
	/**
	 * @var string
	 */
	const costCategory = "costCategory";
	/**
	 * @var string
	 */
	const currency = "currency";
	/**
	 * @var string
	 */
	const leadSource = "leadSource";
	/**
	 * @var string
	 */
	const salesTaxItem = "salesTaxItem";
	/**
	 * @var string
	 */
	const state = "state";
	/**
	 * @var string
	 */
	const supportCaseIssue = "supportCaseIssue";
	/**
	 * @var string
	 */
	const supportCaseOrigin = "supportCaseOrigin";
	/**
	 * @var string
	 */
	const supportCasePriority = "supportCasePriority";
	/**
	 * @var string
	 */
	const supportCaseStatus = "supportCaseStatus";
	/**
	 * @var string
	 */
	const supportCaseType = "supportCaseType";
	/**
	 * @var string
	 */
	const taxAcct = "taxAcct";
	/**
	 * @var string
	 */
	const taxGroup = "taxGroup";
	/**
	 * @var string
	 */
	const taxType = "taxType";
}}

if (!class_exists("GetCustomizationType")) {
/**
 * GetCustomizationType
 */
class GetCustomizationType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const crmCustomField = "crmCustomField";
	/**
	 * @var string
	 */
	const customList = "customList";
	/**
	 * @var string
	 */
	const customRecordType = "customRecordType";
	/**
	 * @var string
	 */
	const customTransactionType = "customTransactionType";
	/**
	 * @var string
	 */
	const entityCustomField = "entityCustomField";
	/**
	 * @var string
	 */
	const itemCustomField = "itemCustomField";
	/**
	 * @var string
	 */
	const itemNumberCustomField = "itemNumberCustomField";
	/**
	 * @var string
	 */
	const itemOptionCustomField = "itemOptionCustomField";
	/**
	 * @var string
	 */
	const otherCustomField = "otherCustomField";
	/**
	 * @var string
	 */
	const transactionBodyCustomField = "transactionBodyCustomField";
	/**
	 * @var string
	 */
	const transactionColumnCustomField = "transactionColumnCustomField";
}}

if (!class_exists("InitializeType")) {
/**
 * InitializeType
 */
class InitializeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const assemblyBuild = "assemblyBuild";
	/**
	 * @var string
	 */
	const assemblyUnbuild = "assemblyUnbuild";
	/**
	 * @var string
	 */
	const binWorksheet = "binWorksheet";
	/**
	 * @var string
	 */
	const cashRefund = "cashRefund";
	/**
	 * @var string
	 */
	const cashSale = "cashSale";
	/**
	 * @var string
	 */
	const creditMemo = "creditMemo";
	/**
	 * @var string
	 */
	const customerPayment = "customerPayment";
	/**
	 * @var string
	 */
	const customerRefund = "customerRefund";
	/**
	 * @var string
	 */
	const depositApplication = "depositApplication";
	/**
	 * @var string
	 */
	const estimate = "estimate";
	/**
	 * @var string
	 */
	const invoice = "invoice";
	/**
	 * @var string
	 */
	const itemFulfillment = "itemFulfillment";
	/**
	 * @var string
	 */
	const itemReceipt = "itemReceipt";
	/**
	 * @var string
	 */
	const inventoryTransfer = "inventoryTransfer";
	/**
	 * @var string
	 */
	const purchaseOrder = "purchaseOrder";
	/**
	 * @var string
	 */
	const returnAuthorization = "returnAuthorization";
	/**
	 * @var string
	 */
	const salesOrder = "salesOrder";
	/**
	 * @var string
	 */
	const vendorBill = "vendorBill";
	/**
	 * @var string
	 */
	const vendorCredit = "vendorCredit";
	/**
	 * @var string
	 */
	const vendorReturnAuthorization = "vendorReturnAuthorization";
	/**
	 * @var string
	 */
	const vendorPayment = "vendorPayment";
	/**
	 * @var string
	 */
	const workOrder = "workOrder";
	/**
	 * @var string
	 */
	const workOrderIssue = "workOrderIssue";
	/**
	 * @var string
	 */
	const workOrderCompletion = "workOrderCompletion";
	/**
	 * @var string
	 */
	const workOrderClose = "workOrderClose";
}}

if (!class_exists("InitializeRefType")) {
/**
 * InitializeRefType
 */
class InitializeRefType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const assemblyItem = "assemblyItem";
	/**
	 * @var string
	 */
	const assemblyBuild = "assemblyBuild";
	/**
	 * @var string
	 */
	const cashSale = "cashSale";
	/**
	 * @var string
	 */
	const creditMemo = "creditMemo";
	/**
	 * @var string
	 */
	const customer = "customer";
	/**
	 * @var string
	 */
	const customerDeposit = "customerDeposit";
	/**
	 * @var string
	 */
	const employee = "employee";
	/**
	 * @var string
	 */
	const estimate = "estimate";
	/**
	 * @var string
	 */
	const interCompanyTransferOrder = "interCompanyTransferOrder";
	/**
	 * @var string
	 */
	const invoice = "invoice";
	/**
	 * @var string
	 */
	const location = "location";
	/**
	 * @var string
	 */
	const lotNumberedAssemblyItem = "lotNumberedAssemblyItem";
	/**
	 * @var string
	 */
	const opportunity = "opportunity";
	/**
	 * @var string
	 */
	const purchaseOrder = "purchaseOrder";
	/**
	 * @var string
	 */
	const purchaseRequisition = "purchaseRequisition";
	/**
	 * @var string
	 */
	const returnAuthorization = "returnAuthorization";
	/**
	 * @var string
	 */
	const salesOrder = "salesOrder";
	/**
	 * @var string
	 */
	const serializedAssemblyItem = "serializedAssemblyItem";
	/**
	 * @var string
	 */
	const transferOrder = "transferOrder";
	/**
	 * @var string
	 */
	const vendor = "vendor";
	/**
	 * @var string
	 */
	const vendorBill = "vendorBill";
	/**
	 * @var string
	 */
	const vendorReturnAuthorization = "vendorReturnAuthorization";
	/**
	 * @var string
	 */
	const workOrder = "workOrder";
}}

if (!class_exists("InitializeAuxRefType")) {
/**
 * InitializeAuxRefType
 */
class InitializeAuxRefType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const shippingGroup = "shippingGroup";
	/**
	 * @var string
	 */
	const arAccount = "arAccount";
	/**
	 * @var string
	 */
	const apAccount = "apAccount";
}}

if (!class_exists("DeletedRecordType")) {
/**
 * DeletedRecordType
 */
class DeletedRecordType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const assemblyBuild = "assemblyBuild";
	/**
	 * @var string
	 */
	const assemblyItem = "assemblyItem";
	/**
	 * @var string
	 */
	const assemblyUnbuild = "assemblyUnbuild";
	/**
	 * @var string
	 */
	const billingSchedule = "billingSchedule";
	/**
	 * @var string
	 */
	const bin = "bin";
	/**
	 * @var string
	 */
	const binTransfer = "binTransfer";
	/**
	 * @var string
	 */
	const binWorksheet = "binWorksheet";
	/**
	 * @var string
	 */
	const calendarEvent = "calendarEvent";
	/**
	 * @var string
	 */
	const campaign = "campaign";
	/**
	 * @var string
	 */
	const cashRefund = "cashRefund";
	/**
	 * @var string
	 */
	const cashSale = "cashSale";
	/**
	 * @var string
	 */
	const charge = "charge";
	/**
	 * @var string
	 */
	const check = "check";
	/**
	 * @var string
	 */
	const contact = "contact";
	/**
	 * @var string
	 */
	const contactCategory = "contactCategory";
	/**
	 * @var string
	 */
	const costCategory = "costCategory";
	/**
	 * @var string
	 */
	const couponCode = "couponCode";
	/**
	 * @var string
	 */
	const creditMemo = "creditMemo";
	/**
	 * @var string
	 */
	const currencyRate = "currencyRate";
	/**
	 * @var string
	 */
	const customRecord = "customRecord";
	/**
	 * @var string
	 */
	const customTransaction = "customTransaction";
	/**
	 * @var string
	 */
	const customer = "customer";
	/**
	 * @var string
	 */
	const customerCategory = "customerCategory";
	/**
	 * @var string
	 */
	const customerMessage = "customerMessage";
	/**
	 * @var string
	 */
	const customerDeposit = "customerDeposit";
	/**
	 * @var string
	 */
	const customerPayment = "customerPayment";
	/**
	 * @var string
	 */
	const customerRefund = "customerRefund";
	/**
	 * @var string
	 */
	const customerStatus = "customerStatus";
	/**
	 * @var string
	 */
	const deposit = "deposit";
	/**
	 * @var string
	 */
	const depositApplication = "depositApplication";
	/**
	 * @var string
	 */
	const descriptionItem = "descriptionItem";
	/**
	 * @var string
	 */
	const discountItem = "discountItem";
	/**
	 * @var string
	 */
	const downloadItem = "downloadItem";
	/**
	 * @var string
	 */
	const employee = "employee";
	/**
	 * @var string
	 */
	const estimate = "estimate";
	/**
	 * @var string
	 */
	const expenseReport = "expenseReport";
	/**
	 * @var string
	 */
	const file = "file";
	/**
	 * @var string
	 */
	const folder = "folder";
	/**
	 * @var string
	 */
	const giftCertificateItem = "giftCertificateItem";
	/**
	 * @var string
	 */
	const globalAccountMapping = "globalAccountMapping";
	/**
	 * @var string
	 */
	const interCompanyJournalEntry = "interCompanyJournalEntry";
	/**
	 * @var string
	 */
	const interCompanyTransferOrder = "interCompanyTransferOrder";
	/**
	 * @var string
	 */
	const inventoryAdjustment = "inventoryAdjustment";
	/**
	 * @var string
	 */
	const inventoryCostRevaluation = "inventoryCostRevaluation";
	/**
	 * @var string
	 */
	const inventoryItem = "inventoryItem";
	/**
	 * @var string
	 */
	const inventoryNumber = "inventoryNumber";
	/**
	 * @var string
	 */
	const inventoryTransfer = "inventoryTransfer";
	/**
	 * @var string
	 */
	const invoice = "invoice";
	/**
	 * @var string
	 */
	const issue = "issue";
	/**
	 * @var string
	 */
	const itemAccountMapping = "itemAccountMapping";
	/**
	 * @var string
	 */
	const itemDemandPlan = "itemDemandPlan";
	/**
	 * @var string
	 */
	const itemFulfillment = "itemFulfillment";
	/**
	 * @var string
	 */
	const itemSupplyPlan = "itemSupplyPlan";
	/**
	 * @var string
	 */
	const itemGroup = "itemGroup";
	/**
	 * @var string
	 */
	const itemReceipt = "itemReceipt";
	/**
	 * @var string
	 */
	const itemRevision = "itemRevision";
	/**
	 * @var string
	 */
	const job = "job";
	/**
	 * @var string
	 */
	const jobStatus = "jobStatus";
	/**
	 * @var string
	 */
	const journalEntry = "journalEntry";
	/**
	 * @var string
	 */
	const kitItem = "kitItem";
	/**
	 * @var string
	 */
	const lotNumberedAssemblyItem = "lotNumberedAssemblyItem";
	/**
	 * @var string
	 */
	const lotNumberedInventoryItem = "lotNumberedInventoryItem";
	/**
	 * @var string
	 */
	const markupItem = "markupItem";
	/**
	 * @var string
	 */
	const message = "message";
	/**
	 * @var string
	 */
	const manufacturingCostTemplate = "manufacturingCostTemplate";
	/**
	 * @var string
	 */
	const manufacturingOperationTask = "manufacturingOperationTask";
	/**
	 * @var string
	 */
	const manufacturingRouting = "manufacturingRouting";
	/**
	 * @var string
	 */
	const nexus = "nexus";
	/**
	 * @var string
	 */
	const nonInventoryPurchaseItem = "nonInventoryPurchaseItem";
	/**
	 * @var string
	 */
	const nonInventoryResaleItem = "nonInventoryResaleItem";
	/**
	 * @var string
	 */
	const nonInventorySaleItem = "nonInventorySaleItem";
	/**
	 * @var string
	 */
	const note = "note";
	/**
	 * @var string
	 */
	const noteType = "noteType";
	/**
	 * @var string
	 */
	const opportunity = "opportunity";
	/**
	 * @var string
	 */
	const otherChargePurchaseItem = "otherChargePurchaseItem";
	/**
	 * @var string
	 */
	const otherChargeResaleItem = "otherChargeResaleItem";
	/**
	 * @var string
	 */
	const otherChargeSaleItem = "otherChargeSaleItem";
	/**
	 * @var string
	 */
	const otherNameCategory = "otherNameCategory";
	/**
	 * @var string
	 */
	const partner = "partner";
	/**
	 * @var string
	 */
	const paymentItem = "paymentItem";
	/**
	 * @var string
	 */
	const paymentMethod = "paymentMethod";
	/**
	 * @var string
	 */
	const payrollItem = "payrollItem";
	/**
	 * @var string
	 */
	const phoneCall = "phoneCall";
	/**
	 * @var string
	 */
	const priceLevel = "priceLevel";
	/**
	 * @var string
	 */
	const pricingGroup = "pricingGroup";
	/**
	 * @var string
	 */
	const projectTask = "projectTask";
	/**
	 * @var string
	 */
	const promotionCode = "promotionCode";
	/**
	 * @var string
	 */
	const purchaseOrder = "purchaseOrder";
	/**
	 * @var string
	 */
	const purchaseRequisition = "purchaseRequisition";
	/**
	 * @var string
	 */
	const resourceAllocation = "resourceAllocation";
	/**
	 * @var string
	 */
	const returnAuthorization = "returnAuthorization";
	/**
	 * @var string
	 */
	const salesOrder = "salesOrder";
	/**
	 * @var string
	 */
	const salesTaxItem = "salesTaxItem";
	/**
	 * @var string
	 */
	const serializedAssemblyItem = "serializedAssemblyItem";
	/**
	 * @var string
	 */
	const serializedInventoryItem = "serializedInventoryItem";
	/**
	 * @var string
	 */
	const servicePurchaseItem = "servicePurchaseItem";
	/**
	 * @var string
	 */
	const serviceResaleItem = "serviceResaleItem";
	/**
	 * @var string
	 */
	const serviceSaleItem = "serviceSaleItem";
	/**
	 * @var string
	 */
	const statisticalJournalEntry = "statisticalJournalEntry";
	/**
	 * @var string
	 */
	const subtotalItem = "subtotalItem";
	/**
	 * @var string
	 */
	const supportCase = "supportCase";
	/**
	 * @var string
	 */
	const supportCaseIssue = "supportCaseIssue";
	/**
	 * @var string
	 */
	const supportCaseOrigin = "supportCaseOrigin";
	/**
	 * @var string
	 */
	const supportCasePriority = "supportCasePriority";
	/**
	 * @var string
	 */
	const supportCaseStatus = "supportCaseStatus";
	/**
	 * @var string
	 */
	const supportCaseType = "supportCaseType";
	/**
	 * @var string
	 */
	const task = "task";
	/**
	 * @var string
	 */
	const term = "term";
	/**
	 * @var string
	 */
	const timeSheet = "timeSheet";
	/**
	 * @var string
	 */
	const transferOrder = "transferOrder";
	/**
	 * @var string
	 */
	const vendor = "vendor";
	/**
	 * @var string
	 */
	const vendorBill = "vendorBill";
	/**
	 * @var string
	 */
	const vendorCredit = "vendorCredit";
	/**
	 * @var string
	 */
	const vendorPayment = "vendorPayment";
	/**
	 * @var string
	 */
	const vendorReturnAuthorization = "vendorReturnAuthorization";
	/**
	 * @var string
	 */
	const winLossReason = "winLossReason";
	/**
	 * @var string
	 */
	const workOrder = "workOrder";
	/**
	 * @var string
	 */
	const workOrderIssue = "workOrderIssue";
	/**
	 * @var string
	 */
	const workOrderCompletion = "workOrderCompletion";
	/**
	 * @var string
	 */
	const workOrderClose = "workOrderClose";
}}

if (!class_exists("AsyncStatusType")) {
/**
 * AsyncStatusType
 */
class AsyncStatusType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const failed = "failed";
	/**
	 * @var string
	 */
	const finishedWithErrors = "finishedWithErrors";
	/**
	 * @var string
	 */
	const pending = "pending";
	/**
	 * @var string
	 */
	const processing = "processing";
	/**
	 * @var string
	 */
	const finished = "finished";
}}

if (!class_exists("SearchStringFieldOperator")) {
/**
 * SearchStringFieldOperator
 */
class SearchStringFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const contains = "contains";
	/**
	 * @var string
	 */
	const doesNotContain = "doesNotContain";
	/**
	 * @var string
	 */
	const doesNotStartWith = "doesNotStartWith";
	/**
	 * @var string
	 */
	const NSempty = "empty";
	/**
	 * @var string
	 */
	const hasKeywords = "hasKeywords";
	/**
	 * @var string
	 */
	const is = "is";
	/**
	 * @var string
	 */
	const isNot = "isNot";
	/**
	 * @var string
	 */
	const notEmpty = "notEmpty";
	/**
	 * @var string
	 */
	const startsWith = "startsWith";
}}

if (!class_exists("SearchLongFieldOperator")) {
/**
 * SearchLongFieldOperator
 */
class SearchLongFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const between = "between";
	/**
	 * @var string
	 */
	const NSempty = "empty";
	/**
	 * @var string
	 */
	const equalTo = "equalTo";
	/**
	 * @var string
	 */
	const greaterThan = "greaterThan";
	/**
	 * @var string
	 */
	const greaterThanOrEqualTo = "greaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const lessThan = "lessThan";
	/**
	 * @var string
	 */
	const lessThanOrEqualTo = "lessThanOrEqualTo";
	/**
	 * @var string
	 */
	const notBetween = "notBetween";
	/**
	 * @var string
	 */
	const notEmpty = "notEmpty";
	/**
	 * @var string
	 */
	const notEqualTo = "notEqualTo";
	/**
	 * @var string
	 */
	const notGreaterThan = "notGreaterThan";
	/**
	 * @var string
	 */
	const notGreaterThanOrEqualTo = "notGreaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const notLessThan = "notLessThan";
	/**
	 * @var string
	 */
	const notLessThanOrEqualTo = "notLessThanOrEqualTo";
}}

if (!class_exists("SearchTextNumberFieldOperator")) {
/**
 * SearchTextNumberFieldOperator
 */
class SearchTextNumberFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const between = "between";
	/**
	 * @var string
	 */
	const NSempty = "empty";
	/**
	 * @var string
	 */
	const equalTo = "equalTo";
	/**
	 * @var string
	 */
	const greaterThan = "greaterThan";
	/**
	 * @var string
	 */
	const greaterThanOrEqualTo = "greaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const lessThan = "lessThan";
	/**
	 * @var string
	 */
	const lessThanOrEqualTo = "lessThanOrEqualTo";
	/**
	 * @var string
	 */
	const notBetween = "notBetween";
	/**
	 * @var string
	 */
	const notEmpty = "notEmpty";
	/**
	 * @var string
	 */
	const notEqualTo = "notEqualTo";
	/**
	 * @var string
	 */
	const notGreaterThan = "notGreaterThan";
	/**
	 * @var string
	 */
	const notGreaterThanOrEqualTo = "notGreaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const notLessThan = "notLessThan";
	/**
	 * @var string
	 */
	const notLessThanOrEqualTo = "notLessThanOrEqualTo";
}}

if (!class_exists("SearchDoubleFieldOperator")) {
/**
 * SearchDoubleFieldOperator
 */
class SearchDoubleFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const between = "between";
	/**
	 * @var string
	 */
	const NSempty = "empty";
	/**
	 * @var string
	 */
	const equalTo = "equalTo";
	/**
	 * @var string
	 */
	const greaterThan = "greaterThan";
	/**
	 * @var string
	 */
	const greaterThanOrEqualTo = "greaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const lessThan = "lessThan";
	/**
	 * @var string
	 */
	const lessThanOrEqualTo = "lessThanOrEqualTo";
	/**
	 * @var string
	 */
	const notBetween = "notBetween";
	/**
	 * @var string
	 */
	const notEmpty = "notEmpty";
	/**
	 * @var string
	 */
	const notEqualTo = "notEqualTo";
	/**
	 * @var string
	 */
	const notGreaterThan = "notGreaterThan";
	/**
	 * @var string
	 */
	const notGreaterThanOrEqualTo = "notGreaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const notLessThan = "notLessThan";
	/**
	 * @var string
	 */
	const notLessThanOrEqualTo = "notLessThanOrEqualTo";
}}

if (!class_exists("SearchDateFieldOperator")) {
/**
 * SearchDateFieldOperator
 */
class SearchDateFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const after = "after";
	/**
	 * @var string
	 */
	const before = "before";
	/**
	 * @var string
	 */
	const NSempty = "empty";
	/**
	 * @var string
	 */
	const notAfter = "notAfter";
	/**
	 * @var string
	 */
	const notBefore = "notBefore";
	/**
	 * @var string
	 */
	const notEmpty = "notEmpty";
	/**
	 * @var string
	 */
	const notOn = "notOn";
	/**
	 * @var string
	 */
	const notOnOrAfter = "notOnOrAfter";
	/**
	 * @var string
	 */
	const notOnOrBefore = "notOnOrBefore";
	/**
	 * @var string
	 */
	const notWithin = "notWithin";
	/**
	 * @var string
	 */
	const on = "on";
	/**
	 * @var string
	 */
	const onOrAfter = "onOrAfter";
	/**
	 * @var string
	 */
	const onOrBefore = "onOrBefore";
	/**
	 * @var string
	 */
	const within = "within";
}}

if (!class_exists("SearchEnumMultiSelectFieldOperator")) {
/**
 * SearchEnumMultiSelectFieldOperator
 */
class SearchEnumMultiSelectFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const anyOf = "anyOf";
	/**
	 * @var string
	 */
	const noneOf = "noneOf";
}}

if (!class_exists("SearchMultiSelectFieldOperator")) {
/**
 * SearchMultiSelectFieldOperator
 */
class SearchMultiSelectFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const anyOf = "anyOf";
	/**
	 * @var string
	 */
	const noneOf = "noneOf";
}}

if (!class_exists("SearchDate")) {
/**
 * SearchDate
 */
class SearchDate {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const fiscalHalfBeforeLast = "fiscalHalfBeforeLast";
	/**
	 * @var string
	 */
	const fiscalHalfBeforeLastToDate = "fiscalHalfBeforeLastToDate";
	/**
	 * @var string
	 */
	const fiscalQuarterBeforeLast = "fiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const fiscalQuarterBeforeLastToDate = "fiscalQuarterBeforeLastToDate";
	/**
	 * @var string
	 */
	const fiscalYearBeforeLast = "fiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const fiscalYearBeforeLastToDate = "fiscalYearBeforeLastToDate";
	/**
	 * @var string
	 */
	const fiveDaysAgo = "fiveDaysAgo";
	/**
	 * @var string
	 */
	const fiveDaysFromNow = "fiveDaysFromNow";
	/**
	 * @var string
	 */
	const fourDaysAgo = "fourDaysAgo";
	/**
	 * @var string
	 */
	const fourDaysFromNow = "fourDaysFromNow";
	/**
	 * @var string
	 */
	const fourWeeksStartingThisWeek = "fourWeeksStartingThisWeek";
	/**
	 * @var string
	 */
	const lastBusinessWeek = "lastBusinessWeek";
	/**
	 * @var string
	 */
	const lastFiscalHalf = "lastFiscalHalf";
	/**
	 * @var string
	 */
	const lastFiscalHalfOneFiscalYearAgo = "lastFiscalHalfOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const lastFiscalHalfToDate = "lastFiscalHalfToDate";
	/**
	 * @var string
	 */
	const lastFiscalQuarter = "lastFiscalQuarter";
	/**
	 * @var string
	 */
	const lastFiscalQuarterOneFiscalYearAgo = "lastFiscalQuarterOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const lastFiscalQuarterToDate = "lastFiscalQuarterToDate";
	/**
	 * @var string
	 */
	const lastFiscalQuarterTwoFiscalYearsAgo = "lastFiscalQuarterTwoFiscalYearsAgo";
	/**
	 * @var string
	 */
	const lastFiscalYear = "lastFiscalYear";
	/**
	 * @var string
	 */
	const lastFiscalYearToDate = "lastFiscalYearToDate";
	/**
	 * @var string
	 */
	const lastMonth = "lastMonth";
	/**
	 * @var string
	 */
	const lastMonthOneFiscalQuarterAgo = "lastMonthOneFiscalQuarterAgo";
	/**
	 * @var string
	 */
	const lastMonthOneFiscalYearAgo = "lastMonthOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const lastMonthToDate = "lastMonthToDate";
	/**
	 * @var string
	 */
	const lastMonthTwoFiscalQuartersAgo = "lastMonthTwoFiscalQuartersAgo";
	/**
	 * @var string
	 */
	const lastMonthTwoFiscalYearsAgo = "lastMonthTwoFiscalYearsAgo";
	/**
	 * @var string
	 */
	const lastRollingHalf = "lastRollingHalf";
	/**
	 * @var string
	 */
	const lastRollingQuarter = "lastRollingQuarter";
	/**
	 * @var string
	 */
	const lastRollingYear = "lastRollingYear";
	/**
	 * @var string
	 */
	const lastWeek = "lastWeek";
	/**
	 * @var string
	 */
	const lastWeekToDate = "lastWeekToDate";
	/**
	 * @var string
	 */
	const monthAfterNext = "monthAfterNext";
	/**
	 * @var string
	 */
	const monthAfterNextToDate = "monthAfterNextToDate";
	/**
	 * @var string
	 */
	const monthBeforeLast = "monthBeforeLast";
	/**
	 * @var string
	 */
	const monthBeforeLastToDate = "monthBeforeLastToDate";
	/**
	 * @var string
	 */
	const nextBusinessWeek = "nextBusinessWeek";
	/**
	 * @var string
	 */
	const nextFiscalHalf = "nextFiscalHalf";
	/**
	 * @var string
	 */
	const nextFiscalQuarter = "nextFiscalQuarter";
	/**
	 * @var string
	 */
	const nextFiscalYear = "nextFiscalYear";
	/**
	 * @var string
	 */
	const nextFourWeeks = "nextFourWeeks";
	/**
	 * @var string
	 */
	const nextMonth = "nextMonth";
	/**
	 * @var string
	 */
	const nextOneHalf = "nextOneHalf";
	/**
	 * @var string
	 */
	const nextOneMonth = "nextOneMonth";
	/**
	 * @var string
	 */
	const nextOneQuarter = "nextOneQuarter";
	/**
	 * @var string
	 */
	const nextOneWeek = "nextOneWeek";
	/**
	 * @var string
	 */
	const nextOneYear = "nextOneYear";
	/**
	 * @var string
	 */
	const nextWeek = "nextWeek";
	/**
	 * @var string
	 */
	const ninetyDaysAgo = "ninetyDaysAgo";
	/**
	 * @var string
	 */
	const ninetyDaysFromNow = "ninetyDaysFromNow";
	/**
	 * @var string
	 */
	const oneYearBeforeLast = "oneYearBeforeLast";
	/**
	 * @var string
	 */
	const previousFiscalQuartersLastFiscalYear = "previousFiscalQuartersLastFiscalYear";
	/**
	 * @var string
	 */
	const previousFiscalQuartersThisFiscalYear = "previousFiscalQuartersThisFiscalYear";
	/**
	 * @var string
	 */
	const previousMonthsLastFiscalHalf = "previousMonthsLastFiscalHalf";
	/**
	 * @var string
	 */
	const previousMonthsLastFiscalQuarter = "previousMonthsLastFiscalQuarter";
	/**
	 * @var string
	 */
	const previousMonthsLastFiscalYear = "previousMonthsLastFiscalYear";
	/**
	 * @var string
	 */
	const previousMonthsSameFiscalHalfLastFiscalYear = "previousMonthsSameFiscalHalfLastFiscalYear";
	/**
	 * @var string
	 */
	const previousMonthsSameFiscalQuarterLastFiscalYear = "previousMonthsSameFiscalQuarterLastFiscalYear";
	/**
	 * @var string
	 */
	const previousMonthsThisFiscalHalf = "previousMonthsThisFiscalHalf";
	/**
	 * @var string
	 */
	const previousMonthsThisFiscalQuarter = "previousMonthsThisFiscalQuarter";
	/**
	 * @var string
	 */
	const previousMonthsThisFiscalYear = "previousMonthsThisFiscalYear";
	/**
	 * @var string
	 */
	const previousOneDay = "previousOneDay";
	/**
	 * @var string
	 */
	const previousOneHalf = "previousOneHalf";
	/**
	 * @var string
	 */
	const previousOneMonth = "previousOneMonth";
	/**
	 * @var string
	 */
	const previousOneQuarter = "previousOneQuarter";
	/**
	 * @var string
	 */
	const previousOneWeek = "previousOneWeek";
	/**
	 * @var string
	 */
	const previousOneYear = "previousOneYear";
	/**
	 * @var string
	 */
	const previousRollingHalf = "previousRollingHalf";
	/**
	 * @var string
	 */
	const previousRollingQuarter = "previousRollingQuarter";
	/**
	 * @var string
	 */
	const previousRollingYear = "previousRollingYear";
	/**
	 * @var string
	 */
	const sameDayFiscalQuarterBeforeLast = "sameDayFiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const sameDayFiscalYearBeforeLast = "sameDayFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameDayLastFiscalQuarter = "sameDayLastFiscalQuarter";
	/**
	 * @var string
	 */
	const sameDayLastFiscalYear = "sameDayLastFiscalYear";
	/**
	 * @var string
	 */
	const sameDayLastMonth = "sameDayLastMonth";
	/**
	 * @var string
	 */
	const sameDayLastWeek = "sameDayLastWeek";
	/**
	 * @var string
	 */
	const sameDayMonthBeforeLast = "sameDayMonthBeforeLast";
	/**
	 * @var string
	 */
	const sameDayWeekBeforeLast = "sameDayWeekBeforeLast";
	/**
	 * @var string
	 */
	const sameFiscalHalfLastFiscalYear = "sameFiscalHalfLastFiscalYear";
	/**
	 * @var string
	 */
	const sameFiscalHalfLastFiscalYearToDate = "sameFiscalHalfLastFiscalYearToDate";
	/**
	 * @var string
	 */
	const sameFiscalQuarterFiscalYearBeforeLast = "sameFiscalQuarterFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameFiscalQuarterLastFiscalYear = "sameFiscalQuarterLastFiscalYear";
	/**
	 * @var string
	 */
	const sameFiscalQuarterLastFiscalYearToDate = "sameFiscalQuarterLastFiscalYearToDate";
	/**
	 * @var string
	 */
	const sameMonthFiscalQuarterBeforeLast = "sameMonthFiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const sameMonthFiscalYearBeforeLast = "sameMonthFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalQuarter = "sameMonthLastFiscalQuarter";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalQuarterToDate = "sameMonthLastFiscalQuarterToDate";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalYear = "sameMonthLastFiscalYear";
	/**
	 * @var string
	 */
	const sameMonthLastFiscalYearToDate = "sameMonthLastFiscalYearToDate";
	/**
	 * @var string
	 */
	const sameWeekFiscalYearBeforeLast = "sameWeekFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const sameWeekLastFiscalYear = "sameWeekLastFiscalYear";
	/**
	 * @var string
	 */
	const sixtyDaysAgo = "sixtyDaysAgo";
	/**
	 * @var string
	 */
	const sixtyDaysFromNow = "sixtyDaysFromNow";
	/**
	 * @var string
	 */
	const startOfFiscalHalfBeforeLast = "startOfFiscalHalfBeforeLast";
	/**
	 * @var string
	 */
	const startOfFiscalQuarterBeforeLast = "startOfFiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const startOfFiscalYearBeforeLast = "startOfFiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const startOfLastBusinessWeek = "startOfLastBusinessWeek";
	/**
	 * @var string
	 */
	const startOfLastFiscalHalf = "startOfLastFiscalHalf";
	/**
	 * @var string
	 */
	const startOfLastFiscalHalfOneFiscalYearAgo = "startOfLastFiscalHalfOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const startOfLastFiscalQuarter = "startOfLastFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfLastFiscalQuarterOneFiscalYearAgo = "startOfLastFiscalQuarterOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const startOfLastFiscalYear = "startOfLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfLastMonth = "startOfLastMonth";
	/**
	 * @var string
	 */
	const startOfLastMonthOneFiscalQuarterAgo = "startOfLastMonthOneFiscalQuarterAgo";
	/**
	 * @var string
	 */
	const startOfLastMonthOneFiscalYearAgo = "startOfLastMonthOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const startOfLastRollingHalf = "startOfLastRollingHalf";
	/**
	 * @var string
	 */
	const startOfLastRollingQuarter = "startOfLastRollingQuarter";
	/**
	 * @var string
	 */
	const startOfLastRollingYear = "startOfLastRollingYear";
	/**
	 * @var string
	 */
	const startOfLastWeek = "startOfLastWeek";
	/**
	 * @var string
	 */
	const startOfMonthBeforeLast = "startOfMonthBeforeLast";
	/**
	 * @var string
	 */
	const startOfNextBusinessWeek = "startOfNextBusinessWeek";
	/**
	 * @var string
	 */
	const startOfNextFiscalHalf = "startOfNextFiscalHalf";
	/**
	 * @var string
	 */
	const startOfNextFiscalQuarter = "startOfNextFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfNextFiscalYear = "startOfNextFiscalYear";
	/**
	 * @var string
	 */
	const startOfNextMonth = "startOfNextMonth";
	/**
	 * @var string
	 */
	const startOfNextWeek = "startOfNextWeek";
	/**
	 * @var string
	 */
	const startOfPreviousRollingHalf = "startOfPreviousRollingHalf";
	/**
	 * @var string
	 */
	const startOfPreviousRollingQuarter = "startOfPreviousRollingQuarter";
	/**
	 * @var string
	 */
	const startOfPreviousRollingYear = "startOfPreviousRollingYear";
	/**
	 * @var string
	 */
	const startOfSameFiscalHalfLastFiscalYear = "startOfSameFiscalHalfLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfSameFiscalQuarterLastFiscalYear = "startOfSameFiscalQuarterLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfSameMonthLastFiscalQuarter = "startOfSameMonthLastFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfSameMonthLastFiscalYear = "startOfSameMonthLastFiscalYear";
	/**
	 * @var string
	 */
	const startOfThisBusinessWeek = "startOfThisBusinessWeek";
	/**
	 * @var string
	 */
	const startOfThisFiscalHalf = "startOfThisFiscalHalf";
	/**
	 * @var string
	 */
	const startOfThisFiscalQuarter = "startOfThisFiscalQuarter";
	/**
	 * @var string
	 */
	const startOfThisFiscalYear = "startOfThisFiscalYear";
	/**
	 * @var string
	 */
	const startOfThisMonth = "startOfThisMonth";
	/**
	 * @var string
	 */
	const startOfThisWeek = "startOfThisWeek";
	/**
	 * @var string
	 */
	const startOfThisYear = "startOfThisYear";
	/**
	 * @var string
	 */
	const startOfWeekBeforeLast = "startOfWeekBeforeLast";
	/**
	 * @var string
	 */
	const tenDaysAgo = "tenDaysAgo";
	/**
	 * @var string
	 */
	const tenDaysFromNow = "tenDaysFromNow";
	/**
	 * @var string
	 */
	const thirtyDaysAgo = "thirtyDaysAgo";
	/**
	 * @var string
	 */
	const thirtyDaysFromNow = "thirtyDaysFromNow";
	/**
	 * @var string
	 */
	const thisBusinessWeek = "thisBusinessWeek";
	/**
	 * @var string
	 */
	const thisFiscalHalf = "thisFiscalHalf";
	/**
	 * @var string
	 */
	const thisFiscalHalfToDate = "thisFiscalHalfToDate";
	/**
	 * @var string
	 */
	const thisFiscalQuarter = "thisFiscalQuarter";
	/**
	 * @var string
	 */
	const thisFiscalQuarterToDate = "thisFiscalQuarterToDate";
	/**
	 * @var string
	 */
	const thisFiscalYear = "thisFiscalYear";
	/**
	 * @var string
	 */
	const thisFiscalYearToDate = "thisFiscalYearToDate";
	/**
	 * @var string
	 */
	const thisMonth = "thisMonth";
	/**
	 * @var string
	 */
	const thisMonthToDate = "thisMonthToDate";
	/**
	 * @var string
	 */
	const thisRollingHalf = "thisRollingHalf";
	/**
	 * @var string
	 */
	const thisRollingQuarter = "thisRollingQuarter";
	/**
	 * @var string
	 */
	const thisRollingYear = "thisRollingYear";
	/**
	 * @var string
	 */
	const thisWeek = "thisWeek";
	/**
	 * @var string
	 */
	const thisWeekToDate = "thisWeekToDate";
	/**
	 * @var string
	 */
	const thisYear = "thisYear";
	/**
	 * @var string
	 */
	const threeDaysAgo = "threeDaysAgo";
	/**
	 * @var string
	 */
	const threeDaysFromNow = "threeDaysFromNow";
	/**
	 * @var string
	 */
	const threeFiscalQuartersAgo = "threeFiscalQuartersAgo";
	/**
	 * @var string
	 */
	const threeFiscalQuartersAgoToDate = "threeFiscalQuartersAgoToDate";
	/**
	 * @var string
	 */
	const threeFiscalYearsAgo = "threeFiscalYearsAgo";
	/**
	 * @var string
	 */
	const threeFiscalYearsAgoToDate = "threeFiscalYearsAgoToDate";
	/**
	 * @var string
	 */
	const threeMonthsAgo = "threeMonthsAgo";
	/**
	 * @var string
	 */
	const threeMonthsAgoToDate = "threeMonthsAgoToDate";
	/**
	 * @var string
	 */
	const today = "today";
	/**
	 * @var string
	 */
	const tomorrow = "tomorrow";
	/**
	 * @var string
	 */
	const twoDaysAgo = "twoDaysAgo";
	/**
	 * @var string
	 */
	const twoDaysFromNow = "twoDaysFromNow";
	/**
	 * @var string
	 */
	const weekAfterNext = "weekAfterNext";
	/**
	 * @var string
	 */
	const weekAfterNextToDate = "weekAfterNextToDate";
	/**
	 * @var string
	 */
	const weekBeforeLast = "weekBeforeLast";
	/**
	 * @var string
	 */
	const weekBeforeLastToDate = "weekBeforeLastToDate";
	/**
	 * @var string
	 */
	const yesterday = "yesterday";
}}

if (!class_exists("DurationUnit")) {
/**
 * DurationUnit
 */
class DurationUnit {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const hour = "hour";
}}

if (!class_exists("CalendarEventAttendeeResponse")) {
/**
 * CalendarEventAttendeeResponse
 */
class CalendarEventAttendeeResponse {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _accepted = "_accepted";
	/**
	 * @var string
	 */
	const _declined = "_declined";
	/**
	 * @var string
	 */
	const _noResponse = "_noResponse";
	/**
	 * @var string
	 */
	const _tentative = "_tentative";
}}

if (!class_exists("GetSelectValueFilterOperator")) {
/**
 * GetSelectValueFilterOperator
 */
class GetSelectValueFilterOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const contains = "contains";
	/**
	 * @var string
	 */
	const is = "is";
	/**
	 * @var string
	 */
	const startsWith = "startsWith";
}}

if (!class_exists("SignatureAlgorithm")) {
/**
 * SignatureAlgorithm
 */
class SignatureAlgorithm {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const HMAC_SHA256 = "HMAC_SHA256";
	/**
	 * @var string
	 */
	const HMAC_SHA1 = "HMAC_SHA1";
}}

if (!class_exists("StatusDetailType")) {
/**
 * StatusDetailType
 */
class StatusDetailType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const ERROR = "ERROR";
	/**
	 * @var string
	 */
	const WARN = "WARN";
	/**
	 * @var string
	 */
	const INFO = "INFO";
}}

if (!class_exists("StatusDetailCodeType")) {
/**
 * StatusDetailCodeType
 */
class StatusDetailCodeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const ABORT_SEARCH_EXCEEDED_MAX_TIME = "ABORT_SEARCH_EXCEEDED_MAX_TIME";
	/**
	 * @var string
	 */
	const ABORT_UPLOAD_VIRUS_DETECTED = "ABORT_UPLOAD_VIRUS_DETECTED";
	/**
	 * @var string
	 */
	const ACCESS_DENIED = "ACCESS_DENIED";
	/**
	 * @var string
	 */
	const ACCTNG_PRD_REQD = "ACCTNG_PRD_REQD";
	/**
	 * @var string
	 */
	const ACCT_DISABLED = "ACCT_DISABLED";
	/**
	 * @var string
	 */
	const ACCT_MERGE_DUP = "ACCT_MERGE_DUP";
	/**
	 * @var string
	 */
	const ACCT_NAME_REQD = "ACCT_NAME_REQD";
	/**
	 * @var string
	 */
	const ACCT_NEEDS_CAMPAIGN_PROVISION = "ACCT_NEEDS_CAMPAIGN_PROVISION";
	/**
	 * @var string
	 */
	const ACCT_NOT_CREATED = "ACCT_NOT_CREATED";
	/**
	 * @var string
	 */
	const ACCT_NUMS_REQD_OR_DONT_MATCH = "ACCT_NUMS_REQD_OR_DONT_MATCH";
	/**
	 * @var string
	 */
	const ACCT_NUM_REQD = "ACCT_NUM_REQD";
	/**
	 * @var string
	 */
	const ACCT_PERIOD_SETUP_REQD = "ACCT_PERIOD_SETUP_REQD";
	/**
	 * @var string
	 */
	const ACCT_PRDS_BEING_ADDED = "ACCT_PRDS_BEING_ADDED";
	/**
	 * @var string
	 */
	const ACCT_REQD = "ACCT_REQD";
	/**
	 * @var string
	 */
	const ACCT_TEMP_DISABLED = "ACCT_TEMP_DISABLED";
	/**
	 * @var string
	 */
	const ACCT_TEMP_UNAVAILABLE = "ACCT_TEMP_UNAVAILABLE";
	/**
	 * @var string
	 */
	const ACH_NOT_AVAILBL = "ACH_NOT_AVAILBL";
	/**
	 * @var string
	 */
	const ACH_SETUP_REQD = "ACH_SETUP_REQD";
	/**
	 * @var string
	 */
	const ACTIVE_AP_ACCT_REQD = "ACTIVE_AP_ACCT_REQD";
	/**
	 * @var string
	 */
	const ACTIVE_ROLE_REQD = "ACTIVE_ROLE_REQD";
	/**
	 * @var string
	 */
	const ACTIVE_TRANS_EXIST = "ACTIVE_TRANS_EXIST";
	/**
	 * @var string
	 */
	const ADDITIONAL_AUTHENTICATION_REQUIRED_2FA = "ADDITIONAL_AUTHENTICATION_REQUIRED_2FA";
	/**
	 * @var string
	 */
	const ADDITIONAL_AUTHENTICATION_REQUIRED_SQ = "ADDITIONAL_AUTHENTICATION_REQUIRED_SQ";
	/**
	 * @var string
	 */
	const ADDRESS_LINE_1_REQD = "ADDRESS_LINE_1_REQD";
	/**
	 * @var string
	 */
	const ADMIN_ACCESS_REQ = "ADMIN_ACCESS_REQ";
	/**
	 * @var string
	 */
	const ADMIN_ACCESS_REQD = "ADMIN_ACCESS_REQD";
	/**
	 * @var string
	 */
	const ADMIN_ONLY_ACCESS = "ADMIN_ONLY_ACCESS";
	/**
	 * @var string
	 */
	const ADMIN_USER_REQD = "ADMIN_USER_REQD";
	/**
	 * @var string
	 */
	const ADMISSIBILITY_PACKG_TYP_REQD = "ADMISSIBILITY_PACKG_TYP_REQD";
	/**
	 * @var string
	 */
	const ALL_DATA_DELETE_REQD = "ALL_DATA_DELETE_REQD";
	/**
	 * @var string
	 */
	const ALL_MTRX_SUBITMES_OPTNS_REQD = "ALL_MTRX_SUBITMES_OPTNS_REQD";
	/**
	 * @var string
	 */
	const ALREADY_IN_INVT = "ALREADY_IN_INVT";
	/**
	 * @var string
	 */
	const AMORTZN_INVALID_DATE_RANGE = "AMORTZN_INVALID_DATE_RANGE";
	/**
	 * @var string
	 */
	const AMORTZN_TMPLT_DATA_MISSING = "AMORTZN_TMPLT_DATA_MISSING";
	/**
	 * @var string
	 */
	const AMT_DISALLWD = "AMT_DISALLWD";
	/**
	 * @var string
	 */
	const AMT_EXCEEDS_APPROVAL_LIMIT = "AMT_EXCEEDS_APPROVAL_LIMIT";
	/**
	 * @var string
	 */
	const ANSWER_REQD = "ANSWER_REQD";
	/**
	 * @var string
	 */
	const APPROVAL_PERMS_REQD = "APPROVAL_PERMS_REQD";
	/**
	 * @var string
	 */
	const AREA_CODE_REQD = "AREA_CODE_REQD";
	/**
	 * @var string
	 */
	const ASSIGNEE_REQD = "ASSIGNEE_REQD";
	/**
	 * @var string
	 */
	const ATTACHMNT_CONTAINS_VIRUS = "ATTACHMNT_CONTAINS_VIRUS";
	/**
	 * @var string
	 */
	const ATTACH_SIZE_EXCEEDED = "ATTACH_SIZE_EXCEEDED";
	/**
	 * @var string
	 */
	const AT_LEAST_ONE_FILE_REQD = "AT_LEAST_ONE_FILE_REQD";
	/**
	 * @var string
	 */
	const AT_LEAST_ONE_PACKAGE_REQD = "AT_LEAST_ONE_PACKAGE_REQD";
	/**
	 * @var string
	 */
	const AT_LEAST_ONE_RETURN_FLD_REQD = "AT_LEAST_ONE_RETURN_FLD_REQD";
	/**
	 * @var string
	 */
	const AT_LEAST_ONE_SUB_REQD = "AT_LEAST_ONE_SUB_REQD";
	/**
	 * @var string
	 */
	const AUDIT_W2_1099 = "AUDIT_W2_1099";
	/**
	 * @var string
	 */
	const AUTO_NUM_UPDATE_DISALLWD = "AUTO_NUM_UPDATE_DISALLWD";
	/**
	 * @var string
	 */
	const AVS_ERROR = "AVS_ERROR";
	/**
	 * @var string
	 */
	const BALANCE_EXCEEDS_CREDIT_LIMIT = "BALANCE_EXCEEDS_CREDIT_LIMIT";
	/**
	 * @var string
	 */
	const BANK_ACCT_REQD = "BANK_ACCT_REQD";
	/**
	 * @var string
	 */
	const BASE_CRNCY_REQD = "BASE_CRNCY_REQD";
	/**
	 * @var string
	 */
	const BILLABLES_DISALLWD = "BILLABLES_DISALLWD";
	/**
	 * @var string
	 */
	const BILLING_ISSUES = "BILLING_ISSUES";
	/**
	 * @var string
	 */
	const BILLING_SCHDUL_INVALID_RECURR = "BILLING_SCHDUL_INVALID_RECURR";
	/**
	 * @var string
	 */
	const BILLPAY_APPROVAL_UNAVAILBL = "BILLPAY_APPROVAL_UNAVAILBL";
	/**
	 * @var string
	 */
	const BILLPAY_REGSTRTN_REQD = "BILLPAY_REGSTRTN_REQD";
	/**
	 * @var string
	 */
	const BILLPAY_SRVC_UNAVAILBL = "BILLPAY_SRVC_UNAVAILBL";
	/**
	 * @var string
	 */
	const BILL_PAY_STATUS_UNAVAILABLE = "BILL_PAY_STATUS_UNAVAILABLE";
	/**
	 * @var string
	 */
	const BILL_PMTS_MADE_FROM_ACCT_ONLY = "BILL_PMTS_MADE_FROM_ACCT_ONLY";
	/**
	 * @var string
	 */
	const BIN_DSNT_CONTAIN_ENOUGH_ITEM = "BIN_DSNT_CONTAIN_ENOUGH_ITEM";
	/**
	 * @var string
	 */
	const BIN_ITEM_UNAVAILBL = "BIN_ITEM_UNAVAILBL";
	/**
	 * @var string
	 */
	const BIN_SETUP_REQD = "BIN_SETUP_REQD";
	/**
	 * @var string
	 */
	const BIN_UNDEFND = "BIN_UNDEFND";
	/**
	 * @var string
	 */
	const BUNDLE_IS_DEPRECATED = "BUNDLE_IS_DEPRECATED";
	/**
	 * @var string
	 */
	const CALENDAR_PREFS_REQD = "CALENDAR_PREFS_REQD";
	/**
	 * @var string
	 */
	const CAMPAGIN_ALREADY_EXECUTED = "CAMPAGIN_ALREADY_EXECUTED";
	/**
	 * @var string
	 */
	const CAMPAIGN_IN_USE = "CAMPAIGN_IN_USE";
	/**
	 * @var string
	 */
	const CAMPAIGN_SET_UP_REQD = "CAMPAIGN_SET_UP_REQD";
	/**
	 * @var string
	 */
	const CANNOT_RESET_PASSWORD = "CANNOT_RESET_PASSWORD";
	/**
	 * @var string
	 */
	const CANT_APPLY_PMT = "CANT_APPLY_PMT";
	/**
	 * @var string
	 */
	const CANT_AUTO_CREATE_ADJSTMNT = "CANT_AUTO_CREATE_ADJSTMNT";
	/**
	 * @var string
	 */
	const CANT_CALC_FEDEX_RATES = "CANT_CALC_FEDEX_RATES";
	/**
	 * @var string
	 */
	const CANT_CANCEL_APPRVD_RETRN_AUTH = "CANT_CANCEL_APPRVD_RETRN_AUTH";
	/**
	 * @var string
	 */
	const CANT_CANCEL_BILL_PMT = "CANT_CANCEL_BILL_PMT";
	/**
	 * @var string
	 */
	const CANT_CHANGE_COMMSSN = "CANT_CHANGE_COMMSSN";
	/**
	 * @var string
	 */
	const CANT_CHANGE_CONTACT_RESTRICTN = "CANT_CHANGE_CONTACT_RESTRICTN";
	/**
	 * @var string
	 */
	const CANT_CHANGE_CRMRECORDTYPELINKS = "CANT_CHANGE_CRMRECORDTYPELINKS";
	/**
	 * @var string
	 */
	const CANT_CHANGE_EVENT_PRIMARY_TYP = "CANT_CHANGE_EVENT_PRIMARY_TYP";
	/**
	 * @var string
	 */
	const CANT_CHANGE_IP_ADDRESS = "CANT_CHANGE_IP_ADDRESS";
	/**
	 * @var string
	 */
	const CANT_CHANGE_LEAD_SOURCE_CAT = "CANT_CHANGE_LEAD_SOURCE_CAT";
	/**
	 * @var string
	 */
	const CANT_CHANGE_PSWD = "CANT_CHANGE_PSWD";
	/**
	 * @var string
	 */
	const CANT_CHANGE_REV_REC_TMPLT = "CANT_CHANGE_REV_REC_TMPLT";
	/**
	 * @var string
	 */
	const CANT_CHANGE_SUB = "CANT_CHANGE_SUB";
	/**
	 * @var string
	 */
	const CANT_CHANGE_TASK_LINK = "CANT_CHANGE_TASK_LINK";
	/**
	 * @var string
	 */
	const CANT_CHANGE_UNITS_TYP = "CANT_CHANGE_UNITS_TYP";
	/**
	 * @var string
	 */
	const CANT_CHANGE_VSOE_ALLOCTN = "CANT_CHANGE_VSOE_ALLOCTN";
	/**
	 * @var string
	 */
	const CANT_CHG_POSTED_BILL_VRNC = "CANT_CHG_POSTED_BILL_VRNC";
	/**
	 * @var string
	 */
	const CANT_COMPLETE_FULFILL = "CANT_COMPLETE_FULFILL";
	/**
	 * @var string
	 */
	const CANT_CONNECT_TO_STORE = "CANT_CONNECT_TO_STORE";
	/**
	 * @var string
	 */
	const CANT_CONVERT_CLASS_DEPT = "CANT_CONVERT_CLASS_DEPT";
	/**
	 * @var string
	 */
	const CANT_CONVERT_CLASS_LOC = "CANT_CONVERT_CLASS_LOC";
	/**
	 * @var string
	 */
	const CANT_CONVERT_INVT_ITEM = "CANT_CONVERT_INVT_ITEM";
	/**
	 * @var string
	 */
	const CANT_CREATE_FILES = "CANT_CREATE_FILES";
	/**
	 * @var string
	 */
	const CANT_CREATE_NON_UNIQUE_RCRD = "CANT_CREATE_NON_UNIQUE_RCRD";
	/**
	 * @var string
	 */
	const CANT_CREATE_PO = "CANT_CREATE_PO";
	/**
	 * @var string
	 */
	const CANT_CREATE_SHIP_LABEL = "CANT_CREATE_SHIP_LABEL";
	/**
	 * @var string
	 */
	const CANT_CREATE_WORK_ORD = "CANT_CREATE_WORK_ORD";
	/**
	 * @var string
	 */
	const CANT_CREAT_SHIP_LABEL = "CANT_CREAT_SHIP_LABEL";
	/**
	 * @var string
	 */
	const CANT_DELETE_ACCT = "CANT_DELETE_ACCT";
	/**
	 * @var string
	 */
	const CANT_DELETE_ACCT_PRD = "CANT_DELETE_ACCT_PRD";
	/**
	 * @var string
	 */
	const CANT_DELETE_ALLOCTN = "CANT_DELETE_ALLOCTN";
	/**
	 * @var string
	 */
	const CANT_DELETE_BIN = "CANT_DELETE_BIN";
	/**
	 * @var string
	 */
	const CANT_DELETE_CATEGORY = "CANT_DELETE_CATEGORY";
	/**
	 * @var string
	 */
	const CANT_DELETE_CC_PROCESSOR = "CANT_DELETE_CC_PROCESSOR";
	/**
	 * @var string
	 */
	const CANT_DELETE_CELL = "CANT_DELETE_CELL";
	/**
	 * @var string
	 */
	const CANT_DELETE_CHILD_RCRDS_EXIST = "CANT_DELETE_CHILD_RCRDS_EXIST";
	/**
	 * @var string
	 */
	const CANT_DELETE_CHILD_RCRD_FOUND = "CANT_DELETE_CHILD_RCRD_FOUND";
	/**
	 * @var string
	 */
	const CANT_DELETE_CLASS = "CANT_DELETE_CLASS";
	/**
	 * @var string
	 */
	const CANT_DELETE_COLOR_THEME = "CANT_DELETE_COLOR_THEME";
	/**
	 * @var string
	 */
	const CANT_DELETE_COMMSSN_SCHDUL = "CANT_DELETE_COMMSSN_SCHDUL";
	/**
	 * @var string
	 */
	const CANT_DELETE_COMPANY = "CANT_DELETE_COMPANY";
	/**
	 * @var string
	 */
	const CANT_DELETE_COMPANY_TYP = "CANT_DELETE_COMPANY_TYP";
	/**
	 * @var string
	 */
	const CANT_DELETE_CONTACT_HAS_CHILD = "CANT_DELETE_CONTACT_HAS_CHILD";
	/**
	 * @var string
	 */
	const CANT_DELETE_CSTM_FIELD = "CANT_DELETE_CSTM_FIELD";
	/**
	 * @var string
	 */
	const CANT_DELETE_CSTM_FORM = "CANT_DELETE_CSTM_FORM";
	/**
	 * @var string
	 */
	const CANT_DELETE_CSTM_ITEM_FIELD = "CANT_DELETE_CSTM_ITEM_FIELD";
	/**
	 * @var string
	 */
	const CANT_DELETE_CSTM_LAYOUT = "CANT_DELETE_CSTM_LAYOUT";
	/**
	 * @var string
	 */
	const CANT_DELETE_CSTM_LIST = "CANT_DELETE_CSTM_LIST";
	/**
	 * @var string
	 */
	const CANT_DELETE_CSTM_RCRD = "CANT_DELETE_CSTM_RCRD";
	/**
	 * @var string
	 */
	const CANT_DELETE_CSTM_RCRD_ENTRY = "CANT_DELETE_CSTM_RCRD_ENTRY";
	/**
	 * @var string
	 */
	const CANT_DELETE_CUST = "CANT_DELETE_CUST";
	/**
	 * @var string
	 */
	const CANT_DELETE_CUSTOMER = "CANT_DELETE_CUSTOMER";
	/**
	 * @var string
	 */
	const CANT_DELETE_DEFAULT_FLDR = "CANT_DELETE_DEFAULT_FLDR";
	/**
	 * @var string
	 */
	const CANT_DELETE_DEFAULT_PRIORITY = "CANT_DELETE_DEFAULT_PRIORITY";
	/**
	 * @var string
	 */
	const CANT_DELETE_DEFAULT_SALES_REP = "CANT_DELETE_DEFAULT_SALES_REP";
	/**
	 * @var string
	 */
	const CANT_DELETE_DEFAULT_STATUS = "CANT_DELETE_DEFAULT_STATUS";
	/**
	 * @var string
	 */
	const CANT_DELETE_DEFAULT_VALUE = "CANT_DELETE_DEFAULT_VALUE";
	/**
	 * @var string
	 */
	const CANT_DELETE_DEFAULT_WEBSITE = "CANT_DELETE_DEFAULT_WEBSITE";
	/**
	 * @var string
	 */
	const CANT_DELETE_EMPL = "CANT_DELETE_EMPL";
	/**
	 * @var string
	 */
	const CANT_DELETE_ENTITY = "CANT_DELETE_ENTITY";
	/**
	 * @var string
	 */
	const CANT_DELETE_FIN_STATMNT_LAYOUT = "CANT_DELETE_FIN_STATMNT_LAYOUT";
	/**
	 * @var string
	 */
	const CANT_DELETE_FLDR = "CANT_DELETE_FLDR";
	/**
	 * @var string
	 */
	const CANT_DELETE_HAS_CHILD_ITEM = "CANT_DELETE_HAS_CHILD_ITEM";
	/**
	 * @var string
	 */
	const CANT_DELETE_INFO_ITEM = "CANT_DELETE_INFO_ITEM";
	/**
	 * @var string
	 */
	const CANT_DELETE_ITEM = "CANT_DELETE_ITEM";
	/**
	 * @var string
	 */
	const CANT_DELETE_ITEM_LAYOUT = "CANT_DELETE_ITEM_LAYOUT";
	/**
	 * @var string
	 */
	const CANT_DELETE_ITEM_TMPLT = "CANT_DELETE_ITEM_TMPLT";
	/**
	 * @var string
	 */
	const CANT_DELETE_JOB_RESOURCE_ROLE = "CANT_DELETE_JOB_RESOURCE_ROLE";
	/**
	 * @var string
	 */
	const CANT_DELETE_LEGACY_CATEGORY = "CANT_DELETE_LEGACY_CATEGORY";
	/**
	 * @var string
	 */
	const CANT_DELETE_LINE = "CANT_DELETE_LINE";
	/**
	 * @var string
	 */
	const CANT_DELETE_MEDIA_ITEM = "CANT_DELETE_MEDIA_ITEM";
	/**
	 * @var string
	 */
	const CANT_DELETE_MEMRZD_TRANS = "CANT_DELETE_MEMRZD_TRANS";
	/**
	 * @var string
	 */
	const CANT_DELETE_OR_CHANGE_ACCT = "CANT_DELETE_OR_CHANGE_ACCT";
	/**
	 * @var string
	 */
	const CANT_DELETE_PLAN_ASSGNMNT = "CANT_DELETE_PLAN_ASSGNMNT";
	/**
	 * @var string
	 */
	const CANT_DELETE_PRESNTN_CAT = "CANT_DELETE_PRESNTN_CAT";
	/**
	 * @var string
	 */
	const CANT_DELETE_RCRD = "CANT_DELETE_RCRD";
	/**
	 * @var string
	 */
	const CANT_DELETE_RCRDS = "CANT_DELETE_RCRDS";
	/**
	 * @var string
	 */
	const CANT_DELETE_SITE_TAG = "CANT_DELETE_SITE_TAG";
	/**
	 * @var string
	 */
	const CANT_DELETE_SITE_THEME = "CANT_DELETE_SITE_THEME";
	/**
	 * @var string
	 */
	const CANT_DELETE_SOLUTN = "CANT_DELETE_SOLUTN";
	/**
	 * @var string
	 */
	const CANT_DELETE_STATUS_TYPE = "CANT_DELETE_STATUS_TYPE";
	/**
	 * @var string
	 */
	const CANT_DELETE_SUBTAB = "CANT_DELETE_SUBTAB";
	/**
	 * @var string
	 */
	const CANT_DELETE_SYSTEM_NOTE = "CANT_DELETE_SYSTEM_NOTE";
	/**
	 * @var string
	 */
	const CANT_DELETE_TAX_VENDOR = "CANT_DELETE_TAX_VENDOR";
	/**
	 * @var string
	 */
	const CANT_DELETE_TMPLT_RCRD = "CANT_DELETE_TMPLT_RCRD";
	/**
	 * @var string
	 */
	const CANT_DELETE_TRANS = "CANT_DELETE_TRANS";
	/**
	 * @var string
	 */
	const CANT_DELETE_TRAN_LINE = "CANT_DELETE_TRAN_LINE";
	/**
	 * @var string
	 */
	const CANT_DELETE_TRAN_LINES = "CANT_DELETE_TRAN_LINES";
	/**
	 * @var string
	 */
	const CANT_DELETE_UPDATE_ACCT = "CANT_DELETE_UPDATE_ACCT";
	/**
	 * @var string
	 */
	const CANT_DELETE_VENDOR = "CANT_DELETE_VENDOR";
	/**
	 * @var string
	 */
	const CANT_DEL_DEFAULT_CALENDAR = "CANT_DEL_DEFAULT_CALENDAR";
	/**
	 * @var string
	 */
	const CANT_DEL_DEFAULT_SHIP_METHOD = "CANT_DEL_DEFAULT_SHIP_METHOD";
	/**
	 * @var string
	 */
	const CANT_DEL_REALIZED_GAINLOSS = "CANT_DEL_REALIZED_GAINLOSS";
	/**
	 * @var string
	 */
	const CANT_DEL_TRANS_RVRSL = "CANT_DEL_TRANS_RVRSL";
	/**
	 * @var string
	 */
	const CANT_DIVIDE_BY_ZERO = "CANT_DIVIDE_BY_ZERO";
	/**
	 * @var string
	 */
	const CANT_DOWNLOAD_EXPIRED_FILE = "CANT_DOWNLOAD_EXPIRED_FILE";
	/**
	 * @var string
	 */
	const CANT_EDIT_CUST_LIST = "CANT_EDIT_CUST_LIST";
	/**
	 * @var string
	 */
	const CANT_EDIT_CUST_PMT = "CANT_EDIT_CUST_PMT";
	/**
	 * @var string
	 */
	const CANT_EDIT_DPLYMNT_IN_PROGRESS = "CANT_EDIT_DPLYMNT_IN_PROGRESS";
	/**
	 * @var string
	 */
	const CANT_EDIT_FOLDER = "CANT_EDIT_FOLDER";
	/**
	 * @var string
	 */
	const CANT_EDIT_OLD_CASE = "CANT_EDIT_OLD_CASE";
	/**
	 * @var string
	 */
	const CANT_EDIT_STANDARD_OBJ = "CANT_EDIT_STANDARD_OBJ";
	/**
	 * @var string
	 */
	const CANT_EDIT_TAGATA = "CANT_EDIT_TAGATA";
	/**
	 * @var string
	 */
	const CANT_EDIT_TRAN = "CANT_EDIT_TRAN";
	/**
	 * @var string
	 */
	const CANT_ESTABLISH_LINK = "CANT_ESTABLISH_LINK";
	/**
	 * @var string
	 */
	const CANT_FIND_BUG = "CANT_FIND_BUG";
	/**
	 * @var string
	 */
	const CANT_FIND_MAIL_MERGE_ID = "CANT_FIND_MAIL_MERGE_ID";
	/**
	 * @var string
	 */
	const CANT_FIND_RCRD = "CANT_FIND_RCRD";
	/**
	 * @var string
	 */
	const CANT_FIND_SAVED_IMPORT = "CANT_FIND_SAVED_IMPORT";
	/**
	 * @var string
	 */
	const CANT_FIND_SOURCE_AMORTZN_ACCT = "CANT_FIND_SOURCE_AMORTZN_ACCT";
	/**
	 * @var string
	 */
	const CANT_FIND_UPS_REG_FOR_LOC = "CANT_FIND_UPS_REG_FOR_LOC";
	/**
	 * @var string
	 */
	const CANT_FULFILL_ITEM = "CANT_FULFILL_ITEM";
	/**
	 * @var string
	 */
	const CANT_INACTIVATE_COMMSSN_PLAN = "CANT_INACTIVATE_COMMSSN_PLAN";
	/**
	 * @var string
	 */
	const CANT_INACTIVE_DEFAULT_SYNC_CAT = "CANT_INACTIVE_DEFAULT_SYNC_CAT";
	/**
	 * @var string
	 */
	const CANT_INACTIVE_DEFAULT_TMPLT = "CANT_INACTIVE_DEFAULT_TMPLT";
	/**
	 * @var string
	 */
	const CANT_LOAD_SAVED_SEARCH_PARAM = "CANT_LOAD_SAVED_SEARCH_PARAM";
	/**
	 * @var string
	 */
	const CANT_LOGIN_WITH_OAUTH = "CANT_LOGIN_WITH_OAUTH";
	/**
	 * @var string
	 */
	const CANT_LOOKUP_FLD = "CANT_LOOKUP_FLD";
	/**
	 * @var string
	 */
	const CANT_MAKE_CONTACT_PRIVATE = "CANT_MAKE_CONTACT_PRIVATE";
	/**
	 * @var string
	 */
	const CANT_MARK_SHIPPED = "CANT_MARK_SHIPPED";
	/**
	 * @var string
	 */
	const CANT_MERGE_EMPLS = "CANT_MERGE_EMPLS";
	/**
	 * @var string
	 */
	const CANT_MODIFY_APPRVD_TIME = "CANT_MODIFY_APPRVD_TIME";
	/**
	 * @var string
	 */
	const CANT_MODIFY_FULFILL_STATUS = "CANT_MODIFY_FULFILL_STATUS";
	/**
	 * @var string
	 */
	const CANT_MODIFY_ISSUE_STATUS = "CANT_MODIFY_ISSUE_STATUS";
	/**
	 * @var string
	 */
	const CANT_MODIFY_LOCKED_FLD = "CANT_MODIFY_LOCKED_FLD";
	/**
	 * @var string
	 */
	const CANT_MODIFY_PARENT = "CANT_MODIFY_PARENT";
	/**
	 * @var string
	 */
	const CANT_MODIFY_REV_REC = "CANT_MODIFY_REV_REC";
	/**
	 * @var string
	 */
	const CANT_MODIFY_SUB = "CANT_MODIFY_SUB";
	/**
	 * @var string
	 */
	const CANT_MODIFY_TAGATA = "CANT_MODIFY_TAGATA";
	/**
	 * @var string
	 */
	const CANT_MODIFY_TEGATA = "CANT_MODIFY_TEGATA";
	/**
	 * @var string
	 */
	const CANT_MODIFY_VOID_TRANS = "CANT_MODIFY_VOID_TRANS";
	/**
	 * @var string
	 */
	const CANT_MOVE_REALIZED_GAINLOSS = "CANT_MOVE_REALIZED_GAINLOSS";
	/**
	 * @var string
	 */
	const CANT_PAY_TAGATA = "CANT_PAY_TAGATA";
	/**
	 * @var string
	 */
	const CANT_PRINT_EMPTY = "CANT_PRINT_EMPTY";
	/**
	 * @var string
	 */
	const CANT_PROCESS_IMG = "CANT_PROCESS_IMG";
	/**
	 * @var string
	 */
	const CANT_RCEIV_BEFORE_FULFILL = "CANT_RCEIV_BEFORE_FULFILL";
	/**
	 * @var string
	 */
	const CANT_RCEIV_ITEM = "CANT_RCEIV_ITEM";
	/**
	 * @var string
	 */
	const CANT_RECEIVE_TAGATA = "CANT_RECEIVE_TAGATA";
	/**
	 * @var string
	 */
	const CANT_REJECT_ORDER = "CANT_REJECT_ORDER";
	/**
	 * @var string
	 */
	const CANT_REMOVE_ACH_PAY_METHOD = "CANT_REMOVE_ACH_PAY_METHOD";
	/**
	 * @var string
	 */
	const CANT_REMOVE_APPROVAL = "CANT_REMOVE_APPROVAL";
	/**
	 * @var string
	 */
	const CANT_REMOVE_DOMAIN = "CANT_REMOVE_DOMAIN";
	/**
	 * @var string
	 */
	const CANT_REMOVE_NEXUS = "CANT_REMOVE_NEXUS";
	/**
	 * @var string
	 */
	const CANT_REMOVE_SCHDUL = "CANT_REMOVE_SCHDUL";
	/**
	 * @var string
	 */
	const CANT_REMOVE_SUB = "CANT_REMOVE_SUB";
	/**
	 * @var string
	 */
	const CANT_REMOV_ALL_FULFILMNT_LINKS = "CANT_REMOV_ALL_FULFILMNT_LINKS";
	/**
	 * @var string
	 */
	const CANT_REMOV_ITEM_SUB = "CANT_REMOV_ITEM_SUB";
	/**
	 * @var string
	 */
	const CANT_RESUBMIT_FAILED_DPLYMNT = "CANT_RESUBMIT_FAILED_DPLYMNT";
	/**
	 * @var string
	 */
	const CANT_RETURN_FLD = "CANT_RETURN_FLD";
	/**
	 * @var string
	 */
	const CANT_RETURN_USED_GIFT_CERT = "CANT_RETURN_USED_GIFT_CERT";
	/**
	 * @var string
	 */
	const CANT_REVERSE_AUTH = "CANT_REVERSE_AUTH";
	/**
	 * @var string
	 */
	const CANT_REV_REC_BODY_AND_LINE = "CANT_REV_REC_BODY_AND_LINE";
	/**
	 * @var string
	 */
	const CANT_SCHDUL_RECUR_EVENT = "CANT_SCHDUL_RECUR_EVENT";
	/**
	 * @var string
	 */
	const CANT_SEND_EMAIL = "CANT_SEND_EMAIL";
	/**
	 * @var string
	 */
	const CANT_SET_CLOSE_DATE = "CANT_SET_CLOSE_DATE";
	/**
	 * @var string
	 */
	const CANT_SET_INTERNALID = "CANT_SET_INTERNALID";
	/**
	 * @var string
	 */
	const CANT_SET_STATUS = "CANT_SET_STATUS";
	/**
	 * @var string
	 */
	const CANT_SWITCH_ROLES_FROM_LOGIN = "CANT_SWITCH_ROLES_FROM_LOGIN";
	/**
	 * @var string
	 */
	const CANT_SWITCH_SHIP_METHOD = "CANT_SWITCH_SHIP_METHOD";
	/**
	 * @var string
	 */
	const CANT_UPDATE_ACCTNG_PRDS = "CANT_UPDATE_ACCTNG_PRDS";
	/**
	 * @var string
	 */
	const CANT_UPDATE_AMT = "CANT_UPDATE_AMT";
	/**
	 * @var string
	 */
	const CANT_UPDATE_DYNAMIC_GROUP = "CANT_UPDATE_DYNAMIC_GROUP";
	/**
	 * @var string
	 */
	const CANT_UPDATE_FLDR = "CANT_UPDATE_FLDR";
	/**
	 * @var string
	 */
	const CANT_UPDATE_LINKED_TRANS_LINES = "CANT_UPDATE_LINKED_TRANS_LINES";
	/**
	 * @var string
	 */
	const CANT_UPDATE_PRODUCT_FEED = "CANT_UPDATE_PRODUCT_FEED";
	/**
	 * @var string
	 */
	const CANT_UPDATE_RECRD_HAS_CHANGED = "CANT_UPDATE_RECRD_HAS_CHANGED";
	/**
	 * @var string
	 */
	const CANT_UPDATE_RECUR_EVENT = "CANT_UPDATE_RECUR_EVENT";
	/**
	 * @var string
	 */
	const CANT_UPDATE_ROOT_CATEGORY = "CANT_UPDATE_ROOT_CATEGORY";
	/**
	 * @var string
	 */
	const CANT_UPDATE_STATUS_TYPE = "CANT_UPDATE_STATUS_TYPE";
	/**
	 * @var string
	 */
	const CANT_VERIFY_CARD = "CANT_VERIFY_CARD";
	/**
	 * @var string
	 */
	const CANT_VOID_TRANS = "CANT_VOID_TRANS";
	/**
	 * @var string
	 */
	const CARD_EXPIRED = "CARD_EXPIRED";
	/**
	 * @var string
	 */
	const CARD_ID_REQD = "CARD_ID_REQD";
	/**
	 * @var string
	 */
	const CASE_ALREADY_ASSIGNED = "CASE_ALREADY_ASSIGNED";
	/**
	 * @var string
	 */
	const CASE_DSNT_EXIST = "CASE_DSNT_EXIST";
	/**
	 * @var string
	 */
	const CASE_NOT_GROUP_MEMBER = "CASE_NOT_GROUP_MEMBER";
	/**
	 * @var string
	 */
	const CASH_SALE_EDIT_DISALLWD = "CASH_SALE_EDIT_DISALLWD";
	/**
	 * @var string
	 */
	const CC_ACCT_REQD = "CC_ACCT_REQD";
	/**
	 * @var string
	 */
	const CC_ALREADY_SAVED = "CC_ALREADY_SAVED";
	/**
	 * @var string
	 */
	const CC_EMAIL_ADDRESS_REQD = "CC_EMAIL_ADDRESS_REQD";
	/**
	 * @var string
	 */
	const CC_NUM_REQD = "CC_NUM_REQD";
	/**
	 * @var string
	 */
	const CC_PROCESSOR_ERROR = "CC_PROCESSOR_ERROR";
	/**
	 * @var string
	 */
	const CC_PROCESSOR_NOT_FOUND = "CC_PROCESSOR_NOT_FOUND";
	/**
	 * @var string
	 */
	const CC_SECURITY_CODE_REQD = "CC_SECURITY_CODE_REQD";
	/**
	 * @var string
	 */
	const CERT_AUTH_EXPD = "CERT_AUTH_EXPD";
	/**
	 * @var string
	 */
	const CERT_EXPD = "CERT_EXPD";
	/**
	 * @var string
	 */
	const CERT_UNAVAILABLE = "CERT_UNAVAILABLE";
	/**
	 * @var string
	 */
	const CHANGE_PMT_DATE_AND_REAPPROVE = "CHANGE_PMT_DATE_AND_REAPPROVE";
	/**
	 * @var string
	 */
	const CHAR_ERROR = "CHAR_ERROR";
	/**
	 * @var string
	 */
	const CHECKOUT_EMAIL_REQD = "CHECKOUT_EMAIL_REQD";
	/**
	 * @var string
	 */
	const CITY_REQD = "CITY_REQD";
	/**
	 * @var string
	 */
	const CLASS_ALREADY_EXISTS = "CLASS_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const CLASS_OR_DEPT_OR_CUST_REQD = "CLASS_OR_DEPT_OR_CUST_REQD";
	/**
	 * @var string
	 */
	const CLEAR_AUTOCALC = "CLEAR_AUTOCALC";
	/**
	 * @var string
	 */
	const CLOSED_TRAN_PRD = "CLOSED_TRAN_PRD";
	/**
	 * @var string
	 */
	const CLOSE_PREVIOUSE_PERIOD = "CLOSE_PREVIOUSE_PERIOD";
	/**
	 * @var string
	 */
	const COGS_ERROR = "COGS_ERROR";
	/**
	 * @var string
	 */
	const COMMSSN_ALREADY_CALCLTD = "COMMSSN_ALREADY_CALCLTD";
	/**
	 * @var string
	 */
	const COMMSSN_FEATURE_DISABLED = "COMMSSN_FEATURE_DISABLED";
	/**
	 * @var string
	 */
	const COMMSSN_PAYROLL_ITEM_REQD = "COMMSSN_PAYROLL_ITEM_REQD";
	/**
	 * @var string
	 */
	const COMPANION_PROP_REQD = "COMPANION_PROP_REQD";
	/**
	 * @var string
	 */
	const COMPANY_FLD_REQD = "COMPANY_FLD_REQD";
	/**
	 * @var string
	 */
	const COMP_DELETED_OR_MERGED = "COMP_DELETED_OR_MERGED";
	/**
	 * @var string
	 */
	const CONCUR_BILLPAY_JOB_DISALLWD = "CONCUR_BILLPAY_JOB_DISALLWD";
	/**
	 * @var string
	 */
	const CONCUR_BULK_JOB_DISALLWD = "CONCUR_BULK_JOB_DISALLWD";
	/**
	 * @var string
	 */
	const CONCUR_MASS_UPDATE_DISALLWD = "CONCUR_MASS_UPDATE_DISALLWD";
	/**
	 * @var string
	 */
	const CONCUR_SEARCH_DISALLWD = "CONCUR_SEARCH_DISALLWD";
	/**
	 * @var string
	 */
	const CONSLD_PRNT_AND_CHILD_DISALLWD = "CONSLD_PRNT_AND_CHILD_DISALLWD";
	/**
	 * @var string
	 */
	const CONTACT_ALREADY_EXISTS = "CONTACT_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const CONTACT_NOT_GROUP_MEMBR = "CONTACT_NOT_GROUP_MEMBR";
	/**
	 * @var string
	 */
	const COOKIES_DISABLED = "COOKIES_DISABLED";
	/**
	 * @var string
	 */
	const COUNTRY_STATE_MISMATCH = "COUNTRY_STATE_MISMATCH";
	/**
	 * @var string
	 */
	const CREATEDFROM_REQD = "CREATEDFROM_REQD";
	/**
	 * @var string
	 */
	const CREDITS_DISALLWD = "CREDITS_DISALLWD";
	/**
	 * @var string
	 */
	const CRNCY_MISMATCH_BASE_CRNCY = "CRNCY_MISMATCH_BASE_CRNCY";
	/**
	 * @var string
	 */
	const CRNCY_NOT_UPDATED = "CRNCY_NOT_UPDATED";
	/**
	 * @var string
	 */
	const CRNCY_RCRD_DELETED = "CRNCY_RCRD_DELETED";
	/**
	 * @var string
	 */
	const CRNCY_REQD = "CRNCY_REQD";
	/**
	 * @var string
	 */
	const CSC_SETUP_REQD = "CSC_SETUP_REQD";
	/**
	 * @var string
	 */
	const CSTM_FIELD_KEY_REQD = "CSTM_FIELD_KEY_REQD";
	/**
	 * @var string
	 */
	const CSTM_FIELD_VALUE_REQD = "CSTM_FIELD_VALUE_REQD";
	/**
	 * @var string
	 */
	const CUST_ARLEADY_HAS_ACCT = "CUST_ARLEADY_HAS_ACCT";
	/**
	 * @var string
	 */
	const CUST_CNTR_USER_ACCESS_ONLY = "CUST_CNTR_USER_ACCESS_ONLY";
	/**
	 * @var string
	 */
	const CUST_LEAD_NOT_GROUP_MEMBR = "CUST_LEAD_NOT_GROUP_MEMBR";
	/**
	 * @var string
	 */
	const CYBERSOURCE_ERROR = "CYBERSOURCE_ERROR";
	/**
	 * @var string
	 */
	const CYCLE_IN_PROJECT_PLAN = "CYCLE_IN_PROJECT_PLAN";
	/**
	 * @var string
	 */
	const DASHBOARD_LOCKED = "DASHBOARD_LOCKED";
	/**
	 * @var string
	 */
	const DATA_MUST_BE_UNIQUE = "DATA_MUST_BE_UNIQUE";
	/**
	 * @var string
	 */
	const DATA_REQD = "DATA_REQD";
	/**
	 * @var string
	 */
	const DATE_EXPECTED = "DATE_EXPECTED";
	/**
	 * @var string
	 */
	const DATE_PARAM_REQD = "DATE_PARAM_REQD";
	/**
	 * @var string
	 */
	const DATE_PRD_MISMATCH = "DATE_PRD_MISMATCH";
	/**
	 * @var string
	 */
	const DEFAULT_CUR_REQD = "DEFAULT_CUR_REQD";
	/**
	 * @var string
	 */
	const DEFAULT_EXPENSE_ACCT_REQD = "DEFAULT_EXPENSE_ACCT_REQD";
	/**
	 * @var string
	 */
	const DEFAULT_ISSUE_OWNER_REQD = "DEFAULT_ISSUE_OWNER_REQD";
	/**
	 * @var string
	 */
	const DEFAULT_LIAB_ACCT_REQD = "DEFAULT_LIAB_ACCT_REQD";
	/**
	 * @var string
	 */
	const DEFAULT_ROLE_REQD = "DEFAULT_ROLE_REQD";
	/**
	 * @var string
	 */
	const DEFAULT_TYPE_DELETE_DISALLWD = "DEFAULT_TYPE_DELETE_DISALLWD";
	/**
	 * @var string
	 */
	const DEFERRAL_ACCT_REQD = "DEFERRAL_ACCT_REQD";
	/**
	 * @var string
	 */
	const DEFERRED_REV_REC_ACCT_REQD = "DEFERRED_REV_REC_ACCT_REQD";
	/**
	 * @var string
	 */
	const DEPT_IN_USE = "DEPT_IN_USE";
	/**
	 * @var string
	 */
	const DFRNT_SWAP_PRICE_LEVELS_REQD = "DFRNT_SWAP_PRICE_LEVELS_REQD";
	/**
	 * @var string
	 */
	const DISALLWD_IP_ADDRESS = "DISALLWD_IP_ADDRESS";
	/**
	 * @var string
	 */
	const DISCOUNT_ACCT_SETUP_REQD = "DISCOUNT_ACCT_SETUP_REQD";
	/**
	 * @var string
	 */
	const DISCOUNT_DISALLWD = "DISCOUNT_DISALLWD";
	/**
	 * @var string
	 */
	const DISCOUNT_DISALLWD_VSOE = "DISCOUNT_DISALLWD_VSOE";
	/**
	 * @var string
	 */
	const DISCOUNT_EXCEED_TOTAL = "DISCOUNT_EXCEED_TOTAL";
	/**
	 * @var string
	 */
	const DISTRIB_REQD_ONE_DAY_BFORE = "DISTRIB_REQD_ONE_DAY_BFORE";
	/**
	 * @var string
	 */
	const DOMAIN_IN_USE = "DOMAIN_IN_USE";
	/**
	 * @var string
	 */
	const DOMAIN_WEBSITE_REQD = "DOMAIN_WEBSITE_REQD";
	/**
	 * @var string
	 */
	const DROP_SHIP_ERROR = "DROP_SHIP_ERROR";
	/**
	 * @var string
	 */
	const DROP_SHIP_OR_SPECIAL_ORD_ALLWD = "DROP_SHIP_OR_SPECIAL_ORD_ALLWD";
	/**
	 * @var string
	 */
	const DUE_DATE_BFORE_START_DATE = "DUE_DATE_BFORE_START_DATE";
	/**
	 * @var string
	 */
	const DUE_DATE_REQD = "DUE_DATE_REQD";
	/**
	 * @var string
	 */
	const DUPLICATE_INVENTORY_NUM = "DUPLICATE_INVENTORY_NUM";
	/**
	 * @var string
	 */
	const DUPLICATE_KEYS = "DUPLICATE_KEYS";
	/**
	 * @var string
	 */
	const DUPLICATE_NAME_FOR_PRD = "DUPLICATE_NAME_FOR_PRD";
	/**
	 * @var string
	 */
	const DUPLICATE_NAME_FOR_ROLE = "DUPLICATE_NAME_FOR_ROLE";
	/**
	 * @var string
	 */
	const DUP_ACCT_NAME = "DUP_ACCT_NAME";
	/**
	 * @var string
	 */
	const DUP_ACCT_NOT_ALLWD = "DUP_ACCT_NOT_ALLWD";
	/**
	 * @var string
	 */
	const DUP_ACCT_NUM = "DUP_ACCT_NUM";
	/**
	 * @var string
	 */
	const DUP_ACCT_ON_TRANS = "DUP_ACCT_ON_TRANS";
	/**
	 * @var string
	 */
	const DUP_BIN = "DUP_BIN";
	/**
	 * @var string
	 */
	const DUP_BUNDLE_IN_ACCT = "DUP_BUNDLE_IN_ACCT";
	/**
	 * @var string
	 */
	const DUP_CATEGORY = "DUP_CATEGORY";
	/**
	 * @var string
	 */
	const DUP_CATEGORY_NAME = "DUP_CATEGORY_NAME";
	/**
	 * @var string
	 */
	const DUP_COLOR_THEME = "DUP_COLOR_THEME";
	/**
	 * @var string
	 */
	const DUP_CSTM_FIELD = "DUP_CSTM_FIELD";
	/**
	 * @var string
	 */
	const DUP_CSTM_LAYOUT = "DUP_CSTM_LAYOUT";
	/**
	 * @var string
	 */
	const DUP_CSTM_LIST = "DUP_CSTM_LIST";
	/**
	 * @var string
	 */
	const DUP_CSTM_RCRD = "DUP_CSTM_RCRD";
	/**
	 * @var string
	 */
	const DUP_CSTM_RCRD_ENTRY = "DUP_CSTM_RCRD_ENTRY";
	/**
	 * @var string
	 */
	const DUP_CSTM_TAB = "DUP_CSTM_TAB";
	/**
	 * @var string
	 */
	const DUP_EMPL_EMAIL = "DUP_EMPL_EMAIL";
	/**
	 * @var string
	 */
	const DUP_EMPL_ENTITY_NAME = "DUP_EMPL_ENTITY_NAME";
	/**
	 * @var string
	 */
	const DUP_EMPL_TMPLT = "DUP_EMPL_TMPLT";
	/**
	 * @var string
	 */
	const DUP_ENTITY = "DUP_ENTITY";
	/**
	 * @var string
	 */
	const DUP_ENTITY_EMAIL = "DUP_ENTITY_EMAIL";
	/**
	 * @var string
	 */
	const DUP_ENTITY_NAME = "DUP_ENTITY_NAME";
	/**
	 * @var string
	 */
	const DUP_FEDEX_ACCT_NUM = "DUP_FEDEX_ACCT_NUM";
	/**
	 * @var string
	 */
	const DUP_FINANCL_STATMNT_LAYOUT = "DUP_FINANCL_STATMNT_LAYOUT";
	/**
	 * @var string
	 */
	const DUP_INFO_ITEM = "DUP_INFO_ITEM";
	/**
	 * @var string
	 */
	const DUP_ISSUE_NAME_OR_NUM = "DUP_ISSUE_NAME_OR_NUM";
	/**
	 * @var string
	 */
	const DUP_ITEM = "DUP_ITEM";
	/**
	 * @var string
	 */
	const DUP_ITEM_LAYOUT = "DUP_ITEM_LAYOUT";
	/**
	 * @var string
	 */
	const DUP_ITEM_NAME = "DUP_ITEM_NAME";
	/**
	 * @var string
	 */
	const DUP_ITEM_OPTION = "DUP_ITEM_OPTION";
	/**
	 * @var string
	 */
	const DUP_ITEM_TMPLT = "DUP_ITEM_TMPLT";
	/**
	 * @var string
	 */
	const DUP_MATRIX_OPTN_ABBRV = "DUP_MATRIX_OPTN_ABBRV";
	/**
	 * @var string
	 */
	const DUP_MEMRZD_TRANS = "DUP_MEMRZD_TRANS";
	/**
	 * @var string
	 */
	const DUP_NAME = "DUP_NAME";
	/**
	 * @var string
	 */
	const DUP_PAYROLL_ITEM = "DUP_PAYROLL_ITEM";
	/**
	 * @var string
	 */
	const DUP_PRESNTN_CAT = "DUP_PRESNTN_CAT";
	/**
	 * @var string
	 */
	const DUP_RCRD = "DUP_RCRD";
	/**
	 * @var string
	 */
	const DUP_RCRD_LINK = "DUP_RCRD_LINK";
	/**
	 * @var string
	 */
	const DUP_SALES_TAX_ITEM = "DUP_SALES_TAX_ITEM";
	/**
	 * @var string
	 */
	const DUP_SHIPPING_ITEM = "DUP_SHIPPING_ITEM";
	/**
	 * @var string
	 */
	const DUP_SHORT_NAME = "DUP_SHORT_NAME";
	/**
	 * @var string
	 */
	const DUP_SITE_THEME = "DUP_SITE_THEME";
	/**
	 * @var string
	 */
	const DUP_SOURCE_ACCT = "DUP_SOURCE_ACCT";
	/**
	 * @var string
	 */
	const DUP_TAX_CODE = "DUP_TAX_CODE";
	/**
	 * @var string
	 */
	const DUP_TRACKING_NUM = "DUP_TRACKING_NUM";
	/**
	 * @var string
	 */
	const DUP_TRANS = "DUP_TRANS";
	/**
	 * @var string
	 */
	const DUP_UPS_ACCT_NUM = "DUP_UPS_ACCT_NUM";
	/**
	 * @var string
	 */
	const DUP_VENDOR_EMAIL = "DUP_VENDOR_EMAIL";
	/**
	 * @var string
	 */
	const DUP_VENDOR_NAME = "DUP_VENDOR_NAME";
	/**
	 * @var string
	 */
	const EARNING_ITEM_REQD = "EARNING_ITEM_REQD";
	/**
	 * @var string
	 */
	const EBAY_FEE_ERROR = "EBAY_FEE_ERROR";
	/**
	 * @var string
	 */
	const EBAY_TMPLT_ERROR = "EBAY_TMPLT_ERROR";
	/**
	 * @var string
	 */
	const EDITION_DSNT_SUPRT_WORLDPAY = "EDITION_DSNT_SUPRT_WORLDPAY";
	/**
	 * @var string
	 */
	const EIN_OR_TIN_REQD = "EIN_OR_TIN_REQD";
	/**
	 * @var string
	 */
	const EMAIL_ADDRS_REQD = "EMAIL_ADDRS_REQD";
	/**
	 * @var string
	 */
	const EMAIL_ADDRS_REQD_TO_NOTIFY = "EMAIL_ADDRS_REQD_TO_NOTIFY";
	/**
	 * @var string
	 */
	const EMAIL_REQD = "EMAIL_REQD";
	/**
	 * @var string
	 */
	const EMAIL_REQD_ACCT_PROVISION = "EMAIL_REQD_ACCT_PROVISION";
	/**
	 * @var string
	 */
	const EMAIL_REQ_HANDLER_ERROR = "EMAIL_REQ_HANDLER_ERROR";
	/**
	 * @var string
	 */
	const EMPL_IN_USE = "EMPL_IN_USE";
	/**
	 * @var string
	 */
	const ERROR_DELETE_CARD_DATA = "ERROR_DELETE_CARD_DATA";
	/**
	 * @var string
	 */
	const ERROR_IN_TERRITORY_ASSGNMNT = "ERROR_IN_TERRITORY_ASSGNMNT";
	/**
	 * @var string
	 */
	const ERROR_PRCSSNG_TRANS = "ERROR_PRCSSNG_TRANS";
	/**
	 * @var string
	 */
	const ERROR_REFUND_TRANS = "ERROR_REFUND_TRANS";
	/**
	 * @var string
	 */
	const ERROR_REVERSE_AUTH = "ERROR_REVERSE_AUTH";
	/**
	 * @var string
	 */
	const ERROR_SENDING_TRAN_EMAIL = "ERROR_SENDING_TRAN_EMAIL";
	/**
	 * @var string
	 */
	const ERROR_VOID_TRANS = "ERROR_VOID_TRANS";
	/**
	 * @var string
	 */
	const EVENT_ID_NOT_FOUND = "EVENT_ID_NOT_FOUND";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_ALLWD_LOC = "EXCEEDED_MAX_ALLWD_LOC";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_CONCUR_RQST = "EXCEEDED_MAX_CONCUR_RQST";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_EMAILS = "EXCEEDED_MAX_EMAILS";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_FEATURED_ITEMS = "EXCEEDED_MAX_FEATURED_ITEMS";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_FIELD_LENGTH = "EXCEEDED_MAX_FIELD_LENGTH";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_MATRIX_OPTNS = "EXCEEDED_MAX_MATRIX_OPTNS";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_PDF_ELEMENTS = "EXCEEDED_MAX_PDF_ELEMENTS";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_PDF_EXPORT_COL = "EXCEEDED_MAX_PDF_EXPORT_COL";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_PIN_RETRIES = "EXCEEDED_MAX_PIN_RETRIES";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_RCRD = "EXCEEDED_MAX_RCRD";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_REPORT_COL = "EXCEEDED_MAX_REPORT_COL";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_REPORT_ROWS = "EXCEEDED_MAX_REPORT_ROWS";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_REPORT_SIZE = "EXCEEDED_MAX_REPORT_SIZE";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_SESSIONS = "EXCEEDED_MAX_SESSIONS";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_SHIP_PACKAGE = "EXCEEDED_MAX_SHIP_PACKAGE";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_TIME = "EXCEEDED_MAX_TIME";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_TRANS_LINES = "EXCEEDED_MAX_TRANS_LINES";
	/**
	 * @var string
	 */
	const EXCEEDED_MAX_USERS_ALLWD = "EXCEEDED_MAX_USERS_ALLWD";
	/**
	 * @var string
	 */
	const EXCEEDED_PER_TRANS_MAX = "EXCEEDED_PER_TRANS_MAX";
	/**
	 * @var string
	 */
	const EXCEEDED_RQST_SIZE_LIMIT = "EXCEEDED_RQST_SIZE_LIMIT";
	/**
	 * @var string
	 */
	const EXCEEDS_ALLWD_LICENSES = "EXCEEDS_ALLWD_LICENSES";
	/**
	 * @var string
	 */
	const EXPENSE_ENTRY_DISALLWD = "EXPENSE_ENTRY_DISALLWD";
	/**
	 * @var string
	 */
	const EXPIRED_SEARCH_CRITERIA = "EXPIRED_SEARCH_CRITERIA";
	/**
	 * @var string
	 */
	const EXTERNALID_NOT_SUPPORTED = "EXTERNALID_NOT_SUPPORTED";
	/**
	 * @var string
	 */
	const EXTERNALID_REQD = "EXTERNALID_REQD";
	/**
	 * @var string
	 */
	const EXT_CAT_LINK_SETUP_REQD = "EXT_CAT_LINK_SETUP_REQD";
	/**
	 * @var string
	 */
	const FAILED_FEDEX_LABEL_VOID = "FAILED_FEDEX_LABEL_VOID";
	/**
	 * @var string
	 */
	const FAILED_FORM_VALIDATION = "FAILED_FORM_VALIDATION";
	/**
	 * @var string
	 */
	const FAILED_UPS_LABEL_VOID = "FAILED_UPS_LABEL_VOID";
	/**
	 * @var string
	 */
	const FAX_NUM_REQD = "FAX_NUM_REQD";
	/**
	 * @var string
	 */
	const FAX_SETUP_REQD = "FAX_SETUP_REQD";
	/**
	 * @var string
	 */
	const FEATURE_DISABLED = "FEATURE_DISABLED";
	/**
	 * @var string
	 */
	const FEATURE_UNAVAILABLE = "FEATURE_UNAVAILABLE";
	/**
	 * @var string
	 */
	const FEDEX_ACCT_REQD = "FEDEX_ACCT_REQD";
	/**
	 * @var string
	 */
	const FEDEX_CANT_INTEGRATE_FULFILL = "FEDEX_CANT_INTEGRATE_FULFILL";
	/**
	 * @var string
	 */
	const FEDEX_DROPOFF_TYP_REQD = "FEDEX_DROPOFF_TYP_REQD";
	/**
	 * @var string
	 */
	const FEDEX_INVALID_ACCT_NUM = "FEDEX_INVALID_ACCT_NUM";
	/**
	 * @var string
	 */
	const FEDEX_ITEM_CONTENTS_REQD = "FEDEX_ITEM_CONTENTS_REQD";
	/**
	 * @var string
	 */
	const FEDEX_METER_NOT_RETRIEVED = "FEDEX_METER_NOT_RETRIEVED";
	/**
	 * @var string
	 */
	const FEDEX_METER_REQD = "FEDEX_METER_REQD";
	/**
	 * @var string
	 */
	const FEDEX_ONE_PACKG_ALLWD = "FEDEX_ONE_PACKG_ALLWD";
	/**
	 * @var string
	 */
	const FEDEX_ORIGIN_COUNTRY_US_REQD = "FEDEX_ORIGIN_COUNTRY_US_REQD";
	/**
	 * @var string
	 */
	const FEDEX_RATING_SRVC_UNAVAILBL = "FEDEX_RATING_SRVC_UNAVAILBL";
	/**
	 * @var string
	 */
	const FEDEX_REG_NOT_FOUND = "FEDEX_REG_NOT_FOUND";
	/**
	 * @var string
	 */
	const FEDEX_SHIP_SRVC_REQD = "FEDEX_SHIP_SRVC_REQD";
	/**
	 * @var string
	 */
	const FEDEX_SHIP_SRVC_UNAVAILBL = "FEDEX_SHIP_SRVC_UNAVAILBL";
	/**
	 * @var string
	 */
	const FEDEX_UNSUPRTD_ORIGIN_COUNTRY = "FEDEX_UNSUPRTD_ORIGIN_COUNTRY";
	/**
	 * @var string
	 */
	const FEDEX_USD_EXCHANGE_RATE_REQD = "FEDEX_USD_EXCHANGE_RATE_REQD";
	/**
	 * @var string
	 */
	const FEDEX_USER_ERROR = "FEDEX_USER_ERROR";
	/**
	 * @var string
	 */
	const FEDEX_VOID_ERROR = "FEDEX_VOID_ERROR";
	/**
	 * @var string
	 */
	const FED_ID_REQD = "FED_ID_REQD";
	/**
	 * @var string
	 */
	const FED_WITHHOLDING_REQD = "FED_WITHHOLDING_REQD";
	/**
	 * @var string
	 */
	const FIELD_CALL_DATE_REQD = "FIELD_CALL_DATE_REQD";
	/**
	 * @var string
	 */
	const FIELD_DEFN_REQD = "FIELD_DEFN_REQD";
	/**
	 * @var string
	 */
	const FIELD_NOT_SETTABLE_ON_ADD = "FIELD_NOT_SETTABLE_ON_ADD";
	/**
	 * @var string
	 */
	const FIELD_PARAM_REQD = "FIELD_PARAM_REQD";
	/**
	 * @var string
	 */
	const FIELD_REQD = "FIELD_REQD";
	/**
	 * @var string
	 */
	const FILE_ALREADY_EXISTS = "FILE_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const FILE_DISALLWD_IN_ROOT_FLDR = "FILE_DISALLWD_IN_ROOT_FLDR";
	/**
	 * @var string
	 */
	const FILE_MISSING = "FILE_MISSING";
	/**
	 * @var string
	 */
	const FILE_NOT_DOWNLOADABLE = "FILE_NOT_DOWNLOADABLE";
	/**
	 * @var string
	 */
	const FILE_NOT_FOUND = "FILE_NOT_FOUND";
	/**
	 * @var string
	 */
	const FILE_REQD = "FILE_REQD";
	/**
	 * @var string
	 */
	const FILE_UPLOAD_IN_PROGRESS = "FILE_UPLOAD_IN_PROGRESS";
	/**
	 * @var string
	 */
	const FILTER_BY_AMT_REQD = "FILTER_BY_AMT_REQD";
	/**
	 * @var string
	 */
	const FINANCE_CHARGE_SETUP_REQD = "FINANCE_CHARGE_SETUP_REQD";
	/**
	 * @var string
	 */
	const FINANCE_CHARGE_SET_PREFS = "FINANCE_CHARGE_SET_PREFS";
	/**
	 * @var string
	 */
	const FIRST_LAST_NAMES_REQD = "FIRST_LAST_NAMES_REQD";
	/**
	 * @var string
	 */
	const FIRST_QTY_BUCKET_MUST_BE_ZERO = "FIRST_QTY_BUCKET_MUST_BE_ZERO";
	/**
	 * @var string
	 */
	const FLD_VALUE_REQD = "FLD_VALUE_REQD";
	/**
	 * @var string
	 */
	const FLD_VALUE_TOO_LARGE = "FLD_VALUE_TOO_LARGE";
	/**
	 * @var string
	 */
	const FOLDER_ALREADY_EXISTS = "FOLDER_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const FORMULA_ERROR = "FORMULA_ERROR";
	/**
	 * @var string
	 */
	const FORM_RESUBMISSION_REQD = "FORM_RESUBMISSION_REQD";
	/**
	 * @var string
	 */
	const FORM_SETUP_REQD = "FORM_SETUP_REQD";
	/**
	 * @var string
	 */
	const FORM_UNAVAILBL_ONLINE = "FORM_UNAVAILBL_ONLINE";
	/**
	 * @var string
	 */
	const FRIENDLY_NAME_REQD = "FRIENDLY_NAME_REQD";
	/**
	 * @var string
	 */
	const FULFILL_REQD_FIELDS_MISSING = "FULFILL_REQD_FIELDS_MISSING";
	/**
	 * @var string
	 */
	const FULFILL_REQD_PARAMS_MISSING = "FULFILL_REQD_PARAMS_MISSING";
	/**
	 * @var string
	 */
	const FULL_DISTRIB_REQD = "FULL_DISTRIB_REQD";
	/**
	 * @var string
	 */
	const FULL_USERS_REQD_TO_INTEGRATE = "FULL_USERS_REQD_TO_INTEGRATE";
	/**
	 * @var string
	 */
	const FX_MALFORMED_RESPONSE = "FX_MALFORMED_RESPONSE";
	/**
	 * @var string
	 */
	const FX_RATE_REQD_FEDEX_RATE = "FX_RATE_REQD_FEDEX_RATE";
	/**
	 * @var string
	 */
	const FX_TRANS_DISALLWD = "FX_TRANS_DISALLWD";
	/**
	 * @var string
	 */
	const GETALL_RCRD_TYPE_REQD = "GETALL_RCRD_TYPE_REQD";
	/**
	 * @var string
	 */
	const GIFT_CERT_AMT_EXCEED_AVAILBL = "GIFT_CERT_AMT_EXCEED_AVAILBL";
	/**
	 * @var string
	 */
	const GIFT_CERT_AUTH_ALREADY_EXISTS = "GIFT_CERT_AUTH_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const GIFT_CERT_CAN_BE_USED_ONCE = "GIFT_CERT_CAN_BE_USED_ONCE";
	/**
	 * @var string
	 */
	const GIFT_CERT_CODE_REQD = "GIFT_CERT_CODE_REQD";
	/**
	 * @var string
	 */
	const GIFT_CERT_INVALID_NUM = "GIFT_CERT_INVALID_NUM";
	/**
	 * @var string
	 */
	const GIFT_CERT_IN_USE = "GIFT_CERT_IN_USE";
	/**
	 * @var string
	 */
	const GROUP_DSNT_EXIST = "GROUP_DSNT_EXIST";
	/**
	 * @var string
	 */
	const GROUP_REQD = "GROUP_REQD";
	/**
	 * @var string
	 */
	const GROUP_TYPE_REQD = "GROUP_TYPE_REQD";
	/**
	 * @var string
	 */
	const GRTR_QTY_PRICE_LEVEL_REQD = "GRTR_QTY_PRICE_LEVEL_REQD";
	/**
	 * @var string
	 */
	const IGNORE = "IGNORE";
	/**
	 * @var string
	 */
	const ILLEGAL_ID = "ILLEGAL_ID";
	/**
	 * @var string
	 */
	const ILLEGAL_PERIOD_STRUCTURE = "ILLEGAL_PERIOD_STRUCTURE";
	/**
	 * @var string
	 */
	const INACTIVE_CC_PROFILE = "INACTIVE_CC_PROFILE";
	/**
	 * @var string
	 */
	const INACTIVE_RCRD_FOR_ROLE = "INACTIVE_RCRD_FOR_ROLE";
	/**
	 * @var string
	 */
	const INAVLID_FILE_TYP = "INAVLID_FILE_TYP";
	/**
	 * @var string
	 */
	const INAVLID_ITEM_TYP = "INAVLID_ITEM_TYP";
	/**
	 * @var string
	 */
	const INAVLID_PRICING_MTRX = "INAVLID_PRICING_MTRX";
	/**
	 * @var string
	 */
	const INCOMPATIBLE_ACCT_CHANGE = "INCOMPATIBLE_ACCT_CHANGE";
	/**
	 * @var string
	 */
	const INCOMPLETE_BILLING_ADDR = "INCOMPLETE_BILLING_ADDR";
	/**
	 * @var string
	 */
	const INCOMPLETE_FILE_UPLOAD = "INCOMPLETE_FILE_UPLOAD";
	/**
	 * @var string
	 */
	const INCRCT_ORD_INFO = "INCRCT_ORD_INFO";
	/**
	 * @var string
	 */
	const INFINITE_LOOP_DETECTED = "INFINITE_LOOP_DETECTED";
	/**
	 * @var string
	 */
	const INITIALIZE_ARG_REQD = "INITIALIZE_ARG_REQD";
	/**
	 * @var string
	 */
	const INITIALIZE_AUXREF_REQD = "INITIALIZE_AUXREF_REQD";
	/**
	 * @var string
	 */
	const INSTALL_SCRIPT_ERROR = "INSTALL_SCRIPT_ERROR";
	/**
	 * @var string
	 */
	const INSUFCNT_NUM_PRDS_FOR_REV_REC = "INSUFCNT_NUM_PRDS_FOR_REV_REC";
	/**
	 * @var string
	 */
	const INSUFCNT_OPEN_PRDS_FOR_REV_REC = "INSUFCNT_OPEN_PRDS_FOR_REV_REC";
	/**
	 * @var string
	 */
	const INSUFFICIENT_CHARS_IN_SEARCH = "INSUFFICIENT_CHARS_IN_SEARCH";
	/**
	 * @var string
	 */
	const INSUFFICIENT_FLD_PERMISSION = "INSUFFICIENT_FLD_PERMISSION";
	/**
	 * @var string
	 */
	const INSUFFICIENT_FUND = "INSUFFICIENT_FUND";
	/**
	 * @var string
	 */
	const INSUFFICIENT_PERMISSION = "INSUFFICIENT_PERMISSION";
	/**
	 * @var string
	 */
	const INTEGER_REQD_FOR_QTY = "INTEGER_REQD_FOR_QTY";
	/**
	 * @var string
	 */
	const INTL_FEDEX_ONE_PACKG_ALLWD = "INTL_FEDEX_ONE_PACKG_ALLWD";
	/**
	 * @var string
	 */
	const INTL_SHIP_EXCEED_MAX_ITEM = "INTL_SHIP_EXCEED_MAX_ITEM";
	/**
	 * @var string
	 */
	const INVALID_ABN = "INVALID_ABN";
	/**
	 * @var string
	 */
	const INVALID_ACCT = "INVALID_ACCT";
	/**
	 * @var string
	 */
	const INVALID_ACCT_NUM_CSTM_FIELD = "INVALID_ACCT_NUM_CSTM_FIELD";
	/**
	 * @var string
	 */
	const INVALID_ACCT_PRD = "INVALID_ACCT_PRD";
	/**
	 * @var string
	 */
	const INVALID_ACCT_TYP = "INVALID_ACCT_TYP";
	/**
	 * @var string
	 */
	const INVALID_ACTION = "INVALID_ACTION";
	/**
	 * @var string
	 */
	const INVALID_ADDRESS_OR_SHIPPER_NO = "INVALID_ADDRESS_OR_SHIPPER_NO";
	/**
	 * @var string
	 */
	const INVALID_ADJUSTMENT_ACCT = "INVALID_ADJUSTMENT_ACCT";
	/**
	 * @var string
	 */
	const INVALID_AES_FTSR_EXEMPTN_NUM = "INVALID_AES_FTSR_EXEMPTN_NUM";
	/**
	 * @var string
	 */
	const INVALID_ALLOCTN_METHOD = "INVALID_ALLOCTN_METHOD";
	/**
	 * @var string
	 */
	const INVALID_AMORTZN_ACCT = "INVALID_AMORTZN_ACCT";
	/**
	 * @var string
	 */
	const INVALID_AMT = "INVALID_AMT";
	/**
	 * @var string
	 */
	const INVALID_APP_ID = "INVALID_APP_ID";
	/**
	 * @var string
	 */
	const INVALID_ASSIGN_STATUS_COMBO = "INVALID_ASSIGN_STATUS_COMBO";
	/**
	 * @var string
	 */
	const INVALID_AUTH_CODE = "INVALID_AUTH_CODE";
	/**
	 * @var string
	 */
	const INVALID_AUTOAPPLY_VALUE = "INVALID_AUTOAPPLY_VALUE";
	/**
	 * @var string
	 */
	const INVALID_AVS_ADDR = "INVALID_AVS_ADDR";
	/**
	 * @var string
	 */
	const INVALID_AVS_ZIP = "INVALID_AVS_ZIP";
	/**
	 * @var string
	 */
	const INVALID_BALANCE_RANGE = "INVALID_BALANCE_RANGE";
	/**
	 * @var string
	 */
	const INVALID_BILLING_SCHDUL = "INVALID_BILLING_SCHDUL";
	/**
	 * @var string
	 */
	const INVALID_BILLING_SCHDUL_DATE = "INVALID_BILLING_SCHDUL_DATE";
	/**
	 * @var string
	 */
	const INVALID_BILLING_SCHDUL_ENTRY = "INVALID_BILLING_SCHDUL_ENTRY";
	/**
	 * @var string
	 */
	const INVALID_BIN_NUM = "INVALID_BIN_NUM";
	/**
	 * @var string
	 */
	const INVALID_BOM_QTY = "INVALID_BOM_QTY";
	/**
	 * @var string
	 */
	const INVALID_BOOLEAN_VALUE = "INVALID_BOOLEAN_VALUE";
	/**
	 * @var string
	 */
	const INVALID_BUG_NUM = "INVALID_BUG_NUM";
	/**
	 * @var string
	 */
	const INVALID_CAMPAIGN_CHANNEL = "INVALID_CAMPAIGN_CHANNEL";
	/**
	 * @var string
	 */
	const INVALID_CAMPAIGN_GROUP_SIZE = "INVALID_CAMPAIGN_GROUP_SIZE";
	/**
	 * @var string
	 */
	const INVALID_CAMPAIGN_STATUS = "INVALID_CAMPAIGN_STATUS";
	/**
	 * @var string
	 */
	const INVALID_CARD = "INVALID_CARD";
	/**
	 * @var string
	 */
	const INVALID_CARD_ID = "INVALID_CARD_ID";
	/**
	 * @var string
	 */
	const INVALID_CARD_NUM = "INVALID_CARD_NUM";
	/**
	 * @var string
	 */
	const INVALID_CARD_TYP = "INVALID_CARD_TYP";
	/**
	 * @var string
	 */
	const INVALID_CASE_FORM = "INVALID_CASE_FORM";
	/**
	 * @var string
	 */
	const INVALID_CATGRY_TAX_AGENCY_REQ = "INVALID_CATGRY_TAX_AGENCY_REQ";
	/**
	 * @var string
	 */
	const INVALID_CC_EMAIL_ADDRESS = "INVALID_CC_EMAIL_ADDRESS";
	/**
	 * @var string
	 */
	const INVALID_CC_NUM = "INVALID_CC_NUM";
	/**
	 * @var string
	 */
	const INVALID_CERT = "INVALID_CERT";
	/**
	 * @var string
	 */
	const INVALID_CERT_AUTH = "INVALID_CERT_AUTH";
	/**
	 * @var string
	 */
	const INVALID_CHANGE_LIST = "INVALID_CHANGE_LIST";
	/**
	 * @var string
	 */
	const INVALID_CHARS_IN_EMAIL = "INVALID_CHARS_IN_EMAIL";
	/**
	 * @var string
	 */
	const INVALID_CHARS_IN_NAME = "INVALID_CHARS_IN_NAME";
	/**
	 * @var string
	 */
	const INVALID_CHARS_IN_PARAM_FIELD = "INVALID_CHARS_IN_PARAM_FIELD";
	/**
	 * @var string
	 */
	const INVALID_CHARS_IN_URL = "INVALID_CHARS_IN_URL";
	/**
	 * @var string
	 */
	const INVALID_CHECKOUT_EMAIL = "INVALID_CHECKOUT_EMAIL";
	/**
	 * @var string
	 */
	const INVALID_CITY = "INVALID_CITY";
	/**
	 * @var string
	 */
	const INVALID_COLUMN_NAME = "INVALID_COLUMN_NAME";
	/**
	 * @var string
	 */
	const INVALID_COLUMN_VALUE = "INVALID_COLUMN_VALUE";
	/**
	 * @var string
	 */
	const INVALID_CONTENT_TYPE = "INVALID_CONTENT_TYPE";
	/**
	 * @var string
	 */
	const INVALID_COSTING_METHOD = "INVALID_COSTING_METHOD";
	/**
	 * @var string
	 */
	const INVALID_CRNCY_EXCH_RATE = "INVALID_CRNCY_EXCH_RATE";
	/**
	 * @var string
	 */
	const INVALID_CRYPT_KEY = "INVALID_CRYPT_KEY";
	/**
	 * @var string
	 */
	const INVALID_CSTM_FIELD_DATA_TYP = "INVALID_CSTM_FIELD_DATA_TYP";
	/**
	 * @var string
	 */
	const INVALID_CSTM_FIELD_RCRD_TYP = "INVALID_CSTM_FIELD_RCRD_TYP";
	/**
	 * @var string
	 */
	const INVALID_CSTM_FIELD_REF = "INVALID_CSTM_FIELD_REF";
	/**
	 * @var string
	 */
	const INVALID_CSTM_FORM = "INVALID_CSTM_FORM";
	/**
	 * @var string
	 */
	const INVALID_CSTM_RCRD_KEY = "INVALID_CSTM_RCRD_KEY";
	/**
	 * @var string
	 */
	const INVALID_CSTM_RCRD_QUERY = "INVALID_CSTM_RCRD_QUERY";
	/**
	 * @var string
	 */
	const INVALID_CSTM_RCRD_TYPE_KEY = "INVALID_CSTM_RCRD_TYPE_KEY";
	/**
	 * @var string
	 */
	const INVALID_CSTM_RCRD_TYP_KEY = "INVALID_CSTM_RCRD_TYP_KEY";
	/**
	 * @var string
	 */
	const INVALID_CUR = "INVALID_CUR";
	/**
	 * @var string
	 */
	const INVALID_CURRENCY_CODE = "INVALID_CURRENCY_CODE";
	/**
	 * @var string
	 */
	const INVALID_CURRENCY_TYP = "INVALID_CURRENCY_TYP";
	/**
	 * @var string
	 */
	const INVALID_CURR_CODE = "INVALID_CURR_CODE";
	/**
	 * @var string
	 */
	const INVALID_CUSTOMER_RCRD = "INVALID_CUSTOMER_RCRD";
	/**
	 * @var string
	 */
	const INVALID_DATA = "INVALID_DATA";
	/**
	 * @var string
	 */
	const INVALID_DATA_FORMAT = "INVALID_DATA_FORMAT";
	/**
	 * @var string
	 */
	const INVALID_DATE = "INVALID_DATE";
	/**
	 * @var string
	 */
	const INVALID_DATE_FORMAT = "INVALID_DATE_FORMAT";
	/**
	 * @var string
	 */
	const INVALID_DATE_RANGE = "INVALID_DATE_RANGE";
	/**
	 * @var string
	 */
	const INVALID_DATE_TIME = "INVALID_DATE_TIME";
	/**
	 * @var string
	 */
	const INVALID_DEAL_RANGE = "INVALID_DEAL_RANGE";
	/**
	 * @var string
	 */
	const INVALID_DELETE_REF = "INVALID_DELETE_REF";
	/**
	 * @var string
	 */
	const INVALID_DESTINATION_FLDR = "INVALID_DESTINATION_FLDR";
	/**
	 * @var string
	 */
	const INVALID_DESTNTN_COUNTRY = "INVALID_DESTNTN_COUNTRY";
	/**
	 * @var string
	 */
	const INVALID_DESTNTN_POST_CODE = "INVALID_DESTNTN_POST_CODE";
	/**
	 * @var string
	 */
	const INVALID_DESTNTN_STATE = "INVALID_DESTNTN_STATE";
	/**
	 * @var string
	 */
	const INVALID_DETACH_RECORD_TYP = "INVALID_DETACH_RECORD_TYP";
	/**
	 * @var string
	 */
	const INVALID_DISCOUNT_MARKUP = "INVALID_DISCOUNT_MARKUP";
	/**
	 * @var string
	 */
	const INVALID_DOMAIN_KEY = "INVALID_DOMAIN_KEY";
	/**
	 * @var string
	 */
	const INVALID_DOMAIN_NAME = "INVALID_DOMAIN_NAME";
	/**
	 * @var string
	 */
	const INVALID_DUP_ISSUE_REF = "INVALID_DUP_ISSUE_REF";
	/**
	 * @var string
	 */
	const INVALID_EMAIL = "INVALID_EMAIL";
	/**
	 * @var string
	 */
	const INVALID_EMAIL_ADDR = "INVALID_EMAIL_ADDR";
	/**
	 * @var string
	 */
	const INVALID_END_DATE = "INVALID_END_DATE";
	/**
	 * @var string
	 */
	const INVALID_END_TIME = "INVALID_END_TIME";
	/**
	 * @var string
	 */
	const INVALID_ENTITY_INTERNALID = "INVALID_ENTITY_INTERNALID";
	/**
	 * @var string
	 */
	const INVALID_ENTITY_STATUS = "INVALID_ENTITY_STATUS";
	/**
	 * @var string
	 */
	const INVALID_EVENT_TIME = "INVALID_EVENT_TIME";
	/**
	 * @var string
	 */
	const INVALID_EXPNS_ACCT_SUB = "INVALID_EXPNS_ACCT_SUB";
	/**
	 * @var string
	 */
	const INVALID_EXPRESSION = "INVALID_EXPRESSION";
	/**
	 * @var string
	 */
	const INVALID_EXP_DATE = "INVALID_EXP_DATE";
	/**
	 * @var string
	 */
	const INVALID_FAX_NUM = "INVALID_FAX_NUM";
	/**
	 * @var string
	 */
	const INVALID_FAX_PHONE_FORMAT = "INVALID_FAX_PHONE_FORMAT";
	/**
	 * @var string
	 */
	const INVALID_FIELD_FOR_RCRD_TYP = "INVALID_FIELD_FOR_RCRD_TYP";
	/**
	 * @var string
	 */
	const INVALID_FIELD_NAME_FOR_NULL = "INVALID_FIELD_NAME_FOR_NULL";
	/**
	 * @var string
	 */
	const INVALID_FILE = "INVALID_FILE";
	/**
	 * @var string
	 */
	const INVALID_FILE_ENCODING = "INVALID_FILE_ENCODING";
	/**
	 * @var string
	 */
	const INVALID_FILE_TYP = "INVALID_FILE_TYP";
	/**
	 * @var string
	 */
	const INVALID_FLD = "INVALID_FLD";
	/**
	 * @var string
	 */
	const INVALID_FLDR_SIZE = "INVALID_FLDR_SIZE";
	/**
	 * @var string
	 */
	const INVALID_FLD_RANGE = "INVALID_FLD_RANGE";
	/**
	 * @var string
	 */
	const INVALID_FLD_TYP = "INVALID_FLD_TYP";
	/**
	 * @var string
	 */
	const INVALID_FLD_VALUE = "INVALID_FLD_VALUE";
	/**
	 * @var string
	 */
	const INVALID_FORMAT_IN_PARAM_FIELD = "INVALID_FORMAT_IN_PARAM_FIELD";
	/**
	 * @var string
	 */
	const INVALID_FORMULA = "INVALID_FORMULA";
	/**
	 * @var string
	 */
	const INVALID_FORMULA_FIELD = "INVALID_FORMULA_FIELD";
	/**
	 * @var string
	 */
	const INVALID_FROM_DATE = "INVALID_FROM_DATE";
	/**
	 * @var string
	 */
	const INVALID_FROM_TIME = "INVALID_FROM_TIME";
	/**
	 * @var string
	 */
	const INVALID_FULFILMNT_ITEM = "INVALID_FULFILMNT_ITEM";
	/**
	 * @var string
	 */
	const INVALID_FX_BASE_CURRENCY = "INVALID_FX_BASE_CURRENCY";
	/**
	 * @var string
	 */
	const INVALID_FX_RATE = "INVALID_FX_RATE";
	/**
	 * @var string
	 */
	const INVALID_GET_REF = "INVALID_GET_REF";
	/**
	 * @var string
	 */
	const INVALID_GIFT_CERT = "INVALID_GIFT_CERT";
	/**
	 * @var string
	 */
	const INVALID_GIFT_CERT_AMT = "INVALID_GIFT_CERT_AMT";
	/**
	 * @var string
	 */
	const INVALID_GIFT_CERT_CODE = "INVALID_GIFT_CERT_CODE";
	/**
	 * @var string
	 */
	const INVALID_GROUP_TYP = "INVALID_GROUP_TYP";
	/**
	 * @var string
	 */
	const INVALID_GROUP_TYPE = "INVALID_GROUP_TYPE";
	/**
	 * @var string
	 */
	const INVALID_GRP = "INVALID_GRP";
	/**
	 * @var string
	 */
	const INVALID_GST_PST_AGENCIES = "INVALID_GST_PST_AGENCIES";
	/**
	 * @var string
	 */
	const INVALID_ID = "INVALID_ID";
	/**
	 * @var string
	 */
	const INVALID_INITIALIZE_ARG = "INVALID_INITIALIZE_ARG";
	/**
	 * @var string
	 */
	const INVALID_INITIALIZE_AUXREF = "INVALID_INITIALIZE_AUXREF";
	/**
	 * @var string
	 */
	const INVALID_INITIALIZE_REF = "INVALID_INITIALIZE_REF";
	/**
	 * @var string
	 */
	const INVALID_INSURED_VALUE = "INVALID_INSURED_VALUE";
	/**
	 * @var string
	 */
	const INVALID_INTERNALID = "INVALID_INTERNALID";
	/**
	 * @var string
	 */
	const INVALID_INVENTORY_NUM = "INVALID_INVENTORY_NUM";
	/**
	 * @var string
	 */
	const INVALID_INV_DATE = "INVALID_INV_DATE";
	/**
	 * @var string
	 */
	const INVALID_IP_ADDRESS_RULE = "INVALID_IP_ADDRESS_RULE";
	/**
	 * @var string
	 */
	const INVALID_ISSUE_BUILD_VERSION = "INVALID_ISSUE_BUILD_VERSION";
	/**
	 * @var string
	 */
	const INVALID_ISSUE_PRIORITY = "INVALID_ISSUE_PRIORITY";
	/**
	 * @var string
	 */
	const INVALID_ISSUE_PRODUCT = "INVALID_ISSUE_PRODUCT";
	/**
	 * @var string
	 */
	const INVALID_ISSUE_STATUS = "INVALID_ISSUE_STATUS";
	/**
	 * @var string
	 */
	const INVALID_ITEM_OPTION = "INVALID_ITEM_OPTION";
	/**
	 * @var string
	 */
	const INVALID_ITEM_OPTIONS = "INVALID_ITEM_OPTIONS";
	/**
	 * @var string
	 */
	const INVALID_ITEM_SUBTYP = "INVALID_ITEM_SUBTYP";
	/**
	 * @var string
	 */
	const INVALID_ITEM_TYP = "INVALID_ITEM_TYP";
	/**
	 * @var string
	 */
	const INVALID_ITEM_WEIGHT = "INVALID_ITEM_WEIGHT";
	/**
	 * @var string
	 */
	const INVALID_JOB_ID = "INVALID_JOB_ID";
	/**
	 * @var string
	 */
	const INVALID_KEY_OR_REF = "INVALID_KEY_OR_REF";
	/**
	 * @var string
	 */
	const INVALID_KEY_PASSWORD_REQD = "INVALID_KEY_PASSWORD_REQD";
	/**
	 * @var string
	 */
	const INVALID_LINE_ID = "INVALID_LINE_ID";
	/**
	 * @var string
	 */
	const INVALID_LINK_SUM = "INVALID_LINK_SUM";
	/**
	 * @var string
	 */
	const INVALID_LIST_ID = "INVALID_LIST_ID";
	/**
	 * @var string
	 */
	const INVALID_LIST_KEY = "INVALID_LIST_KEY";
	/**
	 * @var string
	 */
	const INVALID_LOC = "INVALID_LOC";
	/**
	 * @var string
	 */
	const INVALID_LOC_SUB_RESTRICTN = "INVALID_LOC_SUB_RESTRICTN";
	/**
	 * @var string
	 */
	const INVALID_LOGIN = "INVALID_LOGIN";
	/**
	 * @var string
	 */
	const INVALID_LOGIN_ATTEMPT = "INVALID_LOGIN_ATTEMPT";
	/**
	 * @var string
	 */
	const INVALID_LOGIN_CREDENTIALS = "INVALID_LOGIN_CREDENTIALS";
	/**
	 * @var string
	 */
	const INVALID_LOGIN_IP = "INVALID_LOGIN_IP";
	/**
	 * @var string
	 */
	const INVALID_LOT_NUM_FORMAT = "INVALID_LOT_NUM_FORMAT";
	/**
	 * @var string
	 */
	const INVALID_MACRO_ID = "INVALID_MACRO_ID";
	/**
	 * @var string
	 */
	const INVALID_MARKUP_DISCOUNT = "INVALID_MARKUP_DISCOUNT";
	/**
	 * @var string
	 */
	const INVALID_MCC = "INVALID_MCC";
	/**
	 * @var string
	 */
	const INVALID_MEMBER_HIERARCHY = "INVALID_MEMBER_HIERARCHY";
	/**
	 * @var string
	 */
	const INVALID_MEMRZD_TRANS = "INVALID_MEMRZD_TRANS";
	/**
	 * @var string
	 */
	const INVALID_MERCHANT_KEY = "INVALID_MERCHANT_KEY";
	/**
	 * @var string
	 */
	const INVALID_MERCHANT_NAME = "INVALID_MERCHANT_NAME";
	/**
	 * @var string
	 */
	const INVALID_NAME = "INVALID_NAME";
	/**
	 * @var string
	 */
	const INVALID_NEXUS = "INVALID_NEXUS";
	/**
	 * @var string
	 */
	const INVALID_NUM = "INVALID_NUM";
	/**
	 * @var string
	 */
	const INVALID_NUMBER = "INVALID_NUMBER";
	/**
	 * @var string
	 */
	const INVALID_OBJ = "INVALID_OBJ";
	/**
	 * @var string
	 */
	const INVALID_ONLINE_FORM = "INVALID_ONLINE_FORM";
	/**
	 * @var string
	 */
	const INVALID_ONLINE_FORM_URL = "INVALID_ONLINE_FORM_URL";
	/**
	 * @var string
	 */
	const INVALID_OPENID_DOMAIN = "INVALID_OPENID_DOMAIN";
	/**
	 * @var string
	 */
	const INVALID_OPERATION = "INVALID_OPERATION";
	/**
	 * @var string
	 */
	const INVALID_ORD_STATUS = "INVALID_ORD_STATUS";
	/**
	 * @var string
	 */
	const INVALID_ORIGIN_COUNTRY = "INVALID_ORIGIN_COUNTRY";
	/**
	 * @var string
	 */
	const INVALID_ORIGIN_POSTCODE = "INVALID_ORIGIN_POSTCODE";
	/**
	 * @var string
	 */
	const INVALID_ORIGIN_STATE = "INVALID_ORIGIN_STATE";
	/**
	 * @var string
	 */
	const INVALID_PAGER_NUM = "INVALID_PAGER_NUM";
	/**
	 * @var string
	 */
	const INVALID_PAGE_INDEX = "INVALID_PAGE_INDEX";
	/**
	 * @var string
	 */
	const INVALID_PAGE_PARAM = "INVALID_PAGE_PARAM";
	/**
	 * @var string
	 */
	const INVALID_PARAM = "INVALID_PARAM";
	/**
	 * @var string
	 */
	const INVALID_PARENT = "INVALID_PARENT";
	/**
	 * @var string
	 */
	const INVALID_PARTNER_CODE = "INVALID_PARTNER_CODE";
	/**
	 * @var string
	 */
	const INVALID_PARTNER_ID = "INVALID_PARTNER_ID";
	/**
	 * @var string
	 */
	const INVALID_PASSWORD = "INVALID_PASSWORD";
	/**
	 * @var string
	 */
	const INVALID_PAYCHECK_DATE = "INVALID_PAYCHECK_DATE";
	/**
	 * @var string
	 */
	const INVALID_PERIOD = "INVALID_PERIOD";
	/**
	 * @var string
	 */
	const INVALID_PHONE = "INVALID_PHONE";
	/**
	 * @var string
	 */
	const INVALID_PHONE_FAX_PAGER_NUM = "INVALID_PHONE_FAX_PAGER_NUM";
	/**
	 * @var string
	 */
	const INVALID_PHONE_NUM = "INVALID_PHONE_NUM";
	/**
	 * @var string
	 */
	const INVALID_PHONE_NUMBER = "INVALID_PHONE_NUMBER";
	/**
	 * @var string
	 */
	const INVALID_PICKUP_POSTAL_CODE = "INVALID_PICKUP_POSTAL_CODE";
	/**
	 * @var string
	 */
	const INVALID_PIN = "INVALID_PIN";
	/**
	 * @var string
	 */
	const INVALID_PIN_DEBIT_TRANS_TYP = "INVALID_PIN_DEBIT_TRANS_TYP";
	/**
	 * @var string
	 */
	const INVALID_PORTLET_TYP = "INVALID_PORTLET_TYP";
	/**
	 * @var string
	 */
	const INVALID_POST = "INVALID_POST";
	/**
	 * @var string
	 */
	const INVALID_PRESENTATION_TYP = "INVALID_PRESENTATION_TYP";
	/**
	 * @var string
	 */
	const INVALID_PROBABILITY_RANGE = "INVALID_PROBABILITY_RANGE";
	/**
	 * @var string
	 */
	const INVALID_PROFILE_ID = "INVALID_PROFILE_ID";
	/**
	 * @var string
	 */
	const INVALID_PROJ_BILLING_TYP = "INVALID_PROJ_BILLING_TYP";
	/**
	 * @var string
	 */
	const INVALID_PST_TAX_VALUE = "INVALID_PST_TAX_VALUE";
	/**
	 * @var string
	 */
	const INVALID_PSWD = "INVALID_PSWD";
	/**
	 * @var string
	 */
	const INVALID_PSWD_HINT = "INVALID_PSWD_HINT";
	/**
	 * @var string
	 */
	const INVALID_PSWD_ILLEGAL_CHAR = "INVALID_PSWD_ILLEGAL_CHAR";
	/**
	 * @var string
	 */
	const INVALID_PURCHASE_TAX_CODE = "INVALID_PURCHASE_TAX_CODE";
	/**
	 * @var string
	 */
	const INVALID_QTY = "INVALID_QTY";
	/**
	 * @var string
	 */
	const INVALID_QUANTITY = "INVALID_QUANTITY";
	/**
	 * @var string
	 */
	const INVALID_QUESTION = "INVALID_QUESTION";
	/**
	 * @var string
	 */
	const INVALID_RCRD = "INVALID_RCRD";
	/**
	 * @var string
	 */
	const INVALID_RCRD_CONVERSION = "INVALID_RCRD_CONVERSION";
	/**
	 * @var string
	 */
	const INVALID_RCRD_HEADER_ = "INVALID_RCRD_HEADER_";
	/**
	 * @var string
	 */
	const INVALID_RCRD_ID = "INVALID_RCRD_ID";
	/**
	 * @var string
	 */
	const INVALID_RCRD_INITIALIZE = "INVALID_RCRD_INITIALIZE";
	/**
	 * @var string
	 */
	const INVALID_RCRD_OBJ = "INVALID_RCRD_OBJ";
	/**
	 * @var string
	 */
	const INVALID_RCRD_REF = "INVALID_RCRD_REF";
	/**
	 * @var string
	 */
	const INVALID_RCRD_TRANSFRM = "INVALID_RCRD_TRANSFRM";
	/**
	 * @var string
	 */
	const INVALID_RCRD_TYPE = "INVALID_RCRD_TYPE";
	/**
	 * @var string
	 */
	const INVALID_RECIPIENT = "INVALID_RECIPIENT";
	/**
	 * @var string
	 */
	const INVALID_RECR_REF = "INVALID_RECR_REF";
	/**
	 * @var string
	 */
	const INVALID_RECUR_DATE_RANGE = "INVALID_RECUR_DATE_RANGE";
	/**
	 * @var string
	 */
	const INVALID_RECUR_DESC_REQD = "INVALID_RECUR_DESC_REQD";
	/**
	 * @var string
	 */
	const INVALID_RECUR_DOW = "INVALID_RECUR_DOW";
	/**
	 * @var string
	 */
	const INVALID_RECUR_DOWIM = "INVALID_RECUR_DOWIM";
	/**
	 * @var string
	 */
	const INVALID_RECUR_DOWMASK = "INVALID_RECUR_DOWMASK";
	/**
	 * @var string
	 */
	const INVALID_RECUR_FREQUENCY = "INVALID_RECUR_FREQUENCY";
	/**
	 * @var string
	 */
	const INVALID_RECUR_PATTERN = "INVALID_RECUR_PATTERN";
	/**
	 * @var string
	 */
	const INVALID_RECUR_PERIOD = "INVALID_RECUR_PERIOD";
	/**
	 * @var string
	 */
	const INVALID_RECUR_TIME_ZONE_REQD = "INVALID_RECUR_TIME_ZONE_REQD";
	/**
	 * @var string
	 */
	const INVALID_REFFERER_EMAIL = "INVALID_REFFERER_EMAIL";
	/**
	 * @var string
	 */
	const INVALID_REFUND_AMT = "INVALID_REFUND_AMT";
	/**
	 * @var string
	 */
	const INVALID_REF_CANT_INITIALIZE = "INVALID_REF_CANT_INITIALIZE";
	/**
	 * @var string
	 */
	const INVALID_REF_KEY = "INVALID_REF_KEY";
	/**
	 * @var string
	 */
	const INVALID_REPORT = "INVALID_REPORT";
	/**
	 * @var string
	 */
	const INVALID_REPORT_ID = "INVALID_REPORT_ID";
	/**
	 * @var string
	 */
	const INVALID_REPORT_ROW = "INVALID_REPORT_ROW";
	/**
	 * @var string
	 */
	const INVALID_REQUEST = "INVALID_REQUEST";
	/**
	 * @var string
	 */
	const INVALID_RESOURCE_TIME = "INVALID_RESOURCE_TIME";
	/**
	 * @var string
	 */
	const INVALID_RESULT_SUMMARY_FUNC = "INVALID_RESULT_SUMMARY_FUNC";
	/**
	 * @var string
	 */
	const INVALID_RETURN_DATA_OBJECT = "INVALID_RETURN_DATA_OBJECT";
	/**
	 * @var string
	 */
	const INVALID_REV_REC_DATE_RANGE = "INVALID_REV_REC_DATE_RANGE";
	/**
	 * @var string
	 */
	const INVALID_ROLE = "INVALID_ROLE";
	/**
	 * @var string
	 */
	const INVALID_ROLE_FOR_EVENT = "INVALID_ROLE_FOR_EVENT";
	/**
	 * @var string
	 */
	const INVALID_RQST_CONTACTS_EXIST = "INVALID_RQST_CONTACTS_EXIST";
	/**
	 * @var string
	 */
	const INVALID_RQST_PARENT_REQD = "INVALID_RQST_PARENT_REQD";
	/**
	 * @var string
	 */
	const INVALID_RQST_SBCUST_JOBS_EXIST = "INVALID_RQST_SBCUST_JOBS_EXIST";
	/**
	 * @var string
	 */
	const INVALID_SAVEDSEARCH = "INVALID_SAVEDSEARCH";
	/**
	 * @var string
	 */
	const INVALID_SAVED_SRCH = "INVALID_SAVED_SRCH";
	/**
	 * @var string
	 */
	const INVALID_SCHDUL_AMT = "INVALID_SCHDUL_AMT";
	/**
	 * @var string
	 */
	const INVALID_SCHDUL_FORMAT = "INVALID_SCHDUL_FORMAT";
	/**
	 * @var string
	 */
	const INVALID_SCRIPT_ID = "INVALID_SCRIPT_ID";
	/**
	 * @var string
	 */
	const INVALID_SEARCH = "INVALID_SEARCH";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_CRITERIA = "INVALID_SEARCH_CRITERIA";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_FIELD_KEY = "INVALID_SEARCH_FIELD_KEY";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_FIELD_NAME = "INVALID_SEARCH_FIELD_NAME";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_FIELD_OBJ = "INVALID_SEARCH_FIELD_OBJ";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_JOIN_ID = "INVALID_SEARCH_JOIN_ID";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_MORE = "INVALID_SEARCH_MORE";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_OPERATOR = "INVALID_SEARCH_OPERATOR";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_PAGE_INDEX = "INVALID_SEARCH_PAGE_INDEX";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_PAGE_SIZE = "INVALID_SEARCH_PAGE_SIZE";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_PREF = "INVALID_SEARCH_PREF";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_SELECT_OBJ = "INVALID_SEARCH_SELECT_OBJ";
	/**
	 * @var string
	 */
	const INVALID_SEARCH_VALUE = "INVALID_SEARCH_VALUE";
	/**
	 * @var string
	 */
	const INVALID_SECONDARY_EMAIL = "INVALID_SECONDARY_EMAIL";
	/**
	 * @var string
	 */
	const INVALID_SECPAY_CREDENTIALS = "INVALID_SECPAY_CREDENTIALS";
	/**
	 * @var string
	 */
	const INVALID_SERIAL_NUM = "INVALID_SERIAL_NUM";
	/**
	 * @var string
	 */
	const INVALID_SERIAL_OR_LOT_NUMBER = "INVALID_SERIAL_OR_LOT_NUMBER";
	/**
	 * @var string
	 */
	const INVALID_SERVICE_CODE = "INVALID_SERVICE_CODE";
	/**
	 * @var string
	 */
	const INVALID_SESSION = "INVALID_SESSION";
	/**
	 * @var string
	 */
	const INVALID_SHIPPER_STATE = "INVALID_SHIPPER_STATE";
	/**
	 * @var string
	 */
	const INVALID_SHIP_DATE = "INVALID_SHIP_DATE";
	/**
	 * @var string
	 */
	const INVALID_SHIP_FROM_STATE = "INVALID_SHIP_FROM_STATE";
	/**
	 * @var string
	 */
	const INVALID_SHIP_GRP = "INVALID_SHIP_GRP";
	/**
	 * @var string
	 */
	const INVALID_SHIP_SRVC = "INVALID_SHIP_SRVC";
	/**
	 * @var string
	 */
	const INVALID_SHIP_TO_SATE = "INVALID_SHIP_TO_SATE";
	/**
	 * @var string
	 */
	const INVALID_SITE_CSTM_FILE = "INVALID_SITE_CSTM_FILE";
	/**
	 * @var string
	 */
	const INVALID_SOAP_HEADER = "INVALID_SOAP_HEADER";
	/**
	 * @var string
	 */
	const INVALID_SRCH = "INVALID_SRCH";
	/**
	 * @var string
	 */
	const INVALID_SRCH_CRITERIA = "INVALID_SRCH_CRITERIA";
	/**
	 * @var string
	 */
	const INVALID_SRCH_CSTM_FLD = "INVALID_SRCH_CSTM_FLD";
	/**
	 * @var string
	 */
	const INVALID_SRCH_FUNCTN = "INVALID_SRCH_FUNCTN";
	/**
	 * @var string
	 */
	const INVALID_SRCH_SORT = "INVALID_SRCH_SORT";
	/**
	 * @var string
	 */
	const INVALID_SRCH_SUMMARY_TYP = "INVALID_SRCH_SUMMARY_TYP";
	/**
	 * @var string
	 */
	const INVALID_SRCH_TYP = "INVALID_SRCH_TYP";
	/**
	 * @var string
	 */
	const INVALID_SRVC_ITEM_SUB = "INVALID_SRVC_ITEM_SUB";
	/**
	 * @var string
	 */
	const INVALID_SSO = "INVALID_SSO";
	/**
	 * @var string
	 */
	const INVALID_SSS_DEBUG_SESSION = "INVALID_SSS_DEBUG_SESSION";
	/**
	 * @var string
	 */
	const INVALID_STATE = "INVALID_STATE";
	/**
	 * @var string
	 */
	const INVALID_STATUS = "INVALID_STATUS";
	/**
	 * @var string
	 */
	const INVALID_SUB = "INVALID_SUB";
	/**
	 * @var string
	 */
	const INVALID_SUBLIST_DESC = "INVALID_SUBLIST_DESC";
	/**
	 * @var string
	 */
	const INVALID_SUBSCRIPTION_STATUS = "INVALID_SUBSCRIPTION_STATUS";
	/**
	 * @var string
	 */
	const INVALID_SUMMARY_SRCH = "INVALID_SUMMARY_SRCH";
	/**
	 * @var string
	 */
	const INVALID_SUPERVISOR = "INVALID_SUPERVISOR";
	/**
	 * @var string
	 */
	const INVALID_TASK_ID = "INVALID_TASK_ID";
	/**
	 * @var string
	 */
	const INVALID_TAX_AMT = "INVALID_TAX_AMT";
	/**
	 * @var string
	 */
	const INVALID_TAX_CODE = "INVALID_TAX_CODE";
	/**
	 * @var string
	 */
	const INVALID_TAX_CODES = "INVALID_TAX_CODES";
	/**
	 * @var string
	 */
	const INVALID_TAX_CODE_FOR_SUB = "INVALID_TAX_CODE_FOR_SUB";
	/**
	 * @var string
	 */
	const INVALID_TAX_PMT = "INVALID_TAX_PMT";
	/**
	 * @var string
	 */
	const INVALID_TAX_VALUE = "INVALID_TAX_VALUE";
	/**
	 * @var string
	 */
	const INVALID_TIME_FORMAT = "INVALID_TIME_FORMAT";
	/**
	 * @var string
	 */
	const INVALID_TO_DATE = "INVALID_TO_DATE";
	/**
	 * @var string
	 */
	const INVALID_TRACKING_NUM = "INVALID_TRACKING_NUM";
	/**
	 * @var string
	 */
	const INVALID_TRANS = "INVALID_TRANS";
	/**
	 * @var string
	 */
	const INVALID_TRANSACTION_DATE = "INVALID_TRANSACTION_DATE";
	/**
	 * @var string
	 */
	const INVALID_TRANSACTIO_DATE = "INVALID_TRANSACTIO_DATE";
	/**
	 * @var string
	 */
	const INVALID_TRANS_AMT = "INVALID_TRANS_AMT";
	/**
	 * @var string
	 */
	const INVALID_TRANS_COMPNT = "INVALID_TRANS_COMPNT";
	/**
	 * @var string
	 */
	const INVALID_TRANS_ID = "INVALID_TRANS_ID";
	/**
	 * @var string
	 */
	const INVALID_TRANS_SUB_ACCT = "INVALID_TRANS_SUB_ACCT";
	/**
	 * @var string
	 */
	const INVALID_TRANS_SUB_CLASS = "INVALID_TRANS_SUB_CLASS";
	/**
	 * @var string
	 */
	const INVALID_TRANS_SUB_DEPT = "INVALID_TRANS_SUB_DEPT";
	/**
	 * @var string
	 */
	const INVALID_TRANS_SUB_ENTITY = "INVALID_TRANS_SUB_ENTITY";
	/**
	 * @var string
	 */
	const INVALID_TRANS_SUB_ITEM = "INVALID_TRANS_SUB_ITEM";
	/**
	 * @var string
	 */
	const INVALID_TRANS_SUB_LOC = "INVALID_TRANS_SUB_LOC";
	/**
	 * @var string
	 */
	const INVALID_TRANS_TYP = "INVALID_TRANS_TYP";
	/**
	 * @var string
	 */
	const INVALID_TRAN_ITEM_LINE = "INVALID_TRAN_ITEM_LINE";
	/**
	 * @var string
	 */
	const INVALID_TRIAL_TYP = "INVALID_TRIAL_TYP";
	/**
	 * @var string
	 */
	const INVALID_TYP = "INVALID_TYP";
	/**
	 * @var string
	 */
	const INVALID_UNIT_TYP = "INVALID_UNIT_TYP";
	/**
	 * @var string
	 */
	const INVALID_UNSUPRTD_RCRD_TYP = "INVALID_UNSUPRTD_RCRD_TYP";
	/**
	 * @var string
	 */
	const INVALID_UPS_ACCT = "INVALID_UPS_ACCT";
	/**
	 * @var string
	 */
	const INVALID_UPS_PACKG_WEIGHT = "INVALID_UPS_PACKG_WEIGHT";
	/**
	 * @var string
	 */
	const INVALID_UPS_VALUES = "INVALID_UPS_VALUES";
	/**
	 * @var string
	 */
	const INVALID_URL = "INVALID_URL";
	/**
	 * @var string
	 */
	const INVALID_URL_PARAM = "INVALID_URL_PARAM";
	/**
	 * @var string
	 */
	const INVALID_VALUE = "INVALID_VALUE";
	/**
	 * @var string
	 */
	const INVALID_VAT_AMOUNT = "INVALID_VAT_AMOUNT";
	/**
	 * @var string
	 */
	const INVALID_VAT_REGSTRTN_NUM = "INVALID_VAT_REGSTRTN_NUM";
	/**
	 * @var string
	 */
	const INVALID_VSOE_ALLOCTN = "INVALID_VSOE_ALLOCTN";
	/**
	 * @var string
	 */
	const INVALID_WEBSITE_SECTION = "INVALID_WEBSITE_SECTION";
	/**
	 * @var string
	 */
	const INVALID_WO = "INVALID_WO";
	/**
	 * @var string
	 */
	const INVALID_WORLDPAY_ID = "INVALID_WORLDPAY_ID";
	/**
	 * @var string
	 */
	const INVALID_WO_ITEM = "INVALID_WO_ITEM";
	/**
	 * @var string
	 */
	const INVALID_WS_VERSION = "INVALID_WS_VERSION";
	/**
	 * @var string
	 */
	const INVALID_YEAR = "INVALID_YEAR";
	/**
	 * @var string
	 */
	const INVALID_YEAR_FORMAT = "INVALID_YEAR_FORMAT";
	/**
	 * @var string
	 */
	const INVALID_ZIP_CODE = "INVALID_ZIP_CODE";
	/**
	 * @var string
	 */
	const INVALID_ZIP_FILE = "INVALID_ZIP_FILE";
	/**
	 * @var string
	 */
	const INVALID_ZIP_POST_CODE = "INVALID_ZIP_POST_CODE";
	/**
	 * @var string
	 */
	const INVENTORY_NUM_DISALLWD = "INVENTORY_NUM_DISALLWD";
	/**
	 * @var string
	 */
	const INVLAID_BOOLEAN_VALUE = "INVLAID_BOOLEAN_VALUE";
	/**
	 * @var string
	 */
	const IP_REQUEST = "IP_REQUEST";
	/**
	 * @var string
	 */
	const ISSUE_ASSIGNEE_DISALLWD = "ISSUE_ASSIGNEE_DISALLWD";
	/**
	 * @var string
	 */
	const ISSUE_PRODUCT_VERSION_MISMATCH = "ISSUE_PRODUCT_VERSION_MISMATCH";
	/**
	 * @var string
	 */
	const ISSUE_VERSION_BUILD_MISMATCH = "ISSUE_VERSION_BUILD_MISMATCH";
	/**
	 * @var string
	 */
	const ITEM_ACCT_REQD = "ITEM_ACCT_REQD";
	/**
	 * @var string
	 */
	const ITEM_COUNT_MISMATCH = "ITEM_COUNT_MISMATCH";
	/**
	 * @var string
	 */
	const ITEM_IS_UNAVAILABLE = "ITEM_IS_UNAVAILABLE";
	/**
	 * @var string
	 */
	const ITEM_NAME_MUST_BE_UNIQUE = "ITEM_NAME_MUST_BE_UNIQUE";
	/**
	 * @var string
	 */
	const ITEM_NOT_UNIQUE = "ITEM_NOT_UNIQUE";
	/**
	 * @var string
	 */
	const ITEM_PARAM_REQD_IN_URL = "ITEM_PARAM_REQD_IN_URL";
	/**
	 * @var string
	 */
	const ITEM_QTY_AMT_MISMATCH = "ITEM_QTY_AMT_MISMATCH";
	/**
	 * @var string
	 */
	const ITEM_TYP_REQS_UNIT = "ITEM_TYP_REQS_UNIT";
	/**
	 * @var string
	 */
	const JE_AMOUNTS_MUST_BALANCE = "JE_AMOUNTS_MUST_BALANCE";
	/**
	 * @var string
	 */
	const JE_LINE_MISSING_REQD_DATA = "JE_LINE_MISSING_REQD_DATA";
	/**
	 * @var string
	 */
	const JE_MAX_ONE_LINE = "JE_MAX_ONE_LINE";
	/**
	 * @var string
	 */
	const JE_REV_REC_IN_PROGRESS = "JE_REV_REC_IN_PROGRESS";
	/**
	 * @var string
	 */
	const JE_UNEXPECTED_ERROR = "JE_UNEXPECTED_ERROR";
	/**
	 * @var string
	 */
	const JOB_NOT_COMPLETE = "JOB_NOT_COMPLETE";
	/**
	 * @var string
	 */
	const JS_EXCEPTION = "JS_EXCEPTION";
	/**
	 * @var string
	 */
	const KEY_REQD = "KEY_REQD";
	/**
	 * @var string
	 */
	const KPI_SETUP_REQD = "KPI_SETUP_REQD";
	/**
	 * @var string
	 */
	const LABEL_REQD = "LABEL_REQD";
	/**
	 * @var string
	 */
	const LANGUAGE_SETUP_REQD = "LANGUAGE_SETUP_REQD";
	/**
	 * @var string
	 */
	const LINKED_ACCT_DONT_MATCH = "LINKED_ACCT_DONT_MATCH";
	/**
	 * @var string
	 */
	const LINKED_ENTITIES_DONT_MATCH = "LINKED_ENTITIES_DONT_MATCH";
	/**
	 * @var string
	 */
	const LINKED_ITEMS_DONT_MATCH = "LINKED_ITEMS_DONT_MATCH";
	/**
	 * @var string
	 */
	const LINK_LINES_TO_ONE_ORD = "LINK_LINES_TO_ONE_ORD";
	/**
	 * @var string
	 */
	const LIST_ID_REQD = "LIST_ID_REQD";
	/**
	 * @var string
	 */
	const LIST_KEY_REQD = "LIST_KEY_REQD";
	/**
	 * @var string
	 */
	const LOCATIONS_IN_USE = "LOCATIONS_IN_USE";
	/**
	 * @var string
	 */
	const LOCATIONS_SETUP_REQD = "LOCATIONS_SETUP_REQD";
	/**
	 * @var string
	 */
	const LOCATION_REQD = "LOCATION_REQD";
	/**
	 * @var string
	 */
	const LOCKED_DASHBOARD = "LOCKED_DASHBOARD";
	/**
	 * @var string
	 */
	const LOGIN_DISABLED = "LOGIN_DISABLED";
	/**
	 * @var string
	 */
	const LOGIN_DISABLED_PARTNER_CTR = "LOGIN_DISABLED_PARTNER_CTR";
	/**
	 * @var string
	 */
	const LOGIN_EMAIL_REQD = "LOGIN_EMAIL_REQD";
	/**
	 * @var string
	 */
	const LOGIN_NAME_AND_PSWD_REQD = "LOGIN_NAME_AND_PSWD_REQD";
	/**
	 * @var string
	 */
	const LOGIN_REQD = "LOGIN_REQD";
	/**
	 * @var string
	 */
	const LOST_UPSELL_CRITERIA = "LOST_UPSELL_CRITERIA";
	/**
	 * @var string
	 */
	const MACHN_LIST_KEY_NAMES_REQD = "MACHN_LIST_KEY_NAMES_REQD";
	/**
	 * @var string
	 */
	const MANDATORY_PRD_TYPE_REQD = "MANDATORY_PRD_TYPE_REQD";
	/**
	 * @var string
	 */
	const MASS_UPDATE_CRITERIA_LOST = "MASS_UPDATE_CRITERIA_LOST";
	/**
	 * @var string
	 */
	const MATCHING_CUR_SUB_REQD = "MATCHING_CUR_SUB_REQD";
	/**
	 * @var string
	 */
	const MATCHING_SERIAL_NUM_REQD = "MATCHING_SERIAL_NUM_REQD";
	/**
	 * @var string
	 */
	const MATRIX_INFO_TEMP_LOST = "MATRIX_INFO_TEMP_LOST";
	/**
	 * @var string
	 */
	const MATRIX_SUBITEM_NAME_TOO_LONG = "MATRIX_SUBITEM_NAME_TOO_LONG";
	/**
	 * @var string
	 */
	const MAX_16_LINES_ALLWD_PER_BILLPAY = "MAX_16_LINES_ALLWD_PER_BILLPAY";
	/**
	 * @var string
	 */
	const MAX_200_LINES_ALLWD_ON_TRANS = "MAX_200_LINES_ALLWD_ON_TRANS";
	/**
	 * @var string
	 */
	const MAX_BARCODE_PRINT_EXCEEDED = "MAX_BARCODE_PRINT_EXCEEDED";
	/**
	 * @var string
	 */
	const MAX_BULK_MERGE_RCRDS_EXCEEDED = "MAX_BULK_MERGE_RCRDS_EXCEEDED";
	/**
	 * @var string
	 */
	const MAX_EMAILS_EXCEEDED = "MAX_EMAILS_EXCEEDED";
	/**
	 * @var string
	 */
	const MAX_RCRDS_EXCEEDED = "MAX_RCRDS_EXCEEDED";
	/**
	 * @var string
	 */
	const MAX_VALUES_EXCEEDED = "MAX_VALUES_EXCEEDED";
	/**
	 * @var string
	 */
	const MEDIA_FILE_INVALID_JSCRIPT = "MEDIA_FILE_INVALID_JSCRIPT";
	/**
	 * @var string
	 */
	const MEDIA_NOT_FOUND = "MEDIA_NOT_FOUND";
	/**
	 * @var string
	 */
	const MEDIA_NOT_INITIALIZED = "MEDIA_NOT_INITIALIZED";
	/**
	 * @var string
	 */
	const MEMORIZED_TRANS_ERROR = "MEMORIZED_TRANS_ERROR";
	/**
	 * @var string
	 */
	const MERGE_OPERATION_DISALLWD = "MERGE_OPERATION_DISALLWD";
	/**
	 * @var string
	 */
	const MERGE_RCRD_REQD = "MERGE_RCRD_REQD";
	/**
	 * @var string
	 */
	const METAVANTE_ERROR = "METAVANTE_ERROR";
	/**
	 * @var string
	 */
	const METAVANTE_SECRET_ANSWER_REQD = "METAVANTE_SECRET_ANSWER_REQD";
	/**
	 * @var string
	 */
	const METAVANTE_SECRET_QESTION_REQD = "METAVANTE_SECRET_QESTION_REQD";
	/**
	 * @var string
	 */
	const METAVANTE_SETUP_REQD = "METAVANTE_SETUP_REQD";
	/**
	 * @var string
	 */
	const METAVANTE_TEMP_UNAVAILBL = "METAVANTE_TEMP_UNAVAILBL";
	/**
	 * @var string
	 */
	const MISMATCHED_CURRENCY = "MISMATCHED_CURRENCY";
	/**
	 * @var string
	 */
	const MISMATCHED_QTY_PRICING = "MISMATCHED_QTY_PRICING";
	/**
	 * @var string
	 */
	const MISMATCHED_SEARCH_PARENTHESIS = "MISMATCHED_SEARCH_PARENTHESIS";
	/**
	 * @var string
	 */
	const MISMATCH_EVENT_ISSUE_STATUS = "MISMATCH_EVENT_ISSUE_STATUS";
	/**
	 * @var string
	 */
	const MISMATCH_ISSUE_PRODUCT_VERSION = "MISMATCH_ISSUE_PRODUCT_VERSION";
	/**
	 * @var string
	 */
	const MISMATCH_SALES_CONTRIBUTION = "MISMATCH_SALES_CONTRIBUTION";
	/**
	 * @var string
	 */
	const MISSING_ACCT_PRD = "MISSING_ACCT_PRD";
	/**
	 * @var string
	 */
	const MISSING_CRNCY_EXCH_RATE = "MISSING_CRNCY_EXCH_RATE";
	/**
	 * @var string
	 */
	const MISSING_ENUM = "MISSING_ENUM";
	/**
	 * @var string
	 */
	const MISSING_REQD_FLD = "MISSING_REQD_FLD";
	/**
	 * @var string
	 */
	const MISSNG_ACCT_PRD = "MISSNG_ACCT_PRD";
	/**
	 * @var string
	 */
	const MISSNG_REV_REC_RCRD = "MISSNG_REV_REC_RCRD";
	/**
	 * @var string
	 */
	const MISSNG_SO_REV_REC_PARAMS = "MISSNG_SO_REV_REC_PARAMS";
	/**
	 * @var string
	 */
	const MISSNG_SO_START_END_DATES = "MISSNG_SO_START_END_DATES";
	/**
	 * @var string
	 */
	const MLI_REQD = "MLI_REQD";
	/**
	 * @var string
	 */
	const MLTPLE_TAX_LINES_DISALLWD = "MLTPLE_TAX_LINES_DISALLWD";
	/**
	 * @var string
	 */
	const MSNG_FIELD_OWRTE_MUST_BE_TRUE = "MSNG_FIELD_OWRTE_MUST_BE_TRUE";
	/**
	 * @var string
	 */
	const MST_UPDATE_ITEMS_THEN_RATES = "MST_UPDATE_ITEMS_THEN_RATES";
	/**
	 * @var string
	 */
	const MULTISELECT_TYPE_REQD = "MULTISELECT_TYPE_REQD";
	/**
	 * @var string
	 */
	const MULTI_ACCT_CANT_CHANGE_PSWD = "MULTI_ACCT_CANT_CHANGE_PSWD";
	/**
	 * @var string
	 */
	const MULTI_LOC_INVT_ERROR = "MULTI_LOC_INVT_ERROR";
	/**
	 * @var string
	 */
	const MULTI_PRIMARY_PARTNER_DISALLWD = "MULTI_PRIMARY_PARTNER_DISALLWD";
	/**
	 * @var string
	 */
	const MULTI_SHIP_ROUTES_REQD = "MULTI_SHIP_ROUTES_REQD";
	/**
	 * @var string
	 */
	const MUST_DEFINE_BASE_UNIT = "MUST_DEFINE_BASE_UNIT";
	/**
	 * @var string
	 */
	const MUST_RESUBMIT_RCRD = "MUST_RESUBMIT_RCRD";
	/**
	 * @var string
	 */
	const NAME_ALREADY_IN_USE = "NAME_ALREADY_IN_USE";
	/**
	 * @var string
	 */
	const NAME_REQD = "NAME_REQD";
	/**
	 * @var string
	 */
	const NAME_TYPE_FLDR_FIELDS_REQD = "NAME_TYPE_FLDR_FIELDS_REQD";
	/**
	 * @var string
	 */
	const NARROW_KEYWORD_SEARCH = "NARROW_KEYWORD_SEARCH";
	/**
	 * @var string
	 */
	const NEED_BILL_VARIANCE_ACCT = "NEED_BILL_VARIANCE_ACCT";
	/**
	 * @var string
	 */
	const NEGATIVE_PAYMENT_DISALLWD = "NEGATIVE_PAYMENT_DISALLWD";
	/**
	 * @var string
	 */
	const NEGATIVE_TAX_RATE_DISALLWD = "NEGATIVE_TAX_RATE_DISALLWD";
	/**
	 * @var string
	 */
	const NEW_CONNECTION_DISALLWD = "NEW_CONNECTION_DISALLWD";
	/**
	 * @var string
	 */
	const NEXUS_REQD = "NEXUS_REQD";
	/**
	 * @var string
	 */
	const NONMATCHING_EMAILS = "NONMATCHING_EMAILS";
	/**
	 * @var string
	 */
	const NONUNIQUE_INDEX_VALUE = "NONUNIQUE_INDEX_VALUE";
	/**
	 * @var string
	 */
	const NONZERO_AMT_REQD = "NONZERO_AMT_REQD";
	/**
	 * @var string
	 */
	const NONZERO_QTY_REQD = "NONZERO_QTY_REQD";
	/**
	 * @var string
	 */
	const NONZERO_WEIGHT_REQD = "NONZERO_WEIGHT_REQD";
	/**
	 * @var string
	 */
	const NON_ADMIN_CANNOT_INITIATE_LINK = "NON_ADMIN_CANNOT_INITIATE_LINK";
	/**
	 * @var string
	 */
	const NOT_AN_INVITEE = "NOT_AN_INVITEE";
	/**
	 * @var string
	 */
	const NOT_IN_INVT = "NOT_IN_INVT";
	/**
	 * @var string
	 */
	const NO_DATA_FOUND = "NO_DATA_FOUND";
	/**
	 * @var string
	 */
	const NO_EXPENSES_FOR_PRD = "NO_EXPENSES_FOR_PRD";
	/**
	 * @var string
	 */
	const NO_ITEMS_TO_PRINT = "NO_ITEMS_TO_PRINT";
	/**
	 * @var string
	 */
	const NO_MASS_UPDATES_RUNNING = "NO_MASS_UPDATES_RUNNING";
	/**
	 * @var string
	 */
	const NO_MTRX_ITEMS_TO_UPDATE = "NO_MTRX_ITEMS_TO_UPDATE";
	/**
	 * @var string
	 */
	const NO_ORD_SHPMNT = "NO_ORD_SHPMNT";
	/**
	 * @var string
	 */
	const NO_RCRDS_MATCH = "NO_RCRDS_MATCH";
	/**
	 * @var string
	 */
	const NO_RCRD_FOR_USER = "NO_RCRD_FOR_USER";
	/**
	 * @var string
	 */
	const NO_SCHDUL_APPLIED = "NO_SCHDUL_APPLIED";
	/**
	 * @var string
	 */
	const NO_UPSERT = "NO_UPSERT";
	/**
	 * @var string
	 */
	const NULL_CHECK_NUMBER = "NULL_CHECK_NUMBER";
	/**
	 * @var string
	 */
	const NUMERIC_CHECK_NUM_REQD = "NUMERIC_CHECK_NUM_REQD";
	/**
	 * @var string
	 */
	const NUMERIC_REF_NUM_REQD = "NUMERIC_REF_NUM_REQD";
	/**
	 * @var string
	 */
	const NUM_ITEMS_GRTR_THAN_QTY = "NUM_ITEMS_GRTR_THAN_QTY";
	/**
	 * @var string
	 */
	const NUM_ITEMS_NOT_EQUAL_TO_QTY = "NUM_ITEMS_NOT_EQUAL_TO_QTY";
	/**
	 * @var string
	 */
	const NUM_REQD_FOR_FIRST_LABEL = "NUM_REQD_FOR_FIRST_LABEL";
	/**
	 * @var string
	 */
	const OI_FEATURE_REQD = "OI_FEATURE_REQD";
	/**
	 * @var string
	 */
	const OI_PERMISSION_REQD = "OI_PERMISSION_REQD";
	/**
	 * @var string
	 */
	const ONE_ADMIN_REQD_PER_ACCT = "ONE_ADMIN_REQD_PER_ACCT";
	/**
	 * @var string
	 */
	const ONE_DIRECT_DEPOSIT_ACT_ALLWD = "ONE_DIRECT_DEPOSIT_ACT_ALLWD";
	/**
	 * @var string
	 */
	const ONE_EMPL_REQD = "ONE_EMPL_REQD";
	/**
	 * @var string
	 */
	const ONE_PAY_ITEM_PER_EMPL = "ONE_PAY_ITEM_PER_EMPL";
	/**
	 * @var string
	 */
	const ONE_POSITIVE_VALUE_REQD = "ONE_POSITIVE_VALUE_REQD";
	/**
	 * @var string
	 */
	const ONE_RCRD_REQD_FOR_MASS_UPDATE = "ONE_RCRD_REQD_FOR_MASS_UPDATE";
	/**
	 * @var string
	 */
	const ONE_ROLE_REQD = "ONE_ROLE_REQD";
	/**
	 * @var string
	 */
	const ONLINE_BANK_FILE_REQD = "ONLINE_BANK_FILE_REQD";
	/**
	 * @var string
	 */
	const ONLINE_BILL_PAY_DUP = "ONLINE_BILL_PAY_DUP";
	/**
	 * @var string
	 */
	const ONLINE_BILL_PAY_SETUP_REQD = "ONLINE_BILL_PAY_SETUP_REQD";
	/**
	 * @var string
	 */
	const ONLINE_FORM_DSNT_EXIST = "ONLINE_FORM_DSNT_EXIST";
	/**
	 * @var string
	 */
	const ONLINE_FORM_EMPTY = "ONLINE_FORM_EMPTY";
	/**
	 * @var string
	 */
	const ONLINE_FORM_ID_REQD = "ONLINE_FORM_ID_REQD";
	/**
	 * @var string
	 */
	const ONLINE_FORM_USER_ACCESS_ONLY = "ONLINE_FORM_USER_ACCESS_ONLY";
	/**
	 * @var string
	 */
	const ONLINE_ORD_FEATURE_DISABLED = "ONLINE_ORD_FEATURE_DISABLED";
	/**
	 * @var string
	 */
	const ONLY_ONE_CONTRIB_ITEM_REQD = "ONLY_ONE_CONTRIB_ITEM_REQD";
	/**
	 * @var string
	 */
	const ONLY_ONE_DEDCT_ITEM_REQD = "ONLY_ONE_DEDCT_ITEM_REQD";
	/**
	 * @var string
	 */
	const ONLY_ONE_DISTRIB_ALLWD = "ONLY_ONE_DISTRIB_ALLWD";
	/**
	 * @var string
	 */
	const ONLY_ONE_EARNING_ITEM_REQD = "ONLY_ONE_EARNING_ITEM_REQD";
	/**
	 * @var string
	 */
	const ONLY_ONE_LOT_NUM_ALLWD = "ONLY_ONE_LOT_NUM_ALLWD";
	/**
	 * @var string
	 */
	const ONLY_ONE_PREF_BIN_ALLWD = "ONLY_ONE_PREF_BIN_ALLWD";
	/**
	 * @var string
	 */
	const ONLY_ONE_UNIT_AS_BASE_UNIT = "ONLY_ONE_UNIT_AS_BASE_UNIT";
	/**
	 * @var string
	 */
	const ONLY_ONE_UPLOAD_ALLWD = "ONLY_ONE_UPLOAD_ALLWD";
	/**
	 * @var string
	 */
	const ONLY_ONE_WITHLD_ITEM_REQD = "ONLY_ONE_WITHLD_ITEM_REQD";
	/**
	 * @var string
	 */
	const OPENID_DOMAIN_IN_USE = "OPENID_DOMAIN_IN_USE";
	/**
	 * @var string
	 */
	const OPENID_NOT_ENABLED = "OPENID_NOT_ENABLED";
	/**
	 * @var string
	 */
	const OPRTN_UNAVAILBL_TO_GATEWAY = "OPRTN_UNAVAILBL_TO_GATEWAY";
	/**
	 * @var string
	 */
	const ORDER_DSNT_EXIST = "ORDER_DSNT_EXIST";
	/**
	 * @var string
	 */
	const ORD_ALREADY_APPRVD = "ORD_ALREADY_APPRVD";
	/**
	 * @var string
	 */
	const OTHER_PMT_AUTH_IN_PROGRESS = "OTHER_PMT_AUTH_IN_PROGRESS";
	/**
	 * @var string
	 */
	const OVERAGE_DISALLWD = "OVERAGE_DISALLWD";
	/**
	 * @var string
	 */
	const OVERLAPPING_PRDS_DISALLWD = "OVERLAPPING_PRDS_DISALLWD";
	/**
	 * @var string
	 */
	const OVER_FULFILL_DISALLWD = "OVER_FULFILL_DISALLWD";
	/**
	 * @var string
	 */
	const OVER_FULFILL_RECEIV_DISALLWD = "OVER_FULFILL_RECEIV_DISALLWD";
	/**
	 * @var string
	 */
	const OWNER_REQD = "OWNER_REQD";
	/**
	 * @var string
	 */
	const PACKAGE_WEIGHT_REQD = "PACKAGE_WEIGHT_REQD";
	/**
	 * @var string
	 */
	const PACKG_LEVEL_REF_DISALLWD = "PACKG_LEVEL_REF_DISALLWD";
	/**
	 * @var string
	 */
	const PACKG_VALUE_TOO_LARGE = "PACKG_VALUE_TOO_LARGE";
	/**
	 * @var string
	 */
	const PARENT_CANT_ITSELF_BE_MEMBER = "PARENT_CANT_ITSELF_BE_MEMBER";
	/**
	 * @var string
	 */
	const PARENT_MUST_BE_MATRIX_ITEM = "PARENT_MUST_BE_MATRIX_ITEM";
	/**
	 * @var string
	 */
	const PARENT_REQD = "PARENT_REQD";
	/**
	 * @var string
	 */
	const PARSING_ERROR = "PARSING_ERROR";
	/**
	 * @var string
	 */
	const PARTIAL_FULFILL_RCEIV_DISALLWD = "PARTIAL_FULFILL_RCEIV_DISALLWD";
	/**
	 * @var string
	 */
	const PARTNER_ACCESS_DENIED = "PARTNER_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const PARTNER_ACCT_NOT_LINKED = "PARTNER_ACCT_NOT_LINKED";
	/**
	 * @var string
	 */
	const PARTNER_CODE_ALREADY_USED = "PARTNER_CODE_ALREADY_USED";
	/**
	 * @var string
	 */
	const PAYCHECK_ALREADY_PAID = "PAYCHECK_ALREADY_PAID";
	/**
	 * @var string
	 */
	const PAYCHECK_IN_USE = "PAYCHECK_IN_USE";
	/**
	 * @var string
	 */
	const PAYEE_REQD_FOR_PMT = "PAYEE_REQD_FOR_PMT";
	/**
	 * @var string
	 */
	const PAYPAL_FUND_SOURCE_REQD = "PAYPAL_FUND_SOURCE_REQD";
	/**
	 * @var string
	 */
	const PAYPAL_INVALID_PMT_METHOD = "PAYPAL_INVALID_PMT_METHOD";
	/**
	 * @var string
	 */
	const PAYPAL_PMT_NOTIFICATION = "PAYPAL_PMT_NOTIFICATION";
	/**
	 * @var string
	 */
	const PAYPAL_SETUP_REQD = "PAYPAL_SETUP_REQD";
	/**
	 * @var string
	 */
	const PAYROLL_COMMITTED = "PAYROLL_COMMITTED";
	/**
	 * @var string
	 */
	const PAYROLL_EXPENSE_ACCT_REQD = "PAYROLL_EXPENSE_ACCT_REQD";
	/**
	 * @var string
	 */
	const PAYROLL_FEATURE_DISABLED = "PAYROLL_FEATURE_DISABLED";
	/**
	 * @var string
	 */
	const PAYROLL_FEATURE_UNAVAILABLE = "PAYROLL_FEATURE_UNAVAILABLE";
	/**
	 * @var string
	 */
	const PAYROLL_FUND_ACCT_REQD = "PAYROLL_FUND_ACCT_REQD";
	/**
	 * @var string
	 */
	const PAYROLL_IN_PROCESS = "PAYROLL_IN_PROCESS";
	/**
	 * @var string
	 */
	const PAYROLL_ITEM_DELETE_DISALLWD = "PAYROLL_ITEM_DELETE_DISALLWD";
	/**
	 * @var string
	 */
	const PAYROLL_LIABILITY_ACCT_REQD = "PAYROLL_LIABILITY_ACCT_REQD";
	/**
	 * @var string
	 */
	const PAYROLL_MAINTENANCE = "PAYROLL_MAINTENANCE";
	/**
	 * @var string
	 */
	const PAYROLL_SETUP_REQD = "PAYROLL_SETUP_REQD";
	/**
	 * @var string
	 */
	const PAYROLL_UPDATE_REQD = "PAYROLL_UPDATE_REQD";
	/**
	 * @var string
	 */
	const PAY_HOLD_ON_SO = "PAY_HOLD_ON_SO";
	/**
	 * @var string
	 */
	const PERMISSION_VIOLATION = "PERMISSION_VIOLATION";
	/**
	 * @var string
	 */
	const PHONE_NUM_REQD = "PHONE_NUM_REQD";
	/**
	 * @var string
	 */
	const PIN_DEBIT_TRANS_DISALLWD = "PIN_DEBIT_TRANS_DISALLWD";
	/**
	 * @var string
	 */
	const PLAN_IN_USE = "PLAN_IN_USE";
	/**
	 * @var string
	 */
	const PLAN_OVERLAP_DISALLWD = "PLAN_OVERLAP_DISALLWD";
	/**
	 * @var string
	 */
	const PMT_ALREADY_APPRVD = "PMT_ALREADY_APPRVD";
	/**
	 * @var string
	 */
	const PMT_ALREADY_EXISTS = "PMT_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const PMT_ALREADY_SBMTD = "PMT_ALREADY_SBMTD";
	/**
	 * @var string
	 */
	const PMT_EDIT_DISALLWD = "PMT_EDIT_DISALLWD";
	/**
	 * @var string
	 */
	const POSITIVE_BIN_QTY_REQD = "POSITIVE_BIN_QTY_REQD";
	/**
	 * @var string
	 */
	const POSITIVE_QTY_REQD = "POSITIVE_QTY_REQD";
	/**
	 * @var string
	 */
	const POSITIVE_UNITCOST_REQD = "POSITIVE_UNITCOST_REQD";
	/**
	 * @var string
	 */
	const POSTING_DISCOUNT_DISALLWD = "POSTING_DISCOUNT_DISALLWD";
	/**
	 * @var string
	 */
	const POSTING_PRD_SETUP_REQD = "POSTING_PRD_SETUP_REQD";
	/**
	 * @var string
	 */
	const PRDS_DISALLWD_NAMES_NOT_UNIQUE = "PRDS_DISALLWD_NAMES_NOT_UNIQUE";
	/**
	 * @var string
	 */
	const PRD_SETUP_REQD = "PRD_SETUP_REQD";
	/**
	 * @var string
	 */
	const PREFERRED_TAX_AGENCY_REQD = "PREFERRED_TAX_AGENCY_REQD";
	/**
	 * @var string
	 */
	const PREF_VENDOR_COST_REQD = "PREF_VENDOR_COST_REQD";
	/**
	 * @var string
	 */
	const PREF_VENDOR_REQD = "PREF_VENDOR_REQD";
	/**
	 * @var string
	 */
	const PRIVATE_RCRD_ACCESS_DISALLWD = "PRIVATE_RCRD_ACCESS_DISALLWD";
	/**
	 * @var string
	 */
	const PRIVATE_STATUS_CHNG_DISALLWD = "PRIVATE_STATUS_CHNG_DISALLWD";
	/**
	 * @var string
	 */
	const PRODUCT_MODULE_MISMATCH = "PRODUCT_MODULE_MISMATCH";
	/**
	 * @var string
	 */
	const PSWD_EXPIRED = "PSWD_EXPIRED";
	/**
	 * @var string
	 */
	const PSWD_REQD = "PSWD_REQD";
	/**
	 * @var string
	 */
	const PWSDS_DONT_MATCH = "PWSDS_DONT_MATCH";
	/**
	 * @var string
	 */
	const QTY_EXCEEDED_QTY_BUCKETS = "QTY_EXCEEDED_QTY_BUCKETS";
	/**
	 * @var string
	 */
	const QTY_REQD = "QTY_REQD";
	/**
	 * @var string
	 */
	const RATE_REQUEST_SHPMNT_REQD = "RATE_REQUEST_SHPMNT_REQD";
	/**
	 * @var string
	 */
	const RATE_SRVC_UNAVAILBL = "RATE_SRVC_UNAVAILBL";
	/**
	 * @var string
	 */
	const RCRD_DELETED_SINCE_RETRIEVED = "RCRD_DELETED_SINCE_RETRIEVED";
	/**
	 * @var string
	 */
	const RCRD_DSNT_EXIST = "RCRD_DSNT_EXIST";
	/**
	 * @var string
	 */
	const RCRD_EDITED_SINCE_RETRIEVED = "RCRD_EDITED_SINCE_RETRIEVED";
	/**
	 * @var string
	 */
	const RCRD_HAS_BEEN_CHANGED = "RCRD_HAS_BEEN_CHANGED";
	/**
	 * @var string
	 */
	const RCRD_ID_NOT_INT = "RCRD_ID_NOT_INT";
	/**
	 * @var string
	 */
	const RCRD_LOCKED_BY_WF = "RCRD_LOCKED_BY_WF";
	/**
	 * @var string
	 */
	const RCRD_NOT_FOUND = "RCRD_NOT_FOUND";
	/**
	 * @var string
	 */
	const RCRD_PREVSLY_DELETED = "RCRD_PREVSLY_DELETED";
	/**
	 * @var string
	 */
	const RCRD_REF_RCRD_TYP_MISMATCH = "RCRD_REF_RCRD_TYP_MISMATCH";
	/**
	 * @var string
	 */
	const RCRD_SUB_MISMATCH_WITH_CLASS = "RCRD_SUB_MISMATCH_WITH_CLASS";
	/**
	 * @var string
	 */
	const RCRD_TYPE_REQD = "RCRD_TYPE_REQD";
	/**
	 * @var string
	 */
	const RCRD_UNEDITABLE = "RCRD_UNEDITABLE";
	/**
	 * @var string
	 */
	const REACHED_LIST_END = "REACHED_LIST_END";
	/**
	 * @var string
	 */
	const REACHED_LIST_START = "REACHED_LIST_START";
	/**
	 * @var string
	 */
	const RECALCING_PLAN_SCHDUL = "RECALCING_PLAN_SCHDUL";
	/**
	 * @var string
	 */
	const RECURSV_REF_DISALLWD = "RECURSV_REF_DISALLWD";
	/**
	 * @var string
	 */
	const RECUR_EVENT_DISALLWD = "RECUR_EVENT_DISALLWD";
	/**
	 * @var string
	 */
	const REC_TYP_REQD = "REC_TYP_REQD";
	/**
	 * @var string
	 */
	const REPORT_EXPIRED = "REPORT_EXPIRED";
	/**
	 * @var string
	 */
	const REQD_FORM_TAG_MISSING = "REQD_FORM_TAG_MISSING";
	/**
	 * @var string
	 */
	const REQD_LOC_FIELDS_MISSING = "REQD_LOC_FIELDS_MISSING";
	/**
	 * @var string
	 */
	const REQD_SUB_FIELDS_MISSING = "REQD_SUB_FIELDS_MISSING";
	/**
	 * @var string
	 */
	const REQUEST_PARAM_REQD = "REQUEST_PARAM_REQD";
	/**
	 * @var string
	 */
	const REVERSAL_DATE_WARNING = "REVERSAL_DATE_WARNING";
	/**
	 * @var string
	 */
	const REV_REC_DATE_REQD = "REV_REC_DATE_REQD";
	/**
	 * @var string
	 */
	const REV_REC_TMPLT_DATA_MISSING = "REV_REC_TMPLT_DATA_MISSING";
	/**
	 * @var string
	 */
	const REV_REC_UPDATE_DISALLWD = "REV_REC_UPDATE_DISALLWD";
	/**
	 * @var string
	 */
	const ROLE_REQD = "ROLE_REQD";
	/**
	 * @var string
	 */
	const ROLE_REQUIRED = "ROLE_REQUIRED";
	/**
	 * @var string
	 */
	const ROUNDING_DIFF_TOO_BIG = "ROUNDING_DIFF_TOO_BIG";
	/**
	 * @var string
	 */
	const ROUNDING_ERROR = "ROUNDING_ERROR";
	/**
	 * @var string
	 */
	const ROUTING_NUM_REQD = "ROUTING_NUM_REQD";
	/**
	 * @var string
	 */
	const SALES_DISCOUNT_ACCT_REQD = "SALES_DISCOUNT_ACCT_REQD";
	/**
	 * @var string
	 */
	const SAME_ACCT_TYP_REQD_FOR_PARENT = "SAME_ACCT_TYP_REQD_FOR_PARENT";
	/**
	 * @var string
	 */
	const SAVED_SRCH_EMAIL_ERROR = "SAVED_SRCH_EMAIL_ERROR";
	/**
	 * @var string
	 */
	const SCHDUL_EDIT_DISALLWD = "SCHDUL_EDIT_DISALLWD";
	/**
	 * @var string
	 */
	const SCHEDULED_REPORT_ERROR = "SCHEDULED_REPORT_ERROR";
	/**
	 * @var string
	 */
	const SEARCH_DATE_FILTER_REQD = "SEARCH_DATE_FILTER_REQD";
	/**
	 * @var string
	 */
	const SEARCH_ERROR = "SEARCH_ERROR";
	/**
	 * @var string
	 */
	const SEARCH_INTEGER_REQD = "SEARCH_INTEGER_REQD";
	/**
	 * @var string
	 */
	const SEARCH_TIMED_OUT = "SEARCH_TIMED_OUT";
	/**
	 * @var string
	 */
	const SECURE_TRANS_REQD_ON_CHECKOUT = "SECURE_TRANS_REQD_ON_CHECKOUT";
	/**
	 * @var string
	 */
	const SERIAL_NUM_MATCH_MULTI_ITEMS = "SERIAL_NUM_MATCH_MULTI_ITEMS";
	/**
	 * @var string
	 */
	const SESSION_TERMD_2ND_LOGIN_DECTD = "SESSION_TERMD_2ND_LOGIN_DECTD";
	/**
	 * @var string
	 */
	const SESSION_TIMED_OUT = "SESSION_TIMED_OUT";
	/**
	 * @var string
	 */
	const SETUP_METER_REQD = "SETUP_METER_REQD";
	/**
	 * @var string
	 */
	const SET_SHIPPING_PICKUP_TYP = "SET_SHIPPING_PICKUP_TYP";
	/**
	 * @var string
	 */
	const SHIPFROM_ADDRESS_NOT_SET = "SHIPFROM_ADDRESS_NOT_SET";
	/**
	 * @var string
	 */
	const SHIPMNT_INSURANCE_NOT_AVAILABLE = "SHIPMNT_INSURANCE_NOT_AVAILABLE";
	/**
	 * @var string
	 */
	const SHIP_ADDR_REQD = "SHIP_ADDR_REQD";
	/**
	 * @var string
	 */
	const SHIP_MANIFEST_ALREADY_PRCSSD = "SHIP_MANIFEST_ALREADY_PRCSSD";
	/**
	 * @var string
	 */
	const SHIP_MANIFEST_ERROR = "SHIP_MANIFEST_ERROR";
	/**
	 * @var string
	 */
	const SHIP_SETUP_REQD = "SHIP_SETUP_REQD";
	/**
	 * @var string
	 */
	const SHIP_TALBE_UNBALNCD = "SHIP_TALBE_UNBALNCD";
	/**
	 * @var string
	 */
	const SHIP_USER_ERROR = "SHIP_USER_ERROR";
	/**
	 * @var string
	 */
	const SINGLE_VALUE_REQD = "SINGLE_VALUE_REQD";
	/**
	 * @var string
	 */
	const SITEMAP_GEN_ERROR = "SITEMAP_GEN_ERROR";
	/**
	 * @var string
	 */
	const SITE_DOMAIN_NAME_REQD = "SITE_DOMAIN_NAME_REQD";
	/**
	 * @var string
	 */
	const SITE_TAG_ALREADY_EXISTS = "SITE_TAG_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const SO_HAS_CHILD_TRANS = "SO_HAS_CHILD_TRANS";
	/**
	 * @var string
	 */
	const SO_LINE_HAS_PO = "SO_LINE_HAS_PO";
	/**
	 * @var string
	 */
	const SRVC_UNAVAILBL_FOR_LOC = "SRVC_UNAVAILBL_FOR_LOC";
	/**
	 * @var string
	 */
	const SSS_AUTHOR_MUST_BE_EMPLOYEE = "SSS_AUTHOR_MUST_BE_EMPLOYEE";
	/**
	 * @var string
	 */
	const SSS_CONNECTION_TIME_OUT = "SSS_CONNECTION_TIME_OUT";
	/**
	 * @var string
	 */
	const SSS_DEBUG_DISALLWD = "SSS_DEBUG_DISALLWD";
	/**
	 * @var string
	 */
	const SSS_DRIP_EMAIL_RAN_OUT_OF_COUPON_CODES = "SSS_DRIP_EMAIL_RAN_OUT_OF_COUPON_CODES";
	/**
	 * @var string
	 */
	const SSS_DUP_DRIP_EMAIL = "SSS_DUP_DRIP_EMAIL";
	/**
	 * @var string
	 */
	const SSS_FILE_SIZE_EXCEEDED = "SSS_FILE_SIZE_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_INSTRUCTION_COUNT_EXCEEDED = "SSS_INSTRUCTION_COUNT_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_INVALID_ATTACH_RECORD_TYPE = "SSS_INVALID_ATTACH_RECORD_TYPE";
	/**
	 * @var string
	 */
	const SSS_INVALID_BCC_EMAIL = "SSS_INVALID_BCC_EMAIL";
	/**
	 * @var string
	 */
	const SSS_INVALID_CC_EMAIL = "SSS_INVALID_CC_EMAIL";
	/**
	 * @var string
	 */
	const SSS_INVALID_CMPGN_EVENT_ID = "SSS_INVALID_CMPGN_EVENT_ID";
	/**
	 * @var string
	 */
	const SSS_INVALID_EMAIL_TEMPLATE = "SSS_INVALID_EMAIL_TEMPLATE";
	/**
	 * @var string
	 */
	const SSS_INVALID_FORM_ELEMENT_NAME = "SSS_INVALID_FORM_ELEMENT_NAME";
	/**
	 * @var string
	 */
	const SSS_INVALID_GSO_FLTR_OPRTOR = "SSS_INVALID_GSO_FLTR_OPRTOR";
	/**
	 * @var string
	 */
	const SSS_INVALID_HEADER = "SSS_INVALID_HEADER";
	/**
	 * @var string
	 */
	const SSS_INVALID_HOST_CERT = "SSS_INVALID_HOST_CERT";
	/**
	 * @var string
	 */
	const SSS_INVALID_LIST_COLUMN_NAME = "SSS_INVALID_LIST_COLUMN_NAME";
	/**
	 * @var string
	 */
	const SSS_INVALID_LOCK_WAIT_TIME = "SSS_INVALID_LOCK_WAIT_TIME";
	/**
	 * @var string
	 */
	const SSS_INVALID_LOG_TYPE = "SSS_INVALID_LOG_TYPE";
	/**
	 * @var string
	 */
	const SSS_INVALID_PORTLET_INTERVAL = "SSS_INVALID_PORTLET_INTERVAL";
	/**
	 * @var string
	 */
	const SSS_INVALID_SCRIPTLET_ID = "SSS_INVALID_SCRIPTLET_ID";
	/**
	 * @var string
	 */
	const SSS_INVALID_SRCH_COL = "SSS_INVALID_SRCH_COL";
	/**
	 * @var string
	 */
	const SSS_INVALID_SRCH_COLUMN_JOIN = "SSS_INVALID_SRCH_COLUMN_JOIN";
	/**
	 * @var string
	 */
	const SSS_INVALID_SRCH_COLUMN_SUM = "SSS_INVALID_SRCH_COLUMN_SUM";
	/**
	 * @var string
	 */
	const SSS_INVALID_SRCH_FILTER = "SSS_INVALID_SRCH_FILTER";
	/**
	 * @var string
	 */
	const SSS_INVALID_SRCH_FILTER_JOIN = "SSS_INVALID_SRCH_FILTER_JOIN";
	/**
	 * @var string
	 */
	const SSS_INVALID_SRCH_OPERATOR = "SSS_INVALID_SRCH_OPERATOR";
	/**
	 * @var string
	 */
	const SSS_INVALID_SUBLIST_OPERATION = "SSS_INVALID_SUBLIST_OPERATION";
	/**
	 * @var string
	 */
	const SSS_INVALID_SUBMIT_OPTION = "SSS_INVALID_SUBMIT_OPTION";
	/**
	 * @var string
	 */
	const SSS_INVALID_TYPE_ARG = "SSS_INVALID_TYPE_ARG";
	/**
	 * @var string
	 */
	const SSS_INVALID_UI_OBJECT_TYPE = "SSS_INVALID_UI_OBJECT_TYPE";
	/**
	 * @var string
	 */
	const SSS_INVALID_URL = "SSS_INVALID_URL";
	/**
	 * @var string
	 */
	const SSS_INVALID_URL_CATEGORY = "SSS_INVALID_URL_CATEGORY";
	/**
	 * @var string
	 */
	const SSS_INVALID_WF_RCRD_TYPE = "SSS_INVALID_WF_RCRD_TYPE";
	/**
	 * @var string
	 */
	const SSS_MEMORY_USAGE_EXCEEDED = "SSS_MEMORY_USAGE_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_METHOD_NOT_IMPLEMENTED = "SSS_METHOD_NOT_IMPLEMENTED";
	/**
	 * @var string
	 */
	const SSS_MISSING_REQD_ARGUMENT = "SSS_MISSING_REQD_ARGUMENT";
	/**
	 * @var string
	 */
	const SSS_QUEUE_LIMIT_EXCEEDED = "SSS_QUEUE_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_RECORD_TYPE_MISMATCH = "SSS_RECORD_TYPE_MISMATCH";
	/**
	 * @var string
	 */
	const SSS_REQUEST_LIMIT_EXCEEDED = "SSS_REQUEST_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_REQUEST_TIME_EXCEEDED = "SSS_REQUEST_TIME_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_SCRIPT_DESERIALIZATION_FAILURE = "SSS_SCRIPT_DESERIALIZATION_FAILURE";
	/**
	 * @var string
	 */
	const SSS_SSO_CONFIG_REQD = "SSS_SSO_CONFIG_REQD";
	/**
	 * @var string
	 */
	const SSS_STACK_FRAME_DEPTH_EXCEEDED = "SSS_STACK_FRAME_DEPTH_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_TIME_LIMIT_EXCEEDED = "SSS_TIME_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_TRANSACTION_REQD = "SSS_TRANSACTION_REQD";
	/**
	 * @var string
	 */
	const SSS_TRANS_IN_PROGRESS = "SSS_TRANS_IN_PROGRESS";
	/**
	 * @var string
	 */
	const SSS_UNKNOWN_HOST = "SSS_UNKNOWN_HOST";
	/**
	 * @var string
	 */
	const SSS_USAGE_LIMIT_EXCEEDED = "SSS_USAGE_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const SSS_XML_DOM_EXCEPTION = "SSS_XML_DOM_EXCEPTION";
	/**
	 * @var string
	 */
	const START_DATE_AFTER_END_DATE = "START_DATE_AFTER_END_DATE";
	/**
	 * @var string
	 */
	const START_DATE_REQD = "START_DATE_REQD";
	/**
	 * @var string
	 */
	const STATE_ALREADY_EXISTS = "STATE_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const STATE_REQD = "STATE_REQD";
	/**
	 * @var string
	 */
	const STATUS_ASSIGNEE_REQD = "STATUS_ASSIGNEE_REQD";
	/**
	 * @var string
	 */
	const STORAGE_LIMIT_EXCEEDED = "STORAGE_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const STORE_ALIAS_UNAVAILABLE = "STORE_ALIAS_UNAVAILABLE";
	/**
	 * @var string
	 */
	const STORE_DOMAIN_UNAVAILABLE = "STORE_DOMAIN_UNAVAILABLE";
	/**
	 * @var string
	 */
	const SUBITEM_REQD = "SUBITEM_REQD";
	/**
	 * @var string
	 */
	const SUBSIDIARY_MISMATCH = "SUBSIDIARY_MISMATCH";
	/**
	 * @var string
	 */
	const SUB_MISMATCH = "SUB_MISMATCH";
	/**
	 * @var string
	 */
	const SUB_RESTRICT_VIEW_REQD = "SUB_RESTRICT_VIEW_REQD";
	/**
	 * @var string
	 */
	const SUB_TAX_AGENCY_REQD = "SUB_TAX_AGENCY_REQD";
	/**
	 * @var string
	 */
	const SUCCESS_TRANS = "SUCCESS_TRANS";
	/**
	 * @var string
	 */
	const SUPRT_CNTR_LOGIN_ERROR = "SUPRT_CNTR_LOGIN_ERROR";
	/**
	 * @var string
	 */
	const TAGATA_ALREADY_ENDORSED = "TAGATA_ALREADY_ENDORSED";
	/**
	 * @var string
	 */
	const TAG_ALREADY_EXISTS = "TAG_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const TAG_SUBSTITUTN_ERROR = "TAG_SUBSTITUTN_ERROR";
	/**
	 * @var string
	 */
	const TAX_ACCT_SETUP_REQD = "TAX_ACCT_SETUP_REQD";
	/**
	 * @var string
	 */
	const TAX_CODES_SETUP_PROBLEM = "TAX_CODES_SETUP_PROBLEM";
	/**
	 * @var string
	 */
	const TAX_CODES_SETUP_REQD = "TAX_CODES_SETUP_REQD";
	/**
	 * @var string
	 */
	const TAX_CODE_REQD = "TAX_CODE_REQD";
	/**
	 * @var string
	 */
	const TAX_GROUP_SETUP_REQD = "TAX_GROUP_SETUP_REQD";
	/**
	 * @var string
	 */
	const TAX_PRD_REQD = "TAX_PRD_REQD";
	/**
	 * @var string
	 */
	const TAX_SETUP_REQD = "TAX_SETUP_REQD";
	/**
	 * @var string
	 */
	const TEMPLATE_NOT_FOUND = "TEMPLATE_NOT_FOUND";
	/**
	 * @var string
	 */
	const THIRD_PARTY_BILLING_ACCT_REQD = "THIRD_PARTY_BILLING_ACCT_REQD";
	/**
	 * @var string
	 */
	const TICKET_NOT_LOCATED = "TICKET_NOT_LOCATED";
	/**
	 * @var string
	 */
	const TIMEOUT_THE_RECORD_DOESNT_EXIST_ANYMORE = "TIMEOUT_THE_RECORD_DOESNT_EXIST_ANYMORE";
	/**
	 * @var string
	 */
	const TIME_ENTRY_DISALLWD = "TIME_ENTRY_DISALLWD";
	/**
	 * @var string
	 */
	const TOPIC_REQD = "TOPIC_REQD";
	/**
	 * @var string
	 */
	const TRANSACTION_DELETED = "TRANSACTION_DELETED";
	/**
	 * @var string
	 */
	const TRANSORD_SHIP_REC_MISMATCH = "TRANSORD_SHIP_REC_MISMATCH";
	/**
	 * @var string
	 */
	const TRANS_ALREADY_REFUNDED = "TRANS_ALREADY_REFUNDED";
	/**
	 * @var string
	 */
	const TRANS_ALREADY_SETTLED = "TRANS_ALREADY_SETTLED";
	/**
	 * @var string
	 */
	const TRANS_ALREADY_VOIDED = "TRANS_ALREADY_VOIDED";
	/**
	 * @var string
	 */
	const TRANS_AMTS_UNBALNCD = "TRANS_AMTS_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_APPLIED_AMTS_UNBALNCD = "TRANS_APPLIED_AMTS_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_CLASS_UNBALNCD = "TRANS_CLASS_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_DEPT_UNBALNCD = "TRANS_DEPT_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_DOES_NOT_EXIST = "TRANS_DOES_NOT_EXIST";
	/**
	 * @var string
	 */
	const TRANS_DSNT_EXIST = "TRANS_DSNT_EXIST";
	/**
	 * @var string
	 */
	const TRANS_EDIT_DISALLWD = "TRANS_EDIT_DISALLWD";
	/**
	 * @var string
	 */
	const TRANS_FORGN_CRNCY_MISMATCH = "TRANS_FORGN_CRNCY_MISMATCH";
	/**
	 * @var string
	 */
	const TRANS_FORGN_CUR_UNBALNCD = "TRANS_FORGN_CUR_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_IN_USE = "TRANS_IN_USE";
	/**
	 * @var string
	 */
	const TRANS_LINES_UNBALNCD = "TRANS_LINES_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_LINE_AND_PMT_UNBALNCD = "TRANS_LINE_AND_PMT_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_LOC_UNBALNCD = "TRANS_LOC_UNBALNCD";
	/**
	 * @var string
	 */
	const TRANS_NOT_CLEANED = "TRANS_NOT_CLEANED";
	/**
	 * @var string
	 */
	const TRANS_NOT_COMPLETED = "TRANS_NOT_COMPLETED";
	/**
	 * @var string
	 */
	const TRANS_PRCSSNG_ERROR = "TRANS_PRCSSNG_ERROR";
	/**
	 * @var string
	 */
	const TRANS_UNBALNCD = "TRANS_UNBALNCD";
	/**
	 * @var string
	 */
	const TRAN_DATE_REQD = "TRAN_DATE_REQD";
	/**
	 * @var string
	 */
	const TRAN_LINE_FX_AMT_REQD = "TRAN_LINE_FX_AMT_REQD";
	/**
	 * @var string
	 */
	const TRAN_LINK_FX_AMT_REQD = "TRAN_LINK_FX_AMT_REQD";
	/**
	 * @var string
	 */
	const TRAN_PERIOD_CLOSED = "TRAN_PERIOD_CLOSED";
	/**
	 * @var string
	 */
	const TRAN_PRD_CLOSED = "TRAN_PRD_CLOSED";
	/**
	 * @var string
	 */
	const TWO_FA_AUTH_REQD = "TWO_FA_AUTH_REQD";
	/**
	 * @var string
	 */
	const TWO_FA_REQD = "TWO_FA_REQD";
	/**
	 * @var string
	 */
	const UNABLE_TO_PRINT_CHECKS = "UNABLE_TO_PRINT_CHECKS";
	/**
	 * @var string
	 */
	const UNABLE_TO_PRINT_DEPOSITS = "UNABLE_TO_PRINT_DEPOSITS";
	/**
	 * @var string
	 */
	const UNAUTH_CAMPAIGN_RSPNS_RQST = "UNAUTH_CAMPAIGN_RSPNS_RQST";
	/**
	 * @var string
	 */
	const UNAUTH_UNSUBSCRIBE_RQST = "UNAUTH_UNSUBSCRIBE_RQST";
	/**
	 * @var string
	 */
	const UNDEFINED_ACCTNG_PRD = "UNDEFINED_ACCTNG_PRD";
	/**
	 * @var string
	 */
	const UNDEFINED_CSTM_FIELD = "UNDEFINED_CSTM_FIELD";
	/**
	 * @var string
	 */
	const UNDEFINED_TAX_PRD = "UNDEFINED_TAX_PRD";
	/**
	 * @var string
	 */
	const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";
	/**
	 * @var string
	 */
	const UNIQUE_CONTACT_NAME_REQD = "UNIQUE_CONTACT_NAME_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_CUST_EMAIL_REQD = "UNIQUE_CUST_EMAIL_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_CUST_ID_REQD = "UNIQUE_CUST_ID_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_ENTITY_NAME_REQD = "UNIQUE_ENTITY_NAME_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_GROUPID_REQD = "UNIQUE_GROUPID_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_PARTNER_CODE_REQD = "UNIQUE_PARTNER_CODE_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_QTY_REQD = "UNIQUE_QTY_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_RCRD_ID_REQD = "UNIQUE_RCRD_ID_REQD";
	/**
	 * @var string
	 */
	const UNIQUE_SOLUTION_CODE_REQD = "UNIQUE_SOLUTION_CODE_REQD";
	/**
	 * @var string
	 */
	const UNITS_TYP_IN_USE = "UNITS_TYP_IN_USE";
	/**
	 * @var string
	 */
	const UNKNOWN_CARRIER = "UNKNOWN_CARRIER";
	/**
	 * @var string
	 */
	const UNKNOWN_RCRD_TYPE = "UNKNOWN_RCRD_TYPE";
	/**
	 * @var string
	 */
	const UNKNOWN_SCRIPT_TYP = "UNKNOWN_SCRIPT_TYP";
	/**
	 * @var string
	 */
	const UNKNWN_ALLOCTN_SCHDUL_FREQ_TYP = "UNKNWN_ALLOCTN_SCHDUL_FREQ_TYP";
	/**
	 * @var string
	 */
	const UNKNWN_EMAIL_AUTHOR = "UNKNWN_EMAIL_AUTHOR";
	/**
	 * @var string
	 */
	const UNKNWN_EXCHANGE_RATE = "UNKNWN_EXCHANGE_RATE";
	/**
	 * @var string
	 */
	const UNRECOGNIZED_METHOD = "UNRECOGNIZED_METHOD";
	/**
	 * @var string
	 */
	const UNSUBSCRIBE_REQD = "UNSUBSCRIBE_REQD";
	/**
	 * @var string
	 */
	const UNSUPPORTED_METHOD = "UNSUPPORTED_METHOD";
	/**
	 * @var string
	 */
	const UNSUPPORTED_WS_VERSION = "UNSUPPORTED_WS_VERSION";
	/**
	 * @var string
	 */
	const UNSUPRTD_DOC_TYP = "UNSUPRTD_DOC_TYP";
	/**
	 * @var string
	 */
	const UPDATE_DISALLWD = "UPDATE_DISALLWD";
	/**
	 * @var string
	 */
	const UPDATE_PRICE_AMT_REQD = "UPDATE_PRICE_AMT_REQD";
	/**
	 * @var string
	 */
	const UPGRADE_WS_VERSION = "UPGRADE_WS_VERSION";
	/**
	 * @var string
	 */
	const UPS_CANT_INTEGRATE_FULFILL = "UPS_CANT_INTEGRATE_FULFILL";
	/**
	 * @var string
	 */
	const UPS_CONFIG_ERROR = "UPS_CONFIG_ERROR";
	/**
	 * @var string
	 */
	const UPS_LICENSE_AGREEMNT_REQD = "UPS_LICENSE_AGREEMNT_REQD";
	/**
	 * @var string
	 */
	const UPS_ONLINE_RATE_UNAVAILBL = "UPS_ONLINE_RATE_UNAVAILBL";
	/**
	 * @var string
	 */
	const UPS_ONLINE_SHIP_UNAVAILBL = "UPS_ONLINE_SHIP_UNAVAILBL";
	/**
	 * @var string
	 */
	const UPS_REG_NUM_IN_USE = "UPS_REG_NUM_IN_USE";
	/**
	 * @var string
	 */
	const UPS_SETUP_REQD = "UPS_SETUP_REQD";
	/**
	 * @var string
	 */
	const UPS_USER_ERROR = "UPS_USER_ERROR";
	/**
	 * @var string
	 */
	const UPS_VOID_ERROR = "UPS_VOID_ERROR";
	/**
	 * @var string
	 */
	const UPS_XML_ERROR = "UPS_XML_ERROR";
	/**
	 * @var string
	 */
	const URL_ID_PARAM_REQD = "URL_ID_PARAM_REQD";
	/**
	 * @var string
	 */
	const URL_REQD = "URL_REQD";
	/**
	 * @var string
	 */
	const USER_CONTEXT_REQD = "USER_CONTEXT_REQD";
	/**
	 * @var string
	 */
	const USER_DISABLED = "USER_DISABLED";
	/**
	 * @var string
	 */
	const USER_ERROR = "USER_ERROR";
	/**
	 * @var string
	 */
	const USPS_ACCT_NUM_ALREADY_EXISTS = "USPS_ACCT_NUM_ALREADY_EXISTS";
	/**
	 * @var string
	 */
	const USPS_INVALID_INSURED_VALUE = "USPS_INVALID_INSURED_VALUE";
	/**
	 * @var string
	 */
	const USPS_INVALID_PACKAGING = "USPS_INVALID_PACKAGING";
	/**
	 * @var string
	 */
	const USPS_INVALID_PSWD = "USPS_INVALID_PSWD";
	/**
	 * @var string
	 */
	const USPS_LABEL_VOIDED = "USPS_LABEL_VOIDED";
	/**
	 * @var string
	 */
	const USPS_MAX_ITEM_EXCEEDED = "USPS_MAX_ITEM_EXCEEDED";
	/**
	 * @var string
	 */
	const USPS_ONE_PACKAGE_ALLWD = "USPS_ONE_PACKAGE_ALLWD";
	/**
	 * @var string
	 */
	const USPS_PASS_PHRASE_NOT_UPDATED = "USPS_PASS_PHRASE_NOT_UPDATED";
	/**
	 * @var string
	 */
	const USPS_REFUND_FAILED = "USPS_REFUND_FAILED";
	/**
	 * @var string
	 */
	const USPS_RETRY = "USPS_RETRY";
	/**
	 * @var string
	 */
	const USPS_VALIDATE_ADDR = "USPS_VALIDATE_ADDR";
	/**
	 * @var string
	 */
	const USPS_VERIFY_TRACKING_NUM = "USPS_VERIFY_TRACKING_NUM";
	/**
	 * @var string
	 */
	const USPS_VOID_ERROR = "USPS_VOID_ERROR";
	/**
	 * @var string
	 */
	const VALID_EMAIL_REQD = "VALID_EMAIL_REQD";
	/**
	 * @var string
	 */
	const VALID_EMAIL_REQD_FOR_LOGIN = "VALID_EMAIL_REQD_FOR_LOGIN";
	/**
	 * @var string
	 */
	const VALID_FIRST_NAME_REQD = "VALID_FIRST_NAME_REQD";
	/**
	 * @var string
	 */
	const VALID_LAST_NAME_REQD = "VALID_LAST_NAME_REQD";
	/**
	 * @var string
	 */
	const VALID_LINE_ITEM_REQD = "VALID_LINE_ITEM_REQD";
	/**
	 * @var string
	 */
	const VALID_PHONE_NUM_REQD = "VALID_PHONE_NUM_REQD";
	/**
	 * @var string
	 */
	const VALID_PRD_REQD = "VALID_PRD_REQD";
	/**
	 * @var string
	 */
	const VALID_URL_REQD = "VALID_URL_REQD";
	/**
	 * @var string
	 */
	const VALID_VERSION_REQD_IN_URL = "VALID_VERSION_REQD_IN_URL";
	/**
	 * @var string
	 */
	const VALID_WORK_PHONE_REQD = "VALID_WORK_PHONE_REQD";
	/**
	 * @var string
	 */
	const VALID_ZIPCODE_REQD = "VALID_ZIPCODE_REQD";
	/**
	 * @var string
	 */
	const VENDOR_TYPE_REQD = "VENDOR_TYPE_REQD";
	/**
	 * @var string
	 */
	const VERIFY_DESTNTN_ZIP_CODE = "VERIFY_DESTNTN_ZIP_CODE";
	/**
	 * @var string
	 */
	const VERIFY_PAYROLL_FUND_ACCT = "VERIFY_PAYROLL_FUND_ACCT";
	/**
	 * @var string
	 */
	const VERIFY_ZIP_CODE_SETUP = "VERIFY_ZIP_CODE_SETUP";
	/**
	 * @var string
	 */
	const VISA_ERROR = "VISA_ERROR";
	/**
	 * @var string
	 */
	const VOIDING_REVERSAL_DISALLWD = "VOIDING_REVERSAL_DISALLWD";
	/**
	 * @var string
	 */
	const VOID_FAILED = "VOID_FAILED";
	/**
	 * @var string
	 */
	const VSOE_CANT_ADD_ITEM_GROUP = "VSOE_CANT_ADD_ITEM_GROUP";
	/**
	 * @var string
	 */
	const VSOE_REV_REC_TMPLT_REQD = "VSOE_REV_REC_TMPLT_REQD";
	/**
	 * @var string
	 */
	const VSOE_TOTAL_ALLOCATION_ERROR = "VSOE_TOTAL_ALLOCATION_ERROR";
	/**
	 * @var string
	 */
	const VSOE_TRAN_VSOE_BUNDLE_ERROR = "VSOE_TRAN_VSOE_BUNDLE_ERROR";
	/**
	 * @var string
	 */
	const WARNING = "WARNING";
	/**
	 * @var string
	 */
	const WF_EXEC_USAGE_LIMIT_EXCEEDED = "WF_EXEC_USAGE_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const WORK_DAYS_REQD = "WORK_DAYS_REQD";
	/**
	 * @var string
	 */
	const WORLDPAY_ERROR = "WORLDPAY_ERROR";
	/**
	 * @var string
	 */
	const WRITE_OFF_ACCT_REQD = "WRITE_OFF_ACCT_REQD";
	/**
	 * @var string
	 */
	const WS_CONCUR_SESSION_DISALLWD = "WS_CONCUR_SESSION_DISALLWD";
	/**
	 * @var string
	 */
	const WS_EXCEEDED_CONCUR_USERS_ALLWD = "WS_EXCEEDED_CONCUR_USERS_ALLWD";
	/**
	 * @var string
	 */
	const WS_EXCEEDED_MAX_CONCUR_RQST = "WS_EXCEEDED_MAX_CONCUR_RQST";
	/**
	 * @var string
	 */
	const WS_FEATURE_REQD = "WS_FEATURE_REQD";
	/**
	 * @var string
	 */
	const WS_INVALID_SEARCH_OPERATN = "WS_INVALID_SEARCH_OPERATN";
	/**
	 * @var string
	 */
	const WS_LOG_IN_REQD = "WS_LOG_IN_REQD";
	/**
	 * @var string
	 */
	const WS_PERMISSION_REQD = "WS_PERMISSION_REQD";
	/**
	 * @var string
	 */
	const WS_REQUEST_BLOCKED = "WS_REQUEST_BLOCKED";
	/**
	 * @var string
	 */
	const ZIP_FILE_CONTAINS_VIRUS = "ZIP_FILE_CONTAINS_VIRUS";
}}

if (!class_exists("FaultCodeType")) {
/**
 * FaultCodeType
 */
class FaultCodeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const ACCT_TEMP_UNAVAILABLE = "ACCT_TEMP_UNAVAILABLE";
	/**
	 * @var string
	 */
	const EMAIL_ADDRS_REQD = "EMAIL_ADDRS_REQD";
	/**
	 * @var string
	 */
	const INVALID_ACCT = "INVALID_ACCT";
	/**
	 * @var string
	 */
	const INVALID_JOB_ID = "INVALID_JOB_ID";
	/**
	 * @var string
	 */
	const INVALID_LOGIN_CREDENTIALS = "INVALID_LOGIN_CREDENTIALS";
	/**
	 * @var string
	 */
	const INVALID_PAGE_INDEX = "INVALID_PAGE_INDEX";
	/**
	 * @var string
	 */
	const INVALID_ROLE = "INVALID_ROLE";
	/**
	 * @var string
	 */
	const INVALID_WS_VERSION = "INVALID_WS_VERSION";
	/**
	 * @var string
	 */
	const JOB_NOT_COMPLETE = "JOB_NOT_COMPLETE";
	/**
	 * @var string
	 */
	const LOGIN_DISABLED = "LOGIN_DISABLED";
	/**
	 * @var string
	 */
	const MAX_RCRDS_EXCEEDED = "MAX_RCRDS_EXCEEDED";
	/**
	 * @var string
	 */
	const OI_FEATURE_REQD = "OI_FEATURE_REQD";
	/**
	 * @var string
	 */
	const OI_PERMISSION_REQD = "OI_PERMISSION_REQD";
	/**
	 * @var string
	 */
	const PSWD_REQD = "PSWD_REQD";
	/**
	 * @var string
	 */
	const ROLE_REQUIRED = "ROLE_REQUIRED";
	/**
	 * @var string
	 */
	const SESSION_TIMED_OUT = "SESSION_TIMED_OUT";
	/**
	 * @var string
	 */
	const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";
	/**
	 * @var string
	 */
	const UNSUPPORTED_WS_VERSION = "UNSUPPORTED_WS_VERSION";
	/**
	 * @var string
	 */
	const USER_ERROR = "USER_ERROR";
	/**
	 * @var string
	 */
	const WS_CONCUR_SESSION_DISALLWD = "WS_CONCUR_SESSION_DISALLWD";
	/**
	 * @var string
	 */
	const WS_FEATURE_REQD = "WS_FEATURE_REQD";
	/**
	 * @var string
	 */
	const WS_PERMISSION_REQD = "WS_PERMISSION_REQD";
	/**
	 * @var string
	 */
	const WS_LOG_IN_REQD = "WS_LOG_IN_REQD";
	/**
	 * @var string
	 */
	const WS_REQUEST_BLOCKED = "WS_REQUEST_BLOCKED";
}}

if (!class_exists("Passport")) {
/**
 * Passport
 */
class Passport {
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;

	static $paramtypesmap = array(
		"email" => "string",
		"password" => "string",
		"account" => "string",
		"role" => "RecordRef",
	);
}}

if (!class_exists("SsoPassport")) {
/**
 * SsoPassport
 */
class SsoPassport {
	/**
	 * @access public
	 * @var string
	 */
	public $authenticationToken;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerId;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerAccount;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerUserId;

	static $paramtypesmap = array(
		"authenticationToken" => "string",
		"partnerId" => "string",
		"partnerAccount" => "string",
		"partnerUserId" => "string",
	);
}}

if (!class_exists("SsoCredentials")) {
/**
 * SsoCredentials
 */
class SsoCredentials {
	/**
	 * @access public
	 * @var string
	 */
	public $email;
	/**
	 * @access public
	 * @var string
	 */
	public $password;
	/**
	 * @access public
	 * @var string
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;
	/**
	 * @access public
	 * @var string
	 */
	public $authenticationToken;
	/**
	 * @access public
	 * @var string
	 */
	public $partnerId;

	static $paramtypesmap = array(
		"email" => "string",
		"password" => "string",
		"account" => "string",
		"role" => "RecordRef",
		"authenticationToken" => "string",
		"partnerId" => "string",
	);
}}

if (!class_exists("TokenPassportSignature")) {
/**
 * TokenPassportSignature
 */
class TokenPassportSignature {
	/**
	 * @access public
	 * @var string
	 */
	public $_;
	/**
	 * @access public
	 * @var string
	 */
	public $algorithm;

	static $paramtypesmap = array(
		"_" => "string",
		"algorithm" => "string",
	);
}}

if (!class_exists("TokenPassport")) {
/**
 * TokenPassport
 */
class TokenPassport {
	/**
	 * @access public
	 * @var string
	 */
	public $account;
	/**
	 * @access public
	 * @var string
	 */
	public $consumerKey;
	/**
	 * @access public
	 * @var string
	 */
	public $token;
	/**
	 * @access public
	 * @var string
	 */
	public $nonce;
	/**
	 * @access public
	 * @var integer
	 */
	public $timestamp;
	/**
	 * @access public
	 * @var TokenPassportSignature
	 */
	public $signature;

	static $paramtypesmap = array(
		"account" => "string",
		"consumerKey" => "string",
		"token" => "string",
		"nonce" => "string",
		"timestamp" => "integer",
		"signature" => "TokenPassportSignature",
	);
}}

if (!class_exists("ChangePassword")) {
/**
 * ChangePassword
 */
class ChangePassword {
	/**
	 * @access public
	 * @var string
	 */
	public $currentPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newPassword2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $justThisAccount;

	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newPassword" => "string",
		"newPassword2" => "string",
		"justThisAccount" => "boolean",
	);
}}

if (!class_exists("ChangeEmail")) {
/**
 * ChangeEmail
 */
class ChangeEmail {
	/**
	 * @access public
	 * @var string
	 */
	public $currentPassword;
	/**
	 * @access public
	 * @var string
	 */
	public $newEmail;
	/**
	 * @access public
	 * @var string
	 */
	public $newEmail2;
	/**
	 * @access public
	 * @var boolean
	 */
	public $justThisAccount;

	static $paramtypesmap = array(
		"currentPassword" => "string",
		"newEmail" => "string",
		"newEmail2" => "string",
		"justThisAccount" => "boolean",
	);
}}

if (!class_exists("StatusDetail")) {
/**
 * StatusDetail
 */
class StatusDetail {
	/**
	 * @access public
	 * @var StatusDetailCodeType
	 */
	public $code;
	/**
	 * @access public
	 * @var string
	 */
	public $message;
	/**
	 * @access public
	 * @var StatusDetailType
	 */
	public $type;

	static $paramtypesmap = array(
		"code" => "StatusDetailCodeType",
		"message" => "string",
		"type" => "StatusDetailType",
	);
}}

if (!class_exists("Status")) {
/**
 * Status
 */
class Status {
	/**
	 * @access public
	 * @var StatusDetail[]
	 */
	public $statusDetail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isSuccess;

	static $paramtypesmap = array(
		"statusDetail" => "StatusDetail[]",
		"isSuccess" => "boolean",
	);
}}

if (!class_exists("WsRole")) {
/**
 * WsRole
 */
class WsRole {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $role;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isLoggedInRole;

	static $paramtypesmap = array(
		"role" => "RecordRef",
		"isDefault" => "boolean",
		"isInactive" => "boolean",
		"isLoggedInRole" => "boolean",
	);
}}

if (!class_exists("WsRoleList")) {
/**
 * WsRoleList
 */
class WsRoleList {
	/**
	 * @access public
	 * @var WsRole[]
	 */
	public $wsRole;

	static $paramtypesmap = array(
		"wsRole" => "WsRole[]",
	);
}}

if (!class_exists("Record")) {
/**
 * Record
 */
class Record {
	/**
	 * @access public
	 * @var NullField
	 */
	public $nullFieldList;

	static $paramtypesmap = array(
		"nullFieldList" => "NullField",
	);
}}

if (!class_exists("NullField")) {
/**
 * NullField
 */
class NullField {
	/**
	 * @access public
	 * @var string[]
	 */
	public $name;

	static $paramtypesmap = array(
		"name" => "string[]",
	);
}}

if (!class_exists("SearchRecord")) {
/**
 * SearchRecord
 */
class SearchRecord {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("SearchRecordBasic")) {
/**
 * SearchRecordBasic
 */
class SearchRecordBasic extends SearchRecord {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("SearchRow")) {
/**
 * SearchRow
 */
class SearchRow {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("SearchRowBasic")) {
/**
 * SearchRowBasic
 */
class SearchRowBasic extends SearchRow {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("SearchResult")) {
/**
 * SearchResult
 */
class SearchResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageSize;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalPages;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;
	/**
	 * @access public
	 * @var string
	 */
	public $searchId;
	/**
	 * @access public
	 * @var RecordList
	 */
	public $recordList;
	/**
	 * @access public
	 * @var SearchRowList
	 */
	public $searchRowList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"searchId" => "string",
		"recordList" => "RecordList",
		"searchRowList" => "SearchRowList",
	);
}}

if (!class_exists("AsyncStatusResult")) {
/**
 * AsyncStatusResult
 */
class AsyncStatusResult {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;
	/**
	 * @access public
	 * @var AsyncStatusType
	 */
	public $status;
	/**
	 * @access public
	 * @var float
	 */
	public $percentCompleted;
	/**
	 * @access public
	 * @var float
	 */
	public $estRemainingDuration;

	static $paramtypesmap = array(
		"jobId" => "string",
		"status" => "AsyncStatusType",
		"percentCompleted" => "float",
		"estRemainingDuration" => "float",
	);
}}

if (!class_exists("GetAllResult")) {
/**
 * GetAllResult
 */
class GetAllResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var RecordList
	 */
	public $recordList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"recordList" => "RecordList",
	);
}}

if (!class_exists("GetSavedSearchResult")) {
/**
 * GetSavedSearchResult
 */
class GetSavedSearchResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $recordRefList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"recordRefList" => "RecordRefList",
	);
}}

if (!class_exists("GetCustomizationIdResult")) {
/**
 * GetCustomizationIdResult
 */
class GetCustomizationIdResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var CustomizationRefList
	 */
	public $customizationRefList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"customizationRefList" => "CustomizationRefList",
	);
}}

if (!class_exists("GetSelectValueResult")) {
/**
 * GetSelectValueResult
 */
class GetSelectValueResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalPages;
	/**
	 * @access public
	 * @var BaseRefList
	 */
	public $baseRefList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"totalPages" => "integer",
		"baseRefList" => "BaseRefList",
	);
}}

if (!class_exists("RecordList")) {
/**
 * RecordList
 */
class RecordList {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
}}

if (!class_exists("SearchRowList")) {
/**
 * SearchRowList
 */
class SearchRowList {
	/**
	 * @access public
	 * @var SearchRow[]
	 */
	public $searchRow;

	static $paramtypesmap = array(
		"searchRow" => "SearchRow[]",
	);
}}

if (!class_exists("RecordRefList")) {
/**
 * RecordRefList
 */
class RecordRefList {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $recordRef;

	static $paramtypesmap = array(
		"recordRef" => "RecordRef[]",
	);
}}

if (!class_exists("BaseRef")) {
/**
 * BaseRef
 */
class BaseRef {
	/**
	 * @access public
	 * @var string
	 */
	public $name;

	static $paramtypesmap = array(
		"name" => "string",
	);
}}

if (!class_exists("BaseRefList")) {
/**
 * BaseRefList
 */
class BaseRefList {
	/**
	 * @access public
	 * @var BaseRef[]
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
	);
}}

if (!class_exists("RecordRef")) {
/**
 * RecordRef
 */
class RecordRef extends BaseRef {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;
	/**
	 * @access public
	 * @var RecordType
	 */
	public $type;

	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"type" => "RecordType",
	);
}}

if (!class_exists("Duration")) {
/**
 * Duration
 */
class Duration {
	/**
	 * @access public
	 * @var float
	 */
	public $timeSpan;
	/**
	 * @access public
	 * @var DurationUnit
	 */
	public $unit;

	static $paramtypesmap = array(
		"timeSpan" => "float",
		"unit" => "DurationUnit",
	);
}}

if (!class_exists("CustomRecordRef")) {
/**
 * CustomRecordRef
 */
class CustomRecordRef extends BaseRef {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;
	/**
	 * @access public
	 * @var string
	 */
	public $typeId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
		"scriptId" => "string",
	);
}}

if (!class_exists("CustomTransactionRef")) {
/**
 * CustomTransactionRef
 */
class CustomTransactionRef extends BaseRef {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;
	/**
	 * @access public
	 * @var string
	 */
	public $typeId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
		"scriptId" => "string",
	);
}}

if (!class_exists("CustomizationRef")) {
/**
 * CustomizationRef
 */
class CustomizationRef extends RecordRef {
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"scriptId" => "string",
	);
}}

if (!class_exists("CustomizationRefList")) {
/**
 * CustomizationRefList
 */
class CustomizationRefList {
	/**
	 * @access public
	 * @var CustomizationRef[]
	 */
	public $customizationRef;

	static $paramtypesmap = array(
		"customizationRef" => "CustomizationRef[]",
	);
}}

if (!class_exists("InitializeRecord")) {
/**
 * InitializeRecord
 */
class InitializeRecord {
	/**
	 * @access public
	 * @var InitializeType
	 */
	public $type;
	/**
	 * @access public
	 * @var InitializeRef
	 */
	public $reference;
	/**
	 * @access public
	 * @var InitializeAuxRef
	 */
	public $auxReference;
	/**
	 * @access public
	 * @var InitializeRefList
	 */
	public $referenceList;

	static $paramtypesmap = array(
		"type" => "InitializeType",
		"reference" => "InitializeRef",
		"auxReference" => "InitializeAuxRef",
		"referenceList" => "InitializeRefList",
	);
}}

if (!class_exists("InitializeRef")) {
/**
 * InitializeRef
 */
class InitializeRef extends BaseRef {
	/**
	 * @access public
	 * @var InitializeRefType
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"type" => "InitializeRefType",
		"internalId" => "string",
		"externalId" => "string",
	);
}}

if (!class_exists("InitializeRefList")) {
/**
 * InitializeRefList
 */
class InitializeRefList {
	/**
	 * @access public
	 * @var InitializeRef[]
	 */
	public $initializeRef;

	static $paramtypesmap = array(
		"initializeRef" => "InitializeRef[]",
	);
}}

if (!class_exists("InitializeAuxRef")) {
/**
 * InitializeAuxRef
 */
class InitializeAuxRef extends BaseRef {
	/**
	 * @access public
	 * @var InitializeAuxRefType
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;

	static $paramtypesmap = array(
		"type" => "InitializeAuxRefType",
		"internalId" => "string",
		"externalId" => "string",
	);
}}

if (!class_exists("UpdateInviteeStatusReference")) {
/**
 * UpdateInviteeStatusReference
 */
class UpdateInviteeStatusReference {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $eventId;
	/**
	 * @access public
	 * @var CalendarEventAttendeeResponse
	 */
	public $responseCode;

	static $paramtypesmap = array(
		"eventId" => "RecordRef",
		"responseCode" => "CalendarEventAttendeeResponse",
	);
}}

if (!class_exists("GetAllRecord")) {
/**
 * GetAllRecord
 */
class GetAllRecord {
	/**
	 * @access public
	 * @var GetAllRecordType
	 */
	public $recordType;

	static $paramtypesmap = array(
		"recordType" => "GetAllRecordType",
	);
}}

if (!class_exists("GetSavedSearchRecord")) {
/**
 * GetSavedSearchRecord
 */
class GetSavedSearchRecord {
	/**
	 * @access public
	 * @var SearchRecordType
	 */
	public $searchType;

	static $paramtypesmap = array(
		"searchType" => "SearchRecordType",
	);
}}

if (!class_exists("CustomizationType")) {
/**
 * CustomizationType
 */
class CustomizationType {
	/**
	 * @access public
	 * @var GetCustomizationType
	 */
	public $getCustomizationType;

	static $paramtypesmap = array(
		"getCustomizationType" => "GetCustomizationType",
	);
}}

if (!class_exists("ListOrRecordRef")) {
/**
 * ListOrRecordRef
 */
class ListOrRecordRef {
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;
	/**
	 * @access public
	 * @var string
	 */
	public $typeId;

	static $paramtypesmap = array(
		"name" => "string",
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
	);
}}

if (!class_exists("CustomFieldRef")) {
/**
 * CustomFieldRef
 */
class CustomFieldRef {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"internalId" => "string",
		"scriptId" => "string",
	);
}}

if (!class_exists("LongCustomFieldRef")) {
/**
 * LongCustomFieldRef
 */
class LongCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var integer
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "integer",
	);
}}

if (!class_exists("DoubleCustomFieldRef")) {
/**
 * DoubleCustomFieldRef
 */
class DoubleCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var float
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "float",
	);
}}

if (!class_exists("BooleanCustomFieldRef")) {
/**
 * BooleanCustomFieldRef
 */
class BooleanCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var boolean
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "boolean",
	);
}}

if (!class_exists("StringCustomFieldRef")) {
/**
 * StringCustomFieldRef
 */
class StringCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var string
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "string",
	);
}}

if (!class_exists("DateCustomFieldRef")) {
/**
 * DateCustomFieldRef
 */
class DateCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "dateTime",
	);
}}

if (!class_exists("SelectCustomFieldRef")) {
/**
 * SelectCustomFieldRef
 */
class SelectCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var ListOrRecordRef
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "ListOrRecordRef",
	);
}}

if (!class_exists("MultiSelectCustomFieldRef")) {
/**
 * MultiSelectCustomFieldRef
 */
class MultiSelectCustomFieldRef extends CustomFieldRef {
	/**
	 * @access public
	 * @var ListOrRecordRef[]
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "ListOrRecordRef[]",
	);
}}

if (!class_exists("CustomFieldList")) {
/**
 * CustomFieldList
 */
class CustomFieldList {
	/**
	 * @access public
	 * @var CustomFieldRef[]
	 */
	public $customField;

	static $paramtypesmap = array(
		"customField" => "CustomFieldRef[]",
	);
}}

if (!class_exists("DimensionRef")) {
/**
 * DimensionRef
 */
class DimensionRef {
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"scriptId" => "string",
	);
}}

if (!class_exists("StringDimensionRef")) {
/**
 * StringDimensionRef
 */
class StringDimensionRef extends DimensionRef {
	/**
	 * @access public
	 * @var string
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "string",
	);
}}

if (!class_exists("SelectDimensionRef")) {
/**
 * SelectDimensionRef
 */
class SelectDimensionRef extends DimensionRef {
	/**
	 * @access public
	 * @var ListOrRecordRef
	 */
	public $value;

	static $paramtypesmap = array(
		"value" => "ListOrRecordRef",
	);
}}

if (!class_exists("DimensionList")) {
/**
 * DimensionList
 */
class DimensionList {
	/**
	 * @access public
	 * @var DimensionRef[]
	 */
	public $dimension;

	static $paramtypesmap = array(
		"dimension" => "DimensionRef[]",
	);
}}

if (!class_exists("SearchBooleanField")) {
/**
 * SearchBooleanField
 */
class SearchBooleanField {
	/**
	 * @access public
	 * @var boolean
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "boolean",
	);
}}

if (!class_exists("SearchStringField")) {
/**
 * SearchStringField
 */
class SearchStringField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchStringFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string",
		"operator" => "SearchStringFieldOperator",
	);
}}

if (!class_exists("SearchLongField")) {
/**
 * SearchLongField
 */
class SearchLongField {
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchLongFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "integer",
		"searchValue2" => "integer",
		"operator" => "SearchLongFieldOperator",
	);
}}

if (!class_exists("SearchTextNumberField")) {
/**
 * SearchTextNumberField
 */
class SearchTextNumberField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchTextNumberFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string",
		"searchValue2" => "string",
		"operator" => "SearchTextNumberFieldOperator",
	);
}}

if (!class_exists("SearchDoubleField")) {
/**
 * SearchDoubleField
 */
class SearchDoubleField {
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDoubleFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "float",
		"searchValue2" => "float",
		"operator" => "SearchDoubleFieldOperator",
	);
}}

if (!class_exists("SearchDateField")) {
/**
 * SearchDateField
 */
class SearchDateField {
	/**
	 * @access public
	 * @var SearchDate
	 */
	public $predefinedSearchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDateFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"predefinedSearchValue" => "SearchDate",
		"searchValue" => "dateTime",
		"searchValue2" => "dateTime",
		"operator" => "SearchDateFieldOperator",
	);
}}

if (!class_exists("SearchEnumMultiSelectField")) {
/**
 * SearchEnumMultiSelectField
 */
class SearchEnumMultiSelectField {
	/**
	 * @access public
	 * @var string[]
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string[]",
		"operator" => "SearchEnumMultiSelectFieldOperator",
	);
}}

if (!class_exists("SearchMultiSelectField")) {
/**
 * SearchMultiSelectField
 */
class SearchMultiSelectField {
	/**
	 * @access public
	 * @var RecordRef[]
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchMultiSelectFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "RecordRef[]",
		"operator" => "SearchMultiSelectFieldOperator",
	);
}}

if (!class_exists("SearchCustomField")) {
/**
 * SearchCustomField
 */
class SearchCustomField {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"internalId" => "string",
		"scriptId" => "string",
	);
}}

if (!class_exists("SearchBooleanCustomField")) {
/**
 * SearchBooleanCustomField
 */
class SearchBooleanCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var boolean
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "boolean",
	);
}}

if (!class_exists("SearchStringCustomField")) {
/**
 * SearchStringCustomField
 */
class SearchStringCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchStringFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string",
		"operator" => "SearchStringFieldOperator",
	);
}}

if (!class_exists("SearchLongCustomField")) {
/**
 * SearchLongCustomField
 */
class SearchLongCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchLongFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "integer",
		"searchValue2" => "integer",
		"operator" => "SearchLongFieldOperator",
	);
}}

if (!class_exists("SearchDoubleCustomField")) {
/**
 * SearchDoubleCustomField
 */
class SearchDoubleCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDoubleFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "float",
		"searchValue2" => "float",
		"operator" => "SearchDoubleFieldOperator",
	);
}}

if (!class_exists("SearchDateCustomField")) {
/**
 * SearchDateCustomField
 */
class SearchDateCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var SearchDate
	 */
	public $predefinedSearchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue2;
	/**
	 * @access public
	 * @var SearchDateFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"predefinedSearchValue" => "SearchDate",
		"searchValue" => "dateTime",
		"searchValue2" => "dateTime",
		"operator" => "SearchDateFieldOperator",
	);
}}

if (!class_exists("SearchEnumMultiSelectCustomField")) {
/**
 * SearchEnumMultiSelectCustomField
 */
class SearchEnumMultiSelectCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var string[]
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "string[]",
		"operator" => "SearchEnumMultiSelectFieldOperator",
	);
}}

if (!class_exists("SearchMultiSelectCustomField")) {
/**
 * SearchMultiSelectCustomField
 */
class SearchMultiSelectCustomField extends SearchCustomField {
	/**
	 * @access public
	 * @var ListOrRecordRef[]
	 */
	public $searchValue;
	/**
	 * @access public
	 * @var SearchMultiSelectFieldOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef[]",
		"operator" => "SearchMultiSelectFieldOperator",
	);
}}

if (!class_exists("SearchCustomFieldList")) {
/**
 * SearchCustomFieldList
 */
class SearchCustomFieldList {
	/**
	 * @access public
	 * @var SearchCustomField[]
	 */
	public $customField;

	static $paramtypesmap = array(
		"customField" => "SearchCustomField[]",
	);
}}

if (!class_exists("SearchColumnField")) {
/**
 * SearchColumnField
 */
class SearchColumnField {
	/**
	 * @access public
	 * @var string
	 */
	public $customLabel;

	static $paramtypesmap = array(
		"customLabel" => "string",
	);
}}

if (!class_exists("SearchColumnBooleanField")) {
/**
 * SearchColumnBooleanField
 */
class SearchColumnBooleanField extends SearchColumnField {
	/**
	 * @access public
	 * @var boolean
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "boolean",
	);
}}

if (!class_exists("SearchColumnStringField")) {
/**
 * SearchColumnStringField
 */
class SearchColumnStringField extends SearchColumnField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}}

if (!class_exists("SearchColumnLongField")) {
/**
 * SearchColumnLongField
 */
class SearchColumnLongField extends SearchColumnField {
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "integer",
	);
}}

if (!class_exists("SearchColumnTextNumberField")) {
/**
 * SearchColumnTextNumberField
 */
class SearchColumnTextNumberField extends SearchColumnField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}}

if (!class_exists("SearchColumnDoubleField")) {
/**
 * SearchColumnDoubleField
 */
class SearchColumnDoubleField extends SearchColumnField {
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "float",
	);
}}

if (!class_exists("SearchColumnDateField")) {
/**
 * SearchColumnDateField
 */
class SearchColumnDateField extends SearchColumnField {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "dateTime",
	);
}}

if (!class_exists("SearchColumnEnumSelectField")) {
/**
 * SearchColumnEnumSelectField
 */
class SearchColumnEnumSelectField extends SearchColumnField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}}

if (!class_exists("SearchColumnSelectField")) {
/**
 * SearchColumnSelectField
 */
class SearchColumnSelectField extends SearchColumnField {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "RecordRef",
	);
}}

if (!class_exists("SearchColumnCustomField")) {
/**
 * SearchColumnCustomField
 */
class SearchColumnCustomField {
	/**
	 * @access public
	 * @var string
	 */
	public $customLabel;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"customLabel" => "string",
		"internalId" => "string",
		"scriptId" => "string",
	);
}}

if (!class_exists("SearchColumnBooleanCustomField")) {
/**
 * SearchColumnBooleanCustomField
 */
class SearchColumnBooleanCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var boolean
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "boolean",
	);
}}

if (!class_exists("SearchColumnStringCustomField")) {
/**
 * SearchColumnStringCustomField
 */
class SearchColumnStringCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var string
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "string",
	);
}}

if (!class_exists("SearchColumnLongCustomField")) {
/**
 * SearchColumnLongCustomField
 */
class SearchColumnLongCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var integer
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "integer",
	);
}}

if (!class_exists("SearchColumnDoubleCustomField")) {
/**
 * SearchColumnDoubleCustomField
 */
class SearchColumnDoubleCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var float
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "float",
	);
}}

if (!class_exists("SearchColumnDateCustomField")) {
/**
 * SearchColumnDateCustomField
 */
class SearchColumnDateCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "dateTime",
	);
}}

if (!class_exists("SearchColumnEnumMultiSelectCustomField")) {
/**
 * SearchColumnEnumMultiSelectCustomField
 */
class SearchColumnEnumMultiSelectCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var string[]
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "string[]",
	);
}}

if (!class_exists("SearchColumnSelectCustomField")) {
/**
 * SearchColumnSelectCustomField
 */
class SearchColumnSelectCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var ListOrRecordRef
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef",
	);
}}

if (!class_exists("SearchColumnMultiSelectCustomField")) {
/**
 * SearchColumnMultiSelectCustomField
 */
class SearchColumnMultiSelectCustomField extends SearchColumnCustomField {
	/**
	 * @access public
	 * @var ListOrRecordRef[]
	 */
	public $searchValue;

	static $paramtypesmap = array(
		"searchValue" => "ListOrRecordRef[]",
	);
}}

if (!class_exists("SearchColumnCustomFieldList")) {
/**
 * SearchColumnCustomFieldList
 */
class SearchColumnCustomFieldList {
	/**
	 * @access public
	 * @var SearchColumnCustomField[]
	 */
	public $customField;

	static $paramtypesmap = array(
		"customField" => "SearchColumnCustomField[]",
	);
}}

if (!class_exists("ItemAvailabilityFilter")) {
/**
 * ItemAvailabilityFilter
 */
class ItemAvailabilityFilter {
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $item;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastQtyAvailableChange;

	static $paramtypesmap = array(
		"item" => "RecordRefList",
		"lastQtyAvailableChange" => "dateTime",
	);
}}

if (!class_exists("ItemAvailability")) {
/**
 * ItemAvailability
 */
class ItemAvailability {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastQtyAvailableChange;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $locationId;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var float
	 */
	public $onHandValueMli;
	/**
	 * @access public
	 * @var float
	 */
	public $reorderPoint;
	/**
	 * @access public
	 * @var float
	 */
	public $preferredStockLevel;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"lastQtyAvailableChange" => "dateTime",
		"locationId" => "RecordRef",
		"quantityOnHand" => "float",
		"onHandValueMli" => "float",
		"reorderPoint" => "float",
		"preferredStockLevel" => "float",
		"quantityOnOrder" => "float",
		"quantityCommitted" => "float",
		"quantityBackOrdered" => "float",
		"quantityAvailable" => "float",
	);
}}

if (!class_exists("ItemAvailabilityList")) {
/**
 * ItemAvailabilityList
 */
class ItemAvailabilityList {
	/**
	 * @access public
	 * @var ItemAvailability[]
	 */
	public $itemAvailability;

	static $paramtypesmap = array(
		"itemAvailability" => "ItemAvailability[]",
	);
}}

if (!class_exists("GetItemAvailabilityResult")) {
/**
 * GetItemAvailabilityResult
 */
class GetItemAvailabilityResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var ItemAvailabilityList
	 */
	public $itemAvailabilityList;

	static $paramtypesmap = array(
		"status" => "Status",
		"itemAvailabilityList" => "ItemAvailabilityList",
	);
}}

if (!class_exists("BudgetExchangeRateFilter")) {
/**
 * BudgetExchangeRateFilter
 */
class BudgetExchangeRateFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
	);
}}

if (!class_exists("BudgetExchangeRate")) {
/**
 * BudgetExchangeRate
 */
class BudgetExchangeRate {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var float
	 */
	public $currentRate;
	/**
	 * @access public
	 * @var float
	 */
	public $averageRate;
	/**
	 * @access public
	 * @var float
	 */
	public $historicalRate;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
		"currentRate" => "float",
		"averageRate" => "float",
		"historicalRate" => "float",
	);
}}

if (!class_exists("BudgetExchangeRateList")) {
/**
 * BudgetExchangeRateList
 */
class BudgetExchangeRateList {
	/**
	 * @access public
	 * @var BudgetExchangeRate[]
	 */
	public $budgetExchangeRate;

	static $paramtypesmap = array(
		"budgetExchangeRate" => "BudgetExchangeRate[]",
	);
}}

if (!class_exists("GetBudgetExchangeRateResult")) {
/**
 * GetBudgetExchangeRateResult
 */
class GetBudgetExchangeRateResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var BudgetExchangeRateList
	 */
	public $budgetExchangeRateList;

	static $paramtypesmap = array(
		"status" => "Status",
		"budgetExchangeRateList" => "BudgetExchangeRateList",
	);
}}

if (!class_exists("ConsolidatedExchangeRateFilter")) {
/**
 * ConsolidatedExchangeRateFilter
 */
class ConsolidatedExchangeRateFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
	);
}}

if (!class_exists("ConsolidatedExchangeRate")) {
/**
 * ConsolidatedExchangeRate
 */
class ConsolidatedExchangeRate {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromSubsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var float
	 */
	public $currentRate;
	/**
	 * @access public
	 * @var float
	 */
	public $averageRate;
	/**
	 * @access public
	 * @var float
	 */
	public $historicalRate;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"fromSubsidiary" => "RecordRef",
		"toSubsidiary" => "RecordRef",
		"currentRate" => "float",
		"averageRate" => "float",
		"historicalRate" => "float",
	);
}}

if (!class_exists("ConsolidatedExchangeRateList")) {
/**
 * ConsolidatedExchangeRateList
 */
class ConsolidatedExchangeRateList {
	/**
	 * @access public
	 * @var ConsolidatedExchangeRate[]
	 */
	public $consolidatedExchangeRate;

	static $paramtypesmap = array(
		"consolidatedExchangeRate" => "ConsolidatedExchangeRate[]",
	);
}}

if (!class_exists("GetConsolidatedExchangeRateResult")) {
/**
 * GetConsolidatedExchangeRateResult
 */
class GetConsolidatedExchangeRateResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateList
	 */
	public $consolidatedExchangeRateList;

	static $paramtypesmap = array(
		"status" => "Status",
		"consolidatedExchangeRateList" => "ConsolidatedExchangeRateList",
	);
}}

if (!class_exists("CurrencyRateFilter")) {
/**
 * CurrencyRateFilter
 */
class CurrencyRateFilter {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $fromCurrency;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;

	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"fromCurrency" => "RecordRef",
		"effectiveDate" => "dateTime",
	);
}}

if (!class_exists("CurrencyRate")) {
/**
 * CurrencyRate
 */
class CurrencyRate extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transactionCurrency;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"baseCurrency" => "RecordRef",
		"transactionCurrency" => "RecordRef",
		"exchangeRate" => "float",
		"effectiveDate" => "dateTime",
		"internalId" => "string",
	);
}}

if (!class_exists("CurrencyRateList")) {
/**
 * CurrencyRateList
 */
class CurrencyRateList {
	/**
	 * @access public
	 * @var CurrencyRate[]
	 */
	public $currencyRate;

	static $paramtypesmap = array(
		"currencyRate" => "CurrencyRate[]",
	);
}}

if (!class_exists("GetCurrencyRateResult")) {
/**
 * GetCurrencyRateResult
 */
class GetCurrencyRateResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var CurrencyRateList
	 */
	public $currencyRateList;

	static $paramtypesmap = array(
		"status" => "Status",
		"currencyRateList" => "CurrencyRateList",
	);
}}

if (!class_exists("DataCenterUrls")) {
/**
 * DataCenterUrls
 */
class DataCenterUrls {
	/**
	 * @access public
	 * @var string
	 */
	public $restDomain;
	/**
	 * @access public
	 * @var string
	 */
	public $webservicesDomain;
	/**
	 * @access public
	 * @var string
	 */
	public $systemDomain;

	static $paramtypesmap = array(
		"restDomain" => "string",
		"webservicesDomain" => "string",
		"systemDomain" => "string",
	);
}}

if (!class_exists("GetDataCenterUrlsResult")) {
/**
 * GetDataCenterUrlsResult
 */
class GetDataCenterUrlsResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var DataCenterUrls
	 */
	public $dataCenterUrls;

	static $paramtypesmap = array(
		"status" => "Status",
		"dataCenterUrls" => "DataCenterUrls",
	);
}}

if (!class_exists("PostingTransactionSummaryField")) {
/**
 * PostingTransactionSummaryField
 */
class PostingTransactionSummaryField {
	/**
	 * @access public
	 * @var boolean
	 */
	public $period;
	/**
	 * @access public
	 * @var boolean
	 */
	public $account;
	/**
	 * @access public
	 * @var boolean
	 */
	public $parentItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $item;
	/**
	 * @access public
	 * @var boolean
	 */
	public $entity;
	/**
	 * @access public
	 * @var boolean
	 */
	public $department;
	/**
	 * @access public
	 * @var boolean
	 */
	public $class;
	/**
	 * @access public
	 * @var boolean
	 */
	public $location;
	/**
	 * @access public
	 * @var boolean
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var boolean
	 */
	public $book;

	static $paramtypesmap = array(
		"period" => "boolean",
		"account" => "boolean",
		"parentItem" => "boolean",
		"item" => "boolean",
		"entity" => "boolean",
		"department" => "boolean",
		"class" => "boolean",
		"location" => "boolean",
		"subsidiary" => "boolean",
		"book" => "boolean",
	);
}}

if (!class_exists("PostingTransactionSummaryFilter")) {
/**
 * PostingTransactionSummaryFilter
 */
class PostingTransactionSummaryFilter {
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $parentItem;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRefList
	 */
	public $book;

	static $paramtypesmap = array(
		"period" => "RecordRefList",
		"account" => "RecordRefList",
		"parentItem" => "RecordRefList",
		"item" => "RecordRefList",
		"entity" => "RecordRefList",
		"department" => "RecordRefList",
		"class" => "RecordRefList",
		"location" => "RecordRefList",
		"subsidiary" => "RecordRefList",
		"book" => "RecordRefList",
	);
}}

if (!class_exists("PostingTransactionSummary")) {
/**
 * PostingTransactionSummary
 */
class PostingTransactionSummary {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $period;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $account;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $parentItem;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $entity;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $book;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"period" => "RecordRef",
		"account" => "RecordRef",
		"parentItem" => "RecordRef",
		"item" => "RecordRef",
		"entity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"book" => "RecordRef",
		"amount" => "float",
	);
}}

if (!class_exists("PostingTransactionSummaryList")) {
/**
 * PostingTransactionSummaryList
 */
class PostingTransactionSummaryList {
	/**
	 * @access public
	 * @var PostingTransactionSummary[]
	 */
	public $postingTransactionSummary;

	static $paramtypesmap = array(
		"postingTransactionSummary" => "PostingTransactionSummary[]",
	);
}}

if (!class_exists("GetPostingTransactionSummaryResult")) {
/**
 * GetPostingTransactionSummaryResult
 */
class GetPostingTransactionSummaryResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageSize;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalPages;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;
	/**
	 * @access public
	 * @var PostingTransactionSummaryList
	 */
	public $postingTransactionSummaryList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"postingTransactionSummaryList" => "PostingTransactionSummaryList",
	);
}}

if (!class_exists("GetSelectValueFieldDescription")) {
/**
 * GetSelectValueFieldDescription
 */
class GetSelectValueFieldDescription {
	/**
	 * @access public
	 * @var RecordType
	 */
	public $recordType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customRecordType;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customTransactionType;
	/**
	 * @access public
	 * @var string
	 */
	public $sublist;
	/**
	 * @access public
	 * @var string
	 */
	public $field;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var GetSelectValueFilter
	 */
	public $filter;
	/**
	 * @access public
	 * @var GetSelectFilterByFieldValueList
	 */
	public $filterByValueList;

	static $paramtypesmap = array(
		"recordType" => "RecordType",
		"customRecordType" => "RecordRef",
		"customTransactionType" => "RecordRef",
		"sublist" => "string",
		"field" => "string",
		"customForm" => "RecordRef",
		"filter" => "GetSelectValueFilter",
		"filterByValueList" => "GetSelectFilterByFieldValueList",
	);
}}

if (!class_exists("GetSelectValueFilter")) {
/**
 * GetSelectValueFilter
 */
class GetSelectValueFilter {
	/**
	 * @access public
	 * @var string
	 */
	public $filterValue;
	/**
	 * @access public
	 * @var GetSelectValueFilterOperator
	 */
	public $operator;

	static $paramtypesmap = array(
		"filterValue" => "string",
		"operator" => "GetSelectValueFilterOperator",
	);
}}

if (!class_exists("GetSelectFilterByFieldValueList")) {
/**
 * GetSelectFilterByFieldValueList
 */
class GetSelectFilterByFieldValueList {
	/**
	 * @access public
	 * @var GetSelectFilterByFieldValue[]
	 */
	public $filterBy;

	static $paramtypesmap = array(
		"filterBy" => "GetSelectFilterByFieldValue[]",
	);
}}

if (!class_exists("GetSelectFilterByFieldValue")) {
/**
 * GetSelectFilterByFieldValue
 */
class GetSelectFilterByFieldValue {
	/**
	 * @access public
	 * @var string
	 */
	public $sublist;
	/**
	 * @access public
	 * @var string
	 */
	public $field;
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;

	static $paramtypesmap = array(
		"sublist" => "string",
		"field" => "string",
		"internalId" => "string",
	);
}}

if (!class_exists("GetServerTimeResult")) {
/**
 * GetServerTimeResult
 */
class GetServerTimeResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $serverTime;

	static $paramtypesmap = array(
		"status" => "Status",
		"serverTime" => "dateTime",
	);
}}

if (!class_exists("DeletedRecord")) {
/**
 * DeletedRecord
 */
class DeletedRecord {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $deletedDate;
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $record;

	static $paramtypesmap = array(
		"deletedDate" => "dateTime",
		"record" => "BaseRef",
	);
}}

if (!class_exists("DeletedRecordList")) {
/**
 * DeletedRecordList
 */
class DeletedRecordList {
	/**
	 * @access public
	 * @var DeletedRecord[]
	 */
	public $deletedRecord;

	static $paramtypesmap = array(
		"deletedRecord" => "DeletedRecord[]",
	);
}}

if (!class_exists("GetDeletedResult")) {
/**
 * GetDeletedResult
 */
class GetDeletedResult {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalRecords;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageSize;
	/**
	 * @access public
	 * @var integer
	 */
	public $totalPages;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;
	/**
	 * @access public
	 * @var DeletedRecordList
	 */
	public $deletedRecordList;

	static $paramtypesmap = array(
		"status" => "Status",
		"totalRecords" => "integer",
		"pageSize" => "integer",
		"totalPages" => "integer",
		"pageIndex" => "integer",
		"deletedRecordList" => "DeletedRecordList",
	);
}}

if (!class_exists("GetDeletedFilter")) {
/**
 * GetDeletedFilter
 */
class GetDeletedFilter {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $deletedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"deletedDate" => "SearchDateField",
		"type" => "SearchEnumMultiSelectField",
		"scriptId" => "SearchStringField",
	);
}}

if (!class_exists("AttachReference")) {
/**
 * AttachReference
 */
class AttachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $attachTo;

	static $paramtypesmap = array(
		"attachTo" => "BaseRef",
	);
}}

if (!class_exists("DetachReference")) {
/**
 * DetachReference
 */
class DetachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $detachFrom;

	static $paramtypesmap = array(
		"detachFrom" => "BaseRef",
	);
}}

if (!class_exists("AttachContactReference")) {
/**
 * AttachContactReference
 */
class AttachContactReference extends AttachReference {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contact;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $contactRole;

	static $paramtypesmap = array(
		"contact" => "RecordRef",
		"contactRole" => "RecordRef",
	);
}}

if (!class_exists("AttachBasicReference")) {
/**
 * AttachBasicReference
 */
class AttachBasicReference extends AttachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $attachedRecord;

	static $paramtypesmap = array(
		"attachedRecord" => "BaseRef",
	);
}}

if (!class_exists("DetachBasicReference")) {
/**
 * DetachBasicReference
 */
class DetachBasicReference extends DetachReference {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $detachedRecord;

	static $paramtypesmap = array(
		"detachedRecord" => "BaseRef",
	);
}}

if (!class_exists("DeletionReason")) {
/**
 * DeletionReason
 */
class DeletionReason {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $deletionReasonCode;
	/**
	 * @access public
	 * @var string
	 */
	public $deletionReasonMemo;

	static $paramtypesmap = array(
		"deletionReasonCode" => "RecordRef",
		"deletionReasonMemo" => "string",
	);
}}

if (!class_exists("NSSoapFault")) {
/**
 * NSSoapFault
 */
class NSSoapFault {
	/**
	 * @access public
	 * @var FaultCodeType
	 */
	public $code;
	/**
	 * @access public
	 * @var string
	 */
	public $message;

	static $paramtypesmap = array(
		"code" => "FaultCodeType",
		"message" => "string",
	);
}}

if (!class_exists("InsufficientPermissionFault")) {
/**
 * InsufficientPermissionFault
 */
class InsufficientPermissionFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("InvalidAccountFault")) {
/**
 * InvalidAccountFault
 */
class InvalidAccountFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("InvalidCredentialsFault")) {
/**
 * InvalidCredentialsFault
 */
class InvalidCredentialsFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("InvalidSessionFault")) {
/**
 * InvalidSessionFault
 */
class InvalidSessionFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("ExceededConcurrentRequestLimitFault")) {
/**
 * ExceededConcurrentRequestLimitFault
 */
class ExceededConcurrentRequestLimitFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("ExceededRequestLimitFault")) {
/**
 * ExceededRequestLimitFault
 */
class ExceededRequestLimitFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("ExceededUsageLimitFault")) {
/**
 * ExceededUsageLimitFault
 */
class ExceededUsageLimitFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("ExceededRecordCountFault")) {
/**
 * ExceededRecordCountFault
 */
class ExceededRecordCountFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("InvalidVersionFault")) {
/**
 * InvalidVersionFault
 */
class InvalidVersionFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("ExceededRequestSizeFault")) {
/**
 * ExceededRequestSizeFault
 */
class ExceededRequestSizeFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("AsyncFault")) {
/**
 * AsyncFault
 */
class AsyncFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("UnexpectedErrorFault")) {
/**
 * UnexpectedErrorFault
 */
class UnexpectedErrorFault extends NSSoapFault {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("ApplicationInfo")) {
/**
 * ApplicationInfo
 */
class ApplicationInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $applicationId;

	static $paramtypesmap = array(
		"applicationId" => "string",
	);
}}

if (!class_exists("PartnerInfo")) {
/**
 * PartnerInfo
 */
class PartnerInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $partnerId;

	static $paramtypesmap = array(
		"partnerId" => "string",
	);
}}

if (!class_exists("DocumentInfo")) {
/**
 * DocumentInfo
 */
class DocumentInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $nsId;

	static $paramtypesmap = array(
		"nsId" => "string",
	);
}}

if (!class_exists("Preferences")) {
/**
 * Preferences
 */
class Preferences {
	/**
	 * @access public
	 * @var boolean
	 */
	public $warningAsError;
	/**
	 * @access public
	 * @var boolean
	 */
	public $disableMandatoryCustomFieldValidation;
	/**
	 * @access public
	 * @var boolean
	 */
	public $disableSystemNotesForCustomFields;
	/**
	 * @access public
	 * @var boolean
	 */
	public $ignoreReadOnlyFields;

	static $paramtypesmap = array(
		"warningAsError" => "boolean",
		"disableMandatoryCustomFieldValidation" => "boolean",
		"disableSystemNotesForCustomFields" => "boolean",
		"ignoreReadOnlyFields" => "boolean",
	);
}}

if (!class_exists("SearchPreferences")) {
/**
 * SearchPreferences
 */
class SearchPreferences {
	/**
	 * @access public
	 * @var boolean
	 */
	public $bodyFieldsOnly;
	/**
	 * @access public
	 * @var boolean
	 */
	public $returnSearchColumns;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageSize;

	static $paramtypesmap = array(
		"bodyFieldsOnly" => "boolean",
		"returnSearchColumns" => "boolean",
		"pageSize" => "integer",
	);
}}

if (!class_exists("SessionResponse")) {
/**
 * SessionResponse
 */
class SessionResponse {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $userId;
	/**
	 * @access public
	 * @var WsRoleList
	 */
	public $wsRoleList;

	static $paramtypesmap = array(
		"status" => "Status",
		"userId" => "RecordRef",
		"wsRoleList" => "WsRoleList",
	);
}}

if (!class_exists("WriteResponse")) {
/**
 * WriteResponse
 */
class WriteResponse {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"status" => "Status",
		"baseRef" => "BaseRef",
	);
}}

if (!class_exists("ReadResponse")) {
/**
 * ReadResponse
 */
class ReadResponse {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var Record
	 */
	public $record;

	static $paramtypesmap = array(
		"status" => "Status",
		"record" => "Record",
	);
}}

if (!class_exists("WriteResponseList")) {
/**
 * WriteResponseList
 */
class WriteResponseList {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var WriteResponse[]
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"status" => "Status",
		"writeResponse" => "WriteResponse[]",
	);
}}

if (!class_exists("ReadResponseList")) {
/**
 * ReadResponseList
 */
class ReadResponseList {
	/**
	 * @access public
	 * @var Status
	 */
	public $status;
	/**
	 * @access public
	 * @var ReadResponse[]
	 */
	public $readResponse;

	static $paramtypesmap = array(
		"status" => "Status",
		"readResponse" => "ReadResponse[]",
	);
}}

if (!class_exists("LoginResponse")) {
/**
 * LoginResponse
 */
class LoginResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
}}

if (!class_exists("SsoLoginResponse")) {
/**
 * SsoLoginResponse
 */
class SsoLoginResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
}}

if (!class_exists("MapSsoResponse")) {
/**
 * MapSsoResponse
 */
class MapSsoResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
}}

if (!class_exists("ChangePasswordResponse")) {
/**
 * ChangePasswordResponse
 */
class ChangePasswordResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
}}

if (!class_exists("ChangeEmailResponse")) {
/**
 * ChangeEmailResponse
 */
class ChangeEmailResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
}}

if (!class_exists("LogoutResponse")) {
/**
 * LogoutResponse
 */
class LogoutResponse {
	/**
	 * @access public
	 * @var SessionResponse
	 */
	public $sessionResponse;

	static $paramtypesmap = array(
		"sessionResponse" => "SessionResponse",
	);
}}

if (!class_exists("AddResponse")) {
/**
 * AddResponse
 */
class AddResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}}

if (!class_exists("AddListResponse")) {
/**
 * AddListResponse
 */
class AddListResponse {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("UpdateResponse")) {
/**
 * UpdateResponse
 */
class UpdateResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}}

if (!class_exists("UpdateListResponse")) {
/**
 * UpdateListResponse
 */
class UpdateListResponse {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("UpsertResponse")) {
/**
 * UpsertResponse
 */
class UpsertResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}}

if (!class_exists("UpsertListResponse")) {
/**
 * UpsertListResponse
 */
class UpsertListResponse {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("DeleteResponse")) {
/**
 * DeleteResponse
 */
class DeleteResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}}

if (!class_exists("DeleteListResponse")) {
/**
 * DeleteListResponse
 */
class DeleteListResponse {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("SearchResponse")) {
/**
 * SearchResponse
 */
class SearchResponse {
	/**
	 * @access public
	 * @var SearchResult
	 */
	public $searchResult;

	static $paramtypesmap = array(
		"searchResult" => "SearchResult",
	);
}}

if (!class_exists("SearchMoreResponse")) {
/**
 * SearchMoreResponse
 */
class SearchMoreResponse {
	/**
	 * @access public
	 * @var SearchResult
	 */
	public $searchResult;

	static $paramtypesmap = array(
		"searchResult" => "SearchResult",
	);
}}

if (!class_exists("SearchMoreWithIdResponse")) {
/**
 * SearchMoreWithIdResponse
 */
class SearchMoreWithIdResponse {
	/**
	 * @access public
	 * @var SearchResult
	 */
	public $searchResult;

	static $paramtypesmap = array(
		"searchResult" => "SearchResult",
	);
}}

if (!class_exists("SearchNextResponse")) {
/**
 * SearchNextResponse
 */
class SearchNextResponse {
	/**
	 * @access public
	 * @var SearchResult
	 */
	public $searchResult;

	static $paramtypesmap = array(
		"searchResult" => "SearchResult",
	);
}}

if (!class_exists("GetResponse")) {
/**
 * GetResponse
 */
class GetResponse {
	/**
	 * @access public
	 * @var ReadResponse
	 */
	public $readResponse;

	static $paramtypesmap = array(
		"readResponse" => "ReadResponse",
	);
}}

if (!class_exists("GetListResponse")) {
/**
 * GetListResponse
 */
class GetListResponse {
	/**
	 * @access public
	 * @var ReadResponseList
	 */
	public $readResponseList;

	static $paramtypesmap = array(
		"readResponseList" => "ReadResponseList",
	);
}}

if (!class_exists("GetAllResponse")) {
/**
 * GetAllResponse
 */
class GetAllResponse {
	/**
	 * @access public
	 * @var GetAllResult
	 */
	public $getAllResult;

	static $paramtypesmap = array(
		"getAllResult" => "GetAllResult",
	);
}}

if (!class_exists("GetSavedSearchResponse")) {
/**
 * GetSavedSearchResponse
 */
class GetSavedSearchResponse {
	/**
	 * @access public
	 * @var GetSavedSearchResult
	 */
	public $getSavedSearchResult;

	static $paramtypesmap = array(
		"getSavedSearchResult" => "GetSavedSearchResult",
	);
}}

if (!class_exists("GetCustomizationIdResponse")) {
/**
 * GetCustomizationIdResponse
 */
class GetCustomizationIdResponse {
	/**
	 * @access public
	 * @var GetCustomizationIdResult
	 */
	public $getCustomizationIdResult;

	static $paramtypesmap = array(
		"getCustomizationIdResult" => "GetCustomizationIdResult",
	);
}}

if (!class_exists("InitializeResponse")) {
/**
 * InitializeResponse
 */
class InitializeResponse {
	/**
	 * @access public
	 * @var ReadResponse
	 */
	public $readResponse;

	static $paramtypesmap = array(
		"readResponse" => "ReadResponse",
	);
}}

if (!class_exists("InitializeListResponse")) {
/**
 * InitializeListResponse
 */
class InitializeListResponse {
	/**
	 * @access public
	 * @var ReadResponseList
	 */
	public $readResponseList;

	static $paramtypesmap = array(
		"readResponseList" => "ReadResponseList",
	);
}}

if (!class_exists("getSelectValueResponse")) {
/**
 * getSelectValueResponse
 */
class getSelectValueResponse {
	/**
	 * @access public
	 * @var GetSelectValueResult
	 */
	public $getSelectValueResult;

	static $paramtypesmap = array(
		"getSelectValueResult" => "GetSelectValueResult",
	);
}}

if (!class_exists("GetItemAvailabilityResponse")) {
/**
 * GetItemAvailabilityResponse
 */
class GetItemAvailabilityResponse {
	/**
	 * @access public
	 * @var GetItemAvailabilityResult
	 */
	public $getItemAvailabilityResult;

	static $paramtypesmap = array(
		"getItemAvailabilityResult" => "GetItemAvailabilityResult",
	);
}}

if (!class_exists("GetBudgetExchangeRateResponse")) {
/**
 * GetBudgetExchangeRateResponse
 */
class GetBudgetExchangeRateResponse {
	/**
	 * @access public
	 * @var GetBudgetExchangeRateResult
	 */
	public $getBudgetExchangeRateResult;

	static $paramtypesmap = array(
		"getBudgetExchangeRateResult" => "GetBudgetExchangeRateResult",
	);
}}

if (!class_exists("GetConsolidatedExchangeRateResponse")) {
/**
 * GetConsolidatedExchangeRateResponse
 */
class GetConsolidatedExchangeRateResponse {
	/**
	 * @access public
	 * @var GetConsolidatedExchangeRateResult
	 */
	public $getConsolidatedExchangeRateResult;

	static $paramtypesmap = array(
		"getConsolidatedExchangeRateResult" => "GetConsolidatedExchangeRateResult",
	);
}}

if (!class_exists("GetCurrencyRateResponse")) {
/**
 * GetCurrencyRateResponse
 */
class GetCurrencyRateResponse {
	/**
	 * @access public
	 * @var GetCurrencyRateResult
	 */
	public $getCurrencyRateResult;

	static $paramtypesmap = array(
		"getCurrencyRateResult" => "GetCurrencyRateResult",
	);
}}

if (!class_exists("GetDataCenterUrlsResponse")) {
/**
 * GetDataCenterUrlsResponse
 */
class GetDataCenterUrlsResponse {
	/**
	 * @access public
	 * @var GetDataCenterUrlsResult
	 */
	public $getDataCenterUrlsResult;

	static $paramtypesmap = array(
		"getDataCenterUrlsResult" => "GetDataCenterUrlsResult",
	);
}}

if (!class_exists("GetPostingTransactionSummaryResponse")) {
/**
 * GetPostingTransactionSummaryResponse
 */
class GetPostingTransactionSummaryResponse {
	/**
	 * @access public
	 * @var GetPostingTransactionSummaryResult
	 */
	public $getPostingTransactionSummaryResult;

	static $paramtypesmap = array(
		"getPostingTransactionSummaryResult" => "GetPostingTransactionSummaryResult",
	);
}}

if (!class_exists("GetServerTimeResponse")) {
/**
 * GetServerTimeResponse
 */
class GetServerTimeResponse {
	/**
	 * @access public
	 * @var GetServerTimeResult
	 */
	public $getServerTimeResult;

	static $paramtypesmap = array(
		"getServerTimeResult" => "GetServerTimeResult",
	);
}}

if (!class_exists("AttachResponse")) {
/**
 * AttachResponse
 */
class AttachResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}}

if (!class_exists("DetachResponse")) {
/**
 * DetachResponse
 */
class DetachResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}}

if (!class_exists("UpdateInviteeStatusResponse")) {
/**
 * UpdateInviteeStatusResponse
 */
class UpdateInviteeStatusResponse {
	/**
	 * @access public
	 * @var WriteResponse
	 */
	public $writeResponse;

	static $paramtypesmap = array(
		"writeResponse" => "WriteResponse",
	);
}}

if (!class_exists("UpdateInviteeStatusListResponse")) {
/**
 * UpdateInviteeStatusListResponse
 */
class UpdateInviteeStatusListResponse {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("AsyncStatusResponse")) {
/**
 * AsyncStatusResponse
 */
class AsyncStatusResponse {
	/**
	 * @access public
	 * @var AsyncStatusResult
	 */
	public $asyncStatusResult;

	static $paramtypesmap = array(
		"asyncStatusResult" => "AsyncStatusResult",
	);
}}

if (!class_exists("GetAsyncResultResponse")) {
/**
 * GetAsyncResultResponse
 */
class GetAsyncResultResponse {
	/**
	 * @access public
	 * @var AsyncResult
	 */
	public $asyncResult;

	static $paramtypesmap = array(
		"asyncResult" => "AsyncResult",
	);
}}

if (!class_exists("AsyncResult")) {
/**
 * AsyncResult
 */
class AsyncResult {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("AsyncAddListResult")) {
/**
 * AsyncAddListResult
 */
class AsyncAddListResult extends AsyncResult {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("AsyncUpdateListResult")) {
/**
 * AsyncUpdateListResult
 */
class AsyncUpdateListResult extends AsyncResult {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("AsyncUpsertListResult")) {
/**
 * AsyncUpsertListResult
 */
class AsyncUpsertListResult extends AsyncResult {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("AsyncDeleteListResult")) {
/**
 * AsyncDeleteListResult
 */
class AsyncDeleteListResult extends AsyncResult {
	/**
	 * @access public
	 * @var WriteResponseList
	 */
	public $writeResponseList;

	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}}

if (!class_exists("AsyncGetListResult")) {
/**
 * AsyncGetListResult
 */
class AsyncGetListResult extends AsyncResult {
	/**
	 * @access public
	 * @var ReadResponseList
	 */
	public $readResponseList;

	static $paramtypesmap = array(
		"readResponseList" => "ReadResponseList",
	);
}}

if (!class_exists("AsyncSearchResult")) {
/**
 * AsyncSearchResult
 */
class AsyncSearchResult extends AsyncResult {
	/**
	 * @access public
	 * @var SearchResult
	 */
	public $searchResult;

	static $paramtypesmap = array(
		"searchResult" => "SearchResult",
	);
}}

if (!class_exists("AsyncInitializeListResult")) {
/**
 * AsyncInitializeListResult
 */
class AsyncInitializeListResult extends AsyncResult {
	/**
	 * @access public
	 * @var ReadResponseList
	 */
	public $readResponseList;

	static $paramtypesmap = array(
		"readResponseList" => "ReadResponseList",
	);
}}

if (!class_exists("GetDeletedResponse")) {
/**
 * GetDeletedResponse
 */
class GetDeletedResponse {
	/**
	 * @access public
	 * @var GetDeletedResult
	 */
	public $getDeletedResult;

	static $paramtypesmap = array(
		"getDeletedResult" => "GetDeletedResult",
	);
}}

if (!class_exists("LoginRequest")) {
/**
 * LoginRequest
 */
class LoginRequest {
	/**
	 * @access public
	 * @var Passport
	 */
	public $passport;

	static $paramtypesmap = array(
		"passport" => "Passport",
	);
}}

if (!class_exists("SsoLoginRequest")) {
/**
 * SsoLoginRequest
 */
class SsoLoginRequest {
	/**
	 * @access public
	 * @var SsoPassport
	 */
	public $ssoPassport;

	static $paramtypesmap = array(
		"ssoPassport" => "SsoPassport",
	);
}}

if (!class_exists("MapSsoRequest")) {
/**
 * MapSsoRequest
 */
class MapSsoRequest {
	/**
	 * @access public
	 * @var SsoCredentials
	 */
	public $ssoCredentials;

	static $paramtypesmap = array(
		"ssoCredentials" => "SsoCredentials",
	);
}}

if (!class_exists("ChangePasswordRequest")) {
/**
 * ChangePasswordRequest
 */
class ChangePasswordRequest {
	/**
	 * @access public
	 * @var ChangePassword
	 */
	public $changePassword;

	static $paramtypesmap = array(
		"changePassword" => "ChangePassword",
	);
}}

if (!class_exists("ChangeEmailRequest")) {
/**
 * ChangeEmailRequest
 */
class ChangeEmailRequest {
	/**
	 * @access public
	 * @var ChangeEmail
	 */
	public $changeEmail;

	static $paramtypesmap = array(
		"changeEmail" => "ChangeEmail",
	);
}}

if (!class_exists("LogoutRequest")) {
/**
 * LogoutRequest
 */
class LogoutRequest {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("AddRequest")) {
/**
 * AddRequest
 */
class AddRequest {
	/**
	 * @access public
	 * @var Record
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record",
	);
}}

if (!class_exists("DeleteRequest")) {
/**
 * DeleteRequest
 */
class DeleteRequest {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $baseRef;
	/**
	 * @access public
	 * @var DeletionReason
	 */
	public $deletionReason;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef",
		"deletionReason" => "DeletionReason",
	);
}}

if (!class_exists("SearchRequest")) {
/**
 * SearchRequest
 */
class SearchRequest {
	/**
	 * @access public
	 * @var SearchRecord
	 */
	public $searchRecord;

	static $paramtypesmap = array(
		"searchRecord" => "SearchRecord",
	);
}}

if (!class_exists("SearchMoreRequest")) {
/**
 * SearchMoreRequest
 */
class SearchMoreRequest {
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"pageIndex" => "integer",
	);
}}

if (!class_exists("SearchMoreWithIdRequest")) {
/**
 * SearchMoreWithIdRequest
 */
class SearchMoreWithIdRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $searchId;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"searchId" => "string",
		"pageIndex" => "integer",
	);
}}

if (!class_exists("SearchNextRequest")) {
/**
 * SearchNextRequest
 */
class SearchNextRequest {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("UpdateRequest")) {
/**
 * UpdateRequest
 */
class UpdateRequest {
	/**
	 * @access public
	 * @var Record
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record",
	);
}}

if (!class_exists("UpsertRequest")) {
/**
 * UpsertRequest
 */
class UpsertRequest {
	/**
	 * @access public
	 * @var Record
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record",
	);
}}

if (!class_exists("AddListRequest")) {
/**
 * AddListRequest
 */
class AddListRequest {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
}}

if (!class_exists("DeleteListRequest")) {
/**
 * DeleteListRequest
 */
class DeleteListRequest {
	/**
	 * @access public
	 * @var BaseRef[]
	 */
	public $baseRef;
	/**
	 * @access public
	 * @var DeletionReason
	 */
	public $deletionReason;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
		"deletionReason" => "DeletionReason",
	);
}}

if (!class_exists("UpdateListRequest")) {
/**
 * UpdateListRequest
 */
class UpdateListRequest {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
}}

if (!class_exists("UpsertListRequest")) {
/**
 * UpsertListRequest
 */
class UpsertListRequest {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
}}

if (!class_exists("GetRequest")) {
/**
 * GetRequest
 */
class GetRequest {
	/**
	 * @access public
	 * @var BaseRef
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef",
	);
}}

if (!class_exists("GetListRequest")) {
/**
 * GetListRequest
 */
class GetListRequest {
	/**
	 * @access public
	 * @var BaseRef[]
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
	);
}}

if (!class_exists("GetAllRequest")) {
/**
 * GetAllRequest
 */
class GetAllRequest {
	/**
	 * @access public
	 * @var GetAllRecord
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "GetAllRecord",
	);
}}

if (!class_exists("GetSavedSearchRequest")) {
/**
 * GetSavedSearchRequest
 */
class GetSavedSearchRequest {
	/**
	 * @access public
	 * @var GetSavedSearchRecord
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "GetSavedSearchRecord",
	);
}}

if (!class_exists("GetCustomizationIdRequest")) {
/**
 * GetCustomizationIdRequest
 */
class GetCustomizationIdRequest {
	/**
	 * @access public
	 * @var CustomizationType
	 */
	public $customizationType;
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeInactives;

	static $paramtypesmap = array(
		"customizationType" => "CustomizationType",
		"includeInactives" => "boolean",
	);
}}

if (!class_exists("InitializeRequest")) {
/**
 * InitializeRequest
 */
class InitializeRequest {
	/**
	 * @access public
	 * @var InitializeRecord
	 */
	public $initializeRecord;

	static $paramtypesmap = array(
		"initializeRecord" => "InitializeRecord",
	);
}}

if (!class_exists("InitializeListRequest")) {
/**
 * InitializeListRequest
 */
class InitializeListRequest {
	/**
	 * @access public
	 * @var InitializeRecord[]
	 */
	public $initializeRecord;

	static $paramtypesmap = array(
		"initializeRecord" => "InitializeRecord[]",
	);
}}

if (!class_exists("getSelectValueRequest")) {
/**
 * getSelectValueRequest
 */
class getSelectValueRequest {
	/**
	 * @access public
	 * @var GetSelectValueFieldDescription
	 */
	public $fieldDescription;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"fieldDescription" => "GetSelectValueFieldDescription",
		"pageIndex" => "integer",
	);
}}

if (!class_exists("GetItemAvailabilityRequest")) {
/**
 * GetItemAvailabilityRequest
 */
class GetItemAvailabilityRequest {
	/**
	 * @access public
	 * @var ItemAvailabilityFilter
	 */
	public $itemAvailabilityFilter;

	static $paramtypesmap = array(
		"itemAvailabilityFilter" => "ItemAvailabilityFilter",
	);
}}

if (!class_exists("GetBudgetExchangeRateRequest")) {
/**
 * GetBudgetExchangeRateRequest
 */
class GetBudgetExchangeRateRequest {
	/**
	 * @access public
	 * @var BudgetExchangeRateFilter
	 */
	public $budgetExchangeRateFilter;

	static $paramtypesmap = array(
		"budgetExchangeRateFilter" => "BudgetExchangeRateFilter",
	);
}}

if (!class_exists("GetConsolidatedExchangeRateRequest")) {
/**
 * GetConsolidatedExchangeRateRequest
 */
class GetConsolidatedExchangeRateRequest {
	/**
	 * @access public
	 * @var ConsolidatedExchangeRateFilter
	 */
	public $consolidatedExchangeRateFilter;

	static $paramtypesmap = array(
		"consolidatedExchangeRateFilter" => "ConsolidatedExchangeRateFilter",
	);
}}

if (!class_exists("GetCurrencyRateRequest")) {
/**
 * GetCurrencyRateRequest
 */
class GetCurrencyRateRequest {
	/**
	 * @access public
	 * @var CurrencyRateFilter
	 */
	public $currencyRateFilter;

	static $paramtypesmap = array(
		"currencyRateFilter" => "CurrencyRateFilter",
	);
}}

if (!class_exists("GetDataCenterUrlsRequest")) {
/**
 * GetDataCenterUrlsRequest
 */
class GetDataCenterUrlsRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $account;

	static $paramtypesmap = array(
		"account" => "string",
	);
}}

if (!class_exists("GetPostingTransactionSummaryRequest")) {
/**
 * GetPostingTransactionSummaryRequest
 */
class GetPostingTransactionSummaryRequest {
	/**
	 * @access public
	 * @var PostingTransactionSummaryField
	 */
	public $fields;
	/**
	 * @access public
	 * @var PostingTransactionSummaryFilter
	 */
	public $filters;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"fields" => "PostingTransactionSummaryField",
		"filters" => "PostingTransactionSummaryFilter",
		"pageIndex" => "integer",
	);
}}

if (!class_exists("GetServerTimeRequest")) {
/**
 * GetServerTimeRequest
 */
class GetServerTimeRequest {

	static $paramtypesmap = array(
	);
}}

if (!class_exists("AttachRequest")) {
/**
 * AttachRequest
 */
class AttachRequest {
	/**
	 * @access public
	 * @var AttachReference
	 */
	public $attachReference;

	static $paramtypesmap = array(
		"attachReference" => "AttachReference",
	);
}}

if (!class_exists("DetachRequest")) {
/**
 * DetachRequest
 */
class DetachRequest {
	/**
	 * @access public
	 * @var DetachReference
	 */
	public $detachReference;

	static $paramtypesmap = array(
		"detachReference" => "DetachReference",
	);
}}

if (!class_exists("AsyncAddListRequest")) {
/**
 * AsyncAddListRequest
 */
class AsyncAddListRequest {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
}}

if (!class_exists("UpdateInviteeStatusRequest")) {
/**
 * UpdateInviteeStatusRequest
 */
class UpdateInviteeStatusRequest {
	/**
	 * @access public
	 * @var UpdateInviteeStatusReference
	 */
	public $updateInviteeStatusReference;

	static $paramtypesmap = array(
		"updateInviteeStatusReference" => "UpdateInviteeStatusReference",
	);
}}

if (!class_exists("UpdateInviteeStatusListRequest")) {
/**
 * UpdateInviteeStatusListRequest
 */
class UpdateInviteeStatusListRequest {
	/**
	 * @access public
	 * @var UpdateInviteeStatusReference[]
	 */
	public $updateInviteeStatusReference;

	static $paramtypesmap = array(
		"updateInviteeStatusReference" => "UpdateInviteeStatusReference[]",
	);
}}

if (!class_exists("AsyncUpdateListRequest")) {
/**
 * AsyncUpdateListRequest
 */
class AsyncUpdateListRequest {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
}}

if (!class_exists("AsyncUpsertListRequest")) {
/**
 * AsyncUpsertListRequest
 */
class AsyncUpsertListRequest {
	/**
	 * @access public
	 * @var Record[]
	 */
	public $record;

	static $paramtypesmap = array(
		"record" => "Record[]",
	);
}}

if (!class_exists("AsyncDeleteListRequest")) {
/**
 * AsyncDeleteListRequest
 */
class AsyncDeleteListRequest {
	/**
	 * @access public
	 * @var BaseRef[]
	 */
	public $baseRef;
	/**
	 * @access public
	 * @var DeletionReason
	 */
	public $deletionReason;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
		"deletionReason" => "DeletionReason",
	);
}}

if (!class_exists("AsyncGetListRequest")) {
/**
 * AsyncGetListRequest
 */
class AsyncGetListRequest {
	/**
	 * @access public
	 * @var BaseRef[]
	 */
	public $baseRef;

	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
	);
}}

if (!class_exists("AsyncInitializeListRequest")) {
/**
 * AsyncInitializeListRequest
 */
class AsyncInitializeListRequest {
	/**
	 * @access public
	 * @var InitializeRecord[]
	 */
	public $initializeRecord;

	static $paramtypesmap = array(
		"initializeRecord" => "InitializeRecord[]",
	);
}}

if (!class_exists("AsyncSearchRequest")) {
/**
 * AsyncSearchRequest
 */
class AsyncSearchRequest {
	/**
	 * @access public
	 * @var SearchRecord
	 */
	public $searchRecord;

	static $paramtypesmap = array(
		"searchRecord" => "SearchRecord",
	);
}}

if (!class_exists("CheckAsyncStatusRequest")) {
/**
 * CheckAsyncStatusRequest
 */
class CheckAsyncStatusRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;

	static $paramtypesmap = array(
		"jobId" => "string",
	);
}}

if (!class_exists("GetAsyncResultRequest")) {
/**
 * GetAsyncResultRequest
 */
class GetAsyncResultRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $jobId;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"jobId" => "string",
		"pageIndex" => "integer",
	);
}}

if (!class_exists("GetDeletedRequest")) {
/**
 * GetDeletedRequest
 */
class GetDeletedRequest {
	/**
	 * @access public
	 * @var GetDeletedFilter
	 */
	public $getDeletedFilter;
	/**
	 * @access public
	 * @var integer
	 */
	public $pageIndex;

	static $paramtypesmap = array(
		"getDeletedFilter" => "GetDeletedFilter",
		"pageIndex" => "integer",
	);
}}

if (!class_exists("Country")) {
/**
 * Country
 */
class Country {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _afghanistan = "_afghanistan";
	/**
	 * @var string
	 */
	const _alandIslands = "_alandIslands";
	/**
	 * @var string
	 */
	const _albania = "_albania";
	/**
	 * @var string
	 */
	const _algeria = "_algeria";
	/**
	 * @var string
	 */
	const _americanSamoa = "_americanSamoa";
	/**
	 * @var string
	 */
	const _andorra = "_andorra";
	/**
	 * @var string
	 */
	const _angola = "_angola";
	/**
	 * @var string
	 */
	const _anguilla = "_anguilla";
	/**
	 * @var string
	 */
	const _antarctica = "_antarctica";
	/**
	 * @var string
	 */
	const _antiguaAndBarbuda = "_antiguaAndBarbuda";
	/**
	 * @var string
	 */
	const _argentina = "_argentina";
	/**
	 * @var string
	 */
	const _armenia = "_armenia";
	/**
	 * @var string
	 */
	const _aruba = "_aruba";
	/**
	 * @var string
	 */
	const _australia = "_australia";
	/**
	 * @var string
	 */
	const _austria = "_austria";
	/**
	 * @var string
	 */
	const _azerbaijan = "_azerbaijan";
	/**
	 * @var string
	 */
	const _bahamas = "_bahamas";
	/**
	 * @var string
	 */
	const _bahrain = "_bahrain";
	/**
	 * @var string
	 */
	const _bangladesh = "_bangladesh";
	/**
	 * @var string
	 */
	const _barbados = "_barbados";
	/**
	 * @var string
	 */
	const _belarus = "_belarus";
	/**
	 * @var string
	 */
	const _belgium = "_belgium";
	/**
	 * @var string
	 */
	const _belize = "_belize";
	/**
	 * @var string
	 */
	const _benin = "_benin";
	/**
	 * @var string
	 */
	const _bermuda = "_bermuda";
	/**
	 * @var string
	 */
	const _bhutan = "_bhutan";
	/**
	 * @var string
	 */
	const _bolivia = "_bolivia";
	/**
	 * @var string
	 */
	const _bonaireSaintEustatiusAndSaba = "_bonaireSaintEustatiusAndSaba";
	/**
	 * @var string
	 */
	const _bosniaAndHerzegovina = "_bosniaAndHerzegovina";
	/**
	 * @var string
	 */
	const _botswana = "_botswana";
	/**
	 * @var string
	 */
	const _bouvetIsland = "_bouvetIsland";
	/**
	 * @var string
	 */
	const _brazil = "_brazil";
	/**
	 * @var string
	 */
	const _britishIndianOceanTerritory = "_britishIndianOceanTerritory";
	/**
	 * @var string
	 */
	const _bruneiDarussalam = "_bruneiDarussalam";
	/**
	 * @var string
	 */
	const _bulgaria = "_bulgaria";
	/**
	 * @var string
	 */
	const _burkinaFaso = "_burkinaFaso";
	/**
	 * @var string
	 */
	const _burundi = "_burundi";
	/**
	 * @var string
	 */
	const _cambodia = "_cambodia";
	/**
	 * @var string
	 */
	const _cameroon = "_cameroon";
	/**
	 * @var string
	 */
	const _canada = "_canada";
	/**
	 * @var string
	 */
	const _canaryIslands = "_canaryIslands";
	/**
	 * @var string
	 */
	const _capeVerde = "_capeVerde";
	/**
	 * @var string
	 */
	const _caymanIslands = "_caymanIslands";
	/**
	 * @var string
	 */
	const _centralAfricanRepublic = "_centralAfricanRepublic";
	/**
	 * @var string
	 */
	const _ceutaAndMelilla = "_ceutaAndMelilla";
	/**
	 * @var string
	 */
	const _chad = "_chad";
	/**
	 * @var string
	 */
	const _chile = "_chile";
	/**
	 * @var string
	 */
	const _china = "_china";
	/**
	 * @var string
	 */
	const _christmasIsland = "_christmasIsland";
	/**
	 * @var string
	 */
	const _cocosKeelingIslands = "_cocosKeelingIslands";
	/**
	 * @var string
	 */
	const _colombia = "_colombia";
	/**
	 * @var string
	 */
	const _comoros = "_comoros";
	/**
	 * @var string
	 */
	const _congoDemocraticPeoplesRepublic = "_congoDemocraticPeoplesRepublic";
	/**
	 * @var string
	 */
	const _congoRepublicOf = "_congoRepublicOf";
	/**
	 * @var string
	 */
	const _cookIslands = "_cookIslands";
	/**
	 * @var string
	 */
	const _costaRica = "_costaRica";
	/**
	 * @var string
	 */
	const _coteDIvoire = "_coteDIvoire";
	/**
	 * @var string
	 */
	const _croatiaHrvatska = "_croatiaHrvatska";
	/**
	 * @var string
	 */
	const _cuba = "_cuba";
	/**
	 * @var string
	 */
	const _curacao = "_curacao";
	/**
	 * @var string
	 */
	const _cyprus = "_cyprus";
	/**
	 * @var string
	 */
	const _czechRepublic = "_czechRepublic";
	/**
	 * @var string
	 */
	const _denmark = "_denmark";
	/**
	 * @var string
	 */
	const _djibouti = "_djibouti";
	/**
	 * @var string
	 */
	const _dominica = "_dominica";
	/**
	 * @var string
	 */
	const _dominicanRepublic = "_dominicanRepublic";
	/**
	 * @var string
	 */
	const _eastTimor = "_eastTimor";
	/**
	 * @var string
	 */
	const _ecuador = "_ecuador";
	/**
	 * @var string
	 */
	const _egypt = "_egypt";
	/**
	 * @var string
	 */
	const _elSalvador = "_elSalvador";
	/**
	 * @var string
	 */
	const _equatorialGuinea = "_equatorialGuinea";
	/**
	 * @var string
	 */
	const _eritrea = "_eritrea";
	/**
	 * @var string
	 */
	const _estonia = "_estonia";
	/**
	 * @var string
	 */
	const _ethiopia = "_ethiopia";
	/**
	 * @var string
	 */
	const _falklandIslands = "_falklandIslands";
	/**
	 * @var string
	 */
	const _faroeIslands = "_faroeIslands";
	/**
	 * @var string
	 */
	const _fiji = "_fiji";
	/**
	 * @var string
	 */
	const _finland = "_finland";
	/**
	 * @var string
	 */
	const _france = "_france";
	/**
	 * @var string
	 */
	const _frenchGuiana = "_frenchGuiana";
	/**
	 * @var string
	 */
	const _frenchPolynesia = "_frenchPolynesia";
	/**
	 * @var string
	 */
	const _frenchSouthernTerritories = "_frenchSouthernTerritories";
	/**
	 * @var string
	 */
	const _gabon = "_gabon";
	/**
	 * @var string
	 */
	const _gambia = "_gambia";
	/**
	 * @var string
	 */
	const _georgia = "_georgia";
	/**
	 * @var string
	 */
	const _germany = "_germany";
	/**
	 * @var string
	 */
	const _ghana = "_ghana";
	/**
	 * @var string
	 */
	const _gibraltar = "_gibraltar";
	/**
	 * @var string
	 */
	const _greece = "_greece";
	/**
	 * @var string
	 */
	const _greenland = "_greenland";
	/**
	 * @var string
	 */
	const _grenada = "_grenada";
	/**
	 * @var string
	 */
	const _guadeloupe = "_guadeloupe";
	/**
	 * @var string
	 */
	const _guam = "_guam";
	/**
	 * @var string
	 */
	const _guatemala = "_guatemala";
	/**
	 * @var string
	 */
	const _guernsey = "_guernsey";
	/**
	 * @var string
	 */
	const _guinea = "_guinea";
	/**
	 * @var string
	 */
	const _guineaBissau = "_guineaBissau";
	/**
	 * @var string
	 */
	const _guyana = "_guyana";
	/**
	 * @var string
	 */
	const _haiti = "_haiti";
	/**
	 * @var string
	 */
	const _heardAndMcDonaldIslands = "_heardAndMcDonaldIslands";
	/**
	 * @var string
	 */
	const _holySeeCityVaticanState = "_holySeeCityVaticanState";
	/**
	 * @var string
	 */
	const _honduras = "_honduras";
	/**
	 * @var string
	 */
	const _hongKong = "_hongKong";
	/**
	 * @var string
	 */
	const _hungary = "_hungary";
	/**
	 * @var string
	 */
	const _iceland = "_iceland";
	/**
	 * @var string
	 */
	const _india = "_india";
	/**
	 * @var string
	 */
	const _indonesia = "_indonesia";
	/**
	 * @var string
	 */
	const _iranIslamicRepublicOf = "_iranIslamicRepublicOf";
	/**
	 * @var string
	 */
	const _iraq = "_iraq";
	/**
	 * @var string
	 */
	const _ireland = "_ireland";
	/**
	 * @var string
	 */
	const _isleOfMan = "_isleOfMan";
	/**
	 * @var string
	 */
	const _israel = "_israel";
	/**
	 * @var string
	 */
	const _italy = "_italy";
	/**
	 * @var string
	 */
	const _jamaica = "_jamaica";
	/**
	 * @var string
	 */
	const _japan = "_japan";
	/**
	 * @var string
	 */
	const _jersey = "_jersey";
	/**
	 * @var string
	 */
	const _jordan = "_jordan";
	/**
	 * @var string
	 */
	const _kazakhstan = "_kazakhstan";
	/**
	 * @var string
	 */
	const _kenya = "_kenya";
	/**
	 * @var string
	 */
	const _kiribati = "_kiribati";
	/**
	 * @var string
	 */
	const _koreaDemocraticPeoplesRepublic = "_koreaDemocraticPeoplesRepublic";
	/**
	 * @var string
	 */
	const _koreaRepublicOf = "_koreaRepublicOf";
	/**
	 * @var string
	 */
	const _kosovo = "_kosovo";
	/**
	 * @var string
	 */
	const _kuwait = "_kuwait";
	/**
	 * @var string
	 */
	const _kyrgyzstan = "_kyrgyzstan";
	/**
	 * @var string
	 */
	const _laoPeoplesDemocraticRepublic = "_laoPeoplesDemocraticRepublic";
	/**
	 * @var string
	 */
	const _latvia = "_latvia";
	/**
	 * @var string
	 */
	const _lebanon = "_lebanon";
	/**
	 * @var string
	 */
	const _lesotho = "_lesotho";
	/**
	 * @var string
	 */
	const _liberia = "_liberia";
	/**
	 * @var string
	 */
	const _libya = "_libya";
	/**
	 * @var string
	 */
	const _liechtenstein = "_liechtenstein";
	/**
	 * @var string
	 */
	const _lithuania = "_lithuania";
	/**
	 * @var string
	 */
	const _luxembourg = "_luxembourg";
	/**
	 * @var string
	 */
	const _macau = "_macau";
	/**
	 * @var string
	 */
	const _macedonia = "_macedonia";
	/**
	 * @var string
	 */
	const _madagascar = "_madagascar";
	/**
	 * @var string
	 */
	const _malawi = "_malawi";
	/**
	 * @var string
	 */
	const _malaysia = "_malaysia";
	/**
	 * @var string
	 */
	const _maldives = "_maldives";
	/**
	 * @var string
	 */
	const _mali = "_mali";
	/**
	 * @var string
	 */
	const _malta = "_malta";
	/**
	 * @var string
	 */
	const _marshallIslands = "_marshallIslands";
	/**
	 * @var string
	 */
	const _martinique = "_martinique";
	/**
	 * @var string
	 */
	const _mauritania = "_mauritania";
	/**
	 * @var string
	 */
	const _mauritius = "_mauritius";
	/**
	 * @var string
	 */
	const _mayotte = "_mayotte";
	/**
	 * @var string
	 */
	const _mexico = "_mexico";
	/**
	 * @var string
	 */
	const _micronesiaFederalStateOf = "_micronesiaFederalStateOf";
	/**
	 * @var string
	 */
	const _moldovaRepublicOf = "_moldovaRepublicOf";
	/**
	 * @var string
	 */
	const _monaco = "_monaco";
	/**
	 * @var string
	 */
	const _mongolia = "_mongolia";
	/**
	 * @var string
	 */
	const _montenegro = "_montenegro";
	/**
	 * @var string
	 */
	const _montserrat = "_montserrat";
	/**
	 * @var string
	 */
	const _morocco = "_morocco";
	/**
	 * @var string
	 */
	const _mozambique = "_mozambique";
	/**
	 * @var string
	 */
	const _myanmar = "_myanmar";
	/**
	 * @var string
	 */
	const _namibia = "_namibia";
	/**
	 * @var string
	 */
	const _nauru = "_nauru";
	/**
	 * @var string
	 */
	const _nepal = "_nepal";
	/**
	 * @var string
	 */
	const _netherlands = "_netherlands";
	/**
	 * @var string
	 */
	const _newCaledonia = "_newCaledonia";
	/**
	 * @var string
	 */
	const _newZealand = "_newZealand";
	/**
	 * @var string
	 */
	const _nicaragua = "_nicaragua";
	/**
	 * @var string
	 */
	const _niger = "_niger";
	/**
	 * @var string
	 */
	const _nigeria = "_nigeria";
	/**
	 * @var string
	 */
	const _niue = "_niue";
	/**
	 * @var string
	 */
	const _norfolkIsland = "_norfolkIsland";
	/**
	 * @var string
	 */
	const _northernMarianaIslands = "_northernMarianaIslands";
	/**
	 * @var string
	 */
	const _norway = "_norway";
	/**
	 * @var string
	 */
	const _oman = "_oman";
	/**
	 * @var string
	 */
	const _pakistan = "_pakistan";
	/**
	 * @var string
	 */
	const _palau = "_palau";
	/**
	 * @var string
	 */
	const _panama = "_panama";
	/**
	 * @var string
	 */
	const _papuaNewGuinea = "_papuaNewGuinea";
	/**
	 * @var string
	 */
	const _paraguay = "_paraguay";
	/**
	 * @var string
	 */
	const _peru = "_peru";
	/**
	 * @var string
	 */
	const _philippines = "_philippines";
	/**
	 * @var string
	 */
	const _pitcairnIsland = "_pitcairnIsland";
	/**
	 * @var string
	 */
	const _poland = "_poland";
	/**
	 * @var string
	 */
	const _portugal = "_portugal";
	/**
	 * @var string
	 */
	const _puertoRico = "_puertoRico";
	/**
	 * @var string
	 */
	const _qatar = "_qatar";
	/**
	 * @var string
	 */
	const _reunionIsland = "_reunionIsland";
	/**
	 * @var string
	 */
	const _romania = "_romania";
	/**
	 * @var string
	 */
	const _russianFederation = "_russianFederation";
	/**
	 * @var string
	 */
	const _rwanda = "_rwanda";
	/**
	 * @var string
	 */
	const _saintBarthelemy = "_saintBarthelemy";
	/**
	 * @var string
	 */
	const _saintHelena = "_saintHelena";
	/**
	 * @var string
	 */
	const _saintKittsAndNevis = "_saintKittsAndNevis";
	/**
	 * @var string
	 */
	const _saintLucia = "_saintLucia";
	/**
	 * @var string
	 */
	const _saintMartin = "_saintMartin";
	/**
	 * @var string
	 */
	const _saintVincentAndTheGrenadines = "_saintVincentAndTheGrenadines";
	/**
	 * @var string
	 */
	const _samoa = "_samoa";
	/**
	 * @var string
	 */
	const _sanMarino = "_sanMarino";
	/**
	 * @var string
	 */
	const _saoTomeAndPrincipe = "_saoTomeAndPrincipe";
	/**
	 * @var string
	 */
	const _saudiArabia = "_saudiArabia";
	/**
	 * @var string
	 */
	const _senegal = "_senegal";
	/**
	 * @var string
	 */
	const _serbia = "_serbia";
	/**
	 * @var string
	 */
	const _seychelles = "_seychelles";
	/**
	 * @var string
	 */
	const _sierraLeone = "_sierraLeone";
	/**
	 * @var string
	 */
	const _singapore = "_singapore";
	/**
	 * @var string
	 */
	const _sintMaarten = "_sintMaarten";
	/**
	 * @var string
	 */
	const _slovakRepublic = "_slovakRepublic";
	/**
	 * @var string
	 */
	const _slovenia = "_slovenia";
	/**
	 * @var string
	 */
	const _solomonIslands = "_solomonIslands";
	/**
	 * @var string
	 */
	const _somalia = "_somalia";
	/**
	 * @var string
	 */
	const _southAfrica = "_southAfrica";
	/**
	 * @var string
	 */
	const _southGeorgia = "_southGeorgia";
	/**
	 * @var string
	 */
	const _southSudan = "_southSudan";
	/**
	 * @var string
	 */
	const _spain = "_spain";
	/**
	 * @var string
	 */
	const _sriLanka = "_sriLanka";
	/**
	 * @var string
	 */
	const _stateOfPalestine = "_stateOfPalestine";
	/**
	 * @var string
	 */
	const _stPierreAndMiquelon = "_stPierreAndMiquelon";
	/**
	 * @var string
	 */
	const _sudan = "_sudan";
	/**
	 * @var string
	 */
	const _suriname = "_suriname";
	/**
	 * @var string
	 */
	const _svalbardAndJanMayenIslands = "_svalbardAndJanMayenIslands";
	/**
	 * @var string
	 */
	const _swaziland = "_swaziland";
	/**
	 * @var string
	 */
	const _sweden = "_sweden";
	/**
	 * @var string
	 */
	const _switzerland = "_switzerland";
	/**
	 * @var string
	 */
	const _syrianArabRepublic = "_syrianArabRepublic";
	/**
	 * @var string
	 */
	const _taiwan = "_taiwan";
	/**
	 * @var string
	 */
	const _tajikistan = "_tajikistan";
	/**
	 * @var string
	 */
	const _tanzania = "_tanzania";
	/**
	 * @var string
	 */
	const _thailand = "_thailand";
	/**
	 * @var string
	 */
	const _togo = "_togo";
	/**
	 * @var string
	 */
	const _tokelau = "_tokelau";
	/**
	 * @var string
	 */
	const _tonga = "_tonga";
	/**
	 * @var string
	 */
	const _trinidadAndTobago = "_trinidadAndTobago";
	/**
	 * @var string
	 */
	const _tunisia = "_tunisia";
	/**
	 * @var string
	 */
	const _turkey = "_turkey";
	/**
	 * @var string
	 */
	const _turkmenistan = "_turkmenistan";
	/**
	 * @var string
	 */
	const _turksAndCaicosIslands = "_turksAndCaicosIslands";
	/**
	 * @var string
	 */
	const _tuvalu = "_tuvalu";
	/**
	 * @var string
	 */
	const _uganda = "_uganda";
	/**
	 * @var string
	 */
	const _ukraine = "_ukraine";
	/**
	 * @var string
	 */
	const _unitedArabEmirates = "_unitedArabEmirates";
	/**
	 * @var string
	 */
	const _unitedKingdom = "_unitedKingdom";
	/**
	 * @var string
	 */
	const _unitedStates = "_unitedStates";
	/**
	 * @var string
	 */
	const _uruguay = "_uruguay";
	/**
	 * @var string
	 */
	const _uSMinorOutlyingIslands = "_uSMinorOutlyingIslands";
	/**
	 * @var string
	 */
	const _uzbekistan = "_uzbekistan";
	/**
	 * @var string
	 */
	const _vanuatu = "_vanuatu";
	/**
	 * @var string
	 */
	const _venezuela = "_venezuela";
	/**
	 * @var string
	 */
	const _vietnam = "_vietnam";
	/**
	 * @var string
	 */
	const _virginIslandsBritish = "_virginIslandsBritish";
	/**
	 * @var string
	 */
	const _virginIslandsUSA = "_virginIslandsUSA";
	/**
	 * @var string
	 */
	const _wallisAndFutunaIslands = "_wallisAndFutunaIslands";
	/**
	 * @var string
	 */
	const _westernSahara = "_westernSahara";
	/**
	 * @var string
	 */
	const _yemen = "_yemen";
	/**
	 * @var string
	 */
	const _zambia = "_zambia";
	/**
	 * @var string
	 */
	const _zimbabwe = "_zimbabwe";
}}

if (!class_exists("Language")) {
/**
 * Language
 */
class Language {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _arabic = "_arabic";
	/**
	 * @var string
	 */
	const _australian = "_australian";
	/**
	 * @var string
	 */
	const _bengali = "_bengali";
	/**
	 * @var string
	 */
	const _bulgarian = "_bulgarian";
	/**
	 * @var string
	 */
	const _catalan = "_catalan";
	/**
	 * @var string
	 */
	const _chineseSimplified = "_chineseSimplified";
	/**
	 * @var string
	 */
	const _chineseTraditional = "_chineseTraditional";
	/**
	 * @var string
	 */
	const _croatian = "_croatian";
	/**
	 * @var string
	 */
	const _czech = "_czech";
	/**
	 * @var string
	 */
	const _danish = "_danish";
	/**
	 * @var string
	 */
	const _dutch = "_dutch";
	/**
	 * @var string
	 */
	const _english = "_english";
	/**
	 * @var string
	 */
	const _estonian = "_estonian";
	/**
	 * @var string
	 */
	const _finnish = "_finnish";
	/**
	 * @var string
	 */
	const _frenchCanada = "_frenchCanada";
	/**
	 * @var string
	 */
	const _frenchFrance = "_frenchFrance";
	/**
	 * @var string
	 */
	const _german = "_german";
	/**
	 * @var string
	 */
	const _greek = "_greek";
	/**
	 * @var string
	 */
	const _haitian = "_haitian";
	/**
	 * @var string
	 */
	const _hebrew = "_hebrew";
	/**
	 * @var string
	 */
	const _hungarian = "_hungarian";
	/**
	 * @var string
	 */
	const _icelandic = "_icelandic";
	/**
	 * @var string
	 */
	const _indonesian = "_indonesian";
	/**
	 * @var string
	 */
	const _italian = "_italian";
	/**
	 * @var string
	 */
	const _japanese = "_japanese";
	/**
	 * @var string
	 */
	const _korean = "_korean";
	/**
	 * @var string
	 */
	const _latinAmericanSpanish = "_latinAmericanSpanish";
	/**
	 * @var string
	 */
	const _latvian = "_latvian";
	/**
	 * @var string
	 */
	const _lithuanian = "_lithuanian";
	/**
	 * @var string
	 */
	const _norwegian = "_norwegian";
	/**
	 * @var string
	 */
	const _polish = "_polish";
	/**
	 * @var string
	 */
	const _portugueseBrazil = "_portugueseBrazil";
	/**
	 * @var string
	 */
	const _portuguesePortugal = "_portuguesePortugal";
	/**
	 * @var string
	 */
	const _romanian = "_romanian";
	/**
	 * @var string
	 */
	const _russian = "_russian";
	/**
	 * @var string
	 */
	const _slovak = "_slovak";
	/**
	 * @var string
	 */
	const _slovenian = "_slovenian";
	/**
	 * @var string
	 */
	const _spanish = "_spanish";
	/**
	 * @var string
	 */
	const _swedish = "_swedish";
	/**
	 * @var string
	 */
	const _thai = "_thai";
	/**
	 * @var string
	 */
	const _turkish = "_turkish";
	/**
	 * @var string
	 */
	const _usEnglish = "_usEnglish";
	/**
	 * @var string
	 */
	const _vietnamese = "_vietnamese";
}}

if (!class_exists("AvsMatchCode")) {
/**
 * AvsMatchCode
 */
class AvsMatchCode {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _n = "_n";
	/**
	 * @var string
	 */
	const _x = "_x";
	/**
	 * @var string
	 */
	const _y = "_y";
}}

if (!class_exists("CscMatchCode")) {
/**
 * CscMatchCode
 */
class CscMatchCode {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _n = "_n";
	/**
	 * @var string
	 */
	const _x = "_x";
	/**
	 * @var string
	 */
	const _y = "_y";
}}

if (!class_exists("VsoeSopGroup")) {
/**
 * VsoeSopGroup
 */
class VsoeSopGroup {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _exclude = "_exclude";
	/**
	 * @var string
	 */
	const _normal = "_normal";
	/**
	 * @var string
	 */
	const _software = "_software";
}}

if (!class_exists("VsoeDeferral")) {
/**
 * VsoeDeferral
 */
class VsoeDeferral {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _deferBundleUntilDelivered = "_deferBundleUntilDelivered";
	/**
	 * @var string
	 */
	const _deferUntilItemDelivered = "_deferUntilItemDelivered";
}}

if (!class_exists("VsoePermitDiscount")) {
/**
 * VsoePermitDiscount
 */
class VsoePermitDiscount {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _asAllowed = "_asAllowed";
	/**
	 * @var string
	 */
	const _never = "_never";
}}

if (!class_exists("RevenueStatus")) {
/**
 * RevenueStatus
 */
class RevenueStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _pending = "_pending";
	/**
	 * @var string
	 */
	const _inProgress = "_inProgress";
	/**
	 * @var string
	 */
	const _completed = "_completed";
	/**
	 * @var string
	 */
	const _onRevCommitment = "_onRevCommitment";
}}

if (!class_exists("RevenueCommitStatus")) {
/**
 * RevenueCommitStatus
 */
class RevenueCommitStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _committed = "_committed";
	/**
	 * @var string
	 */
	const _partiallyCommitted = "_partiallyCommitted";
	/**
	 * @var string
	 */
	const _pendingCommitment = "_pendingCommitment";
}}

if (!class_exists("PostingPeriodDate")) {
/**
 * PostingPeriodDate
 */
class PostingPeriodDate {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _firstFiscalQuarterOfLastFy = "_firstFiscalQuarterOfLastFy";
	/**
	 * @var string
	 */
	const _firstFiscalQuarterOfThisFy = "_firstFiscalQuarterOfThisFy";
	/**
	 * @var string
	 */
	const _fiscalQuarterBeforeLast = "_fiscalQuarterBeforeLast";
	/**
	 * @var string
	 */
	const _fiscalYearBeforeLast = "_fiscalYearBeforeLast";
	/**
	 * @var string
	 */
	const _fourthFiscalQuarterOfLastFy = "_fourthFiscalQuarterOfLastFy";
	/**
	 * @var string
	 */
	const _fourthFiscalQuarterOfThisFy = "_fourthFiscalQuarterOfThisFy";
	/**
	 * @var string
	 */
	const _lastFiscalQuarter = "_lastFiscalQuarter";
	/**
	 * @var string
	 */
	const _lastFiscalQuarterOneFiscalYearAgo = "_lastFiscalQuarterOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const _lastFiscalQuarterToPeriod = "_lastFiscalQuarterToPeriod";
	/**
	 * @var string
	 */
	const _lastFiscalYear = "_lastFiscalYear";
	/**
	 * @var string
	 */
	const _lastFiscalYearToPeriod = "_lastFiscalYearToPeriod";
	/**
	 * @var string
	 */
	const _lastPeriod = "_lastPeriod";
	/**
	 * @var string
	 */
	const _lastPeriodOneFiscalQuarterAgo = "_lastPeriodOneFiscalQuarterAgo";
	/**
	 * @var string
	 */
	const _lastPeriodOneFiscalYearAgo = "_lastPeriodOneFiscalYearAgo";
	/**
	 * @var string
	 */
	const _lastRolling18periods = "_lastRolling18periods";
	/**
	 * @var string
	 */
	const _lastRolling6fiscalQuarters = "_lastRolling6fiscalQuarters";
	/**
	 * @var string
	 */
	const _periodBeforeLast = "_periodBeforeLast";
	/**
	 * @var string
	 */
	const _sameFiscalQuarterOfLastFy = "_sameFiscalQuarterOfLastFy";
	/**
	 * @var string
	 */
	const _sameFiscalQuarterOfLastFyToPeriod = "_sameFiscalQuarterOfLastFyToPeriod";
	/**
	 * @var string
	 */
	const _samePeriodOfLastFiscalQuarter = "_samePeriodOfLastFiscalQuarter";
	/**
	 * @var string
	 */
	const _samePeriodOfLastFy = "_samePeriodOfLastFy";
	/**
	 * @var string
	 */
	const _secondFiscalQuarterOfLastFy = "_secondFiscalQuarterOfLastFy";
	/**
	 * @var string
	 */
	const _secondFiscalQuarterOfThisFy = "_secondFiscalQuarterOfThisFy";
	/**
	 * @var string
	 */
	const _thirdFiscalQuarterOfLastFy = "_thirdFiscalQuarterOfLastFy";
	/**
	 * @var string
	 */
	const _thirdFiscalQuarterOfThisFy = "_thirdFiscalQuarterOfThisFy";
	/**
	 * @var string
	 */
	const _thisFiscalQuarter = "_thisFiscalQuarter";
	/**
	 * @var string
	 */
	const _thisFiscalQuarterToPeriod = "_thisFiscalQuarterToPeriod";
	/**
	 * @var string
	 */
	const _thisFiscalYear = "_thisFiscalYear";
	/**
	 * @var string
	 */
	const _thisFiscalYearToPeriod = "_thisFiscalYearToPeriod";
	/**
	 * @var string
	 */
	const _thisPeriod = "_thisPeriod";
}}

if (!class_exists("PermissionLevel")) {
/**
 * PermissionLevel
 */
class PermissionLevel {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _create = "_create";
	/**
	 * @var string
	 */
	const _edit = "_edit";
	/**
	 * @var string
	 */
	const _full = "_full";
	/**
	 * @var string
	 */
	const _none = "_none";
	/**
	 * @var string
	 */
	const _view = "_view";
}}

if (!class_exists("Source")) {
/**
 * Source
 */
class Source {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _adp = "_adp";
	/**
	 * @var string
	 */
	const _automatedMemorizedTransaction = "_automatedMemorizedTransaction";
	/**
	 * @var string
	 */
	const _csv = "_csv";
	/**
	 * @var string
	 */
	const _customerCenter = "_customerCenter";
	/**
	 * @var string
	 */
	const _ebay = "_ebay";
	/**
	 * @var string
	 */
	const _mobile = "_mobile";
	/**
	 * @var string
	 */
	const _offlineClient = "_offlineClient";
	/**
	 * @var string
	 */
	const _perquest = "_perquest";
	/**
	 * @var string
	 */
	const _qif = "_qif";
	/**
	 * @var string
	 */
	const _quickbooks = "_quickbooks";
	/**
	 * @var string
	 */
	const _smbxml = "_smbxml";
	/**
	 * @var string
	 */
	const _sync = "_sync";
	/**
	 * @var string
	 */
	const _web = "_web";
	/**
	 * @var string
	 */
	const _webServices = "_webServices";
	/**
	 * @var string
	 */
	const _yahoo = "_yahoo";
}}

if (!class_exists("GlobalSubscriptionStatus")) {
/**
 * GlobalSubscriptionStatus
 */
class GlobalSubscriptionStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _confirmedOptIn = "_confirmedOptIn";
	/**
	 * @var string
	 */
	const _confirmedOptOut = "_confirmedOptOut";
	/**
	 * @var string
	 */
	const _softOptIn = "_softOptIn";
	/**
	 * @var string
	 */
	const _softOptOut = "_softOptOut";
}}

if (!class_exists("ItemCostEstimateType")) {
/**
 * ItemCostEstimateType
 */
class ItemCostEstimateType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _averageCost = "_averageCost";
	/**
	 * @var string
	 */
	const _custom = "_custom";
	/**
	 * @var string
	 */
	const _derivedFromMemberItems = "_derivedFromMemberItems";
	/**
	 * @var string
	 */
	const _itemDefinedCost = "_itemDefinedCost";
	/**
	 * @var string
	 */
	const _lastPurchasePrice = "_lastPurchasePrice";
	/**
	 * @var string
	 */
	const _preferredVendorRate = "_preferredVendorRate";
	/**
	 * @var string
	 */
	const _purchaseOrderRate = "_purchaseOrderRate";
	/**
	 * @var string
	 */
	const _purchasePrice = "_purchasePrice";
}}

if (!class_exists("PresentationItemType")) {
/**
 * PresentationItemType
 */
class PresentationItemType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fileCabinetItem = "_fileCabinetItem";
	/**
	 * @var string
	 */
	const _informationItem = "_informationItem";
	/**
	 * @var string
	 */
	const _item = "_item";
	/**
	 * @var string
	 */
	const _presentationCategory = "_presentationCategory";
}}

if (!class_exists("LandedCostSource")) {
/**
 * LandedCostSource
 */
class LandedCostSource {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _manual = "_manual";
	/**
	 * @var string
	 */
	const _otherTransaction = "_otherTransaction";
	/**
	 * @var string
	 */
	const _otherTransactionExcludeTax = "_otherTransactionExcludeTax";
	/**
	 * @var string
	 */
	const _thisTransaction = "_thisTransaction";
}}

if (!class_exists("LandedCostMethod")) {
/**
 * LandedCostMethod
 */
class LandedCostMethod {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _quantity = "_quantity";
	/**
	 * @var string
	 */
	const _value = "_value";
	/**
	 * @var string
	 */
	const _weight = "_weight";
	/**
	 * @var string
	 */
	const _line = "_line";
}}

if (!class_exists("SitemapPriority")) {
/**
 * SitemapPriority
 */
class SitemapPriority {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _00 = "_00";
	/**
	 * @var string
	 */
	const _01 = "_01";
	/**
	 * @var string
	 */
	const _02 = "_02";
	/**
	 * @var string
	 */
	const _03 = "_03";
	/**
	 * @var string
	 */
	const _04 = "_04";
	/**
	 * @var string
	 */
	const _05 = "_05";
	/**
	 * @var string
	 */
	const _06 = "_06";
	/**
	 * @var string
	 */
	const _07 = "_07";
	/**
	 * @var string
	 */
	const _08 = "_08";
	/**
	 * @var string
	 */
	const _09 = "_09";
	/**
	 * @var string
	 */
	const _10 = "_10";
	/**
	 * @var string
	 */
	const _auto = "_auto";
}}

if (!class_exists("TimeItemTimeType")) {
/**
 * TimeItemTimeType
 */
class TimeItemTimeType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _actualTime = "_actualTime";
	/**
	 * @var string
	 */
	const _plannedTime = "_plannedTime";
}}

if (!class_exists("PermissionCode")) {
/**
 * PermissionCode
 */
class PermissionCode {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _accessPaymentAuditLog = "_accessPaymentAuditLog";
	/**
	 * @var string
	 */
	const _accessTokenManagement = "_accessTokenManagement";
	/**
	 * @var string
	 */
	const _accountDetail = "_accountDetail";
	/**
	 * @var string
	 */
	const _accounting = "_accounting";
	/**
	 * @var string
	 */
	const _accountingBook = "_accountingBook";
	/**
	 * @var string
	 */
	const _accountingLists = "_accountingLists";
	/**
	 * @var string
	 */
	const _accounts = "_accounts";
	/**
	 * @var string
	 */
	const _accountsPayable = "_accountsPayable";
	/**
	 * @var string
	 */
	const _accountsPayableGraphing = "_accountsPayableGraphing";
	/**
	 * @var string
	 */
	const _accountsPayableRegister = "_accountsPayableRegister";
	/**
	 * @var string
	 */
	const _accountsReceivable = "_accountsReceivable";
	/**
	 * @var string
	 */
	const _accountsReceivableGraphing = "_accountsReceivableGraphing";
	/**
	 * @var string
	 */
	const _accountsReceivableRegister = "_accountsReceivableRegister";
	/**
	 * @var string
	 */
	const _accountsReceivableUnbilled = "_accountsReceivableUnbilled";
	/**
	 * @var string
	 */
	const _adjustInventory = "_adjustInventory";
	/**
	 * @var string
	 */
	const _adjustInventoryWorksheet = "_adjustInventoryWorksheet";
	/**
	 * @var string
	 */
	const _admindocs = "_admindocs";
	/**
	 * @var string
	 */
	const _adpImportData = "_adpImportData";
	/**
	 * @var string
	 */
	const _adpSetup = "_adpSetup";
	/**
	 * @var string
	 */
	const _advancedAnalytics = "_advancedAnalytics";
	/**
	 * @var string
	 */
	const _advancedGovernmentIssuedIds = "_advancedGovernmentIssuedIds";
	/**
	 * @var string
	 */
	const _advancedOrderManagement = "_advancedOrderManagement";
	/**
	 * @var string
	 */
	const _advancedPDFHTMLTemplates = "_advancedPDFHTMLTemplates";
	/**
	 * @var string
	 */
	const _allocationSchedules = "_allocationSchedules";
	/**
	 * @var string
	 */
	const _allowNonGLChanges = "_allowNonGLChanges";
	/**
	 * @var string
	 */
	const _allowPendingBookJournalEntry = "_allowPendingBookJournalEntry";
	/**
	 * @var string
	 */
	const _amendW4 = "_amendW4";
	/**
	 * @var string
	 */
	const _amortizationReports = "_amortizationReports";
	/**
	 * @var string
	 */
	const _amortizationSchedules = "_amortizationSchedules";
	/**
	 * @var string
	 */
	const _applicationPublishers = "_applicationPublishers";
	/**
	 * @var string
	 */
	const _approveDirectDeposit = "_approveDirectDeposit";
	/**
	 * @var string
	 */
	const _approveEFT = "_approveEFT";
	/**
	 * @var string
	 */
	const _approveOnlineBillPayments = "_approveOnlineBillPayments";
	/**
	 * @var string
	 */
	const _approveVendorPayments = "_approveVendorPayments";
	/**
	 * @var string
	 */
	const _auditTrail = "_auditTrail";
	/**
	 * @var string
	 */
	const _backupYourData = "_backupYourData";
	/**
	 * @var string
	 */
	const _balanceLocationCostingGroupAccounts = "_balanceLocationCostingGroupAccounts";
	/**
	 * @var string
	 */
	const _balanceSheet = "_balanceSheet";
	/**
	 * @var string
	 */
	const _bankAccountRegisters = "_bankAccountRegisters";
	/**
	 * @var string
	 */
	const _basicGovernmentIssuedIds = "_basicGovernmentIssuedIds";
	/**
	 * @var string
	 */
	const _billingInformation = "_billingInformation";
	/**
	 * @var string
	 */
	const _billingSchedules = "_billingSchedules";
	/**
	 * @var string
	 */
	const _billOfDistribution = "_billOfDistribution";
	/**
	 * @var string
	 */
	const _billOfMaterialsInquiry = "_billOfMaterialsInquiry";
	/**
	 * @var string
	 */
	const _billPurchaseOrders = "_billPurchaseOrders";
	/**
	 * @var string
	 */
	const _bills = "_bills";
	/**
	 * @var string
	 */
	const _billSalesOrders = "_billSalesOrders";
	/**
	 * @var string
	 */
	const _bins = "_bins";
	/**
	 * @var string
	 */
	const _binTransfer = "_binTransfer";
	/**
	 * @var string
	 */
	const _binWorksheet = "_binWorksheet";
	/**
	 * @var string
	 */
	const _blanketPurchaseOrder = "_blanketPurchaseOrder";
	/**
	 * @var string
	 */
	const _blanketPurchaseOrderApproval = "_blanketPurchaseOrderApproval";
	/**
	 * @var string
	 */
	const _budget = "_budget";
	/**
	 * @var string
	 */
	const _buildAssemblies = "_buildAssemblies";
	/**
	 * @var string
	 */
	const _buildWorkOrders = "_buildWorkOrders";
	/**
	 * @var string
	 */
	const _calculateTime = "_calculateTime";
	/**
	 * @var string
	 */
	const _calendar = "_calendar";
	/**
	 * @var string
	 */
	const _campaignHistory = "_campaignHistory";
	/**
	 * @var string
	 */
	const _cases = "_cases";
	/**
	 * @var string
	 */
	const _cashFlowStatement = "_cashFlowStatement";
	/**
	 * @var string
	 */
	const _cashSale = "_cashSale";
	/**
	 * @var string
	 */
	const _cashSaleRefund = "_cashSaleRefund";
	/**
	 * @var string
	 */
	const _changeEmailOrPassword = "_changeEmailOrPassword";
	/**
	 * @var string
	 */
	const _changeRole = "_changeRole";
	/**
	 * @var string
	 */
	const _chargeRule = "_chargeRule";
	/**
	 * @var string
	 */
	const _chargeRunRules = "_chargeRunRules";
	/**
	 * @var string
	 */
	const _check = "_check";
	/**
	 * @var string
	 */
	const _checkItemAvailability = "_checkItemAvailability";
	/**
	 * @var string
	 */
	const _classes = "_classes";
	/**
	 * @var string
	 */
	const _classSegmentMapping = "_classSegmentMapping";
	/**
	 * @var string
	 */
	const _closeAccount = "_closeAccount";
	/**
	 * @var string
	 */
	const _closeWorkOrders = "_closeWorkOrders";
	/**
	 * @var string
	 */
	const _colorThemes = "_colorThemes";
	/**
	 * @var string
	 */
	const _commissionFeatureSetup = "_commissionFeatureSetup";
	/**
	 * @var string
	 */
	const _commissionReports = "_commissionReports";
	/**
	 * @var string
	 */
	const _commitOrders = "_commitOrders";
	/**
	 * @var string
	 */
	const _commitPayroll = "_commitPayroll";
	/**
	 * @var string
	 */
	const _companies = "_companies";
	/**
	 * @var string
	 */
	const _companyInformation = "_companyInformation";
	/**
	 * @var string
	 */
	const _companyPreferences = "_companyPreferences";
	/**
	 * @var string
	 */
	const _competitors = "_competitors";
	/**
	 * @var string
	 */
	const _componentWhereUsed = "_componentWhereUsed";
	/**
	 * @var string
	 */
	const _contactRoles = "_contactRoles";
	/**
	 * @var string
	 */
	const _contacts = "_contacts";
	/**
	 * @var string
	 */
	const _convertClassesToDepartments = "_convertClassesToDepartments";
	/**
	 * @var string
	 */
	const _convertClassesToLocations = "_convertClassesToLocations";
	/**
	 * @var string
	 */
	const _copyBudgets = "_copyBudgets";
	/**
	 * @var string
	 */
	const _copyChartOfAccountsToNewCompany = "_copyChartOfAccountsToNewCompany";
	/**
	 * @var string
	 */
	const _copyProjectTasks = "_copyProjectTasks";
	/**
	 * @var string
	 */
	const _costedBillOfMaterialsInquiry = "_costedBillOfMaterialsInquiry";
	/**
	 * @var string
	 */
	const _costOfGoodsSoldRegisters = "_costOfGoodsSoldRegisters";
	/**
	 * @var string
	 */
	const _countInventory = "_countInventory";
	/**
	 * @var string
	 */
	const _createAllocationSchedules = "_createAllocationSchedules";
	/**
	 * @var string
	 */
	const _createConsolidationCompany = "_createConsolidationCompany";
	/**
	 * @var string
	 */
	const _createFiscalCalendar = "_createFiscalCalendar";
	/**
	 * @var string
	 */
	const _createInventoryCounts = "_createInventoryCounts";
	/**
	 * @var string
	 */
	const _creditCard = "_creditCard";
	/**
	 * @var string
	 */
	const _creditCardProcessing = "_creditCardProcessing";
	/**
	 * @var string
	 */
	const _creditCardRefund = "_creditCardRefund";
	/**
	 * @var string
	 */
	const _creditCardRegisters = "_creditCardRegisters";
	/**
	 * @var string
	 */
	const _creditMemo = "_creditMemo";
	/**
	 * @var string
	 */
	const _creditReturns = "_creditReturns";
	/**
	 * @var string
	 */
	const _crmGroups = "_crmGroups";
	/**
	 * @var string
	 */
	const _crmLists = "_crmLists";
	/**
	 * @var string
	 */
	const _cspSetup = "_cspSetup";
	/**
	 * @var string
	 */
	const _currency = "_currency";
	/**
	 * @var string
	 */
	const _currencyAdjustmentJournal = "_currencyAdjustmentJournal";
	/**
	 * @var string
	 */
	const _currencyRevaluation = "_currencyRevaluation";
	/**
	 * @var string
	 */
	const _customAddressForm = "_customAddressForm";
	/**
	 * @var string
	 */
	const _customBodyFields = "_customBodyFields";
	/**
	 * @var string
	 */
	const _customCenterCategories = "_customCenterCategories";
	/**
	 * @var string
	 */
	const _customCenterLinks = "_customCenterLinks";
	/**
	 * @var string
	 */
	const _customCenters = "_customCenters";
	/**
	 * @var string
	 */
	const _customCenterTabs = "_customCenterTabs";
	/**
	 * @var string
	 */
	const _customColumnFields = "_customColumnFields";
	/**
	 * @var string
	 */
	const _customEntityFields = "_customEntityFields";
	/**
	 * @var string
	 */
	const _customEntryForms = "_customEntryForms";
	/**
	 * @var string
	 */
	const _customerCharge = "_customerCharge";
	/**
	 * @var string
	 */
	const _customerDeposit = "_customerDeposit";
	/**
	 * @var string
	 */
	const _customerPayment = "_customerPayment";
	/**
	 * @var string
	 */
	const _customerProfile = "_customerProfile";
	/**
	 * @var string
	 */
	const _customerRefund = "_customerRefund";
	/**
	 * @var string
	 */
	const _customers = "_customers";
	/**
	 * @var string
	 */
	const _customerStatus = "_customerStatus";
	/**
	 * @var string
	 */
	const _customEventFields = "_customEventFields";
	/**
	 * @var string
	 */
	const _customFields = "_customFields";
	/**
	 * @var string
	 */
	const _customGlLinesPlugInAuditLog = "_customGlLinesPlugInAuditLog";
	/**
	 * @var string
	 */
	const _customGlLinesPlugInAuditLogSegments = "_customGlLinesPlugInAuditLogSegments";
	/**
	 * @var string
	 */
	const _customHTMLLayouts = "_customHTMLLayouts";
	/**
	 * @var string
	 */
	const _customItemFields = "_customItemFields";
	/**
	 * @var string
	 */
	const _customItemNumberFields = "_customItemNumberFields";
	/**
	 * @var string
	 */
	const _customizePage = "_customizePage";
	/**
	 * @var string
	 */
	const _customLists = "_customLists";
	/**
	 * @var string
	 */
	const _customPDFLayouts = "_customPDFLayouts";
	/**
	 * @var string
	 */
	const _customRecordEntries = "_customRecordEntries";
	/**
	 * @var string
	 */
	const _customRecordTypes = "_customRecordTypes";
	/**
	 * @var string
	 */
	const _customSegments = "_customSegments";
	/**
	 * @var string
	 */
	const _customSublists = "_customSublists";
	/**
	 * @var string
	 */
	const _customSubtabs = "_customSubtabs";
	/**
	 * @var string
	 */
	const _customTransactionFields = "_customTransactionFields";
	/**
	 * @var string
	 */
	const _customTransactionForms = "_customTransactionForms";
	/**
	 * @var string
	 */
	const _customTransactionTypes = "_customTransactionTypes";
	/**
	 * @var string
	 */
	const _deferredExpenseRegisters = "_deferredExpenseRegisters";
	/**
	 * @var string
	 */
	const _deferredRevenueRegisters = "_deferredRevenueRegisters";
	/**
	 * @var string
	 */
	const _deleteAllData = "_deleteAllData";
	/**
	 * @var string
	 */
	const _deletedRecords = "_deletedRecords";
	/**
	 * @var string
	 */
	const _deleteEvent = "_deleteEvent";
	/**
	 * @var string
	 */
	const _departments = "_departments";
	/**
	 * @var string
	 */
	const _departmentSegmentMapping = "_departmentSegmentMapping";
	/**
	 * @var string
	 */
	const _deposit = "_deposit";
	/**
	 * @var string
	 */
	const _depositApplication = "_depositApplication";
	/**
	 * @var string
	 */
	const _deviceIdManagement = "_deviceIdManagement";
	/**
	 * @var string
	 */
	const _directDepositStatus = "_directDepositStatus";
	/**
	 * @var string
	 */
	const _distributeInventory = "_distributeInventory";
	/**
	 * @var string
	 */
	const _distributionNetwork = "_distributionNetwork";
	/**
	 * @var string
	 */
	const _documentsAndFiles = "_documentsAndFiles";
	/**
	 * @var string
	 */
	const _duplicateCaseManagement = "_duplicateCaseManagement";
	/**
	 * @var string
	 */
	const _duplicateDetectionSetup = "_duplicateDetectionSetup";
	/**
	 * @var string
	 */
	const _duplicateRecordManagement = "_duplicateRecordManagement";
	/**
	 * @var string
	 */
	const _ebayExportImport = "_ebayExportImport";
	/**
	 * @var string
	 */
	const _editForecast = "_editForecast";
	/**
	 * @var string
	 */
	const _editManagerForecast = "_editManagerForecast";
	/**
	 * @var string
	 */
	const _editProfile = "_editProfile";
	/**
	 * @var string
	 */
	const _eftStatus = "_eftStatus";
	/**
	 * @var string
	 */
	const _emailReports = "_emailReports";
	/**
	 * @var string
	 */
	const _emailTemplate = "_emailTemplate";
	/**
	 * @var string
	 */
	const _employeeCommissionSchedulesPlans = "_employeeCommissionSchedulesPlans";
	/**
	 * @var string
	 */
	const _employeeCommissionTransaction = "_employeeCommissionTransaction";
	/**
	 * @var string
	 */
	const _employeeCommissionTransactionApproval = "_employeeCommissionTransactionApproval";
	/**
	 * @var string
	 */
	const _employeeReminders = "_employeeReminders";
	/**
	 * @var string
	 */
	const _employees = "_employees";
	/**
	 * @var string
	 */
	const _employeeSocialSecurityNumbers = "_employeeSocialSecurityNumbers";
	/**
	 * @var string
	 */
	const _enableFeatures = "_enableFeatures";
	/**
	 * @var string
	 */
	const _enterCompletions = "_enterCompletions";
	/**
	 * @var string
	 */
	const _enterOpeningBalances = "_enterOpeningBalances";
	/**
	 * @var string
	 */
	const _enterVendorCredits = "_enterVendorCredits";
	/**
	 * @var string
	 */
	const _enterYearToDatePayrollAdjustments = "_enterYearToDatePayrollAdjustments";
	/**
	 * @var string
	 */
	const _entityAccountMapping = "_entityAccountMapping";
	/**
	 * @var string
	 */
	const _equityRegisters = "_equityRegisters";
	/**
	 * @var string
	 */
	const _escalationAssignment = "_escalationAssignment";
	/**
	 * @var string
	 */
	const _escalationAssignmentRule = "_escalationAssignmentRule";
	/**
	 * @var string
	 */
	const _establishQuotas = "_establishQuotas";
	/**
	 * @var string
	 */
	const _estimate = "_estimate";
	/**
	 * @var string
	 */
	const _events = "_events";
	/**
	 * @var string
	 */
	const _expenseCategories = "_expenseCategories";
	/**
	 * @var string
	 */
	const _expenseRegisters = "_expenseRegisters";
	/**
	 * @var string
	 */
	const _expenseReport = "_expenseReport";
	/**
	 * @var string
	 */
	const _expenses = "_expenses";
	/**
	 * @var string
	 */
	const _exportAsIIF = "_exportAsIIF";
	/**
	 * @var string
	 */
	const _exportLists = "_exportLists";
	/**
	 * @var string
	 */
	const _fairValueDimension = "_fairValueDimension";
	/**
	 * @var string
	 */
	const _fairValueFormula = "_fairValueFormula";
	/**
	 * @var string
	 */
	const _fairValuePrice = "_fairValuePrice";
	/**
	 * @var string
	 */
	const _faxMessages = "_faxMessages";
	/**
	 * @var string
	 */
	const _faxTemplate = "_faxTemplate";
	/**
	 * @var string
	 */
	const _features = "_features";
	/**
	 * @var string
	 */
	const _financeCharge = "_financeCharge";
	/**
	 * @var string
	 */
	const _financeChargePreferences = "_financeChargePreferences";
	/**
	 * @var string
	 */
	const _financialHistory = "_financialHistory";
	/**
	 * @var string
	 */
	const _financialStatementLayouts = "_financialStatementLayouts";
	/**
	 * @var string
	 */
	const _financialStatements = "_financialStatements";
	/**
	 * @var string
	 */
	const _financialStatementSections = "_financialStatementSections";
	/**
	 * @var string
	 */
	const _findMatchingOnlineBankingTransactions = "_findMatchingOnlineBankingTransactions";
	/**
	 * @var string
	 */
	const _findTransaction = "_findTransaction";
	/**
	 * @var string
	 */
	const _fiscalCalendars = "_fiscalCalendars";
	/**
	 * @var string
	 */
	const _fixedAssetRegisters = "_fixedAssetRegisters";
	/**
	 * @var string
	 */
	const _form1099FederalMiscellaneousIncome = "_form1099FederalMiscellaneousIncome";
	/**
	 * @var string
	 */
	const _form940EmployersAnnualFederalUnemploymentTaxReturn = "_form940EmployersAnnualFederalUnemploymentTaxReturn";
	/**
	 * @var string
	 */
	const _form941EmployersQuarterlyFederalTaxReturn = "_form941EmployersQuarterlyFederalTaxReturn";
	/**
	 * @var string
	 */
	const _formW2WageAndTaxStatement = "_formW2WageAndTaxStatement";
	/**
	 * @var string
	 */
	const _formW4EmployeesWithholdingAllowanceCertificate = "_formW4EmployeesWithholdingAllowanceCertificate";
	/**
	 * @var string
	 */
	const _fulfillmentRequest = "_fulfillmentRequest";
	/**
	 * @var string
	 */
	const _fulfillOrders = "_fulfillOrders";
	/**
	 * @var string
	 */
	const _generalLedger = "_generalLedger";
	/**
	 * @var string
	 */
	const _generatePriceLists = "_generatePriceLists";
	/**
	 * @var string
	 */
	const _generateRevenueCommitment = "_generateRevenueCommitment";
	/**
	 * @var string
	 */
	const _generateRevenueCommitmentReversals = "_generateRevenueCommitmentReversals";
	/**
	 * @var string
	 */
	const _generateSingleOrderRevenueContracts = "_generateSingleOrderRevenueContracts";
	/**
	 * @var string
	 */
	const _generateStatements = "_generateStatements";
	/**
	 * @var string
	 */
	const _genericAdminPermission = "_genericAdminPermission";
	/**
	 * @var string
	 */
	const _genericResources = "_genericResources";
	/**
	 * @var string
	 */
	const _globalAccountMapping = "_globalAccountMapping";
	/**
	 * @var string
	 */
	const _governmentIssuedIdTypes = "_governmentIssuedIdTypes";
	/**
	 * @var string
	 */
	const _grantingAccessToReports = "_grantingAccessToReports";
	/**
	 * @var string
	 */
	const _gstSummaryReport = "_gstSummaryReport";
	/**
	 * @var string
	 */
	const _importCSVFile = "_importCSVFile";
	/**
	 * @var string
	 */
	const _importOnlineBankingQIFFile = "_importOnlineBankingQIFFile";
	/**
	 * @var string
	 */
	const _importQuickenQIFFile = "_importQuickenQIFFile";
	/**
	 * @var string
	 */
	const _importStateSalesTax = "_importStateSalesTax";
	/**
	 * @var string
	 */
	const _income = "_income";
	/**
	 * @var string
	 */
	const _incomeRegisters = "_incomeRegisters";
	/**
	 * @var string
	 */
	const _incomeStatement = "_incomeStatement";
	/**
	 * @var string
	 */
	const _individualPaycheck = "_individualPaycheck";
	/**
	 * @var string
	 */
	const _integration = "_integration";
	/**
	 * @var string
	 */
	const _integrationApplication = "_integrationApplication";
	/**
	 * @var string
	 */
	const _integrationApplications = "_integrationApplications";
	/**
	 * @var string
	 */
	const _intercompanyAdjustments = "_intercompanyAdjustments";
	/**
	 * @var string
	 */
	const _internalPublisher = "_internalPublisher";
	/**
	 * @var string
	 */
	const _inventory = "_inventory";
	/**
	 * @var string
	 */
	const _inventoryCostTemplate = "_inventoryCostTemplate";
	/**
	 * @var string
	 */
	const _invoice = "_invoice";
	/**
	 * @var string
	 */
	const _invoiceApproval = "_invoiceApproval";
	/**
	 * @var string
	 */
	const _issueComponents = "_issueComponents";
	/**
	 * @var string
	 */
	const _issueReports = "_issueReports";
	/**
	 * @var string
	 */
	const _issues = "_issues";
	/**
	 * @var string
	 */
	const _issueSetup = "_issueSetup";
	/**
	 * @var string
	 */
	const _itemAccountMapping = "_itemAccountMapping";
	/**
	 * @var string
	 */
	const _itemCategoryLayouts = "_itemCategoryLayouts";
	/**
	 * @var string
	 */
	const _itemDemandPlan = "_itemDemandPlan";
	/**
	 * @var string
	 */
	const _itemFulfillment = "_itemFulfillment";
	/**
	 * @var string
	 */
	const _itemReceipt = "_itemReceipt";
	/**
	 * @var string
	 */
	const _itemRevenueCategory = "_itemRevenueCategory";
	/**
	 * @var string
	 */
	const _itemRevisions = "_itemRevisions";
	/**
	 * @var string
	 */
	const _items = "_items";
	/**
	 * @var string
	 */
	const _itemSupplyPlan = "_itemSupplyPlan";
	/**
	 * @var string
	 */
	const _itemTemplates = "_itemTemplates";
	/**
	 * @var string
	 */
	const _jobManagement = "_jobManagement";
	/**
	 * @var string
	 */
	const _jobRequisitions = "_jobRequisitions";
	/**
	 * @var string
	 */
	const _jobs = "_jobs";
	/**
	 * @var string
	 */
	const _journalApproval = "_journalApproval";
	/**
	 * @var string
	 */
	const _knowledgeBase = "_knowledgeBase";
	/**
	 * @var string
	 */
	const _kpiScorecards = "_kpiScorecards";
	/**
	 * @var string
	 */
	const _kudos = "_kudos";
	/**
	 * @var string
	 */
	const _leadConversion = "_leadConversion";
	/**
	 * @var string
	 */
	const _leadConversionMapping = "_leadConversionMapping";
	/**
	 * @var string
	 */
	const _leadSnapshotReminders = "_leadSnapshotReminders";
	/**
	 * @var string
	 */
	const _letterMessages = "_letterMessages";
	/**
	 * @var string
	 */
	const _letterTemplate = "_letterTemplate";
	/**
	 * @var string
	 */
	const _loadSampleData = "_loadSampleData";
	/**
	 * @var string
	 */
	const _locationCostingGroup = "_locationCostingGroup";
	/**
	 * @var string
	 */
	const _locations = "_locations";
	/**
	 * @var string
	 */
	const _locationSegmentMapping = "_locationSegmentMapping";
	/**
	 * @var string
	 */
	const _lockTransactions = "_lockTransactions";
	/**
	 * @var string
	 */
	const _logInUsingAccessTokens = "_logInUsingAccessTokens";
	/**
	 * @var string
	 */
	const _longTermLiabilityRegisters = "_longTermLiabilityRegisters";
	/**
	 * @var string
	 */
	const _mailMerge = "_mailMerge";
	/**
	 * @var string
	 */
	const _makeJournalEntry = "_makeJournalEntry";
	/**
	 * @var string
	 */
	const _manageAccountingPeriods = "_manageAccountingPeriods";
	/**
	 * @var string
	 */
	const _managePayroll = "_managePayroll";
	/**
	 * @var string
	 */
	const _manageRoles = "_manageRoles";
	/**
	 * @var string
	 */
	const _manageTaxReportingPeriods = "_manageTaxReportingPeriods";
	/**
	 * @var string
	 */
	const _manageUsers = "_manageUsers";
	/**
	 * @var string
	 */
	const _manufacturingCostTemplate = "_manufacturingCostTemplate";
	/**
	 * @var string
	 */
	const _manufacturingRouting = "_manufacturingRouting";
	/**
	 * @var string
	 */
	const _marketingCampaignReports = "_marketingCampaignReports";
	/**
	 * @var string
	 */
	const _marketingCampaigns = "_marketingCampaigns";
	/**
	 * @var string
	 */
	const _marketingTemplate = "_marketingTemplate";
	/**
	 * @var string
	 */
	const _markIssueAsShowStopper = "_markIssueAsShowStopper";
	/**
	 * @var string
	 */
	const _markWorkOrdersBuilt = "_markWorkOrdersBuilt";
	/**
	 * @var string
	 */
	const _markWorkOrdersFirmed = "_markWorkOrdersFirmed";
	/**
	 * @var string
	 */
	const _markWorkOrdersReleased = "_markWorkOrdersReleased";
	/**
	 * @var string
	 */
	const _massUpdates = "_massUpdates";
	/**
	 * @var string
	 */
	const _mediaFolders = "_mediaFolders";
	/**
	 * @var string
	 */
	const _memorizedTransactions = "_memorizedTransactions";
	/**
	 * @var string
	 */
	const _mobileDeviceAccess = "_mobileDeviceAccess";
	/**
	 * @var string
	 */
	const _netWorth = "_netWorth";
	/**
	 * @var string
	 */
	const _nonPostingRegisters = "_nonPostingRegisters";
	/**
	 * @var string
	 */
	const _noPermissionNecessary = "_noPermissionNecessary";
	/**
	 * @var string
	 */
	const _notesTab = "_notesTab";
	/**
	 * @var string
	 */
	const _offlineClient = "_offlineClient";
	/**
	 * @var string
	 */
	const _onlineBankingStatement = "_onlineBankingStatement";
	/**
	 * @var string
	 */
	const _onlineCaseForm = "_onlineCaseForm";
	/**
	 * @var string
	 */
	const _onlineCustomerForm = "_onlineCustomerForm";
	/**
	 * @var string
	 */
	const _onlineCustomRecordForm = "_onlineCustomRecordForm";
	/**
	 * @var string
	 */
	const _openidSingleSignOn = "_openidSingleSignOn";
	/**
	 * @var string
	 */
	const _opportunity = "_opportunity";
	/**
	 * @var string
	 */
	const _organizationValue = "_organizationValue";
	/**
	 * @var string
	 */
	const _otherAssetRegisters = "_otherAssetRegisters";
	/**
	 * @var string
	 */
	const _otherCurrentAssetRegisters = "_otherCurrentAssetRegisters";
	/**
	 * @var string
	 */
	const _otherCurrentLiabilityRegisters = "_otherCurrentLiabilityRegisters";
	/**
	 * @var string
	 */
	const _otherCustomFields = "_otherCustomFields";
	/**
	 * @var string
	 */
	const _otherExpenseRegisters = "_otherExpenseRegisters";
	/**
	 * @var string
	 */
	const _otherIncomeRegisters = "_otherIncomeRegisters";
	/**
	 * @var string
	 */
	const _otherLists = "_otherLists";
	/**
	 * @var string
	 */
	const _otherNames = "_otherNames";
	/**
	 * @var string
	 */
	const _outlookIntegration = "_outlookIntegration";
	/**
	 * @var string
	 */
	const _outlookIntegration3 = "_outlookIntegration3";
	/**
	 * @var string
	 */
	const _overrideEstimatedCostOnTransactions = "_overrideEstimatedCostOnTransactions";
	/**
	 * @var string
	 */
	const _overridePaymentHold = "_overridePaymentHold";
	/**
	 * @var string
	 */
	const _overridePeriodRestrictions = "_overridePeriodRestrictions";
	/**
	 * @var string
	 */
	const _partnerAuthorizedCommissionReports = "_partnerAuthorizedCommissionReports";
	/**
	 * @var string
	 */
	const _partnerCommissionReports = "_partnerCommissionReports";
	/**
	 * @var string
	 */
	const _partnerCommissionSchedulesPlans = "_partnerCommissionSchedulesPlans";
	/**
	 * @var string
	 */
	const _partnerCommissionTransaction = "_partnerCommissionTransaction";
	/**
	 * @var string
	 */
	const _partnerCommissionTransactionApproval = "_partnerCommissionTransactionApproval";
	/**
	 * @var string
	 */
	const _partnerContribution = "_partnerContribution";
	/**
	 * @var string
	 */
	const _partnerMonitorResults = "_partnerMonitorResults";
	/**
	 * @var string
	 */
	const _partners = "_partners";
	/**
	 * @var string
	 */
	const _payBills = "_payBills";
	/**
	 * @var string
	 */
	const _paycheckJournal = "_paycheckJournal";
	/**
	 * @var string
	 */
	const _paychecks = "_paychecks";
	/**
	 * @var string
	 */
	const _paymentMethods = "_paymentMethods";
	/**
	 * @var string
	 */
	const _payrollCheckRegister = "_payrollCheckRegister";
	/**
	 * @var string
	 */
	const _payrollHoursAndEarnings = "_payrollHoursAndEarnings";
	/**
	 * @var string
	 */
	const _payrollItems = "_payrollItems";
	/**
	 * @var string
	 */
	const _payrollJournalReport = "_payrollJournalReport";
	/**
	 * @var string
	 */
	const _payrollLiabilityPayments = "_payrollLiabilityPayments";
	/**
	 * @var string
	 */
	const _payrollLiabilityReport = "_payrollLiabilityReport";
	/**
	 * @var string
	 */
	const _payrollStateWithholding = "_payrollStateWithholding";
	/**
	 * @var string
	 */
	const _payrollSummaryAndDetailReports = "_payrollSummaryAndDetailReports";
	/**
	 * @var string
	 */
	const _paySalesTax = "_paySalesTax";
	/**
	 * @var string
	 */
	const _payTaxLiability = "_payTaxLiability";
	/**
	 * @var string
	 */
	const _pdfMessages = "_pdfMessages";
	/**
	 * @var string
	 */
	const _pdfTemplate = "_pdfTemplate";
	/**
	 * @var string
	 */
	const _performSearch = "_performSearch";
	/**
	 * @var string
	 */
	const _persistSearch = "_persistSearch";
	/**
	 * @var string
	 */
	const _phasedProcesses = "_phasedProcesses";
	/**
	 * @var string
	 */
	const _phoneCalls = "_phoneCalls";
	/**
	 * @var string
	 */
	const _plannedRevenue = "_plannedRevenue";
	/**
	 * @var string
	 */
	const _plannedStandardCost = "_plannedStandardCost";
	/**
	 * @var string
	 */
	const _positions = "_positions";
	/**
	 * @var string
	 */
	const _postingPeriodOnTransactions = "_postingPeriodOnTransactions";
	/**
	 * @var string
	 */
	const _postTime = "_postTime";
	/**
	 * @var string
	 */
	const _postVendorBillVariances = "_postVendorBillVariances";
	/**
	 * @var string
	 */
	const _presentationCategories = "_presentationCategories";
	/**
	 * @var string
	 */
	const _printChecksAndForms = "_printChecksAndForms";
	/**
	 * @var string
	 */
	const _printEmailFax = "_printEmailFax";
	/**
	 * @var string
	 */
	const _printShipmentDocuments = "_printShipmentDocuments";
	/**
	 * @var string
	 */
	const _processGSTRefund = "_processGSTRefund";
	/**
	 * @var string
	 */
	const _processPayroll = "_processPayroll";
	/**
	 * @var string
	 */
	const _projectProjectTemplateConversion = "_projectProjectTemplateConversion";
	/**
	 * @var string
	 */
	const _projectTasks = "_projectTasks";
	/**
	 * @var string
	 */
	const _projectTemplates = "_projectTemplates";
	/**
	 * @var string
	 */
	const _promotionCode = "_promotionCode";
	/**
	 * @var string
	 */
	const _provisioning = "_provisioning";
	/**
	 * @var string
	 */
	const _provisioningForQa = "_provisioningForQa";
	/**
	 * @var string
	 */
	const _provisionNewAccountOnTestdrive = "_provisionNewAccountOnTestdrive";
	/**
	 * @var string
	 */
	const _provisionTestDrive = "_provisionTestDrive";
	/**
	 * @var string
	 */
	const _pstSummaryReport = "_pstSummaryReport";
	/**
	 * @var string
	 */
	const _publicTemplateCategories = "_publicTemplateCategories";
	/**
	 * @var string
	 */
	const _publishDashboards = "_publishDashboards";
	/**
	 * @var string
	 */
	const _publishEmployeeList = "_publishEmployeeList";
	/**
	 * @var string
	 */
	const _publisherApplications = "_publisherApplications";
	/**
	 * @var string
	 */
	const _publisherId = "_publisherId";
	/**
	 * @var string
	 */
	const _publishForms = "_publishForms";
	/**
	 * @var string
	 */
	const _publishKnowledgeBase = "_publishKnowledgeBase";
	/**
	 * @var string
	 */
	const _publishRSSFeeds = "_publishRSSFeeds";
	/**
	 * @var string
	 */
	const _publishSearch = "_publishSearch";
	/**
	 * @var string
	 */
	const _purchaseContract = "_purchaseContract";
	/**
	 * @var string
	 */
	const _purchaseContractApproval = "_purchaseContractApproval";
	/**
	 * @var string
	 */
	const _purchaseOrder = "_purchaseOrder";
	/**
	 * @var string
	 */
	const _purchaseOrderReports = "_purchaseOrderReports";
	/**
	 * @var string
	 */
	const _purchases = "_purchases";
	/**
	 * @var string
	 */
	const _quantityPricingSchedules = "_quantityPricingSchedules";
	/**
	 * @var string
	 */
	const _quotaReports = "_quotaReports";
	/**
	 * @var string
	 */
	const _receiveOrder = "_receiveOrder";
	/**
	 * @var string
	 */
	const _receiveReturns = "_receiveReturns";
	/**
	 * @var string
	 */
	const _recognizeGiftCertificateIncome = "_recognizeGiftCertificateIncome";
	/**
	 * @var string
	 */
	const _reconcile = "_reconcile";
	/**
	 * @var string
	 */
	const _reconcileReporting = "_reconcileReporting";
	/**
	 * @var string
	 */
	const _recordCustomField = "_recordCustomField";
	/**
	 * @var string
	 */
	const _refundReturns = "_refundReturns";
	/**
	 * @var string
	 */
	const _relatedItems = "_relatedItems";
	/**
	 * @var string
	 */
	const _reportCustomization = "_reportCustomization";
	/**
	 * @var string
	 */
	const _reportScheduling = "_reportScheduling";
	/**
	 * @var string
	 */
	const _requestForQuote = "_requestForQuote";
	/**
	 * @var string
	 */
	const _requisition = "_requisition";
	/**
	 * @var string
	 */
	const _requisitionApproval = "_requisitionApproval";
	/**
	 * @var string
	 */
	const _resource = "_resource";
	/**
	 * @var string
	 */
	const _resourceAllocationApproval = "_resourceAllocationApproval";
	/**
	 * @var string
	 */
	const _resourceAllocationReports = "_resourceAllocationReports";
	/**
	 * @var string
	 */
	const _resourceAllocations = "_resourceAllocations";
	/**
	 * @var string
	 */
	const _returnAuthApproval = "_returnAuthApproval";
	/**
	 * @var string
	 */
	const _returnAuthorization = "_returnAuthorization";
	/**
	 * @var string
	 */
	const _returnAuthorizationReports = "_returnAuthorizationReports";
	/**
	 * @var string
	 */
	const _revalueInventoryCost = "_revalueInventoryCost";
	/**
	 * @var string
	 */
	const _revenueArrangement = "_revenueArrangement";
	/**
	 * @var string
	 */
	const _revenueArrangementApproval = "_revenueArrangementApproval";
	/**
	 * @var string
	 */
	const _revenueCommitment = "_revenueCommitment";
	/**
	 * @var string
	 */
	const _revenueCommitmentReversal = "_revenueCommitmentReversal";
	/**
	 * @var string
	 */
	const _revenueContracts = "_revenueContracts";
	/**
	 * @var string
	 */
	const _revenueElement = "_revenueElement";
	/**
	 * @var string
	 */
	const _revenueManagementVSOE = "_revenueManagementVSOE";
	/**
	 * @var string
	 */
	const _revenueRecognitionFieldMapping = "_revenueRecognitionFieldMapping";
	/**
	 * @var string
	 */
	const _revenueRecognitionPlan = "_revenueRecognitionPlan";
	/**
	 * @var string
	 */
	const _revenueRecognitionReports = "_revenueRecognitionReports";
	/**
	 * @var string
	 */
	const _revenueRecognitionRule = "_revenueRecognitionRule";
	/**
	 * @var string
	 */
	const _revenueRecognitionSchedules = "_revenueRecognitionSchedules";
	/**
	 * @var string
	 */
	const _roles = "_roles";
	/**
	 * @var string
	 */
	const _runPayroll = "_runPayroll";
	/**
	 * @var string
	 */
	const _sales = "_sales";
	/**
	 * @var string
	 */
	const _salesByPartner = "_salesByPartner";
	/**
	 * @var string
	 */
	const _salesByPromotionCode = "_salesByPromotionCode";
	/**
	 * @var string
	 */
	const _salesCampaigns = "_salesCampaigns";
	/**
	 * @var string
	 */
	const _salesForceAutomation = "_salesForceAutomation";
	/**
	 * @var string
	 */
	const _salesForceAutomationSetup = "_salesForceAutomationSetup";
	/**
	 * @var string
	 */
	const _salesOrder = "_salesOrder";
	/**
	 * @var string
	 */
	const _salesOrderApproval = "_salesOrderApproval";
	/**
	 * @var string
	 */
	const _salesOrderFulfillmentReports = "_salesOrderFulfillmentReports";
	/**
	 * @var string
	 */
	const _salesOrderReports = "_salesOrderReports";
	/**
	 * @var string
	 */
	const _salesOrderTransactionReport = "_salesOrderTransactionReport";
	/**
	 * @var string
	 */
	const _salesRoles = "_salesRoles";
	/**
	 * @var string
	 */
	const _salesTerritory = "_salesTerritory";
	/**
	 * @var string
	 */
	const _salesTerritoryRule = "_salesTerritoryRule";
	/**
	 * @var string
	 */
	const _samlSingleSignOn = "_samlSingleSignOn";
	/**
	 * @var string
	 */
	const _scheduleMassUpdates = "_scheduleMassUpdates";
	/**
	 * @var string
	 */
	const _setUpAccounting = "_setUpAccounting";
	/**
	 * @var string
	 */
	const _setUpAchProcessing = "_setUpAchProcessing";
	/**
	 * @var string
	 */
	const _setUpAdpPayroll = "_setUpAdpPayroll";
	/**
	 * @var string
	 */
	const _setUpBillPay = "_setUpBillPay";
	/**
	 * @var string
	 */
	const _setUpBudgets = "_setUpBudgets";
	/**
	 * @var string
	 */
	const _setUpCampaignEmailAddresses = "_setUpCampaignEmailAddresses";
	/**
	 * @var string
	 */
	const _setupCampaigns = "_setupCampaigns";
	/**
	 * @var string
	 */
	const _setUpCompany = "_setUpCompany";
	/**
	 * @var string
	 */
	const _setUpCsvPreferences = "_setUpCsvPreferences";
	/**
	 * @var string
	 */
	const _setUpDomains = "_setUpDomains";
	/**
	 * @var string
	 */
	const _setUpEbay = "_setUpEbay";
	/**
	 * @var string
	 */
	const _setUpImageResizing = "_setUpImageResizing";
	/**
	 * @var string
	 */
	const _setUpOpenidSingleSignOn = "_setUpOpenidSingleSignOn";
	/**
	 * @var string
	 */
	const _setUpPartnerMonitor = "_setUpPartnerMonitor";
	/**
	 * @var string
	 */
	const _setUpPayroll = "_setUpPayroll";
	/**
	 * @var string
	 */
	const _setUpReminders = "_setUpReminders";
	/**
	 * @var string
	 */
	const _setUpSamlSingleSignOn = "_setUpSamlSingleSignOn";
	/**
	 * @var string
	 */
	const _setUpSnapshots = "_setUpSnapshots";
	/**
	 * @var string
	 */
	const _setUpSynchronization = "_setUpSynchronization";
	/**
	 * @var string
	 */
	const _setUpWebServices = "_setUpWebServices";
	/**
	 * @var string
	 */
	const _setUpWebSite = "_setUpWebSite";
	/**
	 * @var string
	 */
	const _setUpYearStatus = "_setUpYearStatus";
	/**
	 * @var string
	 */
	const _shippingItems = "_shippingItems";
	/**
	 * @var string
	 */
	const _shippingPartnerPackage = "_shippingPartnerPackage";
	/**
	 * @var string
	 */
	const _shippingPartnerRegistration = "_shippingPartnerRegistration";
	/**
	 * @var string
	 */
	const _shippingPartnerShipment = "_shippingPartnerShipment";
	/**
	 * @var string
	 */
	const _shortcuts = "_shortcuts";
	/**
	 * @var string
	 */
	const _standardCostVersion = "_standardCostVersion";
	/**
	 * @var string
	 */
	const _statementCharge = "_statementCharge";
	/**
	 * @var string
	 */
	const _statisticalAccountRegisters = "_statisticalAccountRegisters";
	/**
	 * @var string
	 */
	const _storeCategories = "_storeCategories";
	/**
	 * @var string
	 */
	const _storeContentCategories = "_storeContentCategories";
	/**
	 * @var string
	 */
	const _storeContentItems = "_storeContentItems";
	/**
	 * @var string
	 */
	const _storeLogoUpload = "_storeLogoUpload";
	/**
	 * @var string
	 */
	const _storePickupFulfillment = "_storePickupFulfillment";
	/**
	 * @var string
	 */
	const _storeTabs = "_storeTabs";
	/**
	 * @var string
	 */
	const _subscriptionPlan = "_subscriptionPlan";
	/**
	 * @var string
	 */
	const _subscriptions = "_subscriptions";
	/**
	 * @var string
	 */
	const _subsidiaries = "_subsidiaries";
	/**
	 * @var string
	 */
	const _suiteAppInstallation = "_suiteAppInstallation";
	/**
	 * @var string
	 */
	const _suiteBundler = "_suiteBundler";
	/**
	 * @var string
	 */
	const _suiteBundlerUpgrades = "_suiteBundlerUpgrades";
	/**
	 * @var string
	 */
	const _suiteScript = "_suiteScript";
	/**
	 * @var string
	 */
	const _suiteSignon = "_suiteSignon";
	/**
	 * @var string
	 */
	const _support = "_support";
	/**
	 * @var string
	 */
	const _supportCaseIssue = "_supportCaseIssue";
	/**
	 * @var string
	 */
	const _supportCaseOrigin = "_supportCaseOrigin";
	/**
	 * @var string
	 */
	const _supportCasePriority = "_supportCasePriority";
	/**
	 * @var string
	 */
	const _supportCaseSnapshotReminders = "_supportCaseSnapshotReminders";
	/**
	 * @var string
	 */
	const _supportCaseStatus = "_supportCaseStatus";
	/**
	 * @var string
	 */
	const _supportCaseTerritory = "_supportCaseTerritory";
	/**
	 * @var string
	 */
	const _supportCaseTerritoryRule = "_supportCaseTerritoryRule";
	/**
	 * @var string
	 */
	const _supportCaseType = "_supportCaseType";
	/**
	 * @var string
	 */
	const _supportSetup = "_supportSetup";
	/**
	 * @var string
	 */
	const _swapPricesBetweenPriceLevels = "_swapPricesBetweenPriceLevels";
	/**
	 * @var string
	 */
	const _systemEmailTemplate = "_systemEmailTemplate";
	/**
	 * @var string
	 */
	const _systemStatus = "_systemStatus";
	/**
	 * @var string
	 */
	const _tableauWorkbookExport = "_tableauWorkbookExport";
	/**
	 * @var string
	 */
	const _tasks = "_tasks";
	/**
	 * @var string
	 */
	const _tax = "_tax";
	/**
	 * @var string
	 */
	const _taxItems = "_taxItems";
	/**
	 * @var string
	 */
	const _taxSchedules = "_taxSchedules";
	/**
	 * @var string
	 */
	const _teamSellingContribution = "_teamSellingContribution";
	/**
	 * @var string
	 */
	const _tegataAccounts = "_tegataAccounts";
	/**
	 * @var string
	 */
	const _tegataPayable = "_tegataPayable";
	/**
	 * @var string
	 */
	const _tegataReceivable = "_tegataReceivable";
	/**
	 * @var string
	 */
	const _telephonyIntegration = "_telephonyIntegration";
	/**
	 * @var string
	 */
	const _templateCategories = "_templateCategories";
	/**
	 * @var string
	 */
	const _terminationReasons = "_terminationReasons";
	/**
	 * @var string
	 */
	const _testdriveMasters = "_testdriveMasters";
	/**
	 * @var string
	 */
	const _timeOffAdministration = "_timeOffAdministration";
	/**
	 * @var string
	 */
	const _timer = "_timer";
	/**
	 * @var string
	 */
	const _timeTracking = "_timeTracking";
	/**
	 * @var string
	 */
	const _trackMessages = "_trackMessages";
	/**
	 * @var string
	 */
	const _trackTime = "_trackTime";
	/**
	 * @var string
	 */
	const _transactionDetail = "_transactionDetail";
	/**
	 * @var string
	 */
	const _transactionNumberingAuditLog = "_transactionNumberingAuditLog";
	/**
	 * @var string
	 */
	const _transferFunds = "_transferFunds";
	/**
	 * @var string
	 */
	const _transferInventory = "_transferInventory";
	/**
	 * @var string
	 */
	const _transferOrder = "_transferOrder";
	/**
	 * @var string
	 */
	const _transferOrderApproval = "_transferOrderApproval";
	/**
	 * @var string
	 */
	const _translation = "_translation";
	/**
	 * @var string
	 */
	const _trialBalance = "_trialBalance";
	/**
	 * @var string
	 */
	const _twoFactorAuthentication = "_twoFactorAuthentication";
	/**
	 * @var string
	 */
	const _twoFactorAuthenticationBase = "_twoFactorAuthenticationBase";
	/**
	 * @var string
	 */
	const _unbilledReceivableRegisters = "_unbilledReceivableRegisters";
	/**
	 * @var string
	 */
	const _unbuildAssemblies = "_unbuildAssemblies";
	/**
	 * @var string
	 */
	const _uncategorizedPresentationItems = "_uncategorizedPresentationItems";
	/**
	 * @var string
	 */
	const _units = "_units";
	/**
	 * @var string
	 */
	const _updatePrices = "_updatePrices";
	/**
	 * @var string
	 */
	const _upsellAssistant = "_upsellAssistant";
	/**
	 * @var string
	 */
	const _upsellSetup = "_upsellSetup";
	/**
	 * @var string
	 */
	const _upsellWizard = "_upsellWizard";
	/**
	 * @var string
	 */
	const _usage = "_usage";
	/**
	 * @var string
	 */
	const _userAccessTokens = "_userAccessTokens";
	/**
	 * @var string
	 */
	const _userPreferences = "_userPreferences";
	/**
	 * @var string
	 */
	const _usersAndPasswords = "_usersAndPasswords";
	/**
	 * @var string
	 */
	const _vendorBillApproval = "_vendorBillApproval";
	/**
	 * @var string
	 */
	const _vendorPaymentStatus = "_vendorPaymentStatus";
	/**
	 * @var string
	 */
	const _vendorRequestForQuote = "_vendorRequestForQuote";
	/**
	 * @var string
	 */
	const _vendorReturnAuthApproval = "_vendorReturnAuthApproval";
	/**
	 * @var string
	 */
	const _vendorReturnAuthorization = "_vendorReturnAuthorization";
	/**
	 * @var string
	 */
	const _vendorReturns = "_vendorReturns";
	/**
	 * @var string
	 */
	const _vendors = "_vendors";
	/**
	 * @var string
	 */
	const _viewLoginAuditTrail = "_viewLoginAuditTrail";
	/**
	 * @var string
	 */
	const _viewOnlineBillPayStatus = "_viewOnlineBillPayStatus";
	/**
	 * @var string
	 */
	const _viewPaymentEvents = "_viewPaymentEvents";
	/**
	 * @var string
	 */
	const _viewUnencryptedCreditCards = "_viewUnencryptedCreditCards";
	/**
	 * @var string
	 */
	const _webServices = "_webServices";
	/**
	 * @var string
	 */
	const _webSiteExternalPublisher = "_webSiteExternalPublisher";
	/**
	 * @var string
	 */
	const _webSiteManagement = "_webSiteManagement";
	/**
	 * @var string
	 */
	const _webSiteReport = "_webSiteReport";
	/**
	 * @var string
	 */
	const _webStoreEmailTemplate = "_webStoreEmailTemplate";
	/**
	 * @var string
	 */
	const _webStoreReport = "_webStoreReport";
	/**
	 * @var string
	 */
	const _workCalendar = "_workCalendar";
	/**
	 * @var string
	 */
	const _workflow = "_workflow";
	/**
	 * @var string
	 */
	const _workOrder = "_workOrder";
	/**
	 * @var string
	 */
	const _workOrderClose = "_workOrderClose";
	/**
	 * @var string
	 */
	const _workOrderCompletion = "_workOrderCompletion";
	/**
	 * @var string
	 */
	const _workOrderIssue = "_workOrderIssue";
	/**
	 * @var string
	 */
	const _workplaces = "_workplaces";
}}

if (!class_exists("IntercoStatus")) {
/**
 * IntercoStatus
 */
class IntercoStatus {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _paired = "_paired";
	/**
	 * @var string
	 */
	const _pending = "_pending";
	/**
	 * @var string
	 */
	const _rejected = "_rejected";
}}

if (!class_exists("CurrencySymbolPlacement")) {
/**
 * CurrencySymbolPlacement
 */
class CurrencySymbolPlacement {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _afterNumber = "_afterNumber";
	/**
	 * @var string
	 */
	const _beforeNumber = "_beforeNumber";
}}

if (!class_exists("RecurrenceFrequency")) {
/**
 * RecurrenceFrequency
 */
class RecurrenceFrequency {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _none = "_none";
	/**
	 * @var string
	 */
	const _day = "_day";
	/**
	 * @var string
	 */
	const _week = "_week";
	/**
	 * @var string
	 */
	const _month = "_month";
	/**
	 * @var string
	 */
	const _year = "_year";
}}

if (!class_exists("RecurrenceDow")) {
/**
 * RecurrenceDow
 */
class RecurrenceDow {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _sunday = "_sunday";
	/**
	 * @var string
	 */
	const _monday = "_monday";
	/**
	 * @var string
	 */
	const _tuesday = "_tuesday";
	/**
	 * @var string
	 */
	const _wednesday = "_wednesday";
	/**
	 * @var string
	 */
	const _thursday = "_thursday";
	/**
	 * @var string
	 */
	const _friday = "_friday";
	/**
	 * @var string
	 */
	const _saturday = "_saturday";
}}

if (!class_exists("RecurrenceDowim")) {
/**
 * RecurrenceDowim
 */
class RecurrenceDowim {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _first = "_first";
	/**
	 * @var string
	 */
	const _second = "_second";
	/**
	 * @var string
	 */
	const _third = "_third";
	/**
	 * @var string
	 */
	const _fourth = "_fourth";
	/**
	 * @var string
	 */
	const _last = "_last";
}}

if (!class_exists("AlcoholRecipientType")) {
/**
 * AlcoholRecipientType
 */
class AlcoholRecipientType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _consumer = "_consumer";
	/**
	 * @var string
	 */
	const _licensee = "_licensee";
}}

if (!class_exists("ShippingCarrier")) {
/**
 * ShippingCarrier
 */
class ShippingCarrier {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _fedexUspsMore = "_fedexUspsMore";
	/**
	 * @var string
	 */
	const _ups = "_ups";
}}

if (!class_exists("Address")) {
/**
 * Address
 */
class Address extends Record {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var Country
	 */
	public $country;
	/**
	 * @access public
	 * @var string
	 */
	public $attention;
	/**
	 * @access public
	 * @var string
	 */
	public $addressee;
	/**
	 * @access public
	 * @var string
	 */
	public $addrPhone;
	/**
	 * @access public
	 * @var string
	 */
	public $addr1;
	/**
	 * @access public
	 * @var string
	 */
	public $addr2;
	/**
	 * @access public
	 * @var string
	 */
	public $addr3;
	/**
	 * @access public
	 * @var string
	 */
	public $city;
	/**
	 * @access public
	 * @var string
	 */
	public $state;
	/**
	 * @access public
	 * @var string
	 */
	public $zip;
	/**
	 * @access public
	 * @var string
	 */
	public $addrText;
	/**
	 * @access public
	 * @var boolean
	 */
	public $override;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"internalId" => "string",
		"country" => "Country",
		"attention" => "string",
		"addressee" => "string",
		"addrPhone" => "string",
		"addr1" => "string",
		"addr2" => "string",
		"addr3" => "string",
		"city" => "string",
		"state" => "string",
		"zip" => "string",
		"addrText" => "string",
		"override" => "boolean",
		"customFieldList" => "CustomFieldList",
	);
}}

if (!class_exists("PresentationItem")) {
/**
 * PresentationItem
 */
class PresentationItem {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var PresentationItemType
	 */
	public $itemType;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var float
	 */
	public $onlinePrice;
	/**
	 * @access public
	 * @var float
	 */
	public $basePrice;

	static $paramtypesmap = array(
		"item" => "RecordRef",
		"itemType" => "PresentationItemType",
		"description" => "string",
		"onlinePrice" => "float",
		"basePrice" => "float",
	);
}}

if (!class_exists("Partners")) {
/**
 * Partners
 */
class Partners {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partner;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrimary;
	/**
	 * @access public
	 * @var float
	 */
	public $contribution;

	static $paramtypesmap = array(
		"partner" => "RecordRef",
		"partnerRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
}}

if (!class_exists("LandedCost")) {
/**
 * LandedCost
 */
class LandedCost extends Record {
	/**
	 * @access public
	 * @var LandedCostDataList
	 */
	public $landedCostDataList;

	static $paramtypesmap = array(
		"landedCostDataList" => "LandedCostDataList",
	);
}}

if (!class_exists("LandedCostDataList")) {
/**
 * LandedCostDataList
 */
class LandedCostDataList {
	/**
	 * @access public
	 * @var LandedCostData[]
	 */
	public $landedCostData;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"landedCostData" => "LandedCostData[]",
		"replaceAll" => "boolean",
	);
}}

if (!class_exists("LandedCostData")) {
/**
 * LandedCostData
 */
class LandedCostData {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"costCategory" => "RecordRef",
		"amount" => "float",
	);
}}

if (!class_exists("LandedCostSummary")) {
/**
 * LandedCostSummary
 */
class LandedCostSummary {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $category;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;
	/**
	 * @access public
	 * @var LandedCostSource
	 */
	public $source;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $transaction;

	static $paramtypesmap = array(
		"category" => "RecordRef",
		"amount" => "float",
		"source" => "LandedCostSource",
		"transaction" => "RecordRef",
	);
}}

if (!class_exists("CustomerSalesTeam")) {
/**
 * CustomerSalesTeam
 */
class CustomerSalesTeam {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $salesRole;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isPrimary;
	/**
	 * @access public
	 * @var float
	 */
	public $contribution;

	static $paramtypesmap = array(
		"employee" => "RecordRef",
		"salesRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
}}

if (!class_exists("TimeItem")) {
/**
 * TimeItem
 */
class TimeItem {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var TimeItemTimeType
	 */
	public $timeType;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payrollItem;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $temporaryLocalJurisdiction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $temporaryStateJurisdiction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var Duration
	 */
	public $hours;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $price;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $overrideRate;
	/**
	 * @access public
	 * @var Duration
	 */
	public $hoursTotal;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $caseTaskEvent;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isUtilized;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isProductive;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isExempt;

	static $paramtypesmap = array(
		"id" => "integer",
		"employee" => "RecordRef",
		"timeType" => "TimeItemTimeType",
		"tranDate" => "dateTime",
		"customer" => "RecordRef",
		"isBillable" => "boolean",
		"payrollItem" => "RecordRef",
		"item" => "RecordRef",
		"temporaryLocalJurisdiction" => "RecordRef",
		"temporaryStateJurisdiction" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"hours" => "Duration",
		"price" => "RecordRef",
		"rate" => "float",
		"overrideRate" => "boolean",
		"hoursTotal" => "Duration",
		"caseTaskEvent" => "RecordRef",
		"memo" => "string",
		"isUtilized" => "boolean",
		"isProductive" => "boolean",
		"isExempt" => "boolean",
	);
}}

if (!class_exists("InventoryDetail")) {
/**
 * InventoryDetail
 */
class InventoryDetail extends Record {
	/**
	 * @access public
	 * @var InventoryAssignmentList
	 */
	public $inventoryAssignmentList;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;

	static $paramtypesmap = array(
		"inventoryAssignmentList" => "InventoryAssignmentList",
		"customForm" => "RecordRef",
	);
}}

if (!class_exists("RecurrenceDowMaskList")) {
/**
 * RecurrenceDowMaskList
 */
class RecurrenceDowMaskList {
	/**
	 * @access public
	 * @var RecurrenceDow
	 */
	public $recurrenceDowMask;

	static $paramtypesmap = array(
		"recurrenceDowMask" => "RecurrenceDow",
	);
}}

if (!class_exists("AccountingBookDetail")) {
/**
 * AccountingBookDetail
 */
class AccountingBookDetail {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $exchangeRate;

	static $paramtypesmap = array(
		"accountingBook" => "RecordRef",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
	);
}}

if (!class_exists("AccountingBookDetailList")) {
/**
 * AccountingBookDetailList
 */
class AccountingBookDetailList {
	/**
	 * @access public
	 * @var AccountingBookDetail[]
	 */
	public $accountingBookDetail;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"accountingBookDetail" => "AccountingBookDetail[]",
		"replaceAll" => "boolean",
	);
}}

if (!class_exists("InventoryAssignmentList")) {
/**
 * InventoryAssignmentList
 */
class InventoryAssignmentList {
	/**
	 * @access public
	 * @var InventoryAssignment[]
	 */
	public $inventoryAssignment;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"inventoryAssignment" => "InventoryAssignment[]",
		"replaceAll" => "boolean",
	);
}}

if (!class_exists("InventoryAssignment")) {
/**
 * InventoryAssignment
 */
class InventoryAssignment {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $issueInventoryNumber;
	/**
	 * @access public
	 * @var string
	 */
	public $receiptInventoryNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $toBinNumber;
	/**
	 * @access public
	 * @var float
	 */
	public $quantity;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var float
	 */
	public $quantityAvailable;

	static $paramtypesmap = array(
		"internalId" => "string",
		"issueInventoryNumber" => "RecordRef",
		"receiptInventoryNumber" => "string",
		"binNumber" => "RecordRef",
		"toBinNumber" => "RecordRef",
		"quantity" => "float",
		"expirationDate" => "dateTime",
		"quantityAvailable" => "float",
	);
}}

if (!class_exists("InventoryDetailSearchBasic")) {
/**
 * InventoryDetailSearchBasic
 */
class InventoryDetailSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;

	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryNumber" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
	);
}}

if (!class_exists("InventoryDetailSearchRowBasic")) {
/**
 * InventoryDetailSearchRowBasic
 */
class InventoryDetailSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnSelectField[]",
		"quantity" => "SearchColumnDoubleField[]",
	);
}}

if (!class_exists("EntitySearchBasic")) {
/**
 * EntitySearchBasic
 */
class EntitySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"entityId" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("EntitySearchRowBasic")) {
/**
 * EntitySearchRowBasic
 */
class EntitySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"comments" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"email" => "SearchColumnStringField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"image" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ContactSearchBasic")) {
/**
 * ContactSearchBasic
 */
class ContactSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contactRole;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contactSource;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $employer;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"availableOffline" => "SearchBooleanField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"company" => "SearchMultiSelectField",
		"contactRole" => "SearchMultiSelectField",
		"contactSource" => "SearchMultiSelectField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"employer" => "SearchStringField",
		"entityId" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"firstName" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"level" => "SearchEnumMultiSelectField",
		"middleName" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"salutation" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"type" => "SearchEnumMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ContactSearchRowBasic")) {
/**
 * ContactSearchRowBasic
 */
class ContactSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $contactRole;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $contactSource;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"city" => "SearchColumnStringField[]",
		"comments" => "SearchColumnStringField[]",
		"company" => "SearchColumnSelectField[]",
		"contactRole" => "SearchColumnSelectField[]",
		"contactSource" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"email" => "SearchColumnStringField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"firstName" => "SearchColumnStringField[]",
		"giveAccess" => "SearchColumnBooleanField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"hasDuplicates" => "SearchColumnBooleanField[]",
		"homePhone" => "SearchColumnStringField[]",
		"image" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastName" => "SearchColumnStringField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"middleName" => "SearchColumnStringField[]",
		"mobilePhone" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"salutation" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("CustomerSearchBasic")) {
/**
 * CustomerSearchBasic
 */
class CustomerSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $boughtAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $boughtDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $ccDefault;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccExpDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccHolderName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ccState;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccStateFrom;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ccType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $classBought;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolBalance;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $consolDaysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolDepositBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolOverdueBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $conversionDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $creditHold;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $creditHoldOverride;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custStage;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateClosed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $defaultOrderPriority;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $depositBalance;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $deptBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $explicitConversion;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $firstOrderDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $firstSaleDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxConsolBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxConsolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxUnbilledOrders;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupPricingLevel;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isReportedLead;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemPricingLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $itemPricingUnitPrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemsBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemsOrdered;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastOrderDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastSaleDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $leadDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $locationBought;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $manualCreditHold;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $merchantAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $monthlyClosing;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $onCreditHold;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $orderedAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $orderedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $otherRelationships;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $overdueBalance;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parentItemsBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parentItemsOrdered;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pec;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $prospectDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $pstExempt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $receivablesAccount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $reminderDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $resaleNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shippingItem;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $taxable;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $territory;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $webLead;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchStringField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"availableOffline" => "SearchBooleanField",
		"balance" => "SearchDoubleField",
		"billAddress" => "SearchStringField",
		"boughtAmount" => "SearchDoubleField",
		"boughtDate" => "SearchDateField",
		"buyingReason" => "SearchMultiSelectField",
		"buyingTimeFrame" => "SearchMultiSelectField",
		"category" => "SearchMultiSelectField",
		"ccCustomerCode" => "SearchStringField",
		"ccDefault" => "SearchBooleanField",
		"ccExpDate" => "SearchDateField",
		"ccHolderName" => "SearchStringField",
		"ccNumber" => "SearchStringField",
		"ccState" => "SearchMultiSelectField",
		"ccStateFrom" => "SearchDateField",
		"ccType" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"classBought" => "SearchMultiSelectField",
		"comments" => "SearchStringField",
		"companyName" => "SearchStringField",
		"consolBalance" => "SearchDoubleField",
		"consolDaysOverdue" => "SearchLongField",
		"consolDepositBalance" => "SearchDoubleField",
		"consolOverdueBalance" => "SearchDoubleField",
		"consolUnbilledOrders" => "SearchDoubleField",
		"contact" => "SearchStringField",
		"contribution" => "SearchLongField",
		"conversionDate" => "SearchDateField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"creditHold" => "SearchEnumMultiSelectField",
		"creditHoldOverride" => "SearchBooleanField",
		"creditLimit" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"custStage" => "SearchMultiSelectField",
		"custStatus" => "SearchMultiSelectField",
		"dateClosed" => "SearchDateField",
		"dateCreated" => "SearchDateField",
		"daysOverdue" => "SearchLongField",
		"defaultOrderPriority" => "SearchDoubleField",
		"depositBalance" => "SearchDoubleField",
		"deptBought" => "SearchMultiSelectField",
		"drAccount" => "SearchMultiSelectField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"emailTransactions" => "SearchBooleanField",
		"endDate" => "SearchDateField",
		"entityId" => "SearchStringField",
		"entityStatus" => "SearchMultiSelectField",
		"estimatedBudget" => "SearchDoubleField",
		"explicitConversion" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"faxTransactions" => "SearchBooleanField",
		"firstName" => "SearchStringField",
		"firstOrderDate" => "SearchDateField",
		"firstSaleDate" => "SearchDateField",
		"fxAccount" => "SearchMultiSelectField",
		"fxBalance" => "SearchDoubleField",
		"fxConsolBalance" => "SearchDoubleField",
		"fxConsolUnbilledOrders" => "SearchDoubleField",
		"fxUnbilledOrders" => "SearchDoubleField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"groupPricingLevel" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isBudgetApproved" => "SearchBooleanField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"isReportedLead" => "SearchBooleanField",
		"isShipAddress" => "SearchBooleanField",
		"itemPricingLevel" => "SearchMultiSelectField",
		"itemPricingUnitPrice" => "SearchDoubleField",
		"itemsBought" => "SearchMultiSelectField",
		"itemsOrdered" => "SearchMultiSelectField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"lastOrderDate" => "SearchDateField",
		"lastSaleDate" => "SearchDateField",
		"leadDate" => "SearchDateField",
		"leadSource" => "SearchMultiSelectField",
		"level" => "SearchEnumMultiSelectField",
		"locationBought" => "SearchMultiSelectField",
		"manualCreditHold" => "SearchBooleanField",
		"merchantAccount" => "SearchMultiSelectField",
		"middleName" => "SearchStringField",
		"monthlyClosing" => "SearchEnumMultiSelectField",
		"onCreditHold" => "SearchBooleanField",
		"orderedAmount" => "SearchDoubleField",
		"orderedDate" => "SearchDateField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"overdueBalance" => "SearchDoubleField",
		"parent" => "SearchMultiSelectField",
		"parentItemsBought" => "SearchMultiSelectField",
		"parentItemsOrdered" => "SearchMultiSelectField",
		"partner" => "SearchMultiSelectField",
		"partnerContribution" => "SearchLongField",
		"partnerRole" => "SearchMultiSelectField",
		"partnerTeamMember" => "SearchMultiSelectField",
		"pec" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"priceLevel" => "SearchMultiSelectField",
		"pricingGroup" => "SearchMultiSelectField",
		"pricingItem" => "SearchMultiSelectField",
		"printTransactions" => "SearchBooleanField",
		"prospectDate" => "SearchDateField",
		"pstExempt" => "SearchBooleanField",
		"receivablesAccount" => "SearchMultiSelectField",
		"reminderDate" => "SearchDateField",
		"resaleNumber" => "SearchStringField",
		"role" => "SearchMultiSelectField",
		"salesReadiness" => "SearchMultiSelectField",
		"salesRep" => "SearchMultiSelectField",
		"salesTeamMember" => "SearchMultiSelectField",
		"salesTeamRole" => "SearchMultiSelectField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"shipComplete" => "SearchBooleanField",
		"shippingItem" => "SearchMultiSelectField",
		"stage" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"state" => "SearchStringField",
		"subsidBought" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxable" => "SearchBooleanField",
		"terms" => "SearchMultiSelectField",
		"territory" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"unbilledOrders" => "SearchDoubleField",
		"url" => "SearchStringField",
		"vatRegNumber" => "SearchStringField",
		"webLead" => "SearchBooleanField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("CustomerSearchRowBasic")) {
/**
 * CustomerSearchRowBasic
 */
class CustomerSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altContact;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $ccDefault;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $ccExpDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccHolderName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $ccState;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $ccStateFrom;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $ccType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolBalance;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $consolDaysOverdue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolDepositBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolOverdueBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contributionPrimary;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $conversionDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $creditHold;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $creditHoldOverride;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateClosed;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $defaultOrderPriority;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $depositBalance;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $explicitConversion;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $firstOrderDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $firstSaleDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxConsolBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxConsolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxUnbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $groupPricingLevel;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemPricingLevel;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $itemPricingUnitPrice;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $jobEndDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $jobProjectedEnd;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $jobStartDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $jobType;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastOrderDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastSaleDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $leadDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $manualCreditHold;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $monthlyClosing;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $onCreditHold;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $overdueBalance;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pec;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $prefCCProcessor;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pricingItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $prospectDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $receivablesAccount;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $reminderDays;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $resaleNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $shippingItem;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $taxable;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $territory;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $webLead;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchColumnStringField[]",
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"altContact" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"balance" => "SearchColumnDoubleField[]",
		"billAddress" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"buyingReason" => "SearchColumnStringField[]",
		"buyingTimeFrame" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"ccCustomerCode" => "SearchColumnStringField[]",
		"ccDefault" => "SearchColumnBooleanField[]",
		"ccExpDate" => "SearchColumnDateField[]",
		"ccHolderName" => "SearchColumnStringField[]",
		"ccInternalId" => "SearchColumnStringField[]",
		"ccNumber" => "SearchColumnStringField[]",
		"ccState" => "SearchColumnSelectField[]",
		"ccStateFrom" => "SearchColumnDateField[]",
		"ccType" => "SearchColumnSelectField[]",
		"city" => "SearchColumnStringField[]",
		"comments" => "SearchColumnStringField[]",
		"companyName" => "SearchColumnStringField[]",
		"consolBalance" => "SearchColumnDoubleField[]",
		"consolDaysOverdue" => "SearchColumnLongField[]",
		"consolDepositBalance" => "SearchColumnDoubleField[]",
		"consolOverdueBalance" => "SearchColumnDoubleField[]",
		"consolUnbilledOrders" => "SearchColumnDoubleField[]",
		"contact" => "SearchColumnStringField[]",
		"contribution" => "SearchColumnDoubleField[]",
		"contributionPrimary" => "SearchColumnDoubleField[]",
		"conversionDate" => "SearchColumnDateField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"creditHold" => "SearchColumnEnumSelectField[]",
		"creditHoldOverride" => "SearchColumnBooleanField[]",
		"creditLimit" => "SearchColumnDoubleField[]",
		"currency" => "SearchColumnSelectField[]",
		"dateClosed" => "SearchColumnDateField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"daysOverdue" => "SearchColumnLongField[]",
		"defaultOrderPriority" => "SearchColumnDoubleField[]",
		"depositBalance" => "SearchColumnDoubleField[]",
		"drAccount" => "SearchColumnStringField[]",
		"email" => "SearchColumnStringField[]",
		"emailPreference" => "SearchColumnEnumSelectField[]",
		"emailTransactions" => "SearchColumnBooleanField[]",
		"endDate" => "SearchColumnDateField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"entityStatus" => "SearchColumnSelectField[]",
		"estimatedBudget" => "SearchColumnDoubleField[]",
		"explicitConversion" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"faxTransactions" => "SearchColumnBooleanField[]",
		"firstName" => "SearchColumnStringField[]",
		"firstOrderDate" => "SearchColumnDateField[]",
		"firstSaleDate" => "SearchColumnDateField[]",
		"fxAccount" => "SearchColumnStringField[]",
		"fxBalance" => "SearchColumnDoubleField[]",
		"fxConsolBalance" => "SearchColumnDoubleField[]",
		"fxConsolUnbilledOrders" => "SearchColumnDoubleField[]",
		"fxUnbilledOrders" => "SearchColumnDoubleField[]",
		"giveAccess" => "SearchColumnBooleanField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"groupPricingLevel" => "SearchColumnStringField[]",
		"hasDuplicates" => "SearchColumnBooleanField[]",
		"homePhone" => "SearchColumnStringField[]",
		"image" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isBudgetApproved" => "SearchColumnBooleanField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPerson" => "SearchColumnBooleanField[]",
		"isShipAddress" => "SearchColumnBooleanField[]",
		"itemPricingLevel" => "SearchColumnStringField[]",
		"itemPricingUnitPrice" => "SearchColumnDoubleField[]",
		"jobEndDate" => "SearchColumnDateField[]",
		"jobProjectedEnd" => "SearchColumnDateField[]",
		"jobStartDate" => "SearchColumnDateField[]",
		"jobType" => "SearchColumnSelectField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastName" => "SearchColumnStringField[]",
		"lastOrderDate" => "SearchColumnDateField[]",
		"lastSaleDate" => "SearchColumnDateField[]",
		"leadDate" => "SearchColumnDateField[]",
		"leadSource" => "SearchColumnSelectField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"manualCreditHold" => "SearchColumnBooleanField[]",
		"middleName" => "SearchColumnStringField[]",
		"mobilePhone" => "SearchColumnStringField[]",
		"monthlyClosing" => "SearchColumnEnumSelectField[]",
		"onCreditHold" => "SearchColumnBooleanField[]",
		"overdueBalance" => "SearchColumnDoubleField[]",
		"parent" => "SearchColumnSelectField[]",
		"partner" => "SearchColumnSelectField[]",
		"partnerContribution" => "SearchColumnDoubleField[]",
		"partnerRole" => "SearchColumnStringField[]",
		"partnerTeamMember" => "SearchColumnSelectField[]",
		"pec" => "SearchColumnStringField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"prefCCProcessor" => "SearchColumnSelectField[]",
		"priceLevel" => "SearchColumnSelectField[]",
		"pricingGroup" => "SearchColumnStringField[]",
		"pricingItem" => "SearchColumnStringField[]",
		"printTransactions" => "SearchColumnBooleanField[]",
		"prospectDate" => "SearchColumnDateField[]",
		"receivablesAccount" => "SearchColumnStringField[]",
		"reminderDays" => "SearchColumnLongField[]",
		"resaleNumber" => "SearchColumnStringField[]",
		"role" => "SearchColumnStringField[]",
		"salesReadiness" => "SearchColumnStringField[]",
		"salesRep" => "SearchColumnSelectField[]",
		"salesTeamMember" => "SearchColumnSelectField[]",
		"salesTeamRole" => "SearchColumnSelectField[]",
		"salutation" => "SearchColumnStringField[]",
		"shipAddress" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipComplete" => "SearchColumnBooleanField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shippingItem" => "SearchColumnSelectField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"stage" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"state" => "SearchColumnStringField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"taxable" => "SearchColumnBooleanField[]",
		"taxItem" => "SearchColumnSelectField[]",
		"terms" => "SearchColumnSelectField[]",
		"territory" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"unbilledOrders" => "SearchColumnDoubleField[]",
		"url" => "SearchColumnStringField[]",
		"vatRegNumber" => "SearchColumnStringField[]",
		"webLead" => "SearchColumnBooleanField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("CalendarEventSearchBasic")) {
/**
 * CalendarEventSearchBasic
 */
class CalendarEventSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $attendee;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $calendar;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $instanceStart;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isUpcomingEvent;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $organizer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $response;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accessLevel" => "SearchEnumMultiSelectField",
		"attendee" => "SearchMultiSelectField",
		"calendar" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"createdDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"instanceStart" => "SearchDateField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isUpcomingEvent" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchStringField",
		"message" => "SearchStringField",
		"organizer" => "SearchMultiSelectField",
		"owner" => "SearchMultiSelectField",
		"resource" => "SearchMultiSelectField",
		"response" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("CalendarEventSearchRowBasic")) {
/**
 * CalendarEventSearchRowBasic
 */
class CalendarEventSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $attendee;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $endTime;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $instanceEnd;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $instanceStart;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $markdone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $organizer;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $recurrence;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $response;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transaction;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accessLevel" => "SearchColumnEnumSelectField[]",
		"attendee" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"completedDate" => "SearchColumnDateField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endTime" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"instanceEnd" => "SearchColumnDateField[]",
		"instanceStart" => "SearchColumnDateField[]",
		"internalId" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnStringField[]",
		"markdone" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"organizer" => "SearchColumnSelectField[]",
		"owner" => "SearchColumnSelectField[]",
		"recurrence" => "SearchColumnStringField[]",
		"resource" => "SearchColumnSelectField[]",
		"response" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnStringField[]",
		"startTime" => "SearchColumnStringField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"title" => "SearchColumnStringField[]",
		"transaction" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("TaskSearchBasic")) {
/**
 * TaskSearchBasic
 */
class TaskSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualTime;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTimeOverride;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isJobSummaryTask;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isJobTask;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $milestone;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $percentComplete;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $timeRemaining;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualTime" => "SearchDoubleField",
		"assigned" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"contact" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"estimatedTime" => "SearchDoubleField",
		"estimatedTimeOverride" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isJobSummaryTask" => "SearchBooleanField",
		"isJobTask" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"milestone" => "SearchLongField",
		"owner" => "SearchMultiSelectField",
		"percentComplete" => "SearchLongField",
		"percentTimeComplete" => "SearchLongField",
		"priority" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"timeRemaining" => "SearchDoubleField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("TaskSearchRowBasic")) {
/**
 * TaskSearchRowBasic
 */
class TaskSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualTime;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedTimeOverride;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isJobSummaryTask;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isJobTask;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $markdone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $milestone;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $order;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $percentComplete;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $timeRemaining;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transaction;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accessLevel" => "SearchColumnStringField[]",
		"actualTime" => "SearchColumnDoubleField[]",
		"assigned" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"completedDate" => "SearchColumnDateField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"dueDate" => "SearchColumnDateField[]",
		"estimatedTime" => "SearchColumnDoubleField[]",
		"estimatedTimeOverride" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isJobSummaryTask" => "SearchColumnBooleanField[]",
		"isJobTask" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"markdone" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"milestone" => "SearchColumnSelectField[]",
		"order" => "SearchColumnLongField[]",
		"owner" => "SearchColumnSelectField[]",
		"percentComplete" => "SearchColumnDoubleField[]",
		"percentTimeComplete" => "SearchColumnDoubleField[]",
		"priority" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"startTime" => "SearchColumnStringField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"timeRemaining" => "SearchColumnDoubleField[]",
		"title" => "SearchColumnStringField[]",
		"transaction" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("OpportunitySearchBasic")) {
/**
 * OpportunitySearchBasic
 */
class OpportunitySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closeDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $competitor;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOpen;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysToClose;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expectedCloseDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $forecastType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $foreignProjectedAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $foreignRangeHigh;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $foreignRangeLow;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxTranCostEstimate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $postingPeriodRelative;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $probability;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $projAltSalesAmt;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $projectedTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeHigh;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeHighAlt;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeLow;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rangeLowAlt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $taxPeriodRelative;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranCostEstimate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfitPct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranFxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $winLossReason;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $wonBy;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amount" => "SearchDoubleField",
		"availableOffline" => "SearchBooleanField",
		"buyingReason" => "SearchMultiSelectField",
		"buyingTimeFrame" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"closeDate" => "SearchDateField",
		"competitor" => "SearchMultiSelectField",
		"contribution" => "SearchLongField",
		"currency" => "SearchMultiSelectField",
		"custType" => "SearchMultiSelectField",
		"dateCreated" => "SearchDateField",
		"daysOpen" => "SearchLongField",
		"daysToClose" => "SearchLongField",
		"department" => "SearchMultiSelectField",
		"entity" => "SearchMultiSelectField",
		"entityStatus" => "SearchMultiSelectField",
		"estimatedBudget" => "SearchDoubleField",
		"expectedCloseDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"forecastType" => "SearchEnumMultiSelectField",
		"foreignProjectedAmount" => "SearchDoubleField",
		"foreignRangeHigh" => "SearchDoubleField",
		"foreignRangeLow" => "SearchDoubleField",
		"fxTranCostEstimate" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isBudgetApproved" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"leadSource" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"number" => "SearchLongField",
		"partner" => "SearchMultiSelectField",
		"partnerContribution" => "SearchLongField",
		"partnerRole" => "SearchMultiSelectField",
		"partnerTeamMember" => "SearchMultiSelectField",
		"postingPeriod" => "RecordRef",
		"postingPeriodRelative" => "PostingPeriodDate",
		"probability" => "SearchLongField",
		"projAltSalesAmt" => "SearchDoubleField",
		"projectedTotal" => "SearchDoubleField",
		"rangeHigh" => "SearchDoubleField",
		"rangeHighAlt" => "SearchDoubleField",
		"rangeLow" => "SearchDoubleField",
		"rangeLowAlt" => "SearchDoubleField",
		"salesReadiness" => "SearchMultiSelectField",
		"salesRep" => "SearchMultiSelectField",
		"salesTeamMember" => "SearchMultiSelectField",
		"salesTeamRole" => "SearchMultiSelectField",
		"status" => "SearchEnumMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxPeriod" => "RecordRef",
		"taxPeriodRelative" => "PostingPeriodDate",
		"title" => "SearchStringField",
		"tranCostEstimate" => "SearchDoubleField",
		"tranDate" => "SearchDateField",
		"tranEstGrossProfit" => "SearchDoubleField",
		"tranEstGrossProfitPct" => "SearchDoubleField",
		"tranFxEstGrossProfit" => "SearchDoubleField",
		"tranId" => "SearchStringField",
		"winLossReason" => "SearchMultiSelectField",
		"wonBy" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("OpportunitySearchRowBasic")) {
/**
 * OpportunitySearchRowBasic
 */
class OpportunitySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $actionItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $closeDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $competitor;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contributionPrimary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $custType;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysOpen;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysToClose;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $decisionMaker;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expectedCloseDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $forecastType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $foreignProjectedAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $foreignRangeHigh;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $foreignRangeLow;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxTranCostEstimate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $period;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $probability;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $projAltSalesAmt;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $projectedTotal;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rangeHigh;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rangeHighAlt;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rangeLow;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rangeLowAlt;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxPeriod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $total;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $tranCostEstimate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $tranEstGrossProfit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $tranEstGrossProfitPct;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $tranFxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $tranId;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $weightedTotal;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $winLossReason;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $wonBy;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actionItem" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"buyingReason" => "SearchColumnStringField[]",
		"buyingTimeFrame" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"closeDate" => "SearchColumnDateField[]",
		"competitor" => "SearchColumnSelectField[]",
		"contribution" => "SearchColumnDoubleField[]",
		"contributionPrimary" => "SearchColumnDoubleField[]",
		"currency" => "SearchColumnSelectField[]",
		"custType" => "SearchColumnStringField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"daysOpen" => "SearchColumnLongField[]",
		"daysToClose" => "SearchColumnLongField[]",
		"decisionMaker" => "SearchColumnSelectField[]",
		"department" => "SearchColumnSelectField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"entity" => "SearchColumnSelectField[]",
		"entityStatus" => "SearchColumnSelectField[]",
		"estimatedBudget" => "SearchColumnDoubleField[]",
		"expectedCloseDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"forecastType" => "SearchColumnEnumSelectField[]",
		"foreignProjectedAmount" => "SearchColumnDoubleField[]",
		"foreignRangeHigh" => "SearchColumnDoubleField[]",
		"foreignRangeLow" => "SearchColumnDoubleField[]",
		"fxTranCostEstimate" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isBudgetApproved" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"leadSource" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"partner" => "SearchColumnSelectField[]",
		"partnerContribution" => "SearchColumnDoubleField[]",
		"partnerRole" => "SearchColumnSelectField[]",
		"partnerTeamMember" => "SearchColumnSelectField[]",
		"period" => "SearchColumnStringField[]",
		"probability" => "SearchColumnDoubleField[]",
		"projAltSalesAmt" => "SearchColumnDoubleField[]",
		"projectedTotal" => "SearchColumnDoubleField[]",
		"rangeHigh" => "SearchColumnDoubleField[]",
		"rangeHighAlt" => "SearchColumnDoubleField[]",
		"rangeLow" => "SearchColumnDoubleField[]",
		"rangeLowAlt" => "SearchColumnDoubleField[]",
		"salesReadiness" => "SearchColumnStringField[]",
		"salesRep" => "SearchColumnSelectField[]",
		"salesTeamMember" => "SearchColumnSelectField[]",
		"salesTeamRole" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"taxPeriod" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"total" => "SearchColumnDoubleField[]",
		"tranCostEstimate" => "SearchColumnDoubleField[]",
		"tranDate" => "SearchColumnDateField[]",
		"tranEstGrossProfit" => "SearchColumnDoubleField[]",
		"tranEstGrossProfitPct" => "SearchColumnDoubleField[]",
		"tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
		"tranId" => "SearchColumnStringField[]",
		"weightedTotal" => "SearchColumnDoubleField[]",
		"winLossReason" => "SearchColumnSelectField[]",
		"wonBy" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("EmployeeSearchBasic")) {
/**
 * EmployeeSearchBasic
 */
class EmployeeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $alienNumber;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $anniversary;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $approvalLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $approver;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $authWorkDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingClass;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $birthDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $birthDay;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $cContribution;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $commissionPlan;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $concurrentWebServicesUser;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $deduction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $earning;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $education;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employeeStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employeeType;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $employeeTypeKpi;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ethnicity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $expenseLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gender;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $hireDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $I9Verified;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isJobResource;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTemplate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $jobDescription;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $laborCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastPaidDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastReviewDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $maritalStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $nextReviewDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $offlineAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $payFrequency;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $permChangeDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permissionChange;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $primaryEarningAmount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $primaryEarningItem;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $primaryEarningType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderApprovalLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $purchaseOrderApprover;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderLimit;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $releaseDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $residentStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $roleChange;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $roleChangeDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRole;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $socialSecurityNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $supervisor;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $supportRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $timeApprover;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $usePerquest;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useTimeData;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $visaExpDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $visaType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $withholding;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workplace;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"alienNumber" => "SearchStringField",
		"anniversary" => "SearchDateField",
		"approvalLimit" => "SearchDoubleField",
		"approver" => "SearchMultiSelectField",
		"attention" => "SearchStringField",
		"authWorkDate" => "SearchDateField",
		"billAddress" => "SearchStringField",
		"billingClass" => "SearchMultiSelectField",
		"birthDate" => "SearchDateField",
		"birthDay" => "SearchDateField",
		"cContribution" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"class" => "SearchMultiSelectField",
		"comments" => "SearchStringField",
		"commissionPlan" => "SearchMultiSelectField",
		"concurrentWebServicesUser" => "SearchBooleanField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"deduction" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"earning" => "SearchMultiSelectField",
		"education" => "SearchMultiSelectField",
		"eligibleForCommission" => "SearchBooleanField",
		"email" => "SearchStringField",
		"employeeStatus" => "SearchMultiSelectField",
		"employeeType" => "SearchMultiSelectField",
		"employeeTypeKpi" => "SearchBooleanField",
		"entityId" => "SearchStringField",
		"ethnicity" => "SearchMultiSelectField",
		"expenseLimit" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"firstName" => "SearchStringField",
		"gender" => "SearchEnumMultiSelectField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hireDate" => "SearchDateField",
		"I9Verified" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isJobResource" => "SearchBooleanField",
		"isTemplate" => "SearchBooleanField",
		"jobDescription" => "SearchStringField",
		"laborCost" => "SearchDoubleField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"lastPaidDate" => "SearchDateField",
		"lastReviewDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"location" => "SearchMultiSelectField",
		"maritalStatus" => "SearchMultiSelectField",
		"middleName" => "SearchStringField",
		"nextReviewDate" => "SearchDateField",
		"offlineAccess" => "SearchBooleanField",
		"payFrequency" => "SearchEnumMultiSelectField",
		"permChangeDate" => "SearchDateField",
		"permission" => "SearchEnumMultiSelectField",
		"permissionChange" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"primaryEarningAmount" => "SearchDoubleField",
		"primaryEarningItem" => "SearchStringField",
		"primaryEarningType" => "SearchStringField",
		"purchaseOrderApprovalLimit" => "SearchDoubleField",
		"purchaseOrderApprover" => "SearchMultiSelectField",
		"purchaseOrderLimit" => "SearchDoubleField",
		"releaseDate" => "SearchDateField",
		"residentStatus" => "SearchMultiSelectField",
		"role" => "SearchMultiSelectField",
		"roleChange" => "SearchMultiSelectField",
		"roleChangeDate" => "SearchDateField",
		"salesRep" => "SearchBooleanField",
		"salesRole" => "SearchMultiSelectField",
		"salutation" => "SearchStringField",
		"socialSecurityNumber" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"supervisor" => "SearchMultiSelectField",
		"supportRep" => "SearchBooleanField",
		"timeApprover" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"usePerquest" => "SearchBooleanField",
		"useTimeData" => "SearchBooleanField",
		"visaExpDate" => "SearchDateField",
		"visaType" => "SearchMultiSelectField",
		"withholding" => "SearchMultiSelectField",
		"workCalendar" => "SearchMultiSelectField",
		"workplace" => "SearchMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("EmployeeSearchRowBasic")) {
/**
 * EmployeeSearchRowBasic
 */
class EmployeeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $alienNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $approvalLimit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $approver;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $authWorkDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingClass;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $birthDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $birthDay;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $concurrentWebServicesUser;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $employeeStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $employeeType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $ethnicity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $expenseLimit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $gender;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $hireDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $i9Verified;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isJobResource;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSalesRep;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSupportRep;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isTemplate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $laborCost;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastPaidDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastReviewDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $maritalStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $nextReviewDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $offlineAccess;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $payFrequency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $permChangeDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $permChangeLevel;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permissionChange;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $primaryEarningAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $primaryEarningItem;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $primaryEarningType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderApprovalLimit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $purchaseOrderApprover;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderLimit;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $releaseDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $residentStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $roleChange;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $roleChangeAction;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $roleChangeDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesRole;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $socialSecurityNumber;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $supervisor;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $timeApprover;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $usePerquest;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useTimeData;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $visaExpDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $visaType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $workplace;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchColumnStringField[]",
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"alienNumber" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"approvalLimit" => "SearchColumnDoubleField[]",
		"approver" => "SearchColumnSelectField[]",
		"attention" => "SearchColumnStringField[]",
		"authWorkDate" => "SearchColumnDateField[]",
		"billAddress" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billingClass" => "SearchColumnSelectField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"birthDate" => "SearchColumnDateField[]",
		"birthDay" => "SearchColumnDateField[]",
		"city" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"comments" => "SearchColumnStringField[]",
		"concurrentWebServicesUser" => "SearchColumnBooleanField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"eligibleForCommission" => "SearchColumnBooleanField[]",
		"email" => "SearchColumnStringField[]",
		"employeeStatus" => "SearchColumnSelectField[]",
		"employeeType" => "SearchColumnSelectField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"ethnicity" => "SearchColumnSelectField[]",
		"expenseLimit" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"firstName" => "SearchColumnStringField[]",
		"gender" => "SearchColumnEnumSelectField[]",
		"giveAccess" => "SearchColumnBooleanField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"hireDate" => "SearchColumnDateField[]",
		"homePhone" => "SearchColumnStringField[]",
		"i9Verified" => "SearchColumnBooleanField[]",
		"image" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isJobResource" => "SearchColumnBooleanField[]",
		"isSalesRep" => "SearchColumnBooleanField[]",
		"isSupportRep" => "SearchColumnBooleanField[]",
		"isTemplate" => "SearchColumnBooleanField[]",
		"laborCost" => "SearchColumnDoubleField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastName" => "SearchColumnStringField[]",
		"lastPaidDate" => "SearchColumnDateField[]",
		"lastReviewDate" => "SearchColumnDateField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"maritalStatus" => "SearchColumnSelectField[]",
		"middleName" => "SearchColumnStringField[]",
		"mobilePhone" => "SearchColumnStringField[]",
		"nextReviewDate" => "SearchColumnDateField[]",
		"offlineAccess" => "SearchColumnBooleanField[]",
		"payFrequency" => "SearchColumnEnumSelectField[]",
		"permChangeDate" => "SearchColumnDateField[]",
		"permChangeLevel" => "SearchColumnStringField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"permissionChange" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"primaryEarningAmount" => "SearchColumnDoubleField[]",
		"primaryEarningItem" => "SearchColumnStringField[]",
		"primaryEarningType" => "SearchColumnStringField[]",
		"purchaseOrderApprovalLimit" => "SearchColumnDoubleField[]",
		"purchaseOrderApprover" => "SearchColumnSelectField[]",
		"purchaseOrderLimit" => "SearchColumnDoubleField[]",
		"releaseDate" => "SearchColumnDateField[]",
		"residentStatus" => "SearchColumnSelectField[]",
		"role" => "SearchColumnSelectField[]",
		"roleChange" => "SearchColumnStringField[]",
		"roleChangeAction" => "SearchColumnStringField[]",
		"roleChangeDate" => "SearchColumnDateField[]",
		"salesRole" => "SearchColumnSelectField[]",
		"salutation" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"socialSecurityNumber" => "SearchColumnStringField[]",
		"state" => "SearchColumnEnumSelectField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"supervisor" => "SearchColumnSelectField[]",
		"timeApprover" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"usePerquest" => "SearchColumnBooleanField[]",
		"useTimeData" => "SearchColumnBooleanField[]",
		"visaExpDate" => "SearchColumnDateField[]",
		"visaType" => "SearchColumnSelectField[]",
		"workCalendar" => "SearchColumnStringField[]",
		"workplace" => "SearchColumnSelectField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("PhoneCallSearchBasic")) {
/**
 * PhoneCallSearchBasic
 */
class PhoneCallSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $createdBy;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"assigned" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"completedDate" => "SearchDateField",
		"contact" => "SearchMultiSelectField",
		"createdBy" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isPrivate" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"owner" => "SearchBooleanField",
		"phone" => "SearchStringField",
		"priority" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("PhoneCallSearchRowBasic")) {
/**
 * PhoneCallSearchRowBasic
 */
class PhoneCallSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accessLevel;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $completedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $markdone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transaction;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accessLevel" => "SearchColumnStringField[]",
		"assigned" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"completedDate" => "SearchColumnDateField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"markdone" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"priority" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"startTime" => "SearchColumnDateField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"title" => "SearchColumnStringField[]",
		"transaction" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("SupportCaseSearchBasic")) {
/**
 * SupportCaseSearchBasic
 */
class SupportCaseSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $awaitingReply;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $caseNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $escalateTo;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $helpDesk;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $inboundEmail;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $issue;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $lastMessage;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastReopenedDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $locked;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $messageAuthor;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $messageDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $messageType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $module;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $origin;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $product;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $profile;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"assigned" => "SearchMultiSelectField",
		"awaitingReply" => "SearchBooleanField",
		"caseNumber" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"closedDate" => "SearchDateField",
		"company" => "SearchStringField",
		"contact" => "SearchStringField",
		"createdDate" => "SearchDateField",
		"email" => "SearchStringField",
		"escalateTo" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"helpDesk" => "SearchBooleanField",
		"inboundEmail" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"issue" => "SearchMultiSelectField",
		"item" => "SearchMultiSelectField",
		"lastMessage" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"lastReopenedDate" => "SearchDateField",
		"locked" => "SearchBooleanField",
		"message" => "SearchStringField",
		"messageAuthor" => "SearchMultiSelectField",
		"messageDate" => "SearchDateField",
		"messageType" => "SearchBooleanField",
		"module" => "SearchMultiSelectField",
		"number" => "SearchLongField",
		"origin" => "SearchMultiSelectField",
		"priority" => "SearchMultiSelectField",
		"product" => "SearchMultiSelectField",
		"profile" => "SearchMultiSelectField",
		"serialNumber" => "SearchStringField",
		"stage" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("SupportCaseSearchRowBasic")) {
/**
 * SupportCaseSearchRowBasic
 */
class SupportCaseSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $awaitingReply;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $customerStage;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $escalatee;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $helpDesk;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $inboundEmail;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $issue;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $issueNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastMessageDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastReopenedDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $locked;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $module;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $origin;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $product;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $profile;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"assigned" => "SearchColumnSelectField[]",
		"awaitingReply" => "SearchColumnBooleanField[]",
		"caseNumber" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"customerStage" => "SearchColumnEnumSelectField[]",
		"email" => "SearchColumnStringField[]",
		"endDate" => "SearchColumnDateField[]",
		"escalatee" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"helpDesk" => "SearchColumnBooleanField[]",
		"inboundEmail" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"issue" => "SearchColumnSelectField[]",
		"issueNumber" => "SearchColumnStringField[]",
		"item" => "SearchColumnSelectField[]",
		"lastMessageDate" => "SearchColumnDateField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastReopenedDate" => "SearchColumnDateField[]",
		"locked" => "SearchColumnBooleanField[]",
		"module" => "SearchColumnSelectField[]",
		"origin" => "SearchColumnSelectField[]",
		"priority" => "SearchColumnSelectField[]",
		"product" => "SearchColumnSelectField[]",
		"profile" => "SearchColumnSelectField[]",
		"serialNumber" => "SearchColumnStringField[]",
		"stage" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("MessageSearchBasic")) {
/**
 * MessageSearchBasic
 */
class MessageSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $authorEmail;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $bcc;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $cc;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $hasAttachment;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $internalOnly;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $messageDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $messageType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $recipientEmail;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $subject;

	static $paramtypesmap = array(
		"author" => "SearchMultiSelectField",
		"authorEmail" => "SearchStringField",
		"bcc" => "SearchStringField",
		"cc" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"hasAttachment" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"internalOnly" => "SearchBooleanField",
		"message" => "SearchStringField",
		"messageDate" => "SearchDateField",
		"messageType" => "SearchEnumMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"recipientEmail" => "SearchStringField",
		"subject" => "SearchStringField",
	);
}}

if (!class_exists("MessageSearchRowBasic")) {
/**
 * MessageSearchRowBasic
 */
class MessageSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $authorEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $bcc;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $cc;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hasAttachment;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $internalOnly;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isEmailed;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isIncoming;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $messageDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $messageType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $recipientEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $subject;

	static $paramtypesmap = array(
		"author" => "SearchColumnSelectField[]",
		"authorEmail" => "SearchColumnStringField[]",
		"bcc" => "SearchColumnStringField[]",
		"cc" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"hasAttachment" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"internalOnly" => "SearchColumnBooleanField[]",
		"isEmailed" => "SearchColumnBooleanField[]",
		"isIncoming" => "SearchColumnBooleanField[]",
		"message" => "SearchColumnStringField[]",
		"messageDate" => "SearchColumnDateField[]",
		"messageType" => "SearchColumnEnumSelectField[]",
		"recipient" => "SearchColumnSelectField[]",
		"recipientEmail" => "SearchColumnStringField[]",
		"subject" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("NoteSearchBasic")) {
/**
 * NoteSearchBasic
 */
class NoteSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $direction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $note;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $noteDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $noteType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"author" => "SearchMultiSelectField",
		"direction" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"note" => "SearchStringField",
		"noteDate" => "SearchDateField",
		"noteType" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("NoteSearchRowBasic")) {
/**
 * NoteSearchRowBasic
 */
class NoteSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $author;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $direction;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $note;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $noteDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $noteType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"author" => "SearchColumnSelectField[]",
		"direction" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"note" => "SearchColumnStringField[]",
		"noteDate" => "SearchColumnDateField[]",
		"noteType" => "SearchColumnStringField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("CustomRecordSearchBasic")) {
/**
 * CustomRecordSearchBasic
 */
class CustomRecordSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recType;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $lastModifiedBy;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"recType" => "RecordRef",
		"availableOffline" => "SearchBooleanField",
		"created" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"lastModified" => "SearchDateField",
		"lastModifiedBy" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("CustomRecordSearchRowBasic")) {
/**
 * CustomRecordSearchRowBasic
 */
class CustomRecordSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $recType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $lastModifiedBy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"recType" => "RecordRef",
		"altName" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"created" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModified" => "SearchColumnDateField[]",
		"lastModifiedBy" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"parent" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("AccountSearchBasic")) {
/**
 * AccountSearchBasic
 */
class AccountSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $cashFlowRateType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category1099Misc;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $generalRateType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"balance" => "SearchDoubleField",
		"cashFlowRateType" => "SearchEnumMultiSelectField",
		"category1099Misc" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"generalRateType" => "SearchEnumMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"number" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("AccountSearchRowBasic")) {
/**
 * AccountSearchRowBasic
 */
class AccountSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $cashFlowRateType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category1099Misc;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $generalRateType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"balance" => "SearchColumnDoubleField[]",
		"cashFlowRateType" => "SearchColumnEnumSelectField[]",
		"category1099Misc" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"generalRateType" => "SearchColumnEnumSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"number" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("RevRecScheduleSearchBasic")) {
/**
 * RevRecScheduleSearchBasic
 */
class RevRecScheduleSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amortizedAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $deferredAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $destAcct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $initialAmt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isRecognized;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jeDoc;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $pctComplete;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $pctRecognition;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $postPeriod;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $schedDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $scheduleNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scheduleNumberText;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $sourceAcct;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $srcTranPostPeriod;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $srcTranType;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $startOffset;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $templateName;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"amorStatus" => "SearchEnumMultiSelectField",
		"amortizedAmount" => "SearchDoubleField",
		"amorType" => "SearchEnumMultiSelectField",
		"amount" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"deferredAmount" => "SearchDoubleField",
		"destAcct" => "SearchMultiSelectField",
		"initialAmt" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isRecognized" => "SearchBooleanField",
		"jeDoc" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"pctComplete" => "SearchDoubleField",
		"pctRecognition" => "SearchDoubleField",
		"periodOffset" => "SearchLongField",
		"postPeriod" => "SearchMultiSelectField",
		"schedDate" => "SearchDateField",
		"scheduleNumber" => "SearchLongField",
		"scheduleNumberText" => "SearchStringField",
		"sourceAcct" => "SearchMultiSelectField",
		"srcTranPostPeriod" => "SearchMultiSelectField",
		"srcTranType" => "SearchMultiSelectField",
		"startOffset" => "SearchLongField",
		"templateName" => "SearchStringField",
		"useForeignAmounts" => "SearchBooleanField",
	);
}}

if (!class_exists("RevRecScheduleSearchRowBasic")) {
/**
 * RevRecScheduleSearchRowBasic
 */
class RevRecScheduleSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $amorStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorTemplate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amortizedAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $deferredAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $destAcct;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $initialAmt;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isRecognized;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $jeDoc;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $lineSequenceNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameUrl;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $pctComplete;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $pctRecognition;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurFxAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $schedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $scheduleNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $sourceAcct;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $srcDocLine;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $srcTran;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $srcTranPostPeriod;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $startOffset;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnSelectField[]",
		"amorStatus" => "SearchColumnEnumSelectField[]",
		"amorTemplate" => "SearchColumnStringField[]",
		"amortizedAmount" => "SearchColumnDoubleField[]",
		"amorType" => "SearchColumnEnumSelectField[]",
		"amount" => "SearchColumnDoubleField[]",
		"currency" => "SearchColumnStringField[]",
		"deferredAmount" => "SearchColumnDoubleField[]",
		"destAcct" => "SearchColumnStringField[]",
		"initialAmt" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnLongField[]",
		"isRecognized" => "SearchColumnBooleanField[]",
		"jeDoc" => "SearchColumnStringField[]",
		"lineSequenceNumber" => "SearchColumnLongField[]",
		"name" => "SearchColumnStringField[]",
		"nameUrl" => "SearchColumnStringField[]",
		"pctComplete" => "SearchColumnDoubleField[]",
		"pctRecognition" => "SearchColumnDoubleField[]",
		"periodOffset" => "SearchColumnLongField[]",
		"recurAmount" => "SearchColumnDoubleField[]",
		"recurFxAmount" => "SearchColumnDoubleField[]",
		"schedDate" => "SearchColumnDateField[]",
		"scheduleNumber" => "SearchColumnStringField[]",
		"sourceAcct" => "SearchColumnStringField[]",
		"srcDocLine" => "SearchColumnStringField[]",
		"srcTran" => "SearchColumnStringField[]",
		"srcTranPostPeriod" => "SearchColumnStringField[]",
		"startOffset" => "SearchColumnLongField[]",
		"useForeignAmounts" => "SearchColumnBooleanField[]",
	);
}}

if (!class_exists("RevRecTemplateSearchBasic")) {
/**
 * RevRecTemplateSearchBasic
 */
class RevRecTemplateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorMethod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $amorPeriod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $amorStartOffset;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorTermSrc;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contraAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $deferralAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $targetAccount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"amorMethod" => "SearchEnumMultiSelectField",
		"amorPeriod" => "SearchLongField",
		"amorStartOffset" => "SearchLongField",
		"amorTermSrc" => "SearchEnumMultiSelectField",
		"amorType" => "SearchEnumMultiSelectField",
		"contraAccount" => "SearchMultiSelectField",
		"deferralAccount" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"periodOffset" => "SearchLongField",
		"targetAccount" => "SearchMultiSelectField",
		"useForeignAmounts" => "SearchBooleanField",
	);
}}

if (!class_exists("RevRecTemplateSearchRowBasic")) {
/**
 * RevRecTemplateSearchRowBasic
 */
class RevRecTemplateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorMethod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorPeriod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorStartOffset;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorTermSrc;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $amorType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $contraAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $deferralAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $periodOffset;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $targetAccount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useForeignAmounts;

	static $paramtypesmap = array(
		"amorMethod" => "SearchColumnStringField[]",
		"amorPeriod" => "SearchColumnStringField[]",
		"amorStartOffset" => "SearchColumnStringField[]",
		"amorTermSrc" => "SearchColumnStringField[]",
		"amorType" => "SearchColumnStringField[]",
		"contraAccount" => "SearchColumnStringField[]",
		"deferralAccount" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnLongField[]",
		"isInactive" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"periodOffset" => "SearchColumnStringField[]",
		"targetAccount" => "SearchColumnStringField[]",
		"useForeignAmounts" => "SearchColumnBooleanField[]",
	);
}}

if (!class_exists("BinSearchBasic")) {
/**
 * BinSearchBasic
 */
class BinSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $inactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"binNumber" => "SearchStringField",
		"inactive" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("BinSearchRowBasic")) {
/**
 * BinSearchRowBasic
 */
class BinSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $inactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnStringField[]",
		"inactive" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"location" => "SearchColumnStringField[]",
		"memo" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("DepartmentSearchBasic")) {
/**
 * DepartmentSearchBasic
 */
class DepartmentSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("DepartmentSearchRowBasic")) {
/**
 * DepartmentSearchRowBasic
 */
class DepartmentSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("LocationSearchBasic")) {
/**
 * LocationSearchBasic
 */
class LocationSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $automaticLatLongSetup;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOffice;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $latitude;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $longitude;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $timeZone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranprefix;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"automaticLatLongSetup" => "SearchBooleanField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOffice" => "SearchBooleanField",
		"latitude" => "SearchDoubleField",
		"longitude" => "SearchDoubleField",
		"makeInventoryAvailable" => "SearchBooleanField",
		"makeInventoryAvailableStore" => "SearchBooleanField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"phone" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"timeZone" => "SearchEnumMultiSelectField",
		"tranprefix" => "SearchStringField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("LocationSearchRowBasic")) {
/**
 * LocationSearchRowBasic
 */
class LocationSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $automaticLatLongSetup;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isOffice;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $latitude;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $longitude;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $makeInventoryAvailable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $makeInventoryAvailableStore;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $timeZone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"automaticLatLongSetup" => "SearchColumnBooleanField[]",
		"city" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOffice" => "SearchColumnBooleanField[]",
		"latitude" => "SearchColumnDoubleField[]",
		"longitude" => "SearchColumnDoubleField[]",
		"makeInventoryAvailable" => "SearchColumnBooleanField[]",
		"makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"phone" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"timeZone" => "SearchColumnEnumSelectField[]",
		"tranPrefix" => "SearchColumnStringField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ClassificationSearchBasic")) {
/**
 * ClassificationSearchBasic
 */
class ClassificationSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ClassificationSearchRowBasic")) {
/**
 * ClassificationSearchRowBasic
 */
class ClassificationSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("TransactionSearchBasic")) {
/**
 * TransactionSearchBasic
 */
class TransactionSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $actualShipDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $altSalesAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $altSalesNetAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountPaid;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountUnbilled;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $anyLineItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $appliedToForeignAmount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $appliedToIsFxVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $appliedToLinkAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $appliedToLinkType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $appliedToTransaction;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $applyingForeignAmount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $applyingIsFxVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $applyingLinkAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $applyingLinkType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $applyingTransaction;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $authCode;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $avsStreetMatch;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $avsZipMatch;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billable;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billCounty;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $billedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billingStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingTransaction;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $billVarianceStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billZip;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $binNumberQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $bookSpecificTransaction;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $buildEntireAssembly;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $buildVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $built;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $catchUpPeriod;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccExpireDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $cleared;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $closed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closeDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $cogs;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $commissionEffectiveDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $commit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $confirmationNumber;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costComponentAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $costComponentCategory;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $costComponentItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costComponentQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costComponentStandardCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costEstimate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costEstimateRate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $createdBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $cscMatch;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customerSubOf;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customForm;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $customGL;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOpen;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $debitAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $deferredRevenue;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $depositDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $depositTransaction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estGrossProfitPct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeCommission;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeFromRateRequest;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expectedCloseDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expectedReceiptDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $expenseCategory;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expenseDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $finChrg;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $firmed;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $forecastType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fulfillingTransaction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxCostEstimate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxCostEstimateRate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxTranCostEstimate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxVsoeAllocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxVsoeAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxVsoePrice;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $gcoAvailabelToCharge;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $gcoAvailableToRefund;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gcoAvsStreetMatch;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gcoAvsZipMatch;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $gcoBuyerAccountAge;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoBuyerIp;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoChargeAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoChargebackAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoConfirmedChargedTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoConfirmedRefundedTotal;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoCreditcardNumber;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $gcoCscMatch;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoFinancialState;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoFulfillmentState;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoOrderId;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoOrderTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoPromotionAmount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoPromotionName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoRefundAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $gcoShippingTotal;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $gcoStateChangedDetail;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertificate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $grossAmount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $includeInForecast;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $intercoStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $intercoTransaction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $inVsoeBundle;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isAllocation;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isBackflush;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoChargeback;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoChargeConfirmed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoPaymentGuaranteed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoRefundConfirmed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isIntercompanyAdjustment;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isMultiShipTo;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPayPalMeth;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isReversal;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isRevRecTransaction;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isScrap;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTransferPriceCosting;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isVsoeAlloc;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isWip;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemRevision;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemSubOf;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $landedCostPerLine;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $locationAutoAssigned;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $mainLine;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $mainName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingRouting;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memoMain;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $memorized;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $merchantAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $multiSubsidiary;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameText;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $netAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $nextBillDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $noAutoAssignLocation;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $nonReimbursable;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $oneTimeTotal;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $opportunity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $orderPriority;
	/**
	 * @access public
	 * @var SearchTextNumberField
	 */
	public $otherRefNum;
	/**
	 * @access public
	 * @var SearchTextNumberField
	 */
	public $otherRefNumNonDeposit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $overheadParentItem;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $packageCount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $paidTransaction;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payingTransaction;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paymentApproved;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $paymentEventDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $paymentEventHoldReason;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paymentEventPurchaseCardUsed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paymentEventPurchaseDataSent;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $paymentEventResult;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $paymentEventType;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paymentHold;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $payPalPending;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $payPalStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $payPalTranId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $poAsText;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $posting;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $postingPeriodRelative;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $printedPickingTicket;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $probability;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $projectedAmount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $purchaseOrder;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityBilled;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityPacked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityPicked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityRevCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityShipRecv;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $recognizedRevenue;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $recordType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $recurAnnuallyTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $recurMonthlyTotal;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $recurQuarterlyTotal;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $recurringBill;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $recurWeeklyTotal;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $refNumber;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $revCommitStatus;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $revCommittingStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $revCommittingTransaction;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $revenueStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $reversalDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $reversalNumber;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $revRecOnRevCommitment;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $revRecTermInMonths;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $salesEffectiveDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesOrder;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $schedulingMethod;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $serialNumberCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $serialNumberCostAdjustment;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $serialNumberQuantity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $shipCarrier;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipCounty;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $shipDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $shipGroup;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipRecvStatus;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipRecvStatusLine;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipTo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $source;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $statistical;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscriptionLine;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $taxLine;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $taxPeriod;
	/**
	 * @access public
	 * @var PostingPeriodDate
	 */
	public $taxPeriodRelative;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $taxRate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $termsOfSale;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $toBeEmailed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $totalAmount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $trackingNumbers;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranCostEstimate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranEstGrossProfitPct;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $tranFxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranId;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $tranIsVsoeBundle;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $transactionDiscount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $transactionLineType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $transferLocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityPacked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityPicked;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityReceived;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferOrderQuantityShipped;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $unit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitCostOverride;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendType;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $visibleToCustomer;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $voided;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoeAllocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoeAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $vsoeDeferral;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $vsoeDelivered;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $vsoePermitDiscount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoePrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $webSite;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"accountType" => "SearchMultiSelectField",
		"actualShipDate" => "SearchDateField",
		"altSalesAmount" => "SearchDoubleField",
		"altSalesNetAmount" => "SearchDoubleField",
		"amount" => "SearchDoubleField",
		"amountPaid" => "SearchDoubleField",
		"amountRemaining" => "SearchDoubleField",
		"amountUnbilled" => "SearchDoubleField",
		"anyLineItem" => "SearchMultiSelectField",
		"appliedToForeignAmount" => "SearchDoubleField",
		"appliedToIsFxVariance" => "SearchBooleanField",
		"appliedToLinkAmount" => "SearchDoubleField",
		"appliedToLinkType" => "SearchEnumMultiSelectField",
		"appliedToTransaction" => "SearchMultiSelectField",
		"applyingForeignAmount" => "SearchDoubleField",
		"applyingIsFxVariance" => "SearchBooleanField",
		"applyingLinkAmount" => "SearchDoubleField",
		"applyingLinkType" => "SearchEnumMultiSelectField",
		"applyingTransaction" => "SearchMultiSelectField",
		"approvalStatus" => "SearchEnumMultiSelectField",
		"authCode" => "SearchStringField",
		"autoCalculateLag" => "SearchBooleanField",
		"avsStreetMatch" => "SearchEnumMultiSelectField",
		"avsZipMatch" => "SearchEnumMultiSelectField",
		"billable" => "SearchBooleanField",
		"billAddress" => "SearchStringField",
		"billAddressee" => "SearchStringField",
		"billAttention" => "SearchStringField",
		"billCity" => "SearchStringField",
		"billCountry" => "SearchEnumMultiSelectField",
		"billCounty" => "SearchStringField",
		"billedDate" => "SearchDateField",
		"billingAccount" => "SearchMultiSelectField",
		"billingSchedule" => "SearchMultiSelectField",
		"billingStatus" => "SearchBooleanField",
		"billingTransaction" => "SearchMultiSelectField",
		"billPhone" => "SearchStringField",
		"billState" => "SearchStringField",
		"billVarianceStatus" => "SearchEnumMultiSelectField",
		"billZip" => "SearchStringField",
		"binNumber" => "SearchStringField",
		"binNumberQuantity" => "SearchDoubleField",
		"bomQuantity" => "SearchDoubleField",
		"bookSpecificTransaction" => "SearchBooleanField",
		"buildEntireAssembly" => "SearchBooleanField",
		"buildVariance" => "SearchDoubleField",
		"built" => "SearchDoubleField",
		"catchUpPeriod" => "SearchMultiSelectField",
		"ccCustomerCode" => "SearchStringField",
		"ccExpireDate" => "SearchDateField",
		"ccName" => "SearchStringField",
		"ccNumber" => "SearchStringField",
		"chargeType" => "SearchEnumMultiSelectField",
		"class" => "SearchMultiSelectField",
		"cleared" => "SearchBooleanField",
		"closed" => "SearchBooleanField",
		"closeDate" => "SearchDateField",
		"cogs" => "SearchBooleanField",
		"commissionEffectiveDate" => "SearchDateField",
		"commit" => "SearchEnumMultiSelectField",
		"componentYield" => "SearchDoubleField",
		"confirmationNumber" => "SearchStringField",
		"contribution" => "SearchLongField",
		"costComponentAmount" => "SearchDoubleField",
		"costComponentCategory" => "SearchMultiSelectField",
		"costComponentItem" => "SearchMultiSelectField",
		"costComponentQuantity" => "SearchDoubleField",
		"costComponentStandardCost" => "SearchDoubleField",
		"costEstimate" => "SearchDoubleField",
		"costEstimateRate" => "SearchDoubleField",
		"costEstimateType" => "SearchEnumMultiSelectField",
		"createdBy" => "SearchMultiSelectField",
		"createdFrom" => "SearchMultiSelectField",
		"creditAmount" => "SearchDoubleField",
		"cscMatch" => "SearchEnumMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"customerSubOf" => "SearchMultiSelectField",
		"customForm" => "SearchMultiSelectField",
		"customGL" => "SearchBooleanField",
		"custType" => "SearchMultiSelectField",
		"dateCreated" => "SearchDateField",
		"daysOpen" => "SearchLongField",
		"daysOverdue" => "SearchLongField",
		"debitAmount" => "SearchDoubleField",
		"deferredRevenue" => "SearchDoubleField",
		"deferRevRec" => "SearchBooleanField",
		"department" => "SearchMultiSelectField",
		"depositDate" => "SearchDateField",
		"depositTransaction" => "SearchMultiSelectField",
		"drAccount" => "SearchMultiSelectField",
		"dueDate" => "SearchDateField",
		"email" => "SearchStringField",
		"employee" => "SearchMultiSelectField",
		"endDate" => "SearchDateField",
		"entity" => "SearchMultiSelectField",
		"entityStatus" => "SearchMultiSelectField",
		"estGrossProfit" => "SearchDoubleField",
		"estGrossProfitPct" => "SearchDoubleField",
		"exchangeRate" => "SearchDoubleField",
		"excludeCommission" => "SearchBooleanField",
		"excludeFromRateRequest" => "SearchBooleanField",
		"expectedCloseDate" => "SearchDateField",
		"expectedReceiptDate" => "SearchDateField",
		"expenseCategory" => "SearchMultiSelectField",
		"expenseDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"finChrg" => "SearchBooleanField",
		"firmed" => "SearchBooleanField",
		"forecastType" => "SearchEnumMultiSelectField",
		"fulfillingTransaction" => "SearchMultiSelectField",
		"fxAccount" => "SearchMultiSelectField",
		"fxAmount" => "SearchDoubleField",
		"fxCostEstimate" => "SearchDoubleField",
		"fxCostEstimateRate" => "SearchDoubleField",
		"fxEstGrossProfit" => "SearchDoubleField",
		"fxTranCostEstimate" => "SearchDoubleField",
		"fxVsoeAllocation" => "SearchDoubleField",
		"fxVsoeAmount" => "SearchDoubleField",
		"fxVsoePrice" => "SearchDoubleField",
		"gcoAvailabelToCharge" => "SearchBooleanField",
		"gcoAvailableToRefund" => "SearchBooleanField",
		"gcoAvsStreetMatch" => "SearchEnumMultiSelectField",
		"gcoAvsZipMatch" => "SearchEnumMultiSelectField",
		"gcoBuyerAccountAge" => "SearchLongField",
		"gcoBuyerIp" => "SearchStringField",
		"gcoChargeAmount" => "SearchDoubleField",
		"gcoChargebackAmount" => "SearchDoubleField",
		"gcoConfirmedChargedTotal" => "SearchDoubleField",
		"gcoConfirmedRefundedTotal" => "SearchDoubleField",
		"gcoCreditcardNumber" => "SearchStringField",
		"gcoCscMatch" => "SearchEnumMultiSelectField",
		"gcoFinancialState" => "SearchStringField",
		"gcoFulfillmentState" => "SearchStringField",
		"gcoOrderId" => "SearchStringField",
		"gcoOrderTotal" => "SearchDoubleField",
		"gcoPromotionAmount" => "SearchDoubleField",
		"gcoPromotionName" => "SearchStringField",
		"gcoRefundAmount" => "SearchDoubleField",
		"gcoShippingTotal" => "SearchDoubleField",
		"gcoStateChangedDetail" => "SearchStringField",
		"giftCertificate" => "SearchStringField",
		"grossAmount" => "SearchDoubleField",
		"includeInForecast" => "SearchBooleanField",
		"intercoStatus" => "SearchEnumMultiSelectField",
		"intercoTransaction" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inVsoeBundle" => "SearchBooleanField",
		"isAllocation" => "SearchBooleanField",
		"isBackflush" => "SearchBooleanField",
		"isGcoChargeback" => "SearchBooleanField",
		"isGcoChargeConfirmed" => "SearchBooleanField",
		"isGcoPaymentGuaranteed" => "SearchBooleanField",
		"isGcoRefundConfirmed" => "SearchBooleanField",
		"isIntercompanyAdjustment" => "SearchBooleanField",
		"isMultiShipTo" => "SearchBooleanField",
		"isPayPalMeth" => "SearchBooleanField",
		"isReversal" => "SearchBooleanField",
		"isRevRecTransaction" => "SearchBooleanField",
		"isScrap" => "SearchBooleanField",
		"isShipAddress" => "SearchBooleanField",
		"isTransferPriceCosting" => "SearchBooleanField",
		"isVsoeAlloc" => "SearchBooleanField",
		"isWip" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"itemRevision" => "SearchMultiSelectField",
		"itemSubOf" => "SearchMultiSelectField",
		"landedCostPerLine" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"leadSource" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"locationAutoAssigned" => "SearchBooleanField",
		"mainLine" => "SearchBooleanField",
		"mainName" => "SearchMultiSelectField",
		"manufacturingRouting" => "SearchMultiSelectField",
		"matchBillToReceipt" => "SearchBooleanField",
		"memo" => "SearchStringField",
		"memoMain" => "SearchStringField",
		"memorized" => "SearchBooleanField",
		"merchantAccount" => "SearchStringField",
		"message" => "SearchStringField",
		"multiSubsidiary" => "SearchBooleanField",
		"nameText" => "SearchStringField",
		"netAmount" => "SearchDoubleField",
		"nextApprover" => "SearchMultiSelectField",
		"nextBillDate" => "SearchDateField",
		"noAutoAssignLocation" => "SearchBooleanField",
		"nonReimbursable" => "SearchBooleanField",
		"number" => "SearchLongField",
		"oneTimeTotal" => "SearchDoubleField",
		"opportunity" => "SearchMultiSelectField",
		"orderPriority" => "SearchDoubleField",
		"otherRefNum" => "SearchTextNumberField",
		"otherRefNumNonDeposit" => "SearchTextNumberField",
		"overheadParentItem" => "SearchMultiSelectField",
		"packageCount" => "SearchLongField",
		"paidTransaction" => "SearchMultiSelectField",
		"parent" => "SearchLongField",
		"partner" => "SearchMultiSelectField",
		"partnerContribution" => "SearchLongField",
		"partnerRole" => "SearchMultiSelectField",
		"partnerTeamMember" => "SearchMultiSelectField",
		"payingTransaction" => "SearchMultiSelectField",
		"paymentApproved" => "SearchBooleanField",
		"paymentEventDate" => "SearchDateField",
		"paymentEventHoldReason" => "SearchEnumMultiSelectField",
		"paymentEventPurchaseCardUsed" => "SearchBooleanField",
		"paymentEventPurchaseDataSent" => "SearchBooleanField",
		"paymentEventResult" => "SearchEnumMultiSelectField",
		"paymentEventType" => "SearchEnumMultiSelectField",
		"paymentHold" => "SearchBooleanField",
		"paymentMethod" => "SearchMultiSelectField",
		"payPalPending" => "SearchBooleanField",
		"payPalStatus" => "SearchStringField",
		"payPalTranId" => "SearchStringField",
		"pnRefNum" => "SearchStringField",
		"poAsText" => "SearchStringField",
		"posting" => "SearchBooleanField",
		"postingPeriod" => "RecordRef",
		"postingPeriodRelative" => "PostingPeriodDate",
		"priceLevel" => "SearchMultiSelectField",
		"printedPickingTicket" => "SearchBooleanField",
		"probability" => "SearchLongField",
		"projectedAmount" => "SearchDoubleField",
		"promoCode" => "SearchMultiSelectField",
		"purchaseOrder" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
		"quantityBilled" => "SearchDoubleField",
		"quantityCommitted" => "SearchDoubleField",
		"quantityPacked" => "SearchDoubleField",
		"quantityPicked" => "SearchDoubleField",
		"quantityRevCommitted" => "SearchDoubleField",
		"quantityShipRecv" => "SearchDoubleField",
		"recognizedRevenue" => "SearchDoubleField",
		"recordType" => "SearchStringField",
		"recurAnnuallyTotal" => "SearchDoubleField",
		"recurMonthlyTotal" => "SearchDoubleField",
		"recurQuarterlyTotal" => "SearchDoubleField",
		"recurringBill" => "SearchBooleanField",
		"recurWeeklyTotal" => "SearchDoubleField",
		"refNumber" => "SearchLongField",
		"revCommitStatus" => "SearchEnumMultiSelectField",
		"revCommittingStatus" => "SearchBooleanField",
		"revCommittingTransaction" => "SearchMultiSelectField",
		"revenueStatus" => "SearchEnumMultiSelectField",
		"reversalDate" => "SearchDateField",
		"reversalNumber" => "SearchStringField",
		"revRecEndDate" => "SearchDateField",
		"revRecOnRevCommitment" => "SearchBooleanField",
		"revRecStartDate" => "SearchDateField",
		"revRecTermInMonths" => "SearchLongField",
		"salesEffectiveDate" => "SearchDateField",
		"salesOrder" => "SearchMultiSelectField",
		"salesRep" => "SearchMultiSelectField",
		"salesTeamMember" => "SearchMultiSelectField",
		"salesTeamRole" => "SearchMultiSelectField",
		"schedulingMethod" => "SearchEnumMultiSelectField",
		"serialNumber" => "SearchStringField",
		"serialNumberCost" => "SearchDoubleField",
		"serialNumberCostAdjustment" => "SearchDoubleField",
		"serialNumberQuantity" => "SearchDoubleField",
		"serialNumbers" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"shipAddressee" => "SearchStringField",
		"shipAttention" => "SearchStringField",
		"shipCarrier" => "SearchEnumMultiSelectField",
		"shipCity" => "SearchStringField",
		"shipComplete" => "SearchBooleanField",
		"shipCountry" => "SearchEnumMultiSelectField",
		"shipCounty" => "SearchStringField",
		"shipDate" => "SearchDateField",
		"shipGroup" => "SearchLongField",
		"shipMethod" => "SearchMultiSelectField",
		"shipPhone" => "SearchStringField",
		"shipping" => "SearchBooleanField",
		"shipRecvStatus" => "SearchBooleanField",
		"shipRecvStatusLine" => "SearchBooleanField",
		"shipState" => "SearchMultiSelectField",
		"shipTo" => "SearchMultiSelectField",
		"shipZip" => "SearchStringField",
		"source" => "SearchEnumMultiSelectField",
		"startDate" => "SearchDateField",
		"statistical" => "SearchBooleanField",
		"status" => "SearchEnumMultiSelectField",
		"subscription" => "SearchMultiSelectField",
		"subscriptionLine" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxItem" => "SearchMultiSelectField",
		"taxLine" => "SearchBooleanField",
		"taxPeriod" => "RecordRef",
		"taxPeriodRelative" => "PostingPeriodDate",
		"taxRate" => "SearchDoubleField",
		"terms" => "SearchMultiSelectField",
		"termsOfSale" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"toBeEmailed" => "SearchBooleanField",
		"toBePrinted" => "SearchBooleanField",
		"toSubsidiary" => "SearchMultiSelectField",
		"totalAmount" => "SearchDoubleField",
		"trackingNumbers" => "SearchStringField",
		"tranCostEstimate" => "SearchDoubleField",
		"tranDate" => "SearchDateField",
		"tranEstGrossProfit" => "SearchDoubleField",
		"tranEstGrossProfitPct" => "SearchDoubleField",
		"tranFxEstGrossProfit" => "SearchDoubleField",
		"tranId" => "SearchStringField",
		"tranIsVsoeBundle" => "SearchBooleanField",
		"transactionDiscount" => "SearchBooleanField",
		"transactionLineType" => "SearchEnumMultiSelectField",
		"transactionNumber" => "SearchStringField",
		"transferLocation" => "SearchMultiSelectField",
		"transferOrderQuantityCommitted" => "SearchDoubleField",
		"transferOrderQuantityPacked" => "SearchDoubleField",
		"transferOrderQuantityPicked" => "SearchDoubleField",
		"transferOrderQuantityReceived" => "SearchDoubleField",
		"transferOrderQuantityShipped" => "SearchDoubleField",
		"type" => "SearchEnumMultiSelectField",
		"unit" => "SearchMultiSelectField",
		"unitCostOverride" => "SearchDoubleField",
		"unitsType" => "SearchMultiSelectField",
		"vendType" => "SearchMultiSelectField",
		"visibleToCustomer" => "SearchBooleanField",
		"voided" => "SearchBooleanField",
		"vsoeAllocation" => "SearchDoubleField",
		"vsoeAmount" => "SearchDoubleField",
		"vsoeDeferral" => "SearchEnumMultiSelectField",
		"vsoeDelivered" => "SearchBooleanField",
		"vsoePermitDiscount" => "SearchEnumMultiSelectField",
		"vsoePrice" => "SearchDoubleField",
		"webSite" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("TransactionSearchRowBasic")) {
/**
 * TransactionSearchRowBasic
 */
class TransactionSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $abbrev;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountType;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $actualShipDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $altSalesAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $altSalesNetAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amountPaid;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amountUnbilled;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $appliedToForeignAmount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $appliedToIsFxVariance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $appliedToLinkAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $appliedToLinkType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $appliedToTransaction;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $applyingForeignAmount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $applyingIsFxVariance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $applyingLinkAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $applyingLinkType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $applyingTransaction;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $authCode;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $avsStreetMatch;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $avsZipMatch;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $billable;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $billedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingAccount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $billingAmount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingTransaction;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billVarianceStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $binNumberQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $buildEntireAssembly;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $buildVariance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $built;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $catchUpPeriod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $ccExpDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccHolderName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccStreet;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccZipCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $cleared;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $closed;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $closeDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $cogsAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $commissionEffectiveDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $commit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $confirmationNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contributionPrimary;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costComponentAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $costComponentCategory;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $costComponentItem;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costComponentQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costComponentStandardCost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costEstimate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costEstimateRate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $createdBy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $createdFrom;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $creditAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $cscMatch;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customForm;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $customGL;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $custType;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysOpen;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $debitAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $deferredRevenue;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $depositDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $depositTransaction;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $docUnit;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dueDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $effectiveRate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estGrossProfit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estGrossProfitPct;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estGrossProfitPercent;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $excludeCommission;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $excludeFromRateRequest;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expectedCloseDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expectedReceiptDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $expenseCategory;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expenseDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $firmed;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $forecastType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $fulfillingTransaction;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxCostEstimate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxCostEstimateRate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxTranCostEstimate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxVsoeAllocation;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxVsoeAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxVsoePrice;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $gcoAvailabelToCharge;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $gcoAvailableToRefund;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $gcoAvsStreetMatch;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $gcoAvsZipMatch;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $gcoBuyerAccountAge;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $gcoBuyerIp;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoChargeAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoChargebackAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoConfirmedChargedTotal;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoConfirmedRefundedTotal;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $gcoCreditcardNumber;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $gcoCscMatch;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $gcoFinancialState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $gcoFulfillmentState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $gcoOrderId;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoOrderTotal;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoPromotionAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $gcoPromotionName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoRefundAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $gcoShippingTotal;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $gcoStateChangedDetail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCert;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $grossAmount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $includeInForecast;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $intercoStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $intercoTransaction;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $inVsoeBundle;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isAllocation;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isBackflush;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isGcoChargeback;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isGcoChargeConfirmed;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isGcoPaymentGuaranteed;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isGcoRefundConfirmed;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isIntercompanyAdjustment;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isMultiShipTo;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isReversal;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isRevRecTransaction;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isScrap;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isTransferPriceCosting;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isWip;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $itemRevision;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $landedCostPerLine;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $line;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $lineSequenceNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $locationAutoAssigned;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $mainLine;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mainName;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingRouting;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memoMain;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $memorized;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $merchantAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $multiSubsidiary;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $netAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $netAmountNoTax;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $nextBillDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $noAutoAssignLocation;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $nonReimbursable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $oneTimeTotal;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $opportunity;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $options;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $orderPriority;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $originator;
	/**
	 * @access public
	 * @var SearchColumnTextNumberField[]
	 */
	public $otherRefNum;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $overheadParentItem;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $packageCount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $paidAmount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $paidTransaction;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $payingAmount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $payingTransaction;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $paymentApproved;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $paymentEventDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $paymentEventHoldReason;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $paymentEventPurchaseCardUsed;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $paymentEventPurchaseDataSent;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $paymentEventResult;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $paymentEventType;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $paymentHold;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $paymentMethod;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $payPalPending;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $payPalStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $payPalTranId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $payrollBatch;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pnRefNum;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $poRate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $posting;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $postingPeriod;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $print;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $probability;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $projectedAmount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $purchaseOrder;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityBilled;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityPacked;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityPicked;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityRevCommitted;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityShipRecv;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityUom;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $realizedGainPostingTransaction;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recognizedRevenue;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $recordType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurAnnuallyTotal;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurMonthlyTotal;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurQuarterlyTotal;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $recurringBill;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $recurWeeklyTotal;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $refNumber;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $revCommitStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $revCommittingTransaction;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $revenueStatus;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $reversalDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $reversalNumber;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $revRecEndDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $revRecOnRevCommitment;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $revRecStartDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $rgAccount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rgAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $salesEffectiveDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesOrder;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $schedulingMethod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $serialNumberCost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $serialNumberCostAdjustment;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $serialNumberQuantity;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $serialNumbers;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCarrier;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $shipDate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $shipGroup;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $shipMethod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $shippingAmount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $shipRecvStatusLine;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $shipTo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $signedAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $source;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscriptionLine;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $taxAmount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $taxLine;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxPeriod;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $taxTotal;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $termInMonths;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $termsOfSale;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $toBeEmailed;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $toBePrinted;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $toSubsidiary;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $total;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $totalCostEstimate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $trackingNumbers;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $tranEstGrossProfit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $tranFxEstGrossProfit;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $tranId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $tranIsVsoeBundle;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $transactionDiscount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $transactionLineType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $transactionNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transferLocation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $transferOrderItemLine;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $transferOrderQuantityCommitted;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $transferOrderQuantityPacked;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $transferOrderQuantityPicked;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $transferOrderQuantityReceived;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $transferOrderQuantityShipped;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $unit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitCostOverride;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $vendType;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $visibleToCustomer;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $vsoeAllocation;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $vsoeAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $vsoeDeferral;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $vsoeDelivered;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $vsoePermitDiscount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $vsoePrice;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $webSite;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"abbrev" => "SearchColumnStringField[]",
		"account" => "SearchColumnSelectField[]",
		"accountType" => "SearchColumnStringField[]",
		"actualShipDate" => "SearchColumnDateField[]",
		"altSalesAmount" => "SearchColumnDoubleField[]",
		"altSalesNetAmount" => "SearchColumnDoubleField[]",
		"amount" => "SearchColumnDoubleField[]",
		"amountPaid" => "SearchColumnDoubleField[]",
		"amountRemaining" => "SearchColumnDoubleField[]",
		"amountUnbilled" => "SearchColumnDoubleField[]",
		"appliedToForeignAmount" => "SearchColumnDoubleField[]",
		"appliedToIsFxVariance" => "SearchColumnBooleanField[]",
		"appliedToLinkAmount" => "SearchColumnDoubleField[]",
		"appliedToLinkType" => "SearchColumnStringField[]",
		"appliedToTransaction" => "SearchColumnSelectField[]",
		"applyingForeignAmount" => "SearchColumnDoubleField[]",
		"applyingIsFxVariance" => "SearchColumnBooleanField[]",
		"applyingLinkAmount" => "SearchColumnDoubleField[]",
		"applyingLinkType" => "SearchColumnStringField[]",
		"applyingTransaction" => "SearchColumnSelectField[]",
		"approvalStatus" => "SearchColumnEnumSelectField[]",
		"authCode" => "SearchColumnStringField[]",
		"autoCalculateLag" => "SearchColumnBooleanField[]",
		"avsStreetMatch" => "SearchColumnEnumSelectField[]",
		"avsZipMatch" => "SearchColumnEnumSelectField[]",
		"billable" => "SearchColumnBooleanField[]",
		"billAddress" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billedDate" => "SearchColumnDateField[]",
		"billingAccount" => "SearchColumnSelectField[]",
		"billingAmount" => "SearchColumnDoubleField[]",
		"billingSchedule" => "SearchColumnSelectField[]",
		"billingTransaction" => "SearchColumnSelectField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billVarianceStatus" => "SearchColumnEnumSelectField[]",
		"billZip" => "SearchColumnStringField[]",
		"binNumber" => "SearchColumnStringField[]",
		"binNumberQuantity" => "SearchColumnDoubleField[]",
		"bomQuantity" => "SearchColumnDoubleField[]",
		"buildEntireAssembly" => "SearchColumnBooleanField[]",
		"buildVariance" => "SearchColumnDoubleField[]",
		"built" => "SearchColumnDoubleField[]",
		"catchUpPeriod" => "SearchColumnStringField[]",
		"ccCustomerCode" => "SearchColumnStringField[]",
		"ccExpDate" => "SearchColumnDateField[]",
		"ccHolderName" => "SearchColumnStringField[]",
		"ccNumber" => "SearchColumnStringField[]",
		"ccStreet" => "SearchColumnStringField[]",
		"ccZipCode" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"cleared" => "SearchColumnBooleanField[]",
		"closed" => "SearchColumnBooleanField[]",
		"closeDate" => "SearchColumnDateField[]",
		"cogsAmount" => "SearchColumnDoubleField[]",
		"commissionEffectiveDate" => "SearchColumnDateField[]",
		"commit" => "SearchColumnEnumSelectField[]",
		"componentYield" => "SearchColumnDoubleField[]",
		"confirmationNumber" => "SearchColumnStringField[]",
		"contribution" => "SearchColumnDoubleField[]",
		"contributionPrimary" => "SearchColumnDoubleField[]",
		"costComponentAmount" => "SearchColumnDoubleField[]",
		"costComponentCategory" => "SearchColumnStringField[]",
		"costComponentItem" => "SearchColumnStringField[]",
		"costComponentQuantity" => "SearchColumnDoubleField[]",
		"costComponentStandardCost" => "SearchColumnDoubleField[]",
		"costEstimate" => "SearchColumnDoubleField[]",
		"costEstimateRate" => "SearchColumnDoubleField[]",
		"costEstimateType" => "SearchColumnEnumSelectField[]",
		"createdBy" => "SearchColumnSelectField[]",
		"createdFrom" => "SearchColumnSelectField[]",
		"creditAmount" => "SearchColumnDoubleField[]",
		"cscMatch" => "SearchColumnEnumSelectField[]",
		"currency" => "SearchColumnSelectField[]",
		"customForm" => "SearchColumnSelectField[]",
		"customGL" => "SearchColumnBooleanField[]",
		"custType" => "SearchColumnSelectField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"daysOpen" => "SearchColumnLongField[]",
		"daysOverdue" => "SearchColumnLongField[]",
		"debitAmount" => "SearchColumnDoubleField[]",
		"deferredRevenue" => "SearchColumnDoubleField[]",
		"deferRevRec" => "SearchColumnBooleanField[]",
		"department" => "SearchColumnSelectField[]",
		"depositDate" => "SearchColumnDateField[]",
		"depositTransaction" => "SearchColumnSelectField[]",
		"discountAmount" => "SearchColumnDoubleField[]",
		"docUnit" => "SearchColumnStringField[]",
		"drAccount" => "SearchColumnStringField[]",
		"dueDate" => "SearchColumnDateField[]",
		"effectiveRate" => "SearchColumnDoubleField[]",
		"email" => "SearchColumnStringField[]",
		"endDate" => "SearchColumnDateField[]",
		"entity" => "SearchColumnSelectField[]",
		"entityStatus" => "SearchColumnSelectField[]",
		"estGrossProfit" => "SearchColumnDoubleField[]",
		"estGrossProfitPct" => "SearchColumnDoubleField[]",
		"estGrossProfitPercent" => "SearchColumnDoubleField[]",
		"exchangeRate" => "SearchColumnDoubleField[]",
		"excludeCommission" => "SearchColumnBooleanField[]",
		"excludeFromRateRequest" => "SearchColumnBooleanField[]",
		"expectedCloseDate" => "SearchColumnDateField[]",
		"expectedReceiptDate" => "SearchColumnDateField[]",
		"expenseCategory" => "SearchColumnSelectField[]",
		"expenseDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"firmed" => "SearchColumnBooleanField[]",
		"forecastType" => "SearchColumnEnumSelectField[]",
		"fulfillingTransaction" => "SearchColumnSelectField[]",
		"fxAccount" => "SearchColumnStringField[]",
		"fxAmount" => "SearchColumnDoubleField[]",
		"fxCostEstimate" => "SearchColumnDoubleField[]",
		"fxCostEstimateRate" => "SearchColumnDoubleField[]",
		"fxEstGrossProfit" => "SearchColumnDoubleField[]",
		"fxTranCostEstimate" => "SearchColumnDoubleField[]",
		"fxVsoeAllocation" => "SearchColumnDoubleField[]",
		"fxVsoeAmount" => "SearchColumnDoubleField[]",
		"fxVsoePrice" => "SearchColumnDoubleField[]",
		"gcoAvailabelToCharge" => "SearchColumnBooleanField[]",
		"gcoAvailableToRefund" => "SearchColumnBooleanField[]",
		"gcoAvsStreetMatch" => "SearchColumnEnumSelectField[]",
		"gcoAvsZipMatch" => "SearchColumnEnumSelectField[]",
		"gcoBuyerAccountAge" => "SearchColumnLongField[]",
		"gcoBuyerIp" => "SearchColumnStringField[]",
		"gcoChargeAmount" => "SearchColumnDoubleField[]",
		"gcoChargebackAmount" => "SearchColumnDoubleField[]",
		"gcoConfirmedChargedTotal" => "SearchColumnDoubleField[]",
		"gcoConfirmedRefundedTotal" => "SearchColumnDoubleField[]",
		"gcoCreditcardNumber" => "SearchColumnStringField[]",
		"gcoCscMatch" => "SearchColumnEnumSelectField[]",
		"gcoFinancialState" => "SearchColumnStringField[]",
		"gcoFulfillmentState" => "SearchColumnStringField[]",
		"gcoOrderId" => "SearchColumnStringField[]",
		"gcoOrderTotal" => "SearchColumnDoubleField[]",
		"gcoPromotionAmount" => "SearchColumnDoubleField[]",
		"gcoPromotionName" => "SearchColumnStringField[]",
		"gcoRefundAmount" => "SearchColumnDoubleField[]",
		"gcoShippingTotal" => "SearchColumnDoubleField[]",
		"gcoStateChangedDetail" => "SearchColumnStringField[]",
		"giftCert" => "SearchColumnStringField[]",
		"grossAmount" => "SearchColumnDoubleField[]",
		"includeInForecast" => "SearchColumnBooleanField[]",
		"intercoStatus" => "SearchColumnEnumSelectField[]",
		"intercoTransaction" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inVsoeBundle" => "SearchColumnBooleanField[]",
		"isAllocation" => "SearchColumnBooleanField[]",
		"isBackflush" => "SearchColumnBooleanField[]",
		"isGcoChargeback" => "SearchColumnBooleanField[]",
		"isGcoChargeConfirmed" => "SearchColumnBooleanField[]",
		"isGcoPaymentGuaranteed" => "SearchColumnBooleanField[]",
		"isGcoRefundConfirmed" => "SearchColumnBooleanField[]",
		"isIntercompanyAdjustment" => "SearchColumnBooleanField[]",
		"isMultiShipTo" => "SearchColumnBooleanField[]",
		"isReversal" => "SearchColumnBooleanField[]",
		"isRevRecTransaction" => "SearchColumnBooleanField[]",
		"isScrap" => "SearchColumnBooleanField[]",
		"isShipAddress" => "SearchColumnBooleanField[]",
		"isTransferPriceCosting" => "SearchColumnBooleanField[]",
		"isWip" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"itemRevision" => "SearchColumnSelectField[]",
		"landedCostPerLine" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"leadSource" => "SearchColumnSelectField[]",
		"line" => "SearchColumnLongField[]",
		"lineSequenceNumber" => "SearchColumnLongField[]",
		"location" => "SearchColumnSelectField[]",
		"locationAutoAssigned" => "SearchColumnBooleanField[]",
		"mainLine" => "SearchColumnBooleanField[]",
		"mainName" => "SearchColumnStringField[]",
		"manufacturingRouting" => "SearchColumnSelectField[]",
		"matchBillToReceipt" => "SearchColumnBooleanField[]",
		"memo" => "SearchColumnStringField[]",
		"memoMain" => "SearchColumnStringField[]",
		"memorized" => "SearchColumnBooleanField[]",
		"merchantAccount" => "SearchColumnSelectField[]",
		"message" => "SearchColumnStringField[]",
		"multiSubsidiary" => "SearchColumnBooleanField[]",
		"netAmount" => "SearchColumnDoubleField[]",
		"netAmountNoTax" => "SearchColumnDoubleField[]",
		"nextApprover" => "SearchColumnSelectField[]",
		"nextBillDate" => "SearchColumnDateField[]",
		"noAutoAssignLocation" => "SearchColumnBooleanField[]",
		"nonReimbursable" => "SearchColumnBooleanField[]",
		"oneTimeTotal" => "SearchColumnDoubleField[]",
		"opportunity" => "SearchColumnSelectField[]",
		"options" => "SearchColumnStringField[]",
		"orderPriority" => "SearchColumnDoubleField[]",
		"originator" => "SearchColumnEnumSelectField[]",
		"otherRefNum" => "SearchColumnTextNumberField[]",
		"overheadParentItem" => "SearchColumnSelectField[]",
		"packageCount" => "SearchColumnLongField[]",
		"paidAmount" => "SearchColumnDoubleField[]",
		"paidTransaction" => "SearchColumnSelectField[]",
		"partner" => "SearchColumnSelectField[]",
		"partnerContribution" => "SearchColumnDoubleField[]",
		"partnerRole" => "SearchColumnSelectField[]",
		"partnerTeamMember" => "SearchColumnSelectField[]",
		"payingAmount" => "SearchColumnDoubleField[]",
		"payingTransaction" => "SearchColumnSelectField[]",
		"paymentApproved" => "SearchColumnBooleanField[]",
		"paymentEventDate" => "SearchColumnDateField[]",
		"paymentEventHoldReason" => "SearchColumnEnumSelectField[]",
		"paymentEventPurchaseCardUsed" => "SearchColumnBooleanField[]",
		"paymentEventPurchaseDataSent" => "SearchColumnBooleanField[]",
		"paymentEventResult" => "SearchColumnEnumSelectField[]",
		"paymentEventType" => "SearchColumnEnumSelectField[]",
		"paymentHold" => "SearchColumnBooleanField[]",
		"paymentMethod" => "SearchColumnSelectField[]",
		"payPalPending" => "SearchColumnBooleanField[]",
		"payPalStatus" => "SearchColumnStringField[]",
		"payPalTranId" => "SearchColumnStringField[]",
		"payrollBatch" => "SearchColumnStringField[]",
		"pnRefNum" => "SearchColumnStringField[]",
		"poRate" => "SearchColumnDoubleField[]",
		"posting" => "SearchColumnBooleanField[]",
		"postingPeriod" => "SearchColumnSelectField[]",
		"priceLevel" => "SearchColumnSelectField[]",
		"print" => "SearchColumnStringField[]",
		"probability" => "SearchColumnDoubleField[]",
		"projectedAmount" => "SearchColumnDoubleField[]",
		"promoCode" => "SearchColumnSelectField[]",
		"purchaseOrder" => "SearchColumnSelectField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"quantityBilled" => "SearchColumnDoubleField[]",
		"quantityCommitted" => "SearchColumnDoubleField[]",
		"quantityPacked" => "SearchColumnDoubleField[]",
		"quantityPicked" => "SearchColumnDoubleField[]",
		"quantityRevCommitted" => "SearchColumnDoubleField[]",
		"quantityShipRecv" => "SearchColumnDoubleField[]",
		"quantityUom" => "SearchColumnDoubleField[]",
		"rate" => "SearchColumnDoubleField[]",
		"realizedGainPostingTransaction" => "SearchColumnStringField[]",
		"recognizedRevenue" => "SearchColumnDoubleField[]",
		"recordType" => "SearchColumnStringField[]",
		"recurAnnuallyTotal" => "SearchColumnDoubleField[]",
		"recurMonthlyTotal" => "SearchColumnDoubleField[]",
		"recurQuarterlyTotal" => "SearchColumnDoubleField[]",
		"recurringBill" => "SearchColumnBooleanField[]",
		"recurWeeklyTotal" => "SearchColumnDoubleField[]",
		"refNumber" => "SearchColumnLongField[]",
		"revCommitStatus" => "SearchColumnEnumSelectField[]",
		"revCommittingTransaction" => "SearchColumnSelectField[]",
		"revenueStatus" => "SearchColumnEnumSelectField[]",
		"reversalDate" => "SearchColumnDateField[]",
		"reversalNumber" => "SearchColumnStringField[]",
		"revRecEndDate" => "SearchColumnDateField[]",
		"revRecOnRevCommitment" => "SearchColumnBooleanField[]",
		"revRecStartDate" => "SearchColumnDateField[]",
		"rgAccount" => "SearchColumnSelectField[]",
		"rgAmount" => "SearchColumnDoubleField[]",
		"salesEffectiveDate" => "SearchColumnDateField[]",
		"salesOrder" => "SearchColumnSelectField[]",
		"salesRep" => "SearchColumnSelectField[]",
		"salesTeamMember" => "SearchColumnSelectField[]",
		"salesTeamRole" => "SearchColumnSelectField[]",
		"schedulingMethod" => "SearchColumnEnumSelectField[]",
		"serialNumber" => "SearchColumnStringField[]",
		"serialNumberCost" => "SearchColumnDoubleField[]",
		"serialNumberCostAdjustment" => "SearchColumnDoubleField[]",
		"serialNumberQuantity" => "SearchColumnDoubleField[]",
		"serialNumbers" => "SearchColumnStringField[]",
		"shipAddress" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCarrier" => "SearchColumnEnumSelectField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipComplete" => "SearchColumnBooleanField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipDate" => "SearchColumnDateField[]",
		"shipGroup" => "SearchColumnLongField[]",
		"shipMethod" => "SearchColumnSelectField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shippingAmount" => "SearchColumnDoubleField[]",
		"shipRecvStatusLine" => "SearchColumnBooleanField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipTo" => "SearchColumnSelectField[]",
		"shipZip" => "SearchColumnStringField[]",
		"signedAmount" => "SearchColumnDoubleField[]",
		"source" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"subscription" => "SearchColumnStringField[]",
		"subscriptionLine" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"taxAmount" => "SearchColumnDoubleField[]",
		"taxCode" => "SearchColumnSelectField[]",
		"taxLine" => "SearchColumnBooleanField[]",
		"taxPeriod" => "SearchColumnSelectField[]",
		"taxTotal" => "SearchColumnDoubleField[]",
		"termInMonths" => "SearchColumnLongField[]",
		"terms" => "SearchColumnSelectField[]",
		"termsOfSale" => "SearchColumnStringField[]",
		"title" => "SearchColumnStringField[]",
		"toBeEmailed" => "SearchColumnBooleanField[]",
		"toBePrinted" => "SearchColumnBooleanField[]",
		"toSubsidiary" => "SearchColumnSelectField[]",
		"total" => "SearchColumnDoubleField[]",
		"totalCostEstimate" => "SearchColumnDoubleField[]",
		"trackingNumbers" => "SearchColumnStringField[]",
		"tranDate" => "SearchColumnDateField[]",
		"tranEstGrossProfit" => "SearchColumnDoubleField[]",
		"tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
		"tranId" => "SearchColumnStringField[]",
		"tranIsVsoeBundle" => "SearchColumnBooleanField[]",
		"transactionDiscount" => "SearchColumnBooleanField[]",
		"transactionLineType" => "SearchColumnEnumSelectField[]",
		"transactionNumber" => "SearchColumnStringField[]",
		"transferLocation" => "SearchColumnSelectField[]",
		"transferOrderItemLine" => "SearchColumnStringField[]",
		"transferOrderQuantityCommitted" => "SearchColumnDoubleField[]",
		"transferOrderQuantityPacked" => "SearchColumnDoubleField[]",
		"transferOrderQuantityPicked" => "SearchColumnDoubleField[]",
		"transferOrderQuantityReceived" => "SearchColumnDoubleField[]",
		"transferOrderQuantityShipped" => "SearchColumnDoubleField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"unit" => "SearchColumnStringField[]",
		"unitCostOverride" => "SearchColumnDoubleField[]",
		"vendType" => "SearchColumnSelectField[]",
		"visibleToCustomer" => "SearchColumnBooleanField[]",
		"vsoeAllocation" => "SearchColumnDoubleField[]",
		"vsoeAmount" => "SearchColumnDoubleField[]",
		"vsoeDeferral" => "SearchColumnEnumSelectField[]",
		"vsoeDelivered" => "SearchColumnBooleanField[]",
		"vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
		"vsoePrice" => "SearchColumnDoubleField[]",
		"webSite" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ItemSearchBasic")) {
/**
 * ItemSearchBasic
 */
class ItemSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBookAmortization;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBookRevRecSchedule;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $allowedShippingMethod;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $alternateDemandSourceItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $atpLeadTime;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $atpMethod;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoLeadTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoPreferredStockLevel;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoReorderPoint;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableToPartners;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $averageCost;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $backwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $binOnHandAvail;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $binOnHandCount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $buildEntireAssembly;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $buildTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $buyItNowPrice;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $caption;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $component;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $componentOf;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $copyDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $correlatedItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $correlatedItemCorrelation;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $correlatedItemCount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $correlatedItemLift;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $correlatedItemPurchaseRate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costAccountingStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costEstimate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $costingMethod;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $countryOfManufacture;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $createJob;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $createRevenuePlansOn;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $daysBeforeExpiration;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $defaultReturnCost;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $defaultShippingMethod;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $demandModifier;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $demandSource;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $demandTimeFence;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $displayIneBayStore;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $displayName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $distributionCategory;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $distributionNetwork;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $dontShowPrice;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $eBayItemDescription;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $eBayItemSubtitle;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $eBayItemTitle;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $ebayRelistingOption;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $effectiveBomControl;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $effectiveRevision;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $endAuctionsWhenOutOfStock;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $featuredDescription;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $feedDescription;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $feedName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fixedLotSize;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $forwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $fraudRisk;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $froogleProductFeed;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxCost;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $generateAccruals;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertAuthCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertEmail;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $giftCertExpDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertFrom;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertMsg;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertOrigAmt;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertRecipient;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $imageUrl;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $inventoryLocation;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $invtClassification;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $invtCountInterval;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isAvailable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDropShipItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isFulfillable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isGcoCompliant;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isLotItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPreferredVendor;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSerialItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSpecialOrderItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSpecialWorkOrderItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $issueProduct;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isVsoeBundle;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isWip;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $itemId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemRevenueCategory;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $itemUrl;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastInvtCountDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $lastPurchasePrice;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastQuantityAvailableChange;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $leadTime;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $listingDuration;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationAtpLeadTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationAverageCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationBuildTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationCostAccountingStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationDefaultReturnCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationDemandSource;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationDemandTimeFence;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationFixedLotSize;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $locationInventoryCostTemplate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationInvtClassification;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationInvtCountInterval;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $locationLastInvtCountDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationLeadTime;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $locationNextInvtCountDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationPeriodicLotSizeDays;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationPeriodicLotSizeType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationPreferredStockLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityBackOrdered;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityInTransit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityOnHand;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationQuantityOnOrder;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationReorderPoint;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationRescheduleInDays;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationRescheduleOutDays;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationSafetyStockLevel;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationSupplyLotSizingMethod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locationSupplyTimeFence;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $locationSupplyType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $locationTotalValue;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locBackwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $locForwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturer;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufactureraddr1;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerCity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerState;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerTariff;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerTaxId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $manufacturerZip;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $manufacturingChargeItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matrix;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $matrixChild;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $metaTagHtml;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $mossApplies;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $mpn;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $multManufactureAddr;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nexTagCategory;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $nexTagProductFeed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $nextInvtCountDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $numActiveListings;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $numberAllowedDownloads;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $numCurrentlyListed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $obsoleteDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $obsoleteRevision;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $offerSupport;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $onlineCustomerPrice;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $onSpecial;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $otherVendor;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $outOfStockBehavior;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $overallQuantityPricingType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $overheadType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pageTitle;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $periodicLotSizeDays;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $periodicLotSizeType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $preferenceCriterion;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $preferredBin;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $preferredLocation;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $preferredStockLevel;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $preferredStockLevelDays;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $price;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $pricesIncludeTax;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $primaryCategory;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $purchaseUnit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $quantityPricingSchedule;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $reorderMultiple;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $reorderPoint;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $rescheduleInDays;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $rescheduleOutDays;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $reservePrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $revenueAllocationGroup;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $revenueRecognitionRule;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $roundUpAsComponent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $safetyStockLevel;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $safetyStockLevelDays;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salesDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $saleUnit;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $sameAsPrimaryBookAmortization;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $sameAsPrimaryBookRevRec;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $scheduleBCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scheduleBNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scheduleBQuantity;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $searchKeywords;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $seasonalDemand;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $sellOnEBay;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $serialNumberLocation;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipIndividually;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shipPackage;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $shippingCarrier;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $shippingRate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shoppingDotComCategory;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shoppingProductFeed;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $shopzillaCategoryId;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shopzillaProductFeed;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $sitemapPriority;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $softDescriptor;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $startingPrice;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $stockDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $stockUnit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $storeDescription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $subType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $supplyLotSizingMethod;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $supplyReplenishmentMethod;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $supplyTimeFence;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $supplyType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $taxSchedule;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $thumbnailUrl;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $totalValue;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $trackLandedCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $transferPrice;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $upcCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $urlComponent;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useBins;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useComponentYield;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $useMarginalRates;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vendorCode;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vendorCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vendorCostEntered;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vendorName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendorPriceCurrency;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $vsoeDeferral;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $vsoeDelivered;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $vsoePermitDiscount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $vsoePrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $webSite;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $weight;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $yahooProductFeed;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"accountingBook" => "SearchMultiSelectField",
		"accountingBookAmortization" => "SearchMultiSelectField",
		"accountingBookRevRecSchedule" => "SearchMultiSelectField",
		"allowedShippingMethod" => "SearchMultiSelectField",
		"alternateDemandSourceItem" => "SearchMultiSelectField",
		"atpLeadTime" => "SearchDoubleField",
		"atpMethod" => "SearchEnumMultiSelectField",
		"autoLeadTime" => "SearchBooleanField",
		"autoPreferredStockLevel" => "SearchBooleanField",
		"autoReorderPoint" => "SearchBooleanField",
		"availableToPartners" => "SearchBooleanField",
		"averageCost" => "SearchDoubleField",
		"backwardConsumptionDays" => "SearchLongField",
		"binNumber" => "SearchStringField",
		"binOnHandAvail" => "SearchDoubleField",
		"binOnHandCount" => "SearchDoubleField",
		"bomQuantity" => "SearchDoubleField",
		"buildEntireAssembly" => "SearchBooleanField",
		"buildTime" => "SearchDoubleField",
		"buyItNowPrice" => "SearchDoubleField",
		"caption" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"component" => "SearchMultiSelectField",
		"componentOf" => "SearchMultiSelectField",
		"componentYield" => "SearchDoubleField",
		"copyDescription" => "SearchBooleanField",
		"correlatedItem" => "SearchMultiSelectField",
		"correlatedItemCorrelation" => "SearchDoubleField",
		"correlatedItemCount" => "SearchLongField",
		"correlatedItemLift" => "SearchDoubleField",
		"correlatedItemPurchaseRate" => "SearchDoubleField",
		"cost" => "SearchDoubleField",
		"costAccountingStatus" => "SearchEnumMultiSelectField",
		"costCategory" => "SearchMultiSelectField",
		"costEstimate" => "SearchDoubleField",
		"costEstimateType" => "SearchEnumMultiSelectField",
		"costingMethod" => "SearchEnumMultiSelectField",
		"countryOfManufacture" => "SearchEnumMultiSelectField",
		"created" => "SearchDateField",
		"createJob" => "SearchBooleanField",
		"createRevenuePlansOn" => "SearchEnumMultiSelectField",
		"dateViewed" => "SearchDateField",
		"daysBeforeExpiration" => "SearchDoubleField",
		"defaultReturnCost" => "SearchDoubleField",
		"defaultShippingMethod" => "SearchMultiSelectField",
		"deferRevRec" => "SearchBooleanField",
		"demandModifier" => "SearchDoubleField",
		"demandSource" => "SearchEnumMultiSelectField",
		"demandTimeFence" => "SearchLongField",
		"department" => "SearchMultiSelectField",
		"displayIneBayStore" => "SearchBooleanField",
		"displayName" => "SearchStringField",
		"distributionCategory" => "SearchMultiSelectField",
		"distributionNetwork" => "SearchMultiSelectField",
		"dontShowPrice" => "SearchBooleanField",
		"eBayItemDescription" => "SearchStringField",
		"eBayItemSubtitle" => "SearchStringField",
		"eBayItemTitle" => "SearchStringField",
		"ebayRelistingOption" => "SearchEnumMultiSelectField",
		"effectiveBomControl" => "SearchEnumMultiSelectField",
		"effectiveDate" => "SearchDateField",
		"effectiveRevision" => "SearchMultiSelectField",
		"endAuctionsWhenOutOfStock" => "SearchBooleanField",
		"excludeFromSitemap" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"featuredDescription" => "SearchStringField",
		"feedDescription" => "SearchStringField",
		"feedName" => "SearchStringField",
		"fixedLotSize" => "SearchDoubleField",
		"forwardConsumptionDays" => "SearchLongField",
		"fraudRisk" => "SearchEnumMultiSelectField",
		"froogleProductFeed" => "SearchBooleanField",
		"fxCost" => "SearchDoubleField",
		"generateAccruals" => "SearchBooleanField",
		"giftCertAuthCode" => "SearchStringField",
		"giftCertEmail" => "SearchStringField",
		"giftCertExpDate" => "SearchDateField",
		"giftCertFrom" => "SearchStringField",
		"giftCertMsg" => "SearchStringField",
		"giftCertOrigAmt" => "SearchStringField",
		"giftCertRecipient" => "SearchStringField",
		"imageUrl" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryLocation" => "SearchMultiSelectField",
		"invtClassification" => "SearchEnumMultiSelectField",
		"invtCountInterval" => "SearchLongField",
		"isAvailable" => "SearchBooleanField",
		"isDropShipItem" => "SearchBooleanField",
		"isFulfillable" => "SearchBooleanField",
		"isGcoCompliant" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isLotItem" => "SearchBooleanField",
		"isOnline" => "SearchBooleanField",
		"isPreferredVendor" => "SearchBooleanField",
		"isSerialItem" => "SearchBooleanField",
		"isSpecialOrderItem" => "SearchBooleanField",
		"isSpecialWorkOrderItem" => "SearchBooleanField",
		"issueProduct" => "SearchMultiSelectField",
		"isTaxable" => "SearchBooleanField",
		"isVsoeBundle" => "SearchBooleanField",
		"isWip" => "SearchBooleanField",
		"itemId" => "SearchStringField",
		"itemRevenueCategory" => "SearchMultiSelectField",
		"itemUrl" => "SearchStringField",
		"lastInvtCountDate" => "SearchDateField",
		"lastModifiedDate" => "SearchDateField",
		"lastPurchasePrice" => "SearchDoubleField",
		"lastQuantityAvailableChange" => "SearchDateField",
		"leadTime" => "SearchLongField",
		"listingDuration" => "SearchEnumMultiSelectField",
		"location" => "SearchMultiSelectField",
		"locationAtpLeadTime" => "SearchDoubleField",
		"locationAverageCost" => "SearchDoubleField",
		"locationBuildTime" => "SearchDoubleField",
		"locationCost" => "SearchDoubleField",
		"locationCostAccountingStatus" => "SearchEnumMultiSelectField",
		"locationDefaultReturnCost" => "SearchDoubleField",
		"locationDemandSource" => "SearchEnumMultiSelectField",
		"locationDemandTimeFence" => "SearchLongField",
		"locationFixedLotSize" => "SearchDoubleField",
		"locationInventoryCostTemplate" => "SearchMultiSelectField",
		"locationInvtClassification" => "SearchEnumMultiSelectField",
		"locationInvtCountInterval" => "SearchLongField",
		"locationLastInvtCountDate" => "SearchDateField",
		"locationLeadTime" => "SearchLongField",
		"locationNextInvtCountDate" => "SearchDateField",
		"locationPeriodicLotSizeDays" => "SearchLongField",
		"locationPeriodicLotSizeType" => "SearchEnumMultiSelectField",
		"locationPreferredStockLevel" => "SearchDoubleField",
		"locationQuantityAvailable" => "SearchDoubleField",
		"locationQuantityBackOrdered" => "SearchDoubleField",
		"locationQuantityCommitted" => "SearchDoubleField",
		"locationQuantityInTransit" => "SearchDoubleField",
		"locationQuantityOnHand" => "SearchDoubleField",
		"locationQuantityOnOrder" => "SearchDoubleField",
		"locationReorderPoint" => "SearchDoubleField",
		"locationRescheduleInDays" => "SearchLongField",
		"locationRescheduleOutDays" => "SearchLongField",
		"locationSafetyStockLevel" => "SearchDoubleField",
		"locationSupplyLotSizingMethod" => "SearchEnumMultiSelectField",
		"locationSupplyTimeFence" => "SearchLongField",
		"locationSupplyType" => "SearchEnumMultiSelectField",
		"locationTotalValue" => "SearchDoubleField",
		"locBackwardConsumptionDays" => "SearchLongField",
		"locForwardConsumptionDays" => "SearchLongField",
		"manufacturer" => "SearchStringField",
		"manufactureraddr1" => "SearchStringField",
		"manufacturerCity" => "SearchStringField",
		"manufacturerState" => "SearchStringField",
		"manufacturerTariff" => "SearchStringField",
		"manufacturerTaxId" => "SearchStringField",
		"manufacturerZip" => "SearchStringField",
		"manufacturingChargeItem" => "SearchBooleanField",
		"matchBillToReceipt" => "SearchBooleanField",
		"matrix" => "SearchBooleanField",
		"matrixChild" => "SearchBooleanField",
		"metaTagHtml" => "SearchStringField",
		"minimumQuantity" => "SearchLongField",
		"mossApplies" => "SearchBooleanField",
		"mpn" => "SearchStringField",
		"multManufactureAddr" => "SearchBooleanField",
		"nexTagCategory" => "SearchStringField",
		"nexTagProductFeed" => "SearchBooleanField",
		"nextInvtCountDate" => "SearchDateField",
		"numActiveListings" => "SearchLongField",
		"numberAllowedDownloads" => "SearchDoubleField",
		"numCurrentlyListed" => "SearchLongField",
		"obsoleteDate" => "SearchDateField",
		"obsoleteRevision" => "SearchMultiSelectField",
		"offerSupport" => "SearchBooleanField",
		"onlineCustomerPrice" => "SearchDoubleField",
		"onSpecial" => "SearchBooleanField",
		"otherVendor" => "SearchMultiSelectField",
		"outOfStockBehavior" => "SearchMultiSelectField",
		"overallQuantityPricingType" => "SearchEnumMultiSelectField",
		"overheadType" => "SearchEnumMultiSelectField",
		"pageTitle" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
		"periodicLotSizeDays" => "SearchLongField",
		"periodicLotSizeType" => "SearchEnumMultiSelectField",
		"preferenceCriterion" => "SearchStringField",
		"preferredBin" => "SearchBooleanField",
		"preferredLocation" => "SearchMultiSelectField",
		"preferredStockLevel" => "SearchDoubleField",
		"preferredStockLevelDays" => "SearchLongField",
		"price" => "SearchDoubleField",
		"pricesIncludeTax" => "SearchBooleanField",
		"pricingGroup" => "SearchMultiSelectField",
		"primaryCategory" => "SearchLongField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"purchaseUnit" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityBackOrdered" => "SearchDoubleField",
		"quantityCommitted" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
		"quantityOnOrder" => "SearchDoubleField",
		"quantityPricingSchedule" => "SearchMultiSelectField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"reorderMultiple" => "SearchLongField",
		"reorderPoint" => "SearchDoubleField",
		"rescheduleInDays" => "SearchLongField",
		"rescheduleOutDays" => "SearchLongField",
		"reservePrice" => "SearchDoubleField",
		"revenueAllocationGroup" => "SearchMultiSelectField",
		"revenueRecognitionRule" => "SearchMultiSelectField",
		"revRecSchedule" => "SearchMultiSelectField",
		"roundUpAsComponent" => "SearchBooleanField",
		"safetyStockLevel" => "SearchDoubleField",
		"safetyStockLevelDays" => "SearchLongField",
		"salesDescription" => "SearchStringField",
		"saleUnit" => "SearchMultiSelectField",
		"sameAsPrimaryBookAmortization" => "SearchBooleanField",
		"sameAsPrimaryBookRevRec" => "SearchBooleanField",
		"scheduleBCode" => "SearchEnumMultiSelectField",
		"scheduleBNumber" => "SearchStringField",
		"scheduleBQuantity" => "SearchStringField",
		"searchKeywords" => "SearchStringField",
		"seasonalDemand" => "SearchBooleanField",
		"sellOnEBay" => "SearchBooleanField",
		"serialNumber" => "SearchStringField",
		"serialNumberLocation" => "SearchMultiSelectField",
		"shipIndividually" => "SearchBooleanField",
		"shipPackage" => "SearchMultiSelectField",
		"shippingCarrier" => "SearchEnumMultiSelectField",
		"shippingRate" => "SearchDoubleField",
		"shoppingDotComCategory" => "SearchStringField",
		"shoppingProductFeed" => "SearchBooleanField",
		"shopzillaCategoryId" => "SearchLongField",
		"shopzillaProductFeed" => "SearchBooleanField",
		"sitemapPriority" => "SearchEnumMultiSelectField",
		"softDescriptor" => "SearchMultiSelectField",
		"startingPrice" => "SearchDoubleField",
		"stockDescription" => "SearchStringField",
		"stockUnit" => "SearchMultiSelectField",
		"storeDescription" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"subType" => "SearchEnumMultiSelectField",
		"supplyLotSizingMethod" => "SearchEnumMultiSelectField",
		"supplyReplenishmentMethod" => "SearchEnumMultiSelectField",
		"supplyTimeFence" => "SearchLongField",
		"supplyType" => "SearchEnumMultiSelectField",
		"taxCode" => "SearchMultiSelectField",
		"taxSchedule" => "SearchMultiSelectField",
		"thumbnailUrl" => "SearchStringField",
		"totalValue" => "SearchDoubleField",
		"trackLandedCost" => "SearchBooleanField",
		"transferPrice" => "SearchDoubleField",
		"type" => "SearchEnumMultiSelectField",
		"unitsType" => "SearchMultiSelectField",
		"upcCode" => "SearchStringField",
		"urlComponent" => "SearchStringField",
		"useBins" => "SearchBooleanField",
		"useComponentYield" => "SearchBooleanField",
		"useMarginalRates" => "SearchBooleanField",
		"vendor" => "SearchMultiSelectField",
		"vendorCode" => "SearchStringField",
		"vendorCost" => "SearchDoubleField",
		"vendorCostEntered" => "SearchDoubleField",
		"vendorName" => "SearchStringField",
		"vendorPriceCurrency" => "SearchMultiSelectField",
		"vsoeDeferral" => "SearchEnumMultiSelectField",
		"vsoeDelivered" => "SearchBooleanField",
		"vsoePermitDiscount" => "SearchEnumMultiSelectField",
		"vsoePrice" => "SearchDoubleField",
		"webSite" => "SearchMultiSelectField",
		"weight" => "SearchDoubleField",
		"yahooProductFeed" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ItemSearchRowBasic")) {
/**
 * ItemSearchRowBasic
 */
class ItemSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBookAmortization;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBookRevRecSchedule;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $allowedShippingMethod;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $alternateDemandSourceItem;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assetAccount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $atpLeadTime;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $atpMethod;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $autoLeadTime;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $autoPreferredStockLevel;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $autoReorderPoint;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableToPartners;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $averageCost;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $backwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $basePrice;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billExchRateVarianceAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billPriceVarianceAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billQtyVarianceAcct;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $binOnHandAvail;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $binOnHandCount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $bomQuantity;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $buildEntireAssembly;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $buildTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $buyItNowPrice;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $categoryPreferred;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $componentYield;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $copyDescription;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $correlatedItem;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $correlatedItemCorrelation;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $correlatedItemCount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $correlatedItemLift;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $correlatedItemPurchaseRate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $costAccountingStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $costCategory;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costEstimate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $costEstimateType;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $costingMethod;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $countryOfManufacture;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $createJob;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $createRevenuePlansOn;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $custReturnVarianceAccount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $daysBeforeExpiration;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $defaultReturnCost;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $defaultShippingMethod;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $deferredExpenseAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $deferredRevenueAccount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $deferRevRec;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $demandModifier;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $demandSource;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $demandTimeFence;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $departmentnohierarchy;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $displayIneBayStore;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $displayName;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $distributionCategory;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $distributionNetwork;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $dontShowPrice;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $eBayItemDescription;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $eBayItemSubtitle;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $eBayItemTitle;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $ebayRelistingOption;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $effectiveBomControl;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $effectiveRevision;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $endAuctionsWhenOutOfStock;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $featuredDescription;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $feedDescription;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $feedName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fixedLotSize;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $forwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $fraudRisk;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $froogleProductFeed;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxCost;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $gainLossAccount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $generateAccruals;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertAuthCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertExpirationDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertFrom;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertMessage;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertOriginalAmount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertRecipient;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $hits;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $imageUrl;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $incomeAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $intercoExpenseAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $intercoIncomeAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $inventoryLocation;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $invtClassification;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $invtCountInterval;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isAvailable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDropShipItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isFulfillable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isGcoCompliant;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isLotItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSerialItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSpecialOrderItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSpecialWorkOrderItem;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $issueProduct;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isTaxable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isVsoeBundle;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isWip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $itemRevenueCategory;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemUrl;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastInvtCountDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $lastPurchasePrice;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastQuantityAvailableChange;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $leadTime;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $listingDuration;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationAtpLeadTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationAverageCost;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $locationBinQuantityAvailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationBuildTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationCost;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $locationCostAccountingStatus;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationDefaultReturnCost;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $locationDemandSource;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locationDemandTimeFence;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationFixedLotSize;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $locationInventoryCostTemplate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $locationInvtClassification;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locationInvtCountInterval;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $locationLastInvtCountDate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locationLeadTime;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $locationNextInvtCountDate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locationPeriodicLotSizeDays;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $locationPeriodicLotSizeType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationPreferredStockLevel;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationQuantityAvailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationQuantityBackOrdered;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationQuantityCommitted;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationQuantityInTransit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationQuantityOnHand;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationQuantityOnOrder;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationReOrderPoint;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locationRescheduleInDays;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locationRescheduleOutDays;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationSafetyStockLevel;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $locationSupplyLotSizingMethod;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locationSupplyTimeFence;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $locationSupplyType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $locationTotalValue;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locBackwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $locForwardConsumptionDays;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $manufacturer;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $manufacturerAddr1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $manufacturerCity;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $manufacturerState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $manufacturerTariff;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $manufacturerTaxId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $manufacturerZip;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $manufacturingChargeItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $matchBillToReceipt;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $memberItem;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $memberQuantity;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $metaTagHtml;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $modified;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $mossApplies;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mpn;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $multManufactureAddr;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nextagCategory;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $nextagProductFeed;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $nextInvtCountDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $noPriceMessage;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $numActiveListings;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $numberAllowedDownloads;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $numCurrentlyListed;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $obsoleteDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $obsoleteRevision;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $offerSupport;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $onlineCustomerPrice;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $onlinePrice;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $onSpecial;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $otherPrices;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $otherVendor;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $outOfStockBehavior;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $outOfStockMessage;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $overallQuantityPricingType;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $overheadType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pageTitle;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $periodicLotSizeDays;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $periodicLotSizeType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $preferenceCriterion;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $preferredBin;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $preferredLocation;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $preferredStockLevel;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $preferredStockLevelDays;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $pricesIncludeTax;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $primaryCategory;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $prodPriceVarianceAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $prodQtyVarianceAcct;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $purchaseDescription;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $purchasePriceVarianceAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $purchaseUnit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityBackOrdered;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityCommitted;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $quantityPricingSchedule;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $reorderMultiple;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $reOrderPoint;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $rescheduleInDays;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $rescheduleOutDays;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $reservePrice;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $revenueAllocationGroup;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $revenueRecognitionRule;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $revRecSchedule;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $roundUpAsComponent;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $safetyStockLevel;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $safetyStockLevelDays;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salesDescription;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTaxCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $saleUnit;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $sameAsPrimaryBookAmortization;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $sameAsPrimaryBookRevRec;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $scheduleBCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $scheduleBNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $scheduleBQuantity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $scrapAcct;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $searchKeywords;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $seasonalDemand;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $sellOnEBay;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $serialNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $serialNumberLocation;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $shipIndividually;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $shipPackage;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shippingCarrier;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $shippingRate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shoppingDotComCategory;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $shoppingProductFeed;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $shopzillaCategoryId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $shopzillaProductFeed;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $sitemapPriority;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $softDescriptor;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $startingPrice;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $stockDescription;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $stockUnit;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $storeDescription;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $storeDetailedDescription;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $storeDisplayImage;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $storeDisplayName;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $storeDisplayThumbnail;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $subType;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $supplyLotSizingMethod;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $supplyReplenishmentMethod;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $supplyTimeFence;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $supplyType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxSchedule;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $thumbNailUrl;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $totalValue;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $trackLandedCost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $transferPrice;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $unbuildVarianceAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $unitsType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $upcCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $urlComponent;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useBins;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useComponentYield;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $useMarginalRates;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vendorCode;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $vendorCost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $vendorCostEntered;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vendorName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vendorPriceCurrency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $vendorSchedule;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $vendReturnVarianceAccount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $vsoeDeferral;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $vsoeDelivered;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $vsoePermitDiscount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $vsoePrice;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $webSite;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $weight;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $weightUnit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $wipAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $wipVarianceAcct;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $yahooProductFeed;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnSelectField[]",
		"accountingBookAmortization" => "SearchColumnSelectField[]",
		"accountingBookRevRecSchedule" => "SearchColumnSelectField[]",
		"allowedShippingMethod" => "SearchColumnSelectField[]",
		"alternateDemandSourceItem" => "SearchColumnStringField[]",
		"assetAccount" => "SearchColumnSelectField[]",
		"atpLeadTime" => "SearchColumnDoubleField[]",
		"atpMethod" => "SearchColumnEnumSelectField[]",
		"autoLeadTime" => "SearchColumnBooleanField[]",
		"autoPreferredStockLevel" => "SearchColumnBooleanField[]",
		"autoReorderPoint" => "SearchColumnBooleanField[]",
		"availableToPartners" => "SearchColumnBooleanField[]",
		"averageCost" => "SearchColumnDoubleField[]",
		"backwardConsumptionDays" => "SearchColumnLongField[]",
		"basePrice" => "SearchColumnDoubleField[]",
		"billExchRateVarianceAcct" => "SearchColumnSelectField[]",
		"billPriceVarianceAcct" => "SearchColumnSelectField[]",
		"billQtyVarianceAcct" => "SearchColumnSelectField[]",
		"binNumber" => "SearchColumnStringField[]",
		"binOnHandAvail" => "SearchColumnDoubleField[]",
		"binOnHandCount" => "SearchColumnDoubleField[]",
		"bomQuantity" => "SearchColumnDoubleField[]",
		"buildEntireAssembly" => "SearchColumnBooleanField[]",
		"buildTime" => "SearchColumnDoubleField[]",
		"buyItNowPrice" => "SearchColumnDoubleField[]",
		"category" => "SearchColumnStringField[]",
		"categoryPreferred" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"componentYield" => "SearchColumnDoubleField[]",
		"copyDescription" => "SearchColumnBooleanField[]",
		"correlatedItem" => "SearchColumnSelectField[]",
		"correlatedItemCorrelation" => "SearchColumnDoubleField[]",
		"correlatedItemCount" => "SearchColumnLongField[]",
		"correlatedItemLift" => "SearchColumnDoubleField[]",
		"correlatedItemPurchaseRate" => "SearchColumnDoubleField[]",
		"cost" => "SearchColumnDoubleField[]",
		"costAccountingStatus" => "SearchColumnEnumSelectField[]",
		"costCategory" => "SearchColumnStringField[]",
		"costEstimate" => "SearchColumnDoubleField[]",
		"costEstimateType" => "SearchColumnEnumSelectField[]",
		"costingMethod" => "SearchColumnEnumSelectField[]",
		"countryOfManufacture" => "SearchColumnEnumSelectField[]",
		"created" => "SearchColumnDateField[]",
		"createJob" => "SearchColumnBooleanField[]",
		"createRevenuePlansOn" => "SearchColumnEnumSelectField[]",
		"custReturnVarianceAccount" => "SearchColumnSelectField[]",
		"dateViewed" => "SearchColumnDateField[]",
		"daysBeforeExpiration" => "SearchColumnStringField[]",
		"defaultReturnCost" => "SearchColumnDoubleField[]",
		"defaultShippingMethod" => "SearchColumnStringField[]",
		"deferredExpenseAccount" => "SearchColumnSelectField[]",
		"deferredRevenueAccount" => "SearchColumnSelectField[]",
		"deferRevRec" => "SearchColumnBooleanField[]",
		"demandModifier" => "SearchColumnDoubleField[]",
		"demandSource" => "SearchColumnEnumSelectField[]",
		"demandTimeFence" => "SearchColumnLongField[]",
		"department" => "SearchColumnSelectField[]",
		"departmentnohierarchy" => "SearchColumnSelectField[]",
		"displayIneBayStore" => "SearchColumnBooleanField[]",
		"displayName" => "SearchColumnStringField[]",
		"distributionCategory" => "SearchColumnSelectField[]",
		"distributionNetwork" => "SearchColumnSelectField[]",
		"dontShowPrice" => "SearchColumnBooleanField[]",
		"eBayItemDescription" => "SearchColumnStringField[]",
		"eBayItemSubtitle" => "SearchColumnStringField[]",
		"eBayItemTitle" => "SearchColumnStringField[]",
		"ebayRelistingOption" => "SearchColumnEnumSelectField[]",
		"effectiveBomControl" => "SearchColumnEnumSelectField[]",
		"effectiveDate" => "SearchColumnDateField[]",
		"effectiveRevision" => "SearchColumnSelectField[]",
		"endAuctionsWhenOutOfStock" => "SearchColumnBooleanField[]",
		"excludeFromSitemap" => "SearchColumnBooleanField[]",
		"expenseAccount" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"featuredDescription" => "SearchColumnStringField[]",
		"feedDescription" => "SearchColumnStringField[]",
		"feedName" => "SearchColumnStringField[]",
		"fixedLotSize" => "SearchColumnDoubleField[]",
		"forwardConsumptionDays" => "SearchColumnLongField[]",
		"fraudRisk" => "SearchColumnEnumSelectField[]",
		"froogleProductFeed" => "SearchColumnBooleanField[]",
		"fxCost" => "SearchColumnDoubleField[]",
		"gainLossAccount" => "SearchColumnSelectField[]",
		"generateAccruals" => "SearchColumnBooleanField[]",
		"giftCertAuthCode" => "SearchColumnStringField[]",
		"giftCertEmail" => "SearchColumnStringField[]",
		"giftCertExpirationDate" => "SearchColumnStringField[]",
		"giftCertFrom" => "SearchColumnStringField[]",
		"giftCertMessage" => "SearchColumnStringField[]",
		"giftCertOriginalAmount" => "SearchColumnStringField[]",
		"giftCertRecipient" => "SearchColumnStringField[]",
		"hits" => "SearchColumnLongField[]",
		"imageUrl" => "SearchColumnStringField[]",
		"incomeAccount" => "SearchColumnSelectField[]",
		"intercoExpenseAccount" => "SearchColumnSelectField[]",
		"intercoIncomeAccount" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inventoryLocation" => "SearchColumnSelectField[]",
		"invtClassification" => "SearchColumnEnumSelectField[]",
		"invtCountInterval" => "SearchColumnLongField[]",
		"isAvailable" => "SearchColumnBooleanField[]",
		"isDropShipItem" => "SearchColumnBooleanField[]",
		"isFulfillable" => "SearchColumnBooleanField[]",
		"isGcoCompliant" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isLotItem" => "SearchColumnBooleanField[]",
		"isOnline" => "SearchColumnBooleanField[]",
		"isSerialItem" => "SearchColumnBooleanField[]",
		"isSpecialOrderItem" => "SearchColumnBooleanField[]",
		"isSpecialWorkOrderItem" => "SearchColumnBooleanField[]",
		"issueProduct" => "SearchColumnSelectField[]",
		"isTaxable" => "SearchColumnBooleanField[]",
		"isVsoeBundle" => "SearchColumnBooleanField[]",
		"isWip" => "SearchColumnBooleanField[]",
		"itemId" => "SearchColumnStringField[]",
		"itemRevenueCategory" => "SearchColumnSelectField[]",
		"itemUrl" => "SearchColumnStringField[]",
		"lastInvtCountDate" => "SearchColumnDateField[]",
		"lastPurchasePrice" => "SearchColumnDoubleField[]",
		"lastQuantityAvailableChange" => "SearchColumnDateField[]",
		"leadTime" => "SearchColumnLongField[]",
		"liabilityAccount" => "SearchColumnSelectField[]",
		"listingDuration" => "SearchColumnEnumSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"locationAtpLeadTime" => "SearchColumnDoubleField[]",
		"locationAverageCost" => "SearchColumnDoubleField[]",
		"locationBinQuantityAvailable" => "SearchColumnStringField[]",
		"locationBuildTime" => "SearchColumnDoubleField[]",
		"locationCost" => "SearchColumnDoubleField[]",
		"locationCostAccountingStatus" => "SearchColumnEnumSelectField[]",
		"locationDefaultReturnCost" => "SearchColumnDoubleField[]",
		"locationDemandSource" => "SearchColumnEnumSelectField[]",
		"locationDemandTimeFence" => "SearchColumnLongField[]",
		"locationFixedLotSize" => "SearchColumnDoubleField[]",
		"locationInventoryCostTemplate" => "SearchColumnStringField[]",
		"locationInvtClassification" => "SearchColumnEnumSelectField[]",
		"locationInvtCountInterval" => "SearchColumnLongField[]",
		"locationLastInvtCountDate" => "SearchColumnDateField[]",
		"locationLeadTime" => "SearchColumnLongField[]",
		"locationNextInvtCountDate" => "SearchColumnDateField[]",
		"locationPeriodicLotSizeDays" => "SearchColumnLongField[]",
		"locationPeriodicLotSizeType" => "SearchColumnEnumSelectField[]",
		"locationPreferredStockLevel" => "SearchColumnDoubleField[]",
		"locationQuantityAvailable" => "SearchColumnDoubleField[]",
		"locationQuantityBackOrdered" => "SearchColumnDoubleField[]",
		"locationQuantityCommitted" => "SearchColumnDoubleField[]",
		"locationQuantityInTransit" => "SearchColumnDoubleField[]",
		"locationQuantityOnHand" => "SearchColumnDoubleField[]",
		"locationQuantityOnOrder" => "SearchColumnDoubleField[]",
		"locationReOrderPoint" => "SearchColumnDoubleField[]",
		"locationRescheduleInDays" => "SearchColumnLongField[]",
		"locationRescheduleOutDays" => "SearchColumnLongField[]",
		"locationSafetyStockLevel" => "SearchColumnDoubleField[]",
		"locationSupplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
		"locationSupplyTimeFence" => "SearchColumnLongField[]",
		"locationSupplyType" => "SearchColumnEnumSelectField[]",
		"locationTotalValue" => "SearchColumnDoubleField[]",
		"locBackwardConsumptionDays" => "SearchColumnLongField[]",
		"locForwardConsumptionDays" => "SearchColumnLongField[]",
		"manufacturer" => "SearchColumnStringField[]",
		"manufacturerAddr1" => "SearchColumnStringField[]",
		"manufacturerCity" => "SearchColumnStringField[]",
		"manufacturerState" => "SearchColumnStringField[]",
		"manufacturerTariff" => "SearchColumnStringField[]",
		"manufacturerTaxId" => "SearchColumnStringField[]",
		"manufacturerZip" => "SearchColumnStringField[]",
		"manufacturingChargeItem" => "SearchColumnBooleanField[]",
		"matchBillToReceipt" => "SearchColumnBooleanField[]",
		"memberItem" => "SearchColumnSelectField[]",
		"memberQuantity" => "SearchColumnDoubleField[]",
		"metaTagHtml" => "SearchColumnStringField[]",
		"minimumQuantity" => "SearchColumnStringField[]",
		"modified" => "SearchColumnDateField[]",
		"mossApplies" => "SearchColumnBooleanField[]",
		"mpn" => "SearchColumnStringField[]",
		"multManufactureAddr" => "SearchColumnBooleanField[]",
		"nextagCategory" => "SearchColumnStringField[]",
		"nextagProductFeed" => "SearchColumnBooleanField[]",
		"nextInvtCountDate" => "SearchColumnDateField[]",
		"noPriceMessage" => "SearchColumnStringField[]",
		"numActiveListings" => "SearchColumnLongField[]",
		"numberAllowedDownloads" => "SearchColumnStringField[]",
		"numCurrentlyListed" => "SearchColumnLongField[]",
		"obsoleteDate" => "SearchColumnDateField[]",
		"obsoleteRevision" => "SearchColumnSelectField[]",
		"offerSupport" => "SearchColumnBooleanField[]",
		"onlineCustomerPrice" => "SearchColumnDoubleField[]",
		"onlinePrice" => "SearchColumnDoubleField[]",
		"onSpecial" => "SearchColumnBooleanField[]",
		"otherPrices" => "SearchColumnDoubleField[]",
		"otherVendor" => "SearchColumnSelectField[]",
		"outOfStockBehavior" => "SearchColumnStringField[]",
		"outOfStockMessage" => "SearchColumnStringField[]",
		"overallQuantityPricingType" => "SearchColumnEnumSelectField[]",
		"overheadType" => "SearchColumnEnumSelectField[]",
		"pageTitle" => "SearchColumnStringField[]",
		"parent" => "SearchColumnSelectField[]",
		"periodicLotSizeDays" => "SearchColumnLongField[]",
		"periodicLotSizeType" => "SearchColumnEnumSelectField[]",
		"preferenceCriterion" => "SearchColumnStringField[]",
		"preferredBin" => "SearchColumnBooleanField[]",
		"preferredLocation" => "SearchColumnSelectField[]",
		"preferredStockLevel" => "SearchColumnDoubleField[]",
		"preferredStockLevelDays" => "SearchColumnLongField[]",
		"pricesIncludeTax" => "SearchColumnBooleanField[]",
		"pricingGroup" => "SearchColumnSelectField[]",
		"primaryCategory" => "SearchColumnStringField[]",
		"prodPriceVarianceAcct" => "SearchColumnSelectField[]",
		"prodQtyVarianceAcct" => "SearchColumnSelectField[]",
		"purchaseDescription" => "SearchColumnStringField[]",
		"purchaseOrderAmount" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantity" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
		"purchasePriceVarianceAcct" => "SearchColumnSelectField[]",
		"purchaseUnit" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityBackOrdered" => "SearchColumnDoubleField[]",
		"quantityCommitted" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
		"quantityOnOrder" => "SearchColumnDoubleField[]",
		"quantityPricingSchedule" => "SearchColumnSelectField[]",
		"receiptAmount" => "SearchColumnDoubleField[]",
		"receiptQuantity" => "SearchColumnDoubleField[]",
		"receiptQuantityDiff" => "SearchColumnDoubleField[]",
		"reorderMultiple" => "SearchColumnLongField[]",
		"reOrderPoint" => "SearchColumnDoubleField[]",
		"rescheduleInDays" => "SearchColumnLongField[]",
		"rescheduleOutDays" => "SearchColumnLongField[]",
		"reservePrice" => "SearchColumnDoubleField[]",
		"revenueAllocationGroup" => "SearchColumnSelectField[]",
		"revenueRecognitionRule" => "SearchColumnSelectField[]",
		"revRecSchedule" => "SearchColumnSelectField[]",
		"roundUpAsComponent" => "SearchColumnBooleanField[]",
		"safetyStockLevel" => "SearchColumnDoubleField[]",
		"safetyStockLevelDays" => "SearchColumnLongField[]",
		"salesDescription" => "SearchColumnStringField[]",
		"salesTaxCode" => "SearchColumnSelectField[]",
		"saleUnit" => "SearchColumnSelectField[]",
		"sameAsPrimaryBookAmortization" => "SearchColumnBooleanField[]",
		"sameAsPrimaryBookRevRec" => "SearchColumnBooleanField[]",
		"scheduleBCode" => "SearchColumnEnumSelectField[]",
		"scheduleBNumber" => "SearchColumnStringField[]",
		"scheduleBQuantity" => "SearchColumnStringField[]",
		"scrapAcct" => "SearchColumnSelectField[]",
		"searchKeywords" => "SearchColumnStringField[]",
		"seasonalDemand" => "SearchColumnBooleanField[]",
		"sellOnEBay" => "SearchColumnBooleanField[]",
		"serialNumber" => "SearchColumnStringField[]",
		"serialNumberLocation" => "SearchColumnStringField[]",
		"shipIndividually" => "SearchColumnBooleanField[]",
		"shipPackage" => "SearchColumnSelectField[]",
		"shippingCarrier" => "SearchColumnEnumSelectField[]",
		"shippingRate" => "SearchColumnDoubleField[]",
		"shoppingDotComCategory" => "SearchColumnStringField[]",
		"shoppingProductFeed" => "SearchColumnBooleanField[]",
		"shopzillaCategoryId" => "SearchColumnLongField[]",
		"shopzillaProductFeed" => "SearchColumnBooleanField[]",
		"sitemapPriority" => "SearchColumnEnumSelectField[]",
		"softDescriptor" => "SearchColumnSelectField[]",
		"startingPrice" => "SearchColumnDoubleField[]",
		"stockDescription" => "SearchColumnStringField[]",
		"stockUnit" => "SearchColumnSelectField[]",
		"storeDescription" => "SearchColumnStringField[]",
		"storeDetailedDescription" => "SearchColumnStringField[]",
		"storeDisplayImage" => "SearchColumnSelectField[]",
		"storeDisplayName" => "SearchColumnStringField[]",
		"storeDisplayThumbnail" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"subType" => "SearchColumnEnumSelectField[]",
		"supplyLotSizingMethod" => "SearchColumnEnumSelectField[]",
		"supplyReplenishmentMethod" => "SearchColumnEnumSelectField[]",
		"supplyTimeFence" => "SearchColumnLongField[]",
		"supplyType" => "SearchColumnEnumSelectField[]",
		"taxSchedule" => "SearchColumnSelectField[]",
		"thumbNailUrl" => "SearchColumnStringField[]",
		"totalValue" => "SearchColumnDoubleField[]",
		"trackLandedCost" => "SearchColumnBooleanField[]",
		"transferPrice" => "SearchColumnDoubleField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"unbuildVarianceAccount" => "SearchColumnSelectField[]",
		"unitsType" => "SearchColumnSelectField[]",
		"upcCode" => "SearchColumnStringField[]",
		"urlComponent" => "SearchColumnStringField[]",
		"useBins" => "SearchColumnBooleanField[]",
		"useComponentYield" => "SearchColumnBooleanField[]",
		"useMarginalRates" => "SearchColumnBooleanField[]",
		"vendor" => "SearchColumnSelectField[]",
		"vendorCode" => "SearchColumnStringField[]",
		"vendorCost" => "SearchColumnDoubleField[]",
		"vendorCostEntered" => "SearchColumnDoubleField[]",
		"vendorName" => "SearchColumnStringField[]",
		"vendorPriceCurrency" => "SearchColumnStringField[]",
		"vendorSchedule" => "SearchColumnSelectField[]",
		"vendReturnVarianceAccount" => "SearchColumnSelectField[]",
		"vsoeDeferral" => "SearchColumnEnumSelectField[]",
		"vsoeDelivered" => "SearchColumnBooleanField[]",
		"vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
		"vsoePrice" => "SearchColumnDoubleField[]",
		"webSite" => "SearchColumnSelectField[]",
		"weight" => "SearchColumnDoubleField[]",
		"weightUnit" => "SearchColumnEnumSelectField[]",
		"wipAcct" => "SearchColumnSelectField[]",
		"wipVarianceAcct" => "SearchColumnSelectField[]",
		"yahooProductFeed" => "SearchColumnBooleanField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("PartnerSearchBasic")) {
/**
 * PartnerSearchBasic
 */
class PartnerSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $assignTasks;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $commissionPlan;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $otherRelationships;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $partnerCode;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $URL;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"assignTasks" => "SearchBooleanField",
		"attention" => "SearchStringField",
		"billAddress" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"class" => "SearchMultiSelectField",
		"comments" => "SearchStringField",
		"commissionPlan" => "SearchMultiSelectField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"dateCreated" => "SearchDateField",
		"department" => "SearchMultiSelectField",
		"eligibleForCommission" => "SearchBooleanField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"entityId" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"firstName" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"level" => "SearchEnumMultiSelectField",
		"location" => "SearchMultiSelectField",
		"middleName" => "SearchStringField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"partnerCode" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"promoCode" => "SearchMultiSelectField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"URL" => "SearchStringField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("PartnerSearchRowBasic")) {
/**
 * PartnerSearchRowBasic
 */
class PartnerSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $assignTasks;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $partnerCode;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"assignTasks" => "SearchColumnBooleanField[]",
		"attention" => "SearchColumnStringField[]",
		"billAddress" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"category" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"comments" => "SearchColumnStringField[]",
		"companyName" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"eligibleForCommission" => "SearchColumnBooleanField[]",
		"email" => "SearchColumnStringField[]",
		"emailPreference" => "SearchColumnEnumSelectField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"firstName" => "SearchColumnStringField[]",
		"giveAccess" => "SearchColumnBooleanField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"hasDuplicates" => "SearchColumnBooleanField[]",
		"homePhone" => "SearchColumnStringField[]",
		"image" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPerson" => "SearchColumnBooleanField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastName" => "SearchColumnStringField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"middleName" => "SearchColumnStringField[]",
		"mobilePhone" => "SearchColumnStringField[]",
		"parent" => "SearchColumnSelectField[]",
		"partnerCode" => "SearchColumnStringField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"promoCode" => "SearchColumnStringField[]",
		"salutation" => "SearchColumnStringField[]",
		"shipAddress" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"url" => "SearchColumnStringField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("VendorSearchBasic")) {
/**
 * VendorSearchBasic
 */
class VendorSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $currentExchangeRate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxUnbilledOrders;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $incoterm;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $is1099Eligible;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isJobResourceVend;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $laborCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $otherRelationships;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payablesAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pec;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $taxIdNum;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchStringField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"balance" => "SearchDoubleField",
		"billAddress" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"contact" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"creditLimit" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"currentExchangeRate" => "SearchDoubleField",
		"dateCreated" => "SearchDateField",
		"eligibleForCommission" => "SearchBooleanField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"emailTransactions" => "SearchBooleanField",
		"entityId" => "SearchStringField",
		"expenseAccount" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"faxTransactions" => "SearchBooleanField",
		"firstName" => "SearchStringField",
		"fxBalance" => "SearchDoubleField",
		"fxUnbilledOrders" => "SearchDoubleField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"incoterm" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"is1099Eligible" => "SearchBooleanField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isJobResourceVend" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"laborCost" => "SearchDoubleField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"level" => "SearchEnumMultiSelectField",
		"middleName" => "SearchStringField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"payablesAccount" => "SearchMultiSelectField",
		"pec" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"printTransactions" => "SearchBooleanField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"state" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"taxIdNum" => "SearchStringField",
		"title" => "SearchStringField",
		"unbilledOrders" => "SearchDoubleField",
		"url" => "SearchStringField",
		"vatRegNumber" => "SearchStringField",
		"workCalendar" => "SearchMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("VendorSearchRowBasic")) {
/**
 * VendorSearchRowBasic
 */
class VendorSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altContact;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $currentExchangeRate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $eligibleForCommission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxUnbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $incoterm;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $is1099Eligible;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isJobResourceVend;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $laborCost;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $payablesAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pec;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $printOnCheckAs;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $taxIdNum;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchColumnStringField[]",
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"altContact" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"balance" => "SearchColumnDoubleField[]",
		"billAddress" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"city" => "SearchColumnStringField[]",
		"comments" => "SearchColumnStringField[]",
		"companyName" => "SearchColumnStringField[]",
		"contact" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"creditLimit" => "SearchColumnDoubleField[]",
		"currency" => "SearchColumnSelectField[]",
		"currentExchangeRate" => "SearchColumnDoubleField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"eligibleForCommission" => "SearchColumnBooleanField[]",
		"email" => "SearchColumnStringField[]",
		"emailPreference" => "SearchColumnEnumSelectField[]",
		"emailTransactions" => "SearchColumnBooleanField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"expenseAccount" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"faxTransactions" => "SearchColumnBooleanField[]",
		"firstName" => "SearchColumnStringField[]",
		"fxBalance" => "SearchColumnDoubleField[]",
		"fxUnbilledOrders" => "SearchColumnDoubleField[]",
		"giveAccess" => "SearchColumnBooleanField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"hasDuplicates" => "SearchColumnBooleanField[]",
		"homePhone" => "SearchColumnStringField[]",
		"image" => "SearchColumnSelectField[]",
		"incoterm" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"is1099Eligible" => "SearchColumnBooleanField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isJobResourceVend" => "SearchColumnBooleanField[]",
		"isPerson" => "SearchColumnBooleanField[]",
		"laborCost" => "SearchColumnDoubleField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastName" => "SearchColumnStringField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"middleName" => "SearchColumnStringField[]",
		"mobilePhone" => "SearchColumnStringField[]",
		"payablesAccount" => "SearchColumnSelectField[]",
		"pec" => "SearchColumnStringField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"printOnCheckAs" => "SearchColumnStringField[]",
		"printTransactions" => "SearchColumnBooleanField[]",
		"purchaseOrderAmount" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantity" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
		"receiptAmount" => "SearchColumnDoubleField[]",
		"receiptQuantity" => "SearchColumnDoubleField[]",
		"receiptQuantityDiff" => "SearchColumnDoubleField[]",
		"salutation" => "SearchColumnStringField[]",
		"shipAddress" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"state" => "SearchColumnStringField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"taxIdNum" => "SearchColumnStringField[]",
		"terms" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"unbilledOrders" => "SearchColumnDoubleField[]",
		"url" => "SearchColumnStringField[]",
		"vatRegNumber" => "SearchColumnStringField[]",
		"workCalendar" => "SearchColumnSelectField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("SiteCategorySearchBasic")) {
/**
 * SiteCategorySearchBasic
 */
class SiteCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $sitemapPriority;

	static $paramtypesmap = array(
		"dateViewed" => "SearchDateField",
		"description" => "SearchStringField",
		"excludeFromSitemap" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"name" => "SearchMultiSelectField",
		"sitemapPriority" => "SearchEnumMultiSelectField",
	);
}}

if (!class_exists("SiteCategorySearchRowBasic")) {
/**
 * SiteCategorySearchRowBasic
 */
class SiteCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $excludeFromSitemap;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fullName;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hidden;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $hits;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $longDescription;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pageTitle;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $sitemapPriority;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $urlComponent;

	static $paramtypesmap = array(
		"dateViewed" => "SearchColumnDateField[]",
		"description" => "SearchColumnStringField[]",
		"excludeFromSitemap" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fullName" => "SearchColumnStringField[]",
		"hidden" => "SearchColumnBooleanField[]",
		"hits" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"longDescription" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"pageTitle" => "SearchColumnStringField[]",
		"sitemapPriority" => "SearchColumnEnumSelectField[]",
		"urlComponent" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("TimeBillSearchBasic")) {
/**
 * TimeBillSearchBasic
 */
class TimeBillSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $approved;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $billable;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $date;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $duration;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $exempt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paidByPayroll;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $paidExternally;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $payItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $productive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $temporaryLocalJurisdiction;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $temporaryStateJurisdiction;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $utilized;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"approved" => "SearchBooleanField",
		"billable" => "SearchBooleanField",
		"class" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"date" => "SearchDateField",
		"dateCreated" => "SearchDateField",
		"department" => "SearchMultiSelectField",
		"duration" => "SearchDoubleField",
		"employee" => "SearchMultiSelectField",
		"exempt" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModified" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"paidByPayroll" => "SearchBooleanField",
		"paidExternally" => "SearchBooleanField",
		"payItem" => "SearchMultiSelectField",
		"productive" => "SearchBooleanField",
		"status" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"temporaryLocalJurisdiction" => "SearchMultiSelectField",
		"temporaryStateJurisdiction" => "SearchMultiSelectField",
		"type" => "SearchEnumMultiSelectField",
		"utilized" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("TimeBillSearchRowBasic")) {
/**
 * TimeBillSearchRowBasic
 */
class TimeBillSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $break;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $date;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $durationDecimal;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $employee;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endTime;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $hours;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isExempt;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isProductive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isUtilized;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModified;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $paidExternally;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $payItem;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $payrollDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $rate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startTime;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $supervisorApproval;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $temporaryLocalJurisdiction;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $temporaryStateJurisdiction;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"break" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"date" => "SearchColumnDateField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"durationDecimal" => "SearchColumnDoubleField[]",
		"employee" => "SearchColumnSelectField[]",
		"endTime" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"hours" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isBillable" => "SearchColumnBooleanField[]",
		"isExempt" => "SearchColumnBooleanField[]",
		"isProductive" => "SearchColumnBooleanField[]",
		"isUtilized" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnStringField[]",
		"lastModified" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"paidExternally" => "SearchColumnBooleanField[]",
		"payItem" => "SearchColumnSelectField[]",
		"payrollDate" => "SearchColumnDateField[]",
		"rate" => "SearchColumnDoubleField[]",
		"startTime" => "SearchColumnDateField[]",
		"status" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnStringField[]",
		"supervisorApproval" => "SearchColumnBooleanField[]",
		"temporaryLocalJurisdiction" => "SearchColumnStringField[]",
		"temporaryStateJurisdiction" => "SearchColumnStringField[]",
		"type" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("SolutionSearchBasic")) {
/**
 * SolutionSearchBasic
 */
class SolutionSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $abstract;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $caseCount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $find;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $topic;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"abstract" => "SearchStringField",
		"assigned" => "SearchMultiSelectField",
		"caseCount" => "SearchLongField",
		"code" => "SearchStringField",
		"createdDate" => "SearchDateField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"find" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOnline" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"number" => "SearchLongField",
		"status" => "SearchEnumMultiSelectField",
		"title" => "SearchStringField",
		"topic" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("SolutionSearchRowBasic")) {
/**
 * SolutionSearchRowBasic
 */
class SolutionSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $caseCount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $displayOnline;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $previewref;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $solutionCode;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"assigned" => "SearchColumnSelectField[]",
		"caseCount" => "SearchColumnLongField[]",
		"createdDate" => "SearchColumnDateField[]",
		"description" => "SearchColumnStringField[]",
		"displayOnline" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"message" => "SearchColumnStringField[]",
		"previewref" => "SearchColumnStringField[]",
		"solutionCode" => "SearchColumnStringField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("TopicSearchBasic")) {
/**
 * TopicSearchBasic
 */
class TopicSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("TopicSearchRowBasic")) {
/**
 * TopicSearchRowBasic
 */
class TopicSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("SubsidiarySearchBasic")) {
/**
 * SubsidiarySearchBasic
 */
class SubsidiarySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $accountingBookCurrency;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isElimination;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $legalName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $taxIdNum;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"accountingBookCurrency" => "SearchMultiSelectField",
		"address" => "SearchStringField",
		"city" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"email" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isElimination" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"legalName" => "SearchStringField",
		"name" => "SearchStringField",
		"nameNoHierarchy" => "SearchStringField",
		"phone" => "SearchStringField",
		"purchaseOrderAmount" => "SearchDoubleField",
		"purchaseOrderQuantity" => "SearchDoubleField",
		"purchaseOrderQuantityDiff" => "SearchDoubleField",
		"receiptAmount" => "SearchDoubleField",
		"receiptQuantity" => "SearchDoubleField",
		"receiptQuantityDiff" => "SearchDoubleField",
		"state" => "SearchStringField",
		"taxIdNum" => "SearchStringField",
		"tranPrefix" => "SearchStringField",
		"url" => "SearchStringField",
		"zip" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("SubsidiarySearchRowBasic")) {
/**
 * SubsidiarySearchRowBasic
 */
class SubsidiarySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBook;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $accountingBookCurrency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $anonymousCustomerInboundEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $anonymousCustomerOnlineForms;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseAssignmentTemplate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseAutomaticClosureTemplate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseCopyEmployeeTemplate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseCreationTemplate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseEscalationTemplate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseUpdateTemplate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $companyNameForSupportMessages;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $employeeCaseUpdateTemplate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isElimination;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $legalName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mainSupportEmailAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $nameNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $purchaseOrderQuantityDiff;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptAmount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $receiptQuantityDiff;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $taxIdNum;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $tranPrefix;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zip;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnSelectField[]",
		"accountingBookCurrency" => "SearchColumnSelectField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"anonymousCustomerInboundEmail" => "SearchColumnStringField[]",
		"anonymousCustomerOnlineForms" => "SearchColumnStringField[]",
		"caseAssignmentTemplate" => "SearchColumnStringField[]",
		"caseAutomaticClosureTemplate" => "SearchColumnStringField[]",
		"caseCopyEmployeeTemplate" => "SearchColumnStringField[]",
		"caseCreationTemplate" => "SearchColumnStringField[]",
		"caseEscalationTemplate" => "SearchColumnStringField[]",
		"caseUpdateTemplate" => "SearchColumnStringField[]",
		"city" => "SearchColumnStringField[]",
		"companyNameForSupportMessages" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"currency" => "SearchColumnSelectField[]",
		"email" => "SearchColumnStringField[]",
		"employeeCaseUpdateTemplate" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"fax" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isElimination" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"legalName" => "SearchColumnStringField[]",
		"mainSupportEmailAddress" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"nameNoHierarchy" => "SearchColumnStringField[]",
		"phone" => "SearchColumnStringField[]",
		"purchaseOrderAmount" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantity" => "SearchColumnDoubleField[]",
		"purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
		"receiptAmount" => "SearchColumnDoubleField[]",
		"receiptQuantity" => "SearchColumnDoubleField[]",
		"receiptQuantityDiff" => "SearchColumnDoubleField[]",
		"state" => "SearchColumnStringField[]",
		"taxIdNum" => "SearchColumnStringField[]",
		"tranPrefix" => "SearchColumnStringField[]",
		"url" => "SearchColumnStringField[]",
		"zip" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("GiftCertificateSearchBasic")) {
/**
 * GiftCertificateSearchBasic
 */
class GiftCertificateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountAvailableBilled;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $giftCertCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $incomeAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isActive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $originalAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $purchaseDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $sender;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amountAvailableBilled" => "SearchDoubleField",
		"amountRemaining" => "SearchDoubleField",
		"createdDate" => "SearchDateField",
		"email" => "SearchStringField",
		"expirationDate" => "SearchDateField",
		"giftCertCode" => "SearchStringField",
		"incomeAccount" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isActive" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"liabilityAccount" => "SearchMultiSelectField",
		"message" => "SearchStringField",
		"name" => "SearchStringField",
		"originalAmount" => "SearchDoubleField",
		"purchaseDate" => "SearchDateField",
		"sender" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("GiftCertificateSearchRowBasic")) {
/**
 * GiftCertificateSearchRowBasic
 */
class GiftCertificateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amountRemaining;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amtAvailBilled;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $gcActive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $giftCertCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $incomeAcct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $liabilityAcct;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $originalAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $purchaseDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $sender;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"amountRemaining" => "SearchColumnDoubleField[]",
		"amtAvailBilled" => "SearchColumnDoubleField[]",
		"createdDate" => "SearchColumnDateField[]",
		"email" => "SearchColumnStringField[]",
		"expirationDate" => "SearchColumnDateField[]",
		"gcActive" => "SearchColumnBooleanField[]",
		"giftCertCode" => "SearchColumnStringField[]",
		"incomeAcct" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"liabilityAcct" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"originalAmount" => "SearchColumnDoubleField[]",
		"purchaseDate" => "SearchColumnDateField[]",
		"sender" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("FolderSearchBasic")) {
/**
 * FolderSearchBasic
 */
class FolderSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTopLevel;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $numFiles;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $private;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $size;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;

	static $paramtypesmap = array(
		"class" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"group" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isTopLevel" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"numFiles" => "SearchLongField",
		"owner" => "SearchMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"predecessor" => "SearchMultiSelectField",
		"private" => "SearchBooleanField",
		"size" => "SearchLongField",
		"subsidiary" => "SearchMultiSelectField",
	);
}}

if (!class_exists("FolderSearchRowBasic")) {
/**
 * FolderSearchRowBasic
 */
class FolderSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $folderSize;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $numFiles;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;

	static $paramtypesmap = array(
		"class" => "SearchColumnSelectField[]",
		"department" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"folderSize" => "SearchColumnLongField[]",
		"group" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"numFiles" => "SearchColumnLongField[]",
		"owner" => "SearchColumnSelectField[]",
		"parent" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
	);
}}

if (!class_exists("FileSearchBasic")) {
/**
 * FileSearchBasic
 */
class FileSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableWithoutLogin;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $documentSize;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $fileType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $folder;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isAvailable;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isLink;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $modified;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;

	static $paramtypesmap = array(
		"availableWithoutLogin" => "SearchBooleanField",
		"created" => "SearchDateField",
		"dateViewed" => "SearchDateField",
		"description" => "SearchStringField",
		"documentSize" => "SearchLongField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fileType" => "SearchEnumMultiSelectField",
		"folder" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isAvailable" => "SearchBooleanField",
		"isLink" => "SearchBooleanField",
		"modified" => "SearchDateField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"url" => "SearchStringField",
	);
}}

if (!class_exists("FileSearchRowBasic")) {
/**
 * FileSearchRowBasic
 */
class FileSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableWithoutLogin;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $created;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateViewed;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $documentSize;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $fileType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $folder;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $hits;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $hostedPath;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isAvailable;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $modified;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $url;

	static $paramtypesmap = array(
		"availableWithoutLogin" => "SearchColumnBooleanField[]",
		"created" => "SearchColumnDateField[]",
		"dateViewed" => "SearchColumnDateField[]",
		"description" => "SearchColumnStringField[]",
		"documentSize" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnStringField[]",
		"fileType" => "SearchColumnEnumSelectField[]",
		"folder" => "SearchColumnSelectField[]",
		"hits" => "SearchColumnLongField[]",
		"hostedPath" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isAvailable" => "SearchColumnBooleanField[]",
		"modified" => "SearchColumnDateField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"url" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("JobSearchBasic")) {
/**
 * JobSearchBasic
 */
class JobSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualTime;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allocatePayrollExpenses;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowAllResourcesForTasks;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowExpenses;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $applyProjectExpenseTypeToAll;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $calculatedEndDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $calculatedEndDateBaseline;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estCost;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $estEndDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedGrossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedGrossProfitPercent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedLaborCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedLaborCostBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedLaborRevenue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTimeOverride;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedTimeOverrideBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estRevenue;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $includeCrmTasksInTotals;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isExemptTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isProductiveTime;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isUtilizedTime;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $jobBillingType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jobItem;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $jobPrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jobResource;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $jobResourceRole;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastBaselineDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $limitTimeToAssignees;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $materializeTime;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $pctComplete;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $projectedEndDateBaseline;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $projectExpenseType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $revRecForecastRule;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDateBaseline;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $timeRemaining;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $usePercentCompleteOverride;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchStringField",
		"actualTime" => "SearchDoubleField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"allocatePayrollExpenses" => "SearchBooleanField",
		"allowAllResourcesForTasks" => "SearchBooleanField",
		"allowExpenses" => "SearchBooleanField",
		"allowTime" => "SearchBooleanField",
		"applyProjectExpenseTypeToAll" => "SearchBooleanField",
		"attention" => "SearchStringField",
		"billingSchedule" => "SearchMultiSelectField",
		"calculatedEndDate" => "SearchDateField",
		"calculatedEndDateBaseline" => "SearchDateField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"contact" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"customer" => "SearchMultiSelectField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"endDate" => "SearchDateField",
		"entityId" => "SearchStringField",
		"estCost" => "SearchDoubleField",
		"estEndDate" => "SearchDateField",
		"estimatedGrossProfit" => "SearchDoubleField",
		"estimatedGrossProfitPercent" => "SearchDoubleField",
		"estimatedLaborCost" => "SearchDoubleField",
		"estimatedLaborCostBaseline" => "SearchDoubleField",
		"estimatedLaborRevenue" => "SearchDoubleField",
		"estimatedTime" => "SearchDoubleField",
		"estimatedTimeOverride" => "SearchDoubleField",
		"estimatedTimeOverrideBaseline" => "SearchDoubleField",
		"estRevenue" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"image" => "SearchStringField",
		"includeCrmTasksInTotals" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isExemptTime" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isProductiveTime" => "SearchBooleanField",
		"isUtilizedTime" => "SearchBooleanField",
		"jobBillingType" => "SearchEnumMultiSelectField",
		"jobItem" => "SearchMultiSelectField",
		"jobPrice" => "SearchDoubleField",
		"jobResource" => "SearchMultiSelectField",
		"jobResourceRole" => "SearchMultiSelectField",
		"language" => "SearchEnumMultiSelectField",
		"lastBaselineDate" => "SearchDateField",
		"lastModifiedDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"limitTimeToAssignees" => "SearchBooleanField",
		"materializeTime" => "SearchBooleanField",
		"parent" => "SearchMultiSelectField",
		"pctComplete" => "SearchLongField",
		"percentTimeComplete" => "SearchLongField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"projectedEndDateBaseline" => "SearchDateField",
		"projectExpenseType" => "SearchMultiSelectField",
		"revRecForecastRule" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"startDateBaseline" => "SearchDateField",
		"state" => "SearchStringField",
		"status" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"timeRemaining" => "SearchDoubleField",
		"type" => "SearchMultiSelectField",
		"usePercentCompleteOverride" => "SearchBooleanField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("JobSearchRowBasic")) {
/**
 * JobSearchRowBasic
 */
class JobSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualTime;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $allocatePayrollExpenses;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $allowAllResourcesForTasks;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $allowExpenses;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $allowTime;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altContact;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $billingSchedule;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $calculatedEndDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $calculatedEndDateBaseline;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedCost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedGrossProfit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedGrossProfitPercent;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedLaborCost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedLaborCostBaseline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedLaborRevenue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedRevenue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedTimeOverride;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedTimeOverrideBaseline;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $includeCrmTasksInTotals;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isExemptTime;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isProductiveTime;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isUtilizedTime;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $jobBillingType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $jobItem;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $jobPrice;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $jobResource;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $jobResourceRole;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastBaselineDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $limitTimeToAssignees;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $materializeTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $percentComplete;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $percentTimeComplete;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $projectedEndDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $projectedEndDateBaseline;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $projectExpenseType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $revRecForecastRule;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDateBaseline;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $timeRemaining;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $usePercentCompleteOverride;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchColumnStringField[]",
		"actualTime" => "SearchColumnDoubleField[]",
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"allocatePayrollExpenses" => "SearchColumnBooleanField[]",
		"allowAllResourcesForTasks" => "SearchColumnBooleanField[]",
		"allowExpenses" => "SearchColumnBooleanField[]",
		"allowTime" => "SearchColumnBooleanField[]",
		"altContact" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billingSchedule" => "SearchColumnSelectField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"calculatedEndDate" => "SearchColumnDateField[]",
		"calculatedEndDateBaseline" => "SearchColumnDateField[]",
		"category" => "SearchColumnSelectField[]",
		"city" => "SearchColumnStringField[]",
		"comments" => "SearchColumnStringField[]",
		"companyName" => "SearchColumnStringField[]",
		"contact" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"customer" => "SearchColumnSelectField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"email" => "SearchColumnStringField[]",
		"endDate" => "SearchColumnDateField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"entityStatus" => "SearchColumnSelectField[]",
		"estimatedCost" => "SearchColumnDoubleField[]",
		"estimatedGrossProfit" => "SearchColumnDoubleField[]",
		"estimatedGrossProfitPercent" => "SearchColumnDoubleField[]",
		"estimatedLaborCost" => "SearchColumnDoubleField[]",
		"estimatedLaborCostBaseline" => "SearchColumnDoubleField[]",
		"estimatedLaborRevenue" => "SearchColumnDoubleField[]",
		"estimatedRevenue" => "SearchColumnDoubleField[]",
		"estimatedTime" => "SearchColumnDoubleField[]",
		"estimatedTimeOverride" => "SearchColumnDoubleField[]",
		"estimatedTimeOverrideBaseline" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnStringField[]",
		"fax" => "SearchColumnStringField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"image" => "SearchColumnSelectField[]",
		"includeCrmTasksInTotals" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isExemptTime" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isProductiveTime" => "SearchColumnBooleanField[]",
		"isUtilizedTime" => "SearchColumnBooleanField[]",
		"jobBillingType" => "SearchColumnEnumSelectField[]",
		"jobItem" => "SearchColumnSelectField[]",
		"jobPrice" => "SearchColumnDoubleField[]",
		"jobResource" => "SearchColumnSelectField[]",
		"jobResourceRole" => "SearchColumnSelectField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastBaselineDate" => "SearchColumnDateField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"limitTimeToAssignees" => "SearchColumnBooleanField[]",
		"materializeTime" => "SearchColumnBooleanField[]",
		"percentComplete" => "SearchColumnDoubleField[]",
		"percentTimeComplete" => "SearchColumnDoubleField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"projectedEndDate" => "SearchColumnDateField[]",
		"projectedEndDateBaseline" => "SearchColumnDateField[]",
		"projectExpenseType" => "SearchColumnSelectField[]",
		"revRecForecastRule" => "SearchColumnSelectField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"startDateBaseline" => "SearchColumnDateField[]",
		"state" => "SearchColumnStringField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"timeRemaining" => "SearchColumnDoubleField[]",
		"usePercentCompleteOverride" => "SearchColumnBooleanField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("IssueSearchBasic")) {
/**
 * IssueSearchBasic
 */
class IssueSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $ageInMonths;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buildBroken;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $buildBrokenName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buildFixed;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $buildFixedName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buildTarget;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $buildTargetName;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $caseCount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $caseNumber;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closedDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateReleased;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $details;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $duplicateOf;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $eFix;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $employeeOrTeam;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $eventStatus;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalAbstract;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalDetails;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalFixedIn;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $fixed;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fixedBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOwner;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isReviewed;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isShowStopper;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $issueAbstract;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $issueNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $module;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $originalFixedIn;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $product;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $productTeam;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $relatedIssue;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $relationship;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $relationshipComment;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $reportedBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $reproduce;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $resolved;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resolvedBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $reviewer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $severity;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $source;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $tags;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $tracking;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $userType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $versionBroken;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $versionFixed;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $versionTarget;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"ageInMonths" => "SearchLongField",
		"assigned" => "SearchMultiSelectField",
		"buildBroken" => "SearchMultiSelectField",
		"buildBrokenName" => "SearchStringField",
		"buildFixed" => "SearchMultiSelectField",
		"buildFixedName" => "SearchStringField",
		"buildTarget" => "SearchMultiSelectField",
		"buildTargetName" => "SearchStringField",
		"caseCount" => "SearchLongField",
		"caseNumber" => "SearchStringField",
		"closedDate" => "SearchDateField",
		"createdDate" => "SearchDateField",
		"dateReleased" => "SearchDateField",
		"details" => "SearchStringField",
		"duplicateOf" => "SearchMultiSelectField",
		"eFix" => "SearchBooleanField",
		"employeeOrTeam" => "SearchMultiSelectField",
		"eventStatus" => "SearchEnumMultiSelectField",
		"externalAbstract" => "SearchStringField",
		"externalDetails" => "SearchStringField",
		"externalFixedIn" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"externalStatus" => "SearchMultiSelectField",
		"fixed" => "SearchDateField",
		"fixedBy" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isOwner" => "SearchBooleanField",
		"isReviewed" => "SearchBooleanField",
		"isShowStopper" => "SearchBooleanField",
		"issueAbstract" => "SearchStringField",
		"issueNumber" => "SearchStringField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"module" => "SearchMultiSelectField",
		"number" => "SearchLongField",
		"originalFixedIn" => "SearchStringField",
		"priority" => "SearchMultiSelectField",
		"product" => "SearchMultiSelectField",
		"productTeam" => "SearchMultiSelectField",
		"relatedIssue" => "SearchMultiSelectField",
		"relationship" => "SearchEnumMultiSelectField",
		"relationshipComment" => "SearchStringField",
		"reportedBy" => "SearchMultiSelectField",
		"reproduce" => "SearchMultiSelectField",
		"resolved" => "SearchDateField",
		"resolvedBy" => "SearchMultiSelectField",
		"reviewer" => "SearchMultiSelectField",
		"severity" => "SearchMultiSelectField",
		"source" => "SearchEnumMultiSelectField",
		"status" => "SearchMultiSelectField",
		"tags" => "SearchMultiSelectField",
		"tracking" => "SearchBooleanField",
		"type" => "SearchMultiSelectField",
		"userType" => "SearchMultiSelectField",
		"versionBroken" => "SearchMultiSelectField",
		"versionFixed" => "SearchMultiSelectField",
		"versionTarget" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("IssueSearchRowBasic")) {
/**
 * IssueSearchRowBasic
 */
class IssueSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $ageInMonths;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $assigned;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $buildBroken;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $buildFixed;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $buildTarget;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $caseCount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $caseNumber;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $closedDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateReleased;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $duplicateOf;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $employeeOrTeam;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $eventStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalAbstract;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalDetails;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalFixedIn;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalStatus;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $fixed;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $fixedBy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isOwner;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isReviewed;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isShowStopper;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $issueAbstract;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $issueStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $module;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $originalFixedIn;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $product;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $productTeam;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $relatedIssue;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $relationship;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $relationshipComment;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $reportedBy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $reproduce;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $resolved;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $resolvedBy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $reviewer;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $severity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $source;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $tags;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $type;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $userType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $versionBroken;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $versionFixed;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $versionTarget;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"ageInMonths" => "SearchColumnLongField[]",
		"assigned" => "SearchColumnSelectField[]",
		"buildBroken" => "SearchColumnSelectField[]",
		"buildFixed" => "SearchColumnSelectField[]",
		"buildTarget" => "SearchColumnSelectField[]",
		"caseCount" => "SearchColumnLongField[]",
		"caseNumber" => "SearchColumnStringField[]",
		"closedDate" => "SearchColumnDateField[]",
		"createdDate" => "SearchColumnDateField[]",
		"dateReleased" => "SearchColumnDateField[]",
		"duplicateOf" => "SearchColumnSelectField[]",
		"employeeOrTeam" => "SearchColumnSelectField[]",
		"eventStatus" => "SearchColumnEnumSelectField[]",
		"externalAbstract" => "SearchColumnStringField[]",
		"externalDetails" => "SearchColumnStringField[]",
		"externalFixedIn" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"externalStatus" => "SearchColumnSelectField[]",
		"fixed" => "SearchColumnDateField[]",
		"fixedBy" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isOwner" => "SearchColumnBooleanField[]",
		"isReviewed" => "SearchColumnBooleanField[]",
		"isShowStopper" => "SearchColumnBooleanField[]",
		"issueAbstract" => "SearchColumnStringField[]",
		"issueStatus" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"module" => "SearchColumnStringField[]",
		"number" => "SearchColumnStringField[]",
		"originalFixedIn" => "SearchColumnStringField[]",
		"priority" => "SearchColumnSelectField[]",
		"product" => "SearchColumnSelectField[]",
		"productTeam" => "SearchColumnSelectField[]",
		"relatedIssue" => "SearchColumnSelectField[]",
		"relationship" => "SearchColumnEnumSelectField[]",
		"relationshipComment" => "SearchColumnStringField[]",
		"reportedBy" => "SearchColumnSelectField[]",
		"reproduce" => "SearchColumnSelectField[]",
		"resolved" => "SearchColumnDateField[]",
		"resolvedBy" => "SearchColumnSelectField[]",
		"reviewer" => "SearchColumnSelectField[]",
		"severity" => "SearchColumnSelectField[]",
		"source" => "SearchColumnEnumSelectField[]",
		"tags" => "SearchColumnSelectField[]",
		"type" => "SearchColumnStringField[]",
		"userType" => "SearchColumnSelectField[]",
		"versionBroken" => "SearchColumnSelectField[]",
		"versionFixed" => "SearchColumnSelectField[]",
		"versionTarget" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("GroupMemberSearchBasic")) {
/**
 * GroupMemberSearchBasic
 */
class GroupMemberSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupId;

	static $paramtypesmap = array(
		"groupId" => "SearchMultiSelectField",
	);
}}

if (!class_exists("CampaignSearchBasic")) {
/**
 * CampaignSearchBasic
 */
class CampaignSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $audience;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $baseCost;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $campaignEventType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $campaignId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $channel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $event;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $expectedRevenue;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $family;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSalesCampaign;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $keyword;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manager;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $managerRole;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $number;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $offer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $response;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $responseCategory;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $responseCode;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $responseComments;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $responseDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $scheduleDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $searchEngine;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $template;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vertical;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"audience" => "SearchMultiSelectField",
		"baseCost" => "SearchDoubleField",
		"campaignEventType" => "SearchEnumMultiSelectField",
		"campaignId" => "SearchStringField",
		"category" => "SearchMultiSelectField",
		"channel" => "SearchMultiSelectField",
		"cost" => "SearchDoubleField",
		"createdDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"event" => "SearchStringField",
		"expectedRevenue" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"family" => "SearchMultiSelectField",
		"group" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isSalesCampaign" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"keyword" => "SearchStringField",
		"lastModifiedDate" => "SearchDateField",
		"manager" => "SearchMultiSelectField",
		"managerRole" => "SearchMultiSelectField",
		"number" => "SearchLongField",
		"offer" => "SearchMultiSelectField",
		"promoCode" => "SearchMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"response" => "SearchEnumMultiSelectField",
		"responseCategory" => "SearchEnumMultiSelectField",
		"responseCode" => "SearchLongField",
		"responseComments" => "SearchStringField",
		"responseDate" => "SearchDateField",
		"scheduleDate" => "SearchDateField",
		"searchEngine" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"status" => "SearchEnumMultiSelectField",
		"subscription" => "SearchMultiSelectField",
		"template" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"vertical" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("CampaignSearchRowBasic")) {
/**
 * CampaignSearchRowBasic
 */
class CampaignSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $audience;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $baseCost;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $campaignId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $channel;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $event;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $executedDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $expectedRevenue;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $family;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSalesCampaign;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $keyword;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $managerRole;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $offer;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $promoCode;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $response;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $responseCategory;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $responseCode;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $responseDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $responseNotes;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $revenue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $roi;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $scheduledDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $searchEngine;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $vertical;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"audience" => "SearchColumnSelectField[]",
		"baseCost" => "SearchColumnDoubleField[]",
		"campaignId" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"channel" => "SearchColumnSelectField[]",
		"cost" => "SearchColumnDoubleField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"event" => "SearchColumnStringField[]",
		"executedDate" => "SearchColumnDateField[]",
		"expectedRevenue" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"family" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isSalesCampaign" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"keyword" => "SearchColumnStringField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"managerRole" => "SearchColumnSelectField[]",
		"message" => "SearchColumnStringField[]",
		"offer" => "SearchColumnSelectField[]",
		"owner" => "SearchColumnSelectField[]",
		"promoCode" => "SearchColumnStringField[]",
		"recipient" => "SearchColumnSelectField[]",
		"response" => "SearchColumnEnumSelectField[]",
		"responseCategory" => "SearchColumnEnumSelectField[]",
		"responseCode" => "SearchColumnLongField[]",
		"responseDate" => "SearchColumnDateField[]",
		"responseNotes" => "SearchColumnStringField[]",
		"revenue" => "SearchColumnDoubleField[]",
		"roi" => "SearchColumnDoubleField[]",
		"scheduledDate" => "SearchColumnDateField[]",
		"searchEngine" => "SearchColumnSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"subscription" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"url" => "SearchColumnStringField[]",
		"vertical" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("EntityGroupSearchBasic")) {
/**
 * EntityGroupSearchBasic
 */
class EntityGroupSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $groupName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupOwner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDynamic;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isManufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"email" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"groupName" => "SearchStringField",
		"groupOwner" => "SearchMultiSelectField",
		"groupType" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDynamic" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isManufacturingWorkCenter" => "SearchBooleanField",
		"isPrivate" => "SearchBooleanField",
		"laborResources" => "SearchLongField",
		"lastModifiedDate" => "SearchDateField",
		"machineResources" => "SearchLongField",
		"subsidiary" => "SearchMultiSelectField",
		"workCalendar" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("EntityGroupSearchRowBasic")) {
/**
 * EntityGroupSearchRowBasic
 */
class EntityGroupSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $groupName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $groupType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDynamic;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isManufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPrivate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $savedSearch;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $size;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $workCalendar;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"email" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"groupName" => "SearchColumnStringField[]",
		"groupType" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDynamic" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isManufacturingWorkCenter" => "SearchColumnBooleanField[]",
		"isPrivate" => "SearchColumnBooleanField[]",
		"laborResources" => "SearchColumnLongField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"machineResources" => "SearchColumnLongField[]",
		"owner" => "SearchColumnSelectField[]",
		"savedSearch" => "SearchColumnStringField[]",
		"size" => "SearchColumnLongField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"workCalendar" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("PromotionCodeSearchBasic")) {
/**
 * PromotionCodeSearchBasic
 */
class PromotionCodeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $applyDiscountTo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $discount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $freeShipItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"applyDiscountTo" => "SearchEnumMultiSelectField",
		"code" => "SearchStringField",
		"description" => "SearchStringField",
		"discount" => "SearchMultiSelectField",
		"discountAmount" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"freeShipItem" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isPublic" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"partner" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("PromotionCodeSearchRowBasic")) {
/**
 * PromotionCodeSearchRowBasic
 */
class PromotionCodeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $discount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $discountAmount;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPublic;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"code" => "SearchColumnStringField[]",
		"description" => "SearchColumnStringField[]",
		"discount" => "SearchColumnStringField[]",
		"discountAmount" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPublic" => "SearchColumnBooleanField[]",
		"location" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("BudgetSearchBasic")) {
/**
 * BudgetSearchBasic
 */
class BudgetSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $global;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $year;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $year2;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"amount" => "SearchDoubleField",
		"category" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"global" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"year" => "SearchMultiSelectField",
		"year2" => "SearchMultiSelectField",
	);
}}

if (!class_exists("BudgetSearchRowBasic")) {
/**
 * BudgetSearchRowBasic
 */
class BudgetSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $classnohierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $departmentnohierarchy;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $global;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $locationnohierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $subsidiarynohierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $year;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $year2;

	static $paramtypesmap = array(
		"account" => "SearchColumnStringField[]",
		"amount" => "SearchColumnDoubleField[]",
		"category" => "SearchColumnStringField[]",
		"class" => "SearchColumnStringField[]",
		"classnohierarchy" => "SearchColumnStringField[]",
		"currency" => "SearchColumnStringField[]",
		"customer" => "SearchColumnStringField[]",
		"department" => "SearchColumnStringField[]",
		"departmentnohierarchy" => "SearchColumnStringField[]",
		"global" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnStringField[]",
		"location" => "SearchColumnStringField[]",
		"locationnohierarchy" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnStringField[]",
		"subsidiarynohierarchy" => "SearchColumnStringField[]",
		"year" => "SearchColumnStringField[]",
		"year2" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("ProjectTaskSearchBasic")) {
/**
 * ProjectTaskSearchBasic
 */
class ProjectTaskSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualWork;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $assignee;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $constraintType;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBase;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBaseBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBaseVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costVariancePercent;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDateBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $endDateVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWorkBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWorkVariance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWorkVariancePercent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $finishByDate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isMilestone;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isSummaryTask;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $nonBillableTask;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $percentWorkComplete;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $predecessors;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $remainingWork;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDateBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $startDateVariance;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $successor;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualWork" => "SearchDoubleField",
		"assignee" => "SearchMultiSelectField",
		"company" => "SearchMultiSelectField",
		"constraintType" => "SearchEnumMultiSelectField",
		"contact" => "SearchMultiSelectField",
		"cost" => "SearchDoubleField",
		"costBase" => "SearchDoubleField",
		"costBaseBaseline" => "SearchDoubleField",
		"costBaseline" => "SearchDoubleField",
		"costBaseVariance" => "SearchDoubleField",
		"costVariance" => "SearchDoubleField",
		"costVariancePercent" => "SearchDoubleField",
		"createdDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"endDateBaseline" => "SearchDateField",
		"endDateVariance" => "SearchDoubleField",
		"estimatedWork" => "SearchDoubleField",
		"estimatedWorkBaseline" => "SearchDoubleField",
		"estimatedWorkVariance" => "SearchDoubleField",
		"estimatedWorkVariancePercent" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"finishByDate" => "SearchDateField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isMilestone" => "SearchBooleanField",
		"isSummaryTask" => "SearchBooleanField",
		"lastModifiedDate" => "SearchDateField",
		"nonBillableTask" => "SearchBooleanField",
		"owner" => "SearchMultiSelectField",
		"parent" => "SearchMultiSelectField",
		"percentWorkComplete" => "SearchDoubleField",
		"predecessor" => "SearchMultiSelectField",
		"predecessors" => "SearchStringField",
		"priority" => "SearchEnumMultiSelectField",
		"remainingWork" => "SearchDoubleField",
		"startDate" => "SearchDateField",
		"startDateBaseline" => "SearchDateField",
		"startDateVariance" => "SearchDoubleField",
		"status" => "SearchEnumMultiSelectField",
		"successor" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ProjectTaskSearchRowBasic")) {
/**
 * ProjectTaskSearchRowBasic
 */
class ProjectTaskSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualWork;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $company;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $constraintType;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costBase;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costBaseBaseline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costBaseline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costBaseVariance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costVariance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costVariancePercent;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDateBaseline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $endDateVariance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWorkBaseline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWorkVariance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWorkVariancePercent;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $finishByDate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isMilestone;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isSummaryTask;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $nonBillableTask;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $percentWorkComplete;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $predecessorLagDays;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $predecessors;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $predecessorType;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $priority;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $remainingWork;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDateBaseline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $startDateVariance;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $successor;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $successorType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualWork" => "SearchColumnDoubleField[]",
		"company" => "SearchColumnSelectField[]",
		"constraintType" => "SearchColumnEnumSelectField[]",
		"contact" => "SearchColumnSelectField[]",
		"cost" => "SearchColumnDoubleField[]",
		"costBase" => "SearchColumnDoubleField[]",
		"costBaseBaseline" => "SearchColumnDoubleField[]",
		"costBaseline" => "SearchColumnDoubleField[]",
		"costBaseVariance" => "SearchColumnDoubleField[]",
		"costVariance" => "SearchColumnDoubleField[]",
		"costVariancePercent" => "SearchColumnDoubleField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"endDateBaseline" => "SearchColumnDateField[]",
		"endDateVariance" => "SearchColumnDoubleField[]",
		"estimatedWork" => "SearchColumnDoubleField[]",
		"estimatedWorkBaseline" => "SearchColumnDoubleField[]",
		"estimatedWorkVariance" => "SearchColumnDoubleField[]",
		"estimatedWorkVariancePercent" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"finishByDate" => "SearchColumnDateField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isMilestone" => "SearchColumnBooleanField[]",
		"isSummaryTask" => "SearchColumnBooleanField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"message" => "SearchColumnStringField[]",
		"nonBillableTask" => "SearchColumnBooleanField[]",
		"owner" => "SearchColumnSelectField[]",
		"parent" => "SearchColumnSelectField[]",
		"percentWorkComplete" => "SearchColumnDoubleField[]",
		"predecessor" => "SearchColumnSelectField[]",
		"predecessorLagDays" => "SearchColumnDoubleField[]",
		"predecessors" => "SearchColumnStringField[]",
		"predecessorType" => "SearchColumnStringField[]",
		"priority" => "SearchColumnEnumSelectField[]",
		"remainingWork" => "SearchColumnDoubleField[]",
		"startDate" => "SearchColumnDateField[]",
		"startDateBaseline" => "SearchColumnDateField[]",
		"startDateVariance" => "SearchColumnDoubleField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"successor" => "SearchColumnSelectField[]",
		"successorType" => "SearchColumnStringField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ProjectTaskAssignmentSearchBasic")) {
/**
 * ProjectTaskAssignmentSearchBasic
 */
class ProjectTaskAssignmentSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualWork;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $costBase;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWorkBaseline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $grossProfit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $grossProfitBase;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $price;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $priceBase;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $resourceName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serviceItem;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $serviceItemDesc;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitCost;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitCostBase;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitPrice;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unitPriceBase;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workCalendar;

	static $paramtypesmap = array(
		"actualWork" => "SearchDoubleField",
		"cost" => "SearchDoubleField",
		"costBase" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"estimatedWork" => "SearchDoubleField",
		"estimatedWorkBaseline" => "SearchDoubleField",
		"grossProfit" => "SearchDoubleField",
		"grossProfitBase" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"price" => "SearchDoubleField",
		"priceBase" => "SearchDoubleField",
		"resource" => "SearchMultiSelectField",
		"resourceName" => "SearchStringField",
		"serviceItem" => "SearchStringField",
		"serviceItemDesc" => "SearchStringField",
		"startDate" => "SearchDateField",
		"unitCost" => "SearchDoubleField",
		"unitCostBase" => "SearchDoubleField",
		"unitPrice" => "SearchDoubleField",
		"unitPriceBase" => "SearchDoubleField",
		"units" => "SearchDoubleField",
		"workCalendar" => "SearchMultiSelectField",
	);
}}

if (!class_exists("ProjectTaskAssignmentSearchRowBasic")) {
/**
 * ProjectTaskAssignmentSearchRowBasic
 */
class ProjectTaskAssignmentSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualWork;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $cost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $costBase;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWorkBaseline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $grossProfit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $grossProfitBase;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $price;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $priceBase;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $resourceName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $serviceItem;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $serviceItemDesc;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitCost;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitCostBase;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitPrice;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitPriceBase;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $workCalendar;

	static $paramtypesmap = array(
		"actualWork" => "SearchColumnDoubleField[]",
		"cost" => "SearchColumnDoubleField[]",
		"costBase" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"estimatedWork" => "SearchColumnDoubleField[]",
		"estimatedWorkBaseline" => "SearchColumnDoubleField[]",
		"grossProfit" => "SearchColumnDoubleField[]",
		"grossProfitBase" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"price" => "SearchColumnDoubleField[]",
		"priceBase" => "SearchColumnDoubleField[]",
		"resource" => "SearchColumnSelectField[]",
		"resourceName" => "SearchColumnStringField[]",
		"serviceItem" => "SearchColumnStringField[]",
		"serviceItemDesc" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"unitCost" => "SearchColumnDoubleField[]",
		"unitCostBase" => "SearchColumnDoubleField[]",
		"unitPrice" => "SearchColumnDoubleField[]",
		"unitPriceBase" => "SearchColumnDoubleField[]",
		"units" => "SearchColumnDoubleField[]",
		"workCalendar" => "SearchColumnSelectField[]",
	);
}}

if (!class_exists("AccountingPeriodSearchBasic")) {
/**
 * AccountingPeriodSearchBasic
 */
class AccountingPeriodSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allLocked;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $allowNonGlChanges;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $apLocked;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $arLocked;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $closed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $closedOnDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isAdjust;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isQuarter;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isYear;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $payrollLocked;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $periodName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;

	static $paramtypesmap = array(
		"allLocked" => "SearchBooleanField",
		"allowNonGlChanges" => "SearchBooleanField",
		"apLocked" => "SearchBooleanField",
		"arLocked" => "SearchBooleanField",
		"closed" => "SearchBooleanField",
		"closedOnDate" => "SearchDateField",
		"endDate" => "SearchDateField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isAdjust" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isQuarter" => "SearchBooleanField",
		"isYear" => "SearchBooleanField",
		"parent" => "SearchMultiSelectField",
		"payrollLocked" => "SearchBooleanField",
		"periodName" => "SearchStringField",
		"startDate" => "SearchDateField",
	);
}}

if (!class_exists("AccountingPeriodSearchRowBasic")) {
/**
 * AccountingPeriodSearchRowBasic
 */
class AccountingPeriodSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $allLocked;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $allowNonGLChanges;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $apLocked;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $arLocked;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $closed;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $closedOnDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isAdjust;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isQuarter;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isYear;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $payrollLocked;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $periodName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;

	static $paramtypesmap = array(
		"allLocked" => "SearchColumnBooleanField[]",
		"allowNonGLChanges" => "SearchColumnBooleanField[]",
		"apLocked" => "SearchColumnBooleanField[]",
		"arLocked" => "SearchColumnBooleanField[]",
		"closed" => "SearchColumnBooleanField[]",
		"closedOnDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isAdjust" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isQuarter" => "SearchColumnBooleanField[]",
		"isYear" => "SearchColumnBooleanField[]",
		"parent" => "SearchColumnSelectField[]",
		"payrollLocked" => "SearchColumnBooleanField[]",
		"periodName" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
	);
}}

if (!class_exists("ContactCategorySearchBasic")) {
/**
 * ContactCategorySearchBasic
 */
class ContactCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $private;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $sync;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"private" => "SearchBooleanField",
		"sync" => "SearchBooleanField",
	);
}}

if (!class_exists("ContactCategorySearchRowBasic")) {
/**
 * ContactCategorySearchRowBasic
 */
class ContactCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $private;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $sync;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"private" => "SearchColumnBooleanField[]",
		"sync" => "SearchColumnBooleanField[]",
	);
}}

if (!class_exists("ContactRoleSearchBasic")) {
/**
 * ContactRoleSearchBasic
 */
class ContactRoleSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("ContactRoleSearchRowBasic")) {
/**
 * ContactRoleSearchRowBasic
 */
class ContactRoleSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("CustomerCategorySearchBasic")) {
/**
 * CustomerCategorySearchBasic
 */
class CustomerCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("CustomerCategorySearchRowBasic")) {
/**
 * CustomerCategorySearchRowBasic
 */
class CustomerCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("CustomerStatusSearchBasic")) {
/**
 * CustomerStatusSearchBasic
 */
class CustomerStatusSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $includeInLeadReports;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $probability;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"includeInLeadReports" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"probability" => "SearchDoubleField",
	);
}}

if (!class_exists("CustomerStatusSearchRowBasic")) {
/**
 * CustomerStatusSearchRowBasic
 */
class CustomerStatusSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $includeInLeadReports;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $probability;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"includeInLeadReports" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"probability" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("ExpenseCategorySearchBasic")) {
/**
 * ExpenseCategorySearchBasic
 */
class ExpenseCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $rateRequired;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"rateRequired" => "SearchBooleanField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ExpenseCategorySearchRowBasic")) {
/**
 * ExpenseCategorySearchRowBasic
 */
class ExpenseCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $rateRequired;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"account" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"rateRequired" => "SearchColumnBooleanField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("JobStatusSearchBasic")) {
/**
 * JobStatusSearchBasic
 */
class JobStatusSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("JobStatusSearchRowBasic")) {
/**
 * JobStatusSearchRowBasic
 */
class JobStatusSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("JobTypeSearchBasic")) {
/**
 * JobTypeSearchBasic
 */
class JobTypeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
	);
}}

if (!class_exists("JobTypeSearchRowBasic")) {
/**
 * JobTypeSearchRowBasic
 */
class JobTypeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"parent" => "SearchColumnSelectField[]",
	);
}}

if (!class_exists("NoteTypeSearchBasic")) {
/**
 * NoteTypeSearchBasic
 */
class NoteTypeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("NoteTypeSearchRowBasic")) {
/**
 * NoteTypeSearchRowBasic
 */
class NoteTypeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("PartnerCategorySearchBasic")) {
/**
 * PartnerCategorySearchBasic
 */
class PartnerCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
	);
}}

if (!class_exists("PartnerCategorySearchRowBasic")) {
/**
 * PartnerCategorySearchRowBasic
 */
class PartnerCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"parent" => "SearchColumnSelectField[]",
	);
}}

if (!class_exists("PaymentMethodSearchBasic")) {
/**
 * PaymentMethodSearchBasic
 */
class PaymentMethodSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $creditCard;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDebitCard;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"creditCard" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDebitCard" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("PaymentMethodSearchRowBasic")) {
/**
 * PaymentMethodSearchRowBasic
 */
class PaymentMethodSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $account;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $creditCard;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDebitCard;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"account" => "SearchColumnSelectField[]",
		"creditCard" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDebitCard" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("PriceLevelSearchBasic")) {
/**
 * PriceLevelSearchBasic
 */
class PriceLevelSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $discountPct;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"discountPct" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOnline" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("PriceLevelSearchRowBasic")) {
/**
 * PriceLevelSearchRowBasic
 */
class PriceLevelSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $discountPct;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isOnline;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"discountPct" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOnline" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("SalesRoleSearchBasic")) {
/**
 * SalesRoleSearchBasic
 */
class SalesRoleSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("SalesRoleSearchRowBasic")) {
/**
 * SalesRoleSearchRowBasic
 */
class SalesRoleSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("TermSearchBasic")) {
/**
 * TermSearchBasic
 */
class TermSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $dateDriven;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $dayDiscountExpires;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $dayOfMonthNetDue;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysUntilExpiry;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysUntilNetDue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $discountPercent;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $discountPercentDateDriven;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $dueNextMonthIfWithinDays;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $preferred;

	static $paramtypesmap = array(
		"dateDriven" => "SearchBooleanField",
		"dayDiscountExpires" => "SearchLongField",
		"dayOfMonthNetDue" => "SearchLongField",
		"daysUntilExpiry" => "SearchLongField",
		"daysUntilNetDue" => "SearchLongField",
		"discountPercent" => "SearchDoubleField",
		"discountPercentDateDriven" => "SearchDoubleField",
		"dueNextMonthIfWithinDays" => "SearchLongField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"preferred" => "SearchBooleanField",
	);
}}

if (!class_exists("TermSearchRowBasic")) {
/**
 * TermSearchRowBasic
 */
class TermSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $dateDriven;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $dayDiscountExpires;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $dayOfMonthNetDue;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysUntilExpiry;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysUntilNetDue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $discountPercent;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $discountPercentDateDriven;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $dueNextMonthIfWithinDays;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $preferred;

	static $paramtypesmap = array(
		"dateDriven" => "SearchColumnBooleanField[]",
		"dayDiscountExpires" => "SearchColumnLongField[]",
		"dayOfMonthNetDue" => "SearchColumnLongField[]",
		"daysUntilExpiry" => "SearchColumnLongField[]",
		"daysUntilNetDue" => "SearchColumnLongField[]",
		"discountPercent" => "SearchColumnDoubleField[]",
		"discountPercentDateDriven" => "SearchColumnDoubleField[]",
		"dueNextMonthIfWithinDays" => "SearchColumnLongField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"preferred" => "SearchColumnBooleanField[]",
	);
}}

if (!class_exists("VendorCategorySearchBasic")) {
/**
 * VendorCategorySearchBasic
 */
class VendorCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isTaxAgency;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isTaxAgency" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("VendorCategorySearchRowBasic")) {
/**
 * VendorCategorySearchRowBasic
 */
class VendorCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isTaxAgency;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isTaxAgency" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("WinLossReasonSearchBasic")) {
/**
 * WinLossReasonSearchBasic
 */
class WinLossReasonSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("WinLossReasonSearchRowBasic")) {
/**
 * WinLossReasonSearchRowBasic
 */
class WinLossReasonSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("OriginatingLeadSearchBasic")) {
/**
 * OriginatingLeadSearchBasic
 */
class OriginatingLeadSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $boughtAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $boughtDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $ccDefault;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccExpDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccHolderName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ccState;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $ccStateFrom;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $ccType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $classBought;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolBalance;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $consolDaysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolDepositBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolOverdueBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $consolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $conversionDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $county;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $creditHold;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $creditHoldOverride;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custStage;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $custStatus;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateClosed;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $defaultOrderPriority;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $depositBalance;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $deptBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $explicitConversion;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $firstOrderDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $firstSaleDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxConsolBalance;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxConsolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $fxUnbilledOrders;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $group;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $groupPricingLevel;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isReportedLead;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemPricingLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $itemPricingUnitPrice;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemsBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $itemsOrdered;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastOrderDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastSaleDate;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $leadDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $locationBought;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $manualCreditHold;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $merchantAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $monthlyClosing;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $onCreditHold;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $orderedAmount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $orderedDate;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $otherRelationships;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $overdueBalance;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parentItemsBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $parentItemsOrdered;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pec;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $pricingItem;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $prospectDate;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $pstExempt;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $receivablesAccount;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $reminderDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $resaleNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $shippingItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidBought;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $taxable;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $territory;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $webLead;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchStringField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"attention" => "SearchStringField",
		"availableOffline" => "SearchBooleanField",
		"balance" => "SearchDoubleField",
		"billAddress" => "SearchStringField",
		"boughtAmount" => "SearchDoubleField",
		"boughtDate" => "SearchDateField",
		"buyingReason" => "SearchMultiSelectField",
		"buyingTimeFrame" => "SearchMultiSelectField",
		"category" => "SearchMultiSelectField",
		"ccCustomerCode" => "SearchStringField",
		"ccDefault" => "SearchBooleanField",
		"ccExpDate" => "SearchDateField",
		"ccHolderName" => "SearchStringField",
		"ccNumber" => "SearchStringField",
		"ccState" => "SearchMultiSelectField",
		"ccStateFrom" => "SearchDateField",
		"ccType" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"classBought" => "SearchMultiSelectField",
		"comments" => "SearchStringField",
		"companyName" => "SearchStringField",
		"consolBalance" => "SearchDoubleField",
		"consolDaysOverdue" => "SearchLongField",
		"consolDepositBalance" => "SearchDoubleField",
		"consolOverdueBalance" => "SearchDoubleField",
		"consolUnbilledOrders" => "SearchDoubleField",
		"contact" => "SearchStringField",
		"contribution" => "SearchLongField",
		"conversionDate" => "SearchDateField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"creditHold" => "SearchEnumMultiSelectField",
		"creditHoldOverride" => "SearchBooleanField",
		"creditLimit" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"custStage" => "SearchMultiSelectField",
		"custStatus" => "SearchMultiSelectField",
		"dateClosed" => "SearchDateField",
		"dateCreated" => "SearchDateField",
		"daysOverdue" => "SearchLongField",
		"defaultOrderPriority" => "SearchDoubleField",
		"depositBalance" => "SearchDoubleField",
		"deptBought" => "SearchMultiSelectField",
		"drAccount" => "SearchMultiSelectField",
		"email" => "SearchStringField",
		"emailPreference" => "SearchEnumMultiSelectField",
		"emailTransactions" => "SearchBooleanField",
		"endDate" => "SearchDateField",
		"entityId" => "SearchStringField",
		"entityStatus" => "SearchMultiSelectField",
		"estimatedBudget" => "SearchDoubleField",
		"explicitConversion" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"faxTransactions" => "SearchBooleanField",
		"firstName" => "SearchStringField",
		"firstOrderDate" => "SearchDateField",
		"firstSaleDate" => "SearchDateField",
		"fxAccount" => "SearchMultiSelectField",
		"fxBalance" => "SearchDoubleField",
		"fxConsolBalance" => "SearchDoubleField",
		"fxConsolUnbilledOrders" => "SearchDoubleField",
		"fxUnbilledOrders" => "SearchDoubleField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"group" => "SearchMultiSelectField",
		"groupPricingLevel" => "SearchMultiSelectField",
		"hasDuplicates" => "SearchBooleanField",
		"image" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isBudgetApproved" => "SearchBooleanField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isPerson" => "SearchBooleanField",
		"isReportedLead" => "SearchBooleanField",
		"isShipAddress" => "SearchBooleanField",
		"itemPricingLevel" => "SearchMultiSelectField",
		"itemPricingUnitPrice" => "SearchDoubleField",
		"itemsBought" => "SearchMultiSelectField",
		"itemsOrdered" => "SearchMultiSelectField",
		"language" => "SearchEnumMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"lastName" => "SearchStringField",
		"lastOrderDate" => "SearchDateField",
		"lastSaleDate" => "SearchDateField",
		"leadDate" => "SearchDateField",
		"leadSource" => "SearchMultiSelectField",
		"level" => "SearchEnumMultiSelectField",
		"locationBought" => "SearchMultiSelectField",
		"manualCreditHold" => "SearchBooleanField",
		"merchantAccount" => "SearchMultiSelectField",
		"middleName" => "SearchStringField",
		"monthlyClosing" => "SearchEnumMultiSelectField",
		"onCreditHold" => "SearchBooleanField",
		"orderedAmount" => "SearchDoubleField",
		"orderedDate" => "SearchDateField",
		"otherRelationships" => "SearchEnumMultiSelectField",
		"overdueBalance" => "SearchDoubleField",
		"parent" => "SearchMultiSelectField",
		"parentItemsBought" => "SearchMultiSelectField",
		"parentItemsOrdered" => "SearchMultiSelectField",
		"partner" => "SearchMultiSelectField",
		"partnerContribution" => "SearchLongField",
		"partnerRole" => "SearchMultiSelectField",
		"partnerTeamMember" => "SearchMultiSelectField",
		"pec" => "SearchStringField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"priceLevel" => "SearchMultiSelectField",
		"pricingGroup" => "SearchMultiSelectField",
		"pricingItem" => "SearchMultiSelectField",
		"printTransactions" => "SearchBooleanField",
		"prospectDate" => "SearchDateField",
		"pstExempt" => "SearchBooleanField",
		"receivablesAccount" => "SearchMultiSelectField",
		"reminderDate" => "SearchDateField",
		"resaleNumber" => "SearchStringField",
		"role" => "SearchMultiSelectField",
		"salesReadiness" => "SearchMultiSelectField",
		"salesRep" => "SearchMultiSelectField",
		"salesTeamMember" => "SearchMultiSelectField",
		"salesTeamRole" => "SearchMultiSelectField",
		"salutation" => "SearchStringField",
		"shipAddress" => "SearchStringField",
		"shipComplete" => "SearchBooleanField",
		"shippingItem" => "SearchMultiSelectField",
		"stage" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"state" => "SearchStringField",
		"subsidBought" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"taxable" => "SearchBooleanField",
		"terms" => "SearchMultiSelectField",
		"territory" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"unbilledOrders" => "SearchDoubleField",
		"url" => "SearchStringField",
		"vatRegNumber" => "SearchStringField",
		"webLead" => "SearchBooleanField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("OriginatingLeadSearchRowBasic")) {
/**
 * OriginatingLeadSearchRowBasic
 */
class OriginatingLeadSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $accountNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $address3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressLabel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $addressPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altContact;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altEmail;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $altPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $attention;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $availableOffline;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $balance;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCity;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $billCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billPhone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $billZipCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $buyingReason;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $buyingTimeFrame;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $category;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccCustomerCode;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $ccDefault;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $ccExpDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccHolderName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccInternalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $ccNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $ccState;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $ccStateFrom;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $ccType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $city;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $comments;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $companyName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolBalance;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $consolDaysOverdue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolDepositBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolOverdueBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $consolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $contact;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contribution;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $contributionPrimary;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $conversionDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $countryCode;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $creditHold;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $creditHoldOverride;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $creditLimit;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateClosed;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateCreated;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $daysOverdue;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $defaultOrderPriority;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $depositBalance;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $drAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $email;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $emailPreference;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $emailTransactions;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $entityId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $entityNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $entityStatus;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedBudget;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $explicitConversion;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fax;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $faxTransactions;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $firstName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $firstOrderDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $firstSaleDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $fxAccount;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxConsolBalance;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxConsolUnbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $fxUnbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $giveAccess;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $globalSubscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $groupPricingLevel;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $hasDuplicates;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $homePhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $image;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isBudgetApproved;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultBilling;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefaultShipping;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isPerson;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isShipAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemPricingLevel;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $itemPricingUnitPrice;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $jobEndDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $jobProjectedEnd;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $jobStartDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $jobType;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $language;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lastName;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastOrderDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastSaleDate;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $leadDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $leadSource;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $level;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $manualCreditHold;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $middleName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $mobilePhone;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $monthlyClosing;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $onCreditHold;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $overdueBalance;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $parent;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partner;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $partnerContribution;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $partnerRole;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $partnerTeamMember;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pec;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $permission;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phone;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $phoneticName;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $prefCCProcessor;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pricingGroup;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pricingItem;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $printTransactions;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $prospectDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $receivablesAccount;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $reminderDays;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $resaleNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $role;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salesReadiness;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesRep;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamMember;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $salesTeamRole;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $salutation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress1;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress2;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddress3;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAddressee;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipAttention;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCity;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $shipComplete;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $shipCountry;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipCountryCode;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipPhone;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $shippingItem;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipState;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $shipZip;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $stage;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $state;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subscription;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $subscriptionDate;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $subscriptionStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $taxable;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $taxItem;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $terms;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $territory;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $title;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unbilledOrders;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $url;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vatRegNumber;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $webLead;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $zipCode;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"accountNumber" => "SearchColumnStringField[]",
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"altContact" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"availableOffline" => "SearchColumnBooleanField[]",
		"balance" => "SearchColumnDoubleField[]",
		"billAddress" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"buyingReason" => "SearchColumnStringField[]",
		"buyingTimeFrame" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"ccCustomerCode" => "SearchColumnStringField[]",
		"ccDefault" => "SearchColumnBooleanField[]",
		"ccExpDate" => "SearchColumnDateField[]",
		"ccHolderName" => "SearchColumnStringField[]",
		"ccInternalId" => "SearchColumnStringField[]",
		"ccNumber" => "SearchColumnStringField[]",
		"ccState" => "SearchColumnSelectField[]",
		"ccStateFrom" => "SearchColumnDateField[]",
		"ccType" => "SearchColumnSelectField[]",
		"city" => "SearchColumnStringField[]",
		"comments" => "SearchColumnStringField[]",
		"companyName" => "SearchColumnStringField[]",
		"consolBalance" => "SearchColumnDoubleField[]",
		"consolDaysOverdue" => "SearchColumnLongField[]",
		"consolDepositBalance" => "SearchColumnDoubleField[]",
		"consolOverdueBalance" => "SearchColumnDoubleField[]",
		"consolUnbilledOrders" => "SearchColumnDoubleField[]",
		"contact" => "SearchColumnStringField[]",
		"contribution" => "SearchColumnDoubleField[]",
		"contributionPrimary" => "SearchColumnDoubleField[]",
		"conversionDate" => "SearchColumnDateField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"creditHold" => "SearchColumnEnumSelectField[]",
		"creditHoldOverride" => "SearchColumnBooleanField[]",
		"creditLimit" => "SearchColumnDoubleField[]",
		"currency" => "SearchColumnSelectField[]",
		"dateClosed" => "SearchColumnDateField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"daysOverdue" => "SearchColumnLongField[]",
		"defaultOrderPriority" => "SearchColumnDoubleField[]",
		"depositBalance" => "SearchColumnDoubleField[]",
		"drAccount" => "SearchColumnStringField[]",
		"email" => "SearchColumnStringField[]",
		"emailPreference" => "SearchColumnEnumSelectField[]",
		"emailTransactions" => "SearchColumnBooleanField[]",
		"endDate" => "SearchColumnDateField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"entityStatus" => "SearchColumnSelectField[]",
		"estimatedBudget" => "SearchColumnDoubleField[]",
		"explicitConversion" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"faxTransactions" => "SearchColumnBooleanField[]",
		"firstName" => "SearchColumnStringField[]",
		"firstOrderDate" => "SearchColumnDateField[]",
		"firstSaleDate" => "SearchColumnDateField[]",
		"fxAccount" => "SearchColumnStringField[]",
		"fxBalance" => "SearchColumnDoubleField[]",
		"fxConsolBalance" => "SearchColumnDoubleField[]",
		"fxConsolUnbilledOrders" => "SearchColumnDoubleField[]",
		"fxUnbilledOrders" => "SearchColumnDoubleField[]",
		"giveAccess" => "SearchColumnBooleanField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"groupPricingLevel" => "SearchColumnStringField[]",
		"hasDuplicates" => "SearchColumnBooleanField[]",
		"homePhone" => "SearchColumnStringField[]",
		"image" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isBudgetApproved" => "SearchColumnBooleanField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPerson" => "SearchColumnBooleanField[]",
		"isShipAddress" => "SearchColumnBooleanField[]",
		"itemPricingLevel" => "SearchColumnStringField[]",
		"itemPricingUnitPrice" => "SearchColumnDoubleField[]",
		"jobEndDate" => "SearchColumnDateField[]",
		"jobProjectedEnd" => "SearchColumnDateField[]",
		"jobStartDate" => "SearchColumnDateField[]",
		"jobType" => "SearchColumnSelectField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastName" => "SearchColumnStringField[]",
		"lastOrderDate" => "SearchColumnDateField[]",
		"lastSaleDate" => "SearchColumnDateField[]",
		"leadDate" => "SearchColumnDateField[]",
		"leadSource" => "SearchColumnSelectField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"manualCreditHold" => "SearchColumnBooleanField[]",
		"middleName" => "SearchColumnStringField[]",
		"mobilePhone" => "SearchColumnStringField[]",
		"monthlyClosing" => "SearchColumnEnumSelectField[]",
		"onCreditHold" => "SearchColumnBooleanField[]",
		"overdueBalance" => "SearchColumnDoubleField[]",
		"parent" => "SearchColumnSelectField[]",
		"partner" => "SearchColumnSelectField[]",
		"partnerContribution" => "SearchColumnDoubleField[]",
		"partnerRole" => "SearchColumnStringField[]",
		"partnerTeamMember" => "SearchColumnSelectField[]",
		"pec" => "SearchColumnStringField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"prefCCProcessor" => "SearchColumnSelectField[]",
		"priceLevel" => "SearchColumnSelectField[]",
		"pricingGroup" => "SearchColumnStringField[]",
		"pricingItem" => "SearchColumnStringField[]",
		"printTransactions" => "SearchColumnBooleanField[]",
		"prospectDate" => "SearchColumnDateField[]",
		"receivablesAccount" => "SearchColumnStringField[]",
		"reminderDays" => "SearchColumnLongField[]",
		"resaleNumber" => "SearchColumnStringField[]",
		"role" => "SearchColumnStringField[]",
		"salesReadiness" => "SearchColumnStringField[]",
		"salesRep" => "SearchColumnSelectField[]",
		"salesTeamMember" => "SearchColumnSelectField[]",
		"salesTeamRole" => "SearchColumnSelectField[]",
		"salutation" => "SearchColumnStringField[]",
		"shipAddress" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipComplete" => "SearchColumnBooleanField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shippingItem" => "SearchColumnSelectField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"stage" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"state" => "SearchColumnEnumSelectField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"taxable" => "SearchColumnBooleanField[]",
		"taxItem" => "SearchColumnSelectField[]",
		"terms" => "SearchColumnSelectField[]",
		"territory" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"unbilledOrders" => "SearchColumnDoubleField[]",
		"url" => "SearchColumnStringField[]",
		"vatRegNumber" => "SearchColumnStringField[]",
		"webLead" => "SearchColumnBooleanField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("UnitsTypeSearchBasic")) {
/**
 * UnitsTypeSearchBasic
 */
class UnitsTypeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $baseUnit;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $conversionRate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInActive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pluralAbbreviation;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $pluralName;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $unitName;

	static $paramtypesmap = array(
		"abbreviation" => "SearchStringField",
		"baseUnit" => "SearchBooleanField",
		"conversionRate" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInActive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"pluralAbbreviation" => "SearchStringField",
		"pluralName" => "SearchStringField",
		"unitName" => "SearchStringField",
	);
}}

if (!class_exists("UnitsTypeSearchRowBasic")) {
/**
 * UnitsTypeSearchRowBasic
 */
class UnitsTypeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $abbreviation;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $baseUnit;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $conversionRate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInActive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pluralAbbreviation;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $pluralName;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $unitName;

	static $paramtypesmap = array(
		"abbreviation" => "SearchColumnStringField[]",
		"baseUnit" => "SearchColumnBooleanField[]",
		"conversionRate" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInActive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"pluralAbbreviation" => "SearchColumnStringField[]",
		"pluralName" => "SearchColumnStringField[]",
		"unitName" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("CustomListSearchBasic")) {
/**
 * CustomListSearchBasic
 */
class CustomListSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOrdered;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isOrdered" => "SearchBooleanField",
		"name" => "SearchStringField",
		"owner" => "SearchMultiSelectField",
		"scriptId" => "SearchStringField",
	);
}}

if (!class_exists("CustomListSearchRowBasic")) {
/**
 * CustomListSearchRowBasic
 */
class CustomListSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isOrdered;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $owner;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isOrdered" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"scriptId" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("PricingGroupSearchBasic")) {
/**
 * PricingGroupSearchBasic
 */
class PricingGroupSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("PricingGroupSearchRowBasic")) {
/**
 * PricingGroupSearchRowBasic
 */
class PricingGroupSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("InventoryNumberSearchBasic")) {
/**
 * InventoryNumberSearchBasic
 */
class InventoryNumberSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isOnHand;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityInTransit;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnOrder;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"expirationDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"inventoryNumber" => "SearchStringField",
		"isOnHand" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityInTransit" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
		"quantityOnOrder" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("InventoryNumberSearchRowBasic")) {
/**
 * InventoryNumberSearchRowBasic
 */
class InventoryNumberSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $expirationDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isonhand;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityavailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityintransit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityonhand;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityonorder;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"expirationDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnStringField[]",
		"isonhand" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"quantityavailable" => "SearchColumnDoubleField[]",
		"quantityintransit" => "SearchColumnDoubleField[]",
		"quantityonhand" => "SearchColumnDoubleField[]",
		"quantityonorder" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("InventoryNumberBinSearchBasic")) {
/**
 * InventoryNumberBinSearchBasic
 */
class InventoryNumberBinSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"inventoryNumber" => "SearchStringField",
		"location" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
	);
}}

if (!class_exists("InventoryNumberBinSearchRowBasic")) {
/**
 * InventoryNumberBinSearchRowBasic
 */
class InventoryNumberBinSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $inventoryNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"inventoryNumber" => "SearchColumnStringField[]",
		"location" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
	);
}}

if (!class_exists("ItemBinNumberSearchBasic")) {
/**
 * ItemBinNumberSearchBasic
 */
class ItemBinNumberSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"quantityAvailable" => "SearchDoubleField",
		"quantityOnHand" => "SearchDoubleField",
	);
}}

if (!class_exists("ItemBinNumberSearchRowBasic")) {
/**
 * ItemBinNumberSearchRowBasic
 */
class ItemBinNumberSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $binNumber;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityAvailable;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityOnHand;

	static $paramtypesmap = array(
		"binNumber" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"quantityAvailable" => "SearchColumnDoubleField[]",
		"quantityOnHand" => "SearchColumnDoubleField[]",
	);
}}

if (!class_exists("PricingSearchBasic")) {
/**
 * PricingSearchBasic
 */
class PricingSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $assignedPriceLevel;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $maximumQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $rate;

	static $paramtypesmap = array(
		"assignedPriceLevel" => "SearchBooleanField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"maximumQuantity" => "SearchDoubleField",
		"minimumQuantity" => "SearchDoubleField",
		"priceLevel" => "SearchMultiSelectField",
		"rate" => "SearchDoubleField",
	);
}}

if (!class_exists("PricingSearchRowBasic")) {
/**
 * PricingSearchRowBasic
 */
class PricingSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $maximumQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $minimumQuantity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $priceLevel;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $quantityRange;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $saleUnit;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $unitPrice;

	static $paramtypesmap = array(
		"currency" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnLongField[]",
		"item" => "SearchColumnSelectField[]",
		"maximumQuantity" => "SearchColumnDoubleField[]",
		"minimumQuantity" => "SearchColumnDoubleField[]",
		"priceLevel" => "SearchColumnSelectField[]",
		"quantityRange" => "SearchColumnStringField[]",
		"saleUnit" => "SearchColumnSelectField[]",
		"unitPrice" => "SearchColumnDoubleField[]",
	);
}}

if (!class_exists("NexusSearchBasic")) {
/**
 * NexusSearchBasic
 */
class NexusSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $state;

	static $paramtypesmap = array(
		"country" => "SearchEnumMultiSelectField",
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"state" => "SearchMultiSelectField",
	);
}}

if (!class_exists("NexusSearchRowBasic")) {
/**
 * NexusSearchRowBasic
 */
class NexusSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $country;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $state;

	static $paramtypesmap = array(
		"country" => "SearchColumnEnumSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"state" => "SearchColumnSelectField[]",
	);
}}

if (!class_exists("OtherNameCategorySearchBasic")) {
/**
 * OtherNameCategorySearchBasic
 */
class OtherNameCategorySearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}}

if (!class_exists("OtherNameCategorySearchRowBasic")) {
/**
 * OtherNameCategorySearchRowBasic
 */
class OtherNameCategorySearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("CustomerMessageSearchBasic")) {
/**
 * CustomerMessageSearchBasic
 */
class CustomerMessageSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $preferred;

	static $paramtypesmap = array(
		"description" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"preferred" => "SearchBooleanField",
	);
}}

if (!class_exists("CustomerMessageSearchRowBasic")) {
/**
 * CustomerMessageSearchRowBasic
 */
class CustomerMessageSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $description;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $preferred;

	static $paramtypesmap = array(
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
		"preferred" => "SearchColumnStringField[]",
	);
}}

if (!class_exists("ItemDemandPlanSearchBasic")) {
/**
 * ItemDemandPlanSearchBasic
 */
class ItemDemandPlanSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $alternateSourceItem;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $analysisDuration;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $demandDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $projectionDuration;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $projectionInterval;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $projectionMethod;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $projectionStartDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"alternateSourceItem" => "SearchMultiSelectField",
		"analysisDuration" => "SearchLongField",
		"demandDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"projectionDuration" => "SearchLongField",
		"projectionInterval" => "SearchMultiSelectField",
		"projectionMethod" => "SearchEnumMultiSelectField",
		"projectionStartDate" => "SearchDateField",
		"quantity" => "SearchDoubleField",
		"subsidiary" => "SearchMultiSelectField",
		"units" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ItemDemandPlanSearchRowBasic")) {
/**
 * ItemDemandPlanSearchRowBasic
 */
class ItemDemandPlanSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $alternateSourceItem;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $analysisDuration;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $demandDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $projectionDuration;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $projectionInterval;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $projectionMethod;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $projectionStartDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityUom;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"alternateSourceItem" => "SearchColumnSelectField[]",
		"analysisDuration" => "SearchColumnLongField[]",
		"demandDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"projectionDuration" => "SearchColumnLongField[]",
		"projectionInterval" => "SearchColumnStringField[]",
		"projectionMethod" => "SearchColumnStringField[]",
		"projectionStartDate" => "SearchColumnDateField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"quantityUom" => "SearchColumnDoubleField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"units" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ItemSupplyPlanSearchBasic")) {
/**
 * ItemSupplyPlanSearchBasic
 */
class ItemSupplyPlanSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $orderCreated;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $orderDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $orderType;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $receiptDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"lastModifiedDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"orderCreated" => "SearchBooleanField",
		"orderDate" => "SearchDateField",
		"orderType" => "SearchMultiSelectField",
		"quantity" => "SearchDoubleField",
		"receiptDate" => "SearchDateField",
		"subsidiary" => "SearchMultiSelectField",
		"units" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ItemSupplyPlanSearchRowBasic")) {
/**
 * ItemSupplyPlanSearchRowBasic
 */
class ItemSupplyPlanSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $orderCreated;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $orderDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $orderType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $quantityUom;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $receiptDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $units;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"location" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"orderCreated" => "SearchColumnBooleanField[]",
		"orderDate" => "SearchColumnDateField[]",
		"orderType" => "SearchColumnSelectField[]",
		"quantity" => "SearchColumnDoubleField[]",
		"quantityUom" => "SearchColumnDoubleField[]",
		"receiptDate" => "SearchColumnDateField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"units" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("CurrencyRateSearchBasic")) {
/**
 * CurrencyRateSearchBasic
 */
class CurrencyRateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $transactionCurrency;

	static $paramtypesmap = array(
		"baseCurrency" => "SearchMultiSelectField",
		"effectiveDate" => "SearchDateField",
		"exchangeRate" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"transactionCurrency" => "SearchMultiSelectField",
	);
}}

if (!class_exists("CurrencyRateSearchRowBasic")) {
/**
 * CurrencyRateSearchRowBasic
 */
class CurrencyRateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $baseCurrency;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $exchangeRate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $transactionCurrency;

	static $paramtypesmap = array(
		"baseCurrency" => "SearchColumnSelectField[]",
		"effectiveDate" => "SearchColumnDateField[]",
		"exchangeRate" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"transactionCurrency" => "SearchColumnSelectField[]",
	);
}}

if (!class_exists("ItemRevisionSearchBasic")) {
/**
 * ItemRevisionSearchBasic
 */
class ItemRevisionSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $obsoleteDate;

	static $paramtypesmap = array(
		"effectiveDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"obsoleteDate" => "SearchDateField",
	);
}}

if (!class_exists("ItemRevisionSearchRowBasic")) {
/**
 * ItemRevisionSearchRowBasic
 */
class ItemRevisionSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $effectiveDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $obsoleteDate;

	static $paramtypesmap = array(
		"effectiveDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"obsoleteDate" => "SearchColumnDateField[]",
	);
}}

if (!class_exists("CouponCodeSearchBasic")) {
/**
 * CouponCodeSearchBasic
 */
class CouponCodeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $promotion;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $useCount;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $used;

	static $paramtypesmap = array(
		"code" => "SearchStringField",
		"dateSent" => "SearchDateField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"promotion" => "SearchMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"useCount" => "SearchLongField",
		"used" => "SearchBooleanField",
	);
}}

if (!class_exists("CouponCodeSearchRowBasic")) {
/**
 * CouponCodeSearchRowBasic
 */
class CouponCodeSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $code;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $dateSent;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $promotion;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $recipient;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $useCount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $used;

	static $paramtypesmap = array(
		"code" => "SearchColumnStringField[]",
		"dateSent" => "SearchColumnDateField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"promotion" => "SearchColumnStringField[]",
		"recipient" => "SearchColumnStringField[]",
		"useCount" => "SearchColumnLongField[]",
		"used" => "SearchColumnBooleanField[]",
	);
}}

if (!class_exists("PayrollItemSearchBasic")) {
/**
 * PayrollItemSearchBasic
 */
class PayrollItemSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $itemTypeNoHierarchy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"expenseAccount" => "SearchMultiSelectField",
		"itemTypeNoHierarchy" => "SearchEnumMultiSelectField",
		"liabilityAccount" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"vendor" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("PayrollItemSearchRowBasic")) {
/**
 * PayrollItemSearchRowBasic
 */
class PayrollItemSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $expenseAccount;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $itemTypeNoHierarchy;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $liabilityAccount;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $vendor;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"expenseAccount" => "SearchColumnStringField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"itemTypeNoHierarchy" => "SearchColumnStringField[]",
		"liabilityAccount" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"vendor" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ManufacturingCostTemplateSearchBasic")) {
/**
 * ManufacturingCostTemplateSearchBasic
 */
class ManufacturingCostTemplateSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"name" => "SearchStringField",
		"subsidiary" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ManufacturingCostTemplateSearchRowBasic")) {
/**
 * ManufacturingCostTemplateSearchRowBasic
 */
class ManufacturingCostTemplateSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"item" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ManufacturingRoutingSearchBasic")) {
/**
 * ManufacturingRoutingSearchBasic
 */
class ManufacturingRoutingSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var SearchBooleanField
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $lagType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lagUnits;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $operationName;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $operationYield;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $runRate;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $sequence;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"autoCalculateLag" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefault" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"subsidiary" => "SearchMultiSelectField",
		"item" => "SearchMultiSelectField",
		"lagAmount" => "SearchDoubleField",
		"lagType" => "SearchEnumMultiSelectField",
		"lagUnits" => "SearchStringField",
		"location" => "SearchMultiSelectField",
		"manufacturingCostTemplate" => "SearchMultiSelectField",
		"manufacturingWorkCenter" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"name" => "SearchStringField",
		"operationName" => "SearchStringField",
		"operationYield" => "SearchDoubleField",
		"runRate" => "SearchDoubleField",
		"sequence" => "SearchLongField",
		"setupTime" => "SearchDoubleField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ManufacturingRoutingSearchRowBasic")) {
/**
 * ManufacturingRoutingSearchRowBasic
 */
class ManufacturingRoutingSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $autoCalculateLag;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isDefault;
	/**
	 * @access public
	 * @var SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $item;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $lagType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lagUnits;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $memo;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $operationName;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $operationYield;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $runRate;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $sequence;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"autoCalculateLag" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefault" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"lagAmount" => "SearchColumnDoubleField[]",
		"lagType" => "SearchColumnEnumSelectField[]",
		"lagUnits" => "SearchColumnStringField[]",
		"location" => "SearchColumnSelectField[]",
		"manufacturingCostTemplate" => "SearchColumnSelectField[]",
		"manufacturingWorkCenter" => "SearchColumnSelectField[]",
		"memo" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"operationName" => "SearchColumnStringField[]",
		"operationYield" => "SearchColumnDoubleField[]",
		"runRate" => "SearchColumnDoubleField[]",
		"sequence" => "SearchColumnLongField[]",
		"setupTime" => "SearchColumnDoubleField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ManufacturingOperationTaskSearchBasic")) {
/**
 * ManufacturingOperationTaskSearchBasic
 */
class ManufacturingOperationTaskSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualRunTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $actualSetupTime;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $inputQuantity;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $lagType;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $lagUnits;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $order;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $remainingQuantity;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $runRate;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $runTime;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $sequence;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $workOrder;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualRunTime" => "SearchDoubleField",
		"actualSetupTime" => "SearchDoubleField",
		"completedQuantity" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"estimatedWork" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"id" => "SearchLongField",
		"inputQuantity" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"laborResources" => "SearchLongField",
		"lagAmount" => "SearchDoubleField",
		"lagType" => "SearchEnumMultiSelectField",
		"lagUnits" => "SearchStringField",
		"machineResources" => "SearchLongField",
		"manufacturingCostTemplate" => "SearchMultiSelectField",
		"manufacturingWorkCenter" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"order" => "SearchDoubleField",
		"predecessor" => "SearchMultiSelectField",
		"remainingQuantity" => "SearchDoubleField",
		"runRate" => "SearchDoubleField",
		"runTime" => "SearchDoubleField",
		"sequence" => "SearchLongField",
		"setupTime" => "SearchDoubleField",
		"startDate" => "SearchDateField",
		"status" => "SearchMultiSelectField",
		"workOrder" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ManufacturingOperationTaskSearchRowBasic")) {
/**
 * ManufacturingOperationTaskSearchRowBasic
 */
class ManufacturingOperationTaskSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualRunTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $actualSetupTime;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $completedQuantity;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $estimatedWork;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $id;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $inputQuantity;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $laborResources;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $lagAmount;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $lagType;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $lagUnits;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $machineResources;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingCostTemplate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $manufacturingWorkCenter;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $message;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $name;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $order;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $predecessor;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $predecessorType;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $remainingQuantity;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $runRate;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $runTime;
	/**
	 * @access public
	 * @var SearchColumnLongField[]
	 */
	public $sequence;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $setupTime;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $status;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $workOrder;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"actualRunTime" => "SearchColumnDoubleField[]",
		"actualSetupTime" => "SearchColumnDoubleField[]",
		"completedQuantity" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"estimatedWork" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnStringField[]",
		"id" => "SearchColumnLongField[]",
		"inputQuantity" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnSelectField[]",
		"laborResources" => "SearchColumnLongField[]",
		"lagAmount" => "SearchColumnDoubleField[]",
		"lagType" => "SearchColumnEnumSelectField[]",
		"lagUnits" => "SearchColumnStringField[]",
		"machineResources" => "SearchColumnLongField[]",
		"manufacturingCostTemplate" => "SearchColumnSelectField[]",
		"manufacturingWorkCenter" => "SearchColumnSelectField[]",
		"message" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"order" => "SearchColumnDoubleField[]",
		"predecessor" => "SearchColumnSelectField[]",
		"predecessorType" => "SearchColumnStringField[]",
		"remainingQuantity" => "SearchColumnDoubleField[]",
		"runRate" => "SearchColumnDoubleField[]",
		"runTime" => "SearchColumnDoubleField[]",
		"sequence" => "SearchColumnLongField[]",
		"setupTime" => "SearchColumnDoubleField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnSelectField[]",
		"workOrder" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("ResourceAllocationSearchBasic")) {
/**
 * ResourceAllocationSearchBasic
 */
class ResourceAllocationSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $allocationType;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $allocationUnit;
	/**
	 * @access public
	 * @var SearchEnumMultiSelectField
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $notes;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $numberHours;
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $percentOfTime;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $project;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $requestedBy;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"allocationType" => "SearchMultiSelectField",
		"allocationUnit" => "SearchEnumMultiSelectField",
		"approvalStatus" => "SearchEnumMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"nextApprover" => "SearchMultiSelectField",
		"notes" => "SearchStringField",
		"numberHours" => "SearchDoubleField",
		"percentOfTime" => "SearchDoubleField",
		"project" => "SearchMultiSelectField",
		"requestedBy" => "SearchMultiSelectField",
		"resource" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"customFieldList" => "SearchCustomFieldList",
	);
}}

if (!class_exists("ResourceAllocationSearchRowBasic")) {
/**
 * ResourceAllocationSearchRowBasic
 */
class ResourceAllocationSearchRowBasic extends SearchRowBasic {
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $allocationType;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $allocationUnit;
	/**
	 * @access public
	 * @var SearchColumnEnumSelectField[]
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $project;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $customer;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $endDate;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $nextApprover;
	/**
	 * @access public
	 * @var SearchColumnStringField[]
	 */
	public $notes;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $numberHours;
	/**
	 * @access public
	 * @var SearchColumnDoubleField[]
	 */
	public $percentOfTime;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $requestedBy;
	/**
	 * @access public
	 * @var SearchColumnSelectField[]
	 */
	public $resource;
	/**
	 * @access public
	 * @var SearchColumnDateField[]
	 */
	public $startDate;
	/**
	 * @access public
	 * @var SearchColumnCustomFieldList
	 */
	public $customFieldList;

	static $paramtypesmap = array(
		"allocationType" => "SearchColumnSelectField[]",
		"allocationUnit" => "SearchColumnEnumSelectField[]",
		"approvalStatus" => "SearchColumnEnumSelectField[]",
		"project" => "SearchColumnSelectField[]",
		"customer" => "SearchColumnSelectField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"nextApprover" => "SearchColumnSelectField[]",
		"notes" => "SearchColumnStringField[]",
		"numberHours" => "SearchColumnDoubleField[]",
		"percentOfTime" => "SearchColumnDoubleField[]",
		"requestedBy" => "SearchColumnSelectField[]",
		"resource" => "SearchColumnSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}}

if (!class_exists("CustomSearchJoin")) {
/**
 * CustomSearchJoin
 */
class CustomSearchJoin {
	/**
	 * @access public
	 * @var CustomizationRef
	 */
	public $customizationRef;
	/**
	 * @access public
	 * @var SearchRecordBasic
	 */
	public $searchRecordBasic;

	static $paramtypesmap = array(
		"customizationRef" => "CustomizationRef",
		"searchRecordBasic" => "SearchRecordBasic",
	);
}}

if (!class_exists("CustomSearchRowBasic")) {
/**
 * CustomSearchRowBasic
 */
class CustomSearchRowBasic {
	/**
	 * @access public
	 * @var CustomizationRef
	 */
	public $customizationRef;
	/**
	 * @access public
	 * @var SearchRowBasic
	 */
	public $searchRowBasic;

	static $paramtypesmap = array(
		"customizationRef" => "CustomizationRef",
		"searchRowBasic" => "SearchRowBasic",
	);
}}

if (!class_exists("ChargeSearchBasic")) {
/**
 * ChargeSearchBasic
 */
class ChargeSearchBasic extends SearchRecordBasic {
	/**
	 * @access public
	 * @var SearchDoubleField
	 */
	public $amount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingAccount;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billingItem;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $billTo;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $chargeDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $class;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $chargeType;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $currency;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $department;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * @access public
	 * @var SearchStringField
	 */
	public $externalIdString;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * @access public
	 * @var SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * @access public
	 * @var SearchMultiSelectField
	 */
	public $location;
	/**
	 * @access public
	 * @var SearchDateField
	 */
	public $modifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $postingPeriod;
	/**
	 * @access public
