<?php


use Pirl\PirlD20;

/**
 *
 */
class PirlStaticTestPirlD20 extends \PHPUnit_Framework_TestCase {

  /**
   * Testing quantities.
   */
  public function testPirlD20__simple() {

    $x = new PirlD20('0x3facfa472e86e3edaeaa837f6ba038ac01f7f539');
    $this->assertSame($x->val(), '3facfa472e86e3edaeaa837f6ba038ac01f7f539');
    $this->assertSame($x->hexVal(), '0x3facfa472e86e3edaeaa837f6ba038ac01f7f539');

    $this->assertSame($x->getType($schema = FALSE), "PirlD20");
    $this->assertSame($x->getType($schema = TRUE), "D20");
  }

  // Made to Fail.
  public function testPirlQ__invalidLengthTooLong() {
    try {
      new PirlD20('0x3facfa472e86e3edaeaa837f6ba038ac01f7f53989');
      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
    }
    catch (\Exception $exception) {
      $this->assertTrue(strpos($exception->getMessage(), "Invalid length") !== FALSE);
    }
  }

  public function testPirlQ__invalidLengthShort() {

    try {
      new PirlD20('0x0');
      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
    }
    catch (\Exception $exception) {
      $this->assertTrue(strpos($exception->getMessage(), "Invalid length") !== FALSE);
    }
  }

  public function testPirlQ__notHexPrefixed() {
    $this->setExpectedException(Exception::class);
    new PirlD20('4f1116b6e1a6e963efffa30c0a8541075cc51c45');
  }

  public function testPirlQ__notHex() {
    try {
      $val = '0xyz116b6e1a6e963efffa30c0a8541075cc51c45';
      $exception_message_expected = 'A non well formed hex value encountered: ' . $val;
      new PirlD20($val);
      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
    }
    catch (\Exception $exception) {
      $this->assertEquals($exception->getMessage(), $exception_message_expected);
    }
  }

}
