<?php
/**
 * File for class MerlionStructCurrencyRateResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructCurrencyRateResult originally named CurrencyRateResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructCurrencyRateResult extends MerlionWsdlClass
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Code;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Date;
    /**
     * The ExchangeRate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $ExchangeRate;
    /**
     * Constructor method for CurrencyRateResult
     * @see parent::__construct()
     * @param string $_code
     * @param string $_date
     * @param float $_exchangeRate
     * @return MerlionStructCurrencyRateResult
     */
    public function __construct($_code = NULL,$_date = NULL,$_exchangeRate = NULL)
    {
        parent::__construct(array('Code'=>$_code,'Date'=>$_date,'ExchangeRate'=>$_exchangeRate),false);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $_code the Code
     * @return string
     */
    public function setCode($_code)
    {
        return ($this->Code = $_code);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $_date the Date
     * @return string
     */
    public function setDate($_date)
    {
        return ($this->Date = $_date);
    }
    /**
     * Get ExchangeRate value
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }
    /**
     * Set ExchangeRate value
     * @param float $_exchangeRate the ExchangeRate
     * @return float
     */
    public function setExchangeRate($_exchangeRate)
    {
        return ($this->ExchangeRate = $_exchangeRate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructCurrencyRateResult
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
