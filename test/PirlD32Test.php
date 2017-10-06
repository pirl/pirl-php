<?php


use Pirl\PirlD32;

/**
 *
 */
class PirlStaticTestPirlD32 extends \PHPUnit_Framework_TestCase {

  /**
   * Testing quantities.
   */
  public function testPirlD32__simple() {

    $x = new PirlD32('0xf79e7980a566fec5caf9cf368abb227e537999998541bad324f61cf2906fbacd');
    $this->assertSame($x->val(), 'f79e7980a566fec5caf9cf368abb227e537999998541bad324f61cf2906fbacd');
    $this->assertSame($x->hexVal(), '0xf79e7980a566fec5caf9cf368abb227e537999998541bad324f61cf2906fbacd');

    $this->assertSame($x->getType($schema = FALSE), "PirlD32");
    $this->assertSame($x->getType($schema = TRUE), "D32");
  }

  // Made to Fail.
  public function testPirlQ__invalidLengthTooLong() {
    try {
      new PirlD32('0xf79e7980a566fec5caf9cf368abb227e537999998541bad324f61cf2906fbacd86');
      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
    }
    catch (\Exception $exception) {
      $this->assertTrue(strpos($exception->getMessage(), "Invalid length") !== FALSE);
    }
  }

  public function testPirlQ__invalidLengthShort() {

    try {
      new PirlD32('0x0');
      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
    }
    catch (\Exception $exception) {
      $this->assertTrue(strpos($exception->getMessage(), "Invalid length") !== FALSE);
    }
  }

  public function testPirlQ__notHexPrefixed() {
    $this->setExpectedException(Exception::class);
    new PirlD32('f79e7980a566fec5caf9cf368abb227e537999998541bad324f61cf2906fbacd');
  }

  public function testPirlQ__notHex() {
    try {
      $val = '0xyz116b6e1a6e963efffa30c0a8541075cc51c45';
      $exception_message_expected = 'A non well formed hex value encountered: ' . $val;
      new PirlD32($val);
      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
    }
    catch (\Exception $exception) {
      $this->assertEquals($exception->getMessage(), $exception_message_expected);
    }
  }

}
