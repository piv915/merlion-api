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
     * @param MerlionStructSetOrderHeaderCommand $_merlionStructSetOrderHeaderCommand
     * @return MerlionStructSetOrderHeaderCommandResponse
     */
    public function setOrderHeaderCommand(MerlionStructSetOrderHeaderCommand $_merlionStructSetOrderHeaderCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setOrderHeaderCommand($_merlionStructSetOrderHeaderCommand));
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
     * @param MerlionStructSetOrderLineCommand $_merlionStructSetOrderLineCommand
     * @return MerlionStructSetOrderLineCommandResponse
     */
    public function setOrderLineCommand(MerlionStructSetOrderLineCommand $_merlionStructSetOrderLineCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setOrderLineCommand($_merlionStructSetOrderLineCommand));
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
     * @param MerlionStructSetAddOrderLineCommand $_merlionStructSetAddOrderLineCommand
     * @return MerlionStructSetAddOrderLineCommandResponse
     */
    public function setAddOrderLineCommand(MerlionStructSetAddOrderLineCommand $_merlionStructSetAddOrderLineCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setAddOrderLineCommand($_merlionStructSetAddOrderLineCommand));
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
     * @param MerlionStructSetMoveOrderLineCommand $_merlionStructSetMoveOrderLineCommand
     * @return MerlionStructSetMoveOrderLineCommandResponse
     */
    public function setMoveOrderLineCommand(MerlionStructSetMoveOrderLineCommand $_merlionStructSetMoveOrderLineCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setMoveOrderLineCommand($_merlionStructSetMoveOrderLineCommand));
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
     * @param MerlionStructSetDeleteOrderCommand $_merlionStructSetDeleteOrderCommand
     * @return MerlionStructSetDeleteOrderCommandResponse
     */
    public function setDeleteOrderCommand(MerlionStructSetDeleteOrderCommand $_merlionStructSetDeleteOrderCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setDeleteOrderCommand($_merlionStructSetDeleteOrderCommand));
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
     * @param MerlionStructSetSignOrderCommand $_merlionStructSetSignOrderCommand
     * @return MerlionStructSetSignOrderCommandResponse
     */
    public function setSignOrderCommand(MerlionStructSetSignOrderCommand $_merlionStructSetSignOrderCommand)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->setSignOrderCommand($_merlionStructSetSignOrderCommand));
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
