<?php
/**
 * File for class MerlionStructGetOrderLinesResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetOrderLinesResponse originally named getOrderLinesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetOrderLinesResponse extends MerlionWsdlClass
{
    /**
     * The getOrderLinesResult
     * @var MerlionStructArrayOfOrderLinesResult
     */
    public $getOrderLinesResult;
    /**
     * Constructor method for getOrderLinesResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfOrderLinesResult $_getOrderLinesResult
     * @return MerlionStructGetOrderLinesResponse
     */
    public function __construct($_getOrderLinesResult = NULL)
    {
        parent::__construct(array('getOrderLinesResult'=>($_getOrderLinesResult instanceof MerlionStructArrayOfOrderLinesResult)?$_getOrderLinesResult:new MerlionStructArrayOfOrderLinesResult($_getOrderLinesResult)),false);
    }
    /**
     * Get getOrderLinesResult value
     * @return MerlionStructArrayOfOrderLinesResult|null
     */
    public function getGetOrderLinesResult()
    {
        return $this->getOrderLinesResult;
    }
    /**
     * Set getOrderLinesResult value
     * @param MerlionStructArrayOfOrderLinesResult $_getOrderLinesResult the getOrderLinesResult
     * @return MerlionStructArrayOfOrderLinesResult
     */
    public function setGetOrderLinesResult($_getOrderLinesResult)
    {
        return ($this->getOrderLinesResult = $_getOrderLinesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetOrderLinesResponse
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
