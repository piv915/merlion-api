<?php
/**
 * File for class MerlionStructCommandResult
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
/**
 * This class stands for MerlionStructCommandResult originally named CommandResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.merlion.com/dl/mlservice2?wsdl}
 * @package Merlion
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-08-26
 */
class MerlionStructCommandResult extends MerlionWsdlClass
{
    /**
     * The operation_no
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $operation_no;
    /**
     * The CreateTime
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $CreateTime;
    /**
     * The ProcessingTime
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ProcessingTime;
    /**
     * The EndingTime
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $EndingTime;
    /**
     * The ProcessingResult
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ProcessingResult;
    /**
     * The DocumentNo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $DocumentNo;
    /**
     * The DocumentNo2
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $DocumentNo2;
    /**
     * The ProcessingResultComment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ProcessingResultComment;
    /**
     * The ErrorText
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ErrorText;
    /**
     * The ProcessingReserved
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $ProcessingReserved;
    /**
     * The OperationLineNo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $OperationLineNo;
    /**
     * Constructor method for CommandResult
     * @see parent::__construct()
     * @param int $_operation_no
     * @param string $_createTime
     * @param string $_processingTime
     * @param string $_endingTime
     * @param string $_processingResult
     * @param string $_documentNo
     * @param string $_documentNo2
     * @param string $_processingResultComment
     * @param string $_errorText
     * @param string $_processingReserved
     * @param int $_operationLineNo
     * @return MerlionStructCommandResult
     */
    public function __construct($_operation_no = NULL,$_createTime = NULL,$_processingTime = NULL,$_endingTime = NULL,$_processingResult = NULL,$_documentNo = NULL,$_documentNo2 = NULL,$_processingResultComment = NULL,$_errorText = NULL,$_processingReserved = NULL,$_operationLineNo = NULL)
    {
        parent::__construct(array('operation_no'=>$_operation_no,'CreateTime'=>$_createTime,'ProcessingTime'=>$_processingTime,'EndingTime'=>$_endingTime,'ProcessingResult'=>$_processingResult,'DocumentNo'=>$_documentNo,'DocumentNo2'=>$_documentNo2,'ProcessingResultComment'=>$_processingResultComment,'ErrorText'=>$_errorText,'ProcessingReserved'=>$_processingReserved,'OperationLineNo'=>$_operationLineNo),false);
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
     * Get CreateTime value
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }
    /**
     * Set CreateTime value
     * @param string $_createTime the CreateTime
     * @return string
     */
    public function setCreateTime($_createTime)
    {
        return ($this->CreateTime = $_createTime);
    }
    /**
     * Get ProcessingTime value
     * @return string|null
     */
    public function getProcessingTime()
    {
        return $this->ProcessingTime;
    }
    /**
     * Set ProcessingTime value
     * @param string $_processingTime the ProcessingTime
     * @return string
     */
    public function setProcessingTime($_processingTime)
    {
        return ($this->ProcessingTime = $_processingTime);
    }
    /**
     * Get EndingTime value
     * @return string|null
     */
    public function getEndingTime()
    {
        return $this->EndingTime;
    }
    /**
     * Set EndingTime value
     * @param string $_endingTime the EndingTime
     * @return string
     */
    public function setEndingTime($_endingTime)
    {
        return ($this->EndingTime = $_endingTime);
    }
    /**
     * Get ProcessingResult value
     * @return string|null
     */
    public function getProcessingResult()
    {
        return $this->ProcessingResult;
    }
    /**
     * Set ProcessingResult value
     * @param string $_processingResult the ProcessingResult
     * @return string
     */
    public function setProcessingResult($_processingResult)
    {
        return ($this->ProcessingResult = $_processingResult);
    }
    /**
     * Get DocumentNo value
     * @return string|null
     */
    public function getDocumentNo()
    {
        return $this->DocumentNo;
    }
    /**
     * Set DocumentNo value
     * @param string $_documentNo the DocumentNo
     * @return string
     */
    public function setDocumentNo($_documentNo)
    {
        return ($this->DocumentNo = $_documentNo);
    }
    /**
     * Get DocumentNo2 value
     * @return string|null
     */
    public function getDocumentNo2()
    {
        return $this->DocumentNo2;
    }
    /**
     * Set DocumentNo2 value
     * @param string $_documentNo2 the DocumentNo2
     * @return string
     */
    public function setDocumentNo2($_documentNo2)
    {
        return ($this->DocumentNo2 = $_documentNo2);
    }
    /**
     * Get ProcessingResultComment value
     * @return string|null
     */
    public function getProcessingResultComment()
    {
        return $this->ProcessingResultComment;
    }
    /**
     * Set ProcessingResultComment value
     * @param string $_processingResultComment the ProcessingResultComment
     * @return string
     */
    public function setProcessingResultComment($_processingResultComment)
    {
        return ($this->ProcessingResultComment = $_processingResultComment);
    }
    /**
     * Get ErrorText value
     * @return string|null
     */
    public function getErrorText()
    {
        return $this->ErrorText;
    }
    /**
     * Set ErrorText value
     * @param string $_errorText the ErrorText
     * @return string
     */
    public function setErrorText($_errorText)
    {
        return ($this->ErrorText = $_errorText);
    }
    /**
     * Get ProcessingReserved value
     * @return string|null
     */
    public function getProcessingReserved()
    {
        return $this->ProcessingReserved;
    }
    /**
     * Set ProcessingReserved value
     * @param string $_processingReserved the ProcessingReserved
     * @return string
     */
    public function setProcessingReserved($_processingReserved)
    {
        return ($this->ProcessingReserved = $_processingReserved);
    }
    /**
     * Get OperationLineNo value
     * @return int|null
     */
    public function getOperationLineNo()
    {
        return $this->OperationLineNo;
    }
    /**
     * Set OperationLineNo value
     * @param int $_operationLineNo the OperationLineNo
     * @return int
     */
    public function setOperationLineNo($_operationLineNo)
    {
        return ($this->OperationLineNo = $_operationLineNo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MerlionWsdlClass::__set_state()
     * @uses MerlionWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MerlionStructCommandResult
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
