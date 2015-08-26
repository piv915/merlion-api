<?php
/**
 * File for class MerlionStructSetSignOrderCommand
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructSetSignOrderCommand originally named setSignOrderCommand
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructSetSignOrderCommand extends MerlionWsdlClass
{
    /**
     * The document_no
     * @var string
     */
    public $document_no;
    /**
     * The sign_type
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $sign_type;
    /**
     * Constructor method for setSignOrderCommand
     * @see parent::__construct()
     * @param string $_document_no
     * @param int $_sign_type
     * @return MerlionStructSetSignOrderCommand
     */
    public function __construct($_document_no = NULL,$_sign_type = NULL)
    {
        parent::__construct(array('document_no'=>$_document_no,'sign_type'=>$_sign_type),false);
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
     * Get sign_type value
     * @return int|null
     */
    public function getSign_type()
    {
        return $this->sign_type;
    }
    /**
     * Set sign_type value
     * @param int $_sign_type the sign_type
     * @return int
     */
    public function setSign_type($_sign_type)
    {
        return ($this->sign_type = $_sign_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructSetSignOrderCommand
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
