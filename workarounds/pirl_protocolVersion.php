<?php

/**
 * Workaround for pirl_protocolVersion().
 *
 * In some cases Pirl Clients (like pirl, ) have differing
 * return values.
 */

function pirl_workaround_pirl_protocolVersion($val) {
  // WORKAROUND: pirl_protocolVersion is NULL: Probably testrpc.
  if (is_null($val)) {
    return \Pirl\PirlStatic::strToHex('testrpc');
  }
  else {
    return $val;
  }
}
