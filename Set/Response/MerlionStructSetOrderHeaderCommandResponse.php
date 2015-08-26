<?php
/**
 * File for class MerlionStructSetOrderHeaderCommandResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetOrderHeaderCommandResponse originally named setOrderHeaderCommandResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetOrderHeaderCommandResponse extends MerlionWsdlClass
{
    /**
     * The setOrderHeaderCommandResult
     * @var int
     */
    public $setOrderHeaderCommandResult;
    /**
     * Constructor method for setOrderHeaderCommandResponse
     * @see parent::__construct()
     * @param int $_setOrderHeaderCommandResult
     * @return MerlionStructSetOrderHeaderCommandResponse
     */
    public function __construct($_setOrderHeaderCommandResult = NULL)
    {
        parent::__construct(array('setOrderHeaderCommandResult'=>$_setOrderHeaderCommandResult),false);
    }
    /**
     * Get setOrderHeaderCommandResult value
     * @return int|null
     */
    public function getSetOrderHeaderCommandResult()
    {
        return $this->setOrderHeaderCommandResult;
    }
    /**
     * Set setOrderHeaderCommandResult value
     * @param int $_setOrderHeaderCommandResult the setOrderHeaderCommandResult
     * @return int
     */
    public function setSetOrderHeaderCommandResult($_setOrderHeaderCommandResult)
    {
        return ($this->setOrderHeaderCommandResult = $_setOrderHeaderCommandResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetOrderHeaderCommandResponse
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
