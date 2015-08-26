<?php
/**
 * File for class MerlionStructGetItemsAvail
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetItemsAvail originally named getItemsAvail
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetItemsAvail extends MerlionWsdlClass
{
    /**
     * The cat_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $cat_id;
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
     * The only_avail
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $only_avail;
    /**
     * The item_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $item_id;
    /**
     * Constructor method for getItemsAvail
     * @see parent::__construct()
     * @param string $_cat_id
     * @param string $_shipment_method
     * @param string $_shipment_date
     * @param string $_only_avail
     * @param string $_item_id
     * @return MerlionStructGetItemsAvail
     */
    public function __construct($_cat_id = NULL,$_shipment_method = NULL,$_shipment_date = NULL,$_only_avail = NULL,$_item_id = NULL)
    {
        parent::__construct(array('cat_id'=>$_cat_id,'shipment_method'=>$_shipment_method,'shipment_date'=>$_shipment_date,'only_avail'=>$_only_avail,'item_id'=>$_item_id),false);
    }
    /**
     * Get cat_id value
     * @return string|null
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }
    /**
     * Set cat_id value
     * @param string $_cat_id the cat_id
     * @return string
     */
    public function setCat_id($_cat_id)
    {
        return ($this->cat_id = $_cat_id);
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
     * Get only_avail value
     * @return string|null
     */
    public function getOnly_avail()
    {
        return $this->only_avail;
    }
    /**
     * Set only_avail value
     * @param string $_only_avail the only_avail
     * @return string
     */
    public function setOnly_avail($_only_avail)
    {
        return ($this->only_avail = $_only_avail);
    }
    /**
     * Get item_id value
     * @return string|null
     */
    public function getItem_id()
    {
        return $this->item_id;
    }
    /**
     * Set item_id value
     * @param string $_item_id the item_id
     * @return string
     */
    public function setItem_id($_item_id)
    {
        return ($this->item_id = $_item_id);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsAvail
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
