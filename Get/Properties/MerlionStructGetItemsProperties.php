<?php
/**
 * File for class MerlionStructGetItemsProperties
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetItemsProperties originally named getItemsProperties
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetItemsProperties extends MerlionWsdlClass
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
     * The last_days_changed
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $last_days_changed;
    /**
     * Constructor method for getItemsProperties
     * @see parent::__construct()
     * @param string $_cat_id
     * @param string $_item_id
     * @param int $_page
     * @param int $_rows_on_page
     * @param int $_last_days_changed
     * @return MerlionStructGetItemsProperties
     */
    public function __construct($_cat_id = NULL,$_item_id = NULL,$_page = NULL,$_rows_on_page = NULL,$_last_days_changed = NULL)
    {
        parent::__construct(array('cat_id'=>$_cat_id,'item_id'=>$_item_id,'page'=>$_page,'rows_on_page'=>$_rows_on_page,'last_days_changed'=>$_last_days_changed),false);
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
     * Get last_days_changed value
     * @return int|null
     */
    public function getLast_days_changed()
    {
        return $this->last_days_changed;
    }
    /**
     * Set last_days_changed value
     * @param int $_last_days_changed the last_days_changed
     * @return int
     */
    public function setLast_days_changed($_last_days_changed)
    {
        return ($this->last_days_changed = $_last_days_changed);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructGetItemsProperties
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
