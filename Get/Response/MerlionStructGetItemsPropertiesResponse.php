<?php
/**
 * File for class MerlionStructGetItemsPropertiesResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetItemsPropertiesResponse originally named getItemsPropertiesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetItemsPropertiesResponse extends MerlionWsdlClass
{
    /**
     * The getItemsPropertiesResult
     * @var MerlionStructArrayOfItemsPropertiesResult
     */
    public $getItemsPropertiesResult;
    /**
     * Constructor method for getItemsPropertiesResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfItemsPropertiesResult $_getItemsPropertiesResult
     * @return MerlionStructGetItemsPropertiesResponse
     */
    public function __construct($_getItemsPropertiesResult = NULL)
    {
        parent::__construct(array('getItemsPropertiesResult'=>($_getItemsPropertiesResult instanceof MerlionStructArrayOfItemsPropertiesResult)?$_getItemsPropertiesResult:new MerlionStructArrayOfItemsPropertiesResult($_getItemsPropertiesResult)),false);
    }
    /**
     * Get getItemsPropertiesResult value
     * @return MerlionStructArrayOfItemsPropertiesResult|null
     */
    public function getGetItemsPropertiesResult()
    {
        return $this->getItemsPropertiesResult;
    }
    /**
     * Set getItemsPropertiesResult value
     * @param MerlionStructArrayOfItemsPropertiesResult $_getItemsPropertiesResult the getItemsPropertiesResult
     * @return MerlionStructArrayOfItemsPropertiesResult
     */
    public function setGetItemsPropertiesResult($_getItemsPropertiesResult)
    {
        return ($this->getItemsPropertiesResult = $_getItemsPropertiesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsPropertiesResponse
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
