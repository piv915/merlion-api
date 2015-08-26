<?php
/**
 * File for class MerlionStructSetMoveOrderLineCommandResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetMoveOrderLineCommandResponse originally named setMoveOrderLineCommandResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetMoveOrderLineCommandResponse extends MerlionWsdlClass
{
    /**
     * The setMoveOrderLineCommandResult
     * @var int
     */
    public $setMoveOrderLineCommandResult;
    /**
     * Constructor method for setMoveOrderLineCommandResponse
     * @see parent::__construct()
     * @param int $_setMoveOrderLineCommandResult
     * @return MerlionStructSetMoveOrderLineCommandResponse
     */
    public function __construct($_setMoveOrderLineCommandResult = NULL)
    {
        parent::__construct(array('setMoveOrderLineCommandResult'=>$_setMoveOrderLineCommandResult),false);
    }
    /**
     * Get setMoveOrderLineCommandResult value
     * @return int|null
     */
    public function getSetMoveOrderLineCommandResult()
    {
        return $this->setMoveOrderLineCommandResult;
    }
    /**
     * Set setMoveOrderLineCommandResult value
     * @param int $_setMoveOrderLineCommandResult the setMoveOrderLineCommandResult
     * @return int
     */
    public function setSetMoveOrderLineCommandResult($_setMoveOrderLineCommandResult)
    {
        return ($this->setMoveOrderLineCommandResult = $_setMoveOrderLineCommandResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetMoveOrderLineCommandResponse
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
