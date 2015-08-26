<?php
/**
 * File for class MerlionStructGetCatalogResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCatalogResponse originally named getCatalogResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCatalogResponse extends MerlionWsdlClass
{
    /**
     * The getCatalogResult
     * @var MerlionStructArrayOfCatalogResult
     */
    public $getCatalogResult;
    /**
     * Constructor method for getCatalogResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfCatalogResult $_getCatalogResult
     * @return MerlionStructGetCatalogResponse
     */
    public function __construct($_getCatalogResult = NULL)
    {
        parent::__construct(array('getCatalogResult'=>($_getCatalogResult instanceof MerlionStructArrayOfCatalogResult)?$_getCatalogResult:new MerlionStructArrayOfCatalogResult($_getCatalogResult)),false);
    }
    /**
     * Get getCatalogResult value
     * @return MerlionStructArrayOfCatalogResult|null
     */
    public function getGetCatalogResult()
    {
        return $this->getCatalogResult;
    }
    /**
     * Set getCatalogResult value
     * @param MerlionStructArrayOfCatalogResult $_getCatalogResult the getCatalogResult
     * @return MerlionStructArrayOfCatalogResult
     */
    public function setGetCatalogResult($_getCatalogResult)
    {
        return ($this->getCatalogResult = $_getCatalogResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCatalogResponse
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
