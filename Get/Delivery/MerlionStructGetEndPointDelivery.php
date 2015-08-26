<?php
/**
 * File for class MerlionStructGetEndPointDelivery
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetEndPointDelivery originally named getEndPointDelivery
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetEndPointDelivery extends MerlionWsdlClass
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $id;
    /**
     * The ShippingAgentCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShippingAgentCode;
    /**
     * Constructor method for getEndPointDelivery
     * @see parent::__construct()
     * @param int $_id
     * @param string $_shippingAgentCode
     * @return MerlionStructGetEndPointDelivery
     */
    public function __construct($_id = NULL,$_shippingAgentCode = NULL)
    {
        parent::__construct(array('id'=>$_id,'ShippingAgentCode'=>$_shippingAgentCode),false);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $_id the id
     * @return int
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
    }
    /**
     * Get ShippingAgentCode value
     * @return string|null
     */
    public function getShippingAgentCode()
    {
        return $this->ShippingAgentCode;
    }
    /**
     * Set ShippingAgentCode value
     * @param string $_shippingAgentCode the ShippingAgentCode
     * @return string
     */
    public function setShippingAgentCode($_shippingAgentCode)
    {
        return ($this->ShippingAgentCode = $_shippingAgentCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetEndPointDelivery
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
