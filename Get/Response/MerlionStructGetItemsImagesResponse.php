<?php
/**
 * File for class MerlionStructGetItemsImagesResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetItemsImagesResponse originally named getItemsImagesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetItemsImagesResponse extends MerlionWsdlClass
{
    /**
     * The getItemsImagesResult
     * @var MerlionStructArrayOfItemsImagesResult
     */
    public $getItemsImagesResult;
    /**
     * Constructor method for getItemsImagesResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfItemsImagesResult $_getItemsImagesResult
     * @return MerlionStructGetItemsImagesResponse
     */
    public function __construct($_getItemsImagesResult = NULL)
    {
        parent::__construct(array('getItemsImagesResult'=>($_getItemsImagesResult instanceof MerlionStructArrayOfItemsImagesResult)?$_getItemsImagesResult:new MerlionStructArrayOfItemsImagesResult($_getItemsImagesResult)),false);
    }
    /**
     * Get getItemsImagesResult value
     * @return MerlionStructArrayOfItemsImagesResult|null
     */
    public function getGetItemsImagesResult()
    {
        return $this->getItemsImagesResult;
    }
    /**
     * Set getItemsImagesResult value
     * @param MerlionStructArrayOfItemsImagesResult $_getItemsImagesResult the getItemsImagesResult
     * @return MerlionStructArrayOfItemsImagesResult
     */
    public function setGetItemsImagesResult($_getItemsImagesResult)
    {
        return ($this->getItemsImagesResult = $_getItemsImagesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsImagesResponse
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
