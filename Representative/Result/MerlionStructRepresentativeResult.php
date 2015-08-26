<?php
/**
 * File for class MerlionStructRepresentativeResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructRepresentativeResult originally named RepresentativeResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructRepresentativeResult extends MerlionWsdlClass
{
    /**
     * The Representative
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Representative;
    /**
     * The CounterAgentCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $CounterAgentCode;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $EndDate;
    /**
     * Constructor method for RepresentativeResult
     * @see parent::__construct()
     * @param string $_representative
     * @param string $_counterAgentCode
     * @param string $_startDate
     * @param string $_endDate
     * @return MerlionStructRepresentativeResult
     */
    public function __construct($_representative = NULL,$_counterAgentCode = NULL,$_startDate = NULL,$_endDate = NULL)
    {
        parent::__construct(array('Representative'=>$_representative,'CounterAgentCode'=>$_counterAgentCode,'StartDate'=>$_startDate,'EndDate'=>$_endDate),false);
    }
    /**
     * Get Representative value
     * @return string|null
     */
    public function getRepresentative()
    {
        return $this->Representative;
    }
    /**
     * Set Representative value
     * @param string $_representative the Representative
     * @return string
     */
    public function setRepresentative($_representative)
    {
        return ($this->Representative = $_representative);
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
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $_startDate the StartDate
     * @return string
     */
    public function setStartDate($_startDate)
    {
        return ($this->StartDate = $_startDate);
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $_endDate the EndDate
     * @return string
     */
    public function setEndDate($_endDate)
    {
        return ($this->EndDate = $_endDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructRepresentativeResult
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
