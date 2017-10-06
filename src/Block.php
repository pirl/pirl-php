<?php

namespace Pirl;

/**
 * Implement data type Block.
 */
class Block extends PirlDataType {

  protected $number;
  protected $hash;
  protected $parentHash;
  protected $nonce;
  protected $sha3Uncles;
  protected $logsBloom;
  protected $transactionsRoot;
  protected $stateRoot;
  protected $receiptsRoot;
  protected $miner;
  protected $difficulty;
  protected $totalDifficulty;
  protected $extraData;
  protected $size;
  protected $gasLimit;
  protected $gasUsed;
  protected $timestamp;
  protected $transactions;
  protected $uncles;

  /**
   * Constructor.
   */
  public function __construct(PirlQ $number = NULL, PirlD32 $hash = NULL, PirlD32 $parentHash = NULL, PirlD $nonce = NULL, PirlD $sha3Uncles = NULL, PirlD $logsBloom = NULL, PirlD $transactionsRoot = NULL, PirlD $stateRoot = NULL, PirlD $receiptsRoot = NULL, PirlD $miner = NULL, PirlQ $difficulty = NULL, PirlQ $totalDifficulty = NULL, PirlD $extraData = NULL, PirlQ $size = NULL, PirlQ $gasLimit = NULL, PirlQ $gasUsed = NULL, PirlQ $timestamp = NULL, array  $transactions = NULL, array  $uncles = NULL) {
    $this->number = $number;  
    $this->hash = $hash;  
    $this->parentHash = $parentHash;  
    $this->nonce = $nonce;  
    $this->sha3Uncles = $sha3Uncles;  
    $this->logsBloom = $logsBloom;  
    $this->transactionsRoot = $transactionsRoot;  
    $this->stateRoot = $stateRoot;  
    $this->receiptsRoot = $receiptsRoot;  
    $this->miner = $miner;  
    $this->difficulty = $difficulty;  
    $this->totalDifficulty = $totalDifficulty;  
    $this->extraData = $extraData;  
    $this->size = $size;  
    $this->gasLimit = $gasLimit;  
    $this->gasUsed = $gasUsed;  
    $this->timestamp = $timestamp;  
    $this->transactions = $transactions;  
    $this->uncles = $uncles; 
  }

