<?php


use Pirl\PirlBlockParam;

/**
 *
 */
class PirlStaticTestPirlBlockParam extends \PHPUnit_Framework_TestCase {

  /**
   * Testing quantities.
   */
  public function testPirlBlockParam__address() {

    $x = new PirlBlockParam('0x3facfa472e86e3edaeaa837f6ba038ac01f7f539');
    $this->assertSame($x->val(), '3facfa472e86e3edaeaa837f6ba038ac01f7f539');
    $this->assertSame($x->hexVal(), '0x3facfa472e86e3edaeaa837f6ba038ac01f7f539');

    $this->assertSame($x->getType($schema = FALSE), "PirlBlockParam");
    $this->assertSame($x->getType($schema = TRUE), "Q|T");
  }

  public function testPirlBlockParam__tagLatest() {

    $x = new PirlBlockParam('latest');
    $this->assertSame($x->val(), 'latest');
    $this->assertSame($x->hexVal(), 'latest');
  }

  public function testPirlBlockParam__tagPending() {

    $x = new PirlBlockParam('pending');
    $this->assertSame($x->val(), 'pending');
    $this->assertSame($x->hexVal(), 'pending');
  }

  public function testPirlBlockParam__tagErliest() {

    $x = new PirlBlockParam('earliest');
    $this->assertSame($x->val(), 'earliest');
    $this->assertSame($x->hexVal(), 'earliest');
  }

  // Made to Fail.
//  public function testPirlQ__invalidLengthTooLong() {
//    try {
//      new PirlBlockParam('0x3facfa472e86e3edaeaa837f6ba038ac01f7f53989');
//      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
//    }
//    catch (\Exception $exception) {
//      $this->assertTrue(strpos($exception->getMessage(), "Invalid length") !== FALSE);
//    }
//  }
//
//  public function testPirlQ__invalidLengthShort() {
//
//    try {
//      new PirlBlockParam('0x0');
//      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
//    }
//    catch (\Exception $exception) {
//      $this->assertTrue(strpos($exception->getMessage(), "Invalid length") !== FALSE);
//    }
//  }
//
//  public function testPirlQ__notHexPrefixed() {
//    $this->setExpectedException(Exception::class);
//    new PirlBlockParam('4f1116b6e1a6e963efffa30c0a8541075cc51c45');
//  }
//
//  public function testPirlQ__notHex() {
//    try {
//      $exception_message_expected = 'A non well formed numeric value encountered';
//      new PirlBlockParam('0xyz116b6e1a6e963efffa30c0a8541075cc51c45');
//      $this->fail("Expected exception '" . $exception_message_expected . "' not thrown");
//    }
//    catch (\Exception $exception) {
//      $this->assertEquals($exception->getMessage(), $exception_message_expected);
//    }
//  }

}
