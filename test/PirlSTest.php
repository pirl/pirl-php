<?php


use Pirl\PirlS;

/**
 *
 */
class PirlStaticTestPirlS extends \PHPUnit_Framework_TestCase {

  /**
   * This test is bases data by http://codebeautify.org/hex-string-converter.
   */
  public function testPirlS__types() {

    $x = new PirlS('Hello World');
    $this->assertEquals($x->val(), "Hello World");

    $this->assertEquals($x->getType($schema = FALSE), "PirlS");
    $this->assertEquals($x->getType($schema = TRUE), "S");
  }

  public function testPirlS__hexToString() {

    $x = new PirlS('0x48656c6c6f20576f726c64');
    $this->assertEquals($x->val(), "Hello World");
  }

  public function testPirlS__stringToHex() {

    $x = new PirlS("Hello World");
    $this->assertEquals($x->hexVal(), '0x48656c6c6f20576f726c64');
  }

}
