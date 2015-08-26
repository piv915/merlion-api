<?php
/**
 * File for class MerlionStructGetPackingTypesResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetPackingTypesResponse originally named getPackingTypesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetPackingTypesResponse extends MerlionWsdlClass
{
    /**
     * The getPackingTypesResult
     * @var MerlionStructArrayOfDictionaryResult
     */
    public $getPackingTypesResult;
    /**
     * Constructor method for getPackingTypesResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfDictionaryResult $_getPackingTypesResult
     * @return MerlionStructGetPackingTypesResponse
     */
    public function __construct($_getPackingTypesResult = NULL)
    {
        parent::__construct(array('getPackingTypesResult'=>($_getPackingTypesResult instanceof MerlionStructArrayOfDictionaryResult)?$_getPackingTypesResult:new MerlionStructArrayOfDictionaryResult($_getPackingTypesResult)),false);
    }
    /**
     * Get getPackingTypesResult value
     * @return MerlionStructArrayOfDictionaryResult|null
     */
    public function getGetPackingTypesResult()
    {
        return $this->getPackingTypesResult;
    }
    /**
     * Set getPackingTypesResult value
     * @param MerlionStructArrayOfDictionaryResult $_getPackingTypesResult the getPackingTypesResult
     * @return MerlionStructArrayOfDictionaryResult
     */
    public function setGetPackingTypesResult($_getPackingTypesResult)
    {
        return ($this->getPackingTypesResult = $_getPackingTypesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetPackingTypesResponse
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
