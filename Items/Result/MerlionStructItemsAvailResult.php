<?php
/**
 * File for class MerlionStructItemsAvailResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructItemsAvailResult originally named ItemsAvailResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructItemsAvailResult extends MerlionWsdlClass
{
    /**
     * The No
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $No;
    /**
     * The PriceClient
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $PriceClient;
    /**
     * The PriceClient_RG
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $PriceClient_RG;
    /**
     * The PriceClient_MSK
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $PriceClient_MSK;
    /**
     * The AvailableClient
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $AvailableClient;
    /**
     * The AvailableClient_RG
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $AvailableClient_RG;
    /**
     * The AvailableClient_MSK
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $AvailableClient_MSK;
    /**
     * The AvailableExpected
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $AvailableExpected;
    /**
     * The AvailableExpectedNext
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $AvailableExpectedNext;
    /**
     * The DateExpectedNext
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $DateExpectedNext;
    /**
     * The RRP
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $RRP;
    /**
     * The RRP_Date
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $RRP_Date;
    /**
     * The Online_Reserve
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $Online_Reserve;
    /**
     * The ReserveCost
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $ReserveCost;
    /**
     * Constructor method for ItemsAvailResult
     * @see parent::__construct()
     * @param string $_no
     * @param float $_priceClient
     * @param float $_priceClient_RG
     * @param float $_priceClient_MSK
     * @param int $_availableClient
     * @param int $_availableClient_RG
     * @param int $_availableClient_MSK
     * @param int $_availableExpected
     * @param int $_availableExpectedNext
     * @param string $_dateExpectedNext
     * @param float $_rRP
     * @param string $_rRP_Date
     * @param int $_online_Reserve
     * @param float $_reserveCost
     * @return MerlionStructItemsAvailResult
     */
    public function __construct($_no = NULL,$_priceClient = NULL,$_priceClient_RG = NULL,$_priceClient_MSK = NULL,$_availableClient = NULL,$_availableClient_RG = NULL,$_availableClient_MSK = NULL,$_availableExpected = NULL,$_availableExpectedNext = NULL,$_dateExpectedNext = NULL,$_rRP = NULL,$_rRP_Date = NULL,$_online_Reserve = NULL,$_reserveCost = NULL)
    {
        parent::__construct(array('No'=>$_no,'PriceClient'=>$_priceClient,'PriceClient_RG'=>$_priceClient_RG,'PriceClient_MSK'=>$_priceClient_MSK,'AvailableClient'=>$_availableClient,'AvailableClient_RG'=>$_availableClient_RG,'AvailableClient_MSK'=>$_availableClient_MSK,'AvailableExpected'=>$_availableExpected,'AvailableExpectedNext'=>$_availableExpectedNext,'DateExpectedNext'=>$_dateExpectedNext,'RRP'=>$_rRP,'RRP_Date'=>$_rRP_Date,'Online_Reserve'=>$_online_Reserve,'ReserveCost'=>$_reserveCost),false);
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
     * Get PriceClient value
     * @return float|null
     */
    public function getPriceClient()
    {
        return $this->PriceClient;
    }
    /**
     * Set PriceClient value
     * @param float $_priceClient the PriceClient
     * @return float
     */
    public function setPriceClient($_priceClient)
    {
        return ($this->PriceClient = $_priceClient);
    }
    /**
     * Get PriceClient_RG value
     * @return float|null
     */
    public function getPriceClient_RG()
    {
        return $this->PriceClient_RG;
    }
    /**
     * Set PriceClient_RG value
     * @param float $_priceClient_RG the PriceClient_RG
     * @return float
     */
    public function setPriceClient_RG($_priceClient_RG)
    {
        return ($this->PriceClient_RG = $_priceClient_RG);
    }
    /**
     * Get PriceClient_MSK value
     * @return float|null
     */
    public function getPriceClient_MSK()
    {
        return $this->PriceClient_MSK;
    }
    /**
     * Set PriceClient_MSK value
     * @param float $_priceClient_MSK the PriceClient_MSK
     * @return float
     */
    public function setPriceClient_MSK($_priceClient_MSK)
    {
        return ($this->PriceClient_MSK = $_priceClient_MSK);
    }
    /**
     * Get AvailableClient value
     * @return int|null
     */
    public function getAvailableClient()
    {
        return $this->AvailableClient;
    }
    /**
     * Set AvailableClient value
     * @param int $_availableClient the AvailableClient
     * @return int
     */
    public function setAvailableClient($_availableClient)
    {
        return ($this->AvailableClient = $_availableClient);
    }
    /**
     * Get AvailableClient_RG value
     * @return int|null
     */
    public function getAvailableClient_RG()
    {
        return $this->AvailableClient_RG;
    }
    /**
     * Set AvailableClient_RG value
     * @param int $_availableClient_RG the AvailableClient_RG
     * @return int
     */
    public function setAvailableClient_RG($_availableClient_RG)
    {
        return ($this->AvailableClient_RG = $_availableClient_RG);
    }
    /**
     * Get AvailableClient_MSK value
     * @return int|null
     */
    public function getAvailableClient_MSK()
    {
        return $this->AvailableClient_MSK;
    }
    /**
     * Set AvailableClient_MSK value
     * @param int $_availableClient_MSK the AvailableClient_MSK
     * @return int
     */
    public function setAvailableClient_MSK($_availableClient_MSK)
    {
        return ($this->AvailableClient_MSK = $_availableClient_MSK);
    }
    /**
     * Get AvailableExpected value
     * @return int|null
     */
    public function getAvailableExpected()
    {
        return $this->AvailableExpected;
    }
    /**
     * Set AvailableExpected value
     * @param int $_availableExpected the AvailableExpected
     * @return int
     */
    public function setAvailableExpected($_availableExpected)
    {
        return ($this->AvailableExpected = $_availableExpected);
    }
    /**
     * Get AvailableExpectedNext value
     * @return int|null
     */
    public function getAvailableExpectedNext()
    {
        return $this->AvailableExpectedNext;
    }
    /**
     * Set AvailableExpectedNext value
     * @param int $_availableExpectedNext the AvailableExpectedNext
     * @return int
     */
    public function setAvailableExpectedNext($_availableExpectedNext)
    {
        return ($this->AvailableExpectedNext = $_availableExpectedNext);
    }
    /**
     * Get DateExpectedNext value
     * @return string|null
     */
    public function getDateExpectedNext()
    {
        return $this->DateExpectedNext;
    }
    /**
     * Set DateExpectedNext value
     * @param string $_dateExpectedNext the DateExpectedNext
     * @return string
     */
    public function setDateExpectedNext($_dateExpectedNext)
    {
        return ($this->DateExpectedNext = $_dateExpectedNext);
    }
    /**
     * Get RRP value
     * @return float|null
     */
    public function getRRP()
    {
        return $this->RRP;
    }
    /**
     * Set RRP value
     * @param float $_rRP the RRP
     * @return float
     */
    public function setRRP($_rRP)
    {
        return ($this->RRP = $_rRP);
    }
    /**
     * Get RRP_Date value
     * @return string|null
     */
    public function getRRP_Date()
    {
        return $this->RRP_Date;
    }
    /**
     * Set RRP_Date value
     * @param string $_rRP_Date the RRP_Date
     * @return string
     */
    public function setRRP_Date($_rRP_Date)
    {
        return ($this->RRP_Date = $_rRP_Date);
    }
    /**
     * Get Online_Reserve value
     * @return int|null
     */
    public function getOnline_Reserve()
    {
        return $this->Online_Reserve;
    }
    /**
     * Set Online_Reserve value
     * @param int $_online_Reserve the Online_Reserve
     * @return int
     */
    public function setOnline_Reserve($_online_Reserve)
    {
        return ($this->Online_Reserve = $_online_Reserve);
    }
    /**
     * Get ReserveCost value
     * @return float|null
     */
    public function getReserveCost()
    {
        return $this->ReserveCost;
    }
    /**
     * Set ReserveCost value
     * @param float $_reserveCost the ReserveCost
     * @return float
     */
    public function setReserveCost($_reserveCost)
    {
        return ($this->ReserveCost = $_reserveCost);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructItemsAvailResult
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
