<?php
/**
 * File for class MerlionStructGetCurrencyRate
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCurrencyRate originally named getCurrencyRate
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCurrencyRate extends MerlionWsdlClass
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $date;
    /**
     * Constructor method for getCurrencyRate
     * @see parent::__construct()
     * @param string $_date
     * @return MerlionStructGetCurrencyRate
     */
    public function __construct($_date = NULL)
    {
        parent::__construct(array('date'=>$_date),false);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $_date the date
     * @return string
     */
    public function setDate($_date)
    {
        return ($this->date = $_date);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCurrencyRate
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
