<?php
/**
 * File for class MerlionStructGetCounterAgentResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCounterAgentResponse originally named getCounterAgentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCounterAgentResponse extends MerlionWsdlClass
{
    /**
     * The getCounterAgentResult
     * @var MerlionStructArrayOfDictionaryResult
     */
    public $getCounterAgentResult;
    /**
     * Constructor method for getCounterAgentResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfDictionaryResult $_getCounterAgentResult
     * @return MerlionStructGetCounterAgentResponse
     */
    public function __construct($_getCounterAgentResult = NULL)
    {
        parent::__construct(array('getCounterAgentResult'=>($_getCounterAgentResult instanceof MerlionStructArrayOfDictionaryResult)?$_getCounterAgentResult:new MerlionStructArrayOfDictionaryResult($_getCounterAgentResult)),false);
    }
    /**
     * Get getCounterAgentResult value
     * @return MerlionStructArrayOfDictionaryResult|null
     */
    public function getGetCounterAgentResult()
    {
        return $this->getCounterAgentResult;
    }
    /**
     * Set getCounterAgentResult value
     * @param MerlionStructArrayOfDictionaryResult $_getCounterAgentResult the getCounterAgentResult
     * @return MerlionStructArrayOfDictionaryResult
     */
    public function setGetCounterAgentResult($_getCounterAgentResult)
    {
        return ($this->getCounterAgentResult = $_getCounterAgentResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCounterAgentResponse
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
