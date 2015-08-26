<?php
/**
 * File for class MerlionStructGetCatalog
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCatalog originally named getCatalog
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCatalog extends MerlionWsdlClass
{
    /**
     * The cat_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $cat_id;
    /**
     * Constructor method for getCatalog
     * @see parent::__construct()
     * @param string $_cat_id
     * @return MerlionStructGetCatalog
     */
    public function __construct($_cat_id = NULL)
    {
        parent::__construct(array('cat_id'=>$_cat_id),false);
    }
    /**
     * Get cat_id value
     * @return string|null
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }
    /**
     * Set cat_id value
     * @param string $_cat_id the cat_id
     * @return string
     */
    public function setCat_id($_cat_id)
    {
        return ($this->cat_id = $_cat_id);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCatalog
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
