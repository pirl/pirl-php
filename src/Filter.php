<?php

namespace Pirl;

/**
 * Implement data type Filter.
 */
class Filter extends PirlDataType {

  protected $fromBlock;
  protected $toBlock;
  protected $address;
  protected $topics;

  /**
   * Constructor.
   */
  public function __construct(PirlBlockParam $fromBlock = NULL, PirlBlockParam $toBlock = NULL, PirlData $address = NULL, array  $topics = NULL) {
    $this->fromBlock = $fromBlock;  
    $this->toBlock = $toBlock;  
    $this->address = $address;  
    $this->topics = $topics; 
  }

  public function setFromBlock(PirlBlockParam $value){
    if (is_object($value) && is_a($value, 'PirlBlockParam')) {
      $this->fromBlock = $value;
    }
    else {
      $this->fromBlock = new PirlBlockParam($value);
    }
  }

  public function setToBlock(PirlBlockParam $value){
    if (is_object($value) && is_a($value, 'PirlBlockParam')) {
      $this->toBlock = $value;
    }
    else {
      $this->toBlock = new PirlBlockParam($value);
    }
  }

  public function setAddress(PirlData $value){
    if (is_object($value) && is_a($value, 'PirlData')) {
      $this->address = $value;
    }
    else {
      $this->address = new PirlData($value);
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
    return 'Filter';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->fromBlock)) ? $return['fromBlock'] = $this->fromBlock->hexVal() : NULL; 
      (!is_null($this->toBlock)) ? $return['toBlock'] = $this->toBlock->hexVal() : NULL; 
      (!is_null($this->address)) ? $return['address'] = $this->address->hexVal() : NULL; 
      (!is_null($this->topics)) ? $return['topics'] = PirlStatic::valueArray($this->topics, 'D') : array(); 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'fromBlock' => 'PirlBlockParam',
      'toBlock' => 'PirlBlockParam',
      'address' => 'PirlData',
      'topics' => 'PirlD',
    );
  }
}