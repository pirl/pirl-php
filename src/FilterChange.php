<?php

namespace Pirl;

/**
 * Implement data type FilterChange.
 */
class FilterChange extends PirlDataType {

  protected $removed;
  protected $logIndex;
  protected $transactionIndex;
  protected $transactionHash;
  protected $blockHash;
  protected $blockNumber;
  protected $address;
  protected $data;
  protected $topics;

  /**
   * Constructor.
   */
  public function __construct(PirlB $removed = NULL, PirlQ $logIndex = NULL, PirlQ $transactionIndex = NULL, PirlD32 $transactionHash = NULL, PirlD32 $blockHash = NULL, PirlQ $blockNumber = NULL, PirlD20 $address = NULL, PirlData $data = NULL, array  $topics = NULL) {
    $this->removed = $removed;  
    $this->logIndex = $logIndex;  
    $this->transactionIndex = $transactionIndex;  
    $this->transactionHash = $transactionHash;  
    $this->blockHash = $blockHash;  
    $this->blockNumber = $blockNumber;  
    $this->address = $address;  
    $this->data = $data;  
    $this->topics = $topics; 
  }

  public function setRemoved(PirlB $value){
    if (is_object($value) && is_a($value, 'PirlB')) {
      $this->removed = $value;
    }
    else {
      $this->removed = new PirlB($value);
    }
  }

  public function setLogIndex(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->logIndex = $value;
    }
    else {
      $this->logIndex = new PirlQ($value);
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

  public function setTransactionHash(PirlD32 $value){
    if (is_object($value) && is_a($value, 'PirlD32')) {
      $this->transactionHash = $value;
    }
    else {
      $this->transactionHash = new PirlD32($value);
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

  public function setAddress(PirlD20 $value){
    if (is_object($value) && is_a($value, 'PirlD20')) {
      $this->address = $value;
    }
    else {
      $this->address = new PirlD20($value);
    }
  }

  public function setData(PirlData $value){
    if (is_object($value) && is_a($value, 'PirlData')) {
      $this->data = $value;
    }
    else {
      $this->data = new PirlData($value);
    }
  }

  public function setTopics(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->topics = $value;
    }
    else {
      $this->topics = new PirlD($value);
    }
  }



  public function getType() {
    return 'FilterChange';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->removed)) ? $return['removed'] = $this->removed->hexVal() : NULL; 
      (!is_null($this->logIndex)) ? $return['logIndex'] = $this->logIndex->hexVal() : NULL; 
      (!is_null($this->transactionIndex)) ? $return['transactionIndex'] = $this->transactionIndex->hexVal() : NULL; 
      (!is_null($this->transactionHash)) ? $return['transactionHash'] = $this->transactionHash->hexVal() : NULL; 
      (!is_null($this->blockHash)) ? $return['blockHash'] = $this->blockHash->hexVal() : NULL; 
      (!is_null($this->blockNumber)) ? $return['blockNumber'] = $this->blockNumber->hexVal() : NULL; 
      (!is_null($this->address)) ? $return['address'] = $this->address->hexVal() : NULL; 
      (!is_null($this->data)) ? $return['data'] = $this->data->hexVal() : NULL; 
      (!is_null($this->topics)) ? $return['topics'] = PirlStatic::valueArray($this->topics, 'D') : array(); 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'removed' => 'PirlB',
      'logIndex' => 'PirlQ',
      'transactionIndex' => 'PirlQ',
      'transactionHash' => 'PirlD32',
      'blockHash' => 'PirlD32',
      'blockNumber' => 'PirlQ',
      'address' => 'PirlD20',
      'data' => 'PirlData',
      'topics' => 'PirlD',
    );
  }
}