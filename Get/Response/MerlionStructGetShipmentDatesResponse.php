<?php
/**
 * File for class MerlionStructGetShipmentDatesResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetShipmentDatesResponse originally named getShipmentDatesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetShipmentDatesResponse extends MerlionWsdlClass
{
    /**
     * The getShipmentDatesResult
     * @var MerlionStructArrayOfShipmentDatesResult
     */
    public $getShipmentDatesResult;
    /**
     * Constructor method for getShipmentDatesResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfShipmentDatesResult $_getShipmentDatesResult
     * @return MerlionStructGetShipmentDatesResponse
     */
    public function __construct($_getShipmentDatesResult = NULL)
    {
        parent::__construct(array('getShipmentDatesResult'=>($_getShipmentDatesResult instanceof MerlionStructArrayOfShipmentDatesResult)?$_getShipmentDatesResult:new MerlionStructArrayOfShipmentDatesResult($_getShipmentDatesResult)),false);
    }
    /**
     * Get getShipmentDatesResult value
     * @return MerlionStructArrayOfShipmentDatesResult|null
     */
    public function getGetShipmentDatesResult()
    {
        return $this->getShipmentDatesResult;
    }
    /**
     * Set getShipmentDatesResult value
     * @param MerlionStructArrayOfShipmentDatesResult $_getShipmentDatesResult the getShipmentDatesResult
     * @return MerlionStructArrayOfShipmentDatesResult
     */
    public function setGetShipmentDatesResult($_getShipmentDatesResult)
    {
        return ($this->getShipmentDatesResult = $_getShipmentDatesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetShipmentDatesResponse
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
