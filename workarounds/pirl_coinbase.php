<?php

/**
 * Workaround for pirl_coinbase().
 *
 * In some cases Pirl Clients (like pirl, ) have differing
 * return values.
 */

function pirl_workaround_pirl_coinbase($val) {
  // WORKAROUND: Catch a "405 Method Not Allowed'.
  if (isset($val['error']) && $val['error'] && $val['code'] == 405) {
    return '0x0000000000000000000000000000000000000000';
  }
  else {
    return $val;
  }
}
