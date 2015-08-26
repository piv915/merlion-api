<?php
/**
 * File for class MerlionStructSetOrderLineCommandResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetOrderLineCommandResponse originally named setOrderLineCommandResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetOrderLineCommandResponse extends MerlionWsdlClass
{
    /**
     * The setOrderLineCommandResult
     * @var int
     */
    public $setOrderLineCommandResult;
    /**
     * Constructor method for setOrderLineCommandResponse
     * @see parent::__construct()
     * @param int $_setOrderLineCommandResult
     * @return MerlionStructSetOrderLineCommandResponse
     */
    public function __construct($_setOrderLineCommandResult = NULL)
    {
        parent::__construct(array('setOrderLineCommandResult'=>$_setOrderLineCommandResult),false);
    }
    /**
     * Get setOrderLineCommandResult value
     * @return int|null
     */
    public function getSetOrderLineCommandResult()
    {
        return $this->setOrderLineCommandResult;
    }
    /**
     * Set setOrderLineCommandResult value
     * @param int $_setOrderLineCommandResult the setOrderLineCommandResult
     * @return int
     */
    public function setSetOrderLineCommandResult($_setOrderLineCommandResult)
    {
        return ($this->setOrderLineCommandResult = $_setOrderLineCommandResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetOrderLineCommandResponse
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
