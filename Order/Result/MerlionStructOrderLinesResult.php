<?php
/**
 * File for class MerlionStructOrderLinesResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructOrderLinesResult originally named OrderLinesResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructOrderLinesResult extends MerlionWsdlClass
{
    /**
     * The item_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $item_no;
    /**
     * The document_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $document_no;
    /**
     * The qty
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $qty;
    /**
     * The desire_qty
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $desire_qty;
    /**
     * The shipped_qty
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $shipped_qty;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $price;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $amount;
    /**
     * The desire_price
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $desire_price;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $weight;
    /**
     * The volume
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $volume;
    /**
     * The ReserveTime
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $ReserveTime;
    /**
     * Constructor method for OrderLinesResult
     * @see parent::__construct()
     * @param string $_item_no
     * @param string $_document_no
     * @param int $_qty
     * @param int $_desire_qty
     * @param int $_shipped_qty
     * @param float $_price
     * @param float $_amount
     * @param float $_desire_price
     * @param float $_weight
     * @param float $_volume
     * @param float $_reserveTime
     * @return MerlionStructOrderLinesResult
     */
    public function __construct($_item_no = NULL,$_document_no = NULL,$_qty = NULL,$_desire_qty = NULL,$_shipped_qty = NULL,$_price = NULL,$_amount = NULL,$_desire_price = NULL,$_weight = NULL,$_volume = NULL,$_reserveTime = NULL)
    {
        parent::__construct(array('item_no'=>$_item_no,'document_no'=>$_document_no,'qty'=>$_qty,'desire_qty'=>$_desire_qty,'shipped_qty'=>$_shipped_qty,'price'=>$_price,'amount'=>$_amount,'desire_price'=>$_desire_price,'weight'=>$_weight,'volume'=>$_volume,'ReserveTime'=>$_reserveTime),false);
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
     * Get desire_qty value
     * @return int|null
     */
    public function getDesire_qty()
    {
        return $this->desire_qty;
    }
    /**
     * Set desire_qty value
     * @param int $_desire_qty the desire_qty
     * @return int
     */
    public function setDesire_qty($_desire_qty)
    {
        return ($this->desire_qty = $_desire_qty);
    }
    /**
     * Get shipped_qty value
     * @return int|null
     */
    public function getShipped_qty()
    {
        return $this->shipped_qty;
    }
    /**
     * Set shipped_qty value
     * @param int $_shipped_qty the shipped_qty
     * @return int
     */
    public function setShipped_qty($_shipped_qty)
    {
        return ($this->shipped_qty = $_shipped_qty);
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $_price the price
     * @return float
     */
    public function setPrice($_price)
    {
        return ($this->price = $_price);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $_amount the amount
     * @return float
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
    }
    /**
     * Get desire_price value
     * @return float|null
     */
    public function getDesire_price()
    {
        return $this->desire_price;
    }
    /**
     * Set desire_price value
     * @param float $_desire_price the desire_price
     * @return float
     */
    public function setDesire_price($_desire_price)
    {
        return ($this->desire_price = $_desire_price);
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $_weight the weight
     * @return float
     */
    public function setWeight($_weight)
    {
        return ($this->weight = $_weight);
    }
    /**
     * Get volume value
     * @return float|null
     */
    public function getVolume()
    {
        return $this->volume;
    }
    /**
     * Set volume value
     * @param float $_volume the volume
     * @return float
     */
    public function setVolume($_volume)
    {
        return ($this->volume = $_volume);
    }
    /**
     * Get ReserveTime value
     * @return float|null
     */
    public function getReserveTime()
    {
        return $this->ReserveTime;
    }
    /**
     * Set ReserveTime value
     * @param float $_reserveTime the ReserveTime
     * @return float
     */
    public function setReserveTime($_reserveTime)
    {
        return ($this->ReserveTime = $_reserveTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructOrderLinesResult
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
