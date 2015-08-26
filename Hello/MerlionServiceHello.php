<?php
/**
 * File for class MerlionServiceHello
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionServiceHello originally named Hello
 * @package Merlion
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionServiceHello extends MerlionWsdlClass
{
    /**
     * Method to call the operation originally named helloWorld
     * Documentation : Hello World
     * @uses MerlionWsdlClass::getSoapClient()
     * @uses MerlionWsdlClass::setResult()
     * @uses MerlionWsdlClass::saveLastError()
     * @param MerlionStructHelloWorld $_merlionStructHelloWorld
     * @return MerlionStructHelloWorldResponse
     */
    public function helloWorld(MerlionStructHelloWorld $_merlionStructHelloWorld)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->helloWorld($_merlionStructHelloWorld));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MerlionWsdlClass::getResult()
     * @return MerlionStructHelloWorldResponse
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
