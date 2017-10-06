<?php

namespace Pirl;

/**
 * Implement data type SHHFilter.
 */
class SHHFilter extends PirlDataType {

  protected $topics;
  protected $to;

  /**
   * Constructor.
   */
  public function __construct(array  $topics, PirlD $to = NULL) {
    $this->topics = $topics;  
    $this->to = $to; 
  }

  public function setTopics(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->topics = $value;
    }
    else {
      $this->topics = new PirlD($value);
    }
  }

  public function setTo(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->to = $value;
    }
    else {
      $this->to = new PirlD($value);
    }
  }



  public function getType() {
    return 'SHHFilter';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->topics)) ? $return['topics'] = PirlStatic::valueArray($this->topics, 'D') : array(); 
      (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL; 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'topics' => 'PirlD',
      'to' => 'PirlD',
    );
  }
}