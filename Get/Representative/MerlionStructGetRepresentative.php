<?php
/**
 * File for class MerlionStructGetRepresentative
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetRepresentative originally named getRepresentative
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetRepresentative extends MerlionWsdlClass
{
    /**
     * The CounterAgentCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $CounterAgentCode;
    /**
     * Constructor method for getRepresentative
     * @see parent::__construct()
     * @param string $_counterAgentCode
     * @return MerlionStructGetRepresentative
     */
    public function __construct($_counterAgentCode = NULL)
    {
        parent::__construct(array('CounterAgentCode'=>$_counterAgentCode),false);
    }
    /**
     * Get CounterAgentCode value
     * @return string|null
     */
    public function getCounterAgentCode()
    {
        return $this->CounterAgentCode;
    }
    /**
     * Set CounterAgentCode value
     * @param string $_counterAgentCode the CounterAgentCode
     * @return string
     */
    public function setCounterAgentCode($_counterAgentCode)
    {
        return ($this->CounterAgentCode = $_counterAgentCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetRepresentative
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
