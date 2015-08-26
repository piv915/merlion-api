<?php
/**
 * File for class MerlionStructGetOrderLinesGTDResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetOrderLinesGTDResponse originally named getOrderLinesGTDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetOrderLinesGTDResponse extends MerlionWsdlClass
{
    /**
     * The getOrderLinesGTDResult
     * @var MerlionStructArrayOfOrderLinesGTDResult
     */
    public $getOrderLinesGTDResult;
    /**
     * Constructor method for getOrderLinesGTDResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfOrderLinesGTDResult $_getOrderLinesGTDResult
     * @return MerlionStructGetOrderLinesGTDResponse
     */
    public function __construct($_getOrderLinesGTDResult = NULL)
    {
        parent::__construct(array('getOrderLinesGTDResult'=>($_getOrderLinesGTDResult instanceof MerlionStructArrayOfOrderLinesGTDResult)?$_getOrderLinesGTDResult:new MerlionStructArrayOfOrderLinesGTDResult($_getOrderLinesGTDResult)),false);
    }
    /**
     * Get getOrderLinesGTDResult value
     * @return MerlionStructArrayOfOrderLinesGTDResult|null
     */
    public function getGetOrderLinesGTDResult()
    {
        return $this->getOrderLinesGTDResult;
    }
    /**
     * Set getOrderLinesGTDResult value
     * @param MerlionStructArrayOfOrderLinesGTDResult $_getOrderLinesGTDResult the getOrderLinesGTDResult
     * @return MerlionStructArrayOfOrderLinesGTDResult
     */
    public function setGetOrderLinesGTDResult($_getOrderLinesGTDResult)
    {
        return ($this->getOrderLinesGTDResult = $_getOrderLinesGTDResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetOrderLinesGTDResponse
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
