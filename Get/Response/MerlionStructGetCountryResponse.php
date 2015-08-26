<?php
/**
 * File for class MerlionStructGetCountryResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCountryResponse originally named getCountryResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCountryResponse extends MerlionWsdlClass
{
    /**
     * The getCountryResult
     * @var MerlionStructArrayOfDictionaryResult
     */
    public $getCountryResult;
    /**
     * Constructor method for getCountryResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfDictionaryResult $_getCountryResult
     * @return MerlionStructGetCountryResponse
     */
    public function __construct($_getCountryResult = NULL)
    {
        parent::__construct(array('getCountryResult'=>($_getCountryResult instanceof MerlionStructArrayOfDictionaryResult)?$_getCountryResult:new MerlionStructArrayOfDictionaryResult($_getCountryResult)),false);
    }
    /**
     * Get getCountryResult value
     * @return MerlionStructArrayOfDictionaryResult|null
     */
    public function getGetCountryResult()
    {
        return $this->getCountryResult;
    }
    /**
     * Set getCountryResult value
     * @param MerlionStructArrayOfDictionaryResult $_getCountryResult the getCountryResult
     * @return MerlionStructArrayOfDictionaryResult
     */
    public function setGetCountryResult($_getCountryResult)
    {
        return ($this->getCountryResult = $_getCountryResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCountryResponse
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
