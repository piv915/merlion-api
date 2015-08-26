<?php
/**
 * File for class MerlionStructOrdersListResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructOrdersListResult originally named OrdersListResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructOrdersListResult extends MerlionWsdlClass
{
    /**
     * The document_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $document_no;
    /**
     * The PostedDocumentNo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $PostedDocumentNo;
    /**
     * The TNN
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $TNN;
    /**
     * The OrderDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $OrderDate;
    /**
     * The Manager
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Manager;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Contact;
    /**
     * The ShipmentMethod
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShipmentMethod;
    /**
     * The ShipmentMethodCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShipmentMethodCode;
    /**
     * The ShipmentDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShipmentDate;
    /**
     * The ActualShipmentDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ActualShipmentDate;
    /**
     * The CounterpartyClient
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $CounterpartyClient;
    /**
     * The CounterpartyClientCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $CounterpartyClientCode;
    /**
     * The ShippingAgent
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShippingAgent;
    /**
     * The ShippingAgentCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ShippingAgentCode;
    /**
     * The EndCustomer
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $EndCustomer;
    /**
     * The PostingDescription
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $PostingDescription;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $Volume;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $Amount;
    /**
     * The AmountRUR
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $AmountRUR;
    /**
     * The WillDeleteTomorrow
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $WillDeleteTomorrow;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Status;
    /**
     * The EndPointCity
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $EndPointCity;
    /**
     * The EndPointAdress
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $EndPointAdress;
    /**
     * The EndPointContact
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $EndPointContact;
    /**
     * The PackingType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $PackingType;
    /**
     * The Representative
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Representative;
    /**
     * Constructor method for OrdersListResult
     * @see parent::__construct()
     * @param string $_document_no
     * @param string $_postedDocumentNo
     * @param string $_tNN
     * @param string $_orderDate
     * @param string $_manager
     * @param string $_contact
     * @param string $_shipmentMethod
     * @param string $_shipmentMethodCode
     * @param string $_shipmentDate
     * @param string $_actualShipmentDate
     * @param string $_counterpartyClient
     * @param string $_counterpartyClientCode
     * @param string $_shippingAgent
     * @param string $_shippingAgentCode
     * @param string $_endCustomer
     * @param string $_postingDescription
     * @param string $_weight
     * @param float $_volume
     * @param float $_amount
     * @param float $_amountRUR
     * @param string $_willDeleteTomorrow
     * @param string $_status
     * @param string $_endPointCity
     * @param string $_endPointAdress
     * @param string $_endPointContact
     * @param string $_packingType
     * @param string $_representative
     * @return MerlionStructOrdersListResult
     */
    public function __construct($_document_no = NULL,$_postedDocumentNo = NULL,$_tNN = NULL,$_orderDate = NULL,$_manager = NULL,$_contact = NULL,$_shipmentMethod = NULL,$_shipmentMethodCode = NULL,$_shipmentDate = NULL,$_actualShipmentDate = NULL,$_counterpartyClient = NULL,$_counterpartyClientCode = NULL,$_shippingAgent = NULL,$_shippingAgentCode = NULL,$_endCustomer = NULL,$_postingDescription = NULL,$_weight = NULL,$_volume = NULL,$_amount = NULL,$_amountRUR = NULL,$_willDeleteTomorrow = NULL,$_status = NULL,$_endPointCity = NULL,$_endPointAdress = NULL,$_endPointContact = NULL,$_packingType = NULL,$_representative = NULL)
    {
        parent::__construct(array('document_no'=>$_document_no,'PostedDocumentNo'=>$_postedDocumentNo,'TNN'=>$_tNN,'OrderDate'=>$_orderDate,'Manager'=>$_manager,'Contact'=>$_contact,'ShipmentMethod'=>$_shipmentMethod,'ShipmentMethodCode'=>$_shipmentMethodCode,'ShipmentDate'=>$_shipmentDate,'ActualShipmentDate'=>$_actualShipmentDate,'CounterpartyClient'=>$_counterpartyClient,'CounterpartyClientCode'=>$_counterpartyClientCode,'ShippingAgent'=>$_shippingAgent,'ShippingAgentCode'=>$_shippingAgentCode,'EndCustomer'=>$_endCustomer,'PostingDescription'=>$_postingDescription,'Weight'=>$_weight,'Volume'=>$_volume,'Amount'=>$_amount,'AmountRUR'=>$_amountRUR,'WillDeleteTomorrow'=>$_willDeleteTomorrow,'Status'=>$_status,'EndPointCity'=>$_endPointCity,'EndPointAdress'=>$_endPointAdress,'EndPointContact'=>$_endPointContact,'PackingType'=>$_packingType,'Representative'=>$_representative),false);
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
     * Get PostedDocumentNo value
     * @return string|null
     */
    public function getPostedDocumentNo()
    {
        return $this->PostedDocumentNo;
    }
    /**
     * Set PostedDocumentNo value
     * @param string $_postedDocumentNo the PostedDocumentNo
     * @return string
     */
    public function setPostedDocumentNo($_postedDocumentNo)
    {
        return ($this->PostedDocumentNo = $_postedDocumentNo);
    }
    /**
     * Get TNN value
     * @return string|null
     */
    public function getTNN()
    {
        return $this->TNN;
    }
    /**
     * Set TNN value
     * @param string $_tNN the TNN
     * @return string
     */
    public function setTNN($_tNN)
    {
        return ($this->TNN = $_tNN);
    }
    /**
     * Get OrderDate value
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }
    /**
     * Set OrderDate value
     * @param string $_orderDate the OrderDate
     * @return string
     */
    public function setOrderDate($_orderDate)
    {
        return ($this->OrderDate = $_orderDate);
    }
    /**
     * Get Manager value
     * @return string|null
     */
    public function getManager()
    {
        return $this->Manager;
    }
    /**
     * Set Manager value
     * @param string $_manager the Manager
     * @return string
     */
    public function setManager($_manager)
    {
        return ($this->Manager = $_manager);
    }
    /**
     * Get Contact value
     * @return string|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param string $_contact the Contact
     * @return string
     */
    public function setContact($_contact)
    {
        return ($this->Contact = $_contact);
    }
    /**
     * Get ShipmentMethod value
     * @return string|null
     */
    public function getShipmentMethod()
    {
        return $this->ShipmentMethod;
    }
    /**
     * Set ShipmentMethod value
     * @param string $_shipmentMethod the ShipmentMethod
     * @return string
     */
    public function setShipmentMethod($_shipmentMethod)
    {
        return ($this->ShipmentMethod = $_shipmentMethod);
    }
    /**
     * Get ShipmentMethodCode value
     * @return string|null
     */
    public function getShipmentMethodCode()
    {
        return $this->ShipmentMethodCode;
    }
    /**
     * Set ShipmentMethodCode value
     * @param string $_shipmentMethodCode the ShipmentMethodCode
     * @return string
     */
    public function setShipmentMethodCode($_shipmentMethodCode)
    {
        return ($this->ShipmentMethodCode = $_shipmentMethodCode);
    }
    /**
     * Get ShipmentDate value
     * @return string|null
     */
    public function getShipmentDate()
    {
        return $this->ShipmentDate;
    }
    /**
     * Set ShipmentDate value
     * @param string $_shipmentDate the ShipmentDate
     * @return string
     */
    public function setShipmentDate($_shipmentDate)
    {
        return ($this->ShipmentDate = $_shipmentDate);
    }
    /**
     * Get ActualShipmentDate value
     * @return string|null
     */
    public function getActualShipmentDate()
    {
        return $this->ActualShipmentDate;
    }
    /**
     * Set ActualShipmentDate value
     * @param string $_actualShipmentDate the ActualShipmentDate
     * @return string
     */
    public function setActualShipmentDate($_actualShipmentDate)
    {
        return ($this->ActualShipmentDate = $_actualShipmentDate);
    }
    /**
     * Get CounterpartyClient value
     * @return string|null
     */
    public function getCounterpartyClient()
    {
        return $this->CounterpartyClient;
    }
    /**
     * Set CounterpartyClient value
     * @param string $_counterpartyClient the CounterpartyClient
     * @return string
     */
    public function setCounterpartyClient($_counterpartyClient)
    {
        return ($this->CounterpartyClient = $_counterpartyClient);
    }
    /**
     * Get CounterpartyClientCode value
     * @return string|null
     */
    public function getCounterpartyClientCode()
    {
        return $this->CounterpartyClientCode;
    }
    /**
     * Set CounterpartyClientCode value
     * @param string $_counterpartyClientCode the CounterpartyClientCode
     * @return string
     */
    public function setCounterpartyClientCode($_counterpartyClientCode)
    {
        return ($this->CounterpartyClientCode = $_counterpartyClientCode);
    }
    /**
     * Get ShippingAgent value
     * @return string|null
     */
    public function getShippingAgent()
    {
        return $this->ShippingAgent;
    }
    /**
     * Set ShippingAgent value
     * @param string $_shippingAgent the ShippingAgent
     * @return string
     */
    public function setShippingAgent($_shippingAgent)
    {
        return ($this->ShippingAgent = $_shippingAgent);
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
     * Get EndCustomer value
     * @return string|null
     */
    public function getEndCustomer()
    {
        return $this->EndCustomer;
    }
    /**
     * Set EndCustomer value
     * @param string $_endCustomer the EndCustomer
     * @return string
     */
    public function setEndCustomer($_endCustomer)
    {
        return ($this->EndCustomer = $_endCustomer);
    }
    /**
     * Get PostingDescription value
     * @return string|null
     */
    public function getPostingDescription()
    {
        return $this->PostingDescription;
    }
    /**
     * Set PostingDescription value
     * @param string $_postingDescription the PostingDescription
     * @return string
     */
    public function setPostingDescription($_postingDescription)
    {
        return ($this->PostingDescription = $_postingDescription);
    }
    /**
     * Get Weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param string $_weight the Weight
     * @return string
     */
    public function setWeight($_weight)
    {
        return ($this->Weight = $_weight);
    }
    /**
     * Get Volume value
     * @return float|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param float $_volume the Volume
     * @return float
     */
    public function setVolume($_volume)
    {
        return ($this->Volume = $_volume);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $_amount the Amount
     * @return float
     */
    public function setAmount($_amount)
    {
        return ($this->Amount = $_amount);
    }
    /**
     * Get AmountRUR value
     * @return float|null
     */
    public function getAmountRUR()
    {
        return $this->AmountRUR;
    }
    /**
     * Set AmountRUR value
     * @param float $_amountRUR the AmountRUR
     * @return float
     */
    public function setAmountRUR($_amountRUR)
    {
        return ($this->AmountRUR = $_amountRUR);
    }
    /**
     * Get WillDeleteTomorrow value
     * @return string|null
     */
    public function getWillDeleteTomorrow()
    {
        return $this->WillDeleteTomorrow;
    }
    /**
     * Set WillDeleteTomorrow value
     * @param string $_willDeleteTomorrow the WillDeleteTomorrow
     * @return string
     */
    public function setWillDeleteTomorrow($_willDeleteTomorrow)
    {
        return ($this->WillDeleteTomorrow = $_willDeleteTomorrow);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $_status the Status
     * @return string
     */
    public function setStatus($_status)
    {
        return ($this->Status = $_status);
    }
    /**
     * Get EndPointCity value
     * @return string|null
     */
    public function getEndPointCity()
    {
        return $this->EndPointCity;
    }
    /**
     * Set EndPointCity value
     * @param string $_endPointCity the EndPointCity
     * @return string
     */
    public function setEndPointCity($_endPointCity)
    {
        return ($this->EndPointCity = $_endPointCity);
    }
    /**
     * Get EndPointAdress value
     * @return string|null
     */
    public function getEndPointAdress()
    {
        return $this->EndPointAdress;
    }
    /**
     * Set EndPointAdress value
     * @param string $_endPointAdress the EndPointAdress
     * @return string
     */
    public function setEndPointAdress($_endPointAdress)
    {
        return ($this->EndPointAdress = $_endPointAdress);
    }
    /**
     * Get EndPointContact value
     * @return string|null
     */
    public function getEndPointContact()
    {
        return $this->EndPointContact;
    }
    /**
     * Set EndPointContact value
     * @param string $_endPointContact the EndPointContact
     * @return string
     */
    public function setEndPointContact($_endPointContact)
    {
        return ($this->EndPointContact = $_endPointContact);
    }
    /**
     * Get PackingType value
     * @return string|null
     */
    public function getPackingType()
    {
        return $this->PackingType;
    }
    /**
     * Set PackingType value
     * @param string $_packingType the PackingType
     * @return string
     */
    public function setPackingType($_packingType)
    {
        return ($this->PackingType = $_packingType);
    }
    /**
     * Get Representative value
     * @return string|null
     */
    public function getRepresentative()
    {
        return $this->Representative;
    }
    /**
     * Set Representative value
     * @param string $_representative the Representative
     * @return string
     */
    public function setRepresentative($_representative)
    {
        return ($this->Representative = $_representative);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructOrdersListResult
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
