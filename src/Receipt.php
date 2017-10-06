<?php

namespace Pirl;

/**
 * Implement data type Receipt.
 */
class Receipt extends PirlDataType {

  protected $transactionHash;
  protected $transactionIndex;
  protected $blockHash;
  protected $blockNumber;
  protected $cumulativeGasUsed;
  protected $gasUsed;
  protected $contractAddress;
  protected $logs;

  /**
   * Constructor.
   */
  public function __construct(PirlD32 $transactionHash = NULL, PirlQ $transactionIndex = NULL, PirlD32 $blockHash = NULL, PirlQ $blockNumber = NULL, PirlQ $cumulativeGasUsed = NULL, PirlQ $gasUsed = NULL, PirlD20 $contractAddress = NULL, array  $logs = NULL) {
    $this->transactionHash = $transactionHash;  
    $this->transactionIndex = $transactionIndex;  
    $this->blockHash = $blockHash;  
    $this->blockNumber = $blockNumber;  
    $this->cumulativeGasUsed = $cumulativeGasUsed;  
    $this->gasUsed = $gasUsed;  
    $this->contractAddress = $contractAddress;  
    $this->logs = $logs; 
  }

  public function setTransactionHash(PirlD32 $value){
    if (is_object($value) && is_a($value, 'PirlD32')) {
      $this->transactionHash = $value;
    }
    else {
      $this->transactionHash = new PirlD32($value);
    }
  }

  public function setTransactionIndex(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->transactionIndex = $value;
    }
    else {
      $this->transactionIndex = new PirlQ($value);
    }
  }

  public function setBlockHash(PirlD32 $value){
    if (is_object($value) && is_a($value, 'PirlD32')) {
      $this->blockHash = $value;
    }
    else {
      $this->blockHash = new PirlD32($value);
    }
  }

  public function setBlockNumber(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->blockNumber = $value;
    }
    else {
      $this->blockNumber = new PirlQ($value);
    }
  }

  public function setCumulativeGasUsed(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->cumulativeGasUsed = $value;
    }
    else {
      $this->cumulativeGasUsed = new PirlQ($value);
    }
  }

  public function setGasUsed(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->gasUsed = $value;
    }
    else {
      $this->gasUsed = new PirlQ($value);
    }
  }

  public function setContractAddress(PirlD20 $value){
    if (is_object($value) && is_a($value, 'PirlD20')) {
      $this->contractAddress = $value;
    }
    else {
      $this->contractAddress = new PirlD20($value);
    }
  }

  public function setLogs(Array $value){
    if (is_object($value) && is_a($value, 'Array')) {
      $this->logs = $value;
    }
    else {
      $this->logs = new Array($value);
    }
  }



  public function getType() {
    return 'Receipt';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->transactionHash)) ? $return['transactionHash'] = $this->transactionHash->hexVal() : NULL; 
      (!is_null($this->transactionIndex)) ? $return['transactionIndex'] = $this->transactionIndex->hexVal() : NULL; 
      (!is_null($this->blockHash)) ? $return['blockHash'] = $this->blockHash->hexVal() : NULL; 
      (!is_null($this->blockNumber)) ? $return['blockNumber'] = $this->blockNumber->hexVal() : NULL; 
      (!is_null($this->cumulativeGasUsed)) ? $return['cumulativeGasUsed'] = $this->cumulativeGasUsed->hexVal() : NULL; 
      (!is_null($this->gasUsed)) ? $return['gasUsed'] = $this->gasUsed->hexVal() : NULL; 
      (!is_null($this->contractAddress)) ? $return['contractAddress'] = $this->contractAddress->hexVal() : NULL; 
      (!is_null($this->logs)) ? $return['logs'] = PirlStatic::valueArray($this->logs, 'FilterChange') : array(); 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'transactionHash' => 'PirlD32',
      'transactionIndex' => 'PirlQ',
      'blockHash' => 'PirlD32',
      'blockNumber' => 'PirlQ',
      'cumulativeGasUsed' => 'PirlQ',
      'gasUsed' => 'PirlQ',
      'contractAddress' => 'PirlD20',
      'logs' => '',
    );
  }
}