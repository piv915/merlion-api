<?php
/**
 * File for class MerlionStructGetCurrencyRateResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCurrencyRateResponse originally named getCurrencyRateResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCurrencyRateResponse extends MerlionWsdlClass
{
    /**
     * The getCurrencyRateResult
     * @var MerlionStructArrayOfCurrencyRateResult
     */
    public $getCurrencyRateResult;
    /**
     * Constructor method for getCurrencyRateResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfCurrencyRateResult $_getCurrencyRateResult
     * @return MerlionStructGetCurrencyRateResponse
     */
    public function __construct($_getCurrencyRateResult = NULL)
    {
        parent::__construct(array('getCurrencyRateResult'=>($_getCurrencyRateResult instanceof MerlionStructArrayOfCurrencyRateResult)?$_getCurrencyRateResult:new MerlionStructArrayOfCurrencyRateResult($_getCurrencyRateResult)),false);
    }
    /**
     * Get getCurrencyRateResult value
     * @return MerlionStructArrayOfCurrencyRateResult|null
     */
    public function getGetCurrencyRateResult()
    {
        return $this->getCurrencyRateResult;
    }
    /**
     * Set getCurrencyRateResult value
     * @param MerlionStructArrayOfCurrencyRateResult $_getCurrencyRateResult the getCurrencyRateResult
     * @return MerlionStructArrayOfCurrencyRateResult
     */
    public function setGetCurrencyRateResult($_getCurrencyRateResult)
    {
        return ($this->getCurrencyRateResult = $_getCurrencyRateResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCurrencyRateResponse
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
