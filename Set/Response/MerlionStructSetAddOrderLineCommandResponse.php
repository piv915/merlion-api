<?php
/**
 * File for class MerlionStructSetAddOrderLineCommandResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetAddOrderLineCommandResponse originally named setAddOrderLineCommandResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetAddOrderLineCommandResponse extends MerlionWsdlClass
{
    /**
     * The setAddOrderLineCommandResult
     * @var int
     */
    public $setAddOrderLineCommandResult;
    /**
     * Constructor method for setAddOrderLineCommandResponse
     * @see parent::__construct()
     * @param int $_setAddOrderLineCommandResult
     * @return MerlionStructSetAddOrderLineCommandResponse
     */
    public function __construct($_setAddOrderLineCommandResult = NULL)
    {
        parent::__construct(array('setAddOrderLineCommandResult'=>$_setAddOrderLineCommandResult),false);
    }
    /**
     * Get setAddOrderLineCommandResult value
     * @return int|null
     */
    public function getSetAddOrderLineCommandResult()
    {
        return $this->setAddOrderLineCommandResult;
    }
    /**
     * Set setAddOrderLineCommandResult value
     * @param int $_setAddOrderLineCommandResult the setAddOrderLineCommandResult
     * @return int
     */
    public function setSetAddOrderLineCommandResult($_setAddOrderLineCommandResult)
    {
        return ($this->setAddOrderLineCommandResult = $_setAddOrderLineCommandResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetAddOrderLineCommandResponse
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
