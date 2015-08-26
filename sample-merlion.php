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
$merlionServiceHello = new MerlionServiceHello();
// sample call for MerlionServiceHello::helloWorld()
if($merlionServiceHello->helloWorld(new MerlionStructHelloWorld(/*** update parameters list ***/)))
    print_r($merlionServiceHello->getResult());
else
    print_r($merlionServiceHello->getLastError());

/******************************
 * Example for MerlionServiceGet
 */
$merlionServiceGet = new MerlionServiceGet();
// sample call for MerlionServiceGet::getCatalog()
if($merlionServiceGet->getCatalog(new MerlionStructGetCatalog(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getShipmentDates()
if($merlionServiceGet->getShipmentDates(new MerlionStructGetShipmentDates(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getShipmentMethods()
if($merlionServiceGet->getShipmentMethods(new MerlionStructGetShipmentMethods(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getShipmentAgents()
if($merlionServiceGet->getShipmentAgents(new MerlionStructGetShipmentAgents(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getCounterAgent()
if($merlionServiceGet->getCounterAgent(new MerlionStructGetCounterAgent(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getRepresentative()
if($merlionServiceGet->getRepresentative(new MerlionStructGetRepresentative(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getEndPointDelivery()
if($merlionServiceGet->getEndPointDelivery(new MerlionStructGetEndPointDelivery(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getPackingTypes()
if($merlionServiceGet->getPackingTypes(new MerlionStructGetPackingTypes(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getItems()
if($merlionServiceGet->getItems(new MerlionStructGetItems(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getItemsAvail()
if($merlionServiceGet->getItemsAvail(new MerlionStructGetItemsAvail(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getItemsProperties()
if($merlionServiceGet->getItemsProperties(new MerlionStructGetItemsProperties(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getItemsImages()
if($merlionServiceGet->getItemsImages(new MerlionStructGetItemsImages(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getLinkedItems()
if($merlionServiceGet->getLinkedItems(new MerlionStructGetLinkedItems(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getOrdersList()
if($merlionServiceGet->getOrdersList(new MerlionStructGetOrdersList(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getOrderLines()
if($merlionServiceGet->getOrderLines(new MerlionStructGetOrderLines(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getOrderLinesGTD()
if($merlionServiceGet->getOrderLinesGTD(new MerlionStructGetOrderLinesGTD(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getCommandResult()
if($merlionServiceGet->getCommandResult(new MerlionStructGetCommandResult(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getCurrencyRate()
if($merlionServiceGet->getCurrencyRate(new MerlionStructGetCurrencyRate(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());
// sample call for MerlionServiceGet::getCountry()
if($merlionServiceGet->getCountry(new MerlionStructGetCountry(/*** update parameters list ***/)))
    print_r($merlionServiceGet->getResult());
else
    print_r($merlionServiceGet->getLastError());

/******************************
 * Example for MerlionServiceSet
 */
$merlionServiceSet = new MerlionServiceSet();
// sample call for MerlionServiceSet::setOrderHeaderCommand()
if($merlionServiceSet->setOrderHeaderCommand(new MerlionStructSetOrderHeaderCommand(/*** update parameters list ***/)))
    print_r($merlionServiceSet->getResult());
else
    print_r($merlionServiceSet->getLastError());
// sample call for MerlionServiceSet::setOrderLineCommand()
if($merlionServiceSet->setOrderLineCommand(new MerlionStructSetOrderLineCommand(/*** update parameters list ***/)))
    print_r($merlionServiceSet->getResult());
else
    print_r($merlionServiceSet->getLastError());
// sample call for MerlionServiceSet::setAddOrderLineCommand()
if($merlionServiceSet->setAddOrderLineCommand(new MerlionStructSetAddOrderLineCommand(/*** update parameters list ***/)))
    print_r($merlionServiceSet->getResult());
else
    print_r($merlionServiceSet->getLastError());
// sample call for MerlionServiceSet::setMoveOrderLineCommand()
if($merlionServiceSet->setMoveOrderLineCommand(new MerlionStructSetMoveOrderLineCommand(/*** update parameters list ***/)))
    print_r($merlionServiceSet->getResult());
else
    print_r($merlionServiceSet->getLastError());
// sample call for MerlionServiceSet::setDeleteOrderCommand()
if($merlionServiceSet->setDeleteOrderCommand(new MerlionStructSetDeleteOrderCommand(/*** update parameters list ***/)))
    print_r($merlionServiceSet->getResult());
else
    print_r($merlionServiceSet->getLastError());
// sample call for MerlionServiceSet::setSignOrderCommand()
if($merlionServiceSet->setSignOrderCommand(new MerlionStructSetSignOrderCommand(/*** update parameters list ***/)))
    print_r($merlionServiceSet->getResult());
else
    print_r($merlionServiceSet->getLastError());
