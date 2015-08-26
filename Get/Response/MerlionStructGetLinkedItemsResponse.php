<?php
/**
 * File for class MerlionStructGetLinkedItemsResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetLinkedItemsResponse originally named getLinkedItemsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetLinkedItemsResponse extends MerlionWsdlClass
{
    /**
     * The getLinkedItemsResult
     * @var MerlionStructArrayOfLinkedItemsResult
     */
    public $getLinkedItemsResult;
    /**
     * Constructor method for getLinkedItemsResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfLinkedItemsResult $_getLinkedItemsResult
     * @return MerlionStructGetLinkedItemsResponse
     */
    public function __construct($_getLinkedItemsResult = NULL)
    {
        parent::__construct(array('getLinkedItemsResult'=>($_getLinkedItemsResult instanceof MerlionStructArrayOfLinkedItemsResult)?$_getLinkedItemsResult:new MerlionStructArrayOfLinkedItemsResult($_getLinkedItemsResult)),false);
    }
    /**
     * Get getLinkedItemsResult value
     * @return MerlionStructArrayOfLinkedItemsResult|null
     */
    public function getGetLinkedItemsResult()
    {
        return $this->getLinkedItemsResult;
    }
    /**
     * Set getLinkedItemsResult value
     * @param MerlionStructArrayOfLinkedItemsResult $_getLinkedItemsResult the getLinkedItemsResult
     * @return MerlionStructArrayOfLinkedItemsResult
     */
    public function setGetLinkedItemsResult($_getLinkedItemsResult)
    {
        return ($this->getLinkedItemsResult = $_getLinkedItemsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetLinkedItemsResponse
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
