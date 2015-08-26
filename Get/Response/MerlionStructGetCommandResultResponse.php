<?php
/**
 * File for class MerlionStructGetCommandResultResponse
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetCommandResultResponse originally named getCommandResultResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetCommandResultResponse extends MerlionWsdlClass
{
    /**
     * The getCommandResultResult
     * @var MerlionStructArrayOfCommandResult
     */
    public $getCommandResultResult;
    /**
     * Constructor method for getCommandResultResponse
     * @see parent::__construct()
     * @param MerlionStructArrayOfCommandResult $_getCommandResultResult
     * @return MerlionStructGetCommandResultResponse
     */
    public function __construct($_getCommandResultResult = NULL)
    {
        parent::__construct(array('getCommandResultResult'=>($_getCommandResultResult instanceof MerlionStructArrayOfCommandResult)?$_getCommandResultResult:new MerlionStructArrayOfCommandResult($_getCommandResultResult)),false);
    }
    /**
     * Get getCommandResultResult value
     * @return MerlionStructArrayOfCommandResult|null
     */
    public function getGetCommandResultResult()
    {
        return $this->getCommandResultResult;
    }
    /**
     * Set getCommandResultResult value
     * @param MerlionStructArrayOfCommandResult $_getCommandResultResult the getCommandResultResult
     * @return MerlionStructArrayOfCommandResult
     */
    public function setGetCommandResultResult($_getCommandResultResult)
    {
        return ($this->getCommandResultResult = $_getCommandResultResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetCommandResultResponse
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
