<?php

namespace Pirl;

/**
 * Implement data type SHHMessage.
 */
class SHHMessage extends PirlDataType {

  protected $hash;
  protected $from;
  protected $to;
  protected $expiry;
  protected $ttl;
  protected $sent;
  protected $topics;
  protected $payload;
  protected $workProved;

  /**
   * Constructor.
   */
  public function __construct(PirlD $hash = NULL, PirlD $from = NULL, PirlD $to = NULL, PirlQ $expiry = NULL, PirlQ $ttl = NULL, PirlQ $sent = NULL, array  $topics = NULL, PirlD $payload = NULL, PirlQ $workProved = NULL) {
    $this->hash = $hash;  
    $this->from = $from;  
    $this->to = $to;  
    $this->expiry = $expiry;  
    $this->ttl = $ttl;  
    $this->sent = $sent;  
    $this->topics = $topics;  
    $this->payload = $payload;  
    $this->workProved = $workProved; 
  }

  public function setHash(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->hash = $value;
    }
    else {
      $this->hash = new PirlD($value);
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

  public function setExpiry(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->expiry = $value;
    }
    else {
      $this->expiry = new PirlQ($value);
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

  public function setSent(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->sent = $value;
    }
    else {
      $this->sent = new PirlQ($value);
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

  public function setPayload(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->payload = $value;
    }
    else {
      $this->payload = new PirlD($value);
    }
  }

  public function setWorkProved(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->workProved = $value;
    }
    else {
      $this->workProved = new PirlQ($value);
    }
  }



  public function getType() {
    return 'SHHMessage';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->hash)) ? $return['hash'] = $this->hash->hexVal() : NULL; 
      (!is_null($this->from)) ? $return['from'] = $this->from->hexVal() : NULL; 
      (!is_null($this->to)) ? $return['to'] = $this->to->hexVal() : NULL; 
      (!is_null($this->expiry)) ? $return['expiry'] = $this->expiry->hexVal() : NULL; 
      (!is_null($this->ttl)) ? $return['ttl'] = $this->ttl->hexVal() : NULL; 
      (!is_null($this->sent)) ? $return['sent'] = $this->sent->hexVal() : NULL; 
      (!is_null($this->topics)) ? $return['topics'] = PirlStatic::valueArray($this->topics, 'D') : array(); 
      (!is_null($this->payload)) ? $return['payload'] = $this->payload->hexVal() : NULL; 
      (!is_null($this->workProved)) ? $return['workProved'] = $this->workProved->hexVal() : NULL; 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'hash' => 'PirlD',
      'from' => 'PirlD',
      'to' => 'PirlD',
      'expiry' => 'PirlQ',
      'ttl' => 'PirlQ',
      'sent' => 'PirlQ',
      'topics' => 'PirlD',
      'payload' => 'PirlD',
      'workProved' => 'PirlQ',
    );
  }
}