<?php
/**
 * File for class MerlionStructItemsPropertiesResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructItemsPropertiesResult originally named ItemsPropertiesResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructItemsPropertiesResult extends MerlionWsdlClass
{
    /**
     * The No
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $No;
    /**
     * The PropertyID
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $PropertyID;
    /**
     * The PropertyName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $PropertyName;
    /**
     * The Sorting
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Sorting;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for ItemsPropertiesResult
     * @see parent::__construct()
     * @param string $_no
     * @param int $_propertyID
     * @param string $_propertyName
     * @param int $_sorting
     * @param string $_value
     * @return MerlionStructItemsPropertiesResult
     */
    public function __construct($_no = NULL,$_propertyID = NULL,$_propertyName = NULL,$_sorting = NULL,$_value = NULL)
    {
        parent::__construct(array('No'=>$_no,'PropertyID'=>$_propertyID,'PropertyName'=>$_propertyName,'Sorting'=>$_sorting,'Value'=>$_value),false);
    }
    /**
     * Get No value
     * @return string|null
     */
    public function getNo()
    {
        return $this->No;
    }
    /**
     * Set No value
     * @param string $_no the No
     * @return string
     */
    public function setNo($_no)
    {
        return ($this->No = $_no);
    }
    /**
     * Get PropertyID value
     * @return int|null
     */
    public function getPropertyID()
    {
        return $this->PropertyID;
    }
    /**
     * Set PropertyID value
     * @param int $_propertyID the PropertyID
     * @return int
     */
    public function setPropertyID($_propertyID)
    {
        return ($this->PropertyID = $_propertyID);
    }
    /**
     * Get PropertyName value
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }
    /**
     * Set PropertyName value
     * @param string $_propertyName the PropertyName
     * @return string
     */
    public function setPropertyName($_propertyName)
    {
        return ($this->PropertyName = $_propertyName);
    }
    /**
     * Get Sorting value
     * @return int|null
     */
    public function getSorting()
    {
        return $this->Sorting;
    }
    /**
     * Set Sorting value
     * @param int $_sorting the Sorting
     * @return int
     */
    public function setSorting($_sorting)
    {
        return ($this->Sorting = $_sorting);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $_value the Value
     * @return string
     */
    public function setValue($_value)
    {
        return ($this->Value = $_value);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructItemsPropertiesResult
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
