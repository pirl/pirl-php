<?php

namespace Pirl;

/**
 * Implement data type PirlSyncing.
 */
class PirlSyncing extends PirlDataType {

  protected $startingBlock;
  protected $currentBlock;
  protected $highestBlock;

  /**
   * Constructor.
   */
  public function __construct(PirlQ $startingBlock = NULL, PirlQ $currentBlock = NULL, PirlQ $highestBlock = NULL) {
    $this->startingBlock = $startingBlock;  
    $this->currentBlock = $currentBlock;  
    $this->highestBlock = $highestBlock; 
  }

  public function setStartingBlock(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->startingBlock = $value;
    }
    else {
      $this->startingBlock = new PirlQ($value);
    }
  }

  public function setCurrentBlock(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->currentBlock = $value;
    }
    else {
      $this->currentBlock = new PirlQ($value);
    }
  }

  public function setHighestBlock(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->highestBlock = $value;
    }
    else {
      $this->highestBlock = new PirlQ($value);
    }
  }



  public function getType() {
    return 'PirlSyncing';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->startingBlock)) ? $return['startingBlock'] = $this->startingBlock->hexVal() : NULL; 
      (!is_null($this->currentBlock)) ? $return['currentBlock'] = $this->currentBlock->hexVal() : NULL; 
      (!is_null($this->highestBlock)) ? $return['highestBlock'] = $this->highestBlock->hexVal() : NULL; 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'startingBlock' => 'PirlQ',
      'currentBlock' => 'PirlQ',
      'highestBlock' => 'PirlQ',
    );
  }
}