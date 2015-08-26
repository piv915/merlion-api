<?php
/**
 * File for class MerlionServiceGet
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionServiceGet originally named Get
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionServiceGet extends MerlionWsdlClass
{
    /**
     * Method to call the operation originally named getCatalog
     * Documentation : Справочник товарных групп
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetCatalog $_qjaoBlStructGetCatalog
     * @return MerlionStructGetCatalogResponse
     */
    public function getCatalog(MerlionStructGetCatalog $_qjaoBlStructGetCatalog)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCatalog($_qjaoBlStructGetCatalog));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getShipmentDates
     * Documentation : Справочник доступных дат отгрузки
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetShipmentDates $_qjaoBlStructGetShipmentDates
     * @return MerlionStructGetShipmentDatesResponse
     */
    public function getShipmentDates(MerlionStructGetShipmentDates $_qjaoBlStructGetShipmentDates)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getShipmentDates($_qjaoBlStructGetShipmentDates));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getShipmentMethods
     * Documentation : Справочник доступных методов отгрузки
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetShipmentMethods $_qjaoBlStructGetShipmentMethods
     * @return MerlionStructGetShipmentMethodsResponse
     */
    public function getShipmentMethods(MerlionStructGetShipmentMethods $_qjaoBlStructGetShipmentMethods)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getShipmentMethods($_qjaoBlStructGetShipmentMethods));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getShipmentAgents
     * Documentation : Справочник агентов по доставке
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetShipmentAgents $_qjaoBlStructGetShipmentAgents
     * @return MerlionStructGetShipmentAgentsResponse
     */
    public function getShipmentAgents(MerlionStructGetShipmentAgents $_qjaoBlStructGetShipmentAgents)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getShipmentAgents($_qjaoBlStructGetShipmentAgents));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCounterAgent
     * Documentation : Справочник контрагентов
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetCounterAgent $_qjaoBlStructGetCounterAgent
     * @return MerlionStructGetCounterAgentResponse
     */
    public function getCounterAgent(MerlionStructGetCounterAgent $_qjaoBlStructGetCounterAgent)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCounterAgent($_qjaoBlStructGetCounterAgent));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getRepresentative
     * Documentation : Справочник представителей
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetRepresentative $_qjaoBlStructGetRepresentative
     * @return MerlionStructGetRepresentativeResponse
     */
    public function getRepresentative(MerlionStructGetRepresentative $_qjaoBlStructGetRepresentative)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getRepresentative($_qjaoBlStructGetRepresentative));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getEndPointDelivery
     * Documentation : Справочник конечных точек доставки
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetEndPointDelivery $_qjaoBlStructGetEndPointDelivery
     * @return MerlionStructGetEndPointDeliveryResponse
     */
    public function getEndPointDelivery(MerlionStructGetEndPointDelivery $_qjaoBlStructGetEndPointDelivery)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getEndPointDelivery($_qjaoBlStructGetEndPointDelivery));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getPackingTypes
     * Documentation : Справочник типов упаковки
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetPackingTypes $_qjaoBlStructGetPackingTypes
     * @return MerlionStructGetPackingTypesResponse
     */
    public function getPackingTypes(MerlionStructGetPackingTypes $_qjaoBlStructGetPackingTypes)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPackingTypes($_qjaoBlStructGetPackingTypes));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getItems
     * Documentation : Справочник товаров
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetItems $_qjaoBlStructGetItems
     * @return MerlionStructGetItemsResponse
     */
    public function getItems(MerlionStructGetItems $_qjaoBlStructGetItems)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItems($_qjaoBlStructGetItems));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getItemsAvail
     * Documentation : Доступное количество товаров и цены
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetItemsAvail $_qjaoBlStructGetItemsAvail
     * @return MerlionStructGetItemsAvailResponse
     */
    public function getItemsAvail(MerlionStructGetItemsAvail $_qjaoBlStructGetItemsAvail)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItemsAvail($_qjaoBlStructGetItemsAvail));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getItemsProperties
     * Documentation : Харатеристики товаров
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetItemsProperties $_qjaoBlStructGetItemsProperties
     * @return MerlionStructGetItemsPropertiesResponse
     */
    public function getItemsProperties(MerlionStructGetItemsProperties $_qjaoBlStructGetItemsProperties)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItemsProperties($_qjaoBlStructGetItemsProperties));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getItemsImages
     * Documentation : Изображения товаров
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetItemsImages $_qjaoBlStructGetItemsImages
     * @return MerlionStructGetItemsImagesResponse
     */
    public function getItemsImages(MerlionStructGetItemsImages $_qjaoBlStructGetItemsImages)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItemsImages($_qjaoBlStructGetItemsImages));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getLinkedItems
     * Documentation : Привязки товаров партнера к товарам Мерлиона
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetLinkedItems $_qjaoBlStructGetLinkedItems
     * @return MerlionStructGetLinkedItemsResponse
     */
    public function getLinkedItems(MerlionStructGetLinkedItems $_qjaoBlStructGetLinkedItems)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getLinkedItems($_qjaoBlStructGetLinkedItems));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getOrdersList
     * Documentation : Список заказов
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetOrdersList $_qjaoBlStructGetOrdersList
     * @return MerlionStructGetOrdersListResponse
     */
    public function getOrdersList(MerlionStructGetOrdersList $_qjaoBlStructGetOrdersList)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getOrdersList($_qjaoBlStructGetOrdersList));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getOrderLines
     * Documentation : Список строк заказа
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetOrderLines $_qjaoBlStructGetOrderLines
     * @return MerlionStructGetOrderLinesResponse
     */
    public function getOrderLines(MerlionStructGetOrderLines $_qjaoBlStructGetOrderLines)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getOrderLines($_qjaoBlStructGetOrderLines));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getOrderLinesGTD
     * Documentation : Список строк заказа с ГТД
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetOrderLinesGTD $_qjaoBlStructGetOrderLinesGTD
     * @return MerlionStructGetOrderLinesGTDResponse
     */
    public function getOrderLinesGTD(MerlionStructGetOrderLinesGTD $_qjaoBlStructGetOrderLinesGTD)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getOrderLinesGTD($_qjaoBlStructGetOrderLinesGTD));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCommandResult
     * Documentation : Результат обработки команды
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetCommandResult $_qjaoBlStructGetCommandResult
     * @return MerlionStructGetCommandResultResponse
     */
    public function getCommandResult(MerlionStructGetCommandResult $_qjaoBlStructGetCommandResult)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCommandResult($_qjaoBlStructGetCommandResult));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCurrencyRate
     * Documentation : Справочник курса валюты
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetCurrencyRate $_qjaoBlStructGetCurrencyRate
     * @return MerlionStructGetCurrencyRateResponse
     */
    public function getCurrencyRate(MerlionStructGetCurrencyRate $_qjaoBlStructGetCurrencyRate)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCurrencyRate($_qjaoBlStructGetCurrencyRate));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getCountry
     * Documentation : Справочник стран
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructGetCountry $_qjaoBlStructGetCountry
     * @return MerlionStructGetCountryResponse
     */
    public function getCountry(MerlionStructGetCountry $_qjaoBlStructGetCountry)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCountry($_qjaoBlStructGetCountry));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MerlionWsdlClass::getResult()
     * @return MerlionStructGetCatalogResponse|MerlionStructGetCommandResultResponse|MerlionStructGetCounterAgentResponse|MerlionStructGetCountryResponse|MerlionStructGetCurrencyRateResponse|MerlionStructGetEndPointDeliveryResponse|MerlionStructGetItemsAvailResponse|MerlionStructGetItemsImagesResponse|MerlionStructGetItemsPropertiesResponse|MerlionStructGetItemsResponse|MerlionStructGetLinkedItemsResponse|MerlionStructGetOrderLinesGTDResponse|MerlionStructGetOrderLinesResponse|MerlionStructGetOrdersListResponse|MerlionStructGetPackingTypesResponse|MerlionStructGetRepresentativeResponse|MerlionStructGetShipmentAgentsResponse|MerlionStructGetShipmentDatesResponse|MerlionStructGetShipmentMethodsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
