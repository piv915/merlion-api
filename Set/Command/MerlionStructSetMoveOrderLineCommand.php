<?php
/**
 * File for class MerlionStructSetMoveOrderLineCommand
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetMoveOrderLineCommand originally named setMoveOrderLineCommand
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetMoveOrderLineCommand extends MerlionWsdlClass
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
     * The qty
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $qty;
    /**
     * The operation_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $operation_no;
    /**
     * Constructor method for setMoveOrderLineCommand
     * @see parent::__construct()
     * @param string $_document_no
     * @param string $_item_no
     * @param int $_qty
     * @param int $_operation_no
     * @return MerlionStructSetMoveOrderLineCommand
     */
    public function __construct($_document_no = NULL,$_item_no = NULL,$_qty = NULL,$_operation_no = NULL)
    {
        parent::__construct(array('document_no'=>$_document_no,'item_no'=>$_item_no,'qty'=>$_qty,'operation_no'=>$_operation_no),false);
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
     * Get qty value
     * @return int|null
     */
    public function getQty()
    {
        return $this->qty;
    }
    /**
     * Set qty value
     * @param int $_qty the qty
     * @return int
     */
    public function setQty($_qty)
    {
        return ($this->qty = $_qty);
    }
    /**
     * Get operation_no value
     * @return int|null
     */
    public function getOperation_no()
    {
        return $this->operation_no;
    }
    /**
     * Set operation_no value
     * @param int $_operation_no the operation_no
     * @return int
     */
    public function setOperation_no($_operation_no)
    {
        return ($this->operation_no = $_operation_no);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetMoveOrderLineCommand
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
