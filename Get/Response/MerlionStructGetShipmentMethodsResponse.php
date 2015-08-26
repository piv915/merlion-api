<?php
/**
 * File for class MerlionStructGetShipmentMethodsResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetShipmentMethodsResponse originally named getShipmentMethodsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetShipmentMethodsResponse extends MerlionWsdlClass
{
    /**
     * The getShipmentMethodsResult
     * @var MerlionStructArrayOfShipmentMethodsResult
     */
    public $getShipmentMethodsResult;
    /**
     * Constructor method for getShipmentMethodsResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfShipmentMethodsResult $_getShipmentMethodsResult
     * @return MerlionStructGetShipmentMethodsResponse
     */
    public function __construct($_getShipmentMethodsResult = NULL)
    {
        parent::__construct(array('getShipmentMethodsResult'=>($_getShipmentMethodsResult instanceof MerlionStructArrayOfShipmentMethodsResult)?$_getShipmentMethodsResult:new MerlionStructArrayOfShipmentMethodsResult($_getShipmentMethodsResult)),false);
    }
    /**
     * Get getShipmentMethodsResult value
     * @return MerlionStructArrayOfShipmentMethodsResult|null
     */
    public function getGetShipmentMethodsResult()
    {
        return $this->getShipmentMethodsResult;
    }
    /**
     * Set getShipmentMethodsResult value
     * @param MerlionStructArrayOfShipmentMethodsResult $_getShipmentMethodsResult the getShipmentMethodsResult
     * @return MerlionStructArrayOfShipmentMethodsResult
     */
    public function setGetShipmentMethodsResult($_getShipmentMethodsResult)
    {
        return ($this->getShipmentMethodsResult = $_getShipmentMethodsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetShipmentMethodsResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
