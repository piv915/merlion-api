<?php
/**
 * File for class MerlionStructGetRepresentativeResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetRepresentativeResponse originally named getRepresentativeResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetRepresentativeResponse extends MerlionWsdlClass
{
    /**
     * The getRepresentativeResult
     * @var MerlionStructArrayOfRepresentativeResult
     */
    public $getRepresentativeResult;
    /**
     * Constructor method for getRepresentativeResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfRepresentativeResult $_getRepresentativeResult
     * @return MerlionStructGetRepresentativeResponse
     */
    public function __construct($_getRepresentativeResult = NULL)
    {
        parent::__construct(array('getRepresentativeResult'=>($_getRepresentativeResult instanceof MerlionStructArrayOfRepresentativeResult)?$_getRepresentativeResult:new MerlionStructArrayOfRepresentativeResult($_getRepresentativeResult)),false);
    }
    /**
     * Get getRepresentativeResult value
     * @return MerlionStructArrayOfRepresentativeResult|null
     */
    public function getGetRepresentativeResult()
    {
        return $this->getRepresentativeResult;
    }
    /**
     * Set getRepresentativeResult value
     * @param MerlionStructArrayOfRepresentativeResult $_getRepresentativeResult the getRepresentativeResult
     * @return MerlionStructArrayOfRepresentativeResult
     */
    public function setGetRepresentativeResult($_getRepresentativeResult)
    {
        return ($this->getRepresentativeResult = $_getRepresentativeResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetRepresentativeResponse
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
