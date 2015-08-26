<?php
/**
 * File for class MerlionStructGetEndPointDeliveryResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetEndPointDeliveryResponse originally named getEndPointDeliveryResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetEndPointDeliveryResponse extends MerlionWsdlClass
{
    /**
     * The getEndPointDeliveryResult
     * @var MerlionStructArrayOfEndPointDeliveryResult
     */
    public $getEndPointDeliveryResult;
    /**
     * Constructor method for getEndPointDeliveryResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfEndPointDeliveryResult $_getEndPointDeliveryResult
     * @return MerlionStructGetEndPointDeliveryResponse
     */
    public function __construct($_getEndPointDeliveryResult = NULL)
    {
        parent::__construct(array('getEndPointDeliveryResult'=>($_getEndPointDeliveryResult instanceof MerlionStructArrayOfEndPointDeliveryResult)?$_getEndPointDeliveryResult:new MerlionStructArrayOfEndPointDeliveryResult($_getEndPointDeliveryResult)),false);
    }
    /**
     * Get getEndPointDeliveryResult value
     * @return MerlionStructArrayOfEndPointDeliveryResult|null
     */
    public function getGetEndPointDeliveryResult()
    {
        return $this->getEndPointDeliveryResult;
    }
    /**
     * Set getEndPointDeliveryResult value
     * @param MerlionStructArrayOfEndPointDeliveryResult $_getEndPointDeliveryResult the getEndPointDeliveryResult
     * @return MerlionStructArrayOfEndPointDeliveryResult
     */
    public function setGetEndPointDeliveryResult($_getEndPointDeliveryResult)
    {
        return ($this->getEndPointDeliveryResult = $_getEndPointDeliveryResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetEndPointDeliveryResponse
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
