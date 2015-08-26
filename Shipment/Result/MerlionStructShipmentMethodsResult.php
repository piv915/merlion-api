<?php
/**
 * File for class MerlionStructShipmentMethodsResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructShipmentMethodsResult originally named ShipmentMethodsResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructShipmentMethodsResult extends MerlionWsdlClass
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Description;
    /**
     * The IsDefault
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $IsDefault;
    /**
     * Constructor method for ShipmentMethodsResult
     * @see parent::__construct()
     * @param string $_code
     * @param string $_description
     * @param int $_isDefault
     * @return MerlionStructShipmentMethodsResult
     */
    public function __construct($_code = NULL,$_description = NULL,$_isDefault = NULL)
    {
        parent::__construct(array('Code'=>$_code,'Description'=>$_description,'IsDefault'=>$_isDefault),false);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $_code the Code
     * @return string
     */
    public function setCode($_code)
    {
        return ($this->Code = $_code);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $_description the Description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->Description = $_description);
    }
    /**
     * Get IsDefault value
     * @return int|null
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param int $_isDefault the IsDefault
     * @return int
     */
    public function setIsDefault($_isDefault)
    {
        return ($this->IsDefault = $_isDefault);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructShipmentMethodsResult
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