  public function setNumber(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->number = $value;
    }
    else {
      $this->number = new PirlQ($value);
    }
  }

  public function setHash(PirlD32 $value){
    if (is_object($value) && is_a($value, 'PirlD32')) {
      $this->hash = $value;
    }
    else {
      $this->hash = new PirlD32($value);
    }
  }

  public function setParentHash(PirlD32 $value){
    if (is_object($value) && is_a($value, 'PirlD32')) {
      $this->parentHash = $value;
    }
    else {
      $this->parentHash = new PirlD32($value);
    }
  }

  public function setNonce(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->nonce = $value;
    }
    else {
      $this->nonce = new PirlD($value);
    }
  }

  public function setSha3Uncles(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->sha3Uncles = $value;
    }
    else {
      $this->sha3Uncles = new PirlD($value);
    }
  }

  public function setLogsBloom(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->logsBloom = $value;
    }
    else {
      $this->logsBloom = new PirlD($value);
    }
  }

  public function setTransactionsRoot(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->transactionsRoot = $value;
    }
    else {
      $this->transactionsRoot = new PirlD($value);
    }
  }

  public function setStateRoot(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->stateRoot = $value;
    }
    else {
      $this->stateRoot = new PirlD($value);
    }
  }

  public function setReceiptsRoot(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->receiptsRoot = $value;
    }
    else {
      $this->receiptsRoot = new PirlD($value);
    }
  }

  public function setMiner(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->miner = $value;
    }
    else {
      $this->miner = new PirlD($value);
    }
  }

  public function setDifficulty(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->difficulty = $value;
    }
    else {
      $this->difficulty = new PirlQ($value);
    }
  }

  public function setTotalDifficulty(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->totalDifficulty = $value;
    }
    else {
      $this->totalDifficulty = new PirlQ($value);
    }
  }

  public function setExtraData(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->extraData = $value;
    }
    else {
      $this->extraData = new PirlD($value);
    }
  }

  public function setSize(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->size = $value;
    }
    else {
      $this->size = new PirlQ($value);
    }
  }

  public function setGasLimit(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->gasLimit = $value;
    }
    else {
      $this->gasLimit = new PirlQ($value);
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

  public function setTimestamp(PirlQ $value){
    if (is_object($value) && is_a($value, 'PirlQ')) {
      $this->timestamp = $value;
    }
    else {
      $this->timestamp = new PirlQ($value);
    }
  }

  public function setTransactions(Transaction $value){
    if (is_object($value) && is_a($value, 'Transaction')) {
      $this->transactions = $value;
    }
    else {
      $this->transactions = new Transaction($value);
    }
  }

  public function setUncles(PirlD $value){
    if (is_object($value) && is_a($value, 'PirlD')) {
      $this->uncles = $value;
    }
    else {
      $this->uncles = new PirlD($value);
    }
  }



  public function getType() {
    return 'Block';
  }

  public function toArray() {
    $return = array();
      (!is_null($this->number)) ? $return['number'] = $this->number->hexVal() : NULL; 
      (!is_null($this->hash)) ? $return['hash'] = $this->hash->hexVal() : NULL; 
      (!is_null($this->parentHash)) ? $return['parentHash'] = $this->parentHash->hexVal() : NULL; 
      (!is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexVal() : NULL; 
      (!is_null($this->sha3Uncles)) ? $return['sha3Uncles'] = $this->sha3Uncles->hexVal() : NULL; 
      (!is_null($this->logsBloom)) ? $return['logsBloom'] = $this->logsBloom->hexVal() : NULL; 
      (!is_null($this->transactionsRoot)) ? $return['transactionsRoot'] = $this->transactionsRoot->hexVal() : NULL; 
      (!is_null($this->stateRoot)) ? $return['stateRoot'] = $this->stateRoot->hexVal() : NULL; 
      (!is_null($this->receiptsRoot)) ? $return['receiptsRoot'] = $this->receiptsRoot->hexVal() : NULL; 
      (!is_null($this->miner)) ? $return['miner'] = $this->miner->hexVal() : NULL; 
      (!is_null($this->difficulty)) ? $return['difficulty'] = $this->difficulty->hexVal() : NULL; 
      (!is_null($this->totalDifficulty)) ? $return['totalDifficulty'] = $this->totalDifficulty->hexVal() : NULL; 
      (!is_null($this->extraData)) ? $return['extraData'] = $this->extraData->hexVal() : NULL; 
      (!is_null($this->size)) ? $return['size'] = $this->size->hexVal() : NULL; 
      (!is_null($this->gasLimit)) ? $return['gasLimit'] = $this->gasLimit->hexVal() : NULL; 
      (!is_null($this->gasUsed)) ? $return['gasUsed'] = $this->gasUsed->hexVal() : NULL; 
      (!is_null($this->timestamp)) ? $return['timestamp'] = $this->timestamp->hexVal() : NULL; 
      (!is_null($this->transactions)) ? $return['transactions'] = PirlStatic::valueArray($this->transactions, 'DATA|Transaction') : array(); 
      (!is_null($this->uncles)) ? $return['uncles'] = PirlStatic::valueArray($this->uncles, 'D') : array(); 
    return $return;
  }
 /**
  * Returns a name => type array.
  */
  public static function getTypeArray() {
    return array( 
      'number' => 'PirlQ',
      'hash' => 'PirlD32',
      'parentHash' => 'PirlD32',
      'nonce' => 'PirlD',
      'sha3Uncles' => 'PirlD',
      'logsBloom' => 'PirlD',
      'transactionsRoot' => 'PirlD',
      'stateRoot' => 'PirlD',
      'receiptsRoot' => 'PirlD',
      'miner' => 'PirlD',
      'difficulty' => 'PirlQ',
      'totalDifficulty' => 'PirlQ',
      'extraData' => 'PirlD',
      'size' => 'PirlQ',
      'gasLimit' => 'PirlQ',
      'gasUsed' => 'PirlQ',
      'timestamp' => 'PirlQ',
      'transactions' => 'Transaction',
      'uncles' => 'PirlD',
    );
  }
}