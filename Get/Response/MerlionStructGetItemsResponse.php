<?php
/**
 * File for class MerlionStructGetItemsResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetItemsResponse originally named getItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetItemsResponse extends MerlionWsdlClass
{
    /**
     * The getItemsResult
     * @var MerlionStructArrayOfItemsResult
     */
    public $getItemsResult;
    /**
     * Constructor method for getItemsResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfItemsResult $_getItemsResult
     * @return MerlionStructGetItemsResponse
     */
    public function __construct($_getItemsResult = NULL)
    {
        parent::__construct(array('getItemsResult'=>($_getItemsResult instanceof MerlionStructArrayOfItemsResult)?$_getItemsResult:new MerlionStructArrayOfItemsResult($_getItemsResult)),false);
    }
    /**
     * Get getItemsResult value
     * @return MerlionStructArrayOfItemsResult|null
     */
    public function getGetItemsResult()
    {
        return $this->getItemsResult;
    }
    /**
     * Set getItemsResult value
     * @param MerlionStructArrayOfItemsResult $_getItemsResult the getItemsResult
     * @return MerlionStructArrayOfItemsResult
     */
    public function setGetItemsResult($_getItemsResult)
    {
        return ($this->getItemsResult = $_getItemsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsResponse
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
