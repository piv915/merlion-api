<?php
/**
 * File for class MerlionStructGetItems
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetItems originally named getItems
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetItems extends MerlionWsdlClass
{
    /**
     * The cat_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $cat_id;
    /**
     * The item_id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $item_id;
    /**
     * The shipment_method
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipment_method;
    /**
     * The page
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $page;
    /**
     * The rows_on_page
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $rows_on_page;
    /**
     * Constructor method for getItems
     * @see parent::__construct()
     * @param string $_cat_id
     * @param string $_item_id
     * @param string $_shipment_method
     * @param int $_page
     * @param int $_rows_on_page
     * @return MerlionStructGetItems
     */
    public function __construct($_cat_id = NULL,$_item_id = NULL,$_shipment_method = NULL,$_page = NULL,$_rows_on_page = NULL)
    {
        parent::__construct(array('cat_id'=>$_cat_id,'item_id'=>$_item_id,'shipment_method'=>$_shipment_method,'page'=>$_page,'rows_on_page'=>$_rows_on_page),false);
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
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $_page the page
     * @return int
     */
    public function setPage($_page)
    {
        return ($this->page = $_page);
    }
    /**
     * Get rows_on_page value
     * @return int|null
     */
    public function getRows_on_page()
    {
        return $this->rows_on_page;
    }
    /**
     * Set rows_on_page value
     * @param int $_rows_on_page the rows_on_page
     * @return int
     */
    public function setRows_on_page($_rows_on_page)
    {
        return ($this->rows_on_page = $_rows_on_page);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItems
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
