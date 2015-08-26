<?php
/**
 * File for class MerlionStructGetShipmentAgentsResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetShipmentAgentsResponse originally named getShipmentAgentsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetShipmentAgentsResponse extends MerlionWsdlClass
{
    /**
     * The getShipmentAgentsResult
     * @var MerlionStructArrayOfDictionaryResult
     */
    public $getShipmentAgentsResult;
    /**
     * Constructor method for getShipmentAgentsResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfDictionaryResult $_getShipmentAgentsResult
     * @return MerlionStructGetShipmentAgentsResponse
     */
    public function __construct($_getShipmentAgentsResult = NULL)
    {
        parent::__construct(array('getShipmentAgentsResult'=>($_getShipmentAgentsResult instanceof MerlionStructArrayOfDictionaryResult)?$_getShipmentAgentsResult:new MerlionStructArrayOfDictionaryResult($_getShipmentAgentsResult)),false);
    }
    /**
     * Get getShipmentAgentsResult value
     * @return MerlionStructArrayOfDictionaryResult|null
     */
    public function getGetShipmentAgentsResult()
    {
        return $this->getShipmentAgentsResult;
    }
    /**
     * Set getShipmentAgentsResult value
     * @param MerlionStructArrayOfDictionaryResult $_getShipmentAgentsResult the getShipmentAgentsResult
     * @return MerlionStructArrayOfDictionaryResult
     */
    public function setGetShipmentAgentsResult($_getShipmentAgentsResult)
    {
        return ($this->getShipmentAgentsResult = $_getShipmentAgentsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetShipmentAgentsResponse
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
