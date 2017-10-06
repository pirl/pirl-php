<?php

/**
 * Workaround for net_listening().
 *
 * In some cases Pirl Clients (like pirl, ) have differing
 * return values.
 */

function pirl_workaround_net_listening($val) {
  // WORKAROUND: pirl_protocolVersion is NULL: Probably testrpc.
  if ($val == 'true') {
    return '0x0000000000000000000000000000000000000000000000000000000000000001';
  }
  else {
    return $val;
  }
}
