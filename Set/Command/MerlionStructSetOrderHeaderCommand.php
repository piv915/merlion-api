<?php
/**
 * File for class MerlionStructSetOrderHeaderCommand
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetOrderHeaderCommand originally named setOrderHeaderCommand
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetOrderHeaderCommand extends MerlionWsdlClass
{
    /**
     * The document_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $document_no;
    /**
     * The shipment_method
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipment_method;
    /**
     * The shipment_date
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipment_date;
    /**
     * The counter_agent
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $counter_agent;
    /**
     * The shipment_agent
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipment_agent;
    /**
     * The end_customer
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $end_customer;
    /**
     * The comment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $comment;
    /**
     * The representative
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $representative;
    /**
     * The endpoint_delivery_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $endpoint_delivery_id;
    /**
     * The packing_type
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $packing_type;
    /**
     * Constructor method for setOrderHeaderCommand
     * @see parent::__construct()
     * @param string $_document_no
     * @param string $_shipment_method
     * @param string $_shipment_date
     * @param string $_counter_agent
     * @param string $_shipment_agent
     * @param string $_end_customer
     * @param string $_comment
     * @param string $_representative
     * @param int $_endpoint_delivery_id
     * @param string $_packing_type
     * @return MerlionStructSetOrderHeaderCommand
     */
    public function __construct($_document_no = NULL,$_shipment_method = NULL,$_shipment_date = NULL,$_counter_agent = NULL,$_shipment_agent = NULL,$_end_customer = NULL,$_comment = NULL,$_representative = NULL,$_endpoint_delivery_id = NULL,$_packing_type = NULL)
    {
        parent::__construct(array('document_no'=>$_document_no,'shipment_method'=>$_shipment_method,'shipment_date'=>$_shipment_date,'counter_agent'=>$_counter_agent,'shipment_agent'=>$_shipment_agent,'end_customer'=>$_end_customer,'comment'=>$_comment,'representative'=>$_representative,'endpoint_delivery_id'=>$_endpoint_delivery_id,'packing_type'=>$_packing_type),false);
    }
    /**
     * Get document_no value
     * @return string|null
     */
    public function getDocument_no()
    {
        return $this->document_no;
    }
    /**
     * Set document_no value
     * @param string $_document_no the document_no
     * @return string
     */
    public function setDocument_no($_document_no)
    {
        return ($this->document_no = $_document_no);
    }
    /**
     * Get shipment_method value
     * @return string|null
     */
    public function getShipment_method()
    {
        return $this->shipment_method;
    }
    /**
     * Set shipment_method value
     * @param string $_shipment_method the shipment_method
     * @return string
     */
    public function setShipment_method($_shipment_method)
    {
        return ($this->shipment_method = $_shipment_method);
    }
    /**
     * Get shipment_date value
     * @return string|null
     */
    public function getShipment_date()
    {
        return $this->shipment_date;
    }
    /**
     * Set shipment_date value
     * @param string $_shipment_date the shipment_date
     * @return string
     */
    public function setShipment_date($_shipment_date)
    {
        return ($this->shipment_date = $_shipment_date);
    }
    /**
     * Get counter_agent value
     * @return string|null
     */
    public function getCounter_agent()
    {
        return $this->counter_agent;
    }
    /**
     * Set counter_agent value
     * @param string $_counter_agent the counter_agent
     * @return string
     */
    public function setCounter_agent($_counter_agent)
    {
        return ($this->counter_agent = $_counter_agent);
    }
    /**
     * Get shipment_agent value
     * @return string|null
     */
    public function getShipment_agent()
    {
        return $this->shipment_agent;
    }
    /**
     * Set shipment_agent value
     * @param string $_shipment_agent the shipment_agent
     * @return string
     */
    public function setShipment_agent($_shipment_agent)
    {
        return ($this->shipment_agent = $_shipment_agent);
    }
    /**
     * Get end_customer value
     * @return string|null
     */
    public function getEnd_customer()
    {
        return $this->end_customer;
    }
    /**
     * Set end_customer value
     * @param string $_end_customer the end_customer
     * @return string
     */
    public function setEnd_customer($_end_customer)
    {
        return ($this->end_customer = $_end_customer);
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $_comment the comment
     * @return string
     */
    public function setComment($_comment)
    {
        return ($this->comment = $_comment);
    }
    /**
     * Get representative value
     * @return string|null
     */
    public function getRepresentative()
    {
        return $this->representative;
    }
    /**
     * Set representative value
     * @param string $_representative the representative
     * @return string
     */
    public function setRepresentative($_representative)
    {
        return ($this->representative = $_representative);
    }
    /**
     * Get endpoint_delivery_id value
     * @return int|null
     */
    public function getEndpoint_delivery_id()
    {
        return $this->endpoint_delivery_id;
    }
    /**
     * Set endpoint_delivery_id value
     * @param int $_endpoint_delivery_id the endpoint_delivery_id
     * @return int
     */
    public function setEndpoint_delivery_id($_endpoint_delivery_id)
    {
        return ($this->endpoint_delivery_id = $_endpoint_delivery_id);
    }
    /**
     * Get packing_type value
     * @return string|null
     */
    public function getPacking_type()
    {
        return $this->packing_type;
    }
    /**
     * Set packing_type value
     * @param string $_packing_type the packing_type
     * @return string
     */
    public function setPacking_type($_packing_type)
    {
        return ($this->packing_type = $_packing_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetOrderHeaderCommand
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
