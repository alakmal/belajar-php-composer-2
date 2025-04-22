<?php

use Alakmal\BelajarPhpComposer2\Data\People;

require_once __DIR__ . "/vendor/autoload.php";


$people = new People("Akmal");

echo $people->sayHello("Budi");