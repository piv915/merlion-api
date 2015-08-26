<?php
/**
 * File for class MerlionStructOrderLinesGTDResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructOrderLinesGTDResult originally named OrderLinesGTDResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructOrderLinesGTDResult extends MerlionWsdlClass
{
    /**
     * The document_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $document_no;
    /**
     * The item_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $item_no;
    /**
     * The bundle_item_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $bundle_item_no;
    /**
     * The gtd_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $gtd_no;
    /**
     * The used_qty
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $used_qty;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $country;
    /**
     * Constructor method for OrderLinesGTDResult
     * @see parent::__construct()
     * @param string $_document_no
     * @param string $_item_no
     * @param string $_bundle_item_no
     * @param string $_gtd_no
     * @param int $_used_qty
     * @param string $_country
     * @return MerlionStructOrderLinesGTDResult
     */
    public function __construct($_document_no = NULL,$_item_no = NULL,$_bundle_item_no = NULL,$_gtd_no = NULL,$_used_qty = NULL,$_country = NULL)
    {
        parent::__construct(array('document_no'=>$_document_no,'item_no'=>$_item_no,'bundle_item_no'=>$_bundle_item_no,'gtd_no'=>$_gtd_no,'used_qty'=>$_used_qty,'country'=>$_country),false);
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
     * Get item_no value
     * @return string|null
     */
    public function getItem_no()
    {
        return $this->item_no;
    }
    /**
     * Set item_no value
     * @param string $_item_no the item_no
     * @return string
     */
    public function setItem_no($_item_no)
    {
        return ($this->item_no = $_item_no);
    }
    /**
     * Get bundle_item_no value
     * @return string|null
     */
    public function getBundle_item_no()
    {
        return $this->bundle_item_no;
    }
    /**
     * Set bundle_item_no value
     * @param string $_bundle_item_no the bundle_item_no
     * @return string
     */
    public function setBundle_item_no($_bundle_item_no)
    {
        return ($this->bundle_item_no = $_bundle_item_no);
    }
    /**
     * Get gtd_no value
     * @return string|null
     */
    public function getGtd_no()
    {
        return $this->gtd_no;
    }
    /**
     * Set gtd_no value
     * @param string $_gtd_no the gtd_no
     * @return string
     */
    public function setGtd_no($_gtd_no)
    {
        return ($this->gtd_no = $_gtd_no);
    }
    /**
     * Get used_qty value
     * @return int|null
     */
    public function getUsed_qty()
    {
        return $this->used_qty;
    }
    /**
     * Set used_qty value
     * @param int $_used_qty the used_qty
     * @return int
     */
    public function setUsed_qty($_used_qty)
    {
        return ($this->used_qty = $_used_qty);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $_country the country
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->country = $_country);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructOrderLinesGTDResult
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
