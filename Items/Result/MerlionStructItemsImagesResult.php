<?php
/**
 * File for class MerlionStructItemsImagesResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructItemsImagesResult originally named ItemsImagesResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructItemsImagesResult extends MerlionWsdlClass
{
    /**
     * The No
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $No;
    /**
     * The ViewType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ViewType;
    /**
     * The SizeType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $SizeType;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $FileName;
    /**
     * The Created
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Created;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Size;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Width;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Height;
    /**
     * Constructor method for ItemsImagesResult
     * @see parent::__construct()
     * @param string $_no
     * @param string $_viewType
     * @param string $_sizeType
     * @param string $_fileName
     * @param string $_created
     * @param int $_size
     * @param int $_width
     * @param int $_height
     * @return MerlionStructItemsImagesResult
     */
    public function __construct($_no = NULL,$_viewType = NULL,$_sizeType = NULL,$_fileName = NULL,$_created = NULL,$_size = NULL,$_width = NULL,$_height = NULL)
    {
        parent::__construct(array('No'=>$_no,'ViewType'=>$_viewType,'SizeType'=>$_sizeType,'FileName'=>$_fileName,'Created'=>$_created,'Size'=>$_size,'Width'=>$_width,'Height'=>$_height),false);
    }
    /**
     * Get No value
     * @return string|null
     */
    public function getNo()
    {
        return $this->No;
    }
    /**
     * Set No value
     * @param string $_no the No
     * @return string
     */
    public function setNo($_no)
    {
        return ($this->No = $_no);
    }
    /**
     * Get ViewType value
     * @return string|null
     */
    public function getViewType()
    {
        return $this->ViewType;
    }
    /**
     * Set ViewType value
     * @param string $_viewType the ViewType
     * @return string
     */
    public function setViewType($_viewType)
    {
        return ($this->ViewType = $_viewType);
    }
    /**
     * Get SizeType value
     * @return string|null
     */
    public function getSizeType()
    {
        return $this->SizeType;
    }
    /**
     * Set SizeType value
     * @param string $_sizeType the SizeType
     * @return string
     */
    public function setSizeType($_sizeType)
    {
        return ($this->SizeType = $_sizeType);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $_fileName the FileName
     * @return string
     */
    public function setFileName($_fileName)
    {
        return ($this->FileName = $_fileName);
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $_created the Created
     * @return string
     */
    public function setCreated($_created)
    {
        return ($this->Created = $_created);
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $_size the Size
     * @return int
     */
    public function setSize($_size)
    {
        return ($this->Size = $_size);
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $_width the Width
     * @return int
     */
    public function setWidth($_width)
    {
        return ($this->Width = $_width);
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $_height the Height
     * @return int
     */
    public function setHeight($_height)
    {
        return ($this->Height = $_height);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructItemsImagesResult
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
