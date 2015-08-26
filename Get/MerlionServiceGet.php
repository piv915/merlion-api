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
     * @param MerlionStructGetCatalog $_merlionStructGetCatalog
     * @return MerlionStructGetCatalogResponse
     */
    public function getCatalog(MerlionStructGetCatalog $_merlionStructGetCatalog)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCatalog($_merlionStructGetCatalog));
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
     * @param MerlionStructGetShipmentDates $_merlionStructGetShipmentDates
     * @return MerlionStructGetShipmentDatesResponse
     */
    public function getShipmentDates(MerlionStructGetShipmentDates $_merlionStructGetShipmentDates)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getShipmentDates($_merlionStructGetShipmentDates));
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
     * @param MerlionStructGetShipmentMethods $_merlionStructGetShipmentMethods
     * @return MerlionStructGetShipmentMethodsResponse
     */
    public function getShipmentMethods(MerlionStructGetShipmentMethods $_merlionStructGetShipmentMethods)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getShipmentMethods($_merlionStructGetShipmentMethods));
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
     * @param MerlionStructGetShipmentAgents $_merlionStructGetShipmentAgents
     * @return MerlionStructGetShipmentAgentsResponse
     */
    public function getShipmentAgents(MerlionStructGetShipmentAgents $_merlionStructGetShipmentAgents)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getShipmentAgents($_merlionStructGetShipmentAgents));
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
     * @param MerlionStructGetCounterAgent $_merlionStructGetCounterAgent
     * @return MerlionStructGetCounterAgentResponse
     */
    public function getCounterAgent(MerlionStructGetCounterAgent $_merlionStructGetCounterAgent)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCounterAgent($_merlionStructGetCounterAgent));
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
     * @param MerlionStructGetRepresentative $_merlionStructGetRepresentative
     * @return MerlionStructGetRepresentativeResponse
     */
    public function getRepresentative(MerlionStructGetRepresentative $_merlionStructGetRepresentative)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getRepresentative($_merlionStructGetRepresentative));
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
     * @param MerlionStructGetEndPointDelivery $_merlionStructGetEndPointDelivery
     * @return MerlionStructGetEndPointDeliveryResponse
     */
    public function getEndPointDelivery(MerlionStructGetEndPointDelivery $_merlionStructGetEndPointDelivery)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getEndPointDelivery($_merlionStructGetEndPointDelivery));
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
     * @param MerlionStructGetPackingTypes $_merlionStructGetPackingTypes
     * @return MerlionStructGetPackingTypesResponse
     */
    public function getPackingTypes(MerlionStructGetPackingTypes $_merlionStructGetPackingTypes)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPackingTypes($_merlionStructGetPackingTypes));
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
     * @param MerlionStructGetItems $_merlionStructGetItems
     * @return MerlionStructGetItemsResponse
     */
    public function getItems(MerlionStructGetItems $_merlionStructGetItems)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItems($_merlionStructGetItems));
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
     * @param MerlionStructGetItemsAvail $_merlionStructGetItemsAvail
     * @return MerlionStructGetItemsAvailResponse
     */
    public function getItemsAvail(MerlionStructGetItemsAvail $_merlionStructGetItemsAvail)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItemsAvail($_merlionStructGetItemsAvail));
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
     * @param MerlionStructGetItemsProperties $_merlionStructGetItemsProperties
     * @return MerlionStructGetItemsPropertiesResponse
     */
    public function getItemsProperties(MerlionStructGetItemsProperties $_merlionStructGetItemsProperties)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItemsProperties($_merlionStructGetItemsProperties));
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
     * @param MerlionStructGetItemsImages $_merlionStructGetItemsImages
     * @return MerlionStructGetItemsImagesResponse
     */
    public function getItemsImages(MerlionStructGetItemsImages $_merlionStructGetItemsImages)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getItemsImages($_merlionStructGetItemsImages));
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
     * @param MerlionStructGetLinkedItems $_merlionStructGetLinkedItems
     * @return MerlionStructGetLinkedItemsResponse
     */
    public function getLinkedItems(MerlionStructGetLinkedItems $_merlionStructGetLinkedItems)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getLinkedItems($_merlionStructGetLinkedItems));
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
     * @param MerlionStructGetOrdersList $_merlionStructGetOrdersList
     * @return MerlionStructGetOrdersListResponse
     */
    public function getOrdersList(MerlionStructGetOrdersList $_merlionStructGetOrdersList)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getOrdersList($_merlionStructGetOrdersList));
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
     * @param MerlionStructGetOrderLines $_merlionStructGetOrderLines
     * @return MerlionStructGetOrderLinesResponse
     */
    public function getOrderLines(MerlionStructGetOrderLines $_merlionStructGetOrderLines)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getOrderLines($_merlionStructGetOrderLines));
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
     * @param MerlionStructGetOrderLinesGTD $_merlionStructGetOrderLinesGTD
     * @return MerlionStructGetOrderLinesGTDResponse
     */
    public function getOrderLinesGTD(MerlionStructGetOrderLinesGTD $_merlionStructGetOrderLinesGTD)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getOrderLinesGTD($_merlionStructGetOrderLinesGTD));
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
     * @param MerlionStructGetCommandResult $_merlionStructGetCommandResult
     * @return MerlionStructGetCommandResultResponse
     */
    public function getCommandResult(MerlionStructGetCommandResult $_merlionStructGetCommandResult)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCommandResult($_merlionStructGetCommandResult));
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
     * @param MerlionStructGetCurrencyRate $_merlionStructGetCurrencyRate
     * @return MerlionStructGetCurrencyRateResponse
     */
    public function getCurrencyRate(MerlionStructGetCurrencyRate $_merlionStructGetCurrencyRate)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCurrencyRate($_merlionStructGetCurrencyRate));
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
     * @param MerlionStructGetCountry $_merlionStructGetCountry
     * @return MerlionStructGetCountryResponse
     */
    public function getCountry(MerlionStructGetCountry $_merlionStructGetCountry)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getCountry($_merlionStructGetCountry));
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
