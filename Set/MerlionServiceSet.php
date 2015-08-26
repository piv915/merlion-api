<?php
/**
 * File for class MerlionServiceSet
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionServiceSet originally named Set
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionServiceSet extends MerlionWsdlClass
{
    /**
     * Method to call the operation originally named setOrderHeaderCommand
     * Documentation : Команда для создания или редактирования заголовка заказа
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructSetOrderHeaderCommand $_qjaoBlStructSetOrderHeaderCommand
     * @return MerlionStructSetOrderHeaderCommandResponse
     */
    public function setOrderHeaderCommand(MerlionStructSetOrderHeaderCommand $_qjaoBlStructSetOrderHeaderCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setOrderHeaderCommand($_qjaoBlStructSetOrderHeaderCommand));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named setOrderLineCommand
     * Documentation : Команда для создания строки заказа
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructSetOrderLineCommand $_qjaoBlStructSetOrderLineCommand
     * @return MerlionStructSetOrderLineCommandResponse
     */
    public function setOrderLineCommand(MerlionStructSetOrderLineCommand $_qjaoBlStructSetOrderLineCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setOrderLineCommand($_qjaoBlStructSetOrderLineCommand));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named setAddOrderLineCommand
     * Documentation : Команда для добавления товара в заказ
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructSetAddOrderLineCommand $_qjaoBlStructSetAddOrderLineCommand
     * @return MerlionStructSetAddOrderLineCommandResponse
     */
    public function setAddOrderLineCommand(MerlionStructSetAddOrderLineCommand $_qjaoBlStructSetAddOrderLineCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setAddOrderLineCommand($_qjaoBlStructSetAddOrderLineCommand));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named setMoveOrderLineCommand
     * Documentation : Команда для переноса товара из заказа в заказ
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructSetMoveOrderLineCommand $_qjaoBlStructSetMoveOrderLineCommand
     * @return MerlionStructSetMoveOrderLineCommandResponse
     */
    public function setMoveOrderLineCommand(MerlionStructSetMoveOrderLineCommand $_qjaoBlStructSetMoveOrderLineCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setMoveOrderLineCommand($_qjaoBlStructSetMoveOrderLineCommand));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named setDeleteOrderCommand
     * Documentation : Команда для удаления заказа
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructSetDeleteOrderCommand $_qjaoBlStructSetDeleteOrderCommand
     * @return MerlionStructSetDeleteOrderCommandResponse
     */
    public function setDeleteOrderCommand(MerlionStructSetDeleteOrderCommand $_qjaoBlStructSetDeleteOrderCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setDeleteOrderCommand($_qjaoBlStructSetDeleteOrderCommand));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named setSignOrderCommand
     * Documentation : Команда для подписи заказа
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructSetSignOrderCommand $_qjaoBlStructSetSignOrderCommand
     * @return MerlionStructSetSignOrderCommandResponse
     */
    public function setSignOrderCommand(MerlionStructSetSignOrderCommand $_qjaoBlStructSetSignOrderCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setSignOrderCommand($_qjaoBlStructSetSignOrderCommand));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MerlionWsdlClass::getResult()
     * @return MerlionStructSetAddOrderLineCommandResponse|MerlionStructSetDeleteOrderCommandResponse|MerlionStructSetMoveOrderLineCommandResponse|MerlionStructSetOrderHeaderCommandResponse|MerlionStructSetOrderLineCommandResponse|MerlionStructSetSignOrderCommandResponse
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
