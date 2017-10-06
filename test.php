<?php

require_once './includes.inc.php';

require_once './src/PirlFilter.generated.php';
require_once './src/PirlTransaction.generated.php';


$quantity = new PirlQ();
$quantity->set('0x0000000000000000000000000000001');
printMe ('Setting and getting 1 at PirlQ()', $quantity->getHexVal());


$block = new PirlBlockParam();
$quantity->set('0xe4c2c112df6f03cd629ab5e66792b7a4b86a64c3971c0e24764d3e9f68f7cd64');

$filter = new Filter($block);
$filter->set($block, 'fromBlock');

// This should throw an InvalidArgumentException:
// $X->set('fromBlock', 'hello');

printMe ('Filter toArray()', $filter->toArray());


$hash = new PirlD32();
$hash->set('0xe4c2c112df6f03cd629ab5e66792b7a4b86a64c3971c0e24764d3e9f68f7cd64');
$tx = new Transaction($hash);

printMe ('Transaction toArray()', $tx->toArray());
