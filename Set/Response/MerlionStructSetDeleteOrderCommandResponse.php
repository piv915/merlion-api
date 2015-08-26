<?php
/**
 * File for class MerlionStructSetDeleteOrderCommandResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetDeleteOrderCommandResponse originally named setDeleteOrderCommandResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetDeleteOrderCommandResponse extends MerlionWsdlClass
{
    /**
     * The setDeleteOrderCommandResult
     * @var int
     */
    public $setDeleteOrderCommandResult;
    /**
     * Constructor method for setDeleteOrderCommandResponse
     * @see parent::__construct()
     * @param int $_setDeleteOrderCommandResult
     * @return MerlionStructSetDeleteOrderCommandResponse
     */
    public function __construct($_setDeleteOrderCommandResult = NULL)
    {
        parent::__construct(array('setDeleteOrderCommandResult'=>$_setDeleteOrderCommandResult),false);
    }
    /**
     * Get setDeleteOrderCommandResult value
     * @return int|null
     */
    public function getSetDeleteOrderCommandResult()
    {
        return $this->setDeleteOrderCommandResult;
    }
    /**
     * Set setDeleteOrderCommandResult value
     * @param int $_setDeleteOrderCommandResult the setDeleteOrderCommandResult
     * @return int
     */
    public function setSetDeleteOrderCommandResult($_setDeleteOrderCommandResult)
    {
        return ($this->setDeleteOrderCommandResult = $_setDeleteOrderCommandResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetDeleteOrderCommandResponse
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
