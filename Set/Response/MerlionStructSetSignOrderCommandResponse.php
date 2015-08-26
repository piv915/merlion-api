<?php
/**
 * File for class MerlionStructSetSignOrderCommandResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetSignOrderCommandResponse originally named setSignOrderCommandResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetSignOrderCommandResponse extends MerlionWsdlClass
{
    /**
     * The setSignOrderCommandResult
     * @var int
     */
    public $setSignOrderCommandResult;
    /**
     * Constructor method for setSignOrderCommandResponse
     * @see parent::__construct()
     * @param int $_setSignOrderCommandResult
     * @return MerlionStructSetSignOrderCommandResponse
     */
    public function __construct($_setSignOrderCommandResult = NULL)
    {
        parent::__construct(array('setSignOrderCommandResult'=>$_setSignOrderCommandResult),false);
    }
    /**
     * Get setSignOrderCommandResult value
     * @return int|null
     */
    public function getSetSignOrderCommandResult()
    {
        return $this->setSignOrderCommandResult;
    }
    /**
     * Set setSignOrderCommandResult value
     * @param int $_setSignOrderCommandResult the setSignOrderCommandResult
     * @return int
     */
    public function setSetSignOrderCommandResult($_setSignOrderCommandResult)
    {
        return ($this->setSignOrderCommandResult = $_setSignOrderCommandResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetSignOrderCommandResponse
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
