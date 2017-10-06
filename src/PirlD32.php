<?php

namespace Pirl;

/**
 * Byte data, length 32.
 *
 * Represents 64 hex characters, 256 bits. Eg. TX hash.
 */
class PirlD32 extends PirlD {

  /**
   * Implement validation.
   *
   * @param string $val
   *   Hexadecimal "0x"prefixed  byte value.
   *
   * @throws \Exception
   *   If things are wrong.
   *
   * @return string
   *   Validated D20 value.
   */
  public function validateLength($val) {

    if (strlen($val) === 66) {
      return $val;
    }
    else {
      throw new \InvalidArgumentException('Invalid length for hex binary: ' . $val);
    }
  }

}
