<?php
/**
 * File for class MerlionStructGetLinkedItems
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructGetLinkedItems originally named getLinkedItems
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructGetLinkedItems extends MerlionWsdlClass
{
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
     * Constructor method for getLinkedItems
     * @see parent::__construct()
     * @param int $_page
     * @param int $_rows_on_page
     * @return MerlionStructGetLinkedItems
     */
    public function __construct($_page = NULL,$_rows_on_page = NULL)
    {
        parent::__construct(array('page'=>$_page,'rows_on_page'=>$_rows_on_page),false);
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
     * @return MerlionStructGetLinkedItems
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
