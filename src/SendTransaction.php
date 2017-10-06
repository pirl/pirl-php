<?php

namespace Pirl;

/**
 * Implement data type SendTransaction.
 */
class SendTransaction extends PirlDataType {

  protected $from;
  protected $data;
  protected $to;
  protected $gas;
  protected $gasPrice;
  protected $value;
  protected $nonce;

  /**
   * Constructor.
   */
  public function __construct(PirlD20 $from, PirlD $data, PirlD20 $to = NULL, PirlQ $gas = NULL, PirlQ $gasPrice = NULL, PirlQ $value = NULL, PirlQ $nonce = NULL) {
    $this->from = $from;  
    $this->data = $data;  
    $this->to = $to;  
    $this->gas = $gas;  
    $this->gasPrice = $gasPrice;  
    $this->value = $value;  
    $this->nonce = $nonce; 
  }

  public function setFrom(PirlD20 $value){
    if (is_object($value) && is_a($value, 'PirlD20')) {
      $this->from = $value;
    }
    else {
      $this->from = new PirlD20($value);
    }
  }

  public function setData(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->data = $value;
    }
    else {
      $this->data = new PirlD($value);
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

  public function setGas(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->gas = $value;
    }
    else {
      $this->gas = new PirlQ($value);
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

  public function setValue(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->value = $value;
    }
    else {
      $this->value = new PirlQ($value);
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



  public function getType() {
    return 'SendTransaction';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : NULL; 
      (!is_null($this->data)) ? $return['data'] = $this->data->hexVal() : NULL; 
      (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL; 
      (!is_null($this->gas)) ? $return['gas'] = $this->gas->hexVal() : NULL; 
      (!is_null($this->gasPrice)) ? $return['gasPrice'] = $this->gasPrice->hexVal() : NULL; 
      (!is_null($this->value)) ? $return['value'] = $this->value->hexVal() : NULL; 
      (!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexVal() : NULL; 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'from' => 'PirlD20',
      'data' => 'PirlD',
      'to' => 'PirlD20',
      'gas' => 'PirlQ',
      'gasPrice' => 'PirlQ',
      'value' => 'PirlQ',
      'nonce' => 'PirlQ',
    );
  }
}