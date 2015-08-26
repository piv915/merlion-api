<?php
/**
 * File for class MerlionStructEndPointDeliveryResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructEndPointDeliveryResult originally named EndPointDeliveryResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructEndPointDeliveryResult extends MerlionWsdlClass
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $ID;
    /**
     * The Endpoint_address
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Endpoint_address;
    /**
     * The Endpoint_contact
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Endpoint_contact;
    /**
     * The ShippingAgentCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShippingAgentCode;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $City;
    /**
     * Constructor method for EndPointDeliveryResult
     * @see parent::__construct()
     * @param int $_iD
     * @param string $_endpoint_address
     * @param string $_endpoint_contact
     * @param string $_shippingAgentCode
     * @param string $_city
     * @return MerlionStructEndPointDeliveryResult
     */
    public function __construct($_iD = NULL,$_endpoint_address = NULL,$_endpoint_contact = NULL,$_shippingAgentCode = NULL,$_city = NULL)
    {
        parent::__construct(array('ID'=>$_iD,'Endpoint_address'=>$_endpoint_address,'Endpoint_contact'=>$_endpoint_contact,'ShippingAgentCode'=>$_shippingAgentCode,'City'=>$_city),false);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $_iD the ID
     * @return int
     */
    public function setID($_iD)
    {
        return ($this->ID = $_iD);
    }
    /**
     * Get Endpoint_address value
     * @return string|null
     */
    public function getEndpoint_address()
    {
        return $this->Endpoint_address;
    }
    /**
     * Set Endpoint_address value
     * @param string $_endpoint_address the Endpoint_address
     * @return string
     */
    public function setEndpoint_address($_endpoint_address)
    {
        return ($this->Endpoint_address = $_endpoint_address);
    }
    /**
     * Get Endpoint_contact value
     * @return string|null
     */
    public function getEndpoint_contact()
    {
        return $this->Endpoint_contact;
    }
    /**
     * Set Endpoint_contact value
     * @param string $_endpoint_contact the Endpoint_contact
     * @return string
     */
    public function setEndpoint_contact($_endpoint_contact)
    {
        return ($this->Endpoint_contact = $_endpoint_contact);
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
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $_city the City
     * @return string
     */
    public function setCity($_city)
    {
        return ($this->City = $_city);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructEndPointDeliveryResult
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
