<?php
/**
 * File for class MerlionStructArrayOfRepresentativeResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructArrayOfRepresentativeResult originally named ArrayOfRepresentativeResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructArrayOfRepresentativeResult extends MerlionWsdlClass
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MerlionStructRepresentativeResult
     */
    public $item;
    /**
     * Constructor method for ArrayOfRepresentativeResult
     * @see parent::__construct()
     * @param MerlionStructRepresentativeResult $_item
     * @return MerlionStructArrayOfRepresentativeResult
     */
    public function __construct($_item = NULL)
    {
        parent::__construct(array('item'=>$_item),false);
    }
    /**
     * Get item value
     * @return MerlionStructRepresentativeResult|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @param MerlionStructRepresentativeResult $_item the item
     * @return MerlionStructRepresentativeResult
     */
    public function setItem($_item)
    {
        return ($this->item = $_item);
    }
    /**
     * Returns the current element
     * @see MerlionWsdlClass::current()
     * @return MerlionStructRepresentativeResult
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see MerlionWsdlClass::item()
     * @param int $_index
     * @return MerlionStructRepresentativeResult
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see MerlionWsdlClass::first()
     * @return MerlionStructRepresentativeResult
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see MerlionWsdlClass::last()
     * @return MerlionStructRepresentativeResult
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see MerlionWsdlClass::last()
     * @param int $_offset
     * @return MerlionStructRepresentativeResult
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see MerlionWsdlClass::getAttributeName()
     * @return string item
     */
    public function getAttributeName()
    {
        return 'item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructArrayOfRepresentativeResult
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
