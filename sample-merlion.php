<?php
/**
 * Test with Merlion for 'https://api.merlion.com/dl/mlservice2?wsdl'
 * @package Merlion
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MerlionAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a MerlionWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[MerlionWsdlClass::WSDL_URL] = 'https://api.merlion.com/dl/mlservice2?wsdl';
 * $wsdl[MerlionWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[MerlionWsdlClass::WSDL_TRACE] = true;
 * $wsdl[MerlionWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[MerlionWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new MerlionWsdlClass($wsdl);
 */
/**
 * Examples
 */


/********************************
 * Example for MerlionServiceHello
 */
$qjaoBlServiceHello = new MerlionServiceHello();
// sample call for MerlionServiceHello::helloWorld()
if($qjaoBlServiceHello->helloWorld(new MerlionStructHelloWorld(/*** update parameters list ***/)))
    print_r($qjaoBlServiceHello->getResult());
else
    print_r($qjaoBlServiceHello->getLastError());

/******************************
 * Example for MerlionServiceGet
 */
$qjaoBlServiceGet = new MerlionServiceGet();
// sample call for MerlionServiceGet::getCatalog()
if($qjaoBlServiceGet->getCatalog(new MerlionStructGetCatalog(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getShipmentDates()
if($qjaoBlServiceGet->getShipmentDates(new MerlionStructGetShipmentDates(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getShipmentMethods()
if($qjaoBlServiceGet->getShipmentMethods(new MerlionStructGetShipmentMethods(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getShipmentAgents()
if($qjaoBlServiceGet->getShipmentAgents(new MerlionStructGetShipmentAgents(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getCounterAgent()
if($qjaoBlServiceGet->getCounterAgent(new MerlionStructGetCounterAgent(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getRepresentative()
if($qjaoBlServiceGet->getRepresentative(new MerlionStructGetRepresentative(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getEndPointDelivery()
if($qjaoBlServiceGet->getEndPointDelivery(new MerlionStructGetEndPointDelivery(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getPackingTypes()
if($qjaoBlServiceGet->getPackingTypes(new MerlionStructGetPackingTypes(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getItems()
if($qjaoBlServiceGet->getItems(new MerlionStructGetItems(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getItemsAvail()
if($qjaoBlServiceGet->getItemsAvail(new MerlionStructGetItemsAvail(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getItemsProperties()
if($qjaoBlServiceGet->getItemsProperties(new MerlionStructGetItemsProperties(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getItemsImages()
if($qjaoBlServiceGet->getItemsImages(new MerlionStructGetItemsImages(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getLinkedItems()
if($qjaoBlServiceGet->getLinkedItems(new MerlionStructGetLinkedItems(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getOrdersList()
if($qjaoBlServiceGet->getOrdersList(new MerlionStructGetOrdersList(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getOrderLines()
if($qjaoBlServiceGet->getOrderLines(new MerlionStructGetOrderLines(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getOrderLinesGTD()
if($qjaoBlServiceGet->getOrderLinesGTD(new MerlionStructGetOrderLinesGTD(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getCommandResult()
if($qjaoBlServiceGet->getCommandResult(new MerlionStructGetCommandResult(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getCurrencyRate()
if($qjaoBlServiceGet->getCurrencyRate(new MerlionStructGetCurrencyRate(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());
// sample call for MerlionServiceGet::getCountry()
if($qjaoBlServiceGet->getCountry(new MerlionStructGetCountry(/*** update parameters list ***/)))
    print_r($qjaoBlServiceGet->getResult());
else
    print_r($qjaoBlServiceGet->getLastError());

/******************************
 * Example for MerlionServiceSet
 */
$qjaoBlServiceSet = new MerlionServiceSet();
// sample call for MerlionServiceSet::setOrderHeaderCommand()
if($qjaoBlServiceSet->setOrderHeaderCommand(new MerlionStructSetOrderHeaderCommand(/*** update parameters list ***/)))
    print_r($qjaoBlServiceSet->getResult());
else
    print_r($qjaoBlServiceSet->getLastError());
// sample call for MerlionServiceSet::setOrderLineCommand()
if($qjaoBlServiceSet->setOrderLineCommand(new MerlionStructSetOrderLineCommand(/*** update parameters list ***/)))
    print_r($qjaoBlServiceSet->getResult());
else
    print_r($qjaoBlServiceSet->getLastError());
// sample call for MerlionServiceSet::setAddOrderLineCommand()
if($qjaoBlServiceSet->setAddOrderLineCommand(new MerlionStructSetAddOrderLineCommand(/*** update parameters list ***/)))
    print_r($qjaoBlServiceSet->getResult());
else
    print_r($qjaoBlServiceSet->getLastError());
// sample call for MerlionServiceSet::setMoveOrderLineCommand()
if($qjaoBlServiceSet->setMoveOrderLineCommand(new MerlionStructSetMoveOrderLineCommand(/*** update parameters list ***/)))
    print_r($qjaoBlServiceSet->getResult());
else
    print_r($qjaoBlServiceSet->getLastError());
// sample call for MerlionServiceSet::setDeleteOrderCommand()
if($qjaoBlServiceSet->setDeleteOrderCommand(new MerlionStructSetDeleteOrderCommand(/*** update parameters list ***/)))
    print_r($qjaoBlServiceSet->getResult());
else
    print_r($qjaoBlServiceSet->getLastError());
// sample call for MerlionServiceSet::setSignOrderCommand()
if($qjaoBlServiceSet->setSignOrderCommand(new MerlionStructSetSignOrderCommand(/*** update parameters list ***/)))
    print_r($qjaoBlServiceSet->getResult());
else
    print_r($qjaoBlServiceSet->getLastError());
