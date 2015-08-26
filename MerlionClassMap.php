<?php
/**
 * File for the class which returns the class map definition
 * @package Merlion
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * Class which returns the class map definition by the static method MerlionClassMap::classMap()
 * @package Merlion
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'ArrayOfCatalogResult' => 'MerlionStructArrayOfCatalogResult',
  'ArrayOfCommandResult' => 'MerlionStructArrayOfCommandResult',
  'ArrayOfCurrencyRateResult' => 'MerlionStructArrayOfCurrencyRateResult',
  'ArrayOfDictionaryResult' => 'MerlionStructArrayOfDictionaryResult',
  'ArrayOfEndPointDeliveryResult' => 'MerlionStructArrayOfEndPointDeliveryResult',
  'ArrayOfItemsAvailResult' => 'MerlionStructArrayOfItemsAvailResult',
  'ArrayOfItemsImagesResult' => 'MerlionStructArrayOfItemsImagesResult',
  'ArrayOfItemsPropertiesResult' => 'MerlionStructArrayOfItemsPropertiesResult',
  'ArrayOfItemsResult' => 'MerlionStructArrayOfItemsResult',
  'ArrayOfLinkedItemsResult' => 'MerlionStructArrayOfLinkedItemsResult',
  'ArrayOfOrderLinesGTDResult' => 'MerlionStructArrayOfOrderLinesGTDResult',
  'ArrayOfOrderLinesResult' => 'MerlionStructArrayOfOrderLinesResult',
  'ArrayOfOrdersListResult' => 'MerlionStructArrayOfOrdersListResult',
  'ArrayOfRepresentativeResult' => 'MerlionStructArrayOfRepresentativeResult',
  'ArrayOfShipmentDatesResult' => 'MerlionStructArrayOfShipmentDatesResult',
  'ArrayOfShipmentMethodsResult' => 'MerlionStructArrayOfShipmentMethodsResult',
  'CatalogResult' => 'MerlionStructCatalogResult',
  'CommandResult' => 'MerlionStructCommandResult',
  'CurrencyRateResult' => 'MerlionStructCurrencyRateResult',
  'DictionaryResult' => 'MerlionStructDictionaryResult',
  'EndPointDeliveryResult' => 'MerlionStructEndPointDeliveryResult',
  'ItemsAvailResult' => 'MerlionStructItemsAvailResult',
  'ItemsImagesResult' => 'MerlionStructItemsImagesResult',
  'ItemsPropertiesResult' => 'MerlionStructItemsPropertiesResult',
  'ItemsResult' => 'MerlionStructItemsResult',
  'LinkedItemsResult' => 'MerlionStructLinkedItemsResult',
  'OrderLinesGTDResult' => 'MerlionStructOrderLinesGTDResult',
  'OrderLinesResult' => 'MerlionStructOrderLinesResult',
  'OrdersListResult' => 'MerlionStructOrdersListResult',
  'RepresentativeResult' => 'MerlionStructRepresentativeResult',
  'ShipmentDatesResult' => 'MerlionStructShipmentDatesResult',
  'ShipmentMethodsResult' => 'MerlionStructShipmentMethodsResult',
  'getCatalog' => 'MerlionStructGetCatalog',
  'getCatalogResponse' => 'MerlionStructGetCatalogResponse',
  'getCommandResult' => 'MerlionStructGetCommandResult',
  'getCommandResultResponse' => 'MerlionStructGetCommandResultResponse',
  'getCounterAgent' => 'MerlionStructGetCounterAgent',
  'getCounterAgentResponse' => 'MerlionStructGetCounterAgentResponse',
  'getCountry' => 'MerlionStructGetCountry',
  'getCountryResponse' => 'MerlionStructGetCountryResponse',
  'getCurrencyRate' => 'MerlionStructGetCurrencyRate',
  'getCurrencyRateResponse' => 'MerlionStructGetCurrencyRateResponse',
  'getEndPointDelivery' => 'MerlionStructGetEndPointDelivery',
  'getEndPointDeliveryResponse' => 'MerlionStructGetEndPointDeliveryResponse',
  'getItems' => 'MerlionStructGetItems',
  'getItemsAvail' => 'MerlionStructGetItemsAvail',
  'getItemsAvailResponse' => 'MerlionStructGetItemsAvailResponse',
  'getItemsImages' => 'MerlionStructGetItemsImages',
  'getItemsImagesResponse' => 'MerlionStructGetItemsImagesResponse',
  'getItemsProperties' => 'MerlionStructGetItemsProperties',
  'getItemsPropertiesResponse' => 'MerlionStructGetItemsPropertiesResponse',
  'getItemsResponse' => 'MerlionStructGetItemsResponse',
  'getLinkedItems' => 'MerlionStructGetLinkedItems',
  'getLinkedItemsResponse' => 'MerlionStructGetLinkedItemsResponse',
  'getOrderLines' => 'MerlionStructGetOrderLines',
  'getOrderLinesGTD' => 'MerlionStructGetOrderLinesGTD',
  'getOrderLinesGTDResponse' => 'MerlionStructGetOrderLinesGTDResponse',
  'getOrderLinesResponse' => 'MerlionStructGetOrderLinesResponse',
  'getOrdersList' => 'MerlionStructGetOrdersList',
  'getOrdersListResponse' => 'MerlionStructGetOrdersListResponse',
  'getPackingTypes' => 'MerlionStructGetPackingTypes',
  'getPackingTypesResponse' => 'MerlionStructGetPackingTypesResponse',
  'getRepresentative' => 'MerlionStructGetRepresentative',
  'getRepresentativeResponse' => 'MerlionStructGetRepresentativeResponse',
  'getShipmentAgents' => 'MerlionStructGetShipmentAgents',
  'getShipmentAgentsResponse' => 'MerlionStructGetShipmentAgentsResponse',
  'getShipmentDates' => 'MerlionStructGetShipmentDates',
  'getShipmentDatesResponse' => 'MerlionStructGetShipmentDatesResponse',
  'getShipmentMethods' => 'MerlionStructGetShipmentMethods',
  'getShipmentMethodsResponse' => 'MerlionStructGetShipmentMethodsResponse',
  'helloWorld' => 'MerlionStructHelloWorld',
  'helloWorldResponse' => 'MerlionStructHelloWorldResponse',
  'setAddOrderLineCommand' => 'MerlionStructSetAddOrderLineCommand',
  'setAddOrderLineCommandResponse' => 'MerlionStructSetAddOrderLineCommandResponse',
  'setDeleteOrderCommand' => 'MerlionStructSetDeleteOrderCommand',
  'setDeleteOrderCommandResponse' => 'MerlionStructSetDeleteOrderCommandResponse',
  'setMoveOrderLineCommand' => 'MerlionStructSetMoveOrderLineCommand',
  'setMoveOrderLineCommandResponse' => 'MerlionStructSetMoveOrderLineCommandResponse',
  'setOrderHeaderCommand' => 'MerlionStructSetOrderHeaderCommand',
  'setOrderHeaderCommandResponse' => 'MerlionStructSetOrderHeaderCommandResponse',
  'setOrderLineCommand' => 'MerlionStructSetOrderLineCommand',
  'setOrderLineCommandResponse' => 'MerlionStructSetOrderLineCommandResponse',
  'setSignOrderCommand' => 'MerlionStructSetSignOrderCommand',
  'setSignOrderCommandResponse' => 'MerlionStructSetSignOrderCommandResponse',
);
    }
}
