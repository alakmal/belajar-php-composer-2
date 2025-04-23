<?php

use Alyou\BelajarPhpComposerLibrary\Belajar\Customer;

require_once __DIR__ . "/vendor/autoload.php";


$customer = new Customer("Akmal");

echo $customer->sayHello();