<?php


use Pirl\PirlQ;
use Pirl\PirlB;

/**
 *
 */
class PirlStaticTestPirlB extends \PHPUnit_Framework_TestCase {

  /**
   * Testing quantities.
   */
  public function testPirlB__int_with_abi() {
    $x = new PirlB(1, array('abi' => 'bool'));
    $this->assertSame($x->getType($schema = FALSE), "PirlB");
    $this->assertSame($x->getType($schema = TRUE), "B");
    $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
    $this->assertSame($x->val(), TRUE);
  }

  public function testPirlB__int() {
    $x = new PirlB(1);
    $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
    $this->assertSame($x->val(), TRUE);
  }

  public function testPirlB__int_null() {
    $x = new PirlB(0);
    $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000000');
    $this->assertSame($x->val(), FALSE);
  }


  public function testPirlB__bool_true() {

    $x = new PirlB(TRUE, array('abi' => 'bool'));

    $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
    $this->assertSame($x->val(), TRUE);
  }

  public function testPirlB__bool_false() {
    $x = new PirlB(FALSE, array('abi' => 'bool'));
    $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000000');
    $this->assertSame($x->val(), FALSE);
  }

  public function testPirlB__hex_false() {
    $x = new PirlB('0x0000000000000000000000000000000000000000000000000000000000000000');
    $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000000');
    $this->assertSame($x->val(), FALSE);
  }

  public function testPirlB__hex_TRUE() {
    $x = new PirlB('0x0000000000000000000000000000000000000000000000000000000000000001', array('abi'=> 'bool'));
    $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
    $this->assertSame($x->val(), TRUE);
  }

}
