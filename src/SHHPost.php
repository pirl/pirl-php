<?php

namespace Pirl;

/**
 * Implement data type SHHPost.
 */
class SHHPost extends PirlDataType {

  protected $topics;
  protected $payload;
  protected $priority;
  protected $ttl;
  protected $from;
  protected $to;

  /**
   * Constructor.
   */
  public function __construct(array  $topics, PirlD $payload, PirlQ $priority, PirlQ $ttl, PirlD $from = NULL, PirlD $to = NULL) {
    $this->topics = $topics;  
    $this->payload = $payload;  
    $this->priority = $priority;  
    $this->ttl = $ttl;  
    $this->from = $from;  
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

  public function setPayload(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->payload = $value;
    }
    else {
      $this->payload = new PirlD($value);
    }
  }

  public function setPriority(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->priority = $value;
    }
    else {
      $this->priority = new PirlQ($value);
    }
  }

  public function setTtl(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->ttl = $value;
    }
    else {
      $this->ttl = new PirlQ($value);
    }
  }

  public function setFrom(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->from = $value;
    }
    else {
      $this->from = new PirlD($value);
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
    return 'SHHPost';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->topics)) ? $return['topics'] = PirlStatic::valueArray($this->topics, 'D') : array(); 
      (!is_null($this->payload)) ? $return['payload'] = $this->payload->hexVal() : NULL; 
      (!is_null($this->priority)) ? $return['priority'] = $this->priority->hexVal() : NULL; 
      (!is_null($this->ttl)) ? $return['ttl'] = $this->ttl->hexVal() : NULL; 
      (!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : NULL; 
      (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL; 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'topics' => 'PirlD',
      'payload' => 'PirlD',
      'priority' => 'PirlQ',
      'ttl' => 'PirlQ',
      'from' => 'PirlD',
      'to' => 'PirlD',
    );
  }
}