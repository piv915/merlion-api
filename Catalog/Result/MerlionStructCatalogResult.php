<?php
/**
 * File for class MerlionStructCatalogResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructCatalogResult originally named CatalogResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructCatalogResult extends MerlionWsdlClass
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ID;
    /**
     * The ID_PARENT
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ID_PARENT;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Description;
    /**
     * Constructor method for CatalogResult
     * @see parent::__construct()
     * @param string $_iD
     * @param string $_iD_PARENT
     * @param string $_description
     * @return MerlionStructCatalogResult
     */
    public function __construct($_iD = NULL,$_iD_PARENT = NULL,$_description = NULL)
    {
        parent::__construct(array('ID'=>$_iD,'ID_PARENT'=>$_iD_PARENT,'Description'=>$_description),false);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $_iD the ID
     * @return string
     */
    public function setID($_iD)
    {
        return ($this->ID = $_iD);
    }
    /**
     * Get ID_PARENT value
     * @return string|null
     */
    public function getID_PARENT()
    {
        return $this->ID_PARENT;
    }
    /**
     * Set ID_PARENT value
     * @param string $_iD_PARENT the ID_PARENT
     * @return string
     */
    public function setID_PARENT($_iD_PARENT)
    {
        return ($this->ID_PARENT = $_iD_PARENT);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $_description the Description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->Description = $_description);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructCatalogResult
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
