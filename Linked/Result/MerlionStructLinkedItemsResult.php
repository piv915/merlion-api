<?php
/**
 * File for class MerlionStructLinkedItemsResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructLinkedItemsResult originally named LinkedItemsResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructLinkedItemsResult extends MerlionWsdlClass
{
    /**
     * The No
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $No;
    /**
     * The Cust_ItemNo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Cust_ItemNo;
    /**
     * The Cust_ItemName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Cust_ItemName;
    /**
     * Constructor method for LinkedItemsResult
     * @see parent::__construct()
     * @param string $_no
     * @param string $_cust_ItemNo
     * @param string $_cust_ItemName
     * @return MerlionStructLinkedItemsResult
     */
    public function __construct($_no = NULL,$_cust_ItemNo = NULL,$_cust_ItemName = NULL)
    {
        parent::__construct(array('No'=>$_no,'Cust_ItemNo'=>$_cust_ItemNo,'Cust_ItemName'=>$_cust_ItemName),false);
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
     * Get Cust_ItemNo value
     * @return string|null
     */
    public function getCust_ItemNo()
    {
        return $this->Cust_ItemNo;
    }
    /**
     * Set Cust_ItemNo value
     * @param string $_cust_ItemNo the Cust_ItemNo
     * @return string
     */
    public function setCust_ItemNo($_cust_ItemNo)
    {
        return ($this->Cust_ItemNo = $_cust_ItemNo);
    }
    /**
     * Get Cust_ItemName value
     * @return string|null
     */
    public function getCust_ItemName()
    {
        return $this->Cust_ItemName;
    }
    /**
     * Set Cust_ItemName value
     * @param string $_cust_ItemName the Cust_ItemName
     * @return string
     */
    public function setCust_ItemName($_cust_ItemName)
    {
        return ($this->Cust_ItemName = $_cust_ItemName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructLinkedItemsResult
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
