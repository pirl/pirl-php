<?php

namespace Pirl;

/**
 * Implement data type Transaction.
 */
class Transaction extends PirlDataType {

  protected $hash;
  protected $nonce;
  protected $blockHash;
  protected $blockNumber;
  protected $transactionIndex;
  protected $from;
  protected $to;
  protected $value;
  protected $gasPrice;
  protected $gas;
  protected $input;

  /**
   * Constructor.
   */
  public function __construct(PirlD32 $hash = NULL, PirlQ $nonce = NULL, PirlD32 $blockHash = NULL, PirlQ $blockNumber = NULL, PirlQ $transactionIndex = NULL, PirlD20 $from = NULL, PirlD20 $to = NULL, PirlQ $value = NULL, PirlQ $gasPrice = NULL, PirlQ $gas = NULL, PirlD $input = NULL) {
    $this->hash = $hash;  
    $this->nonce = $nonce;  
    $this->blockHash = $blockHash;  
    $this->blockNumber = $blockNumber;  
    $this->transactionIndex = $transactionIndex;  
    $this->from = $from;  
    $this->to = $to;  
    $this->value = $value;  
    $this->gasPrice = $gasPrice;  
    $this->gas = $gas;  
    $this->input = $input; 
  }

  public function setHash(PirlD32 $value){
    if (is_object($value) && is_a($value, 'PirlD32')) {
      $this->hash = $value;
    }
    else {
      $this->hash = new PirlD32($value);
    }
  }

  public function setNonce(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->nonce = $value;
    }
    else {
      $this->nonce = new PirlQ($value);
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

  public function setTransactionIndex(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->transactionIndex = $value;
    }
    else {
      $this->transactionIndex = new PirlQ($value);
    }
  }

  public function setFrom(PirlD20 $value){
    if (is_object($value) && is_a($value, 'PirlD20')) {
      $this->from = $value;
    }
    else {
      $this->from = new PirlD20($value);
    }
  }

  public function setTo(PirlD20 $value){
    if (is_object($value) && is_a($value, 'PirlD20')) {
      $this->to = $value;
    }
    else {
      $this->to = new PirlD20($value);
    }
  }

  public function setValue(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->value = $value;
    }
    else {
      $this->value = new PirlQ($value);
    }
  }

  public function setGasPrice(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->gasPrice = $value;
    }
    else {
      $this->gasPrice = new PirlQ($value);
    }
  }

  public function setGas(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->gas = $value;
    }
    else {
      $this->gas = new PirlQ($value);
    }
  }

  public function setInput(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->input = $value;
    }
    else {
      $this->input = new PirlD($value);
    }
  }



  public function getType() {
    return 'Transaction';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->hash)) ? $return['hash'] = $this->hash->hexVal() : NULL; 
      (!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexVal() : NULL; 
      (!is_null($this->blockHash)) ? $return['blockHash'] = $this->blockHash->hexVal() : NULL; 
      (!is_null($this->blockNumber)) ? $return['blockNumber'] = $this->blockNumber->hexVal() : NULL; 
      (!is_null($this->transactionIndex)) ? $return['transactionIndex'] = $this->transactionIndex->hexVal() : NULL; 
      (!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : NULL; 
      (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL; 
      (!is_null($this->value)) ? $return['value'] = $this->value->hexVal() : NULL; 
      (!is_null($this->gasPrice)) ? $return['gasPrice'] = $this->gasPrice->hexVal() : NULL; 
      (!is_null($this->gas)) ? $return['gas'] = $this->gas->hexVal() : NULL; 
      (!is_null($this->input)) ? $return['input'] = $this->input->hexVal() : NULL; 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'hash' => 'PirlD32',
      'nonce' => 'PirlQ',
      'blockHash' => 'PirlD32',
      'blockNumber' => 'PirlQ',
      'transactionIndex' => 'PirlQ',
      'from' => 'PirlD20',
      'to' => 'PirlD20',
      'value' => 'PirlQ',
      'gasPrice' => 'PirlQ',
      'gas' => 'PirlQ',
      'input' => 'PirlD',
    );
  }
}