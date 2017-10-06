<?php

$schema = json_decode(file_get_contents("./pirljs-schema.json"), true);


require_once './formatHelper.php';

require_once 'src/PirlStatic.php';

require_once 'src/Pirl.php';

require_once 'src/PirlDataType.php';
require_once 'src/PirlDataTypePrimitive.php';

require_once 'src/PirlD.php';
require_once 'src/PirlD20.php';
require_once 'src/PirlD32.php';
require_once 'src/PirlS.php';
require_once 'src/PirlQ.php';
require_once 'src/PirlB.php';
require_once 'src/PirlBlockParam.php';
require_once 'src/PirlData.php';