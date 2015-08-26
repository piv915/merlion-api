<?php
/**
 * File for class MerlionStructItemsResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructItemsResult originally named ItemsResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructItemsResult extends MerlionWsdlClass
{
    /**
     * The No
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $No;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Name;
    /**
     * The Brand
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Brand;
    /**
     * The Vendor_part
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Vendor_part;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $Size;
    /**
     * The EOL
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $EOL;
    /**
     * The Warranty
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Warranty;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $Volume;
    /**
     * The Min_Packaged
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Min_Packaged;
    /**
     * The GroupName1
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $GroupName1;
    /**
     * The GroupName2
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $GroupName2;
    /**
     * The GroupName3
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $GroupName3;
    /**
     * The GroupCode1
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $GroupCode1;
    /**
     * The GroupCode2
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $GroupCode2;
    /**
     * The GroupCode3
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $GroupCode3;
    /**
     * The IsBundle
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $IsBundle;
    /**
     * The ActionDesc
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ActionDesc;
    /**
     * The ActionWWW
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ActionWWW;
    /**
     * Constructor method for ItemsResult
     * @see parent::__construct()
     * @param string $_no
     * @param string $_name
     * @param string $_brand
     * @param string $_vendor_part
     * @param string $_size
     * @param int $_eOL
     * @param int $_warranty
     * @param float $_weight
     * @param float $_volume
     * @param int $_min_Packaged
     * @param string $_groupName1
     * @param string $_groupName2
     * @param string $_groupName3
     * @param string $_groupCode1
     * @param string $_groupCode2
     * @param string $_groupCode3
     * @param int $_isBundle
     * @param string $_actionDesc
     * @param string $_actionWWW
     * @return MerlionStructItemsResult
     */
    public function __construct($_no = NULL,$_name = NULL,$_brand = NULL,$_vendor_part = NULL,$_size = NULL,$_eOL = NULL,$_warranty = NULL,$_weight = NULL,$_volume = NULL,$_min_Packaged = NULL,$_groupName1 = NULL,$_groupName2 = NULL,$_groupName3 = NULL,$_groupCode1 = NULL,$_groupCode2 = NULL,$_groupCode3 = NULL,$_isBundle = NULL,$_actionDesc = NULL,$_actionWWW = NULL)
    {
        parent::__construct(array('No'=>$_no,'Name'=>$_name,'Brand'=>$_brand,'Vendor_part'=>$_vendor_part,'Size'=>$_size,'EOL'=>$_eOL,'Warranty'=>$_warranty,'Weight'=>$_weight,'Volume'=>$_volume,'Min_Packaged'=>$_min_Packaged,'GroupName1'=>$_groupName1,'GroupName2'=>$_groupName2,'GroupName3'=>$_groupName3,'GroupCode1'=>$_groupCode1,'GroupCode2'=>$_groupCode2,'GroupCode3'=>$_groupCode3,'IsBundle'=>$_isBundle,'ActionDesc'=>$_actionDesc,'ActionWWW'=>$_actionWWW),false);
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $_name the Name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->Name = $_name);
    }
    /**
     * Get Brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param string $_brand the Brand
     * @return string
     */
    public function setBrand($_brand)
    {
        return ($this->Brand = $_brand);
    }
    /**
     * Get Vendor_part value
     * @return string|null
     */
    public function getVendor_part()
    {
        return $this->Vendor_part;
    }
    /**
     * Set Vendor_part value
     * @param string $_vendor_part the Vendor_part
     * @return string
     */
    public function setVendor_part($_vendor_part)
    {
        return ($this->Vendor_part = $_vendor_part);
    }
    /**
     * Get Size value
     * @return string|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param string $_size the Size
     * @return string
     */
    public function setSize($_size)
    {
        return ($this->Size = $_size);
    }
    /**
     * Get EOL value
     * @return int|null
     */
    public function getEOL()
    {
        return $this->EOL;
    }
    /**
     * Set EOL value
     * @param int $_eOL the EOL
     * @return int
     */
    public function setEOL($_eOL)
    {
        return ($this->EOL = $_eOL);
    }
    /**
     * Get Warranty value
     * @return int|null
     */
    public function getWarranty()
    {
        return $this->Warranty;
    }
    /**
     * Set Warranty value
     * @param int $_warranty the Warranty
     * @return int
     */
    public function setWarranty($_warranty)
    {
        return ($this->Warranty = $_warranty);
    }
    /**
     * Get Weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $_weight the Weight
     * @return float
     */
    public function setWeight($_weight)
    {
        return ($this->Weight = $_weight);
    }
    /**
     * Get Volume value
     * @return float|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param float $_volume the Volume
     * @return float
     */
    public function setVolume($_volume)
    {
        return ($this->Volume = $_volume);
    }
    /**
     * Get Min_Packaged value
     * @return int|null
     */
    public function getMin_Packaged()
    {
        return $this->Min_Packaged;
    }
    /**
     * Set Min_Packaged value
     * @param int $_min_Packaged the Min_Packaged
     * @return int
     */
    public function setMin_Packaged($_min_Packaged)
    {
        return ($this->Min_Packaged = $_min_Packaged);
    }
    /**
     * Get GroupName1 value
     * @return string|null
     */
    public function getGroupName1()
    {
        return $this->GroupName1;
    }
    /**
     * Set GroupName1 value
     * @param string $_groupName1 the GroupName1
     * @return string
     */
    public function setGroupName1($_groupName1)
    {
        return ($this->GroupName1 = $_groupName1);
    }
    /**
     * Get GroupName2 value
     * @return string|null
     */
    public function getGroupName2()
    {
        return $this->GroupName2;
    }
    /**
     * Set GroupName2 value
     * @param string $_groupName2 the GroupName2
     * @return string
     */
    public function setGroupName2($_groupName2)
    {
        return ($this->GroupName2 = $_groupName2);
    }
    /**
     * Get GroupName3 value
     * @return string|null
     */
    public function getGroupName3()
    {
        return $this->GroupName3;
    }
    /**
     * Set GroupName3 value
     * @param string $_groupName3 the GroupName3
     * @return string
     */
    public function setGroupName3($_groupName3)
    {
        return ($this->GroupName3 = $_groupName3);
    }
    /**
     * Get GroupCode1 value
     * @return string|null
     */
    public function getGroupCode1()
    {
        return $this->GroupCode1;
    }
    /**
     * Set GroupCode1 value
     * @param string $_groupCode1 the GroupCode1
     * @return string
     */
    public function setGroupCode1($_groupCode1)
    {
        return ($this->GroupCode1 = $_groupCode1);
    }
    /**
     * Get GroupCode2 value
     * @return string|null
     */
    public function getGroupCode2()
    {
        return $this->GroupCode2;
    }
    /**
     * Set GroupCode2 value
     * @param string $_groupCode2 the GroupCode2
     * @return string
     */
    public function setGroupCode2($_groupCode2)
    {
        return ($this->GroupCode2 = $_groupCode2);
    }
    /**
     * Get GroupCode3 value
     * @return string|null
     */
    public function getGroupCode3()
    {
        return $this->GroupCode3;
    }
    /**
     * Set GroupCode3 value
     * @param string $_groupCode3 the GroupCode3
     * @return string
     */
    public function setGroupCode3($_groupCode3)
    {
        return ($this->GroupCode3 = $_groupCode3);
    }
    /**
     * Get IsBundle value
     * @return int|null
     */
    public function getIsBundle()
    {
        return $this->IsBundle;
    }
    /**
     * Set IsBundle value
     * @param int $_isBundle the IsBundle
     * @return int
     */
    public function setIsBundle($_isBundle)
    {
        return ($this->IsBundle = $_isBundle);
    }
    /**
     * Get ActionDesc value
     * @return string|null
     */
    public function getActionDesc()
    {
        return $this->ActionDesc;
    }
    /**
     * Set ActionDesc value
     * @param string $_actionDesc the ActionDesc
     * @return string
     */
    public function setActionDesc($_actionDesc)
    {
        return ($this->ActionDesc = $_actionDesc);
    }
    /**
     * Get ActionWWW value
     * @return string|null
     */
    public function getActionWWW()
    {
        return $this->ActionWWW;
    }
    /**
     * Set ActionWWW value
     * @param string $_actionWWW the ActionWWW
     * @return string
     */
    public function setActionWWW($_actionWWW)
    {
        return ($this->ActionWWW = $_actionWWW);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructItemsResult
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
