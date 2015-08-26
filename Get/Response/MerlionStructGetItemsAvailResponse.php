<?php
/**
 * File for class MerlionStructGetItemsAvailResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetItemsAvailResponse originally named getItemsAvailResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetItemsAvailResponse extends MerlionWsdlClass
{
    /**
     * The getItemsAvailResult
     * @var MerlionStructArrayOfItemsAvailResult
     */
    public $getItemsAvailResult;
    /**
     * Constructor method for getItemsAvailResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfItemsAvailResult $_getItemsAvailResult
     * @return MerlionStructGetItemsAvailResponse
     */
    public function __construct($_getItemsAvailResult = NULL)
    {
        parent::__construct(array('getItemsAvailResult'=>($_getItemsAvailResult instanceof MerlionStructArrayOfItemsAvailResult)?$_getItemsAvailResult:new MerlionStructArrayOfItemsAvailResult($_getItemsAvailResult)),false);
    }
    /**
     * Get getItemsAvailResult value
     * @return MerlionStructArrayOfItemsAvailResult|null
     */
    public function getGetItemsAvailResult()
    {
        return $this->getItemsAvailResult;
    }
    /**
     * Set getItemsAvailResult value
     * @param MerlionStructArrayOfItemsAvailResult $_getItemsAvailResult the getItemsAvailResult
     * @return MerlionStructArrayOfItemsAvailResult
     */
    public function setGetItemsAvailResult($_getItemsAvailResult)
    {
        return ($this->getItemsAvailResult = $_getItemsAvailResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsAvailResponse
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
