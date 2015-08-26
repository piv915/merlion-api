<?php
/**
 * File for class MerlionStructGetCountry
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCountry originally named getCountry
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCountry extends MerlionWsdlClass
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $code;
    /**
     * Constructor method for getCountry
     * @see parent::__construct()
     * @param string $_code
     * @return MerlionStructGetCountry
     */
    public function __construct($_code = NULL)
    {
        parent::__construct(array('code'=>$_code),false);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $_code the code
     * @return string
     */
    public function setCode($_code)
    {
        return ($this->code = $_code);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCountry
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
